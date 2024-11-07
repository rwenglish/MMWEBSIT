<div class="w3-top">
  <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-large w3-hide-large w3-right w3-padding-large w3-hover-black w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
 <?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


    if (strpos($url,'home') !== false) {
        echo '<a href="MMHome.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>';
    } else {
  
        echo '<a href="MMHome.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>';
    };
      if (strpos($url,'contact') !== false) {
        echo '<a href="MMcontactform.php" class="w3-bar-item w3-button w3-padding-large w3-white">Contact</a>';
    } else {
  
        echo '<a href="MMcontactform.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact</a>';
    };
      if (strpos($url,'bio') !== false) {
        echo '<a href="MMBio.php" class="w3-bar-item w3-button w3-padding-large w3-white">Band</a>';
    } else {
  
        echo '<a href="MMBio.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Band</a>';
    };
      if (strpos($url,'merch') !== false) {
        echo '<a href="MMmerch.php" class="w3-bar-item w3-button w3-padding-large w3-white">Merch Store</a>';
    } else {
  
        echo '<a href="MMmerch.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Merch Store</a>';
    };
     // if (strpos($url,'unitfour') !== false) {
      //  echo '<a href="unitfour.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Four</a>';
    //} else {
  
   //     echo '<a href="unitfour.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Four</a>';
    //};
    //  if (strpos($url,'unitfive') !== false) {
   //     echo '<a href="unitfive.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Five</a>';
   // } else {
  
    //    echo '<a href="unitfive.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Five</a>';
    //};
    ////  if (strpos($url,'unitsix') !== false) {
    //    echo '<a href="unitsix.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Six</a>';
    //} else {
  
   //     echo '<a href="unitsix.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Six</a>';
   // };
      ?>
  </div>
  <header class="w3-container w3-green w3-center" style="padding:60px 16px">
  <!--<img class="w3-margin w3-large" style = "width: 250px"src = "https://scontent-atl3-1.xx.fbcdn.net/v/t39.30808-6/440885813_399718432966651_1351093185907294702_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=7poqjiSqfFkQ7kNvgHnXpH-&_nc_ht=scontent-atl3-1.xx&oh=00_AYAyLJbqkOeJkRua9s3FlcfSxNff8IozgQGAlEYpgXpL2w&oe=669FB65D"> !-->
  <h1 class="w3-margin w3-large">Misandristic Mutilation<h1>
   <p class="w3-margin w3-large">Welcome to our website</p>
</header>