# Despliegue de Aplicaciones Web (CIP_DAW_DPL) 

## Unidad de Trabajo 02 - Pruebas Unitarias y Análisis de Código

### Crear una aplicación en PHP que simule el comportamiento de una calculadora. La aplicación debe tener la siguiente estrucctura:"

>    
    src/
        Calculadora.php
        index.php
    tests/
        Calculadora.php
    .travis
    composer.json
    composer.lock



### La aplicación tendrá las siguientes versiones:"

> **Versión 0.1.0**	
> - src/Calculadora.php: Declaración de la	 clase Calculadora. La clase debe estar vacía.
> - test/CalculadoraTest.php: Declaración de la clase CalculadoraTest. La clase debe estar vacía.
> - .travis.yml: Fichero de configuración de integración continua con Travis.
> - composer.json: Fichero Composer con las dependencias del proyecto.

> **Versión 0.2.0**
> - src/Calculadora.php: Se implementa el método suma() de la clase Calculadora, al que se le pasan dos parámetros: valor1 y valor2, y devuelve la suma de los dos.
> - tests/CalculadoraTest.php: Se implementa el método testSuma() que prueba que el método suma() de la clase Calculadora funciona correctamente.

> **Versión 0.3.0**
> - src/Calculadora.php: Se implementa el método resta(), al que se le pasan dos parámetros: valor1 y valor2, y devuelve la resta de los dos."
> - tests/CalculadoraTest.php: Se implementa el método testResta() que prueba que el método resta() de la clase Calculadora funciona correctamente.

> **Versión 0.4.0**
> - src/Calculadora.php: Se implementa el método multiplicacion(), al que se le pasan dos parámetros: valor1 y valor2, y devuelve el resultado de la multiplicación.
> - tests/CalculadoraTest.php: Se implementa el método testMultiplicacion() que prueba que el método multiplicacion() de la clase Calculadora funciona correctamente.

> **Versión 0.5.0**
> - src/Calculadora.php: Se implementa el método division(), al que se le pasan dos parámetros: valor1 y valor2, y devuelve el resultado de la división.
> - tests/CalculadoraTest.php: Se implementa el método testDivision() que prueba que el método division() de la clase Calculadora funciona correctamente.

> **Versión 0.6.0:**
> - src/index.php: Se implementa la página principal de la aplicación en la que permite realizar una operación aritmética utilizando la clase Calculadora.

## Unidad de Trabajo 03 - Heroku
>
> - Modificar el fichero __*.travis.yml*__ de la práctica entregada de la Unidad de Trabajo 02 para que, si las pruebas unitarias, análisis de código y sintaxis han sido correctas, **despliegue la versión de la aplicación en Heroku**." 

> - Implementar este cambio como la **versión 0.7.0** de la aplicación mediante una rama feature/X, fusionarla con la rama master, actualizar la rama master en *__GitHub__* y subir la rama __feature/X__ a Git Hub.