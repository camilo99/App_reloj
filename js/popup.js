/*
1. modal
--------
*/
var modal = $('.modalBox');

$('.btn-abrir').click(function() {
  modal.show();
});

$('.close').click(function() {
  modal.hide();
});

var modal2 = $('.modalBox2');

$('#recuperarcontraseña').click(function() {
  modal2.show();
});

$('.close').click(function() {
  modal2.hide();
});
