$(function() {

  // ナビメニューのTOPを白、他を緑にする
  const chkmoji ='test';
  let path = '';
  let moji = '';

  path = location.pathname ;
  console.log('path:',path);
  moji = path.slice(-5,-1) ;

  //ホームの文字は白、それ以外は緑
  if( chkmoji === moji ) {
    $('.menu').css('color', 'white') ;
  } else {
    $('.menu').css('color', '#1b9c40') ;
  }

  //カルーセル
  $('.carousel').slick({
    autoplay: true,
    fade : false,
    speed : 1000,
    dots: true,
    infinite: true,
    auotplaySpeed: 5000,
    arrows: false,
  });


  
  /*
  //SPメニュー
  $('#menu-sp').click(function() {
    console.log('menu click!');
    const navsp = document.getElementById('nav-sp') ;
    navsp.style.display = 'block' ;
  });

  $('#close').click(function() {
    const navsp = document.getElementById('nav-sp') ;
    if( navsp.style.display === 'block') {
      navsp.style.display = 'none';
    }
  });*/

  
  /* 滑らかスクロール　*/
  $('a[href^="#"]').click(function() {
    let href = $(this).attr("href");
    let target = $(href == "#" || href =="" ? 'html' : href);
    let position = target.offset().top ;

    let speed = 1500 ;
    
    $("html, body").animate({
      scrollTop: position 
    }, speed, "swing") ;
    return false ;
  }) ;

}) ;