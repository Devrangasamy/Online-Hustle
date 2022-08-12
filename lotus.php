<?php
include 'connection.php';
$querry="select * from register;";
$res=mysqli_query($conn,$querry);

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="next.css" />
    <style>
    body {
      text-transform: capitalize;
    }
    :root {
      --peru: #cd9452;
      --black: #222;
      --white: #fff;
      --light-black: #666;
      --light-white: #ccc;
      --dark-bd: rgba(0, 0, 0, 0.7);
      --border: 1rem solid #aaa;
      --box-shadow: 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
    /* .home {
      width: 1300px;
    } */
    .section {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 10px;
      margin: 20px;
    }
    .detailss {
      text-align: center;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.425);
      padding-top: 20px;
      border-radius: 5px;
    }
    .imf1 {
      height: 100vh;
      width: 100vw;
    }
    .map {
      grid-column: -3/-1;
      width: 100%;
    }
    .swiper-pagination-bullet {
      display: absolute;
      bottom: 0;
    }
    .footer {
      padding: 32px;
      margin-top: 32px;
      text-align: center;
      background-color: aliceblue;
    }
    .footer .icons-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
      gap: 2rem;
    }
    .footer .icons-container .icons {
      text-align: center;
      padding: 3rem 2rem;
    }
    .footer .icons-container .icons {
      height: 6rem;
      width: 6rem;
      border-radius: 50%;
      background: var(--peru);
      margin-bottom: 0.5rem;
      line-height: 5.8rem;
      font-size: 2rem;
    }
    .footer .icons-container .icons h3 {
      font-size: 2rem;
      color: var(--black);
      padding: 1rem 0;
    }
    .footer .icons-container .icons p {
      line-height: 1.5;
      font-size: 1.7rem;
      color: var(--light-black);
      text-transform: none;
    }
    .footer .share {
      margin: 2rem 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .fab {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
    .swiper-pagination-horizontal {
      bottom: 0;
    }
    .swiper-pagination-bullet-active {
      background: var(--peru);
    }
    .footer .share a {
      text-decoration: none;
      height: 5rem;
      width: 5rem;
      line-height: 5.8rem;
      color: var(--white);
      background: var(--black);
      margin: 0 0.3rem;
      font-size: 2rem;
      text-align: center;
    }
    .footer .share a:hover {
      background: var(--peru);
    }
    .footer .credit {
      padding-top: 2rem;
      margin-top: 2rem;
      border-top: var(--border);
      font-size: 1rem;
      color: var(--light-black);
    }
    .email p {
      text-transform: none;
      /* background: var(--black); */
    }
    .footer .credit span {
      color: var(--peru);
    }
    .fab {
      height: 3rem;
    }
    .scho {
      background: url("backgr.jpg");
    }
    .heading,
    .list {
      margin-bottom: 44px;
    }
    .scho {
      font-size: 18px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    @media (max-width: 1200px) {
      .section {
        display: flex;
        flex-direction: column;
      }
    }
    
    </style>

    <link rel="stylesheet" href="lotus.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="lotus.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-xxl">
        <a href="#intro" class="navbar-brand">
          <span class="fw-bold text-secondary">
            <i class="fa-solid fa-school"></i>
            School Management
          </span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main-nav"
          aria-controls="main-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end align-center"
          id="main-nav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="../index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#footer" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="../form.html" class="nav-link">Enterdetails </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Comparator </a>
            </li>
            <li class="nav-item">
              <a href="#footer" class="nav-link">Contact us</a>
            </li>
            <li class="nav-item d-md-none">
              <a href="../Login.html" class="nav-link">Logout</a>
            </li>
            <li class="nav-item d-md-inline ms-2 d-none">
              <a href="../Login.html" class="btn btn-secondary">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="section">';
    while ($row=mysqli_fetch_array($res)){

      echo "
      <div class='containers ' style='text-align: center;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.425);
      padding-top: 20px;
      border-radius: 5px;'>
      <h1>".$row['Schoolname']."</h1>
      <p>School ID :".$row['Schoolid']."</p>
      <p>Location : ".$row['state'].",".$row['City']."</p>
      <p>Year of construction :".$row['Year']."</p>
      <p>Area :".$row['Area']." Sq.feet</p>
      <p>No.of.classrooms : ".$row['rooms']."</p>
      <p>No.of.classrooms : ".$row['capacity']."</p>
      <p>No.of.labs : ".$row['Labs']."</p>
      <p>Email id : ".$row['Email']."</p>
      <p>Phone Number : ".$row['Phone']."</p>
      </div>
      ";
    }
     echo '
</div>
    <section class="footer" id="footer">
      <div class="icon-container">
        <div class="icons">
          <i class="fas fa-phone"></i>
          <h3>phone</h3>
          <p>+123-456-7890</p>
          <p>+111-222-3333</p>
        </div>
        <div class="icons email">
          <i class="fas fa-envelope"></i>
          <h3>email</h3>
          <p>hacho_crew20@gmail.com</p>
          <p>hacko2020@gmail.com</p>
        </div>
        <div class="icons">
          <i class="fas fa-map"></i>
          <h3>address</h3>
          <p>salem ,tamilnadu-637502</p>
        </div>
      </div>
      <div class="share">
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
      </div>
      <div class="credit">
        created by <span>Hacko_Crew </span> | all rights reserved! &copy;
      </div>
    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/0772526fab.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".home-slider", {
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          700: {
            slidesPerView: 1,
          },
          1024: {
            slidesPerView: 1,
          },
        },
        autoplay: {
          delay: 2500,
        },
      });
    </script>
  </body>
</html>
';
?>