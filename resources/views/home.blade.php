<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
    <h1><b>Login</b></h1>

    <form action="/login" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="USERNAME" required>
        <br>
        <input type="text" name="password" id="password" placeholder="PASSWORD" required>
        <br>
        <button>LOGIN</button>
    </form>

    <p>Not a registered user? <a href="/register">Create account here</a></p>
</body>
</html>