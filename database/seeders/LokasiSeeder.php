<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "kota" => "KS. TUBUN",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. JEND SUDIRMAN 599",
                "nama" => "STO KS TUBUN"
            ],
            [
                "kota" => "BONTANG",
                "witel" => "SAMARINDA",
                "alamat" => "JL. MT. HARYONO NO. 1",
                "nama" => "STO BONTANG"
            ],
            [
                "kota" => "BALIKPAPAN BARU",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. KOMPLEK BALIKPAPAN BARU RT.48",
                "nama" => "STO BALIKPAPAN BARU"
            ],
            [
                "kota" => "BALIKPAPAN BARU",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. MT. HARYONO 169",
                "nama" => "TREG 6 KALIMANTAN"
            ],
            [
                "kota" => "BALIKPAPAN BARU",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. MT. HARYONO 169",
                "nama" => "WITEL BALIKAPAPAN"
            ],
            [
                "kota" => "GUNUNG SARI",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. AHMAD YANI",
                "nama" => "STO GUNUNG SARI"
            ],
            [
                "kota" => "MALINAU",
                "witel" => "TARAKAN",
                "alamat" => "JL. PERINTIS NO. 1 TIDENG PALE",
                "nama" => "PLASA TANA TIDUNG"
            ],
            [
                "kota" => "MUARA JAWA",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. MUARA JAWA ANDIL III",
                "nama" => "STO / PLASA MUARA JAWA"
            ],
            [
                "kota" => "PENAJAM",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. NEGARA PENAJAM PASER UTARA",
                "nama" => "STO / PLASA PENAJAM"
            ],
            [
                "kota" => "MANGGAR",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. PADAT KARYA",
                "nama" => "STO MANGGAR "
            ],
            [
                "kota" => "TANAH GROGOT",
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. RA. KARTINI TANAH GROGOT",
                "nama" => "STO / PLASA TANAH GROGOT"
            ],
            [
                "kota" => "GAMBUT",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. A. YANI KM 13 GAMBUT",
                "nama" => "STO GAMBUT"
            ],
            [
                "kota" => "LOA BAKUNG",
                "witel" => "SAMARINDA",
                "alamat" => "JL. IR SUTAMI",
                "nama" => "TELKOM STO LOA BAKUNG"
            ],
            [
                "kota" => "SAMARINDA",
                "witel" => "SAMARINDA",
                "alamat" => "JL. AWANG LONG NO. 31",
                "nama" => "PLASA TELKOM SAMARINDA"
            ],
            [
                "kota" => "SAMARINDA",
                "witel" => "SAMARINDA",
                "alamat" => "JL. DAHLIA NO. 65",
                "nama" => "STO DAHLIA"
            ],
            [
                "kota" => "SANGATTA",
                "witel" => "SAMARINDA",
                "alamat" => "JL. ROAD 9 NO.1",
                "nama" => "STO SANGATTA"
            ],
            [
                "kota" => "TENGGARONG",
                "witel" => "SAMARINDA",
                "alamat" => "JL. S. PARMAN NO. 1",
                "nama" => "STO TENGGARONG"
            ],
            [
                "kota" => "MALINAU",
                "witel" => "TARAKAN",
                "alamat" => "JL. PANEMBAHAN NO. 95 MALINAU",
                "nama" => "CATEL MALINAU"
            ],
            [
                "kota" => "SUNGAI RAYA",
                "witel" => "PONTIANAK",
                "alamat" => "JL. KOMP. PONDOK INDAH LESTARI  NO. 1",
                "nama" => "STO SUNGAI RAYA"
            ],
            [
                "kota" => "NUNUKAN",
                "witel" => "TARAKAN",
                "alamat" => "JL. TM PAHLAWAN NO. 55 NUNUKAN",
                "nama" => "CATEL NUNUKAN"
            ],
            [
                "kota" => "TANJUNG REDED",
                "witel" => "TARAKAN",
                "alamat" => "JL. DURIAN II NO. 14 TANJUNG REDEB",
                "nama" => "DATEL BERAU"
            ],
            [
                "kota" => "TANJUNG SELOR",
                "witel" => "TARAKAN",
                "alamat" => "JL. AGATHIS NO. 2 TANJUNG SELOR",
                "nama" => "CATEL TANJUNG SELOR"
            ],
            [
                "kota" => "TARAKAN",
                "witel" => "TARAKAN",
                "alamat" => "JL. P DIPONEGORO NO. 08 TARAKAN",
                "nama" => "STO TARAKAN"
            ],
            [
                "kota" => "TARAKAN",
                "witel" => "TARAKAN",
                "alamat" => "JL. MULAWARMAN NO. 1 TARAKAN",
                "nama" => "WITEL TARAKAN"
            ],
            [
                "kota" => "BANJARBARU",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. PM NOOR NO 47 BANJARBARU",
                "nama" => "TELKOM BANJARBARU"
            ],
            [
                "kota" => "BANJARMASIN",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. DJOK MENTAYA BANJARMASIN",
                "nama" => "SBB NAGASARI"
            ],
            [
                "kota" => "BANJARMASIN",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. PANGERAN SAMUDERA NO 92",
                "nama" => "STO 1 CENTRUM"
            ],
            [
                "kota" => "BARABAI",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. MURAKATA NO 2",
                "nama" => "TELKOM BARABAI"
            ],
            [
                "kota" => "BATULICIN",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. RAYA BATULICIN",
                "nama" => "TELKOM BATULICIN"
            ],
            [
                "kota" => "KANDANGAN",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. MELATI NO 3",
                "nama" => "TELKOM KANDANGAN"
            ],
            [
                "kota" => "KOTABARU PULAU LAUT",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. SISINGAMANGARAJA",
                "nama" => "TELKOM KOTABARU"
            ],
            [
                "kota" => "PLEIHARI",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. BOENYASIN, NO.1 PELAIHARI",
                "nama" => "PLASA TELKOM PELEHARI"
            ],
            [
                "kota" => "TANJUNG TABALONG",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. PENGHULU RASYID NO 2",
                "nama" => "TELKOM TANJUNG TABALONG"
            ],
            [
                "kota" => "SATUI",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. INPRES SATUI",
                "nama" => "TELKOM SATUI "
            ],
            [
                "kota" => "AMUNTAI",
                "witel" => "BANJARMASIN",
                "alamat" => "JL.NORMAN UMAR KEBUN SARI",
                "nama" => "TELKOM AMUNTAI"
            ],
            [
                "kota" => "RANTAU",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. TELKOM NO 1 RANTAU",
                "nama" => "TELKOM RANTAU"
            ],
            [
                "kota" => "ULIN",
                "witel" => "BANJARMASIN",
                "alamat" => "JL. AKHMAD YANI KM 3,5 BANJARMASIN",
                "nama" => "STO ULIN"
            ],
            [
                "kota" => "BUNTOK",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. PAHLAWAN",
                "nama" => "STO BUNTOK"
            ],
            [
                "kota" => "KUALA KAPUAS",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. TAMBUN BUNGAI NO 1",
                "nama" => "STO KUALA KAPUAS"
            ],
            [
                "kota" => "MUARA TEWEH",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. A. YANI",
                "nama" => "STO MUARA TEWEH"
            ],
            [
                "kota" => "PALANGKARAYA KM2",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. CEMPAKA NO 22",
                "nama" => "ARNET PALANGKARAYA"
            ],
            [
                "kota" => "PALANGKARAYA KM 5",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. DANAU MARE 1 UJUNG",
                "nama" => "STO PALANGKARYA KM 5"
            ],
            [
                "kota" => "PALANGKARAYA KM2",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. IMAM BONJOL NO. 2",
                "nama" => "STO PALANGKARAYA"
            ],
            [
                "kota" => "PANGKALAN BUN",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. SULTAN SYAHRIR",
                "nama" => "STO PANGKALANBUN"
            ],
            [
                "kota" => "KUALA KURUN",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. A YANI NO. 22",
                "nama" => "STO KUALA KURUN "
            ],
            [
                "kota" => "KUALA PAMBUANG",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. D.I PANJAITAN",
                "nama" => "STO KUALA PAMBUANG "
            ],
            [
                "kota" => "TAMIYANG LAYANG",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. MANUNGAL NO 38",
                "nama" => "STO TAMIYANG LAYANG "
            ],
            [
                "kota" => "PURUK CAHU",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. TEMANGGUNG AWAN",
                "nama" => "STO PURUK CAHU"
            ],
            [
                "kota" => "SAMPIT",
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. SUPRAPTO",
                "nama" => "STO SAMPIT"
            ],
            [
                "kota" => "KETAPANG",
                "witel" => "PONTIANAK",
                "alamat" => "JL. S PARMAN NO. 82",
                "nama" => "TELKOM KETAPANG"
            ],
            [
                "kota" => "MEMPAWAH",
                "witel" => "PONTIANAK",
                "alamat" => "JL. GUSTI M.TOUFIQ",
                "nama" => "TELKOM MEMPAWAH"
            ],
            [
                "kota" => "PONTIANAK",
                "witel" => "PONTIANAK",
                "alamat" => "JL. AHMAD YANI NO. 5",
                "nama" => "EX INFRATEL PONTIANAK"
            ],
            [
                "kota" => "PONTIANAK",
                "witel" => "PONTIANAK",
                "alamat" => "JL. TEUKU UMAR NO. 2",
                "nama" => "WITEL PONTIANAK"
            ],
            [
                "kota" => "SAMBAS",
                "witel" => "PONTIANAK",
                "alamat" => "JL. PANJI ANOM NO. 82",
                "nama" => "TELKOM SAMBAS"
            ],
            [
                "kota" => "SANGGAU",
                "witel" => "PONTIANAK",
                "alamat" => "JL. A. YANI NO 25",
                "nama" => "STO SANGGAU"
            ],
            [
                "kota" => "NGABANG",
                "witel" => "PONTIANAK",
                "alamat" => "JL. KARYA NGABANG, NGABANG - LANDAK, KAB. LANDAK",
                "nama" => "STO NGABANG"
            ],
            [
                "kota" => "SINGKAWANG",
                "witel" => "PONTIANAK",
                "alamat" => "JL. SWADAYA PESIRAM",
                "nama" => "TELKOM SINGKAWANG"
            ],
            [
                "kota" => "SINTANG",
                "witel" => "PONTIANAK",
                "alamat" => "JL. DIPONEGORO NO. 62",
                "nama" => "TELKOM SINTANG"
            ],
        ];


        foreach ($datas as $data) {
            Lokasi::create($data);
        }
    }
}