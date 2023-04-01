//Sidebar start 
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
//Sidebar end

document.addEventListener('click',(e)=>{
    //Close sidebar on click outside
    if(!e.target.closest('.burger') ){
        var sideBar = document.querySelector('.sidebar');
        if(!e.target.closest('.sidebar')&& sideBar.classList.contains('showSidebar')){
            sideBar.classList.remove('showSidebar')
        }
    }
    //Close box on click outside
    try{
        var info = document.querySelector('.info[data-box-active="true"]');
        if(!e.target.closest('.container') && info.dataset.boxActive){
            delete info.dataset.boxActive;
        }
    }catch(e){}
    //Close menu on click outside
    try{
        var menu = document.querySelector('.menu[data-menu-active="true"]');
        if(!e.target.closest('.menu_btn') && menu.dataset.menuActive){
            delete menu.dataset.menuActive;
        }
    }catch(e){}
})
//Data boxes collapse
var dataBoxes = document.querySelectorAll('.data_box');
dataBoxes.forEach(dataBox =>{
    dataBox.addEventListener('click',(e)=>{
        console.log('clicked');
        var info = dataBox.nextElementSibling;
        activeInfo = document.querySelectorAll('[data-box-active="true"]')
        //If you click on the menu button the databox doesn't expand
        if(!info.dataset.boxActive && !e.target.closest('.menu_btn')){
            info.dataset.boxActive = true;
        }
        else if(info.dataset.boxActive = true && !e.target.closest('.menu_btn')){
            delete info.dataset.boxActive;
        }
        try{
            if(activeInfo.length = 1){
                delete activeInfo[0].dataset.boxActive;
            }
        }catch(e){}
    })
})
//Menu next to databoxes
var menuBtns = document.querySelectorAll('.menu_btn');
menuBtns.forEach(menuBtn =>{
    menuBtn.addEventListener('click',()=>{
        menu = menuBtn.nextElementSibling;
        activeMenu = document.querySelectorAll('[data-menu-active="true"]')
        if(!menu.dataset.menuActive){
            menu.dataset.menuActive = true;
        }
        else if(menu.dataset.menuActive = true){
            delete menu.dataset.menuActive;
        }
        try{
            if(activeMenu.length = 1){
                delete activeMenu[0].dataset.menuActive;
            }
        }catch(e){}
    })
})