$(function() {
	"use strict";
	$('.year-calendar').pignoseCalendar({
		theme: 'blue'
	});
	$('input.calendar').pignoseCalendar({
		format: 'YYYY-MM-DD'
	});
});