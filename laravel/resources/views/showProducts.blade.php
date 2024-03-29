<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">des</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($products as $product)
  <tr>
    <td>{{$product->id}}</td>
    <td>{{$product->title}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->describetion}}</td>
  </tr>
    @endforeach

  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


<!--<form action="addbook" method="post">
    @csrf
<input type="submit" name="submit" value="save">

</form> -->

<a href="{{ route('products.createe') }}" class="btn btn-primary">افزودن محصول جدید</a>


<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">نام محصول:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="image">تصویر محصول:</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
        <label for="description">توضیحات محصول:</label>
        <textarea class="form-control" id="description" name="description"required></textarea>
    </div>
    <div class="form-group">
        <label for="price">قیمت محصول:</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

</body>
</html>
