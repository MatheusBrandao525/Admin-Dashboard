<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('public/img/sistema/banner.jpeg');
            height: 97vh;
            background-color: #f5f5f5;
            background-size: cover;
            /* Faz a imagem cobrir todo o espaço disponível */
            background-position: center;
            /* Centraliza a imagem */
            background-repeat: no-repeat;
            /* Evita a repetição da imagem */
        }

        .login-container {
            width: 320px;
            padding: 20px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }


        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
            /* Ajuste o tamanho conforme necessário */
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            color: #f5f5f5;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .container-botao {
            display: flex;
            justify-content: center;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            width: 320px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <!-- Substitua 'logo.png' pelo caminho da sua logo -->
            <img src="public/img/sistema/logo.png" alt="Logo da Empresa">
        </div>
        <form action="processarLogin" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="container-botao">
                <div class="form-group">
                    <input type="submit" value="Entrar">
                </div>
            </div>
        </form>
    </div>
</body>

</html>