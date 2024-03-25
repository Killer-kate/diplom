<?php
session_start();
if ($_SESSION['error']) {
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
  </svg>
  <link rel="stylesheet" href="style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Mochiy+Pop+One&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="script/script.js"></script>
  <title>Destiny gift</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
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
  require_once('element/header.php')
?>
<div id="carouselExampleCaptions" class="carousel slide" style="margin-top:40px; z-index:0;" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/dg/header-img.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
              <h5>Прогулки</h5>
              <p>Вы можете прийдти в приют, записаться и погулять с любой собакой в парке рядом с приютом.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/dg/header2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
              <h5>Уход за питомцами</h5>
              <p>Если у вас есть желание помощь питомцам, вы можете принести продукты, игрушки, лежаки в приют.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/dg/header3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
              <h5> Команда</h5>
              <p>Мы и наши питомцы всегда будем рады если вы навестите нас.</p>
            </div>
          </div>
        </div>
      </div>
  <main>
    <h2 class="text-center p-5">О приюте Destiny gift</h2>
    <section class="contayner">
      <div class="d-flex justify-content-around info">
        <img src="img/info/onas.jpg" class="img-fluid" alt="info-logo">
        <div>
          <p class="pt-2 ps-2">Наш приют <b style="color:rgb(255, 136, 0);">Destiny gift</b> был создан для помощи
            бездомным животным таких как собаки, кошки, попугаи.
            Мы помогаем братьям нашим меньшим обрести свой дом и добрую и заботливую семью. Если вы хотите забрать
            кого-то приезжайте в наш приют
            и мы поможем выбрать для вас питомца. <br><span style="border-bottom:2px solid red;">Если же вы видели на
              улице животного позвоните нам и мы заберем и позаботимся о нем. Если у вас уже есть
              питомец, но по какой-то причине вы не можете его оставить, то вы можете привезти его к нам.</span>
          </p>
          <a type="submit" style="width:140px;" href="pages/info.php" class="btn btn-outline-primary mx-auto">Узнать больше</a>
        </div>
      </div>
    </section>
    <h2 class="text-center p-5">Наши питомцы которые обрели хозяев</h2>
    <section class="contayner contayner-fluid d-flex justify-content-around flex-wrap mx-auto" style="width:99%;">
      <div class="card card-gallery" style="width: 17rem;">
        <div class="card-img-top card-img1"></div>
        <div class="card-body">
          <h5 class="card-title">Джони</h5>
          <p class="card-text">Джони была спасена на ул Коминтерна и отправлена на лечение в приют, потом ее забрала
            хорошая семья.</p>
          <a href="pages/pets.php" class="btn btn-dark">Найти друга</a>
        </div>
      </div>
      <div class="card card-gallery" style="width: 17rem;">
        <div class="card-img-top card-img2"></div>
        <div class="card-body">
          <h5 class="card-title">Мила</h5>
          <p class="card-text">Бродяжку Милу забрали со стройки, строители позвонили и сообщили что у них бешает кошка.
          </p>
          <a href="pages/pets.php" class="btn btn-dark">Найти друга</a>
        </div>
      </div>
      <div class="card card-gallery" style="width: 17rem;">
        <div class="card-img-top card-img3"></div>
        <div class="card-body">
          <h5 class="card-title">Карбон</h5>
          <p class="card-text">Карбона забрали из семьи где с ним плохо обращалитсь, потом он нашел новую семью и теперь
            счастлив.</p>
          <a href="pages/pets.php" class="btn btn-dark">Найти друга</a>
        </div>
      </div>
      <div class="card card-gallery" style="width: 17rem;">
        <div class="card-img-top card-img4"></div>
        <div class="card-body">
          <h5 class="card-title">Перчик</h5>
          <p class="card-text">Кошечку по кличке Перчик нам принесла добрая девушка, которая нашла бродяжку на улице.
          </p>
          <a href="pages/pets.php" class="btn btn-dark">Найти друга</a>
        </div>
      </div>
      <div class="card card-gallery" style="width: 17rem;">
        <div class="card-img-top card-img5"></div>
        <div class="card-body">
          <h5 class="card-title">Вольфыч</h5>
          <p class="card-text">Этого бездомного щенка Вольфыча мы нашли на ул Тихомирого, он чуть не погиб от истощения.
          </p>
          <a href="pages/pets.php" class="btn btn-dark">Найти друга</a>
        </div>
      </div>
      <div class="card card-gallery" style="width: 17rem;">
        <div class="card-img-top card-img6"></div>
        <div class="card-body">
          <h5 class="card-title">Борман</h5>
          <p class="card-text">Птичку Бормана нам принес мужчина сказав что он им не нужен, но он уже нашел себе новую.
          </p>
          <a href="pages/pets.php" class="btn btn-dark">Найти друга</a>
        </div>
      </div>
    </section>
    <h2 class="text-center p-5">Блог по уходу за животными</h2>
    <section class="d-flex justify-content-around flex-wrap bl">
      <div class="card" style="width: 18rem;">
        <div class="card-img-top card-bl1"></div>
        <div class="card-body">
          <h5 class="card-title">Уход за собакой</h5>
          <p class="card-text">Немаловажное значение приобретает чистота шерсти после прогулки. После выгула нужно мыть лапы и живот собаки. Делать это следует шампунем для животных и насухо вытирать.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-img-top card-bl2"></div>
        <div class="card-body">
          <h5 class="card-title">Кормление</h5>
          <p class="card-text">Правильное питание животного позволяет избежать осложнений, патологий кожных покровов и пищеварительной системы, а также обменных процессов в организме собаки.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-img-top card-bl3"></div>
        <div class="card-body">
          <h5 class="card-title">Прогулка с собакой</h5>
          <p class="card-text">Выгуливать собаку следует не менее двух раз в день. Идеальным решением станет трехразовый выгул. Однако не каждый владелец способен обеспечить своему питомцу такой комфортный режим.</p>
        </div>
      </div>
    </section>
    <div class="contayner mx-auto" style="width:150px;">
      <a href="pages/blog.php"><button type="button" class="btn mt-5" id="bl-btn">Подробнее</button></a>
    </div>
    <div class="contayner contayner-fluid mt-5 image_email d-flex justify-content-end">
      <div class="d-flex align-content-end flex-wrap emailBlock">
      
        <p class="emailText">Подпишитесь на нас!<b> чтобы быть в курсе новых интересных фактов о ваших питомцах и
            делиться ими.</b></p>
        <form class="formEmail" method="post" action="php/mailing.php">
          <input type="email" name="email" placeholder="aleksey@mail.ru" required>
          <button type="submit" id="bl-btn">Подписаться</button>
        </form>
      </div>
    </div>
    </div>
  </main>
  <?php
  require_once('element/footer.php');
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
</body>
</html>