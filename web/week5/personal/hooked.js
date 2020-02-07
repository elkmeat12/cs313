function addItem(item) {
   var x, text;
   x = document.getElementById(item).value;

   if (isNaN(x) || x < 0)
      text = "Input not valid";
   else
   {
      text = "Added " + item + " to Cart";

      var date = new Date();
      date.setTime(date.getTime()+(86400 * 30));
      var expire = "; expires="+date.toGMTString();
      document.cookie = item+"="+x+expire+"; path=/";
   }
   console.log(text);
}

function adjustCart(item) {
   var x, text;
 
   // Get the value of the input field with id=item
   x = document.getElementById(item).value;
 
   // If x is Not a Number or less than 0
   if (isNaN(x) || x < 0) {
     text = "Input not valid<br>Please make sure that your quantity is not negative";
   } else {
     text = "Order Amount Adjusted";
 
     //https://stackoverflow.com/questions/5045053/set-cookie-wih-js-read-with-php-problem
     var date = new Date();
     date.setTime(date.getTime()+(86400 * 30)); //expires in 1 day
     var expires = "; expires="+date.toGMTString();
     document.cookie = item+"="+x+expires+"; path=/";
   }
   console.log(text);
   window.location.href = 'cart.php';
}

function removeCart(item) {
   var x, text;

   // Get the value of the input field with id=item
   x = document.getElementById(item).value;
   x = 0;
   text = "Item Removed";

   //https://stackoverflow.com/questions/5045053/set-cookie-wih-js-read-with-php-problem
   var date = new Date();
   date.setTime(0);
   var expires = "; expires="+date.toGMTString();
   document.cookie = item+"="+x+expires+"; path=/";
   
   console.log(text);
   window.location.href = 'cart.php';
}