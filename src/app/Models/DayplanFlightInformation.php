<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DayplanFlightInformation extends Model {
  protected $table = 'dayplan_flightinformation'; // Define the table name

  protected $fillable = [
    // List all columns that are mass assignable
    'airport_id',
    'airline_id',
    'alliance_id',
    'recurrenceflight_id',
    'tail_flight_id',
    'exception',
    'corresponding_flight_id',
    'turnaround_period',
    'event_type',
    'client_route_id',
    'scheduled_date',
    'eta',
    'FullAircraftName',
    'msg_aircraft',
    'status',
    'comment',
    'aoc',
    'closing_employee_id',
    'aircraft_messages_ok',
    'incidents_checked',
    'noise_category',
    'deleted',
    'flight_type',
    'claim_id',
    'show_on_fids',
    'international',
    'flight_notes',
    'FullAircraftRegistration',
    'origin',
    'request_id',
    'bypass_slots',
    'payer_id',
    'is_private',
    'type',
    'cancel_notification_time',
    'tail_flight_required',
    'add_all_services_on_departure',
    'operator',
    'aviation_type',
    'season_id',
    'cancel_notification_datetime',
    'corresponding_flight_type',
    'apply_vat',
    'migrate_nov15',
    'locked',
    'delayed',
    'closed_at',
    'corresponding_linked_from_acdm'
  ];

  protected $casts = [
    // Define casts for appropriate fields
    'exception' => 'boolean',
    'aoc' => 'boolean',
    'aircraft_messages_ok' => 'boolean',
    'incidents_checked' => 'boolean',
    'deleted' => 'boolean',
    'show_on_fids' => 'boolean',
    'international' => 'boolean',
    'bypass_slots' => 'boolean',
    'is_private' => 'boolean',
    'tail_flight_required' => 'boolean',
    'add_all_services_on_departure' => 'boolean',
    'apply_vat' => 'boolean',
    'locked' => 'boolean',
    'delayed' => 'boolean',
    'corresponding_linked_from_acdm' => 'boolean'
  ];

  public $timestamps = false; // If the table does not have created_at and updated_at columns

  public function airport() {
    return $this->belongsTo(Airport::class, 'airport_id');
  }

  // Define relationships here if needed
}