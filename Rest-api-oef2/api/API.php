<?php
class API
{

 function __construct()
 {
   $this->connect = new PDO("mysql:host=localhost;dbname=Oef2","root","");
}

 function fetch_all()
 {
  $query = "SELECT * FROM `restaurants` ORDER BY Id";
  $statement = $this->connect->prepare($query);
  if($statement->execute())
  {
   while($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
    $data[] = $row;
   }
   return $data;
  }
 }
}
?>
