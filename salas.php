<link rel="stylesheet" href="estilos.css">
<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Salas</h1>
			</div>

			<div class="articulo">
				<article>
					<p>SERVICIOS A EMPLEADOS Y ALUMNOS </p>
					<br/>
					<p> •Toma de fotografía digital para la cuenta del Sistema Integral de Información de credenciales para el acceso. </p>
					<br/>
					<p>•Registro al realizar una reposición de credenciales.</p>
					<br/>
					<p>•Administración del software adquirido por el instituto como son licencias de Antivirus y las cuentas de Office 365.</p>
                    <br/>
                    <p>•Administración de los laboratorio 4 del Centro de Cómputo.</p>
                    <br/>
                    <p> <div align="center">  <img  src="img/centro.jpg" width="400px"  alt="FalconMasters"> </div></p>
                   <br/>
                    <p>Si te interesa adquirur alguno de estosos servicios registrate en nuestro siistema para realizar una cita</p>
				</article>
<br>
<div class="articulos">
                <form method="post">
        <p>Nombre Completo:</p>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">
        <p>Fecha:</p>
        <input type="text" id="can" name="can" placeholder="Ingresa la Fecha">
        <p>Servicio::</p>
        <input type="text" name="des" id="des" placeholder="Ingresa el Servicio">
        <br><input name="aviator" type="submit" value="AGENDAR" id="adquirir">
        <br> <br>
    </form>
</div>
        <?php 
    
        
   if (isset($_POST["aviator"])){

       $nombre = trim($_POST["nombre"]);
       $fecha = trim($_POST["can"]);
       $servicio = trim($_POST["des"]);
      
       echo "Cita registrada! Por favor revise y corrobore que sea correta: <br>
        Nombre Completo: $nombre <br>
        Servicio: $servicio <br>
        Fecha: $fecha";

     }
     
   
     
?>

			</div>


            
            <?php include("siderbar.php"); ?>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>