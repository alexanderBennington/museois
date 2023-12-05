window.onload=function() {
	// creamos los eventos para cada elemento con la clase "boton"
	let elementos=document.getElementsByClassName("boton");
	for(let i=0;i<elementos.length;i++){
        // cada vez que se haga clic sobre cualquier de los elementos,
		// ejecutamos la función obtenerValores()
		elementos[i].addEventListener("click",obtenerValores);
	}
}

// funcion que se ejecuta cada vez que se hace clic
function obtenerValores(e) {
	var valores="";
	// vamos al elemento padre (<tr>) y buscamos todos los elementos <td>
	// que contenga el elemento padre
	var elementosTD=e.srcElement.parentElement.getElementsByTagName("td");
	// recorremos cada uno de los elementos del array de elementos <td>
	for(let i=0;i<elementosTD.length;i++){
        // obtenemos cada uno de los valores y los ponemos en la variable "valores"
		valores+=elementosTD[i].innerHTML+"\n";
	}
    
    document.getElementById('a1').value = elementosTD[0].innerHTML;
    document.getElementById('a2').value = elementosTD[1].innerHTML;
    document.getElementById('a3').value = elementosTD[0].innerHTML;
    document.getElementById('a4').value = elementosTD[1].innerHTML;
}