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

	var option = {
	    animation: true,
	    delay: 5000
	}
	var toastElList = [].slice.call(document.querySelectorAll('.toast'))
	var toastList = toastElList.map(function(toastEl) {
	    return new bootstrap.Toast(toastEl, option)
	})

	function see() {
	    for (var i = 0; i < toastList.length; i++) {
	        toastList[i].show();
	    }
	}