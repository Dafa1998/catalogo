<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: Helvetica, Arial, sans-serif;
	color: #666;
	background: #f2f2f2; 
	font-size: 1em;
	line-height: 1.5em;
}
 
h1 {
	font-size: 2.3em;
	line-height: 1.3em;
	margin: 15px 0;
	text-align: center;
	font-weight: 300;
}
 
p {
	margin: 0 0 1.5em 0;
}
 
img {
	max-width: 100%;
	height: auto;
}
#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}
 
/*
 * Logo
 */
#logo-header {
	margin-top:-2%;
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		margin-top:-0.2cm;
		display: block;
		height:1.4cm;
		width: 4cm;
		font-weight: 700
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	
 
/*
 * Navegación
 */
nav {
	float: right;
}
nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
	padding-right: 20px;
}
	
nav ul li {
    display: inline-block;
	line-height: 80px;
}
			
nav ul li a {
	display: block;
	padding: 0 10px;
	text-decoration: none;
}
			
nav ul li a:hover {
	background: #0b76a6;
}
#main-content {
	background: white;
	width: 90%;
	max-width: 800px;
	margin: 20px auto;
	box-shadow: 0 0 10px rgba(0,0,0,.1);
}
 
#main-content header,
#main-content .content {
	padding: 40px;
}
#main-footer {
	background: #333;
	color: white;
	text-align: center;
	padding: 20px;
	margin-top: 40px}
	#main-footer p {
		margin: 0;
	}
	
	#main-footer a {
		color: white;
    }
    #main-header {
	background: #333;
	color: white;
	height: 80px;
	
	width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
	left: 0; /* Posicionamos la cabecera al lado izquierdo */
	top: 0; /* Posicionamos la cabecera pegada arriba */
	position: fixed; /* Hacemos que la cabecera tenga una posición fija */
	z-index:1000;
}
body {
	margin: 0;
	padding: 0;
	font-family: Helvetica, Arial, sans-serif;
	color: #666;
	background: #f2f2f2; 
	font-size: 1em;
	line-height: 1.5em;
	
	padding-top: 80px; /* Relleno superior igual a la altura de la cabecera*/
}
.banner{
    background-image: url(" public/img/banner1.png");
    height:54.5%;
}

</style>
<title><?=$title?></title>

    <link rel="stylesheet" href="public/css/main.css">
<body>

<div class="container p4">
<header id="main-header">
		
		<a id="logo-header" href="index.php">
			<center><h2> <span class="site-name" >EmpCat</span></h2> </center>

		</a> <!-- / #logo-header -->
		<nav>
			<ul>
		<?php if(!isset($_SESSION['user']['id_rol'])):?>
				<li><a href="?url=home">Inicio</a></li>
				<li><a href="?url=catalogo">Catalogo</a></li>
				<li><a href="?url=login">Iniciar Sesion</a></li>
				<li><a href="?url=register">Registrarse</a></li>
		<?php endif ?>
			</ul>
        </nav><!-- / nav -->
        <nav>
			<ul>
            <?php if(isset($_SESSION['user']['id_rol']) && $_SESSION ['user']['id_rol'] == 2):?>
				<li><a href="?url=home">Inicio</a></li>
				<li><a href="?url=catalogo">Catalogo</a></li>
				<li><a href="?url=publication">Añadir Empresa</a></li>
                <li><a href="?url=logout">Logout</a></li>
		<?php endif ?>
			</ul>
        </nav><!-- / nav -->
        <nav>
			<ul>
            <?php if(isset($_SESSION['user']['id_rol']) && $_SESSION ['user']['id_rol'] == 1):?>
				<li><a href="?url=empresa&action=view">Administrar Empresas</a></li>
				<li><a href="?url=catalogo">Catalogo</a></li>
				<li><a href="?url=categoria">Agregar Categoria</a></li>
                <li><a href="?url=user&action=view">Administrar Usuarios</a></li>
				<li><a href="?url=publication">Añadir Empresa</a></li>
                <li><a href="?url=logout">Logout</a></li>
		<?php endif ?>
			</ul>
        </nav><!-- / nav -->
</header>
</div>
