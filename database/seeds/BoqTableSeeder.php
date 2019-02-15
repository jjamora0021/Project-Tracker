<?php

use Illuminate\Database\Seeder;

class BoqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('boq')->truncate();

        DB::table('boq')->insert( [
		'control_number'=>1,
		'description'=>'AERIAL CABLE RELATED OSP INSTALLATIONS',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>101,
		'description'=>'POLES AND ACCESSORIES\nIncludes supply and/or installation aluminum pole tag, stainless straps and buckles, excavation, pole setting, backfill and compaction, haulage & disposal of surplus soil, breaking & restoration of pavement, concrete base or ground brace as may be necessary.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10101,
		'description'=>'Pole, Creosoted,  7.62m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10102,
		'description'=>'Pole, Creosoted,  9.14m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10103,
		'description'=>'Pole, Concrete,   7.5m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10104,
		'description'=>'Pole, Concrete,   7.62m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10105,
		'description'=>'Pole, Concrete,   9.14m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10106,
		'description'=>'Pole, Concrete,  10.67m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10107,
		'description'=>'Pole, Concrete,  12.19m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10108,
		'description'=>'Pole, Steel,   7.62m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10109,
		'description'=>'Pole, Steel,   9.14m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>102,
		'description'=>'GUYING FIXTURES\nApplicable to both concrete, steel, or wood poles: Includes supply & installation of messenger wire, fixtures, guy grips, guy grip spacers, strain insulators, suspension clamps, pole clamps, nut thimble eyes, washers, guy protectors, bolts & nuts and other necessary hardwares and tensioning (Note: Side guys or Sidewalk guys shall include reinforcing link assembly)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10201,
		'description'=>'Head Guy,   6 M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10202,
		'description'=>'Head Guy,  10 M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10203,
		'description'=>'Side Guy,   6 M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10204,
		'description'=>'Side Guy,  10 M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10205,
		'description'=>'Double Side Guy,  6M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10206,
		'description'=>'Double Side Guy, 10 M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10207,
		'description'=>'Side Walk Guy, 6 M (Includes extension arm fixtures)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10208,
		'description'=>'Side Walk Guy, 10 M  (Includes extension arm fixtures)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10209,
		'description'=>'Sidewalk Head Guy, 6 M (Includes extension arm fixtures)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10210,
		'description'=>'Sidewalk Head Guy, 10 M (Includes extension arm fixtures)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10211,
		'description'=>'Pole to Pole,  6 M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10212,
		'description'=>'Pole to Pole, 10 M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10213,
		'description'=>'Pole to Pole, Side Guy,  6M (Cable on road side)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10214,
		'description'=>'Pole to Pole, Side Guy,  10 M (Cable on road side)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10215,
		'description'=>'Pole to Pole, Sidewalk Guy,  6M (Cable on road side)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10216,
		'description'=>'Pole to Pole, Sidewalk Guy,  10 M (Cable on road side)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>103,
		'description'=>'ANCHORS\nIncludes supply & installation of anchor rod,concrete block, washer and nuts, fixtures, machine bolts, breaking/restoration of pavement, excavation, safety requirements, backfill compaction, haulage & disposal of surplus soil, cleaning of site',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10301,
		'description'=>'Concrete Block: Hard Earth, 5/8\" x 6\' rod',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10302,
		'description'=>'Concrete Block: Hard Earth For 5/8\" x 8\' rod',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10303,
		'description'=>'Concrete Block: Hard Earth For 3/4\" x 9\' rod',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>104,
		'description'=>'RISER GUARDS, G.I.\nIncludes supply & installation of 3-meter G.I. pipe, stainless straps and buckles (3/4\"W x 1/32\"T), U-Guard, Cable ID Marker, Rubber pipe caps or sealant, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10401,
		'description'=>'2\" dia. G.I. Riser Guard',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10402,
		'description'=>'3\" dia. G.I. Riser Guard',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10403,
		'description'=>'4\" dia. G.I. Riser Guard',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10404,
		'description'=>'Installation of  U-Guard @  Existing Riser Pipe',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>105,
		'description'=>'SUSPENSION & ARM HARDWARES\nIncludes installation accessories, fixtures, pole clamps, machine bolts & nut, braces, among others',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10501,
		'description'=>'Extension Arm, 26 (Excludes sidewalk guy requirement)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10502,
		'description'=>'Extension Arm, 26 (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10503,
		'description'=>'Extension Arm,44-1/2 (Excludes sidewalk guy req\'t.)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10504,
		'description'=>'Extension Arm, 44-1/2 (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10505,
		'description'=>'10-Pin Alley Arm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10506,
		'description'=>'10-Pin Alley Arm (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10507,
		'description'=>'Tubular Extension Arm, Single',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10508,
		'description'=>'Tubular Extension Arm, Single (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10509,
		'description'=>'Tubular Extension Arm, Double',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10510,
		'description'=>'Tubular Extension Arm, Double (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10511,
		'description'=>'Straight Cable Suspension Clamp, 6M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10512,
		'description'=>'Straight Cable Suspension Clamp, 6M (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10513,
		'description'=>'Straight Cable Suspension Clamp, 6M to Existing Extension Arm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10514,
		'description'=>'Straight Cable Suspension Clamp, 10M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10515,
		'description'=>'Straight Cable Suspension Clamp, 10M (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10516,
		'description'=>'Straight Cable Suspension Clamp, 10M to Existing Extension Arm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10517,
		'description'=>'Curve Cable Suspension Clamp, 6M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10518,
		'description'=>'Curve Cable Suspension Clamp, 6M (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10519,
		'description'=>'Curve Cable Suspension Clamp, 10M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10520,
		'description'=>'Curve Cable Suspension Clamp, 10M (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10521,
		'description'=>'DEG type Clamp, 6M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10522,
		'description'=>'DEG type Clamp, 6M (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10523,
		'description'=>'DEG type Clamp, 10M',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10524,
		'description'=>'DEG type Clamp, 10M (Square, Rectangular, Large diameter Poles)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>106,
		'description'=>'AERIAL SUPPORT ON POLE\nIncludes supply and installation of cable spacer, cable support, and lashing clamp',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10601,
		'description'=>'Aerial Support on Pole (L=1/4\") - for fiber optic cable',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10602,
		'description'=>'Aerial Support on Pole (L=3/4\") - for copper cable',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>107,
		'description'=>'MESSENGER WIRE\nIncludes supply and installation of messenger wire, tensioning, strand link, bonding (strand to strand) and tree trimming as may be necessary ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10701,
		'description'=>'Messenger Wire 3/16\"/6M',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10702,
		'description'=>'Messenger Wire 5/16\"/6M',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10703,
		'description'=>'Messenger Wire 3/8\"/10M',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>108,
		'description'=>'GUY GRIP\nIncludes supply & installation of guy grip',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10801,
		'description'=>'Preformed Guy Grip 1/7\", 6m - for Fig.8 24F/48F/72F FOC',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10802,
		'description'=>'Preformed Guy Grip 3/16\", 6m - for Fig.8 144F/216F FOC',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10803,
		'description'=>'Preformed Guy Grip 5/16\", 6m - for new messenger wire 5/16\"',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10804,
		'description'=>'Preformed Guy Grip 3/8\", 10m - for new messenger wire 3/8\"',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>109,
		'description'=>'LASHING WIRE\nIncludes supply of stainless lashing wire only (labor inclusive in cable installation) Note: Measuring factor shall be 1.6 multiplied by cable length',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10901,
		'description'=>'Lashing Wire1.20mm - for lashing 72F/144F FOC',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>10902,
		'description'=>'Lashing Wire 1.57mm - for lashing 216F/288F FOC',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>110,
		'description'=>'PULL-OFF INSTALLATION\nIncludes supply and installation of clamps, nut thimble eye, machine bolts, guy grips and spacers, messenger wire, bonding (strand to strand) and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11001,
		'description'=>'Pull-off Installation 6M Messenger strand',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11002,
		'description'=>'Pull-off Installation 10M Messenger strand',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>111,
		'description'=>'CROSSOVER INSTALLATION\nIncludes supply and installation of clamps, machine bolts, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11101,
		'description'=>'Cross-Over Installation',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>112,
		'description'=>'CATENARY CONSTRUCTION\nIncludes supply and installation of clamps, machine bolts, guy grips and spacers, messenger wire, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11201,
		'description'=>'Catenary Construction',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>113,
		'description'=>'AERIAL FOC CABLE INSTALLATION\n- not including pole line hardwares\nIncludes lashing, supply and/or installation of FOC cable, testing, color coded marking tapes as may be required by JPA, spiral sleeves as may be necessary, and other necessary activities (Note: inclusive items other than the cable shall be embedded under labor cost. **)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11301,
		'description'=>'Traditional FOC, 12  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11302,
		'description'=>'Traditional FOC, 24  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11303,
		'description'=>'Traditional FOC, 48  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11304,
		'description'=>'Traditional FOC, 72  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11305,
		'description'=>'Traditional FOC, 96  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11306,
		'description'=>'Traditional FOC, 144  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11307,
		'description'=>'Traditional FOC, 216  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11308,
		'description'=>'Traditional FOC, 288  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11309,
		'description'=>'Fig. 8 FOC, 12  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11310,
		'description'=>'Fig. 8 FOC, 24  Fibers (3 Buffers; 8-Fibers)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11311,
		'description'=>'Fig. 8 FOC, 24  Fibers(4 Buffers; 6-Fibers)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11312,
		'description'=>'Fig. 8 FOC, 48  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11313,
		'description'=>'Fig. 8 FOC, 72  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11314,
		'description'=>'Fig. 8 FOC, 96  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11315,
		'description'=>'Fig. 8 FOC, 144  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11316,
		'description'=>'Fig. 8 FOC, 216  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11317,
		'description'=>'FOC Loop transfer',
		'unit'=>'/pole span'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>114,
		'description'=>'AERIAL FOC CABLE INSTALLATION\n- Including pole line hardwares(pole clamps, bolts, suspension and etc.)\nIncludes lashing, supply and/or installation of FOC cable, testing, color coded marking tapes as may be required by JPA, spiral sleeves as may be necessary, and other necessary activities (Note: inclusive items other than the cable shall be embedded under labor cost. **)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11401,
		'description'=>'Traditional FOC, 12  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11402,
		'description'=>'Traditional FOC, 24  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11403,
		'description'=>'Traditional FOC, 48  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11404,
		'description'=>'Traditional FOC, 72  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11405,
		'description'=>'Traditional FOC, 96  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11406,
		'description'=>'Traditional FOC, 144  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11407,
		'description'=>'Traditional FOC, 216  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11408,
		'description'=>'Traditional FOC, 288  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11409,
		'description'=>'Fig. 8 FOC, 12  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11410,
		'description'=>'Fig. 8 FOC, 24  Fibers (3 Buffers; 8-Fibers)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11411,
		'description'=>'Fig. 8 FOC, 24  Fibers(4 Buffers; 6-Fibers)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11412,
		'description'=>'Fig. 8 FOC, 48  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11413,
		'description'=>'Fig. 8 FOC, 72  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11414,
		'description'=>'Fig. 8 FOC, 96  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11415,
		'description'=>'Fig. 8 FOC, 144  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11416,
		'description'=>'Fig. 8 FOC, 216  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11417,
		'description'=>'FOC Loop transfer',
		'unit'=>'/pole span'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>115,
		'description'=>'DUCT FOC CABLE INSTALLATION\nIncludes installation of cable, testing, manhole draining, conduit cleaning, cable pulling & racking with plastic ties, cable lubricant, guide wires, pushrodding as may be necessary, and other related activities. (Note: inclusive items other than the cable shall be embedded under labor cost. **)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11501,
		'description'=>'Duct Single Mode FOC, 12  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11502,
		'description'=>'Duct Single Mode FOC, 24  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11503,
		'description'=>'Duct Single Mode FOC, 48  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11504,
		'description'=>'Duct Single Mode FOC, 72  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11505,
		'description'=>'Duct Single Mode FOC, 96  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11506,
		'description'=>'Duct Single Mode FOC, 144  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11507,
		'description'=>'Duct Single Mode FOC, 216  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11508,
		'description'=>'Duct Single Mode FOC, 288  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11509,
		'description'=>'Armoured FOC 144 Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11510,
		'description'=>'Armoured FOC 216 Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>116,
		'description'=>'AERIAL FOC CABLE ENCLOSURE (DOME TYPE)\nIncludes supply and/or installation of dome type closures, splice trays, organizers, cable spacers, stainless straps and buckles, sealants, supports, bonding (shield to shield), cable ID marker, cable loop holder, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11601,
		'description'=>'FOC Closure, 12  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11602,
		'description'=>'FOC Closure, 24  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11603,
		'description'=>'FOC Closure, 48  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11604,
		'description'=>'FOC Closure, 72  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11605,
		'description'=>'FOC Closure, 96  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11606,
		'description'=>'FOC Closure, 144  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11607,
		'description'=>'FOC Closure, 216  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11608,
		'description'=>'FOC Closure, 288  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>117,
		'description'=>'DUCT FOC CABLE ENCLOSURE (DOME TYPE)\nIncludes supply and/or installation of dome type closures, splice trays, organizers, manhole draining, bonding (shield to shield), sealnts, racking with plastic ties, cable ID marker and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11701,
		'description'=>'FOC Closure, 12  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11702,
		'description'=>'FOC Closure, 24  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11703,
		'description'=>'FOC Closure, 48  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11704,
		'description'=>'FOC Closure, 72  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11705,
		'description'=>'FOC Closure, 96  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11706,
		'description'=>'FOC Closure, 144  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11707,
		'description'=>'FOC Closure, 216  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11708,
		'description'=>'FOC Closure, 288  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>118,
		'description'=>'AERIAL FOC CABLE ENCLOSURE (IN-LINE TYPE)\nIncludes supply and/or installation of dome type closures, splice trays, organizers, cable spacers, stainless straps and buckles, sealants, supports, bonding (shield to shield), cable ID marker, cable loop holder, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11801,
		'description'=>'FOC Closure, 12  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11802,
		'description'=>'FOC Closure, 24  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11803,
		'description'=>'FOC Closure, 48  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11804,
		'description'=>'FOC Closure, 72  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11805,
		'description'=>'FOC Closure, 96  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11806,
		'description'=>'FOC Closure, 144  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11807,
		'description'=>'FOC Closure, 216  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11808,
		'description'=>'FOC Closure, 288  Fibers (Aerial)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>119,
		'description'=>'DUCT FOC CABLE ENCLOSURE (IN-LINE TYPE)\nIncludes supply and/or installation of dome type closures, splice trays, organizers, manhole draining, bonding (shield to shield), sealnts, racking with plastic ties, cable ID marker and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11901,
		'description'=>'FOC Closure, 12  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11902,
		'description'=>'FOC Closure, 24  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11903,
		'description'=>'FOC Closure, 48  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11904,
		'description'=>'FOC Closure, 72  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11905,
		'description'=>'FOC Closure, 96  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11906,
		'description'=>'FOC Closure, 144  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11907,
		'description'=>'FOC Closure, 216  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>11908,
		'description'=>'FOC Closure, 288  Fibers (Duct)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>120,
		'description'=>'SPLICE BOX ENCLOSURE (INDOOR)\nIncludes supply and installation of box closure, splice trays, organizers, cable ID marker, safety lock, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12001,
		'description'=>'Splice Box FOC Closure, 12  Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12002,
		'description'=>'Splice Box FOC Closure, 24  Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12003,
		'description'=>'Splice Box FOC Closure, 48  Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12004,
		'description'=>'Splice Box FOC Closure, 72  Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12005,
		'description'=>'Splice Box FOC Closure, 96  Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>121,
		'description'=>'FIBER SPLICING\nIncludes supply of protection sleeve, fiber ID tag, cable preparation, opening/closing of enclosure, fiber identification testing, loose tube slitter tool, jointing, testing end-to-end, set-up equipment, manhole opening/draining as may be necessary and other necessary activities',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12101,
		'description'=>'Joint Installation and Connection (12:12)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12102,
		'description'=>'Joint Installation and Connection (24:24)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12103,
		'description'=>'Joint Installation and Connection (48:48)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12104,
		'description'=>'Joint Installation and Connection (72:72)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12105,
		'description'=>'Joint Installation and Connection (96:96)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12106,
		'description'=>'Joint Installation and Connection (144:144)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12107,
		'description'=>'Joint Installation and Connection (216:216)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12108,
		'description'=>'Joint Installation and Connection (288:288)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12109,
		'description'=>'Fiber Splicing (pre-splice on new FOC cable)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12110,
		'description'=>'Fiber Splicing (splicing on pre-existing FOC with live network)\nIncludes checking and end-to-end optical testing of existing fiber, identification/verification of spares on the closures, and actual fiber splicing activity.',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>122,
		'description'=>'FIBER TERMINATION\nIncludes splicing of pigtail to cable, termination, OTDR & OPM testing and related activities ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12201,
		'description'=>'Fiber Termination ',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12202,
		'description'=>'Fiber Termination  (12:12)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12203,
		'description'=>'Fiber Termination (24:24)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12204,
		'description'=>'Fiber Termination (48:48)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12205,
		'description'=>'Fiber Termination (72:72)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12206,
		'description'=>'Fiber Termination (96:96)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12207,
		'description'=>'Fiber Termination (144:144)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12208,
		'description'=>'Fiber Termination (216:216)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12209,
		'description'=>'Fiber Termination (288:288)',
		'unit'=>'/fiber'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12210,
		'description'=>'Pigtail, with SC Connector (includes fiber termination charge)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12211,
		'description'=>'Field assemble connector',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>123,
		'description'=>'AERIAL CABLE INSTALLATION (Copper cable)\n- not including pole line hardwares\nIncludes lashing, supply and/or installation of cable, testing, color coded marking tapes as may be required by JPA, spiral sleeves as may be necessary, and other related activities. (Note: inclusive items other than the cable shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12301,
		'description'=>'Aerial Cable Installation, 10-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12302,
		'description'=>'Aerial Cable Installation, 20-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12303,
		'description'=>'Aerial Cable Installation, 50-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12304,
		'description'=>'Aerial Cable Installation, 100-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12305,
		'description'=>'Aerial Cable Installation, 200-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12306,
		'description'=>'Aerial Cable Installation, 300-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12307,
		'description'=>'Aerial Cable Installation, 400-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12308,
		'description'=>'Aerial Cable Installation, 600-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12309,
		'description'=>'Aerial Cable Installation, 900-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12310,
		'description'=>'Aerial Cable Installation, 1200-1800Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>124,
		'description'=>'AERIAL CABLE INSTALLATION (Copper cable)\n- including pole line hardwares(pole clamps, bolts, suspension and etc.)\nIncludes lashing, supply and/or installation of cable, testing, color coded marking tapes as may be required by JPA, spiral sleeves as may be necessary, and other related activities. (Note: inclusive items other than the cable shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12401,
		'description'=>'Aerial Cable Installation, 10-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12402,
		'description'=>'Aerial Cable Installation, 20-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12403,
		'description'=>'Aerial Cable Installation, 50-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12404,
		'description'=>'Aerial Cable Installation, 100-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12405,
		'description'=>'Aerial Cable Installation, 200-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12406,
		'description'=>'Aerial Cable Installation, 300-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12407,
		'description'=>'Aerial Cable Installation, 400-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12408,
		'description'=>'Aerial Cable Installation, 600-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12409,
		'description'=>'Aerial Cable Installation, 900-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12410,
		'description'=>'Aerial Cable Installation, 1200-1800Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>125,
		'description'=>'DUCT CABLE INSTALLATION (Copper cable)\nIncludes supply and/or installation of cable, testing, manhole draining, conduit cleaning, cable pulling & racking with plastic ties, cable lubricant, guide wires, pushrodding, removal of duct sealant as may be necessary, and other related activities. (Note: inclusive items other than the cable shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12501,
		'description'=>'Duct Cable Installation, 10-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12502,
		'description'=>'Duct Cable Installation, 20-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12503,
		'description'=>'Duct Cable Installation, 50-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12504,
		'description'=>'Duct Cable Installation, 100-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12505,
		'description'=>'Duct Cable Installation, 200-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12506,
		'description'=>'Duct Cable Installation, 300-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12507,
		'description'=>'Duct Cable Installation, 400-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12508,
		'description'=>'Duct Cable Installation, 600-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12509,
		'description'=>'Duct Cable Installation, 900-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12510,
		'description'=>'Duct Cable Installation, 1200-1800Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>126,
		'description'=>'BLOCK CABLE INSTALLATION (Copper cable)\nIncludes supply and/or installation of cable,  testing, galvanized cable clamps, cable fixing and other related accessories (Note: inclusive items other than the cable shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12601,
		'description'=>'Block Cable Installation, 10-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12602,
		'description'=>'Block Cable Installation, 20-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12603,
		'description'=>'Block Cable Installation, 50-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12604,
		'description'=>'Block Cable Installation, 100-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12605,
		'description'=>'Block Cable Installation, 200-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12606,
		'description'=>'Block Cable Installation, 300-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12607,
		'description'=>'Block Cable Installation, 400-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12608,
		'description'=>'Block Cable Installation, 600-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12609,
		'description'=>'Block Cable Installation, 900-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12610,
		'description'=>'Block Cable Installation, 1200-1800Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>127,
		'description'=>'TERMINATING CABLE (Copper cable)\nIncludes supply and/or installation of terminal cable, testing, racking, lacing/strapping of cables, and other accessories (Note: inclusive items other than the cable shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12701,
		'description'=>'Terminating Cable, 100 Pairs, 0.5 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12702,
		'description'=>'Terminating Cable, 200 Pairs, 0.5 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12703,
		'description'=>'Terminating Cable, 300 Pairs, 0.5 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12704,
		'description'=>'Terminating Cable, 400-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12705,
		'description'=>'Terminating Cable, 600-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12706,
		'description'=>'Terminating Cable, 900-Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12707,
		'description'=>'Terminating Cable, 1200-1800Pair, 0.4 MM',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>128,
		'description'=>'AERIAL CABLE ENCLOSURE (MECHANICAL) (Copper cable)\nIncludes supply and/or installation of closures, cable spacers, stainless straps and buckles, lashing clamps, supports, bonding (shield to shield, shield to strand), bonding wire, cable ID marker and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12801,
		'description'=>' ENCLOSURE, STRAIGHT SPLICE',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280101,
		'description'=>'Str Splice Aerial     10-30 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280102,
		'description'=>'Str Splice Aerial     50 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280103,
		'description'=>'Str Splice Aerial     70 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280104,
		'description'=>'Str Splice Aerial     100 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280105,
		'description'=>'Str Splice Aerial     150 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280106,
		'description'=>'Str Splice Aerial     200 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280107,
		'description'=>'Str Splice Aerial     300 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280108,
		'description'=>'Str Splice Aerial     400-600 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280109,
		'description'=>'Str Splice Aerial     900-Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280110,
		'description'=>'Str Splice Aerial     1200-1800 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12802,
		'description'=>'ENCLOSURE, BRANCH SPLICE, 2 OUTGOING CABLES',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280201,
		'description'=>'2 Br Splice Aerial     20 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280202,
		'description'=>'2 Br Splice Aerial     30 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280203,
		'description'=>'2 Br Splice Aerial     50 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280204,
		'description'=>'2 Br Splice Aerial     70 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280205,
		'description'=>'2 Br Splice Aerial     100 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280206,
		'description'=>'2 Br Splice Aerial     150 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280207,
		'description'=>'2 Br Splice Aerial     200 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280208,
		'description'=>'2 Br Splice Aerial     300 Pairs, 0.5-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280209,
		'description'=>'2 Br Splice Aerial     400-600 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280210,
		'description'=>'2 Br Splice Aerial     900- Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280211,
		'description'=>'2 Br Splice Aerial     1200-1800 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12803,
		'description'=>'ENCLOSURE, BRANCH SPLICE, 3 OUTGOING CABLES',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280301,
		'description'=>'3 Br Splice Aerial     30 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280302,
		'description'=>'3 Br Splice Aerial     50 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280303,
		'description'=>'3 Br Splice Aerial     70 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280304,
		'description'=>'3 Br Splice Aerial     100 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280305,
		'description'=>'3 Br Splice Aerial     150 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280306,
		'description'=>'3 Br Splice Aerial     200 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280307,
		'description'=>'3 Br Splice Aerial     300 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280308,
		'description'=>'3 Br Splice Aerial     400 Pairs, 0.4 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280309,
		'description'=>'3 Br Splice Aerial     400 Pairs, 0.5-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280310,
		'description'=>'3 Br Splice Aerial     600 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280311,
		'description'=>'3 Br Splice Aerial     900- Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1280312,
		'description'=>'3 Br Splice Aerial     1200-1800 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>129,
		'description'=>'DUCT CABLE ENCLOSURE (MECHANICAL) (Copper cable)\nIncludes supply and/or installation of steel closure, manhole draining, bonding (shield to shield, shield to manhole bonding ribbon), racking with plastic ties, cable ID markers and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12901,
		'description'=>' ENCLOSURE, STRAIGHT SPLICE',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290101,
		'description'=>'Str Splice Duct     10-50 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290102,
		'description'=>'Str Splice Duct     70-100 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290103,
		'description'=>'Str Splice Duct     200 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290104,
		'description'=>'Str Splice Duct     200 Pairs, 0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290105,
		'description'=>'Str Splice Duct     300-400 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290106,
		'description'=>'Str Splice Duct     600 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290107,
		'description'=>'Str Splice Duct     900- Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290108,
		'description'=>'Str Splice Duct     1200-1800 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12902,
		'description'=>'ENCLOSURE, BRANCH SPLICE, 2 OUTGOING CABLES',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290201,
		'description'=>'2 Br. Splice Duct     50-70 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290202,
		'description'=>'2 Br. Splice Duct     100-150 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290203,
		'description'=>'2 Br. Splice Duct     200 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290204,
		'description'=>'2 Br. Splice Duct     300-600 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290205,
		'description'=>'2 Br. Splice Duct     900- Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290206,
		'description'=>'2 Br. Splice Duct     1200-1800 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>12903,
		'description'=>'ENCLOSURE, BRANCH SPLICE, 3 OUTGOING CABLES',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290301,
		'description'=>'3 Br. Splice Duct     100-150 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290302,
		'description'=>'3 Br. Str Splice Duct     200 Pairs, 0.4-0.5 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290303,
		'description'=>'3 Br. Str Splice Duct     300-400 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290304,
		'description'=>'3 Br. Str Splice Duct     600 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290305,
		'description'=>'3 Br. Str Splice Duct     900- Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>1290306,
		'description'=>'3 Br. Str Splice Duct     1200-1800 Pairs, 0.4-0.6 MM',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>130,
		'description'=>'DISCRETE CONNECTORS - WITH SEALANT (Copper cable)\nIncludes supply of connectors, cable preparation, opening/closing of existing closure, pair identification, jointing, testing, and manhole draining as may be necessary (typical for maintenance and aerial application)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13001,
		'description'=>'Discrete Connectors with Sealant - Straight Splicing (per 100 Pairs)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13002,
		'description'=>'Discrete Connectors with Sealant - Half-tap Splicing (per 100 Pairs)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>131,
		'description'=>'MODULE CONNECTORS - WITH SEALANT(Copper cable)\nIncludes supply and/or installation of connectors, cable preparation, opening/closing of existing closure, pair identification, jointing, testing and manhole draining as may be necessary (typical for underground application).',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13101,
		'description'=>'Straight Splicing 10 Pair - Module, 0.4-0.6 MM',
		'unit'=>'module'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13102,
		'description'=>'Straight Splicing 20 Pair - Module, 0.4-0.6 MM',
		'unit'=>'module'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13103,
		'description'=>'Half-tap Splicing 10 Pair - Module, 0.4-0.6 MM',
		'unit'=>'module'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13104,
		'description'=>'Half-tap Splicing 20 Pair - Module, 0.4-0.6 MM',
		'unit'=>'module'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>132,
		'description'=>'POLE MOUNTED TERMINALS (Copper cable)\nIncludes supply and/or installation of terminals, wooden backboard, stainless straps and buckles, 7 bridle rings, terminal identification (reflectorized sticker), bonding (shield to DP) and other accessories (Note: inclusive items other than the DP shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13201,
		'description'=>'Pole Mounted  Cable Terminal 10 Pairs, with Stub Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13202,
		'description'=>'Pole Mounted  Cable Terminal 20 Pairs, with Stub Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13203,
		'description'=>'Pole Mounted  Cable Terminal 10 Pairs, w/o Stub Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13204,
		'description'=>'Pole Mounted  Cable Terminal 20 Pairs, w/o Stub Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>133,
		'description'=>'WALL MOUNTED TERMINALS (Copper cable)\nIncludes supply and/or installation of terminals, wooden backboard, bridle rings, terminal identification (reflectorized sticker), expansion bolt or concrete nail, bonding (shield to DP) and other accessories  (Note: inclusive items other than the DP shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13301,
		'description'=>'Wall Mounted  Cable Terminal 10 Pairs with Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13302,
		'description'=>'Wall Mounted  Cable Terminal 20 Pairs with Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13303,
		'description'=>'Wall Mounted  Cable Terminal 30 Pairs with Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13304,
		'description'=>'Wall Mounted  Cable Terminal 10 Pairs w/o Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13305,
		'description'=>'Wall Mounted  Cable Terminal 20 Pairs w/o Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13306,
		'description'=>'Wall Mounted  Cable Terminal 30 Pairs w/o Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>134,
		'description'=>'PEDESTAL MOUNTED TERMINALS (Copper cable)\nIncludes supply and/or installation of terminals, pedestal housing, wooden backboard, bridle rings, terminal identification (reflectorized sticker), bonding (shield to DP) and other accessories  (Note: inclusive items other than the DP shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13401,
		'description'=>'Pedestal Mounted  Cable Terminal 10 Pairs w/o Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13402,
		'description'=>'Pedestal Mounted  Cable Terminal 20 Pairs w/o Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13403,
		'description'=>'Pedestal Mounted  Cable Terminal 30 Pairs w/o Stub, Unprotected',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>135,
		'description'=>'BONDING AND GROUNDING\nIncludes supply and installation of bonding connector, ground rod, grounding wire, 3-m ?\"? HDPE grounding wire protector, stainless straps and buckles, clamps, bonding, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13501,
		'description'=>'Bonding branch cable (shield to shield) to existing closure',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13502,
		'description'=>'Bonding of Entrance Cable and Indoor Terminals',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13503,
		'description'=>'Bonding (strand to strand)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13504,
		'description'=>'Grounding on pole',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13505,
		'description'=>'Grounding for Indoor Plant (from ground to terminal /panel box)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13506,
		'description'=>'Grounding Cable at Cabinet',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13507,
		'description'=>'Grounding Connection, Incoming Indoor Cable Shield',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13508,
		'description'=>'Additional Ground Rod (includes bonding of ground rods)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>136,
		'description'=>'TESTING OF CABLES (Copper cable)\nIncludes pair and shield continuity test, split test, insulation resistance test, loop resistance test, tranmission loss test, induced voltage and power influence test, resistance unbalance test, earth continuity test (Note: Applicable to testing of existing cable only)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13601,
		'description'=>'Testing of existing cable (per 100 Pairs)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>137,
		'description'=>'TERMINAL BLOCK (Disconnection Module) (Copper cable)\nIncludes supply and/or installation steel backmount frame, 10-pair disconnection modules, labelling, terminal identification, testing and other accessories.  (Note: inclusive items other than the Terminal block shall be embedded under labor cost).**',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13701,
		'description'=>'Terminal Block (per 10-Pair Module)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>138,
		'description'=>'MISCELLANEOUS',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13801,
		'description'=>'Re-lashing of Existing Aerial Cable',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13802,
		'description'=>'Re-stenciling of DP',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13803,
		'description'=>'Stainless Cable Tag (includes tie wrap)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13804,
		'description'=>'Sealing of occupied conduit, Duct Sealant (Foam Type) 114.3mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13805,
		'description'=>'Encapsulant Compound',
		'unit'=>'kg'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>13806,
		'description'=>'Termination of cable (per 100 Pairs)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2,
		'description'=>'CIVIL WORKS',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>201,
		'description'=>'MANHOLES/HANDHOLES/Service Box\nIncludes supply and installation of service box, handhole, manhole,  manhole accessories, stainless manhole # tag, PVC end bell sockets, fully equipped hardwares, locking device, breaking and restoration of pavement, test pits, excavation, provision of barricades, warning lights and other safety requirements, backfill/compaction according to DPWH standard (base coarse, sub base coarse), haulage & disposal of surplus soil, cleaning of site, supporting existing structures, board-ups/enclosures, duct plug on vacant conduits, and other necessary requirements & applicable services',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20101,
		'description'=>'Manhole, Type I 3300mm*2000mm*2250mm(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20102,
		'description'=>'Reinforced Concrete Manhole -(L:1.2m,W:1.2m,H:1.5m)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20103,
		'description'=>'Handhole - 1.2m*1.2m*1.2m(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20104,
		'description'=>'Handhole Model 1- 1.2m*1.2m*1.850m(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20105,
		'description'=>'Handhole Model 2- 1.4m*0.9m*1.850m(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20106,
		'description'=>'Handhole Model 3- 1.6m*0.7m*1.850m(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20107,
		'description'=>'Vehicular Service box (Concrete) - A1&A2 500mm*500mm*700mm(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20108,
		'description'=>'Vehicular Service box (Concrete) - B1&B2 700mm*500mm*500mm(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20109,
		'description'=>'In-property Non-Vehicular Service box - A1&A2 500mm*500mm*700mm(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20110,
		'description'=>'In-property Non-Vehicular Service box - B1&B2 700mm*500mm*500mm(L*W*D)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>202,
		'description'=>'CONDUITS (Open Trench)\nIncludes supply and installation of Conduit, coupling, PVC bends, PVC cement, conduit splaying, test pits, excavation, provision of barricades, warning lights and other safety requirements, conduit spacers, laying pipes, sand/concrete encasement, backfill/compaction according to DPWH standard (base coarse, sub base coarse), haulage & disposal of surplus soil, pushrodding, mandrelling, cleaning of site, supply & installation of guide wires (nylon cord), plugging of stub-out conduits, other necessary requirements & applicable services',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20201,
		'description'=>'2 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Concrete (0.23 m thk.) Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20202,
		'description'=>'4 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Concrete (0.23 m thk.) Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20203,
		'description'=>'6 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Concrete (0.23 m thk.) Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20204,
		'description'=>'2 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Asphalt  (0.10 m. thk.)  Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20205,
		'description'=>'4 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Asphalt  (0.10 m. thk.)  Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20206,
		'description'=>'6 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Asphalt  (0.10 m. thk.)  Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20207,
		'description'=>'2 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Concrete Sidewalk/Driveway (0.10 m thk)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20208,
		'description'=>'4 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Concrete Sidewalk/Driveway (0.10 m thk)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20209,
		'description'=>'6 Run Concrete Encased U/G, PVC Conduit 114.3 mm, \'Concrete Sidewalk/Driveway (0.10 m thk)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20210,
		'description'=>'2 Run Concrete Encased U/G, HDPE Conduit 50-mm, \'Concrete (0.23 m thk.) Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20211,
		'description'=>'2 Run Concrete Encased U/G, HDPE Conduit 50-mm, \'Asphalt  (0.10 m. thk.)  Road',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20212,
		'description'=>'2 Run Concrete Encased U/G, HDPE Conduit 50-mm, \'Concrete Sidewalk/Driveway (0.10 m thk)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20213,
		'description'=>'2 Run Sand Encased U/G, PVC Conduit 114.3 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20214,
		'description'=>'4 Run Sand Encased U/G, PVC Conduit 114.3 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20215,
		'description'=>'2 Run Sand Encased U/G, HDPE Conduit 50-mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>203,
		'description'=>'CONDUITS (Shallow Trench or ST), 1-m depth is not obtained\nIncludes supply and installation of Conduit, coupling, PVC bends, warning tapes, PVC cement, conduit splaying, test pits, excavation, provision of barricades, warning lights and other safety requirements, conduit spacers, laying pipes, concrete encasement, reinforcing bars, backfill/compaction according to DPWH standard (base coarse, sub base coarse), haulage & disposal of surplus soil, pushrodding, mandrelling, cleaning of site, supply & installation of guide wires (nylon cord), plugging of stub-out conduits, other necessary requirements & applicable services',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20301,
		'description'=>'1 Run Concrete Encased U/G, PVC Conduit 114.3 mm (ST), 700mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20302,
		'description'=>'2 Run Concrete Encased U/G, PVC Conduit 114.3 mm (ST), 700mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20303,
		'description'=>'4 Run Concrete Encased U/G, PVC Conduit 114.3 mm (ST)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20304,
		'description'=>'6 Run Concrete Encased U/G, PVC Conduit 114.3 mm (ST)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20305,
		'description'=>'1 Run Concrete Encased U/G, G.I. Conduit 114.3 mm, Sched 40 (ST), 400mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20306,
		'description'=>'2 Run Concrete Encased U/G, G.I. Conduit 114.3 mm, Sched 40 (ST), 400mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20307,
		'description'=>'2 Run G.I. Conduits seamless, 114.3 mm (ST)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20308,
		'description'=>'4 Run G.I. Conduits seamless, 114.3 mm (ST)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20309,
		'description'=>'6 Run G.I. Conduits seamless, 114.3 mm (ST)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20310,
		'description'=>'2 Run Concrete Encased U/G, HDPE Conduit 50-mm (ST) - cast in place',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20311,
		'description'=>'4 Run Concrete Encased U/G, HDPE Conduit 50-mm (ST) - cast in place',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20312,
		'description'=>'2 Run Concrete Encased U/G, HDPE Conduit 50-mm (ST) - pre cast',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20313,
		'description'=>'4 Run Concrete Encased U/G, HDPE Conduit 50-mm (ST) - pre cast',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20314,
		'description'=>'2 Run HDPE Conduit 50-mm (ST), 1.5m',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20315,
		'description'=>'4 Run HDPE Conduit 50-mm (ST), 1.5m',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>204,
		'description'=>'CONDUITS (Culvert Crossing under), beyond 1-m depth\nIncludes supply and installation of Conduit, coupling, PVC bends, warning tapes, PVC cement, conduit splaying, test pits, excavation, provision of barricades, warning lights and other safety requirements, conduit spacers, laying pipes, concrete encasement, 1-m conduit clearance from culvert, backfill/compaction according to DPWH standard (base coarse, sub base coarse), haulage & disposal of surplus soil, pushrodding, mandrelling, cleaning of site, supply & installation of guide wires (nylon cord), plugging of stub-out conduits, other necessary requirements & applicable services',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20401,
		'description'=>'2 Run Concrete Encased U/G, PVC Conduit 114.3 mm (CC)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20402,
		'description'=>'4 Run Concrete Encased U/G, PVC Conduit 114.3 mm (CC)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20403,
		'description'=>'6 Run Concrete Encased U/G, PVC Conduit 114.3 mm (CC)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20404,
		'description'=>'2 Run Concrete Encased U/G, HDPE Conduit 50-mm (CC)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>205,
		'description'=>'HORIZONTAL DIRECTIONAL DRILLING METHOD\nIncludes supply and installation of conduit, coupling, conduit splaying, breaking and restoration of pavement, test pits, excavation, provision of barricades, warning lights and other safety requirements, backfill, haulage & disposal of surplus soil, pushrodding, mandrelling, cleaning of site, supply & installation. of guide wires (nylon cord), cleaning, plugging of stub-out conduits, preparation of boring profile, Geo-Science research documents,soil tests, and other necessary requirements & applicable services, among others',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20501,
		'description'=>'HDPE Conduit, 2-Run, 118mm dia. (HDD), Straight-Run Bore- medium earth',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20502,
		'description'=>'HDPE Conduit, 4-Run, 118mm dia. (HDD), Straight-Run Bore- medium earth',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20503,
		'description'=>'HDPE Conduit, 2-Run, 118mm dia. (HDD), Straight-Run Bore- hard earth',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20504,
		'description'=>'HDPE Conduit, 4-Run, 118mm dia. (HDD), Straight-Run Bore- hard earth',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20505,
		'description'=>'HDPE Conduit, 2-Run, 118mm dia. (HDD), Bridge Crossing',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20506,
		'description'=>'HDPE Conduit, 4-Run, 118mm dia. (HDD), Bridge Crossing',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20507,
		'description'=>'Directional Boring, 2-Run 50mm? HDPE Pipe, on Deep Ravine / Bridge Crossing (Rock) for depth of river bed more than 5.0m from ground level. ',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20508,
		'description'=>'Directional Boring, 2-Run 50mm? HDPE Pipe, medium earth for Road Crossing, Culvert Crossing, Straight-run Bore and Bridge Crossing up to 5.0m depth of river bed from ground level ',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20509,
		'description'=>'Directional Boring Entry/Exit Pit, 1.0m x 1.5m x 1.5m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>206,
		'description'=>'MECHANIZED MICROTRENCHING METHOD\nIncludes supply and installation of conduit, coupling, conduit splaying, breaking and restoration of pavement, test pits, excavation, provision of barricades, warning lights and other safety requirements, backfill, haulage & disposal of surplus soil, pushrodding, mandrelling, cleaning of site, supply & installation. of guide wires (nylon cord), cleaning, plugging of stub-out conduits, preparation of boring profile, Geo-Science research documents,soil tests, and other necessary requirements & applicable services, among others.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20601,
		'description'=>'HDPE Conduit, 1-Run, 32mm dia., Microtrenching',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20602,
		'description'=>'HDPE Conduit, 1-Run, 40mm dia., Microtrenching',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20603,
		'description'=>'HDPE Conduit, 2-Run, 50mm dia., Microtrenching',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20604,
		'description'=>'2-Way micro Duct (27.4mm Height, 14.7 Width) - with 24F \\48F\\72F\\144Fmicro Fiber',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>207,
		'description'=>'BRIDGE ATTACHMENT\nIncludes supply and installation of seamless G.I. conduits, bends, adaptor, bushing, locknut, hanger and/or bracket mounting supports (hot-dipped galvanized), conduit concrete encasement on bridge abutment/wing wall, provision of scuffolding, pushrodding, mandrelling, supply & installation of guide wires (nylon cord), and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20701,
		'description'=>'2-Run Bridge Attachment G.I. Pipe 114.3 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20702,
		'description'=>'2-Run Bridge Attachment P.E. Pipe 114.3 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20703,
		'description'=>'4-Run Bridge Attachment G.I. Pipe 114.3 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20704,
		'description'=>'4-Run Bridge Attachment P.E. Pipe 114.3 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>208,
		'description'=>'P.E. SUB-DUCT FOR MAIN CONDUIT\nIncludes supply and installation of sub-duct, provision of barricades, warning lights and other safety requirements, pushrodding, mandrelling, cleaning of site, supply & installation of guide wires (nylon cord), among others',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20801,
		'description'=>'P.E. Sub-duct for Main Conduit,  1 x 32 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20802,
		'description'=>'P.E. Sub-duct for Main Conduit,  2 x 32 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20803,
		'description'=>'P.E. Sub-duct for Main Conduit,  4 x 32 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20804,
		'description'=>'P.E. Sub-duct for Main Conduit,  3 x 40 mm',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20805,
		'description'=>'Fabric Inner Duct (2-Cell)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20806,
		'description'=>'Fabric Inner Duct (3-Cell)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20807,
		'description'=>'Quadplex Plug at Main duct opening manholes,114.3 mm, duct for 4 subducts',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20808,
		'description'=>'Double Plug at Main duct opening manholes,50 mm, duct for 2 subducts',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20809,
		'description'=>'Sealing of occupied conduit, Simplex Duct Plug 50mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20810,
		'description'=>'Sealing of occupied conduit, Simplex Duct Plug 32mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20811,
		'description'=>'Blank Duct Plug 40.00 mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20812,
		'description'=>'Blank Duct Plug 32.00 mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>209,
		'description'=>'MAIN DUCT PLUG\nIncludes supply and installation of main duct plug',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20901,
		'description'=>'Mechanical Blank Duct Plug 50 mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20902,
		'description'=>'Mechanical Blank Duct Plug 114.3 mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>20903,
		'description'=>'PVC Blank Duct Plug 114.3 mm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>210,
		'description'=>'BREAKING AND RESTORATION\nIncludes cutting, breaking, and restoration of pavement to original condition',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21001,
		'description'=>'Breaking of Pavement Concrete Road',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21002,
		'description'=>'Breaking of Pavement Concrete Road, with Re-bars',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21003,
		'description'=>'Breaking of Pavement Asphalt',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21004,
		'description'=>'Breaking of Pavement Concrete Side walk/ Driveway',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21005,
		'description'=>'Breaking of Pavement Concrete Side walk/ Driveway, with Re-bars',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21006,
		'description'=>'Restoration of Pavement Concrete Road',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21007,
		'description'=>'Restoration of Pavement Concrete Road, with Re-bars',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21008,
		'description'=>'Restoration of Pavement Asphalt',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21009,
		'description'=>'Restoration of Pavement Concrete Side walk/ Driveway',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21010,
		'description'=>'Restoration of Pavement Concrete Side walk/ Driveway, with Re-bars',
		'unit'=>'cu.m'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21011,
		'description'=>'Restoration of Sidewalk, pebbles wash-out finish',
		'unit'=>'sq. m.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21012,
		'description'=>'Restoration of Sidewalk, tile finish',
		'unit'=>'sq. m.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21013,
		'description'=>'Restoration of Curb and Gutter',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21014,
		'description'=>'Application of concrete epoxy per side of restoration as required',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21015,
		'description'=>'Restoration of thermoplastic paint',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21016,
		'description'=>'Additional Duct Entry - HH/MH Wall',
		'unit'=>'duct-hole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>211,
		'description'=>'CONSTRUCTION OF BASE PLINTH\nIncludes pavement breaking and restoration, construction of concrete base plinth, grounding provision, bolts, test pits, excavation, backfill/compaction, provision of barricades, warning lights and other safety requirements, backfilling, haulage & disposal of surplus soil, cleaning of site',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21101,
		'description'=>'CROSS CONNECT CABINET',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110101,
		'description'=>'Construction of XCC plinth (1*1.8 Height)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110102,
		'description'=>'Construction of XCC plinth (0.5m Height)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110103,
		'description'=>'Construction of XCC per 0.5m Height plus',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110104,
		'description'=>'Transport and install XCC at the site',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21102,
		'description'=>'OLT CABINET',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110201,
		'description'=>'Construction of OLT Basepad (0.4m Height)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110202,
		'description'=>'Construction of OLT Basepad (1.0m Height)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110203,
		'description'=>'Construction of OLT Basepad (1.5m Height)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110204,
		'description'=>'Construction of OLT Basepad (2.0m Height)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110205,
		'description'=>'Modified Shade OLT Basepad (up to 3 meter height with Extended Metal Enclosure/Flatform )',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110206,
		'description'=>'Concrete Basepad steps',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110207,
		'description'=>'3-Run Concrete Encased U/G, PVC Conduits 114.3 mm Earth + 1-run Concrete Encased U/G, PVC Conduits 60.3 mm Earth, from the cabinet to riser pole',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110208,
		'description'=>'Supply & install :-  AC power cable from MPC point in cabinet to the Meralco meter located at the riser pole, grounding, etc.',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110209,
		'description'=>'Power meter base, with protection bars (includes miscellaneous, application, and other initial fees).',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2110210,
		'description'=>'Circuit Breaker withpanel box, manual transfer switch, and conventional outlet (twist lock) provision',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21103,
		'description'=>'Transport and install e-Cabinet/OLT at the site.',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21104,
		'description'=>'Demolition of existing Cabinet basepad',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21105,
		'description'=>'Cabinet Guard Post - Two Posts, 4inch ? G.I. PIPE(SCH.20) *1.8m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21106,
		'description'=>'Cabinet Guard Post - Two Posts, 4inch ? G.I. PIPE(SCH.20) *2m',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>212,
		'description'=>'Rehabilitation of Existing Manholes/Handholes\nIncludes pavement cutting, excavation, Demolition, Clearing / Hauling of debris, Rebar Works, Temporary support / protection of existing, Installation of manhole accessories,Raising/Lowering of MH frame and cover (Include cost of labor and supply of materials, use of equipment and fuel), Replacement of MH frame and cover (Include cost of labor, supply of materials, use of equipment and fuel) and all necessory works.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21201,
		'description'=>'Rehabilitation of Existing Manholes',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21202,
		'description'=>'Rehabilitation of Existing Handholes',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21203,
		'description'=>'Raising of Manholes',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21204,
		'description'=>'Raising of Handholes',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>213,
		'description'=>'Rehabilitation of Existing Underground Conduits\nIncludes pavement cutting, excavation, pipe laying, Dewatering, Pushrodding and Mandrelling, Installation of guidewires (Nylon rope 8mm dia.), Backfilling and Compaction and all necessory works.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21301,
		'description'=>'Cutting of Pavement',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21302,
		'description'=>'Verification of Manholes conduits',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21303,
		'description'=>'Breaking of Pavement',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130301,
		'description'=>'Concrete (0.23 m thk.)',
		'unit'=>'sq. m. '
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130302,
		'description'=>'Asphalt   (0.10 m. thk.)  ',
		'unit'=>'sq. m. '
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130303,
		'description'=>'Conc. Sidewalk/Driveway (0.10 m thk)',
		'unit'=>'sq. m. '
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21304,
		'description'=>'Excavation (medium earth)',
		'unit'=>'cu. m.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21305,
		'description'=>'Chipping of concrete encasement',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130501,
		'description'=>'Filled Duct',
		'unit'=>'m-run'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130502,
		'description'=>'Vacant Duct',
		'unit'=>'m-run'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21306,
		'description'=>'Pipe Laying',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130601,
		'description'=>'One (1) run pvc',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130602,
		'description'=>'Two (2) runs pvc',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130603,
		'description'=>'Four (4) runs pvc',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130604,
		'description'=>'One (1) run HDPE',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130605,
		'description'=>'Two (2) runs HDPE',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130606,
		'description'=>'Four (4) runs HDPE',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130607,
		'description'=>'Provision of PVC Slit Duct 4\"? x 1.50 m ',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21307,
		'description'=>'Concreting WITHOUT Reinforcing Bars',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130701,
		'description'=>'One (1) run',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130702,
		'description'=>'Two (2) runs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130703,
		'description'=>'Four (4) runs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21308,
		'description'=>'Concreting WITH Reinforcing Bars',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130801,
		'description'=>'Two (2) runs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2130802,
		'description'=>'Four (4) runs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21309,
		'description'=>'Dewatering',
		'unit'=>'hr.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21310,
		'description'=>'Pushrodding and Mandrelling',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2131001,
		'description'=>'Main Duct',
		'unit'=>'m-run'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2131002,
		'description'=>'Sub-duct',
		'unit'=>'m-run'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21311,
		'description'=>'Installation of guidewires (Nylon rope 8mm dia.)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2131101,
		'description'=>'Main Duct',
		'unit'=>'m-run'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2131102,
		'description'=>'Sub-duct',
		'unit'=>'m-run'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21312,
		'description'=>'Backfilling and Compaction',
		'unit'=>'cu. m.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21313,
		'description'=>'Restoration',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2131301,
		'description'=>'Concrete (0.23 m thk.)',
		'unit'=>'sq. m.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2131302,
		'description'=>'Asphalt  (0.10 m. thk.)   ',
		'unit'=>'sq. m.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>2131303,
		'description'=>'Conc. Sidewalk/Driveway (0.10 m thk)',
		'unit'=>'sq. m.'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>214,
		'description'=>'Right of Way Permit (Legworks)\nIncludes Barangay, Homeowner Association, Municipal/City Building Official, DPWH',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21401,
		'description'=>'Barangay permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21402,
		'description'=>'HOA permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21403,
		'description'=>'Building permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21404,
		'description'=>'Municipal permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21405,
		'description'=>'DPWH permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>215,
		'description'=>'Right of Way Permit (Legworks+Payment)\nIncludes Barangay, Homeowner Association, Municipal/City Building Official, DPWH',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21501,
		'description'=>'Barangay permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21502,
		'description'=>'HOA permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21503,
		'description'=>'Building permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21504,
		'description'=>'Municipal permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>21505,
		'description'=>'DPWH permit',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>3,
		'description'=>'FTTH ODN FDH/FDU/LCP/NAP BOX AND SPLITTERS INSTALLATION',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>301,
		'description'=>'Basepad mounted outdoor FDH Cabinet (Fiber Distribution Hub)\nIncludes outdoor cabinet, locking device, splice trays, couplers, pigtails, up to 1:64 modular splitter mounting slots, patchcord management system, spare splitter output parking slots, and other accessories as may be necessary',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30101,
		'description'=>'FDH: 144 Distribution FOC capacity (Outdoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30102,
		'description'=>'FDH: 288 Distribution FOC capacity (Outdoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30103,
		'description'=>'FDH: 432 Distribution FOC capacity (Outdoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30104,
		'description'=>'FDH: 576 Distribution FOC capacity (Outdoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30105,
		'description'=>'FDH: 832 Distribution FOC capacity (Outdoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>302,
		'description'=>'Floor/Wall mounted Indoor FDH Cabinet (Fiber Distribution Hub)\nIncludes outdoor cabinet, locking device, splice trays, couplers, pigtails, up to 1:64 modular splitter mounting slots, patchcord management system, spare splitter output parking slots, and other accessories as may be necessary',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30201,
		'description'=>'FDH: 144 Distribution FOC capacity (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30202,
		'description'=>'FDH: 288 Distribution FOC capacity (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30203,
		'description'=>'FDH: 432 Distribution FOC capacity (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>303,
		'description'=>'FIBER DISTRIBUTION UNIT(ODF)\nIncludes supply and/or installation of fully configured Fiber Termination Unit box, SC couplers, pigtails, splice cassettes with maximum of 12 splices per cassete,clamps, grounding, screws, labelling, stencil, and other accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30301,
		'description'=>'FDU Wall Mountable, 24 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30302,
		'description'=>'FDU Wall Mountable, 48 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30303,
		'description'=>'FDU Wall Mountable, 72 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30304,
		'description'=>'FDU 19-23\" Rack Mountable, 12 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30305,
		'description'=>'FDU 19-23\" Rack Mountable, 24 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30306,
		'description'=>'FDU 19-23\" Rack Mountable, 48 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30307,
		'description'=>'FDU 19-23\" Rack Mountable, 72 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30308,
		'description'=>'FDU 19-23\" Rack Mountable, 96 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30309,
		'description'=>'FDU 19-23\" Rack Mountable, 144 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30310,
		'description'=>'FDU 19-23\" Rack Mountable, 216 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30311,
		'description'=>'FDU 19-23\" Rack Mountable, 288 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30312,
		'description'=>'Smart FDU 19-23\" Rack Mountable, 96 Fibers, SC Compatible (includes pigtails)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>304,
		'description'=>'19\" FDU(ODF) RACK/CABINET\nIncludes supply and installation of 19\" FDU Rack, expansion bolts, cutting of raised floor tile, patchcord management system, treaded holes for FDU mounting, and other applicable services',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30401,
		'description'=>'ODF cabinet mounted on the wall(600x700x770) include 19? ODF frame',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30402,
		'description'=>'19\" Rack (Open Bay Type)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30403,
		'description'=>'19\" Rack (Closed Cabinet Bay Type)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30404,
		'description'=>'19\" Smart FDU Rack (Closed Cabinet Bay Type)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>305,
		'description'=>'Modular Splitter\nWork includes supply and installation of splitter, splicing(all splitter, 1 core splicing needed each), taging.',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30501,
		'description'=>'Splitter, 1:64 (Modular w/ SC Couplers)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30502,
		'description'=>'Splitter, 1:32 (Modular w/ SC Couplers)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30503,
		'description'=>'Splitter, 1:16 (Modular w/ SC Couplers)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30504,
		'description'=>'Splitter, 1:8 (Modular w/ SC Couplers)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30505,
		'description'=>'Splitter, 1:4 (Modular w/ SC Couplers)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30506,
		'description'=>'Splitter, 1:64 (Modular w/ 2mm dia Pigtails, SC)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30507,
		'description'=>'Splitter, 1:32 (Modular w/ 2mm dia Pigtails, SC)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30508,
		'description'=>'Splitter, 1:16 (Modular w/ 2mm dia Pigtails, SC)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30509,
		'description'=>'Splitter, 1:8 (Modular w/ 2mm dia Pigtails, SC)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30510,
		'description'=>'Splitter, 1:4 (Modular w/ 2mm dia Pigtails, SC)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30511,
		'description'=>'19-23\" Rack-mounted Modular-Splitter box (for Modular splitters)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>306,
		'description'=>'Modular Bare PLC Splitter (1.5m fiber slack)\nWork includes supply and installation of splitter, splicing, taging.',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30601,
		'description'=>'Splitter, 1:64 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30602,
		'description'=>'Splitter, 1:32 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30603,
		'description'=>'Splitter, 1:16 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30604,
		'description'=>'Splitter, 1:8 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30605,
		'description'=>'Splitter, 1:4 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>307,
		'description'=>'Micro Bare PLC Splitter (1.5m fiber slack)\nWork includes supply and installation of splitter, splicing, taging.',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30701,
		'description'=>'Splitter, 1:64 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30702,
		'description'=>'Splitter, 1:32 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30703,
		'description'=>'Splitter, 1:16 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30704,
		'description'=>'Splitter, 1:8 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30705,
		'description'=>'Splitter, 1:4 (Bare, 1.5m fiber slack)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>308,
		'description'=>'Modular PLC Splitter (900um, SC Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30801,
		'description'=>'Splitter, 1:64 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30802,
		'description'=>'Splitter, 1:32 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30803,
		'description'=>'Splitter, 1:16 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30804,
		'description'=>'Splitter, 1:8 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30805,
		'description'=>'Splitter, 1:4 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>309,
		'description'=>'Micro PLC Splitter (900um, SC Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30901,
		'description'=>'Splitter, 1:64 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30902,
		'description'=>'Splitter, 1:32 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30903,
		'description'=>'Splitter, 1:16 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30904,
		'description'=>'Splitter, 1:8 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>30905,
		'description'=>'Splitter, 1:4 (SC-Connectorized)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>310,
		'description'=>'Pole-mounted FOC Terminal NAP (Network Access Point)\nIncludes supply and/or installation of terminals with splice trays, SC couplers, wooden backboard, stainless straps and buckles, bridle rings, stencil, and other accessories.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31001,
		'description'=>'Pole Mounted NAP, 8-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31002,
		'description'=>'Pole Mounted NAP, 16-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>311,
		'description'=>'Wall-mounted FOC Terminal NAP (Network Access Point)\nIncludes supply and/or installation of terminals with splice trays, SC couplers, wooden backboard, bridle rings, stencil, and other accessories as may be necessary.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31101,
		'description'=>'Wall Mounted NAP, 8-Port (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31102,
		'description'=>'Wall Mounted NAP, 16-Port (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31103,
		'description'=>'Wall Mounted NAP, 24-Port (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31104,
		'description'=>'Wall Mounted NAP, 32-Port (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31105,
		'description'=>'Wall Mounted NAP, 64-Port (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>312,
		'description'=>'Duct FOC Terminal NAP (Network Access Point)\nIncludes supply and/or installation of fiber enclosure, splice trays, organizers, SC couplers, manhole draining, bonding (shield to shield), sealants, racking with plastic ties, cable ID marker, stencil and other accessories as may be necessary',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31201,
		'description'=>'Duct Terminal NAP, 8-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31202,
		'description'=>'Duct Terminal NAP, 16-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31203,
		'description'=>'Duct Terminal NAP, 24-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31204,
		'description'=>'Duct Terminal NAP, 32-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>313,
		'description'=>'Pedestal FOC Terminal NAP (Network Access Point)\nIncludes supply and/or installation of pedestal fiber enclosure, basepad, splice trays, organizers, pigtails, SC couplers, bonding (shield to shield), sealants, racking with plastic ties, cable ID marker, stencil and other accessories as may be necessary',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31301,
		'description'=>'Pedestal Mounted Terminal NAP, 8-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31302,
		'description'=>'Pedestal Mounted Terminal NAP, 16-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31303,
		'description'=>'Pedestal Mounted Terminal NAP, 24-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31304,
		'description'=>'Pedestal Mounted Terminal NAP, 32-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>314,
		'description'=>'Pole-mounted LCP (Local Convergence Point) Closure \nIncludes supply and/or installation of terminals with splice trays, wooden backboard, stainless straps and buckles, bridle rings, stencil, and other accessories as may be necessary.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31401,
		'description'=>'Pole Mounted LCP, 8 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31402,
		'description'=>'Pole Mounted LCP, 16 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31403,
		'description'=>'Pole Mounted LCP, 24 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31404,
		'description'=>'Pole Mounted LCP, 32 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31405,
		'description'=>'Pole Mounted LCP, 64 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31406,
		'description'=>'Pole Mounted LCP, 72 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>315,
		'description'=>'Wall-mounted LCP (Local Convergence Point) Closure \nIncludes supply and/or installation of terminals with splice trays, wooden backboard, bridle rings, stencil, and other accessories as may be necessary.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31501,
		'description'=>'Wall Mounted LCP, 8 Fibers (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31502,
		'description'=>'Wall Mounted LCP, 16 Fibers (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31503,
		'description'=>'Wall Mounted LCP, 24 Fibers (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31504,
		'description'=>'Wall Mounted LCP, 32 Fibers (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31505,
		'description'=>'Wall Mounted LCP, 64 Fibers (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31506,
		'description'=>'Wall Mounted LCP, 72 Fibers (Indoor)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>316,
		'description'=>'Pole-mounted FOC Terminal LCP  (Local Convergence Point)\nIncludes supply and/or installation of terminals with splice trays, SC couplers, stainless straps and buckles, bridle rings, stencil, and other accessories.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31601,
		'description'=>'Pole Mounted LCP, 8-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31602,
		'description'=>'Pole Mounted LCP, 16-port',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>317,
		'description'=>'Duct Cable LCP (Local Convergence Point) Closure \nIncludes supply and/or installation of fiber enclosure, splice trays, organizers, manhole draining, bonding (shield to shield), sealants, racking with plastic ties, cable ID marker and other accessories as may be necessary.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31701,
		'description'=>'Duct Terminal LCP, 8 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31702,
		'description'=>'Duct Terminal LCP, 16 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31703,
		'description'=>'Duct Terminal LCP, 24 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31704,
		'description'=>'Duct Terminal LCP, 32 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31705,
		'description'=>'Duct Terminal LCP, 64 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31706,
		'description'=>'Duct Terminal LCP, 72 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>318,
		'description'=>'Pedestal FOC Terminal LCP (Local Convergence Point)\nIncludes supply and/or installation of pedestal fiber enclosure, basepad, splice trays, organizers, pigtails, SC couplers, bonding (shield to shield), sealants, racking with plastic ties, cable ID marker, stencil and other accessories as may be necessary',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31801,
		'description'=>'Pedestal Terminal LCP, 8 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31802,
		'description'=>'Pedestal Terminal LCP, 16 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31803,
		'description'=>'Pedestal Terminal LCP, 24 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31804,
		'description'=>'Pedestal Terminal LCP, 32 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31805,
		'description'=>'Pedestal Terminal LCP, 64 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>31806,
		'description'=>'Pedestal Terminal LCP, 72 Fibers',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>4,
		'description'=>'SLI-Single Line Installation',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>401,
		'description'=>'Aerial Drop FOC Cable Installation\nIncludes lashing, supply and/or installation of FOC drop cable, testing, color coded marking tapes as may be required by JPA, spiral sleeves as may be necessary, and other necessary activities',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40101,
		'description'=>'Aerial Drop Cable,outdoor, 1-Core',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40102,
		'description'=>'Aerial Drop Cable,outdoor, 2-Core',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>402,
		'description'=>'Duct Drop FOC Cable Installation\nIncludes supply and/or installation of cable, testing, conduit cleaning, cable pulling & racking with plastic ties,  guide wires, pushrodding, removal of duct sealant, re-sealing, as may be necessary, and other related activities.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40201,
		'description'=>'Drop Cable, indoor, 1-Core',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40202,
		'description'=>'Drop Cable, indoor, 2-Core',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40203,
		'description'=>'Duct Drop Cable,outdoor, 1-Core',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40204,
		'description'=>'Duct Drop Cable,outdoor, 2-Core',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>403,
		'description'=>'Miscellaneous FTTH Subscriber Line Installation Items',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40301,
		'description'=>'Fiber Access Terminal (FAT)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40302,
		'description'=>'Access Terminal Box (ATB)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>40303,
		'description'=>'Field Installable Connector (FIC)\nIncludes termination of FIC to fiber drop cable',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>5,
		'description'=>'CABLE ENTRANCE FACILITIES\nIncludes supply and installation of conduits, bends, adaptor, bushing, locknut, expansion bolts, hanger and/or bracket mounting supports (hot-dipped galvanized), painted to match existing or required color',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>501,
		'description'=>'Conduit installation\nIncludes supply and installation of conduits, bends, adaptor, coupling, locknut, expansion bolts, hanger and/or bracket mounting supports (hot-dipped galvanized), painted to match existing or required color, maleable c-clamp',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50101,
		'description'=>'PVC Conduit, 1-run 1\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50102,
		'description'=>'PVC Conduit, 1-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50103,
		'description'=>'PVC Conduit, 2-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50104,
		'description'=>'PVC Conduit, 4-run 2\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50105,
		'description'=>'PVC Conduit, 2-run 3\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50106,
		'description'=>'PVC Conduit, 4- run 3\" dia. Wall/ ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50107,
		'description'=>'PVC Conduit, 2- run 4\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50108,
		'description'=>'PVC Conduit, 4-run 4\" dia. Wall / ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50109,
		'description'=>'RSC Conduit, 1-run 1\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50110,
		'description'=>'RSC Conduit, 1-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50111,
		'description'=>'RSC Conduit, 2-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50112,
		'description'=>'RSC Conduit, 4-run 2\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50113,
		'description'=>'RSC Conduit, 2-run 3\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50114,
		'description'=>'RSC Conduit, 4- run 3\" dia. Wall/ ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50115,
		'description'=>'RSC Conduit, 2- run 4\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50116,
		'description'=>'RSC Conduit, 4-run 4\" dia. Wall / ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50117,
		'description'=>'G.I. Conduit, 1-run 1\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50118,
		'description'=>'G.I. Conduit, 1-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50119,
		'description'=>'G.I. Conduit, 2-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50120,
		'description'=>'G.I. Conduit, 4-run 2\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50121,
		'description'=>'G.I. Conduit, 2-run 3\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50122,
		'description'=>'G.I. Conduit, 4- run 3\" dia. Wall/ ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50123,
		'description'=>'G.I. Conduit, 2- run 4\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50124,
		'description'=>'G.I. Conduit, 4-run 4\" dia. Wall / ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50125,
		'description'=>'EMT Conduit, 1-run 1\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50126,
		'description'=>'EMT Conduit, 1-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50127,
		'description'=>'EMT Conduit, 2-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50128,
		'description'=>'EMT Conduit, 4-run 2\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50129,
		'description'=>'EMT Conduit, 2-run 3\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50130,
		'description'=>'EMT Conduit, 4- run 3\" dia. Wall/ ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50131,
		'description'=>'EMT Conduit, 2- run 4\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50132,
		'description'=>'EMT Conduit, 4-run 4\" dia. Wall / ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50133,
		'description'=>'IMC Conduit, 1-run 1\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50134,
		'description'=>'IMC Conduit, 1-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50135,
		'description'=>'IMC Conduit, 2-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50136,
		'description'=>'IMC Conduit, 4-run 2\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50137,
		'description'=>'IMC Conduit, 2-run 3\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50138,
		'description'=>'IMC Conduit, 4- run 3\" dia. Wall/ ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50139,
		'description'=>'IMC Conduit, 2- run 4\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50140,
		'description'=>'IMC Conduit, 4-run 4\" dia. Wall / ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50141,
		'description'=>'Flexible Metal Conduit, 1-run 1/2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50142,
		'description'=>'Flexible Metal Conduit, 1-run 1\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50143,
		'description'=>'Flexible Metal Conduit, 1-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50144,
		'description'=>'Flexible Metal Conduit, 2-run 2\" dia. Wall/ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50145,
		'description'=>'Flexible Metal Conduit, 1-run 3\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50146,
		'description'=>'Flexible Metal Conduit, 2-run 3\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50147,
		'description'=>'Flexible Metal Conduit, 1- run 4\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50148,
		'description'=>'Flexible Metal Conduit, 2- run 4\" dia. Wall /ceiling mounted',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50149,
		'description'=>'25mm? PVC Flexible Sleeve',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>502,
		'description'=>'INDOOR CABLE INSTALLATION\nIncludes supply and/or installation of cable, testing, conduit cleaning, cable pulling & racking with plastic ties,  guide wires, pushrodding, removal of duct sealant as may be necessary, and other related activities.',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50201,
		'description'=>'Indoor Single Mode Riser FOC, 12  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50202,
		'description'=>'Indoor Single Mode Riser  FOC, 24  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50203,
		'description'=>'Indoor Single Mode Riser  FOC, 48  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50204,
		'description'=>'Indoor Single Mode Riser  FOC, 72  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50205,
		'description'=>'Indoor mid-span Riser FOC, 48  Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50206,
		'description'=>'Indoor  Traditional Cable  FOC, 72 Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50207,
		'description'=>'Indoor  Traditional Cable  FOC, 144 Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50208,
		'description'=>'Indoor  Traditional Cable  FOC, 216 Fibers',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>503,
		'description'=>'PULLBOX / JUNCTION BOX\nIncludes supply and installation of gauge #16 G.I. enclosure box with primer coating, cover, expansion bolts, hanger and/or bracket mounting supports (hot-dipped galvanized), painted to match existing or required color',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50301,
		'description'=>'Pullbox for 1-4\" Run Conduit (typical: 400x400x200)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50302,
		'description'=>'Pullbox for 2-4\" Run Conduit (typical: 600x400x200)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50303,
		'description'=>'Pullbox for 4-4\" Run Conduit (typical: 600x600x200)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50304,
		'description'=>'Pullbox for 6-4\" Run Conduit (typical: 600x600x300)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50305,
		'description'=>'Pullbox for 8-4\" Run Conduit (typical: 800x800x300)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50306,
		'description'=>'Pull box, Wall mounted  (typical: 300x300x200)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50307,
		'description'=>'Pull box, Wall mounted  (typical: 300x300x100)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50308,
		'description'=>'Pull box, Wall mounted  (typical: 200x200x100)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50309,
		'description'=>'Pull box, Wall mounted  30\'\' x 30\"x 12\'\'',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50310,
		'description'=>'Pullbox,  Wall mounted  32\" x 20\" x 12\"',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50311,
		'description'=>'Pull box, Wall mounted  24\'\'x24\"x 16\'\'',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50312,
		'description'=>'Pullbox, Wall mounted  24\" x 16\" x 12\" ',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50313,
		'description'=>'Pullbox,  Wall mounted   6\" x 6\" x 10\"',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50314,
		'description'=>'Pullbox,  Wall mounted  16\" x 16\" x 8.5\"',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50315,
		'description'=>'Junction box,  6\" x 6\" x 4\"',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50316,
		'description'=>'Junction box,  8\" x 8\" x 4.5\"',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50317,
		'description'=>'Boring thru new Pullbox / Junction box',
		'unit'=>'conduit-hole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50318,
		'description'=>'Boring thru existing Pullbox / MTTC ',
		'unit'=>'conduit-hole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>504,
		'description'=>'PANEL (MTTC/TTC) BOX\nIncludes supply and installation of gauge #16 G.I. enclosure box with primer coating, expansion bolts, bracket mounting supports (hot-dipped galvanized), backboard, 2\" bridle rings, door with safety lock, hinges, painted to match existing or required color',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50401,
		'description'=>'Panel Box up to 200-pr Termination Capacity (typical: 400x400x200)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50402,
		'description'=>'Panel Box up to 600-pr Termination Capacity (typical: 600x600x200)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50403,
		'description'=>'Panel Box up to 1200-pr Termination Capacity (typical: 1000x1000x200)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>505,
		'description'=>'BORING THRU CONCRETE (MANUAL)\nIncludes chipping and restoration of concrete painted to match existing color, water proofing',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50501,
		'description'=>'Boring thru Bldg. Wall/Floor Slab (Manual)',
		'unit'=>'conduit-hole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50502,
		'description'=>'Boring thru Retaining Wall (Manual)',
		'unit'=>'conduit-hole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50503,
		'description'=>'Scan/X-Ray on wall or floor slab',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>506,
		'description'=>'BORING THRU CONCRETE (W/ CORING MACHINE)\nIncludes use of coring machine',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50601,
		'description'=>'Boring thru Bldg. Wall/Floor Slab (Coring)',
		'unit'=>'conduit-hole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50602,
		'description'=>'Boring thru Retaining Wall (Coring)',
		'unit'=>'conduit-hole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50603,
		'description'=>'Scan/X-Ray on wall or floor slab',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>507,
		'description'=>'WEATHERHEAD CAP\nIncludes supply and installation of weatherhead cap',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50701,
		'description'=>'Weather Head Cap, 1\" (G.I.)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50702,
		'description'=>'Weather Head Cap, 2\" (G.I.)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50703,
		'description'=>'Weather Head Cap, 3\" (G.I.)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50704,
		'description'=>'Weather Head Cap, 4\" (G.I.)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>508,
		'description'=>'WALL STRAP\nWork includes installation of wall strap (eye type or loop type) & lag screw, insertion to existing entrance conduit up to MTTC including any short aerial extensions between building and other supporting structures and other necessary activities to complete the project. ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50801,
		'description'=>'Wall Strap Loop Type',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50802,
		'description'=>'Wall Strap Eye Type',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>509,
		'description'=>'CABLE TRAY\nIncludes supply & installation of gauge 16 G.I. Cable Tray with top cover, primer coating, supported by 2x12mm? Rod treaded on both ends with expansion bolts and 50mm x 3.0mm thick angular stiffiner hanger (hot-dipped galvanized), painted to match existing or required color ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50901,
		'description'=>'G.I. Cable Tray (300mm x 100mm)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50902,
		'description'=>'G.I. Cable Tray (450mm x 100mm)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50903,
		'description'=>'G.I. Cable Tray (600mm x 150mm)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50904,
		'description'=>'Plastic Cable Tray (300mm x 100mm) - Yellow',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50905,
		'description'=>'Plastic Cable Tray (450mm x 100mm) - Yellow',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>50906,
		'description'=>'Plastic Cable Tray (600mm x 150mm) - Yellow',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>510,
		'description'=>'CABLE LADDER\nIncludes supply & installation of cable ladder, hanger and/or bracket mounting supports , expansion bolts (hot-dipped galvanized), and other necessary accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51001,
		'description'=>'Cable Ladder 300mm wide',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51002,
		'description'=>'Cable Ladder 600mm wide',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>511,
		'description'=>'MDF VERTICAL FRAME\nIncludes supply & installation of powder-coated vertical frame, overhead strip count labeling board, bridle rings, terminal block backmount holder with treaded holes, screws, expansion bolts, and other necessary accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51101,
		'description'=>'Main Disribution Frame (MDF), 6x100 prs capacity',
		'unit'=>'/vertical'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51102,
		'description'=>'Main Disribution Frame (MDF), 7x100 prs capacity',
		'unit'=>'/vertical'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51103,
		'description'=>'Main Disribution Frame (MDF), 8x100 prs capacity',
		'unit'=>'/vertical'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51104,
		'description'=>'?\" Backboard (typical size 500x500 mm?)',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>512,
		'description'=>'BRACKET INSTALLATION\nIncludes supply & installation of bracket screws, expansion bolts, and other necessary accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51201,
		'description'=>'Bracket for LCP/NAP',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51202,
		'description'=>'Bracket for Pullbox/Junction box',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>513,
		'description'=>'POWER CABLE INSTALLATION\nIncludes supply & installation of power cable from Cabinet to tapping point, screws, expansion bolts, and other necessary accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51301,
		'description'=>'Power cable (from MDP to panel box and from panel box to equipment)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51302,
		'description'=>'Power cable (from circuit breaker to  aircon)',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>514,
		'description'=>'OLT/MSAN/MDU INSTALLATION\nIncludes supply & installation of power cable from Cabinet to tapping point, screws, expansion bolts, and other necessary accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51401,
		'description'=>'OLT rack and all equipment installation',
		'unit'=>'set'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51402,
		'description'=>'MSAN(Hybrid MSAN) rack and all equipment installation',
		'unit'=>'set'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51403,
		'description'=>'MDU(Mini MSAN) rack and all equipment installation',
		'unit'=>'set'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51404,
		'description'=>'Cabinet(FL-05) for MSAN(Hybrid MSAN) and all equipment installation',
		'unit'=>'set'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51405,
		'description'=>'Cabinet(FS-02) for MDU(Mini MSAN) and all equipment installation',
		'unit'=>'set'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51406,
		'description'=>'Conduit/ladder installation and restoration',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>515,
		'description'=>'GROUNDING INSTALLATION\nIncludes supply & installation of grounding rod, grounding clamp, gronding wires, and other necessary accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51501,
		'description'=>'Grounding cable',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>51502,
		'description'=>'Grounding bus bar',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>6,
		'description'=>'RECOVERY OF OSP FACILITIES\nIncludes de-installation, unlashing, delivery to operator\'s Warehouse',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>601,
		'description'=>'Recovery of Cable (Copper)\n',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60101,
		'description'=>'Recovery of Aerial Cable less than 100 pairs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60102,
		'description'=>'Recovery of Aerial Cable 100 - 300 prs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60103,
		'description'=>'Recovery of Aerial Cable 400 - 600 prs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60104,
		'description'=>'Recovery of U/G Cable less than 600 pairs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60105,
		'description'=>'Recovery of U/G Cable 600-900 prs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60106,
		'description'=>'Recovery of U/G Cable 1200-1800 prs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60107,
		'description'=>'Recovery of U/G Cable 2100-3000 prs',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>602,
		'description'=>'Recovery of Cable (Fiber)\n',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60201,
		'description'=>'Recovery of Aerial Fiber Optic Cable',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60202,
		'description'=>'Recovery of U/G Fiber Optic Cable',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>603,
		'description'=>'Recovery of Pole lines hardwares\nIncludes breaking of concreate pavement , recovery of Pole (creosoted/concreate) pavement restoration',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60301,
		'description'=>'Recovery of Pole',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60302,
		'description'=>'Recovery of Messenger Wire',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60303,
		'description'=>'Recovery of Suspension Clamp',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60304,
		'description'=>'Recovery of DP Terminal',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60305,
		'description'=>'Recovery of Extension Arm',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60306,
		'description'=>'Recovery of Guying and fixtures',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60307,
		'description'=>'Recovery of Reinforcing Link',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60308,
		'description'=>'Recovery of Closures',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60309,
		'description'=>'Recovery of Existing Cabinet',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>604,
		'description'=>'Transferring/Raising of Attachments \nWork includes setting-up, detach/attach the attachment including DP\'s to new pole and tensioning cable. ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60401,
		'description'=>'Transferring of Attachments ',
		'unit'=>'/pole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60402,
		'description'=>'Raising of Attachments ',
		'unit'=>'/pole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>605,
		'description'=>'Termination of Cable to Breakstrip/Terminal Block & MDF \nWork includes cable preparation, pair identification,  termination with the use of terminating tool, provision of straps, and provision/tagging of cable ID markers. ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60501,
		'description'=>'Per Cable Pair Termination',
		'unit'=>'pair'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>606,
		'description'=>'MECO POLE CLEARING \nWork includes C1/C2 positioning, re-tensioning of sagging cables, cable bunching (re-grooming of sagging and entangled wires, bunching of parallel wires by using tie-wrap and removal and recovery of dead wires),  hauling of recovered pole lines hardwares to designated PLDT warehouse, re-positioning of grounding, extension arms and other hardwares attached to PLDT pole affected by pole clearing and detach/attach of DP\'s with sufficient stub',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60601,
		'description'=>'MECO POLE CLEARING ',
		'unit'=>'/pole'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>607,
		'description'=>'Cleaning of Distribution Points, DP\'s   \nWork includes fixing of DP\'s (10prs, 20prs & 30prs) and use of cleaning materials ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60701,
		'description'=>'Cleaning of Distribution Points, DP\'s   ',
		'unit'=>'each'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>608,
		'description'=>'Cable Bunching\nWork includes bunching cable ',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60801,
		'description'=>'Cable Bunching',
		'unit'=>'/pole span'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>609,
		'description'=>'Relashing of Cable \nWork includes unlashing of cable, installation of lashing wire, cable lashing clamp, tie-cable support and accessories',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>60901,
		'description'=>'Relashing of Cable ',
		'unit'=>'meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>7,
		'description'=>'ENGINEERING\nIncludes site survey, detailed engineering, Keymap, Geographical and/or Single Line Diagram (SLD) , Pole GPS locations using the radian up to 6 decimal, splicing/termination details, and other related drawings in Computer Aided Draft and Design (CADD) FiMS compliant presentation (as-planned and as-built in hard and soft copy)',
		'unit'=>''
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>701,
		'description'=>'DD Plan: Trunk, Interconnection, Distribution Cable',
		'unit'=>'cable-meter'
		] );
					
		DB::table('boq')->insert( [
		'control_number'=>702,
		'description'=>'DD Plan: Cable Entrance Facilities (per building), includes at least Isometric drawing, site vicinity location plan, floor plan, BOQ',
		'unit'=>'each'
		] );

		DB::table('bom')->insert( [
		'control_number'=>10110,
		'description'=>'Pole, Concrete 9.0m',
		'unit'=>'pc/s'
		] );
    }
}
