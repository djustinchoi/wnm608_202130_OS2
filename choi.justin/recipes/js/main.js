$(function(){
	let currentslidenumber = 0;
	$(".slideshow-captions-all div").eq(0).show().siblings().hide();

	$(".arrow-next").on('click',function(){
		currentslidenumber++;
		if (currentslidenumber>4){
			currentslidenumber=0;
		}
		showSlide();
	});
		$(".arrow-prev").on('click',function(){
		currentslidenumber--;
		if (currentslidenumber<0){
			currentslidenumber=4;
		}
		showSlide();
	});
		function showSlide(){
			let calculation=-350*currentslidenumber;
			$(".slideshow-images").animate({marginLeft:calculation},1000);
			$(".slideshow-captions-all div").eq(currentslidenumber).show().siblings().hide();
		};
});