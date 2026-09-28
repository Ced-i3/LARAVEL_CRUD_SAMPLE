<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>

    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('product.update', $product) }}">

        @csrf
        @method('PUT')

        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{ old('name', $product->name) }}"/>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="qty" value="{{ old('qty', $product->qty) }}"/>
            @error('qty')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{ old('price', $product->price) }}"/>
            @error('price')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{ old('description', $product->description) }}"/>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="submit" value="Update"/>
        </div>

    </form>

</body>
</html>