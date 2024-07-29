<?php
//instanciar
$num1 = 0; //variaveis global(código todo utiliza)
$num2 = 0;

    

    function  somar($num1,$num2) {
        return  $num1 +  $num2;
    }//fim do somar

    function subtrair($num1,$num2){
        return $num1 - $num2;
    }//fim do subtrair

    function multiplicar($num1,$num2){
        return $num1 * $num2;
    }// fim do multiplicar
    
    function dividir($num1,$num2){
        if($num2 == 0){
            return "Impossivel dividir por 0";
        }else{
            return $num1 / $num2;
        }        
        return $num1 / $num2;
    }// fim do dividir 

         function potencia($num1,$num2){
            if($num2 < 0){
                return "Impossivel calcular a potência de expoente negativo";
            }else{
                return pow($num1,$num2);
            }
           
         }//fim do método
              
            function raiz($num1){
                if($num1 >= 0){
                    return sqrt ($num1);
                }else{
                    return "IMpossivel calcular a raiz de um número negativo";
                }
            }

            function tabuada($num1){
                $i = 0;
                $resultado ="";
                for($i; $i<10;$i++){
                    $resultado .= "<br>".$num1." * ".$i." = ".($num1*$i);              
                }//fim do for
                return $resultado;

            }   
            function arearetangulo($base,$altura){
                if($base <= 0 || ($altura <= 0)){
                    return "Impossivel calcaluar a área";
                }else{
                    return $base * $altura;

                }
            }
            function delta($a,$b,$c){
                $d = 0;
                if($d< 0){
                    return -1;
                }else{
                    return $d;
                }
                $d = ($b * $b) - ((4 *$a) * $c);
            }
                
                function x1($a,$b,$c){
                    $d = delta($a,$b,$c);
                    if ($d== -1){
                        return "impossivel calcular x1, delta negativo";
                    }else{
                        return (-$b + sqrt($d))/(2 * $a);
                    }
                }

                function x2($a,$b,$c){
                    $d = delta ($a,$b,$c);
                    if ($d == -1){
                        return "impossivel calcular x2, delta negativo";
                    }else {
                        return (-$b - sqrt($d))/(2*$a);
                    }
                }

                function parImpar($num){
                    if($num % 2 == 0){
                        return "Par";
                    }else{
                        return "Ímpar";
                    }
                }//FIM DO IMPAR OU PAR
         
                function maiorIdade($num){
                    if($num < 18 ){
                        return "maior de idade";
                    }else{
                        return "menor de idade";
                    }
                }// FIM DA MAIOR IDADE
         
                function dobro($num){
                    return $num * 2;
                }// FIM DA MAIOR IDADE
         
                function celsius($celsius){
                    return ($celsius * 1.8) + 32;
                }
         
                function maiorNumero($num1, $num2, $num3){
                    if($num1 > $num2 && $num1 > $num3){
                        return $num1;
                    }else if($num2 > $num1 && $num2 > $num3){
                        return $num2;
                    }else{
                        return $num3;
                    }
                }//FIM DO METODO
         
                function numeroPositivo($num1){
                    if($num1 > 0){
                        return "O numero digitado é Positivo";
                    }else if($num1 < 0){
                        return "O numero digitado é negativo";
                    }else{
                        return "O numero digitado é zero";
                    }
                }//FIM DO METODO
         
                function somaNumeros($num){
                    $i = 1;
                    $soma = 0;
                    for($i; $i <= $num; $i++){
                        $soma += $i;
                    }
                    return $soma;
                }//FIM DO SOMAR NUMEROS
         
         
                function numeroP($num){
                    if($num <= 1){
                        return " numero não primo";
                    }
                    for($i = 2; $i <= sqrt($num); $i++){
                        if($num % $i == 0){
                            return "não é primo";
                        }
                    }
                    return "é primo";
                }//FIM DOS NUMEROS PRIMOS
               
                   
         
                function palindromo($palavra){
                    if($palavra == strrev($palavra)){
                        return "Palimdromo";
                    }else{
                        return "Não é palimdromo";
                    }
                }
         
                function calcularFatorial($numero){          
                    $num = 0;                   
                    $i = $num-1;
                    for($i;$i >= 1;$i--){
                        $num *= $i;
                    }
                    return $num;
                }
         
                function paresListas($num){
                    $i = 1;
                    $pares = "";
                    for($i; $i <= $num; $i++){
                        if($i % 2 == 0){
                            $pares .= "<br>" .$i;
                        }
                    }
                    return $pares;
                }

                function contarVogais($palavra){
                    $tamanho = strlen($palavra);//Tamanho da palavra
                    $i = 0;
                    $letra = "";
                    $contador = 0;
                    for($i;$i < $tamanho; $i++){
                        $letra = substr ($palavra,$i,1);
                        switch($letra){
                            case 'A': 
                                $contador++;
                                break;

                            case 'a': 
                              $contador++;
                                break;    

                            case 'E': 
                                $contador++;
                                break;

                            case 'e': 
                                $contador++;
                                break;

                            case 'I': 
                                $contador++;
                                break;

                            case 'i': 
                                $contador++;
                                break;


                            case 'O': 
                                $contador++;
                                break;

                            case 'o': 
                                $contador++;
                                break;

                            case 'U': 
                                $contador++;
                                break;

                            case 'u': 
                                $contador++;
                                break;
                                
                                
                        }
                    }//fim do for
                    return $contador;
                }

                function mostrarPrimos($num){
                    $numPrimos = "";
                    $i=1;
                    for($i;$i <= $num; $i++){
                     if(numeroP($i) != "Não é primo"){
                         $numPrimos .= "<br>" .$i;
                     }
                    }
                    return $numPrimos;
                 }
                 
                 function verificarDatas($mes, $dia, $ano){
                    if(checkdate ($mes, $dia, $ano)){
                        return "A data digitada está certa"; 
                    }else{
                        return "Data Invalida!";
                    }
                 }

                 function mediaCinco($num1,$num2,$num3,$num4,$num5){
                   $resu = $num1+$num2+$num3+$num4+$num5;
                   return $media = $resu / 5;
                              
                 }

                 function divisores($num){
                    $i=1;
                    $divisor = "";
                    for($i; $i < $num;$i++){
                        if($num % $i == 0){
                            $divisor .= "<br>" .$i;
                        }
                    }
                    return $divisor;
                 }//fim dos divisores



                 function textCount($palavras){
                    return(str_word_count($palavras));
                 }
                 



                  

               









     //resltados
     echo "<br>A soma dos números é: ".somar(5,8);
     echo "<br>A subtração é: ".subtrair(9,15);
     echo "<br>A multiplicação é:".multiplicar(10,8);
     echo "<br>A divisão dos números é:".dividir(3,1); 
     echo "<br> A potência dos números é: ".potencia(10,2);
     echo "<br> A raiz do número informado é: ".raiz(64);
     echo "<br> A tabuada do número informado é:".tabuada(8);
     echo "<br> A área do número informado é: ".arearetangulo(10,5);
     echo "<br> O valor do x1 é: ".x1(-8,5,9);
     echo "<br> O valor do x2 é: ".x2(-8,5,9);
     echo "<br> Numero digitado é: ".parImpar(20);
     echo "<br> A idade digitada é ".maiorIdade(19);
     echo "<br> O dobro do numero é ".dobro(19);
     echo "<br> Com a conversão ficara: ".celsius(25);
     echo "<br> o Maior dos tres é: ".maiorNumero(4,5,9);
     echo "<br> o numero é ".numeroPositivo(4);
     echo "<br> A soma do numero informardo é: ".somaNumeros(50);
     echo "<br> O numero digitado ".numeroP(14);
     echo "<br> É palimdromo? ".palindromo("ovo");
     echo "<br> O fatorial de numero é: ".calcularFatorial(10);
     echo "<br> Os numeros pares são: ".paresListas(10);
     echo "<br> Vogais na palavra digitada: ".contarVogais("aaaaaaaaaiiiiiiin");
     echo "<br> Números primos: ".mostrarPrimos(10);
     echo "<br>: ".verificarDatas(12,04,2004);
     echo "<br> A média dos números é: ".mediaCinco(10,10,10,10,10);
     echo "<br> A quantidade de palavaras é: ".textCount("Nem Clicou");
     echo "<br> Os divisores são: ".divisores(30);
?>