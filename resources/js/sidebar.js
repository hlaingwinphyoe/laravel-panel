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

$('.sub-btn').click(function(){
    $(this).next('.sub-menu').removeClass('sub-on')
    $(this).next('.sub-menu').slideToggle();
});

if ($('.sidebar-dropdown-link').hasClass('active')){
    $('.sub-menu').toggleClass('sub-on');
}
