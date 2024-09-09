<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product add</title>
</head>
<body>
    <header>
        <h1>Product Add</h1>
        <button type="submit" form="product_form">Save</button>
        <button>Cancel</button>
    </header>
    <hr>
    <form action="./add-product.php" method="post" id="product_form">
        <div>
            <label for="sku">SKU</label>
            <input type="text" name="sku" id="sku"><br><br>
            <label for="name">Name</label>
            <input type="text" name="name" id="name"><br><br>
            <label for="price">Price ($)</label>
            <input type="number" name="price" id="price"><br><br>
            <label for="productType">Type Switcher</label>
            <select name="productType" id="productType">
                <option value="empty"></option>
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select><br><br>
        </div>
        <div id="dynamicForm"></div>
    </form>
    <hr>
    <footer>
        <p>Scandiweb Test Assignment</p>
    </footer>
</body>
</html>