if (typeof($) !== 'undefined') {
	$(document).ready(function() {
		$('#asd_subscribe_submit').click(function(){
			if (!$.trim($('#asd_subscribe_form input[name$="asd_email"]').val()).length) {
				return false;
			}
			var arPost = {};
			arPost.asd_rub = [];
			$.each($('#asd_subscribe_form input'), function() {
				if ($(this).attr('type')!='checkbox') {
					arPost[$(this).attr('name')] = $(this).val();
				}
				else if ($(this).attr('type')=='checkbox' && $(this).is(':checked')) {
					arPost.asd_rub.push($(this).val());
				}
			});
			$('#asd_subscribe_res').hide();
			$('#asd_subscribe_submit').attr('disabled', 'disabled');
			$.post('/local/components/2quick/subscribe.quick.form/action.php', arPost,
					function(data) {
						$('#asd_subscribe_submit').removeAttr('disabled');
						if (data.status == 'error') {
							$('#asd_subscribe_res').css('color', 'red');
							$('#asd_subscribe_res').html(data.message);
							$('#asd_subscribe_res').show();
						} else {
							/*$('#asd_subscribe_res').css('color', 'green');*/
							$('#success-modal').modal('show');
							$('#success-modal').find('.modal-text').html(data.message);
						}
					}, 'json');
			return false;
		});
	});
}