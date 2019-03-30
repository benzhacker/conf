<?php
SESSION_START();
include 'https://fast.com/th/';
if(!$_SESSION['user']['username']){
	header("location: https://fast.com/th/");
}

?>