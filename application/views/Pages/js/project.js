$(document).ready(function(){
	
	///single
    $("ul#single li").mouseover(function(){
        $(this).stop().animate({height:'400px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });

    $("ul#single li").mouseout(function(){
         $(this).stop().animate({height:'42px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });
	
	//horizontal
    $("ul#horizontal li").mouseover(function(){
        $(this).stop().animate({width:'650px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });

    $("ul#horizontal li").mouseout(function(){
        $(this).stop().animate({width:'40px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });
	
	//vertical
	 $("ul#vertical li").mouseover(function(){
        $(this).stop().animate({height:'400px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });

    $("ul#vertical li").mouseout(function(){
        $(this).stop().animate({height:'42px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });

});
