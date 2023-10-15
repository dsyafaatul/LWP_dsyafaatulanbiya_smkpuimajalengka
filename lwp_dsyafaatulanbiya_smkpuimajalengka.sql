-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 10:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lwp_dsyafaatulanbiya_smkpuimajalengka`
--
CREATE DATABASE IF NOT EXISTS `lwp_dsyafaatulanbiya_smkpuimajalengka` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lwp_dsyafaatulanbiya_smkpuimajalengka`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `nama`, `no_telp`) VALUES
(1, 'D.Syafaatul Anbiya', '089677011289'),
(3, 'D.Jamaatul Anbiya', '089697823201'),
(4, 'Dimas Septian Irawan', '089123123123');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama_kuliner`, `deskripsi`, `gambar`, `id_user`) VALUES
(1, 'ABON PUYUH ABAH GEYOT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ABON PUYUH ABAH GEYOT.JPG', 1),
(3, 'BEUNTEUR KRISPI', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'BEUNTEUR KRISPI.JPG', 1),
(4, 'EMPING JAGUNG PROD ASRI RAHAYU CIJATI', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'EMPING JAGUNG PROD ASRI RAHAYU CIJATI.JPG', 1),
(5, 'GORENG SIMEUT ABAH GEYOT (2)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'GORENG SIMEUT ABAH GEYOT (2).JPG', 1),
(6, 'GULA CAKAR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'GULA CAKAR (2).JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','pengelola') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'pengelola', 'pengelola', '3c7913bc17671596a43dcb4581992bdf', 'pengelola');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `deskripsi`, `gambar`, `id_user`) VALUES
(1, 'BANTARAGUNG', 'Bantaragung adalah desa di kecamatanSindangwangi, Majalengka, Jawa Barat, Indonesia. \r\nSecaratopografis, DesaBantaragungrelatif pada hamparanberbukit-bukit yang dialiriduasungaiyaitusungaiCiwaringin dan sungaiCijejeng. Sungai inidimanfaatkanuntukpasokanirigasilahanpersawahan. \r\nSecaraadministratif, wilayahDesaBantaragungmemilikibatassebagaiberikut :\r\nSebelahUtara :DesaSindangwangiKecamatanSindangwangi\r\nSebelahSelatan :Hutan Taman nasionalGunungCiremai\r\nSebelahTimur :DesaPadaherangKecamatanSindangwangi\r\nSebelahBarat :DesaPayungKecamatanRajagaluh\r\nLuas wilayahDesaBantaragungadalah 392,29 Ha. Sebagaimanawilayahtropis, DesaBantaragungmengalamimusimkemarau dan musimpenghujandalamtiaptahunnya. Rata-rata perbandinganmusimpenghujanlebihbesardaripadamusimkemarau, halitudisebabkankarenawilayah yang masihhijaudenganvegetasisertarelatifdekatdenganwilayahHutan Taman NasionalGunungCiremai. \r\nJarakpusatdesadenganibukotakabupaten yang dapatditempuhmelaluiperjalanandaratkuranglebih 25 km. Kondisiprasaranajalanporosdesa yang masihberupajalankonstruksihotmixdengankondisirusakringanmengakibatkanwaktutempuhmenggunakankendaraanbermotormencapaikuranglebih 40 menit. Sedangkanjarakpusatdesadenganibukotakecamatan yang dapatditempuhmelaluiperjalanandaratkuranglebih 3 km. Kondisiruasjalanporosdesa yang dilalui juga berupajalankonstruksilapendengankondisirusakringanmengakibatkanwaktutempuhmenggunakankendaraanbermotormencapaikuranglebih 15 menit. \r\nDesaBantaragungmerupakanwilayah paling potensialuntukusahapertanian dan pengembanganwisataalam. Hal tersebutdidukung oleh kondisigeografissertaalam yang masihhijau. DukunganpemerintahdaerahuntukpengembanganpotensiwisataalamdiwujudkandenganmenetapkanwilayahDesaBantaragungsebagaibagian Kawasan WisataSindangwangi (KAWITWANGI). Berdasarkankondisidesainimakaakandijabarkanpermasalahan, potensi, hingga daftar Rencana Pembangunan JangkaMenengahDesa(RPJMDes) yang diprogramkanuntuk 6 (enam) tahun\r\n\r\n', 'BANTARAGUNG.jpg', 1),
(2, 'GREEN CANYON', 'Salah satuwisata yang terletak di DesaSukadana, Kecamatan Argapura, Majalengka inilebihmiripdengan Green Canyon yang ada di Pangandaran. Bentanganjurangbatu yang sangatbesar dan panjangkuranglebih 1 kilometer,dibawahnyamengalir air yang sangatjernihyaknialiran Sungai Cilongkrang.\r\nGreen Canyon ini punya keunikanyaitubatu-batu yang mengapitsisijurangnyaberwarnahijau. Awalnyaada air terjun yang dinamakan air terjunPelangi. Nama ini muncul karenabilaterkena\r\nsinarmataharitampakadapelangi yang terbentukdarikepulan air terjun.\r\nSelainitu yang unikdari Green Canyon Majalengkainiadalahsuhunyasangatdingin, duatebing yang mengapitsungaiCilongkrang yang ketinggiannyamencapailebihdari 20 meteranserasaberada di guabesar. Tebingbatu yang berada di kanankiritersebutberwarnakehijauan dan bentuknyaseolahdiukirmembentukkotak-kotakkecil.\r\nDi DesaSukadanainiselainterdapat air terjun dan Green Canyon juga terdapatguakelelawar yang cukupbanyakdikunjungi oleh wisatawan. Oleh karenaitudikenal juga sebagai goa lalay (kelelawar) karenaterdapatribuankelelawar yang setiapsaatmenempel di bebatuan.\r\n\r\n', 'GREEN CANYON GOA LALAY3.jpg', 1),
(3, 'PANYAWEUYAN', 'Bukit panyaweuyanargapuramajalengkamerupakandaerahperbukitan, di kaki gunungciremai yang indahtiadataranya. Wisatateraseringpanyaweuyanargapura, sedangberada pada puncaksorotan para traveller pecintaalam. Banyak sekali para pengunjungmenguploadnya, daripadafoto-fotoataugambarbukitpanyweuyan di media sosial.\r\nBukit panyaweuyaninidikenaldengansebutanbukitpanyaweuyanargapuramajalengka, atauteraseringpanyaweuyanargapuramajalengka. Dan wisatateraseringpanyaweuyanini juga, sering kali disebutlembahpanyaweuyanmajalengka.\r\nBukit PanyaweuyanArgapuraMajalengka\r\nSangatdisayangkanwisatamajalengkaini, barudikelola pada saatini. Dahulunyamayoritaspribumimajalengkasaja, kiblatdaridestinasiwisata yang populeradalahbandung. Kondisiwisatamajalengkasaatdahulumasihbelumdikelola, sehinggabagimasyarakatsekitarwisatamajalengkahanyalahsebagaiwisata main-main. Dalamartianbermain di wisata, hanyalahsebagaiajangmemanfaatwaktukosongkarena gratis. Sepertihalnya di wisatabukitpanyaweuyanargapuramajalengka.\r\nFasilitas dan wahanahanyabenar-benaralam yang tersaji. Wisata air terjunhanyabenar-benar air terjun, dan sampahdimana-mana. Dekorasicurughanyalah ranting-ranting pohon dan akar yang menjalarsehidupnya. Rumput-rumputhiduphinggamenjulangtinggisejajarkitaberdiri. Selalumembawasenjatatajammenujuwisata,untukberlindungdarihewan-hewanbuas. Selainmembawasenjatatajamuntukberlindung, tujuannyauntukmembuataksesjalanmenujuwisata. Pokoknyawisatamajalengkadulu, bagi orang yang mempunyaikeberanian dan tidaktakutakanmitos.\r\nNamunsaatiniwisatamajalengkasudahdikelola, dan pemda juga berkontribusiuntukmemakmurkanrakyatmelaluipembenahantempatpariwisata. Denganberkembangnyadestinasiwisataini, para wargamasyarakatsekitarikutandil dan meramaikannya. Malahsekarangtidakhanyamasyarakatmajalengkasaja, tapidarikabupaten yang berdekatanseringberkunjungkewisatamajalengka. Saatiniwisatamajalengkabanyak di kunjungidarikabupatenkuningan, cirebon, indramayu dan tasikmalaya.\r\nWisatamajalengkatidakkalahmanariknyadengantempatwisata di bandung. Bandung punya wisata sky resto glamping lakeside, denganpenisiminiaturkapalnya. Ternyatamajalengka juga mempunyai sky resto denganpenisikapal di paralandmajalengka. Glamping lakeside terdapat di perbukitandengansitu patenggang, sedangkanparalandberada di gunungpanten.\r\nWisatateraseringpanyaweuyanargapura\r\nLokasibukitpanyaweuyanini, berada di argapuramajalengka. Tepatnyaberada di blokcibuluhdesateja, kecamatanargapurakabupatenmajalengkajawabarat. Wisatamajalengkainiakan kaya pesonaalamdenganpemandangan yang indah dan asri. Makatidak salah lagiyasobat, majalengkaberjulukseribucurugini. Tempatwisata di argapuralainnya green canyon sukadanamajalengka, curugmuarajaya dan kampoeng air.\r\nTeraseringpanyaweuyanargapuramemberikanmanfaat, baikwargasekitarmaupun para pengunjung. Dengantekstureterasering yang miring, memberikanmanfaatuntukmeminimalisirterjadinyalongsor. Selainitu juga untukmempermudah proses penyerapan air pada tanaman di sawah. Berbagaimacamtanaman yang tumbuhsubur di panyaweuyanini, selainpadidiantaranyadaunbawang dan umbi-ubian. Masyarakat sekitarmenjadilahansumbermatapencaharian di bidangpertanian.\r\n\r\n', 'PANYAWEUYAN.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
