let userBox = document.querySelector('.user-box');
let userbtn = document.querySelector('#user-btn');
userbtn.onclick = () =>{
    userBox.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');
let menubtn = document.querySelector('#menu-btn');
menubtn.onclick = () =>{
    navbar.classList.toggle('active');
    userBox.classList.remove('active');
}



window.onscroll = () =>{
    userBox.classList.remove('active');
    navbar.classList.remove('active');
    if(window.scrollY > 60){
        document.querySelector('.header .header-2').classList.add('active');
     }else{
        document.querySelector('.header .header-2').classList.remove('active');
     }
}