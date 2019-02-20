  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     </body>

      
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>VRC Control de Clientes</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
</head>
<body>

    <div class="principal">
    <div class="wrap">
        <a href="home.php" style="color: white; text-decoration: none">Regresar a Principal (Se eliminaran las tareas)</a>
        <form class="formulario" action="">
            <input type="text" id="tareaInput" placeholder="Agrega tu tarea a realizar">
            <input type="button" class="boton" id="btn-agregar" value="Agregar Tarea">
        </form>
    </div>
</div>

<div class="tareas">
    <div class="wrap">
        <ul class="lista" id="lista">
            <li><a href="#">Solo al tocal click en esta tarea la eliminaras</a></li>
        </ul>
</div>


</body>
</html>
<script type="text/javascript">
(function(){
// Variables
var lista = document.getElementById("lista"),
    tareaInput = document.getElementById("tareaInput"),
    btnNuevaTarea = document.getElementById("btn-agregar");

// Funciones
var agregarTarea = function(){
    var tarea = tareaInput.value,
        nuevaTarea = document.createElement("li"),
        enlace = document.createElement("a"),
        contenido = document.createTextNode(tarea);

    if (tarea === "") {
        tareaInput.setAttribute("placeholder", "Agrega una tarea valida");
        tareaInput.className = "error";
        return false;
    }

    // Agregamos el contenido al enlace
    enlace.appendChild(contenido);
    // Le establecemos un atributo href
    enlace.setAttribute("href", "#");
    // Agrergamos el enlace (a) a la nueva tarea (li)
    nuevaTarea.appendChild(enlace);
    // Agregamos la nueva tarea a la lista
    lista.appendChild(nuevaTarea);

    tareaInput.value = "";

    for (var i = 0; i <= lista.children.length -1; i++) {
        lista.children[i].addEventListener("click", function(){
            this.parentNode.removeChild(this);
        });
    }

};
var comprobarInput = function(){
    tareaInput.className = "";
    teareaInput.setAttribute("placeholder", "Agrega tu tarea");
};

var eleminarTarea = function(){
    this.parentNode.removeChild(this);
};

// Eventos

// Agregar Tarea
btnNuevaTarea.addEventListener("click", agregarTarea);

// Comprobar Input
tareaInput.addEventListener("click", comprobarInput);

// Borrando Elementos de la lista
for (var i = 0; i <= lista.children.length -1; i++) {
    lista.children[i].addEventListener("click", eleminarTarea);
}
}());
</script>

<style type="text/css">
    * {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    background: #x;
    font-family: arial, helvetica, sans-serif;
    font-size: 16px;
}

.wrap {
    margin: auto;
    max-width: 800px;
    width: 90%;
}

.principal {
    background: #009FDF;
    border-top: 20px solid #00609F;
    color: #fff;
    padding: 50px 0;
    width: 100%;
}

.principal .formulario {
    color: #212121;
    text-align: center;
}

.principal .formulario input[type=text] {
    margin-bottom: 20px;
    padding: 10px;
    width: 100%;
}

.principal .formulario input[type=text].error {
    border: 5px solid #D32F2F;
    color: red;
}

.principal .formulario .boton {
    background: none;
    border: 1px solid #FFFFFF;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    padding: 15px;
}

.principal .formulario .boton:hover {
    border: 1px solid #fff;
}

/* - Tareas - */
.tareas .lista {
    list-style: none;
}

.tareas .lista li {
    border-bottom: 1px solid #B6B6B6;
}

.tareas .lista li a {
    color: #212121;
    display: block;
    padding: 20px 0;
    text-decoration: none;
}

.tareas .lista li a:hover {
    text-decoration: line-through;
}
</style>

