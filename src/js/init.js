$(document).ready(function(){
    $(".button-collapse").sideNav();

	$('.datepicker').pickadate({
  labelMonthNext: 'Go to the next month',
  labelMonthPrev: 'Go to the previous month',
  labelMonthSelect: 'Pick a month from the dropdown',
  labelYearSelect: 'Pick a year from the dropdown',
  selectMonths: true,
  selectYears: true
})
	
var $dob = $('.datepicker').pickadate()

// Use the picker object directly.
var picker = $dob.pickadate('picker')

picker.set('select', [1970, 0, 1])

});