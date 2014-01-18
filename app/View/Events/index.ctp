<script type="text/javascript">
$(document).ready(function() {

    $('#calendar').fullCalendar({
        header: {
        	left: 'prev,next today',
        	center: 'title',
        	right: 'month,agendaWeek,agendaDay'
        },
        firstDay: 1,
        editable: false,
        selectable: true,
        eventColor: '#378006',
        events: [

        {
            title: 'Today',
            start: new Date(),
            date: new Date(),
            allDay: false,
        },

        <?php $num = 1; ?>
        <?php foreach ($events as $event): ?>
        <?php $datetime_start = date( 'Y-m-d H:i:s', $event['Event']['datetime_start'] ); ?>
        <?php $datetime_end = date( 'Y-m-d H:i:s', $event['Event']['datetime_end'] ); ?>
        <?php echo '{' ; ?>
            <?php echo "title: \"" . 'Booked by ' . $event['User']['name'] . "\"," ; ?>
            <?php echo "start: \"" . $datetime_start . "\"," ; ?>
            <?php echo "end: \"" . $datetime_end . "\"," ; ?>
            <?php echo "allDay: false"; ?>
        <?php echo '},' ; ?>
        <?php $num++; ?>
        <?php endforeach; ?>
        <?php unset($event); ?>

        ]
    })
});
</script>

<div id="calendar"></div>