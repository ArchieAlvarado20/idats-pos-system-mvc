<?php 

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
 		
 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
  
 	 
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=esc(APP_NAME)?></title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	<style>
		body{
			font-size: 10px;
		}
		h4{
			font-size: 10px;
		}
	</style>
	<?php 

		$vars = $_GET['vars'] ?? "";

		$obj = json_decode($vars,true);

	?>
<?php if(is_array($obj)): date_default_timezone_set("Asia/Manila");?>

	<center>
		<h1>IDATS STORE</h1>
		<h4>TR-<?php echo date("Ymd-His")?></h4>
		<div><i><?=date("F j, Y(l) h:i a")?></i></div>
	</center>

	<table class="table table-sm border-white">
	<tr style="height: 10px;"></tr>

		<?php foreach ($obj['data'] as $row):?>
			<tr>
				<td class="p-0"><?=$row['description']?></td>
			</tr>
			<tr>
				<td class="d-flex row p-0"><div class="col"><?=$row['qty']?> PC</div><div class="col">@<?=$row['price']?></div><div class="col"><?=number_format($row['qty'] * $row['price'],2)?></div></td>
			</tr>
	
		<?php endforeach;?>
			<tr style="height: 10px;"></tr>
		<tr>
			<td class="d-flex row p-0"><div class="col">Total: </div><div class="col text-center"><?=number_format($obj['gtotal'],2)?></div> </td>
		</tr>
		<tr>
			<td class="d-flex row p-0 "><div class="col">Amount paid: </div><div class="col text-center"><?=number_format($obj['amount'],2)?></div> </td>
		</tr>
		<tr>
			<td class="d-flex row p-0"><div class="col">Change: </div><div class="col text-center"><?=number_format($obj['change'],2)?></div> </td>
		</tr>
		
		<tr style="height: 5px;"></tr>
	</table>
	<tr>
		<center><td>Cashier: <?php echo auth('name') ?></td><br></center>
		<center><td>B81 L3 Bel. Aldea Gen. Trias Cavite</td><br></center>
		<center><td>Thanks for shopping with us!</td></center>
	</tr>
	
<?php endif;?>

<script>
	
	window.print();

	var ajax = new XMLHttpRequest();

	ajax.addEventListener('readystatechange',function(){

		if(ajax.readyState == 4)
		{
			//console.log(ajax.responseText);
		}
	});

	ajax.open('POST','',true);
	//ajax.send();

</script>
</body>
</html>