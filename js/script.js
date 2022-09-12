const bar = document.querySelector('.bar-container');
const menu = document.querySelector('.menu');
bar.addEventListener('click', function(){
    bar.classList.toggle('x');
    if(bar.classList.contains('x')){
        menu.style.height = `${menu.scrollHeight}px`;
    } else {
        menu.style.height = '0px';
    }
})





