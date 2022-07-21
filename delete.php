<?php  
     include 'connection.php';  
     $query = "select * from users";  
     $run = mysqli_query($conn,$query);  
?>  
<?php include('nav.php'); ?>
<!DOCTYPE html>  
<html>  
     <head>  
          <meta charset="utf-8">  
          <title>Delete Data</title>  
          <link rel="stylesheet" href="style.css">  
     </head>  
     <body >   
          <div class="container">
               <h1>users list</h1>
               <br>
               <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                              <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                                   <tr class="heading">  
                                        <th scope="col" class="text-center py-2">Id</th>
                                        <th scope="col" class="text-center py-2">Name</th>
                                        <th scope="col" class="text-center py-2">E-Mail</th>
                                        <th scope="col" class="text-center py-2">Balance</th>
                                        <th scope="col" class="text-center py-2">Operation</th>
                                   </tr>  
                                   <?php    
                                        if ($num = mysqli_num_rows($run)>0) {  
                                             while ($result = mysqli_fetch_assoc($run)) {  
                                                  echo "  
                                                       <tr class='data'>    
                                                            <td>".$result['id']."</td>  
                                                            <td>".$result['name']."</td>  
                                                            <td>".$result['email']."</td>  
                                                            <td>".$result['balance']."</td>   
                                                            <td><a href='suppression.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                                                       </tr>  
                                                  ";  
                                             }  
                                        }  
                                   ?>  
                              </table>  
                         </div>
                    </div>
               </div>
          </div>
     </body>  
</html>  