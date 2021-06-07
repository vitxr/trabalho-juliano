<!DOCTYPE html>
<html>
<?php include 'head.php' ?>

  <body>
  <!-- Controls -->

    <div class="container">
      <div class="featured-block">
        <!-- Example row of columns -->
        <div class="row">
  	  <?php
						include '../conexao.php';
	
			$busca = mysql_query("SELECT * FROM produtos WHERE Genero_pro LIKE '%caneca'");
	
			while($dado = mysql_fetch_array($busca))
			{
				
				$Nome_pro = $dado['Nome_pro'];
				$Valor_pro = $dado['Valor_pro'];
				$Foto_pro = $dado['Foto_pro'];
				$Cod_pro = $dado['Cod_pro'];
			?>			
          <div class="col-md-3">
	  	 
            <div class="block">
            <div class="thumbnail">
				
			<div class="item">
              <img  height="210px" width="270px" src="<?php echo $Foto_pro ?>" alt="" class="img-responsive"/>
             
			 <div class="caption">
              
			  <CENTER>  <h1><?php echo substr($Nome_pro, 0, 25); echo(" ...") ?></h1>
                <h1> R$ <?php echo $Valor_pro ?> </h1> 
				<form name="buscaForm" method="get" data-search="suggestion" class="caixa-busca limpar" action="../descricao.php">
				<button name="Cod_pro" value="<?php echo $Cod_pro ?>" class="btn"> +Detalhes </button></CENTER>
				</form>
              
			  </div>
              </div>
			
            </div>
            </div><br>
          
            </div>
			 <?php }?>
            </div>
			
            </div>
          </div>

            
             <!-- Copyright(c) website name. Designed by: <a href="http://www.alltemplateneeds.com"> www.alltemplateneeds.com</a>
           
     !-->

      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/leda_moon/js/jquery-1.9.1.js"></script>
    <script src="/leda_moon/js/bootstrap.js"></script>
    <script src="/leda_moon/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    
  </body>
</html>