<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить продукт</title>
</head>
<body>
    <h1>Добавить продукт</h1>
    <form action="{{ route('upload-product') }}" method="POST">
        @csrf
        <label for="title">Название:</label>
        <input type="text" name="title" required>
        <br>
        
        <label for="body_html">Описание:</label>
        <textarea name="body_html" required></textarea>
        <br>
        
        <label for="vendor">Вендор:</label>
        <input type="text" name="vendor" required>
        <br>
        
        <label for="product_type">Тип продукта:</label>
        <input type="text" name="product_type" required>
        <br>
        
        <label for="tags">Теги:</label>
        <input type="text" name="tags">
        <br>

        <button type="submit">Добавить продукт</button>
    </form>
</body>
</html>
