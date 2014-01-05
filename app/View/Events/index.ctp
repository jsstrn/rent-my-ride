<script type="text/javascript">
$(document).ready(function() {

    $('#calendar').fullCalendar({
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
            title: 'Today',
            start: new Date(),
            date: new Date(),
            allDay: false,
        },

        <?php $num = 1; ?>
        <?php foreach ($dates as $date): ?>

        <?php echo '{' ; ?>
            <?php echo "title: \"" . 'Booked by ' . $date['User']['name'] . "\"," ; ?>
            <?php echo "start: \"" . $date['Event']['date_start'] . ' ' . $date['Event']['time_start'] . "\"," ; ?>
            <?php echo "end: \"" . $date['Event']['date_end'] . ' ' . $date['Event']['time_end'] . "\"," ; ?>
            <?php echo "allDay: false"; ?>
        <?php echo '},' ; ?>

        <?php $num++; ?>
        <?php endforeach; ?>
        <?php unset($date); ?>

        ]
    })
});
</script>

<div id="calendar"></div>