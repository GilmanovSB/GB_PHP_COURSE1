const parrent = document.querySelector('.wrapper');
const content = document.querySelector('.modal');
parrent.addEventListener('click', (e) => {
    if(e.target.nodeName == 'IMG' && e.target.parentElement.className == 'wrapper' || e.target.className == 'close'){
        if(e.target.className == 'close'){
            parrent.removeChild(document.querySelector('.modal'));
            console.log(e);
        } else {
            parrent.innerHTML += `<div class = 'modal'>${e.target.outerHTML}<button class = 'close'>Close</button></div>`;
        }
    }}
);
