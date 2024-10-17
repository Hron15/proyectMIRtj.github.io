<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo Institucional de Representantes</title>
    <link rel="shortcut icon" href="./images/Favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('./images/fondo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h1 {
            margin-bottom: 1em;
        }

        .login-container div {
            margin-bottom: 1em;
        }

        .login-container label {
            display: block;
            margin-bottom: 0.5em;
        }

        .login-container input {
            width: 100%;
            padding: 0.5em;
            box-sizing: border-box;
        }

        .login-container button {
            padding: 0.5em 1em;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Registrarse</h1>
        <form id="login-form">
            <div>
                <label for="correo-institucional">Correo Institucional:</label>
                <input type="email" id="correo-institucional" name="correo-institucional" required>
            </div>
            <div>
                <label for="tarjeta-identidad">Tarjeta de Identidad:</label>
                <input type="text" id="tarjeta-identidad" name="tarjeta-identidad" required>
            </div>
            <div>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" min="0" required>
            </div>
            <div>
                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" required>
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <button type="submit">Registrar</button>
        </form>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const correoInstitucional = document.getElementById('correo-institucional').value;
            const tarjetaIdentidad = document.getElementById('tarjeta-identidad').value;
            const edad = document.getElementById('edad').value;
            const curso = document.getElementById('curso').value;
            const nombre = document.getElementById('nombre').value;

            if (edad < 0) {
                alert('La edad no puede ser negativa');
                return;
            }

            console.log('Correo Institucional:', correoInstitucional);
            console.log('Tarjeta de Identidad:', tarjetaIdentidad);
            console.log('Edad:', edad);
            console.log('Curso:', curso);
            console.log('Nombre:', nombre);

            // Aquí puedes añadir el código para enviar los datos al servidor o procesarlos según tus necesidades.
        });
    </script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>

