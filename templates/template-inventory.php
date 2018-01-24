<?php
$stock_number = get_query_var('vehicle_id', 0);
var_dump('Works, This vehicle has the ID of ' . $stock_number);