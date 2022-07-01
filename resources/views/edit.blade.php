<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit || DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/assets/css/edit.css">
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
        <form class="row g-3" action="{{route('cars.update',$car->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
            <h1>Sửa thông tin xe</h1>
            <strong><a href="{{route('cars.index')}}">Quay lại trang chủ</a></strong>
            <div class="col-md-6">
              <label for="" class="form-label" >Image</label>
              <img src="/assets/images/{{isset($car)?$car->image:''}}" alt="" id="newimage">
              <input type="file" class="form-control" id="image" name="image" onchange="changeImage(event)">
            </div>
            {{-- <div class="col-md-6">
              <label for="" class="form-label" >Id</label>
              <input type="text" class="form-control" id="inputMake" name="mf_id" value="{{isset($car)?$car->id:''}}">
            </div> --}}
            <select class="form-select select-mt3" name="mf_id" value="{{isset($car)?$car->mf_id:''}}">
              <option value="1">Thanh</option>
              <option value="2">Den</option>
            </select>
            <div class="col-md-6">
              <label for="" class="form-label" >Make</label>
              <input type="text" class="form-control" id="inputMake" name="make" value="{{isset($car)?$car->make:''}}">
            </div>
            <div class="col-12">
              <label for="" class="form-label" >Model</label>
              <input type="text" class="form-control" id="inputModel" placeholder="Braind" name="model" value="{{isset($car)?$car->model:''}}">
            </div>
            <div class="col-12">
              <label for="" class="form-label" >Produced_on</label>
              <input class="form-control" type="date" id="inputProduced" placeholder="dd-mm-yyyy" name="produced_on" value="{{isset($car)?$car->produced_on:''}}">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
    </div>
    <script src="/assets/js/getImage.js"></script>>
</body>
</html>