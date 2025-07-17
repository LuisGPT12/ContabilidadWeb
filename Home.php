<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>HeartAlert</title>
    <link rel="stylesheet" href="heartalert.css">
</head>
<body>
    <header>
        <?php include 'header.php'; ?>

    </header>
    <main>
        <h1>Historia</h1>
        <div class="alert-card">
        <div >
        <p>  La idea de HeartAlert surgio como una posible solucion a lo inconveniente que puede llegar a ser la atencion médica en hospitales y clinicas,
             ya que usualmente el personal médico tiene que patrullar de habitacion en habitacion de pacientes hospitalizados para monitorear sus signos vitales, 
             revisar si le hace falta algun medicamento que se le este administrando, entre otras cosas, pero como sabemos, pueden darse situaciones como la de un paciente al que le hayan hecho una cirugia, este tiene que estar en reposo y descanso mientras esta hospitalizado, pero debido al metodo de monitoreo actual, 
             se dan situaciones como entrar al cuarto del paciente a las 3 o 4 de la mañana a revisar todo esto, y como sabemos esto afecta negativamente el reposo de dicho paciente, por ende lo que buscamos cumplir con HeartAlert es agilizar la atencion medica a pacientes hospitalizados y volverla mas eficiente, brindando al personal medico una forma de rapida de monitorear a los pacientes, 
             enviando alertas, y notificaciones sobre el estado de los pacientes para asi no interrumpir tanto en el reposo de estos, actualmente, HeartAlert utiliza una IA entrenada en arbol de decisiones para monitorear los latidos por minuto de un paciente hospitalizado y muestra graficamente como se ve su electrocardiograma,
             de esta forma, si la IA detecta alguna anomalia o irregularidad en el paciente, alerta al personal medico para que le brinden la atencion que requiera, aumentando asi la eficiencia de la atencion medica.
        </p>
        </div>         
        </div>

        <h1>Visión y Misión</h1>
        <div class="alert-card">
            <div>
                <p><h3>Misión:</h3>
                    Desarrollar una solución tecnológica innovadora que integre inteligencia artificial y simulación de señales biomédicas para facilitar el monitoreo cardíaco en tiempo real,
                    apoyando a profesionales de la salud en la detección temprana de anomalías, mejorando la atención médica y fomentando el uso accesible de herramientas inteligentes en entornos hospitalarios y domiciliarios.
                    <br><br>
                    <h3>Visión:</h3>
                    Ser un referente en el desarrollo de sistemas inteligentes de monitoreo médico, capaces de integrarse con aplicaciones móviles y plataformas clínicas, 
                    contribuyendo a una atención sanitaria más eficiente, preventiva y tecnológica, y promoviendo la investigación y evolución del uso de IA en la salud a nivel nacional e internacional.

                </p>
            </div>
        </div>
    </main>
   <br><br>
   <button class="btn" onclick="location.href='excel.php'">Excel</button>
    <?php include 'footer.php'; ?>

</body>
</html>
