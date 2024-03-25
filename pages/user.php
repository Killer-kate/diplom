<?php
session_start();
require_once("../bd/bd.php");
$names = $_SESSION['name'];
$result = $mysql->query("SELECT * FROM `users` WHERE name = '$names'");
                        if($result->num_rows == 1){
                            $id = $result->fetch_assoc();
                            $mail = $id['email'];
                        }
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
        <section class="d-flex justify-content-around" style="width:70%; margin:0 auto; border:2px solid gray; border-radius:25px; padding:30px; margin-top:100px;">
            <img src="../img/logo/1.png" alt="иконка" width="100">
            <div style="width:300px; height:200px;">
                <p>Имя пользователя:<br> <?php echo $_SESSION['name'] ?></p>
                <p>Почта пользователя:<br> <?php echo $mail ?></p>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Редактировать
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Редактирование данных</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mx-auto" style="width:200px;">
        <form action="../php/newDataUser.php" method="post">
            <label>Имя пользователя:</label>
            <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name'] ?>"><br>
            <label>Почта пользователя:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $mail ?>"><br>
            <button type="submit" class="btn btn-dark mx-auto d-block" style="width:140px;">Редактировать</button>
        </form>
      </div>
    </div>
  </div>
</div>
            </div>
        </section>
        
        <h2 class="mt-5" style="text-align:center;">Обращения</h2>

        <section class="contayner contayner-fluid mx-auto appeal" id="appeals">
            <form method="post" action="../php/newAppeal.php" class="appealForm">
                <input type="text" name="title" placeholder="Тема обращения" required><br>
                <textarea name="description" placeholder="Текст обращения" required></textarea><br>
                <button type="submit" class="btn btn-outline-secondary" id="buttonAppeal">Отправить</button>
            </form>
        </section>

        


        <section class="contayner contayner-fluid mx-auto" style="width:90%; margin-top:70px;">
        <?php
                        
                        $name = $_SESSION['name'];
                        $result = $mysql->query("SELECT `id` FROM `users` WHERE name = '$name'");
                        if($result->num_rows == 1){
                            $id = $result->fetch_assoc();
                            $number = $id['id'];
                        }
                        $arr = mysqli_query($mysql, "SELECT * FROM `appeals` WHERE user = '$number'");
                        $arr = mysqli_fetch_all($arr);
                        foreach ($arr as &$value) {
                        ?>
                        <?php
                        $res = $value[4];
                            if($res == 1){
                                $string = '<p style="color:red; font-size:20px;">В обработке</p>';
                            } else {
                                $string = '<p style="color:green; font-size:20px;">Принято</p>';
                            }
                        ?>
                        <div class="alert alert-dark" role="alert">
                            <div class="d-flex flex-wrap justify-content-between">
                                <p class="pe-5"><?=$value[1]?></p>
                                <div class="d-flex" style="width:260px;"><b class="pe-5">Статус:</b> <?=$string?></div>
                            </div>
                            <p><?=$value[2]?></p>
                            
                        </div>
                        <?
                        }
                        ?>

        </section>

    </main>
    <?php
    require_once('../element/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
</body>

</html>