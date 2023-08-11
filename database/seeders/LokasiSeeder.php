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
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. JEND SUDIRMAN 599",
                "nama" => "STO KS TUBUN"
            ],
            [
                "witel" => "SAMARINDA",
                "alamat" => "JL. MT. HARYONO NO. 1",
                "nama" => "STO BONTANG"
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. KOMPLEK BALIKPAPAN BARU RT.48",
                "nama" => "STO BALIKPAPAN BARU"
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. MT. HARYONO 169",
                "nama" => "TREG 6 KALIMANTAN"
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. MT. HARYONO 169",
                "nama" => "WITEL BALIKAPAPAN"
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. AHMAD YANI",
                "nama" => "STO GUNUNG SARI"
            ],
            [
                "witel" => "TARAKAN",
                "alamat" => "JL. PERINTIS NO. 1 TIDENG PALE",
                "nama" => "PLASA TANA TIDUNG"
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. MUARA JAWA ANDIL III",
                "nama" => "STO / PLASA MUARA JAWA"
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. NEGARA PENAJAM PASER UTARA",
                "nama" => "STO / PLASA PENAJAM"
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. PADAT KARYA",
                "nama" => "STO MANGGAR "
            ],
            [
                "witel" => "BALIKPAPAN",
                "alamat" => "JL. RA. KARTINI TANAH GROGOT",
                "nama" => "STO / PLASA TANAH GROGOT"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. A. YANI KM 13 GAMBUT",
                "nama" => "STO GAMBUT"
            ],
            [
                "witel" => "SAMARINDA",
                "alamat" => "JL. IR SUTAMI",
                "nama" => "TELKOM STO LOA BAKUNG"
            ],
            [
                "witel" => "SAMARINDA",
                "alamat" => "JL. AWANG LONG NO. 31",
                "nama" => "PLASA TELKOM SAMARINDA"
            ],
            [
                "witel" => "SAMARINDA",
                "alamat" => "JL. DAHLIA NO. 65",
                "nama" => "STO DAHLIA"
            ],
            [
                "witel" => "SAMARINDA",
                "alamat" => "JL. ROAD 9 NO.1",
                "nama" => "STO SANGATTA"
            ],
            [
                "witel" => "SAMARINDA",
                "alamat" => "JL. S. PARMAN NO. 1",
                "nama" => "STO TENGGARONG"
            ],
            [
                "witel" => "TARAKAN",
                "alamat" => "JL. PANEMBAHAN NO. 95 MALINAU",
                "nama" => "CATEL MALINAU"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. KOMP. PONDOK INDAH LESTARI  NO. 1",
                "nama" => "STO SUNGAI RAYA"
            ],
            [
                "witel" => "TARAKAN",
                "alamat" => "JL. TM PAHLAWAN NO. 55 NUNUKAN",
                "nama" => "CATEL NUNUKAN"
            ],
            [
                "witel" => "TARAKAN",
                "alamat" => "JL. DURIAN II NO. 14 TANJUNG REDEB",
                "nama" => "DATEL BERAU"
            ],
            [
                "witel" => "TARAKAN",
                "alamat" => "JL. AGATHIS NO. 2 TANJUNG SELOR",
                "nama" => "CATEL TANJUNG SELOR"
            ],
            [
                "witel" => "TARAKAN",
                "alamat" => "JL. P DIPONEGORO NO. 08 TARAKAN",
                "nama" => "STO TARAKAN"
            ],
            [
                "witel" => "TARAKAN",
                "alamat" => "JL. MULAWARMAN NO. 1 TARAKAN",
                "nama" => "WITEL TARAKAN"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. PM NOOR NO 47 BANJARBARU",
                "nama" => "TELKOM BANJARBARU"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. DJOK MENTAYA BANJARMASIN",
                "nama" => "SBB NAGASARI"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. PANGERAN SAMUDERA NO 92",
                "nama" => "STO 1 CENTRUM"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. MURAKATA NO 2",
                "nama" => "TELKOM BARABAI"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. RAYA BATULICIN",
                "nama" => "TELKOM BATULICIN"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. MELATI NO 3",
                "nama" => "TELKOM KANDANGAN"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. SISINGAMANGARAJA",
                "nama" => "TELKOM KOTABARU"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. BOENYASIN, NO.1 PELAIHARI",
                "nama" => "PLASA TELKOM PELEHARI"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. PENGHULU RASYID NO 2",
                "nama" => "TELKOM TANJUNG TABALONG"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. INPRES SATUI",
                "nama" => "TELKOM SATUI "
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL.NORMAN UMAR KEBUN SARI",
                "nama" => "TELKOM AMUNTAI"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. TELKOM NO 1 RANTAU",
                "nama" => "TELKOM RANTAU"
            ],
            [
                "witel" => "BANJARMASIN",
                "alamat" => "JL. AKHMAD YANI KM 3,5 BANJARMASIN",
                "nama" => "STO ULIN"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. PAHLAWAN",
                "nama" => "STO BUNTOK"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. TAMBUN BUNGAI NO 1",
                "nama" => "STO KUALA KAPUAS"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. A. YANI",
                "nama" => "STO MUARA TEWEH"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. CEMPAKA NO 22",
                "nama" => "ARNET PALANGKARAYA"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. DANAU MARE 1 UJUNG",
                "nama" => "STO PALANGKARYA KM 5"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. IMAM BONJOL NO. 2",
                "nama" => "STO PALANGKARAYA"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. SULTAN SYAHRIR",
                "nama" => "STO PANGKALANBUN"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. A YANI NO. 22",
                "nama" => "STO KUALA KURUN "
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. D.I PANJAITAN",
                "nama" => "STO KUALA PAMBUANG "
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. MANUNGAL NO 38",
                "nama" => "STO TAMIYANG LAYANG "
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. TEMANGGUNG AWAN",
                "nama" => "STO PURUK CAHU"
            ],
            [
                "witel" => "PALANGKARAYA",
                "alamat" => "JL. SUPRAPTO",
                "nama" => "STO SAMPIT"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. S PARMAN NO. 82",
                "nama" => "TELKOM KETAPANG"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. GUSTI M.TOUFIQ",
                "nama" => "TELKOM MEMPAWAH"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. AHMAD YANI NO. 5",
                "nama" => "EX INFRATEL PONTIANAK"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. TEUKU UMAR NO. 2",
                "nama" => "WITEL PONTIANAK"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. PANJI ANOM NO. 82",
                "nama" => "TELKOM SAMBAS"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. A. YANI NO 25",
                "nama" => "STO SANGGAU"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. KARYA NGABANG, NGABANG - LANDAK, KAB. LANDAK",
                "nama" => "STO NGABANG"
            ],
            [
                "witel" => "PONTIANAK",
                "alamat" => "JL. SWADAYA PESIRAM",
                "nama" => "TELKOM SINGKAWANG"
            ],
            [
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