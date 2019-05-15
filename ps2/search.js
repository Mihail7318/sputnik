window.onload = function(){

 	document.getElementById('u154-4').onclick = getting;
    
 };

 function getting(){
 	seachzapros = document.getElementById('u151').value;
 	document.location.href = "/search.php?search="+seachzapros;
 }



