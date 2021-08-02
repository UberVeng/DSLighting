<?php
if (isset($_POST['surname']) && !empty($_POST['surname'])){
  die();
}
if (isset($_POST['email']) && $_POST['email'] != ''){

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $userEmail = $_POST['email'];
    $phone = $_POST['phone'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $height = $_POST['height'];
    $Lx = $_POST['Lx'];
    $comment = $_POST['comment'];

  
    /* ПОЧТОВЫЙ ЯЩИК СЮДА */
    $to = "email@hostname.ru";


    $subject = "DSLighting - обращение";  
    $body = "";
    $body .= "Email: " . $userEmail ."\r\n";
    $body .= "Телефон: " . $phone ."\r\n";
    $body .= "Ширина помещения (м): " . $width ."\r\n";
    $body .= "Длина помещения (м): " . $length ."\r\n";
    $body .= "Высота помещения (м): " . $height ."\r\n";
    $body .= "Норма освещенности (Lx) или назначение помещения: " . $Lx ."\r\n";
    $body .= "Дополнительные комментарии: " . $comment ."\r\n";
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
        <button class="navbar-toggler d-flex d-lg-none" style="margin-left: auto;" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
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
          <li class="nav-item m-auto">
            <a class="nav-link m-auto" href="/contacts.php">Контакаты</a>
            <li class="nav-item m-auto">
              <a class="nav-link m-auto" href="/vacancies.html">Вакансии</a>
            </li>
          </li>
        </ul>
      </div>
    </nav>
    <main id="swup" class="transition-fade">  
      <div class="row justify-content-center text-left">
        <div class="col-12 col-md-10 col-xl-8 m-0 p-0 mb-4" style="background-image: url(/img/project.png); background-size: cover; background-position: center;">
          <div class="row p-0">
            <div class="col-12 p-3 text-center" style="background-color: rgba(255, 255, 255, .75);">
              <p><i>Чтобы заказать <b>бесплатный проект освещения</b> Dialux необходимо в форме ниже описать объект, а именно ширина, длина, высота помещения и требуемая норма освещенности либо связаться с менеджером для обсуждения более сложных особенностей объекта.</i></p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-8 col-xl-6 mx-auto my-5 p-4" style="background-color: white; border-radius: 8px;">
              <div class="row">
                <div class="col-12 mb-3 text-center">
                  <H1 class="default-font">Заказ бесплатного проекта освещения</H1>
                </div>
              </div>
              <form action="" method="POST" class="form">
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="width: 46px; color: #999;">@</span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>                  
                </div>
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg version="1.1" id="Capa_1" width="20" height="20" fill="#999" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 544.49 544.489" style="enable-background:new 0 0 544.49 544.489;"xml:space="preserve"><circle cx="243.92" cy="23.18" r="1.606"/><circle cx="248.616" cy="23.18" r="1.606"/><circle cx="253.301" cy="23.18" r="1.606"/><circle cx="257.987" cy="23.18" r="1.606"/><circle cx="262.682" cy="23.18" r="1.606"/><circle cx="267.377" cy="23.18" r="1.606"/><circle cx="272.063" cy="23.18" r="1.606"/><circle cx="276.749" cy="23.18" r="1.606"/><circle cx="281.434" cy="23.18" r="1.606"/><circle cx="286.149" cy="23.18" r="1.606"/><circle cx="290.834" cy="23.18" r="1.606"/><circle cx="295.52" cy="23.18" r="1.606"/><circle cx="300.206" cy="23.18" r="1.606"/><circle cx="304.901" cy="23.18" r="1.606"/><path d="M392.923,0H151.576c-19.508,0-35.314,15.807-35.314,35.314v473.86c0,19.507,15.807,35.314,35.314,35.314h241.338c19.508,0,35.314-15.808,35.314-35.314V35.314C428.238,15.807,412.431,0,392.923,0z M368.233,20.971c2.151,0,3.901,1.75,3.901,3.901c0,2.161-1.759,3.901-3.901,3.901c-2.161,0-3.901-1.75-3.901-3.901C364.322,22.721,366.072,20.971,368.233,20.971z M230.476,17.604h87.219c3.089,0,5.575,2.496,5.575,5.565c0,3.079-2.486,5.565-5.575,5.565h-87.219c-3.089,0-5.575-2.496-5.575-5.565C224.911,20.101,227.387,17.604,230.476,17.604zM194.894,521.262h-8.587c-0.574,0-1.033-0.469-1.033-1.043c0-0.563,0.459-1.042,1.033-1.042h8.587c0.583,0,1.042,0.479,1.042,1.042C195.926,520.793,195.467,521.262,194.894,521.262z M194.894,517.073h-8.587c-0.574,0-1.033-0.459-1.033-1.033c0-0.573,0.459-1.042,1.033-1.042h8.587c0.583,0,1.042,0.469,1.042,1.042C195.926,516.614,195.467,517.073,194.894,517.073z M202.123,519.798c0,1.234-0.995,2.238-2.228,2.238c-1.234,0-2.238-1.004-2.238-2.238v-7.372h-14.124v7.372c0,1.234-0.994,2.238-2.228,2.238c-1.233,0-2.237-1.004-2.237-2.238v-9.601c0-1.233,1.004-2.237,2.237-2.237h18.59c1.233,0,2.228,1.004,2.228,2.237V519.798L202.123,519.798z M300.206,519.11c0,4.876-3.959,8.826-8.836,8.826h-38.623c-4.887,0-8.836-3.95-8.836-8.826v-7.727c0-4.877,3.949-8.826,8.836-8.826h38.623c4.877,0,8.836,3.949,8.836,8.826V519.11z M357.858,522.457h-7.01c-1.233,0-2.228-1.004-2.228-2.238c0-1.233,0.994-2.228,2.228-2.228h7.01c1.511,0,2.734-1.177,2.734-2.62c0-1.444-1.224-2.61-2.734-2.61h-5.91c-0.22,0.306-0.497,0.459-0.994,0.497c-0.124,0.066-0.335-0.029-0.487-0.096l-3.644-1.54c-0.44-0.191-0.736-0.621-0.736-1.1c0-0.478,0.287-0.918,0.727-1.1l3.644-1.539c0.439-0.191,0.966-0.086,1.31,0.258c0.048,0.048,0.096,0.096,0.134,0.153h5.958c3.969,0,7.19,3.184,7.19,7.086C365.048,519.282,361.827,522.457,357.858,522.457z M404.685,491.513H136.859V54.449h267.826V491.513z"/>
                        </svg>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон" required>
                  </div>                  
                </div>
                <div class="row d-none invisible">
                  <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия">
                </div>
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg version="1.1" id="Layer_1" width="20" height="20" fill="#999"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 496.8 496.8" style="enable-background:new 0 0 496.8 496.8;" xml:space="preserve"><g><g><path d="M118,377.8l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C124.4,393.8,124.4,384.2,118,377.8z"/></g></g><g><g><path d="M486,107.4l-96-96C375.6-3,350-3,335.6,11.4L10.8,334.6c-14.4,16-14.4,40,0,54.4l96,96c8,8,17.6,11.2,27.2,11.2c9.6,0,19.2-3.2,25.6-11.2L486,161.8C500.4,145.8,500.4,121.8,486,107.4z M462,137.8L137.2,462.6c-3.2,3.2-4.8,3.2-8,0l-96-96c-1.6-1.6-1.6-6.4,0-8L356.4,33.8c1.6-1.6,3.2-1.6,4.8-1.6c1.6,0,3.2,0,4.8,1.6l96,96C463.6,131.4,463.6,136.2,462,137.8z"/></g></g><g><g><path d="M258.8,237l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C265.2,253,265.2,243.4,258.8,237z"/></g></g><g><g><path d="M186.8,259.4l-40-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l40,38.4c3.2,3.2,6.4,4.8,11.2,4.8s9.6-1.6,11.2-4.8C193.2,275.4,193.2,265.8,186.8,259.4z"/></g></g><g><g><path d="M140.4,305.8L102,267.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,8-1.6,11.2-4.8C146.8,321.8,146.8,312.2,140.4,305.8z"/></g></g><g><g><path d="M327.6,118.6l-38.4-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,9.6-1.6,11.2-4.8C334,134.6,334,125,327.6,118.6z"/></g></g><g>  <g><path d="M281.2,165l-38.4-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C287.6,181,287.6,171.4,281.2,165z"/></g></g><g><g><path d="M399.6,96.2l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,8-1.6,11.2-4.8C406,112.2,406,102.6,399.6,96.2z"/></g></g>
                        </svg>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="width" name="width" placeholder="Ширина помещения (м)" required>
                  </div>
                </div>
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg version="1.1" id="Layer_1" width="20" height="20" fill="#999"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 496.8 496.8" style="enable-background:new 0 0 496.8 496.8;" xml:space="preserve"><g><g><path d="M118,377.8l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C124.4,393.8,124.4,384.2,118,377.8z"/></g></g><g><g><path d="M486,107.4l-96-96C375.6-3,350-3,335.6,11.4L10.8,334.6c-14.4,16-14.4,40,0,54.4l96,96c8,8,17.6,11.2,27.2,11.2c9.6,0,19.2-3.2,25.6-11.2L486,161.8C500.4,145.8,500.4,121.8,486,107.4z M462,137.8L137.2,462.6c-3.2,3.2-4.8,3.2-8,0l-96-96c-1.6-1.6-1.6-6.4,0-8L356.4,33.8c1.6-1.6,3.2-1.6,4.8-1.6c1.6,0,3.2,0,4.8,1.6l96,96C463.6,131.4,463.6,136.2,462,137.8z"/></g></g><g><g><path d="M258.8,237l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C265.2,253,265.2,243.4,258.8,237z"/></g></g><g><g><path d="M186.8,259.4l-40-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l40,38.4c3.2,3.2,6.4,4.8,11.2,4.8s9.6-1.6,11.2-4.8C193.2,275.4,193.2,265.8,186.8,259.4z"/></g></g><g><g><path d="M140.4,305.8L102,267.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,8-1.6,11.2-4.8C146.8,321.8,146.8,312.2,140.4,305.8z"/></g></g><g><g><path d="M327.6,118.6l-38.4-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,9.6-1.6,11.2-4.8C334,134.6,334,125,327.6,118.6z"/></g></g><g>  <g><path d="M281.2,165l-38.4-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C287.6,181,287.6,171.4,281.2,165z"/></g></g><g><g><path d="M399.6,96.2l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,8-1.6,11.2-4.8C406,112.2,406,102.6,399.6,96.2z"/></g></g>
                        </svg>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="length" name="length" placeholder="Длина помещения (м)" required>
                  </div>
                </div>
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg version="1.1" id="Layer_1" width="20" height="20" fill="#999"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 496.8 496.8" style="enable-background:new 0 0 496.8 496.8;" xml:space="preserve"><g><g><path d="M118,377.8l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C124.4,393.8,124.4,384.2,118,377.8z"/></g></g><g><g><path d="M486,107.4l-96-96C375.6-3,350-3,335.6,11.4L10.8,334.6c-14.4,16-14.4,40,0,54.4l96,96c8,8,17.6,11.2,27.2,11.2c9.6,0,19.2-3.2,25.6-11.2L486,161.8C500.4,145.8,500.4,121.8,486,107.4z M462,137.8L137.2,462.6c-3.2,3.2-4.8,3.2-8,0l-96-96c-1.6-1.6-1.6-6.4,0-8L356.4,33.8c1.6-1.6,3.2-1.6,4.8-1.6c1.6,0,3.2,0,4.8,1.6l96,96C463.6,131.4,463.6,136.2,462,137.8z"/></g></g><g><g><path d="M258.8,237l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C265.2,253,265.2,243.4,258.8,237z"/></g></g><g><g><path d="M186.8,259.4l-40-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l40,38.4c3.2,3.2,6.4,4.8,11.2,4.8s9.6-1.6,11.2-4.8C193.2,275.4,193.2,265.8,186.8,259.4z"/></g></g><g><g><path d="M140.4,305.8L102,267.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,8-1.6,11.2-4.8C146.8,321.8,146.8,312.2,140.4,305.8z"/></g></g><g><g><path d="M327.6,118.6l-38.4-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,9.6-1.6,11.2-4.8C334,134.6,334,125,327.6,118.6z"/></g></g><g>  <g><path d="M281.2,165l-38.4-38.4c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l38.4,38.4c3.2,3.2,6.4,4.8,11.2,4.8s8-1.6,11.2-4.8C287.6,181,287.6,171.4,281.2,165z"/></g></g><g><g><path d="M399.6,96.2l-64-64c-6.4-6.4-16-6.4-22.4,0c-6.4,6.4-6.4,16,0,22.4l64,64c3.2,3.2,6.4,4.8,11.2,4.8c4.8,0,8-1.6,11.2-4.8C406,112.2,406,102.6,399.6,96.2z"/></g></g>
                        </svg>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="height" name="height" placeholder="Высота помещения (м)" required>
                  </div>
                </div>
                <div class="row">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg version="1.1" id="Layer_1" width="20" height="20" fill="#999"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><path d="M371.776,41.1c-70.644-57.437-179.357-56.686-248.228,15.018c-25.539,26.589-42.276,59.456-48.4,95.047c-12.294,71.457,16.574,141.512,75.339,182.825c14.003,9.845,22.033,24.118,22.033,39.159v88.765c0,27.617,22.468,50.086,50.086,50.086h66.781c27.617,0,50.086-22.469,50.086-50.086v-86.667c0-16.233,8.391-31.525,23.022-41.955c48.308-34.439,77.15-90.376,77.15-149.632C439.645,128.129,414.908,76.168,371.776,41.1z M306.083,461.915c0,9.206-7.489,16.695-16.695,16.695h-66.781c-9.206,0-16.695-7.49-16.695-16.695v-61.216h100.171V461.915z M239.302,217.052c0-9.206,7.49-16.695,16.695-16.695c9.206,0,16.695,7.49,16.695,16.695c0,9.204-7.484,16.69-16.684,16.695c-0.003,0-0.007,0-0.011,0c-0.004,0-0.007,0-0.011,0C246.785,233.742,239.302,226.256,239.302,217.052z M343.113,306.105c-21.222,15.128-34.276,37.111-36.637,61.205h-33.782V264.268c19.432-6.892,33.391-25.449,33.391-47.214c0-27.617-22.468-50.086-50.086-50.086c-27.617,0-50.086,22.469-50.086,50.086c0,21.765,13.958,40.322,33.391,47.214V367.31h-33.622c-1.819-23.817-14.702-45.667-35.989-60.633c-48.103-33.819-71.721-91.237-61.636-149.848c11.571-67.247,70.175-123.361,147.578-123.361c34.628,0,68.094,11.601,95.079,33.541c35.297,28.698,55.542,71.216,55.542,116.653C406.255,232.146,382.651,277.919,343.113,306.105z"/><path d="M255.997,66.795c-9.22,0-16.695,7.475-16.695,16.695s7.475,16.695,16.695,16.695c46.029,0,83.476,37.447,83.476,83.476			c0,9.22,7.475,16.695,16.695,16.695c9.22,0,16.695-7.475,16.695-16.695C372.864,119.221,320.437,66.795,255.997,66.795z"/>
                        </svg>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="Lx" name="Lx" placeholder="Норма освещенности (Lx) или назначение помещения" required>
                  </div>
                </div>
                <div class="row">
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg version="1.1" id="Layer_1" width="20" height="20" fill="#999" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g transform="translate(1 1)"><path d="M488.544,61.877h-26.947V34.93c0-5.389-3.593-8.982-8.982-8.982H253.855C249.84,10.496,235.733-1,219.07-1s-30.77,11.496-34.785,26.947H21.456c-5.389,0-8.982,3.593-8.982,8.982v431.158c0,5.389,3.593,8.982,8.982,8.982h26.947v26.947c0,5.389,3.593,8.982,8.982,8.982h431.158c5.389,0,8.982-3.593,8.982-8.982V70.86C497.526,65.47,493.933,61.877,488.544,61.877zM219.07,16.965c6.611,0,12.403,3.628,15.522,8.982h-31.044C206.668,20.593,212.46,16.965,219.07,16.965z M30.439,43.912H183.14v44.912c0,19.761,16.168,35.93,35.93,35.93S255,108.586,255,88.825c0-5.39-3.593-8.982-8.982-8.982c-5.389,0-8.982,3.593-8.982,8.982c0,9.881-8.084,17.965-17.965,17.965c-9.881,0-17.965-8.084-17.965-17.965V43.912h242.526V70.86v386.246H57.386H30.439V43.912z M479.561,493.035H66.368V475.07h386.246c5.389,0,8.982-3.593,8.982-8.982V79.842h17.965V493.035z"/><path d="M326.86,187.632h35.93c5.389,0,8.982-3.593,8.982-8.982s-3.593-8.982-8.982-8.982h-35.93c-5.389,0-8.982,3.593-8.982,8.982S321.47,187.632,326.86,187.632z"/><path d="M228.053,187.632h62.877c5.389,0,8.982-3.593,8.982-8.982s-3.593-8.982-8.982-8.982h-62.877c-5.389,0-8.982,3.593-8.982,8.982S222.663,187.632,228.053,187.632z"/><path d="M111.281,187.632h80.842c5.389,0,8.982-3.593,8.982-8.982s-3.593-8.982-8.982-8.982h-80.842c-5.389,0-8.982,3.593-8.982,8.982S105.891,187.632,111.281,187.632z"/><path d="M362.789,223.561h-71.86c-5.389,0-8.982,3.593-8.982,8.982c0,5.389,3.593,8.982,8.982,8.982h71.86c5.389,0,8.982-3.593,8.982-8.982C371.772,227.154,368.179,223.561,362.789,223.561z"/><path d="M237.035,223.561h-62.877c-5.389,0-8.982,3.593-8.982,8.982c0,5.389,3.593,8.982,8.982,8.982h62.877c5.389,0,8.982-3.593,8.982-8.982C246.018,227.154,242.425,223.561,237.035,223.561z"/><path d="M111.281,241.526h26.947c5.389,0,8.982-3.593,8.982-8.982c0-5.39-3.593-8.982-8.982-8.982h-26.947c-5.389,0-8.982,3.593-8.982,8.982C102.298,237.933,105.891,241.526,111.281,241.526z"/><path d="M362.789,277.456h-26.947c-5.389,0-8.982,3.593-8.982,8.982s3.593,8.982,8.982,8.982h26.947c5.389,0,8.982-3.593,8.982-8.982S368.179,277.456,362.789,277.456z"/><path d="M201.105,286.439c0,5.389,3.593,8.982,8.982,8.982h89.825c5.389,0,8.982-3.593,8.982-8.982s-3.593-8.982-8.982-8.982h-89.825C204.698,277.456,201.105,281.049,201.105,286.439z"/><path d="M111.281,295.421h44.912c5.389,0,8.982-3.593,8.982-8.982s-3.593-8.982-8.982-8.982h-44.912c-5.389,0-8.982,3.593-8.982,8.982S105.891,295.421,111.281,295.421z"/><path d="M362.789,331.351h-98.807c-5.39,0-8.982,3.593-8.982,8.982s3.593,8.982,8.982,8.982h98.807c5.389,0,8.982-3.593,8.982-8.982S368.179,331.351,362.789,331.351z"/><path d="M210.088,331.351h-35.93c-5.389,0-8.982,3.593-8.982,8.982s3.593,8.982,8.982,8.982h35.93c5.389,0,8.982-3.593,8.982-8.982S215.477,331.351,210.088,331.351z"/><path d="M111.281,349.316h26.947c5.389,0,8.982-3.593,8.982-8.982s-3.593-8.982-8.982-8.982h-26.947c-5.389,0-8.982,3.593-8.982,8.982S105.891,349.316,111.281,349.316z"/>
                        </svg>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="comment" name="comment" placeholder="Дополнительные комментарии">
                  </div>
                </div>
                <div class="row justify-content-center">
                  <input class="btn btn-primary" type="submit" name="" id="" style="font-size:1.3rem; font-family: 'Oswald', sans-serif; font-weight: 200 !important;" value="Отправить">
                </div>
              </form>
            </div>
          </div>
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
            <div class="contact-info"><a href="mailto:mirasvet@gmail.com">mirasvet54@gmail.com</a></div>
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