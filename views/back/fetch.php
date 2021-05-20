<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "pro.k");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM pack 
  WHERE ReferencePack LIKE '%".$search."%'
  OR 	prix LIKE '%".$search."%' 

 ";
}
else
{
 $query = "
  SELECT * FROM pack ORDER BY identifiantpack
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ReferencePack</th>
     <th>identifiantpack</th>
     <th>Datefinpack</th>
     <th>prix</th>
    
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["ReferencePack"].'</td>
    <td>'.$row["identifiantpack"].'</td>
    <td>'.$row["Datefinpack"].'</td>
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