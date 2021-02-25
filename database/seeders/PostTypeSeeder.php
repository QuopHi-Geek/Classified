<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTypeSeeder extends Seeder
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
				'name'   => [
					'en' => 'Private individual',
					'fr' => 'Particulier',
					'es' => 'Privado',
					'ar' => 'خاص',
					'pt' => 'Privado',
					'ru' => 'Частный',
					'tr' => 'Özel',
					'th' => 'เอกชน',
					'ka' => 'პირადი',
					'zh' => '私人的',
					'ja' => '非公開',
					'it' => 'Privato',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
			[
				'name'   => [
					'en' => 'Professional',
					'fr' => 'Professionnel',
					'es' => 'Negocio',
					'ar' => 'المحترفين',
					'pt' => 'O negócio',
					'ru' => 'Бизнес',
					'tr' => 'Ticaret',
					'th' => 'ธุรกิจ',
					'ka' => 'ბიზნესი',
					'zh' => '专业的',
					'ja' => 'プロ',
					'it' => 'Professionale',
				],
				'lft'    => null,
				'rgt'    => null,
				'depth'  => null,
				'active' => '1',
			],
		];
		
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table('post_types')->insertGetId($entry);
		}
	}
}
