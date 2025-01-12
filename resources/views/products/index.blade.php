<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Unas Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Products Collection</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Short Description</th>
                    <th>Long Description</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>VAT</th>
                    <th>Img</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ htmlspecialchars($product->sku) }}</td>
                        <td>{{ htmlspecialchars($product->name ?? 'N/A') }}</td>
                        <td>{{ htmlspecialchars($product->description_short ?? 'N/A') }}</td>
                        <td>{{ htmlspecialchars($product->description_long ?? 'N/A') }}</td>
                        <td>{{ htmlspecialchars($product->state) }}</td>
                        @php
                        $prices = json_decode($product->prices);
                        $netPrice = isset($prices->price->net) ? $prices->price->net : 'N/A';
                        @endphp
                        
                        <td>{{ htmlspecialchars((string)$netPrice) }}</td>

                        <td>{{ htmlspecialchars(json_decode($product->prices)->vat ?? 'N/A') }}</td>
                        <td>
                            @php
                                // Декодируем JSON и извлекаем массив изображений
                                $images = json_decode($product->images);
                            @endphp
                        
                            @if(isset($images->list) && count($images->list) > 0)
                                <img src="{{ $images->list[0]->sefUrl ?? '' }}" alt="{{ htmlspecialchars($images->default_alt ?? 'Image') }}" width="100">
                            @else
                                <img src="" alt="No Image" width="100">
                            @endif
                        </td>
                        <td>                        
                            <button 
                            class="btn btn-primary btn-sm send-to-shopify"
                            data-sku="{{ htmlspecialchars($product->sku ?? 'No SKU') }}"
                            data-name="{{ htmlspecialchars($product->name ?? 'No Name') }}"
                            data-description="{{ htmlspecialchars($product->description_long ?? 'No Description') }}"
                            data-price="{{ htmlspecialchars(json_decode($product->prices)->price->net ?? '0') }}"
                            data-images='@json(json_decode($product->images)->list ?? [])'
                            
                        >
                            Send to Shopify
                        </button>
                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Модальное окно для статуса -->
    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Status</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="statusMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
document.querySelectorAll('.send-to-shopify').forEach(button => {
    button.addEventListener('click', function() {
        try {
            const images = JSON.parse(this.dataset.images).map(img => ({
                url: img.sefUrl,
                alt: img.alt
            }));
            
            const productData = {
                title: this.dataset.name || 'No title',
                description: this.dataset.description || 'No description',
                price: this.dataset.price || '0',
                sku: this.dataset.sku || 'No SKU',
                quantity: 1,
                product_type: 'Imported',
                images: images
            };

            console.log('Product data before sending:', productData); // Отладка перед отправкой

            fetch('/products/upload', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(productData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    throw new Error(JSON.stringify(data.errors));
                }
                $('#statusMessage').text('Product successfully sent to Shopify!');
                $('#statusModal').modal('show');
            })
            .catch(error => {
                console.error('Full error:', error);
                $('#statusMessage').text('Error sending product to Shopify: ' + error.message);
                $('#statusModal').modal('show');
            });
        } catch (error) {
            console.error('Error in processing:', error);
            $('#statusMessage').text('Error preparing data: ' + error.message);
            $('#statusModal').modal('show');
        }
    });
});

    </script>
</body>
</html>
