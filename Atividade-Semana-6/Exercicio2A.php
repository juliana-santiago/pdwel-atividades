<!-- 2) Dadas as funções do exercícios 1 faça o seguinte: -->
<!-- a) armazene em um vetor os primeiros n fatoriais dado que n é o parâmetro da função fatorial. Exiba no cliente os elementos do vetor. -->
<!DOCTYPE html>
<html>
    <body>
        <?php
			$_array = array(1, 6, 2, 4, 0);
            $_array_fatoriais = array();
            $_i = 0;

            function calcFatorial ($_n)
			{
				$_fatorial = 1 ;
          
          		while($_n >= 1){
            		$_fatorial = $_fatorial * $_n--;
          		}
                return $_fatorial;
            }
            
            foreach ($_array as &$value) {
                array_push($_array_fatoriais, calcFatorial($value));
			}

            echo "Array com os fatoriais: [ ";
            while($_i < count($_array_fatoriais)){
            	echo "$_array_fatoriais[$_i] ";
                $_i++;
            }
            echo "]";
        ?>
</body>
</html>