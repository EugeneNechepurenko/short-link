import 'bootstrap';
import $ from "jquery";

$(document).on('click','.copy_link',function(){
	var copyText = document.getElementById("link_for_copy");
	copyText.select();
	copyText.setSelectionRange(0, 99999999);
	navigator.clipboard.writeText(copyText.value);
	$('.copy_link').text('Done');
	setTimeout(function(){
		$('.copy_link').text('Copy URL');
	},5000);
});