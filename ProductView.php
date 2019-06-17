<!DOCTYPE html>
<html>
<head>
	<title>Product information</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>pro_id</th>
        <th>product_name</th>
        <th>pro_price</th>
      </tr>
    </thead>
    <tbody>
    	 <?php  
         foreach ($userdata as $row)  
         {  
            ?><tr>  
            <td><?php echo $row['pro_id'];?></td>  
            <td><?php echo $row['product_name'];?></td>  
            <td><?php echo $row['pro_price'];?></td>  
            </tr>  
         <?php
          }  
         ?> 
      
    </tbody>
  </table>


	
				<!-- echo $userdata_val['pro_id']."<br>";
				echo $userdata_val['product_name']."<br>";
				echo $userdata_val['pro_price']."<br>"; -->
			
		
</body>
</html>