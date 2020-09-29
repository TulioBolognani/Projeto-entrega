<?php include_once('config.php');
if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);
	if($data_solicitacao_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($data_conclusao_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($id_cliente_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($id_entregador_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($id_pacote_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($endereco_busca_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($endereco_entrega_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($valor_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}elseif($status_entrega==""){
		header('location:'.$_SERVER['PHP_SELF']);
		exit;
	}else{
		
		$userCount	=	$db->getQueryCount('entrega','id');
		if($userCount[0]['total']<20){
			$data	=	array(
							'datasolicitacao'=>$data_solicitacao_entrega,
							'dataconclusao'=>$data_conclusao_entrega,
							'idcliente'=>$id_cliente_entrega,
							'identregador'=>$id_entregador_entrega,
							'idpacote'=>$id_pacote_entrega,
							'endebusca'=>$endereco_busca_entrega,
							'endeentrega'=>$endereco_entrega_entrega,
							'valor'=>$valor_entrega,
							'status'=>$status_entrega,
						);
			$insert	=	$db->insert('entrega',$data);
			if($insert){
				header('location:browse-entrega.php?');
				exit;
			}else{
				header('location:browse-entrega.php?');
				exit;
			}
		}else{
			header('location:'.$_SERVER['PHP_SELF']);
			exit;
		}
	}
}
?>

<!doctype html>

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Sistema entrega</title>

	

	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


	


	
</head>



<body>

	

	<div class="bg-light border-bottom shadow-sm sticky-top">

		<div class="container">

			<header class="blog-header py-1">

				

			</header>

		</div> <!--/.container-->

	</div>

	

   	<div class="container">

		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-4-with-search-functionality/">PHP CRUD in Bootstrap 4 with search functionality</a></h1>

		

		<div class="card">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add User</strong> <a href="browse-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a></div>

			<div class="card-body">

				

				<div class="col-sm-6">

					<h5 class="card-title">Espaços com <span class="text-danger">*</span> são obrigatorios</h5>

					<form method="post">

						<div class="form-group">

							<label>Data solicitacao da entrega <span class="text-danger">*</span></label>

							<input type="data" name="datasolicitacao" id="datasolicitacao" class="form-control"  required>

						</div>

						<div class="form-group">

							<label>Data entrega da entrega <span class="text-danger">*</span></label>

							<input type="data" name="dataentrega" id="dataentrega" class="form-control"required>

						</div>

						<div class="form-group">

							<label>Id do cliente <span class="text-danger">*</span></label>

							<input type="number"   class="form-control" name="idcliente" id="idcliente" placeholder="Digite o id do entregador" required>

						</div>

						

						<div class="form-group">

							<label>Id do Entregador <span class="text-danger">*</span></label>

							<input type="number" name="identregador" id="identregador" class="form-control" placeholder="Digite o id do entregador" required>

						</div>

						<div class="form-group">

							<label>Id do pacote <span class="text-danger">*</span></label>

							<input type="number" name="idpacote" id="idpacote" class="form-control" placeholder="Digite o id do pacote" required>

						</div>

						<div class="form-group">

							<label>Endereco de busca da entrega <span class="text-danger">*</span></label>

							<input type="text" name="endebusca" id="endebusca" class="form-control" placeholder="Digite o Endereco de busca da entrega" required>

						</div>						

						<div class="form-group">

							<label>Endereco de entrega da entrega <span class="text-danger">*</span></label>

							<input type="text" name="endeentrega" id="username" class="form-control" placeholder="Digite o endereco de entrega da entrega" required>

						</div>

						<div class="form-group">

							<label>Valor da entrega <span class="text-danger">*</span></label>

							<input type="number" name="valor" id="valor" class="form-control" placeholder="Digite o valor da entrega" required>

						</div>

						<div class="form-group">

							<label>Status da entrega <span class="text-danger">*</span></label>

							<input type="number" name="status" id="status" class="form-control" placeholder="Digite o numero de status da entrega" required>

						</div>

						<div class="form-group">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Adicionar entrega</button>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

    

	
	

   

    

</body>

</html>