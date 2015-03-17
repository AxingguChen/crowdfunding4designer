

/* Document Ready function
-------------------------------------------------------------------*/
jQuery(document).ready(function($) {

 

	/* Time Countdown 
	-------------------------------------------------------------------*/
	$('#time_countdown').countDown({
        
         targetDate: {
             'day': 30,
             'month': 9,
             'year': 2015,
             'hour': 0,
             'min': 0,
             'sec': 0
         },
         omitWeeks: true

//         targetOffset: {
//            'day':      0,
//            'month':    0,
//            'year':     1,
//            'hour':     0,
//            'min':      0,
//            'sec':      3
//		},
//		omitWeeks: true

	    });

});

/* Document Ready function End
-------------------------------------------------------------------*/


