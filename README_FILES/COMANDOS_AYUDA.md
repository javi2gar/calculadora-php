# Pruebas a realizar

## PHPunit (Pruebas unitarias)
	--command to install--
	composer require --dev phpunit/phpunit ^7.*


	//TestClass.php
	--add content--
	include_once('./src/Saludo.php');
	use PHPUnit\Framework\TestCase;

	--command to execute--
	vendor\phpunit tests\TestClass.php
 	vendor\phpunit tests


### phpunit.xml
	
	--add contentl--
	<?xml version="1.0" encoding="UTF-8"?>
    	    <phpunit colors="true">
                <testsuites>
                    <testsuite name="Directorio de tests">
                        <directory>./tests/</directory>
                    </testsuite>
               </testsuites>
            </phpunit>

	--command to execute--
	vendor\phpunit


## PHPLint (Detectar errores de sintaxis, de estilo, código rebuscado o sospechoso)

	--command to install--
	composer require overtrue/phplint --dev -vvv

	--command to execute--
	./vendor/bin/phplint.bat ./ --exclude=vendor
	vendor\bin\phplint src



## PHP CodeSniffer (analiza normas de codificación, comantarios, semántica) 

	--command to install--
	     -local-
	         composer require squizlabs/php_codesniffer --dev
	     -global-
	         composer global require squizlabs/php_codesniffer
	
	vendor\bin\phpcs --config-set colors 1
	
	--command to execute--
	vendor\bin\phpcs.bat src/
	vendor\bin\phpcs src

## PHPMD (Analiza la complejidad ciclomáticay aplica reglas de análisis)

Mandatory arguments:
1) A php source code filename or directory. Can be a comma-separated string
2) A report format
3) A ruleset filename or a comma-separated string of rulesetfilenames

Example: phpmd /path/to/source format ruleset

Available formats: ansi, html, json, text, xml.
Available rulesets: cleancode, codesize, controversial, design, naming, unusedcode.

	--command to install--
	composer require --dev phpmd/phpmd

	--command to execute--
	vendor\bin\phpmd.bat src text cleancode,codesize,controversial,design,naming,unusedcode
	vendor\bin\phpmd src text cleancode,codesize,controversial,design,naming,unusedcode

	vendor\bin\phpmd ./app json cleancode,codesize,controversial,design,naming,unusedcode  echo >> reports/logs-phpmd.json   


## PHPCPD (Detección de código duplicado)

	--command to install--
	composer require --dev sebastian/phpcpd

	--command to execute--
	vendor\bin\phpcpd.bat ./src


## PHPLOC (Tamaño y estructura de un proyecto PHP)

	--command to install--
	composer require --dev phploc/phploc
	
	--command to execute--
	vendor\bin\phploc.bat

## PHING (Automatización de tareas)

	--command to install--
	composer require --dev phing/phing

	--command to execute-


## SonarQube


## SonarCloud


## SonarScanner

	--command to install--
	composer require rogervila/php-sonarqube-scanner --dev

	--command to execute--
	vendor/bin/sonar-scanner


	Property 	Source 	Example
	sonar.projectKey 	adapted composer.json name property 	-Dsonar.projectKey=rogervila_php-sonarqube-scanner
	sonar.projectName 	adapted composer.json name property 	-Dsonar.projectName=php-sonarqube-scanner
	sonar.sources 	Base project path 	-Dsonar.sources=< PROJECT PATH>
	sonar.exclusions 	Opininated exclusions based on composer projects usage 	-Dsonar.exclusions="vendor/** , node_modules/** , .scannerwork/**"

### Docker run Sonarqube container

	docker run -d --name sonarqube -p 9000:9000 sonarqube