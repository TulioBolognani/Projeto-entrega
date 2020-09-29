<?php include_once('config.php');?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Projeto entrega</title>
	
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
</head>

<body>

	
	<?php
	$condition	=	'';
	if(isset($_REQUEST['nomeentregador']) and $_REQUEST['nome_entregador']!=""){
		$condition	.=	' AND nomeentregador LIKE "%'.$_REQUEST['nome_entregador'].'%" ';
	}
	if(isset($_REQUEST['cpf']) and $_REQUEST['cpf_entregador']!=""){
		$condition	.=	' AND cpf LIKE "%'.$_REQUEST['cpf_entregador'].'%" ';
	}
	if(isset($_REQUEST['datanasc']) and $_REQUEST['datanasc_entregador']!=""){
		$condition	.=	' AND datanasc LIKE "%'.$_REQUEST['datanasc_entregador'].'%" ';
	}
	if(isset($_REQUEST['idveiculo']) and $_REQUEST['id_veiculo_entregador']!=""){
		$condition	.=	' AND idveiculo LIKE "%'.$_REQUEST['id_veiculo_entregador'].'%" ';
	}
	
	if(isset($_REQUEST['df']) and $_REQUEST['df']!=""){

		$condition	.=	' AND DATE(dt)>="'.$_REQUEST['df'].'" ';

	}
	if(isset($_REQUEST['dt']) and $_REQUEST['dt']!=""){

		$condition	.=	' AND DATE(dt)<="'.$_REQUEST['dt'].'" ';

	}
	
	$userData	=	$db->getAllRecords('entregador','*',$condition,'ORDER BY id DESC');
	?>
   	<div class="container">
		
		
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>id#</th>
						<th>Nome do entregador</th>
						<th>CPF do entregador</th>
						<th>Id do veiculo do entregador</th>
						
						
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['nome_entregador'];?></td>
						<td><?php echo $val['cpf_entregador'];?></td>
						<td><?php echo $val['datanasc_entregador'];?></td>
						<td><?php echo $val['id_veiculo_entregador'];?></td>
					</tr>
					
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
		
	</div>
	
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
   
</body>
</html>
