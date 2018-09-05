function toggleMmodal() {
    $('#mmodal').toggleClass('ativo');
    // if($('#mmodal').hasClass('ativo')){
    //     $('#mmodal').removeClass('ativo');
    // }else{
    //     $('#mmodal').addClass('ativo');
    // }
}

function fechaMmodal() {
    $('#mmodal').removeClass('ativo');
}

$('#mmodal .ancora a').on('click', function(){
    toggleMmodal();
});

$('.fechar-mmodal').on('click', function(){
    fechaMmodal();
});

$('#mmenu').on('click', function(){
    toggleMmodal();
});



/* ---------------------------------------------------------------------------------------
*    Ancora
* --------------------------------------------------------------------------------------*/
$('.ancora').on('click', function(){
    var href = $.attr(this, 'href');
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500, function () {
        window.location.hash = href;
    });
    return false;
});



/* ---------------------------------------------------------------------------------------
*    Fechar modal com ESC
* --------------------------------------------------------------------------------------*/
$(document).on('keyup', function(e) {
    fechaMmodal();
});



/* ---------------------------------------------------------------------------------------
*    Loading inicial
* --------------------------------------------------------------------------------------*/
$(window).on('load', function() {
    setTimeout(function(){
        $('.inicio, .logo-inicio, .icone-inicio').fadeOut();
    }, 500);
});



$(window).on('scroll', function() {
    /* ------------------------------------------------------------------------------------
    *    Mudar cor callMenu
    * -----------------------------------------------------------------------------------*/
    var alturaCabecalho = $('.cabecalho').outerHeight();
    var distanciaCabecalho = $('.cabecalho').offset().top;
    var distanciaWindow = $(this).scrollTop();

    if (distanciaWindow > (distanciaCabecalho+alturaCabecalho)){
        $('#mmenu').addClass('mmenu-destaque')
    } else {
        $('#mmenu').removeClass('mmenu-destaque')
    }
});
