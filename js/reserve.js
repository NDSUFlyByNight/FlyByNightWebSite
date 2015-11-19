$(document).ready(function () {
   var $startDate = $("#departDate");
   $startDate.datepicker({
   	minDate: 0,
   	onSelect: function(date){
   		var selectedDate = $("#departDate").datepicker('getDate');
   		$("#returnDate").datepicker('option', "minDate", selectedDate);
   	}
   })
   if($("#departDate").datepicker('getDate')==null){
   	var minDate = 0;
   }
   $("#returnDate").datepicker({
      minDate: minDate,
   	onSelect: function(date){
   	  var selectedEndDate = $("#returnDate").datepicker('getDate');
   	  $("#returnDate").datepicker('option', "maxDate", selectedEndDate);
   	}
   })

});