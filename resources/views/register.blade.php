<!-- SCCS - LAB10 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
</head>
<body>
    <h1>This is the register page</h1>

    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="USERNAME" required>
        <br>
        <input type="text" name="email" id="email" placeholder="EMAIL" required>
        <br>
        <input type="text" name="password" id="password" placeholder="PASSWORD" required>
        <br>
        <button>REGISTER</button>
    </form>
</body>
</html>