var collapsables = document.querySelectorAll('.collapsable');
collapsables.forEach(collapsable=>{
    collapsable.addEventListener('click',()=>{
        var section = collapsable.nextElementSibling;
        var svg = collapsable.querySelector('svg');
        svg.classList.toggle('rotate_svg');
        section.classList.toggle('showSection');
        console.log('clicked');
    })
})