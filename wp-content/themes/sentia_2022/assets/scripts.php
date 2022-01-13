<script>
	function menuToggle() {
		var element = document.getElementById("body");
		element.classList.toggle("menu-active");
	}
	
	function openQuickConnect() {
		var element = document.getElementById("body");
		element.classList.add("quick-connect-active");
	}

	function closeQuickConnect() {
		var element = document.getElementById("body");
		element.classList.remove("quick-connect-active");
	}

	// Child Menus Toggle
	jQuery( '.menu-item-has-children' ).on( 'click', function() {
			jQuery( this ).toggleClass( 'active' );
	});


</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>