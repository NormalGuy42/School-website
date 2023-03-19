const menuBtn = document.querySelector('.burger');
const menu = document.querySelector('.menu')
menuBtn.addEventListener('click',()=>{
    menu.classList.toggle('show');
})

document.addEventListener('click',(e)=>{
    if(!e.target.closest('.burger') && menu.classList.contains('show')){
        if(!e.target.closest('.menu')){
            menu.classList.remove('show');
        }
    }
})