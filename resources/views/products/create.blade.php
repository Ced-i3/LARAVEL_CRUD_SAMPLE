<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
</head>

<body>

    <h1>Create a Product</h1>

    <form method="POST" action="{{ route('product.store') }}">

        @csrf

        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{ old('name') }}"/>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="qty" value="{{ old('qty') }}"/>
            @error('qty')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{ old('price') }}"/>
            @error('price')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{ old('description') }}"/>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="submit" value="Save a new Product"/>
        </div>

    </form>

</body>
</html>