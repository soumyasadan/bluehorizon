<html>
	<head>
		<title>Project management</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<style>
			 @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

			body {
				background-color: #673AB7;
				font-family: 'Calibri', sans-serif !important
			}

			.container {
				margin-top: 100px;
				margin-left:15%;
			}

			.card {
				position: relative;
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				-ms-flex-direction: column;
				flex-direction: column;
				min-width: 0;
				word-wrap: break-word;
				background-color: #fff;
				background-clip: border-box;
				border: 0px solid transparent;
				border-radius: 0px
			}
			}

			.card-body {
				-webkit-box-flex: 1;
				-ms-flex: 1 1 auto;
				flex: 1 1 auto;
				padding: 1.25rem
			}

			.card .card-title {
				position: relative;
				font-weight: 600;
				margin-bottom: 10px
			}

			.table {
				width: 100%;
				max-width: 100%;
				margin-bottom: 1rem;
				background-color: transparent
			}

			* {
				outline: none
			}

			.table th,
			.table thead th {
				font-weight: 500
			}

			.table thead th {
				vertical-align: bottom;
				border-bottom: 2px solid #dee2e6
			}

			.table th {
				padding: 1rem;
				vertical-align: top;
				border-top: 1px solid #dee2e6
			}

			.table th,
			.table thead th {
				font-weight: 500
			}

			th {
				text-align: inherit
			}
			.sh{
				width: 50%;
				margin: auto;
				margin-bottom: 30px;
			}
			.rw{
				
    			margin-left: 10px;
			}
			.mp{
				width:15%;height:auto !important;margin-top: 155px;
			}
			.nmp{
				width:15%;height:auto !important;margin-top: 100px;
			}
		</style>
	</head>
	<body>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<div class="row rw"> 
		<div <?php if($this->router->fetch_method()=='mainprojects'){ ?> class="w3-sidebar w3-light-grey w3-bar-block mp" <?php }else{ ?> class="w3-sidebar w3-light-grey w3-bar-block nmp"<?php } ?>>
			<h3 class="w3-bar-item">Menu</h3>
			<a href="<?php echo $this->config->base_url();?>project" class="w3-bar-item w3-button">Report</a>
			<a href="<?php echo $this->config->base_url();?>project/all_projects" class="w3-bar-item w3-button">List Projects</a>
			<a href="<?php echo $this->config->base_url();?>project/all_tasks" class="w3-bar-item w3-button">List Tasks</a>
			<a href="<?php echo $this->config->base_url();?>project/mainprojects" class="w3-bar-item w3-button">List Main Projects</a>

 		</div>
		</div>
		 <div class="container">