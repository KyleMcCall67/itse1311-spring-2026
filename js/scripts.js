
// A $( document ).ready() block.
$( document ).ready(function() {

    $('#myBTN').on('click', goToMyFunction);

    function goToMyFunction() {

        var myName = $('#myName').val();
        alert(myName);

        $('.myClass').css("color", "red");
    }
    
    //$('.myClass').hide();
    $('.myClass').css("color", "purple");

});

