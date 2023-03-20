//Menu 
var burger = document.querySelector('.burger')
burger.addEventListener('click',()=>{
    var sideBar = document.querySelector('.sidebar');
    sideBar.classList.toggle('showSidebar');
})



var collapsables = document.querySelectorAll('.collapsable');
collapsables.forEach(collapsable=>{
    collapsable.addEventListener('click',()=>{
        var section = collapsable.nextElementSibling;
        var svg = collapsable.querySelector('.svg_collapse');
        svg.classList.toggle('rotate_svg');
        section.classList.toggle('showSection');
    })
})

document.addEventListener('click',(e)=>{
    if(!e.target.closest('.burger') ){
        var sideBar = document.querySelector('.sidebar');
        if(!e.target.closest('.sidebar')&& sideBar.classList.contains('showSidebar')){
            sideBar.classList.remove('showSidebar')
        }
    }
})