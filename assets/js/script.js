
$(document).ready(function () {
  $('.parallax').parallax();

  $('#split-slider').slider({
    indicators: false
  });

  $('#slider-principal').carousel({
    fullWidth: true,
    indicators: false
  });


  $('#carousel-split').carousel({
    fullWidth: true
  });

  $('#carousel-precos').carousel({
    fullWidth: true,
    indicators: false
  });
  $('#depoimentos-slider').carousel();

  $('#carousel-blog').carousel({
    dist: 0,
    shift: 0,
    padding: 80,
    interval: 100
  });

  // FIXED VALIGN-WRAPPER
  fixHeight();

  // ATIVADOR SPLIT
  $("#splitContainer").twentytwenty();
  $(".splitContainer").twentytwenty();


  // MENU MOBILE FUNCTION
  $menuLeft = $('.pushmenu-left');
  $nav_list = $('#sidebartoggle');

  $nav_list.click(function () {
    $(this).toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toleft');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons colorRosa">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons colorRosa">menu</i>');
    }
  });

  $(".pushmenu > a").click(function () {
    $nav_list.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toleft');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons colorRosa">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons colorRosa">menu</i>');
    }
  });

  $('.file-upload-content').hide();


});

function fixHeight() {
  var height = $(".about-text-two").height();
  $(".about-img-two").css({ "height": height })
}

$('#nextSliderPrinc').on('click touchstart', e => {
  e.preventDefault();
  e.stopPropagation();
  $('#slider-principal').carousel('next');
});

$('#splitNext').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carousel-split').carousel('next');
});


$('#splitPrev').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carousel-split').carousel('prev');
});

$('#depoimentoNext').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#depoimentos-slider').carousel('next');
});


$('#depoimentoPrev').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#depoimentos-slider').carousel('prev');
});


$('#blogNext').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carousel-blog').carousel('next');
});


$('#blogPrev').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carousel-blog').carousel('prev');
});


$('#precosNext').on('click touchstart', e => {
  e.preventDefault();
  e.stopPropagation();
  $('#carousel-precos').carousel('next');
});


$('#precosPrev').on('click touchstart', e => {
  e.preventDefault();
  e.stopPropagation();
  $('#carousel-precos').carousel('prev');
});


function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function (e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
  $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function () {
  $('.image-upload-wrap').removeClass('image-dropping');
});
