(function($) {
    $(document).ready(function() {
      console.log('hello');
      //$('.title').draggable();

      $('.primelabel').click(function(){
      		var value = prompt("Please enter your prime-number", "7");
      		for(var i = 2; i < value; i++) {
		        if(value % i === 0) {
		            alert(value+" is not prime.  Sorry.");
		        }
		    }
		    alert(value+" is prime! Well done");   
		});
      
    });
}(jQuery));