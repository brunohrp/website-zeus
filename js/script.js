$(document).ready(function(){

	infiniteScrollMatSetup();

});

// Dialog Trigger
$(document).on('click', '*[data-dialog], dialog button', function(e){
		
	e.preventDefault();

	var id = $(this).data('dialog');
	var dialog = id ? document.getElementById(id) : $(this).parents('dialog')[0];

	$(dialog).attr('open') ? dialog.close() : dialog.showModal();

});

// Infinite Scroll
function infiniteScrollMatSetup(){

	$.each($('.scrollWrap .scrollMat'), function(){

		var that = this;
		requestAnimationFrame(() => infiniteScrollMatAnimation($(that)));

	});

}

function infiniteScrollMatAnimation(mat, startTime = Date.now(), transform = 0, active = 0){

	var interpolatedTime = Math.min(1, (Date.now() - startTime)/10); // Reset every 10ms

	if(interpolatedTime === 1){

		transform--;
		startTime = Date.now();
		$(mat).css('transform', `translateX(${transform}px)`);

		if(Math.abs(transform) >= ($(mat).innerWidth()*0.1)*active){

			var activeChild = $($(mat).children()[active]).clone();
			$(mat).append(activeChild);
			active++;

		}

	}

	requestAnimationFrame(() => infiniteScrollMatAnimation($(mat), startTime, transform, active));

}