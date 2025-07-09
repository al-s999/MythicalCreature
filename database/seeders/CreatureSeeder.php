<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Creature;

class CreatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $creatures = [
            [
                'name' => 'Chimera',
                'slug' => 'chimera',
                'description' => "Chimera adalah makhluk hibrida mengerikan dari mitologi Yunani, yang terdiri dari bagian-bagian tubuh beberapa hewan. Ia dikatakan sebagai keturunan dari Typhon dan Echidna. Chimera secara tradisional digambarkan sebagai singa dengan kepala kambing yang tumbuh dari punggungnya, dan ekor yang berakhir dengan kepala ular. Ia juga dikenal karena kemampuannya untuk menyemburkan api.\n\nChimera terkenal dalam mitos tentang Bellerophon, seorang pahlawan yang menunggangi kuda bersayap Pegasus. Bellerophon berhasil membunuh Chimera dengan menembakkan tombak berujung timah ke tenggorokan makhluk itu; napas api Chimera melelehkan timah, yang kemudian membunuhnya dari dalam. Chimera melambangkan kekuatan yang menakutkan dan sifat yang tidak wajar.",
                'image' => '27427f7c8fe189b9ef6f872e29bcc08c.jpg',
                'short_description' => 'Makhluk legendaris dengan kepala singa, badan kambing, dan ekor ular'
            ],
            [
                'name' => 'Cerberus',
                'slug' => 'cerberus',
                'description' => "Cerberus adalah anjing berkepala tiga yang ganas dalam mitologi Yunani, yang bertugas menjaga gerbang Dunia Bawah, mencegah orang mati meninggalkan alam Hades dan orang hidup masuk tanpa izin. Ia adalah anak dari Echidna dan Typhon.\n\nCerberus umumnya digambarkan sebagai anjing besar dengan tiga kepala. Meskipun deskripsi spesifiknya bervariasi, ia sering digambarkan dengan ekor ular, dan terkadang surai singa atau banyak kepala ular di punggungnya. Sebagai antek Hades, Cerberus melambangkan batas antara hidup dan mati, yang dikenal dan yang tidak diketahui.\n\nSalah satu kisah paling terkenal yang melibatkan Cerberus adalah tugas kedua belas Heracles, di mana pahlawan itu ditugaskan untuk menangkap Cerberus dari Dunia Bawah tanpa menggunakan senjata. Heracles berhasil menaklukkan makhluk itu dengan kekuatan dan membawanya sebentar ke dunia fana sebagai bukti prestasinya.",
                'image' => 'cerberus-wallpaper-17.jpg',
                'short_description' => 'Anjing berkepala tiga yang menjaga gerbang dunia bawah dalam mitologi Yunani'
            ],
            [
                'name' => 'Hydra',
                'slug' => 'hydra',
                'description' => "Hydra Lerna adalah monster air legendaris dalam mitologi Yunani dengan banyak kepala. Untuk setiap kepala yang dipotong, dua kepala baru akan tumbuh di tempatnya, menjadikannya hampir tak terkalahkan. Makhluk ini adalah keturunan Typhon dan Echidna.\n\nHydra biasanya digambarkan sebagai ular atau naga raksasa dengan banyak kepala, yang tinggal di rawa-rawa Lerna. Napasnya berbisa dan bahkan jejak kakinya pun beracun. Makhluk ini mewakili kekuatan regenerasi dan kekacauan yang tak terkendali.\n\nMembunuh Hydra menjadi tugas kedua dari Dua Belas Tugas Heracles. Pahlawan ini mengalahkan Hydra dengan bantuan keponakannya, Iolaus. Ketika Heracles memenggal satu kepala, Iolaus membakar luka bekas potongan itu dengan obor, mencegah kepala baru tumbuh. Setelah semua kepala biasa terpotong, Heracles memenggal kepala tengah yang abadi dan menguburnya di bawah batu besar.",
                'image' => 'hydra__dipsy_demo__by_sandara-d74271p.jpg',
                'short_description' => 'Monster berkepala banyak yang tak terkalahkan, satu kepala dipotong, dua kepala tumbuh'
            ],
            [
                'name' => 'Phoenix',
                'slug' => 'phoenix',
                'description' => "Phoenix adalah burung mitologis yang terkenal karena kemampuannya untuk terlahir kembali dari abu. Makhluk legendaris ini berasal dari berbagai mitologi, termasuk Mesir, Yunani, dan Tiongkok, dengan sedikit variasi dalam ceritanya.\n\nPhoenix digambarkan sebagai burung besar dengan bulu berwarna emas dan merah terang, menyerupai api. Ketika mendekati akhir hidupnya yang panjang (biasanya 500-1000 tahun), Phoenix akan membangun sarang dari ranting kayu manis dan membakar dirinya sendiri. Dari abu yang tersisa, Phoenix muda akan lahir kembali untuk memulai siklus hidup baru.\n\nSebagai simbol, Phoenix mewakili regenerasi, kebangkitan, dan pembaruan tak terbatas. Dalam banyak budaya, Phoenix melambangkan harapan, ketahanan, dan kemenangan kehidupan atas kematian. Makhluk ini juga sering dikaitkan dengan matahari dan api, mewakili kekuatan transformatif api yang menghancurkan sekaligus menciptakan kembali.",
                'image' => 'c31073925ecee64eda912dd101fca24a.jpg',
                'short_description' => 'Burung api abadi yang dapat terlahir kembali dari abunya sendiri'
            ],
            [
                'name' => 'Kelpie',
                'slug' => 'kelpie',
                'description' => "Kelpie adalah makhluk air dalam mitologi Skotlandia, biasanya muncul sebagai kuda gagah yang mendiami sungai dan danau. Meskipun penampilannya memesona, Kelpie adalah predator berbahaya yang memancing korban tidak curiga.\n\nKelpie biasanya muncul sebagai kuda hitam atau putih yang tampak jinak, sering terpasang pelana, berdiri di tepi air. Ketika seseorang mencoba menungganginya, kulit Kelpie menjadi lengket, menjebak penunggang. Kemudian Kelpie akan melompat kembali ke air, menyeret korban ke bawah untuk ditenggelamkan dan dimakan.\n\nBeberapa legenda menyebutkan bahwa Kelpie bisa mengambil bentuk manusia yang menarik untuk memikat korban, tetapi selalu mempertahankan kaki kuda mereka. Kelpie dipercaya paling aktif selama badai dan dapat meramalkan badai dengan suara tangisan mengerikan. Dalam cerita rakyat, Kelpie sering digunakan sebagai peringatan untuk menjauhkan anak-anak dari air berbahaya dan mewakili bahaya dari orang asing yang menarik dan sembrono.",
                'image' => 'download (1).jpg',
                'short_description' => 'Roh air berkuda yang memikat lalu menenggelamkan para pengembara yang malang'
            ],
            [
                'name' => 'Minotaur',
                'slug' => 'minotaur',
                'description' => "Minotaur adalah salah satu makhluk paling terkenal dalam mitologi Yunani, memiliki kepala banteng dan tubuh manusia. Ia lahir dari hubungan terlarang antara Pasiphae, istri Raja Minos dari Kreta, dan seekor banteng putih yang dikirim oleh dewa Poseidon.\n\nMinos merasa malu dengan kelahiran monster ini dan memerintahkan Daedalus, seorang penemu terkenal, untuk membangun labirin yang rumit di bawah istana Knossos untuk mengurung Minotaur. Labirin ini dirancang sedemikian rumit sehingga siapa pun yang masuk tidak akan bisa menemukan jalan keluar.\n\nSetiap sembilan tahun, Athena mengirim tujuh pemuda dan tujuh pemudi sebagai persembahan untuk Minotaur, yang akan memakan mereka. Theseus, pangeran Athena, akhirnya mengalahkan Minotaur dengan bantuan putri Minos, Ariadne, yang memberinya benang untuk menandai jalan masuk dan keluar labirin.\n\nMinotaur mewakili aspek kebinatangan dalam diri manusia dan konsekuensi dari hasrat terlarang. Labirin sendiri melambangkan kompleksitas moral dan spiritual yang harus dinavigasi manusia.",
                'image' => 'download (3).jpg',
                'short_description' => 'Monster mengerikan berkepala banteng dan bertubuh manusia, terperangkap dalam labirin Kreta'
            ],
            [
                'name' => 'Unicorn',
                'slug' => 'unicorn',
                'description' => "Unicorn adalah makhluk mitologis yang digambarkan sebagai kuda dengan satu tanduk spiral di tengah dahinya. Muncul dalam catatan tertulis sejak zaman kuno di berbagai budaya, unicorn telah menjadi simbol kemurnian, keanggunan, dan keajaiban.\n\nDalam legenda Eropa abad pertengahan, unicorn dilukiskan sebagai makhluk putih yang menyerupai kuda atau kambing kecil, dengan janggut kambing dan tanduk tunggal yang menonjol dari dahinya. Tanduk tersebut dipercaya memiliki kekuatan untuk menetralkan racun dan menyembuhkan penyakit.\n\nUnicorn dianggap sebagai makhluk yang sangat sulit ditangkap dan hanya bisa dijinakkan oleh perawan muda. Para pemburu dalam legenda akan menggunakan seorang perawan sebagai umpan; unicorn akan mendekati dan tertidur di pangkuannya, memungkinkan para pemburu untuk menangkapnya.\n\nDalam simbolisme Kristen, unicorn sering dikaitkan dengan Kristus dan inkarnasi. Dalam sistem kepercayaan lain, unicorn mewakili kebijaksanaan, kekuatan anggun, dan hubungan dengan alam dan dunia spiritual.",
                'image' => 'download.jpg',
                'short_description' => 'Kuda putih suci dengan tanduk spiral yang melambangkan kemurnian dan penyembuhan'
            ],
            [
                'name' => 'Cyclops',
                'slug' => 'cyclops',
                'description' => "Cyclops adalah raksasa bermata satu yang menakutkan dalam mitologi Yunani. Namanya berasal dari kata Yunani 'kyklops', yang berarti 'mata bulat'. Ada beberapa generasi dan jenis Cyclops dalam mitologi Yunani.\n\nDalam versi awal, Cyclops adalah tiga saudara raksasa bermata satu - Brontes, Steropes, dan Arges - putra-putra Uranus dan Gaia. Mereka adalah pandai besi ilahi yang menciptakan petir Zeus. Mereka pada awalnya dipenjarakan oleh Uranus dan kemudian oleh Cronus sebelum dibebaskan oleh Zeus.\n\nJenis Cyclops yang lebih dikenal adalah keturunan Poseidon, seperti Polyphemus yang terkenal dari Odyssey karya Homer. Cyclops jenis ini digambarkan sebagai raksasa kejam dan primitif yang hidup sebagai gembala di pulau terpencil di Laut Mediterania. Polyphemus terkenal karena mengurung Odysseus dan krunya dalam gua dan memakan beberapa awak kapal sebelum Odysseus membutakan mata tunggalnya dan melarikan diri.\n\nCyclops mewakili kekuatan primitif dan kekacauan alam. Mata tunggal mereka juga dapat melambangkan pandangan yang terbatas, baik secara harfiah maupun metaforis.",
                'image' => 'download (2).jpg',
                'short_description' => 'Raksasa bermata satu dengan kekuatan dahsyat dan temperamen yang mengerikan'
            ],
        ];

        foreach ($creatures as $creature) {
            Creature::create($creature);
        }
    }
}