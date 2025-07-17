<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Shri Solar</title>
    <Style>
        /* Reset some defaults */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body background and centering */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000000;
        }

        /* Login form container */
        .login-container {
            background: #2e2e2e;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgb(253, 255, 122);
            width: 300px;
        }

        /* Heading */
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: yellow;
        }

        /* Labels and inputs */
        .login-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: yellow;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Button */
        .login-container button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .login-container button:hover {
            background: #0056b3;
        }
    </Style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>

            <button type="submit" onclick="window.location.href='register.php';">New Registration</button>
        </form>
    </div>
</body>

</html>