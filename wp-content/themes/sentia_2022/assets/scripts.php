<script>
	function menuToggle() {
		var element = document.getElementById("body");
		element.classList.toggle("menu-active");
		element.classList.remove("search-active");
	}

	function searchToggle() {
		var element = document.getElementById("body");
		element.classList.toggle("search-active");
		element.classList.remove("menu-active");
	}

	function servicesToggle() {
		var element = document.getElementById("body");
		element.classList.toggle("services-active");
	}

	// Child Menus Toggle
	jQuery( '.menu-item-has-children' ).on( 'click', function() {
			jQuery( this ).toggleClass( 'active' );
	});


</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>