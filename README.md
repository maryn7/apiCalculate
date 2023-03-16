Api Calculadora
Esta api permite realizar cálculos simples, tales como sumar, restar, multiplicar, dividir, calcular el tanto por ciento y calcular la raiz cuadrada.

Requisitos
PHP 7.2 o superior
Composer (para instalar las dependencias de Symfony)

Instalación
Clona el repositorio desde GitHub: https://github.com/maryn7/apiCalculate.git

Instala las dependencias de Symfony con Composer:

composer install


Uso
Una vez iniciado el servidor, el sitio web estará disponible en http://localhost:8000. Aquí puedes agregar las instrucciones necesarias para utilizar el sitio web o la API.
Los comandos que acepta son /suma /resta /multiplicar /dividir /porcentaje /raiz

Funcionamiento:

Se ha definido un endpoint para realizar operaciones con dos números. Cuando un cliente (por ejemplo, un navegador web) envía una solicitud HTTP GET a la ruta /suma/{a}/{b}, la API recibe la solicitud y extrae los parámetros {a} y {b} de la URL.

Después, la API utiliza un controlador para procesar la solicitud, el cual hace uso de un servicio llamado ArithmeticService para realizar la operación aritmética. El servicio ArithmeticService es responsable de realizar la operación y devolver el resultado.

Finalmente, el controlador devuelve el resultado en formato JSON al cliente que realizó la solicitud HTTP GET, el cual puede interpretar y utilizar la respuesta según sus necesidades.

En el directorio /tests/Unit/ArithmeticServiceTest.php hay preprados algunos test unitarios básicos.

