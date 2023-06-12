-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 09:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppln-kl`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jabatan`, `gambar`) VALUES
(1, 'Rahmat Bagja, SH. LL. M', 'Ketua Bawaslu RI', 'Rahmat Bagja New.png'),
(2, 'Lolly Suhenty, S.Sos.I., M.H.', 'Anggota Bawaslu RI', 'Lolly SuhentyNew2.png'),
(3, 'Puadi, S.Pd., MM.', 'Anggota Bawaslu RI', 'PUADI New.png'),
(4, 'Dr. Herwyn J. H. Malonda, M.Pd., M.H.', 'Anggota Bawaslu RI', 'Herwynnnnn_0.png');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `isi` text NOT NULL,
  `isi_singkat` varchar(200) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `isi_singkat`, `gambar`) VALUES
(10, 'Temukan Potensi Calon Anggota KPU Berintegritas dan Kompeten', 'Pelaksana tugas (Plt) Deputi Bidang Administrasi, Purwoto Ruslan Hidayat, bersama Deputi Bidang Dukungan Teknis, Eberta Kawima didampingi Kepala Biro SDM Yuli Hertaty, dan Kapuslatlitbang Wahyu Yudi Wijayanti menutup Pembekalan Tim Seleksi Calon Anggota KPU Provinsi dan KPU Kabupaten/Kota Gelombang Kedua untuk 118 Kabupaten/Kota di 15 Provinsi Periode 2023-2028, di Bali, Jumat (3/3/2023).\r\n\r\nPurwoto berpesan kepada timsel agar membantu KPU mendapatkan potensi calon Anggota KPU provinsi dan KPU kab/kota yang berintegritas dan memiliki kompetensi. \"Kami mohon bisa dengan pengetahuan dan pengalaman mendapatkan potensi calon anggota KPU yang berintegritas dan punya kompetensi,\" ucap Purwoto.\r\n\r\nMenurut Purwoto, pembekalan yang telah diberikan dalam dua hari, diharapkan dapat menjadi bekal bagi timsel dalam menyelesaikan tugasnya mendapatkan anggota KPU terbaik.\"Terutama bekal PKPU, juknis dan rencana kegiatan, mudah-mudahan bisa membantu menyelesaikan tugas, mengetahui tugas, amanah (yang) diberikan KPU,\" tegas Purwoto. \r\n\r\nPurwoto juga meminta agar KPU provinsi memfasilitasi timseluntuk mendapatkan calon anggota KPU provinsi dan KPU kabupaten/kota terbaik untuk 5 tahun kedepan.\r\n\r\nSebelum ditutup, Plt. Deputi Bidang Administrasi, Purwoto Ruslan Hidayat dan Deputi Bidang Dukungan Teknis, Eberta Kawima memantau jalannya sesi materi. Sesi ini terbagi menjadi dua kelas, yakni kelas sekretariat yang dipimpin Plt Deputi Bidang Administrasi, Purwoto Ruslan Hidayat didampingi Kepala Biro Sumber Daya Manusia (SDM) Yuli Hertaty yang dihadiri oleh Sekretaris KPU provinsi.\r\n\r\nKelas lainnya, yakni kelas timsel, pemateri Tenaga Ahli Setjen KPU, Muhammad Khuwailid dan Andika Pranata Jaya menyampaikan materi terkait tata kerja tim seleksi dan sosialisasi seleksi Anggota KPU provinsi dan kabupaten/kota serta pengenalan SIAKBA. Sesi pembekalan dilanjutkan dengan simulasi penilaian penelitian administrasi yang diikuti tim seleksi.\r\n\r\nTurut hadir, jajaran pejabat eselon II dan III Setjen KPU, Sekretaris KPU provinsi serta tim seleksi. (humas kpu ri tenri/ foto: james/ed diR)', 'Pelaksana tugas (Plt) Deputi Bidang Administrasi, Purwoto Ruslan Hidayat, bersama Deputi Bidang Dukungan Teknis, Eberta Kawima didampingi Kepala Biro SDM Yuli Hertaty, dan Kapuslatlitbang Wahyu Yudi W', '1678089077Tempate_Baru33.jpg'),
(11, 'Betty Ingatkan Jajaran Berpegang Teguh Pada Ketentuan', 'Anggota KPU Betty Epsilon Idroos mengikuti Rapat Koordinasi Daerah Perbatasan Terdampak Permendagri Nomor 52 Tahun 2020 pada wilayah Provinsi Kalimantan Barat, di Pontianak, Jumat (3/3/2023).\r\n\r\nWilayah Kalimantan Barat yang terdampak oleh Permendagri Nomor 52 Tahun 2020 tersebut berada di perbatasan antara Kota Pontianak dan Kabupaten Kubu Raya.\r\n\r\nDalam kesempatan tersebut, Betty menegaskan tidak ada perubahan terkait Permendagri Nomor 52 Tahun 2020. “Poin pertama, tidak ada perubahan terkait dengan Permendagri 52 Tahun 2020, jadi artinya secara kewilayahan sudah clear,” kata Betty.\r\n\r\nKemudian Betty melanjutkan pada poin kedua, bahwa KPU bekerja untuk Pemilu 2024 berdasarkan PKPU secara de jure.\r\n\r\n“Poin kedua, kita bekerja untuk Pemilu Tahun 2024 sesuai PKPU, yakni semua berdasarkan de jure, bukan hanya ansih, misalnya KTP-nya belum sesuai, perlu waktu ketika seseorang mengurus KTP pindah dari satu wilayah ke wilayah lain,” lanjut Betty.\r\n\r\nBetty meminta kerja sama jajarannya satu langkah, satu irama, agar semuanya sesuai ketentuan. Menyesuaikan dengan ketentuan yang sudah ada, kemudian ditindak lanjuti.\r\n\r\nSeperti diketahui dalam Permendagri Nomor 52 Tahun 2020, Kota Pontianak mengalami pemekaran dan terbentuklah Kabupaten Kubu Raya, sehingga penduduk di perbatasan yang semula adalah warga Kota Pontianak kemudian menjadi warga Kabupaten Kubu Raya perlu penyesuaian, meski begitu Betty tetap mengingatkan jajarannya untuk “stick on the rules” atau berpegang teguh pada ketentuan.\r\n\r\nSelain itu Betty juga mengapresiasi kinerja petugas Pantarlih yang sudah turun ke lapangan untuk melakukan pencocokan dan penelitian di Provinsi Kalimantan Barat. Acara ini diikuti oleh Ketua dan Anggota KPU Provinsi Kalimantan Barat beserja jajaran Sekretariat, Ketua dan Anggota KPU Kota Pontianak, serta Ketua dan Anggota KPU Kabupaten Kubu Raya.', 'Anggota KPU Betty Epsilon Idroos mengikuti Rapat Koordinasi Daerah Perbatasan Terdampak Permendagri Nomor 52 Tahun 2020 pada wilayah Provinsi Kalimantan Barat, di Pontianak, Jumat (3/3/2023).', '1678068021Tempate_Baru4.jpg'),
(12, 'Jaga Disiplin, Jalankan Tahapan Sesuai Aturan', 'Padatnya tugas menyelenggarakan tahapan Pemilu 2024 tidak boleh membuat kesidisplinan pegawai Komisi Pemilihan Umum (KPU) menurun. Justru kedisiplinan semakin meningkat seiring dengan dekatnya hari pemungutan suara, 14 Februari 2024.\r\n\r\nDeputi Bidang Dukungan Teknis Sekretariat Jenderal (Setjen) Komisi Pemilihan Umum (KPU) Eberta Kawima saat menjadi Pembina Apel yang berlangsung luring di Halaman Kantor KPU, Senin (6/3/2023) menyampaikan kedisplinan harus selalu ditunjukkan meski tidak sedang diawasi oleh pimpinan.  “Seperti apel ini, meski tidak ada pimpinan, komisioner, sekjen, tetap harus dilaksanakan,” ujar Wima.\r\n\r\nPesan lain yang disampaikan Wima kepada peserta apel, agar tetap fokus menjalankan tahapan Pemilu 2024. Meski pada perjalanannya, tahapan pemilu diwarnai sejumlah putusan pengadilan. “Tetap menyiapkan tahapan Pemilu 2024 dengan baik,” tambah Wima.\r\n\r\nHadir mengikuti Apel, Inspektur Utama KPU Nanang Priyatna, Pejabat Eselon II, III, IV, Fungsional, Tenaga Ahli dan staf di lingkungan KPU. ', 'Padatnya tugas menyelenggarakan tahapan Pemilu 2024 tidak boleh membuat kesidisplinan pegawai Komisi Pemilihan Umum (KPU) menurun.', '1678088830Tempate_Baru11.jpg'),
(13, 'Kerja Sama Timsel Hasilkan Penyelenggara Pemilu Berkarakter', 'Ketua KPU Hasyim Asy’ari, Anggota KPU Parsadaan Harahap, Mochammad Afifuddin, Yulianto Sudrajat, dan August Mellaz bersama Sekretaris Jenderal KPU Bernad Dermawan Sutrisno secara resmi membuka acara Pembekalan Tim Seleksi Calon Anggota KPU Provinsi dan KPU Kabupaten/Kota Gelombang Kedua Untuk 118 Kabupaten/Kota di 15 Provinsi Periode 2023-2028, yang diselenggarakan di Bali, Kamis (2/3/2023).\r\n\r\nDalam sambutannya, Hasyim mengajak semua tim seleksi untuk dapat bekerja sama dalam menghasilkan Anggota KPU kabupaten/kota di wilayah kerjanya masing-masing. Selain itu, Hasyim juga berpesan agar tim seleksi mencari Anggota KPU yang tangguh, tanggap, trengginas, dan juga sehat.\r\n\r\nBerdasarkan Pasal 22E UU Pemilu, karakter lembaga KPU ialah nasional, tetap, dan mandiri. Oleh karena itu, dapat dikatakan bahwa KPU kabupaten/kota merupakan ujung tombak KPU. Sebagai lembaga yang bersifat nasional, maka KPU kabupaten/kota harus memiliki standar yang telah ditetapkan oleh KPU RI secara nasional.\r\n\r\n“Bagi anggota tim seleksi yang berasal dari akademisi, perlu untuk mempertimbangkan aspek kognitif, afektif, dan psikomotorik. Pengalaman menjadi penyelenggara Pemilu menjadi salah satu aspek penilaian yang sangat besar,” kata Hasyim.\r\n\r\nHasyim juga menyampaikan terima kasih kepada timsel yang sudah bersedia membantu KPU untuk menjadi anggota tim seleksi. Sebelumnya dilakukan Pembacaan dan Penandatanganan Pakta Integritas oleh perwakilan Tim Seleksi Calon Anggota KPU Kabupaten/Kota periode 2023-2028.\r\n\r\nTurut hadir jajaran Eselon I dan II Setjen KPU, Sekretaris KPU Provinsi serta tim seleksi. ', 'Ketua KPU Hasyim Asy’ari, Anggota KPU Parsadaan Harahap, Mochammad Afifuddin, Yulianto Sudrajat, dan August Mellaz bersama Sekretaris Jenderal KPU Bernad Dermawan Sutrisno secara resmi membuka acara P', '1678067932Tempate_Baru3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`) VALUES
(1, 'Apa Perbedaan Bawaslu dan Panwaslu? Ini Penjelasan dan Tugasnya', '<p>Apa <a href=\"https://www.detik.com/tag/perbedaan-bawaslu-dan-panwaslu\" target=\"_blank\">perbedaan Bawaslu dan Panwaslu</a>? Bawaslu dan Panwaslu merupakan bagian dalam penyelenggaraan Pemilihan Umum (Pemilu). Keberadaan, tugas, wewenang dan kewajiban Bawaslu dan Panwaslu ini telah diatur dalam peraturan perundang-undangan.</p><p>Lantas apa yang dimaksud dengan Bawaslu dan Panwaslu? Apa bedanya Bawaslu dan Panwaslu? Apa saja tugas Bawaslu dan Panwaslu dalam Pemilu? Simak penjelasan lengkapnya berikut ini.</p><p>Apa bedanya Bawaslu dan Panwaslu? Perbedaan Bawaslu dan Panwaslu dapat diketahui melalui pengertian masing-masing. Berdasarkan Pasal 1 Undang-Undang (UU) Republik Indonesia Nomor 7 Tahun 2017 tentang Pemilihan Umum (Pemilu), berikut ini pengertian Bawaslu dan Panwaslu:</p><!--s:parallaxindetail--><div class=\"clearfix\"></div><style>\r\n      @import url(\"https://awscdnstatic.detik.net.id/live/_rmbassets/2022/parallax/parallax.css\");\r\n</style>\r\n<div class=\"paradetail\" style=\"display:none; padding-top: 16px;margin-bottom: 24px;\">     \r\n  <p id=\"para_caption\" style=\"margin:0px;font-size:12px;padding:5px 0 5px 0; background-color:#204099;color:white;text-align:center;width:100%;left:0;display:block;\">\r\n    ADVERTISEMENT\r\n  </p>\r\n  <div class=\"para paraA\">\r\n        <div class=\"para_abs\">\r\n          <div class=\"para_fix\" style=\"width: 480px;\">\r\n                <div class=\"para_ads\">\r\n                  <center>\r\n                        <!-- /4905536/detik_desktop/news/parallax_detail -->\r\n<div id=\"div-gpt-ad-1572507980488-0\" style=\"min-width: 300px; min-height: 250px; display: none;\">\r\n  <script>\r\n    googletag.cmd.push(function() { googletag.display(\'div-gpt-ad-1572507980488-0\'); });\r\n  </script>\r\n<div id=\"google_ads_iframe_/4905536/detik_desktop/news/parallax_detail_0__container__\" style=\"border: 0pt none; width: 300px; height: 0px;\"></div></div>\r\n                  </center>\r\n                </div>\r\n          </div>\r\n        </div>\r\n  </div>\r\n  <p id=\"para_caption2\" style=\"margin:-20px 0px;font-size:12px;padding:5px 0 5px 0;background-color:#204099;color:white;text-align:center;width:100%;left:0;display:block;\">\r\n        SCROLL TO RESUME CONTENT\r\n  </p>\r\n  <script>\r\n  function paraA(e) {\r\n  var p = $(e);\r\n  $(e + \" .para_fix\").width(p.width());\r\n  }\r\n  $(\".paraA iframe\").on(\"load\", paraA(\".paraA\"));\r\n  </script>\r\n</div><!--e:parallaxindetail--><h3>Bawaslu dalam Pemilu</h3><p>Bawaslu singkatan dari Badan Pengawas Pemilu. <strong>Bawaslu adalah</strong> lembaga Penyelenggara Pemilu yang mengawasi Penyelenggaraan Pemilu dan Pemilihan di seluruh wilayah Negara Kesatuan Republik Indonesia (NKRI). Bawaslu ada di tingkat Provinsi hingga Kabupaten/Kota.</p><ul><li>Badan Pengawas Pemilu Provinsi atau Bawaslu Provinsi adalah badan yang mengawasi Penyelenggaraan Pemilu dan Pemilihan di wilayah provinsi.</li><li>Badan Pengawas Pemilu Kabupaten/Kota atau Bawaslu Kabupaten/Kota adalah badan untuk mengawasi Penyelenggaraan Pemilu dan Pemilihan di wilayah kabupaten/kota.</li></ul><h3>Panwaslu dalam Pemilu</h3><p>Panwaslu singkatan dari Panitia Pengawas Pemilu. <strong>Panwaslu adalah</strong> panitia yang dibentuk oleh Bawaslu untuk mengawasi Penyelenggaraan Pemilu dan Pemilihan di wilayah tertentu. Panwaslu ada di tingkat Kecamatan, Kelurahan/Desa, hingga di Luar Negeri.</p><ul><li>Panitia Pengawasan Pemilu Kecamatan atau Panwaslu Kecamatan adalah panitia yang dibentuk oleh Bawaslu Kabupaten/Kota untuk mengawasi</li><li>Penyelenggaraan Pemilu dan Pemilihan di wilayah kecamatan atau nama lain.</li><li>Panitia Pengawasan Pemilu Kelurahan/Desa atau Panwaslu Kelurahan/Desa (PKD) adalah petugas untuk mengawasi Penyelenggaraan Pemilu dan Pemilihan di kelurahan/desa atau nama lain</li></ul><table align=\"center\" class=\"pic_artikel_sisip_table\"><tbody><tr><td><div class=\"pic_artikel_sisip\" align=\"center\"><div class=\"pic\"><img src=\"https://awsimages.detik.net.id/community/media/visual/2023/01/31/ilustrasi-1_169.jpeg?w=620\" alt=\"Ilustrasi\" title=\"Ilustrasi\" class=\"p_img_zoomin img-zoomin note-float-left\" pinger-seen=\"true\" style=\"float: left; width: 50%;\"><br></div></div></td></tr></tbody></table><br><h2>Perbedaan Tugas Bawaslu dan Panwaslu</h2><p>Terkait perbedaan Bawaslu dan Panwaslu dapat dilihat pula dari tugas, wewenang dan kewajibannya masing-masing. Berikut ini penjelasannya berdasarkan UU No. 7 Tahun 2017 (UU Pemilu):</p><p><strong>Tugas Bawaslu adalah:</strong></p><ul><li>Menyusun standar tata laksana pengawasan penyelenggaraan Pemilu untuk pengawas Pemilu di setiap tingkatan.</li><li>Melakukan pencegahan dan penindakan terhadap pelanggaran dan sengketa proses Pemilu.</li><li>Mengawasi persiapan penyelenggaraan Pemilu.</li><li>Mengawasi pelaksanaan tahapan penyelenggaraan Pemilu.</li><li>Mencegah terjadinya praktik politik uang.</li><li>Mengawasi netralitas ASN, TNI, dan Polri.</li><li>Mengawasi pelaksanaan putusan/keputusan.</li><li>Menyampaikan dugaan pelanggaran kode etik penyelenggara Pemilu kepada DKPP.</li><li>Menyampaikan dugaan tindak pidana Pemilu kepada Gakkumdu.</li><li>Mengelola, memelihara, dan merawat arsip serta melaksanakan penyusutannya berdasarkan jadwal retensi arsip sesuai dengan ketentuan peraturan perundang-undangan.</li><li>Mengevaluasi pengawasan Pemilu.</li><li>Mengawasi pelaksanaan Peraturan KPU.</li><li>Melaksanakan tugas lain sesuai dengan ketentuan peraturan perundang-undangan.</li></ul><p><strong>Tugas Panwaslu Kecamatan:</strong></p><ul><li>Melakukan pencegahan dan penindakan di wilayah kecamatan terhadap pelanggaran Pemilu.</li><li>Mengawasi pelaksanaan tahapan penyelenggaraan Pemilu di wilayah kecamatan.</li><li>Mencegah terjadinya praktik politik uang di wilayah kecamatan.</li><li>Mengawasi netralitas semua pihak yang dilarang ikut serta dalam kegiatan kampanye sebagaimana diatur dalam Undang-Undang ini di wilayah kecamatan.</li><li>Mengawasi pelaksanaan putusan/keputusan di wilayah kecamatan.</li><li>Mengelola, memelihara, dan merawat arsip serta melaksanakan penyusutannya berdasarkan jadwal retensi arsip sesuai dengan ketentuan peraturan perundang-undangan.</li><li>Mengawasi pelaksanaan sosialisasi Penyelenggaraan Pemilu di wilayah kecamatan.</li><li>Mengevaluasi pengawasan Pemilu di wilayah kecamatan.</li><li>Melaksanakan tugas lain sesuai dengan ketentuan peraturan perundang-undangan.</li></ul><p><strong>Tugas Panwaslu Kabupaten/Desa (PKD):</strong></p><ul><li>Mengawasi pelaksanaan tahapan penyelenggaraan Pemilu di wilayah kelurahan/desa.</li><li>Mencegah terjadinya praktik politik uang di wilayah kelurahan/desa.</li><li>Mengawasi netralitas semua pihak yang dilarang ikut serta dalam kegiatan kampanye sebagaimana diatur dalam Undang-Undang ini di wilayah kelurahan/desa.</li><li>Mengelola, memelihara, dan merawat arsip berdasarkan jadwal retensi arsip sesuai dengan ketentuan peraturan perundang-undangan.</li><li>Mengawasi pelaksanaan sosialisasi penyelenggaraan Pemilu di wilayah kelurahan/desa.</li><li>Melaksanakan tugas lain sesuai dengan ketentuan peraturan perundang-undangan.</li></ul><div class=\"detail__body-tag mgt-16\">\r\n        </div>\r\n\r\n        \r\n        \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `jam_kerja` varchar(50) NOT NULL,
  `logo_web` text NOT NULL,
  `judul_welcome` text NOT NULL,
  `isi_welcome` text NOT NULL,
  `map` text NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_kesekretariatan` varchar(20) NOT NULL,
  `pesan_wa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `jam_kerja`, `logo_web`, `judul_welcome`, `isi_welcome`, `map`, `alamat`, `email`, `no_hp`, `no_kesekretariatan`, `pesan_wa`) VALUES
(1, 'Senin - Sabtu, 08:00 - 22:00', 'logo.png', 'Welcome to PPLN KL', 'Panitia Pemilihan Luar Negeri dan Kelompok Penyelenggara Pemungutan Suara Luar Negeri yang selanjutnya masing-masing disebut PPLN dan KPPSLN adalah penyelenggara pemilihan umum di luar negeri dan di Tempat Pemungutan Suara di luar negeri yang bertugas membantu KPU.', 'kbri kuala lumpur', 'No. 233, Jln Tun Razak, Imbi, 50400 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'pplnkualalumpur@kpu.', '+60167347441', '+60176450129', 'Halo kak, mau nanya seputar tentang PPLN KL, Pantarlih dan KPU dong kak!.');

-- --------------------------------------------------------

--
-- Table structure for table `partai`
--

CREATE TABLE `partai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kepanjangan` varchar(50) NOT NULL,
  `web` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partai`
--

INSERT INTO `partai` (`id`, `nama`, `kepanjangan`, `web`, `gambar`) VALUES
(1, 'PDIP', 'Partai Demokrasi Indonesia Perjuangan', 'www.pdiperjuangan.id', 'pdi.png'),
(2, 'Perindo', 'Perindo', 'www.partaiperindo.com', 'perindo.png'),
(3, 'PKS', 'Partai Keadilan Sejahtera', 'www.PKS.id', 'pks.png'),
(4, 'PBB', 'Partai Bulan Bintang', 'www.partaibulanbintang.or.id', 'pbb.png'),
(5, 'PKP', 'Partai Keadilan dan Persatuan', '', 'pkp.png'),
(6, 'Nasdem', 'Partai Nasdem', 'www.nasdem.id', 'nasdem.png'),
(7, 'PKN', 'Partai Kebangkitan Nusantara', 'www.pimnas-pkn.id', 'pkn.png');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'pertanyaan 1', 'jawaban 1'),
(2, 'pertanyaan 2', 'jawaban 2\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `id` int(11) NOT NULL,
  `kuala_lumpur` int(11) NOT NULL,
  `selangor` int(11) NOT NULL,
  `terengganu` int(11) NOT NULL,
  `kelantan` int(11) NOT NULL,
  `putrajaya` int(11) NOT NULL,
  `perak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`id`, `kuala_lumpur`, `selangor`, `terengganu`, `kelantan`, `putrajaya`, `perak`) VALUES
(1, 34, 54, 23, 54, 65, 76);

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `judul`, `isi`, `icon`) VALUES
(2, ' Melakukan perbaikan data', 'Melakukan perbaikan data Melakukan perbaikan data pemilih atas dasar masukan dari masyarakat Indonesia di luar negeri', 'fas fa-database'),
(3, ' Melakukan rekapitulasi hasil perhitungan', 'Melakukan rekapitulasi hasil perhitungan suara dari seluruh TPSLN dalam wilayah kerjanya dan hasil pemungutan suara melalui pos', 'fas fa-address-card'),
(4, 'Melakukan evaluasi dan membuat laporan', 'Melakukan evaluasi dan membuat laporan setiap tahapan penyelenggaraan Pemilu di wilayah kerjanya', 'fas fa-book'),
(5, ' Melaksanakan sosialisasi', 'Melaksanakan sosialisasi penyelenggaraan Pemilu dan/atau yang berkaitan dengan tugas dan wewenang PPLN kepada masyarakat Indonesia di luar negeri', 'fas fa-users');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'iqbal', 'eedae20fc3c7a6e9c5b1102098771c70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partai`
--
ALTER TABLE `partai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partai`
--
ALTER TABLE `partai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peta`
--
ALTER TABLE `peta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
