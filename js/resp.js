{
burger=document.querySelector('.burger'),
navbar=document.querySelector('.navbar'),
rightnav=document.querySelector('.rightnav'),
navlist=document.querySelector('.navlist'),
burger.addEvenListener('click',()=>{
navlist.classList.toggle('v-class')
rightnav.classList.toggle('v-class')
navbar.classList.toggle('h-nav')
})
    
    
}