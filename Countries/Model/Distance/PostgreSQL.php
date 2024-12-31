<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Model\Distance;

use Object\Function2;

class PostgreSQL extends Function2
{
    public $db_link;
    public $db_link_flag;
    public $schema;
    public $module_code = 'CM';
    public $title = 'C/M Distance Calculator (PostgreSQL)';
    public $name = 'cm_calculate_distance_in_units';
    public $backend = 'PostgreSQL';
    public $header = 'cm_calculate_distance_in_units(a_lat numeric, a_lon numeric, b_lat numeric, b_lon numeric, miles int)';
    public $sql_version = '1.0.0';
    public $definition = 'CREATE OR REPLACE FUNCTION public.cm_calculate_distance_in_units(a_lat numeric, a_lon numeric, b_lat numeric, b_lon numeric, miles int)
RETURNS numeric
    LANGUAGE \'plpgsql\'
    COST 100
    IMMUTABLE STRICT
AS $function$
DECLARE
	x numeric;
	r numeric;
BEGIN
	IF a_lat IS NULL OR a_lon IS NULL OR b_lat IS NULL OR b_lon IS NULL THEN
		RETURN NULL;
	END IF;
	x:= power(sin((radians(a_lat::real) - radians(b_lat::real)) / 2), 2) + cos(radians(b_lat::real)) * cos(radians(a_lat::real)) * pow(sin((radians(a_lon::real) - radians(b_lon::real)) / 2), 2);
	x:= (2 * 6378.7 * atan2(sqrt(x), sqrt(1 - x)));
	IF miles IS NOT NULL AND miles <> 0 THEN
		x:= x * 0.621371;
	END IF;
	RETURN round(x, 4);
END;
$function$;';
}
