<!-- Edit Flight Modal -->
<div class="modal modal-blur fade" id="editFlightModal" tabindex="-1" aria-labelledby="editFlightModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editFlightModalLabel">Edit Flight</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editFlightForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="flightNumber" class="form-label">Flight Number</label>
            <input type="text" class="form-control" id="flightNumber" name="flight_number" required>
          </div>
          <div class="mb-3">
            <label for="origin" class="form-label">Origin</label>
            <input type="text" class="form-control" id="origin" name="origin" required>
          </div>
          <div class="mb-3">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" class="form-control" id="destination" name="destination" required>
          </div>
          <div class="mb-3">
            <label for="departureTime" class="form-label">Departure Time</label>
            <input type="datetime-local" class="form-control" id="departureTime" name="departure_time" required>
          </div>
          <div class="mb-3">
            <label for="arrivalTime" class="form-label">Arrival Time</label>
            <input type="datetime-local" class="form-control" id="arrivalTime" name="arrival_time" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function loadFlightData(flightId) {
    fetch('/api/flights/' + flightId)
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        console.log(data); // Debugging: Log the data

        // Update input fields
        document.getElementById('flightNumber').value = data.flight_number || '';
        document.getElementById('origin').value = data.origin || '';
        document.getElementById('destination').value = data.destination || '';
        document.getElementById('departureTime').value = data.departure_time ? data.departure_time.substring(0, 16) : '';
        document.getElementById('arrivalTime').value = data.arrival_time ? data.arrival_time.substring(0, 16) : '';
        document.getElementById('status').value = data.status || '';

        // Update form action
        document.getElementById('editFlightForm').action = '/flights/' + flightId;

        // Update modal title with the flight number
        const flightNumber = data.flight_number || 'Unknown';
        document.getElementById('editFlightModalLabel').textContent = 'Edit Flight: ' + flightNumber;
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
</script>