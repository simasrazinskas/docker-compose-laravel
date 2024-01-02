<!-- edit.blade.php -->
<form method="POST" action="{{ route('flights.update', $flight->id) }}">
    @csrf
    @method('PUT')

    <!-- Form fields -->
    <div class="form-group">
        <label for="flight_number">Flight Number:</label>
        <input type="text" class="form-control" id="flight_number" name="flight_number"
            value="{{ old('flight_number', $flight->flight_number) }}" required>
    </div>

    <div class="form-group">
        <label for="origin">Origin:</label>
        <input type="text" class="form-control" id="origin" name="origin"
            value="{{ old('origin', $flight->origin) }}" required>
    </div>

    <div class="form-group">
        <label for="destination">Destination:</label>
        <input type="text" class="form-control" id="destination" name="destination"
            value="{{ old('destination', $flight->destination) }}" required>
    </div>

    <div class="form-group">
        <label for="departure_time">Departure Time:</label>
        <input type="datetime-local" class="form-control" id="departure_time" name="departure_time"
            value="{{ old('departure_time', $flight->departure_time->format('Y-m-d\TH:i')) }}" required>
    </div>

    <div class="form-group">
        <label for="arrival_time">Arrival Time:</label>
        <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time"
            value="{{ old('arrival_time', $flight->arrival_time->format('Y-m-d\TH:i')) }}" required>
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-select" id="status" name="status">
            <option value="Scheduled" {{ $flight->status == 'Scheduled' ? 'selected' : '' }}>Scheduled</option>
            <option value="Delayed" {{ $flight->status == 'Delayed' ? 'selected' : '' }}>Delayed</option>
            <option value="Departed" {{ $flight->status == 'Departed' ? 'selected' : '' }}>Departed</option>
            <option value="Arrived" {{ $flight->status == 'Arrived' ? 'selected' : '' }}>Arrived</option>
            <option value="Cancelled" {{ $flight->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
    </div>

    <!-- Form submission button -->
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
