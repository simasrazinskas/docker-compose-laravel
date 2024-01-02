<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model {
  protected $table = 'airports';

  protected $fillable = [
    'name', 'iata_code', 'icao_code', 'city', 'city_alternative',
    'is_active', 'weight', 'counter_1', 'counter_2', 'time_zone',
    'deleted', 'enterprise_id', 'currency_id', 'warehouse_no',
    'daa_counter', 'uses_planning', 'include_in_fueling_report',
    'iata_code_cyrillic', 'icao_code_cyrillic', 'auto_export_1c',
    'auto_export_1c_url', 'auto_export_1c_username', 'auto_export_1c_password',
    'fuel_round_setting', '_title', 'platts_field', 'country_code',
    'is_configurable_fuel_storage_registry', 'alternative_name',
    'fueling_service_for_daily_report', 'airport_infrastructure_charge',
    'airport_infrastructure_currency_id', 'charge_type',
    'fuel_reserve_charge', 'fuel_reserve_charge_currency_id',
    'work_distribution_export_enabled',
  ];

  /**
   * Get the flight information associated with the airport.
   */
  public function flightInformations() {
    return $this->hasMany(DayplanFlightInformation::class, 'airport_id');
  }
  // Define other necessary methods and relationships
}