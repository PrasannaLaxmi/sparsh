<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
.col-md-3 {
  position: relative;
  border: 1px solid grey;
  padding:100px;
}

.image {
  display: block;
  
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.col-md-3:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<body>
<div class="row">
<div class="col-md-3">
  <img src="images/emr.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>
<div class="col-md-3">
  <img src="images/emr.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>
<div class="col-md-3">
  <img src="images/emr.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>
<div class="col-md-3">
  <img src="images/emr.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>
</div>

</body>
</html>
