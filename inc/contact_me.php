<?php 
    } 
else    /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    if (($name=="")||($email=="")) 
        { 
        echo "Todos los campos son obligatorios, por favor completa <a href=\"\">el formulario</a> nuevamente.";
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Mensaje enviado usando tu formulario de contacto"; 
        mail("arley.cuadradosierra@gmail.com", $subject, $message, $from); 
        echo 
        "

        "; /*¡Email enviado!

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod id obcaecati quae. Sed magnam illum, unde magni, commodi blanditiis totam architecto deserunt iste, aliquid cupiditate. Rerum ullam, et! Sapiente, commodi!
            </div>
        </div>

        */
        } 
    }   
?>