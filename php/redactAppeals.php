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
</head>

<body class="m-auto">
    <?php
    require_once('../element/header.php')
    ?>
    <main>
        <?php
        require("../bd/bd.php");
        $id = $_GET['id'];
        $appeals = $mysql->query("SELECT * FROM `appeals` WHERE `id` = '$id'");
        $appeal = mysqli_fetch_array($appeals);
        ?>

        <?php
        $status = $appeal[4];
        if ($status == 1) {
            $status = 'В обработке';
        } else if ($status == 2) {
            $status = 'Принято';
        };
        ?>

        <div class="contayner contayner-fluid mx-auto mt-5" style="width:30%">
            <form class="p-3 mb-2 bg-dark text-white" method="post" action="modifiedDataAppeal.php?id=<?=$id?>">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $appeal[1] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" style="height: 150px"><?= $appeal[2] ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected><?= $status ?></option>
                        <option value="1">В обработке</option>
                        <option value="2">Принято</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-success d-block mx-auto">Редактировать</button>
            </form>
        </div>
    </main>
    <?php
    require_once('../element/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
</body>
</html>

<?php

$status = $_POST['status'];
echo $status;

// $mysql->query("UPDATE `appeals` SET `status` = '2' WHERE `appeals`.`id` = 15");
?>