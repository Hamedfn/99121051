<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title> مقایسه دو محصول</title>
</head>
<body>
<h1>مقایسه دو محصول</h1>

<form method="get" action="{{ route('compare') }}">
    @csrf
    <label>محصول اول : </label>
    <input type="text" name="product1" required><br>
    <label>محصول دوم : </label>
    <input type="text" name="product2" required><br>
    <button type="submit">مقایسه </button>
   <a href="{{ URL::to('products') }}">View All Products</a>
</form>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
