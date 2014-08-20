<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>test</title>
	<link rel="stylesheet" href="">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	$(document).ready(function() {
		$('h1').on('click',function() {
		$(this).toggleClass('clicked');
	})
	});
	</script>
	<style>
		h1 {
			text-shadow: -4px 4px 3px rgba(0,0,0,0.5);
			display: flex;
			flex: auto;
			width: 300px;
			transition: all 2s ease;
		}

		h1:hover {
			cursor: pointer;
		}
		.clicked {
			text-shadow: none;
			transform: translateX(12em);
		}
	</style>
</head>

<?php include "header.php"; ?>


<h1>Hello World</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, quaerat ex ratione veniam iste doloribus. Ratione enim sit tenetur omnis eveniet quisquam, impedit molestiae unde animi veniam nemo. Facilis, laudantium.</p>
<p>Veniam facilis velit deleniti quibusdam voluptatibus voluptatem repudiandae, harum, vero amet cum adipisci, quam voluptate ad expedita? Odit ipsum, impedit quod, ut sunt eaque quidem alias inventore natus aut debitis!</p>
<p>Quibusdam totam eius, cumque in, nesciunt voluptate sit eveniet! Quod dignissimos, fuga debitis possimus consequatur ad, nobis eveniet. Mollitia eaque sint, repellendus harum. Dignissimos laboriosam, fuga cupiditate architecto cumque aut.</p>

<?php include "footer.php"; ?>

</html>
