// Enable pusher logging - don't include this in production
Pusher.logToConsole = false;

var pusher = new Pusher('b14db2ec4796c7b51fc4', {
	encrypted: true
});

var channel = pusher.subscribe('chat');
channel.bind('my-event', function (data) {
	var to = data.to;
	var from_id = data.from;
	var auth_id = $('html').attr('auth');

	if (to == auth_id) {

		$.get('ajax/ChatBox.php',{id:from_id}, function (res) {

			if ($('.chat-user-'+ from_id).length < 1){
				$('.chat-container').append(res);
			}
		});
		var chat_height = $('.chat-user-' +to).height() * 999999999999;
		$('.chat-user-' + from_id).append('<div class="alert alert-success">' +data.name_from+': '+ data.message + '</div>');

		$('.chat-user-' + to).animate({
			scrollTop: chat_height,
		}, 100);


	} else if (from_id == auth_id) {

		$.get('ajax/ChatBox.php',{id:to}, function (res) {

			if ($('.chat-user-'+ to).length < 1){

				$('.chat-container').append(res);
			}

		});
		var chat_height = $('.chat-user-' + to).height() * 999999999999;

		$('.chat-user-' + to).append('<div class="alert alert-info ">' +data.name_from+': '+ data.message + '</div>');

		$('.chat-user-' + to).animate({
			scrollTop: chat_height,
		}, 100);
	}

});