<!DOCTYPE html> <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <title>مقایسه دو محصول</title>
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
     <body>
        <style>
            body {
                background-color: #f0f0f0;
            }
        </style>

        <div class="container">
             <h1 class="text-center my-5">مقایسه دو محصول</h1>
             <div class="row">
                <div class="col-md-6 offset-md-3">
                     <form method="get" action="{{ route('compare') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="product1" class="form-label">محصول اول:</label>
                            <input type="text" class="form-control" id="product1" name="product1" required>
                         </div> <div class="mb-3">
                            <label for="product2" class="form-label">محصول دوم:</label>
                            <input type="text" class="form-control" id="product2" name="product2" required>
                        </div>
                          <button type="submit" class="btn btn-primary">مقایسه</button>
                          <a href="{{ URL::to('products') }}" class="btn btn-secondary">مشاهده همه محصولات</a>
                        </form>
                    </div>
                 </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
             </body>

             </html>
