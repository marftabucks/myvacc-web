$(document).ready(() => {
    // Event listener for dropdown
    $('.dropdown-button').click(function() {
        $(this).find('.dropdown-menu').toggleClass('open');
    })
});

$(document).click(function(event){

    // Event listener to close dropdown when user clicks body
    var $trigger = $(".dropdown");

    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".dropdown-menu").removeClass("open");
    }            
});