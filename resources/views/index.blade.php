<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>complete responsive coffee shop website design tutorial</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>
   
<!-- header section starts     -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center">

         <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> DThanh </a>

         <nav class="nav">
            <a href="#home">Trang chủ</a>
            <a href="#about">Hoa quả</a>
            <a href="#menu">Thực phẩm hữu cơ</a>
            <a href="#gallery">Thực phẩm khô</a>
            <a href="#blogs">Sản phẩm nổi bật</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="login-btn" class="fas fa-user"></div>
         </div>

      </div>

   </div>

</header>

<!-- login form starts -->

<div class="login-form">

   <form action="">
      <div id="close-login-form" class="fas fa-times"></div>
      <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> DThanh </a>
      <h3>Đăng ký để nhận được ưu đãi!!!</h3>
      <input type="email" name="" placeholder="Nhập email của bạn" id="" class="box">
      <input type="password" name="" placeholder="Nhập mật khẩu của bạn" id="" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">Lưu tài khoản?</label>
         <a href="#">Quên mật khẩu?</a>
      </div>
      <input type="submit" value="Đăng nhập" class="link-btn">
      <p class="account">Chưa có tài khoản? <a href="#">Tạo tài khoản mới!</a></p>
   </form>

</div>

<!-- login form ends -->

<!-- header section ends    -->


<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row align-items-center text-center text-md-left min-vh-100">
         <div class="col-md-6">
            <span>Thực phẩm sức tốt++</span>
            <h3>Nhanh nào!!!</h3>
            <a href="{{ route('foods.create') }}" class="link-btn">Thêm sản phẩm mới</a>
         </div>
      </div>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="menu" id="about">
   
   <h1 class="heading"> Hoa quả </h1>

   <div class="container box-container">
    @foreach ($food1 as $food)
      <div class="box">
         <img src="/assets/images/{{$food->image}}" alt="">
         <h3>{{$food->fruitName}}</h3>
         <a href="{{ route('foods.detail',$food->id) }}" class="link-btn">Chi tiết</a>
      </div>
      @endforeach
   </div>
</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <h1 class="heading"> Thực phẩm hữu cơ </h1>

   <div class="container box-container">
    @foreach ($food2 as $food)
        <div class="box">
            <img src="/assets/images/{{$food->image}}" alt="">
            <h3>{{$food->fruitName}}</h3>
            <a href="{{ route('foods.detail',$food->id) }}" class="link-btn">Chi tiết</a>
        </div>
      @endforeach
   </div>

</section>

<!-- menu section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <h1 class="heading"> Thực phẩm khô </h1>

   <div class="box-container container">
    @foreach ($food3 as $food)
      <div class="box">
         <img src="/assets/images/{{$food->image}}" alt="">
         <div class="content">
            <h3>{{$food->fruitName}}</h3>
            <p>An toàn, sạch sẽ. Bạn muốn đặt hàng?</p>
            <a href="{{ route('foods.detail',$food->id) }}" class="link-btn">Chi tiết</a>
         </div>
      </div>
      @endforeach

   </div>

</section>

<!-- gallery section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

   <h1 class="heading"> Sản phẩm nổi bật </h1>

   <div class="box-container container">
    @foreach ($food4 as $food)
      <div class="box">
         <div class="image">
            <img src="/assets/images/{{$food->image}}" alt="">
         </div>
         <div class="content">
            <h3>{{$food->fruitName}}</h3>
            <a href="{{ route('foods.detail',$food->id) }}" class="link-btn">Chi tiết</a>
         </div>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> By admin </span>
         </div>
      </div>
      @endforeach
   </div>

</section>

<!-- blogs section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">
  <div class="container">
      <h3>newsletter</h3>
      <p>Subscribe for latest upadates</p>
      <form action="">
         <input type="email" name="" placeholder="Bạn có góp ý?" id="" class="email">
         <input type="submit" value="Gửi" class="link-btn">
      </form>
  </div>
</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer container">

   <a href="#" class="logo"> <i class="fas fa-mug-hot"></i> coffee </a>

   <p class="credit"> Được tạo bởi <span>a Đăm Thanh</span> | cảm ơn bạn! </p>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-github"></a>
   </div>
   
</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="/assets/js/script.js"></script>

</body>
</html>