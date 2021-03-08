<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ecomm Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src='http://kit.fontawesome.com/a076d05399.js' ></script>
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
</style>
</html>