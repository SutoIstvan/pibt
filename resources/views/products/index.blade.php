<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unas Products</title>
    <!-- Подключение Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
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
            </tr>
        </thead>
        <tbody>
            @foreach($products['Product'] as $product)
                <tr>
                    <td>{{ htmlspecialchars($product['Sku']) }}</td>
                    <td>{{ htmlspecialchars($product['Name']) }}</td>
                    <td>{{ htmlspecialchars($product['ShortDescription']) }}</td>
                    <td>{{ $product['LongDescription'] }}</td>
                    <td>{{ htmlspecialchars($product['State']) }}</td>
                    <td>{{ htmlspecialchars($product['Prices']['Price']['Gross'] ?? 'N/A') }}</td>
                    <td>{{ htmlspecialchars($product['Prices']['Vat'] ?? 'N/A') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>




