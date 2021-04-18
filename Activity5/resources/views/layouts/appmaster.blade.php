<html lang="en">
<head>
    <title>@yield('title')</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="/Activity5/resources/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Activity5/resources/assets/css/Navigation-with-Button.css">
	<script src="/Activity5/resources/assets/js/jquery.min.js"></script>
    <script src="/Activity5/resources/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
	<body>
		@include('layouts.header')
		<div align="center">
			@yield('content')
		</div>
		@include('layouts.footer')
	</body>
</html>