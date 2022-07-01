<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add || DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="login-form">
    @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
    @endif
    <form class="row g-3" action="{{route('foods.store')}}" method="post" enctype="multipart/form-data">
      @csrf
       <div id="close-login-form" class="fas fa-times">
          <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> DThanh </a>
          <a href="{{ route('foods.index') }}" class="logo mr-auto"> Quay lại </a>
          <h3>Thêm sản phẩm nào!!!</h3>
          <img style="height: 30px;width:30px;" src="/assets/images/{{isset($food)?$cfood->image:''}}"class="box" id="newimage">
          <input type="file" class="form-control" id="image" name="image" onchange="changeImage(event)">
          <label for="">Manufacturer</label>
            <select class="form-select select-mt3" name="cate_id">
              <option value="1">Hoa quả</option>
              <option value="2">Thực phẩm hữu cơ</option>
              <option value="3">Thực phẩm khô</option>
              <option value="4">Thực phẩm nỗi bật</option>
          </select>
          <label for="" class="form-label" >Fruit name</label>
          <input type="text" class="form-control" id="inputMake" name="fruitName">
          <label for="" class="form-label" >Old price</label>
          <input type="text" class="form-control" id="inputModel" placeholder="old price" name="oldPrice">
          <label for="" class="form-label" >New price</label>
          <input type="text" class="form-control" id="inputModel" placeholder="new price" name="newPrice">
          <label for="" class="form-label" >Product on</label>
          <input class="form-control" type="date" id="inputProduced" placeholder="dd-mm-yyyy" name="produced_on">
       <div class="flex">
          {{-- <input type="checkbox" name="" id="remember-me">
          <label remember-me">Lưu tài khoản?</label>
          <a href="#">Quên mật khẩu?</a>for=" --}}
       </div>
       <input type="submit" value="Thêm" class="link-btn">
    </form>
 </div>
</body>
</html>