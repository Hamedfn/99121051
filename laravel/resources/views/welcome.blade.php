<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>مقایسه محصولات فروشگاهی</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #1e90ff;
      color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 30px;
    }
    
    nav {
      background-color: #fff;
      border-bottom: 1px solid #ddd;
      overflow: hidden;
    }
    
    nav a {
      float: right;
      display: block;
      color: #333;
      text-align: center;
      padding: 20px;
      text-decoration: none;
      font-size: 18px;
    }
    
    nav a:hover {
      background-color: #ddd;
    }
    
    section {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    
    section a {
      background-color: #1e90ff;
      color: #fff;
      padding: 15px 30px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 20px;
    }
      
    section a:hover {
      background-color: #fff;
      color: #1e90ff;
    }
    
    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    p {
      font-size: 18px;
      color: #333;
      line-height: 1.5;
    }
    
    footer {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #1e90ff;
      color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <header>
    <h1>مقایسه محصولات فروشگاهی</h1>
  </header>
  
  <nav>
    <a href="#">صفحه اصلی</a>
    <a href="#">درباره ما</a>
    <a href="#">تماس با ما</a>
  </nav>
  
  <section>
    <a href="{{ URL::to('compare') }}">ورود به صفحه مقایسه </a>
  </section>
  
  <footer>
    <p>تمامی حقوق محفوظ است.</بله، تغییراتی که پیشنهاد دادم به صورت CSS هستند و برای اعمال آن‌ها باید کد CSS را به بخش head اضافه کنید. برای مثال، می‌توانید کد زیر را به بخش style اضافه کنید: