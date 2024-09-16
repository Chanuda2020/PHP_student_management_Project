<?php   
 include 'connection.php';  

 $msg="";  
 $student_id="";  
 $name="";  
 $address="";  
 $diploma_id="";  
  
 if (isset($_GET['id'])) {  
      $id=$_GET['id'];  
      $select=mysqli_query($connection,"select * from test1 where id='$id'");  
      $data=mysqli_fetch_assoc($select);  
      $student_id=$data['student_id'];  
      $name=$data['name'];  
      $address=$data['address'];  
      $diploma_id=$data['diploma_id'];  
  
 }  
 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $student_id=$_POST['student_id']; 
      $name=$_POST['name']; 
      $address=$_POST['address']; 
      $diploma_id=$_POST['diploma_id'];  
      
      if (isset($_GET['id'])) {  
           $update=mysqli_query($connection,"UPDATE `test1` SET `student_id`='$student_id', `name`='$name',`address`='$address',`diploma_id`='$diploma_id' WHERE id='$id'");  
           if ($update) {  

            $msg="Data Updated Sucessfully";
                header("location:index.php");  
                die();  
           }  
      }

 }  
 ?>

 
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>CRUDE Operation in PHP MySQLi</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                width: 100%;  
                height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 500px;  
                width: 100%;  
                background-color: #ffff;  
           }  

           .container form{  
                width: 100%;  
                padding: 30px;  
           }  
           .container form .data-insert{  
                width: 100%;  
                padding: 12px 10px;  
                outline: none;  
                border: 1px solid #111;  
                margin: 8px 0px  
           }  
           .container form .sub_btn{  
                width: 100%;  
                padding: 10px 30px;  
                background-color: red;  
                color: #ffff;  
                font-size: 1em;  
                outline: none;  
                border: 0;  
                cursor: pointer;  
           }  
           .container h1{  
                display: block;  
                text-align: center;  
                padding: 15px 0px;  
           }  
      </style>  

 </head>  
 <body>  
 <div class="container">  
      <h1>Data Insert</h1>  
      <form method="post" action="">  
           
           <input type="student_id" name="student_id" placeholder="Enter your student_id" class="data-insert" value="<?php echo $student_id; ?>">  
           <input type="name" name="name" placeholder="Enter your name" class="data-insert" value="<?php echo $name; ?>">  
           <input type="address" name="address" placeholder="Enter your address" class="data-insert" value="<?php echo $address; ?>">  
           <input type="diploma_id" name="diploma_id" placeholder="Enter your diploma_id" class="data-insert" value="<?php echo $diploma_id; ?>">  
           <input type="submit" name="submit" class="sub_btn" value="Submit">  
           <br>  
           <span><?php echo $msg; ?></span>  
      </form>  
 </div>  
 </body>  
 </html>  