<?php
   //El código PHP va aquí
   ?>
 <html>
 <head>
 <title>MANTENIMIENTO PREVENTIVO Y CORRECTIVO EN SERVIDORES EN LA

EMPRESA COMPRESAR EPS </title> 
 </head> 

<body>


<!DOCTYPE html>
<html>
  <head>
    <title>MANTENIMIENTO PREVENTIVO Y CORRECTIVO EN SERVIDORES EN LA

        EMPRESA COMPRESAR EPS</title>
  </head>
  <body>
  <script language="php">
     echo "Proyecto SENA para obtener el título de Tecnólogo en implementación de infraestructura tecnologías de la información y las comunicaciones.!";
  </script>
  </body>

  

</html>


<?php
echo "Proyecto SENA para obtener el título de Tecnólogo en implementación de infraestructura tecnologías de la información y las comunicaciones.!";
?>

<?php echo "¡jonier!";?>

<?php
echo "A";
echo "B";
echo "C";
?>

<?php
echo "<strong> Objetivos específicos.  </strong>";
?>
<?php
echo "<p> Analizar e investigar de que se trata nuestro proyecto para que se pueda
implementar de la mejor manera posible. </p>"; // Este es un comentario
"<p> Realizar la réplica de directorio activo en Windows server, de igual manera con la
herramienta de CobianSoft se realiza una copia de seguridad incrementable de
diferentes documentos. </p>";
 echo "<p>Desarrollar una página web de la empresa Compensar, la cual se subirá en el IIS en
 Windows Server, esta contara con cada uno de sus servicios de directorio activo
 como lo son: GPO, CD, File Server. </p>"; // Este es un comentario
 "<p> Desarrollar una propuesta de diseño basada en la empresa compensar, esta tendrá a
 cabo todos los diferentes planos respecto a la implementación del el data center
 basado en esta empresa. </p>"; // Este es un comentario
 "<p>  Realizar un manual de normatividad para llevar a cabo ciertas reglas y el buen
 funcionamiento del data center.</p>"; // Este es un comentario
 "<p> Desarrollar el plan de mantenimiento para reducir los fallos en los equipos que
 contenga el data center y evitar que perjudiquen el funcionamiento del mismo. </p>"; // Este es un comentario
 "<p> Ejecutar la implantación de los servicios virtualizados y en la nube, de la misma
 manera comprobar que funcione de manera correcta. </p>"; /* Este comentario se utiliza ara colocar varias 
 lineas de contenido*/
 "<p> Evaluar todos los servidores respecto a su funcionamiento ya que debería contar
 con una serie de monitoreo, esto para verificar que cada uno de estos funcione y se
 encuentre en buen estado.
</p>";?>


<?php

$variable_name = value;

$nombre = 'jonier';
$edad = 17

echo $nombre;
echo $edad;

?>
<?php
define("Objetivo general", "Objetivo general: Realizar el mantenimiento preventivo y correctivo en la empresa de compensar EPS.")
echo Objetivo general;
//mostrará "Objetivo general: Realizar el mantenimiento preventivo y correctivo en la empresa de compensar EPS."
?>

<?php
  $string1 = "Milisay Dávila: Cra. 140C # 132a- 63"; //Comillas dobles o simples, no importa
  $string2 = 'Jonier Ardila: Cra 134 #137-32';  
  $string3 = "Compensar: Ak 68 # 49A - 47";  
  
?>

<?php
  $x = 42.168;
?>

<?php
  $x = true; $y = false;
?>

<?php

$str = "10";
$int = 20;
$suma = $str + $int;
echo ($suma); // En este apartado mostraria la solucion que es 30
?>

<?php
$name = 'david';
function getName() {
  echo $name;

}
getName();

//arroja un erro: Variable indefinida :  name
// Este script producirá un error,
// ya que la variable $ name tiene un alcance global y no es accesible dentro de la función getName () . 
?>


<?php
$name = 'Jonier';
function getName() {
  global $name;
  echo $name;
}
getName();
//muestra 'Jonier'
?>

<?php
$a = 'hello';
$hello = "hi";
echo $$a //Mostrará 'hola'
?>

<?php
$x = 14;
$y = 3;
echo $x % $y; // 2 
?>


<?php

$x++; // equivalente a $x = $x+1;
$x--; // equivalente a $x = $x-1;

$x++; // post-increment 
$x--; // post-decrement 
++$x; // pre-increment 
--$x; // pre-decrement


$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3

?>

<?php
$num1 = 5;
$num2 = $num1;
?>

<?php
$x = 50;
$x += 100;
echo $x;
//150
?>

<?php
$name1 = "David"; 
$name2 = "Amy"; 
$name3 = "John"; 
?>

<?php
$names = array("David", "Amy", "John");
?>

<?php
$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";

echo $names[1]; // Amy
?>

<?php
$myArray [0] = "john";
$myArray [1] = "<strong>PHP</strong>";
$myArray [2] = 21;

echo "$myArray[0} tiene $myArray[2] y conoce $myArray[1]";

// John tiene 21 años y conoce PHP
?>

<?php
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

//Las matrices asociativas son matrices que utilizan claves con nombre que les asigna.
//Hay dos formas de crear una matriz asociativa:
?>

<?php
$people = array("Jonier"=>"17", "Milisay"=>"18",
"John"=>"42");

echo $people['Amy']; // mustra 18
?>

<?php
$people = array(
  'online'=>array('David', 'Amy'),
  'offline'=>array('John', 'Rob', 'Jack'),
  'away'=>array('Arthur', 'Daniel')
);

echo $people['online'][0]; //David

echo $people['away'][1]; //Daniel
?>

<?php
/* JONIER DAVID ARDILA
  2243172
   */
?>


<?php
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}
?>

<?php
$x = 10;
$y = 20;
if $x >= $y) {
  echo $x;
} else [
  echo $y;
]

// 20
?>


<?php
if (condition) {
  code to be executed if condition is true;
} elseif (condition) {
  code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}
?>

<?php
$age = 21;

if ($age<=13) {
  echo "Niño.";
} elseif ($age>13 && $age<19){
  echo "Adolecente";
} else {
  echo "adulto";
}
//adulto. 
?>

<?php
while (condition is true) {
  code to be executed;
}
?>

<?php
$i = 1;
while ($i < 7) {
  echo "The value is $i <br />";
  $i++;
}
//El siguiente ejemplo establece primero una variable $ i en uno ($ i = 1). A continuación, los mientras se 
//ejecute el bucle siempre que $ i es menor que siete ($ i <7). $ i aumentará en uno cada vez que se ejecute el
//ciclo ($ i ++):
?>

<?php
do {
  code to be executed;
} while (condition is true); 
?>

<?php
$i = 5;
do {
echo "El numero es" . $i . "<br/>";
$i++;
} while ($i <= 7);
//El numero es 5
//El numero es 6
//El numero es 7
?>

<?php
for (init; test; increment) {
  code to be executed;
}
?>


<?php
for ($a = 0; $a < 6; $a++) {
  echo "value of a : ". $a . "<br/>";
}
?>

<?php
foreach (array as $value) {
  code to be executed;
}
//or
foreach (array as $key => $value) {
   code to be executed;
}
?>


<?php
$names = array("Jonier", "Milisay", "Proyecto");
foreach ($names as $name) {
  echo $name. '<br />';
}
// Jonier
// Milisay
// Proyecto
?>

<?php
switch (n) {
  case value1:
    //código a ejecutar si  n=value1
    break;
  case value2:
     //ódigo a ejecutar si n=value2
     break;
  ...
  default:
    // código que se ejecutará si n es diferente de todas las etiquetas

}
?>


<?php
$empresas = 'Compensar';

switch ($today) {
  case "Colombina":
    echo "Colombina Jorge y yojan";
    break;
    case "Compensar":
      echo "Compensar es Jonier y Milisay.";
      break;
      case "Sony":
        echo "Sony es Hair y Felix";
        break;
        case "Katronix":
          echo "Katronix es laura y santiago";
          break;
          case "Bancolombia":
            echo "Bancolombia es Deyaneira y Samuel";
            break;
            case "Alkosto":
              echo "Alkosto es Encarnacion y Diego ";
              break;
              default:
              echo "Empresa invalida";
}
// mostrará tuesday
?>

<?php
$x=5;
switch ($x) {
  case 1:
    echo "One";
    break;
    case 2:
      echo "Two";
      break;
      default: 
      echo "No match";
}
// mostraá "N match
?>


<?php
$day = 'wed';

switch ($day) {
  case 'mon':
    echo 'first day of the weel';
    break;
    case 'tue':
      case 'wed':
        case 'thu':
          echo 'working day';
          break;
          case 'fri':
            echo 'friday';
            break;
            default 
            echo 'weekend';
}

//Mostrará Workingday
?>

<?php
/* JONIER DAVID ARDILA
  2243172
   */
?>



<?php
$x=1;

switch ($x) {
  case 1:
    echo "one";
    case 2:
      echo "two";
      case 3:
        echo "three";
        default:
        echo "No match";
}
// onetwothreeNo match

//Como se discutió en la lección anterior, la declaración de interrupción se usa
//para romper el interruptor cuando se hace coincidir un caso.
//Si la pausa está ausente, el código sigue funcionando.
?>


<?php
for ($i=0; $i<10; $i++) {
  if ($i%2==0) {
    continue
  }
  echo $i . '';
}

// 1 3 5 7 9
?>

<?php
  echo '<h1>Welcome</h1>';
?>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Algo de texto.</p>
  <p>Algo de texto.</p>
  </body>
</html>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Mantenimiento preventivo y correctivo en la empresa de compensar EPS.</p>
  </body>
</html>

<?php
function functionName() {    
  //código a ejecutar
  //El nombre de una función puede comenzar con una letra o un guión bajo, pero no con un número o un símbolo especial.
}
?>


<?php
function sayHello () {
  echo "Hello";
}

sayHell(); // llamar a la funcion 
// salida Hola
?>

<?php
function multiplyByTwo ($number) {
  $answer = $number * 2;
  echo $answer;
}
multiplicar por dos (3);
// 6
?>


<?php
function multiply($num1, $num2) {
  echo $num1 * $num2;
}
multiply(3, 6);
// 18
?>

<?php
function setCounter($num=10) {
  echo "Counter is".$num;
}
setCounter(42); // El contador es 42
setCounter(); //El contador es 10
?>


<?php
function mult($num1, $num2) {
  $res = $num1 * $num2;
  return $res
}

echo mult(8, 3);
// 24
?>

<?php
echo $_SERVER['SCRIPT_NAME'];
// /somefile.php

//$ _SERVER es una matriz que incluye información como encabezados, rutas y ubicaciones de scripts.
//Las entradas de esta matriz son creadas por el servidor web.
//$ _SERVER ['SCRIPT_NAME'] devuelve la ruta de la secuencia de comandos actual:
?>

<?php
echo $_SERVER['HTTP_HOST'];
//muestra "localhost"
?>

<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>

<?php
require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
?>


 
 
  <form action="first.php" method="post">
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
  </form>
   

  <html>
<body>

Welcome <?php echo $_POST["name"]; ?><br />
Your age: <?php echo $_POST["age"]; ?>

</body>
</html>

<form action="actionGet.php" method="get">
  Name: <input type="text" name="name" /><br /><br />
  Age: <input type="text" name="age" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>

<?php
echo "Hi ".$_GET['name'].". ";
echo "You are ".$_GET['age']." years old.";
?>

<?php
/* JONIER DAVID ARDILA
  2243172
   */
?>


<?php
// Start the session
session_start();

$_SESSION['color'] = "rojo";
$_SESSION['nombres'] = "Jonier y Milisay ";
?> 

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Los aprendices del proyecto son  " . $_SESSION['nombres'];
// Outputs "Los nombres son Jonier y Milisay"
?>
</body>
</html>


<?php
setcookie(name, value, expire, path, domain, secure, httponly);
?>

<?php
$value = "Jonier";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: Jonier"
?>

<?php
$myfile = fopen("file.txt", "w");
?>

<?php
$myfile = fopen("names.txt", "w");

$txt = "Jonier\n";
fwrite($myfile, $txt);
$txt = "Milisay\n";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
Jonier
David
*/
?>

<?php
$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);
?>

<?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
?>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>

<?php
$read = file ('names.txt');
freach ($read as $line) {
  echo $line .",";
}
?>

<?php
$read = file('names.txt');
$count = count($read);
$i = 1;

foreach ($read as $line) {
  echo $line;
  if($i < $count) {
    echo ', ';
  }
  $i++;
}
?>


<?php
class Person {
  public $age; //property
  public function speak() { //method
    echo "Hi!"
  }
}
?>

<?php
$bob = new Person();
echo $bob->age;
class person {
  public $age;
  functin speak() {
    echo "Hi";
  }
}

$p1 = new person(); //instanciar un objeto
$p1 ->age = 23; // asignacion
echo $p1->age; // 23
$p1->speak(); // Hi
?>
<?php
/* JONIER DAVID ARDILA
  2243172
   */
?>

<?php
class Dog {
  public $legs=4;
  public function display() {
    echo $this->legs;
  }
}

$d1 = new Dog();
$d1->display(); //4

$d2 = new Dog();
$d2->legs = 2;
$d2->display(); //2
?>

<?php
class person {
  public function __construct () {
    echo "object created";
  }
}
$p = new person();
?>

<?php
class person {
public $name;
public $age;
public function __construct($name, $age) {
  $this->name = $name;
  $this->age = $age;
}
}
$p = new erson("David", 42);
?>

<?php
class person {
  public function __destruct() {
    echo "object destroyed"
  }
}
$p = new person ();
?>

<?php
class Animal {
  public $name;
  public function hi () {
    echo "Hi from Animal";
  }
}
class Dog extends Animal {
}

$d = new Dog();
$d ->hi();
?>




<?php
interface AnimalInterface {
  public function makeSound();
}

class Dog implements Animalnterface {
  public function makeSound() {
    echo "woof <br />";
  }
}
class Cat implements AnimalInterface {
  public function makeSound() {
    echo "meow <br />";
  }
}

$myObj1 = new Dog();
$myObj1->makeSound();

$myObj2 = new Cat();
$myObj2->makeSound();
?>

<?php
class Demo implements AInterface, BInterface, CInterface {
  // Las funciones declaradas en las interfaces deben definirse aquí
}
?>

<?php
abstract class frit {
  private $color;

  abstract public function eat();

  public function setColor($c) {
    $this->color = $c;
  }
}

class Apple extends Fruit {
  public function eat() {
    echo "Omnomnom";
  }
}

$obj = new Apple();
$obj->eat();
?>

<?php
class myClass {
  static $myStaticProperty = 42;
}

echo myClass::$myStaticProperty;
?>

<?php
class myClass {
  static $myProperty = 42;
  static function myMethod() {
    echo self::$myProperty
  }
}

myClass::myMethod();
?>

<?php
class myClass {
  final function myFunction() {
    echo "parent";
  }
}
// ERROR por que un metodo final no se puede anular en las clases secundarias
class myClass2 extends myClass {
  function myFunction () {
    echo "Child";
  }
}
?>

<?php
final class myFinalsClass {
}

//ERROR  por que no se puede heredar una clase final 
class myClass extends myFinalClass {
  
}
?>

<?php
/* JONIER DAVID ARDILA
  2243172
   */
?>
















</body>










 </html>
 
 