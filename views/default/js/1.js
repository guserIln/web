
var x = 50;
function colorgreen()
{
t.style.color = "green";
}
	function colorred()
{
t.style.color = "red";
}
function colorchange()
{
  
  var setId = setTimeout(colorgreen, x);
  var setId = setTimeout(colorred, x+1000);
   var setId = setTimeout(removecolorchange, x+2000);
}
function removecolorchange()
{
t.style.color = "#000";
}
function setunderline()
{
i.style.textDecoration = "underline";
}
function removeunderline()
{
i.style.textDecoration = "none";
}