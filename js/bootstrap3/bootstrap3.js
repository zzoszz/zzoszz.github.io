// $(document).ready(function(){
//     $('.page-scroll').on('click', function(){
//         console.log(ok);
//     })
// })

// about
$(window).on('load', function(){
    $('.pKiri').addClass('pMuncul');
    $('.pKanan').addClass('pMuncul');
})

// event pada saat link diklik
$(document).ready(function(){
    $('.page-scroll').click(function(e){
        var tujuan = $(this).attr('href');
        var elementTujuan = $(tujuan);
        // console.log(elementTujuan.offset().top);
        $("html").animate({
            scrollTop: elementTujuan.offset().top - 50
        }, 800)
        // $('body').scrollTop(elementTujuan.offset().top);
        e.preventDefault();
    });
});

// paralax
$(window).scroll(function(){
    // jumbotron
    var wScroll = $(this).scrollTop();
    $('.jumbotron img').css({
        'transform' : 'translate(0px, '+ wScroll/6 +'%)'
    });
    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    });
    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
    });
    //portfolio
    if( wScroll > $('.portfolio').offset().top - 250){
        $('.portfolio .thumbnail').each(function(i){
            setTimeout(function(){
                $('.portfolio .thumbnail').eq(i).addClass('muncul');
            }, 300 * (i+1))
        })
    }
});


