<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .stud_btn {
            width: 250px;
            height: 250px;
        }
        .teach_btn {
            width: 250px;
            height: 250px;
        }
        .auth_btns {
            margin-top: 100px;
            display: inline-block;
        }
    </style>
</head>
<body>
<center><div class="auth_btns">
        <div class="btn_s">
        <form action="">
        <button class = "btn btn-primary mt-2 stud_btn"><i class = "fa fa-plus">Ученик</i></button></form></div>
        <div class="btn_t">
        <form action="teacherauth.php">
        <button class = "btn btn-primary mt-2 teach_btn"><i class = "fa fa-plus">Учитель</i></button></form></div>
    </div></center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
