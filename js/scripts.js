$( "#soluciones-educativas-innovadoras" ).hover(function() {
  $( "#navbar-bottom" ).slideDown('100');
});

$('#navbar-bottom').on('mouseenter', function() {
	$(this).slideDown('100');
}).on('mouseleave', function() {
	$(this).slideUp('100');
})