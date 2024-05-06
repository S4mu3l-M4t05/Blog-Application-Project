$(document).ready(function() {
    // Get the current page's URL
    var currentURL = window.location.href;
    
    // Extract the file name from the URL
    var fileName = currentURL.split('/').pop();
    
    // Loop through each navigation link
    $('.navbar-nav .nav-link').each(function() {
        if ($(this).attr('href') === fileName) {
            $(this).addClass('active');
        }
    });

    $('.hoverable-cell').click(function () {
        var username = $(this).data('username');
        var userInfoDiv = $('#' + username + '-info').html();

        $('#userModal .modal-body').html(userInfoDiv);
        $('#userModal').modal('show');
    });
    setTimeout(function() {
        $('.alert').fadeOut('slow', function() {
            $(this).remove();
        });
    }, 3000);
});