<script type="text/javascript">
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var h = date.getHours();

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        header: {
        	left: 'prev,next today',
        	center: 'title',
        	right: 'month,agendaWeek,agendaDay'
        },
        firstDay: 1,
        editable: true,
        selectable: true,
        events: [
        {
        	id: 123,
        	title: 'This is today!',
        	start: new Date(y,m,d,h),
        	end: new Date(y,m,d,h+2),
        	allDay: false // $event['Event']['add_day']
        }]
    })

});
</script>

<div id="calendar"></div>