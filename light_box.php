<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Light Box</title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		.row
		{
			display: flex;
			clear: both;
		}
		.col-4{
			width: 33.33%;
			float: left;
			padding: 5px;
		}

		.col-4 > img {
			width: 100%;
			height: 300px;
		}

		#ligth_box{
			height: 600px;
			background-color: gray;
			text-align: center;
			display: none;
		} 
		#ligth_box > img {
			width: 80%;
			height: 100%;
			position: relative;
		}
		#ligth_box > button{
			width: 30px;
			height: 30px;
			position: absolute;
			z-index: 1;
		}


	</style>
	<script type="text/javascript">
		
		function openLigthBox(obj){
			// console.log(obj.src);
			var lightbox_image = document.querySelector("#ligth_box > img");
			lightbox_image.src = obj.src;
			// console.log(lightbox_image);

			var lightbox = document.querySelector("#ligth_box");
			lightbox.style.display= "block";

			var body_section = document.querySelector("#body_section");
			body_section.style.display= "none";
			
			

		}

		function closeLightBox(){
			var lightbox = document.querySelector("#ligth_box");
			lightbox.style.display= "none";

			var body_section = document.querySelector("#body_section");
			body_section.style.display= "block";
		}
	</script>
</head>
<body bgcolor="#c1ddf2">
	
	<center>
		<h1>Light Box</h1>
		<hr />
	</center>
	<div id="body_section">
			<div class="row">
					<div class="col-4">
						<img src="images/a.png" onclick="openLigthBox(this)">
					</div>
					<div class="col-4">
						<img src="images/b.png" onclick="openLigthBox(this)">
					</div>
					<div class="col-4">
						<img src="images/c.png" onclick="openLigthBox(this)">
					</div>
			</div>
			<div class="row">
					<div class="col-4">
						<img src="https://media.istockphoto.com/photos/freedom-chains-that-transform-into-birds-charge-concept-picture-id1322104312?b=1&k=20&m=1322104312&s=170667a&w=0&h=VQyPkFkMKmo0e4ixjhiOLjiRs_ZiyKR_4SAsagQQdkk=" onclick="openLigthBox(this)">
					</div>
					<div class="col-4">
						<img src="https://cdn.pixabay.com/photo/2021/08/25/20/42/field-6574455__340.jpg" onclick="openLigthBox(this)">
					</div>
					<div class="col-4">
						<img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" onclick="openLigthBox(this)">
					</div>
			</div>
	</div>
	<div id="ligth_box">
		<button onclick="closeLightBox()">X</button>
		<img src="images/a.png">
	</div>

</body>
</html>