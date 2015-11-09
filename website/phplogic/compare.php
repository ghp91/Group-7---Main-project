<?php 

function comparePasswords(String password1, String password2)
{
	$result = false;
	if(password1 === password2)
	{$result = true;}
	return $result;
}

 ?>