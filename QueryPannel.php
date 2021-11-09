<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<script type="text/javascript">
function viedBox()
{
   //var left=document.getElementById("words").style.left;
     
	 var obj = document.getElementById("words");
	  var topVal = parseInt(obj.style.left);
      obj.style.left = (topVal + 8) + "px";  
	  obj.style.visibility="visible";

}
//===============================================================================
function getCaretClientPosition() {
    var x = 0, y = 0;
    var sel = window.getSelection();
    if (sel.rangeCount) {
        var range = sel.getRangeAt(0);
        if (range.getClientRects) {
            var rects = range.getClientRects();
            if (rects.length > 0) {
                x = rects[0].left;
                y = rects[0].top;
            }
        }
    }
    return { x: x, y: y };
}

function showCaretPos() 
{
    var pos = getCaretClientPosition();
    document.getElementById("info").innerHTML = "Caret position: " + pos.x + ", " + pos.y;
}



</script>

</head>

<body>
<div onkeyup="showCaretPos();" onmouseup="showCaretPos();">

 <textarea rows="20" cols="50" onkeyup="viedBox();">
 </textarea>

</div>
<select id="words" style="position:absolute;left:14px;top:10px;visibility:hidden;">
    <option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
 </select>

<div id="info">Caret position</div>
<div contenteditable="true" onkeyup="showCaretPos();" onmouseup="showCaretPos();" style="max-width:200px;max-height:200px; background:#999999;">Type some stuff in here</div>
</body>
</html>
