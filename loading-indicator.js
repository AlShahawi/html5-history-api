(function(global) {
	// Handle Loading Indicator
	var isLoading = true;
	var loadingElement = document.getElementById("loading");
	function hide() {
		if(isLoading) loadingElement.style.display = "none";
		isLoading = !isLoading;
	}
	function show() {
		if(!isLoading) loadingElement.style.display = "block";
		isLoading = !isLoading;
	}
	global.loading = { show: show, hide: hide };
})(window || global);
