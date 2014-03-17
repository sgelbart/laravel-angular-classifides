<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdsTableSeeder extends Seeder {

	public function run()
	{

        DB::table('ads')->delete();

        $faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $data = [
                'title' => $faker->text(200),
                'body' => $faker->text,
            ];
			Ad::create($data);
		}
	}

}