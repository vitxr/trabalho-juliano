 <?php session_start(); 
	if(!isset($_SESSION['carrinho'])){ 
		$_SESSION['carrinho'] = array(); 
	} //adiciona produto
	if(isset($_GET['acao'])){ //ADICIONAR CARRINHO 
		if($_GET['acao'] == 'add'){ 
		$Cod_pro= intval($_GET['Cod_pro']); 
		if(!isset($_SESSION['carrinho'][$Cod_pro])){ 
			$_SESSION['carrinho'][$Cod_pro] = 1; 
		}else{ 
			$_SESSION['carrinho'][$Cod_pro] += 1; 
		} 
	} 
	//REMOVER CARRINHO 
	if($_GET['acao'] == 'del'){ 
		$Cod_pro = intval($_GET['Cod_pro']); 
		if(isset($_SESSION['carrinho'][$Cod_pro])){ 
			unset($_SESSION['carrinho'][$Cod_pro]); 
		} 
	} //ALTERAR QUANTIDADE 
	if($_GET['acao'] == 'up'){ 
		if(is_array($_POST['prod'])){
			foreach($_POST['prod'] as $Cod_pro => $qtd){
				$Cod_pro  = intval($Cod_pro);
				$qtd = intval($qtd);
				if(!empty($qtd) || $qtd <> 0){
					$_SESSION['carrinho'][$Cod_pro] = $qtd;
				}else{
					unset($_SESSION['carrinho'][$Cod_pro]);
				}
		   }
		}
	 }
   
  }
        
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Carrinho</title>
	<link href="/leda_moon/css/carrinho.css" rel="stylesheet"/>
		<link href="/leda_moon/css/carrinho.js" rel="stylesheet"/>
    </head>
 
    <body>
     
<body>
<br />
<br /><br /><br />
<br />
<br />
<br /><br />
 <div id="wrapper">
  <h1>Carrinho</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
	
      <tr>
                 
<th width="244"><span>Produto</span></th>
 
 
<th width="79"><span>Quantidade</span></th>
 

<th width="100"><span>Pre&ccedil;o</span></th>
 
 
<th width="100"><span>SubTotal</span></th>
 
 
<th width="64"><span></span></th>
 </tr>
    </thead>
    <tbody>
 
<form action="?acao=up" method="post">
 
<tfoot>
                
<tr>
                 
<td colspan="5"><input class="atuCarrinho" type="submit" value="Atualizar Carrinho" /></td>
 
 
 </tr>
<tr>
  <br>               
<td colspan="5"><a href="index.php"><img src="volta.png" width="30px" height="30px" alt=""></a></td>
 <td colspan="5"><a href="cadastro2.php" class="atuCarrinho">Finalizar</td></a>
        </tfoot>
 
 
<tbody>
                   <?php
                         if(count($_SESSION['carrinho']) == 0){
                            echo '
<tr>
<td colspan="5">Não há produto no carrinho</td>
</tr>
 
';
                         }else{
                            require("conexao.php");
                                                                   $total = 0;
                            foreach($_SESSION['carrinho'] as $Cod_pro => $qtd){
                                  $sql   = "SELECT *  FROM produtos WHERE Cod_pro= '$Cod_pro'";
                                  $qr    = mysql_query($sql) or die(mysql_error());
                                  $dado    = mysql_fetch_assoc($qr);
                                   
                                  $Nome_pro  = $dado['Nome_pro'];
                                  $Valor_pro = number_format($dado['Valor_pro'], 2, ',', '.');
                                  $sub   = number_format($dado['Valor_pro'] * $qtd, 2, ',', '.');
                                   
                                  $total += $dado['Valor_pro'] * $qtd;
                                
                               echo '
<tr>       
                                      
<td>'.$Nome_pro.'</td>
 
 
<td><input type="text" size="3" name="prod['.$Cod_pro.']" value="'.$qtd.'" /></td>
 
 
<td>R$ '.$Valor_pro.'</td>
 
 
<td>R$ '.$sub.'</td>
 
 
<td><a href="?acao=del&Cod_pro='.$Cod_pro.'"><img src="excluir.png" width="30px" height="30px" alt=""></a></td>
 
                                  </tr>
 
';
                            }
                               $total = number_format($total, 2, ',', '.');
                               echo '
<tr>
                                         
<td colspan="4">Total</td>
 
 
<td>R$ '.$total.'</td>
 
                                  </tr>
 
';
                         }
                   ?>
        
         </tbody>
 
            </form>
 
    </table>
 </tr>
 
    </body>
    </html>