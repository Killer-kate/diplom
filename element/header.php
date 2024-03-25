<header class="contayner contayner-fluid" style="z-index:5;">
    <div class="card bg-dark text-white">
      <div class="card-img-overlay m-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/img/logo/logo.png" width="40" alt="logo"></a>
            <a class="navbar-brand logo-name" href="#">Destiny gift</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="/index.php">Главная</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pages/pets.php">Питомцы</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pages/contacts.php">Контакты</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pages/info.php">О нас</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pages/blog.php">Блог</a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto me-5" aria-labelledby="navbarDarkDropdownMenuLink">
                <li class="nav-item dropdown">

                  <?php
                  if ($_SESSION['name']) {
                    echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . $_SESSION['name'] . ' </a>';
                  } else {
                    echo '<li class="nav-item"><button type="button" onclick="but()"
                        class="btn btn-outline-primary toggle">Войти</button></li>';
                  }
                  ?>
                  <ul class="dropdown-menu dropdown-menu-dark" style="right: 0; left: auto;" id="navbarDropdownMenuLink">
                  <?php
                  if($_SESSION['role'] == 1){
                    echo '<li><a class="dropdown-item" href="/pages/admin.php">Личный кабинет</a></li>';
                  } else if($_SESSION['role'] == 2){
                  echo '<li><a class="dropdown-item" href="/pages/user.php">Личный кабинет</a></li>';
                  }

                  ?>
                    <li><a class="dropdown-item" href="/php/exit.php">Выйти</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <section>
      <p class="shadow">
      <div id="reg">

        <div class="form_autch">
          <p id="autorized">Авторизация</p>
          <p>/</p>
          <p id="register">Регистрация</p>
        </div>
        <p class="close">X</p>
        <form action="/php/autorisation.php" method="post" class="form_flex" id="form_aut">
          <h2>Авторизация</h2>
          <input type="email" name="email" placeholder="Введите email" required>
          <input type="password" name="password" placeholder="Введите пароль" required>
          <input type="submit" value="Войти">

        </form>
        <form action="/php/registration.php" method="post" class="form_flex1" id="form_reg" style="display:none;">
          <h2 class="form2_flex">Регистрация</h2>
          <input type="text" name="name" placeholder="Введите Имя" required>
          <input type="email" name="email" placeholder="Введите email" required>
          <input type="password" class="password" name="password" placeholder="Введите пароль" required><br>
          <span id="valid_password_message" class="mesage_error" style="color:white; margin-left:30px;"></span><br><br>
          <input type="submit" value="Зарегистрироваться" id="button">
        </form>
      </div>
      </p>
    </section>
  </header>