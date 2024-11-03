<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Estilos embebidos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h2 {
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: #333;
        }
        p {
            font-size: 1rem;
            color: #666;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Página de Inicio</h1>
    <p>Esta es la página de inicio después de iniciar sesión.</p>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Cerrar Sesión
    </a>
    </div>
</body>
</html>
