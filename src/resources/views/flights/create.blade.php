<!DOCTYPE html>
<html lang="en" data-mdb-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Flight</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <h1>Create New Flight</h1>

        <!-- Display validation errors, if any -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form for creating a new flight -->
        <form method="POST" action="{{ route('flights.store') }}">
            @csrf

            <div class="form-group">
                <label for="flight_number">Flight Number:</label>
                <input type="text" class="form-control" id="flight_number" name="flight_number" value="{{ old('flight_number') }}" required>
            </div>

            <div class="form-group">
                <label for="origin">Origin:</label>
                <input type="text" class="form-control" id="origin" name="origin" value="{{ old('origin') }}" required>
            </div>

            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" class="form-control" id="destination" name="destination" value="{{ old('destination') }}" required>
            </div>

            <div class="form-group">
                <label for="departure_time">Departure Time:</label>
                <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" value="{{ old('departure_time') }}" required>
            </div>

            <div class="form-group">
                <label for="arrival_time">Arrival Time:</label>
                <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" value="{{ old('arrival_time') }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="Scheduled">Scheduled</option>
                    <option value="Delayed">Delayed</option>
                    <option value="Departed">Departed</option>
                    <option value="Arrived">Arrived</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Add Flight</button>
        </form>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>