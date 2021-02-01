<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
		<style type="text/css">
		*{
		margin: 0; padding:0; box-sizing: border-box;
		font-family: 'Mulish', sans-serif;}
		.grand_parent{ width: 100vw; height:100vh;
			background: #dfe6e9; color: #fff;}
		h1{
			font-size: 4rem;
			padding: 20px 0;
			text-align: center;
			color: #000;
		}
		p{
			text-align: center;
		}
		.parents{ width: 80vw; height: auto; margin: auto;
			display: flex;  justify-content: space-around;
			flex-wrap: wrap; transition: all 0.2 linear;
		}
		.child{
			height: 200px;
			background:#81ecec;
			box-shadow: 0 0 20px #bac3c3;
			flex:1 1 200px;
			margin: 20px;
		}
		
		.child:first-child{
			background: #ffbe76;
		}
		.child:last-child{
			background: #ff7979;
		}
		@media (max-width: 768px){
			.grand_parent{height:auto; }
		}
		</style>
	</head>
	<body>
		<div class="grand_parent">
			<h1> Services </h1>
			<div class="parents">
				<div class="child">
					<p>Deepta Barua</p>
				</div>
				<div class="child">
					<p>Deepta Barua</p>
				</div>
				<div class="child">
					<p>Deepta Barua</p>
				</div>
			</div>
		</div>
	</body>
</html>