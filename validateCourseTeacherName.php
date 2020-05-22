<?php 

                $con = mysqli_connect('localhost','root','','native');
 
                 $stmt="SELECT id FROM users where UserType='Teacher'";

                 $result=mysqli_query($con ,$stmt);
                 
                 ?>
                  <select  selected="id"><?php
                 
                 
                while ($Row=mysqli_fetch_assoc($result)) {
                 echo "<option >",  $Row['id'] ,"</option>";
             }
         ?>
             </select>
                 

               
              
               

           

                                    
               
                 