const menu = document.querySelector('.down-arrow')
const close = document.querySelector('.close')
const nav = document.querySelector('.user-drop-down-list')
   menu.addEventListener('click', () => 
   { 
       if(nav.classList.contains('hidden')){
        nav.classList.remove('hidden')
        nav.classList.add('show')
     
       }else{
        nav.classList.remove('show')
        nav.classList.add('hidden')

       }
       
})

