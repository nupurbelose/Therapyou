let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');
let userBox = document.querySelector('.header  .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
}


menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    userBox.classList.remove('active');
    if(window.scrollY > 60){
        document.querySelector('.header ').classList.add('active');
     }else{
        document.querySelector('.header ').classList.remove('active');
     }

}