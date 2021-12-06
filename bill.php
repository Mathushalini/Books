<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <button type="submit" class="registerbtn"name="view">view</button><br><br>
    </form>

 if(isset($_POST['view'])){
    $connection=new mysqli('localhost','root','','bookorder');
    if($connection->connect_errno){
      echo $connection->connect_error;
      die();
    }else{
    $sql = "SELECT * FROM orderbook";

    $output=$connection->query($sql);
    if($output->num_rows>0){
     while($row=$output->fetch_assoc()){
        echo"customer name is :.'$row[custname]'.<br>
        customer Phone number is :.'$row[phoneno]'.<br>
        customer Address is :.'$row[address]'.<br>
        customer Book ID is :.'$row[bookid]'.<br> <br><br>"; 
    
    }
    }else{
      echo "0 result";
  }
 
   }
  }
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float:right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<form action="" method="POST">
  <div class="container">
    <h1>BUY A BOOK</h1>
   
    <hr>

    <label for="Name"><b>CustomerName</b></label>
    <input type="text" placeholder="Enter Your Name" name="Name" id="Name" >
    <label for="number"><b>Book Name</b></label>
    <input type="text" placeholder="Enter Your phone no" name="Bname" id="number" >

    <label for="Address"><b>Book ID</b></label>
    <input type="text" placeholder="Enter Your Address" name="id" id="address" >

    <label for="bookid"><b>Amount</b></label>
    <input type="text" placeholder="Enter Your bookid " name="amount" id="name" >
    
    <label for="bookid"><b>Quantity</b></label>
    <input type="text" placeholder="Enter Your bookid " name="qua" id="name" >
    <hr>
  
    <button type="submit" class="registerbtn"name="submit">Buy</button><br><br>
   
 
    <?php
    //  include_once('dbconnection.php');
   
     if(isset($_POST["submit"])){                                                           

        $custname = $_POST["Name"];
        $bookname = $_POST["Bname"];
        $bookid = $_POST["id"];
        $amount= $_POST["amount"];
        $Quantity= $_POST["qua"];

        if(Empty($custname)||Empty($bookname)||Empty($bookid)||Empty($amount)||Empty($Quantity)){
            echo "fill in all Fields";

        }else{
          error_reporting(0);
         $connection=new mysqli('localhost','root','','bookorder');
         if($connection->connect_errno){
           echo $connection->connect_error;
           die();
         }
         else{
           $sql="INSERT INTO mathu(cname,bname,b_id,amount,qua)VALUES('$custname','$bookname','$bookid','$amount','$Quantity')";
           if($connection->query($sql)){
            
            $delevery=150;
            $total=0;
            $total=$amount*$Quantity+$delevery;
            echo"customer Name IS : .'$custname'.<br>
            Book Name IS : .' $bookname'.<br>
            Book ID IS : .' $bookid'.<br>
            Book Amount IS : .' $amount'.<br>
            Book Quantity IS : .' $Quantity'.<br>
            Book Delivery Charge IS : .' $delevery'.<br>
            Book Total IS : .' $total'.<br><hr>
            
            THANK YOU COME AGAIN";
           }
           else{
             echo 'error';
           }
         }
           


        }


     }
    
    
    ?>
   
  </div>
  

</form>
</body>
</html>