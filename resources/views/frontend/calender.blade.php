<!-- resources/views/calendar.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id='calendar'></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/events', // Fetch events from the server
                selectable: true,
                select: function(info) {
                    var title = prompt('Enter Event Title:');
                    if (title) {
                        $.ajax({
                            url: '/events',
                            method: 'POST',
                            data: {
                                title: title,
                                start: info.startStr,
                                end: info.endStr,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function() {
                                calendar.refetchEvents();
                            }
                        });
                    }
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
