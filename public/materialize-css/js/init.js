$(document).ready(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.carousel').carousel();
    $('.collapsible').collapsible();
    $(".dropdown-trigger").dropdown();
    $('.modal').modal();
    $('.scrollspy').scrollSpy();
    $('select').formSelect();
    $('.tooltipped').tooltip();
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        hoverEnabled: false
    });
});
