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
            <div id="DVD">
                <label for="size">Size (MB)</label>
                <input type="number" name="size" id="size">
                <p>*Please provide size*</p>
            </div>
            <div id="Book">
                <label for="weight">Weight (KG)</label>
                <input type="number" name="weight" id="weight">
                <p>*Please provide weight*</p>
            </div>
            <div id="Furniture">
                <label for="height">Height (CM)</label>
                <input type="number" name="height" id="height"><br><br>
                <label for="width">Width (CM)</label>
                <input type="number" name="width" id="width"><br><br>
                <label for="length">Length (CM)</label>
                <input type="number" name="length" id="length">
                <p>*Please provide dimensions*</p>
        </div>
        </div>
        <div id="dynamicForm"></div>
    </form>
    <hr>
    <footer>
        <p></p>
    </footer>
</body>
</html>