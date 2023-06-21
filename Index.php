<?php 
print "Hola Mundo <br>";   //una cadena
echo "Hola Mundo", "          ", "2da Cadena <br>"; //mas de 2 cadenas

echo "V A R I A B L E S <br>";
// (Inicia en letras o caracter (_))(Sin espacios)(no comienzan con numeros)
$nom_variable="Texto";
$numero=777;
$float=10.5; 
$Booleano=true;

echo $nom_variable, " ", $numero, " ",  $float, " ", $Booleano, "<br>";
echo "<br>";

echo "C O N S T A N T E S <br>";
// El nombre asignado no se puede repetir en la asignacion de constantes
const ejemplo = "Constante1234"; 
echo "ejemplo Constantes", "<br>",ejemplo, "<br>";  
//Manera 2 de declarar constantes
define("direccion","bogotá");
echo "<br>";

echo "C O N V E R S I O N E S <br>";
$nombre = "nombre";
echo gettype($nombre), "<br>"; 
$nombre = 9.5;
echo gettype($nombre), "<br>";
//Ejemplo 1 ( gettype muestra el tipo de dato )
$num = "10";
$num2 = 10;
$suma = $num + $num2;
echo gettype($suma), $suma, "<br>";
//Ejemplo 2    (Forzar tipo de dato en el resultado   (intval)(strval)  )
$num = 20.5;
$num2 = 10;
$suma = $num + $num2;
echo gettype(intval($suma)), intval($suma), "<br>";
echo "<br>";

echo "C O N C A T E N A C  I Ó N (.) - I  N T E R P O L A C I Ó N <br>";
$palabra= "codigo";
$palabra2= "facilito";
//Ejemplo 1 (CONCATENACION)
echo "somos ".$palabra." ".$palabra2. "(CONCATENACION) <br>";
//Ejemplo 2 (INTERPOLACION)
echo "Hola $palabra $palabra2 (INTERPOLACION1) <br>";
echo "Hola {$palabra} facilito (INTERPOLACION2)<br>"; //  {limita la variable en la interpolacion}
echo "<br>";

echo "C O M I L L A S  D O B L E S,  S I M P L E S <br>";
$saludo = "hola";
echo "$saludo marines bienvenida";
echo "\"frase resaltada\", a parte de las demas";
echo 'I\'dont'; //con BackSlash (se puede usar comillas dentro de las simples)
echo "\$US", '$US';
echo 'marines bienvenida';
echo "<br>";

//(SINTAXIS (HEREDOC)(NOWDOC))
echo <<<heredoc
$saludo (podemos llamar variables)
se usa estee simbolo <<< para usar texto largo
heredoc;

echo <<<'nowdoc'
$saludo
crear un string, que podemos guardar en variables
nowdoc;
echo "<br>";

echo "F U N C I O N E S  D E  S T R ";
$Nombre = substr("Alexander Jimenez", 10,);
$NomCom = substr("Alexander Jimenez Pedraza",/*Posiciones*/ 10,/*Longitud*/ 7);
echo $Nombre; echo $NomCom;
echo "<br>";

//EJEMPLO2
$Bienvenida = "Bienvenido al mundo web";
$palabra = "mundo";
$buscar = strpos($Bienvenida,$palabra,14); //Extrae la posicion donde incia la palabra a buscar
$extraccion = substr($Bienvenida,$buscar,5);//Extrae la palabra solicitada con su longitud
echo $extraccion,"<br>";

//Replace o reemplazar
$rfc = "91 75 1a ec c7";
$buscar = " ";
$reemplazar = ":";
$resul = str_replace($buscar,$reemplazar,$rfc);
echo $resul;
echo "<br>";

echo "O P E R A D O R E S <br>";
//Operador Igual ==
$raza = "Husky";
var_dump($raza == "Akita");
//Operador Identico ==
$edad = 18;
var_dump($edad === 18);
//Operador Diferente != <>
$edad2 = 20;
var_dump($edad2 != 18);
$edad3 = 20;
var_dump($edad3 <> 18);
//Operador no identico !==
$edad4 = "20";
var_dump($edad4 !== 18);
//operador > mayor que
$edad5 = 2;
var_dump($edad5 > 18);
//operador >= mayor o igual que
$edad6 = 18;
var_dump($edad6 >= 18);
//operador < menor que
$edad7 = 25;
var_dump($edad7 < 18);
//operador >= mayor que
$edad8 = 2;
var_dump($edad8 <= 18);
/*Operador de nave espacial
0 ambos valores son iguales
-1 el valor es menor
1 el valor es mayor
*/
$edad9 = 2;
var_dump($edad9 <=> 18);
$edad10 = 18;
var_dump($edad10 <=> 18);
$edad11 = 20;
var_dump($edad11 <=> 18);

echo "O P E R A D O R E S  A R I T M E T I C O S <br>";
//Ope identidad (afirmacion(+))(negacion(-))
$num = +10; /*se puede asignar la neacion al numero*/
echo -$num,"<br>"; /*se puede asignar la neacion a la variable y multiplica respetando ley de signos*/
//Ope adicion +
$num1 = -10;
$num2 = 30;
echo $num1 + $num2,"<br>";
//Ope sustraccion -
$num1 = -10;
$num2 = 30;
echo $num1 - $num2,"<br>";
//Ope multiplicacion *
$num1 = -10;
$num2 = 30;
echo $num1 * $num2,"<br>";
//Ope division /
$num1 = 500;
$num2 = 30;
echo $num1 / $num2,"<br>";
//Ope modulo % ( será el residuo de una division)
$num1 = -10;
$num2 = 30;
echo $num1 % $num2,"<br>";
//Ope exponenciacion **
$num1 = 10;
$num2 = 3;
echo $num1 ** $num2,"<br>";

echo "O P E R A D O R E S  D E  A S I G N A C I O N <br>";
//Operador de asignacion =
//Operador de asignacion por referencia =&
$a = 1000;
$b =& $a; //cada vez que se cambie el valor de la variable (en este caso $a se actualiza el resultado de $b)
echo $b,"<br>";
//Operador de asignacion concatenar .=
$a = "Hola ";
$a .= "Alex";
echo $a;

echo "O P E R A D O R E S   L Ó G I C O S";
//Operador and ó &&
//Operador or ó ||
//Operador xor

echo "O P E R A D O R E S  D E  D E C R E M E N T O  Y  D E C R E M E N T O";
//Operador Pre- incremento ++$variable
//Operador Pos- incremento $variable++
//Operador Pre- decremento --$variable
//Operador Pos- decremento $variable--

echo "O P E R A D O R  T E R N A R I O,  E L V I S  Y  F U S I O N  N U L L";
//Operador ternario (operando)?Operando:Opernado
//Operador elvis ?:
//Operador Fusion null

echo "P R E C E D E N C I A  O  J E R A R Q U I A";
/*
https://www.php.net/manual/es/language.operators.precedence.php
*/


echo "E S T R U C T U R A S  D E  C O N T R O L";
//if(){} elseif(){} else{}
//switch(){case break}   
//Match (Compara el valor de la variable en sentencia y lo comparar con el contenido en bloque de codigo y lo regresa)
//while(){}
//Do{} while(){} 
//for (solo se valoran los numeros y estructura de for)
//foreach (recorre una lista o arreglo y trae los valores del arreglo)

echo "A R R E G L O S <br>";
//Coleccion ordenada de datos, y se almacenan multiples arreglos en una variable $variable=["0valor1",V2,v3]

echo "A R R E G L O S  A S O C I A T I V O S <br>";
$datos = [
    "NOMBRE"=>"Alex",
    "APELLIDOS" => "jiménez",
    "EDAD" => 23,
];
foreach($datos as $key => $valor){
    echo $key, $valor;
}

echo "ELIMINAR Y MODIFICAR ARREGLOS";
//AÑADIR DATOS
$alumnos = ["Alex","Jimenez", "Pedraza"];
$datos = [
    "NOMBRE"=>"Alex",
    "APELLIDO" => "jiménez",
    "EDAD" => 23,
];
array_push($alumnos,"José");
$datos["DOCUMENTO"]="Cedula de Ciudadanía";

//ELIMINAR DATOS
unset($alumnos[2]);
unset($datos["EDAD"]);

//MODIFICAR DATOS
$alumnos[1]="Jiménez";
$datos["DOCUMENTO"]="Jiménez";


echo "FUNCIONES DE ARREGLOS <br>";
//ver cantidad de datos de un arreglo 
var_dump(count($alumnos));
var_dump(count($datos));
//Ordenar los datos de un arreglo en orden alfabetico - numerico de menor a mayor
asort($alumnos);
asort($datos);
//Ordenar los datos de un arreglo en orden inverso a la funcion asort
arsort($alumnos);
arsort($datos);
//Busqueda 
var_dump(array_search("Alex",$alumnos));
var_dump(array_search("Jiménez",$datos));
//Reemplazo
$AlumnosCorreccion = array_replace($alumnos,[
    0=>"Gabriela",
    1=>"Alex"
]);
$datosCorreccion = array_replace($datos,[
    "APELLIDO"=>"Castellanos"
]);
var_dump($AlumnosCorreccion);
var_dump($datosCorreccion);

echo "F U N C I O N E S";
//funciones
//parametros y argumentos
//return
//Declaraciones de tipo escalar
//Funciones anonimas

echo "P O O";
//Programación Orientada a Objetos
//Crear una clase
//Variables de Instancia y Clase
//This
//Encapsulamiento
//Get y Set (https://codigofacilito.com/articulos/articulo_16_10)(https://codigofacilito.com/articulos/articulo_16_10_2019_19_18_51)
//Constructo y Destructor
//Constructor v8
//Union de tipos v8
//Herencia
//Clase abstracta
//Type Hinting  
//Polimorfismo
//Traits
//Auto Carga
//Clases Anonimas

echo "B A S E S  D E  D A T O S";
//Introducción a Bases de Datos
//Crear Base de Datos
//Conexión a Bases de Datos
//CRUD (Create, Read, Update, Delete)
//Usar CRUD

echo "M V C";
//Qué es MVC (Modelo, Vista, Controlador)
//Vista
//Controlador
//Control Frontal
//Usar Controlador

$i = 1;
$array[$i] = $i++;
echo $array[2];
?>