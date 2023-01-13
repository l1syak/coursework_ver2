<!DOCTYPE html>
<html>

<title>Форма регистрации</title>

<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>
<link rel="stylesheet" href ="css/style.css">
<body>

<div class="container mt-4">

    <center> <h1>Форма регистрации</h1> <br>
        <form action="registerstud.php" , method="post">
            <input type="text", class="form-control", name="login", id="login", placeholder="Введите логин">
            <br>
            <input type="text", class="form-control", name="name", id="name", placeholder="Введите имя">
            <br>
            <input type="password", class="form-control", name="password", id="password", placeholder="Введите пароль">
            <br>
            <button class="btn btn-primary" type="submit">Зарегистрироваться</button>
    </form>

</div>

</body>
</html>
