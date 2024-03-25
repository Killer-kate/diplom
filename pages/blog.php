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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Mochiy+Pop+One&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <title>Destiny gift</title>
    <script>
        $(document).ready(function () {
            $(".toggle").click(function () {
                $("#reg").toggle(1000); // скрывыаем, или отображаем второй элемент <div> в документе
                $(".shadow").toggle(1000);

            });
            $(".close").click(function () { // задаем функцию при нажатиии на элемент с классом toggle
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
        <h2 class="text-center p-5">Блог</h2>
        <section class="contayner contayner-fluid d-flex justify-content-around flex-wrap">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon1.png" alt="иконка собаки" width="60">Питание</h3><p class="card-text"><small class="text-muted">Выложенно 22.02.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/4.jpg" style="width:250px; height:auto;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Правильно питание</h5>
                            <p class="card-text">Правильное питание животного позволяет избежать осложнений, патологий кожных покровов и пищеварительной системы, а также обменных процессов в организме собаки.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon2.png" alt="иконка собаки" width="60">Лоток</h3><p class="card-text"><small class="text-muted">Выложенно 18.02.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/7.jpg" style="width:176px; height:auto;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Приучение к лотку</h5>
                            <p class="card-text"> Многим кошкам нравится ходить в туалет в лоток, а не в другие места в доме благодаря текстуре наполнителя. Однако вам стоит все равно постараться сделать лоток самым привлекательным местом.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon2.png" alt="иконка собаки" width="60">Когтеточка</h3><p class="card-text"><small class="text-muted">Выложенно 8.02.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/6.jpg" style="height:230px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Установка когтеточки</h5>
                            <p class="card-text"> Кошкам нужно точить когти, и отучить их от этого невозможно. Если у кошки есть когти, ей потребуется 1 или 2 когтеточки, чтобы она не точила когти о мебель, дерево и так далее.</p>
 
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon1.png" alt="иконка собаки" width="60">Выгул</h3><p class="card-text"><small class="text-muted">Выложенно 1.02.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/3.jpg" style="height: 238px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Ежедневный выгул</h5>
                            <p class="card-text"> Выгуливать собаку следует не менее двух раз в день. Идеальным решением станет трехразовый выгул. Однако не каждый владелец способен обеспечить своему питомцу такой комфортный режим.</p>
                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon1.png" alt="иконка собаки" width="60">Уход за шерстью</h3><p class="card-text"><small class="text-muted">Выложенно 28.01.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/5.jpg" style="height:230px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Гигиеническая стрижка</h5>
                            <p class="card-text"> Все собаки нуждаются в регулярном уходе. Отличается всегда по объему временных и физических затрат. Специалисты выделяют 3 типа шерсти: Длинная, Короткая, Шерсть средней длины.</p>
                              
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon1.png" alt="иконка собаки" width="60">Дрессировка</h3><p class="card-text"><small class="text-muted">Выложенно 21.01.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/1.jpg" style="height:230px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Воспитание и дрессировка</h5>
                            <p class="card-text">Главным моментом содержания собаки является дрессировка. Принимая решение стать владельцем пса, нужно понимать, обучать следует не только представителей служебных или охранных пород. </p>
                                
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon1.png" alt="иконка собаки" width="60">Груминг</h3><p class="card-text"><small class="text-muted">Выложенно 17.01.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/2.jpg" style="height:238px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Гигиена</h5>
                            <p class="card-text">Немаловажное значение приобретает чистота шерсти после прогулки. После выгула нужно мыть лапы и живот собаки. Делать это следует шампунем для животных и насухо вытирать.</p>
                              
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon2.png" alt="иконка собаки" width="60">Уход за шерстью</h3><p class="card-text"><small class="text-muted">Выложенно 8.01.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/9.jpg" style="height:230px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Вычесывание шерсти</h5>
                            <p class="card-text"> Обращайте внимание на блох и других паразитов, необычные покраснения, уплотнения, наросты и на другие проблемы с кожей. Если заметите подозрительное, сообщите об этом ветеринару.</p>
                              
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon2.png" alt="иконка собаки" width="60">Игры</h3><p class="card-text"><small class="text-muted">Выложенно 5.01.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/8.jpg" style="height:230px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Игра 2 раза в день</h5>
                            <p class="card-text"> Для физического и психологического здоровья кошке нужно ежедневно взаимодействовать с человеком. Предлагайте кошке игрушки, разговаривайте с ней и вычесывайте ее.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="d-flex justify-content-between"><h3 style="color: rgb(255, 136, 0);"><img src="../img/blog/icon1.png" alt="иконка собаки" width="60">Стрижка когтей</h3><p class="card-text"><small class="text-muted">Выложенно 1.01.22</small></p></div>
                    <div class="col-md-4">
                        <img src="../img/blog/2.jpeg" style="height:238px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Уход за когтями</h5>
                            <p class="card-text">Стрижка когтей также должна выполняться регулярно. Для этого необходимо приобрести когтерез подходящего размера и формы. После обрезки можно подточить когти питомца.</p>
                        </div>
                    </div>
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