<html>
	<head>
		
		<link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,700,700italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 900;
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
			
			.render ul li{
				display:inline;
				padding:10px;
				list-style:none;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Admin Only</div>
				<div class="render">
				@foreach($usr as $one)
					{{$one->name}}<br>
				@endforeach
				<?=$usr->render()?>
				</div>
				
			</div>
		</div>
	</body>
</html>
