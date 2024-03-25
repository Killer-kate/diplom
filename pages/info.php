<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Destiny gift - это первый самый большой приют для животных в россии открытый в 2022 году." />
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
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
        <h2 class="text-center p-4" style="margin-top:40px;">Информация о питомцах</h2>
        <?php
        require("../bd/bd.php");
        $rez1 = $mysql->query("SELECT * FROM `pets` WHERE status = 1");
        $rezult1 = mysqli_num_rows($rez1);
        $rez2 = $mysql->query("SELECT * FROM `pets` WHERE status = 2");
        $rezult2 =  mysqli_num_rows($rez2);
        ?>
        <div class="contayner contayner-fluid d-flex flex-wrap mb-5">
            <div class="contayner contayner-fluid mx-auto mb-4" style="width:300px; height:300px;">
                <canvas id="myChart"></canvas>
            </div>
            <?php
            if ($_SESSION['name']) {
                echo '<form method="post" action="../php/newReviews.php" class="contayner contayner-fluid mx-auto formReviews" style="width:300px; height:300px;">
                <p>Написать отзыв</p>
                <textarea name="description" placeholder="Напишите ваш отзыв об этом месте" required></textarea>
                <button type="submit" class="btn btn-outline-dark btn2">Отправить</button>
            </form>';
            }
            ?>

        </div>
        <?php
        if ($_SESSION['name']) {
        } else {
        echo '
 <div class="alert alert-dark mb-3" role="alert" style="width:80%; margin:0 auto;">
  <p>Для того чтобы написать отзыв о питомнике пожалуйста зарегистрируйтесь. А так же если вы нашли бездомное животное при авторизации вы можете написать обращение и увидеть его статус в личном кабинете.</p>
</div>';
}
?>
        <h2 style="text-align: center; margin-bottom: 40px;">Отзывы наших посетителей</h2>
       
        
        <div class="d-flex flex-wrap justify-content-around" id="divBlocko">
        <?php
        require_once("../bd/bd.php");
        $arr = mysqli_query($mysql, "SELECT * FROM `reviews` WHERE status = 3");
        $arr = mysqli_fetch_all($arr);
        foreach ($arr as &$value) {
        ?>
            <div class="alert alert-dark mb-4 " id="alertOtz"  role="alert">
                <div class="d-flex">
                    <img src="../img/logo/2.png" alt="logo" id="imgCats" style="margin-right:20px;">
                    <div>
                        <p><?=$value[1]?></p>
                        <hr>
                <p><?=$value[2]?></p>
                    </div>
                </div>
                
            </div>
        <?
        }
        ?>
         </div>
    </main>
    <?php
    require_once('../element/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['В приюте', 'Забрали'],
                datasets: [{
                    label: 'Питомцы',
                    data: [<?= $rezult1 ?>, <?= $rezult2 ?>],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>