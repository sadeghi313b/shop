function childHorizPositioner(element) {
    const parent = element.parentElement;
    const parentWidth = parent.offsetWidth;
    const elementWidth = element.offsetWidth;

    // vertical positioning just under the element
    // element.style.top = element.offsetHeight;

    // Calculate the offset from the right edge of the parent
    const widthDiff = parentWidth - elementWidth;

    // horizontal positioning
    if (document.dir === 'rtl') {
        element.style.right = `${widthDiff}px`;
    }else{
        element.style.left = `${widthDiff}px`;
    }
}

// show a dropdown box on 'hover on parent elem'
// parent elem class:  .hovered-dropdown-container    
// child elem class:   .hovered-dropdown-trigger
// child elem class:   .hovered-dropdown-content
const hoveredDropdownContainerElems = document.querySelectorAll('.hovered-dropdown-container')
hoveredDropdownContainerElems.forEach(hoveredDropdownContainerElem => {
    // let hoveredDropdownContentElem = Array.from(hoveredDropdownContainerElem.children).find(child => child.tagName === 'DIALOG');
    let hoveredDropdownContentElem = hoveredDropdownContainerElem.querySelector('.hovered-dropdown-content');
    let hoveredDropdownTriggerElem = hoveredDropdownContainerElem.querySelector('.hovered-dropdown-trigger');
    hoveredDropdownContainerElem.addEventListener('mouseenter', () => {
        hoveredDropdownContentElem.classList.add('animate__animated', 'animate__fadeIn');
        hoveredDropdownContentElem.style.display = 'block';
        childHorizPositioner(hoveredDropdownContentElem);
        hoveredDropdownContentElem.style.top = `${hoveredDropdownTriggerElem.offsetHeight-6}px`;
    });

    hoveredDropdownContainerElem.addEventListener('mouseleave', () => {
        hoveredDropdownContentElem.style.display = 'none';
    });
});