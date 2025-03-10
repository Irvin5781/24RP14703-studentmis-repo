<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color:rgb(175, 172, 172);
        }

        h1 {
            color: #000;
            font-size: 2rem;
        }

        a {
            text-decoration: none;
            font-size: 1rem;
            margin: 0 10px;
            color:rgb(0, 126, 194);
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            text-align: center;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Students MIS</h1>
        <a href="registration.php">Register</a> || <a href="login.php">Login</a>
    </div>
</body>
</html>