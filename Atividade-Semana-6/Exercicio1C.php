<!-- 1) usando os códigos das aula anteriores você deve implementar o seguinte: -->
<!-- c) uma função para retornar se um numero é perfeito. Observação um número natural é perfeito se e somente se a soma de seus divisores é o próprio número. -->
<!DOCTYPE html>
<html>
    <body>
        <?php
			function numPerfeito ($_n)
			{
				$_i = $_n - 1;
          		$_soma = 0;
          		
                while($_i >= 1){
                	if ($_n % $_i == 0){
                  		$_soma = $_soma + $_i;
                    }
                    $_i--;
                }
                
                if ($_n == $_soma){
                	echo "O valor $_n informado é perfeito <br>";
                }
                else{
                	echo "O valor $_n informado não é perfeito <br>";
                }  	
            }	

            numPerfeito(5);
            numPerfeito(6);
        ?>
</body>
</html>