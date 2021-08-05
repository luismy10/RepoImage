<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/ico" href="/icon.ico" sizes="any">
    <title>Error 404</title>
    <style>
        body {
            font-family:Arial, Helvetica, sans-serif;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content:center;
            align-items: center;
            background-color: rgba(0, 106, 193,0.9);
        }
        h1{
            font-size: 7em;
            color: #fff;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15);
        }
        h2{
            font-size: 1.5em;
            color: black;
        }
        h3{
            font-size: 1.17em;
            color: white;
        }
        button{
            color: black;
            border-radius: 0;
            outline:0;
            border: 1px solid white;
            padding: 10px 20px;
            background-color:white;
            font-size: 1em;
            font-family:Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        button:hover{
            background-color:#cccccc;
            border: 1px solid #cccccc;
            cursor:pointer;
        }
    </style>
</head>

<body>
    <h1>404</h1>
    <h3>Vaya, se ha producido un error.</h3>
    <h2>¡Oops página no encontrada!</h2>
    <button id="btnRegresar">Regresar</button>
</body>
<script>
window.addEventListener('load',function() {
    let btnRegresar = document.getElementById("btnRegresar");
    btnRegresar.addEventListener("click",function() {
        window.location.href = "/WebServicePHPSn";
    });
});

</script>
</html>