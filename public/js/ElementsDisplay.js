// Permet de modifier la visibilité d'un élément
function toggleVisibility(elmt) {
	if(typeof elmt == "string")
		elmt = document.getElementById(elmt);
	
	if(elmt.style.visibility == "hidden")
		elmt.style.visibility = "visible";
	else
		elmt.style.visibility = "hidden";
}

// Permet de modifier l'affichage d'un élément
function toggleDisplay(elmt) {
	if(typeof elmt == "string")
		elmt = document.getElementById(elmt);

	if(elmt.style.display == "none")
		elmt.style.display = "";
	else
		elmt.style.display = "none";
}