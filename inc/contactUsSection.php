 <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
?> 




<div id="contactUsSection">
<div class="contactUsSection">
	<div  class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="contactUsBackground">
				<div class="container">
					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h2>NO TE PIERDAS 
							<br><span>NINGÚN DETALLE</span></h2>
							<p id="texto">
								Suscribete a nuestro  newsletter y recibe información acerca de nuestras
								promociones y noticias de manera inmediata
							</p>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data"> 
								  <div class="form-group">
								    <input class="form-control" id="name" name="name" type="text" placeholder="Nombre completo:" required>
								  </div>
								  <div class="form-group">
								    <input class="form-control" id="email" name="email" type="text" value="" placeholder="Correo electrónico:" required>
								  </div>
								  <div class="form-group">
								 	 <textarea class="form-control" rows="" id="email" name="message" type="text" value="" placeholder="Escribenos..." required></textarea>
								  </div>
								  <button type="submit" class="btn btn-default btn-lg" name="action" value="submit">QUIERO RECIBIR MÁS INFORMACIÓN</button>
							</form>
						</div>
					</div>

				</div>
		</div>
	</div>
</div>
</div>



 







   
<?php 
    } 
else    /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "Todos los campos son obligatorios, por favor completa <a href=\"\">el formulario</a> nuevamente.";
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Mensaje enviado usando tu formulario de contacto"; 
        mail("arley.cuadradosierra@gmail.com", $subject, $message, $from); 
        echo 
        "

        "; 
        } 
    }   
?>






