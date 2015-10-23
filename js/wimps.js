var success = function(){
	console.log('success');
};

 
var initMailingList = function(){
	$('#sendEmails').submit(function(event){
		event.preventDefault();
		var email = $('#email')[0].value;

		$.ajax({
			type: "POST",
			url: 'https://docs.google.com/forms/d/1yOprC9CnSbX13Le6B_zJ5yYKy3w8RkF7X_HV0SXGIOc/formResponse',
			data: email,
			success: success
		});
	});
};

var showPastEvents = function(){
	$('#pastShows').addClass('show');
}

$( window ).load(function() {
  initMailingList();

  if ($('.page').attr('id') === 'shows'){
  	showPastEvents();
  }
});