//display alert box after clicking "Click Me"
function display() {
	alert("Clicked!");
}

//change background color of first div
function changeBackground(color) {
	document.getElementById("one").style.backgroundColor = document.getElementById('color').value; 
}

//change the background color of second div using jquery
$(document).ready(function(){
    $("#changeColor2").click(function(){
        $("#two").css("backgroundColor", color2.value);
    });
});

//div three visibility fades in and out
$(document).ready(function(){
    $("#button3").click(function(){
        $("#three").fadeToggle(1500);
    });
});