$(document).ready(function(){
    $('#sidenavCollapse').on('click', function(){
        $('.main-container').toggleClass('active-content')
        $('.sidenav').toggleClass('active-nav')
    })
})