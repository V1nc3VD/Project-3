<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["isstaff"] !== true){
    header("location: ./index.php?content=inloggen");
}
include("./connect_db.php");
 $tbody = "";
 
 
 $sql = "SELECT * FROM `berichten`";
 $result = mysqli_query($conn, $sql);
 
 while ($record = mysqli_fetch_assoc($result)) {
   $tbody .= "<tr> 
               <th scope='row'>" . $record["MESSAGE_ID"] . "</th>
               <td>" . $record["USER_ID"] . "</td>
               <td>" . $record["CONTACTEMAIL"] . "</td>
               <td>" . $record["MESSAGE"] . "</td>
               <td>
              
                 <a href='./update_pieten.php?id=" . $record["MESSAGE_ID"] . " '>
                   <img src='./img/icons/edit.png'> 
                 </a>
                 </td>
               <td>
               <a href='./delete_pieten.php?id=" . $record["MESSAGE_ID"] . " '>
               <img src='./img/icons/delete.png'> 
               </a>
               </td>
               </tr>";
 }
 
 //  echo "<pre>" . var_dump($tbody) . "</pre>";
 // echo $username;
 ?>
 
 
 
 <table class="table">
   <thead>
     <tr>
       <th scope="col">Bericht id</th>
       <th scope="col">User id</th>
       <th scope="col">Contactemail:</th>
       <th scope="col">Bericht:</th>
     </tr>
   </thead>
   <tbody>
     <?php echo $tbody; ?>
   </tbody>
 </table>