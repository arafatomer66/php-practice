
<?php 
    
    if (isset($_POST['name'],$_POST['age'])){
    	$name = htmlentities($_POST['name']);
    	$age = (int)htmlentities($_POST['age']);
    	echo "My name is {$name} and my age is {$age}  years";
    }
   		

 ?>
    

<form action="index.php" method="POST" >
	<input type="text" name="name" placeholder="name" >
	<input type="text" name="age" placeholder="age" >
	<input type="submit"  >
</form>