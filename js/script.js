$(document).on('click', '.close-chat', function (event) {
	event.preventDefault();
	var user_id = $(this).closest('.chat-box').attr('user-id');
	$.get('ajax/ChatBox.php', {remove: user_id}, function (res) {
		$('.chat-container').html(res);
		// console.log(res);
	});
	// $(this).closest('.chat-box').remove();
});

var minimize = false;
$(document).on('click', '.panel-heading', function (event) {
	event.preventDefault();
	if (minimize == true) {
		$(this).closest('.chat-box').removeClass('minimize');
		$(this).closest('.chat-box').css('margin-top', '-200px');
		$(this).closest('.chat-box .panel').css('margin-top', '-200px');
		minimize = false;
	} else if (minimize == false) {
		$(this).closest('.chat-box').css('margin-top', '-20px');
		$(this).closest('.chat-box .panel').css('margin-top', '-20px');
	}
});

$(document).on('click', '.sidebar-user', function (event) {
	event.preventDefault();
	var user_id = $(this).attr('user-id');
	var count_chat_box = $('.chat-box').length;
	if (count_chat_box < 3) {
		$.get('ajax/ChatBox.php', {id: user_id}, function (res) {
			$('.chat-container').append(res);
		});
	}


});