<?php   
 include 'connection.php';  


 if(isset($_GET['id'])){

    $id=$_GET['id'];
    $delete=mysqli_query($connection, "DELETE FROM `test1` WHERE `id`='$id'");
 }
 $select = "select * from test1";  
 $query = mysqli_query($connection,$select);  



 ?>


<!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data</title>  
      <link rel="stylesheet" type="text/css" href="deletestyle.css">  
 </head>  
 <body>  
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
      <th>ID</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Diploma ID</th>
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($query)>0) {  
                while ($result = mysqli_fetch_assoc($query)) {  
                     echo "  
                          <tr class='data'>  
                         
                               <td>".$result['id']."</td>  
                               <td>".$result['student_id']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['address']."</td>  
                               <td>".$result['diploma_id']."</td>  
                                 
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                               <td><a href='index.php?id=".$result['id']."' id='btn'>Home</a></td>  
                          </tr>  
                     ";  
                }  
           }  

           
      ?>  
 </table>  
 </body>  
 </html>