<?php
session_start();
$_SESSION['isDBFormOpen']='no';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Easy SQL</title>


<script src="jqryLib/jquery-1.9.1.js"></script>
<script src="jqryLib/jquery-ui.js"></script>





<link rel="stylesheet" type="text/css" href="system/css/styler.css"/>
<link rel="stylesheet" type="text/css" href="system/css/jquery-ui.css"/>


<script type="text/javascript">
/* function checkAndGenNumber3(x)
{
              var flag='0';
            number = 1 + Math.floor(Math.random() * 999999);
			
			for (var i=0;i<forms.length;i++)
			{
			    var no=forms[i];
				if(no==number)
				{
				 flag='1';
				}
			}
			if(flag=='1')
			{
			  checkAndGenNumber3();
			}
			else if(flag!='1')
			{
				forms[forms.length]=number;
				GenEditDB(number,x);
				flag='0';
			}
}

function GenEditDB(number,x)  
  {    
            
  
		  j('<div>', {id:number} ).appendTo('#container').draggable({ containment: "#container", scroll: false }).resizable({handles: 'n, e, s, w, ne, se, sw, nw,ns,ew',containment: "#container2", minHeight: 200,minWidth: 200}).css({height:'200px',width:'450px',border:'1px solid #fff',padding:'0 15px 60px',margin:'0 auto',position:'absolute',top:'85px',left:'26%'});
			
			j("#"+number).css('background-image','url("system/images/formTransparentBg.png")');
			
			j('<div>', {id:number,class:'123' } ).appendTo('#'+number).css({height:'35px'});//formHeader
	//==========================================================================================================
	j('<div>', {id:'min'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'62px', top:'14px',width:'25px'})//tool bar
			j('#min'+number).css('background-image','url("system/images/minmize.png")');//toolbar minimize
	//==========================================================================================================	
		j('<div>', {id:'max'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'33px', top:'7px',width:'25px'})//tool bar
			j('#max'+number).css('background-image','url("system/images/maximize.png")');//toolbar maximize
	//==========================================================================================================
			j('<div>', {id:'clo'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'4px', top:'7px',width:'25px'})//tool bar
			j('#clo'+number).css('background-image','url("system/images/close.png")');//toolbar close
	//==========================================================================================================
	
	
		
			
			j('<div>', {id:"formInner3"+number } ).appendTo('#'+number).css({height:'inherit',overflow:'auto',padding:'5px',background:'#034B58'});
			 
		
			
			  alterDB("alterDB","formInner4"+number,x);
			  j( "#"+number ).draggable({ cancel: "#"+number+" #formInner3"+number });
  }
  
function alterDB(functionName1,form1,db1)
{

		if (window.XMLHttpRequest)
		  {
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById(form1).innerHTML=xmlhttp.responseText;
			}
	  }
	xmlhttp.open("POST","system/classes/DB.php?f="+functionName1+"&db="+db1,true);
	xmlhttp.send();
}
</script> */

<!-----------------------------------------------delete DB section -------------------------------------------------------------->
<script type="text/javascript">

function deleteDB(form1,dbn)
{

//var id = event.target.id;
//alert(dbn);


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    //document.getElementById(form1).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","system/classes/DB.php?f=deleteDB&db="+dbn,true);
xmlhttp.send();
var form=form1;
reGenerateDBnames(form);
}

function reGenerateDBnames(form)
{
  document.getElementById(form).innerHTML="";
	 if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById(form).innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("POST","system/classes/DB.php?f=dbNames&form="+form,true);
	xmlhttp.send();
}

</script>
<!----------------------------------------end of delete DB section -------------------------------------------------------------->

<!-----------------------------------------------ajax section ------------------------------------------------------------------->
<script type="text/javascript">

function showCustomer(functionName,form,db)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(form).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","system/classes/DB.php?f="+functionName+"&db="+db+"&form="+form,true);
xmlhttp.send();


}


function showtbl(functionName1,form1,db1)
{
 //alert("xxx");
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(form1).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","system/classes/DB.php?f="+functionName1+"&db="+db1,true);
xmlhttp.send();


}
</script>
<!-----------------------------------------------end of ajax section ------------------------------------------------------------>

<!---------------------------------------------------- toggle left tab section -------------------------------------------------->
<script type="text/javascript">
var j = jQuery.noConflict();
window.onload = function ()
{

	//$( "#leftTba" ).toggle( "blind",{direction:'left'}, 500 );
	//J('#formInner').tinyscrollbar({ axis: 'x'});
	
	//j(document).ready(function(){
			//j('#formInner').tinyscrollbar();	
	//	});
	
}	
	

j(function() 
{
  function runEffect(myVal) 
  {
	var selectedEffect='blind';
	
    if(myVal=='1')
    {
     
	  j("<style>").text("#leftTba { display:block; }")
	  j("<style>").text(".Btn { display:block; }")
      j( "#leftTba" ).toggle( selectedEffect, {direction: 'left'}, 500 );
	  //j( ".Btn,.SubBtn" ).toggle( selectedEffect, {direction: 'left'}, 800 );
	  
    } 
};

//setInterval(runEffect('1'), 1000);
//j('#leftTba').click(function() {runEffect('1');});
//j('#leftTba').mouseleave(function() {setInterval(runEffect('1'), 1000);});

j( "#button1" ).click(function() {runEffect('1');return false;});

j("#button1").bind("click",function() {
	      setTimeout(function() {
	        runEffect('1');}, 2000);
	  });

});


</script>
<!----------------------------------------------end of toggle left tab section -------------------------------------------------->

<!---------------------------------------------------- viewport engine section -------------------------------------------------->	
<script type="text/javascript">
	var c =j(window).height();
	var maxH;
	
	//alert(x);
	c=(c-81);
	maxH=c;
	maxH=(maxH-64);
	c=c+'px;';
	j("<style>").text("#container { height:"+ c +" }").appendTo('head');
	
	var c2 =j(window).height();
	//c2=c2;
	c2=c2+'px;';
	
	//alert(c2);
	 j("<style>").text("#container2 { height:"+ c2 +" }").appendTo('head');
	 
	 
	 function refreshViewPortEngine()
	 {
	 var c =j(window).height();
	var maxH;
	
	//alert(x);
	c=(c-81);
	maxH=c;
	maxH=(maxH-64);
	c=c+'px;';
	j("<style>").text("#container { height:"+ c +" }").appendTo('head');
	
	var c2 =j(window).height();
	//c2=c2;
	c2=c2+'px;';
	
	//alert(c2);
	 j("<style>").text("#container2 { height:"+ c2 +" }").appendTo('head');
	 }
	//x=x+'px;';
   //alert(x);#container2
		
		//j("<style>").text("#container2 { height:"+ y +" }").appendTo('head');
		//j( "#container" ).css({height:'768px'});

	
	
	//j(function() {

	//	j( "#resizable" ).draggable({ containment: "#container", scroll: false }).resizable({handles: 'n, e, s, w, ne, se, sw, nw,ns,ew',containment: "#container", minHeight: 200,minWidth: 200});
		
	//j("body").css("body {overflow:hidden;}");
	//$( "div, p" ).disableSelection();
	//j( "#resizable" ).draggable({ cancel: "#resizable #formInner" });

	//});
</script>
<!-----------------------------------------------end of viewport engine section ------------------------------------------------->

<!-----------------------------------------------dynamic db form section -------------------------------------------------------->
<script>
    //var number = 1 + Math.floor(Math.random() * 999999);
	var forms = new Array();
	//forms[0]=number;

function checkAndGenNumber1()
{
              var flag='0';
            number = 1 + Math.floor(Math.random() * 999999);
			
			for (var i=0;i<forms.length;i++)
			{
			    var no=forms[i];
				if(no==number)
				{
				 flag='1';
				}
			}
			if(flag=='1')
			{
			  checkAndGenNumber1();
			}
			else if(flag!='1')
			{
				forms[forms.length]=number;
				GenDBform(number);
				flag='0';
			}
}

 function GenDBform(number)  
  { 
   // showCustomer("emp");
    //j("#container").text("#container { height:100px; width:100px; background:#fff; }").appendTo("body");
	//j('<div>', {id:"X" } ).css({height:'100px',width:'100px',background:'#fff'}).appendTo('body');
	
	//alert(c);
	j('<div>', {id:number } ).appendTo('#container').draggable({ containment: "#container", scroll: false }).resizable({handles: 'n, e, s, w, ne, se, sw, nw,ns,ew',containment: '#container2', minHeight: 200,minWidth: 200,maxHeight:maxH}).css({height:'200px',width:'450px',border:'1px solid #fff',padding:'0 15px 60px',margin:'0 auto',position:'absolute',top:'85px',left:'26%'});
	
	j("#"+number).css('background-image','url("system/images/formTransparentBg.png")');//formTransparentBg.png
	//==========================================================================================================
	j('<div>', {id:'min'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'62px', top:'14px',width:'25px'})//tool bar
			j('#min'+number).css('background-image','url("system/images/minmize.png")');//toolbar minimize
	//==========================================================================================================	
		j('<div>', {id:'max'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'33px', top:'7px',width:'25px'})//tool bar
			j('#max'+number).css('background-image','url("system/images/maximize.png")');//toolbar maximize
	//==========================================================================================================
			j('<div>', {id:'clo'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'4px', top:'7px',width:'25px'})//tool bar
			j('#clo'+number).css('background-image','url("system/images/close.png")');//toolbar close
	//==========================================================================================================
	j('<div>', {id:number } ).appendTo('#'+number).css({height:'35px'});;//formHeader
	//j("#"+number).html('html text');
	j('<div>', {id:"formInner2"+number } ).appendTo('#'+number).css({height:'inherit',overflow:'auto',padding:'5px',background:'#034B58'});
	 
	//j('<div>', {id:'loader' } ).appendTo("#formInner2"+number).css({height:'200px',width:'200px'});
	 //j("#loader").css('background-image','url("system/images/preLoader.gif") no-repeat');
     
	  window.DBFormId="formInner2"+number;

	  showCustomer("dbNames","formInner2"+number,"no");
	  j( "#"+number ).draggable({ cancel: "#"+number+" #formInner2"+number });
	//j( "#resizable" ).draggable({ containment: "#container", scroll: false }).resizable({handles: 'n, e, s, w, ne, se, sw, nw,ns,ew',containment: "#container", minHeight: 200,minWidth: 200});
  }  
</script>
<!-----------------------------------------------end of dynamic db form section ------------------------------------------------->

<!-----------------------------------------------dynamic db creation section ---------------------------------------------------->
<script>
function checkAndGenNumber2()
{
              var flag='0';
            number = 1 + Math.floor(Math.random() * 999999);
			
			for (var i=0;i<forms.length;i++)
			{
			    var no=forms[i];
				if(no==number)
				{
				 flag='1';
				}
			}
			if(flag=='1')
			{
			  checkAndGenNumber2();
			}
			else if(flag!='1')
			{
				forms[forms.length]=number;
				GenCreateDBform(number);
				flag='0';
			}
}


function GenCreateDBform(number)  
  {    
                    
  
		  j('<div>', {id:number} ).appendTo('#container').fadeIn('slow').draggable({ containment: "#container", scroll: false }).css({height:'200px',width:'200px',border:'1px solid #fff',padding:'0 15px 60px',margin:'0 auto',position:'absolute',top:'85px',left:'26%'});
			
			j("#"+number).css('background-image','url("system/images/formTransparentBg.png")');
			
			j('<div>', {id:number,class:'123' } ).appendTo('#'+number).css({height:'27px','padding-top':'8px'});//formHeader
			

	j('#'+number+' .123').text('Create Database')
	//==========================================================================================================
	
			j('<div>', {id:'clo'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'4px', top:'7px',width:'25px'})//tool bar
			j('#clo'+number).css('background-image','url("system/images/close.png")');//toolbar close
	//==========================================================================================================
	

			j('<div>', {id:"formInner4"+number } ).appendTo('#'+number).css({height:'inherit',overflow:'auto',padding:'5px',background:'#034B58'});
//==========================================================================================================
	 j('<div><input type="text" class="field" value="" id="dbName" /></div>').fadeIn('slow').appendTo("#formInner4"+number);

     j('<div><input type="button"  name="dynamic[]" value="" onClick="createDB();"/></div>').fadeIn('slow').appendTo("#formInner4"+number);
			  //showCustomer("tableNames","formInner4"+number,"information_schema");
			  j( "#"+number ).draggable({ cancel: "#"+number+" #formInner4"+number });
//==========================================================================================================
  }
  

function createDB(number)
{
 //alert(x);
 var n=document.getElementById('dbName');
 var name=n.value;
 var functionName='createDB';
  //alert(name);
 var form='formInner4'+number;
  
  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(form).innerHTML=xmlhttp.responseText;
	//alert(name);
    }
  }
xmlhttp.open("POST","system/classes/DB.php?f="+functionName+"&DBname="+name,true);
xmlhttp.send();
if(window.isDBFormOpned =='yes')
	{ 
     reGenerateDBnames(window.DBFormId);
	 }
}
</script>
<!------------------------------------------------end of dynamic db creation section -------------------------------------------->

<!-----------------------------------------------dynamic table form section ----------------------------------------------------->
<script>
function checkAndGenNumber(x)
{
              var flag='0';
            number = 1 + Math.floor(Math.random() * 999999);
			
			for (var i=0;i<forms.length;i++)
			{
			    var no=forms[i];
				if(no==number)
				{
				 flag='1';
				}
			}
			if(flag=='1')
			{
			  checkAndGenNumber(x);
			}
			else if(flag!='1')
			{
				forms[forms.length]=number;
				GenTableform(number,x);
				flag='0';
			}
}


function GenTableform(number,x)  
  {    
            
  
		  j('<div>', {id:number} ).appendTo('#container').draggable({ containment: "#container", scroll: false }).resizable({handles: 'n, e, s, w, ne, se, sw, nw,ns,ew',containment: "#container2", minHeight: 200,minWidth: 200}).css({height:'200px',width:'450px',border:'1px solid #fff',padding:'0 15px 60px',margin:'0 auto',position:'absolute',top:'85px',left:'26%'});
			
			j("#"+number).css('background-image','url("system/images/formTransparentBg.png")');
			
			j('<div>', {id:number,class:'123' } ).appendTo('#'+number).css({height:'35px'});//formHeader
	//==========================================================================================================
	j('<div>', {id:'min'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'62px', top:'14px',width:'25px'})//tool bar
			j('#min'+number).css('background-image','url("system/images/minmize.png")');//toolbar minimize
	//==========================================================================================================	
		j('<div>', {id:'max'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'33px', top:'7px',width:'25px'})//tool bar
			j('#max'+number).css('background-image','url("system/images/maximize.png")');//toolbar maximize
	//==========================================================================================================
			j('<div>', {id:'clo'+number } ).appendTo('#'+number).css({height:'20px',position:'absolute', right:'4px', top:'7px',width:'25px'})//tool bar
			j('#clo'+number).css('background-image','url("system/images/close.png")');//toolbar close
	//==========================================================================================================
	
	
		
			
			j('<div>', {id:"formInner3"+number } ).appendTo('#'+number).css({height:'inherit',overflow:'auto',padding:'5px',background:'#034B58'});
			 
		
			
			  showtbl("tableNames","formInner3"+number,x);
			  j( "#"+number ).draggable({ cancel: "#"+number+" #formInner3"+number });
  }
  

</script>
<!-----------------------------------------------dynamic table form section ----------------------------------------------------->

<!-----------------------------------------------caller section ----------------------------------------------------------------->
<script> 
j(function() 
{
// j( "#145" ).button().click(function() {showCustomer("emp");return false;})
 
 j( "#db" ).click(function() {GoDB();return false;});
 
  j( "#dbCreate" ).click(function() {checkAndGenNumber2();return false;});
 //j( "#tables" ).click(function() {GenTableform();return false;});

});



function GoDB()
{
    
	if(window.isDBFormOpned !='yes')
	{
	refreshViewPortEngine();
	checkAndGenNumber1();
	}
    window.isDBFormOpned = "yes";
}
//<a href="javascript:refreshViewPortEngine()">Restart ViewPort Engine</a>
</script>
<!-----------------------------------------------end of caller section ---------------------------------------------------------->

<!-----------------------------------------------FadeIn/FadeOut section --------------------------------------------------------->
<script>

j(document).ready(function(){
 <!--======================================================================Home Buttn
 j('#btnInner').mouseover(function() 
    {
	 j("#2").fadeOut(); 
	 j("#1").fadeIn();
	 }
	 );
  
  
  j('#btnInner').mouseleave(function() 
    {
	 j("#2").fadeIn(); 
	 j("#1").fadeOut();
	 }
	 );
 <!--======================================================================
});


</script>
<!---------------------------------------------end of FadeIn/FadeOut section ---------------------------------------------------->

<!---------------------------------------------System Clock section ------------------------------------------------------------->
<script language="JavaScript" type="text/javascript">


function sivamtime() {

j('#date').disableSelection();
  j('#clock').disableSelection();
  j('#time').disableSelection();

  now=new Date();
  hour=now.getHours();
  min=now.getMinutes();
  sec=now.getSeconds();

if (min<=9) { min="0"+min; }
if (sec<=9) { sec="0"+sec; }
if (hour>12) { hour=hour-12; add="PM"; }
else { hour=hour; add="AM"; }
if (hour==12) { add="PM"; }

//document.timeForm.field.value = ((hour<=9) ? "0"+hour : hour) + ":" + min + ":" + sec + " " + add;
document.getElementById("time").innerHTML=((hour<=9) ? "0"+hour : hour) + ":" + min + ":" + sec + " " + add;
setTimeout("sivamtime()", 1000);
}
window.onload = sivamtime;

// -->
var 
month = new Array();
month[0]="January";	
month[1]="February";
month[2]="March";
month[3]="April";
month[4]="May";
month[5]="June";
month[6]="July";
month[7]="August";
month[8]="September";
month[9]="October";
month[10]="November";
month[11]="December";

var 
day = new Array();
day[0]="Sunday";
day[1]="Monday";
day[2]="Tuesday";
day[3]="Wednesday";
day[4]="Thursday";
day[5]="Friday";
day[6]="Saturday";

today = new Date();
date = today.getDate();
day = (day[today.getDay()]);
month = (month[today.getMonth()]);
year = (today.getFullYear());

 suffix = (date==1 || date==21 || date==31) ? "st" : "th" &&
 (date==2 || date==22) ? "nd" : "th" && (date==3 || date==23) ? "rd" : "th"

function print_date()
{
  document.write("<div id='date'>"+day + "," + "&nbsp;" + date   + "&nbsp;" + month + "," + "&nbsp;" + year+"</div>");
  //document.getElementById("date").innerHTML=(day + "," + "&nbsp;" + date   + "&nbsp;" + month + "," + "&nbsp;" + year);
  
}
print_date();

</script>
<!---------------------------------------------end of System Clock section ------------------------------------------------------>

<!---------------------------------------get me front/back/max/min/close section ------------------------------------------------>
<script>
j(document).ready(function(){

	j('#container').mousedown(function(event) {    
		var id = event.target.id;
		
		for(var i=0;i<forms.length;i++)
		{
		 var no=forms[i];
		 
		 if(id==no)
		 {
		  //alert("is a form :"+id);
		  j( "#"+id ).css({'z-Index':'1'});
		  }
		  else if(id!=no)
		  {
		  j( "#"+no ).css({'z-Index':'0'});
		  }
		}
	
		  
	});

j('#container').mouseup(function(event) {

var id = event.target.id;
substrId=id.substring(0,3)


var x = j('#'+id).parent().attr("id");

if(substrId=='min')
{
	for(var i=0;i<forms.length;i++)
	{
			 var no=forms[i];
			 
			 if(x==no)
			 {
			  j("#"+x).animate({"height": "0px","width":"100px","bottom":"0"}, "slow");
			 }
	 }
}
else if(substrId=='max')
{
 var higt=j("#"+x).height();
 var wid=j("#"+x).width();
  if((higt<200)&&(wid<450))
  {
   j("#"+x).animate({"height": "200px","width":"450px","top":"20px"}, "slow");
  }

}
else if(substrId=='clo')
{
  window.isDBFormOpned = "no";
  j("#"+x).remove();
}

//var x = j('#xxx').closest("div").attr("id");

//j(id).parent();
//alert(id);
//var x = j(id).closest('div').id;
 //j("#"+x).animate({"height": "+=5px"}, "slow");

//alert(x);

//var x = j(id).closest("div").attr("id");
//alert(x);

});
});
</script>
<!----------------------------------------end of get me front/back section ------------------------------------------------------>

<!----------------------------------------security section ---------------------------------------------------------------------->
<SCRIPT TYPE="text/javascript">



<!----------------------------------------Disable right click script

var message="Sorry, right-click has been disabled";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// -->
<!----------------------------------- end of Disable right click script

<!----------------------------------------Disable ctrl + s script
j(document).ready(function(){
   

    j(window).keydown(function(event) {
   
         // The property to obtain a keycode depends on browsers you are using.
         // The following statement allows you to obtain a keycode

    var code = (event.keyCode ? event.keyCode : event.which);

         // code 83 is  'S'
         if (!(code == 83 && event.ctrlKey)) return true;

         // the preventDefault method disables the default behavior.
         event.preventDefault();

         // You can assign a new function
   
          //j("form input[name=Save]").click();
   
    return false;
});
}); 
<!----------------------------------------end of Disable ctrl + s script
</SCRIPT> 
<!----------------------------------------end of security section --------------------------------------------------------------->
</head>
<body onkeyup="displayunicode(event); this.select()">


<!------------------------------------------------------------ menu section ----------------------------------------------------->
<div id="menu">
  <div id="menuLeft">
    
	 <div id="HomeBtn1">
	   <div id="btnInner">
	     <a href=""><img id="1" src="system/images/homeBtn.png" /></a>
		 <a href=""><img id="2" src="system/images/homeBtn1.png" /></a>
		</div>
	 </div>
	  
  </div>
  <div id="menuRight"></div>
  <div id="menuMiddle"></div>
  
  <div id="btns">
     <div id="btnContainer">
	   <ul>
	     <li>System</li>
		 <li>Settings</li>
	   </ul>
	 </div>
  </div>
  
</div>
<!-------------------------------------------------------End of menu section ---------------------------------------------------->




<div id="TabContainer">
  <div id="leftTba">
	  <ul>
		<li class="Btn" id="db">Databases</li>
		  <ul>
		     <li class="SubBtn" id="dbCreate">Create</li>
		     <li class="SubBtn" id="dbImport">Import</li>			 
		  </ul>
		<li class="Btn" id="sql">SQL</li>
		<li class="Btn" id="Usr">Users</li>
		  <ul>
			<li class="SubBtn" id="newUsr">Create</li>
		  </ul>
	  </ul>
	  
  </div>
  
  <div id="TabHead">
  <a href="#" id="button1">
    <div id="tabHndle">
	</div>
  </a>
  </div>
  
</div>


<div id="clock">
  <div id="date"></div>
  <div id="time"></div>
</div>

<div id="container2">
	<div id="container">
	</div>
</div>	




</body>
</html>
