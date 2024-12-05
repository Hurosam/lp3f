<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Académica - Universidad X</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
            color: #343a40;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .full-height {
            flex: 1;
        }
        .header, .footer {
            background-color: #007bff;
            color: white;
        }
        .footer {
            text-align: center;
        }
        .nav-link {
            color: white;
            margin-right: 20px;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="header p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-lg font-bold">PLANTILLA GENERICA</div>
            <nav>
            @auth
            @if(Auth::user()->tipo == "estudiante")
                <a href="/Registro/Proyecto" class="nav-link">Registrar Proyecto</a>
                <a href="/Registro/Tareas" class="nav-link">Registrar Salones</a>

            @elseif(Auth::user()->tipo == "administrador")
                <a href="/Registro/Tareas" class="nav-link">Registrar Salones</a>
                <a href="/Registro/Proyecto" class="nav-link">Registrar Proyecto</a>

            @endif
            @endauth
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link">Perfil</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </header>

    <main class="flex-center full-height">
        <div class="text-center">
            <div class="text-6xl text-blue-600 font-bold pt-3 sm:pt-5">
                PLANTILLA GENERICA - LOGUEARSE PARA VER TODO
            </div>
            </div>
        </div>
    </main>

    <footer class="footer p-4">
        <div class="container mx-auto">
            <p>&copy; 2024 PLANTILLA GENERICA. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
