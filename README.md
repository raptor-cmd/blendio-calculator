# Blendio Calculator

La prueba técnica para el puesto es crear un servicio de calculadora.

## Prerequisitos
Antes de poder instalar necesitas tener instaladas estas versiones de programas:

1. Servidor Web (Apache o Ngnix) o también se puede con XAMPP, MAMP o WAMP
2. PHP 8.2 o PHP 8.3 (En el caso de ya tener XAMPP, MAMP o WAMP no es necesario)
3. Composer

##  Instalación

Clonar proyecto:

`git clone https://github.com/raptor-cmd/blendio-calculator.git`

Para instalar las librerías

`composer install`

Y para correr el proyecto

`php artisan serve`

Y con esto ya estaría listo para usarse

## Funcionalidades

Este proyecto tiene una parte de rutas API para usar la calculadora de operaciones básicas.

#### api/add/{number1}/{number2}

Esta ruta suma los dos números que se le pasan en los lugares del number1 y el number2 y devuelve el resultado de la suma.

Ejemplo: `api/add/5/5`

#### api/subs/{number1}/{number2}

Esta ruta resta los dos números que se le pasan en los lugares del number1 y el number2 y devuelve el resultado de la resta.

Ejemplo: `api/subs/5/5`

#### api/mult/{number1}/{number2}

Esta ruta multiplica los dos números que se le pasan en los lugares del number1 y el number2 y devuelve el resultado de la multiplicación

Ejemplo: `api/mult/5/5`

#### api/div/{number1}/{number2}

Esta ruta divie los dos números que se le pasan en los lugares del number1 y el number2 y devuelve el resultado de la división

Ejemplo: `api/div/5/5`


Puedes probar todas estas rutas en la siguiente ruta: `/request-docs` 

## Comandos
La otra parte de este proyecto contiene el comando para hacer las operaciones

`php artisan operations {number1} {number2} {operator}`

`{number1}` : El primer operador

`{number2}` : El segundo operador

`{operator}` : El tipo de operación que quieres que se ejecute, los disponibles son los siguientes: "add, substraction, multiplication y divide"

Ejemplo:

`php artisan operations 5 5 add`

### Testing
Si quieres ver los tests simplemente corre el siguiente comando:

`php artisan test` 
