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
?>


<div class="contayner contayner-fluid mx-auto mt-5" style="width:30%">
<form class="p-3 mb-2 bg-dark text-white mt-5" method="post" action="../php/modifiedDataPet.php" enctype="multipart/form-data">

  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="file" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea class="form-control" name="description" style="height: 150px"></textarea>
  </div>
  <div class="mb-3">
  <label class="form-label">Status</label>
  <select class="form-select" aria-label="Default select example" name="status">
  <option selected ><?=$status?></option>
  <option value="1">В приюте</option>
  <option value="2">Забрали</option>
</select>
  </div>
  <div class="mb-3">
    <label class="form-label">View</label>
    <select class="form-select" aria-label="Default select example" name="view">
  <option selected ><?=$view?></option>
  <option value="1">Собака</option>
  <option value="2">Кошка</option>
</select>
  </div>
  <button type="submit" class="btn btn-outline-success d-block mx-auto">Добавить</button>
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
