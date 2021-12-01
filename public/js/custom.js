	const currentLocation = location.href;
	const menuItem = document.querySelectorAll('a');
	const menuLength = menuItem.length;

	for (let i = 0; i < menuLength; i++) {
	    if (menuItem[i].href === currentLocation) {
	        menuItem[i].className = 'nav-link active';
	    }
	}

	$("#orderId").click(
	    function() {
	        $("#appearId").show();
	    }
	)
	$("#closeId").click(
	    function() {
	        $("#appearId").hide();
	    }
	)