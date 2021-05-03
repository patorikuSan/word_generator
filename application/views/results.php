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
		/* background-color: red; */
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
		font-family: 'helvetica';
		width: 80px;
		text-align: center;
		background-color: lightgray;
	}
	a{
		width: 80px;
		display: block;
		margin-left: 167px;
		margin-top: 20px;
		text-decoration: none;
		border: 1px solid black;
		text-align: center;
		font-family: 'helvetica';
		background-color: lightgray;
		font-size: 15px;
	}

	</style>
</head>
	<body>

<?php 
		$hits = $this->session->userdata['hits'];
		$speak = $this->session->userdata['speak'];
		if($this->session->userdata('hits')){
			$hits = $this->session->userdata('hits');
		}
		//var_dump($speak);
		?>
		<form action="words/index" method="post">
		<h3>Random Word (attempt # <?= $hits; ?> )</h3>
		<h1><?= $speak; ?></h1>
		<!-- <input type="submit" name="generate" value="Generate"> -->
		<a href="<?= base_url(); ?>">Generate</a>
		</form>
	</body>
</html>