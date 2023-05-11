    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <title>PHP Test</title>
    </head>
    <body>
        
        <div class="container">
            <div class="center-align">
                <video controls id="myvideo">
                    <source src="hola.mp4"></source>
                    <source src="hola.mp4"></source>
                </video>
                <a class="btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
                <?php echo '<p>Presione con el mouse</p>'; ?>
            </div>
        <div>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="Controlador/JavaScript/animacion.js">
        var elem = document.getElementById("myvideo");
        if (elem.requestFullscreen) {
        elem.requestFullscreen();
}
</script>
    </body>
    </html>
