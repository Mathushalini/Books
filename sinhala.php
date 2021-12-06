<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:grey;
            background-repeat:no-repeat;
            width:100%;
            height:100%;
            background-position:center;
            background-size:cover;
        }
        
.container {
  position: relative;
  width: 25%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

    </style>
</head>
<body>
<h2>Ready to pick</h2>
<p>A room without a book is like a body without a soul.</p>

<button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book11.jpg" alt="Avatar" class="image">
 
    bookid:S1<br>price:500/=
  
</div><br><br>
<button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book20.jpg" alt="Avatar" class="image">
  
 bookid:S2<br>price:500/=
    <!-- <div class="text"><a href="">Hello World</a></div> -->
 
</div><br><br>
<button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book21.jpg" alt="Avatar" class="image">
  
  bookid:S3<br>price:600/=
    <!-- <div class="text"><a href="">Hello World</a></div> -->
  
</div><br><br>
<button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book22.jpg" alt="Avatar" class="image">
  
  bookid:S4<br>price:670/=
    <!-- <div class="text"><a href="">Hello World</a></div> -->
  </div><br><br>
  <button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book23.jpg" alt="Avatar" class="image">
  
 bookid:S5<br>price:700/=
    <!-- <div class="text"><a href="">Hello World</a></div> -->
  </div><br><br>
  <button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book29.jpg" alt="Avatar" class="image">
  
 bookid:S6<br>price:650/=
    <!-- <div class="text"><a href="">Hello World</a></div> -->
  </div><br><br>
  <button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book30.jpg" alt="Avatar" class="image">
  
  bookid:S7 <br>price:600/=
    <!-- <div class="text"><a href="">Hello World</a></div> -->
  
</div><br><br>
  <button><a href="http://localhost/books/register.php">order now</a></button><br>
<div class="container">
  <img src="book31.jpg" alt="Avatar" class="image">
  
  bookid:S8<br>price:600/=
    <!-- <div class="text"><a href="">Hello World</a></div> -->
</div>
</body>
</html>