//--------------------------------------------------
//
//                  next/back section buttons
//
//--------------------------------------------------
let activesection = 'sec0';
const sections = document.getElementsByTagName('section');
const h1Elements = document.querySelectorAll('h1'); 
const h2Elements = document.querySelectorAll('h2');
document.getElementById('theactivesection').innerHTML = activesection;
document.getElementById('totalsection').innerHTML=sections.length;

function gonext() {
    if (activesection == 'sec' + sections.length) {
        alert('شما در پایان مقاله هستید');
        return;
    }
    hide_elements(sections);
    activesection = addOneToNumericPart(activesection);
    if (activesection == 'sec0') {activesection == 'sec1';}
    document.getElementById(activesection).style.display = 'block';
    document.getElementById('theactivesection').innerHTML = activesection;
    scrollToTop()
}
function goback() {
    if (activesection == 'sec0') {
        alert('شما در آغاز مقاله هستید');
        return;
    }
    activesection = minusOneFromNumericPart(activesection);
    hide_elements(sections);
    document.getElementById(activesection).style.display = 'block';
    document.getElementById('theactivesection').innerHTML = activesection;
    scrollToTop()
}
//--------------------------------------------------------------
//
//          Table of contents (TOC) - Right side bar
//
//--------------------------------------------------------------
hElements = document.querySelectorAll('h1,h2');     //hElement(s) is in document not in main-TOC
hElements.forEach((hElement) => {
    if (hElement.tagName === 'H1') {
        const TOC1title = document.createElement('div');
        TOC1title.classList.add('right');
        TOC1title.innerHTML = hElement.innerHTML;
        // onclick-start
        TOC1title.onclick = () => {  //--------------------------------------------------
            const clickedTOC=TOC1title;
            const TOC1s=document.querySelectorAll('.TOC1class');
            const TOC2s=document.querySelectorAll('.TOC2class');
        // work in main-contents: go to clicked section
            hide_elements(sections);
            hElement.closest('section').style.display = 'block';
        // set nav row
            activesection = hElement.closest('section').id;
            document.getElementById('theactivesection').innerHTML = activesection;
            // work in grid_TOC: collapse|expand in TOC's
            removeClass(TOC1s,'TOC1active');
            removeClass(TOC2s,'TOC2active');
            clickedTOC.classList.add('TOC1active');
            if (window.innerWidth < 768) {
                openTab('main-contents');
            } else {scrollToTop()}
        }; 

        const TOC1btn=document.createElement('div'); //div for expand|collapse button
        TOC1btn.classList.add('left');
        TOC1btn.innerHTML='-';
        TOC1btn.style.cssText='margin:0px;padding:0 0 0 10px;font-size:1.5em;';
        TOC1btn.onclick = () => {
            const firstTOC2=TOC1btn.parentElement.nextElementSibling;
            const subTOCs=[];   //sub of clicked TOC1
            let currentelem=firstTOC2;
            while (currentelem.classList.contains('TOC2class')) {
                subTOCs.push(currentelem); //pushing collection
                currentelem=currentelem.nextElementSibling;
            }
            if (window.getComputedStyle(firstTOC2).display=='block') {
                hide_elements(subTOCs);
                TOC1btn.innerHTML='+';
            } else {
                display_elements(subTOCs);
                TOC1btn.innerHTML='-';
            }
        }

        const TOC1=document.createElement('div');
        TOC1.classList.add('TOC1class');
        document.querySelector('article').appendChild(TOC1);
        TOC1.appendChild(TOC1title);
        TOC1.appendChild(TOC1btn);



    } else if (hElement.tagName === 'H2') {
        const TOC2 = document.createElement('div');
        TOC2.classList.add('TOC2class');
        TOC2.innerHTML = hElement.innerHTML;
        // onclick-start
        TOC2.onclick = () => {  //--------------------------------------------------
            const clickedTOC=TOC2; 
            // work in main-contents: go to clicked section
            hide_elements(sections);
            hElement.closest('section').style.display = 'block';
            // set nav row and scrool to top
            activesection = hElement.closest('section').id;
            document.getElementById('theactivesection').innerHTML = activesection;
            // work in grid_TOC: switch background color
            const TOC1s=document.querySelectorAll('.TOC1class');
            const TOC2s = document.querySelectorAll('.TOC2class');
            removeClass(TOC1s,'TOC1active');
            // TOC2.previousElementSibling.closest('.TOC1class').classList.add('TOC1active');
            // var closestElement = TOC2.previousElementSibling;
            // while (closestElement) {
            //     if (closestElement.classList.contains('TOC1class')) {
            //         break;
            //     }
            // let TOC1ofTOC2 = closestElement.previousElementSibling;
            // }
            // TOC1ofTOC2.classList.add('TOC1active');
            removeClass(TOC2s,'TOC2active');
            TOC2.classList.add('TOC2active');

            if (window.innerWidth < 768) {
                openTab('main-contents');
            } else {scrollToTop()}
        };
        // onclick-end
        document.querySelector('article').appendChild(TOC2);
    }
});
//--------------------------------------------------
//
//                  expand/collaps All TOC
//
//--------------------------------------------------
function expandAll() {
        const elems = document.querySelectorAll('.TOC2class');
        elems.forEach(elem => {
            elem.style.display = 'block';
        });
}
document.getElementById('collapseAll').onclick = () => {
    const elems = document.querySelectorAll('.TOC2class');
    elems.forEach(elem => {
        elem.style.display = 'none';
    });
};
//--------------------------------------------------
//
//                  functions definitions
//
//--------------------------------------------------
function audioSpeed(speed,eevent) {
    // var audio = document.getElementById("myAudio");
    var audioElement = eevent.currentTarget;
    audioElement = audioElement.previousElementSibling;
    while (audioElement && audioElement.tagName !== 'AUDIO') {
        audioElement = audioElement.previousElementSibling;
    }
    audioElement.playbackRate = speed;
}
function openTab(cclassname,eevent) {
    const panels=document.getElementsByClassName('tab-content') //panels:tab's-content
    for (let i = 0; i < panels.length; i++) {
            panels[i].classList.remove('visible');
            panels[i].classList.add('hidden');
    };
    const selectedPanel=document.getElementsByClassName(cclassname);
    selectedPanel[0].classList.remove('hidden');
    selectedPanel[0].classList.add('visible');
    //----------active/deactive tab buttons
    Array.from(document.getElementById('main-tab').children).forEach(elem=>{
        elem.classList.remove('active');
    });
    eevent.currentTarget.className += " active";
}
function scrollToTop() {
    // return  //exit and do this function
    window.scrollTo({
    top: 0,
    behavior: 'smooth'
});
}
function hide_elements(elements) {
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display = 'none';
    }
}
function display_elements(elements) {
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display = 'block';
    }
}
function addOneToNumericPart(str) {
    // return str.replace(/\d+/, match => parseInt(match) + 1);
    n = +str.substring(3) + 1;
    return 'sec' + n;
}
function minusOneFromNumericPart(str) {
    return str.replace(/\d+/, match => parseInt(match) - 1);
}
function setBackgroundColor(collection,ccolor) {
    collection.forEach(elem=> {
        elem.style.backgroundColor=ccolor;
    });
}
function removeClass(collection,classname) {
        collection.forEach(element => {
            element.classList.remove(classname);
        });
}
// .sticky-top class use on scroll to top
window.onscroll = function() {StickyTopFunction()};
var stickyElem = document.querySelector('.sticky-top');
var sticky_offset = stickyElem.offsetTop;
function StickyTopFunction() {
  if (window.scrollY  > sticky_offset) {
    stickyElem.classList.add("stuck");
  } else {
    stickyElem.classList.remove("stuck");
  }
}