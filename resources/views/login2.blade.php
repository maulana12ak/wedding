<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Sign In</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        button {
            background-color: #f05023;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #e9451f;
        }

        .forgot {
            text-align: right;
            margin-bottom: 15px;
            color: #f05023;
        }

        .signup {
            text-align: center;
            color: #f05023;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Sign In</h1>
        <form action="/login" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <div>
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit">Login</button>
            <div class="forgot"><a href="#">Forgot Password?</a></div>
            <div class="signup">Don't have an account? <a href="#">Sign Up</a></div>
        </form>
    </div>
</body>
</html>