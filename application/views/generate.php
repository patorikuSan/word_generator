<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Generate Word</title>

	<style type="text/css">
	/* *{
		outline: 1px dashed red;
	} */
	form{
		width: 500px;
		height: 300px;
		margin: 0 auto;
		margin-top: 80px;
		font-family: 'helvetica';
	}
	h3, h1, input{
		text-align: center;
	}
	h1{
		border: 3px solid black;
		width
	}
	input[type='submit']{
		margin-left: 167px;
	}

	</style>
</head>
<body>

<?php 
	$this->session->userdata('i');
	$i = $this->session->set_userdata('i', 1);
	$i++;
	$this->session->unset_userdata('i');
	?>
	<form action="words/process_form" method="post">
    <h3>Random Word (attempt # <?= $i; ?> )</h3>
    <h1> click to generate </h1>
    <input type="submit" name="generate" value="Generate">
	</form>



</body>
</html>