function toggleSubToc(elem) {
    // elem -> subElem
    
    // toc_class_name= toc1 | toc2 | toc3 | etc
    let thelevel = () => {    
        for (let classname of elem.classList) {
            if (classname.includes('toc')) {return classname.match(/\d+$/)[0];}
        }
    };
    let level= thelevel();
    
    //find subElem of elem that has a class: sub1 | sub2 | sub3 | etc
    let has_sub = true;
    let tempElem = elem.nextElementSibling;
    while ( !tempElem.classList.contains('sub' + level) ) {
        if  (   !tempElem.nextElementSibling
            // If there is no next element sibling, we've reached the end of the document
            ||  tempElem.classList.contains('toc'+level)
            // If there is 'toc1' in tempElem.classlist, we've reached the next 'toc1'
        ) {
            has_sub = false;
            break;
        }
        tempElem = tempElem.nextElementSibling;
        console.log(has_sub);
    }
    
    // toggle subElem to show|hide
    if (has_sub) {
        const subElem = tempElem;
        subElem.classList.toggle('d-none');
        // console.log(localStorage.getItem('old_opened_elem'));
        // localStorage.setItem('old_opened_elem', elem.outerHTML);
    }


    // document.getElementById('a').nextElementSibling

}