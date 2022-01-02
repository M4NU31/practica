export default function facetwp() {
    const bodyEl = document.body;
	const facetWPTemplate = document.querySelector(".facetwp-template");

	document.addEventListener('facetwp-loaded', function() {
		facetWPTemplate.classList.remove("fwp-loading");
	});

	document.addEventListener('facetwp-refresh', function() {
		facetWPTemplate.classList.add("fwp-loading");

		setTimeout(() => {
			bodyEl.classList.toggle("fwp-on", window.location.href.indexOf("?_") != -1);
		}, 100);
	});
}