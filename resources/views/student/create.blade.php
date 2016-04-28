<html>
<head>
    @include('student/header_resources')
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Tab1</a></li>
            <li ><a href="#tab2" data-toggle="tab">Tab2</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab1" class="tab-pane active">
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
            </div>
            <div id="tab2" class="tab-pane">
                <form action="{{ route('class.store') }}" method="post">
                    <div class="form-group">
                        <label>name:</label><input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>year:</label><input type="text" name="year" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">submit</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
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
