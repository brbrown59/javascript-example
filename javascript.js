

/**
 * changes the color of a selected paragraph when hovered over
 **/
function mouseOver(){
	document.getElementById("color").style.color = "red";
}

/**
 * changes the color of a selected paragraph back when mouse removed
 **/
function mouseOut(){
	document.getElementById("color").style.color = "black";
}

/**
 * function that finds a given string and replace it with another given string, using a regular expression object
 **/
function findReplace(){
	var find = document.getElementById("find").value;
	var replace = document.getElementById("replace").value;
	var regex = new RegExp(find, "g");
	document.getElementById("toreplace").innerHTML = document.getElementById("toreplace").innerHTML.replace(regex, replace);
}

/**
 * changes the font based on a button press
 */
function changeFont(){
	document.getElementById("font").style.fontFamily="Times", serif;
}