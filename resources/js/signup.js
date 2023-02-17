import './bootstrap';

// dark mode
let body = document.body;
var theme;

function darkMode(){
    body.setAttribute('data-bs-theme','dark');
    document.querySelector('#dark-mode').setAttribute('class','fa-solid fa-sun');
    document.querySelectorAll('.form input').forEach(ele => ele.classList.add('input-color'));

    if (body.getAttribute('data-bs-theme') === 'dark'){
        theme = 'dark';
    }else{
        theme = 'white'
    }

    // save to localstorage
    localStorage.removeItem('theme');
    localStorage.setItem('theme',JSON.stringify(theme));

}

function lightMode(){
    body.setAttribute('data-bs-theme','light');
    document.querySelector('#dark-mode').setAttribute('class','fa-regular fa-moon');
    document.querySelectorAll('.form input').forEach(ele => ele.classList.remove('input-color'));


    if (body.getAttribute('data-bs-theme') === 'light'){
        theme = 'light';
    }else{
        theme = 'dark'
    }

    // save to localstorage
    localStorage.removeItem('theme');
    localStorage.setItem('theme',JSON.stringify(theme));
}

$('#darkMode').click(function (){
    document.querySelector('body').getAttribute('data-bs-theme') === 'light' ? darkMode() : lightMode();
})

let getTheme = JSON.parse(localStorage.getItem('theme'))
if (getTheme === 'dark'){
    darkMode();
}else{
    lightMode();
}

