<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail|| Food</title>
    <link rel="stylesheet" href="/assets/css/detail.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body>
    <div class="card">
		<div class="imgBx">
			<img src="/assets/images/{{$food->image}}" alt="">
		</div>
		<div class="content">
			<div class="details">
				<h2>{{$food->fruitName}}<br><span>Thực phẩm sạch</span></h2>
				<div class="actionBtn">
					<button><del>{{$food->oldPrice}}.000VNĐ</del></button>
					<button>{{$food->newPrice}}.000VNĐ</button>
				</div>
                <div class="data">
					<a style="text-decoration: none;" href="{{ route('foods.index') }}"><h3>Quay lại<br><span> Trang chủ</span></h3></a>
                </div>
			</div>
		</div>
	</div>
</body>

</html>