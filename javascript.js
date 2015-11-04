

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
	document.getElementById("font").style.fontFamily="Times";
}

/**
 * reverses all of the words in the paragraph
 **/
function reverseText(){
	//split string into words (should also work for letters, without the space
	var splitText = document.getElementById("toreverse").innerHTML.split(" ");
	var newText = "";
	splitText.reverse();
	//add spaces back in
	for (i=0;i<splitText.length;i++){
		newText = newText + splitText[i] +  " ";
	}
	document.getElementById("toreverse").innerHTML = newText;
}

function anagramText(){
	var splitText = document.getElementById("toanagram").innerHTML.split(" ");
	var newText = "";
	for (i=0;i<splitText.length;i++){
		var splitWords = splitText[i].split("");
		newText = newText + splitWords.reverse() + " ";
	}
	document.getElementById("toanagram").innerHTML = newText;
}