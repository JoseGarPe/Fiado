var counter1 = new CountUp("counter1", 1024, 6785, 0, 2, {  
	useEasing: true,
  	useGrouping: true,
  	separator: ',',
  	decimal: '.',
});

var counter2 = new CountUp("counter2", 570, 1059, 0, 2, {  
  	useEasing: false,
  	useGrouping: true,
});

var counter3 = new CountUp("counter3", 687, 2536, 0, 2, {  
  	useEasing: false,
  	useGrouping: true,
});

var waypoint1 = new Waypoint({
  	element: document.getElementById('waypoint1'),
  	handler: function(direction) {
    	if (direction == "up") {
      		counter1.reset();
    	} else {
      		counter1.start();
    	}
  	},
  	offset: '90%'
});

var waypoint1 = new Waypoint({
  	element: document.getElementById('waypoint2'),
  	handler: function(direction) {
    	if (direction == "up") {
      		counter2.reset();
    	} else {
      		counter2.start();
    	}
  	},
  	offset: '90%'
});

var waypoint1 = new Waypoint({
  	element: document.getElementById('waypoint3'),
  	handler: function(direction) {
    	if (direction == "up") {
     		counter3.reset();
    	} else {
      		counter3.start();
    	}
  	},
  	offset: '90%'
});