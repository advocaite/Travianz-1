<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateOasisTroops extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$minUnitsSmall = 15 * config('server.oases.troops_multiplier');
		$maxUnitsSmall = 30 * config('server.oases.troops_multiplier');
		
		$minUnitsMedium = 50 * config('server.oases.troops_multiplier');
		$maxUnitsMedium = 70 * config('server.oases.troops_multiplier');
		
		$minUnitsBig = 90 * config('server.oases.troops_multiplier');
		$maxUnitsBig = 120 * config('server.oases.troops_multiplier');
		
		$unitsBase = [
				$minUnitsSmall,
				$maxUnitsSmall,
				$minUnitsSmall,
				$minUnitsMedium,
				$maxUnitsMedium,
				$minUnitsMedium,
				$minUnitsBig,
				$maxUnitsBig,
				$minUnitsBig
		];
		
		$unitsBaseCropSmall = [
				$minUnitsSmall,
				$maxUnitsSmall,
				$minUnitsSmall,
				$minUnitsMedium,
				$maxUnitsMedium,
				$minUnitsMedium
		];
		
		$unitsBaseCropBig = [
				$minUnitsBig,
				$maxUnitsBig,
				$minUnitsBig
		];
		
		$units = [];
		$unitsCropSmall = [];
		$unitsCropBig = [];
		
		for ($i = 0; $i <= 2; $i++) $units = array_merge($units, $unitsBase);
		for ($i = 0; $i <= 3; $i++) $unitsCropSmall = array_merge($unitsBaseCropSmall, $unitsCropSmall);
		for ($i = 0; $i <= 3; $i++) $unitsCropBig = array_merge($unitsBaseCropBig, $unitsCropBig);
		
		// Lumber (+25% and 25% + 25% Crop)
		DB::insert('INSERT INTO world_unit_list
							SELECT
								world_id, type, amount
							FROM
								(SELECT
									world.id as world_id, 35 as type, 
								(CASE
									WHEN world.type = 13 THEN FLOOR(? + RAND() * (? -  ? + 1))
									WHEN world.type = 14 THEN FLOOR(? + RAND() * (? -  ? + 1))
									WHEN world.type = 15 THEN FLOOR(? + RAND() * (? -  ? + 1))
								 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (13, 14, 15)
    					 UNION
    					    SELECT
								world.id as world_id, 36 as type, 
							(CASE
								WHEN world.type = 13 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 14 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 15 THEN FLOOR(? + RAND() * (? -  ? + 1))
							 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (13, 14, 15)
       				 UNION
        					SELECT
								world.id as world_id, 37 as type, 
							(CASE
								WHEN world.type = 13 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 14 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 15 THEN FLOOR(? + RAND() * (? -  ? + 1))
				 			END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (13, 14, 15)) as o1', $units);
		
		// Clay (+25% and 25% + 25% Crop)
		DB::insert('INSERT INTO world_unit_list
							SELECT
								world_id, type, amount
							FROM
								(SELECT
									world.id as world_id, 31 as type,
								(CASE
									WHEN world.type = 16 THEN FLOOR(? + RAND() * (? -  ? + 1))
									WHEN world.type = 17 THEN FLOOR(? + RAND() * (? -  ? + 1))
									WHEN world.type = 18 THEN FLOOR(? + RAND() * (? -  ? + 1))
								 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (16, 17, 18)
    					 UNION
    					    SELECT
								world.id as world_id, 32 as type,
							(CASE
								WHEN world.type = 16 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 17 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 18 THEN FLOOR(? + RAND() * (? -  ? + 1))
							 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (16, 17, 18)
       				 UNION
        					SELECT
								world.id as world_id, 35 as type,
							(CASE
								WHEN world.type = 16 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 17 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 18 THEN FLOOR(? + RAND() * (? -  ? + 1))
				 			END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (16, 17, 18)) as o2', $units);
		
		// Iron (+25% and 25% + 25% Crop)
		DB::insert('INSERT INTO world_unit_list
							SELECT
								world_id, type, amount
							FROM
								(SELECT
									world.id as world_id, 31 as type,
								(CASE
									WHEN world.type = 19 THEN FLOOR(? + RAND() * (? -  ? + 1))
									WHEN world.type = 20 THEN FLOOR(? + RAND() * (? -  ? + 1))
									WHEN world.type = 21 THEN FLOOR(? + RAND() * (? -  ? + 1))
								 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (19, 20, 21)
    					 UNION
    					    SELECT
								world.id as world_id, 32 as type,
							(CASE
								WHEN world.type = 19 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 20 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 21 THEN FLOOR(? + RAND() * (? -  ? + 1))
							 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (19, 20, 21)
       				 UNION
        					SELECT
								world.id as world_id, 34 as type,
							(CASE
								WHEN world.type = 19 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 20 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 21 THEN FLOOR(? + RAND() * (? -  ? + 1))
				 			END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (19, 20, 21)) as o3', $units);
		
		// Crop (+25%)
		DB::insert('INSERT INTO world_unit_list
							SELECT
								world_id, type, amount
							FROM
								(SELECT
									world.id as world_id, 31 as type,
								(CASE
									WHEN world.type = 22 THEN FLOOR(? + RAND() * (? -  ? + 1))
									WHEN world.type = 23 THEN FLOOR(? + RAND() * (? -  ? + 1))
								 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (22, 23)
    					 UNION
    					    SELECT
								world.id as world_id, 33 as type,
							(CASE
								WHEN world.type = 22 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 23 THEN FLOOR(? + RAND() * (? -  ? + 1))
							 END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (22, 23)
       				 UNION
        					SELECT
								world.id as world_id, 37 as type,
							(CASE
								WHEN world.type = 22 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 23 THEN FLOOR(? + RAND() * (? -  ? + 1))
				 			END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (22, 23)
						 UNION
        					SELECT
								world.id as world_id, 39 as type,
							(CASE
								WHEN world.type = 22 THEN FLOOR(? + RAND() * (? -  ? + 1))
								WHEN world.type = 23 THEN FLOOR(? + RAND() * (? -  ? + 1))
				 			END) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type IN (22, 23)) as o4', $unitsCropSmall);
		
		// Crop (+25%)
		DB::insert('INSERT INTO world_unit_list
							SELECT
								world_id, type, amount
							FROM
								(SELECT
									world.id as world_id, 31 as type, FLOOR(? + RAND() * (? -  ? + 1)) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type = 24
    					 UNION
    					    SELECT
								world.id as world_id, 33 as type, FLOOR(? + RAND() * (? -  ? + 1)) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type = 24
       				 UNION
        					SELECT
								world.id as world_id, 38 as type, FLOOR(? + RAND() * (? -  ? + 1)) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type = 24
						 UNION
        					SELECT
								world.id as world_id, 39 as type, FLOOR(? + RAND() * (? -  ? + 1)) as amount
							FROM
								oasis INNER JOIN world
							ON
								world.id = oasis.world_id
							WHERE
								world.type = 24) as o5', $unitsCropBig);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('world_unit_list')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
	}
}
