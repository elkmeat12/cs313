function showDate(){
   document.getElementById('date').innerHTML = Date();
}

function getName(){
   var name = document.getElementById('name').value;
   document.getElementById('visitor').style.color = 'blue';
   document.getElementById('visitor').innerHTML = "Hello " + name + "!";
}