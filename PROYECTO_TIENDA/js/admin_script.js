let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');
let accountBox = document.querySelector('.account-box');
let user = document.querySelector('#user-btn')
menu.onclick = () =>{
    navbar.classList.toggle('active');
    accountBox.classList.remove('active');
}

user.onclick = () =>{
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    accountBox.classList.remove('active');

}

/* products: */
let cancelar = document.querySelector('#close-update');
cancelar.onclick = () =>{
    document.querySelector('.edit-product-form').style.display = 'none';
    window.location.href = 'admin_products.php';
}