let menubar = document.querySelector('#menu-bar');
let mycart = document.querySelector('#cart');
let opencart = document.querySelector('.add-cart');
let mynav = document.querySelector('.navbar');


menubar.onclick = () =>{
    menubar.classList.toggle('fa-times')
    mynav.classList.toggle('active')
}

mycart.onclick = () =>{

    opencart.classList.toggle('active')

}

