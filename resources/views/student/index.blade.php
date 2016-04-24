<html>
<head>
    @include('student/header_resources')
</head>
<body>
    <div class="container-fluid">
        <table class="table table-striped">
            <tr>
                <th>name</th>
                <th>phone_number</th>
                <th>class name</th>
                <th>action</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->phone_number }}</td>
                <td>
                    {{ $student->class->name }}
                </td>
                <td>
                    <a href="#" class="delete text-primary"
                        ajax-url="{{ route('student.destroy', ['student' => $student->id]) }}">
                        delete
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <a href="{{ route('student.create') }}">new</a>
    <script type="text/javascript">
            $(document).ready(function() {
                $.ajaxSetup({
                    headers:
                    { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });

                $('a.delete').on('click', function() {
                    $selectedRow = $(this).closest('tr');
                    $.ajax({
                        'method' : 'DELETE',
                        'url': $(this).attr('ajax-url'),
                    }).done(function() {
                        $selectedRow.remove();
                    });
                })
            })
    </script>
</body>
</html>
