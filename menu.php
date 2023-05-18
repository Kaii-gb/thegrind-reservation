<?php
require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6,b {font-family: "Amatic SC", sans-serif}
.menu {display: none}
body{
  background-image: url('img/mbg.jpg');
}

}


</style>

</head>
<body>
  <br>
  <br>
  <br>

<div class="w3-container w3-none w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo w3-black"  style="margin-bottom:64px">THE MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey w3-black" >
      <a href="javascript:void(0)" onclick="openMenu(event, 'Coffee & Choco');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-brown">Coffee & Choco</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Tea');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-brown">Tea</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Dessert');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-brown">Dessert</div>
      </a>
    </div>

    <div id="Coffee & Choco" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Espresso</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱110.00</span></h1>
      <p class="w3-text-grey">a single shot of espresso</p>
      <hr>
   
      <h1><b>Latte</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱110.00</span></h1>
      <p class="w3-text-grey">a double shot of espresso with steamed milk and a small layer of foam</p>
      <hr>
      
      <h1><b>Cappuccino</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱120.00</span></h1>
      <p class="w3-text-grey">a double shot of espresso with equal parts steamed milk and foam</p>
      <hr>

      <h1><b>Choco Mocha</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱130.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
      <hr>

      <h1><b>SNOW CHOCOLATE</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">₱150.00</span></h1>
      <p class="w3-text-grey">Rich white chocolate with steamed milk and a small layer of foam</p>
      <hr>

      <h1><b>Vienna Coffee</b> <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">₱140.00</span></h1>
      <p class="w3-text-grey">A double shot of your favourite espresso coffee smothered with a layer of whipped cream, garnished with a light dusting of chocolate and served with a chocolate square to finish. Scoop it off or stir it in.</p>
    </div>

    <div id="Tea" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Green Pomegranate</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">₱150.00</span></h1>
      <p class="w3-text-grey">Organic green tea is hand-tossed in a large wok, dried to perfection, Carefully blended with raspberries, rose hips, and the antioxidant-rich essence of pomegranate. Sweeten the senses with a tart and tangy rush to the palate.</p>
      <hr>
   
      <h1><b>White Peach</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱140.00</span></h1>
      <p class="w3-text-grey">The essence of fresh-picked peaches infuses the senses in this blend of organic white peony and aromatic osmanthus blossoms.</p>
      <hr>
      
      <h1><b>English Breakfast Tea</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱140.00</span></h1>
      <p class="w3-text-grey">It provides a robust flavor perfect for starting the day. Brews a smooth malty cup with a clean finish.</p>
      <hr>

      <h1><b>Earl Grey Crème</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱150.00</span></h1>
      <p class="w3-text-grey">Blended with fragrant oil of bergamot and a touch of French vanilla. A remarkable blend with fresh citrus notes followed by a rich and robust finish.</p>
    </div>


    <div id="Dessert" class="w3-container menu w3-padding-32 w3-white">
      <h1><b> Angel Food Cake Topped with Strawberries and Melon</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">₱130.00/slice</span></h1>
      <p class="w3-text-grey">Fresh Ponchatoulla strawberries and melon slices are the topping to this heavenly dessert.</p>
      <hr>
   
      <h1><b>Blueberry Muffins</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱95.00</span></h1>
      <p class="w3-text-grey">Chocked full of plump juicy blueberries and baked to a golden brown.</p>
      <hr>
      
      <h1><b>Creme Mousse au Chocolate</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱100.00</span></h1>
      <p class="w3-text-grey">Our chocolate mousse, lightly fluffed with shavings of semisweet dark chocolate.</p>
      <hr>
      
      <h1><b> Glazed and Crème Filled Donuts</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₱60.00/pc</span></h1>
      <p class="w3-text-grey">Both plain and chocolate glazed donuts, along with our favorite jelly and crème filled donuts.</p>
    </div><br>

  </div>
</div>

<script>
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-brown", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-brown";
}
document.getElementById("myLink").click();
</script>
</body>
</html>
