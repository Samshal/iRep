<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ConstituencySeeder extends Seeder
{
    public function run()
    {
        $constituencies = [
            // Abia State
            ['name' => 'Arochukwu/Ohafia', 'state_id' => 1],
            ['name' => 'Bende', 'state_id' => 1],
            ['name' => 'Ikwuano/Umuahia North/Umuahia South', 'state_id' => 1],
            ['name' => 'Isiala Ngwa North/Isiala Ngwa South', 'state_id' => 1],
            ['name' => 'Isuikwuato/Umunneochi', 'state_id' => 1],
            ['name' => 'Obingwa/Osisioma/Ugwunagbo', 'state_id' => 1],
            ['name' => 'Ukwa East/Ukwa West', 'state_id' => 1],
            ['name' => 'Aba North/Aba South', 'state_id' => 1],

            // Adamawa State
            ['name' => 'Fufore/Song', 'state_id' => 2],
            ['name' => 'Ganye/Jada/Mayo-Belwa/Toungo', 'state_id' => 2],
            ['name' => 'Gombi/Hong', 'state_id' => 2],
            ['name' => 'Madagali/Michika', 'state_id' => 2],
            ['name' => 'Mubi North/Mubi South/Maiha', 'state_id' => 2],
            ['name' => 'Numan/Demsa/Lamurde', 'state_id' => 2],
            ['name' => 'Yola North/Yola South/Girei', 'state_id' => 2],
            ['name' => 'Shelleng/Guyuk', 'state_id' => 2],

            // Akwa Ibom State
            ['name' => 'Abak/Etim Ekpo/Ika', 'state_id' => 3],
            ['name' => 'Eket/Esit Eket/ONNA/Ibeno', 'state_id' => 3],
            ['name' => 'Ikono/Ini', 'state_id' => 3],
            ['name' => 'Ikot Abasi/Mkpat Enin/Eastern Obolo', 'state_id' => 3],
            ['name' => 'Ikot Ekpene/Essien Udim/Obot Akara', 'state_id' => 3],
            ['name' => 'Itu/Ibiono Ibom', 'state_id' => 3],
            ['name' => 'Mbo/Okobo/Oron/Udung Uko/Urue Offong/Oruko', 'state_id' => 3],
            ['name' => 'Ukanafun/Oruk Anam', 'state_id' => 3],
            ['name' => 'Uyo/Uruan/Nsit Atai/Ibesikpo Asutan', 'state_id' => 3],
            ['name' => 'Etinan/Nsit Ibom/Nsit Ubium', 'state_id' => 3],

            ['name' => 'Aguata', 'state_id' => 4],
            ['name' => 'Anambra East/Anambra West', 'state_id' => 4],
            ['name' => 'Anaocha/Njikoka/Dunukofia', 'state_id' => 4],
            ['name' => 'Awka North/Awka South', 'state_id' => 4],
            ['name' => 'Ekwusigo/Nnewi North/Nnewi South', 'state_id' => 4],
            ['name' => 'Idemili North/Idemili South', 'state_id' => 4],
            ['name' => 'Ihiala', 'state_id' => 4],
            ['name' => 'Ogbaru', 'state_id' => 4],
            ['name' => 'Onitsha North/Onitsha South', 'state_id' => 4],
            ['name' => 'Orumba North/Orumba South', 'state_id' => 4],

            // Bauchi State Federal Constituencies
            ['name' => 'Alkaleri/Kirfi', 'state_id' => 5],
            ['name' => 'Bauchi', 'state_id' => 5],
            ['name' => 'Bogoro/Dass/Tafawa Balewa', 'state_id' => 5],
            ['name' => 'Darazo/Ganjuwa', 'state_id' => 5],
            ['name' => 'Gamawa', 'state_id' => 5],
            ['name' => 'Katagum', 'state_id' => 5],
            ['name' => 'Misau/Dambam', 'state_id' => 5],
            ['name' => 'Ningi/Warji', 'state_id' => 5],
            ['name' => 'Shira/Giade', 'state_id' => 5],
            ['name' => 'Zaki', 'state_id' => 5],

            // Bayelsa State Federal Constituencies
            ['name' => 'Brass/Nembe', 'state_id' => 6],
            ['name' => 'Ekeremor/Sagbama', 'state_id' => 6],
            ['name' => 'Kolokuma/Opokuma/Yenagoa', 'state_id' => 6],
            ['name' => 'Ogbia', 'state_id' => 6],
            ['name' => 'Southern Ijaw', 'state_id' => 6],

            // Benue State Federal Constituencies
            ['name' => 'Ado/Okpokwu/Ogbadibo', 'state_id' => 7],
            ['name' => 'Apa/Agatu', 'state_id' => 7],
            ['name' => 'Buruku', 'state_id' => 7],
            ['name' => 'Gboko/Tarka', 'state_id' => 7],
            ['name' => 'Guma/Makurdi', 'state_id' => 7],
            ['name' => 'Gwer East/Gwer West', 'state_id' => 7],
            ['name' => 'Katsina-Ala/Ukum/Logo', 'state_id' => 7],
            ['name' => 'Kwande/Ushongo', 'state_id' => 7],
            ['name' => 'Otukpo/Ohimini', 'state_id' => 7],

            // Borno State Federal Constituencies
            ['name' => 'Abadam/Guzamala/Kukawa/Mobbar', 'state_id' => 8],
            ['name' => 'Askira-Uba/Hawul', 'state_id' => 8],
            ['name' => 'Bama/Ngala/Kala-Balge', 'state_id' => 8],
            ['name' => 'Biu/Bayo/Shani/Kwaya Kusar', 'state_id' => 8],
            ['name' => 'Chibok/Damboa/Gwoza', 'state_id' => 8],
            ['name' => 'Jere', 'state_id' => 8],
            ['name' => 'Kaga/Magumeri/Gubio', 'state_id' => 8],
            ['name' => 'Konduga/Mafa/Dikwa', 'state_id' => 8],
            ['name' => 'Maiduguri', 'state_id' => 8],
            ['name' => 'Marte/Monguno/Nganzai', 'state_id' => 8],

            // Cross River State Federal Constituencies
            ['name' => 'Abi/Yakurr', 'state_id' => 9],
            ['name' => 'Akamkpa/Biase', 'state_id' => 9],
            ['name' => 'Bekwarra/Obudu/Obanliku', 'state_id' => 9],
            ['name' => 'Calabar Municipality/Odukpani', 'state_id' => 9],
            ['name' => 'Ikom/Boki', 'state_id' => 9],
            ['name' => 'Obubra/Etung', 'state_id' => 9],
            ['name' => 'Obanliku/Obudu/Bekwarra', 'state_id' => 9],
            ['name' => 'Ogoja/Yala', 'state_id' => 9],

            // Delta State Federal Constituencies
            ['name' => 'Aniocha/Oshimili', 'state_id' => 10],
            ['name' => 'Bomadi/Patani', 'state_id' => 10],
            ['name' => 'Burutu', 'state_id' => 10],
            ['name' => 'Ethiope East/Ethiope West', 'state_id' => 10],
            ['name' => 'Ika North-East/Ika South', 'state_id' => 10],
            ['name' => 'Isoko North/Isoko South', 'state_id' => 10],
            ['name' => 'Ndokwa East/Ndokwa West/Ukwuani', 'state_id' => 10],
            ['name' => 'Okpe/Sapele/Uvwie', 'state_id' => 10],
            ['name' => 'Ughelli North/Ughelli South/Udu', 'state_id' => 10],
            ['name' => 'Warri North/Warri South/Warri South-West', 'state_id' => 10],

            // Ebonyi State Federal Constituencies
            ['name' => 'Abakaliki/Izzi', 'state_id' => 11],
            ['name' => 'Afikpo North/Afikpo South', 'state_id' => 11],
            ['name' => 'Ebonyi/Ohaukwu', 'state_id' => 11],
            ['name' => 'Ezza North/Ishielu', 'state_id' => 11],
            ['name' => 'Ezza South/Ikwo', 'state_id' => 11],
            ['name' => 'Ohaozara/Onicha/Ivo', 'state_id' => 11],

            // Edo State Federal Constituencies
            ['name' => 'Akoko-Edo', 'state_id' => 12],
            ['name' => 'Egor/Ikpoba-Okha', 'state_id' => 12],
            ['name' => 'Esan Central/Esan West/Igueben', 'state_id' => 12],
            ['name' => 'Esan North-East/Esan South-East', 'state_id' => 12],
            ['name' => 'Oredo', 'state_id' => 12],
            ['name' => 'Orhionmwon/Uhunmwonde', 'state_id' => 12],
            ['name' => 'Ovia North-East/Ovia South-West', 'state_id' => 12],
            ['name' => 'Etsako East/Etsako West/Etsako Central', 'state_id' => 12],

            // Ekiti State Federal Constituencies
            ['name' => 'Ekiti East/Ikole/Oye', 'state_id' => 13],
            ['name' => 'Ekiti South-West/Ikere/Ise-Orun', 'state_id' => 13],
            ['name' => 'Ekiti West/Efon/Ijero', 'state_id' => 13],
            ['name' => 'Gbonyin/Emure/Ekiti East', 'state_id' => 13],
            ['name' => 'Ido/Osi/Moba/Ilejemeje', 'state_id' => 13],
            ['name' => 'Ado-Ekiti/Irepodun-Ifelodun', 'state_id' => 13],

            // Enugu State Federal Constituencies
            ['name' => 'Enugu East/Isi-Uzo', 'state_id' => 14],
            ['name' => 'Enugu North/Udenu', 'state_id' => 14],
            ['name' => 'Enugu South/Enugu North', 'state_id' => 14],
            ['name' => 'Igbo-Etiti/Uzo-Uwani', 'state_id' => 14],
            ['name' => 'Nsukka/Igbo-Eze South', 'state_id' => 14],
            ['name' => 'Udi/Ezeagu', 'state_id' => 14],
            ['name' => 'Aninri/Awgu/Oji-River', 'state_id' => 14],
            ['name' => 'Igbo-Eze North/Udenu', 'state_id' => 14],

            // Gombe State Federal Constituencies
            ['name' => 'Akko', 'state_id' => 15],
            ['name' => 'Balanga/Billiri', 'state_id' => 15],
            ['name' => 'Dukku/Nafada', 'state_id' => 15],
            ['name' => 'Gombe/Kwami/Funakaye', 'state_id' => 15],
            ['name' => 'Kaltungo/Shongom', 'state_id' => 15],
            ['name' => 'Yamaltu/Deba', 'state_id' => 15],

            // Imo State Federal Constituencies
            ['name' => 'Aboh Mbaise/Ngor Okpala', 'state_id' => 16],
            ['name' => 'Ahiazu Mbaise/Ezinihitte', 'state_id' => 16],
            ['name' => 'Ideato North/Ideato South', 'state_id' => 16],
            ['name' => 'Ikeduru/Mbaitoli', 'state_id' => 16],
            ['name' => 'Isiala Mbano/Onuimo/Okigwe', 'state_id' => 16],
            ['name' => 'Nwangele/Njaba/Isu/Nkwerre', 'state_id' => 16],
            ['name' => 'Ohaji-Egbema/Oguta/Oru West', 'state_id' => 16],
            ['name' => 'Orlu/Orsu/Oru East', 'state_id' => 16],
            ['name' => 'Owerri Municipal/Owerri North/Owerri West', 'state_id' => 16],

            // Jigawa State Federal Constituencies
            ['name' => 'Babura/Garki', 'state_id' => 17],
            ['name' => 'Birnin Kudu/Buji', 'state_id' => 17],
            ['name' => 'Dutse/Kiyawa', 'state_id' => 17],
            ['name' => 'Gagarawa/Gumel/Maigatari/Sule-Tankarkar', 'state_id' => 17],
            ['name' => 'Gwaram', 'state_id' => 17],
            ['name' => 'Hadejia/Kafin Hausa/Auyo', 'state_id' => 17],
            ['name' => 'Jahun/Miga', 'state_id' => 17],
            ['name' => 'Kazaure/Roni/Gwiwa/Yankwashi', 'state_id' => 17],
            ['name' => 'Ringim/Taura', 'state_id' => 17],

            // Kaduna State Federal Constituencies
            ['name' => 'Birnin Gwari/Giwa', 'state_id' => 18],
            ['name' => 'Chikun/Kajuru', 'state_id' => 18],
            ['name' => 'Igabi', 'state_id' => 18],
            ['name' => 'Ikara/Kubau', 'state_id' => 18],
            ['name' => 'Jema’a/Sanga', 'state_id' => 18],
            ['name' => 'Kachia/Kagarko', 'state_id' => 18],
            ['name' => 'Kaduna North', 'state_id' => 18],
            ['name' => 'Kaduna South', 'state_id' => 18],
            ['name' => 'Kaura', 'state_id' => 18],
            ['name' => 'Kauru', 'state_id' => 18],
            ['name' => 'Lere', 'state_id' => 18],
            ['name' => 'Makarfi/Kudan', 'state_id' => 18],
            ['name' => 'Sabon Gari', 'state_id' => 18],
            ['name' => 'Soba', 'state_id' => 18],
            ['name' => 'Zangon Kataf/Jaba', 'state_id' => 18],
            ['name' => 'Zaria', 'state_id' => 18],

            // Kano State Federal Constituencies
            ['name' => 'Bebeji/Kiru', 'state_id' => 19],
            ['name' => 'Bichi', 'state_id' => 19],
            ['name' => 'Dala', 'state_id' => 19],
            ['name' => 'Dambatta/Makoda', 'state_id' => 19],
            ['name' => 'Doguwa/Tudun Wada', 'state_id' => 19],
            ['name' => 'Fagge', 'state_id' => 19],
            ['name' => 'Gabasawa/Gezawa', 'state_id' => 19],
            ['name' => 'Gaya/Ajingi/Albasu', 'state_id' => 19],
            ['name' => 'Gwale', 'state_id' => 19],
            ['name' => 'Gwarzo/Kabo', 'state_id' => 19],
            ['name' => 'Kano Municipal', 'state_id' => 19],
            ['name' => 'Karaye/Rogo', 'state_id' => 19],
            ['name' => 'Kumbotso', 'state_id' => 19],
            ['name' => 'Madobi/Kura/Garun Mallam', 'state_id' => 19],
            ['name' => 'Minjibir/Ungogo', 'state_id' => 19],
            ['name' => 'Nasarawa', 'state_id' => 19],
            ['name' => 'Shanono/Bagwai', 'state_id' => 19],
            ['name' => 'Sumaila/Takai', 'state_id' => 19],
            ['name' => 'Tarauni', 'state_id' => 19],
            ['name' => 'Wudil/Garko', 'state_id' => 19],

            // Katsina State Federal Constituencies
            ['name' => 'Bakori/Danja', 'state_id' => 20],
            ['name' => 'Batagarawa/Rimi/Charanchi', 'state_id' => 20],
            ['name' => 'Batsari/Safana/Danmusa', 'state_id' => 20],
            ['name' => 'Baure/Zango', 'state_id' => 20],
            ['name' => 'Dandume/Funtua', 'state_id' => 20],
            ['name' => 'Dutsin-Ma/Kurfi', 'state_id' => 20],
            ['name' => 'Faskari/Kankara/Sabuwa', 'state_id' => 20],
            ['name' => 'Ingawa/Kusada/Kankia', 'state_id' => 20],
            ['name' => 'Kaita/Jibia', 'state_id' => 20],
            ['name' => 'Katsina', 'state_id' => 20],
            ['name' => 'Malumfashi/Kafur', 'state_id' => 20],
            ['name' => 'Mani/Bindawa', 'state_id' => 20],
            ['name' => 'Mashi/Dutsi', 'state_id' => 20],
            ['name' => 'Musawa/Matazu', 'state_id' => 20],

            // Kebbi State Federal Constituencies
            ['name' => 'Aleiro/Jega/Gwandu', 'state_id' => 21],
            ['name' => 'Arewa/Dandi', 'state_id' => 21],
            ['name' => 'Argungu/Augie', 'state_id' => 21],
            ['name' => 'Bagudo/Suru', 'state_id' => 21],
            ['name' => 'Birnin Kebbi/Kalgo/Bunza', 'state_id' => 21],
            ['name' => 'Danko/Wasagu/Zuru/Fakai/Sakaba', 'state_id' => 21],
            ['name' => 'Maiyama', 'state_id' => 21],
            ['name' => 'Ngaski/Shanga/Yauri', 'state_id' => 21],

            // Kogi State Federal Constituencies
            ['name' => 'Adavi/Okehi', 'state_id' => 22],
            ['name' => 'Ajaokuta', 'state_id' => 22],
            ['name' => 'Ankpa/Olamaboro/Omala', 'state_id' => 22],
            ['name' => 'Bassa/Dekina', 'state_id' => 22],
            ['name' => 'Ibaji/Idah/Igalamela/Odolu/Ofu', 'state_id' => 22],
            ['name' => 'Kabba/Bunu/Ijumu', 'state_id' => 22],
            ['name' => 'Lokoja/Kogi', 'state_id' => 22],
            ['name' => 'Okene/Ogori-Magongo', 'state_id' => 22],
            ['name' => 'Yagba East/Yagba West/Mopa-Muro', 'state_id' => 22],

            // Kwara State Federal Constituencies
            ['name' => 'Asa/Ilorin West', 'state_id' => 23],
            ['name' => 'Baruten/Kaiama', 'state_id' => 23],
            ['name' => 'Edu/Moro/Patigi', 'state_id' => 23],
            ['name' => 'Ekiti/Isin/Irepodun/Oke-Ero', 'state_id' => 23],
            ['name' => 'Ilorin East/South', 'state_id' => 23],
            ['name' => 'Offa/Oyun/Ifelodun', 'state_id' => 23],

            // Lagos State Federal Constituencies
            ['name' => 'Agege', 'state_id' => 24],
            ['name' => 'Ajeromi/Ifelodun', 'state_id' => 24],
            ['name' => 'Alimosho', 'state_id' => 24],
            ['name' => 'Amuwo Odofin', 'state_id' => 24],
            ['name' => 'Apapa', 'state_id' => 24],
            ['name' => 'Badagry', 'state_id' => 24],
            ['name' => 'Epe', 'state_id' => 24],
            ['name' => 'Eti Osa', 'state_id' => 24],
            ['name' => 'Ibeju Lekki', 'state_id' => 24],
            ['name' => 'Ifako-Ijaiye', 'state_id' => 24],
            ['name' => 'Ikeja', 'state_id' => 24],
            ['name' => 'Ikorodu', 'state_id' => 24],
            ['name' => 'Kosofe', 'state_id' => 24],
            ['name' => 'Lagos Island I', 'state_id' => 24],
            ['name' => 'Lagos Island II', 'state_id' => 24],
            ['name' => 'Lagos Mainland', 'state_id' => 24],
            ['name' => 'Mushin I', 'state_id' => 24],
            ['name' => 'Mushin II', 'state_id' => 24],
            ['name' => 'Ojo', 'state_id' => 24],
            ['name' => 'Oshodi-Isolo I', 'state_id' => 24],
            ['name' => 'Oshodi-Isolo II', 'state_id' => 24],
            ['name' => 'Shomolu', 'state_id' => 24],
            ['name' => 'Surulere I', 'state_id' => 24],
            ['name' => 'Surulere II', 'state_id' => 24],

            // Nasarawa State Federal Constituencies
            ['name' => 'Akwanga/Nassarawa Eggon/Wamba', 'state_id' => 25],
            ['name' => 'Doma/Keana/Awe', 'state_id' => 25],
            ['name' => 'Karu/Keffi/Kokona', 'state_id' => 25],
            ['name' => 'Lafia/Obi', 'state_id' => 25],
            ['name' => 'Nasarawa/Toto', 'state_id' => 25],

            // Niger State Federal Constituencies
            ['name' => 'Agaie/Lapai', 'state_id' => 26],
            ['name' => 'Bida/Katcha/Gbako', 'state_id' => 26],
            ['name' => 'Borgu/Agwara', 'state_id' => 26],
            ['name' => 'Chanchaga', 'state_id' => 26],
            ['name' => 'Edati/Lavun/Mokwa', 'state_id' => 26],
            ['name' => 'Gurara/Suleja/Tafa', 'state_id' => 26],
            ['name' => 'Magama/Rijau', 'state_id' => 26],
            ['name' => 'Mariga/Mashegu/Wushishi', 'state_id' => 26],
            ['name' => 'Munya/Shiroro/Rafi', 'state_id' => 26],
            ['name' => 'Paikoro/Bosso', 'state_id' => 26],

            // Ogun State
            $constituencies =
            ['name' => 'Abeokuta North/Obafemi Owode/Odeda', 'state_id' => 27],
            ['name' => 'Abeokuta South', 'state_id' => 27],
            ['name' => 'Ado-Odo/Ota', 'state_id' => 27],
            ['name' => 'Ewekoro/Ifo', 'state_id' => 27],
            ['name' => 'Ijebu North/Ijebu East/Ogun Waterside', 'state_id' => 27],
            ['name' => 'Ijebu Ode/Odogbolu/Ijebu North-East', 'state_id' => 27],
            ['name' => 'Ikenne/Shagamu/Remo North', 'state_id' => 27],
            ['name' => 'Imeko Afon/Yewa North', 'state_id' => 27],
            ['name' => 'Yewa South/Ipokia', 'state_id' => 27],


            // Ondo State Federal Constituencies
            ['name' => 'Akoko North-East/Akoko North-West', 'state_id' => 28],
            ['name' => 'Akoko South-East/Akoko South-West', 'state_id' => 28],
            ['name' => 'Akure North/Akure South', 'state_id' => 28],
            ['name' => 'Ese-Odo/Ilaje', 'state_id' => 28],
            ['name' => 'Idanre/Ifedore', 'state_id' => 28],
            ['name' => 'Odigbo/Ile-Oluji/Oke-Igbo', 'state_id' => 28],
            ['name' => 'Ondo East/Ondo West', 'state_id' => 28],
            ['name' => 'Owo/Ose', 'state_id' => 28],

            // Osun State Federal Constituencies
            ['name' => 'Atakunmosa East/Atakunmosa West/Ilesha East', 'state_id' => 29],
            ['name' => 'Ayedaade/Irewole/Isokan', 'state_id' => 29],
            ['name' => 'Ayedire/Iwo/Ola-Oluwa', 'state_id' => 29],
            ['name' => 'Boluwaduro/Ifedayo/Ila', 'state_id' => 29],
            ['name' => 'Ede North/Ede South/Egbedore/Ejigbo', 'state_id' => 29],
            ['name' => 'Ife Central/Ife North/Ife South/Ife East', 'state_id' => 29],
            ['name' => 'Ilesha West/Obokun/Oriade', 'state_id' => 29],
            ['name' => 'Irepodun/Olorunda/Orolu/Osogbo', 'state_id' => 29],

            // Oyo State Federal Constituencies
            ['name' => 'Afijio/Atiba/Oyo East/Oyo West', 'state_id' => 30],
            ['name' => 'Akinyele/Lagelu', 'state_id' => 30],
            ['name' => 'Egbeda/Ona Ara', 'state_id' => 30],
            ['name' => 'Ibadan North', 'state_id' => 30],
            ['name' => 'Ibadan North-East/Ibadan South-East', 'state_id' => 30],
            ['name' => 'Ibadan North-West/Ibadan South-West', 'state_id' => 30],
            ['name' => 'Ibarapa East/Ido', 'state_id' => 30],
            ['name' => 'Irepo/Oorelope/Olorunsogo', 'state_id' => 30],
            ['name' => 'Iseyin/Itesiwaju/Kajola/Iwajowa', 'state_id' => 30],
            ['name' => 'Ogbomosho North/Ogbomosho South/Orire', 'state_id' => 30],
            ['name' => 'Oluyole', 'state_id' => 30],
            ['name' => 'Saki East/Saki West/Atisbo', 'state_id' => 30],

            // Plateau State Federal Constituencies
            ['name' => 'Barkin-Ladi/Riyom', 'state_id' => 31],
            ['name' => 'Bassa/Jos North', 'state_id' => 31],
            ['name' => 'Jos South/Jos East', 'state_id' => 31],
            ['name' => 'Langtang North/Langtang South', 'state_id' => 31],
            ['name' => 'Mikang/Qua’an-Pan/Shendam', 'state_id' => 31],
            ['name' => 'Pankshin/Kanke/Kanam', 'state_id' => 31],
            ['name' => 'Wase', 'state_id' => 31],

            // Rivers State Federal Constituencies
            ['name' => 'Abua/Odual/Ahoada East', 'state_id' => 32],
            ['name' => 'Akuku Toru/Asari Toru', 'state_id' => 32],
            ['name' => 'Andoni/Opobo/Nkoro', 'state_id' => 32],
            ['name' => 'Bonny/Degema', 'state_id' => 32],
            ['name' => 'Eleme/Oyigbo/Tai', 'state_id' => 32],
            ['name' => 'Emohua/Ikwerre', 'state_id' => 32],
            ['name' => 'Etche/Omuma', 'state_id' => 32],
            ['name' => 'Gokana/Khana', 'state_id' => 32],
            ['name' => 'Obio/Akpor', 'state_id' => 32],
            ['name' => 'Ogba/Egbema/Ndoni', 'state_id' => 32],
            ['name' => 'Okrika/Ogu/Bolo', 'state_id' => 32],
            ['name' => 'Port Harcourt I', 'state_id' => 32],
            ['name' => 'Port Harcourt II', 'state_id' => 32],

            // Sokoto State Federal Constituencies
            ['name' => 'Binji/Silame', 'state_id' => 33],
            ['name' => 'Bodinga/Dange-Shuni/Tureta', 'state_id' => 33],
            ['name' => 'Gada/Goronyo', 'state_id' => 33],
            ['name' => 'Gudu/Tangaza', 'state_id' => 33],
            ['name' => 'Gwadabawa/Illela', 'state_id' => 33],
            ['name' => 'Isa/Sabon Birni', 'state_id' => 33],
            ['name' => 'Kebbe/Tambuwal', 'state_id' => 33],
            ['name' => 'Kware/Wamakko', 'state_id' => 33],
            ['name' => 'Rabah/Wurno', 'state_id' => 33],
            ['name' => 'Shagari/Yabo', 'state_id' => 33],
            ['name' => 'Sokoto North/Sokoto South', 'state_id' => 33],

            // Taraba State Federal Constituencies
            ['name' => 'Ardo-Kola/Lau/Karim-Lamido', 'state_id' => 34],
            ['name' => 'Bali/Gassol', 'state_id' => 34],
            ['name' => 'Donga/Ussa/Takum/Special Area', 'state_id' => 34],
            ['name' => 'Gashaka/Kurmi/Sardauna', 'state_id' => 34],
            ['name' => 'Jalingo/Yorro/Zing', 'state_id' => 34],
            ['name' => 'Wukari/Ibi', 'state_id' => 34],

            // Yobe State Federal Constituencies
            ['name' => 'Bade/Jakusko', 'state_id' => 35],
            ['name' => 'Bursari/Geidam/Yunusari', 'state_id' => 35],
            ['name' => 'Damaturu/Gujba/Gulani/Tarmuwa', 'state_id' => 35],
            ['name' => 'Fika/Fune', 'state_id' => 35],
            ['name' => 'Machina/Nguru/Yusufari', 'state_id' => 35],
            ['name' => 'Nangere/Potiskum', 'state_id' => 35],

            // Zamfara State Federal Constituencies
            ['name' => 'Anka/Talata-Mafara', 'state_id' => 36],
            ['name' => 'Bakura/Maradun', 'state_id' => 36],
            ['name' => 'Birnin Magaji/Shinkafi', 'state_id' => 36],
            ['name' => 'Bungudu/Maru', 'state_id' => 36],
            ['name' => 'Gummi/Bukkuyum', 'state_id' => 36],
            ['name' => 'Kaura-Namoda/Birnin Magaji', 'state_id' => 36],
            ['name' => 'Shinkafi/Zurmi', 'state_id' => 36],

            // Federal Capital Territory (FCT)
            ['name' => 'Abaji/Gwagwalada/Kwali/Kuje', 'state_id' => 37],
            ['name' => 'AMAC/Bwari', 'state_id' => 37],
        ];

        foreach ($constituencies as $constituency) {
            try {
                DB::table('constituencies')->insert($constituency);
            } catch (\Exception $e) {
                Log::error('Failed to insert constituency: ' . $e->getMessage(), $constituency);
            }
        }
    }
}
