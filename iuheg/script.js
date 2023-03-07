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
const programs = document.querySelectorAll('.program_box');
programs.forEach(program=>{
    program.addEventListener('click',(e)=>{
        if(e.target.closest('h2')){
            const description = program.querySelector('.program_description');
            description.classList.toggle('showProgram');
        }
    })
})
/*Licence,Masters,Formation end*/
