<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$entries = [
			[
				'name' => [
					'en' => 'Mr',
					'fr' => 'Monsieur',
					'es' => 'Señor',
					'ar' => 'السيد',
					'pt' => 'Sr',
					'ru' => 'Мистер',
					'tr' => 'Bay',
					'th' => 'นาย',
					'ka' => 'ბატონი',
					'zh' => '先生',
					'ja' => '氏',
					'it' => 'Sig.',
				],
			],
			[
				'name' => [
					'en' => 'Mrs',
					'fr' => 'Madame',
					'es' => 'Señora',
					'ar' => 'السيدة',
					'pt' => 'Sra',
					'ru' => 'Г-жа',
					'tr' => 'Bayan',
					'th' => 'นาง',
					'ka' => 'ქალბატონი',
					'zh' => '太太',
					'ja' => '夫人',
					'it' => 'Sig.ra',
				],
			],
		];
		
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table('gender')->insertGetId($entry);
		}
	}
}
