(function() {
	"use strict";
	window.onload = function() {
		console.log('application started.');
		console.log("your device width is", document.documentElement.clientWidth);
		loading.hide();

		// Handling SPA links
		// check for history API support
		if(window.history && window.history.pushState) {
			var links = document.querySelectorAll("header > nav > .spa-link");
			for(var i = 0; i < links.length; i++) {
				// return new function to fix the common closure problem.
				links[i].addEventListener("click", function(i) {
					return function(e) {
						// all the stuff goes here for every links[i] element
						history.pushState({ link: links[i].href }, null, links[i].href);
						onNavigation({ link: links[i].href });
						// prevent default redirection.
						e.preventDefault();
					};
				}(i));
			}
		}

		// Listening for pushState and page navigation
		var xhr = new XMLHttpRequest();
		function onNavigation(e) {
			xhr.open("GET", e.link, true);
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			xhr.onload = function() {
				document.querySelector("main").innerHTML = xhr.responseText;
				loading.hide();
			}
			loading.show();
			xhr.send();
		}
		window.onpopstate = function(e) { onNavigation(e.state); };
	};
})();
