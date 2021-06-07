<!DOCTYPE html>
<html lang="en">
<?php include 'modelos/head.php' ?>
  <body>
<body>

<div class="navbar">		
			<ul class="nav pull-right">
			<li class="dropdown">

			</li>
			</ul>
		  </div>
<!-- 
Body Section 
-->
	<div class="row">
	 <?php
						include 'conexao.php';
	$Cod_pro = $_GET['Cod_pro'];
			$busca = mysql_query("SELECT * FROM produtos WHERE Cod_pro = $Cod_pro");
	
			while($dado = mysql_fetch_array($busca))
			{
				$Nome_pro = $dado['Nome_pro'];
				$Valor_pro = $dado['Valor_pro'];
				$Foto_pro = $dado['Foto_pro'];
				$Cod_pro = $dado['Cod_pro'];
				$Descr_pro = $dado['Descr_pro'];
			?>			
<div id="sidebar" class="span3">

	</div>
	<div class="span9">
    <ul class="breadcrumb">
  	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="#"> <img src="<?php echo $Foto_pro ?>"></a>
                  </div>
                  
                </div>
            </div>
			</div>
			<div class="span7">
				<h3><?php echo $Nome_prod ?></h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>R$<?php echo $Valor_pro ?></span></label>
					<br />
				
				  <div class="control-group">
					<label class="control-label"><span>Tamanho</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>PP</option>
						  <option>P</option>
						  <option>M</option>
						  <option>G</option>
						  <option>GG</option>
						</select>
					</div>
				  </div>
				 <br />
				  <button type="submit" class="shopBtn"> Adicionar ao Carrinho</button>
				</form>
			</div>
			</div>
				<hr class="softn clr"/>
           <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Detalhes</a></li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Informações do Produto</h4>
               
				<p><?php echo $Descr_pro ?></p>
				
			</div>

            </div>

</div>
</div>
</div>
 <?php }?>
</div>
<!-- Body wrapper -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>