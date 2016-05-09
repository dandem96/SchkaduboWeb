<?php 

$connect=mysqli_connect('localhost','root','password','schkaduboweb');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to Connect';
}

?>