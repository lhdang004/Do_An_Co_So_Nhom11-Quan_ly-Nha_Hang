<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>about us</h3>
      <p><a href="home.php">home</a> <span> / about</span></p>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.png" alt="">
         </div>

         <div class="content">
            <h3>Tại sao lại chọn chúng tôi?</h3>
            <p>Nhà hàng sushi của chúng tôi hân hạnh mang đến cho bạn trải nghiệm
               ẩm thực tinh tế với các món sushi tuyệt hảo. Với đội ngũ đầu bếp tài
               ba, chúng tôi cam kết sử dụng nguyên liệu tươi ngon nhất, đảm bảo
               mỗi món ăn đều đạt đỉnh cao của hương vị và nghệ thuật. Hãy đến và
               thưởng thức không gian ấm cúng, thân thiện cùng dịch vụ chuyên
               nghiệp của chúng tôi. Chúng tôi luôn sẵn sàng chào đón và mang đến
               cho bạn những khoảnh khắc ẩm thực khó quên. 🍣✨</p>
            <a href="menu.html" class="btn">our menu</a>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">
      <h1 class="title">simple steps</h1>
      <div class="box-container">
         <div class="box">
            <img src="images/step-1.png" alt="" />
            <h3>choose orders</h3>
            <p>
               Đặt món sushi tươi ngon dễ dàng và nhanh chóng với dịch vụ của chúng
               tôi. 🍣🚀
            </p>
         </div>
         <div class="box">
            <img src="images/step-2.png" alt="" />
            <h3>fast delivery</h3>
            <p>
               Đặt món sushi nhanh chóng và dễ dàng! Chúng tôi giao hàng tươi ngon.
               🍣🚀
            </p>
         </div>
         <div class="box">
            <img src="images/step-3.png" alt="" />
            <h3>enjoy food</h3>
            <p>
               Hãy thưởng thức món sushi ngon tại nhà hàng của chúng tôi và trải
               nghiệm! 🍣✨
            </p>
         </div>
      </div>
   </section>

   <!-- steps section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">
      <h1 class="title">customer's reviews</h1>
      <div class="swiper reviews-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide">
               <img src="images/pic-1.png" alt="" />
               <p>
                  Nhà hàng Nhật Bản này có các món ăn tươi ngon, dịch vụ chuyên
                  nghiệp và không gian ấm cúng. Sushi được chuẩn bị tỉ mỉ, mang
                  hương vị đích thực của Nhật Bản. 🍣✨
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>le dang</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-4.png" alt="" />
               <p>
                  Nhà hàng Nhật Bản này có các món ăn tươi ngon, dịch vụ chuyên
                  nghiệp và không gian ấm cúng. Sushi được chuẩn bị tỉ mỉ, mang
                  hương vị đích thực của Nhật Bản. 🍣✨
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>huong tit</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-6.png" alt="" />
               <p>
                  Nhà hàng Nhật Bản này có các món ăn tươi ngon, dịch vụ chuyên
                  nghiệp và không gian ấm cúng. Sushi được chuẩn bị tỉ mỉ, mang
                  hương vị đích thực của Nhật Bản. 🍣✨
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>maaikey</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-3.png" alt="" />
               <p>
                  Nhà hàng Nhật Bản này có các món ăn tươi ngon, dịch vụ chuyên
                  nghiệp và không gian ấm cúng. Sushi được chuẩn bị tỉ mỉ, mang
                  hương vị đích thực của Nhật Bản. 🍣✨
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>thanh than thanh</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-2.png" alt="" />
               <p>
                  Nhà hàng Nhật Bản này có các món ăn tươi ngon, dịch vụ chuyên
                  nghiệp và không gian ấm cúng. Sushi được chuẩn bị tỉ mỉ, mang
                  hương vị đích thực của Nhật Bản. 🍣✨
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>dieu linh</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-5.png" alt="" />
               <p>
                  Nhà hàng Nhật Bản này có các món ăn tươi ngon, dịch vụ chuyên
                  nghiệp và không gian ấm cúng. Sushi được chuẩn bị tỉ mỉ, mang
                  hương vị đích thực của Nhật Bản. 🍣✨
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>mon mon</h3>
            </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </section>
   <!-- reviews section ends -->



















   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->=






   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>

      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         grabCursor: true,
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
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });

   </script>

</body>

</html>