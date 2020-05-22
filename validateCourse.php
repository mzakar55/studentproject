<?php 

                $con = mysqli_connect('localhost','root','','native');
 
                 $stmt="SELECT * FROM users where UserType='Teacher";

                 $result=mysqli_query($stmt);
                 if($result){
                 ?>
                  <select>
                 <?php
                 
                while ($Row=mysqli_fetch_assoc($result)) {?>
                 echo "<option>".</option><?php $Row['id']?>."</option>";
                 }
               </select>
               <?php
                }else{
                  echo "No teacher in database";
            }?>
                    
               
                  ?>