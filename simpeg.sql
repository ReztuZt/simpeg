-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 07:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `jam_masuk` varchar(50) NOT NULL,
  `jam_keluar` varchar(50) NOT NULL,
  `status` enum('A','I','S','C','X') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nip`, `tgl`, `jam_masuk`, `jam_keluar`, `status`) VALUES
(1, '196403261987101001', '2019-01-04', '07:50', '16:46', 'A'),
(3, '9967564568943644234', '2019-01-01', '', '', 'C'),
(4, '9967564568943644234', '2019-01-04', '', '', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `ke` int(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tunjangan` varchar(50) NOT NULL,
  `kawin` varchar(50) NOT NULL,
  `bekerja` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `putusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `nip`, `nama`, `tempat`, `tanggal_lahir`, `status`, `ke`, `gender`, `tunjangan`, `kawin`, `bekerja`, `sekolah`, `putusan`) VALUES
(1, '197009261997031007', 'ALFATH SHIFA GHIFARA', 'Sungailiat', '1998-09-27', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(2, '197009261997031007', 'KHANSAHATIKAH KHAIRUNNISA', 'Sungailiat', '2003-03-05', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(3, '197009261997031007', 'HANIF MUHAMMAD FALAH', 'Pangkalpinang', '2011-06-17', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(4, '197412042005012002', 'NAJWA WIHDAHANI', 'Pangkalpinang', '2020-01-01', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(5, '197910072003121001', 'QHODARI TRISTAN EL FAQIH', 'Pangkalpinang', '2011-08-22', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(6, '197910072003121001', 'QANITA SHANAZ EL MAULIDA', 'Pangkalpinang', '2013-03-25', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(7, '197708142002121004', 'HUMAIRA DELFIYONA', 'Pangkalpinang', '2010-10-27', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(8, '197405142007011031', 'ARBIAN PUTRA RAMDHAN', 'Sungailiat', '2005-10-31', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(9, '197405142007011031', 'ANNISYAH MAHARANI', 'Sungailiat', '2003-05-05', 'AK', 1, 'Perempuan', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(10, '197405142007011031', 'SASKIA PUTRI MAHARANI', 'Sungailiat', '2012-01-21', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(11, '196905081995032004', 'YASMIN RAMADHANI', 'Jakarta', '2007-09-29', '', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(12, '196905081995032004', 'FATIH HASYIM', 'Jakarta', '2009-06-27', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(13, '198304192010012013 ', 'MUHAMMAD AUFA SAMBARA TRESNADI', 'Pangkalpinang', '2012-03-13', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(14, '198304192010012013 ', 'KHANSA KHAIRUNNISA TRESNADI', 'Pangkalpinang', '2014-09-14', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(15, '197807132002121006', 'JOSUA LUBIS', 'Pangkalpinang', '2015-02-02', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(16, '198505042009032008', 'NAFISAH AULIA RACHMANDA', 'Pangkalpinang', '2009-11-13', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(17, '198505042009032008', 'HANIFAH FIRLII RACHMANDA', 'Pangkalpinang', '2011-03-20', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(18, '198505042009032008', 'ARGA ALFATIH RACHMANDA', 'Pangkalpinang', '2015-05-17', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(19, '197301232006041001', 'DAEMENTIVA A.S.', 'Pangkalpinang', '2006-01-25', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(20, '197709102007011006', 'AGUS ZHALFA FEBRIYAN', 'Pangkalpinang', '2005-02-03', 'AK', 1, 'L', 'Dapat', 'Belum', 'Tidak', 'Masih', ''),
(21, '197709102007011006', 'ZALYKA OLIVIA', 'Pangkalpinang', '2015-03-25', 'AK', 1, 'P', 'Dapat', 'Belum', 'Tidak', 'Masih', '');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` int(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tgl` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id`, `nip`, `keterangan`, `tgl`, `foto`, `tipe`) VALUES
(3, '', '', '0000-00-00', '3__', 'file'),
(5, '197009261997031007', 'SK', '2020-10-05', '5_197009261997031007_Materi 1 Ketentuan Umum v.3.pdf', 'file'),
(6, '197910072003121001', 'SK', '2020-10-05', '6_197910072003121001_Peraturan Presiden Nomor 16 Tahun 2018.pdf', 'file'),
(7, '197910072003121001', 'sd', '2020-10-06', '7_197910072003121001_Ringkasan Eksekutif DIKPLHD Babel 2019.pdf', 'file'),
(8, '197910072003121001', 'ijazah', '2020-10-07', '8_197910072003121001_index.pdf', 'file'),
(9, '197009261997031007', 'Ijazah', '2020-10-08', '9_197009261997031007_Data Pegawai  (SEPAKAT BERKAWAN).pdf', 'file'),
(10, '197910072003121001', 'Sertifikat', '2020-10-08', '10_197910072003121001_index_5.pdf', 'file');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` bigint(11) NOT NULL,
  `id_cek` int(10) NOT NULL,
  `tgl_cuti` date NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jenis_cuti` varchar(100) NOT NULL,
  `alasan` text NOT NULL,
  `lama` int(10) NOT NULL,
  `cek` varchar(50) NOT NULL,
  `tgl_a` date NOT NULL,
  `tgl_b` date NOT NULL,
  `nip_atasan` varchar(255) NOT NULL,
  `status` enum('A','X','Y','P','T','B') NOT NULL,
  `n2` int(10) NOT NULL,
  `n1` int(10) NOT NULL,
  `n` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_cek`, `tgl_cuti`, `nip`, `jenis_cuti`, `alasan`, `lama`, `cek`, `tgl_a`, `tgl_b`, `nip_atasan`, `status`, `n2`, `n1`, `n`) VALUES
(20190106011, 11, '2019-01-06', '9967564568943644234', 'Cuti Sakit', 'sfrbn', 3, 'Hari', '2019-01-07', '2019-01-09', '9967564568943644234', 'A', 0, 0, 0),
(20190107001, 1, '2019-01-07', '9967564568943644234', 'Cuti Besar', 'ihweg', 2, 'Hari', '2019-01-15', '2019-01-23', '196403261987101001', 'A', 0, 0, 0),
(20190112001, 1, '2019-01-12', '9967564568943644234', 'Cuti Alasan Penting', 'sfrb', 4, 'Bulan', '2019-01-25', '2019-01-28', '196403261987101001', 'Y', 0, 0, 0),
(20190119001, 1, '2019-01-19', '9967564568943644234', 'Cuti Sakit', 'klneb', 3, 'Hari', '2019-01-21', '2019-01-22', '197403081993111002', 'B', 0, 0, 0),
(20190119002, 2, '2019-01-19', '9967564568943644234', 'Cuti Tahunan', 'kjevb', 2, 'Hari', '2019-01-22', '2019-01-24', '196403261987101001', 'B', 0, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_s_ijasah`
--

CREATE TABLE `detail_s_ijasah` (
  `id_detail_s_ijasah` bigint(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tingkat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freelance`
--

CREATE TABLE `freelance` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `keterangan` varchar(90) NOT NULL,
  `code` varchar(32) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `foto_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `freelance`
--

INSERT INTO `freelance` (`id`, `nama`, `email`, `no_telp`, `keterangan`, `code`, `alamat`, `photo`, `foto_path`) VALUES
(1, 'Restu Setiawan', 'restusetiawan948@gmail.com', '081229382838', 'Software Engineer', '84442', '', NULL, 'uploads/84442_1a2d8dee74e569ca143c522cb48150b7.jpg'),
(3, 'Rido Susepto', 'suseptoridos@gmail.com', '081229382848', 'UI/UX Design', '260305', '', NULL, 'uploads/260305_dads.jpg'),
(4, 'Andika Dwi Saputra', 'andika.dwi.saputra@gmail.com', '081229382848', 'Software Engineer', '085726', '', NULL, NULL),
(5, 'Tia Ayu Lestari', 'tiaayu2309@gmail.com', '0829123282', 'Businesses Analysts', '2309', 'Lengkong,Rakit', NULL, NULL),
(8, 'Eva Setyaningsih', 'evapinjol@gmail.com', '0812345678', 'Project Management', '2347647367463824692347634', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` int(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `gaji_pokok` int(10) NOT NULL,
  `tunj_istri` int(10) NOT NULL,
  `tunj_anak` int(10) NOT NULL,
  `tunj_hselon` int(10) NOT NULL,
  `tunj_fung_umum` int(10) NOT NULL,
  `tunj_fungsional` int(10) NOT NULL,
  `tunj_khusus` int(10) NOT NULL,
  `tunj_terpencil` int(10) NOT NULL,
  `tkd` int(10) NOT NULL,
  `tunj_beras` int(10) NOT NULL,
  `tunj_pajak` int(10) NOT NULL,
  `tunj_bpjs` int(10) NOT NULL,
  `tunj_jkk` int(10) NOT NULL,
  `tunj_jkm` int(10) NOT NULL,
  `pembulatan` int(10) NOT NULL,
  `pot_pajak` int(10) NOT NULL,
  `pot_bpjs` int(10) NOT NULL,
  `pot_iwp_21` int(10) NOT NULL,
  `pot_iwp_01` int(10) NOT NULL,
  `pot_tapebum` int(10) NOT NULL,
  `pot_jkk` int(10) NOT NULL,
  `pot_jkm` int(10) NOT NULL,
  `hutang` int(10) NOT NULL,
  `bulog` int(10) NOT NULL,
  `sewa_rumah` int(10) NOT NULL,
  `tgl_gaji` date NOT NULL,
  `gaji_bersih` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `nip`, `gaji_pokok`, `tunj_istri`, `tunj_anak`, `tunj_hselon`, `tunj_fung_umum`, `tunj_fungsional`, `tunj_khusus`, `tunj_terpencil`, `tkd`, `tunj_beras`, `tunj_pajak`, `tunj_bpjs`, `tunj_jkk`, `tunj_jkm`, `pembulatan`, `pot_pajak`, `pot_bpjs`, `pot_iwp_21`, `pot_iwp_01`, `pot_tapebum`, `pot_jkk`, `pot_jkm`, `hutang`, `bulog`, `sewa_rumah`, `tgl_gaji`, `gaji_bersih`) VALUES
(4, '19700926 199703 1 007', 4200000, 56456, 565565, 1200000, 400000, 350000, 350000, 0, 0, 250000, 120000, 0, 120000, 0, 0, 40000, 75000, 0, 50000, 0, 0, 40000, 0, 70000, 400000, '2020-09-01', 6937021),
(5, '197009261997031007', 4295100, 245000, 185000, 1200000, 400000, 350000, 350000, 600000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 8500100),
(6, '197412042005012002', 3602400, 265000, 565565, 656567, 1150000, 350000, 325000, 550000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 8339532),
(7, '197910072003121001', 3350600, 265000, 450000, 900000, 400000, 350000, 350000, 600000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 7540600),
(8, '197708142002121004', 3602400, 265000, 185000, 1200000, 400000, 350000, 350000, 600000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 7827400),
(9, '197405142007011031', 2597800, 265000, 565565, 1200000, 400000, 350000, 350000, 600000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 7203365),
(10, '196905081995032004', 2871800, 265000, 565565, 1200000, 400000, 350000, 350000, 600000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 0, '2020-10-01', 7877365),
(11, '198304192010012013 ', 3149100, 265000, 565565, 1200000, 400000, 350000, 325000, 450000, 900000, 200000, 110000, 450000, 120000, 120000, 0, 40000, 55656, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 350000, '2020-10-01', 7689009),
(12, '197807132002121006', 3273200, 265000, 565565, 1200000, 400000, 350000, 350000, 550000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 7828765),
(13, '198505042009032008', 3021300, 265000, 185000, 656567, 400000, 350000, 350000, 550000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 6652867),
(14, '197301232006041001', 3666900, 265000, 565565, 1200000, 400000, 350000, 350000, 550000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 8222465),
(15, '197709102007011006', 3565000, 265000, 450000, 1200000, 1150000, 350000, 350000, 600000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 350000, '2020-10-01', 8855000),
(16, '198407122009031003', 3021300, 265000, 565565, 1200000, 1150000, 350000, 350000, 600000, 900000, 250000, 120000, 350000, 120000, 120000, 0, 40000, 75000, 100000, 50000, 80000, 80000, 40000, 50000, 70000, 400000, '2020-10-01', 8376865);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `golongan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`golongan`, `keterangan`) VALUES
('GOL I A', 'SD'),
('GOL I B', 'SMP'),
('GOL II A', 'SMA'),
('Golongan III A', 'Sarjana S1');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `50` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` enum('pangkat','jenis','status','jabatan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`50`, `nama`, `jenis`) VALUES
(1, 'Kepala Dinas', 'jabatan'),
(2, 'sektretaris', 'jabatan'),
(3, 'Pegawai Negeri Sipil', 'jenis'),
(4, 'honorer', 'jenis'),
(5, 'Pengatur Muda / IIa', 'pangkat'),
(6, 'Pengatur Muda Tk I / IIb', 'pangkat'),
(7, 'Aktif', 'status'),
(8, 'Non Aktif', 'status'),
(9, 'Pengatur / IIc', 'pangkat'),
(10, 'Pengatur Tk I /IId', 'pangkat'),
(11, 'Penata Muda / IIIa', 'pangkat'),
(12, 'Penata Muda Tk I / IIIb', 'pangkat'),
(13, 'Penata / IIIc', 'pangkat'),
(14, 'Penata Tk I / IIId', 'pangkat'),
(15, 'Pembina / IVa', 'pangkat'),
(16, 'Pembina Tk I / IVb', 'pangkat'),
(17, 'Pembina Utama Muda / IVc', 'pangkat'),
(18, 'Pembina Utama Madya / IVd', 'pangkat'),
(19, 'Kepala UPTD Laboratorium Lingkungan', 'jabatan'),
(20, 'Kepala Bidang Tata Lingkungan', 'jabatan'),
(21, 'Kepala Bidang Pengendalian dan Penataan Lingkungan Hidup', 'jabatan'),
(22, 'Kepala Bidang PLHPSPKLH', 'jabatan'),
(23, 'Kasubbag Umum', 'jabatan'),
(24, 'Kasubbag Perencaan', 'jabatan'),
(25, 'Kasubbag Keuangan', 'jabatan'),
(26, 'Analis SDM Aparatur', 'jabatan'),
(27, 'Penyusun Kebutuhan Barang Inventaris', 'jabatan'),
(28, 'Pranata Komputer Pelaksana', 'jabatan'),
(29, 'Pengadministrasi Umum', 'jabatan'),
(30, 'Analis Perencanaan, Evaluasi dan Pelaporan', 'jabatan'),
(31, 'Pengelola Program dan Kegiatan', 'jabatan'),
(32, 'Bendahara', 'jabatan'),
(33, 'Pengadministrasi Keuangan', 'jabatan'),
(34, 'Pengendali Dampak Lingkungan Pertama', 'jabatan'),
(35, 'Pengendali Dampak Lingkungan Muda', 'jabatan'),
(36, 'PPLH Pertama', 'jabatan'),
(37, 'PPLH Madya', 'jabatan'),
(38, 'Kasi Perencaan Lingkungan Hidup', 'jabatan'),
(39, 'Kasi Pengendalian Pencemaran dan Kerusakan LIngkungan Hidup', 'jabatan'),
(40, 'Kasi Pemeliharaan Lingkungan Hidup dan Pengelolaan Sampah', 'jabatan'),
(41, 'Pengelola Data', 'jabatan'),
(42, 'Pengelola Lingkungan', 'jabatan'),
(43, 'Kasi Kajian dampak Lingkungan', 'jabatan'),
(44, 'Kasi Penegakan Hukum, Limbah B3, Pengaduan dan penyelesaian Sengketa Lingkungan Hidup', 'jabatan'),
(45, 'Kasi Peningkatan Kapasitas Lingkungan Hidup', 'jabatan'),
(46, 'Penelaah Dampak Lingkungan', 'jabatan'),
(47, 'Pengelola Dokumen Mengenai AMDAL', 'jabatan'),
(48, 'Pengelola Penyelesaian Hasil Pengawasan', 'jabatan'),
(49, 'Pengawas Lingkungan Hidup Pertama', 'jabatan'),
(50, 'Pengawas Lingkungan Hidup Muda', 'jabatan'),
(51, 'Pengawas Lingkungan Hidup Madya', 'jabatan'),
(52, 'Kasubbag Tata Usaha', 'jabatan'),
(53, 'Kasi Pengujian', 'jabatan'),
(54, 'Kasi Pengendalian Mutu', 'jabatan'),
(55, 'Analis Tata Usaha', 'jabatan'),
(56, 'Pengadministrasi Contoh Uji', 'jabatan'),
(57, 'Pengadministrasi Pengujian', 'jabatan'),
(58, 'Analis Laboratorium', 'jabatan'),
(59, 'Pengelola Laboratorium', 'jabatan'),
(60, 'Magang', 'jenis'),
(61, 'd', 'jabatan');

-- --------------------------------------------------------

--
-- Table structure for table `jml_hari_rekap`
--

CREATE TABLE `jml_hari_rekap` (
  `id_jml` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jml` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jml_hari_rekap`
--

INSERT INTO `jml_hari_rekap` (`id_jml`, `tgl`, `jml`) VALUES
(1, '2019-01-01', 19);

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` int(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `ke` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `nip`, `nama`, `tempat`, `tgl_lahir`, `nik`, `pekerjaan`, `tgl_nikah`, `ke`, `penghasilan`) VALUES
(1, '197009261997031007', 'herawati.amd', 'Sungailiat', '1970-03-04', 2147483647, 'Ibu Rumah Tangga', '1997-11-06', 1, 3000000),
(2, '197412042005012002', 'SYAHRUROZI, A.Md', 'Pangkalpinang', '1972-08-18', 2147483647, 'Swasta', '2012-06-21', 1, 3000000),
(3, '197910072003121001', 'raden ayu fitria miranti', 'Pangkalpinang', '1980-08-03', 2147483647, 'PNS', '2010-01-27', 1, 2900000),
(4, '197708142002121004', 'maksi yenni darma saputri', 'Kelapa', '1970-01-01', 2147483647, 'Ibu Rumah Tangga', '2009-01-30', 1, 3000000),
(5, '197405142007011031', 'HARYANI', 'Sungailiat', '1977-09-21', 2147483647, 'PNS', '2003-03-02', 1, 3000000),
(6, '196905081995032004', 'rustam hasyim', 'Pangkalpinang', '1970-05-10', 2147483647, 'Wiraswasta', '2006-07-02', 1, 3000000),
(7, '198304192010012013 ', 'AGUNG TRESNADI, ST', 'Jakarta', '1979-06-18', 16707, 'TNI AL', '2006-06-12', 1, 8000000),
(8, '197807132002121006', 'Dewi olivia Nilapensa Siagian', 'Pangkalpinang', '1990-01-19', 2147483647, 'Guru Swasta', '2013-12-28', 1, 3000000),
(9, '198505042009032008', 'R.RACHMANDA GUNTUR GENI', 'Semarang', '1979-07-02', 19790701, 'PNS', '2007-10-26', 1, 5000000),
(10, '197301232006041001', 'NOVITA INDRANUARI', 'Pangkalpinang', '1970-01-02', 2147483647, 'PNS', '2003-12-07', 1, 6000000),
(11, '197709102007011006', 'PITI PIRAWAT', 'Belinyu', '1974-02-15', 2147483647, 'PNS', '2003-12-14', 1, 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `nip` varchar(50) NOT NULL,
  `kenaikan_pangkat` varchar(100) NOT NULL,
  `tmt_kenaikan` date NOT NULL,
  `kenaikan_gaji` int(10) NOT NULL,
  `tmt_gaji` date NOT NULL,
  `pensiun` varchar(50) NOT NULL,
  `tmt_pensiun` date NOT NULL,
  `ijasah` varchar(50) NOT NULL,
  `tmt_ijasah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`nip`, `kenaikan_pangkat`, `tmt_kenaikan`, `kenaikan_gaji`, `tmt_gaji`, `pensiun`, `tmt_pensiun`, `ijasah`, `tmt_ijasah`) VALUES
('196403261987101001', 'Penata Muda Tk I / IIIb', '2020-10-01', 65748390, '2020-11-19', '60', '2020-11-18', 'GOL I A', '2019-01-17'),
('196905081995032004', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('19700926 199703 1 007', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('197009261997031007', 'Pembina Utama Madya / IVd', '2021-10-01', 5500000, '2020-10-13', '1', '2022-06-22', 'Golongan III A', '2005-05-10'),
('197301232006041001', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('197403081993111002', 'Pengatur Muda / IIa', '2020-10-01', 543874, '2020-09-07', '60', '2019-01-01', 'GOL I A', '2019-01-03'),
('197405142007011031', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('19741204 200501 2 002', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('197412042005012002', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('197708142002121004', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('197709102007011006', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('197807132002121006', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('197910072003121001', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('198304192010012013 ', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('198407122009031003', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('198505042009032008', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('19940324 201502 1 001', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('199403242015021001', 'Pengatur / IIc', '2020-10-01', 359000, '2020-11-24', '60', '2020-10-15', 'Golongan III A', '2020-12-04'),
('2016.01.13031979.001', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2016.01.30111972.002', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2016.07.02041998.003', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2017.08.25061993.004', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2018.09.07051992.006', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2018.10.28111993.005', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2019.01.05051999.007', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2019.01.21121995.009', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2020.01.02041996.010', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2020.04.06011996.012', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2020.06.17111995.011', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2021.09.28102001.013', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2021.10.10081998.014', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2021.12.22031996.017', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2021.12.22102000.015', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2021.12.30122002.016', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.01.06042021.018', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.01.19011981.019', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.02.11111997.020', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.03.05051999.08', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.03.08061994.021', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.06.17022002.022', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.06.25042001.023', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.07.23072001.027', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.08.09082003.026', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.08.22071996.025', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.08.31081998.024', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.10.10082000.029', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2022.10.17061995.28', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2023.01.15041998.030', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2023.01.18062003.031', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2023.02.19031994.32', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2023.03.05122000.034', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('2023.03.08122001.033', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('4535345345345', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
('7648589', ' ', '0000-00-00', 0, '0000-00-00', '20', '0000-00-00', ' ', '0000-00-00'),
('9967564568943644234', '', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('l','p') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kebangsaan` varchar(50) NOT NULL,
  `jumlah_keluarga` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `sk_terakhir` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `tmt_golongan` date NOT NULL,
  `jenis_pegawai` varchar(100) NOT NULL,
  `tmt_capeg` date NOT NULL,
  `status_pegawai` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `digaji_menurut` varchar(100) NOT NULL,
  `gaji_pokok` int(10) NOT NULL,
  `besarnya_penghasilan` int(10) NOT NULL,
  `masa_kerja_golongan` varchar(50) NOT NULL,
  `masa_kerja_keseluruhan` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `foto_path` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `tempat_lahir`, `tgl_lahir`, `gender`, `agama`, `kebangsaan`, `jumlah_keluarga`, `alamat`, `sk_terakhir`, `pangkat`, `tmt_golongan`, `jenis_pegawai`, `tmt_capeg`, `status_pegawai`, `jabatan`, `digaji_menurut`, `gaji_pokok`, `besarnya_penghasilan`, `masa_kerja_golongan`, `masa_kerja_keseluruhan`, `npwp`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `wa`, `foto_path`, `no_rek`) VALUES
(11, '196905081995032004', 'Pemi Sutiatirtharani, SE', 'Jakarta', '1969-05-08', 'p', 'Islam', 'WNI', 4, 'JL. SUMEDANG GG. MESJID AL HIKMAH PAM LEDENG KACANG PEDANG PANGKALPINANG RT. 02 RW. 02 KODE POS. -', 'Kenaikan Pengkat', 'Penata Tk I / IIId', '2012-10-01', 'Pegawai Negeri Sipil', '1996-05-01', 'Aktif', 'Kepala UPTD Laboratorium Lingkungan', 'PP No 30 Tahun 2015', 2871800, 0, '08 Tahun 00 Bulan', '23 Tahun 00 Bulan', '590547303061000', '02', '02', 'Kejaksaan', 'Tamansari', 'Pangkalpinang', '08129583477', '', '1234567890'),
(6, '197009261997031007', 'Eko Kurniawan, S.Sos, M.SI', 'Sungailiat', '1970-09-26', 'l', 'Islam', 'WNI', 4, 'LAN DUYUNG VI NO 192 RT. 06 RW. 01 KODE POS. 33215', 'Kenaikan Pengkat n', 'Pengatur Muda / IIa', '2012-10-01', 'Pegawai Negeri Sipil', '1997-03-01', 'Aktif', 'Kepala Dinas', 'PP No 30 Tahun 2015', 4295100, 8500100, '08 Tahun 00 Bulan', '21 Tahun 08 Bulan', '34343434', '006', '001', 'Karya Makmur', 'Pemali', 'kabupaten Bangka', '081316173030', '', '23546790896754'),
(15, '197301232006041001', 'Arry Imam Sulistio , SE., MM', 'Belinyu', '1973-01-23', 'l', 'Islam', 'WNI', 3, 'NANAS  RT. 07 RW. 03 KODE POS. -', 'Kenaikan Pengkat', 'Penata Tk I / IIId', '2019-10-01', 'Pegawai Negeri Sipil', '2006-04-01', 'Aktif', 'Kasubbag Perencaan', 'PP No 30 Tahun 2015', 3666900, 0, '01 Tahun 00 Bulan', '13 Tahun 06 Bulan', '14-856.050.1-304.000', '07', '03', 'Gajah Mada', 'Rangkui', 'Pangkalpinang', '081373016201', '', ''),
(10, '197405142007011031', 'Yurismansyah, ST, MM.', 'Palembang', '1974-05-14', 'l', 'Islam', 'WNI', 5, 'BATIN TIKAL GG. ENGGANO II NO.35 RT. 02 RW. - KODE POS', 'Kenaikan Gaji Berkala', 'Penata Tk I / IIId', '2017-04-01', 'Pegawai Negeri Sipil', '2007-01-01', 'Aktif', 'Kepala Bidang Tata Lingkungan', 'PP No 30 Tahun 2015', 2597800, 0, '03 Tahun 06 Bulan', '14 Tahun 11 Bulan', '	14.646.387.2.315.000', '02', '03', 'Sungailiat', 'Bangka', 'Kabuapten Bangka', '081373184720', '', ''),
(7, '197412042005012002', 'Dora Wardani, ST', 'Pangkalpinang', '1974-12-04', 'p', 'Islam', 'WNI', 2, 'M. SHALEH ZAINUDDIN RT. 03 RW. 01 KODE POS. 33118', 'Kenaikan Pengkat', 'Pembina / IVa', '2015-04-01', 'Pegawai Negeri Sipil', '2005-01-01', 'Aktif', 'sektretaris', 'PP No 30 Tahun 2015', 3602400, 0, '14 Tahun 04 Bulan', '05 Tahun 01 Bulan', '07.431.497.2-304.000', '03', '01', '33118', 'Gabek', 'Pangkalpinang', '081272895811', '', ''),
(9, '197708142002121004', 'Hutriadi , S.Si. MSc', 'Manggar', '1977-08-18', 'l', 'Islam', 'WNI', 3, 'PERUM PONDOK INDAH MELATI BLOK A7 NO.16 RT. 10 RW. 03 KODE POS. 33149', 'Kenaikan Pengkat', 'Pembina / IVa', '2017-09-28', 'Pegawai Negeri Sipil', '2002-12-01', 'Aktif', 'Kepala Bidang Pengendalian dan Penataan Lingkungan Hidup', 'PP No 30 Tahun 2015', 3602400, 0, '04 Tahun 00 Bulan', '14 Tahun 10 Bulan', '24.602.174.5-304.000', '10', '03', 'perum Pondok Indah', 'Gabek', 'Pangkalpinang', '082171857997', '', ''),
(16, '197709102007011006', 'Henry Rizal, SE., MM', 'Pangkalpinang', '1977-09-10', 'l', 'Islam', 'WNI', 4, 'KP.MELAYU 23  RT. 01 RW. 01 KODE POS. -', 'Kenaikan Pengkat', 'Penata Tk I / IIId', '2018-10-01', 'Pegawai Negeri Sipil', '2007-01-01', 'Aktif', 'Kasubbag Keuangan', 'PP No 30 Tahun 2015', 3565000, 0, '02 Tahun 00 Bulan', '12 Tahun 06 Bulan', '15.081.361.6-304.000', '01', '01', 'Bukit Merapin', 'Gerunggang', 'Pangkalpinang', '085369350717', '', ''),
(13, '197807132002121006', 'Marison Lubis, ST', 'Jebus', '1978-07-13', 'l', 'Kristen', 'WNI', 3, 'KAMPUK SAMEK SAMPUR RT. 03 RW. 01 KODE POS. 33302', 'Kenaikan Pengkat', 'Penata / IIIc', '2019-04-01', 'Pegawai Negeri Sipil', '2002-12-01', 'Aktif', 'Kasi Pemeliharaan Lingkungan Hidup dan Pengelolaan Sampah', 'PP No 30 Tahun 2015', 3273200, 0, '01 Tahun 06 Bulan', '16 Tahun 10 Bulan', '07.433.352.7-304.000', '03', '01', 'Air Itam', 'Bukit Intan', 'Pangkalpinang', '08127173540', '', ''),
(8, '197910072003121001', 'Mega Oktarian, S.SI, M.Eng', 'Toboali', '1979-10-07', 'l', 'Islam', 'WNI', 4, 'JALAN MERANTI NO.226 RT. 04 RW. 02 KODE POS. -', 'Kenaikan Gaji Berkala', 'Pembina / IVa', '2020-04-01', 'Pegawai Negeri Sipil', '2003-12-01', 'Aktif', 'Kepala Bidang PLHPSPKLH', 'PP No 30 Tahun 2015', 3350600, 0, '00 Tahun 06 Bulan', '12 Tahun 04 Bulan', '084547470304000', '04', '02', 'Gabek I', 'Gabek', 'Kota Pangkalpinang', '085267483807', '', ''),
(12, '198304192010012013 ', 'Afriza Farnevi, SH, MM', 'Muntok', '1983-04-19', 'p', 'Islam', 'WNI', 4, 'PERUMAHAN BUKIT GELASE ASRI JL. TAIB  RT. 22 RW. 08 KODE POS. -', 'Kenaikan Pengkat', 'Penata Tk I / IIId', '2018-04-01', 'Pegawai Negeri Sipil', '2010-01-01', 'Aktif', 'Kasubbag Umum', 'PP No 30 Tahun 2015', 3149100, 0, '02 Tahun 06 Bulan', '10 Tahun 06 Bulan', '15.590.544.1-315.000', '22', '08', 'Dul', 'Bukit Intan', 'Kabupaten Bangka Tengah', '082185615000', '', ''),
(17, '198407122009031003', 'HARFIYANTO, ST', 'Bangka', '1984-07-12', 'l', 'Islam', 'WNI', 4, 'JL.GEGADING NO. 58 RT. 07 RW. 02 KODE POS. 33136', 'Kenaikan Gaji Berkala', 'Penata / IIIc', '2020-10-01', 'Pegawai Negeri Sipil', '2020-10-01', 'Aktif', 'Kasi Kajian dampak Lingkungan', 'PP No 30 Tahun 2015', 3021300, 0, '02 Tahun 06 Bulan', '10 Tahun 03 Bulan', '	15.081.115.6-304.000', '07', '02', 'Melintang', 'Rangkui', 'Pangkalpinang', '082176503335', '', ''),
(14, '198505042009032008', 'Fianda Revina WidyastutiI, SKM, M.Si', 'Lampur', '1985-05-04', 'p', 'Islam', 'WNI', 5, 'MELATI GG. DAHLIA VII NO.470 RT. 03 RW. 001 KODE POS. 33123', 'Kenaikan Pengkat', 'Penata / IIIc', '2018-10-01', 'Pegawai Negeri Sipil', '2009-03-01', 'Aktif', 'Kasi Peningkatan Kapasitas Lingkungan Hidup', 'PP No 30 Tahun 2015', 3021300, 0, '02 Tahun 00 Bulan', '09 Tahun 07 Bulan', '	79.030.385.3-304.000', '003', '001', 'Bukit Merapin', 'Gerunggang', 'Pangkalpinang', '08122573163', '', ''),
(32, '2016.01.13031979.001', 'Yudhatama Fajar Nugroho', 'Surakarta, 13 Maret 1979', '1979-03-13', 'l', 'Islam', 'WNI', 0, 'satrio wibowo selatan no 39A purwosari laweyan', '', 'Pembina Utama Madya / IVd', '2023-11-20', ' ', '2023-11-20', 'Aktif', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '1', '1', 'purwosari', 'laweyan', 'surakarta', '0', '', ''),
(48, '2016.01.30111972.002', 'Amin Wibawa', 'Klaten, 30 Nopember 1972', '1972-11-30', 'l', 'Islam', 'WNI', 0, 'Gg Kepiting I/219 RT/1/2 Klaten Tengah', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '1', '2', 'gg kepiting', 'klaten tengah', 'klaten', '087836612099', '', ''),
(19, '2016.07.02041998.003', 'Wisnu Fajar Saputra', 'Surakarta, 2 April 1998', '1998-04-01', 'l', 'Islam', 'WNI', 0, 'Kalmpeyan', '', ' ', '2023-11-20', ' ', '2023-11-20', 'Aktif', ' ', 'PP No 30 Tahun 2015', 0, 0, 'Juli 2016', '28 Februari 2021', '', '04', '07', 'Watuagung', 'Baturetno', 'surakarta', '083149267754', '', ''),
(35, '2017.08.25061993.004', 'Sheila Ayu Soraya', 'Surakarta, 25 Juni 1993', '1993-06-25', 'l', 'Islam', 'WNI', 0, 'Tegalsari Rt 04 / 01, Bumi, Laweyan', '', ' ', '2023-11-20', ' ', '2023-11-20', 'Aktif', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '4', '1', 'tegalsari', 'laweyan', 'surakarta', '088221020709', '', ''),
(38, '2018.09.07051992.006', 'Rezky Tri Rinintha', 'Malang, 17 Mei 1992', '1992-05-17', 'l', 'Islam', 'WNI', 0, 'Perum Balitkabi Gg Jeruk 24 Watudakon RT 3 RW 5 Ke', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '3', '4', 'perum balitkabi', 'watudakon', 'malang', '0895322117153', '', ''),
(26, '2018.10.28111993.005', 'Danu Prasetyo Aji', 'Sukoharjo, 28 November 1993', '1993-11-28', 'l', 'Islam', 'WNI', 0, 'Palur Wetan RT 2 / 7 Mojolaban', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '2', '7', 'palur wetan', 'mojolaban', 'sukoharjo', '08961719632', '', ''),
(27, '2019.01.05051999.007', 'Endro Saputro', 'Banjarnegara, 5 Mei 1999', '1999-05-05', 'l', 'Islam', 'WNI', 0, 'Kelapa Sawit Rt 4/5 Cendana, Banjarnegara', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '=', '4', '5', 'kelap sawit', 'cendana', 'banjarnegara', '085848247415', '', ''),
(28, '2019.01.21121995.009', 'Ade Nugraha', 'Yogyakarta, 21 Desember 1995', '1995-12-21', 'l', 'Islam', 'WNI', 1, 'Cebongan Rt 10 Ngestiharjo Kasihan Bantul', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '10', '1', 'cebongan', 'bantul', 'yogyakarta', '167103211295000', '', ''),
(29, '2020.01.02041996.010', 'Teguh Arie Prabowo', 'Bekasi, 2 April 1996', '1996-04-02', 'l', 'Islam', 'WNI', 0, 'Jl Pringgodani RT4/6 Banaran Ngringo Jaten', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '4', '6', '', 'banaran', 'bekasi', '089665840901', '', ''),
(18, '2020.04.06011996.012', 'Wenra Beta Prasetyo', 'Banyumas, 6 Januari 1996', '1996-01-06', 'l', 'Islam', 'WNI', 0, 'Banyumas', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, 'April 202', '31 Agustus 2021', '3302020601960001', '4', '6', 'wangon', 'banyumas', 'banyumas', '', '', ''),
(40, '2020.06.17111995.011', 'Wahyu Wijanarko', 'Malang, 17 Nopember 1995', '1995-11-17', 'l', 'Islam', 'WNI', 0, 'Jl Widas Blok O-4 Rt03/20 Bunulrejo Blimbing', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '3', '20', 'bunulrejo', 'blimbing', 'malang', '081216011840', '', ''),
(39, '2021.09.28102001.013', 'Ferdiansyah Eka Saputra', 'Sleman, 28 November 2001', '2001-11-28', 'l', 'Islam', 'WNI', 0, 'Komplek Dirgantara, Jl. Cesna No. 6, Malangjiwan, ', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '0', '0', 'komplek dirgantara', 'malangwijan', 'sleman', '088981015898', '', ''),
(20, '2021.10.10081998.014', 'Gary Laksono Muhammad', 'Surakarta, 10 Agustud 1998', '1998-08-10', 'l', 'Islam', 'WNI', 0, 'Jl. Tambora Timur No. 7 RT01 RW 23, Mojosongo, Jeb', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '1 Oktober 2021', '-', '33720410008980003', '1', '23', 'Mojongsengo', 'surakarta', 'surakarta', '', '', ''),
(41, '2021.12.22031996.017', 'Intan Marina Putri Utami', 'Kulon Progo, 22 Maret 1996', '1996-03-22', 'p', 'Islam', 'WNI', 0, 'Dayakan RT 64 RW 28, Pengasih, Pengasih ', 'Kenaikan Pengkat n', 'Pengatur Muda / IIa', '2023-11-20', 'Pegawai Negeri Sipil', '2023-11-20', 'Aktif', 'Kepala Dinas', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '64', '28', 'dayakan', 'pengasih', 'kulon progo', '0822 4343 8690', '', ''),
(30, '2021.12.22102000.015', 'Adlys Kurnia Pratama', 'Pacitan, 22 November 2000', '2000-11-23', 'l', 'Islam', 'WNI', 0, 'RT02 RW 06, Dsn. Wati, Ds. Gawang, Kec. Kebonagung', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '2', '6', 'gawang', 'kebonagung', 'pacitan', '0816 1531 6515', '', ''),
(31, '2021.12.30122002.016', 'Adam Abbiyu Handrian', 'Sukoharjo,30 Desember 2002', '2002-12-30', 'l', 'Islam', 'WNI', 0, 'Jl. Angling Darmo 1 No. 9, RT3 RW 3, Penumping, La', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '9', '3', 'penumping', 'penumoing', 'sukohrajo', '0857 4135 7765', '', ''),
(42, '2022.01.06042021.018', 'Sadat Setiawan', 'Surakarta, 6 April 2001', '2001-04-06', 'l', 'Islam', 'WNI', 0, 'Jl. Sri Gunting 3 No 31, Joho, RT0 RW 10, Manahan,', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '0', '10', 'manahan', 'manahan', 'surakarta', '0858401607775', '', ''),
(36, '2022.01.19011981.019', 'Trims Almauludi', 'Surabaya,19 Januari 1981', '1981-01-19', 'l', 'Islam', 'WNI', 0, 'Gg. Bengawan Solo 8 No. 5A, Semanggi, Mojo', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '0', '0', 'semanggi', 'mojo', 'surabaya', '085229405242', '', ''),
(49, '2022.02.11111997.020', 'Khis Dryawan', 'Swisijunjung,11 November 1997', '1997-11-11', 'l', 'Islam', 'WNI', 0, 'JL. Sungai Jerinjing, Kota Ranah, Kota Besar, Darm', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '', '', '', 'kota besar', 'swisjunjung', '085325636742', '', ''),
(24, '2022.03.05051999.08', 'Muhamad Ali Abdullah', 'Sukoharjo, 5 Mei 1999', '1999-05-05', 'l', 'Islam', 'WNI', 0, 'Mantung Baru RT01 RW14, Sanggrahan, Grogol', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '3311090505990007', '1', '14', 'sanggrahan', 'grogol', 'sukoharjo', '082223095890', '', ''),
(47, '2022.03.08061994.021', 'Dimas Dwi Wardhana', 'Lumajang, 08 Juni 1994', '1994-06-08', 'l', 'Islam', 'WNI', 0, 'Perum Graha Mandiri Palur No. 23, Palur, Mojolaban', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '0', '0', 'palur', 'mojolaban', 'lumajang', '085258381065', '', ''),
(50, '2022.06.17022002.022', 'Valendra Muhammad Jibran', 'Bekasi, 17 Februari 2002', '2002-02-17', 'l', 'Islam', 'WNI', 0, 'Jl Bulak Perwira II RT 1/7 Perwira Bekasi Utara', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '', '', '', '', 'bekasi', '081212443483', '', ''),
(21, '2022.06.25042001.023', 'Muh Thoriq Zahron Musthofa', 'Klaten, 25 April 2001', '2001-04-25', 'l', 'Islam', 'WNI', 0, 'Kauman Rt 02/ 01 Juwiran Juwiring', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '1 juni 2022', '-', '3310142504010001', '2', '1', 'juwiring', 'klaten', 'surakarta', '', '', ''),
(25, '2022.07.23072001.027', 'Hanif Satritama', 'Sukoharjo, 23 Juli 2001', '2001-07-23', 'l', 'Islam', 'WNI', 0, 'Krapyak Wetan RT05 RW08 Kartasura', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '5', '8', 'krapyak wetan', 'kartasura', 'sukoharjo', '081325286504', '', ''),
(22, '2022.08.09082003.026', 'Ica Rizqi Nur Adiansyah', 'Boyolali, 9 Agustus 2003', '2003-08-09', 'l', 'Islam', 'WNI', 0, 'Mangurejo Rt 3/1 Guli Nogosari', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '9 Agustus 2022', '-', '3309120908039002', '3', '1', 'guli', 'nogosari', 'boyolali', '', '', ''),
(45, '2022.08.22071996.025', 'Egy Farizd Fauzi', 'Bekasi, 22 Juli 1996', '1996-07-22', 'l', 'Islam', 'WNI', 0, 'Taman Firdaus Blok E12 No. 28 RT 05 RW 011, Cibaru', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '5', '11', 'cibaru', 'cibaru', 'bekasi', '085711164541', '', ''),
(44, '2022.08.31081998.024', 'Krismoni', 'Karanganyar, 31 Agustus 1998', '1998-08-31', 'l', 'Islam', 'WNI', 0, 'Gedangan Rt 2/3 Salam, Karangpandan', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '2', '3', 'gedangan', 'karangpandan', 'karanganyar', '0895602581514', '', ''),
(43, '2022.10.10082000.029', 'RM Farid Ilhan Firdaus', 'Sragen, 10 Agustus 2000', '2000-08-10', 'l', 'Islam', 'WNI', 0, 'Jl Lokayasa Blok T.17 Rt 5/9 Gentan Baki Sukoharjo', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '5', '9', 'sukoharjo', 'sukoharjo', 'sragen', '0895327762050', '', ''),
(23, '2022.10.17061995.28', 'Setyo Adi Laksono', 'Surakarta, 17 Juni 1995', '1995-06-17', 'l', 'Islam', 'WNI', 0, 'Pundung Gede 05/09,Joglo, Banjarsari, Surakarta', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '1 Oktober 2022', '-', '3372051706950004', '5', '9', 'pundung gede', 'banjarsaru', 'surakarta', '', '', ''),
(33, '2023.01.15041998.030', 'Fauzan Fadhlurrahman', 'Surakarta, 15 April 1998', '1998-04-15', 'l', 'Islam', 'WNI', 0, 'Jl. Bima RT04 RW 05, Palur Wetan, Mojolaban', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '4', '5', 'palur wetan', 'mojolaban', 'surakarta', '082223455711', '', ''),
(34, '2023.01.18062003.031', 'Difa Koirul Anwar', 'Sragen, 18 Juni 2003', '2003-06-18', 'l', 'Islam', 'WNI', 0, 'Purworejo, Gemolong, Sragen', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '0', '0', 'purworejo', 'purworejo', 'sragen', '081.804.205.721', '', ''),
(37, '2023.02.19031994.32', 'Irfan Setyadi', 'Kulon Progo,19 Maret 1994', '1994-03-19', 'l', 'Islam', 'WNI', 0, 'Kasihan I, RT020 RW 006, Ngentakrejo', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '2', '6', 'kasihan', 'ngantakrejo', 'kulon progo', '085601117717', '', ''),
(46, '2023.03.05122000.034', 'Rafli Imron Fauzy', 'Karanganyar, 05 Desember 2000', '2000-12-05', 'l', 'Islam', 'WNI', 0, 'jl. Sawo 6 no. 88, Perumnas Palur, Jaten', '', ' ', '2023-11-20', ' ', '2023-11-20', ' ', ' ', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '0', '0', 'palur', 'jaten', 'karanganyar', '0895392417588', '', ''),
(51, '2023.03.08122001.033', 'Dina Rosdiana', 'Karanganyar, 8 Desember 2001', '2001-12-08', 'p', 'Islam', 'WNI', 0, 'Derso RT 03 RW 04, Sumberejo,Kerjo', 'Kenaikan Pengkat n', 'Pengatur Muda / IIa', '2023-11-20', 'Magang', '2023-11-20', 'Aktif', 'Kepala Dinas', 'PP No 30 Tahun 2015', 0, 0, '-', '-', '-', '3', '4', 'serso', 'sumberejo', 'karanganyar', '0895329145554', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(20) NOT NULL,
  `nip` varchar(300) NOT NULL,
  `jenis_pelanggaran` varchar(50) NOT NULL,
  `tanggal_pelanggaran` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `masa_berlaku` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `nip`, `jenis_pelanggaran`, `tanggal_pelanggaran`, `status`, `masa_berlaku`, `keterangan`) VALUES
(5, '197009261997031007', 'SP1', '', 'Menunggu Persetujuannd', 'xzccsd', 'its heavy lohgf'),
(6, '197412042005012002', 'SP2', '2001-02-20', '', '', 'alaa'),
(19, '197412042005012002', 'SP3', '', 'Aktif', '14 Desember 2023 sampai Januari 2024', 'Pemberhentian Sementara'),
(24, '197910072003121001', 'SP 3', '', 'Dipenjara', 'Seumur Hidup', 'Membunuh'),
(25, '197910072003121001', 'SP1', '', '-', '-', '-'),
(84441, '84441', 'SP1', '-', '-', '-', 'Peringatan lisan atau tertulis untuk memberi pekerja kesempatan memperbaiki perilakunya.\r\n'),
(84442, '84442', 'SP2', '-', '-', '-', 'Peringatan tertulis dengan penekanan lebih kuat, mungkin dengan sanksi ringan.'),
(84443, '84443', 'SP3', '-', '-', '-', ' Sanksi yang lebih berat, seperti penurunan pangkat, penangguhan, atau tindakan hukuman serius lainnya.'),
(84444, '197009261997031007', 'SP3', '', 'cdsc', 'cd', 'cdsc'),
(84445, '196905081995032004', 'SP3', '', 'Aktif', 'sampai next periode', 'A'),
(84446, '196905081995032004', 'SP3', '', 'sd', 'dsa', 'samp');

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuan`
--

CREATE TABLE `pemberitahuan` (
  `nip` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `status_gaji` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  `bg` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `instansi`, `provinsi`, `kota`, `alamat`, `logo`, `bg`, `fb`, `twitter`, `ig`) VALUES
(1, 'ManiMonki', 'DLH Provinsi Kep Bangka Belitung', 'Kepulauan Bangka Belitung', 'Kota Pangkalpinang', 'Dinas Lingkungan Hidup - Jalan Air Itam Komplek Perkantoran Gubernur Kepulauan Bangka Belitung', '2_ikon_oo.jpg', '', 'Dinas-Lingkungan-Hidup-Provinsi-Kepulauan-Bangka-Belitung-1376564909127317', 'dlhprovbabel', 'dinaslingkunganhidupbabel/');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `status_proyek` varchar(50) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `status_proyek`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(1, 'Proyek A', 'Aktif', '2023-01-01', NULL),
(2, 'Proyek B', 'Selesai', '2023-03-15', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_absensi`
--

CREATE TABLE `rekap_absensi` (
  `id_rekap` bigint(100) NOT NULL,
  `tgl` date NOT NULL,
  `nip` varchar(50) NOT NULL,
  `i` int(10) NOT NULL,
  `s` int(10) NOT NULL,
  `c` int(10) NOT NULL,
  `tk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rekap_absensi`
--

INSERT INTO `rekap_absensi` (`id_rekap`, `tgl`, `nip`, `i`, `s`, `c`, `tk`) VALUES
(2, '2019-01-01', '196403261987101001', 1, 0, 0, 0),
(3, '2019-01-01', '9967564568943644234', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `id` int(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`id`, `keterangan`) VALUES
(1, 'Kenaikan Pengkat n'),
(2, 'Kenaikan Gaji Berkala dxit'),
(4, 's'),
(5, 's');

-- --------------------------------------------------------

--
-- Table structure for table `s_ijasah`
--

CREATE TABLE `s_ijasah` (
  `id_s_ijasah` bigint(100) NOT NULL,
  `tgl` date NOT NULL,
  `banyaknya` int(10) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `nomor_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_kenaikan`
--

CREATE TABLE `s_kenaikan` (
  `id_s_kenaikan` bigint(100) NOT NULL,
  `tgl` date NOT NULL,
  `d` bigint(100) NOT NULL,
  `m` bigint(20) NOT NULL,
  `y` int(5) NOT NULL,
  `banyaknya` int(10) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `nomor_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upskill`
--

CREATE TABLE `upskill` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `nama_keterampilan` varchar(255) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `penyedia` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upskill`
--

INSERT INTO `upskill` (`id`, `nip`, `id_pengguna`, `nama_keterampilan`, `tanggal_mulai`, `penyedia`, `status`) VALUES
(1, '0', 1, 'Teknik Sound Design', '2023-11-27', 'WangAnimate', 'Finished'),
(3, '197412042005012002', 3, 'Teknik 3D Modeling', '2023-03-20', 'TYY assets', 'Belum Dimulai'),
(4, '0', 1, 'Storytelling for Animation', '2023-04-10', 'Studio A', 'Dalam Proses'),
(5, '0', 2, 'Advanced Character Rigging', '2023-05-05', 'Studio B', 'Belum Dimulai'),
(6, '0', 0, 'Animasi 2D', '2023-12-11', 'TYYanimation', 'On-Going'),
(8, '0', 0, 'Animasi 2D', '2023-12-05', 'TYYpro', 'Dalam Proses'),
(10, '', NULL, 'n;', '0000-00-00', 'hg', 'hg'),
(11, '', NULL, 'aecd', '0000-00-00', 'df', 'f'),
(12, '197910072003121001', NULL, 'Teknik 3D Modeling', '2023-12-18', 'Tyy', 'AKtif'),
(13, '197009261997031007', NULL, 'Teknik 3D Modeling', '2023-11-27', 'Tyy animations', 'Aktif'),
(19, 'Pegawai : 197009261997031007', NULL, 'Teknik Sound Design', '2023-12-06', 'Wangnimate', 'Aktif'),
(20, 'Pegawai : 197009261997031007', NULL, 'Animasi 2D', '2023-12-06', 'dd', 'd'),
(21, '197412042005012002', NULL, 'Animasi 2D', '2023-12-07', 'n', ' n'),
(22, '197009261997031007', NULL, 'Teknik 3D Modeling', '2023-11-29', 'ds', 'x'),
(23, '197405142007011031', NULL, 'Animasi 2D', '2023-12-09', 'd', 'h'),
(24, '197910072003121001', NULL, 'Teknik Sound Design', '2023-12-15', 'test', 'bhlkj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `gender` enum('l','p') NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nip`, `password`, `nama`, `level`, `gender`, `foto`, `status`) VALUES
('dora', '19741204 200501 2 002', '$2y$05$G2Fh4et2yDGhSX5bupeYkuRZ/h3Cg7yvkTdbKAsJKVqwwykWdqWA6', 'Dora Wardani', 'admin', 'l', 'dora_dora.png', 'Aktif'),
('megaoktarian', '197910072003121001', '$2y$05$a0hjCAg7m9axIJzW4WgkYeTUlBeDjqWRik1sSlGbdpBiu/eYMXC7.', 'Mega Oktarian, S.SI, M.Eng', 'user', 'l', 'megaoktarian_Mega Oktarian.jpg', 'Aktif'),
('robialakbar', '199403242015021001', '$2y$05$C2q8dTcpUZWPVcUi.Fs8ue47cNpYbv.sQdaq0b5gJUUXOkrfQxH.u', 'robi al akbar', 'user', 'l', 'robialakbar_Untitled.png', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `wa`
--

CREATE TABLE `wa` (
  `id` int(1) NOT NULL,
  `token` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wa`
--

INSERT INTO `wa` (`id`, `token`) VALUES
(1, 'PKNHakeUXpqQVWYv20qCGqcmyRfxdDgk8rzkzafFshf1o7d0y3Q4DWyOwnhSSbBn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `detail_s_ijasah`
--
ALTER TABLE `detail_s_ijasah`
  ADD PRIMARY KEY (`id_detail_s_ijasah`);

--
-- Indexes for table `freelance`
--
ALTER TABLE `freelance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`golongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`50`);

--
-- Indexes for table `jml_hari_rekap`
--
ALTER TABLE `jml_hari_rekap`
  ADD PRIMARY KEY (`id_jml`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `rekap_absensi`
--
ALTER TABLE `rekap_absensi`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_ijasah`
--
ALTER TABLE `s_ijasah`
  ADD PRIMARY KEY (`id_s_ijasah`);

--
-- Indexes for table `s_kenaikan`
--
ALTER TABLE `s_kenaikan`
  ADD PRIMARY KEY (`id_s_kenaikan`);

--
-- Indexes for table `upskill`
--
ALTER TABLE `upskill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wa`
--
ALTER TABLE `wa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_s_ijasah`
--
ALTER TABLE `detail_s_ijasah`
  MODIFY `id_detail_s_ijasah` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelance`
--
ALTER TABLE `freelance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `50` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84447;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sk`
--
ALTER TABLE `sk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upskill`
--
ALTER TABLE `upskill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
