<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::create([
                'type_id' => '1' ,
                'name' => 'University of Hertfordshire',
                'url' => '',
                'address' => 'Administrative Capital in the fifth district R5, in the Administrative Capital',
                'email' => '',
                'map' => '29.99731956638061 , 31.633598254961715',
                'phone' => '16192',
        ]);

        Institution::create([
            'type_id' => '1' ,
            'name' => 'Canadian International College',
            'url' => '',
            'address' => 'New Administrative Capital City, Plot No. (X1-05)',
            'email' => '',
            'map' => '30.029167820249103, 31.71315710925999',
            'phone' => '16242',
    ]);

Institution::create([
    'type_id' => '1' ,
    'name' => 'The British University',
    'url' => '',
    'address' => 'Still not located',
    'email' => 'info@bue.edu.eg',
    'map' => '',
    'phone' => '+2019283',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'Coventry University',
    'url' => '',
    'address' => 'The desert back of Cairo Governorate,XPF5+5CR, the desert back of Cairo Governorate',
    'email' => 'hello@tkh.edu.eg',
    'map' => '29.972522821950204, 31.708827906555314',
    'phone' => '19940',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'Sinai University',
    'url' => '',
    'address' => 'Still not located',
    'email' => 'Info@su.edu.eg',
    'map' => '',
    'phone' => '+20-19050',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'New Hungarian University',
    'url' => '',
    'address' => 'XMV5+4MW, Unnamed Road, Cairo Governorate, Cairo Governorate Desert',
    'email' => '',
    'map' => '29.99303945293928, 31.659196614852007',
    'phone' => 'under construction',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'The American University',
    'url' => '',
    'address' => 'Still not located',
    'email' => 'Still not located',
    'map' => 'Still not located',
    'phone' => '19282',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'German International University',
    'url' => '',
    'address' => 'Regional Ring Rd, East Cairo, New Administrative Capital, Cairo, Egypt',
    'email' => 'info@giu-uni.de',
    'map' => '',
    'phone' => '01273604747',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'New capital English school',
    'url' => '',
    'address' => 'New Capital – R2 – D1 SC4',
    'email' => 'info@nces.edu.eg',
    'map' => '30.038978230694607, 31.670805215651065',
    'phone' => '01064234182',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'New Castle International School',
    'url' => '',
    'address' => 'R2 District - Behind Al-Fattah Al-Alim Mosque',
    'email' => 'info@newcastle.edu.eg',
    'map' => '30.028268841815432, 31.667371940647644',
    'phone' => ' 01023680517',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'Seven Pillars International School',
    'url' => '',
    'address' => 'Number (H 10) Area (MU23) The Administrative Capital Cairo New Administrative ',
    'email' => '',
    'map' => '30.027059106694267, 31.681436735610795',
    'phone' => '01101117017',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'SAHARA SCHOOL',
    'url' => '',
    'address' => ': The new administrative capital - the residential urban complex of Sheikh Mohammed bin Zayed - the third district R3',
    'email' => 'newcapital@saharaschools.com',
    'map' => '30.0225824712264, 31.693132625822688',
    'phone' => '+20 105 000 5008',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'International School -(CADMUS NAC)',
    'url' => '',
    'address' => 'Residential Area 3 (R3), District 8, Slot number 10,',
    'email' => 'info@cadmusnac.sabis.net',
    'map' => '30.024396084372018, 31.6921874969867',
    'phone' => '01102254000',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'Dr.Nermien Ismail Schools New',
    'url' => '',
    'address' => 'The new administrative capital - R2 - Cairo',
    'email' => 'ahmed.amer@nis-egypt.com',
    'map' => '30.034835359819073, 31.65491299913892',
    'phone' => '010 1996 5655',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'International Public School',
    'url' => '',
    'address' => 'R2 - Next to Nermin Ismail School NIS - New Administrative Capital - Cairo',
    'email' => 'ips.nc.2022@gmail.com',
    'map' => '30.02838029209481, 31.671330928219334',
    'phone' => '01015325571',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'Royal Canadian School in Egypt',
    'url' => '',
    'address' => 'DC - SC - 3) Land R2, The Residential Neighborhood',
    'email' => 'info@royalcanadianschool.com',
    'map' => '30.037761757706534, 31.65891149698705',
    'phone' => '01278760058',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'Anglo American School',
    'url' => '',
    'address' => 'The New Administrative Capital  R3, Mohamed bin Zayed North Axis, Third District',
    'email' => 'infoac@angloamerican.edu.eg',
    'map' => '30.024912894513218, 31.6878504372771',
    'phone' => '01014860850',
]);
Institution::create([
    'type_id' => '1' ,
    'name' => 'London college school',
    'url' => '',
    'address' => 'Code (SCH6) - R7 - New Administrative Capital,',
    'email' => 'info@londoncollegenc.com',
    'map' => '29.966755603673867, 31.72257989635659',
    'phone' => '01033083999',
]);
Institution::create([
    'type_id' => '2' ,
    'name' => '3Points Mall New Capital',
    'url' => '',
    'address' => 'The administrative capital, Al-Dawwan Town,',
    'email' => 'Info@alborouj-eg.com',
    'map' => '29.9994742136689, 31.732369579094097',
    'phone' => '16257',
]);Institution::create([
    'type_id' => '2' ,
    'name' => '6IXTY BUSINESS PARK MALL ',
    'url' => '',
    'address' => 'in the heart of the Financial district of the New Administrative Capital.',
    'email' => 'Info@alborouj-eg.com',
    'map' => '30.01184369495367, 31.739575283494318',
    'phone' => '16257',
]);Institution::create([
    'type_id' => '2' ,
    'name' => 'MARQUEE MALL NEW CAPITAL ',
    'url' => '',
    'address' => 'The Marquee Mall project is located near the diplomatic district',
    'email' => 'info@Realogy-eg.com',
    'map' => '30.015922861807216, 31.740219196986477',
    'phone' => '01111115950',
]);Institution::create([
    'type_id' => '2' ,
    'name' => 'PARIS MALL NEW CAPITAL',
    'url' => '',
    'address' => 'in the heart of New Administrative Capital, plot MU23.',
    'email' => 'sales@selecthouse.co',
    'map' => '30.031226247455628, 31.681132996986864',
    'phone' => '01153831111',
]);Institution::create([
    'type_id' => '2' ,
    'name' => 'SOLIDERE MALL NEW CAPITAL',
    'url' => '',
    'address' => 'Solidere Mall can be found Downtown in the New Capital, it stands out being the first thing you see in front of Al Masa Hotel, which is a very luxurious address.',
    'email' => 'Still ',
    'map' => '30.006284693564712, 31.72356010718648',
    'phone' => 'Still ',
]);Institution::create([
    'type_id' => '2' ,
    'name' => 'ELITE MALL NEW CAPITAL',
    'url' => '',
    'address' => 'Located between the R3 and R2 residential districts, it also attracts residents from nearby neighborhoods',
    'email' => 'info@landmarkeg.com',
    'map' => '30.03765569397475, 31.6822406546591',
    'phone' => '01000670414',
]);Institution::create([
    'type_id' => '2' ,
    'name' => 'SMART MALL NEW CAPITAL',
    'url' => '',
    'address' => 'in the heart of the Downtown area, which is the most active and popular part of the Administrative Capital.',
    'email' => 'still without ',
    'map' => '30.004822104963925, 31.732515214123502',
    'phone' => '01146812776',
]);Institution::create([
    'type_id' => '2' ,
    'name' => 'CAIRO BUSINESS PLAZA NEW CAPITAL',
    'url' => '',
    'address' => 'the New Capital, Financial District. In r7',
    'email' => 'still without ',
    'map' => '30.011511862141493, 31.721148072244247',
    'phone' => ' 01111115950',
]);Institution::create([
    'type_id' => '2' ,
    'name' => 'PODIA TOWER NEW CAPITAL',
    'url' => '',
    'address' => 'It is located in the new administrative capital, specifically on the northern axis of Mohamed bin Zayed.',
    'email' => 'still without ',
    'map' => '29.99445340018046, 31.750330316114667',
    'phone' => '01207797410',
]);
Institution::create([
    'type_id' => '3' ,
    'name' => 'SOFITEL OIA TOWERS',
    'url' => '',
    'address' => 'in New Administrative Capital near the iconic tower.',
    'email' => '',
    'map' => '',
    'phone' => '',
]);Institution::create([
    'type_id' => '3' ,
    'name' => '',
    'url' => '',
    'address' => '',
    'email' => '',
    'map' => '',
    'phone' => '',
]);
    }
}
