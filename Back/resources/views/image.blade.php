<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<form method="POST" action="/login">
    @csrf
    <label>Login</label>
    <input type="text" name="email">
    <br>
    <label>Password</label>
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>

</body>
</html>
