<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
</head>
<body>
		<div class="container">
			@include('inc.navbar')
      @include('inc.messages')
    	@yield('content')
		</div>
		
</body>
</html>