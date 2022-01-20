# ByteConsultorio
Se trata de un proyecto en equipo que realizamos en el Bootcamp de <a href="https://factoriaf5.org/">Factoria F5</a>. Trabajamos en una app llamada <a href="https://penguin-crud.github.io/ByteConsultorio/">ByteConsultorio</a>(Este link te redirecciona a nuestra app(No esta habilitado para moviles)) en la cual creamos un base de datos local para guardar citas. 
>Estas citas se tratan de problemas tecnicos en un consultora que se realizan al CTO(Chief Technology Officer) para que este pueda resolver tu problema. En esta base de datos requerimos:

<img src="public/assets/monkey.gif">

<ul> 
    <li>Un Identificador(en este caso un ID) : Para poder borrar y editar dichas citas.</li> 
    <li>Un Nombre de usuario: Para saber que persona tiene el problema.</li>
    <li>Un Email : Para que pueda recibir la respueta del CTO a su problema.</li>
    <li>Un Titulo : Para saber de que se trata en general ese problema.</li>
    <li>Un Mensaje : En este apartado estaria la descripcion extendida del problema.</li>
</ul>

Esta app cuenta con 3 vistas:

<ul> 
    <li>La CheckList : En esta se encuentran las que se hayan creado con anterioridad ademas de un boton de CREATE (Para crear una nueva cita), un boton +INFO (Se despliega un PopUp con toda la informacion de cuya cita y el boton de ACTUALIZAR) y un boton DELETE para borrar dicha cita</li> 
    <li>La CreateCita : En esta vista ingresas tus datos y tu problema en los inputs vacios. Esta se envia a la base de datos que teniamos creada y se renderiza en la vista Principal</li>
    <li>La EditCita : A esta ultima vista se accede mediante el boton ACTUALIZAR que se encuentra en el PopUp, esta nos permite unicamente editar nuestro problema sea para agregar o quitar algun comentario</li>
</ul>

Despues de toda esta explicacion vamos a ver que es lo que necesitamos para poder tener esta app. Let´s Gooooo!!!

<img src="public/assets/cat.gif">

<h2>Comenzamos 🚀</h2>

Para tener una copia de nuestro projecto debes de tener unos programas que a continuacion te vamos a mostar.

<h2>Pre-requisitos 📋</h2>

Necestitamos: <a href="https://code.visualstudio.com/">Visual Studio Code</a>(O cualquier otro editor de codigo), <a href="https://github.com/">GitHub</a> y <a href="https://www.apachefriends.org/es/index.html">XAMPP</a>(En caso de tener Windows), <a href="https://www.mamp.info/de/windows/">MAMPP</a>(En caso de tener Mac) o <a>LAMPP</a>(En caso de tener Linux). En Linux se podria Instalar XAMPP tambien(<a href="https://www.apachefriends.org/es/faq_linux.html">Info</a>).

<img src="public/assets/gato2.png">

Que es Visual Studio Code, GitHub y XAMPP/MAMPP/LAMPP???

<a>XAMPP</a>, <a>MAMPP</a>, <a>LAMPP</a> Son servidores independientes de software libre que consisten principalmente en la base de datos MySQL, el servidor web Apache y los intérpretes para lenguajes de script: PHP y Perl.

<a href="https://code.visualstudio.com/">Visual Studio Code</a> es un editor de código fuente. Es compatible con varios lenguajes de programación y un conjunto de características que pueden o no estar disponibles para un lenguaje dado.

<a href="https://github.com/">GitHub</a> es un repositorio online gratuito que permite gestionar proyectos y controlar versiones de código. Es muy utilizado por desarrolladores para almacenar sus trabajos dando así la oportunidad a millones de personas de todo el mundo a cooperar en ellos.

<img src="public/assets/gato.gif">

<h2>Instalación 🔧</h2>

Te dejaremos en la etiqueta tutoriales unos videos para poder descargar e instalar cada programa. Ademas de un video de como configurarlos para que esten vinculados.

<img src="public/assets/cat2.gif">

<h2>Tutoriales 📌</h2>

Instalacion XAMPP: <a href="https://www.youtube.com/watch?v=MtllDrDm4cM">XAMPP</a>

Instalacion MAMPP: <a href="https://www.youtube.com/watch?v=fO9AheDZi30">MAMPP</a>

Instalacion LAMPP: <a href="https://www.youtube.com/watch?v=YoYb0pGKTD0&t=253s">LAMPP</a>

Instalacion de Visual Studio Code: <a href="https://www.youtube.com/watch?v=cO5n3vMLdjE">Visual Studio Code</a>

Instalacion de GitHub: <a href="https://www.youtube.com/watch?v=tn6tloweTUs">GitHub</a>

Vinculacion de ambos: <a href="https://www.youtube.com/watch?v=htstKtlFKeE">Vinculacion</a>

Tambien vas a necesitar instalar global o localmente Composer(Link a la pagina <a href="https://getcomposer.org/download/">Composer</a>).

Una vez tengas instalado el Composer, hacer un clon del codigo en la capeta HTDOCS que se encuantra en la carpeta XAMPP o el servidor que tengas instalado (Es muy importante que sea dentro de esta carpeta porque contiene PHP que es el lenguaje que se usa en este proyecto).

Luego abrir la carpeta que se creo al clonar con tu editor de codigo y en la terminal usar el comando "composer install"(si tienes Windows) o "composer i"(si tienes Mac) para instalar la carpeta vendor y el autoload.

Ademas para conectar con la base de datos que tenemos en PhpMyAdmin debes crear un base de datos que se llame "consultas_cto" e importar el archivo que se encuentra en la carpeta "tablas", este archivo contiene las tablas que se necesitan en este projecto. les dejamos unos videos informativos a continuacion:

Crear base de datos y tablas:<a href="https://www.youtube.com/watch?v=xgltfvAkZaE">Base de datos</a>

Importar un tabla a PhpMyAdmin:<a href="https://www.youtube.com/watch?v=EZfiJu5qFMM">Tablas</a> 

Por ultimo se debe crear un archivo con el nombre "Config.php" en la carpeta Core y copiar el siguinte codigo:

<img src="public/assets/Config.png"> 

Si tienes Windows la pass por defecto seria un string vacio y si tienes mac la pass seria "root".

<img src="public/assets/tortuga.jpg">

<h2>Construido con 🛠️</h2>
  
<ul>
  <li><a href="https://trello.com/">Trello</a> - Kanban o gestor de proyectos</li>
  
  <li><a href="https://www.figma.com/">Figma</a> - Programa para diseñar el proyecto (Wireframe y Mockup)</li>
  
  <li><a href="https://www.flaticon.com/">Flaticon</a> - Bancos de iconos</li>
  
  <li><a href="https://code.visualstudio.com/">Visual Studio Code</a> - Editor de codigo</li>

  <li><a href="https://www.apachefriends.org/es/index.html">XAMPP</a> - Servidor independiente de software libre</li>
  
  <li><a href="https://github.com/">GitHub</a> - Repositorio online</li>
</ul>

<h2>Autores ✒️</h2>

Integrantes y roles dentro del proyecto:

<ul>
  
  <li>Jaume Gomicia Intriago - Scrum Team - <a href="https://github.com Exodya21">Exodya21</a></li>

  <li>David Alcalde Iglesias - Scrum Team - <a href="https://github.com/Davaious">Davaious</a></li>

  <li>Felicia Folatimilehin - Scrum Team - <a href="https://github.com/timfel20">timfel20</a></li>
  
  <li>Sergi Fuentes - Scrum Team - <a href="https://github.com/SergiFuentes">SergiFuentes</a></li>
  
  <li>Biplop Dey - Scrum Team - <a href="https://github.com/biplopdey">biplopdey</a></li>

  <li>Ariann Carvajal Menéndez - Scrum Master - <a href="https://github.com/thisisariann">thisisariann</a></li>
  
  <li>Lucas Martinez - Product Owner - <a href="https://github.com/LucasMartinez69">LucasMartinez69</a></li>

</ul>

Este grupo fue la fusion de 2 grupos y la siguiente imagen lo representa.

<img src="public/assets/grupo.png">

<h2>Expresiones de Gratitud 🎁</h2>

<ul>
  
  <li>Comenta a otros sobre este proyecto y esperemos que te halla gustado nuestra manera de explicartelo 📢.</li>
  
  <li>Invita una cerveza 🍺 o un café ☕ a alguien del equipo.</li>
  
  <li>Dar las gracias a Factoria F5 por darnos la oportunidad de poder demostrar de lo que somos capaces ( ͡🔥 ͜ʖ ͡🔥).</li>
  
  <li>Agraddecer tambien a nuestros formadores <a href="https://github.com/Diego-on-c">Diego Cordoba</a>, <a href="https://github.com/Sergi-Virgili">Sergi Virgili Flor</a> y <a href="https://github.com/MAlexGG">Alexandra Galarza</a>
  por tener tanta paciencia y por brindarnos todo su conocimiento.</li>
  
  <li>Etc.</li>
  
</ul>
<img src="public/assets/gracias.png">


