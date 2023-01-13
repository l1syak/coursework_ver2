<?php include 'foohomework.php'; ?>


<!DOCTYPE html>
<html>

<title>Администратор</title>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <form action="exit.php">
        <button type="submit" class="btn btn-primary" style="margin-right: 10px; float: right; margin-top: 5px; font" ><font face="Arial Black">Выйти</font></button>
    </form>
<body>


    <center> <h1>Вы - учитель</h1><br>

        <div class = "container">
            <div class = "row">
                <div class = "col-12">
                    <center><button class = "btn btn-primary mt-2" data-toggle = "modal" data-target = "#create">Создать класс</button></center>
                    <table class = "table table-striped table-hover mt-2 ">
                        <thead class = "thead-dark">
                        <th><center>Класс</center></th>
                        <th><center>Ссылка</center></th>
                        </thead>
                        <tbody>
                        <?php foreach (array_reverse($result) as $res) { ?>
                            <tr>
                                <td><center><?php echo $res->name ?></center></td>
                                <td><center><a href="http://localhost/coursework1/classtab.php?index=<?php echo $res->name;?>">Открыть класс</a></center></td>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>



        <!-- Modal create -->
        <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Создание класса</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action = "" method = "post">
                            <div class = "form-group">
                                <small>Класс</small>
                                <input type = "text" class = "form-control" name = "name">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary" name = "add">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>
    </form>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

