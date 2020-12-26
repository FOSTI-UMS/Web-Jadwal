// // Select all links with hashes
// $('a[href*="#"]').click(function(e) {
//     // On-page links
//       // Figure out element to scroll to
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       // Does a scroll target exist?
//       if (target.length) {
//         // Only prevent default if animation is actually gonna happen
//         e.preventDefault();
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1200, function() {
//           // Callback after animation
//           // Must change focus!
//           var $target = $(target);
//         });
//     }
//   });
$('.page-scroll').on('click',function(e){
	var tujuan = $(this).attr('href');
	var elemen_tujuan= $(tujuan);

	console.log($('html').scrollTop());

	$('html').animate({
		scrollTop: elemen_tujuan.offset().top
	}, 1200);
	e.preventDefault();
});