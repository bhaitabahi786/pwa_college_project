$(document).ready(function () {
    $(".sidenav").sidenav();
    $(".slider").slider({ full_width: true });
    $(".dropdown-trigger").dropdown({ hover: false });
    $('.modal').modal();
    $('.collapsible').collapsible();
    $('select').formSelect();
    $('.tabs').tabs();
    // $('.datepicker').datepicker(); 
});

function toggleModal() {
    var instance = M.Modal.getInstance($("#modal3"));
    instance.open();
}





$('#login').click(function (e) {
    // e wount reload the page
    e.preventDefault();
    username = document.getElementById('username').value;
    password = document.getElementById('password').value;

    $.ajax({
        type: "POST",
        url: "../backend/regis.php",
        data: {
            username: username,
            password: password,
            login: true
        },
        success: function (response) {
            if(response == 'true') {
                $('#alert_msg').html('success');
                $('#alert_msg').css('color','green');
                window.location.replace("../index.php");

            }else{
                $('#alert_msg').html('error');
                $('#alert_msg').css('color','red');
            }
        },
        beforeSend: function () {
           
        }

    });


});