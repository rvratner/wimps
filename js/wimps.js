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

var renderPastShows = function(event){
	var pastShows = event.data.resultsPage.results.event;
	var html = '';
	for (var i = 0; i < pastShows.length; i++){
		//console.log(pastShows[i])
		html += '<li>' + pastShows[i].displayName + '</li>'
	}
	console.log(html);
	$('#pastShows').addClass('show');
	$('#pastShows').html(html);

};

var showPastEvents = function(){
	$.ajax({
		type: "GET",
		url: 'http://api.songkick.com/api/3.0/artists/4972983-wimps/gigography.json?apikey=pf9vLrRif06zy9B0',
		success: function(data){
			$('#pastShowsBtn').addClass('show');
			$('#pastShowsBtn').click(data, renderPastShows);
		}
	});
};


$( window ).load(function() {
  initMailingList();

  if ($('.page').attr('id') === 'shows'){
  	//console.log('hi');
  	showPastEvents();
  }
});