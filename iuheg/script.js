const navBtn = document.querySelector('.burger');
navBtn.addEventListener('click',()=>{
    const menu = document.querySelector('.menu')
    menu.classList.toggle('show')
})
document.addEventListener('click',(e)=>{
    const menu = document.querySelector('.menu')
    if(!e.target.closest('.burger') && menu.classList.contains('show')){
        if(!e.target.closest('.menu')){
            menu.classList.remove('show');
        }
    }
})

/*Licence,Masters,Formation start*/

/*Licence,Masters,Formation end*/
