<!DOCTYPE html>
<html>

<head>
    <title>Login Staff</title>
</head>

<body>
    <h2>Login Staff Sakila</h2>

    @if($errors->any())
    <p style="color:red">{{ $errors->first() }}</p>
    @endif

    <form action="/login" method="POST">
        @csrf

        <label>Email</label><br>
        <input type="text" name="email"><br><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Masuk</button>
    </form>
</body>

</html>