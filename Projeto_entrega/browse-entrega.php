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
	if(isset($_REQUEST['datasolicitacao']) and $_REQUEST['data_solicitacao_entrega']!=""){
		$condition	.=	' AND datasolicitacao LIKE "%'.$_REQUEST['data_solicitacao_entrega'].'%" ';
	}
	if(isset($_REQUEST['datasolicitacao']) and $_REQUEST['data_conclusao_entrega']!=""){
		$condition	.=	' AND datasolicitacao LIKE "%'.$_REQUEST['data_conclusao_entrega'].'%" ';
	}
	if(isset($_REQUEST['idcliente']) and $_REQUEST['id_cliente_entrega']!=""){
		$condition	.=	' AND idcliente LIKE "%'.$_REQUEST['id_cliente_entrega'].'%" ';
	}
	if(isset($_REQUEST['identregador']) and $_REQUEST['id_entregador_entrega']!=""){
		$condition	.=	' AND identregador LIKE "%'.$_REQUEST['id_entregador_entrega'].'%" ';
	}
	if(isset($_REQUEST['idpacote']) and $_REQUEST['id_pacote_entrega']!=""){
		$condition	.=	' AND idpacote LIKE "%'.$_REQUEST['id_pacote_entrega'].'%" ';
	}
	if(isset($_REQUEST['endebusca']) and $_REQUEST['endereco_busca_entrega']!=""){
		$condition	.=	' AND endebusca LIKE "%'.$_REQUEST['endereco_busca_entrega'].'%" ';
	}
	if(isset($_REQUEST['endeentrega']) and $_REQUEST['endereco_entrega_entrega']!=""){
		$condition	.=	' AND endeentrega LIKE "%'.$_REQUEST['endereco_entrega_entrega'].'%" ';
	}
	if(isset($_REQUEST['valor']) and $_REQUEST['valor_entrega']!=""){
		$condition	.=	' AND valor LIKE "%'.$_REQUEST['valor_entrega'].'%" ';
	}
	if(isset($_REQUEST['status']) and $_REQUEST['status_entrega']!=""){
		$condition	.=	' AND status LIKE "%'.$_REQUEST['status_entrega'].'%" ';
	}
	if(isset($_REQUEST['df']) and $_REQUEST['df']!=""){

		$condition	.=	' AND DATE(dt)>="'.$_REQUEST['df'].'" ';

	}
	if(isset($_REQUEST['dt']) and $_REQUEST['dt']!=""){

		$condition	.=	' AND DATE(dt)<="'.$_REQUEST['dt'].'" ';

	}
	
	$userData	=	$db->getAllRecords('entrega','*',$condition,'ORDER BY id DESC');
	?>
   	<div class="container">
		
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>
			<div class="card-body">
				
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Encontre uma entrega</h5>
					<form method="get">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Data solicitacao da entrega</label>
									<input type="data" name="datasolicitacao" id="datasolicitacao" class="form-control" value="<?php echo isset($_REQUEST['datasolicitacao'])?$_REQUEST['datasolicitacao']:''?>" >
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Data entrega da entrega</label>
									<input type="data" name="dataentrega" id="dataentrega" class="form-control" value="<?php echo isset($_REQUEST['dataentrega'])?$_REQUEST['dataentrega']:''?>" >
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Id do cliente</label>
									<input type="number" name="idcliente" id="idcliente" class="form-control" value="<?php echo isset($_REQUEST['idcliente'])?$_REQUEST['idcliente']:''?>" >
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Id do Entregador</label>
									<input type="number" name="identregador" id="identregador" class="form-control" value="<?php echo isset($_REQUEST['identregador'])?$_REQUEST['identregador']:''?>" >
								</div>
							</div><div class="col-sm-2">
								<div class="form-group">
									<label>Id do pacote</label>
									<input type="number" name="idpacote" id="idpacote" class="form-control" value="<?php echo isset($_REQUEST['idpacote'])?$_REQUEST['idpacote']:''?>" >
								</div>
							</div>
							</div><div class="col-sm-2">
								<div class="form-group">
									<label>Endereco de busca da entrega</label>
									<input type="text" name="endebusca" id="endebusca" class="form-control" value="<?php echo isset($_REQUEST['endebusca'])?$_REQUEST['endebusca']:''?>" >
								</div>
							</div>
							</div><div class="col-sm-2">
								<div class="form-group">
									<label>Endereco de entrega da entrega</label>
									<input type="text" name="endeentrega" id="endeentrega" class="form-control" value="<?php echo isset($_REQUEST['endeentrega'])?$_REQUEST['endeentrega']:''?>" >
								</div>
							</div>
							</div><div class="col-sm-2">
								<div class="form-group">
									<label>Valor da entrega</label>
									<input type="number" name="valor" id="valor" class="form-control" value="<?php echo isset($_REQUEST['valor'])?$_REQUEST['valor']:''?>" >
								</div>
							</div>
							</div><div class="col-sm-2">
								<div class="form-group">
									<label>Status da entrega</label>
									<input type="number" name="status" id="status" class="form-control" value="<?php echo isset($_REQUEST['status'])?$_REQUEST['status']:''?>" >
								</div>
							</div>
							
						
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
		
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>id#</th>
						<th>Data solicitacao da entrega</th>
						<th>Data entrega da entrega</th>
						<th>Id do cliente</th>
						<th>Id do Entregador</th>
						<th>Id do pacote</th>
						<th>Endereco de busca da entrega</th>
						<th>Endereco de entrega da entrega</th>
						<th>Valor da entrega</th>
						<th>Status da entrega</th>
						
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['datasolicitacao'];?></td>
						<td><?php echo $val['dataconclusao'];?></td>
						<td><?php echo $val['idcliente'];?></td>
						<td><?php echo $val['identregador'];?></td>
						<td><?php echo $val['idpacote'];?></td>
						<td><?php echo $val['endebusca'];?></td>
						<td><?php echo $val['endeentrega'];?></td>
						<td><?php echo $val['valor'];?></td>
						<td><?php echo $val['status'];?></td>
						<td align="center">
							<a href="edit-users.php?editId=<?php echo $val['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Editar</a> | 
							<a href="delete.php?delId=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Excluir</a>
						</td>

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
