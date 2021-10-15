<!-- 2) Dadas as funções do exercícios 1 faça o seguinte: -->
<!-- c) armazene em um vetor os primeiros n perfeitos encontrados. Exiba no cliente os elementos do vetor -->
<!DOCTYPE html>
<html>
    <body>
        <?php
			$_array = array(1, 2, 3, 4, 5, 6, 28, 496);    
            $_perfeitos = array();
			function ehPerfeito ($_numero)
			{
			    $_perfeito = False;
				$_i = $_numero - 1;
          		$_soma = 0;
          		while($_i >= 1){
                	if ($_numero % $_i == 0){
                    	$_soma = $_soma + $_i;
                    }
                    $_i--;
                }
                if ($_soma == $_numero){
                	$_perfeito = True;
                }
            	return $_perfeito;
            }

            foreach ($_array as &$value) {
			    if (ehPerfeito($value)){
                	array_push($_perfeitos, $value);
                }
			}
            $_i = 0;
            echo "Array de números perfeitos: <br><br>";
            while($_i <= count($_perfeitos)){
            	echo "$_perfeitos[$_i] <br>";
                $_i++;
            }
        ?>
</body>
</html>