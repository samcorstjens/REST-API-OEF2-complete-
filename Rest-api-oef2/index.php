<!DOCTYPE html>
<html>
 <head>
  <title>REST-API-oef2</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <div align="right" style="margin-bottom:5px;">
   </div>

   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Restaurantnaam</th>
       <th>sterren</th>
      </tr>
     </thead>
     <tbody></tbody>
    </table>
   </div>
  </div>
 </body>
</html>
<script type="text/javascript">
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"work/fetch.php",
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }
})
</script>
