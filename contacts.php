<?php
if (isset($_POST['surname']) && !empty($_POST['surname'])){
  die();
}
if (isset($_POST['email']) && $_POST['email'] != ''){

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $message = $_POST['message'];

  
    /* ПОЧТОВЫЙ ЯЩИК СЮДА */
    $to = "email@hostname.ru";


    $subject = "DSLighting - обращение";  
    $body = "";  
    $body .= "От: " . $userName ."\r\n";
    $body .= "Email: " . $userEmail ."\r\n";
    $body .= "Сообщение: " . $message ."\r\n";
    mail($to, $subject, $body, "From: me");

    header('Location: thank-you.html');
  }
  

}

?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>DSLighting</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
    <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>  
    <script defer src="/script.js"></script> 
  </head>
  <body>
    <nav class="navbar navbar-expand-md sticky-top p-1 p-sm-2 navbar-light bg-light" style="background-color: #ffffffed !important;">
      <div class="col-2 col-sm-2 p-1 d-none d-sm-flex d-md-none"></div>
      <div class="col-8 col-sm-8 col-md-4 col-xl-2 p-0 d-flex justify-content-center">
        <a class="navbar-brand ml-auto mr-0 mr-sm-auto" href="/index.html"></a>
      </div>
      <div class="col-3 col-sm-2 p-0 pr-1 p-sm-1 d-md-none justify-content-center" style="width: auto;">
        <button class="navbar-toggler d-flex d-lg-none" style="margin-left: auto;" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    
      <div class="col-12 col-md-8 p-0 collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mt-2 mt-lg-0">
          <li class="nav-item m-auto">
            <a class="nav-link" href="/index.html">Главная</a>
          </li>
          <li class="nav-item m-auto">
            <a class="nav-link" href="/about.html">О нас</a>
          </li>
          <li class="nav-item m-auto">
            <a class="nav-link" href="/objects.html">Объекты</a>
          </li>
          <li class="nav-item m-auto dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Продукция</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="/office.html">Для офиса</a>
              <a class="dropdown-item" href="/promlight.html">Для производства</a>
              <a class="dropdown-item" href="/streetlight.html">Для улицы</a>
              <a class="dropdown-item" href="/ex.html">Взрывозащита</a>
              <a class="dropdown-item" href="/low-voltage.html">Низковольтное оборудование</a>
            </div>
          </li>
          <li class="nav-item m-auto active">
            <a class="nav-link m-auto" href="/contacts.php">Контакаты</a>
            <li class="nav-item m-auto">
              <a class="nav-link m-auto" href="/vacancies.html">Вакансии</a>
            </li>
          </li>
        </ul>
      </div>
    </nav>
    <main id="swup" class="transition-fade">
    <div class="col-12 col-sm-10 col-lg-6 col-xl-4 p-1 p-md-2 p-lg-3 m-auto main-info" style="padding-bottom: 50px !important; padding-top: 50px !important;">- КОНТАКТЫ ДЛЯ СВЯЗИ С НАМИ -</div>      
      <div class="row justify-content-center text-left">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mb-4">
          <div class="row font-weight-lighter justify-content-center"><h5>Ул. Троллейная, 87, корп.1, 2 этаж, г.Новосибирск, Россия</h5></div>
          <div class="row font-weight-lighter justify-content-center mb-5"><h5>ПН–ПТ:  9:00–18:00  /  СБ-ВС: выходной</h5></div>
          <!-- MAP -->
          <div class="row font-weight-lighter justify-content-center"><h5>Обращайтесь к нам и мы обязательно ответим:</h5></div>
          <div class="row font-weight-lighter justify-content-center"><h5>Email:  mirasvet54@gmail.com  /  Телефон:  +7-383-251-00-22</h5></div>
        </div>      
      </div>
      <div>
      <div class="row">
        <div class="col-12 col-sm-8 col-lg-6 col-xl-5 mx-auto p-2 p-sm-3 p-md-4 p-lg-5">
          <form action="" method="POST" class="form">
            <div class="row">
              <input type="text" class="w-100 mb-4 px-2" style="font-family: 'Oswald', sans-serif; font-weight: 200 !important;" id="name" name="name" placeholder="Имя" required>
            </div>
            <div class="row d-none invisible">
              <input type="text" class="w-100 mb-4 px-2" style="font-family: 'Oswald', sans-serif; font-weight: 200 !important;" id="surname" name="surname" placeholder="Фамилия" >
            </div>
            <div class="row">
              <input type="email" class="w-100 mb-4 px-2" style="font-family: 'Oswald', sans-serif; font-weight: 200 !important;" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="row">
              <input type="text" class="w-100 mb-4 px-2" style="height: 200px; padding: 0 0 160px 0; font-family: 'Oswald', sans-serif; font-weight: 200 !important;" id="message" name="message" placeholder="Сообщение">
            </div>
            <div class="row">
              <input class="btn btn-primary" type="submit" name="" id="" style="font-family: 'Oswald', sans-serif; font-weight: 200 !important;" value="Отправить">
            </div>
          </form>
        </div>      
      </div>      
    </main>
    <footer>
      <div class="row mb-0 mb-sm-5">
        <div class="col-4 d-none d-sm-flex p-0"></div>
        <div class="col-4 d-none d-sm-flex p-0 socials">
          <div class="row h-100 justify-content-center" style="width: 100%;">
            <a href="https://www.facebook.com/mirasvet54/" target="_blank" class="my-auto">
              <img src="/icons/facebook.svg" style="height: 30px;" alt="">
            </a>
            <a href="https://www.instagram.com/mirasvet54/" target="_blank" class="my-auto">
              <img src="/icons/instagram.svg" style="height: 30px;" alt="">
            </a>
          </div>          
        </div>
        <div class="col-12 col-sm-4 col-lg-2 col-xl-2 p-0 contact-box">
          <div class="ml-auto mr-auto mr-md-5 mr-sm-5 contact-inner-box">
            <div class="contact-info">Звоните и пишите нам:</div>
            <div class="contact-info">+7-383-251-00-22</div>
            <div class="contact-info"><a href="mailto:mirasvet@gmail.com"><email data-user="mirasvet" data-domain="gmail.com">@</email></a></div>
          </div>
        </div>

        <div class="col-2 d-none d-lg-flex p-2"></div>

        <div class="col-12 d-flex d-sm-none my-5">
          <div class="row h-100 justify-content-center" style="width: 100%;">
            <a href="https://www.facebook.com/mirasvet54/" target="_blank" class="my-auto">
              <img src="/icons/facebook.svg" style="height: 50px;" alt="">
            </a>
            <a href="https://www.instagram.com/mirasvet54/" target="_blank" class="my-auto">
              <img src="/icons/instagram.svg" style="height: 50px;" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center" style="font-family: 'Oswald', sans-serif;">
          <h6>© 2021 DSlight</h6>
        </div>
        <div class="col-12 text-center" style="font-family: 'Oswald', sans-serif;">
          <h6>г. Новосибирск</h6>
        </div>        
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>