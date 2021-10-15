<!-- 2) Dadas as funções do exercícios 1 faça o seguinte: -->
<!-- b) armazene em um vetor os primeiros n primo dado. Exiba no cliente os elementos do vetor. -->
<!DOCTYPE html>
<html>
    <body>
        <?php
			$array = array(1, 5, 7, 11, 2, 3);    
            $_primos = array();
            function Primo($_n)
			{
            	$primo = True;
                $i = $_n - 1;
                
                if($_n != 1){
                  do{
                      if($_n % $i == 0 and $i != 1){
                      $primo = False;
                      break;
                      }
                      $i--;
                  } while($i > 1);
                }
                return $primo;
            }
            
            foreach ($array as &$value) {
			    if (Primo($value) == 1){
                	array_push($_primos, $value);
                }
			}
            
            echo "Array de primos: <br>";
            while($_i <= count($_primos)){
            	echo "$_primos[$_i] <br>";
                $_i++;
            }      
        ?>
</body>
</html>