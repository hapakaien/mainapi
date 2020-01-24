<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
        	[
        		'island' => [
					'name' => 'Jawa',
					'code' => '30',
	        		'provinces' => [
	        			[
							'name' => 'Banten',
							'code' => '36',
	        				'abbreviation' => 'Banten',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Pandeglang',
									'code' => '36.01',
		        					'abbreviation' => 'PDG',
	        					],
	        					[
		        					'name' => 'Kabupaten Lebak',
									'code' => '36.02',
		        					'abbreviation' => 'RKB',
	        					],
	        					[
		        					'name' => 'Kabupaten Tangerang',
									'code' => '36.03',
		        					'abbreviation' => 'TGR',
	        					],
	        					[
		        					'name' => 'Kabupaten Serang',
									'code' => '36.04',
		        					'abbreviation' => 'SRG',
	        					],
	        					[
		        					'name' => 'Kota Tangerang',
									'code' => '36.71',
		        					'abbreviation' => 'TNG',
	        					],
	        					[
		        					'name' => 'Kota Cilegon',
									'code' => '36.72',
		        					'abbreviation' => 'CLG',
	        					],
	        					[
		        					'name' => 'Kota Serang',
									'code' => '36.73',
		        					'abbreviation' => 'SRG',
	        					],
	        					[
		        					'name' => 'Kota Tangerang Selatan',
									'code' => '36.74',
		        					'abbreviation' => 'CPT',
	        					],
	        				],
	        			],
	        			[
							'name' => 'DKI Jakarta',
							'code' => '31',
	        				'abbreviation' => 'JKT',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Kepulauan Seribu',
									'code' => '31.01',
		        					'abbreviation' => 'KSU',
	        					],
	        					[
		        					'name' => 'Kota Jakarta Selatan',
									'code' => '31.74',
		        					'abbreviation' => 'KYB',
	        					],
	        					[
		        					'name' => 'Kota Jakarta Timur',
									'code' => '31.75',
		        					'abbreviation' => 'CKG',
	        					],
	        					[
		        					'name' => 'Kota Jakarta Pusat',
									'code' => '31.71',
		        					'abbreviation' => 'TNA',
	        					],
	        					[
		        					'name' => 'Kota Jakarta Barat',
									'code' => '31.73',
		        					'abbreviation' => 'GGP',
	        					],
	        					[
		        					'name' => 'Kota Jakarta Utara',
									'code' => '31.72',
		        					'abbreviation' => 'TJP',
	        					],
	        				],
	        			],
	        			[
							'name' => 'Jawa Barat',
							'code' => '32',
	        				'abbreviation' => 'Jabar',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Bogor',
									'code' => '32.01',
		        					'abbreviation' => 'CBI',
	        					],
	        					[
		        					'name' => 'Kabupaten Sukabumi',
									'code' => '32.02',
		        					'abbreviation' => 'SBM',
	        					],
	        					[
		        					'name' => 'Kabupaten Cianjur',
									'code' => '32.03',
		        					'abbreviation' => 'CJR',
	        					],
	        					[
		        					'name' => 'Kabupaten Bandung',
									'code' => '32.04',
		        					'abbreviation' => 'SOR',
	        					],
	        					[
		        					'name' => 'Kabupaten Garut',
									'code' => '32.05',
		        					'abbreviation' => 'GRT',
	        					],
	        					[
		        					'name' => 'Kabupaten Tasikmalaya',
									'code' => '32.06',
		        					'abbreviation' => 'SPA',
	        					],
	        					[
		        					'name' => 'Kabupaten Ciamis',
									'code' => '32.07',
		        					'abbreviation' => 'CMS',
	        					],
	        					[
		        					'name' => 'Kabupaten Kuningan',
									'code' => '32.08',
		        					'abbreviation' => 'KNG',
	        					],
	        					[
		        					'name' => 'Kabupaten Cirebon',
									'code' => '32.09',
		        					'abbreviation' => 'SBR',
	        					],
	        					[
		        					'name' => 'Kabupaten Majalengka',
									'code' => '32.10',
		        					'abbreviation' => 'MJL',
	        					],
	        					[
		        					'name' => 'Kabupaten Sumedang',
									'code' => '32.11',
		        					'abbreviation' => 'SMD',
	        					],
	        					[
		        					'name' => 'Kabupaten Indramayu',
									'code' => '32.12',
		        					'abbreviation' => 'IDM',
	        					],
	        					[
		        					'name' => 'Kabupaten Subang',
									'code' => '32.13',
		        					'abbreviation' => 'SNG',
	        					],
	        					[
		        					'name' => 'Kabupaten Purwakarta',
									'code' => '32.14',
		        					'abbreviation' => 'PWK',
	        					],
	        					[
		        					'name' => 'Kabupaten Karawang',
									'code' => '32.15',
		        					'abbreviation' => 'KWG',
	        					],
	        					[
		        					'name' => 'Kabupaten Bekasi',
									'code' => '32.16',
		        					'abbreviation' => 'CKR',
	        					],
	        					[
		        					'name' => 'Kabupaten Bandung Barat',
									'code' => '32.17',
		        					'abbreviation' => 'NPH',
	        					],
	        					[
		        					'name' => 'Kabupaten Pangandaran',
									'code' => '32.18',
		        					'abbreviation' => 'PRI',
	        					],
	        					[
		        					'name' => 'Kota Bogor',
									'code' => '32.71',
		        					'abbreviation' => 'BGR',
	        					],
	        					[
		        					'name' => 'Kota Sukabumi',
									'code' => '32.72',
		        					'abbreviation' => 'SKB',
	        					],
	        					[
		        					'name' => 'Kota Bandung',
									'code' => '32.73',
		        					'abbreviation' => 'BDG',
	        					],
	        					[
		        					'name' => 'Kota Cirebon',
									'code' => '32.74',
		        					'abbreviation' => 'CBN',
	        					],
	        					[
		        					'name' => 'Kota Bekasi',
									'code' => '32.75',
		        					'abbreviation' => 'BKS',
	        					],
	        					[
		        					'name' => 'Kota Depok',
									'code' => '32.76',
		        					'abbreviation' => 'DPK',
	        					],
	        					[
		        					'name' => 'Kota Cimahi',
									'code' => '32.77',
		        					'abbreviation' => 'CMH',
	        					],
	        					[
		        					'name' => 'Kota Tasikmalaya',
									'code' => '32.78',
		        					'abbreviation' => 'TSM',
	        					],
	        					[
		        					'name' => 'Kota Banjar',
									'code' => '32.79',
		        					'abbreviation' => 'BJR',
	        					],
	        				],
	        			],
	        			[
	        				'name' => 'Jawa Tengah',
							'code' => '33',
	        				'abbreviation' => 'Jateng',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Cilacap',
									'code' => '33.01',
		        					'abbreviation' => 'CLP',
	        					],
	        					[
		        					'name' => 'Kabupaten Banyumas',
									'code' => '33.02',
		        					'abbreviation' => 'PWT',
	        					],
	        					[
		        					'name' => 'Kabupaten Purbalingga',
									'code' => '33.03',
		        					'abbreviation' => 'PBG',
	        					],
	        					[
		        					'name' => 'Kabupaten Banjarnegara',
									'code' => '33.04',
		        					'abbreviation' => 'BNR',
	        					],
	        					[
		        					'name' => 'Kabupaten Kebumen',
									'code' => '33.05',
		        					'abbreviation' => 'KBM',
	        					],
	        					[
		        					'name' => 'Kabupaten Purworejo',
									'code' => '33.06',
		        					'abbreviation' => 'PWR',
	        					],
	        					[
		        					'name' => 'Kabupaten Wonosobo',
									'code' => '33.07',
		        					'abbreviation' => 'WSB',
	        					],
	        					[
		        					'name' => 'Kabupaten Magelang',
									'code' => '33.08',
		        					'abbreviation' => 'MKD',
	        					],
	        					[
		        					'name' => 'Kabupaten Boyolali',
									'code' => '33.09',
		        					'abbreviation' => 'BYL',
	        					],
	        					[
		        					'name' => 'Kabupaten Klaten',
									'code' => '33.10',
		        					'abbreviation' => 'KLN',
	        					],
	        					[
		        					'name' => 'Kabupaten Sukoharjo',
									'code' => '33.11',
		        					'abbreviation' => 'SKH',
	        					],
	        					[
		        					'name' => 'Kabupaten Wonogiri',
									'code' => '33.12',
		        					'abbreviation' => 'WNG',
	        					],
	        					[
		        					'name' => 'Kabupaten Karanganyar',
									'code' => '33.13',
		        					'abbreviation' => 'KRG',
	        					],
	        					[
		        					'name' => 'Kabupaten Sragen',
									'code' => '33.14',
		        					'abbreviation' => 'SGN',
	        					],
	        					[
		        					'name' => 'Kabupaten Grobogan',
									'code' => '33.15',
		        					'abbreviation' => 'PWD',
	        					],
	        					[
		        					'name' => 'Kabupaten Blora',
									'code' => '33.16',
		        					'abbreviation' => 'BLA',
	        					],
								[
		        					'name' => 'Kabupaten Rembang',
									'code' => '33.17',
		        					'abbreviation' => 'RBG',
	        					],
								[
		        					'name' => 'Kabupaten Pati',
									'code' => '33.18',
		        					'abbreviation' => 'PTI',
	        					],
								[
		        					'name' => 'Kabupaten Kudus',
									'code' => '33.19',
		        					'abbreviation' => 'KDS',
	        					],
								[
		        					'name' => 'Kabupaten Jepara',
									'code' => '33.20',
		        					'abbreviation' => 'JPA',
	        					],
								[
		        					'name' => 'Kabupaten Demak',
									'code' => '33.21',
		        					'abbreviation' => 'DMK',
	        					],
								[
		        					'name' => 'Kabupaten Semarang',
									'code' => '33.22',
		        					'abbreviation' => 'UNR',
	        					],
								[
		        					'name' => 'Kabupaten Temanggung',
									'code' => '33.23',
		        					'abbreviation' => 'TMG',
	        					],
								[
		        					'name' => 'Kabupaten Kendal',
									'code' => '33.24',
		        					'abbreviation' => 'KDL',
	        					],
								[
		        					'name' => 'Kabupaten Batang',
									'code' => '33.25',
		        					'abbreviation' => 'BTG',
	        					],
								[
		        					'name' => 'Kabupaten Pekalongan',
									'code' => '33.26',
		        					'abbreviation' => 'KJN',
	        					],
								[
		        					'name' => 'Kabupaten Pemalang',
									'code' => '33.27',
		        					'abbreviation' => 'PML',
	        					],
								[
		        					'name' => 'Kabupaten Tegal',
									'code' => '33.28',
		        					'abbreviation' => 'SLW',
	        					],
								[
		        					'name' => 'Kabupaten Brebes',
									'code' => '33.29',
		        					'abbreviation' => 'BBS',
	        					],
								[
		        					'name' => 'Kota Magelang',
									'code' => '33.71',
		        					'abbreviation' => 'MGG',
	        					],
								[
		        					'name' => 'Kota Surakarta',
									'code' => '33.72',
		        					'abbreviation' => 'SKT',
	        					],
								[
		        					'name' => 'Kota Salatiga',
									'code' => '33.73',
		        					'abbreviation' => 'SLT',
	        					],
								[
		        					'name' => 'Kota Semarang',
									'code' => '33.74',
		        					'abbreviation' => 'SMG',
	        					],
								[
		        					'name' => 'Kota Pekalongan',
									'code' => '33.75',
		        					'abbreviation' => 'PKL',
	        					],
								[
		        					'name' => 'Kota Tegal',
									'code' => '33.76',
		        					'abbreviation' => 'TGL',
	        					],
	        				],
	        			],
	        			[
	        				'name' => 'Jawa Timur',
							'code' => '35',
	        				'abbreviation' => 'Jatim',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Pacitan',
									'code' => '35.01',
		        					'abbreviation' => 'PCT',
	        					],
								[
		        					'name' => 'Kabupaten Ponorogo',
									'code' => '35.02',
		        					'abbreviation' => 'PNG',
	        					],
								[
		        					'name' => 'Kabupaten Trenggalek',
									'code' => '35.03',
		        					'abbreviation' => 'TRK',
	        					],
								[
		        					'name' => 'Kabupaten Tulungagung',
									'code' => '35.04',
		        					'abbreviation' => 'TLG',
	        					],
								[
		        					'name' => 'Kabupaten Blitar',
									'code' => '35.05',
		        					'abbreviation' => 'KNR',
	        					],
								[
		        					'name' => 'Kabupaten Kediri',
									'code' => '35.06',
		        					'abbreviation' => 'KDR',
	        					],
								[
		        					'name' => 'Kabupaten Malang',
									'code' => '35.07',
		        					'abbreviation' => 'KPN',
	        					],
								[
		        					'name' => 'Kabupaten Lumajang',
									'code' => '35.08',
		        					'abbreviation' => 'LMJ',
	        					],
								[
		        					'name' => 'Kabupaten Jember',
									'code' => '35.09',
		        					'abbreviation' => 'JMR',
	        					],
								[
		        					'name' => 'Kabupaten Banyuwangi',
									'code' => '35.10',
		        					'abbreviation' => 'BYW',
	        					],
								[
		        					'name' => 'Kabupaten Bondowoso',
									'code' => '35.11',
		        					'abbreviation' => 'BDW',
	        					],
								[
		        					'name' => 'Kabupaten Situbondo',
									'code' => '35.12',
		        					'abbreviation' => 'SIT',
	        					],
								[
		        					'name' => 'Kabupaten Probolinggo',
									'code' => '35.13',
		        					'abbreviation' => 'KRS',
	        					],
								[
		        					'name' => 'Kabupaten Pasuruan',
									'code' => '35.14',
		        					'abbreviation' => 'PSR',
	        					],
								[
		        					'name' => 'Kabupaten Sidoarjo',
									'code' => '35.15',
		        					'abbreviation' => 'SDA',
	        					],
								[
		        					'name' => 'Kabupaten Mojokerto',
									'code' => '35.16',
		        					'abbreviation' => 'MJK',
	        					],
								[
		        					'name' => 'Kabupaten Jombang',
									'code' => '35.17',
		        					'abbreviation' => 'JBG',
	        					],
								[
		        					'name' => 'Kabupaten Nganjuk',
									'code' => '35.18',
		        					'abbreviation' => 'NJK',
	        					],
								[
		        					'name' => 'Kabupaten Madiun',
									'code' => '35.19',
		        					'abbreviation' => 'MJY',
	        					],
								[
		        					'name' => 'Kabupaten Magetan',
									'code' => '35.20',
		        					'abbreviation' => 'MGT',
	        					],
								[
		        					'name' => 'Kabupaten Ngawi',
									'code' => '35.21',
		        					'abbreviation' => 'NGW',
	        					],
								[
		        					'name' => 'Kabupaten Bojonegoro',
									'code' => '35.22',
		        					'abbreviation' => 'BJN',
	        					],
								[
		        					'name' => 'Kabupaten Tuban',
									'code' => '35.23',
		        					'abbreviation' => 'TBN',
	        					],
								[
		        					'name' => 'Kabupaten Lamongan',
									'code' => '35.24',
		        					'abbreviation' => 'LMG',
	        					],
								[
		        					'name' => 'Kabupaten Gresik',
									'code' => '35.25',
		        					'abbreviation' => 'GSK',
	        					],
								[
		        					'name' => 'Kabupaten Bangkalan',
									'code' => '35.26',
		        					'abbreviation' => 'BKL',
	        					],
								[
		        					'name' => 'Kabupaten Sampang',
									'code' => '35.27',
		        					'abbreviation' => 'SPG',
	        					],
								[
		        					'name' => 'Kabupaten Pamekasan',
									'code' => '35.28',
		        					'abbreviation' => 'PMK',
	        					],
								[
		        					'name' => 'Kabupaten Sumenep',
									'code' => '35.29',
		        					'abbreviation' => 'SMP',
	        					],
								[
		        					'name' => 'Kota Kediri',
									'code' => '35.71',
		        					'abbreviation' => 'KDR',
	        					],
								[
		        					'name' => 'Kota Blitar',
									'code' => '35.72',
		        					'abbreviation' => 'BLT',
	        					],
								[
		        					'name' => 'Kota Malang',
									'code' => '35.73',
		        					'abbreviation' => 'MLG',
	        					],
								[
		        					'name' => 'Kota Probolinggo',
									'code' => '35.74',
		        					'abbreviation' => 'PBL',
	        					],
								[
		        					'name' => 'Kota Pasuruan',
									'code' => '35.75',
		        					'abbreviation' => 'PSN',
	        					],
								[
		        					'name' => 'Kota Mojokerto',
									'code' => '35.76',
		        					'abbreviation' => 'MJK',
	        					],
								[
		        					'name' => 'Kota Madiun',
									'code' => '35.77',
		        					'abbreviation' => 'MAD',
	        					],
								[
		        					'name' => 'Kota Surabaya',
									'code' => '35.78',
		        					'abbreviation' => 'SBY',
	        					],
								[
		        					'name' => 'Kota Batu',
									'code' => '35.79',
		        					'abbreviation' => 'BTU',
	        					],
	        				],
	        			],
	        			[
	        				'name' => 'DI Yogyakarta',
							'code' => '34',
	        				'abbreviation' => 'DIY',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Kulon Progo',
									'code' => '34.01',
		        					'abbreviation' => 'WAT',
	        					],
								[
		        					'name' => 'Kabupaten Bantul',
									'code' => '34.02',
		        					'abbreviation' => 'BTL',
	        					],
								[
		        					'name' => 'Kabupaten Gunung Kidul',
									'code' => '34.03',
		        					'abbreviation' => 'WNO',
	        					],
								[
		        					'name' => 'Kabupaten Sleman',
									'code' => '34.04',
		        					'abbreviation' => 'SMN',
	        					],
								[
		        					'name' => 'Kota Yogyakarta',
									'code' => '34.71',
		        					'abbreviation' => 'YYK',
	        					],
	        				],
	        			],
	        		]
        		],
			],
        	[
        		'island' => [
					'name' => 'Kalimantan',
					'code' => '60',
	        		'provinces' => [
	        			[
							'name' => 'Kalimantan Barat',
							'code' => '61',
	        				'abbreviation' => 'Kalbar',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Sambas',
									'code' => '61.01',
		        					'abbreviation' => 'SBS',
	        					],
								[
		        					'name' => 'Kabupaten Bengkayang',
									'code' => '61.07',
		        					'abbreviation' => 'BEK',
	        					],
								[
		        					'name' => 'Kabupaten Landak',
									'code' => '61.08',
		        					'abbreviation' => 'NBA',
	        					],
								[
		        					'name' => 'Kabupaten Mempawah',
									'code' => '61.02',
		        					'abbreviation' => 'MPW',
	        					],
								[
		        					'name' => 'Kabupaten Sanggau',
									'code' => '61.03',
		        					'abbreviation' => 'SAG',
	        					],
								[
		        					'name' => 'Kabupaten Ketapang',
									'code' => '61.04',
		        					'abbreviation' => 'KTP',
	        					],
								[
		        					'name' => 'Kabupaten Sintang',
									'code' => '61.05',
		        					'abbreviation' => 'STG',
	        					],
								[
		        					'name' => 'Kabupaten Kapuas Hulu',
									'code' => '61.06',
		        					'abbreviation' => 'PTS',
	        					],
								[
		        					'name' => 'Kabupaten Sekadau',
									'code' => '61.09',
		        					'abbreviation' => 'SED',
	        					],
								[
		        					'name' => 'Kabupaten Melawi',
									'code' => '61.10',
		        					'abbreviation' => 'NGP',
	        					],
								[
		        					'name' => 'Kabupaten Kayong Utara',
									'code' => '61.11',
		        					'abbreviation' => 'SKD',
	        					],
								[
		        					'name' => 'Kabupaten Kubu Raya',
									'code' => '61.12',
		        					'abbreviation' => 'SRY',
	        					],
								[
		        					'name' => 'Kota Pontianak',
									'code' => '61.71',
		        					'abbreviation' => 'PTK',
	        					],
								[
		        					'name' => 'Kota Singkawang',
									'code' => '61.72',
		        					'abbreviation' => 'SKW',
	        					],
	        				],
	        			],
	        			[
							'name' => 'Kalimantan Selatan',
							'code' => '63',
	        				'abbreviation' => 'Kalsel',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Tanah Laut',
									'code' => '63.01',
		        					'abbreviation' => 'PLI',
	        					],
								[
		        					'name' => 'Kabupaten Kota Baru',
									'code' => '63.02',
		        					'abbreviation' => 'KBR',
	        					],
								[
		        					'name' => 'Kabupaten Banjar',
									'code' => '63.03',
		        					'abbreviation' => 'MTP',
	        					],
								[
		        					'name' => 'Kabupaten Barito Kuala',
									'code' => '63.04',
		        					'abbreviation' => 'MRH',
	        					],
								[
		        					'name' => 'Kabupaten Tapin',
									'code' => '63.05',
		        					'abbreviation' => 'RTA',
	        					],
								[
		        					'name' => 'Kabupaten Hulu Sungai Selatan',
									'code' => '63.06',
		        					'abbreviation' => 'KGN',
	        					],
								[
		        					'name' => 'Kabupaten Hulu Sungai Tengah',
									'code' => '63.07',
		        					'abbreviation' => 'BRB',
	        					],
								[
		        					'name' => 'Kabupaten Hulu Sungai Utara',
									'code' => '63.08',
		        					'abbreviation' => 'AMT',
	        					],
								[
		        					'name' => 'Kabupaten Tabalong',
									'code' => '63.09',
		        					'abbreviation' => 'TJG',
	        					],
								[
		        					'name' => 'Kabupaten Tanah Bumbu',
									'code' => '63.10',
		        					'abbreviation' => 'BLN',
	        					],
								[
		        					'name' => 'Kabupaten Balangan',
									'code' => '63.11',
		        					'abbreviation' => 'PRN',
	        					],
								[
		        					'name' => 'Kota Banjarmasin',
									'code' => '63.71',
		        					'abbreviation' => 'BJM',
	        					],
								[
		        					'name' => 'Kota Banjar Baru',
									'code' => '63.72',
		        					'abbreviation' => 'BJB',
	        					],
	        				],
	        			],
	        			[
							'name' => 'Kalimantan Tengah',
							'code' => '62',
	        				'abbreviation' => 'Kalteng',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Kotawaringin Barat',
									'code' => '62.01',
		        					'abbreviation' => 'PBU',
	        					],
								[
		        					'name' => 'Kabupaten Kotawaringin Timur',
									'code' => '62.02',
		        					'abbreviation' => 'SPT',
	        					],
								[
		        					'name' => 'Kabupaten Kapuas',
									'code' => '62.03',
		        					'abbreviation' => 'KLK',
	        					],
								[
		        					'name' => 'Kabupaten Barito Selatan',
									'code' => '62.04',
		        					'abbreviation' => 'BNT',
	        					],
								[
		        					'name' => 'Kabupaten Barito Utara',
									'code' => '62.05',
		        					'abbreviation' => 'MTW',
	        					],
								[
		        					'name' => 'Kabupaten Sukamara',
									'code' => '62.08',
		        					'abbreviation' => 'SKR',
	        					],
								[
		        					'name' => 'Kabupaten Lamandau',
									'code' => '62.09',
		        					'abbreviation' => 'NGB',
	        					],
								[
		        					'name' => 'Kabupaten Seruyan',
									'code' => '62.07',
		        					'abbreviation' => 'KLP',
	        					],
								[
		        					'name' => 'Kabupaten Katingan',
									'code' => '62.06',
		        					'abbreviation' => 'KSN',
	        					],
								[
		        					'name' => 'Kabupaten Pulang Pisau',
									'code' => '62.11',
		        					'abbreviation' => 'PPS',
	        					],
								[
		        					'name' => 'Kabupaten Gunung Mas',
									'code' => '62.10',
		        					'abbreviation' => 'KKN',
	        					],
								[
		        					'name' => 'Kabupaten Barito Timur',
									'code' => '62.13',
		        					'abbreviation' => 'TML',
	        					],
								[
		        					'name' => 'Kabupaten Murung Raya',
									'code' => '62.12',
		        					'abbreviation' => 'PRC',
	        					],
								[
		        					'name' => 'Kota Palangka Raya',
									'code' => '62.71',
		        					'abbreviation' => 'PLK',
	        					],
	        				],
	        			],
	        			[
							'name' => 'Kalimantan Timur',
							'code' => '64',
	        				'abbreviation' => 'Kaltim',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Paser',
									'code' => '64.01',
		        					'abbreviation' => 'TGT',
	        					],
								[
		        					'name' => 'Kabupaten Kutai Barat',
									'code' => '64.07',
		        					'abbreviation' => 'SDW',
	        					],
								[
		        					'name' => 'Kabupaten Kutai Kartanegara',
									'code' => '64.02',
		        					'abbreviation' => 'TRG',
	        					],
								[
		        					'name' => 'Kabupaten Kutai Timur',
									'code' => '64.08',
		        					'abbreviation' => 'SGT',
	        					],
								[
		        					'name' => 'Kabupaten Berau',
									'code' => '64.03',
		        					'abbreviation' => 'TNR',
	        					],
								[
		        					'name' => 'Kabupaten Penajam Paser Utara',
									'code' => '64.09',
		        					'abbreviation' => 'PNJ',
	        					],
								[
		        					'name' => 'Kabupaten Mahakam Hulu',
									'code' => '64.11',
		        					'abbreviation' => 'UBL',
	        					],
								[
		        					'name' => 'Kota Balikpapan',
									'code' => '64.71',
		        					'abbreviation' => 'BPP',
	        					],
								[
		        					'name' => 'Kota Samarinda',
									'code' => '64.72',
		        					'abbreviation' => 'SMR',
	        					],
								[
		        					'name' => 'Kota Bontang',
									'code' => '64.74',
		        					'abbreviation' => 'BON',
	        					],
	        				],
	        			],
	        			[
							'name' => 'Kalimantan Utara',
							'code' => '65',
	        				'abbreviation' => 'Kalut',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Malinau',
									'code' => '65.02',
		        					'abbreviation' => 'MLN',
	        					],
								[
		        					'name' => 'Kabupaten Bulungan',
									'code' => '65.01',
		        					'abbreviation' => 'TJS',
	        					],
								[
		        					'name' => 'Kabupaten Tana Tidung',
									'code' => '65.04',
		        					'abbreviation' => 'TDP',
	        					],
								[
		        					'name' => 'Kabupaten Nunukan',
									'code' => '65.03',
		        					'abbreviation' => 'NNK',
	        					],
								[
		        					'name' => 'Kota Tarakan',
									'code' => '65.71',
		        					'abbreviation' => 'TAR',
	        					],
	        				],
	        			],
	        		]
        		],
        	],
        	[
        		'island' => [
					'name' => 'Kepulauan Maluku',
					'code' => '80',
	        		'provinces' => [
	        			[
							'name' => 'Maluku',
							'code' => '81',
	        				'abbreviation' => 'Maluku',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Maluku Tenggara Barat',
									'code' => '81.03',
		        					'abbreviation' => 'SML',
	        					],
								[
		        					'name' => 'Kabupaten Maluku Tenggara',
									'code' => '81.02',
		        					'abbreviation' => 'TUL',
	        					],
								[
		        					'name' => 'Kabupaten Maluku Tengah',
									'code' => '81.01',
		        					'abbreviation' => 'MSH',
	        					],
								[
		        					'name' => 'Kabupaten Buru',
									'code' => '81.04',
		        					'abbreviation' => 'NLA',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Aru',
									'code' => '81.07',
		        					'abbreviation' => 'DOB',
	        					],
								[
		        					'name' => 'Kabupaten Seram Bagian Barat',
									'code' => '81.06',
		        					'abbreviation' => 'DRH',
	        					],
								[
		        					'name' => 'Kabupaten Seram Bagian Timur',
									'code' => '81.05',
		        					'abbreviation' => 'DTH',
	        					],
								[
		        					'name' => 'Kabupaten Maluku Barat Daya',
									'code' => '81.08',
		        					'abbreviation' => 'TKR',
	        					],
								[
		        					'name' => 'Kabupaten Buru Selatan',
									'code' => '81.09',
		        					'abbreviation' => 'NMR',
	        					],
								[
		        					'name' => 'Kota Ambon',
									'code' => '81.71',
		        					'abbreviation' => 'AMB',
	        					],
								[
		        					'name' => 'Kota Tual',
									'code' => '81.72',
		        					'abbreviation' => 'TUL',
	        					],
	        				],
	        			],
	        			[
							'name' => 'Maluku Utara',
							'code' => '82',
	        				'abbreviation' => 'Malut',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Halmahera Barat',
									'code' => '82.01',
									'abbreviation' => 'JLL',
	        					],
								[
		        					'name' => 'Kabupaten Halmahera Tengah',
									'code' => '82.02',
									'abbreviation' => 'WED',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Sula',
									'code' => '82.05',
									'abbreviation' => 'SNN',
	        					],
								[
		        					'name' => 'Kabupaten Halmahera Selatan',
									'code' => '82.04',
									'abbreviation' => 'LBA',
	        					],
								[
		        					'name' => 'Kabupaten Halmahera Utara',
									'code' => '82.03',
									'abbreviation' => 'TOB',
	        					],
								[
		        					'name' => 'Kabupaten Halmahera Timur',
									'code' => '82.06',
									'abbreviation' => 'MAB',
	        					],
								[
		        					'name' => 'Kabupaten Pulau Morotai',
									'code' => '82.07',
									'abbreviation' => 'MTS',
	        					],
								[
		        					'name' => 'Kabupaten Pulau Taliabu',
									'code' => '82.08',
									'abbreviation' => 'BBG',
	        					],
								[
		        					'name' => 'Kota Ternate',
									'code' => '82.71',
									'abbreviation' => 'TTE',
	        					],
								[
		        					'name' => 'Kota Tidore Kepulauan',
									'code' => '82.72',
									'abbreviation' => 'TDR',
	        					],
	        				],
	        			],
	        		]
        		],
        	],
        	[
        		'island' => [
					'name' => 'Kepulauan Nusa Tenggara',
					'code' => '50',
	        		'provinces' => [
	        			[
							'name' => 'Bali',
							'code' => '51',
	        				'abbreviation' => 'Bali',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Badung',
									'code' => '51.03',
									'abbreviation' => 'MGW',
	        					],
								[
		        					'name' => 'Kabupaten Bangli',
									'code' => '51.06',
									'abbreviation' => 'BLI',
	        					],
								[
		        					'name' => 'Kabupaten Buleleng',
									'code' => '51.08',
									'abbreviation' => 'SGR',
	        					],
								[
		        					'name' => 'Kabupaten Gianyar',
									'code' => '51.04',
									'abbreviation' => 'GIN',
	        					],
								[
		        					'name' => 'Kabupaten Jembrana',
									'code' => '51.01',
									'abbreviation' => 'NGA',
	        					],
								[
		        					'name' => 'Kabupaten Karang Asem',
									'code' => '51.07',
									'abbreviation' => 'KRA',
	        					],
								[
		        					'name' => 'Kabupaten Klungkung',
									'code' => '51.05',
									'abbreviation' => 'SRP',
	        					],
								[
		        					'name' => 'Kabupaten Tabanan',
									'code' => '51.02',
									'abbreviation' => 'TAB',
	        					],
								[
		        					'name' => 'Kota Denpasar',
									'code' => '51.71',
									'abbreviation' => 'DPR',
	        					],
	        				],
	        			],
						[
							'name' => 'Nusa Tenggara Barat',
							'code' => '52',
	        				'abbreviation' => 'NTB',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bima',
									'code' => '52.06',
									'abbreviation' => 'WHO',
	        					],
								[
		        					'name' => 'Kabupaten Dompu',
									'code' => '52.05',
									'abbreviation' => 'DPU',
	        					],
								[
		        					'name' => 'Kabupaten Lombok Barat',
									'code' => '52.01',
									'abbreviation' => 'GRG',
	        					],
								[
		        					'name' => 'Kabupaten Lombok Tengah',
									'code' => '52.02',
									'abbreviation' => 'PYA',
	        					],
								[
		        					'name' => 'Kabupaten Lombok Timur',
									'code' => '52.03',
									'abbreviation' => 'SEL',
	        					],
								[
		        					'name' => 'Kabupaten Lombok Utara',
									'code' => '52.08',
									'abbreviation' => 'TJN',
	        					],
								[
		        					'name' => 'Kabupaten Sumbawa',
									'code' => '52.04',
									'abbreviation' => 'SBW',
	        					],
								[
		        					'name' => 'Kabupaten Sumbawa Barat',
									'code' => '52.07',
									'abbreviation' => 'TLW',
	        					],
								[
		        					'name' => 'Kota Bima',
									'code' => '52.72',
									'abbreviation' => 'BIM',
	        					],
								[
		        					'name' => 'Kota Mataram',
									'code' => '52.71',
									'abbreviation' => 'MTR',
	        					],
	        				],
	        			],
						[
							'name' => 'Nusa Tenggara Timur',
							'code' => '53',
	        				'abbreviation' => 'NTT',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Alor',
									'code' => '53.05',
		        					'abbreviation' => 'KLB',
	        					],
								[
		        					'name' => 'Kabupaten Belu',
									'code' => '53.04',
		        					'abbreviation' => 'ATB',
	        					],
								[
		        					'name' => 'Kabupaten Ende',
									'code' => '53.08',
		        					'abbreviation' => 'END',
	        					],
								[
		        					'name' => 'Kabupaten Flores Timur',
									'code' => '53.06',
		        					'abbreviation' => 'LRT',
	        					],
								[
		        					'name' => 'Kabupaten Kupang',
									'code' => '53.01',
		        					'abbreviation' => 'KPG',
	        					],
								[
		        					'name' => 'Kabupaten Lembata',
									'code' => '53.13',
		        					'abbreviation' => 'LWL',
	        					],
								[
		        					'name' => 'Kabupaten Malaka',
									'code' => '53.21',
		        					'abbreviation' => 'BTN',
	        					],
								[
		        					'name' => 'Kabupaten Manggarai',
									'code' => '53.10',
		        					'abbreviation' => 'RTG',
	        					],
								[
		        					'name' => 'Kabupaten Manggarai Barat',
									'code' => '53.15',
		        					'abbreviation' => 'LBJ',
	        					],
								[
		        					'name' => 'Kabupaten Manggarai Timur',
									'code' => '53.19',
		        					'abbreviation' => 'BRG',
	        					],
								[
		        					'name' => 'Kabupaten Nagekeo',
									'code' => '53.16',
		        					'abbreviation' => 'MBY',
	        					],
								[
		        					'name' => 'Kabupaten Ngada',
									'code' => '53.09',
		        					'abbreviation' => 'BJW',
	        					],
								[
		        					'name' => 'Kabupaten Rote Ndao',
									'code' => '53.14',
		        					'abbreviation' => 'BAA',
	        					],
								[
		        					'name' => 'Kabupaten Sabu Raijua',
									'code' => '53.20',
		        					'abbreviation' => 'SBB',
	        					],
								[
		        					'name' => 'Kabupaten Sikka',
									'code' => '53.07',
		        					'abbreviation' => 'MME',
	        					],
								[
		        					'name' => 'Kabupaten Sumba Barat',
									'code' => '53.12',
		        					'abbreviation' => 'WKB',
	        					],
								[
		        					'name' => 'Kabupaten Sumba Barat Daya',
									'code' => '53.18',
		        					'abbreviation' => 'TAM',
	        					],
								[
		        					'name' => 'Kabupaten Sumba Tengah',
									'code' => '53.17',
		        					'abbreviation' => 'WBL',
	        					],
								[
		        					'name' => 'Kabupaten Sumba Timur',
									'code' => '53.11',
		        					'abbreviation' => 'WGP',
	        					],
								[
		        					'name' => 'Kabupaten Timor Tengah Selatan',
									'code' => '53.02',
		        					'abbreviation' => 'SOE',
	        					],
								[
		        					'name' => 'Kabupaten Timor Tengah Utara',
									'code' => '53.03',
		        					'abbreviation' => 'KFM',
	        					],
								[
		        					'name' => 'Kota Kupang',
									'code' => '53.71',
		        					'abbreviation' => 'KPG',
	        					],
	        				],
	        			],
	        		]
        		],
        	],
        	[
        		'island' => [
					'name' => 'Papua',
					'code' => '90',
	        		'provinces' => [
	        			[
							'name' => 'Papua',
							'code' => '91',
	        				'abbreviation' => 'Papua',
	        				'regencies' => [
	        					[
									'name' => 'Kabupaten Asmat',
									'code' => '91.18',
		        					'abbreviation' => 'AGT',
	        					],
								[
		        					'name' => 'Kabupaten Biak Numfor',
									'code' => '91.06',
		        					'abbreviation' => 'BIK',
	        					],
								[
		        					'name' => 'Kabupaten Boven Digoel',
									'code' => '91.16',
		        					'abbreviation' => 'TMR',
	        					],
								[
		        					'name' => 'Kabupaten Deiyai',
									'code' => '91.28',
		        					'abbreviation' => 'TIG',
	        					],
								[
		        					'name' => 'Kabupaten Dogiyai',
									'code' => '91.26',
		        					'abbreviation' => 'KGM',
	        					],
								[
		        					'name' => 'Kabupaten Intan Jaya',
									'code' => '91.27',
		        					'abbreviation' => 'SGP',
	        					],
								[
		        					'name' => 'Kabupaten Jayapura',
									'code' => '91.03',
		        					'abbreviation' => 'JAP',
	        					],
								[
		        					'name' => 'Kabupaten Jayawijaya',
									'code' => '91.02',
		        					'abbreviation' => 'WAM',
	        					],
								[
		        					'name' => 'Kabupaten Keerom',
									'code' => '91.11',
		        					'abbreviation' => 'WRS',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Yapen',
									'code' => '91.05',
		        					'abbreviation' => 'SRU',
	        					],
								[
		        					'name' => 'Kabupaten Lanny Jaya',
									'code' => '91.23',
		        					'abbreviation' => 'TOM',
	        					],
								[
		        					'name' => 'Kabupaten Mamberamo Raya',
									'code' => '91.20',
		        					'abbreviation' => 'BRM',
	        					],
								[
		        					'name' => 'Kabupaten Mamberamo Tengah',
									'code' => '91.21',
		        					'abbreviation' => 'KBK',
	        					],
								[
		        					'name' => 'Kabupaten Mappi',
									'code' => '91.17',
		        					'abbreviation' => 'KEP',
	        					],
								[
		        					'name' => 'Kabupaten Merauke',
									'code' => '91.01',
		        					'abbreviation' => 'MRK',
	        					],
								[
		        					'name' => 'Kabupaten Mimika',
									'code' => '91.09',
		        					'abbreviation' => 'TIM',
	        					],
								[
		        					'name' => 'Kabupaten Nabire',
									'code' => '91.04',
		        					'abbreviation' => 'NAB',
	        					],
								[
		        					'name' => 'Kabupaten Nduga',
									'code' => '91.24',
		        					'abbreviation' => 'KYM',
	        					],
								[
		        					'name' => 'Kabupaten Paniai',
									'code' => '91.08',
		        					'abbreviation' => 'ERT',
	        					],
								[
		        					'name' => 'Kabupaten Pegunungan Bintang',
									'code' => '91.12',
		        					'abbreviation' => 'OSB',
	        					],
								[
		        					'name' => 'Kabupaten Puncak',
									'code' => '91.25',
		        					'abbreviation' => 'ILG',
	        					],
								[
		        					'name' => 'Kabupaten Puncak Jaya',
									'code' => '91.07',
		        					'abbreviation' => 'MUL',
	        					],
								[
		        					'name' => 'Kabupaten Sarmi',
									'code' => '91.10',
		        					'abbreviation' => 'SMI',
	        					],
								[
		        					'name' => 'Kabupaten Supiori',
									'code' => '91.19',
		        					'abbreviation' => 'SRW',
	        					],
								[
		        					'name' => 'Kabupaten Tolikara',
									'code' => '91.14',
		        					'abbreviation' => 'KBG',
	        					],
								[
		        					'name' => 'Kabupaten Waropen',
									'code' => '91.15',
		        					'abbreviation' => 'BTW',
	        					],
								[
		        					'name' => 'Kabupaten Yahukimo',
									'code' => '91.13',
		        					'abbreviation' => 'SMH',
	        					],
								[
		        					'name' => 'Kabupaten Yalimo',
									'code' => '91.22',
		        					'abbreviation' => 'ELL',
	        					],
								[
		        					'name' => 'Kota Jayapura',
									'code' => '91.71',
		        					'abbreviation' => 'JAP',
	        					],
	        				],
	        			],
						[
	        				'name' => 'Papua Barat',
							'code' => '92',
							'abbreviation' => 'Papua Barat',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Fakfak',
									'code' => '92.03',
		        					'abbreviation' => 'FFK',
	        					],
								[
		        					'name' => 'Kabupaten Kaimana',
									'code' => '92.08',
		        					'abbreviation' => 'KMN',
	        					],
								[
		        					'name' => 'Kabupaten Manokwari',
									'code' => '92.02',
		        					'abbreviation' => 'MNK',
	        					],
								[
		        					'name' => 'Kabupaten Manokwari Selatan',
									'code' => '92.11',
		        					'abbreviation' => 'RSK',
	        					],
								[
		        					'name' => 'Kabupaten Maybrat',
									'code' => '92.10',
		        					'abbreviation' => 'AFT',
	        					],
								[
		        					'name' => 'Kabupaten Pegunungan Arfak',
									'code' => '92.12',
		        					'abbreviation' => 'ANG',
	        					],
								[
		        					'name' => 'Kabupaten Raja Ampat',
									'code' => '92.05',
		        					'abbreviation' => 'WAS',
	        					],
								[
		        					'name' => 'Kabupaten Sorong',
									'code' => '92.01',
		        					'abbreviation' => 'AMS',
	        					],
								[
		        					'name' => 'Kabupaten Sorong Selatan',
									'code' => '92.04',
		        					'abbreviation' => 'TMB',
	        					],
								[
		        					'name' => 'Kabupaten Tambrauw',
									'code' => '92.09',
		        					'abbreviation' => 'FEF',
	        					],
								[
		        					'name' => 'Kabupaten Teluk Bintuni',
									'code' => '92.06',
		        					'abbreviation' => 'BTI',
	        					],
								[
		        					'name' => 'Kabupaten Teluk Wondama',
									'code' => '92.07',
		        					'abbreviation' => 'RAS',
	        					],
								[
		        					'name' => 'Kota Sorong',
									'code' => '92.71',
		        					'abbreviation' => 'SON',
	        					],
	        				],
	        			],
	        		]
        		],
        	],
        	[
        		'island' => [
        			'name' => 'Sulawesi',
					'code' => '70',
	        		'provinces' => [
	        			[
							'name' => 'Gorontalo',
							'code' => '75',
	        				'abbreviation' => 'Gorontalo',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Boalemo',
									'code' => '75.02',
									'abbreviation' => 'TMT',
	        					],
	        					[
		        					'name' => 'Kabupaten Bone Bolango',
									'code' => '75.03',
									'abbreviation' => 'SWW',
	        					],
	        					[
		        					'name' => 'Kabupaten Gorontalo',
									'code' => '75.01',
									'abbreviation' => 'GTO',
	        					],
	        					[
		        					'name' => 'Kabupaten Gorontalo Utara',
									'code' => '75.05',
									'abbreviation' => 'KWD',
	        					],
	        					[
		        					'name' => 'Kabupaten Pohuwato',
									'code' => '75.04',
									'abbreviation' => 'MAR',
	        					],
	        					[
		        					'name' => 'Kota Gorontalo',
									'code' => '75.71',
									'abbreviation' => 'GTO',
	        					],
	        				],
	        			],
						[
							'name' => 'Sulawesi Barat',
							'code' => '76',
	        				'abbreviation' => 'Sulbar',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Majene',
									'code' => '76.05',
									'abbreviation' => 'MJN',
	        					],
								[
		        					'name' => 'Kabupaten Mamasa',
									'code' => '76.03',
									'abbreviation' => 'MMS',
	        					],
								[
		        					'name' => 'Kabupaten Mamuju',
									'code' => '76.02',
									'abbreviation' => 'MAM',
	        					],
								[
		        					'name' => 'Kabupaten Mamuju Tengah',
									'code' => '76.06',
									'abbreviation' => 'TBD',
	        					],
								[
		        					'name' => 'Kabupaten Mamuju Utara',
									'code' => '76.01',
									'abbreviation' => 'PKY',
	        					],
								[
		        					'name' => 'Kabupaten Polewali Mandar',
									'code' => '76.04',
									'abbreviation' => 'PLW',
	        					],
	        				],
	        			],
						[
							'name' => 'Sulawesi Selatan',
							'code' => '73',
	        				'abbreviation' => 'Sulsel',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bantaeng',
									'code' => '73.03',
									'abbreviation'=> 'BAN',
	        					],
								[
		        					'name' => 'Kabupaten Barru',
									'code' => '73.11',
									'abbreviation' => 'BAR',
	        					],
								[
		        					'name' => 'Kabupaten Bone',
									'code' => '73.08',
									'abbreviation' => 'WTP',
	        					],
								[
		        					'name' => 'Kabupaten Bulukumba',
									'code' => '73.02',
									'abbreviation' => 'BLK',
	        					],
								[
		        					'name' => 'Kabupaten Enrekang',
									'code' => '73.16',
									'abbreviation' => 'ENR',
	        					],
								[
		        					'name' => 'Kabupaten Gowa',
									'code' => '73.06',
									'abbreviation' => 'SGM',
	        					],
								[
		        					'name' => 'Kabupaten Jeneponto',
									'code' => '73.04',
									'abbreviation' => 'JNP',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Selayar',
									'code' => '73.01',
									'abbreviation' => 'BEN',
	        					],
								[
		        					'name' => 'Kabupaten Luwu',
									'code' => '73.17',
									'abbreviation' => 'PLP',
	        					],
								[
		        					'name' => 'Kabupaten Luwu Timur',
									'code' => '73.24',
									'abbreviation' => 'MLL',
	        					],
								[
		        					'name' => 'Kabupaten Luwu Utara',
									'code' => '73.22',
									'abbreviation' => 'MSB',
	        					],
								[
		        					'name' => 'Kabupaten Maros',
									'code' => '73.09',
									'abbreviation' => 'MRS',
	        					],
								[
		        					'name' => 'Kabupaten Pangkajene Dan Kepulauan',
									'code' => '73.10',
									'abbreviation' => 'PKJ',
	        					],
								[
		        					'name' => 'Kabupaten Pinrang',
									'code' => '73.15',
									'abbreviation' => 'PIN',
	        					],
								[
		        					'name' => 'Kabupaten Sidenreng Rappang',
									'code' => '73.14',
									'abbreviation' => 'SDR',
	        					],
								[
		        					'name' => 'Kabupaten Sinjai',
									'code' => '73.07',
									'abbreviation' => 'SNJ',
	        					],
								[
		        					'name' => 'Kabupaten Soppeng',
									'code' => '73.12',
									'abbreviation' => 'WNS',
	        					],
								[
		        					'name' => 'Kabupaten Takalar',
									'code' => '73.05',
									'abbreviation' => 'TKA',
	        					],
								[
		        					'name' => 'Kabupaten Tana Toraja',
									'code' => '73.18',
									'abbreviation' => 'MAK',
	        					],
								[
		        					'name' => 'Kabupaten Toraja Utara',
									'code' => '73.26',
									'abbreviation' => 'RTP',
	        					],
								[
		        					'name' => 'Kabupaten Wajo',
									'code' => '73.13',
									'abbreviation' => 'SKG',
	        					],
								[
		        					'name' => 'Kota Makassar',
									'code' => '73.71',
									'abbreviation' => 'MKS',
	        					],
								[
		        					'name' => 'Kota Palopo',
									'code' => '73.73',
									'abbreviation' => 'PLP',
	        					],
								[
		        					'name' => 'Kota Parepare',
									'code' => '73.72',
									'abbreviation' => 'PRE',
	        					],
	        				],
	        			],
						[
							'name' => 'Sulawesi Tengah',
							'code' => '72',
	        				'abbreviation' => 'Sulteng',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Banggai',
									'code' => '72.01',
									'abbreviation' => 'LWK',
	        					],
								[
		        					'name' => 'Kabupaten Banggai Kepulauan',
									'code' => '72.07',
									'abbreviation' => 'SKN',
	        					],
								[
		        					'name' => 'Kabupaten Banggai Laut',
									'code' => '72.11',
									'abbreviation' => 'BGI',
	        					],
								[
		        					'name' => 'Kabupaten Buol',
									'code' => '72.05',
									'abbreviation' => 'BUL',
	        					],
								[
		        					'name' => 'Kabupaten Donggala',
									'code' => '72.03',
									'abbreviation' => 'DGL',
	        					],
								[
		        					'name' => 'Kabupaten Morowali',
									'code' => '72.06',
									'abbreviation' => 'BGK',
	        					],
								[
		        					'name' => 'Kabupaten Morowali Utara',
									'code' => '72.12',
									'abbreviation' => 'KLD',
	        					],
								[
		        					'name' => 'Kabupaten Parigi Moutong',
									'code' => '72.08',
									'abbreviation' => 'PRG',
	        					],
								[
		        					'name' => 'Kabupaten Poso',
									'code' => '72.02',
									'abbreviation' => 'PSO',
	        					],
								[
		        					'name' => 'Kabupaten Sigi',
									'code' => '72.10',
									'abbreviation' => 'SGB',
	        					],
								[
		        					'name' => 'Kabupaten Tojo Una-Una',
									'code' => '72.09',
									'abbreviation' => 'APN',
	        					],
								[
		        					'name' => 'Kabupaten Toli-Toli',
									'code' => '72.04',
									'abbreviation' => 'TLI',
	        					],
								[
		        					'name' => 'Kota Palu',
									'code' => '72.71',
									'abbreviation' => 'PAL',
	        					],
	        				],
	        			],
						[
							'name' => 'Sulawesi Tenggara',
							'code' => '74',
	        				'abbreviation' => 'Sultra',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bombana',
									'code' => '74.06',
									'abbreviation' => 'RMB',
	        					],
								[
		        					'name' => 'Kabupaten Buton',
									'code' => '74.04',
									'abbreviation' => 'PSW',
	        					],
								[
		        					'name' => 'Kabupaten Buton Selatan',
									'code' => '74.15',
									'abbreviation' => 'BGA',
	        					],
								[
		        					'name' => 'Kabupaten Buton Tengah',
									'code' => '74.14',
									'abbreviation' => 'LBK',
	        					],
								[
		        					'name' => 'Kabupaten Buton Utara',
									'code' => '74.10',
									'abbreviation' => 'BNG',
	        					],
								[
		        					'name' => 'Kabupaten Kolaka',
									'code' => '74.01',
									'abbreviation' => 'KKA',
	        					],
								[
		        					'name' => 'Kabupaten Kolaka Timur',
									'code' => '74.11',
									'abbreviation' => 'TWT',
	        					],
								[
		        					'name' => 'Kabupaten Kolaka Utara',
									'code' => '74.08',
									'abbreviation' => 'LSS',
	        					],
								[
		        					'name' => 'Kabupaten Konawe',
									'code' => '74.02',
									'abbreviation' => 'UNH',
	        					],
								[
		        					'name' => 'Kabupaten Konawe Kepulauan',
									'code' => '74.12',
									'abbreviation' => 'LGR',
	        					],
								[
		        					'name' => 'Kabupaten Konawe Selatan',
									'code' => '74.05',
									'abbreviation' => 'ADL',
	        					],
								[
		        					'name' => 'Kabupaten Konawe Utara',
									'code' => '74.09',
									'abbreviation' => 'WGD',
	        					],
								[
		        					'name' => 'Kabupaten Muna',
									'code' => '74.03',
									'abbreviation' => 'RAH',
	        					],
								[
		        					'name' => 'Kabupaten Muna Barat',
									'code' => '74.13',
									'abbreviation' => 'LWR',
	        					],
								[
		        					'name' => 'Kabupaten Wakatobi',
									'code' => '74.07',
									'abbreviation' => 'WGW',
	        					],
								[
		        					'name' => 'Kota Baubau',
									'code' => '74.72',
									'abbreviation' => 'BAU',
	        					],
								[
		        					'name' => 'Kota Kendari',
									'code' => '74.71',
									'abbreviation' => 'KDI',
	        					],
	        				],
	        			],
						[
							'name' => 'Sulawesi Utara',
							'code' => '71',
	        				'abbreviation' => 'Sulut',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bolaang Mongondow',
									'code' => '71.01',
									'abbreviation' => 'LLK',
	        					],
								[
		        					'name' => 'Kabupaten Bolaang Mongondow Selatan',
									'code' => '71.11',
									'abbreviation' => 'BLU',
	        					],
								[
		        					'name' => 'Kabupaten Bolaang Mongondow Timur',
									'code' => '71.10',
									'abbreviation' => 'TTY',
	        					],
								[
		        					'name' => 'Kabupaten Bolaang Mongondow Utara',
									'code' => '71.08',
									'abbreviation' => 'BRK',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Sangihe',
									'code' => '71.03',
									'abbreviation' => 'THN',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Talaud',
									'code' => '71.04',
									'abbreviation' => 'MGN',
	        					],
								[
		        					'name' => 'Kabupaten Minahasa',
									'code' => '71.02',
									'abbreviation' => 'TNN',
	        					],
								[
		        					'name' => 'Kabupaten Minahasa Selatan',
									'code' => '71.05',
									'abbreviation' => 'AMR',
	        					],
								[
		        					'name' => 'Kabupaten Minahasa Tenggara',
									'code' => '71.07',
									'abbreviation' => 'RTN',
	        					],
								[
		        					'name' => 'Kabupaten Minahasa Utara',
									'code' => '71.06',
									'abbreviation' => 'ARM',
	        					],
								[
		        					'name' => 'Kabupaten Siau Tagulandang Biaro',
									'code' => '71.09',
									'abbreviation' => 'ODS',
	        					],
								[
		        					'name' => 'Kota Bitung',
									'code' => '71.72',
									'abbreviation' => 'BIT',
	        					],
								[
		        					'name' => 'Kota Kotamobagu',
									'code' => '71.74',
									'abbreviation' => 'KTG',
	        					],
								[
		        					'name' => 'Kota Manado',
									'code' => '71.71',
									'abbreviation' => 'MND',
	        					],
								[
		        					'name' => 'Kota Tomohon',
									'code' => '71.73',
									'abbreviation' => 'TMH',
	        					],
	        				],
	        			],
	        		]
        		],
        	],
        	[
        		'island' => [
        			'name' => 'Sumatera',
					'code' => '10',
	        		'provinces' => [
	        			[
							'name' => 'Aceh',
							'code' => '11',
	        				'abbreviation' => 'Aceh',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Aceh Barat',
									'code' => '11.05',
									'abbreviation' => 'MBO',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Barat Daya',
									'code' => '11.12',
									'abbreviation' => 'BPD',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Besar',
									'code' => '11.06',
									'abbreviation' => 'JTH',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Jaya',
									'code' => '11.14',
									'abbreviation' => 'CAG',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Selatan',
									'code' => '11.01',
									'abbreviation' => 'TTN',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Singkil',
									'code' => '11.10',
									'abbreviation' => 'SKL',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Tamiang',
									'code' => '11.16',
									'abbreviation' => 'KRB',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Tengah',
									'code' => '11.04',
									'abbreviation' => 'TKN',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Tenggara',
									'code' => '11.02',
									'abbreviation' => 'KTN',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Timur',
									'code' => '11.03',
									'abbreviation' => 'LGS',
	        					],
								[
		        					'name' => 'Kabupaten Aceh Utara',
									'code' => '11.08',
									'abbreviation' => 'LSK',
	        					],
								[
		        					'name' => 'Kabupaten Bener Meriah',
									'code' => '11.17',
									'abbreviation'=> 'STR',
	        					],
								[
		        					'name' => 'Kabupaten Bireuen',
									'code' => '11.11',
									'abbreviation' => 'BIR',
	        					],
								[
		        					'name' => 'Kabupaten Gayo Lues',
									'code' => '11.13',
									'abbreviation' => 'BKJ',
	        					],
								[
		        					'name' => 'Kabupaten Nagan Raya',
									'code' => '11.15',
									'abbreviation' => 'SKM',
	        					],
								[
		        					'name' => 'Kabupaten Pidie',
									'code' => '11.07',
									'abbreviation' => 'SGI',
	        					],
								[
		        					'name' => 'Kabupaten Pidie Jaya',
									'code' => '11.18',
									'abbreviation' => 'MRN',
	        					],
								[
		        					'name' => 'Kabupaten Simeulue',
									'code' => '11.09',
									'abbreviation' => 'SNB',
	        					],
								[
		        					'name' => 'Kota Banda Aceh',
									'code' => '11.71',
									'abbreviation' => 'BNA',
	        					],
								[
		        					'name' => 'Kota Langsa',
									'code' => '11.74',
									'abbreviation' => 'LGS',
	        					],
								[
		        					'name' => 'Kota Lhokseumawe',
									'code' => '11.73',
									'abbreviation' => 'LSM',
	        					],
								[
		        					'name' => 'Kota Sabang',
									'code' => '11.72',
									'abbreviation' => 'SAB',
	        					],
								[
		        					'name' => 'Kota Subulussalam',
									'code' => '11.75',
									'abbreviation' => 'SUS',
	        					],
	        				],
	        			],
						[
							'name' => 'Bengkulu',
							'code' => '17',
	        				'abbreviation' => 'Bengkulu',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bengkulu Selatan',
									'code' => '17.01',
									'abbreviation' => 'MNA',
	        					],
								[
		        					'name' => 'Kabupaten Bengkulu Tengah',
									'code' => '17.09',
									'abbreviation' => 'KRT',
	        					],
								[
		        					'name' => 'Kabupaten Bengkulu Utara',
									'code' => '17.03',
									'abbreviation' => 'AGM',
	        					],
								[
		        					'name' => 'Kabupaten Kaur',
									'code' => '17.04',
									'abbreviation' => 'BHN',
	        					],
								[
		        					'name' => 'Kabupaten Kepahiang',
									'code' => '17.08',
									'abbreviation' => 'KPH',
	        					],
								[
		        					'name' => 'Kabupaten Lebong',
									'code' => '17.07',
									'abbreviation' => 'TUB',
	        					],
								[
		        					'name' => 'Kabupaten Mukomuko',
									'code' => '17.06',
									'abbreviation' => 'MKM',
	        					],
								[
		        					'name' => 'Kabupaten Rejang Lebong',
									'code' => '17.02',
									'abbreviation' => 'CRP',
	        					],
								[
		        					'name' => 'Kabupaten Seluma',
									'code' => '17.05',
									'abbreviation' => 'TAS',
	        					],
								[
		        					'name' => 'Kota Bengkulu',
									'code' => '17.71',
									'abbreviation' => 'BGL',
	        					],
	        				],
	        			],
						[
							'name' => 'Jambi',
							'code' => '15',
	        				'abbreviation' => 'Jambi',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Batang Hari',
									'code' => '15.04',
									'abbreviation' => 'MBN',
	        					],
								[
		        					'name' => 'Kabupaten Bungo',
									'code' => '15.08',
									'abbreviation' => 'MRB',
	        					],
								[
		        					'name' => 'Kabupaten Kerinci',
									'code' => '15.01',
									'abbreviation' => 'SPN',
	        					],
								[
		        					'name' => 'Kabupaten Merangin',
									'code' => '15.02',
									'abbreviation' => 'BKO',
	        					],
								[
		        					'name' => 'Kabupaten Muaro Jambi',
									'code' => '15.05',
									'abbreviation'=> 'SNT',
	        					],
								[
		        					'name' => 'Kabupaten Sarolangun',
									'code' => '15.03',
									'abbreviation' => 'SRL',
	        					],
								[
		        					'name' => 'Kabupaten Tanjung Jabung Barat',
									'code' => '15.06',
									'abbreviation' => 'KLT',
	        					],
								[
		        					'name' => 'Kabupaten Tanjung Jabung Timur',
									'code' => '15.07',
									'abbreviation' => 'MSK',
	        					],
								[
		        					'name' => 'Kabupaten Tebo',
									'code' => '15.09',
									'abbreviation' => 'MRT',
	        					],
								[
		        					'name' => 'Kota Jambi',
									'code' => '15.71',
									'abbreviation' => 'JMB',
	        					],
								[
		        					'name' => 'Kota Sungai Penuh',
									'code' => '15.72',
									'abbreviation' => 'SPN',
	        					],
	        				],
	        			],
						[
							'name' => 'Kepulauan Bangka Belitung',
							'code' => '19',
	        				'abbreviation' => 'B. Belitung',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bangka',
									'code' => '19.01',
									'abbreviation' => 'SGL',
	        					],
								[
		        					'name' => 'Kabupaten Bangka Barat',
									'code' => '19.05',
									'abbreviation' => 'MTK',
	        					],
								[
		        					'name' => 'Kabupaten Bangka Selatan',
									'code' => '19.03',
									'abbreviation' => 'TBL',
	        					],
								[
		        					'name' => 'Kabupaten Bangka Tengah',
									'code' => '19.04',
									'abbreviation' => 'KBA',
	        					],
								[
		        					'name' => 'Kabupaten Belitung',
									'code' => '19.02',
									'abbreviation' => 'TDN',
	        					],
								[
		        					'name' => 'Kabupaten Belitung Timur',
									'code' => '19.06',
									'abbreviation' => 'MGR',
	        					],
								[
		        					'name' => 'Kota Pangkal Pinang',
									'code' => '19.71',
									'abbreviation' => 'PGP',
	        					],
	        				],
	        			],
						[
							'name' => 'Kepulauan Riau',
							'code' => '21',
	        				'abbreviation' => 'Kp. Riau',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bintan',
									'code' => '21.01',
									'abbreviation' => 'BSB',
	        					],
	        					[
		        					'name' => 'Kabupaten Karimun',
									'code' => '21.02',
									'abbreviation' => 'TBK',
	        					],
	        					[
		        					'name' => 'Kabupaten Kepulauan Anambas',
									'code' => '21.05',
									'abbreviation' => 'TRP',
	        					],
	        					[
		        					'name' => 'Kabupaten Lingga',
									'code' => '21.04',
									'abbreviation' => 'DKL',
	        					],
	        					[
		        					'name' => 'Kabupaten Natuna',
									'code' => '21.03',
									'abbreviation' => 'RAN',
	        					],
	        					[
		        					'name' => 'Kota Batam',
									'code' => '21.71',
									'abbreviation' => 'BTM',
	        					],
	        					[
		        					'name' => 'Kota Tanjung Pinang',
									'code' => '21.72',
									'abbreviation' => 'TPG',
	        					],
	        				],
	        			],
						[
							'name' => 'Lampung',
							'code' => '18',
	        				'abbreviation' => 'Lampung',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Lampung Barat',
									'code' => '18.04',
									'abbreviation' => 'LIW',
	        					],
								[
		        					'name' => 'Kabupaten Lampung Selatan',
									'code' => '18.01',
									'abbreviation' => 'KLA',
	        					],
								[
		        					'name' => 'Kabupaten Lampung Tengah',
									'code' => '18.02',
									'abbreviation' => 'GNS',
	        					],
								[
		        					'name' => 'Kabupaten Lampung Timur',
									'code' => '18.07',
									'abbreviation' => 'SDN',
	        					],
								[
		        					'name' => 'Kabupaten Lampung Utara',
									'code' => '18.03',
									'abbreviation' => 'KTB',
	        					],
								[
		        					'name' => 'Kabupaten Mesuji',
									'code' => '18.11',
									'abbreviation' => 'MSJ',
	        					],
								[
		        					'name' => 'Kabupaten Pesawaran',
									'code' => '18.09',
									'abbreviation' => 'GDT',
	        					],
								[
		        					'name' => 'Kabupaten Pesisir Barat',
									'code' => '18.13',
									'abbreviation' => 'KRU',
	        					],
								[
		        					'name' => 'Kabupaten Pringsewu',
									'code' => '18.10',
									'abbreviation' => 'PRW',
	        					],
								[
		        					'name' => 'Kabupaten Tanggamus',
									'code' => '18.06',
									'abbreviation' => 'KOT',
	        					],
								[
		        					'name' => 'Kabupaten Tulang Bawang Barat',
									'code' => '18.12',
									'abbreviation' => 'TWG',
	        					],
								[
		        					'name' => 'Kabupaten Tulangbawang',
									'code' => '18.05',
									'abbreviation' => 'MGL',
	        					],
								[
		        					'name' => 'Kabupaten Way Kanan',
									'code' => '18.08',
									'abbreviation' => 'BBU',
	        					],
								[
		        					'name' => 'Kota Bandar Lampung',
									'code' => '18.71',
									'abbreviation' => 'BDL',
	        					],
								[
		        					'name' => 'Kota Metro',
									'code' => '18.72',
									'abbreviation' => 'MET',
	        					],
	        				],
	        			],
						[
							'name' => 'Riau',
							'code' => '14',
	        				'abbreviation' => 'Riau',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Bengkalis',
									'code' => '14.03',
									'abbreviation' => 'BLS',
	        					],
								[
		        					'name' => 'Kabupaten Indragiri Hilir',
									'code' => '14.04',
									'abbreviation' => 'TBH',
	        					],
								[
		        					'name' => 'Kabupaten Indragiri Hulu',
									'code' => '14.02',
									'abbreviation' => 'RGT',
	        					],
								[
		        					'name' => 'Kabupaten Kampar',
									'code' => '14.01',
									'abbreviation' => 'BKN',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Meranti',
									'code' => '14.10',
									'abbreviation' => 'TTG',
	        					],
								[
		        					'name' => 'Kabupaten Kuantan Singingi',
									'code' => '14.09',
									'abbreviation' => 'TLK',
	        					],
								[
		        					'name' => 'Kabupaten Pelalawan',
									'code' => '14.05',
									'abbreviation' => 'PKK',
	        					],
								[
		        					'name' => 'Kabupaten Rokan Hilir',
									'code' => '14.07',
									'abbreviation' => 'UJT',
	        					],
								[
		        					'name' => 'Kabupaten Rokan Hulu',
									'code' => '14.06',
									'abbreviation' => 'PRP',
	        					],
								[
		        					'name' => 'Kabupaten Siak',
									'code' => '14.08',
									'abbreviation' => 'SAK',
	        					],
								[
		        					'name' => 'Kota Dumai',
									'code' => '14.72',
									'abbreviation' => 'DUM',
	        					],
								[
		        					'name' => 'Kota Pekanbaru',
									'code' => '14.71',
									'abbreviation' => 'PBR',
	        					],
	        				],
	        			],
						[
							'name' => 'Sumatera Barat',
							'code' => '13',
	        				'abbreviation' => 'Sumbar',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Agam',
									'code' => '13.06',
									'abbreviation' => 'LBB',
	        					],
								[
		        					'name' => 'Kabupaten Dharmasraya',
									'code' => '13.10',
									'abbreviation' => 'PLJ',
	        					],
								[
		        					'name' => 'Kabupaten Kepulauan Mentawai',
									'code' => '13.09',
									'abbreviation' => 'TPT',
	        					],
								[
		        					'name' => 'Kabupaten Lima Puluh Kota',
									'code' => '13.07',
									'abbreviation' => 'SRK',
	        					],
								[
		        					'name' => 'Kabupaten Padang Pariaman',
									'code' => '13.05',
									'abbreviation' => 'NPM',
	        					],
								[
		        					'name' => 'Kabupaten Pasaman',
									'code' => '13.08',
									'abbreviation' => 'LBS',
	        					],
								[
		        					'name' => 'Kabupaten Pasaman Barat',
									'code' => '13.12',
									'abbreviation' => 'SPE',
	        					],
								[
		        					'name' => 'Kabupaten Pesisir Selatan',
									'code' => '13.01',
									'abbreviation' => 'PNN',
	        					],
								[
		        					'name' => 'Kabupaten Sijunjung',
									'code' => '13.03',
									'abbreviation' => 'MRJ',
	        					],
								[
		        					'name' => 'Kabupaten Solok',
									'code' => '13.02',
									'abbreviation' => 'ARS',
	        					],
								[
		        					'name' => 'Kabupaten Solok Selatan',
									'code' => '13.11',
									'abbreviation' => 'PDA',
	        					],
								[
		        					'name' => 'Kabupaten Tanah Datar',
									'code' => '13.04',
									'abbreviation' => 'BSK',
	        					],
								[
		        					'name' => 'Kota Bukittinggi',
									'code' => '13.75',
									'abbreviation' => 'BKT',
	        					],
								[
		        					'name' => 'Kota Padang',
									'code' => '13.71',
									'abbreviation' => 'PAD',
	        					],
								[
		        					'name' => 'Kota Padang Panjang',
									'code' => '13.74',
									'abbreviation' => 'PDP',
	        					],
								[
		        					'name' => 'Kota Pariaman',
									'code' => '13.77',
									'abbreviation' => 'PMN',
	        					],
								[
		        					'name' => 'Kota Payakumbuh',
									'code' => '13.76',
									'abbreviation' => 'PYH',
	        					],
								[
		        					'name' => 'Kota Sawah Lunto',
									'code' => '13.73',
									'abbreviation' => 'SWL',
	        					],
								[
		        					'name' => 'Kota Solok',
									'code' => '13.72',
									'abbreviation' => 'SLK',
	        					],
	        				],
	        			],
						[
							'name' => 'Sumatera Selatan',
							'code' => '16',
	        				'abbreviation' => 'Sumsel',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Banyu Asin',
									'code' => '16.07',
									'abbreviation' => 'PKB',
	        					],
								[
		        					'name' => 'Kabupaten Empat Lawang',
									'code' => '16.11',
									'abbreviation' => 'TBG',
	        					],
								[
		        					'name' => 'Kabupaten Lahat',
									'code' => '16.04',
									'abbreviation' => 'LHT',
	        					],
								[
		        					'name' => 'Kabupaten Muara Enim',
									'code' => '16.03',
									'abbreviation' => 'MRE',
	        					],
								[
		        					'name' => 'Kabupaten Musi Banyuasin',
									'code' => '16.06',
									'abbreviation' => 'SKY',
	        					],
								[
		        					'name' => 'Kabupaten Musi Rawas',
									'code' => '16.05',
									'abbreviation' => 'MBL',
	        					],
								[
		        					'name' => 'Kabupaten Musi Rawas Utara',
									'code' => '16.13',
									'abbreviation' => 'RUP',
	        					],
								[
		        					'name' => 'Kabupaten Ogan Ilir',
									'code' => '16.10',
									'abbreviation' => 'IDL',
	        					],
								[
		        					'name' => 'Kabupaten Ogan Komering Ilir',
									'code' => '16.02',
									'abbreviation' => 'KAG',
	        					],
								[
		        					'name' => 'Kabupaten Ogan Komering Ulu',
									'code' => '16.01',
									'abbreviation' => 'BTA',
	        					],
								[
		        					'name' => 'Kabupaten Ogan Komering Ulu Selatan',
									'code' => '16.09',
									'abbreviation' => 'MRD',
	        					],
								[
		        					'name' => 'Kabupaten Ogan Komering Ulu Timur',
									'code' => '16.08',
									'abbreviation' => 'MPR',
	        					],
								[
		        					'name' => 'Kabupaten Penukal Abab Lematang Ilir',
									'code' => '16.12',
									'abbreviation' => 'TBI',
	        					],
								[
		        					'name' => 'Kota Lubuklinggau',
									'code' => '16.73',
									'abbreviation' => 'LLG',
	        					],
								[
		        					'name' => 'Kota Pagar Alam',
									'code' => '16.72',
									'abbreviation' => 'PGA',
	        					],
								[
		        					'name' => 'Kota Palembang',
									'code' => '16.71',
									'abbreviation' => 'PLG',
	        					],
								[
		        					'name' => 'Kota Prabumulih',
									'code' => '16.74',
									'abbreviation' => 'PBM',
	        					],
	        				],
	        			],
						[
							'name' => 'Sumatera Utara',
							'code' => '12',
	        				'abbreviation' => 'Sumut',
	        				'regencies' => [
	        					[
		        					'name' => 'Kabupaten Asahan',
									'code' => '12.09',
									'abbreviation' => 'KIS',
	        					],
								[
		        					'name' => 'Kabupaten Batu Bara',
									'code' => '12.19',
									'abbreviation' => 'LMP',
	        					],
								[
		        					'name' => 'Kabupaten Dairi',
									'code' => '12.11',
									'abbreviation' => 'SDK',
	        					],
								[
		        					'name' => 'Kabupaten Deli Serdang',
									'code' => '12.07',
									'abbreviation' => 'LBP',
	        					],
								[
		        					'name' => 'Kabupaten Humbang Hasundutan',
									'code' => '12.16',
									'abbreviation' => 'DLS',
	        					],
								[
		        					'name' => 'Kabupaten Karo',
									'code' => '12.06',
									'abbreviation' => 'KBJ',
	        					],
								[
		        					'name' => 'Kabupaten Labuhan Batu',
									'code' => '12.10',
									'abbreviation' => 'RAP',
	        					],
								[
		        					'name' => 'Kabupaten Labuhan Batu Selatan',
									'code' => '12.22',
									'abbreviation' => 'KPI',
	        					],
								[
		        					'name' => 'Kabupaten Labuhan Batu Utara',
									'code' => '12.23',
									'abbreviation' => 'AKK',
	        					],
								[
		        					'name' => 'Kabupaten Langkat',
									'code' => '12.05',
									'abbreviation' => 'STB',
	        					],
								[
		        					'name' => 'Kabupaten Mandailing Natal',
									'code' => '12.13',
									'abbreviation' => 'PYB',
	        					],
								[
		        					'name' => 'Kabupaten Nias',
									'code' => '12.04',
									'abbreviation' => 'GST',
	        					],
								[
		        					'name' => 'Kabupaten Nias Barat',
									'code' => '12.25',
									'abbreviation' => 'LHM',
	        					],
								[
		        					'name' => 'Kabupaten Nias Selatan',
									'code' => '12.14',
									'abbreviation' => 'TLD',
	        					],
								[
		        					'name' => 'Kabupaten Nias Utara',
									'code' => '12.24',
									'abbreviation' => 'LTU',
	        					],
								[
		        					'name' => 'Kabupaten Padang Lawas',
									'code' => '12.21',
									'abbreviation' => 'SBH',
	        					],
								[
		        					'name' => 'Kabupaten Padang Lawas Utara',
									'code' => '12.20',
									'abbreviation' => 'GNT',
	        					],
								[
		        					'name' => 'Kabupaten Pakpak Bharat',
									'code' => '12.15',
									'abbreviation' => 'SAL',
	        					],
								[
		        					'name' => 'Kabupaten Samosir',
									'code' => '12.17',
									'abbreviation' => 'PRR',
	        					],
								[
		        					'name' => 'Kabupaten Serdang Bedagai',
									'code' => '12.18',
									'abbreviation' => 'SRH',
	        					],
								[
		        					'name' => 'Kabupaten Simalungun',
									'code' => '12.08',
									'abbreviation' => 'PMS',
	        					],
								[
		        					'name' => 'Kabupaten Tapanuli Selatan',
									'code' => '12.03',
									'abbreviation' => 'PSP',
	        					],
								[
		        					'name' => 'Kabupaten Tapanuli Tengah',
									'code' => '12.01',
									'abbreviation' => 'SBG',
	        					],
								[
		        					'name' => 'Kabupaten Tapanuli Utara',
									'code' => '12.02',
									'abbreviation' => 'TRT',
	        					],
								[
		        					'name' => 'Kabupaten Toba Samosir',
									'code' => '12.12',
									'abbreviation' => 'BLG',
	        					],
								[
		        					'name' => 'Kota Binjai',
									'code' => '12.75',
									'abbreviation' => 'BNJ',
	        					],
								[
		        					'name' => 'Kota Gunungsitoli',
									'code' => '12.78',
									'abbreviation' => 'GST',
	        					],
								[
		        					'name' => 'Kota Medan',
									'code' => '12.71',
									'abbreviation' => 'MDN',
	        					],
								[
		        					'name' => 'Kota Padangsidimpuan',
									'code' => '12.77',
									'abbreviation' => 'PSP',
	        					],
								[
		        					'name' => 'Kota Pematang Siantar',
									'code' => '12.72',
									'abbreviation' => 'PMS',
	        					],
								[
		        					'name' => 'Kota Sibolga',
									'code' => '12.73',
									'abbreviation' => 'SBG',
	        					],
								[
		        					'name' => 'Kota Tanjung Balai',
									'code' => '12.74',
									'abbreviation' => 'TJB',
	        					],
								[
		        					'name' => 'Kota Tebing Tinggi',
									'code' => '12.76',
									'abbreviation' => 'TBT',
	        					],
	        				],
	        			],
	        		]
        		],
			],
        ];

		collect($areas)->each(function ($area) {
			$island = \App\Island::firstOrCreate([
				'name' => $area['island']['name'],
				'code' => $area['island']['code'],
			]);
			collect($area['island']['provinces'])->each(function ($provinces) use ($island) {
        		$province = $island->provinces()->firstOrCreate([
					'name' => $provinces['name'],
					'code' => $provinces['code'],
        			'abbreviation' => $provinces['abbreviation'],
				]);
				collect($provinces['regencies'])->each(function ($regency) use ($province) {
        			$province->regencies()->firstOrCreate([
        				'name' => $regency['name'],
						'code' => $regency['code'],
						'abbreviation' => $regency['abbreviation']
        			]);
				});
			});
		});
    }
}
