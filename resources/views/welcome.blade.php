<html>
	<head>
		<title>SE2832 Lab 08</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">SE2832</div>
                @if (Auth::guest())

                    <div class="quote">Please <a href="{{ url('/auth/login') }}">login</a> or <a href="{{ url('/auth/register') }}">register</a> before continuing.</div>
                @else
                    <div class="quote"><a href="/home">Go to your dashboard.</a></div>
                @endif

			</div>
		</div>
	</body>
</html>
