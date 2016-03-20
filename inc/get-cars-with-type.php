<?php
/**
 * Get Posts with a matching type
 *
 * @package wilsons
 */


function bd_vehicle_types() {
	$vehicle_types = $_GET['vehicle_types'];

	return $vehicle_types;
}

bd_vehicle_types();