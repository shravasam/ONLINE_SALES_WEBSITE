
<!DOCTYPE html>
<html>
<head>
<title> Homepage </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color: #9999ff;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}
.mySlides {display:none;}
.center {
  text-align: center;
  border: 3px solid green;
}

.tablink:hover {
    background-color: red;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

#Home {background-color: none;}
#Aboutus {background-color: none;}
#Products {background-color: none;}
#Login {background-color: #989898;}
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>
</head>
<body>
  <div class="center"> <h1> ESIGELEC student sales portal</h1></div>
	  <button class="tablink" onclick="openPage('Home', this, 'white')"id="defaultOpen">Home</button>
	  <button class="tablink" onclick="openPage('Aboutus', this, 'white')" >Aboutus</button>
	  <button class="tablink" onclick="openPage('Products', this, 'blue')">Products</button>
	  <button class="tablink" onclick="openPage('Login', this, 'orange')">Login</button> <hr><br>

  <div id="Aboutus" class="tabcontent"> 

    <h3>If you have any problems in our products, please send them to the below address. </h3>
    <address> Technopôle du Madrillet<br>
              Avenue Galilée<br>
              76800 Saint-Étienne-du-Rouvray </address>
    <h3> please write us for any questions </h3>
    <p>aboutus@esigelec.fr </p>
  </div>
  <div id="Products" class="tabcontent"> 
      <h3>Acer-Swift 7</h3>
        <p>The Swift 7 handles all your daily tasks without battery consumption or extra weight. Boost your efficiency with Intel ® Core ™ i7 8 th generation 2 . Easily view and edit large presentations, videos and spreadsheets with up to 16GB of RAM and a PCIe SSD up to 512GB..</p>
      <h3>lenovo-ThinkPad X1 Extreme</h3>
        <p>15.6 "laptop ready for VR / MR
            Powerful Intel® Processors and NVIDIA® GeForce® Graphics
            Biometric security and encryption</p>
      <h3>MacBook Pro 15" Core i9 octacœur à 2,3 GHz </h3>
        <p>The MacBook Pro 15 "stands out with its six-processor and (for the first time) eight cores, its graphics card dedicated, and its options. While the MacBook Pro 13 </p>
      <h3>Asus-ZenFone 6 (ZS630KL)</h3>
        <p>Asus unveils the Zenfone 6: a flagship camera with rotating camera and 5000 mAh battery. Pretty classic so far for a flagship, but the real surprise comes from his camera ... rotating . Indeed, it is actually two photo modules: a 48 megapixel main sensor (Sony IMX586) and a 13 megapixel ultra wide angle sensor. If you want to take a selfie or sky in photo / video, the photo module rotates up to 180 degrees to position itself above the screen or at the desired angle.</p>
      <h3>logicom Le Moov 2</h3>
        <p>With its 5.45-inch 18: 9 aspect ratio screen , the Moov 2 emphasizes  detail . More slender and more pleasant to take in hand , it comes in black or rose gold. As on its previous version  the Moov , it leaves room in its center a brilliant bar of the most beautiful effect.Let yourself be seduced by its HD + screen with 720x1440 px and view your content all in high quality.</p>
      <h3>Huawei Y9 Prime 2019</h3>
        <p>Huawei Y9 Prime 2019 smartphone was launched in 13th May 2019. The phone comes with a 6.59-inch touchscreen display with a resolution of 1080x2340 pixels at a pixel density of 391 pixels per inch (ppi) and an aspect ratio of 19.5:9.</p>
  </div>
<!-- the below code belongs to oldUser login hyper links so let it be in comments for now
  <div id="Login" class="tabcontent"> 
      <h3> Please register here before placing any order</h3>
        <a href="userReg.php">userRegistration</a>
      <h3> Please login here if you had already registered with us</h3>
        <a href="userLogin.php">login</a>
      <h4> Click here to go back homepage</h4>
        <a href="home.php">Home</a> -->
  <!-- the below code belongs to newUser login hyper links -->
  </div>
  <div id="Login" class="tabcontent"> 
      <h3> Please register here before placing any order</h3>
        <a href= "user-registration-form.php">userRegistration</a>
      <h3> Please login here if you had already registered with us</h3>
        <a href="login-form.php">login</a>
      <h4> Click here to go back homepage</h4>
        <a href="home.php">Home</a>
  </div>


  <div class="container">                                 
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Categories
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu"> <a class="test" tabindex="-1" href="salesUserhtml.php">Laptops <span class="caret"></span></a>
    <ul class="dropdown-menu"> <a class="test" href="salesUserhtml.php"> Acer-Lenovo-Macbook <span class="caret"></span></a>
    <ul class="dropdown-menu"> <a class="test" tabindex="-1"><table>
    <tr>
      <th>Acer Swift 7</th>
    </tr>
    <tr>
      <td> Intel ® Core ™ i7 8 th generation 2. 16GB of RAM and a PCIe SSD up to 512GB.</td>
    </tr>  <br>
    <th>lenovo-ThinkPad X1 Extreme</th>
  </tr>
  <tr><td>"5.6 laptop. Powerful Intel® Processors and NVIDIA® GeForce® Graphics </td></tr>
      <th>MacBook Pro 15" Core i9 octacœur à 2,3 GHz</th>
  </tr>
  <tr><td>The MacBook Pro 15, six-processor. its graphics card dedicated.</td></tr>

</table></a></ul>
<ul class="dropdown-menu"> <a class="test" tabindex="-1"> lenovo<span class="caret"></span></a></ul></li>

</ul>         					

<li class="dropdown-submenu"> <a class="test" tabindex="-1" href="#">Mobiles <span class="caret"></span></a>
        <ul class="dropdown-menu">
          	<a class ="test"tabindex="-1" href="#">Asus-logicom-huawei</a>
	<ul class="dropdown-menu">
		<a class="test" tabindex="-1"><table> 	
<tr><th>Asus-ZenFone 6 (ZS630KL)</th></tr>
<tr><td>Asus unveils the Zenfone 6: a flagship camera with rotating camera and 5000 mAh battery.
</td></tr>

<tr><th>logicom Le Moov 2</th></tr>
<tr><td>ith its 5.45-inch 18: 9 aspect ratio screen.HD + screen with 720x1440 px
</td></tr>
<tr>
<th>Huawei Y9 Prime 2019</th> </tr>
<tr><td>6.59-inch touchscreen. Resolution of 1080x2340.Ratio of 19.5:9.</td></tr></table></a></ul> </ul>        			

          	
<ul class= "dropdown-menu"> 
	<a class="test" tabindex="-1" href="#">logicom</a>
		<li><a tabindex="-1" href="#">Huwai</a></li></li></ul>

          
 
    </ul>
  </div>
</div>


<h2 class="w3-center">New models</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="/image/huawei.jpg" style="width:100%">
  <img class="mySlides" src="/image/mackbook.jpg" style="width:100%">
  <img class="mySlides" src="/image/logicom.jpg" style="width:100%">
  <img class="mySlides" src="/image/lenovo.jpg" style="width:100%">
<img class="mySlides" src="/image/asusphone.jpg" style="width:100%">

</div>


<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}


</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
