var btnMenu = document.getElementById('btnmenu');
var menu = document.getElementById('menu');
btnMenu.addEventListener('click',function(){
	'use strict';
	menu.classList.toggle('mostrar');
});
function cambiarCantidad(){
	var c = Number(document.getElementById("cant").value)
	var x =document.getElementById("precio").value
	var t = c * x;
	alert(x)
	document.getElementById("cantidad").innerHTML=c;
}
	