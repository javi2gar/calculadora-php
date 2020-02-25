<?php

namespace Src ;

require('../vendor/autoload.php');

include_once 'Calculadora.php';

$cal = new Calculadora();
$resultado = 0;
$num1 = 0;
$num2 = 0;
$valor1;
$valor2;
$numValido = "/(^-?\d+(\.\d+)?$)|(^\+?\d+(\.\d+)?$)/"; //Números reales

try {
    if (isset($_POST['btnCalcular']) || !empty($_POST['btnCalcular'])) {
        $num1 = $_POST["valor1"];
        $num2 = $_POST["valor2"];
        $operacion = $_POST["operacion"];

        switch ($operacion) {
            case "sumar":
                $resultado = $cal->sumar($num1, $num2);
                break;
            case "restar":
                $resultado = $cal->restar($num1, $num2);
                break;
            case "multiplicar":
                $resultado = $cal->multiplicar($num1, $num2);
                break;
            case "dividir":
                $resultado = $cal->dividir($num1, $num2);
                break;
            default:
                $resultado = "ERR";
        }
    }
} catch (Exception $e) {
    $resultado = $e->getMessage();
}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Calculadora_DPL (Test+CI+Deploy)!</title>
  </head>
  <body>
    <h1 class="text-center">CALCULADORA</h1>    
    <p class="text-center">Testing of web application deployment course - DevOps (CIP_DAW_DPL) !</p>
    <div class="container-sm d-flex justify-content-center">
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            <div class="form-row">
                <div class="form-group">
                    <div class="col px-md-6">
                        <label class="text-center"for="valor1">Valor 1: &nbsp</label>
                        <input class="input-text" type="text" id="valor1" name ="valor1" aria-describedby="valor 1" required>
                        <small id="valor1Help" class="form-text text-muted">Introducir el primer valor.</small>
                    </div>
                </div>
                <?php if (!preg_match($numValido, $num1) || !preg_match($numValido, $num2)) :?>
                <div class="alert alert-danger" role="alert">
                    Valor introducido no válido!
                </div>
                <?php endif ?> 

                <div class="form-group">
                    <div class="col px-md-6">
                        <label for="valor2">Valor 2: &nbsp</label>
                        <input class="input-text" type="text" id="valor2" name ="valor2" aria-describedby="valor 2" required>
                        <small id="valor2Help" class="form-text text-muted">Introducir el segundo valor.</small>
                    </div>
                </div>
            </div>
            <div class="container-sm d-flex justify-content-center">
                <fieldset class="form-group">               
                    <legend class="col-form-label col-sm-2 pt-0">Operaciones:</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operacion" id="sumar" value="sumar" checked>
                            <label class="form-check-label" for="sumar">
                            Suma
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operacion" id="restar" value="restar">
                            <label class="form-check-label" for="restar">
                            Resta
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operacion" id="multiplicar" value="multiplicar">
                            <label class="form-check-label" for="multiplicar">
                            Multiplicación
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="operacion" id="dividir" value="dividir"> 
                            <label class="form-check-label" for="dividir">
                            División
                            </label>
                        </div>
                    </div>             
                </fieldset> 
            </div>         
            <br>
            <div class="container-sm d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="btnCalcular">Calcular</button>
            </div>           
            <br>
            <div class="container-sm d-flex justify-content-center">
                <label class="text-center"for="resultado">Resultado &nbsp&nbsp</label>
                <input class="input-text" type="text" id="resultado" aria-describedby="resultado" value="<?php echo $resultado ?>" >
            </div>                      
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  <footer> 
    <hr>
        <div class="container"> 
            <div class="row justify-content-around">
                <div class="font-italic row justify-content-md-center">
                    by javi2gar - DAW 2019-2020 CIP
                </div>            
            </div>
        </div>
</footer>
</html>