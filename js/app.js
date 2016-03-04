$j=jQuery;

/*====================================
=            Match Height            =
====================================*/

$j(function() {
    $j('.left-column .column').matchHeight();
    $j('.right-column .column').matchHeight();

    //cars
    $j('#left-section .column').matchHeight();
});