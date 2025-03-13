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
            ['name' => 'Aba North/Aba South', 'state_id' => 1],
            ['name' => 'Arochukwu/Ohafia', 'state_id' => 1],
            ['name' => 'Bende', 'state_id' => 1],
            ['name' => 'Ikwuano/Umuahia North/Umuahia South', 'state_id' => 1],
            ['name' => 'Isiala Ngwa North/Isiala Ngwa South', 'state_id' => 1],
            ['name' => 'Isuikwuato/Umunneochi', 'state_id' => 1],
            ['name' => 'Obingwa/Osisioma/Ugwunagbo', 'state_id' => 1],
            ['name' => 'Ukwa East/Ukwa West', 'state_id' => 1],

            // Adamawa State
            ['name' => 'Numan/Demsa/Lamurde', 'state_id' => 2],
            ['name' => 'Fufore/Song', 'state_id' => 2],
            ['name' => 'Ganye/Jada/Mayo Belwa/Toungo', 'state_id' => 2],
            ['name' => 'Yola North/Yola South/Girei', 'state_id' => 2],
            ['name' => 'Gombi/Hong', 'state_id' => 2],
            ['name' => 'Shelleng/Guyuk', 'state_id' => 2],
            ['name' => 'Madagali/Michika', 'state_id' => 2],
            ['name' => 'Mubi North/Mubi South/Maiha', 'state_id' => 2],

            // Akwa Ibom State
            ['name' => 'Abak/Etim Ekpo/Ika', 'state_id' => 3],
            ['name' => 'Ikot Abasi/Mkpat Enin/Eastern Obolo', 'state_id' => 3],
            ['name' => 'Eket/Esit Eket/Ibeno/Onna', 'state_id' => 3],
            ['name' => 'Ikot Ekpene/Essien Udim/Obot Akara', 'state_id' => 3],
            ['name' => 'Etinan/Nsit Ibom/Nsit Ubium', 'state_id' => 3],
            ['name' => 'Uyo/Uruan/Nsit Atai/Ibesikpo Asutan', 'state_id' => 3],
            ['name' => 'Ini/Ibiono Ibom', 'state_id' => 3],

            // Anambra State
            ['name' => 'Aguata', 'state_id' => 4],
            ['name' => 'Anambra East/Anambra West', 'state_id' => 4],
            ['name' => 'Anaocha/Njikoka/Dunukofia', 'state_id' => 4],
            ['name' => 'Awka North/Awka South', 'state_id' => 4],
            ['name' => 'Oyi/Ayamelum', 'state_id' => 4],
            ['name' => 'Nnewi North/South/Ekwusigo', 'state_id' => 4],
            ['name' => 'Idemili North/Idemili South', 'state_id' => 4],
            ['name' => 'Ihiala I/II', 'state_id' => 4],
            ['name' => 'Ogbaru I/II', 'state_id' => 4],
            ['name' => 'Onitsha North/South', 'state_id' => 4],
            ['name' => 'Onitsha North/Onitsha South', 'state_id' => 4],
            ['name' => 'Orumba North/Orumba South', 'state_id' => 4],

            // Bauchi State
            ['name' => 'Alkaleri/Kirfi', 'state_id' => 5],
            ['name' => 'Bauchi', 'state_id' => 5],
            ['name' => 'Bogoro/Dass/Tafawa Balewa', 'state_id' => 5],
            ['name' => 'Damban/Misau', 'state_id' => 5],
            ['name' => 'Darazo/Ganjuwa', 'state_id' => 5],
            ['name' => 'Gamawa', 'state_id' => 5],
            ['name' => 'Katagum/Giade', 'state_id' => 5],
            ['name' => 'Itas/Gadau', 'state_id' => 5],
            ['name' => 'Jama\'Are/Itas/Gadau', 'state_id' => 5],
            ['name' => 'Ningi/Warji', 'state_id' => 5],
            ['name' => 'Shira/Giade', 'state_id' => 5],
            ['name' => 'Toro', 'state_id' => 5],
            ['name' => 'Zaki', 'state_id' => 5],

            // Bayelsa State
            ['name' => 'Brass/Nembe', 'state_id' => 6],
            ['name' => 'Ekeremor/Sagbama', 'state_id' => 6],
            ['name' => 'Kolokuma/Opokuma/Yenagoa', 'state_id' => 6],
            ['name' => 'Ogbia', 'state_id' => 6],
            ['name' => 'Southern Ijaw', 'state_id' => 6],

            // Benue State
            ['name' => 'Ado/Okpokwu/Ogbadibo', 'state_id' => 7],
            ['name' => 'Agatu/Apa', 'state_id' => 7],
            ['name' => 'Buruku', 'state_id' => 7],
            ['name' => 'Gboko/Tarka', 'state_id' => 7],
            ['name' => 'Guma/Makurdi', 'state_id' => 7],
            ['name' => 'Gwer East/Gwer West', 'state_id' => 7],
            ['name' => 'Katsina Ala/Ukum/Ushongo', 'state_id' => 7],
            ['name' => 'Konshisha/Vandeikya', 'state_id' => 7],
            ['name' => 'Kwande/Ushongo', 'state_id' => 7],
            ['name' => 'Ohimini/Otukpo', 'state_id' => 7],
            ['name' => 'Oju/Obi', 'state_id' => 7],

            // Borno State
            ['name' => 'Abadam/Guzamala', 'state_id' => 8],
            ['name' => 'Askira Uba/Hawul', 'state_id' => 8],
            ['name' => 'Bama/Ngala/Kala Balge', 'state_id' => 8],
            ['name' => 'Biu/Bayo/Shani/Kwaya Kusar', 'state_id' => 8],
            ['name' => 'Chibok/Damboa/Gwoza', 'state_id' => 8],
            ['name' => 'Dikwa/Mafa/Konduga', 'state_id' => 8],
            ['name' => 'Gubio/Magumeri/Nganzai', 'state_id' => 8],
            ['name' => 'Jere', 'state_id' => 8],
            ['name' => 'Kaga/Magumeri', 'state_id' => 8],
            ['name' => 'Kukawa/Mobbar', 'state_id' => 8],
            ['name' => 'Maiduguri', 'state_id' => 8],
            ['name' => 'Monguno/Marte/Nganzai', 'state_id' => 8],

            // Cross River State
            ['name' => 'Abi/Yakurr', 'state_id' => 9],
            ['name' => 'Akamkpa/Biase', 'state_id' => 9],
            ['name' => 'Akpabuyo/Bakassi/Calabar South', 'state_id' => 9],
            ['name' => 'Bekwarra/Obudu/Obanliku', 'state_id' => 9],
            ['name' => 'Boki/Ikom', 'state_id' => 9],
            ['name' => 'Calabar Municipal/Odukpani', 'state_id' => 9],
            ['name' => 'Ikom/Boki', 'state_id' => 9],
            ['name' => 'Obubra/Yakurr', 'state_id' => 9],
            ['name' => 'Ogoja/Yala', 'state_id' => 9],

            // Delta State
            ['name' => 'Aniocha/Oshimili', 'state_id' => 10],
            ['name' => 'Bomadi/Patani', 'state_id' => 10],
            ['name' => 'Burutu', 'state_id' => 10],
            ['name' => 'Ethiope', 'state_id' => 10],
            ['name' => 'Ika', 'state_id' => 10],
            ['name' => 'Isoko', 'state_id' => 10],
            ['name' => 'Ndokwa/Ukwuani', 'state_id' => 10],
            ['name' => 'Okpe/Sapele/Uvwie', 'state_id' => 10],
            ['name' => 'Udu/Ughelli North/Ughelli South', 'state_id' => 10],
            ['name' => 'Warri', 'state_id' => 10],

            // Ebonyi State
            ['name' => 'Abakaliki/Izzi', 'state_id' => 11],
            ['name' => 'Afikpo North/Afikpo South', 'state_id' => 11],
            ['name' => 'Ohaukwu/Ebonyi', 'state_id' => 11],
            ['name' => 'Ezza North/Ishielu', 'state_id' => 11],
            ['name' => 'Ezza South/Ikwo', 'state_id' => 11],
            ['name' => 'Ohaozara/Onicha/Ivo', 'state_id' => 11],

            // Edo State
            ['name' => 'Akoko Edo', 'state_id' => 12],
            ['name' => 'Egor/Ikpoba Okha', 'state_id' => 12],
            ['name' => 'Esan Central/Esan West/Igueben', 'state_id' => 12],
            ['name' => 'Esan South East/Esan North East', 'state_id' => 12],
            ['name' => 'Etsako', 'state_id' => 12],
            ['name' => 'Orhionmwon/Uhunmwonde', 'state_id' => 12],
            ['name' => 'Oredo', 'state_id' => 12],
            ['name' => 'Ovia', 'state_id' => 12],
            ['name' => 'Owan', 'state_id' => 12],

            // Ekiti State
            ['name' => 'Ado Ekiti/Irepodun Ifelodun', 'state_id' => 13],
            ['name' => 'Ekiti South West/Ijero/Efon', 'state_id' => 13],
            ['name' => 'Emure/Gbonyin/Ekiti East', 'state_id' => 13],
            ['name' => 'Ikere/Ise Orun/Ekiti West', 'state_id' => 13],
            ['name' => 'Ido Osi/Moba/Ilejemeje', 'state_id' => 13],
            ['name' => 'Ikole/Oye', 'state_id' => 13],

            // Enugu State
            ['name' => 'Awgu/Aninri/Oji River', 'state_id' => 14],
            ['name' => 'Enugu North/Enugu South', 'state_id' => 14],
            ['name' => 'Udi/Ezeagu', 'state_id' => 14],
            ['name' => 'Igbo Etiti/Uzo Uwani', 'state_id' => 14],
            ['name' => 'Igbo Eze North/Igbo Eze South', 'state_id' => 14],
            ['name' => 'Enugu East/Isi Uzo', 'state_id' => 14],
            ['name' => 'Nkanu East/Nkanu West', 'state_id' => 14],
            ['name' => 'Nsukka/Igbo Etiti', 'state_id' => 14],

            // Gombe State
            ['name' => 'Akko', 'state_id' => 15],
            ['name' => 'Balanga/Billiri', 'state_id' => 15],
            ['name' => 'Dukku/Nafada', 'state_id' => 15],
            ['name' => 'Gombe/Kwami/Funakaye', 'state_id' => 15],
            ['name' => 'Kaltungo/Shongom', 'state_id' => 15],
            ['name' => 'Yamaltu Deba', 'state_id' => 15],

            // Imo State
            ['name' => 'Aboh Mbaise/Ngor Okpala', 'state_id' => 16],
            ['name' => 'Ahiazu Mbaise/Ezinihitte', 'state_id' => 16],
            ['name' => 'Ehime Mbano/Ihitte Uboma/Obowo', 'state_id' => 16],
            ['name' => 'Ideato North/Ideato South', 'state_id' => 16],
            ['name' => 'Mbaitoli/Ikeduru', 'state_id' => 16],
            ['name' => 'Okigwe/Onuimo/Isiala Mbano', 'state_id' => 16],
            ['name' => 'Nwangele/Isu/Njaba/Nkwerre', 'state_id' => 16],
            ['name' => 'Oguta/Ohaji Egbema/Oru West', 'state_id' => 16],
            ['name' => 'Orlu/Orsu/Oru East', 'state_id' => 16],
            ['name' => 'Owerri Municipal/Owerri North/Owerri West', 'state_id' => 16],

            // Jigawa State
            ['name' => 'Hadejia/Auyo/Kafin Hausa', 'state_id' => 17],
            ['name' => 'Babura/Garki', 'state_id' => 17],
            ['name' => 'Biriniwa/Guri/Kiri Kasama', 'state_id' => 17],
            ['name' => 'Birnin Kudu/Buji', 'state_id' => 17],
            ['name' => 'Dutse/Kiyawa', 'state_id' => 17],
            ['name' => 'Gumel/Maigatari/Sule Tankarkar/Gagarawa', 'state_id' => 17],
            ['name' => 'Gwaram', 'state_id' => 17],
            ['name' => 'Kazaure/Roni/Gwiwa/Yankwashi', 'state_id' => 17],
            ['name' => 'Jahun/Miga', 'state_id' => 17],
            ['name' => 'Malam Madori/Kaugama', 'state_id' => 17],
            ['name' => 'Ringim/Taura', 'state_id' => 17],

            // Kaduna State
            ['name' => 'Birnin Gwari/Giwa', 'state_id' => 18],
            ['name' => 'Chikun/Kajuru', 'state_id' => 18],
            ['name' => 'Igabi', 'state_id' => 18],
            ['name' => 'Ikara/Kubau', 'state_id' => 18],
            ['name' => 'Jaba/Zangon Kataf', 'state_id' => 18],
            ['name' => 'Jema\'a/Sanga', 'state_id' => 18],
            ['name' => 'Kachia/Kagarko', 'state_id' => 18],
            ['name' => 'Kaduna North', 'state_id' => 18],
            ['name' => 'Kaduna South', 'state_id' => 18],
            ['name' => 'Kaura', 'state_id' => 18],
            ['name' => 'Kauru', 'state_id' => 18],
            ['name' => 'Makarfi/Kudan', 'state_id' => 18],
            ['name' => 'Lere', 'state_id' => 18],
            ['name' => 'Sabon Gari', 'state_id' => 18],
            ['name' => 'Soba', 'state_id' => 18],
            ['name' => 'Zaria', 'state_id' => 18],

            // Kano State
            ['name' => 'Ajingi/Albasu/Gaya', 'state_id' => 19],
            ['name' => 'Bagwai/Shanono', 'state_id' => 19],
            ['name' => 'Bebeji/Kiru', 'state_id' => 19],
            ['name' => 'Bichi', 'state_id' => 19],
            ['name' => 'Rano/Bunkure/Kibiya', 'state_id' => 19],
            ['name' => 'Dala', 'state_id' => 19],
            ['name' => 'Dambatta/Makoda', 'state_id' => 19],
            ['name' => 'Dawakin Kudu/Warawa', 'state_id' => 19],
            ['name' => 'Dawakin Tofa/Tofa/Rimin Gado', 'state_id' => 19],
            ['name' => 'Doguwa/Tudun Wada', 'state_id' => 19],
            ['name' => 'Fagge', 'state_id' => 19],
            ['name' => 'Gezawa/Gabasawa', 'state_id' => 19],
            ['name' => 'Garko/Kunchi', 'state_id' => 19],
            ['name' => 'Kura/Madobi/Garun Mallam', 'state_id' => 19],
            ['name' => 'Gwale', 'state_id' => 19],
            ['name' => 'Gwarzo/Kabo', 'state_id' => 19],
            ['name' => 'Kano Municipal', 'state_id' => 19],
            ['name' => 'Karaye/Rogo', 'state_id' => 19],
            ['name' => 'Kumbotso', 'state_id' => 19],
            ['name' => 'Kunchi/Tsanyawa', 'state_id' => 19],
            ['name' => 'Minjibir/Ungogo', 'state_id' => 19],
            ['name' => 'Nasarawa', 'state_id' => 19],
            ['name' => 'Sumaila/Takai', 'state_id' => 19],
            ['name' => 'Tarauni', 'state_id' => 19],
            ['name' => 'Wudil/Garko', 'state_id' => 19],

            // Katsina State
            ['name' => 'Bakori/Danja', 'state_id' => 20],
            ['name' => 'Batagarawa/Rimi/Charanchi', 'state_id' => 20],
            ['name' => 'Batsari/Safana/Danmusa', 'state_id' => 20],
            ['name' => 'Baure/Zango', 'state_id' => 20],
            ['name' => 'Bindawa/Mani', 'state_id' => 20],
            ['name' => 'Funtua/Dandume', 'state_id' => 20],
            ['name' => 'Daura/Sandamu/Mai\'adua', 'state_id' => 20],
            ['name' => 'Dutsi/Mashi', 'state_id' => 20],
            ['name' => 'Dutsin Ma/Kurfi', 'state_id' => 20],
            ['name' => 'Faskari/Kankara/Sabuwa', 'state_id' => 20],
            ['name' => 'Kankia/Ingawa/Kusada', 'state_id' => 20],
            ['name' => 'Jibia/Kaita', 'state_id' => 20],
            ['name' => 'Malumfashi/Kafur', 'state_id' => 20],
            ['name' => 'Katsina', 'state_id' => 20],
            ['name' => 'Musawa/Matazu', 'state_id' => 20],

            // Kebbi State
            ['name' => 'Aleiro/Gwandu/Jega', 'state_id' => 21],
            ['name' => 'Arewa/Dandi', 'state_id' => 21],
            ['name' => 'Argungu/Augie', 'state_id' => 21],
            ['name' => 'Bagudo/Suru', 'state_id' => 21],
            ['name' => 'Birnin Kebbi/Kalgo/Bunza', 'state_id' => 21],
            ['name' => 'Zuru/Fakai/Sakaba/Wasagu Danko', 'state_id' => 21],
            ['name' => 'Koko Besse/Maiyama', 'state_id' => 21],
            ['name' => 'Yauri/Shanga/Ngaski', 'state_id' => 21],

            // Kogi State
            ['name' => 'Adavi/Okehi', 'state_id' => 22],
            ['name' => 'Ajaokuta', 'state_id' => 22],
            ['name' => 'Ankpa/Omala/Olamaboro', 'state_id' => 22],
            ['name' => 'Dekina/Bassa', 'state_id' => 22],
            ['name' => 'Idah/Ibaji/Igalamela Odolu/Ofu', 'state_id' => 22],
            ['name' => 'Kabba Bunu/Ijumu', 'state_id' => 22],
            ['name' => 'Lokoja/Kogi', 'state_id' => 22],
            ['name' => 'Yagba East/Yagba West/Mopa Muro', 'state_id' => 22],
            ['name' => 'Okene/Ogori Magongo', 'state_id' => 22],

            // Kwara State
            ['name' => 'Asa/Ilorin West', 'state_id' => 23],
            ['name' => 'Baruten/Kaiama', 'state_id' => 23],
            ['name' => 'Edu/Moro/Pategi', 'state_id' => 23],
            ['name' => 'Irepodun/Isin/Oke Ero/Ekiti', 'state_id' => 23],
            ['name' => 'Ifelodun/Offa/Oyun', 'state_id' => 23],
            ['name' => 'Ilorin East/Ilorin South', 'state_id' => 23],

            // Lagos State
            ['name' => 'Agege', 'state_id' => 24],
            ['name' => 'Ajeromi Ifelodun', 'state_id' => 24],
            ['name' => 'Alimosho', 'state_id' => 24],
            ['name' => 'Amuwo Odofin', 'state_id' => 24],
            ['name' => 'Apapa', 'state_id' => 24],
            ['name' => 'Badagry', 'state_id' => 24],
            ['name' => 'Epe', 'state_id' => 24],
            ['name' => 'Eti Osa', 'state_id' => 24],
            ['name' => 'Ibeju Lekki', 'state_id' => 24],
            ['name' => 'Ifako Ijaiye', 'state_id' => 24],
            ['name' => 'Ikeja', 'state_id' => 24],
            ['name' => 'Ikorodu', 'state_id' => 24],
            ['name' => 'Kosofe', 'state_id' => 24],
            ['name' => 'Lagos Island', 'state_id' => 24],
            ['name' => 'Lagos Mainland', 'state_id' => 24],
            ['name' => 'Mushin', 'state_id' => 24],
            ['name' => 'Ojo', 'state_id' => 24],
            ['name' => 'Oshodi Isolo', 'state_id' => 24],
            ['name' => 'Shomolu', 'state_id' => 24],
            ['name' => 'Surulere', 'state_id' => 24],

            // Nasarawa State
            ['name' => 'Akwanga/Nasarawa Eggon/Wamba', 'state_id' => 25],
            ['name' => 'Doma/Awe/Keana', 'state_id' => 25],
            ['name' => 'Karu/Keffi/Kokona', 'state_id' => 25],
            ['name' => 'Lafia/Obi', 'state_id' => 25],
            ['name' => 'Nasarawa/Toto', 'state_id' => 25],

            // Niger State
            ['name' => 'Agaie/Lapai', 'state_id' => 26],
            ['name' => 'Borgu/Agwara', 'state_id' => 26],
            ['name' => 'Bida/Gbako/Katcha', 'state_id' => 26],
            ['name' => 'Bosso/Paikoro', 'state_id' => 26],
            ['name' => 'Chanchaga', 'state_id' => 26],
            ['name' => 'Lavun/Mokwa/Edati', 'state_id' => 26],
            ['name' => 'Suleja/Tafa/Gurara', 'state_id' => 26],
            ['name' => 'Kontagora/Wushishi/Mariga/Mashegu', 'state_id' => 26],
            ['name' => 'Magama/Rijau', 'state_id' => 26],
            ['name' => 'Shiroro/Rafi/Munya', 'state_id' => 26],

            // Ogun State
            ['name' => 'Abeokuta North/Obafemi Owode/Odeda', 'state_id' => 27],
            ['name' => 'Abeokuta South', 'state_id' => 27],
            ['name' => 'Ado Odo/Ota', 'state_id' => 27],
            ['name' => 'Egbado North/Imeko Afon', 'state_id' => 27],
            ['name' => 'Egbado South/Ipokia', 'state_id' => 27],
            ['name' => 'Ifo/Ewekoro', 'state_id' => 27],
            ['name' => 'Ijebu East/Ijebu North/Ogun Waterside', 'state_id' => 27],
            ['name' => 'Ijebu Ode/Odogbolu/Ijebu North East', 'state_id' => 27],
            ['name' => 'Ikenne/Shagamu/Remo North', 'state_id' => 27],

            // Ondo State
            ['name' => 'Akoko North East/Akoko North West', 'state_id' => 28],
            ['name' => 'Akoko South East/Akoko South West', 'state_id' => 28],
            ['name' => 'Akure North/Akure South', 'state_id' => 28],
            ['name' => 'Ilaje/Ese Odo', 'state_id' => 28],
            ['name' => 'Idanre/Ifedore', 'state_id' => 28],
            ['name' => 'Ile Oluji Okeigbo/Odigbo', 'state_id' => 28],
            ['name' => 'Okitipupa/Irele', 'state_id' => 28],
            ['name' => 'Ondo East/Ondo West', 'state_id' => 28],
            ['name' => 'Owo/Ose', 'state_id' => 28],

            // Osun State
            ['name' => 'Aiyedade/Isokan/Irewole', 'state_id' => 29],
            ['name' => 'Iwo/Aiyedire/Ola Oluwa', 'state_id' => 29],
            ['name' => 'Ilesa East/Ilesa West/Atakunmosa East/Atakunmosa West', 'state_id' => 29],
            ['name' => 'Boluwaduro/Ifedayo/Ila', 'state_id' => 29],
            ['name' => 'Boripe/Ifelodun/Odo Otin', 'state_id' => 29],
            ['name' => 'Ede North/Ede South/Egbedore/Ejigbo', 'state_id' => 29],
            ['name' => 'Ife Central/Ife East/Ife North/Ife South', 'state_id' => 29],
            ['name' => 'Irepodun/Orolu', 'state_id' => 29],
            ['name' => 'Obokun/Oriade', 'state_id' => 29],
            ['name' => 'Osogbo/Olorunda/Orolu', 'state_id' => 29],

            // Oyo State
            ['name' => 'Afijio/Atiba/Oyo East/Oyo West', 'state_id' => 30],
            ['name' => 'Akinyele/Lagelu', 'state_id' => 30],
            ['name' => 'Saki West/Saki East/Atisbo', 'state_id' => 30],
            ['name' => 'Egbeda/Ona Ara', 'state_id' => 30],
            ['name' => 'Ibadan North', 'state_id' => 30],
            ['name' => 'Ibadan North East/Ibadan South East', 'state_id' => 30],
            ['name' => 'Ibadan North West/Ibadan South West', 'state_id' => 30],
            ['name' => 'Ibarapa Central/Ibarapa North', 'state_id' => 30],
            ['name' => 'Ibarapa East/Ido', 'state_id' => 30],
            ['name' => 'Irepo/Orelope/Olorunsogo', 'state_id' => 30],
            ['name' => 'Iseyin/Itesiwaju/Kajola/Iwajowa', 'state_id' => 30],
            ['name' => 'Ogbomosho North/Ogbomosho South/Ori Ire', 'state_id' => 30],
            ['name' => 'Ogo Oluwa/Surulere', 'state_id' => 30],
            ['name' => 'Oluyole', 'state_id' => 30],

            // Plateau State
            ['name' => 'Barkin Ladi/Riyom', 'state_id' => 31],
            ['name' => 'Jos North/Bassa', 'state_id' => 31],
            ['name' => 'Mangu/Bokkos', 'state_id' => 31],
            ['name' => 'Jos South/Jos East', 'state_id' => 31],
            ['name' => 'Kanam/Kanke/Pankshin', 'state_id' => 31],
            ['name' => 'Langtang North/Langtang South', 'state_id' => 31],
            ['name' => 'Shendam/Qua\'an Pan/Mikang', 'state_id' => 31],
            ['name' => 'BWearinessBarkin Ladi/Riyom', 'state_id' => 31],
            ['name' => 'Wase', 'state_id' => 31],

            // Rivers State
            ['name' => 'Abua Odual/Ahoada East', 'state_id' => 32],
            ['name' => 'Ahoada West/Ogba Egbema Ndoni', 'state_id' => 32],
            ['name' => 'Akuku Toru/Asari Toru', 'state_id' => 32],
            ['name' => 'Andoni/Opobo Nkoro', 'state_id' => 32],
            ['name' => 'Bonny/Degema', 'state_id' => 32],
            ['name' => 'Eleme/Tai/Oyigbo', 'state_id' => 32],
            ['name' => 'Emohua/Ikwerre', 'state_id' => 32],
            ['name' => 'Etche/Omuma', 'state_id' => 32],
            ['name' => 'Khana/Gokana', 'state_id' => 32],
            ['name' => 'Obio Akpor', 'state_id' => 32],
            ['name' => 'Okrika/Ogu Bolo', 'state_id' => 32],
            ['name' => 'Port Harcourt', 'state_id' => 32],

            // Sokoto State
            ['name' => 'Binji/Silame', 'state_id' => 33],
            ['name' => 'Bodinga/Dange Shuni/Tureta', 'state_id' => 33],
            ['name' => 'Gada/Goronyo', 'state_id' => 33],
            ['name' => 'Gudu/Tangaza', 'state_id' => 33],
            ['name' => 'Gwadabawa/Illela', 'state_id' => 33],
            ['name' => 'Isa/Sabon Birni', 'state_id' => 33],
            ['name' => 'Tambuwal/Kebbe', 'state_id' => 33],
            ['name' => 'Kware/Wamakko', 'state_id' => 33],
            ['name' => 'Rabah/Wurno', 'state_id' => 33],
            ['name' => 'Shagari/Yabo', 'state_id' => 33],
            ['name' => 'Sokoto North/Sokoto South', 'state_id' => 33],

            // Taraba State
            ['name' => 'Jalingo/Yorro/Zing', 'state_id' => 34],
            ['name' => 'Bali/Gassol', 'state_id' => 34],
            ['name' => 'Takum/Donga/Ussa', 'state_id' => 34],
            ['name' => 'Sardauna/Gashaka/Kurmi', 'state_id' => 34],
            ['name' => 'Wukari/Ibi', 'state_id' => 34],
            ['name' => 'Karim Lamido/Lau/Ardo Kola', 'state_id' => 34],

            // Yobe State
            ['name' => 'Bade/Jakusko', 'state_id' => 35],
            ['name' => 'Bursari/Geidam/Yunusari', 'state_id' => 35],
            ['name' => 'Damaturu/Gujba/Gulani/Tarmuwa', 'state_id' => 35],
            ['name' => 'Fika/Fune', 'state_id' => 35],
            ['name' => 'Nguru/Machina/Karasuwa/Yusufari', 'state_id' => 35],
            ['name' => 'Potiskum/Nangere', 'state_id' => 35],

            // Zamfara State
            ['name' => 'Anka/Talata Mafara', 'state_id' => 36],
            ['name' => 'Bakura/Maradun', 'state_id' => 36],
            ['name' => 'Birnin Magaji/Kaura Namoda', 'state_id' => 36],
            ['name' => 'Bukkuyum/Gummi', 'state_id' => 36],
            ['name' => 'Bungudu/Maru', 'state_id' => 36],
            ['name' => 'Gusau/Tsafe', 'state_id' => 36],
            ['name' => 'Shinkafi/Zurmi', 'state_id' => 36],

            // Federal Capital Territory
            ['name' => 'Abaji/Gwagwalada/Kwali/Kuje', 'state_id' => 37],
            ['name' => 'AMAC/Bwari', 'state_id' => 37],
        ];

        foreach ($constituencies as $constituency) {
            try {
                DB::statement("
					INSERT INTO constituencies (name, state_id)
					VALUES (?, ?)
					ON DUPLICATE KEY UPDATE
						name = VALUES(name)
				", [
                    $constituency['name'],
                    $constituency['state_id']
                ]);

                Log::info('Inserted/Updated Constituency: ', $constituency);
            } catch (\Exception $e) {
                Log::error('Failed to insert/update constituency: ' . $e->getMessage(), $constituency);
            }
        }
    }
}
