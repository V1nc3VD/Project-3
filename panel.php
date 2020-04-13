<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["isstaff"] !== true){
    header("location: ./index.php?content=inloggen");
}
include("./phpscripts/connect_db.php");
 $tbody = "";
 
 // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//gebruiker ziet maximaal $maxrecords per pagina 
if (isset($_GET['pageno'])) {
  $pageno = $_GET['pageno'];
} else {
  $pageno = 1;
}
$maxrecords = 10;
//zorgt dat bij volgende pagina's er een "offset" is dus het skipt $offset aantal dingen daarvoor
//waardoor je op elke pagina nieuwe records ziet
$offset = ($pageno-1) * $maxrecords; 


$total_pages_sql = "SELECT COUNT(*) FROM berichten";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $maxrecords);


 $sql = "SELECT * FROM `berichten` ORDER BY MESSAGE_ID limit $maxrecords offset $offset";
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
 
mysqli_close($conn);


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



  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "index.php?content=panel&pageno=1"; }?>"><<</a></li>
    <li class="page-item"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "index.php?content=panel&pageno=".($pageno - 1); } ?>"><</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "index.php?content=panel&pageno=".($pageno + 1); } ?>">></a></li>
    <li class="page-item"><a class="page-link" href="index.php?content=panel&pageno=<?php echo $total_pages; ?>">>></a></li>
  </ul>
