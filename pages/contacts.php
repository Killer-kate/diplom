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
        <section style="margin-top:40px;">
            <div class="contayner contayner-fluid blockCard">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b2a8654ed224db832f26c478405fb3596c937703b52c76a401187fe6e438a52&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                <div class="contayner contayner-fluid d-flex justify-content-between map">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Адресс</div>
                        <div class="card-body">
                            <p class="card-text">601782 Россия Москва, ул. Искры, 23А<br>
                                Тел :<a href="tel: +7 800 555-35-35" style="color:white; text-decoration: none;"> +7 800 555-35-35</a><br>
                                E-mail: admiiskra@mail.ru</p>
                        </div>
                    </div>
                    <div class="card text-white bg-dark mb-3" id="priut" style="max-width: 18rem;">
                        <div class="card-header">Приют</div>
                        <div class="card-body">
                            <p class="card-text">601782 Россия Москва, ул. Искры, 27c1<br>
                                Тел : <a href="tel: +7 800 555-18-26" style="color:white; text-decoration: none;"> +7 800 555-18-26</a><br>
                                E-mail: iskra@mail.ru.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-dark mb-3" id="priut" style="max-width: 18rem;">
                        <div class="card-header">Приют с кошками</div>
                        <div class="card-body">
                            <p class="card-text">601782 Россия Москва, ул. Искры, 29<br>
                                Тел : <a href="tel: +7 800 555-48-59" style="color:white; text-decoration: none;"> +7 800 555-48-59</a><br>
                                E-mail: vetiskra@mail.ru</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2 class="text-center p-5 blago">Благотворительность</h2>
            <div class="contayner contayner-fluid d-flex flex-wrap justify-content-between" id="blagotvor" style="width:100%;">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="../img/contact/1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Акция "Лапа добра"</h5>
                        <p class="card-text">В приюте проходит акция где каждый желающий может придти и помочь приюту.Что можно принести:</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Корм</li>
                        <li class="list-group-item">Игрушки</li>
                        <li class="list-group-item">Лежаки</li>
                    </ul>
                </div>
                <div class="card  mb-4" style="width: 18rem;">
                    <img src="../img/contact/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Хотите стать волонтером ?</h5>
                        <p class="card-text">Вы сможете брать и гулять с любым животным, также если вам понравилась определенная собака можете закрепить ее за собой и ухаживать за ней. </p>
                        <p class="card-text">Для этого нужны:</p>
                    </div>
                    
                    <ul class="list-group list-group-flush">
                        
                        <li class="list-group-item">Паспорт</li>
                        <li class="list-group-item">Номер телефона</li>
                    </ul>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="../img/contact/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Акция "Привет друг"</h5>
                        <p class="card-text">Если вам понравилась собака вы можете с ней погулять. Для этого свяжитесь с:</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Волонтер Виктория Р.В. <a href="tel: +7(916)856-45-18" style="color:black; text-decoration: none;"> 8(916)856-45-18</a></li>
                        <li class="list-group-item">Волонтер Анжелина П.И. <a href="tel: +7(916)037-93-10" style="color:black; text-decoration: none;"> 8(916)037-93-10</a></li>
                        <li class="list-group-item">Волонтер Александр П.К. <a href="tel: +7(916)835-82-34" style="color:black; text-decoration: none;"> 8(916)835-82-34</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php
  require_once('../element/footer.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
</body>

</html>