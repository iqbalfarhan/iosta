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
            ["kota" => "KS. TUBUN", "witel" => "BALIKPAPAN", "alamat" => "JL. JEND SUDIRMAN 599", "nama" => "STO KS TUBUN"],
            ["kota" => "BONTANG", "witel" => "SAMARINDA", "alamat" => "JL. MT. HARYONO NO. 1", "nama" => "STO BONTANG"],
            ["kota" => "BALIKPAPAN BARU", "witel" => "BALIKPAPAN", "alamat" => "JL. KOMPLEK BALIKPAPAN BARU RT.48", "nama" => "STO BALIKPAPAN BARU"],
            ["kota" => "BALIKPAPAN BARU", "witel" => "BALIKPAPAN", "alamat" => "JL. MT. HARYONO 169", "nama" => "TREG 6 KALIMANTAN"],
            ["kota" => "BALIKPAPAN BARU", "witel" => "BALIKPAPAN", "alamat" => "JL. MT. HARYONO 169", "nama" => "WITEL BALIKAPAPAN"],
            ["kota" => "GUNUNG SARI", "witel" => "BALIKPAPAN", "alamat" => "JL. AHMAD YANI", "nama" => "STO GUNUNG SARI"],
            ["kota" => "BONTANG", "witel" => "SAMARINDA", "alamat" => "JL. MT. HARYONO NO. 1", "nama" => "STO BONTANG "],
            ["kota" => "MALINAU", "witel" => "KALTARA", "alamat" => "JL. PERINTIS NO. 1 TIDENG PALE", "nama" => "PLASA TANA TIDUNG"],
            ["kota" => "MUARA JAWA", "witel" => "BALIKPAPAN", "alamat" => "JL. MUARA JAWA ANDIL III", "nama" => "STO / PLASA MUARA JAWA"],
            ["kota" => "PENAJAM", "witel" => "BALIKPAPAN", "alamat" => "JL. NEGARA PENAJAM PASER UTARA", "nama" => "STO / PLASA PENAJAM"],
            ["kota" => "MANGGAR ", "witel" => "BALIKPAPAN", "alamat" => "JL. PADAT KARYA ", "nama" => "STO MANGGAR "],
            ["kota" => "TANAH GROGOT", "witel" => "BALIKPAPAN", "alamat" => "JL. RA. KARTINI TANAH GROGOT", "nama" => "STO / PLASA TANAH GROGOT"],
            ["kota" => "GAMBUT", "witel" => "KALSEL", "alamat" => "JL. A. YANI KM 13 GAMBUT", "nama" => "STO GAMBUT"],
            ["kota" => "LOA BAKUNG", "witel" => "SAMARINDA", "alamat" => "JL. IR SUTAMI", "nama" => "TELKOM STO LOA BAKUNG"],
            ["kota" => "SAMARINDA", "witel" => "SAMARINDA", "alamat" => "JL. AWANG LONG NO. 31", "nama" => "PLASA TELKOM SAMARINDA"],
            ["kota" => "SAMARINDA", "witel" => "SAMARINDA", "alamat" => "JL. DAHLIA NO. 65", "nama" => "STO DAHLIA"],
            ["kota" => "SANGATTA", "witel" => "SAMARINDA", "alamat" => "JL. ROAD 9 NO.1", "nama" => "STO SANGATTA"],
            ["kota" => "TENGGARONG", "witel" => "SAMARINDA", "alamat" => "JL. S. PARMAN NO. 1", "nama" => "STO TENGGARONG"],
            ["kota" => "MALINAU", "witel" => "KALTARA", "alamat" => "JL. PANEMBAHAN NO. 95 MALINAU", "nama" => "CATEL MALINAU"],
            ["kota" => "SUNGAI RAYA", "witel" => "KALBAR", "alamat" => "JL. KOMP. PONDOK INDAH LESTARI  NO. 1", "nama" => "STO SUNGAI RAYA"],
            ["kota" => "NUNUKAN", "witel" => "KALTARA", "alamat" => "JL. TM PAHLAWAN NO. 55 NUNUKAN", "nama" => "CATEL NUNUKAN"],
            ["kota" => "TANJUNG REDED", "witel" => "KALTARA", "alamat" => "JL. DURIAN II NO. 14 TANJUNG REDEB", "nama" => "DATEL BERAU"],
            ["kota" => "TANJUNG SELOR", "witel" => "KALTARA", "alamat" => "JL. AGATHIS NO. 2 TANJUNG SELOR", "nama" => "CATEL TANJUNG SELOR"],
            ["kota" => "TARAKAN", "witel" => "KALTARA", "alamat" => "JL. P DIPONEGORO NO. 08 TARAKAN", "nama" => "STO TARAKAN"],
            ["kota" => "TARAKAN", "witel" => "KALTARA", "alamat" => "JL. MULAWARMAN NO. 1 TARAKAN", "nama" => "WITEL KALTARA"],
            ["kota" => "BANJARBARU", "witel" => "KALSEL", "alamat" => "JL. PM NOOR NO 47 BANJARBARU", "nama" => "TELKOM BANJARBARU"],
            ["kota" => "BANJARMASIN", "witel" => "KALSEL", "alamat" => "JL. DJOK MENTAYA BANJARMASIN", "nama" => "SBB NAGASARI"],
            ["kota" => "BANJARMASIN", "witel" => "KALSEL", "alamat" => "JL. PANGERAN SAMUDERA NO 92", "nama" => "STO 1 CENTRUM"],
            ["kota" => "BARABAI", "witel" => "KALSEL", "alamat" => "JL. MURAKATA NO 2", "nama" => "TELKOM BARABAI"],
            ["kota" => "BATULICIN", "witel" => "KALSEL", "alamat" => "JL. RAYA BATULICIN", "nama" => "TELKOM BATULICIN"],
            ["kota" => "KANDANGAN", "witel" => "KALSEL", "alamat" => "JL. MELATI NO 3", "nama" => "TELKOM KANDANGAN"],
            ["kota" => "KOTABARU PULAU LAUT", "witel" => "KALSEL", "alamat" => "JL. SISINGAMANGARAJA", "nama" => "TELKOM KOTABARU"],
            ["kota" => "PLEIHARI", "witel" => "KALSEL", "alamat" => "JL. BOENYASIN, NO.1 PELAIHARI", "nama" => "PLASA TELKOM PELEHARI"],
            ["kota" => "TANJUNG TABALONG", "witel" => "KALSEL", "alamat" => "JL. PENGHULU RASYID NO 2", "nama" => "TELKOM TANJUNG TABALONG"],
            ["kota" => "SATUI", "witel" => "KALSEL", "alamat" => "JL. INPRES SATUI", "nama" => "TELKOM SATUI "],
            ["kota" => "AMUNTAI ", "witel" => "KALSEL", "alamat" => "JL.NORMAN UMAR KEBUN SARI", "nama" => "TELKOM AMUNTAI"],
            ["kota" => "RANTAU ", "witel" => "KALSEL", "alamat" => "JL. TELKOM NO 1 RANTAU ", "nama" => "TELKOM RANTAU"],
            ["kota" => "ULIN", "witel" => "KALSEL", "alamat" => "JL. AKHMAD YANI KM 3,5 BANJARMASIN", "nama" => "STO ULIN"],
            ["kota" => "BUNTOK", "witel" => "KALTENG", "alamat" => "JL. PAHLAWAN", "nama" => "STO BUNTOK"],
            ["kota" => "KUALA KAPUAS", "witel" => "KALTENG", "alamat" => "JL. TAMBUN BUNGAI NO 1", "nama" => "STO KUALA KAPUAS"],
            ["kota" => "MUARA TEWEH", "witel" => "KALTENG", "alamat" => "JL. A. YANI", "nama" => "STO MUARA TEWEH"],
            ["kota" => "PALANGKARAYA KM2", "witel" => "KALTENG", "alamat" => "JL. CEMPAKA NO 22", "nama" => "ARNET PALANGKARAYA"],
            ["kota" => "PALANGKARAYA KM 5", "witel" => "KALTENG", "alamat" => "JL. DANAU MARE 1 UJUNG", "nama" => "STO PALANGKARYA KM 5"],
            ["kota" => "PALANGKARAYA KM2", "witel" => "KALTENG", "alamat" => "JL. IMAM BONJOL NO. 2", "nama" => "STO PALANGKARAYA"],
            ["kota" => "PANGKALAN BUN", "witel" => "KALTENG", "alamat" => "JL. SULTAN SYAHRIR", "nama" => "STO PANGKALANBUN"],
            ["kota" => "KUALA KURUN", "witel" => "KALTENG", "alamat" => "JL. A YANI NO. 22", "nama" => "STO KUALA KURUN "],
            ["kota" => "KUALA PAMBUANG ", "witel" => "KALTENG", "alamat" => "JL. D.I PANJAITAN ", "nama" => "STO KUALA PAMBUANG "],
            ["kota" => "TAMIYANG LAYANG ", "witel" => "KALTENG", "alamat" => "JL. MANUNGAL NO 38", "nama" => "STO TAMIYANG LAYANG "],
            ["kota" => "PURUK CAHU", "witel" => "KALTENG", "alamat" => "JL. TEMANGGUNG AWAN", "nama" => "STO PURUK CAHU"],
            ["kota" => "SAMPIT", "witel" => "KALTENG", "alamat" => "JL. SUPRAPTO", "nama" => "STO SAMPIT"],
            ["kota" => "KETAPANG", "witel" => "KALBAR", "alamat" => "JL. S PARMAN NO. 82", "nama" => "TELKOM KETAPANG"],
            ["kota" => "MEMPAWAH", "witel" => "KALBAR", "alamat" => "JL. GUSTI M.TOUFIQ", "nama" => "TELKOM MEMPAWAH"],
            ["kota" => "PONTIANAK", "witel" => "KALBAR", "alamat" => "JL. AHMAD YANI NO. 5", "nama" => "EX INFRATEL PONTIANAK"],
            ["kota" => "PONTIANAK", "witel" => "KALBAR", "alamat" => "JL. TEUKU UMAR NO. 2", "nama" => "WITEL PONTIANAK"],
            ["kota" => "SAMBAS", "witel" => "KALBAR", "alamat" => "JL. PANJI ANOM NO. 82", "nama" => "TELKOM SAMBAS"],
            ["kota" => "SANGGAU", "witel" => "KALBAR", "alamat" => "JL. A. YANI NO 25", "nama" => "STO SANGGAU"],
            ["kota" => "NGABANG ", "witel" => "KALBAR", "alamat" => "JL. KARYA NGABANG, NGABANG - LANDAK, KAB. LANDAK", "nama" => "STO NGABANG"],
            ["kota" => "SINGKAWANG", "witel" => "KALBAR", "alamat" => "JL. SWADAYA PESIRAM", "nama" => "TELKOM SINGKAWANG"],
            ["kota" => "SINTANG", "witel" => "KALBAR", "alamat" => "JL. DIPONEGORO NO. 62", "nama" => "TELKOM SINTANG"],
        ];


        foreach ($datas as $data) {
            Lokasi::create($data);
        }
    }
}