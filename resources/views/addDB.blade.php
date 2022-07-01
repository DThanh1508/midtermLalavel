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
    <div class="container">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <form class="row g-3" action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <h1>Thêm mới xe</h1>
            <strong><a href="{{route('cars.index')}}">Quay lại trang chủ</a></strong>
            <div class="col-md-6">
              <label for="" class="form-label" >Image</label>
              <img src="/assets/images/{{isset($car)?$car->image:''}}" alt="" id="newimage">
              <input type="file" class="form-control" id="image" name="image" onchange="changeImage(event)">
            </div>
            <label for="">Manufacturer</label>
            <select class="form-select select-mt3" name="mf_id">
              <option value="1">Thanh</option>
              <option value="2">Den</option>
            </select>
            <div class="col-md-6">
              <label for="" class="form-label" >Make</label>
              <input type="text" class="form-control" id="inputMake" name="make">
            </div>
            <div class="col-12">
              <label for="" class="form-label" >Model</label>
              <input type="text" class="form-control" id="inputModel" placeholder="Braind" name="model">
            </div>
            <div class="col-12">
              <label for="" class="form-label" >Produced_on</label>
              <input class="form-control" type="date" id="inputProduced" placeholder="dd-mm-yyyy" name="produced_on">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Add new car</button>
            </div>
          </form>
    </div>
</body>
</html>