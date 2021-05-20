<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "pro.k");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM produit
  WHERE nom LIKE '%".$search."%'
 
 ";
}
else
{
 $query = "
  SELECT * FROM produit ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) )
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>nom </th>
     <th>description</th>
     <th>etat</th>
     <th>categorie</th>
     <th>prix</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["nom"].'</td>
    <td>'.$row["description"].'</td>
    <td>'.$row["etat"].'</td>
    <td>'.$row["categorie"].'</td>
    <td>'.$row["prix"].'</td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>