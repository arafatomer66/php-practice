<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Server and file Info</h1>

    <?php if($server): ?>
       <ul class="list-group">
       	<?php foreach($server as $key =>$value): ?>
   <li class="list-group-item">
   	<strong><?php echo $key; ?></strong>
    <?php echo $value ; ?>
   </li>
   <?php endforeach; ?>
       </ul>
<?php endif; ?>

    


	</div>

   <div class="container">
   	
 
	<h1>Client and file Info</h1>

    <?php if($client): ?>
       <ul class="list-group">
       	<?php foreach($client as $key =>$value): ?>
   <li class="list-group-item">
   	<strong><?php echo $key; ?></strong>
    <?php echo $value ; ?>
   </li>
   <?php endforeach; ?>
       </ul>
<?php endif; ?>

    


	</div>
	
</body>
</html>