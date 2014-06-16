    <!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Servidor</title>
    
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
      </head>
      <body>
        
      <div class="tooper" id="id-tooper">
        <div class="logo"><img src="img/logoUFFS.png" alt="logoUFFS" height="42"/></div> 
      </div>
      
        <div class="row">
          <div class="col-md-2 topp"> <!-- 18 largura maxima mobile || 12 largura maxima desktop  (outros tamanhos são configuraveis) -->
            <div class="list-group-success">
              <a href="home.php" class="list-group-item leftt">Inicio</a>
              <a href="servidor.php" class="list-group-item list-group-item-success leftt">Servidor</a>
              <a href="relatorios.php" class="list-group-item leftt">Relatórios</a>              
              <a href="#" class="list-group-item leftt">Curso</a>
              <a href="#" class="list-group-item leftt">Permissões</a>
              <a href="#" class="list-group-item leftt">Salas</a>
              <a href="#" class="list-group-item leftt">Horários</a>
              <a href="#" class="list-group-item leftt">Alocação</a>
              <a href="logout.php" class="list-group-item leftt">Sair</a>
            </div>
          </div>
          <div class="col-md-10 topp">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Inicio</a>
                    <li><a href="servidor.php">Servidor</a>
                    <? if((isset($_GET['op']) && $_GET['op'] =='buscar') || !isset($_GET['op']))echo "<li><a href='servidor.php?op=buscar'>Buscar</a>"; ?> 
                    <? if(isset($_GET['op']) && $_GET['op'] =='cadastrar')echo "<li><a href='servidor.php?op=cadastrar'>Cadastrar</a>"; ?> 
                    <? if(isset($_GET['op']) && $_GET['op'] =='editar')echo "<li><a href='servidor.php?op=editar'>Editar</a>"; ?> 
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">       
                <ul class="nav nav-tabs">
                  <li <? if((isset($_GET['op']) && $_GET['op'] =='buscar') || !isset($_GET['op']))echo "class='active'"; ?> >
                  <a href="servidor.php?op=buscar">Buscar</a></li>
                  <li <? if(isset($_GET['op']) && $_GET['op'] =='cadastrar')echo "class='active'"; ?> >
                  <a href="servidor.php?op=cadastrar">Cadastrar</a></li>
                  <li <? if(isset($_GET['op']) && $_GET['op'] =='editar')echo "class='active'"; ?> >
                  <a href="servidor.php?op=editar">Editar</a></li>
                </ul>
                <div class="panel-body">
                <?php 
					if((isset($_GET['op']) && $_GET['op'] =='buscar') || !isset($_GET['op'])){
					//echo"<h4> Buscar servidor </h4>";
					echo"<div class='row'>";
					echo"<div class='col-lg-6'>";
					//echo"	<p class='bg-success text-center'>Selecione na opção <span class='caret'></span> qual será o tipo da busca.</p>";
					echo"	<div class='input-group'>";
					echo"	  <input type='text' class='form-control' placeholder='Buscar servidor'>";
					echo"	  <div class='input-group-btn'>";
					echo"		<button class='btn btn-default' type='button'>Buscar por</button>";
					echo"		<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'> <span class='caret'></span></button>";
					echo"		<ul class='dropdown-menu pull-right'>";
					echo"		  <li><a href='#'>Siape</a></li>";
					echo"		  <li><a href='#'>Nome</a></li>";
					echo"		  <li><a href='#'>Email</a></li>";
					echo"		</ul>";
					echo"	  </div>";//<!-- /btn-group -->
					echo"	</div>";//<!-- /input-group -->
					echo"</div>";//<!-- /.col-lg-6 -->
					echo"</div>";//<!-- /.row -->
					}
                  ?>
                  <?
                  if(isset($_GET['op']) && $_GET['op'] =='cadastrar'){
					//echo"<h4> Cadastrar servidor </h4>";
					echo"<div class='dashboard'>";
					echo"<form class='form-horizontal' role='form'>";
					echo"  <div class='form-group'>";
					echo"	<label for='inputSiape' class='col-sm-2 control-label'>Siape</label>";
					echo"	<div class='col-sm-3'>";
					echo"	  <input type='text' class='form-control' id='inputSiape' placeholder='Siape'>";
					echo"	</div>";
					echo"  </div>";
					echo"  <div class='form-group'>";
					echo"	<label for='inputNome' class='col-sm-2 control-label'>Nome</label>";
					echo"	<div class='col-sm-3'>";
					echo"	  <input type='text' class='form-control' id='inputNome' placeholder='Nome'>";
					echo"	</div>";
					echo"  </div>";
					echo"  <div class='form-group'>";
					echo"	<label for='inputSobrenome' class='col-sm-2 control-label'>Sobrenome</label>";
					echo"	<div class='col-sm-7'>";
					echo"	  <input type='text' class='form-control' id='inputSobrenome' placeholder='Sobrenome'>";
					echo"	</div>";
					echo"  </div>";
					echo"  <div class='form-group'>";
					echo"	<label for='inputEndereco' class='col-sm-2 control-label'>Endereço</label>";
					echo"	<div class='col-sm-7'>";
					echo"	  <input type='text' class='form-control' id='inputEndereco' placeholder='Endereço'>";
					echo"	</div>";
					echo"  </div>";					
					echo"  <div class='form-group'>";
					echo"	<label for='inputCidade' class='col-sm-2 control-label'>Cidade</label>";
					echo"	<div class='col-sm-5'>";
					echo"	  <input type='text' class='form-control' id='inputCidade' placeholder='Cidade'>";
					echo"	</div>";
					echo"  </div>";
					echo"  <div class='form-group'>";
					echo"	<label for='inputTelefone' class='col-sm-2 control-label'>Telefone</label>";
					echo"	<div class='col-sm-3'>";
					echo"	  <input type='text' class='form-control' id='inputTelefone' placeholder='Telefone'>";
					echo"	</div>";
					echo"  </div>";
					echo"  <div class='form-group'>";
					echo"	<label for='inputCelular' class='col-sm-2 control-label'>Celular</label>";
					echo"	<div class='col-sm-3'>";
					echo"	  <input type='text' class='form-control' id='inputCelular' placeholder='Celular'>";
					echo"	</div>";
					echo"  </div>";
					echo"  <div class='form-group'>";
					echo"	<label for='inputCargo' class='col-sm-2 control-label'>Cargo</label>";
					echo"	<div class='col-sm-3'>";
					echo"	  <select class='form-control'>";
					echo"	   <option>Cargo 1</option>";
					echo"	   <option>Cargo 2</option>";
					echo"	   <option>Cargo 3</option>";
					echo"	   <option>Cargo 4</option>";
					echo"	   <option>Cargo 5</option>";
					echo"	  </select>";
					echo"	</div>";
					echo"	<div class='col-sm-3'>";
					echo"	  <a class='btn btn-success' type='submit'>+</a>";
					echo"	</div>";
					echo"  </div>";
					echo"  <div class='form-group'>";
					echo"	<div class='col-sm-offset-2 col-sm-10'>";
					echo"	  <button type='submit' class='btn btn-default'>Cadastrar</button>";
					echo"	</div>";
					echo"  </div>";
					echo"</form>";
					echo"</div>";
				  }
                  ?>
                  <?
                  if(isset($_GET['op']) && $_GET['op'] =='editar'){
                  	echo"<div class='alert alert-warning alert-dismissable'>";
					echo"  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
					echo"  <strong>Warning!</strong> Nada ainda foi programado nesta área.";
					echo"</div>";
				  }
				  ?>
                </div><!-- /.panel-body -->                 
              </div>
            </div>
          </div>
        </div>
      
      <div class="footer" id="id-footer">
          <p>Universidade Federal da Fronteira Sul </br> Ciência da Computação</p>
      </div>	
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>