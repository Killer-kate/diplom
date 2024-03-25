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
    <h2 class="text-center p-5">Питомцы в приюте</h2>
    <div style="margin-bottom:50px;" class="div">
      <button type="submit" class="btn btn-dark mb-1" data-f="all">Все</button>
      <button type="submit" class="btn btn-dark mb-1" data-f="2">Кошки<img src="../img/pets/icon2.png" width="40" style="padding-left:5px;" alt=""></button>
      <button type="submit" class="btn btn-dark mb-1" data-f="1"> Собаки<img src="../img/pets/icon1.png" width="40" style="padding-left:5px;" alt=""></button>
    </div>
    <section class="contayner contayner-fluid d-flex justify-content-around flex-wrap mx-auto" style="width:99%;">
      <?php
      require("../bd/bd.php");
      $arr = mysqli_query($mysql, "SELECT * FROM `pets` WHERE status = 1");
      $arr = mysqli_fetch_all($arr);
      foreach ($arr as &$value) {
      ?>
        <div class="card card-gallery <?= $value[5] ?> box" style="width: 15rem;">
          <div class="card-img-top"><img src="<?= $value[1] ?>" alt="Карточка питомца" style="width:238px; height:300px;"></div>
          <div class="card-body">
            <h5 class="card-title"><?= $value[2] ?></h5>
            <p class="card-text"><?= $value[3] ?></p>
          </div>
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
  <script src="../script/filter.js"></script>
</body>

</html>