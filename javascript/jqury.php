<!DOCTYPE html>
<head>
<script>
	form_submit_but_id = #fscf_submit6

 	jQuery('form_submit_but_id').click( function(){
		var blacklistCU = /\bCialis|\bViagra/i;
		var messageValue = jQuery('#text_field_id').val();
		
		if(messageValue.match(blacklistCU)) {	
			window.location.href = "http://www.apritak.com/thankyou-message/";
			return false;
		} else {
			jQuery('#fscf_submit6').disabled = true;
			jQuery('#fscf_submit6').value='Submitting...';
			jQuery('#fscf_form6').submit();
		}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>	
</head>

<body>

<form id="fscf_submit6">
	<textarea name="message" id="text_field_6">
		
	</textarea>
	<input type="submit" name="fscf_submit6" id="fscf_submit6" onclick="">
</form>


</body>

<!-- Mirrored from www.w3schools.com/js/tryit.asp?filename=tryjs_statements_blocks by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Feb 2019 07:47:15 GMT -->
</html>
