<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateWorldData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert('INSERT INTO world

    						SELECT 0 as id, x, y, type, 0 as occupied FROM

        						(SELECT


            				@rnd := (FLOOR(1 + RAND() * 996)),


            				IF (
                				(x = 0 AND y = 0) OR (x = ? AND y = ?),
               				3,

                				CASE
                     			WHEN @rnd <= 10 THEN @ftype := 1
                    				WHEN @rnd <= 90 THEN @ftype := 2
                    				WHEN @rnd <= 400 THEN @ftype := 3
                    				WHEN @rnd <= 480 THEN @ftype := 4
                   				WHEN @rnd <= 560 THEN @ftype := 5
                    				WHEN @rnd <= 570 THEN @ftype := 6
                    				WHEN @rnd <= 600 THEN @ftype := 7
                    				WHEN @rnd <= 630 THEN @ftype := 8
                    				WHEN @rnd <= 660 THEN @ftype := 9
                    				WHEN @rnd <= 740 THEN @ftype := 10
                    				WHEN @rnd <= 820 THEN @ftype := 11
                    				WHEN @rnd <= 900 THEN @ftype := 12
                    				WHEN @rnd <= 908 THEN @ftype := 13
                    				WHEN @rnd <= 916 THEN @ftype := 14
                    				WHEN @rnd <= 924 THEN @ftype := 15
                    				WHEN @rnd <= 932 THEN @ftype := 16
                    				WHEN @rnd <= 940 THEN @ftype := 17
                    				WHEN @rnd <= 948 THEN @ftype := 18
                    				WHEN @rnd <= 956 THEN @ftype := 19
                    				WHEN @rnd <= 964 THEN @ftype := 20
                    				WHEN @rnd <= 972 THEN @ftype := 21
                    				WHEN @rnd <= 980 THEN @ftype := 22
                    				WHEN @rnd <= 988 THEN @ftype := 23
                    				WHEN @rnd <= 996 THEN @ftype := 24
                				END
            				) as type, x, y

        		FROM

            	(SELECT @row := @row + 1 as x FROM 

            	(select 0 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t,
            	(select 0 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2,


            	(select 0 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8) t3,

            	(SELECT @row := (-? - 1)) as beginning) as x,

            	(SELECT @row2 := @row2 - 1 as y FROM 
            	(select 0 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t,
            	(select 0 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2,
            	(select 0 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8) t3,
            	(SELECT @row2 := (? + 1)) as beginning) as y
        WHERE
            x BETWEEN -? AND ?
            AND
            y BETWEEN -? AND ?
        ) as generator', array_fill(0, 8, config('server.world_size')));

        DB::insert('INSERT INTO oasis
        					SELECT
        						id,
								NULL,
								NOW()
        					FROM
        						world
        					WHERE
        						type >= 13');
        
        DB::insert('INSERT INTO world_resource
        					SELECT
        						id,
        						400 * ?,
        						400 * ?,
        						400 * ?,
        						400 * ?,
        						NOW()
        					FROM
        						world
							WHERE	
								type >= 13', array_fill(0, 4, config('server.storage_capacity_multiplier')));
        
        DB::insert('INSERT INTO world_storage
        					SELECT
        						id,
        						400 * ?,
        						400 * ?
        					FROM
        						world
							WHERE	
								type >= 13', array_fill(0, 2, config('server.storage_capacity_multiplier')));
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('world')->truncate();
		DB::table('world_loyalty')->truncate();
		DB::table('world_resource')->truncate();
		DB::table('world_storage')->truncate();
		DB::table('oasis')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
