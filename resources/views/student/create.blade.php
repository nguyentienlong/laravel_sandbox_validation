<html>
<head>
    @include('student/header_resources')
</head>
<body>
    <div class="container">
        <form action="{{ route('student.store') }}" method="post">
            <div class="form-group">
                <label>name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>phone nunber: </label>
                <input type="text" name="phone_number" class="form-control">
            </div>
            <div class="form-group">
                <label>Class: </label>
                <select class="form-control" name="class_id">
                    @foreach ($classes as $class)
                        <option value="{{$class->id}}"> {{ $class->name }} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-default">submit</button>
            {{ csrf_field() }}
        </form>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>
</html>
