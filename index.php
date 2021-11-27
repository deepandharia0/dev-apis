<?php
 
require('app/Book.php');
//echo $_REQUEST['id'];
$obj = new Book();
// $obj->index();
$obj->setAuthor('J.K. Rawling');
$obj->setTitle('Harry Potter');
$obj->setPrice('1500.00');
$obj->setPages('500');


$output = array('Title' =>$obj->getTitle(),
                'Author' =>$obj->getAuthor(),
				'Price'  =>$obj->getPrice(),
				'Pages' =>$obj->getPages());
	
echo json_encode($output,JSON_PRETTY_PRINT);				
				
?>

