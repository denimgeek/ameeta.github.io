
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/sidebar.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#im{
	position: absolute;
	left: 143px;
	top: 54px;
}
input[type=search]{
	position: absolute;
	left: 376px;
	top: 102px;	
	padding:15px;
	width:40%;
	}
	#im2{
	position: absolute;
	left: 1090px;
	top: 98px;
}
	#im3{
	position: absolute;
	left: 1006px;
	top: 88px;
}
	#im4{
	position: absolute;
	left: 1160px;
	top: 95px;
}
#p1{
	position: absolute;
	left: 182px;
	top: 658px;
}
#p2{
	position: absolute;
	left: 586px;
	top: 663px;
}
#p3{
	position: absolute;
	left: 966px;
	top: 661px;
}
</style>
<body>


<img src="image/DSC_0610 (2).JPG" id="im">
<input type="search" placeholder="Type To Search Here">
<a href="signup.php"><img src="image/1499160283_Rounded-31.png" id="im2"></a>
<a href="log2.php"><img src="image/1499160172_lock.png" id="im3"></a>
<a href="alert.php"><img src="image/1499338999_files-folders-59.bmp" id="im4"></a>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
  <a href="extra/pdfpage.php">Tutorial &nbsp;&nbsp;<img src="image/1499341542_pdf.png"></a>
  <a href="extra/videopage.php">Videos &nbsp;&nbsp;<img src="image/1499341899_youtube.png"></a>
  <a href="signup.php">Sign Up&nbsp;&nbsp;<img src="image/1499342439_2.png"</a>
  <a href="log2.php">Log In&nbsp;&nbsp;<img src="image/1499342316_Login.png"</a>
  <a href="register.php"> Feedback&nbsp;&nbsp;<img src="image/1499342531_notepad.png"</a></div>

<div id="main">
 
  <span style="font-size:30px;cursor:pointer" onClick="openNav()"><img src="image/1499332904_Menu.png"</span></div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
<br><br><br><br><br><br><br><br><br>
<div class="container">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/Best-Computer-Courses-After-Graduation-4.jpg" alt="Los Angeles" style="width:100%;">      </div>

      <div class="item">
        <img src="image/Career-Academy-Online-Training.jpg" alt="Chicago" style="width:100%;">      </div>
    
      <div class="item">
        <img src="image/index.jpg" alt="New york" style="width:100%;">      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>    </a>  </div>
</div>
<div id="p1">
<img src="image/1499348600_shining_mix__time.png"><br>
  <h4> One Day Course</h4>
   </div>
   
<div id="p2">
   <img src="image/1499348692_calendar-clock.png"><br>
  <h4> Short Time Course</h4>
   </div>
   
   <div id="p3">
   <img src="image/1499348739_calendar.png"><br>
   <h4>Long Time Course</h4>
   </div>
   <br><br><br><br><br><br><br><br><br><br>
   <center>
   <p>Tags: 
    <a href=""><span class="label label-info">Tutorials Pdf</span></a> 
	<a href=""><span class="label label-info">Videos</span></a> 
	<a href="signup.php"><span class="label label-info">Sign Up</span></a> 
	<a href=""><span class="label label-info">Feedback</span></a>
	| <i class="icon-user"></i> <a href="log2.php">Login</a> 
	| 
 	| <i class="icon-comment"></i> <a href="#">3 Comments</a>
   	| <i class=""></i> <a href="https://www.google.co.in/maps/place/Asansol+Engineering+College/@23.7157019,86.9489577,17z/data=!3m1!4b1!4m5!3m4!1s0x39f71f28112dc85f:0xc2814fdb4c367784!8m2!3d23.7157019!4d86.9511464">Location</a></p>
</center>
</body>
</html>