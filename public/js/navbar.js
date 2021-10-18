$(document).ready(function() {
    $('.navbar-light .dmenu').hover(function() {
        $('.sm-menu').stop(true, true).slideUp(105)
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    });

    $('.page-content').hover(function() {
        $('.sm-menu').stop(true, true).slideUp(105)
    });
    $('#tableData').DataTable();
    $('.dataTables_length').addClass('bs-select');
});