// event pada saat link diklik
$('.page-scroll').on('click', function(e){

	//ambil isi href
	var tujuan = $(this).attr('href');
	// tangkap element yang bersangkutan
	var elemenTujuan = $(tujuan);

	// pindahkan scroll
	$('html,body').scrollspy({
		target: elemenTujuan.offset().top -50}, 1250);

	e.preventDefault();

});