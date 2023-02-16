const initialize = () => {
    initializeSidebarCollapse();
}

const initializeSidebarCollapse = () => {
    const sidebarElement = document.getElementsByClassName("js-sidebar")[0];
    const sidebarToggleElement = document.getElementsByClassName("js-sidebar-toggle")[0];

    if(sidebarElement && sidebarToggleElement) {
        sidebarToggleElement.addEventListener("click", () => {
            sidebarElement.classList.toggle("collapsed");

            sidebarElement.addEventListener("transitionend", () => {
                window.dispatchEvent(new Event("resize"));
            });
        });
    }
}

// Wait until page is loaded
document.addEventListener("DOMContentLoaded", () => initialize());

// document.querySelector('.sub-btn').addEventListener('click',function (){
//     console.log(this.nextElementSibling)
// })

// var linkToggle = document.querySelectorAll('.js-toggle');
//
// for(let i = 0; i < linkToggle.length; i++){
//
//     linkToggle[i].addEventListener('click', function(event){
//
//         event.preventDefault();
//
//         var container = document.getElementById(this.dataset.container);
//         var icon = document.querySelector('.fa-arrow-right-long');
//
//         if (!container.classList.contains('active')) {
//
//             container.classList.add('active');
//             container.style.height = 'auto';
//             icon.classList.add('rotate')
//
//             var height = container.clientHeight + 'px';
//
//             container.style.height = '0px';
//
//             setTimeout(function () {
//                 container.style.height = height;
//             }, 0);
//
//         } else {
//
//             container.style.height = '0px';
//
//             container.addEventListener('transitionend', function () {
//                 container.classList.remove('active');
//                 icon.classList.remove('rotate');
//             }, {
//                 once: true
//             });
//
//         }
//
//     });
//
// }

$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});
