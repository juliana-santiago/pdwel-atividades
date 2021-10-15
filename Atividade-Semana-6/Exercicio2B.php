<!-- 2) Dadas as funções do exercícios 1 faça o seguinte: -->
<!-- b) armazene em um vetor os primeiros n primo dado. Exiba no cliente os elementos do vetor. -->
<!DOCTYPE html>
<html>
    <body>
        <?php
			$array = array(1, 5, 7, 12, 2, 3, 24, 16, 4, 11);  
            $_primos = array();
            function ehPrimo($_n)
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
			    if (ehPrimo($value) == 1){
                	array_push($_primos, $value);
                }
			}
            
            echo "Array de primos: [";
            while($_i <= count($_primos)){
            	echo "$_primos[$_i] ";
                $_i++;
            }   
            echo "]";
        ?>
</body>
</html>