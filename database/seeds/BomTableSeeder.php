<?php

use Illuminate\Database\Seeder;

class BomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {				
    	DB::table('bom')->truncate();

		DB::table('bom')->insert( [
		'material_code'=>'PE11001',
		'description'=>'Bolt, Machine 5/8 in. x 4 in. Full Thread / 10cm',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE11003',
		'description'=>'Bolt, Machine 5/8 in. x 6 in. Full Thread / 15cm',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE11004',
		'description'=>'Bolt, Machine 5/8 in. x 8 in. Full Thread / 20cm',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE11027',
		'description'=>'Nut, Square 5/8 in.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE11030',
		'description'=>'Nut, IMC Loknut & Bushing 50mm dia',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE11073',
		'description'=>'Bolt with Nut, 1 1/2 in.x 3/8 in. ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE11074',
		'description'=>'Eyebolt',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12004',
		'description'=>'Clamp, Pole, CA Type 5/8 in. x 8 in.- 10 in., w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12006',
		'description'=>'Clamp, Pole, CA Type 5/8 in. x 10 in. - 12 in., w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12011',
		'description'=>'Clamp, Pole, CA Type 5/8 in. x 6 in. - 8 in., w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12014',
		'description'=>'Clamp, Pole, CA Type 5/8 in. x 12 in. - 14 in., w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12016',
		'description'=>'Clamp, Pole, DEG Type 5/8 in. x 6 in. - 8 in., w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12020',
		'description'=>'Clamp, Pole, DEG Type 5/8 in. x 10 in. - 12 in. w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12021',
		'description'=>'Clamp, Pole, DEG Type 5/8 in. x 12 in. - 14 in., w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE12026',
		'description'=>'Clamp, Pole, DEG Type 5/8 in. x 8 in. - 10 in., w/ Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE14005',
		'description'=>'Guy Grip, 5/16 in., Black',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE14008',
		'description'=>'Spacer, Thimble Guy 3/8 in.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE14011',
		'description'=>'Guy Grip 1/7 in. (China)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE15001',
		'description'=>'Rod, Grounding 1/2 in. x 6 ft  (1.27cm x 1.82M)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE15008',
		'description'=>'Ground Strand Clamp (Top Set)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE15009',
		'description'=>'Ground Rod Clamp (Bottom Set)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE16001',
		'description'=>'Wire, Lashing 1.2mm x 190M/roll',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE16002',
		'description'=>'Wire, Messenger 5/16 in.',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE17001',
		'description'=>'Suspension Clamp, Straight',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE17002',
		'description'=>'Clamp, Lashing Wire',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE17010',
		'description'=>'C-Clamp/ U-Clamp 2 holes 2 in. dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE18001',
		'description'=>'Concrete Poles, 7.5M (25ft), Class 7A (Round) - PLDT Standard',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE18004',
		'description'=>'Concrete Poles, 9.0M (30ft), Class 7A (Round) - PLDT Standard',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE18006',
		'description'=>'Concrete Poles, 7.5M (25ft), Class 9 (Round) - PLDT Standard',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE18007',
		'description'=>'Concrete Poles, 9.0M (30ft), Class 9 (Round) - PLDT Standard',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19002',
		'description'=>'Metal, U-Guard, 4 3/16 in. x 8ft',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19003',
		'description'=>'Cable Loop Holder (X Frame PLDT-SMART)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19007',
		'description'=>'Wall Strap, Loop typem, HDG, 16mm  dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19012',
		'description'=>'J-Hook with Square Nut (Facing Right)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19014',
		'description'=>'Bridle Ring-(NEW)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19020',
		'description'=>'Full Thread Bar 3/8 in. dia. x 3m.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19021',
		'description'=>'Grip Anchor 3/8 in.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19022',
		'description'=>'Nut & Washer for Full Thread Bar 3/8 in.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE19023',
		'description'=>'Clevis Hanger Loop 2 in.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE21002',
		'description'=>'LCP with 1 x 8 splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE21006',
		'description'=>'NAP with 1 x 8 splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE21007',
		'description'=>'NAP Box Only',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE22001',
		'description'=>'FOC, Figure 8 Semi-dry Cable (24F)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE22003',
		'description'=>'FOC, 72-Core Loose Tube Duct Cable, Traditional ',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE22005',
		'description'=>'FOC, 216 Fiber Loose Tube Cable, Traditional ',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE22008',
		'description'=>'FOC, 72 core, FIGURE 8',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE22014',
		'description'=>'FOC, 144 Fiber Loose Tube Cable, Traditional?',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE22015',
		'description'=>'FOC, 24-Core Loose Tube Duct Cable, Traditional ',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE23008',
		'description'=>'Joint Closure, 144F',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE23012 ',
		'description'=>'Joint Closure (72F) mechanical duct',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31003',
		'description'=>'Pipe, IMC 2 in. dia. x 3M',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31008',
		'description'=>'Pipe, PVC for Spiralling (black)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31009',
		'description'=>'Pipe, PVC 4 in. dia. x 6m (Yellow)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31010',
		'description'=>'Pipe, PVC 4 in. dia. x 90deg. Elbow (114.3mm) x 1m Radius',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31015',
		'description'=>'Pipe, HDPE SDR 11 x 50mm x  200M/roll (Black)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31019',
		'description'=>'Flexible Metal Conduit, 2 in. dia.',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31024',
		'description'=>'Pipe, HDPE SDR 11 x 50mm x  200M/roll (Yellow)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31028',
		'description'=>'Pipe, PVC 50mm dia.',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31030',
		'description'=>'Riser Steel Pipe (GI); 4 in. Dia x 10) 114mm x 3.05m',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31033',
		'description'=>'Pipe, EMT 50mm dia. x 3M (2 in.)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31039',
		'description'=>'Pipe, HDPE SDR 13.5 x 50mm x 200M/roll (Yellow)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31040',
		'description'=>'Pipe, HDPE SDR 13.5 x 50mm x 200M/roll (Black)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE31041',
		'description'=>'Pipe, HDPE SDR 13.5 x 32mm x 200M/roll (Yellow)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32002',
		'description'=>'Coupling, Compression HDPE, 2 in. dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32004',
		'description'=>'Elbow, Pipe EMT 50mm dia. x 90Deg x 1 meter radius',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32006',
		'description'=>'Coupling, IMC 2 in. dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32007',
		'description'=>'Pipe Elbow,IMC 2 in. X 90 deg x 0.5M Radius (long elbow)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32009',
		'description'=>'End Bell, PVC 2 in. dia. x 50mm x 6 in. (Orange - Special Fab)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32010',
		'description'=>'End Cap, PVC 4 in. dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32011',
		'description'=>'End Bell, PVC 4 in. dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32013',
		'description'=>'Straight Connector w/ Nut (for 2 in. Liquid Tight Flexible Metal Conduit)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32016',
		'description'=>'Coupling, EMT 2 in. dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32018',
		'description'=>'Coupling, PVC 2 in. dia.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32019',
		'description'=>'Elbow, Pipe PVC 50mm dia. x 90Deg x 1 meter radius',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE32021',
		'description'=>'Elbow, Pipe IMC 50mm dia. x 90Deg x 1 meter radius',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE33003',
		'description'=>'Duct Plug, Simplex, 50mm',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE33017',
		'description'=>'Mechanical Duct Plug (3/4 in.)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE41001',
		'description'=>'Buckle, Stainless Steel 5/8 in.',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE41008',
		'description'=>'Strap, Stainless Steel 5/8 in.',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE42001',
		'description'=>'Cable Tie, Plastic 250mm (Yellow)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE42002',
		'description'=>'Cable Tie, Plastic 12 in. (Black)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE44003',
		'description'=>'Pull Box, 300mm x 300mm x 100mm',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE44009',
		'description'=>'Junction Box (Utility, Box 2 in. x 4 in. G.A 18-B Deep) ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE44010',
		'description'=>'Junction Box 8 in.x8 in.x4.5 in. (200m x 200m x 100m)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE51002',
		'description'=>'Electrical tape (3M)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE51004',
		'description'=>'Entrance Cap 50 mm',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE51049',
		'description'=>'Weather Head Cap, 4 in. (G.I.)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE51050',
		'description'=>'G.I. Cable Tray (300mm x 100mm)',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE51051',
		'description'=>'Cable Ladder 300mm wide',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE64009',
		'description'=>'Cable Loop Holder (Scissor Type)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE64012',
		'description'=>'Clamp, Pole, DEG Type 5/8 in. x 8 in. - 10 in., w/ 15cm  Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE64013',
		'description'=>'Clamp, Pole, CA Type 5/8 in. x 8 in. - 10 in., w/ 15cm  Bolts and Nuts',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE64013',
		'description'=>'',
		'unit'=>''
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE64015',
		'description'=>'Cable Loop Holder (X-Frame China)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85005',
		'description'=>'ODF 24 CORE',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85045',
		'description'=>'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 5M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85046',
		'description'=>'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 10M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85047',
		'description'=>'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 15M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85048',
		'description'=>'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 20M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85049',
		'description'=>'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 25M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85050',
		'description'=>'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 30M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85051',
		'description'=>'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 15M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85052',
		'description'=>'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 20M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85057',
		'description'=>'216F Closure',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85058',
		'description'=>'216F ODF(Optical Distribution Frame)',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85059',
		'description'=>'24 Closure (MECHANICAL)',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85060',
		'description'=>'19 in. ODF Rack (4 post) Collapsible (45RU 600mm x 600mm) 2142.9mm H',
		'unit'=>'unit'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85074',
		'description'=>'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 10M ',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85075',
		'description'=>'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 30M',
		'unit'=>'pc/s'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85076',
		'description'=>'48F ODF Wall mounted',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85077',
		'description'=>'NAP Box with 1*1:8 Cassette? Splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85078',
		'description'=>'NAP Box with 2*1:8 Cassette? Splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85079',
		'description'=>'LCP Box with 1*1:8 Cassette? Splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85080',
		'description'=>'LCP Box with 2*1:8 Cassette? Splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85081',
		'description'=>'Tie cable-216F',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85082',
		'description'=>'Pull-back Cable-48F',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85083',
		'description'=>'Pull-back Cable-24F',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85084',
		'description'=>'LCP with 1 x 4 splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85100',
		'description'=>'Mini NAP Box with 1:8 Micro  Splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85106',
		'description'=>'24F ODF Wall mounted',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85107',
		'description'=>'NAP Box with 4*1:8 Cassette  Splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85108',
		'description'=>'LCP Box with 4*1:8 Cassette   Splitter',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'PE85109',
		'description'=>'1-Fiber Fig 8 Drop Cable',
		'unit'=>'meter'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'n/a',
		'description'=>'SIDEWALK, SIDE GUY WITH ANCHOR',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'n/a',
		'description'=>'DOWN SIDE GUY',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'n/a',
		'description'=>'26 in. EXTENSION ARM',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'n/a',
		'description'=>'44.5 in. EXTENSION ARM',
		'unit'=>'set'
		] );


					
		DB::table('bom')->insert( [
		'material_code'=>'n/a',
		'description'=>'10 PIN ALLEY ARM',
		'unit'=>'set'
		] );
    }
}
