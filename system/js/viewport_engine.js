<!---------------------------------------------------- viewport engine section ------------------------------------------------->
	
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

<!-----------------------------------------------end of viewport engine section ------------------------------------------------->