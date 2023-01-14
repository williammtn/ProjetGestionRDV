<!DOCTYPE html>
<html>

<head>
    <title>Calendrier</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>

<body>

    <div class="container">
        <h1>Calendrier de réservation</h1>
        <div id='calendar'></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        /*------------------------------------------
        --------------------------------------------
        Get Site URL
        --------------------------------------------
        --------------------------------------------*/
        var SITEURL = "{{ url('/') }}";

        /*------------------------------------------
        --------------------------------------------
        CSRF Token Setup
        --------------------------------------------
        --------------------------------------------*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*------------------------------------------
        --------------------------------------------
        FullCalender JS Code
        --------------------------------------------
        --------------------------------------------*/
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/full-calender/ajax",
            displayEventTime: false,
            editable: true,
            eventRender: function(event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                var idforfait = prompt('idforfait:');
                var iduser = prompt('iduser:');
                if (title && idforfait && iduser) {
                    var daterdv = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    var heurerdv = $.fullCalendar.formatDate(start, "h:m:s");
                    $.ajax({
                        url: SITEURL + "/full-calender/ajax",
                        data: {
                            title: title,
                            daterdv: daterdv,
                            heurerdv: heurerdv,
                            idforfait: idforfait,
                            iduser: iduser,
                            type: 'add'
                            
                        },
                        type: "POST",
                        success: function(data) {
                            displayMessage("Event Created Successfully");

                            calendar.fullCalendar('renderEvent', {
                                id: data.id,
                                title: title,
                                daterdv: daterdv,
                                heurerdv: heurerdv,
                                allDay: allDay
                            }, true);
                            calendar.fullCalendar('unselect');
                        }
                    });
                }
            },
            eventDrop: function(event, delta) {
    var daterdv = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
    var heurerdv = $.fullCalendar.formatDate(event.start, "h:m:s");

    $.ajax({
        url: SITEURL + '/full-calender/ajax',
        data: {
            title: event.title,
            daterdv: daterdv,
            heurerdv: heurerdv,
            id: event.id,
            type: 'update'
        },
        type: "POST",
        success: function(response) {
            displayMessage("Event Updated Successfully");
        }
    });
},
eventClick: function(event) {
    var deleteMsg = confirm("Do you really want to delete?");
    if (deleteMsg) {
        $.ajax({
            type: "POST",
            url: SITEURL + '/full-calender/ajax',
            data: {
                id: event.id,
                type: 'delete'
            },
            success: function(response) {
                calendar.fullCalendar('removeEvents', event.id);
                displayMessage("Event Deleted Successfully");
            }
        });
    }
}

            });

        });

        /*------------------------------------------
        --------------------------------------------
        Toastr Success Code
        --------------------------------------------
        --------------------------------------------*/
        function displayMessage(message) {
            toastr.success(message, 'Event');
        }
    </script>
    
</body>

</html>