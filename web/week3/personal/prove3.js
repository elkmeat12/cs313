function addItem(item) {
   // var chip1Count = Number(document.getElementById("chip1").value);
   // var chip2Count = Number(document.getElementById("chip2").value);
   // var drink1Count = Number(document.getElementById("drink1").value);
   // var drink2Count = Number(document.getElementById("drink2").value);
   // var cookie1Count = Number(document.getElementById("cookie1").value);
   // var cookie2Count = Number(document.getElementById("cookie2").value);
   var x, text;
   x = document.getElementById(item).value;

   if (isNaN(x) || x < 0)
      text = "Input not valid";
   else
   {
      text = "Added to Cart";

      var date = new Date();
      date.setTime(date.getTime()+(86400 * 30));
      var expire = "; expires="+date.toGMTString();
      document.cookie = item+"="+x+expire+"; path=/";
   }

   // alert(text);
   document.getElementById(item+"_report").innerHTML = text;
   var $it = $('#'+item+"_report");
   $it.fadeIn(function(){ $it.next().fadeOut(); });


   // var totalCost = 0;

   // var chip1Cost = chip1Count * 2.99;
   // var chip2Cost = chip2Count * 3.50;
   // var drink1Cost = drink1Count * 7.49;
   // var drink2Cost = drink2Count * 12.59;
   // var cookie1Cost = cookie1Count * 2.53;
   // var cookie2Cost = cookie2Count * 2.99;
    
   // totalCost = chip1Cost + chip2Cost + drink1Cost + drink2Cost + cookie1Cost + cookie2Cost;

   // document.getElementById("total_cost").innerHTML = "Total: $" + totalCost;
}

function adjustCart(item) {
   var x, text;
 
   // Get the value of the input field with id=item
   x = document.getElementById(item).value;
 
   // If x is Not a Number or less than 0
   if (isNaN(x) || x < 0) {
     text = "Input not valid<br>Please make sure that your quantity is not negative";
   } else {
     text = "Quantity Adjusted";
 
     //https://stackoverflow.com/questions/5045053/set-cookie-wih-js-read-with-php-problem
     var date = new Date();
     date.setTime(date.getTime()+(86400 * 30)); //expires in 1 day
     var expires = "; expires="+date.toGMTString();
     document.cookie = item+"="+x+expires+"; path=/";
   }
   // alert(text);
   document.getElementById(item+"_report").innerHTML = text;
   var $it = $('#'+item+"_report");
   $it.fadeIn(function(){ $it.next().fadeOut(); });
   window.location.href = 'cart.php';
}

function removeCart(item) {
   var x, text;

   // Get the value of the input field with id=item
   x = document.getElementById(item).value;

   text = "Item Removed";

   //https://stackoverflow.com/questions/5045053/set-cookie-wih-js-read-with-php-problem
   var date = new Date();
   date.setTime(date.getTime()+(-86400 * 30)); //expires in 1 day
   var expires = "; expires="+date.toGMTString();
   document.cookie = item+"="+x+expires+"; path=/";
   
   document.getElementById(item+"_report").innerHTML = text;

   // alert(text);
   document.getElementById(item+"_report").innerHTML = text;
   var $it = $('#'+item+"_report");
   $it.fadeIn(function(){ $it.next().fadeOut(); });
   window.location.href = 'cart.php';
}