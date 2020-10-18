const parrent = document.querySelector('body');
parrent.addEventListener('click', (e) => {
    if(e.target.nodeName == 'IMG'){
        const modalWin = document.createElement('DIV');
        const el = e.target;
        modalWin.classList.add('modal');
        parrent.appendChild(modalWin);
    }}
);