/**
 * changes the color of a selected paragraph when hovered over
 **/
function mouseOver(){
	document.getElementById("color").style.color = "red";
}

/**
 * changes the color of a selected paragraph back when mose removed
 **/
function mouseOut(){
	document.getElementById("color").style.color = "black";
}

/**
 * function using regular expressions to find a given string and replace it with another given string
 **/
function findReplace(){
	var find = document.getElementById("find").value;
	var replace = document.getElementById("replace").value;
	//var regex = new RegExp(find, "g");
	document.getElementById("toreplace").innerHTML = document.getElementById("toreplace").innerHTML.replace(find, replace);
}