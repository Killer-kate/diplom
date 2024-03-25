<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <title>Destiny gift</title>
    <script>
        $(document).ready(function() {
            $(".toggle").click(function() {
                $("#reg").toggle(1000); // скрывыаем, или отображаем второй элемент <div> в документе
                $(".shadow").toggle(1000);

            });
            $(".close").click(function() { // задаем функцию при нажатиии на элемент с классом toggle
                $("#reg").toggle(1000); // скрывыаем, или отображаем второй элемент <div> в документе
                $(".shadow").toggle(1000);
            });
        });
    </script>
</head>

<body class="m-auto">
    <?php
    require_once('../element/header.php')
    ?>
    <main>
        <h3 style="text-align:center; margin:80px 0 50px 0;">Таблица с питомцами</h3>
        <div class="alert alert-danger mt-5" id="yes" role="alert">
        Для того чтобы редактировать информацию о питомцах перейдите на компьютер!
        </div>
        <div class="contayner contayner-fluid " id="no" style="width:90%; margin:0 auto;">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col" style="width:100px;">Status</th>
                        <th scope="col" style="width:100px;">View</th>
                        <th scope="col">Редактировать</th>
                        <th scope="col">Удалить</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require("../bd/bd.php");
                    $arr = mysqli_query($mysql, "SELECT * FROM `pets`");
                    $arr = mysqli_fetch_all($arr);

                    foreach ($arr as &$value) {
                    ?>

                        <?php
                        $status = $value[4];
                        if ($status == 1) {
                            $status = 'В приюте';
                        } else if ($status == 2) {
                            $status = 'Забрали';
                        };
                        $view = $value[5];
                        if ($view == 1) {
                            $view = 'Собака';
                        } else if ($view == 2) {
                            $view = 'Кошка';
                        };

                        ?>
                        <tr>
                            <th scope="row" name="id"><?= $value[0] ?></th>
                            <td name="src"><img src="<?= $value[1] ?>" alt="pets" style="width:80px;"></td>
                            <td name="title"><?= $value[2] ?></td>
                            <td name="description"><?= $value[3] ?></td>
                            <td name="status"><?= $status ?></td>
                            <td name="view"><?= $view ?></td>

                            <td><a href="../php/redactPets.php?id=<?= $value['0'] ?>" class="btn btn-outline-success">Редактировать</a></td>

                            <td><a href="../php/DropPet.php?id=<?= $value['0'] ?>" class="btn btn-outline-danger">Удалить</a></td>

                        </tr>
                    <?
                    }
                    ?>
                </tbody>
            </table>
            <a href="../php/newPet.php" class="btn btn-outline-dark" id="no" style="margin:0 auto; width:150px; display:block;">Добавить</a>
        </div>

        <h3 style="text-align:center; margin:40px 0 50px 0;">Таблица обращений</h3>
        <div class="alert alert-danger mt-5" id="yes" role="alert">
        Для того чтобы редактировать обращения перейдите на компьютер!
        </div>
        <div class="contayner contayner-fluid" id="no" style="width:90%; margin:0 auto;">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col" style="width:550px;">Description</th>
                        <th scope="col" style="width:150px;">Status</th>
                        <th scope="col">Редактировать</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require("../bd/bd.php");
                    $arr = mysqli_query($mysql, "SELECT * FROM `appeals`");
                    $arr = mysqli_fetch_all($arr);

                    foreach ($arr as &$value) {
                    ?>

                        <?php
                        $status = $value[4];
                        if ($status == 1) {
                            $status = 'В обработке';
                        } else if ($status == 2) {
                            $status = 'Принято';
                        };

                        ?>
                        <tr>
                            <th scope="row" name="id"><?= $value[0] ?></th>
                            <td name="src"><?= $value[1] ?></td>
                            <td name="title"><?= $value[2] ?></td>
                            <td name="status"><?= $status ?></td>

                            <td><a href="../php/redactAppeals.php?id=<?= $value['0'] ?>" class="btn btn-outline-success">Редактировать</a></td>

                        </tr>
                    <?
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <h3 style="text-align:center; margin:40px 0 50px 0;">Таблица отзывов</h3>
        <div class="alert alert-danger mt-5" id="yes" role="alert">
        Для того чтобы редактировать отзывы перейдите на компьютер!
        </div>
        <div class="contayner contayner-fluid" id="no" style="width:90%; margin:0 auto;">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col" style="width:550px;">Description</th>
                        <th scope="col" style="width:150px;">Status</th>
                        <th scope="col">Редактировать</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require("../bd/bd.php");
                    $arr = mysqli_query($mysql, "SELECT * FROM `reviews`");
                    $arr = mysqli_fetch_all($arr);

                    foreach ($arr as &$value) {
                    ?>

                        <?php
                        $status = $value[3];
                        if ($status == 1) {
                            $status = 'В обработке';
                        } else if ($status == 2) {
                            $status = 'Новое';
                        } else if ($status == 3) {
                            $status = 'Рассмотрено';
                        };

                        ?>
                        <tr>
                            <th scope="row" name="id"><?= $value[0] ?></th>
                            <td name="src"><?= $value[1] ?></td>
                            <td name="title"><?= $value[2] ?></td>
                            <td name="status"><?= $status ?></td>

                            <td><a href="../php/redactReviews.php?id=<?= $value['0'] ?>" class="btn btn-outline-success">Редактировать</a></td>

                        </tr>
                    <?
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="alert alert-primary mt-5" id="yes" role="alert">
        Все функции администратора будут доступны только на компьютере.
        </div>
        
        
    </main>
    <?php
    require_once('../element/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
</body>

</html>