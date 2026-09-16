<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <table>
        <form action="{{route('produts.updtae', product->$id)}}" method="POST">
            @csrf
            @method('put')
            <tr>
                <td>
                    <label for="name">Product Name</label>
                </td>
                <td>
                    <input type="text" name="productname" id="productname" value="$product->productname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="sku">Sku</label>
                </td>
                <td>
                    <input type="text" name="sku" id="sku" value="$product=>sku" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="category">category</label>
                </td>
                <td>
                    <select name="category" id="category">
                        <option value="cosmatic">Cosmatic</option>
                        <option value="food">Food</option>
                        <option value="medicine">Medicine</option>
                        <option value="drink">Drink</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="price">Price</label>
                </td>
                <td>
                    <input type="text" name="Price" id="Price" value="$product->Price" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="quantity">quantity</label>
                </td>
                <td>
                    <input type="text" name="quantity" id="quantity" value="$product->quantity" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="description">description</label>
                </td>
                <td>
                    <input type="text" name="description" id="description" value="$product->description" required>
                </td>
            </tr>
            <tr>
                <td><button type="submit">Updtae</button></td>
            </tr>
        </form>
    </table>
</body>
</html>
