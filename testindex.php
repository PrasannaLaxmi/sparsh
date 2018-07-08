
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
  
  }
  .mar_auto{
    margin: auto;
  }
  </style>
</head>
<body>
	<div>
	</div>
	<div class="container-fluid">
			<div class="row" style="background:linear-gradient(146deg,#fff 157px,#007db3 30%);">
				<?php include "includes/header.php"; ?>
			</div>
     
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="background: linear-gradient(146deg,#fff 0px,#007db3 28%);">
						<?php include"includes/sidebar.php"; ?>
					</div>
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<div class="row" style="margin-top: 2%; margin-left: 1%;">
					<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg.jpg" alt="Los Angeles" width="1260" height="600">
      <div class="carousel-caption">
        <h3>Sparsh</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/call-to-action-bg.jpg" alt="Chicago" width="1260" height="600">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/facts-bg.jpg" alt="New York" width="1260" height="600">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<br>

				</div>	
				</div><br/>
<?php include"includes/footer.php"; ?>

	</div>
