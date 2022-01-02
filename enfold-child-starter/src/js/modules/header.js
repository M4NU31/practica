export default function header() {

	/* Header scroll class toggle */
	const win = window;
	const stickyNav = () => {
        
        let htmlEl = document.documentElement;

		if(htmlEl.scrollTop < 90) {
			htmlEl.classList.remove("header-is-scrolled");
		}else{
			htmlEl.classList.add("header-is-scrolled");
		}

	};

    win.addEventListener("scroll", () => {
        win.requestAnimationFrame(stickyNav);
    });
    stickyNav();

	/* Items with Menu class toggler with delay */
	const menuItemsWithChildren = document.querySelectorAll(".header .header-menu .main-menu > .menu-item-has-children");
	const menuItemsWithChildrenDelayCheck = {};
	[...menuItemsWithChildren].forEach((el, i) => {
		const thisMenu = el;

		thisMenu.addEventListener('mouseenter', function(){
			menuItemsWithChildrenDelayCheck[i] = true;
			setTimeout(
				function(){
					if(menuItemsWithChildrenDelayCheck[i] == true){
						thisMenu.classList.add('sub-menu-is-active');
					}
				}
			, 200);
		});

		thisMenu.addEventListener('mouseleave', function(){
			menuItemsWithChildrenDelayCheck[i] = false;
			setTimeout(
				function(){
					if(menuItemsWithChildrenDelayCheck[i] == false){
						thisMenu.classList.remove('sub-menu-is-active');
					}
				}
			, 325);
		});
	});

	/* Burger Menu items indicator toggle */
	const burgerMenuLinks = document.querySelectorAll(".hamburger-content .main-menu > .menu-item-has-children");
	[...burgerMenuLinks].forEach((burgerMenuLink)=>{
		let menuIndicator = document.createElement('span');
		menuIndicator.className = "sub-menu-indicator";
		burgerMenuLink.appendChild(menuIndicator);

		menuIndicator.addEventListener("click", () => {
			burgerMenuLink.classList.toggle("sub-menu-is-active");
		});
	});

	const burgerToggles = document.querySelectorAll(".hamburger-toggle, .hamburger-overlay, .hamburger-content a");
	[...burgerToggles].forEach((el) => {
		el.addEventListener("click", () => {
			document.documentElement.classList.toggle("burger-is-active");
		});
	});

}