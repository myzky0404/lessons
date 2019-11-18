$(function(){
  $('.img1').slideUp(2000);
  $('.img2').fadeIn(2000);
  $('.img2').slideUp(2000);
  $('.img3').fadeIn(2000);
  var roop = 1;
  $(window).scroll(function() {

  console.log("スクロール値は$(this).scrollTop()でとる。とった値は→"+ $(this).scrollTop());
  var scrlTop = $(this).scrollTop();
  var h3scrl = $('.content2').offset().top;
  console.log("content2値は"+ h3scrl);
  console.log("roopは"+ roop);
  if (h3scrl < scrlTop && roop == 1) {
  console.log(h3scrl);
  roop = roop + 1;
  console.log("roopは"+ roop);

  $('#wrapper').animate({
    'width': '50%',
  'backgroundColor': "#99ccff"
  },2000).animate({
    'width': '100%',
  'backgroundColor': "white",
  },2000);
  }
 });




  $('.js2').on('mouseover', function(){
    $('.content4-up-right img').attr('src', '30.png');
    setTimeout(function(){
    $('.content4-up-right img').attr('src', '29.png');
    },2000);

  });


});

