<?php error_reporting(1);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> <!-- it will work with XHTML it will automatically put "/" for tags -->
<html xmlns="http://www.w3.org/1999/xhtml"> <!--  -->
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<?php 
			if( $_POST['name']==""  || $_POST['section']=="" || $_POST['cardNumber']=="" ){
		?>
		<h1>Error</h1>
		<a href="buyagrade.html">Try again</a>
		<?
		} else{
		?>
		<h1>Thanks sucker</h1>
		<hr />
			<dl>                                    <!-- dl -->
				<dt>Name</dt>                       <!-- dt -->
				<dd>								<!-- dd -->	
					<?=$name=$_POST['name'];?>
				</dd>

				<dt>Section</dt>
				<dd>
					<?=$section=$_POST['section'];?>
				</dd>

				<dt>Credit Card</dt>
				<dd>
					<?=$cardNum=$_POST['cardNumber'];?>
					(<?=$cardType=$_POST['cardType'];?>)
				</dd>
			</dl>

			<div>
			</div>

			<?php
				$file='suckers.txt';
				$current=file_get_contents($file);
				$current .=	$name.";".$section.";".$cardNum.";".$cardType.PHP_EOL;
				file_put_contents($file,$current).PHP_EOL;
				// or you can use this -> without file_get_contents() 
				// file_put_contents("sucker.txt",$data,FILE_APPEND);
			?>
			
			<pre>
				<?=file_get_contents("suckers.txt")?>
			</pre>
			<?
			}
			?>
	</body>
</html>