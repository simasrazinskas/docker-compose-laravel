<!-- Show Button -->
<a href="{{ route('flights.show', $flight->id) }}" class="btn btn-info btn-sm">Show</a>

<!-- Edit Button - Trigger Modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editFlightModal" onclick="loadFlightData({{ $flight->id }})">
    Edit
</button>

<!-- Delete Button -->
<form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
</form>