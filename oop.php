<?php 
	 function __construct(){
		echo 'person created';
	}
	class person 
	{
	    private $name ; private $email ;

	    public function getName(){
	    	return $this->name;
	    }
	    public function setName($name){
	    	$this->name = $name ;
	    }

	     public function getEmail(){
	    	return $this->email;
	    }
	    public function setEmail($email){
	    	$this->email = $email ;
	    }
	    
	    

	}

	$person1 = new person;

	$person1->setName('arafat');
	$person1->setEmail('arafatomer66@gmail.com');

	



 ?>