<!-- 1) usando os códigos das aula anteriores você deve implementar o seguinte: -->
<!-- b) uma função para retorna se um numero é primo ou composto usando do...while -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            
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
                
                if ($primo == 1){
                	echo "O número $_n informado é primo. <br>";
                }
                else{
                	echo "O número $_n informado não é primo. <br>";
                }
            }
            
            ehPrimo(6);
            ehPrimo(7);
            ehPrimo(47);
        ?>
</body>
</html>