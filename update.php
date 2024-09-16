<?php   
 include "connection.php";  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Show Data from database in Table</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                width: 100%;  
                height: 100vh;  
                background-color: #5d6d7d;  
           }  
           table{  
                border-collapse: collapse;  
           }  
           table th{  
                background-color: red;  
                padding: 8px 10px;  
                color: #fff;  
           }  
           table td{  
                background-color: #f3f3f3;  
                padding: 8px 10px;  
                color: #111;  
           }  
           .opt{  
                background-color: orange;  
                color: #fff;  
                font-size: 1em;  
                padding: 5px;  
                text-decoration: none;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table border="1" cellpadding="0">  
           <tr>  
               <th>ID</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Diploma ID</th>
                <th>Action</th>
           </tr>  
           <?php   
                include "connection.php";  
                $select=mysqli_query($connection,"select * from test1");  
                $num=mysqli_num_rows($select);  
                if ($num>0) {  
                     while($result=mysqli_fetch_assoc($select)){  
                          echo "  
                               <tr>  
                               <td>".$result['id']."</td>  
                               <td>".$result['student_id']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['address']."</td>  
                               <td>".$result['diploma_id']."</td>  
                                    <td>  
                                         
                                         <a href='updateform.php?id=".$result['id']."' class='opt'>Edit/Update</a>  
                                         <a href='index.php?id=".$result['id']."' class='opt'>Home</a>  
                                    </td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
 </div>  
 </body>  
 </html>