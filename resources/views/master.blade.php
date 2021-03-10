<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ecomm Project</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}

	
</body>
<style type="text/css">
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
	img.slider-img{
		height: 400px !important;

	}
	.custom-product{
		height: 600px;

	}
	.trending-img{
		height: 100px;

	}
	.trending-item{
		float: left;
		width: 20%;
	}
	.trending-wrapper{
		margin: 20px;
	}
	.detail-img{
		height: 200px;
	}
	.search-box{
		width: 500px !important;
	}
</style>
</html>