function displayToggleNext(elem) {
    let angleElem;
    let nextSibling = elem.nextElementSibling;
    
    let childElements = elem.children;
    for (let i = 0; i < childElements.length; i++) {
        if (childElements[i].title === 'dispalyToggle') {
            angleElem = childElements[i];
            break;
        }
    }

    nextSibling.classList.toggle("d-none");
    // angleElem.classList.toggle("rotate-90");
    if (nextSibling.classList.contains('d-none')) {
        angleElem.classList.remove("rotate-90");
    }else{
        angleElem.classList.add("rotate-90");
    }
}

function toggleDisplay(iconElem, toggleDisplayElemId, onIconClass, offIconClass) {
    iconElem.classList.toggle(onIconClass);
    iconElem.classList.toggle(offIconClass);
    let toggleDisplayElem = document.getElementById(toggleDisplayElemId)
    toggleDisplayElem.classList.toggle('d-none');
    toggleDisplayElem.classList.toggle('d-inline');
}

const searchIcon = document.getElementById('search-single-icon');
const searchInput = document.getElementById('search-area');
searchIcon.addEventListener('click', () => {
    console.log('object');
//   searchInput.hidden = !searchInput.hidden; // Toggle hidden attribute
//   // Optional: Add/remove focus on search input
//   if (!searchInput.hidden) {
//     searchInput.focus();
//   }
});