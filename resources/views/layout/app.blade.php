

<!DOCTYPE HTML>
<html>

<head>
	<title>@yield('title') CRUD</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="/frontend/css/font-awesome.css" rel="stylesheet">
	<link href="/frontend/css/style.css" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>

<body>
	
	<div class="clear-loading spinner">
	<h1>@yield('title')</h1>
	@yield('content')
	</div>
	<div class="w3ls-login box box--big">

		<form action="#" method="post">
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
				
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->

	<!--//copyright-->
</body>
</html>