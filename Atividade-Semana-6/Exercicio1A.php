<!-- 1) usando os códigos das aula anteriores você deve implementar o seguinte: -->
<!-- a) uma função para calcular o fatorial usando while -->
<!DOCTYPE html>
<html>
    <body>
        <?php
        
			function calcFatorial ($_n)
			{
            	$_numInicial = $_n;
				$_fatorial = 1;
          
          		while($_n >= 1){
            		$_fatorial = $_fatorial * $_n--;
          		}
          	
                echo "O fatorial de $_numInicial é $_fatorial <br>";
            }
            
            calcFatorial(7);	
            calcFatorial(4);
        ?>
</body>
</html>