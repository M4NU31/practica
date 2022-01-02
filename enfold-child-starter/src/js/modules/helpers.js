function toggableItemGrid() {

    /*
    - open first init - open-first
    - multiple open at a time - multiple-open
    - toggle on hover instead of click - toggle-hover
    - always one open at all times - force-open
    */

    const toggleableItemGrids = document.querySelectorAll(".ep-grid-wrapper.is-toggleable");

    if(toggleableItemGrids.length > 0 ){
        [...toggleableItemGrids].forEach((toggleableItemGrid) => { 

            const openFirst = toggleableItemGrid.classList.contains("open-first") ? true : false;
            const multipleOpen = toggleableItemGrid.classList.contains("multiple-open") ? true : false;
            const toggleEvent = toggleableItemGrid.classList.contains("toggle-hover") ? "mouseenter" : "click";
            const alwaysOneOpen = toggleableItemGrid.classList.contains("force-open") ? true : false;
            
            const items = [...toggleableItemGrid.querySelectorAll(".ep-item-grid-item")];

            if(openFirst) items[0].classList.add("is-active");

            [...items].forEach((item) => {
                item.addEventListener(toggleEvent, function() {

                    if(!multipleOpen){
                        items.filter((e) => e !== this).forEach((i) => i.classList.remove('is-active'));   
                    }

                    if(!alwaysOneOpen){
                        this.classList.toggle("is-active");
                    } else {
                        this.classList.add("is-active");
                    }

                });
            });
        });
    }
}

export { toggableItemGrid };
