<!---------------------------------------------------- toggle left tab section ------------------------------------------------->

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
j('#leftTba').mouseleave(function() {setInterval(runEffect('1'), 1000);});

j( "#button1" ).click(function() {runEffect('1');return false;});
});


<!----------------------------------------------end of toggle left tab section ------------------------------------------------->