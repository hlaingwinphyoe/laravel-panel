let body = document.body;
var theme;

function darkMode(){
    body.setAttribute('data-bs-theme','dark');
    document.getElementById('sideMenu').classList.add('text-white');
    document.querySelector('#dark-mode').setAttribute('class','fa-solid fa-sun fa-sm align-middle');

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
    document.getElementById('sideMenu').classList.remove('text-white');
    document.querySelector('#dark-mode').setAttribute('class','fa-regular fa-moon fa-sm align-middle');

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
