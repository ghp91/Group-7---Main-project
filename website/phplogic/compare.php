<?php 

function comparePasswords($password1, $password2)
{
	$result = false;
	if($password1 === $password2)
	{$result = true;}
	return $result;
}

 ?>