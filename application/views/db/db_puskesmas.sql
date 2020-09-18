-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2020 pada 06.26
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bangunan_puskesmas`
--

CREATE TABLE `bangunan_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `kdb` varchar(5) NOT NULL,
  `klb` varchar(5) NOT NULL,
  `kdh` varchar(5) NOT NULL,
  `tataletak` varchar(5) NOT NULL,
  `pencahayaan` varchar(5) NOT NULL,
  `lebar_koridor` varchar(5) NOT NULL,
  `tingi_langit` varchar(5) NOT NULL,
  `bila_antar` varchar(5) NOT NULL,
  `bangunan_puskesmas` varchar(5) NOT NULL,
  `lambang_puskesmas` varchar(5) NOT NULL,
  `lambang_jauh` varchar(5) NOT NULL,
  `papannama` varchar(5) NOT NULL,
  `posisi_bangunan` varchar(5) NOT NULL,
  `atap_puskesmas` varchar(5) NOT NULL,
  `langit_langit` varchar(5) NOT NULL,
  `material_dinding` varchar(5) NOT NULL,
  `dinding_wc` varchar(5) NOT NULL,
  `dinding_lab` varchar(5) NOT NULL,
  `material_lantai` varchar(5) NOT NULL,
  `lantai_wc` varchar(5) NOT NULL,
  `lebar_bukaan` varchar(5) NOT NULL,
  `lebar_pintu` varchar(5) NOT NULL,
  `pintu_wc` varchar(5) NOT NULL,
  `material_pintu` varchar(5) NOT NULL,
  `wc_disabilitas` varchar(5) NOT NULL,
  `halaman_puskesmas` varchar(5) NOT NULL,
  `drainase` varchar(5) NOT NULL,
  `kursi_tunggu` varchar(5) NOT NULL,
  `meubelair` varchar(5) NOT NULL,
  `tmpt_poster` varchar(5) NOT NULL,
  `tmpt_spanduk` varchar(5) NOT NULL,
  `taman_obat` varchar(5) NOT NULL,
  `bebas_rokok` varchar(5) NOT NULL,
  `bebas_kecoa` varchar(5) NOT NULL,
  `bebas_tikus` varchar(5) NOT NULL,
  `bebas_kucing` varchar(5) NOT NULL,
  `bebas_jentik` varchar(5) NOT NULL,
  `populasi_lalat` varchar(5) NOT NULL,
  `populasi_kecoa` varchar(5) NOT NULL,
  `kir` varchar(5) NOT NULL,
  `ruang_admin` varchar(5) NOT NULL,
  `ruang_karyawan` varchar(5) NOT NULL,
  `ruang_kepala` varchar(5) NOT NULL,
  `ruang_rapat` varchar(5) NOT NULL,
  `ruang_pendaftaran` varchar(5) NOT NULL,
  `ruang_pemeriksaaan` varchar(5) NOT NULL,
  `ruang_tindakan` varchar(5) NOT NULL,
  `ruang_kia` varchar(5) NOT NULL,
  `ruang_khusus` varchar(5) NOT NULL,
  `ruang_gigi` varchar(5) NOT NULL,
  `ruang_kie` varchar(5) NOT NULL,
  `ruang_farmasi` varchar(5) NOT NULL,
  `ruang_resep` varchar(5) NOT NULL,
  `ruang_racik` varchar(5) NOT NULL,
  `ruang_obat` varchar(5) NOT NULL,
  `ruang_konseling` varchar(5) NOT NULL,
  `ruang_bmhp` varchar(5) NOT NULL,
  `ruang_arsip` varchar(5) NOT NULL,
  `ruang_persalinan` varchar(5) NOT NULL,
  `ruang_pasca` varchar(5) NOT NULL,
  `ruang_lab` varchar(5) NOT NULL,
  `ruang_kb` varchar(5) NOT NULL,
  `ruang_anak` varchar(5) NOT NULL,
  `ruang_inap` varchar(5) NOT NULL,
  `wc` varchar(5) NOT NULL,
  `ruang_tunggu` varchar(5) NOT NULL,
  `ruang_asi` varchar(5) NOT NULL,
  `ruang_steril` varchar(5) NOT NULL,
  `ruang_linen` varchar(5) NOT NULL,
  `ruang_dapur` varchar(5) NOT NULL,
  `ruang_jaga` varchar(5) NOT NULL,
  `gudang_umum` varchar(5) NOT NULL,
  `wc_pasien` varchar(5) NOT NULL,
  `rumah_dinas` varchar(5) NOT NULL,
  `roda_2` varchar(5) NOT NULL,
  `roda_4` varchar(5) NOT NULL,
  `garasi_ambulan` varchar(5) NOT NULL,
  `area_tabung` varchar(5) NOT NULL,
  `selain_diatas` varchar(255) NOT NULL,
  `ruang_lain` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cakupan_indikator_program`
--

CREATE TABLE `cakupan_indikator_program` (
  `kode` varchar(20) NOT NULL,
  `kia1` int(2) NOT NULL,
  `kia2` int(2) NOT NULL,
  `kia3` int(2) NOT NULL,
  `imunisasi1` int(2) NOT NULL,
  `gizi1` int(2) NOT NULL,
  `pencegahan1` int(2) NOT NULL,
  `pencegahan2` int(2) NOT NULL,
  `pencegahan3` int(2) NOT NULL,
  `pencegahan4` int(2) NOT NULL,
  `pencegahan5` int(2) NOT NULL,
  `pencegahan6` int(2) NOT NULL,
  `pencegahan7` int(2) NOT NULL,
  `pencegahan8` int(2) NOT NULL,
  `pispk1` int(2) NOT NULL,
  `pispk2` int(2) NOT NULL,
  `pispk3` int(2) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_puskesmas`
--

CREATE TABLE `identitas_puskesmas` (
  `no` int(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_reg` varchar(255) NOT NULL,
  `tgl_pendirian` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kab_kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_telp_gadar` varchar(20) NOT NULL,
  `no_faksimile` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_puskesmas`
--

CREATE TABLE `lokasi_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `puskesmas_tanah` varchar(5) NOT NULL,
  `slf` varchar(5) NOT NULL,
  `puskesmas_lereng` varchar(5) NOT NULL,
  `puskesmas_longsor` varchar(5) NOT NULL,
  `puskesmas_pondasi` varchar(5) NOT NULL,
  `puskesmas_aktif` varchar(5) NOT NULL,
  `puskesmas_tsunami` varchar(5) NOT NULL,
  `puskesmas_banjir` varchar(5) NOT NULL,
  `puskesmas_topan` varchar(5) NOT NULL,
  `puskesmas_badai` varchar(5) NOT NULL,
  `puskesmas_masyarakat` varchar(5) NOT NULL,
  `puskesmas_transportasi` varchar(5) NOT NULL,
  `puskesmas_bersih` varchar(5) NOT NULL,
  `fasilitas_bersih` varchar(5) NOT NULL,
  `tersedia_bersih` varchar(5) NOT NULL,
  `sutet` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi_manajemen`
--

CREATE TABLE `organisasi_manajemen` (
  `kode` varchar(20) NOT NULL,
  `niop` varchar(255) NOT NULL,
  `tgl_izin` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pplh` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaksanaan_sistem_kewaspadaan_dini`
--

CREATE TABLE `pelaksanaan_sistem_kewaspadaan_dini` (
  `kode` varchar(20) NOT NULL,
  `skdr` int(2) NOT NULL,
  `laporan_skdr` int(2) NOT NULL,
  `analisa_trend` int(2) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemenuhan_sdm_puskesmas`
--

CREATE TABLE `pemenuhan_sdm_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `standar_bangunan` int(2) NOT NULL,
  `standar_prasarana` int(2) NOT NULL,
  `standar_peralatan` int(2) NOT NULL,
  `sedia_obat` int(2) NOT NULL,
  `pengendali_obat` int(2) NOT NULL,
  `pemenuhan_sdm` int(2) NOT NULL,
  `sisrute` int(2) NOT NULL,
  `informasi_puskesmas` int(2) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencegahan_dan_pengendalian_infeksi`
--

CREATE TABLE `pencegahan_dan_pengendalian_infeksi` (
  `kode` varchar(20) NOT NULL,
  `cuci_tangan` int(2) NOT NULL,
  `apd` int(2) NOT NULL,
  `dekontaminasi` int(2) NOT NULL,
  `kesehatan_lingkungan` int(2) NOT NULL,
  `limbah_medis` int(2) NOT NULL,
  `perlindungan_petugas` int(2) NOT NULL,
  `pemisahan_pasien` int(2) NOT NULL,
  `etika_batuk` int(2) NOT NULL,
  `praktik_menyuntik` int(2) NOT NULL,
  `kewaspadaan_kontak` int(2) NOT NULL,
  `kewaspadaan_droplet` int(2) NOT NULL,
  `air_borne` int(2) NOT NULL,
  `input_by` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas`
--

CREATE TABLE `pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `penilaian_kinerja` int(2) NOT NULL,
  `feedback` int(2) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggerakan_dan_pelaksanaan_kegiatan_puskesmas`
--

CREATE TABLE `penggerakan_dan_pelaksanaan_kegiatan_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `dipandu_jelas` int(2) NOT NULL,
  `jadwal_jelas` int(2) NOT NULL,
  `lintas_program` int(2) NOT NULL,
  `dimonitor_kepala` int(2) NOT NULL,
  `masukan_pelanggan` int(2) NOT NULL,
  `pelayanan_pelanggan` int(2) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengisian_aspak`
--

CREATE TABLE `pengisian_aspak` (
  `kode` varchar(20) NOT NULL,
  `aspak` varchar(5) NOT NULL,
  `aspak_pmk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_kinerja_puskesmas`
--

CREATE TABLE `penilaian_kinerja_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `self` varchar(5) NOT NULL,
  `n2_pelayanan` varchar(5) NOT NULL,
  `n2_manajemen` varchar(5) NOT NULL,
  `n1_pelayanan` varchar(5) NOT NULL,
  `n1_manajemen` varchar(5) NOT NULL,
  `uji_petik` varchar(5) NOT NULL,
  `inovasi` varchar(5) NOT NULL,
  `rumusan` varchar(5) NOT NULL,
  `tahun_akreditasi` varchar(5) NOT NULL,
  `status_akreditas` varchar(5) NOT NULL,
  `tahun_iks` varchar(5) NOT NULL,
  `status_iks` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peningkatan_mutu`
--

CREATE TABLE `peningkatan_mutu` (
  `kode` varchar(20) NOT NULL,
  `indikator_mutu` int(2) NOT NULL,
  `audit_internal` int(2) NOT NULL,
  `rapat_tinjauan` int(2) NOT NULL,
  `melaksanakan_pps` int(2) NOT NULL,
  `pelaporan_insiden` int(2) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peralatan_puskesmas`
--

CREATE TABLE `peralatan_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `set_umum` varchar(5) NOT NULL,
  `set_tindakan` varchar(5) NOT NULL,
  `set_ibu` varchar(5) NOT NULL,
  `set_anak` varchar(5) NOT NULL,
  `set_kb` varchar(5) NOT NULL,
  `set_imun` varchar(5) NOT NULL,
  `set_obstetri` varchar(5) NOT NULL,
  `set_akdr` varchar(5) NOT NULL,
  `set_bayi` varchar(5) NOT NULL,
  `set_maternal` varchar(5) NOT NULL,
  `set_pasca` varchar(5) NOT NULL,
  `set_khusus` varchar(5) NOT NULL,
  `set_gigi` varchar(5) NOT NULL,
  `set_kie` varchar(5) NOT NULL,
  `set_asi` varchar(5) NOT NULL,
  `set_lab` varchar(5) NOT NULL,
  `set_farmasi` varchar(5) NOT NULL,
  `set_inap` varchar(5) NOT NULL,
  `set_steril` varchar(5) NOT NULL,
  `set_alat` varchar(5) NOT NULL,
  `set_kel` varchar(5) NOT NULL,
  `kit_kkm` varchar(5) NOT NULL,
  `kit_imun` varchar(5) NOT NULL,
  `kit_uks` varchar(5) NOT NULL,
  `kit_ukgs` varchar(5) NOT NULL,
  `kit_bidan` varchar(5) NOT NULL,
  `kit_posyandu` varchar(5) NOT NULL,
  `kit_sanitarian` varchar(5) NOT NULL,
  `kit_ptm` varchar(5) NOT NULL,
  `kit_sdidtk` varchar(5) NOT NULL,
  `puskesmas_hg` varchar(5) NOT NULL,
  `kalibrasi` varchar(5) NOT NULL,
  `ijin_edar` varchar(5) NOT NULL,
  `pd_tempatnya` varchar(5) NOT NULL,
  `dlm_negri` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perencanaan_puskesmas`
--

CREATE TABLE `perencanaan_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `rpk_n` int(2) NOT NULL,
  `ruk` int(2) NOT NULL,
  `rpk_rinci` int(2) NOT NULL,
  `draft_rka` int(2) NOT NULL,
  `ruk_mendatang` int(2) NOT NULL,
  `ada_hasil` int(2) NOT NULL,
  `umpan_balik` int(2) NOT NULL,
  `tabulasi_wawancara` int(2) NOT NULL,
  `hasil_smd` int(2) NOT NULL,
  `penyelarasan_mmd` int(2) NOT NULL,
  `berita_acara` int(2) NOT NULL,
  `laporan_penanggung` int(2) NOT NULL,
  `laporan_lokakarya` int(2) NOT NULL,
  `lokakarya_mini` int(2) NOT NULL,
  `hasil_lokakarya` int(2) NOT NULL,
  `draft_ruk` int(2) NOT NULL,
  `ruk_dinkes` int(2) NOT NULL,
  `rankaian_menunjang` int(2) NOT NULL,
  `upaya_tercapai` int(2) NOT NULL,
  `pelaksanaan_ukp` int(2) NOT NULL,
  `formasi_abk` int(2) NOT NULL,
  `sdm_abk` int(2) NOT NULL,
  `tindak_lanjut` int(2) NOT NULL,
  `perencanaan_peralatan` int(2) NOT NULL,
  `ada_tindak` int(2) NOT NULL,
  `kondisi_sarana` int(2) NOT NULL,
  `dokumen_perencanaan` int(2) NOT NULL,
  `alokasi_kebutuhan` int(2) NOT NULL,
  `usulan_pengadaan` int(2) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prasarana_puskesmas`
--

CREATE TABLE `prasarana_puskesmas` (
  `kode` varchar(20) NOT NULL,
  `ventilasi_alami` varchar(5) NOT NULL,
  `ac_farmasi` varchar(5) NOT NULL,
  `ac_tindakan` varchar(5) NOT NULL,
  `ac_persalinan` varchar(5) NOT NULL,
  `ac_lab` varchar(5) NOT NULL,
  `lab_ac` varchar(5) NOT NULL,
  `ventilasi_tunggu` varchar(5) NOT NULL,
  `udara_puskesmas` varchar(5) NOT NULL,
  `udara_berbau` varchar(5) NOT NULL,
  `kelembapan` varchar(5) NOT NULL,
  `laju_ventilasi` varchar(5) NOT NULL,
  `pencahayaan` varchar(5) NOT NULL,
  `duaratus` varchar(5) NOT NULL,
  `tigaratus` varchar(5) NOT NULL,
  `seratus` varchar(5) NOT NULL,
  `hygiene` varchar(5) NOT NULL,
  `limabelas` varchar(5) NOT NULL,
  `empatpuluh` varchar(5) NOT NULL,
  `hygiene_seratus` varchar(5) NOT NULL,
  `sumber_air` varchar(50) NOT NULL,
  `saluran_air` varchar(5) NOT NULL,
  `ipal` varchar(5) NOT NULL,
  `sampah_dua` varchar(5) NOT NULL,
  `pemilihan` varchar(5) NOT NULL,
  `tps` varchar(5) NOT NULL,
  `westafel` varchar(5) NOT NULL,
  `serbet` varchar(5) NOT NULL,
  `handrub` varchar(5) NOT NULL,
  `septik_tank` varchar(5) NOT NULL,
  `listrik_puskesmas` varchar(50) NOT NULL,
  `daya_listrik` varchar(5) NOT NULL,
  `listrik_cadangan` varchar(50) NOT NULL,
  `kekuatan_cadangan` varchar(5) NOT NULL,
  `listrik_sehari` varchar(5) NOT NULL,
  `listrik_mencukupi` varchar(5) NOT NULL,
  `listrik_minimal` varchar(5) NOT NULL,
  `peletakan_kabel` varchar(5) NOT NULL,
  `saluran_tlp` varchar(5) NOT NULL,
  `saluran_seluler` varchar(5) NOT NULL,
  `tlp_gadar` varchar(5) NOT NULL,
  `internet` varchar(5) NOT NULL,
  `pemanggilan_jelas` varchar(5) NOT NULL,
  `sistem_antrian` varchar(5) NOT NULL,
  `mesin_nomor` varchar(5) NOT NULL,
  `tv_urut` varchar(5) NOT NULL,
  `perkiraan_waktu` varchar(5) NOT NULL,
  `gas_putih` varchar(5) NOT NULL,
  `gas_aman` varchar(5) NOT NULL,
  `gas_tutup` varchar(5) NOT NULL,
  `proteksi` varchar(5) NOT NULL,
  `apar` varchar(5) NOT NULL,
  `apar_dua` varchar(5) NOT NULL,
  `apar_dinding` varchar(5) NOT NULL,
  `apar_co` varchar(5) NOT NULL,
  `kebisingan_luar` varchar(5) NOT NULL,
  `kebisingan_dlm` varchar(5) NOT NULL,
  `bila_tangga` varchar(50) NOT NULL,
  `bila_ram` varchar(50) NOT NULL,
  `keliling_unit` varchar(255) NOT NULL,
  `kendaraan_ada` varchar(5) NOT NULL,
  `ambulan_unit` varchar(255) NOT NULL,
  `ambulan_ada` varchar(5) NOT NULL,
  `roda_unit` varchar(255) NOT NULL,
  `roda_ada` varchar(5) NOT NULL,
  `puskesmas_keliling` varchar(5) NOT NULL,
  `ambulan_baik` varchar(5) NOT NULL,
  `rujukan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_daya_manusia`
--

CREATE TABLE `sumber_daya_manusia` (
  `kode` varchar(20) NOT NULL,
  `kepala` varchar(5) NOT NULL,
  `dokter1` varchar(5) NOT NULL,
  `dokter2` varchar(5) NOT NULL,
  `dokter3` varchar(5) NOT NULL,
  `dokter4` varchar(5) NOT NULL,
  `dokter5` varchar(5) NOT NULL,
  `dokter6` varchar(5) NOT NULL,
  `dlp1` varchar(5) NOT NULL,
  `dlp2` varchar(5) NOT NULL,
  `dlp3` varchar(5) NOT NULL,
  `dlp4` varchar(5) NOT NULL,
  `dlp5` varchar(5) NOT NULL,
  `dlp6` varchar(5) NOT NULL,
  `gigi1` varchar(5) NOT NULL,
  `gigi2` varchar(5) NOT NULL,
  `gigi3` varchar(5) NOT NULL,
  `gigi4` varchar(5) NOT NULL,
  `gigi5` varchar(5) NOT NULL,
  `gigi6` varchar(5) NOT NULL,
  `perawat1` varchar(5) NOT NULL,
  `perawat2` varchar(5) NOT NULL,
  `perawat3` varchar(5) NOT NULL,
  `perawat4` varchar(5) NOT NULL,
  `perawat5` varchar(5) NOT NULL,
  `perawat6` varchar(5) NOT NULL,
  `bidan1` varchar(5) NOT NULL,
  `bidan2` varchar(5) NOT NULL,
  `bidan3` varchar(5) NOT NULL,
  `bidan4` varchar(5) NOT NULL,
  `bidan5` varchar(5) NOT NULL,
  `bidan6` varchar(5) NOT NULL,
  `promosi1` varchar(5) NOT NULL,
  `promosi2` varchar(5) NOT NULL,
  `promosi3` varchar(5) NOT NULL,
  `promosi4` varchar(5) NOT NULL,
  `promosi5` varchar(5) NOT NULL,
  `promosi6` varchar(5) NOT NULL,
  `sanitasi1` varchar(5) NOT NULL,
  `sanitasi2` varchar(5) NOT NULL,
  `sanitasi3` varchar(5) NOT NULL,
  `sanitasi4` varchar(5) NOT NULL,
  `sanitasi5` varchar(5) NOT NULL,
  `sanitasi6` varchar(5) NOT NULL,
  `nutrisionis1` varchar(5) NOT NULL,
  `nutrisionis2` varchar(5) NOT NULL,
  `nutrisionis3` varchar(5) NOT NULL,
  `nutrisionis4` varchar(5) NOT NULL,
  `nutrisionis5` varchar(5) NOT NULL,
  `nutrisionis6` varchar(5) NOT NULL,
  `apoteker1` varchar(5) NOT NULL,
  `apoteker2` varchar(5) NOT NULL,
  `apoteker3` varchar(5) NOT NULL,
  `apoteker4` varchar(5) NOT NULL,
  `apoteker5` varchar(5) NOT NULL,
  `apoteker6` varchar(5) NOT NULL,
  `kefarmasian1` varchar(5) NOT NULL,
  `kefarmasian2` varchar(5) NOT NULL,
  `kefarmasian3` varchar(5) NOT NULL,
  `kefarmasian4` varchar(5) NOT NULL,
  `kefarmasian5` varchar(5) NOT NULL,
  `kefarmasian6` varchar(5) NOT NULL,
  `ahli1` varchar(5) NOT NULL,
  `ahli2` varchar(5) NOT NULL,
  `ahli3` varchar(5) NOT NULL,
  `ahli4` varchar(5) NOT NULL,
  `ahli5` varchar(5) NOT NULL,
  `ahli6` varchar(5) NOT NULL,
  `kesehatan1` varchar(5) NOT NULL,
  `kesehatan2` varchar(5) NOT NULL,
  `kesehatan3` varchar(5) NOT NULL,
  `kesehatan4` varchar(5) NOT NULL,
  `kesehatan5` varchar(5) NOT NULL,
  `kesehatan6` varchar(5) NOT NULL,
  `keuangan1` varchar(5) NOT NULL,
  `keuangan2` varchar(5) NOT NULL,
  `keuangan3` varchar(5) NOT NULL,
  `keuangan4` varchar(5) NOT NULL,
  `keuangan5` varchar(5) NOT NULL,
  `keuangan6` varchar(5) NOT NULL,
  `tatausaha1` varchar(5) NOT NULL,
  `tatausaha2` varchar(5) NOT NULL,
  `tatausaha3` varchar(5) NOT NULL,
  `tatausaha4` varchar(5) NOT NULL,
  `tatausaha5` varchar(5) NOT NULL,
  `tatausaha6` varchar(5) NOT NULL,
  `pekarya1` varchar(5) NOT NULL,
  `pekarya2` varchar(5) NOT NULL,
  `pekarya3` varchar(5) NOT NULL,
  `pekarya4` varchar(5) NOT NULL,
  `pekarya5` varchar(5) NOT NULL,
  `pekarya6` varchar(5) NOT NULL,
  `tradisional1` varchar(5) NOT NULL,
  `tradisional2` varchar(5) NOT NULL,
  `tradisional3` varchar(5) NOT NULL,
  `tradisional4` varchar(5) NOT NULL,
  `tradisional5` varchar(5) NOT NULL,
  `tradisional6` varchar(5) NOT NULL,
  `titik1` varchar(255) NOT NULL,
  `titik2` varchar(5) NOT NULL,
  `titik3` varchar(5) NOT NULL,
  `titik4` varchar(5) NOT NULL,
  `titik5` varchar(5) NOT NULL,
  `titik6` varchar(5) NOT NULL,
  `titik7` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim_pembina_terpadu`
--

CREATE TABLE `tim_pembina_terpadu` (
  `kode` varchar(20) NOT NULL,
  `pembina1` varchar(255) NOT NULL,
  `no_pembina1` varchar(20) NOT NULL,
  `pembina2` varchar(255) NOT NULL,
  `no_pembina2` varchar(20) NOT NULL,
  `pembina3` varchar(255) NOT NULL,
  `no_pembina3` varchar(20) NOT NULL,
  `tgl_pembinaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `upaya_inovasi`
--

CREATE TABLE `upaya_inovasi` (
  `kode` varchar(20) NOT NULL,
  `ukm1` varchar(255) NOT NULL,
  `ukm2` varchar(255) NOT NULL,
  `ukm3` varchar(255) NOT NULL,
  `ukm4` varchar(255) NOT NULL,
  `ukp1` varchar(255) NOT NULL,
  `ukp2` varchar(255) NOT NULL,
  `ukp3` varchar(255) NOT NULL,
  `ukp4` varchar(255) NOT NULL,
  `manajemen1` varchar(255) NOT NULL,
  `manajemen2` varchar(255) NOT NULL,
  `manajemen3` varchar(255) NOT NULL,
  `manajemen4` varchar(255) NOT NULL,
  `input_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `no` int(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kab_kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `kode`, `nama`, `role_id`, `password`, `kab_kota`, `provinsi`, `date_created`, `last_login`) VALUES
(1, 'K1101030101', 'Simeulue', 2, '$2y$10$yISDDav55rj5AuvNZO25Tu5/TejSTbnMAWlVYey0VwIs48f3KJD4G', 'Simeulue', 'Aceh', 1599976563, 1599976563),
(2, 'K1102021201', 'Aceh Singkil', 2, '$2y$10$6fT7szyzYdaZBUI5RueFDuyPALuja0mMz5WXI0tOtiF/EjS.Nihqe', 'Aceh Singkil', 'Aceh', 1599976563, 1599976563),
(3, 'K1103080201', 'Aceh Selatan', 2, '$2y$10$d/FcK.keb.9P7dRiYlccSOVCCnb3EdME5pqMLt8OjAhP/On2pip2K', 'Aceh Selatan', 'Aceh', 1599976563, 1599976563),
(4, 'K1104020101', 'Aceh Tenggara ', 2, '$2y$10$MP5tTz4ZPfqQcR0YCmOHZeLUaz/q9.epHo6psG/xFz0uhYl.NLjZy', 'Aceh Tenggara ', 'Aceh', 1599976564, 1599976564),
(5, 'K1105180102', 'Aceh Timur', 2, '$2y$10$2y82rYu8siS/.6pZ46mJkuApA9XmxdNxxiXdc9eMLQDKNJsYD6vcy', 'Aceh Timur', 'Aceh', 1599976564, 1599976564),
(6, 'K1106031201', 'Aceh Tengah', 2, '$2y$10$6hrspdfPPhqY8ODbT94ZRe1p3ruLWp6b5JM5801Bz27YkBWfh1dBG', 'Aceh Tengah', 'Aceh', 1599976564, 1599976564),
(7, 'K1107081201', 'Aceh Barat', 2, '$2y$10$3mpR79A4As6/nBLb7JUA3ugB5RTvk6X500PMgA/gAoVklTyPx4/Gm', 'Aceh Barat', 'Aceh', 1599976564, 1599976564),
(8, 'K1108090101', 'Aceh Besar', 2, '$2y$10$k0ciGtr2D874Hd9SxM6I/uA65PwtapMmG2JXg/8xJz8DX4unMLam2', 'Aceh Besar', 'Aceh', 1599976564, 1599976564),
(9, 'K1109180101', 'Pidie', 2, '$2y$10$YNUKFhUxea6iv6.SPmmYj.Z7Ela4KJn8dCItl5hz1XydyhCXyxSLK', 'Pidie', 'Aceh', 1599976564, 1599976564),
(10, 'K1110040101', 'Bireuen', 2, '$2y$10$j/Z37odinZv2W1xYksewqe0PIzfKCNL9jiLkn2iz8iunvxPEXT/Pa', 'Bireuen', 'Aceh', 1599976565, 1599976565),
(11, 'K1111170201', 'Aceh Utara', 2, '$2y$10$JKtAZiLcuIQBb4wQfSjyiuP9HLk7euicbgG24naNu0t1Erc0CGOGC', 'Aceh Utara', 'Aceh', 1599976565, 1599976565),
(12, 'K1112040201', 'Aceh Barat Daya', 2, '$2y$10$n/VNncnOPg2QkMrCYrMrru2vCc/SALMf4BapGObyecXE3QiB6BesG', 'Aceh Barat Daya', 'Aceh', 1599976565, 1599976565),
(13, 'K1113020101', 'Gayo Lues', 2, '$2y$10$e0OqiHX7KgHjdo.PaRTJ8unj8kK09Bu4PKN6F6citrEHVeGfEfB/2', 'Gayo Lues', 'Aceh', 1599976565, 1599976565),
(14, 'K1114070201', 'Aceh Tamiang', 2, '$2y$10$IFF9V1YdFdBBG0WspCGODeqPTCk6S7hT821zVn3IoWiVg/csJkfP6', 'Aceh Tamiang', 'Aceh', 1599976565, 1599976565),
(15, 'K1115050101', 'Nagan Raya ', 2, '$2y$10$V54vUwzQdRkDPmLEtvFIvehZbFo5mwIl6JVaLWSuvqcOvbjOw6ih2', 'Nagan Raya ', 'Aceh', 1599976565, 1599976565),
(16, 'K1116010101', 'Aceh Jaya ', 2, '$2y$10$Pm8JvJnI64Emb3wpeXCtM.pH1qchXDDTkeND.8sZXCT3Fawoc0GD.', 'Aceh Jaya ', 'Aceh', 1599976565, 1599976565),
(17, 'K1117030201', 'Bener Meriah ', 2, '$2y$10$l.mkol46ZzAJPYqqaX/as./rfHDN1GDpVatbqPrQgwP3n49Ln.Q3y', 'Bener Meriah ', 'Aceh', 1599976566, 1599976566),
(18, 'K1118080101', 'Pidie Jaya ', 2, '$2y$10$qmgeFY0LIv8K3lbk6G8gWO49PXMzbveY/.6kdomKqdnNv5zNa8fmy', 'Pidie Jaya ', 'Aceh', 1599976566, 1599976566),
(19, 'K1171012201', 'Kota Banda Aceh', 2, '$2y$10$0aZE5pA3a3ms1GvYCbeW8uBp.y3N60a3.OLgIjSd0DqpX2yKgPZC6', 'Kota Banda Aceh', 'Aceh', 1599976566, 1599976566),
(20, 'K1172010101', 'Kota Sabang', 2, '$2y$10$BF5jmYsHTvZHNbFYUySljevORl9wj8ZCsi4yBl4BC4d4g//oyYtQm', 'Kota Sabang', 'Aceh', 1599976566, 1599976566),
(21, 'K1173020201', 'Kota Langsa', 2, '$2y$10$kmTRXb3O564LTpv0fBsdhuKoHbwGR2znmbHlN2SPGq5uY8HMBiweO', 'Kota Langsa', 'Aceh', 1599976566, 1599976566),
(22, 'K1174030201', 'Kota Lhoksumawe', 2, '$2y$10$USZeVExEnTAgPzrEjUXfjuj8EdLVYcrcp1KdLT4U06vb2IoU0Wcri', 'Kota Lhoksumawe', 'Aceh', 1599976566, 1599976566),
(23, 'K1175020101', 'Kota Subulussalam', 2, '$2y$10$dtu9qZ7p9WSy2l9ITs6BAOoEzkzlt7CTCFEZ4ufWq0q51gEmMIJv.', 'Kota Subulussalam', 'Aceh', 1599976566, 1599976566),
(24, 'K1201070101', 'Nias', 2, '$2y$10$X7jWXnqhVfg9fDq2XugvW.mMoCrafbSzi76PF4mlLiMPGBiEuuqwK', 'Nias', 'Sumatera Utara', 1599976566, 1599976566),
(25, 'K1202080101', 'Mandailing Natal', 2, '$2y$10$qDXoGUH4tjrP0W/54Rkl6.cCmmvGZAM9pPCnE.dfzKr9pAPydS2oC', 'Mandailing Natal', 'Sumatera Utara', 1599976567, 1599976567),
(26, 'K1203010101', 'Tapanuli Selatan ', 2, '$2y$10$8zEbW8jYUjwzsf5iYa./NO6NDB9xbCXJ4SEyLyyLUPzK8yCDucGNS', 'Tapanuli Selatan ', 'Sumatera Utara', 1599976567, 1599976567),
(27, 'K1204011201', 'Tapanuli Tengah', 2, '$2y$10$YjxmPek4zBqTSPMCBsFJYOL7HrpKKZPnW0kXD7akqmixQ2YGAqYBK', 'Tapanuli Tengah', 'Sumatera Utara', 1599976567, 1599976567),
(28, 'K1205120102', 'Tapanuli Utara', 2, '$2y$10$eRkLk2lO.7LAHheCYarZxuvjgQFADcisYrE6cB52mpHlgtDxmraR2', 'Tapanuli Utara', 'Sumatera Utara', 1599976567, 1599976567),
(29, 'K1206030201', 'Toba Samosir', 2, '$2y$10$1tqnikQLDI391h.SuOEhEuBI4GStsVBoos3HlF.lCknpqp5QlLkC.', 'Toba Samosir', 'Sumatera Utara', 1599976567, 1599976567),
(30, 'K1207220201', 'Labuhan Batu ', 2, '$2y$10$K8B6oINGlz0/HObVtf5PGedmjQTuWRWw.JsjuxnDxp1tkBI8yEJWa', 'Labuhan Batu ', 'Sumatera Utara', 1599976567, 1599976567),
(31, 'K1208160201', 'Asahan ', 2, '$2y$10$4JXjaFFKGhbWtkV4Z6sCKOqd5RmBORKbIo2l8VhjpD/i5lI2pBCxm', 'Asahan ', 'Sumatera Utara', 1599976568, 1599976568),
(32, 'K1209190201', 'Simalungun', 2, '$2y$10$hYgrMadv.PBHigUONLQ5TOmfhxaa8Iv4lMge8jfcHgacqRyLCzyPK', 'Simalungun', 'Sumatera Utara', 1599976568, 1599976568),
(33, 'K1210030202', 'Dairi', 2, '$2y$10$tpfahTncIdAwCV1Tt0VJveZ7D7gk.sFsYmGtPqvtfXJoKwCNNfuPW', 'Dairi', 'Sumatera Utara', 1599976568, 1599976568),
(34, 'K1211110101', 'Karo', 2, '$2y$10$kJQWK.Sk6FlS088O.OU0Ze72hX0MfWiMycBis1xtncKp3AQB1bH9S', 'Karo', 'Sumatera Utara', 1599976568, 1599976568),
(35, 'K1212190201', 'Deli Serdang', 2, '$2y$10$6p006o4jcbQyKTew4bjeC.V03v/8Pd60qNPxPiYHQ2wS.hdiKyGTe', 'Deli Serdang', 'Sumatera Utara', 1599976568, 1599976568),
(36, 'K1213150201', 'Langkat', 2, '$2y$10$tumXN3K0c2pB6KE3pU36DuX0SlTaOsGK9Dtvhm6s2DHR6OO1mHsvO', 'Langkat', 'Sumatera Utara', 1599976568, 1599976568),
(37, 'K1214031202', 'Nias Selatan', 2, '$2y$10$t9cBvuSCnaA3FPpVv.cXXufZs6RU1Q7s90xbi4FIC2HwlaHThoyqG', 'Nias Selatan', 'Sumatera Utara', 1599976568, 1599976568),
(38, 'K1215040201', 'Humbang Hasundutan', 2, '$2y$10$s8uLJo6to2eBqwdrhH3KeuGYYyqebh1C6RA1B06qOi03GzRL/OQmy', 'Humbang Hasundutan', 'Sumatera Utara', 1599976568, 1599976568),
(39, 'K1216020101', 'Pakpak Bharat', 2, '$2y$10$tG0w9oonwEjYa/r.v7gt6.GzadgxrUmZgrKFLuMrPX8exnGPovFJG', 'Pakpak Bharat', 'Sumatera Utara', 1599976569, 1599976569),
(40, 'K1217080201', 'Samosir', 2, '$2y$10$ABNz7DHGYPokyLbxvIQhROY3CPG5P0lX3T3dXNQRxmWJdawm2I6ma', 'Samosir', 'Sumatera Utara', 1599976569, 1599976569),
(41, 'K1218070201', 'Serdang Bedagai', 2, '$2y$10$bmUJcI1uI9XqD1J4VtY7suRv4mz//l3jCtmmbdXUtHPlzzJeRSxZa', 'Serdang Bedagai', 'Sumatera Utara', 1599976569, 1599976569),
(42, 'K1219050101', 'Batu Bara', 2, '$2y$10$kmr7G9jPZKY5QyvKBFgNkOL4hGAKYXNhGU8qOpAyeGymIKLo2PWTi', 'Batu Bara', 'Sumatera Utara', 1599976569, 1599976569),
(43, 'K1220040203', 'Padang Lawas Utara', 2, '$2y$10$cjm0WXR1U5T9KN1g5ZEBLesofLJoIFnFKzw1hv/e9u4sd77lx1uxW', 'Padang Lawas Utara', 'Sumatera Utara', 1599976569, 1599976569),
(44, 'K1221040201', 'Padang Lawas', 2, '$2y$10$E8N0NoQ/JgfrdLUw0Mfyu.5Ggc1hMDi8LeasudYg.1gW0Wn82InqK', 'Padang Lawas', 'Sumatera Utara', 1599976569, 1599976569),
(45, 'K1222020101', 'Labuhan Batu Selatan', 2, '$2y$10$zBIzeH9.g5olMk65rxJSoeUbEKr3ITII4U2AR7q.EvBDBzs9wGSqK', 'Labuhan Batu Selatan', 'Sumatera Utara', 1599976569, 1599976569),
(46, 'K1223010101', 'Labuhan Batu Utara', 2, '$2y$10$DdpA9IL7nkfYoThBhJ.Rxeny2dH6OeO1b17KIEuc1gcfPtIeGCBxy', 'Labuhan Batu Utara', 'Sumatera Utara', 1599976570, 1599976570),
(47, 'K1224040201', 'Nias Utara', 2, '$2y$10$AWnoJZHki0LD4YC.L/jcy.nL5BQgHLoDW4CE01CI.ldiMB/H6yfq2', 'Nias Utara', 'Sumatera Utara', 1599976570, 1599976570),
(48, 'K1225020201', 'Nias Barat', 2, '$2y$10$.eSyP758rm.kF7eLmOzjluCHTzUcpQmSuhFtcMJ/lLAp0Zk9Gci9m', 'Nias Barat', 'Sumatera Utara', 1599976570, 1599976570),
(49, 'K1271010201', 'Kota Sibolga', 2, '$2y$10$mYRDnW57ksAijW13DXxSEenA7D8Ntv9T77B4nMnMQTx7wSHOp6P1i', 'Kota Sibolga', 'Sumatera Utara', 1599976570, 1599976570),
(50, 'K1272030201', 'Kota Tanjung Balai', 2, '$2y$10$P6jIcNP3eRW43dTzFrPxkenKPKVIjn6Es61SSRe5kbXz86PxHZqrK', 'Kota Tanjung Balai', 'Sumatera Utara', 1599976570, 1599976570),
(51, 'K1273010201', 'Kota Pematang Siantar', 2, '$2y$10$QRllQm2MrfbNV7Usg6ku..c2lHLryii2crXc4l3iIAM8wsGjqct0O', 'Kota Pematang Siantar', 'Sumatera Utara', 1599976570, 1599976570),
(52, 'K1274020203', 'Kota Tebing Tinggi', 2, '$2y$10$rSzpn9NZEthTLuJx/5Ff4O7YTbPjL2s9X3ULTQuerMrK5O3dpRKNS', 'Kota Tebing Tinggi', 'Sumatera Utara', 1599976570, 1599976570),
(53, 'K1275060101', 'Kota Medan ', 2, '$2y$10$5/nFkk7aSO/02eTX/1yGxudKz7LD8nXyC9EPKSkVm7RKbMRNFGL4q', 'Kota Medan ', 'Sumatera Utara', 1599976571, 1599976571),
(54, 'K1276030101', 'Kota Binjai', 2, '$2y$10$6d1.d/60aED.muDoAmTQwOPOCnS0gAQfsHlDZRVOnx1H/EqsF7/7y', 'Kota Binjai', 'Sumatera Utara', 1599976571, 1599976571),
(55, 'K1277030201', 'Kota Padang Sidempuan', 2, '$2y$10$pcPTe8PyvPGoABo77N6Kh.OQZimi8rnkr8aXgq4j6aJ823hsreMoe', 'Kota Padang Sidempuan', 'Sumatera Utara', 1599976571, 1599976571),
(56, 'K1278040201', 'Kota Gunung Sitoli', 2, '$2y$10$Sx.i/r.qA0ytmn2X7ZrnN.rwW35BqMJzrAdS9CRLcgq5l9dyVqGbK', 'Kota Gunung Sitoli', 'Sumatera Utara', 1599976571, 1599976571),
(57, 'K1301030101', 'Kepulauan Mentawai', 2, '$2y$10$7iKpGjk/JzjfyobVGLe2e.VljcVt6yu7Y7oCx6l5SumwjhBU0ZUGO', 'Kepulauan Mentawai', 'Sumatera Barat', 1599976571, 1599976571),
(58, 'K1302110102', 'Pesisir Selatan', 2, '$2y$10$zoTb4Dqb1UHNmxEr6g8Rteoa5MaqRCqLwLpz10K.9JJn3kYBTr8.C', 'Pesisir Selatan', 'Sumatera Barat', 1599976572, 1599976572),
(59, 'K1303080102', 'Solok', 2, '$2y$10$zc/9BgVYNzPKnO1Q9CXM6OIC7mV8E662LfMoT0neJgs4slh1Lz7hG', 'Solok', 'Sumatera Barat', 1599976572, 1599976572),
(60, 'K1304060101', 'Sijunjung', 2, '$2y$10$mGH4cDXfkEDAPNXK1KUFuOEmQ8FHcbXXS7CUaEbwOEqEkC.nli0Ke', 'Sijunjung', 'Sumatera Barat', 1599976572, 1599976572),
(61, 'K1305050201', 'Tanah Datar', 2, '$2y$10$VvL81KEIrJu8zyPI3WoVvulOB29OqbgUyQ8dqwkTtSeLJLKLgPvMW', 'Tanah Datar', 'Sumatera Barat', 1599976572, 1599976572),
(62, 'K1306010101', 'Padang Pariaman', 2, '$2y$10$dMk4PLCOBU5Atd1lCmoByeS1E6/orCyuZ/1iLELxug6rhNlmr6pfO', 'Padang Pariaman', 'Sumatera Barat', 1599976573, 1599976573),
(63, 'K1307090101', 'Agam', 2, '$2y$10$0EBhcyyMLgn3/DVKkCoe2eZNZOv3mBbvme7FfODgT5Bhnf4VrJoFG', 'Agam', 'Sumatera Barat', 1599976573, 1599976573),
(64, 'K1308030202', 'Lima Puluh Kota', 2, '$2y$10$QQNPYsV5V0dMmMehB2wSh.8diVkULZXUQ0hycfnl.ftr0hXTyDiaK', 'Lima Puluh Kota', 'Sumatera Barat', 1599976573, 1599976573),
(65, 'K1309110102', 'Pasaman', 2, '$2y$10$ydZHundiECeGWEuZi8.M5efj54iF8ZUzyi9jc8Hfy49l8Nh0gZBwK', 'Pasaman', 'Sumatera Barat', 1599976573, 1599976573),
(66, 'K1310040201', 'Solok Selatan', 2, '$2y$10$CQSikvHy5ZCLV5SpRKG/CuEvRcTFTzWnr3Dpmc8zN4Gaepp.rM23.', 'Solok Selatan', 'Sumatera Barat', 1599976573, 1599976573),
(67, 'K1311030103', 'Dharmas Raya', 2, '$2y$10$4q7co3Wog51LH8CMHt8FM.XcGRG70PmkAlcZNrO..bGDxozGwNo6q', 'Dharmas Raya', 'Sumatera Barat', 1599976574, 1599976574),
(68, 'K1312050101', 'Pasaman Barat', 2, '$2y$10$Ct4O8r7JhNFcRYvbdvWWIuaPtwjP.DKDxogsRYD4Vyact8fIDBbm.', 'Pasaman Barat', 'Sumatera Barat', 1599976574, 1599976574),
(69, 'K1371050201', 'Kota Padang', 2, '$2y$10$JNfSlyfSP39BrSDcIjaVCewC8bUXjwlhVNpOhUxQ03o3RF9MJoaC.', 'Kota Padang', 'Sumatera Barat', 1599976574, 1599976574),
(70, 'K1372020201', 'Kota Solok', 2, '$2y$10$5uWtXOLOdN1QrfN3n9Ny1ej5I74hkHbOHwAGxGP12q87RHt/VX3B2', 'Kota Solok', 'Sumatera Barat', 1599976575, 1599976575),
(71, 'K1373040101', 'Kota Sawah Lunto', 2, '$2y$10$cwmQ5KByrhWRl89wWPgumu.DOZM5k8vfIaf9xKT5rZYGw2sdzpP5S', 'Kota Sawah Lunto', 'Sumatera Barat', 1599976575, 1599976575),
(72, 'K1374020201', 'Kota Padang Panjang', 2, '$2y$10$g1gQlmqFKDCjLM0hxIhPLeDOYwuQ310Mdlv7F1381UamLp6O1VoiK', 'Kota Padang Panjang', 'Sumatera Barat', 1599976575, 1599976575),
(73, 'K1375010201', 'Kota Bukit Tinggi', 2, '$2y$10$PiMyhqzM9.xqc19r3K9B1ujn2scCQRVmvLmwWsA.0nApqYKmq4FHm', 'Kota Bukit Tinggi', 'Sumatera Barat', 1599976575, 1599976575),
(74, 'K1376010101', 'Kota Payakumbuh', 2, '$2y$10$ERnS1C4nyRBz.Q30eb3uzOgBjL/xxbAwfSzKGh3PWozwdLxDDhJmm', 'Kota Payakumbuh', 'Sumatera Barat', 1599976576, 1599976576),
(75, 'K1377010101', 'Kota Pariaman ', 2, '$2y$10$szJ58jDJuVyjGU5swpO3HOuST1c36WP017afcjvVTcQcSNBqDv7jy', 'Kota Pariaman ', 'Sumatera Barat', 1599976576, 1599976576),
(76, 'K1401052101', 'Kuantan Singingi', 2, '$2y$10$6d9ssBHve17u8sjeD.QPDOdfiY1hxnURvu13h8sfPdEUWUHY4TI8a', 'Kuantan Singingi', 'Riau', 1599976576, 1599976576),
(77, 'K1402010101', 'Indragiri Hulu', 2, '$2y$10$s3RPzrlgV3.ZekFF3C1f9uqber5piAPLnTMoUU6FhFZadNCAFEudO', 'Indragiri Hulu', 'Riau', 1599976576, 1599976576),
(78, 'K1403061101', 'Indragiri Hilir', 2, '$2y$10$a5DziGqi0k89PBW.FRDvaOAWXZVBqwVboQDofUJ.y/P.8BrpxRAme', 'Indragiri Hilir', 'Riau', 1599976577, 1599976577),
(79, 'K1404011201', 'Pelalawan', 2, '$2y$10$lUrmyPs7OIvIX7S2WwDWKu15AfD3AqInPSaDzWoDiqTPrdmKNvNSy', 'Pelalawan', 'Riau', 1599976577, 1599976577),
(80, 'K1405030101', 'Siak', 2, '$2y$10$TZUU/mvjNEV2KHO.0L2MjerR29htDuvsGVfjV.HDmWUNc/kxyvzmq', 'Siak', 'Riau', 1599976577, 1599976577),
(81, 'K1406030101', 'Kampar', 2, '$2y$10$do.0r6imQ55MGAfW3WWHjuzCxaqTYiQOvciKjuXt9axROCltbSWoS', 'Kampar', 'Riau', 1599976577, 1599976577),
(82, 'K1407050101', 'Rokan Hulu', 2, '$2y$10$I6OyM2Jfdg9OWOscdZYVm.wEiOsiZs72m/jVDEf87PAc7xSCrPeSm', 'Rokan Hulu', 'Riau', 1599976578, 1599976578),
(83, 'K1408050101', 'Bengkalis', 2, '$2y$10$JBNFhR.T/BiIjMXlgnSgVOuHQWraOX6lBg2n3rlQEHhFKT8bnAukK', 'Bengkalis', 'Riau', 1599976578, 1599976578),
(84, 'K1409041201', 'Rokan Hilir', 2, '$2y$10$6MZw1pL/lOLTkCMgfgIFv.HJa4WN3/R253RfDRhdZnGJqtAlzDIle', 'Rokan Hilir', 'Riau', 1599976578, 1599976578),
(85, 'K1410020201', 'Kepulauan Meranti', 2, '$2y$10$w/xiH4BYpozhBSiyEE0Gz.YJXKDYWJI3GVVSrqG1Q8csyevAUXgGW', 'Kepulauan Meranti', 'Riau', 1599976578, 1599976578),
(86, 'K1471021102', 'Kota Pekan Baru', 2, '$2y$10$3szgqb6I.x/Nf8O.d7kZye.yWlZBEDsslApMGVU22MbzqX8DauvwO', 'Kota Pekan Baru', 'Riau', 1599976579, 1599976579),
(87, 'K1473010101', 'Kota Dumai', 2, '$2y$10$y5BO/hB/ut9qHbbWr3CTdubolrcY83gxFYKVsOlBbcT2.1omhj8Lu', 'Kota Dumai', 'Riau', 1599976579, 1599976579),
(88, 'K1501090101', 'Kerinci', 2, '$2y$10$5U6Y2sOCO2h9s9TCEI3sfO2H356DYtIROnrbsb3fMrrE4P1y8ozie', 'Kerinci', 'Jambi', 1599976579, 1599976579),
(89, 'K1502040202', 'Merangin', 2, '$2y$10$dzvutZ0MEb.cdFnOmatsCu6Iw4ypcDQvnKqRxATfINP5kL5M5yid6', 'Merangin', 'Jambi', 1599976579, 1599976579),
(90, 'K1503031101', 'Sarolangun', 2, '$2y$10$0DgK.tthJVMJ.cGyFIEPdOfZ5aN.gshH7iWfhjLAslzrfqiLzhbhC', 'Sarolangun', 'Jambi', 1599976579, 1599976579),
(91, 'K1504040201', 'Batang Hari', 2, '$2y$10$bNKtK4g16T0oWYeNev7WmO.AhQ4BwJZf5SuxoEk9LzmAR1LDIGIQG', 'Batang Hari', 'Jambi', 1599976580, 1599976580),
(92, 'K1505050101', 'Muaro Jambi', 2, '$2y$10$drlHVysmbA2HlXW82fKIvuDNy7Ug6RzKLm9R1Nxu0MFcpvyGLuyDe', 'Muaro Jambi', 'Jambi', 1599976580, 1599976580),
(93, 'K1506041101', 'Tanjung Jabung Timur', 2, '$2y$10$CL8sHVbUKnSHoxmtLG63Y..qe9BMhMDn4CS/8XxMptdTFna9H2Ve.', 'Tanjung Jabung Timur', 'Jambi', 1599976580, 1599976580),
(94, 'K1507040201', 'Tanjung Jabung Barat', 2, '$2y$10$IiS7NDdAHbBapiyO7oV0he/dDl8Xu0vzgJz.enhgjL7JdJ44dfRFG', 'Tanjung Jabung Barat', 'Jambi', 1599976580, 1599976580),
(95, 'K1508030101', 'Tebo', 2, '$2y$10$iv0CTxK5KIxatKTplckkU.NdcSk70t3HH0/lb6MWQ.eG0ADJCXiKy', 'Tebo', 'Jambi', 1599976581, 1599976581),
(96, 'K1509024201', 'Bungo', 2, '$2y$10$dSJolQvFtEUUEc4Viz4G9uMxBmmN.iXajK.CcY2fTZjDuLmkwhRJi', 'Bungo', 'Jambi', 1599976581, 1599976581),
(97, 'K1571020101', 'Kota Jambi', 2, '$2y$10$5wvLZciRasEuZ0yx3Z7Ta.ssZrTgNWNuo/AWP/GGPPzGheZnf3HVm', 'Kota Jambi', 'Jambi', 1599976581, 1599976581),
(98, 'K1572010201', 'Kota Sungai Penuh', 2, '$2y$10$xc/D/79Htd1LRqPL6Oo0FucvBrKI7vTZiufqlC1f3fTsCrkOg47ri', 'Kota Sungai Penuh', 'Jambi', 1599976581, 1599976581),
(99, 'K1601130202', 'Ogan Komering Ulu', 2, '$2y$10$0fkDgf01.wImDdLSW4ITv.6TzxajWjbVEmnk4bBJKmewbCegrjnWu', 'Ogan Komering Ulu', 'Sumatera Selatan', 1599976581, 1599976581),
(100, 'K1602060202', 'Ogan Komering Ilir', 2, '$2y$10$v.z3wKPey6OoyPxId06yjuCujCVP9iQZO4AnXVgooaTIF1qQX37jq', 'Ogan Komering Ilir', 'Sumatera Selatan', 1599976581, 1599976581),
(101, 'K1603050101', 'Muara Enim', 2, '$2y$10$od7HKpFNcuOfFEtp7BWeZOrt0LB7HzM4pSdPE3L11OOW7T/KhMkRm', 'Muara Enim', 'Sumatera Selatan', 1599976582, 1599976582),
(102, 'K1604120201', 'Lahat', 2, '$2y$10$RQVdZlin8LZrfkGmL2pK/OryPnlJEwWBXEZE404RUCG.gKV52MWF2', 'Lahat', 'Sumatera Selatan', 1599976582, 1599976582),
(103, 'K1605072101', 'Musi Rawas', 2, '$2y$10$y0vWGCKhBUfAksttuV1kiea4xE1yoncKxhIZP7VDYyhuTtM4H9EpO', 'Musi Rawas', 'Sumatera Selatan', 1599976582, 1599976582),
(104, 'K1606041201', 'Musi Banyuasin', 2, '$2y$10$KtNnAlBdJKrShO106qaZTeeCrZXDNG/BmFvjQ4YtQtmpxeFe4QpsK', 'Musi Banyuasin', 'Sumatera Selatan', 1599976582, 1599976582),
(105, 'K1607050101', 'Banyuasin', 2, '$2y$10$RSKCE4LZi5u7wU5MsddGLuNrmJoI3KbtNCaVIQn7LuSPCp4pIaBJu', 'Banyuasin', 'Sumatera Selatan', 1599976582, 1599976582),
(106, 'K1608050101', 'Ogan Komering Ulu Selatan ', 2, '$2y$10$ktkjrbzykL9KvHLrpZcijuAtDKY4HAgSaMhzyeg8cOJReayppzMxO', 'Ogan Komering Ulu Selatan ', 'Sumatera Selatan', 1599976582, 1599976582),
(107, 'K1609060201', 'Ogan Komering Ulu Timur', 2, '$2y$10$OR5oKkoKrNvPqK7eVo9LFu/CXOUXs.rVf6LXVoaeEucNdXTyqrL32', 'Ogan Komering Ulu Timur', 'Sumatera Selatan', 1599976582, 1599976582),
(108, 'K1610060101', 'Ogan Ilir', 2, '$2y$10$paoAGzXd2Oeifo88saMZA.rVTc7whbqgc/B8jjsvWvY3K1VtE1lxK', 'Ogan Ilir', 'Sumatera Selatan', 1599976583, 1599976583),
(109, 'K1611070201', 'Empat Lawang', 2, '$2y$10$eYEg5lhAcNoRcSAzbYlyaePUkBmX3Mi5XfQswh2WXhxGxpbFtWPt2', 'Empat Lawang', 'Sumatera Selatan', 1599976583, 1599976583),
(110, 'K1612050202', 'Penukal Abab Lematang Ilir', 2, '$2y$10$WnZQmV3yer9ijpgoj8AX7eFiGOPOPT/NFcSb/PIiBVcPHxF2FnazS', 'Penukal Abab Lematang Ilir', 'Sumatera Selatan', 1599976583, 1599976583),
(111, 'K1613021101', 'Musi Rawas Utara', 2, '$2y$10$EdMYSdoV9qXeLZIvGXU5M.tZq19iZXuFdP7tAmoEKWX1z5W.NhoQS', 'Musi Rawas Utara', 'Sumatera Selatan', 1599976583, 1599976583),
(112, 'K1671050202', 'Kota Palembang', 2, '$2y$10$IIvmi8VtLARtdb7wvQwOiOJDKnPZ9sF6B2u6FkmYblLYzyq3c1NMK', 'Kota Palembang', 'Sumatera Selatan', 1599976583, 1599976583),
(113, 'K1672020203', 'Kota Prabumulih', 2, '$2y$10$jPfHCsx9f3JZ59LxsQxIdu/4jV8M7j2BKu6EvqBB/EV2axJQmTcxu', 'Kota Prabumulih', 'Sumatera Selatan', 1599976583, 1599976583),
(114, 'K1673030101', 'Kota Pagar Alam', 2, '$2y$10$L2bbiJnNOyh2wLvzfB/1jONf.bBneAc7Y5Zu0GGgRBn4xf3BPBUl6', 'Kota Pagar Alam', 'Sumatera Selatan', 1599976584, 1599976584),
(115, 'K1674031201', 'Kota Lubuk Linggau', 2, '$2y$10$/PsMwyMoXK.p0SOkqVkhBe61IqPKsLqcNX.YLh3NcSwaoxVkmRaQ.', 'Kota Lubuk Linggau', 'Sumatera Selatan', 1599976584, 1599976584),
(116, 'K1701041202', 'Bengkulu Selatan ', 2, '$2y$10$ptfAoeiwsQVfbNtaChql2e.QUF1Xg/YM1/Bk4XtIvDgvKvE0jBTFC', 'Bengkulu Selatan ', 'Bengkulu', 1599976584, 1599976584),
(117, 'K1702040201', 'Rejang Lebong', 2, '$2y$10$S0o7cNy7tce7Lf/yf31pKOegpJfxpzZF6S2b5cTRLEHZmQJIIWlZm', 'Rejang Lebong', 'Bengkulu', 1599976584, 1599976584),
(118, 'K1703060201', 'Bengkulu Utara', 2, '$2y$10$h0Tvt55vMOM3kw6Be3jqOOGdgkqE8aXY.pPfmU08fq/hNejILN2tK', 'Bengkulu Utara', 'Bengkulu', 1599976584, 1599976584),
(119, 'K1704030101', 'Kaur', 2, '$2y$10$3ZBXqs1xe49oImtAys8Mbexf7yTzmLC5.RYXcpSSGIuBOSswBMxUK', 'Kaur', 'Bengkulu', 1599976584, 1599976584),
(120, 'K1705050202', 'Seluma', 2, '$2y$10$81OpIOr2hL31vPjtZeadmeKJxIJdqCJZUSEtOgrdmi3N.yqTkcm2O', 'Seluma', 'Bengkulu', 1599976585, 1599976585),
(121, 'K1706050101', 'Muko-Muko', 2, '$2y$10$xHr0MA9l9Zc9Jxzn5p9QeeG/U6fuhVpzG/5DaSFff4cVEssGJ69Zm', 'Muko-Muko', 'Bengkulu', 1599976585, 1599976585),
(122, 'K1707050101', 'Lebong', 2, '$2y$10$/t/kFQGmZNg5fK3BOEwUGOd0PxFKC.LCDSzMayxQzwXGsaTn2UE6S', 'Lebong', 'Bengkulu', 1599976585, 1599976585),
(123, 'K1708070201', 'Kepahiang', 2, '$2y$10$Vqsj13HGSOk1fCvItCHVouAdo00/pPxn/fFaikOHwavffUYw7PR6u', 'Kepahiang', 'Bengkulu', 1599976585, 1599976585),
(124, 'K1709050101', 'Bengkulu Tengah', 2, '$2y$10$qesTpZQdN.LsizpzIye3VujlCC4Lcmu04UYABwV92smlZDQe4wFYG', 'Bengkulu Tengah', 'Bengkulu', 1599976585, 1599976585),
(125, 'K1771020201', 'Kota Bengkulu', 2, '$2y$10$qaYaWUfUTXvfKBp7EpNPVOaTwboQnSmwdOnYpPwe7lnhQ/VG35bwW', 'Kota Bengkulu', 'Bengkulu', 1599976585, 1599976585),
(126, 'K1801061101', 'Lampung Barat', 2, '$2y$10$yOkahtDzhyxidmjI7DJsA.I9/U6ex/dQ.S1sOi7OdPZnxZs3JPOwS', 'Lampung Barat', 'Lampung', 1599976585, 1599976585),
(127, 'K1802020201', 'Tanggamus', 2, '$2y$10$2kqGsntN77gi44A9B2GB2.i7FTd3vmJkTaxaIaTVIx3QFCoVBATjq', 'Tanggamus', 'Lampung', 1599976586, 1599976586),
(128, 'K1803060201', 'Lampung Selatan', 2, '$2y$10$CiM9OtQmjRAluNMWYsenf.U4v225sJ4BTMoqy8EIMsBFgeJi6zDQK', 'Lampung Selatan', 'Lampung', 1599976586, 1599976586),
(129, 'K1804110201', 'Lampung Timur', 2, '$2y$10$K.5oViCSXCqKhVmQ3RS61eeDDmax2M4KTDQ2pEQr98DWDcPfm5jC2', 'Lampung Timur', 'Lampung', 1599976586, 1599976586),
(130, 'K1806042201', 'Lampung Utara', 2, '$2y$10$01V5cUePwelMPsahnTfukefzqBSCG73R9wMO.0JdtMoGPiKh8tKou', 'Lampung Utara', 'Lampung', 1599976586, 1599976586),
(131, 'K1807041101', 'Way Kanan', 2, '$2y$10$sz2Z8F7nPGLXvvk3xL7q8uNQIAI9KTSXBLdz345N32HPIvoSLbiR2', 'Way Kanan', 'Lampung', 1599976586, 1599976586),
(132, 'K1808030101', 'Tulang Bawang', 2, '$2y$10$1bqpX1ulzp7aUsppToy/FuGiYTUn/RdwHBsdrpu9o.htPtxgoslEu', 'Tulang Bawang', 'Lampung', 1599976586, 1599976586),
(133, 'K1809050202', 'Pesawaran', 2, '$2y$10$95zIxhPFyfy9d86OTuo8AO1U/D1Prw/sjEa3s8WIgLCdQ19T9vVOq', 'Pesawaran', 'Lampung', 1599976586, 1599976586),
(134, 'K1810060101', 'Pring Sewu', 2, '$2y$10$FxQtZAn6SCn22dKSfz7ak.pxUJFMo4I9J3ibq7r7F2iGGXoz55Gvi', 'Pring Sewu', 'Lampung', 1599976587, 1599976587),
(135, 'K1811020101', 'Mesuji', 2, '$2y$10$LJWMcVDaxYATI/Jkdogz5.0RPgoKnpQZm2R6SLEgsQ3hl1lQ/icQq', 'Mesuji', 'Lampung', 1599976587, 1599976587),
(136, 'K1812030101', 'Tulang Bawang Barat', 2, '$2y$10$31E2zQdqu.wztUvXkXHWeOtLbMmrsMkdxLvEmFrBOanuEelj3sQh6', 'Tulang Bawang Barat', 'Lampung', 1599976587, 1599976587),
(137, 'K1813090101', 'Pesisir Barat', 2, '$2y$10$b1VHru5EhZblX928N8TopO0rPnN/kJXlHosHkEKBobDenaliuO7ze', 'Pesisir Barat', 'Lampung', 1599976587, 1599976587),
(138, 'K1871080102', 'Kota Bandar Lampung', 2, '$2y$10$NCR4FwCZzSc2e/k8vFAwCud1/kszuoY7TmfV9jezPQfblqNll8Ok6', 'Kota Bandar Lampung', 'Lampung', 1599976587, 1599976587),
(139, 'K1872022201', 'Kota Metro', 2, '$2y$10$EUctml.VNur4piB1aLGG3uqsVOVw2kl79xjoyR79vKQARQ7rUb1Uq', 'Kota Metro', 'Lampung', 1599976588, 1599976588),
(140, 'K1901090201', 'Bangka', 2, '$2y$10$ZRTY7O60sLitewiLS2pmfOJUNRiQfGi5qnKIWTC0e4wRE33bAUXQe', 'Bangka', 'Bangka Belitung', 1599976588, 1599976588),
(141, 'K1902010101', 'Belitung', 2, '$2y$10$UtrRzPLyjJwE.VxyirpEpeT.ZlbbXjpIsJE035K7ppsEUlf5vldEK', 'Belitung', 'Bangka Belitung', 1599976588, 1599976588),
(142, 'K1903050101', 'Bangka Barat', 2, '$2y$10$2CzGlp2SKuf4exUbsDceB.IXp0Z62wQgUWk4IfTG2kbMjVLYdqrla', 'Bangka Barat', 'Bangka Belitung', 1599976588, 1599976588),
(143, 'K1904020201', 'Bangka Tengah', 2, '$2y$10$QROsUbz4VOuOjP/9y6q26eo6bj2X33GbbL3d1uVtTpFRdnYjm3AZS', 'Bangka Tengah', 'Bangka Belitung', 1599976589, 1599976589),
(144, 'K1905010101', 'Bangka Selatan', 2, '$2y$10$cxUSTOG0RxzdEYZjTC4DouF9qXDhqBroVk8FZiWC9AwQGazq8lM2G', 'Bangka Selatan', 'Bangka Belitung', 1599976589, 1599976589),
(145, 'K1906030201', 'Belitung Timur', 2, '$2y$10$fD7mG1w5qt717G0fAcD9rO9YSGNLfVljfaUci/guE6e2bYYe7PKcK', 'Belitung Timur', 'Bangka Belitung', 1599976589, 1599976589),
(146, 'K1971021201', 'Kota Pangkal Pinang', 2, '$2y$10$OH0T5g78NO171UpeBxA8kOwL9Xu77GvEMzEG8GLi2j2ZknqAYM3pW', 'Kota Pangkal Pinang', 'Bangka Belitung', 1599976589, 1599976589),
(147, 'K2101030101', 'Karimun', 2, '$2y$10$jKmUt0qz7Lqi6Hnad4HpKuSnrsa7yG5TkdW1WnQZZbdnt.UDshCGW', 'Karimun', 'Kepulauan Riau', 1599976589, 1599976589),
(148, 'K2102052201', 'Bintan', 2, '$2y$10$ES9eyx2FZckbUwC0sRjpq.7QMod8shWiubyX6.U6wYZORsmWcbtYG', 'Bintan', 'Kepulauan Riau', 1599976590, 1599976590),
(149, 'K2103050101', 'Natuna', 2, '$2y$10$oI040HdJ909KMbT8gdBY6uuIUoK9jc7GW4g48uFdbaVCAPjiAwMHm', 'Natuna', 'Kepulauan Riau', 1599976590, 1599976590),
(150, 'K2104020202', 'Lingga', 2, '$2y$10$c1hWvv45DoX84NjOSkmdUOLX2us.Gx.i078ok/SQ6OBlllwTHTeeO', 'Lingga', 'Kepulauan Riau', 1599976590, 1599976590),
(151, 'K2105070101', 'Kep. Anambas', 2, '$2y$10$noEMwinStXBDisb4ZZqDyeTBxOON/28LbwkKMKzf1eWD/vK2.6gkS', 'Kep. Anambas', 'Kepulauan Riau', 1599976591, 1599976591),
(152, 'K2171060201', 'Kota Batam', 2, '$2y$10$CF25Efb9RN/5wq6CofjEUeBfK0rAlcE4vQkPLznvapbotry5z9Fai', 'Kota Batam', 'Kepulauan Riau', 1599976591, 1599976591),
(153, 'K2172020201', 'Kota Tanjung Pinang', 2, '$2y$10$R6JDfZ9Md15JVakoq/4G0e4suyw.J8ZEWxEDXxuB42TfSU3qNrfD2', 'Kota Tanjung Pinang', 'Kepulauan Riau', 1599976591, 1599976591),
(154, 'K3101020201', 'Kepulauan Seribu', 2, '$2y$10$tYOCSIJmhqFwefSXxW.TDeINfKTwb7oAV4yFQKvBTMIwS91jx.lsK', 'Kepulauan Seribu', 'DKI Jakarta', 1599976592, 1599976592),
(155, 'K3171010101', 'Jakarta Selatan', 2, '$2y$10$cDuv29ELhFfjPcbYJB8Jxey1MtCoV1sQaX/zm.FKBm344VtqcKYXi', 'Jakarta Selatan', 'DKI Jakarta', 1599976592, 1599976592),
(156, 'K3172060201', 'Jakarta Timur', 2, '$2y$10$mxGCY3fWqdTa/UcWWKsZTulrm5hovKczBs/WbAVVIf6f6XLhJ3VIy', 'Jakarta Timur', 'DKI Jakarta', 1599976592, 1599976592),
(157, 'K3173010201', 'Jakarta Pusat', 2, '$2y$10$Ue1lpOJuzpNB1nJhzSdYSeI.dEZBco8lAOK42IwdCyYwEeB.CeUR.', 'Jakarta Pusat', 'DKI Jakarta', 1599976593, 1599976593),
(158, 'K3174080101', 'Jakarta Barat', 2, '$2y$10$lA1zDzPDUuM1ETtPo.gA/O8gXgkyuDetMbvzmNKIc2BQ/fUSo75Ca', 'Jakarta Barat', 'DKI Jakarta', 1599976593, 1599976593),
(159, 'K3175030101', 'Jakarta Utara', 2, '$2y$10$UtjTjZKnhwHZAXh4woEv.OVMNZBz0rAWkxVrIgLg8CA53EAOAxGU.', 'Jakarta Utara', 'DKI Jakarta', 1599976593, 1599976593),
(160, 'K3202140201', 'Sukabumi', 2, '$2y$10$xEEVeTLReVtursH0J11JxeS6lFKFBM/v3U8FsaKHxVKLMM6IqnsyS', 'Sukabumi', 'Jawa Barat', 1599976594, 1599976594),
(161, 'K3203200201', 'Cianjur', 2, '$2y$10$QXtt5tVGTCsQzfPcewZTdO47aJAyUVF3rJ1whjUYmy162U/rWUFU.', 'Cianjur', 'Jawa Barat', 1599976594, 1599976594),
(162, 'K3204110101', 'Bandung', 2, '$2y$10$cthntnKyhKJ08VTrzXiXTONlDBSrbd2FHQQ5VZMC/t9sC03/mhD/i', 'Bandung', 'Jawa Barat', 1599976594, 1599976594),
(163, 'K3205190201', 'Garut', 2, '$2y$10$GGeH3inTxI3ZXVUav4wkNerp6C4PT1nPMHNjS9.6cCUi7Y3PVf9CG', 'Garut', 'Jawa Barat', 1599976595, 1599976595),
(164, 'K3206240101', 'Tasikmalaya', 2, '$2y$10$EwIpUcagfMJk0kS.agtgAOQ4cXbsLzy/RLad9DhftRz/iNePKmYDm', 'Tasikmalaya', 'Jawa Barat', 1599976595, 1599976595),
(165, 'K3207210201', 'Ciamis', 2, '$2y$10$B.pUtPInysWlFSNThQQoxe.F86T2prNjmUJYwNxJlhnhHzeavwrYa', 'Ciamis', 'Jawa Barat', 1599976595, 1599976595),
(166, 'K3208140201', 'Kuningan', 2, '$2y$10$oXSVK81g0pvoX8PaAunime8k4mfoA2nSYAQI3BtKMDyxZJ9Hc6lx6', 'Kuningan', 'Jawa Barat', 1599976595, 1599976595),
(167, 'K3209140101', 'Cirebon', 2, '$2y$10$8qmpb9209cHVMM6d.M7EnuO9dwqLCi9aXjmzAB47snHPLv6pOZmVS', 'Cirebon', 'Jawa Barat', 1599976596, 1599976596),
(168, 'K3210070201', 'Majalengka', 2, '$2y$10$eK/7bFrN5qVCrHsM1i9z0..ChVyhma79sjv/J/oQPIdc6DsUDproC', 'Majalengka', 'Jawa Barat', 1599976596, 1599976596),
(169, 'K3211010101', 'Sumedang', 2, '$2y$10$sOh9FDv3LgQdHQ.xWUDET.mgxbrlwsyhH7F82FbJXDmtqUitRI3.C', 'Sumedang', 'Jawa Barat', 1599976596, 1599976596),
(170, 'K3212041101', 'Indramayu ', 2, '$2y$10$pt5Z54/k8IDe63RnREn6pOeia5DBDrdZqiVFsqcZ0UkTqAXskzYqW', 'Indramayu ', 'Jawa Barat', 1599976596, 1599976596),
(171, 'K3213170101', 'Subang', 2, '$2y$10$ne1NzP9kfFXVsRHnj1LwielHmTXgtN2WEihTI1sBBlMSnosqTaCym', 'Subang', 'Jawa Barat', 1599976597, 1599976597),
(172, 'K3214050101', 'Purwakarta', 2, '$2y$10$IPxzUaTGRB.Sq0JlfhYNj.urfmv8aWRXEyBT5jKPS8Etr78s2fA0e', 'Purwakarta', 'Jawa Barat', 1599976597, 1599976597),
(173, 'K3215051201', 'Karawang', 2, '$2y$10$m/dJbIw.47foSyMr583de.KGaTFGHbD/S2UtKVOcJ7bjRhwoSyKb.', 'Karawang', 'Jawa Barat', 1599976597, 1599976597),
(174, 'K3216061102', 'Bekasi', 2, '$2y$10$PqvGsm23ZvCc2f/ZYtY8e.mWy4ckQSzDAcvDF7032lpQ2EcnCMjlu', 'Bekasi', 'Jawa Barat', 1599976597, 1599976597),
(175, 'K3217070201', 'Bandung Barat', 2, '$2y$10$PujVdP67kEAYoig6wCwt6uoGv6yVQUsyxrhIcrEBhvHRocQx55LDW', 'Bandung Barat', 'Jawa Barat', 1599976597, 1599976597),
(176, 'K3218080101', 'Pangandaran', 2, '$2y$10$JaN09fRloIPeteA2c1ouSO0.4MU8UcH0Vu1IO9huBxWg83cQBUOyG', 'Pangandaran', 'Jawa Barat', 1599976598, 1599976598),
(177, 'K3271060101', 'Kota Bogor', 2, '$2y$10$XCJOdpLJ1yO0hmMcSTCAKOQM8K8SR7jzxcN.bCoLWQJOUrjPIFnjK', 'Kota Bogor', 'Jawa Barat', 1599976598, 1599976598),
(178, 'K3272050202', 'Kota Sukabumi', 2, '$2y$10$L.onD6EknyozMCNHIxyHNOGKE.TX2fJyxwNHJwxjStuZU44nmeyVy', 'Kota Sukabumi', 'Jawa Barat', 1599976598, 1599976598),
(179, 'K3273180202', 'Kota Bandung', 2, '$2y$10$Px5qWloSalQQ8qe1pNdVduqVOejnm40xfLjr5BvSLZQDvyQTkbwJi', 'Kota Bandung', 'Jawa Barat', 1599976599, 1599976599),
(180, 'K3274050201', 'Kota Cirebon', 2, '$2y$10$/MByIJ.iv/Kn/sS3gRPeyOB0xQHSKEZDp4sfeIwOjhRpq536UusAC', 'Kota Cirebon', 'Jawa Barat', 1599976599, 1599976599),
(181, 'K3275040203', 'Kota Bekasi', 2, '$2y$10$QYQjuMoNyHksagUW2/L5/euX3X9u.yqcBUsQGvM3gLpHVX8HNQf.2', 'Kota Bekasi', 'Jawa Barat', 1599976599, 1599976599),
(182, 'K3276040101', 'Kota Depok', 2, '$2y$10$X9y0znBs4wQ5TZInltvLrulc9x/.9JeLzrHysdiUg5TUWeyv5w2.y', 'Kota Depok', 'Jawa Barat', 1599976599, 1599976599),
(183, 'K3277020201', 'Kota Cimahi', 2, '$2y$10$wAlksclG47x1QN69bXgCyurRm1q24UZy7oS0xz7Hq6jkF2tCGi3Eu', 'Kota Cimahi', 'Jawa Barat', 1599976599, 1599976599),
(184, 'K3277030204', 'Bogor', 2, '$2y$10$8o0Yr8up81gGPh1Pdu4F.uwykskn6gqMUndLSwqQI/6vdIK5MXQNy', 'Bogor', 'Jawa Barat', 1599976600, 1599976600),
(185, 'K3278010201', 'Kota Tasikmalaya', 2, '$2y$10$7HIqgjC8ooskokxn7LEmfeWuRxUUF0zdVrD9QBE7TM5zCzccEUn..', 'Kota Tasikmalaya', 'Jawa Barat', 1599976600, 1599976600),
(186, 'K3279010203', 'Kota Banjar', 2, '$2y$10$WbWzoLU/6pA8oK9yLBl0XONhJT51QVvV2NqimYOy7WKR9bnLB1QOa', 'Kota Banjar', 'Jawa Barat', 1599976600, 1599976600),
(187, 'K3301730201', 'Cilacap', 2, '$2y$10$gTXJ1/0hYvtktple6T6njO4o5mxgAMIBjK7aVLWAaJZpPz18hIgeK', 'Cilacap', 'Jawa Tengah', 1599976600, 1599976600),
(188, 'K3302060101', 'Banyumas', 2, '$2y$10$m6.LeTwj7IsbsDckACUxxu0OPOqh1RXVCS4CIXPXBjLoGJ8AaY5jK', 'Banyumas', 'Jawa Tengah', 1599976601, 1599976601),
(189, 'K3303060201', 'Purbalingga', 2, '$2y$10$M.AJSPCJ9VjWZaTAvrJwIuGszXfMq.mJZhz9GLaIbCx78smdaiMnS', 'Purbalingga', 'Jawa Tengah', 1599976601, 1599976601),
(190, 'K3304060201', 'Banjarnegara', 2, '$2y$10$JAhbBWj/AXMXlXkcRJZCZeYms.Teo/RxgsJOJcJZyy6sV9H3l3hzm', 'Banjarnegara', 'Jawa Tengah', 1599976601, 1599976601),
(191, 'K3305100101', 'Kebumen', 2, '$2y$10$uDWV1OCl.DbVd.EsaTw9peLWlP5mr.XE8Fhp7iD2TTBlcCnS2UQLq', 'Kebumen', 'Jawa Tengah', 1599976601, 1599976601),
(192, 'K3306110101', 'Purworejo', 2, '$2y$10$4HEPa1Iv5lMlMks5ikwImOb0j9b0HDUDyP5PjYfeR12r9lFbgXsZC', 'Purworejo', 'Jawa Tengah', 1599976602, 1599976602),
(193, 'K3307040101', 'Wonosobo', 2, '$2y$10$plgLbCAFLwEPMvJwXMLP2eP0X1MSGN9tOX4x26ANULKM3rPj2aqO6', 'Wonosobo', 'Jawa Tengah', 1599976602, 1599976602),
(194, 'K3308020101', 'Magelang', 2, '$2y$10$BSwA5Ykk2TgM/U1GCC.MKuuphf4mZXQEi1LLjZZoMZYK8rc7eoYxu', 'Magelang', 'Jawa Tengah', 1599976602, 1599976602),
(195, 'K3309060201', 'Boyolali', 2, '$2y$10$Jsxng6J2aOXZFEf68bt3JuUeTCHQ/7aWY5kESaRuPVioHa0jTAL1e', 'Boyolali', 'Jawa Tengah', 1599976602, 1599976602),
(196, 'K3310160101', 'Klaten', 2, '$2y$10$TvX1At46akpej4gROJKAWeeoGioqCQ8/ElRsXekZtXUtAUBT23wRm', 'Klaten', 'Jawa Tengah', 1599976603, 1599976603),
(197, 'K3311040201', 'Sukoharjo', 2, '$2y$10$RQ6/9Y7.oEXa2A4AOTUG9u5nlxbP6o.d3Np1YhSa1mcIqqzhzr3b.', 'Sukoharjo', 'Jawa Tengah', 1599976603, 1599976603),
(198, 'K3312140201', 'Wonogiri', 2, '$2y$10$YeY.skA2bnKzwDDWJiCy.eNYslUkAEmqYeyz04dcJc6JshpMONLWO', 'Wonogiri', 'Jawa Tengah', 1599976603, 1599976603),
(199, 'K3313160101', 'Karanganyar', 2, '$2y$10$HaAqvW4QLz3l1LlvKf84pusUrTBFv6haK6j586vQ7IzPRnDUcP4Su', 'Karanganyar', 'Jawa Tengah', 1599976603, 1599976603),
(200, 'K3314040101', 'Sragen', 2, '$2y$10$h5Ph2sqyMJFXFBIWSHO.VuiZxT12vkwp7yDaxYECPJWg11FCJaT0S', 'Sragen', 'Jawa Tengah', 1599976604, 1599976604),
(201, 'K3315160101', 'Grobogan', 2, '$2y$10$O2JSRMn6/xz4XEzYN5hc1euV8/yQ0r2Ab2D4bScvmzifDIutKZxsy', 'Grobogan', 'Jawa Tengah', 1599978448, 1599978448),
(202, 'K3316150101', 'Blora', 2, '$2y$10$chILylxVoPf4x3XY1J7mdOZMPc1D6HeeNcFgzMREVi43iBMRj2JXi', 'Blora', 'Jawa Tengah', 1599978448, 1599978448),
(203, 'K3317120102', 'Rembang', 2, '$2y$10$okY26qRTO6TAj47RTfYkieJoTR0a6Zfy4Gck2YgAj8CW/GXuxDWWK', 'Rembang', 'Jawa Tengah', 1599978448, 1599978448),
(204, 'K3318120201', 'Pati', 2, '$2y$10$4XeHQRKFUZoIL9yo6sx3ZOmCbKLVYLB.uHtAS/olTe9OJVixdleQ6', 'Pati', 'Jawa Tengah', 1599978448, 1599978448),
(205, 'K3319010201', 'Kudus', 2, '$2y$10$VSdc9RTJnEpV1snmcHd/cugxYlC7/f9SxkHkRSg6bR4ZLV2jn.nYW', 'Kudus', 'Jawa Tengah', 1599978449, 1599978449),
(206, 'K3320060101', 'Jepara', 2, '$2y$10$lwtYv3kjBjJNyc/l1B8Y0e33/bQg8qKX1ecX.AYzeBoLiGV/k5eHa', 'Jepara', 'Jawa Tengah', 1599978449, 1599978449),
(207, 'K3321091101', 'Demak', 2, '$2y$10$ZoblXaat/cQp6VtVPMnwhOyayuN2VCd/qMk6B7B.VTtNFQvnIw28u', 'Demak', 'Jawa Tengah', 1599978449, 1599978449),
(208, 'K3322140101', 'Semarang', 2, '$2y$10$MiBtpRy6xKXE3Vv4Wq/Tz.hq1PLJuM/dbB9pFMEC91rsv.OX9efBa', 'Semarang', 'Jawa Tengah', 1599978449, 1599978449),
(209, 'K3323010201', 'Temanggung', 2, '$2y$10$iL4EExruPAgbkgtH0aEQYOc4rACOfv.t05dwQmGR/C1PIziT22zXC', 'Temanggung', 'Jawa Tengah', 1599978449, 1599978449),
(210, 'K3324040101', 'Kendal', 2, '$2y$10$Ge2fy6i4j3sOPC38MP4z0efna/N/esHJiqRzg036oN22fDSlzH8Gu', 'Kendal', 'Jawa Tengah', 1599978449, 1599978449),
(211, 'K3325090101', 'Batang', 2, '$2y$10$t86H1Q6UnPThFfj2.evXSe3xQFm4IQ6LV8fY0CU4xkUAHtKvD3YxW', 'Batang', 'Jawa Tengah', 1599978449, 1599978449),
(212, 'K3326150201', 'Pekalongan', 2, '$2y$10$miLSMajdpY/aqnu.J5xYQe1Vn5vFMYiA8anoZcUZULP3KUt8T1nEq', 'Pekalongan', 'Jawa Tengah', 1599978450, 1599978450),
(213, 'K3327080203', 'Pemalang', 2, '$2y$10$GPaRl82.GfS/yxcIv.S7C.55br7J6wJzuHZKt2HwAPtVbKsR.ex/K', 'Pemalang', 'Jawa Tengah', 1599978450, 1599978450),
(214, 'K3328120201', 'Tegal', 2, '$2y$10$WEZMZ2N3mZkEwMLRzkFzNu13XHtczdYJ7f/kuFO2D0xr2HIcGr5qG', 'Tegal', 'Jawa Tengah', 1599978450, 1599978450),
(215, 'K3329170201', 'Brebes', 2, '$2y$10$zNovvrKIbYIS69SDuw2qSutxwnBxSBsOE1l/Tf1Ycu0Tvz.FMP3hS', 'Brebes', 'Jawa Tengah', 1599978450, 1599978450),
(216, 'K3371020201', 'Kota Magelang', 2, '$2y$10$dNsicXfgEKw16L9Jjw/Y0Op.iGvWZhq07/Wq/MBRPdVwHrM0uz.Di', 'Kota Magelang', 'Jawa Tengah', 1599978450, 1599978450),
(217, 'K3372030202', 'Kota Surakarta', 2, '$2y$10$Ib59REWAplf4rRscazxSWedQ5oIB47Qe0WyKq2fQjOCA0ivCuNC4W', 'Kota Surakarta', 'Jawa Tengah', 1599978450, 1599978450),
(218, 'K3373020201', 'Kota Salatiga', 2, '$2y$10$aiTvBHgtu4xd6bRqYiwJ.eEhqImnMhlealbt7jvD/PGLvzJ8Ev0H.', 'Kota Salatiga', 'Jawa Tengah', 1599978451, 1599978451),
(219, 'K3374140203', 'Kota Semarang', 2, '$2y$10$ssc6bJQIBGRfNXcoKPhbUeMqYPAmeqK0iFsRDf4LYro7/E3qsFxoS', 'Kota Semarang', 'Jawa Tengah', 1599978451, 1599978451),
(220, 'K3375020104', 'Kota Pekalongan', 2, '$2y$10$b34Rnh.sICmgH7ysyoP5MeBbqlxKURJsjkDOBIqB/G1TBm78M9Bga', 'Kota Pekalongan', 'Jawa Tengah', 1599978451, 1599978451),
(221, 'K3376030201', 'Kota Tegal', 2, '$2y$10$9Ibyz7fWaQRuHmBMheaS/OKe9A6eu92748qH.Tj/sqobO.p9pr0HK', 'Kota Tegal', 'Jawa Tengah', 1599978451, 1599978451),
(222, 'K3401110201', 'Kulon Progo', 2, '$2y$10$MF/VxEVno8Xq50XZn0CmeeTqG3yGpahRwtdSVNwBWrJ2yv8.KwxK2', 'Kulon Progo', 'DI Yogyakarta', 1599978451, 1599978451),
(223, 'K3402070103', 'Bantul', 2, '$2y$10$T357tId7FQfyFNB9l49VVuLXQON/ueLFtY5MlaIvKIEpHJYyhktZy', 'Bantul', 'DI Yogyakarta', 1599978451, 1599978451),
(224, 'K3403060101', 'Gunung Kidul', 2, '$2y$10$Fe9MiPIPMfuIgJm0xV7c8.N43O5mpol/A8VohTMhLYVTvkbWE6WgK', 'Gunung Kidul', 'DI Yogyakarta', 1599978452, 1599978452),
(225, 'K3404060101', 'Sleman', 2, '$2y$10$AVra20fTKNBSjg7NI/IWs.CZwLVl9jqellQm1L/0o3IEqNspOQs5C', 'Sleman', 'DI Yogyakarta', 1599978452, 1599978452),
(226, 'K3471140101', 'Kota Yogyakarta', 2, '$2y$10$/iLfR9rB6WdUoPNrqYQdOeYldEo2WmzVMA9FQRKT2onmKBe3YDFxu', 'Kota Yogyakarta', 'DI Yogyakarta', 1599978452, 1599978452),
(227, 'K3501100202', 'Pacitan', 2, '$2y$10$nWLeJmaiukZ0ABqvFztlreG8MOHe9aUxoMeG1ycF47xNPG683PjH.', 'Pacitan', 'Jawa Timur', 1599978452, 1599978452),
(228, 'K3502120101', 'Ponorogo', 2, '$2y$10$TMxJzQmH2jpfMsvzFpzwmOF9CQFZYWQzKmeY2l7Vurlzc7Zq4dqrG', 'Ponorogo', 'Jawa Timur', 1599978452, 1599978452),
(229, 'K3503070101', 'Trenggalek', 2, '$2y$10$FID5mucPTZ6VfMu9QV9F7uc8DaKqT/jHQzU2CUkDzoUMEOdMFNJuK', 'Trenggalek', 'Jawa Timur', 1599978453, 1599978453),
(230, 'K3505200101', 'Blitar', 2, '$2y$10$ImBQaOF2juQ2PKKtHczAruSE.IMLzdtDyIfx7dbpAZq3B1KOTS.BK', 'Blitar', 'Jawa Timur', 1599978453, 1599978453),
(231, 'K3506201201', 'Kediri', 2, '$2y$10$sjlPr5uaJX/lEFCYQz8.UOANA8H3CohBaGznOAi06EFbz2kSoV9ya', 'Kediri', 'Jawa Timur', 1599978453, 1599978453),
(232, 'K3507240101', 'Malang', 2, '$2y$10$uiZq.cOuAE3vSDOCHEf0TeEx18cz2kWCvlNnuZM/jdA.Iq6k57p4e', 'Malang', 'Jawa Timur', 1599978453, 1599978453),
(233, 'K3508060101', 'Lumajang', 2, '$2y$10$aaHWkAz/oUuChlZEQbI98.qk07ZuYsk9Sqb1a1SHR1I0UWcBDyfLq', 'Lumajang', 'Jawa Timur', 1599978453, 1599978453),
(234, 'K3509710201', 'Jember', 2, '$2y$10$XUPai7gmBpo117Lct2yrFuLmJlCGKbLgJDa.JBvucNPuur9CB0Akm', 'Jember', 'Jawa Timur', 1599978454, 1599978454),
(235, 'K3510120101', 'Banyuwangi', 2, '$2y$10$CyLVuJlrHNVe4rVa4FQzju43xEQt/v9hcOUrHsBhLEfVBnpCBMcEi', 'Banyuwangi', 'Jawa Timur', 1599978454, 1599978454),
(236, 'K3511160101', 'Bondowoso', 2, '$2y$10$qIChymLvfyJt86qn9C.dS.5H/YgJJ9qK2sJo2vN8zTcrs6sxBhaVK', 'Bondowoso', 'Jawa Timur', 1599978454, 1599978454),
(237, 'K3512160101', 'Situbondo', 2, '$2y$10$UTmJy6B6CsES6sC3zTXMw.kLzR9E4v8MOsgACv3SufXSKoccKfKOy', 'Situbondo', 'Jawa Timur', 1599978454, 1599978454),
(238, 'K3513180101', 'Probolinggo', 2, '$2y$10$4hpPt3/UXxfRfjVY71v0duAVXTBwpCIKkEXmxQtCUa0Ze21P9jMR.', 'Probolinggo', 'Jawa Timur', 1599978454, 1599978454),
(239, 'K3514090101', 'Pasuruan', 2, '$2y$10$i5/7x5P8leDDyGcQmckyQO.Ji/9v0SCOKU4tjLArXFSSwfdEK8YXq', 'Pasuruan', 'Jawa Timur', 1599978454, 1599978454),
(240, 'K3515160101', 'Sidoarjo', 2, '$2y$10$2eihA82R3TYgZhbWbsGmSeECv8/LRAxo4f.auNUZ8NyQnS1/dsx1u', 'Sidoarjo', 'Jawa Timur', 1599978454, 1599978454),
(241, 'K3516090101', 'Mojokerto', 2, '$2y$10$ZZJ4dei3xq2th0cYJmWzOOV2o5CHVrgfhlKGd5OeuKY7aaNuijT0i', 'Mojokerto', 'Jawa Timur', 1599978455, 1599978455),
(242, 'K3517070101', 'Jombang', 2, '$2y$10$KLYYrtgJJ7GYIQiEvyMm0OQnn6//YGiJ9j8YxYKZzaSsdrcOJER5i', 'Jombang', 'Jawa Timur', 1599978455, 1599978455),
(243, 'K3518140201', 'Nganjuk', 2, '$2y$10$obZ9QjIT13iPOPX78lQqNOgMT8EPwpZmx.SwB.yUqZGf0915z/XH.', 'Nganjuk', 'Jawa Timur', 1599978455, 1599978455),
(244, 'K3519120101', 'Madiun', 2, '$2y$10$lpzlAAIEdKMQ8QE0P5/Vf.GE88akbwQm5Ja2SHa/YQs6LK.FInvnm', 'Madiun', 'Jawa Timur', 1599978455, 1599978455),
(245, 'K3520120101', 'Magetan', 2, '$2y$10$hVQem/2yVNGN9ReEnjbXde4RKDHCNeTgZarNHoQ8QSbkzCjqqWtIS', 'Magetan', 'Jawa Timur', 1599978455, 1599978455),
(246, 'K3521100101', 'Ngawi', 2, '$2y$10$VLAGrVuX4hJqfrhuZecPsehsj.Zx/Aj01e.9.IC7vCj3dyElOIgfi', 'Ngawi', 'Jawa Timur', 1599978455, 1599978455),
(247, 'K3522130201', 'Bojonegoro', 2, '$2y$10$OezN.Njjq0e.cv0wFNa11.bIpmx/wrqokZJzDjJyuSl8Xv5L.48oa', 'Bojonegoro', 'Jawa Timur', 1599978456, 1599978456),
(248, 'K3523130201', 'Tuban', 2, '$2y$10$IwfOaA1uvXlK5D04ik6Q0.rM2Cg/zgqRCHU1yC5Upk2ehC.t/GsbO', 'Tuban', 'Jawa Timur', 1599978456, 1599978456),
(249, 'K3524150101', 'Lamongan', 2, '$2y$10$6tGRqP91/P1LKIbrnkXzi.mbMXLj8nJIZiRljoxIsP.PhuGL6Z/Qi', 'Lamongan', 'Jawa Timur', 1599978456, 1599978456),
(250, 'K3525110201', 'Gresik', 2, '$2y$10$4BNL671IOCod1Nevxn/ene/mAT8jANZtu20vqHXoNjlIVcDf5P7DC', 'Gresik', 'Jawa Timur', 1599978456, 1599978456),
(251, 'K3526050101', 'Bangkalan', 2, '$2y$10$WsMUzq00kLsqArNQ0ULmU.lxL006U244hGh..kkbkUei7kPS7wxQ.', 'Bangkalan', 'Jawa Timur', 1599978456, 1599978456),
(252, 'K3527030202', 'Sampang', 2, '$2y$10$IIEY1wOk6FDfflq1aJQkUe/4GhsS8Tr5cCDpagTb.qtYPQYMTzSXy', 'Sampang', 'Jawa Timur', 1599978456, 1599978456),
(253, 'K3528070101', 'Pamekasan', 2, '$2y$10$FQHHjb/CrPFpxgF9moS45ObOSmHSdtoVs4O1/5tGylr2coO7vskDq', 'Pamekasan', 'Jawa Timur', 1599978457, 1599978457),
(254, 'K3529020101', 'Sumenep', 2, '$2y$10$f81jJrqww8shpRezyuKy.egflYjAHSa2f19KQtOqe3YgbCIYyToP.', 'Sumenep', 'Jawa Timur', 1599978457, 1599978457),
(255, 'K3571010202', 'Kota Kediri', 2, '$2y$10$ED.k4HgnCu8GqL6hZQhu8.Imw89v.MwfNx9n/aYtuwbZwcNw3CmSK', 'Kota Kediri', 'Jawa Timur', 1599978457, 1599978457),
(256, 'K3572030101', 'Kota Blitar', 2, '$2y$10$.YWLgeZHPfduja7F6fsieOkXTUJMsZf7xyZtlfUjYdoxocXNzPTHO', 'Kota Blitar', 'Jawa Timur', 1599978457, 1599978457),
(257, 'K3573020201', 'Kota Malang', 2, '$2y$10$Z8Zd9SNYJcE60awIfgW1L.O0PqmXbLtXbkfTbm54wvQxOC5v2Uraq', 'Kota Malang', 'Jawa Timur', 1599978457, 1599978457),
(258, 'K3574020101', 'Kota Probolinggo', 2, '$2y$10$JkeJCqFzNuGfFAcRZJuC2e5.ANLzxvkNHmCy1w5eBozjwtC9GB03q', 'Kota Probolinggo', 'Jawa Timur', 1599978457, 1599978457),
(259, 'K3575010201', 'Kota Pasuruan', 2, '$2y$10$2uwPYddQMqqMDS9JISEIpeSt/LfoThUUkJTJfWi5.urj2fb62OxFu', 'Kota Pasuruan', 'Jawa Timur', 1599978458, 1599978458),
(260, 'K3576020102', 'Kota Mojokerto', 2, '$2y$10$oh4EZMrb4wwgySJ3EDVLd.6eOQOZDgKZ2vviW1kO7w0UWujW2MDPm', 'Kota Mojokerto', 'Jawa Timur', 1599978458, 1599978458),
(261, 'K3577030102', 'Kota Madiun', 2, '$2y$10$QXshNKm9XIa1MwSNCoEnlugomgHE6wEGXzzQEk9/Ssox2UOBvlmD6', 'Kota Madiun', 'Jawa Timur', 1599978459, 1599978459),
(262, 'K3578110101', 'Kota Surabaya', 2, '$2y$10$Kk2GLLyWDyfr/ppGcMRGqeCqwBW2hB2q4aD/v1JUBOBcJQ6qvkrM.', 'Kota Surabaya', 'Jawa Timur', 1599978459, 1599978459),
(263, 'K3579020102', 'Kota Batu', 2, '$2y$10$fpaFXUGtkQ6jhRpEPhrUW.On/7w2qD1aky4jcO4WKfI7JxEXJQQpa', 'Kota Batu', 'Jawa Timur', 1599978459, 1599978459),
(264, 'K3601171201', 'Pandeglang', 2, '$2y$10$Eu0/PmeIW5Zneq4muLDZ0.nAis.IxVI0q8Hc3McziMdjRju.XQzbG', 'Pandeglang', 'Banten', 1599978459, 1599978459),
(265, 'K3602170202', 'Lebak', 2, '$2y$10$d1f8qSjqkmnC3r.7YRcJSuDZC0eK6BBaO3DCy/.tvlC2uJ/7V2Aaa', 'Lebak', 'Banten', 1599978460, 1599978460),
(266, 'K3603130102', 'Tangerang', 2, '$2y$10$DFZYFGVgbeC64Y9K9qUItutAjMtFPzh/.pynNUu7WszUzg5RXOOwm', 'Tangerang', 'Banten', 1599978460, 1599978460),
(267, 'K3604240101', 'Serang', 2, '$2y$10$HUijkL9OaGk8826p/JitD.xZQ3NHE2wOUoGvVdJo1YF2oT4ndMBJu', 'Serang', 'Banten', 1599978460, 1599978460),
(268, 'K3671051202', 'Kota Tangerang', 2, '$2y$10$Ga8BKbLY2Nf0eYaoxZXaTeHN7rp1Axaf1QKsvpJJ5PvVHXWChSTsu', 'Kota Tangerang', 'Banten', 1599978460, 1599978460),
(269, 'K3672040101', 'Kota Cilegon', 2, '$2y$10$V8f86vVvqcGE2CloZ.ONXOCH.t.HqfRPZ9yeq1bXCTz09kCYV5PQ.', 'Kota Cilegon', 'Banten', 1599978461, 1599978461),
(270, 'K3673040104', 'Kota Serang', 2, '$2y$10$GAUz17GbsPPNs6TFu/hkQOU9P/OXhLozmqj/YghqABbpDGY2tprWG', 'Kota Serang', 'Banten', 1599978461, 1599978461),
(271, 'K3674070101', 'Kota Tangerang Selatan', 2, '$2y$10$Gr/Ivwoy7yvJZe4iwOblUe1Xr.EPXxtrTtQ6Vl7GfgRfLHFZK7C7.', 'Kota Tangerang Selatan', 'Banten', 1599978461, 1599978461),
(272, 'K5101010101', 'Jembrana', 2, '$2y$10$v2ae3addJVHP/I3FB6067Ow2bk2jynfsYpmpI8DaL6U9xtfMYS9fS', 'Jembrana', 'Bali', 1599978461, 1599978461),
(273, 'K5102030103', 'Tabanan', 2, '$2y$10$puEBQAGXineTumEQhiVJ5ePDiCPKRDUIs3kCo2L3QqPkmmI.CFDAq', 'Tabanan', 'Bali', 1599978461, 1599978461),
(274, 'K5103050101', 'Badung', 2, '$2y$10$LAa9UB1q1aTFm1pvihCX/e/vFY4AICfvabqroF9pcJof1dRlEGKqu', 'Badung', 'Bali', 1599978462, 1599978462),
(275, 'K5104060101', 'Gianyar', 2, '$2y$10$ThY4dsFPZZ4fz0NDhIytHOJ2dwzo/J/G/oIWl.bGvdmOQ6vS8HkYC', 'Gianyar', 'Bali', 1599978462, 1599978462),
(276, 'K5105020101', 'Klungkung', 2, '$2y$10$zW1jgzzDBSamh1ytPdLa9u8yE6HYj4VQF73.rrmiHdQitdQeSEi3y', 'Klungkung', 'Bali', 1599978462, 1599978462),
(277, 'K5106040101', 'Bangli', 2, '$2y$10$U2Ja9xVYCTzWtGtIsxx/Yu4QSE2wHSRhaIppxZzl0xfN5MHmN1NLG', 'Bangli', 'Bali', 1599978462, 1599978462),
(278, 'K5107040102', 'Karangasem', 2, '$2y$10$VwfW5Q01H46darhuhh8yauDRm5hrdHFNe12XgfsRb8FFeKf7WsqEO', 'Karangasem', 'Bali', 1599978462, 1599978462),
(279, 'K5108040101', 'Buleleng', 2, '$2y$10$.Pmh8ombRl2Ax187Ztpsc.8BnCZGAD9p3Hff4lu9JcfgFPoRRkGqq', 'Buleleng', 'Bali', 1599978463, 1599978463),
(280, 'K5171030102', 'Kota Denpasar', 2, '$2y$10$3CWPQgRyr2d8y0t9GK293eXPAMdIXrcOKQZXZ2Ir4ovZVL5R89jaG', 'Kota Denpasar', 'Bali', 1599978463, 1599978463),
(281, 'K5201040101', 'Lombok Barat', 2, '$2y$10$m5urqA/SmoyQAZdB4l9lXOg7ejnVhEjEewqQVuk7JbHb4tdbFqjry', 'Lombok Barat', 'Nusa Tenggara Barat', 1599978463, 1599978463),
(282, 'K5202060101', 'Lombok Tengah', 2, '$2y$10$jnhoXBJraGdfQzZGwCq5XO.Pzy2ieQY7PIDB/9XUnkbfvLg/cHzz6', 'Lombok Tengah', 'Nusa Tenggara Barat', 1599978463, 1599978463),
(283, 'K5203030101', 'Lombok Timur', 2, '$2y$10$8CoYkJucSjyp9qogQbMGBe6EqhSXoaItSGXm2.Yegey0XeipoF04q', 'Lombok Timur', 'Nusa Tenggara Barat', 1599978463, 1599978463),
(284, 'K5204050101', 'Sumbawa', 2, '$2y$10$e1/TlYd1cjsdh5cpoIUJV.k9oAoX5.MKO4USb5U1Y8VUm7eIVG6/.', 'Sumbawa', 'Nusa Tenggara Barat', 1599978463, 1599978463),
(285, 'K5205030201', 'Dompu', 2, '$2y$10$WTSk.NJrRybAbVvkZT.1vebl40NsrcVmft5A9PZ.xMnANFK8eawnS', 'Dompu', 'Nusa Tenggara Barat', 1599978464, 1599978464),
(286, 'K5206060101', 'Bima', 2, '$2y$10$CUumsc.0dgsM/yom.dWSRuBBPPwmm17HbshdVGtTIBiunF8TCy0Ve', 'Bima', 'Nusa Tenggara Barat', 1599978464, 1599978464),
(287, 'K5207030101', 'Sumbawa Barat', 2, '$2y$10$Mi9XZkrYTZ.HVEoNclB4z.fyS1mDpxrMVP4Uvch658eH4eFdZAvoW', 'Sumbawa Barat', 'Nusa Tenggara Barat', 1599978464, 1599978464),
(288, 'K5208020201', 'Lombok Utara', 2, '$2y$10$7ZepJK7PL.ljJW5mEwREGOuhnc7bvAB29vEtktCZRqItZ.eJTW/3C', 'Lombok Utara', 'Nusa Tenggara Barat', 1599978464, 1599978464),
(289, 'K5271031101', 'Kota Mataram', 2, '$2y$10$sum0eDJCa0dIQpmbgoFaz.GwkO8Lbi4ng7hfEjAP7ElupcRknYHDK', 'Kota Mataram', 'Nusa Tenggara Barat', 1599978464, 1599978464),
(290, 'K5272011201', 'Kota Bima', 2, '$2y$10$PA9FoC3gb6R1HEU9gdhaue8oE8Ws0oFrPKJ3zuNMqTqTNRhGoRjyW', 'Kota Bima', 'Nusa Tenggara Barat', 1599978465, 1599978465),
(291, 'K5301072201', 'Sumba Barat', 2, '$2y$10$k0A0xhRloyOD1EmAXsJCM.l82v/wFwv4IUS7UbzkJ0YGYJzFW/HlW', 'Sumba Barat', 'Nusa Tenggara Timur', 1599978465, 1599978465),
(292, 'K5302070201', 'Sumba Timur', 2, '$2y$10$.K5n3/vmwX8te6Wu0pcqFeNSG7dxQx3mu7EVrQjf7Lh/Hz6rEyqSy', 'Sumba Timur', 'Nusa Tenggara Timur', 1599978465, 1599978465),
(293, 'K5303140101', 'Kupang', 2, '$2y$10$kxV1p8LZ4z246Lki2xeZhO5GpTYgVu1bhC3pC7PENJSlSQjCrR9ne', 'Kupang', 'Nusa Tenggara Timur', 1599978465, 1599978465),
(294, 'K5304021202', 'Timor Tengah Selatan', 2, '$2y$10$r/oHqe9S5h7nSRb.ZvOHdedwwMEZ/WZtXjVXaviplmjRZmX/HBfAW', 'Timor Tengah Selatan', 'Nusa Tenggara Timur', 1599978465, 1599978465),
(295, 'K5305020201', 'Timor Tengah Utara', 2, '$2y$10$CtQ6Qhyx5eyDgREgtAlHcuEXZM4XZzO.BP1cuDd8ikokK/FOOAXfe', 'Timor Tengah Utara', 'Nusa Tenggara Timur', 1599978465, 1599978465),
(296, 'K5306061201', 'Belu', 2, '$2y$10$04TkBs1QS8UxynwAK/0i0utRoDc9naSDyP7E.vK8P0CkiBUJbZZZK', 'Belu', 'Nusa Tenggara Timur', 1599978466, 1599978466),
(297, 'K5307060202', 'Alor', 2, '$2y$10$412IytgTKYqSf388jF5DJuzIWiqoKfWLC1Fy5JPvp9KZUG.8UUuxK', 'Alor', 'Nusa Tenggara Timur', 1599978466, 1599978466),
(298, 'K5308050201', 'Lembata', 2, '$2y$10$HWTatsC7adN5wps1cCKg5uIA5zMsaAAWNb6Z3lT/DMBHljRoKBNiC', 'Lembata', 'Nusa Tenggara Timur', 1599978466, 1599978466),
(299, 'K5309060101', 'Flores Timur', 2, '$2y$10$W3/QKZ4FWvU7N/kj7bhBoO7NjpUOIB.7zN4iUC33xJHiin9VH8YS6', 'Flores Timur', 'Nusa Tenggara Timur', 1599978466, 1599978466),
(300, 'K5310080201', 'Sikka', 2, '$2y$10$VVf3fldh2X36Qv/EypBZV.u.durARxAdYrc6PARpjI2Bt/YvCJtDi', 'Sikka', 'Nusa Tenggara Timur', 1599978467, 1599978467),
(301, 'K5311032202', 'Ende', 2, '$2y$10$qkEpPVXY/fAnZvdZqWL1HuNgm5auR.gmEjWO9xogiEWiWDyo906ce', 'Ende', 'Nusa Tenggara Timur', 1599978467, 1599978467),
(302, 'K5312020201', 'Manggarai', 2, '$2y$10$eO48EtDjqLkI4Fyi1qUgR.PEf3kPsGWqMcGNrNcLL5X0Uk5ZfVyOW', 'Manggarai', 'Nusa Tenggara Timur', 1599978467, 1599978467),
(303, 'K5312071101', 'Ngada', 2, '$2y$10$xndZr3Xdc9uoRQp7DqJBb.W8zXvJa8fXCsWi6un/O5/375Ml53b6m', 'Ngada', 'Nusa Tenggara Timur', 1599978467, 1599978467),
(304, 'K5314030201', 'Rote Ndao', 2, '$2y$10$i4T9aZRXAFOW9ZecTeZa3uzOo/VE6kaZ2rn7yj5yPx8jf5CTlDTa.', 'Rote Ndao', 'Nusa Tenggara Timur', 1599978467, 1599978467),
(305, 'K5315030101', 'Manggarai Barat', 2, '$2y$10$fbL1wdT7fBzgJ/YkYaR07OmA6B9YXzmkEjGDZ/ceWF9i/vQVULseq', 'Manggarai Barat', 'Nusa Tenggara Timur', 1599978468, 1599978468),
(306, 'K5316010201', 'Sumba Tengah', 2, '$2y$10$EK/M.xOv5o.sXUv5aH.uYuOuEsh2Y.ISkCjSCYu.geunbibBZIMti', 'Sumba Tengah', 'Nusa Tenggara Timur', 1599978468, 1599978468),
(307, 'K5317050202', 'Sumba Barat Daya', 2, '$2y$10$TpxqU4Q4Sj/K/vnY0D/dfObnAY4J7ujlODMocJpHWGg/Epebnopaa', 'Sumba Barat Daya', 'Nusa Tenggara Timur', 1599978468, 1599978468),
(308, 'K5318030201', 'Nagekeo', 2, '$2y$10$Lf5fLjGFke2mBejHElGhRuFBwsrptHRjkvBG8q9b2qP0cb1sT5wsG', 'Nagekeo', 'Nusa Tenggara Timur', 1599978469, 1599978469),
(309, 'K5319010101', 'Manggarai Timur', 2, '$2y$10$H04L96q/ANAqxeMUWtPxpOPAMZ1xoS9/c5BYXM.w.aPlKwMuqnoey', 'Manggarai Timur', 'Nusa Tenggara Timur', 1599978469, 1599978469),
(310, 'K5320040101', 'Sabu Raijua', 2, '$2y$10$Wrjh9PLLuNf3XqdmM3L9r.U9O332Omf9Oi75MpfwR5ALYa6LlfQca', 'Sabu Raijua', 'Nusa Tenggara Timur', 1599978469, 1599978469),
(311, 'K5321020201', 'Malaka', 2, '$2y$10$UjJefk5U2jnfIWk.CKzdy.sMcY5dRiP1OtL5VDTpxadNlLXJZdrEK', 'Malaka', 'Nusa Tenggara Timur', 1599978469, 1599978469),
(312, 'K6101010201', 'Kota Kupang', 2, '$2y$10$bGu0waNX03qu7oKRHWSoPeTTbdcXkGgIMTAxOBN.EN2NRs9XO7JDO', 'Kota Kupang', 'Nusa Tenggara Timur', 1599978470, 1599978470),
(313, 'K6102010101', 'Bengkayang', 2, '$2y$10$M8QidqmyPVSrsl.2wu2KHeN8gZKFn7FlFm2FqEHZ6mxMj56UEdtG6', 'Bengkayang', 'Kalimantan Barat', 1599978470, 1599978470),
(314, 'K6103070101', 'Landak', 2, '$2y$10$fDV3.Rsz6HesKzM.hSSkkOM9qUtBv4Ug9biF0baMzmIZNIt.C3igK', 'Landak', 'Kalimantan Barat', 1599978470, 1599978470),
(315, 'K6104090101', 'Pontianak/mempawah', 2, '$2y$10$LroRkh5IRcQCBOW65iQykefIOOwyi4erTBvGRmYFSeVgVwWQK.y3C', 'Pontianak/mempawah', 'Kalimantan Barat', 1599978471, 1599978471),
(316, 'K6105210101', 'Sanggau', 2, '$2y$10$45vfXl4jqAezAZCm589QMuCTBZWkagssXg6tXOwzDeGjlQI8NG55i', 'Sanggau', 'Kalimantan Barat', 1599978471, 1599978471),
(317, 'K6106071201', 'Ketapang', 2, '$2y$10$6HBzh//fDVVhinuysnQAtOhcm5RNUacVV1VLN8G5cxur0DuBfTtry', 'Ketapang', 'Kalimantan Barat', 1599978471, 1599978471),
(318, 'K6107140201', 'Sintang', 2, '$2y$10$oNzCN8mlyWAUZ/0px.M.f..RDpkk.Mk81dVAWOp5fCgJ5Ov4ZVrYO', 'Sintang', 'Kalimantan Barat', 1599978472, 1599978472),
(319, 'K6108230201', 'Kapuas Hulu', 2, '$2y$10$BChQ/.340ZfZX17/BOyMYerX8SD7q/ajWndgSLcaJEJYvWgpnSOsW', 'Kapuas Hulu', 'Kalimantan Barat', 1599978472, 1599978472),
(320, 'K6109040101', 'Sekadau', 2, '$2y$10$KALYFz1dhgvOI/0XKlr6b.U0QLCHSvRY.zF9kgbbaTROytHniIGii', 'Sekadau', 'Kalimantan Barat', 1599978472, 1599978472),
(321, 'K6110050201', 'Melawi', 2, '$2y$10$T2.EGEMd6nWPBqnnnPCy/O0MxIQEwYcybD1GDKLyk37RwwsfR43G2', 'Melawi', 'Kalimantan Barat', 1599978472, 1599978472);
INSERT INTO `user` (`no`, `kode`, `nama`, `role_id`, `password`, `kab_kota`, `provinsi`, `date_created`, `last_login`) VALUES
(322, 'K6111020201', 'Kayong Utara', 2, '$2y$10$jfKTW16o2dR6hKn1mQ1QCeaNFm.UBugCQmekW8f3ovqhJnUL0H7Ci', 'Kayong Utara', 'Kalimantan Barat', 1599978473, 1599978473),
(323, 'K6112070103', 'Kubu Raya', 2, '$2y$10$r6oJGnACOJ.W3LsINOKdSuxNOwwav/pFU63Ktz7dH1bEUQfJwteOO', 'Kubu Raya', 'Kalimantan Barat', 1599978473, 1599978473),
(324, 'K6171020106', 'Kota Pontianak', 2, '$2y$10$NdmPs.Tm60ING2i79eo3XelXTJevSo2CykjBcnmAwVcxj22bpiHjW', 'Kota Pontianak', 'Kalimantan Barat', 1599978473, 1599978473),
(325, 'K6172020101', 'Kota Singkawang', 2, '$2y$10$jhJSb/rS1vfzCSPanPzZgOrDypsZrGfQmqNaIJAsjBagVp2M28ZBq', 'Kota Singkawang', 'Kalimantan Barat', 1599978474, 1599978474),
(326, 'K6201060202', 'Kotawaringin Barat', 2, '$2y$10$2ZvmdLqL8BvWN/WmYhYdt.egGNazqhkoc85h2w8HAAqbhiKGMaKYO', 'Kotawaringin Barat', 'Kalimantan Tengah', 1599978474, 1599978474),
(327, 'K6202060201', 'Kotawaringin Timur', 2, '$2y$10$fqXQyc8fZZLuTnGkTf9eSefgbcHwYm.ddBb.5pslxFtxU9kHJFoLS', 'Kotawaringin Timur', 'Kalimantan Tengah', 1599978474, 1599978474),
(328, 'K6203100201', 'Kapuas', 2, '$2y$10$ku58PI/TEQTGDh1nSWOZzORJPtQSSXNJo.DPzXZZ01CPU3bpThoam', 'Kapuas', 'Kalimantan Tengah', 1599978475, 1599978475),
(329, 'K6204040201', 'Barito Selatan', 2, '$2y$10$EhEszhNzpOeKAtHslGvy9OiWs5cE74BtMmDZSB8jo20XBIUhAZ43e', 'Barito Selatan', 'Kalimantan Tengah', 1599978475, 1599978475),
(330, 'K6205050202', 'Barito Utara', 2, '$2y$10$.OmRsrISXutNF2tnmCBeyeoUwAi9UJH2aZHLulSd86rV9vTaby7MC', 'Barito Utara', 'Kalimantan Tengah', 1599978475, 1599978475),
(331, 'K6206020201', 'Sukamara', 2, '$2y$10$wDIswTjnxk46HoyIBzYfsON0/oSD/rB2Un/u3aITOhB50oOwXUb6C', 'Sukamara', 'Kalimantan Tengah', 1599978476, 1599978476),
(332, 'K6207011101', 'Lamandau', 2, '$2y$10$93LDAXxQY1/RMeWOzZ6gd.80NWvgUGchEYMWS0RiY18b9WpMXP7ae', 'Lamandau', 'Kalimantan Tengah', 1599978476, 1599978476),
(333, 'K6208010202', 'Seruyan', 2, '$2y$10$pHBXAd7DBGIhbtYQOfcyjuMj6bwvdarzCRvI0PUQ4hzu.X./s3Hl.', 'Seruyan', 'Kalimantan Tengah', 1599978476, 1599978476),
(334, 'K6209050202', 'Katingan', 2, '$2y$10$enUcAaUwcFLEQu2Zw8SrZuhnxjWMi8zPSIYW6sYSHgZHn4FPJAvS.', 'Katingan', 'Kalimantan Tengah', 1599978476, 1599978476),
(335, 'K6210040201', 'Pulang Pisau', 2, '$2y$10$GIX7FJdUzzxUEjuNa4mwGuhkCUGsjiUGWMmxaefyeoG7tOfd4HVVG', 'Pulang Pisau', 'Kalimantan Tengah', 1599978476, 1599978476),
(336, 'K6211040201', 'Gunung Mas', 2, '$2y$10$UodfAVTR8bGK9dJa5U4fKuPw30vdOkC8dWsmh5.AUm.uEnC67rXYG', 'Gunung Mas', 'Kalimantan Tengah', 1599978477, 1599978477),
(337, 'K6212010201', 'Barito Timur', 2, '$2y$10$16m1ueoAsmCw48cZCKCxg.WFCja93mZqvHKLDe2WS.D5DlJ.osdxe', 'Barito Timur', 'Kalimantan Tengah', 1599978477, 1599978477),
(338, 'K6213020201', 'Murung Raya', 2, '$2y$10$rtLWHYPM3yJKmz5hAB7hpu0Qg/zZXC44UzpD4UU8arOeFFR5Gggie', 'Murung Raya', 'Kalimantan Tengah', 1599978477, 1599978477),
(339, 'K6271012203', 'Kota Palangka Raya', 2, '$2y$10$1GNduoFnPC35ORcZ6kJDBOrH6PVi2HH.y9C6BacE7aOqA5AXPU4r2', 'Kota Palangka Raya', 'Kalimantan Tengah', 1599978478, 1599978478),
(340, 'K6301050201', 'Tanah Laut', 2, '$2y$10$0aK3jXroCOxIuyTHHzHYDeK/Ayg.qN4tlq9S.RZ5siw8B8klzk1Ou', 'Tanah Laut', 'Kalimantan Selatan', 1599978478, 1599978478),
(341, 'K6302121101', 'Kota Baru', 2, '$2y$10$1CruiDsd0DqSR5U5HC/0Nu7npf7B6SPyfBkugKSEIP.thEhe2fZxy', 'Kota Baru', 'Kalimantan Selatan', 1599978478, 1599978478),
(342, 'K6303020201', 'Banjar', 2, '$2y$10$EOPhE1ycoEbBd8J.id1yj.kF.HYAAYLPoC9qG/TVUSkGbUsmW4S1S', 'Banjar', 'Kalimantan Selatan', 1599978478, 1599978478),
(343, 'K6304060202', 'Barito Kuala', 2, '$2y$10$iLrooXTMUx10BQ.8sz1GqeZX1u2AgKaaMba82fQxE1Az6Qj4gKz1W', 'Barito Kuala', 'Kalimantan Selatan', 1599978478, 1599978478),
(344, 'K6305040201', 'Tapin', 2, '$2y$10$QOIsn7AIufJUq5sEL7A2duM7RBmwMHifr7eU/nCvFlGP1jCo2cwtq', 'Tapin', 'Kalimantan Selatan', 1599978479, 1599978479),
(345, 'K6306100102', 'Hulu Sungai Selatan', 2, '$2y$10$yBe7va7Ev7ZpPHCBb8LzeOR3yz3cqSBeQSDvids8a0t5OwOfg5uwi', 'Hulu Sungai Selatan', 'Kalimantan Selatan', 1599978479, 1599978479),
(346, 'K6307010201', 'Hulu Sungai Tengah', 2, '$2y$10$ufw40bW2f6O1z./zU29JcerCIpDC4NeYHZUuNl1jyxFiv7iDGvQWe', 'Hulu Sungai Tengah', 'Kalimantan Selatan', 1599978479, 1599978479),
(347, 'K6308071201', 'Hulu Sungai Utara', 2, '$2y$10$K6LIDBSjt/h6l1E5l/ke9Oh1rQwh.LZ2BabqvyxTRHg38IXtMNGBO', 'Hulu Sungai Utara', 'Kalimantan Selatan', 1599978479, 1599978479),
(348, 'K6309060202', 'Tabalong', 2, '$2y$10$px41VuupxoWe1vI/O6TiveIXvH.8KZuvMcSKQY7BquqWdyoZxrs/6', 'Tabalong', 'Kalimantan Selatan', 1599978479, 1599978479),
(349, 'K6310010101', 'Tanah Bumbu', 2, '$2y$10$ob/xVy/QQfr2QXNrFQpXLOg4xvNHuNFWHieT0g.0CTl0b0ud881nO', 'Tanah Bumbu', 'Kalimantan Selatan', 1599978480, 1599978480),
(350, 'K6311040101', 'Balangan', 2, '$2y$10$uQ2.pyjPLGs6PjIVNLomn.fRgiBHxi0cNM/e.LMimg42.tjv7rY8a', 'Balangan', 'Kalimantan Selatan', 1599978480, 1599978480),
(351, 'K6371031203', 'Kota Banjarmasin', 2, '$2y$10$FgL2fuKnz3iX3NzcwcX/9eerLm6QRpRPA3uCKmD/NoUa0.Yp7evSa', 'Kota Banjarmasin', 'Kalimantan Selatan', 1599978480, 1599978480),
(352, 'K6372031201', 'Kota Banjar Baru', 2, '$2y$10$ABhMAM5V/dCDwVvNTaLk8.uVyEwbRLS/KHMxfC5Z9gUu6bWAO3NFu', 'Kota Banjar Baru', 'Kalimantan Selatan', 1599978480, 1599978480),
(353, 'K6401040202', 'Paser', 2, '$2y$10$CJwaVgwkfVWfy/ldQLQ2KekVrhuqHl1w1F7oeiy26QGfujvSQUI8K', 'Paser', 'Kalimantan Timur', 1599978480, 1599978480),
(354, 'K6402070101', 'Kutai Barat', 2, '$2y$10$ERg9I.MROinMNbPyhPIdfe3uiQQmfRb3d.6eCDxEcy7GU9ScSiKay', 'Kutai Barat', 'Kalimantan Timur', 1599978481, 1599978481),
(355, 'K6403090202', 'Kutai Kartanegara', 2, '$2y$10$7/tHb19R214aSWUSTb4hoOaho13qWHKgLaJvKJ23j8lsA5OB5o0Xm', 'Kutai Kartanegara', 'Kalimantan Timur', 1599978481, 1599978481),
(356, 'K6404040203', 'Kutai Timur', 2, '$2y$10$mNi/j1fCXBmTaEPm3w3bi.lU0oChs8pNW0xj7INdUKl6ZrPNQ8wmm', 'Kutai Timur', 'Kalimantan Timur', 1599978481, 1599978481),
(357, 'K6405070202', 'Berau', 2, '$2y$10$0mu9nAR6mgOna0epXLq6O.LrJfSNQhyIxzXik7ghwsWi2.2WdH.tS', 'Berau', 'Kalimantan Timur', 1599978482, 1599978482),
(358, 'K6409030101', 'Penajam Paser Utara', 2, '$2y$10$75YaoLI8a0Y4WOO.Ls.LE.iee22wJcNN3MnJHmt7EZhYPvtbzxz3O', 'Penajam Paser Utara', 'Kalimantan Timur', 1599978482, 1599978482),
(359, 'K6411030101', 'Mahakam Hulu', 2, '$2y$10$88iIGqPW/91wcYWQztilgOLVt/UCZxSdJriFLbf2D5HTAepc4zAYO', 'Mahakam Hulu', 'Kalimantan Timur', 1599978483, 1599978483),
(360, 'K6471010105', 'Kota Balikpapan', 2, '$2y$10$NU2ZKw.pxESY/kLP99IvBurUWzfMO6VxVn/17nCtSSqVauoPrwc32', 'Kota Balikpapan', 'Kalimantan Timur', 1599978483, 1599978483),
(361, 'K6472030201', 'Kota Samarinda', 2, '$2y$10$bx9Cc.vldJDJ9.u12I2fv.luQzcfcOYQIibwCs4eSaoZa2FzHVOkm', 'Kota Samarinda', 'Kalimantan Timur', 1599978483, 1599978483),
(362, 'K6474010203', 'Kota Bontang', 2, '$2y$10$CJVab0KmVLa84hkieEMLNuk4/VA0iqmgQh5rDCexOKxXClgKfYo.S', 'Kota Bontang', 'Kalimantan Timur', 1599978483, 1599978483),
(363, 'K6501150201', 'Malinau', 2, '$2y$10$u2wZATVZfb0hj68rzVWd2uO/xM5ET1HUeVIRqLogATmK7SBtA2iT2', 'Malinau', 'Kalimantan Utara', 1599978484, 1599978484),
(364, 'K6502050201', 'Bulungan', 2, '$2y$10$opiW/1yfAWrskhw9Ij305u6sx12GX4bNBNgT/g9lN3Ot.QeSPq.3W', 'Bulungan', 'Kalimantan Utara', 1599978484, 1599978484),
(365, 'K6503020101', 'Tana Tidung', 2, '$2y$10$sOXS9UXzw946DDhjedefy.83ZWE.xkukXu6CipN6h.aRNWoF1Gu.i', 'Tana Tidung', 'Kalimantan Utara', 1599978484, 1599978484),
(366, 'K6504100102', 'Nunukan', 2, '$2y$10$WLRI40D/HcwvTAkVu/gPReqhlIfxK9lmQI7GnPEf2AodqeplWtRvq', 'Nunukan', 'Kalimantan Utara', 1599978484, 1599978484),
(367, 'K6571030201', 'Kota Tarakan', 2, '$2y$10$k2b/JmOqJLavB9BboQ9L6.BeG9qpqeKjSHUDMIc1vWNpNzTEIaTVi', 'Kota Tarakan', 'Kalimantan Utara', 1599978484, 1599978484),
(368, 'K7101021201', 'Bolaang Mongondow', 2, '$2y$10$Zv78Ip/zg2/F91sYiaYkGOqi6tpzdZ1yyeCGRlzJzSDgZxUlvujuK', 'Bolaang Mongondow', 'Sulawesi Utara', 1599978485, 1599978485),
(369, 'K7102170101', 'Minahasa', 2, '$2y$10$8z8z5.c31cGtd61M.s.1CeM6bJZhda91IXUAC2akRx6y.6pyvS//W', 'Minahasa', 'Sulawesi Utara', 1599978485, 1599978485),
(370, 'K7103080101', 'Kepulauan Sangihe', 2, '$2y$10$GykYXO4vdYIFL0U0hmEfAuxrNpgj3NCnQJhFc3GKHMiitrkJlraz6', 'Kepulauan Sangihe', 'Sulawesi Utara', 1599978485, 1599978485),
(371, 'K7104030101', 'Kepulauan Talaud', 2, '$2y$10$jM978PdiON1lulkbOmVThepBKoBABXiT15/4l54Y3lwE9SoXIKGVC', 'Kepulauan Talaud', 'Sulawesi Utara', 1599978486, 1599978486),
(372, 'K7105130101', 'Minahasan Selatan', 2, '$2y$10$BRdFVTYIi0eVrCkod3jIAe/gQw3jmUZZpHP3b5AVfMlbJA5cUUljy', 'Minahasan Selatan', 'Sulawesi Utara', 1599978486, 1599978486),
(373, 'K7106010101', 'Minahasa Utara', 2, '$2y$10$.ba3ZRXpROYAc53G3NcQzuduNkrBiAFSSJZLJxUtVP4HxD2DEe4cO', 'Minahasa Utara', 'Sulawesi Utara', 1599978486, 1599978486),
(374, 'K7107030101', 'Bolaang Mongodow Utara', 2, '$2y$10$uvpxtEQxjGO1i7edLR3G9OglB2FqqvLFRP27DOSORln9eAcNTfUVW', 'Bolaang Mongodow Utara', 'Sulawesi Utara', 1599978486, 1599978486),
(375, 'K7108070101', 'Siau Tagulandang Biaro', 2, '$2y$10$D2M4BM8UbRye7RSLivON3.jVNgu3xzJcJjlICTj1dpsQDUb9BEppG', 'Siau Tagulandang Biaro', 'Sulawesi Utara', 1599978487, 1599978487),
(376, 'K7109040101', 'Minahasa Tenggara', 2, '$2y$10$YJUcsTW7ziZrzJPluTDqU.r8RlykDr7Bg7ufa2sfEjUFmDsqATXpq', 'Minahasa Tenggara', 'Sulawesi Utara', 1599978487, 1599978487),
(377, 'K7110020101', 'Bolaang Mongondow Selatan', 2, '$2y$10$J0kqum/j/I3.Ok921m.l6.ifQHgU.G6Bw/NZiL0lwCz.PUdbvWRFS', 'Bolaang Mongondow Selatan', 'Sulawesi Utara', 1599978487, 1599978487),
(378, 'K7111040101', 'Bolaang Mongondow Timur', 2, '$2y$10$e6Lcz9o6yuM2VfUpKifx.OgEovZ1hMwpQT8Fgj0xcJQqTvhG.U75S', 'Bolaang Mongondow Timur', 'Sulawesi Utara', 1599978487, 1599978487),
(379, 'K7171010101', 'Kota Manado ', 2, '$2y$10$ohakhwtru4lj8zojFqshpuOizA6kdx8RkucdLUWCH.hwXxFz9EA8W', 'Kota Manado ', 'Sulawesi Utara', 1599978488, 1599978488),
(380, 'K7172012101', 'Kota Bitung', 2, '$2y$10$3WyvPtdVku89hxwXDY1cq.zWIF5LbB9kPZp8fy4e77J9IkUgTNMHW', 'Kota Bitung', 'Sulawesi Utara', 1599978488, 1599978488),
(381, 'K7173030201', 'Kota Tomohon', 2, '$2y$10$XqX4N03OD1kZGy2TD57ZCeUepeTktTjW92F0K9JVZqQBgBPmBny9e', 'Kota Tomohon', 'Sulawesi Utara', 1599978488, 1599978488),
(382, 'K7174030101', 'Kota Kotamobagu', 2, '$2y$10$PB4mJCvXIBKv2/DeOgjyr.CYDNAQBsk3v.Ncxcb35D/HhPW01wz3.', 'Kota Kotamobagu', 'Sulawesi Utara', 1599978488, 1599978488),
(383, 'K7201040101', 'Banggai Kepulauan', 2, '$2y$10$TpJpzlLpwuglbmsXCCbzXeitk7SNN2ZJQ9t.ajTMEfjTG1M8ssKhC', 'Banggai Kepulauan', 'Sulawesi Tengah', 1599978489, 1599978489),
(384, 'K7202050102', 'Banggai', 2, '$2y$10$ljtqlDsWQxqpS5zVyOxRSuhGLrBGd/0X/GVoAIGgBleT9tC/DwGUq', 'Banggai', 'Sulawesi Tengah', 1599978489, 1599978489),
(385, 'K7203040101', 'Morowali', 2, '$2y$10$x8mG/z.pq.z0i5mxF0BIeuwMEx91JXZKQX.RkYRv5Kk7Uc/f7kFMi', 'Morowali', 'Sulawesi Tengah', 1599978489, 1599978489),
(386, 'K7204072201', 'Poso', 2, '$2y$10$f/dEoMK2sThlll4JaGHco.iYECdOYeflNeLD0GIdJ2Dm5Ai/FVLhu', 'Poso', 'Sulawesi Tengah', 1599978490, 1599978490),
(387, 'K7205120101', 'Donggala', 2, '$2y$10$FdTdBSZlHRr2qXageZucOOYydFBvSkDGB8rGjR7BgA7gACYWumYc2', 'Donggala', 'Sulawesi Tengah', 1599978490, 1599978490),
(388, 'K7206040202', 'Toli-Toli', 2, '$2y$10$Sqpylxuh4rEVZaKDN960JeCj5Rg38L0KsCFFlEK7o.IIN8pdqAgZ6', 'Toli-Toli', 'Sulawesi Tengah', 1599978490, 1599978490),
(389, 'K7207020201', 'Buol', 2, '$2y$10$y4gKBLFRvv7H6iiG4Vnb9enWeCEwHX7MpvBfIsa6xx9WSaHbFbvRe', 'Buol', 'Sulawesi Tengah', 1599978490, 1599978490),
(390, 'K7208023201', 'Parigi Moutong', 2, '$2y$10$g5ptLMvj3T4fgrqfk59oEOPKTBW1KE4byY4Kk1kkZK5rvg727F/ee', 'Parigi Moutong', 'Sulawesi Tengah', 1599978491, 1599978491),
(391, 'K7209020101', 'Tojo Una-Una', 2, '$2y$10$eYZnVdMZLgQhc/2Wv7nIlurMu8WC8yGwW1VcDovaS7GVnFVp2X/02', 'Tojo Una-Una', 'Sulawesi Tengah', 1599978491, 1599978491),
(392, 'K7210130201', 'Sigi', 2, '$2y$10$IH43HBbiiHU.FP/cxRC0DeUN6Xk4Sw3UTLLhu/zNgNFrf7MQZ.292', 'Sigi', 'Sulawesi Tengah', 1599978491, 1599978491),
(393, 'K7211030201', 'Banggai Laut', 2, '$2y$10$WiFBjrLjazOAMlBaofzSHupkdJah.IQuWpx4SHvJRtjUR2c8Z73ee', 'Banggai Laut', 'Sulawesi Tengah', 1599978492, 1599978492),
(394, 'K7212020101', 'Morowali Utara', 2, '$2y$10$gs/n7ZcuGUA5GJ5OWQxGFu2FTBHDYpX9V2yj4NQ1wQkoxaCzwry7e', 'Morowali Utara', 'Sulawesi Tengah', 1599978492, 1599978492),
(395, 'K7301041102', 'Selayar', 2, '$2y$10$49lOVLWJWgOknj/lw9SAguFH7qGqX5QdibN4fkMkIFOVW.tIeTMba', 'Selayar', 'Sulawesi Selatan', 1599978492, 1599978492),
(396, 'K7302070101', 'Bulukumba', 2, '$2y$10$zfsYJgs1ZnhtaFuBS1b5LOHCsaM3pJ91WL5XVA6VV.5x79I41o/Aa', 'Bulukumba', 'Sulawesi Selatan', 1599978493, 1599978493),
(397, 'K7303011101', 'Bantaeng', 2, '$2y$10$.gAjp3eQ0UFwNgtWBZwpuuDCNyDE8quALUpW0adZDZab1uuLv2KOa', 'Bantaeng', 'Sulawesi Selatan', 1599978493, 1599978493),
(398, 'K7304030203', 'Jeneponto', 2, '$2y$10$gPaq5XSZ9b69BiV5OBF1aute75KURvgTVob5MPwxDl5ldrZRU7fnC', 'Jeneponto', 'Sulawesi Selatan', 1599978493, 1599978493),
(399, 'K7305010101', 'Takalar', 2, '$2y$10$AtfmVzw2pXcXnGoUvu5Xt.GDqfNkfu46iNyAGCSLjYewJGZ1TPup6', 'Takalar', 'Sulawesi Selatan', 1599978493, 1599978493),
(400, 'K7306040201', 'Gowa', 2, '$2y$10$Av6f9Y89m8vl7yNEAGCNiOpnVG0rsiaKxmTfmB48g5QutFCBCeGyu', 'Gowa', 'Sulawesi Selatan', 1599978493, 1599978493),
(401, 'K7307060101', 'Sinjai', 2, '$2y$10$YBxpAnqZCBoIa6uqKgxL.ehUPstJ6kz4SKrr0wTjAtwjojRx8fpw.', 'Sinjai', 'Sulawesi Selatan', 1599978494, 1599978494),
(402, 'K7308023101', 'Maros', 2, '$2y$10$3Jn1BuzH8N9gnA7nQ8/zw.lt0Hc5S5wgpBkb281gVWiz6ubth7g0a', 'Maros', 'Sulawesi Selatan', 1599978494, 1599978494),
(403, 'K7309041101', 'Pangkajene Kepulauan', 2, '$2y$10$72nNQgVtIVbKnCBw2B.ms.NAn42gBVfszTwDWHQRNlvLFMueeh2BW', 'Pangkajene Kepulauan', 'Sulawesi Selatan', 1599978494, 1599978494),
(404, 'K7310041101', 'Barru', 2, '$2y$10$bUWqNIvzdWDGrWYH8YMjH.15fMBeaq49aki1L4LcAHbvn.pD43DXe', 'Barru', 'Sulawesi Selatan', 1599978495, 1599978495),
(405, 'K7311210101', 'Bone', 2, '$2y$10$m5SOeerOCAbCh.aBOYvP0eidhT1O9jXsFAYjwRescmdHmXrafkFQO', 'Bone', 'Sulawesi Selatan', 1599978495, 1599978495),
(406, 'K7312060102', 'Soppeng', 2, '$2y$10$JPq8Yk7MiTX0AcI5KniPvumANr3dIhcb9tOYIYvAhE2upV194b.cW', 'Soppeng', 'Sulawesi Selatan', 1599978495, 1599978495),
(407, 'K7313040101', 'Wajo', 2, '$2y$10$5w2n0ViuSUJZ58Bhb9M1LetDjYuGSRTqIlbTQfpgdBa2Y30zIXQ2u', 'Wajo', 'Sulawesi Selatan', 1599978495, 1599978495),
(408, 'K7314060201', 'Sedereng Rappang', 2, '$2y$10$YviPP6qpH91KZtXGNeLI/uBtEZAWw2GJR.jItAFHCAhHNKUBrXO/W', 'Sedereng Rappang', 'Sulawesi Selatan', 1599978496, 1599978496),
(409, 'K7315041201', 'Pinrang', 2, '$2y$10$CdGUTaI4NZCxVEYItZH/hebieH4bxAUZOwq1fFLlUq6bPiqBOCGCe', 'Pinrang', 'Sulawesi Selatan', 1599978496, 1599978496),
(410, 'K7316030101', 'Enrekang', 2, '$2y$10$YzIlloIX2M/gnuOjGbs8HOCuC5QWYRW8bEzyAMCZ3OUiyggJh7v36', 'Enrekang', 'Sulawesi Selatan', 1599978496, 1599978496),
(411, 'K7317061101', 'Luwu', 2, '$2y$10$3/8Qd3PeKtTtIWy8ZQXrCOlclzRsk3wbciMlOexjPvMARkIvZAQhK', 'Luwu', 'Sulawesi Selatan', 1599978496, 1599978496),
(412, 'K7318040101', 'Tana Toraja', 2, '$2y$10$nX73BhDA811.Lbt3lTVyveSE88RCu5bwZ5wC.MSsbZ0aag68gPFqm', 'Tana Toraja', 'Sulawesi Selatan', 1599978497, 1599978497),
(413, 'K7322050101', 'Luwu Utara', 2, '$2y$10$4KJehHlnlQ3dA5RORGNF/.HT0ODjEn9WUZnzuzQmvsmjCaxdXyG4m', 'Luwu Utara', 'Sulawesi Selatan', 1599978497, 1599978497),
(414, 'K7325080101', 'Luwu Timur', 2, '$2y$10$3kczKZJ133eU1gf/.2/xleSRHn4x4KXCBQ5yEMn9w.IgRg.AfyTwm', 'Luwu Timur', 'Sulawesi Selatan', 1599978497, 1599978497),
(415, 'K7326090201', 'Toraja Utara', 2, '$2y$10$8iaHsLPZAlJwcwnTcHN7R.Ls6nkpr6IO0akrErohvwM13ZIuhIqYe', 'Toraja Utara', 'Sulawesi Selatan', 1599978497, 1599978497),
(416, 'K7371031102', 'Kota Makassar', 2, '$2y$10$7fMlfIDgL5GpZeHNzcGArOugaaHPrS3pE97PkevABjABRtkYbsY6a', 'Kota Makassar', 'Sulawesi Selatan', 1599978497, 1599978497),
(417, 'K7372030101', 'Kota Pare-pare', 2, '$2y$10$/9Qfz4QZoqN/aWqtf3ygRejNwgF9arEjp.lw5Lf2D..MdX2ceVpv6', 'Kota Pare-pare', 'Sulawesi Selatan', 1599978498, 1599978498),
(418, 'K7373020101', 'Kota Palopo', 2, '$2y$10$qXi1giqFKvxmVglGhHMKCuGd1.j2mUjYeJzxAl.ib3aAAz6i98en2', 'Kota Palopo', 'Sulawesi Selatan', 1599978498, 1599978498),
(419, 'K7401052101', 'Buton', 2, '$2y$10$YLNKD/j.pNL2S5x2SIOQOuQD9yyoj3M6yCHrOADQTOOOF3LLWwrf6', 'Buton', 'Sulawesi Tenggara', 1599978498, 1599978498),
(420, 'K7401070101', 'Buton Selatan', 2, '$2y$10$WJgiHnOWQ2MT7q1QYLb7/uP.pFbuQztrA1DxH7rvaq1WaK./3Q6Y2', 'Buton Selatan', 'Sulawesi Tenggara', 1599978498, 1599978498),
(421, 'K7401140101', 'Buton Tengah', 2, '$2y$10$QfkMqxq0JnrABarS11pH3u0HOXPrsY6qKoT/4pAdW3eDAen7KwHoi', 'Buton Tengah', 'Sulawesi Tenggara', 1599978499, 1599978499),
(422, 'K7402042202', 'Muna Barat', 2, '$2y$10$531nhPRQbMcwTQs.xTsUue8zYNVqXjHQvmC01Xk2i84v8ZmlivlY.', 'Muna Barat', 'Sulawesi Tenggara', 1599978499, 1599978499),
(423, 'K7402071201', 'Muna', 2, '$2y$10$gjkTUOHagXqcUj.5JVFCGO37wj2YQHC36wLOD6JDxx1lvYPiJzft2', 'Muna', 'Sulawesi Tenggara', 1599978499, 1599978499),
(424, 'K7403170201', 'Konawe', 2, '$2y$10$uJ4/Ai3yhlEPRSPPgeLLIOQN3YV37FHvNp1sLvGAwmFSDQc2a29Eq', 'Konawe', 'Sulawesi Tenggara', 1599978500, 1599978500),
(425, 'K7404020101', 'Kolaka', 2, '$2y$10$5F3GIF3KMH1RpDkvHYJzr.LtI90RPeqImXYFtpXN7b5ksQw9aR.4i', 'Kolaka', 'Sulawesi Tenggara', 1599978500, 1599978500),
(426, 'K7405041101', 'Konawe Selatan', 2, '$2y$10$Uw3AWdDGua6860KCbm3sR.rcFSrkOw2TYK/pgzKPwS9QgQ6Wbd8de', 'Konawe Selatan', 'Sulawesi Tenggara', 1599978500, 1599978500),
(427, 'K7406030101', 'Bombana', 2, '$2y$10$jaBl7PF.RaxdVW6ffYsDH.QZwPYvp6faFpc27YfpPVk6Z6Ja..6yi', 'Bombana', 'Sulawesi Tenggara', 1599978500, 1599978500),
(428, 'K7407040102', 'Wakatobi', 2, '$2y$10$H79gYhLzkQkEj3EwEqF3g.nvUu0wMU2YDzi8CR11tyVpx/k8zyRl6', 'Wakatobi', 'Sulawesi Tenggara', 1599978500, 1599978500),
(429, 'K7408020101', 'Kolaka Utara', 2, '$2y$10$GyalZT0fAqXw2JKj/aPyMeEU1YxmKDuGxNWb38DXHnQd3TgGwq0HK', 'Kolaka Utara', 'Sulawesi Tenggara', 1599978500, 1599978500),
(430, 'K7409122201', 'Buton Utara', 2, '$2y$10$ar4ctgtUnrZ6jGAAdWZ6muJMrv9PNldR9j.HxmuvAXWuXlNRV63re', 'Buton Utara', 'Sulawesi Tenggara', 1599978500, 1599978500),
(431, 'K7410030101', 'Konawe Utara', 2, '$2y$10$HxN7e.3lNkOVqtlWE0o.QOPXF/6i/l.0h/m4ngroGNxEMNfwhR4nK', 'Konawe Utara', 'Sulawesi Tenggara', 1599978501, 1599978501),
(432, 'K7411070101', 'Kolaka Timur', 2, '$2y$10$ZxMRuOztzalBxemSAsblj.K3IM88BRO0qoSQBX813Ne98bysw3rxC', 'Kolaka Timur', 'Sulawesi Tenggara', 1599978501, 1599978501),
(433, 'K7412072101', 'Konawe Kepulauan', 2, '$2y$10$TFTwo7hOuTqVmMqcg3VYqOH4xrWspf5qySiTQnjSNjSVpFVd3JSle', 'Konawe Kepulauan', 'Sulawesi Tenggara', 1599978501, 1599978501),
(434, 'K7471012101', 'Kota Kendari', 2, '$2y$10$b7L5PIFBYMLAsYUgZnRd7Od7JICPS4J6f8SFOpCdYQ0B3EW6kanhi', 'Kota Kendari', 'Sulawesi Tenggara', 1599978501, 1599978501),
(435, 'K7472011101', 'Kota Bau-Bau', 2, '$2y$10$oRku/MRbIY9Cv8jUChX.QOfEU/fiFsvXKbLIteRa/7VR5.nkmXY4.', 'Kota Bau-Bau', 'Sulawesi Tenggara', 1599978501, 1599978501),
(436, 'K7501050102', 'Boalemo', 2, '$2y$10$ujJCLRn8QjJewaLrMfSTrO7XDnx7hNQFECMaKpBIQ0Sr.wxwEoKBu', 'Boalemo', 'Gorontalo', 1599978502, 1599978502),
(437, 'K7502071201', 'Gorontalo', 2, '$2y$10$1NeX/tK0Ac792M5IJkZ6q.X0e2BJhZJ4zHNN0j8.A.0SDQM1cT3Jy', 'Gorontalo', 'Gorontalo', 1599978502, 1599978502),
(438, 'K7503040101', 'Pohuwato', 2, '$2y$10$pHm.oDjcBWZU/gEnGNUPreyu5w/sARWlEu0jmC32gAqZ7./Fa.KjO', 'Pohuwato', 'Gorontalo', 1599978502, 1599978502),
(439, 'K7504020201', 'Bone Bolango', 2, '$2y$10$q0GHj3vzuUGIySzQnfE4AuNIlW7N7Rri25MfjaSGKXo0Ua77APw2m', 'Bone Bolango', 'Gorontalo', 1599978502, 1599978502),
(440, 'K7505020101', 'Gorontalo Utara', 2, '$2y$10$.7EvgMNuXqMOBUqQx22n2OYxjR54CMaLAXjQ4jcanUnMiga9EgXO.', 'Gorontalo Utara', 'Gorontalo', 1599978503, 1599978503),
(441, 'K7601020101', 'Majene', 2, '$2y$10$3FQ5oah7GgZPjjwZjeDVMObv/xP6suognGWpo2BCIyjFs69n1a8Py', 'Majene', 'Sulawesi Barat', 1599978503, 1599978503),
(442, 'K7602010101', 'Polewali Mandar', 2, '$2y$10$0PxrKbw/DNZ.cet.sILKDOK0F6o6C3cyqQzcFXl8HWa0HANq8uTby', 'Polewali Mandar', 'Sulawesi Barat', 1599978503, 1599978503),
(443, 'K7603050101', 'Mamasa', 2, '$2y$10$ncTnr73yt00b4YBMXDbLZORAR9PvZuwue4x.4yOgLgk8s3DtKAv.2', 'Mamasa', 'Sulawesi Barat', 1599978504, 1599978504),
(444, 'K7604030101', 'Mamuju', 2, '$2y$10$RxEtlIVCC5mwHX3Po9VvNei4Gvw8HSbSKCsjreVEf1Tj19xwLUAhm', 'Mamuju', 'Sulawesi Barat', 1599978504, 1599978504),
(445, 'K7605042101', 'Mamuju Utara', 2, '$2y$10$z4MSPxTuv6Sry4v21wQdFuQHyZxCA0aHk/VN20COba0HdDjBAdjee', 'Mamuju Utara', 'Sulawesi Barat', 1599978504, 1599978504),
(446, 'K7606053101', 'Mamuju Tengah', 2, '$2y$10$tguIhC3tIfzI9uFXgFfiPuxG4MMWhFrA/j0Fv7Dev4NZgDF0ax9T6', 'Mamuju Tengah', 'Sulawesi Barat', 1599978505, 1599978505),
(447, 'K8101040101', 'Maluku Tenggara Barat', 2, '$2y$10$iEaiE9IKKIxo7hsu9dll2uXtVOlu.CVlvwUO9WgzdIk66pqUZ6W96', 'Maluku Tenggara Barat', 'Maluku', 1599978505, 1599978505),
(448, 'K8102010202', 'Maluku Tenggara', 2, '$2y$10$YRsGaU5dZiay7DI0Ve395ugWcicFkRyv.0jXjTa.eW/ZiAhpnrMH.', 'Maluku Tenggara', 'Maluku', 1599978505, 1599978505),
(449, 'K8103050101', 'Maluku Tengah', 2, '$2y$10$eVYCWQA1klwI4F9bgBi/aecJCMCK.iu9SQX85YTmmkzHmYi4uI6T.', 'Maluku Tengah', 'Maluku', 1599978505, 1599978505),
(450, 'K8104020202', 'Buru', 2, '$2y$10$SZuHj3UME9lRObPT1zwjqe4HFhnCmDONMvR1NehAq0nU0KOl8KaDC', 'Buru', 'Maluku', 1599978506, 1599978506),
(451, 'K8105030101', 'Kepulauan Aru', 2, '$2y$10$gKPdZhhR9WIVOsyEtLV5HeaVpcRXSclGaDCmXByMcbYuG4L50pw3m', 'Kepulauan Aru', 'Maluku', 1599978506, 1599978506),
(452, 'K8106030205', 'Seram Bagian Barat', 2, '$2y$10$P4tNIYE23HkRm5W38ZrgrOTf//wVp3noziC3R7QxhB52Mb2bYvPKy', 'Seram Bagian Barat', 'Maluku', 1599978506, 1599978506),
(453, 'K8107040101', 'Seram Bagian Timur', 2, '$2y$10$NRqEoc6/HN/afkmiis10r.6W8sowxkmSyqUo7XkNqjGafuiHwHb0S', 'Seram Bagian Timur', 'Maluku', 1599978506, 1599978506),
(454, 'K8108030101', 'Maluku Barat Daya', 2, '$2y$10$XA5iLpx1M.Y2/P/0j5RsKel2Yxv7Qk/LJmWeto.0QI/t20M/iiraq', 'Maluku Barat Daya', 'Maluku', 1599978507, 1599978507),
(455, 'K8109030101', 'Buru Selatan', 2, '$2y$10$e1McwxoecgAopTkZR.N6pOgHo2lrrpujt89MSejfYQu8EahAKy6Im', 'Buru Selatan', 'Maluku', 1599978507, 1599978507),
(456, 'K8171010202', 'Kota Ambon', 2, '$2y$10$q0LyxhZD.H6qQd3DCE.wc..tfo/E/j46snQDFGM6X3R5A78kfi/TW', 'Kota Ambon', 'Maluku', 1599978507, 1599978507),
(457, 'K8172040202', 'Kota Tual', 2, '$2y$10$HBFePu1xNG23n.WpVATGb.WEAvb/CCReTwa/GnFTp26Z6IP7npUQq', 'Kota Tual', 'Maluku', 1599978508, 1599978508),
(458, 'K8201090201', 'Halmahera Barat', 2, '$2y$10$T2rWzxRqc.SYVQGmo0m5UOnkl5JHeBXbPcSVNAQ4ZtNiTibVmoGLG', 'Halmahera Barat', 'Maluku Utara', 1599978508, 1599978508),
(459, 'K8202030102', 'Halmahera Tengah', 2, '$2y$10$re9TZuzzVhBS74LR34gZKeEtudpEkcWO7TZ7R4DmZR2qPwyjfkHiq', 'Halmahera Tengah', 'Maluku Utara', 1599978508, 1599978508),
(460, 'K8203021201', 'Kepulauan Sula', 2, '$2y$10$AieYU715UEDmDr1BSauskekteP5M58C6PckLBE0XA2TtyzGJKJLyy', 'Kepulauan Sula', 'Maluku Utara', 1599978509, 1599978509),
(461, 'K8204030201', 'Halmahera Selatan', 2, '$2y$10$cEZjaSBqFgKVuwoCRjTvpuHcngj7nqlzWnAxEFkvAjnYBxHgf393y', 'Halmahera Selatan', 'Maluku Utara', 1599978509, 1599978509),
(462, 'K8205040201', 'Halmahera Utara', 2, '$2y$10$ir/L9DQDwtSE56Mkv75Ri.Q6TVVpVXXz7UEE7SjBbm02/sOBS5Y4i', 'Halmahera Utara', 'Maluku Utara', 1599978509, 1599978509),
(463, 'K8206030101', 'Halmahera Timur', 2, '$2y$10$9EQmqVS5gomSfKpCL57NHu2XO.qnGCEZJf4Ze9Gt1u.qNYkq/4VT6', 'Halmahera Timur', 'Maluku Utara', 1599978509, 1599978509),
(464, 'K8207010201', 'Pulau Morotai', 2, '$2y$10$4h.l5Vln.TauTTKaT1GZQutvbopTzYi2OTXO1JurgHmtE/TFoK09G', 'Pulau Morotai', 'Maluku Utara', 1599978510, 1599978510),
(465, 'K8208010101', 'Pulau Taliabu', 2, '$2y$10$iMhvaPnux3HIe2NltoJvmeiCcDDInZf9RDR.3dIjGB4epaj0W1rgy', 'Pulau Taliabu', 'Maluku Utara', 1599978510, 1599978510),
(466, 'K8271030101', 'Kota Ternate', 2, '$2y$10$tLvyRZ/9gMmYjG.krAldJuOHWkKT.Ro5fKZiQiRDqZrhfE13gG3u2', 'Kota Ternate', 'Maluku Utara', 1599978510, 1599978510),
(467, 'K8272030201', 'Kota Tidore Kepulauan', 2, '$2y$10$MPjkbn4MrQG6Suz01HyxheoLr9D3U0ValoPOuR88fXTr5gwyWrQw6', 'Kota Tidore Kepulauan', 'Maluku Utara', 1599978510, 1599978510),
(468, 'K9101060201', 'Fak-fak', 2, '$2y$10$adN0/aJv366U9QweWumdmuTlCaX.TYUjpXQvQhnI12VZ0oh9uxrGu', 'Fak-fak', 'Papua Barat', 1599978511, 1599978511),
(469, 'K9102030101', 'Kaimana', 2, '$2y$10$Y8mjfimTYm6xnxhQewBeMe7SZ.nKeyGtq0gUVnDStPFFqRRUu5xjq', 'Kaimana', 'Papua Barat', 1599978511, 1599978511),
(470, 'K9103030101', 'Teluk Wondama', 2, '$2y$10$QjYGC3mes6ZbOiz2p7ZlQuwtwgXXlXvo2m0z3ubk1GKP5Y7JRg9IK', 'Teluk Wondama', 'Papua Barat', 1599978511, 1599978511),
(471, 'K9104050101', 'Teluk Bintuni', 2, '$2y$10$h5fzkFBRSaiKkOe0WNuaOuY9mmFePUKdRhcR7LxzlIdH2cYMbUt9m', 'Teluk Bintuni', 'Papua Barat', 1599978512, 1599978512),
(472, 'K9105141202', 'Manokwari', 2, '$2y$10$MS3WHQaoS0ZicQIYunTlpupfJ7duzcpxwrmlZce0dF9fYMwXzmk1G', 'Manokwari', 'Papua Barat', 1599978512, 1599978512),
(473, 'K9106060201', 'Sorong Selatan', 2, '$2y$10$ieDZ3T011pKG2ybQRjRh/u/sbxz2G6PWA7baehWsy9D/RgIdnu6M.', 'Sorong Selatan', 'Papua Barat', 1599978512, 1599978512),
(474, 'K9108040202', 'Raja Ampat', 2, '$2y$10$CO7FOvuyHsFp/8BLjc60uuIzRskuSyIg3oaEzv1kXPJkgbbZrCGh6', 'Raja Ampat', 'Papua Barat', 1599978512, 1599978512),
(475, 'K9110060201', 'Maybrat', 2, '$2y$10$Q7cAlW7vR91a2MQ1l4ep7uHuN0KCJTMU2FXg/n3ErO1IjGYejovem', 'Maybrat', 'Papua Barat', 1599978513, 1599978513),
(476, 'K9111060101', 'Manokwari Selatan', 2, '$2y$10$eJI.6ImJOaTsEQ.1e8fsguIt8dUOns1DLlmq32UKTyltyD8jZrWUy', 'Manokwari Selatan', 'Papua Barat', 1599978513, 1599978513),
(477, 'K9112050101', 'Pegunungan Arfak', 2, '$2y$10$JnAl5gdi9xvR1HDLX0VOX.swDWMYIIcKaHERgnBL20q7cvdOspmO.', 'Pegunungan Arfak', 'Papua Barat', 1599978513, 1599978513),
(478, 'K9171020201', 'Kota Sorong', 2, '$2y$10$OVYXmy3JhIA.PUC5SeB7KurvBxH2zf9x0Tp2gASJMfIjQ61Gpgxv.', 'Kota Sorong', 'Papua Barat', 1599978513, 1599978513),
(479, 'K9401040201', 'Merauke', 2, '$2y$10$I2/ELchi1.pY2GjmBy2iW.GaxANFSzeBsNi65XM2OyS76BXC7gGay', 'Merauke', 'Papua', 1599978514, 1599978514),
(480, 'K9402110201', 'Jayawijaya', 2, '$2y$10$Er4EBBxPXlqWZEUwEhP4DOizCQswS2yBeQlOMZLS7a/KVFrEFwo3O', 'Jayawijaya', 'Papua', 1599978514, 1599978514),
(481, 'K9403240201', 'Jayapura', 2, '$2y$10$NnYtToG0d0zOhqpFPKEkDO4IYOKicfxurmKPPsJrQXK4BQLuGniEC', 'Jayapura', 'Papua', 1599978514, 1599978514),
(482, 'K9404080204', 'Nabire', 2, '$2y$10$OjCncGmruSfkkNql3dORU.vaH5NX12lMxd7YLV1Y118wUbcfhLbI6', 'Nabire', 'Papua', 1599978514, 1599978514),
(483, 'K9408060202', 'Kep. Yapen', 2, '$2y$10$B8FtXTfqZnXt7VYLgNbKPOvVcO2ir/0g/9Jbgyynti7XE.eIHLaEO', 'Kep. Yapen', 'Papua', 1599978515, 1599978515),
(484, 'K9409060202', 'Biak Numfor', 2, '$2y$10$tFZhoE/H6hIXC5qxYDul0eAFQQu1t2UtM2.rIge2SU4UzZiz4VDa2', 'Biak Numfor', 'Papua', 1599978515, 1599978515),
(485, 'K9410030101', 'Paniai', 2, '$2y$10$45AhtDNKvoPLs9t3vTPrHeM/.Wy/u.tFbMVSUdIZxG83pTRD.FgQC', 'Paniai', 'Papua', 1599978515, 1599978515),
(486, 'K9411050201', 'Puncak Jaya', 2, '$2y$10$ufEwZh2s.L1d5lOuPXRGx.AOXcQ4ZhCDOATfo/oQalcRddOjh5GtG', 'Puncak Jaya', 'Papua', 1599978515, 1599978515),
(487, 'K9412030202', 'Mimika', 2, '$2y$10$drXMNLjOdN2PnIcIyjIqlO//Njqhpg760nWiupn3oH5fGlvxyEQUy', 'Mimika', 'Papua', 1599978516, 1599978516),
(488, 'K9413030101', 'Boven Digoel', 2, '$2y$10$Co7DlAxeSCT/t9ZJEr48S.zc22tHxZql4.mbMHwj2QoWREO.IVKgG', 'Boven Digoel', 'Papua', 1599978516, 1599978516),
(489, 'K9415010201', 'Asmat', 2, '$2y$10$qw8Qp4QsTipE2wPk9txMNuARvG4q9uYsxvr8GjxIELg7IPStlxXUq', 'Asmat', 'Papua', 1599978516, 1599978516),
(490, 'K9416013101', 'Yahukimo', 2, '$2y$10$mM8xd9y3nTU.3bDfEPNyvesxH3VuYzZsIYeb81vQFXU29RSo2it.a', 'Yahukimo', 'Papua', 1599978517, 1599978517),
(491, 'K9417020101', 'Pegunungan Bintang', 2, '$2y$10$F9Tf0gcn1veiG7ZLR8Tspu4H0lpPnNGOxYGxurvg1BfmUnINRR5EK', 'Pegunungan Bintang', 'Papua', 1599978517, 1599978517),
(492, 'K9418020101', 'Tolikara', 2, '$2y$10$IDjZyXjVfXMORjsLjM/c3.IBaLJF9hWJXbTAZfQPQVvaeVLn3IrDm', 'Tolikara', 'Papua', 1599978517, 1599978517),
(493, 'K9419050101', 'Sarmi', 2, '$2y$10$6NNR0SYIrCjePeAF9ZcM0O.3HtzbWAWive7GLe.qjdbrrPHI7kuAG', 'Sarmi', 'Papua', 1599978517, 1599978517),
(494, 'K9420050101', 'Keerom', 2, '$2y$10$wvf8hxTFZWjQw6m3acf4S.YH258Rdkdd.5RkWDUhz2C4Yr4gU7nd6', 'Keerom', 'Papua', 1599978518, 1599978518),
(495, 'K9426010101', 'Waropen', 2, '$2y$10$z.sol./VSUwOEIgavGPYkuXGnV2WseTPOaYN1CexUjLmpoK5glXVW', 'Waropen', 'Papua', 1599978749, 1599978749),
(496, 'K9427030103', 'Supiori', 2, '$2y$10$zp8HCtXfD/m/yL.tOTxVP.2DRoQ6NE0qA2zbXSTt.zwYWxY7rmFt.', 'Supiori', 'Papua', 1599978749, 1599978749),
(497, 'K9428050101', 'Memberamo Raya', 2, '$2y$10$7SsmqKnGVgUYMeLPfFIpEeumRCtcyePulH/M./d1OxSP6U1wcfr32', 'Memberamo Raya', 'Papua', 1599978749, 1599978749),
(498, 'K9429020101', 'Nduga', 2, '$2y$10$g1l0RZB79Fk3hmcavXFk4erRmZGVMBNXxeq.wBPlUHMhZEgO3vVNy', 'Nduga', 'Papua', 1599978750, 1599978750),
(499, 'K9430030101', 'Lanny Jaya', 2, '$2y$10$Iyx9MstHB0zKSFcFf26VaO0jrldWNZb5piWjiz.GgW7yvuC/ZhvwW', 'Lanny Jaya', 'Papua', 1599978750, 1599978750),
(500, 'K9431010201', 'Memberamo Tengah', 2, '$2y$10$PTabV8ESm1MgtHhwPGhq8O6tc9hhp9gx.NIECMYmVZJaby6RHD8k2', 'Memberamo Tengah', 'Papua', 1599978750, 1599978750),
(501, 'K9432040101', 'Yalimo', 2, '$2y$10$feX20nsdahJtDbjMfttu5OEJlZ7AZ.0N/aELnl35OAze0Xl0Bv8z6', 'Yalimo', 'Papua', 1599978750, 1599978750),
(502, 'K9433030101', 'Puncak', 2, '$2y$10$GpP9Ysc2PPo6PjmxUy4co.k1c/xQ7T.c1uwXKRL1gG7Tw.YEb8XVC', 'Puncak', 'Papua', 1599978750, 1599978750),
(503, 'K9434080101', 'Dogiyai', 2, '$2y$10$x1ZRcjV7Z6G9O2gPWNiQgef.nEs8nygoWdDwsz7ZYBPv18NSZPC3i', 'Dogiyai', 'Papua', 1599978751, 1599978751),
(504, 'K9435020101', 'Intan Jaya', 2, '$2y$10$ATTJaF47EMQ23v8AF/V7OOz7LPHhCGlUZWJRLh0Xwxpoe9bFTm2wq', 'Intan Jaya', 'Papua', 1599978751, 1599978751),
(505, 'K9436030101', 'Deiyai', 2, '$2y$10$8rYC3lQf2JVLP4v.V8my8OefDMQukkUqupBmn222RAjBO3okAMUny', 'Deiyai', 'Papua', 1599978751, 1599978751),
(506, 'K9471020203', 'Kota Jayapura', 2, '$2y$10$RzzjJ//GOzi.b1H63.pCbOGMRXhfQoaSFyoKhF31lCgfLgDmXzE5i', 'Kota Jayapura', 'Papua', 1599978751, 1599978751),
(507, 'kode', 'nama', 0, '$2y$10$jFSMkeRYLJfLGK.AZ8HUF.PFXXujqyrG0ucTH9qEVqTayVomLP60u', 'kabupaten', 'provinsi', 1599978751, 1599978751),
(508, 'P1101030101', 'SIMEULUE TENGAH', 3, '$2y$10$MsvCJd6eelUXzz5dCzm8juRrZZttlES8ReHWwqO7FLxroDaXIollq', 'Simeulue', 'Aceh', 1599978752, 1599978752),
(509, 'P1102021201', 'SINGKIL UTARA', 3, '$2y$10$FNgM6qbygE/2c/lKTbx0KeQ0TQKExakWfBy.SmfypxdHm7G0ZhVLC', 'Aceh Singkil', 'Aceh', 1599978752, 1599978752),
(510, 'P1103080201', 'MEUKEK', 3, '$2y$10$v0ZQkasopjGjNsVFkmgokeq9w5f3Iu.ytbK3tW1kIXniNHZoIe54S', 'Aceh Selatan', 'Aceh', 1599978752, 1599978752),
(511, 'P1104020101', 'LAWE SIGALA-GALA', 3, '$2y$10$.JNz3MlWChjqQ0l8ZQHMgunX5jteiUt3nu7N79.mRHCMCiz8BmdfG', 'Aceh Tenggara ', 'Aceh', 1599978752, 1599978752),
(512, 'P1105180102', 'SIMPANG ULIM', 3, '$2y$10$UFAmh5zn4AGpCxV5S.C/EunDR8nfsCMrq4GPgGWCpe03yRA6eMGHq', 'Aceh Timur', 'Aceh', 1599978752, 1599978752),
(513, 'P1106031201', 'KOTA', 3, '$2y$10$MuNbQvsHi21PanlO56cKnefLnpT/fjXIqg29CnaOBK/kKXO60bR76', 'Aceh Tengah', 'Aceh', 1599978752, 1599978752),
(514, 'P1107081201', 'MEUREUBO', 3, '$2y$10$QK6k4aDQ/UkfH9VzE68reu6TEElp9r17LK/dhLnLbjgTfqF8HuJi6', 'Aceh Barat', 'Aceh', 1599978753, 1599978753),
(515, 'P1108090101', 'INGIN JAYA', 3, '$2y$10$1YL5YqOQWO1TQ78VVkwL/O5ZT.TuNBWy9coADrGKmAKaV9y8F.enW', 'Aceh Besar', 'Aceh', 1599978753, 1599978753),
(516, 'P1109180101', 'KEMBANG TANJONG', 3, '$2y$10$CVSfPMHyIDmmvqmBSvzmD.Dyif40TqLfo/VoCACtQjvT0O7.o2g7m', 'Pidie', 'Aceh', 1599978753, 1599978753),
(517, 'P1110040101', 'PEUDADA', 3, '$2y$10$n6wXf2qNjGMU5Hx3Ne4IOeUmjqVu5VJfaOwaw1DgUcJJzsTkf49jS', 'Bireuen', 'Aceh', 1599978753, 1599978753),
(518, 'P1111170201', 'DEWANTARA', 3, '$2y$10$UeUVbJXQ7lIF8NOjfFUJ3.WcJM88dlxztxM7uMIsn0e9xD.vmouKm', 'Aceh Utara', 'Aceh', 1599978753, 1599978753),
(519, 'P1112040201', 'SUSOH', 3, '$2y$10$EGRQHu5RxSWiQ.CvMCV5z.oaGOhS8PYza47h4A4c4diKMBcgcgjlu', 'Aceh Barat Daya', 'Aceh', 1599978753, 1599978753),
(520, 'P1113020101', 'BLANGKEJEREN', 3, '$2y$10$tWes/HhWYOsj6uCZdIY4k.W2Ag/o.rYHxc70xKB8JWm6GbpNqcfW6', 'Gayo Lues', 'Aceh', 1599978754, 1599978754),
(521, 'P1114070201', 'KARANG BARU', 3, '$2y$10$lIrFvodRSHTQEWBCTPM2bOP9rWY6aRTWXguz5ZLLZO9RAJgqR/7kW', 'Aceh Tamiang', 'Aceh', 1599978754, 1599978754),
(522, 'P1115050101', 'UTEUN PULO', 3, '$2y$10$y5/y0HMNstXfWysdn9dV5.bykki0bb6jZBRLESHZ/OZiSZmNjRp6G', 'Nagan Raya ', 'Aceh', 1599978754, 1599978754),
(523, 'P1116010101', 'TEUNOM', 3, '$2y$10$J2ny7N9orhzGaebo4tbiAuGGRSdcT3eQEXB4I8o.nouaWvDU9zjzy', 'Aceh Jaya ', 'Aceh', 1599978754, 1599978754),
(524, 'P1117030201', 'SIMPANG TIGA', 3, '$2y$10$HNq5rGgZFou67bbImnb3TOhf663pPDTyxwTJ/SSrvfVy2.p6QQCoC', 'Bener Meriah ', 'Aceh', 1599978755, 1599978755),
(525, 'P1118080101', 'BANDAR BARU', 3, '$2y$10$8lwseI9J9hWfYoJRhCfY9...dBoJ3FnoGq/Ex2u6bFNgHQpYzZlkG', 'Pidie Jaya ', 'Aceh', 1599978755, 1599978755),
(526, 'P1171012201', 'BANDA RAYA', 3, '$2y$10$zoAzG6j2xntO.Eb1r2qQz.q5LhhdVA0jwDaRYrrfUWfDsTstFgNdC', 'Kota Banda Aceh', 'Aceh', 1599978755, 1599978755),
(527, 'P1172010101', 'SUKAJAYA', 3, '$2y$10$sjdEk6z9.ltgHZqUvucU3OBu33vJ8y2BskjCqZ3vruHGufYw8S2Ae', 'Kota Sabang', 'Aceh', 1599978755, 1599978755),
(528, 'P1173020201', 'LANGSA BARAT', 3, '$2y$10$kubExnrOVHyRiuK.hHqbE.Ofq92QLloxSzVu2aX8wPLq.9Fn9c9LK', 'Kota Langsa', 'Aceh', 1599978755, 1599978755),
(529, 'P1174030201', 'BANDA SAKTI', 3, '$2y$10$JSRhYQx2C8l8Sc.c9zUBje2oceLsA/gROpv2uZn0tnEE8XT6mgah2', 'Kota Lhoksumawe', 'Aceh', 1599978756, 1599978756),
(530, 'P1175020101', 'PENANGGALAN', 3, '$2y$10$IzoCCSWMwuPfIbgyEp7RpuuT1s.XgmuoVbqRuHtrYgrCbf2sPq7pq', 'Kota Subulussalam', 'Aceh', 1599978756, 1599978756),
(531, 'P1201070101', 'HILIWETO GIDO', 3, '$2y$10$vpsCQI0/sNJQ5OucvAzAwevDraP7kesY4mdKbZ5azK6jUn5633UmC', 'Nias', 'Sumatera Utara', 1599978756, 1599978756),
(532, 'P1202080101', 'SIABU', 3, '$2y$10$gWYOEmEO5JGudtLFZPx0FOJFgwyprax1s894Zv3U0msKQjAXaZeqW', 'Mandailing Natal', 'Sumatera Utara', 1599978757, 1599978757),
(533, 'P1203010101', 'PINTUPADANG', 3, '$2y$10$DQtd0BWaYEd94E39N2Omu.d0cSADwKVFHXY1RZ0eG99kTZqHKu/X6', 'Tapanuli Selatan ', 'Sumatera Utara', 1599978757, 1599978757),
(534, 'P1204011201', 'BADIRI', 3, '$2y$10$KZqbUKq2Tjg41JDGker7rOSMaH4niE1J9UUIUrzV.8EIHrv6pcrmm', 'Tapanuli Tengah', 'Sumatera Utara', 1599978757, 1599978757),
(535, 'P1205120102', 'SIBORONGBORONG', 3, '$2y$10$FrJuu6IFQLOp8gQI9k.HqOjf3iACGDMdB8T3nvplPf1dBISwbPgrK', 'Tapanuli Utara', 'Sumatera Utara', 1599978758, 1599978758),
(536, 'P1206030201', 'BALIGE', 3, '$2y$10$A1y9eZtOrWWyG8vNSqz2te5J3cWkEFSKneJtNUHHsPdx/H21BqMYm', 'Toba Samosir', 'Sumatera Utara', 1599978758, 1599978758),
(537, 'P1207220201', 'KOTA RANTAU PRAPAT', 3, '$2y$10$OopyRblhB8DX/JETtcKWLusDtm4VtD1jMUrIgqUh2Mzn8ua3y2S9O', 'Labuhan Batu ', 'Sumatera Utara', 1599978758, 1599978758),
(538, 'P1208160201', 'SIDODADI', 3, '$2y$10$LFYDP9saPMODNUe3x99mVe2B2H21SWcVd3mwg6zYsQpRKChjpoKha', 'Asahan ', 'Sumatera Utara', 1599978758, 1599978758),
(539, 'P1209190201', 'PERDAGANGAN', 3, '$2y$10$xfCiNHxwc9fF/U3qK9IjCOWPB9dGyUIjQsTWkNShyqoJtsV8X0Ree', 'Simalungun', 'Sumatera Utara', 1599978759, 1599978759),
(540, 'P1210030202', 'BATANG BERUH', 3, '$2y$10$X0ccMKtT9kKMW8l5qopVUuyRALawRHMRWK7/G3jYtAGqMHW4Zf8AW', 'Dairi', 'Sumatera Utara', 1599978759, 1599978759),
(541, 'P1211110101', 'TIGAPANAH', 3, '$2y$10$BTwJTkEseGti5y8DnsrJ6eMD2.6kxNuyjb/OSPbop83OhYfZSwexu', 'Karo', 'Sumatera Utara', 1599978759, 1599978759),
(542, 'P1212190201', 'GALANG', 3, '$2y$10$9uSXh15C2eGJ/qyZYz3b3.aEHW.FJdTen0rfAZrJI0RkPUyrGtkz2', 'Deli Serdang', 'Sumatera Utara', 1599978760, 1599978760),
(543, 'P1213150201', 'GEBANG', 3, '$2y$10$GFkby6DpVwmnw2q5fKVcPukmY4zrMDKs7QlQGH71a3C8A0Q2R6mz6', 'Langkat', 'Sumatera Utara', 1599978760, 1599978760),
(544, 'P1214031202', 'BAWOMATALUO', 3, '$2y$10$Lglx3lmSe2hvPKaNO1xn4uKxfex2LiOhdXjcWH7FxiehpmyFQ5d3O', 'Nias Selatan', 'Sumatera Utara', 1599978760, 1599978760),
(545, 'P1215040201', 'MATITI', 3, '$2y$10$w7IKw0gizRZb8g9GTsvUPODiXObPPu3FyfI1Ef0LQvbGCOr8wKkne', 'Humbang Hasundutan', 'Sumatera Utara', 1599978761, 1599978761),
(546, 'P1216020101', 'SUKARAMAI', 3, '$2y$10$O6cxxKhhgxziu9p/./CokOhASgNwQNj6J3s0RLJ5ZkCezZ7hQlrzG', 'Pakpak Bharat', 'Sumatera Utara', 1599978761, 1599978761),
(547, 'P1217080201', 'BUHIT', 3, '$2y$10$GRjAELN78e8HhakzssvSyejOIdxsGfhVLqGq/.Z07y5S7LkkZmGQ.', 'Samosir', 'Sumatera Utara', 1599978761, 1599978761),
(548, 'P1218070201', 'TANJUNG BERINGIN', 3, '$2y$10$LWncSIMOTtSs261Rjuszduy0cyKOJvjcbt20r3xOCPsAwX0yJkkKa', 'Serdang Bedagai', 'Sumatera Utara', 1599978762, 1599978762),
(549, 'P1219050101', 'INDRAPURA', 3, '$2y$10$oQYbUYpNA8HfNGkir0csueIzv/VFuMsG4ys/czq1q/6JmV9P1FbDW', 'Batu Bara', 'Sumatera Utara', 1599978762, 1599978762),
(550, 'P1220040203', 'GUNUNG TUA', 3, '$2y$10$jFye16QS1a050yt/a2BuQOXuuNS.fY.qhfnJDj7OegruPDkUqXh3u', 'Padang Lawas Utara', 'Sumatera Utara', 1599978762, 1599978762),
(551, 'P1221040201', 'LATONG', 3, '$2y$10$2N5.raMyBgAo./NEvkMt8OEt2AbbcRMKYgKciIP5j8K2vWc/md7Da', 'Padang Lawas', 'Sumatera Utara', 1599978763, 1599978763),
(552, 'P1222020101', 'CIKAMPAK', 3, '$2y$10$TF.HH9Y07ixgfNJf/nzR8.cFYG3cLivdJS4Uj4s5hSKq8zKJogV.O', 'Labuhan Batu Selatan', 'Sumatera Utara', 1599978763, 1599978763),
(553, 'P1223010101', 'AEK KOTA BATU', 3, '$2y$10$7F8OS7dkuo2LWQZgxXqFLuvZuWauHDEpG9NDdAvtp.8n3ygVBeAW6', 'Labuhan Batu Utara', 'Sumatera Utara', 1599978763, 1599978763),
(554, 'P1224040201', 'NAMOHALU ESIWA', 3, '$2y$10$eNkyszhSk1q3GGZix1v03.fokpgJB6D7qH9GR5GXWP3XSpM9O23lS', 'Nias Utara', 'Sumatera Utara', 1599978763, 1599978763),
(555, 'P1225020201', 'LAHOMI', 3, '$2y$10$cPSh6TfelkJKC9extEkBy.1BSbRo6RPcZqcu0J0RIuxU/WdC5sVfG', 'Nias Barat', 'Sumatera Utara', 1599978764, 1599978764),
(556, 'P1271010201', 'PINTU ANGIN', 3, '$2y$10$4PVU.8sYEJeDdCEhgludP.tql8eRZCN3i5d1DS/AtNtplJdx83jUO', 'Kota Sibolga', 'Sumatera Utara', 1599978764, 1599978764),
(557, 'P1272030201', 'KAMPUNG BARU', 3, '$2y$10$SQjVqHMmfL0QjPlwNK/01e.IGaF/DZa52OAd85f8EEmQPk92ZSG3m', 'Kota Tanjung Balai', 'Sumatera Utara', 1599978764, 1599978764),
(558, 'P1273010201', 'PARSOBURAN ', 3, '$2y$10$LBIZ7wt06EJJvSHkK3ejj.rCwy7XOdtOyQMtAUDloNilBusibjTT.', 'Kota Pematang Siantar', 'Sumatera Utara', 1599978765, 1599978765),
(559, 'P1274020203', 'SRI PADANG ', 3, '$2y$10$SrO.oz9tj0x8aBJRsN9LQ.v6skakBv.0XFOF0EPdt5PG2MlKWNWqy', 'Kota Tebing Tinggi', 'Sumatera Utara', 1599978765, 1599978765),
(560, 'P1275060101', 'TELADAN', 3, '$2y$10$0jIgK0vBvH8osUuEiqp.kuy22qA3icP78X/qa1frHsTP.l7P/9tUS', 'Kota Medan ', 'Sumatera Utara', 1599978765, 1599978765),
(561, 'P1276030101', 'TANAH TINGGI', 3, '$2y$10$Co983O5Z7NdbvDqryhBvy.wKao3a53s5rsNvP4zKv6SkhRQx8Jn1K', 'Kota Binjai', 'Sumatera Utara', 1599978766, 1599978766),
(562, 'P1277030201', 'BATUNADUA', 3, '$2y$10$d.6lnzqpk5Oi4nzoi8csNOrPfX0lVDYtHeFW/hVe8edyAs.r6Yhy.', 'Kota Padang Sidempuan', 'Sumatera Utara', 1599978766, 1599978766),
(563, 'P1278040201', 'GUNUNG SITOLI', 3, '$2y$10$6Bm8RmKANkn87qk/sF8/Y.0xbDvdmgHKI5qnxx9Eg4FqNPXfy2KT6', 'Kota Gunung Sitoli', 'Sumatera Utara', 1599978766, 1599978766),
(564, 'P1301030101', 'MUARA SIBERUT', 3, '$2y$10$9Gbb9ZORfd3MOM7Svh6S4uc9ALMVwloFtLA2/S4XY4cwRkjyqaRWW', 'Kepulauan Mentawai', 'Sumatera Barat', 1599978766, 1599978766),
(565, 'P1302110102', 'TARUSAN', 3, '$2y$10$EyZG.IhuG/9bzBlwK7sCM.kMegMJMBE.c7Q11S./n2hrr6/FAgrnC', 'Pesisir Selatan', 'Sumatera Barat', 1599978766, 1599978766),
(566, 'P1303080102', 'TALANG', 3, '$2y$10$O6m8eTBUbOTETet3.Ob/f.V.T60dvZkyzIIdaCeTrYIarY9dvM9QO', 'Solok', 'Sumatera Barat', 1599978767, 1599978767),
(567, 'P1304060101', 'TANJUNG GADANG', 3, '$2y$10$tPPkQdbBkbE/DGz4TPZlBOq4djOmfQZyNFUIsYHp3BFnfAFJvjIOy', 'Sijunjung', 'Sumatera Barat', 1599978767, 1599978767),
(568, 'P1305050201', 'LIMA KAUM  I', 3, '$2y$10$/1QZz3HNRAZNt7.wEZK71eER93Xad.Cx0qICAiivX9c4ok.ASgWLy', 'Tanah Datar', 'Sumatera Barat', 1599978767, 1599978767),
(569, 'P1306010101', 'PASAR USANG', 3, '$2y$10$t2W//MNs8q7dnLh8r/O1E.74chpRnqxRdY1W7x7PJSRu.8ytl0wGy', 'Padang Pariaman', 'Sumatera Barat', 1599978767, 1599978767),
(570, 'P1307090101', 'PAKAN KAMIS', 3, '$2y$10$HtftymlsxrjayGx0pumZLuGS9HXav60VtbcetKHonToJWMF6NtHDq', 'Agam', 'Sumatera Barat', 1599978768, 1599978768),
(571, 'P1308030202', 'TANJUNG  PATI', 3, '$2y$10$hluNU/cmhRMsMyQZTePT7ekzuCKzuQ7Z.8aEWXsmt/02Tp79MVpki', 'Lima Puluh Kota', 'Sumatera Barat', 1599978768, 1599978768),
(572, 'P1309110102', 'TAPUS', 3, '$2y$10$sTJKzOy0znEcjZIkBkS6OOj7wH4aWLJBCw5oIRfUGJLhRLu0gXATS', 'Pasaman', 'Sumatera Barat', 1599978768, 1599978768),
(573, 'P1310040201', 'MUARA LABUH', 3, '$2y$10$B5xzhTTLgHz/zj/q3GtsfeJPNZYaM1p5wv8tlRJcA7voR5FEIRxwC', 'Solok Selatan', 'Sumatera Barat', 1599978768, 1599978768),
(574, 'P1311030103', 'SITIUNG I', 3, '$2y$10$VnC6lItMkyRvdGLe7gyD4.A0hwgLMJdP4T0B0q/6uhPFEJWGr7dK.', 'Dharmas Raya', 'Sumatera Barat', 1599978769, 1599978769),
(575, 'P1312050101', 'UJUNG GADING', 3, '$2y$10$pE5oaejF5bYg4zV0s5EXoOeI1UgXiLsvq6kcGuM/k/KwI.vn6Fn1u', 'Pasaman Barat', 'Sumatera Barat', 1599978769, 1599978769),
(576, 'P1371050201', 'ANDALAS', 3, '$2y$10$sSO2uYsyJMb2UC/ZNX6.TOeC8iWipnsk5BwaQ0UzIeNYZXyPk7mIO', 'Kota Padang', 'Sumatera Barat', 1599978769, 1599978769),
(577, 'P1372020201', 'TANJUNG PAKU', 3, '$2y$10$//yjRwCgsJxt/JRx07aNUut/zP0n.k/MkmefMnWKT7UDt44Mu0bu.', 'Kota Solok', 'Sumatera Barat', 1599978770, 1599978770),
(578, 'P1373040101', 'TALAWI', 3, '$2y$10$oaMZZ5wm4d3dSKXUItcazO3F.iK6FPZSNKkVKUKLuR665KqFszNu.', 'Kota Sawah Lunto', 'Sumatera Barat', 1599978770, 1599978770),
(579, 'P1374020201', 'GUNUNG', 3, '$2y$10$nbAAYDW/PO2VWCJ0CZ7/eeTspXsZSu3o5ElIzeukSDpdDTYliN8sO', 'Kota Padang Panjang', 'Sumatera Barat', 1599978770, 1599978770),
(580, 'P1375010201', 'PERKOTAAN RASIMAH AHMAD', 3, '$2y$10$GsH02v3RCUuqxxFs1Xm8hefat0RcM5skqs8l5I65FlzTkeqiZHP2.', 'Kota Bukit Tinggi', 'Sumatera Barat', 1599978771, 1599978771),
(581, 'P1376010101', 'IBUH', 3, '$2y$10$HzSbJPu6ylsV4LQGdSYyYOFRIyEhWSiKASLl5Dp7n3azS.Ut/KE0.', 'Kota Payakumbuh', 'Sumatera Barat', 1599978771, 1599978771),
(582, 'P1377010101', 'KURAI TAJI', 3, '$2y$10$LpvhK/UeyqpiyhKdoakQEehkYSOzE2.Bj52REBp/HTX93rIXIgpsu', 'Kota Pariaman ', 'Sumatera Barat', 1599978771, 1599978771),
(583, 'P1401052101', 'PERHENTIAN LUAS', 3, '$2y$10$/3DS2ct06bSqCzJbXFR/fuaklddX3VgEik/2suG3XBA5AZx.Adzbq', 'Kuantan Singingi', 'Riau', 1599978772, 1599978772),
(584, 'P1402010101', 'PARANAP', 3, '$2y$10$5oyocwIdEnSCykDV0Keoo.olmwJJ/X5Q9/9/FppSWj8KFIl4dOE3K', 'Indragiri Hulu', 'Riau', 1599978772, 1599978772),
(585, 'P1403061101', 'TEMBILAHAN HULU', 3, '$2y$10$2xfcG4Ko86ZneS5tN0x5.OCc9E8A2zOM4Y5Fd2kGUe5ByeJvsTiYK', 'Indragiri Hilir', 'Riau', 1599978772, 1599978772),
(586, 'P1404011201', 'PANGKALAN KERINCI', 3, '$2y$10$DnXFR1o7NzHciJJsxakjqeC.OpTkQfOCf5AJlTzCFgAB/SxQ7lITi', 'Pelalawan', 'Riau', 1599978772, 1599978772),
(587, 'P1405030101', 'SUNGAI APIT', 3, '$2y$10$Md6SdkDpado.TJIfR9JGbO4CFaFGMBNNUeH62Mhu7i7uaeNPxnrKW', 'Siak', 'Riau', 1599978773, 1599978773),
(588, 'P1406030101', 'KUOK', 3, '$2y$10$8Kpo48jp2ffMc1H/cyhP/OkRMa1sehWWxnrFD.z80QKqcM18CAanW', 'Kampar', 'Riau', 1599978773, 1599978773),
(589, 'P1407050101', 'TAMBUSAI', 3, '$2y$10$JX15EuT/jsgQeL1LQXD.1eKew/sAc3XQQqCRmgVU9xr1cqun8pY3.', 'Rokan Hulu', 'Riau', 1599978773, 1599978773),
(590, 'P1408050101', 'SELAT BARU', 3, '$2y$10$B0ZLyiec16CgJL8GyeTekOGcI0DI58mYjm07pLW.FcFakQo89.8ga', 'Bengkalis', 'Riau', 1599978774, 1599978774),
(591, 'P1409041201', 'SINABOI', 3, '$2y$10$t0p13AbOaOwb3gI/8gxHcOxZ6XeAEGuU2g2FWPL/Aeog35rBVRtma', 'Rokan Hilir', 'Riau', 1599978774, 1599978774),
(592, 'P1410020201', 'SELAT PANJANG', 3, '$2y$10$CDSl1lUpGjzRToQOYVQZe.ikUgtixYRW3Tjxw/CpWHS97llMu/l4a', 'Kepulauan Meranti', 'Riau', 1599978774, 1599978774),
(593, 'P1471021102', 'SIMPANG TIGA', 3, '$2y$10$WdOdntds0t3drFAYv0JQpeFSCsYj.pnrhgVsYlx1uC3bGhmwzlasu', 'Kota Pekan Baru', 'Riau', 1599978774, 1599978774),
(594, 'P1473010101', 'BUKIT KAPUR', 3, '$2y$10$5vnXDEvkpa4dQ/71iDil2.KZlAxrW8tulQrXXVm.FVRePJnsuuL5e', 'Kota Dumai', 'Riau', 1599978775, 1599978775),
(595, 'P1501090101', 'KERSIK TUO', 3, '$2y$10$K5w1GdrrX4yRMxOjLLCYV.INJK8duKmY0fJFMovlNtOXgGur8MXuW', 'Kerinci', 'Jambi', 1599978775, 1599978775),
(596, 'P1502040202', 'PEMATANG KANDIS', 3, '$2y$10$0.JQB7HMn2cf05VrDPTCF.6ZNtMiGra2jzHe55EhH14cH7puyUoPm', 'Merangin', 'Jambi', 1599978775, 1599978775),
(597, 'P1503031101', 'SINGKUT', 3, '$2y$10$ZKAvEea9aJsFWdsrPb4E3uPgk8sgbu0sJXu6JlbjqiY2QTm58wKdu', 'Sarolangun', 'Jambi', 1599978776, 1599978776),
(598, 'P1504040201', 'MUARA BULIAN', 3, '$2y$10$IKb4oo.4CVUohiQZ9o6XSexNzSmaK/WYcAE4QPvZbr7ZuNWv6z0UW', 'Batang Hari', 'Jambi', 1599978776, 1599978776),
(599, 'P1505050101', 'SIMPANG SEI DUREN', 3, '$2y$10$spImmp.rEQ.VvS0npMwf0ueFr7vaJQzwcK86IMnv2FKEib3rpUGDS', 'Muaro Jambi', 'Jambi', 1599978776, 1599978776),
(600, 'P1506041101', 'SIMPANG PANDAN', 3, '$2y$10$Ejy1qfPyu0xg0zZPVgKeF.LaPolUGKeS2dMV/2S2PLyY0z6..y6gO', 'Tanjung Jabung Timur', 'Jambi', 1599978776, 1599978776),
(601, 'P1507040201', 'SUKOREJO', 3, '$2y$10$S.iTnE4ImKwUnvb0NgdsxuUYgQVbl9DKybEKrrBnqVOYfIpPZkXOO', 'Tanjung Jabung Barat', 'Jambi', 1599978777, 1599978777),
(602, 'P1508030101', 'RIMBO BUJANG II', 3, '$2y$10$uuOgOxOxa7r7XrS1cgclUuftPYGkaeQbKh2HpKHXDirJb4rWHas5S', 'Tebo', 'Jambi', 1599978777, 1599978777),
(603, 'P1509024201', 'MUARA BUNGO I', 3, '$2y$10$r/Wz2fOFmrIzn5k0lgXi4uEBnsQuOJFaf30hQaa7lRzs5WV7.9/Jm', 'Bungo', 'Jambi', 1599978777, 1599978777),
(604, 'P1571020101', 'PAKUAN BARU', 3, '$2y$10$2Ss6UQ8iT0bG.UcC5QurjOcK12OC6B86tlIvdEGDljmVXG/J3wOhS', 'Kota Jambi', 'Jambi', 1599978778, 1599978778),
(605, 'P1572010201', 'TANAH KAMPUNG ', 3, '$2y$10$Luf6d/ktPjUpLoMFWuCA5e0/lHKnnFtpFqCEOA58BsgrCPJcEYh.u', 'Kota Sungai Penuh', 'Jambi', 1599978778, 1599978778),
(606, 'P1601130202', 'KEMALA RAJA', 3, '$2y$10$uhQ8DJJgAOJd2KgOb4LEeuwfjDlrjgElUCe7ZFyoMW33oXeKa68c.', 'Ogan Komering Ulu', 'Sumatera Selatan', 1599978778, 1599978778),
(607, 'P1602060202', 'CELIKAH', 3, '$2y$10$H23swRYDz3Ct7WZ1mjqXUuj61/quuIURl10uWcrTNiD1rXB06Ypl2', 'Ogan Komering Ilir', 'Sumatera Selatan', 1599978779, 1599978779),
(608, 'P1603050101', 'MUARA ENIM', 3, '$2y$10$/bmrn1WvcMlBPUzCovK18efYEgxG8xw5LUqHAHlB/otPNWOqz8SVy', 'Muara Enim', 'Sumatera Selatan', 1599978779, 1599978779),
(609, 'P1604120201', 'BANDAR JAYA', 3, '$2y$10$ZgkcFhj.oQygmd30WK8a3O2mLOTT1G7u2gsGblx2iotdUgbIoNtwW', 'Lahat', 'Sumatera Selatan', 1599978779, 1599978779),
(610, 'P1605072101', 'MUARA KELINGI', 3, '$2y$10$wF8.qRckNh4QKOOxjJjb2eL/s0cWNZ4c2ydklNpyKat16hvecQ5wm', 'Musi Rawas', 'Sumatera Selatan', 1599978780, 1599978780),
(611, 'P1606041201', 'LAIS', 3, '$2y$10$ejafADvmj2/NiF97uCKnw.fGDO1f9eBK4cQ80SbWz4198PJUC2JO.', 'Musi Banyuasin', 'Sumatera Selatan', 1599978780, 1599978780),
(612, 'P1607050101', 'SUKAJADI', 3, '$2y$10$zOtJp3o4dC6tWP5LpiVy.esKW2hbIyU2kdYo1Em2HeT1rXnqDVEM2', 'Banyuasin', 'Sumatera Selatan', 1599978780, 1599978780),
(613, 'P1608050101', 'MUARA DUA', 3, '$2y$10$jmC9ZSxFjzwY0uomy.dyiOflb8vy/3EaVC65CDvqQKTF8N9SLcSrS', 'Ogan Komering Ulu Selatan ', 'Sumatera Selatan', 1599978780, 1599978780),
(614, 'P1609060201', 'GUMAWANG', 3, '$2y$10$R60eRM9qjEY1cezJzQlD1upDN6WoWWeTFZN5/2.hR4X3.fLCoaqAO', 'Ogan Komering Ulu Timur', 'Sumatera Selatan', 1599978780, 1599978780),
(615, 'P1610060101', 'INDRALAYA', 3, '$2y$10$6hVpdwBnqWRaff4fr5Zf9OJgvcVevbyd4nnwfTqdrwNpQIbyqJ3x6', 'Ogan Ilir', 'Sumatera Selatan', 1599978781, 1599978781),
(616, 'P1611070201', 'TEBING TINGGI', 3, '$2y$10$ud9aAWEJMlh6xl1onMYS6e32IYkcnWtTqbIXtxvolf.Udk34n9jBW', 'Empat Lawang', 'Sumatera Selatan', 1599978781, 1599978781),
(617, 'P1612050202', 'AIR ITAM', 3, '$2y$10$2B5bAAfoJPZjKfDtmca5Ie4hN5PQ/IRI2lM3s3PfwGMvXBy53QnZa', 'Penukal Abab Lematang Ilir', 'Sumatera Selatan', 1599978781, 1599978781),
(618, 'P1613021101', 'KARANG JAYA', 3, '$2y$10$XdFGpNH1e/5LnPVit8GwnecMUxco94f5Pz041n7RWNSIaXiVUbjP.', 'Musi Rawas Utara', 'Sumatera Selatan', 1599978781, 1599978781),
(619, 'P1671050202', 'DEMPO', 3, '$2y$10$cKjK0PjAQ.l59.HiZzCg0.7eqVrdsCpVmL5HibUBbtX85Ih2H/vmi', 'Kota Palembang', 'Sumatera Selatan', 1599978781, 1599978781),
(620, 'P1672020203', 'TANJUNG RAMAN', 3, '$2y$10$0/.bGSyZEuaoHbyGgnwarehMlVU2Fvxj7wQAWbUhG68f4oLJjcZx2', 'Kota Prabumulih', 'Sumatera Selatan', 1599978782, 1599978782),
(621, 'P1673030101', 'SIDOREJO', 3, '$2y$10$Gnfl5uLEE7xfz5YUHiqrJuWOIDCTYDcghCnCvxlGr1dpwjKiInOU6', 'Kota Pagar Alam', 'Sumatera Selatan', 1599978782, 1599978782),
(622, 'P1674031201', 'CITRA MEDIKA ', 3, '$2y$10$DxrOIQJQrAxp/BWdU8RIGe3hETn9q48fhI8Xx7wpGkloPtsXX3H2u', 'Kota Lubuk Linggau', 'Sumatera Selatan', 1599978782, 1599978782),
(623, 'P1701041202', 'KOTA MANNA', 3, '$2y$10$LU6xMPR45XEPVilEXsqQgOo8i2J5BdhzC7uyTqK.oWaa9qg853Aze', 'Bengkulu Selatan ', 'Bengkulu', 1599978783, 1599978783),
(624, 'P1702040201', 'CURUP', 3, '$2y$10$KegQDlFUvJOIo3KPNLrT0.L/m/aIDpmIh3uCq2w1XALUIlZ21unwi', 'Rejang Lebong', 'Bengkulu', 1599978783, 1599978783),
(625, 'P1703060201', 'ARGA MAKMUR', 3, '$2y$10$Yvq79e.4jakVfeLohiuRu.RLhTR1Dlum1xHI9HxmqC9XjmCotZgAi', 'Bengkulu Utara', 'Bengkulu', 1599978783, 1599978783),
(626, 'P1704030101', 'BINTUHAN', 3, '$2y$10$WOtvNf4vy7xotY/7oqdwe.cfT70XFwSn8SdzzBpB4bvHqRXaaP8i2', 'Kaur', 'Bengkulu', 1599978783, 1599978783),
(627, 'P1705050202', 'CAHAYA NEGERI', 3, '$2y$10$wBq9z.AgzGmupg7IJ7cTbuDZW3V9rSXCPZvbIiXzzWMOgtWb9oSIy', 'Seluma', 'Bengkulu', 1599978784, 1599978784),
(628, 'P1706050101', 'LUBUK PINANG', 3, '$2y$10$yWXxqxwVWJbBO0x30LhP5uTMEq54H4IpSbrMOIUD.xfRpbeGuuye6', 'Muko-Muko', 'Bengkulu', 1599978784, 1599978784),
(629, 'P1707050101', 'MUARA AMAN', 3, '$2y$10$erB80Hrq6TdiIQcSaID2V.VrU4zqSDxHF6t3XZGxEIXWIA60YIehW', 'Lebong', 'Bengkulu', 1599978784, 1599978784),
(630, 'P1708070201', 'UJAN MAS', 3, '$2y$10$3hddXdAKSFiISBYV6Cei3upjZQf7AH.Ex9mAjyROL2Pvl74Xrpy/a', 'Kepahiang', 'Bengkulu', 1599978785, 1599978785),
(631, 'P1709050101', 'PEKIK NYARING', 3, '$2y$10$8NsoWB7ReXokz8DefpgB5ul4KK9Zd5BFqtYgE4dYTrv8om4hkX/Tu', 'Bengkulu Tengah', 'Bengkulu', 1599978785, 1599978785),
(632, 'P1771020201', 'JALAN GEDANG', 3, '$2y$10$pxxtTIQaJsdLyHO45yixPucn/S1m0Q9AiqKgvlHt/HaP0hVNGrXhi', 'Kota Bengkulu', 'Bengkulu', 1599978785, 1599978785),
(633, 'P1801061101', 'FAJAR BULAN', 3, '$2y$10$Wn6j7UmQyOCc443AEpAH0e9yTqnmw/f8yNUDx85SS7VlzQuNDg.My', 'Lampung Barat', 'Lampung', 1599978786, 1599978786),
(634, 'P1802020201', 'KOTA AGUNG', 3, '$2y$10$xHsscUqHzxjCmQGSZEo9qOZ2xrsVIZlSZZrlqmJj44lffsIX9a8ii', 'Tanggamus', 'Lampung', 1599978786, 1599978786),
(635, 'P1803060201', 'NATAR', 3, '$2y$10$DsqffAkFjwhrfzdNuljhRerpijhBOR/AdA2aJCKhAq.lCg28rHGtS', 'Lampung Selatan', 'Lampung', 1599978786, 1599978786),
(636, 'P1804110201', 'RAMAN UTARA', 3, '$2y$10$cVJRdymt38uvj0NXqAWBCeQfGd0mzTj1vNJn2FQpxHD/sfhs05EWK', 'Lampung Timur', 'Lampung', 1599978786, 1599978786),
(637, 'P1806042201', 'KOTA BUMI II', 3, '$2y$10$NyZDCpDN7iOb3gUGRAMNv.phZQIfLBbecCfN53ne5woJtiQUBnSTa', 'Lampung Utara', 'Lampung', 1599978787, 1599978787),
(638, 'P1807041101', 'WAY TUBA', 3, '$2y$10$RjteoGoVEFbAAkF1huM3Feb4utYDrZl65JUkYJ31R8y9837wT4URy', 'Way Kanan', 'Lampung', 1599978787, 1599978787);
INSERT INTO `user` (`no`, `kode`, `nama`, `role_id`, `password`, `kab_kota`, `provinsi`, `date_created`, `last_login`) VALUES
(639, 'P1808030101', 'TULANG BAWANG I', 3, '$2y$10$mO1UHeocBdepchjmmgYM5.yIEtkH3iD7xlFdWuGPyvWss0WUU4Oc6', 'Tulang Bawang', 'Lampung', 1599978787, 1599978787),
(640, 'P1809050202', 'BERNUNG', 3, '$2y$10$DNsyCSW14QVtU69Lgur8neGuOSo0GpvLI5.mnlvcE7JsbjP2GxY3W', 'Pesawaran', 'Lampung', 1599978787, 1599978787),
(641, 'P1810060101', 'SUKOHARJO ', 3, '$2y$10$o6gXJgMV/BiUwjSaguMCKuu.inZfeyLcQxGOFNLqz4BzaIdTjj/sS', 'Pring Sewu', 'Lampung', 1599978788, 1599978788),
(642, 'P1811020101', 'SIMPANG PEMATANG', 3, '$2y$10$HUgt.6.Gm3DVBtUWmnx3p.7LPDOtO/wCEl7Sq5jhmK/i40N9O5juS', 'Mesuji', 'Lampung', 1599978788, 1599978788),
(643, 'P1812030101', 'PANARAGAN JAYA ', 3, '$2y$10$fLnW0GZ/zjbz2yLSTvC06.Blh2c9tAgIG3YRA1cDkBzC6N0LfFMsW', 'Tulang Bawang Barat', 'Lampung', 1599978788, 1599978788),
(644, 'P1813090101', 'NGAMBUR', 3, '$2y$10$Fjkg0hZFvK8jQQqPhypJ9ufFYjYpaJls/ejI8rtEqusuVR9iRzxxm', 'Pesisir Barat', 'Lampung', 1599978788, 1599978788),
(645, 'P1871080102', 'KEDATON', 3, '$2y$10$L65wdlEpzsRj6k.tYMhkNurFy2I/DyjlLwwfGmGlqjz4tYqcS6aai', 'Kota Bandar Lampung', 'Lampung', 1599978789, 1599978789),
(646, 'P1872022201', 'YOSOMULYO', 3, '$2y$10$xNZk7v9.au1CL32JaIhTU.KszQe0Pfp72IOBfB.5KXQ76JEOcG1Tu', 'Kota Metro', 'Lampung', 1599978789, 1599978789),
(647, 'P1901090201', 'SUNGAI LIAT', 3, '$2y$10$iQO8uC3G3LCsbhgEyyldEuezoCCoSIQHW9tKT6M7vNtd4E6vuPp8e', 'Bangka', 'Bangka Belitung', 1599978789, 1599978789),
(648, 'P1902010101', 'MEMBALONG', 3, '$2y$10$pdEFd96Z0CWexZjdpl7E3O1UIPpZIS.pbqUAaXcJ1mqXCBoLktkqS', 'Belitung', 'Bangka Belitung', 1599978789, 1599978789),
(649, 'P1903050101', 'JEBUS', 3, '$2y$10$JvwtUurxVzi1UqoNg1Oa3uUFMjf4hnXbBVJaGpIA9FiMcW8mdPl3y', 'Bangka Barat', 'Bangka Belitung', 1599978790, 1599978790),
(650, 'P1904020201', 'PANGKALAN BARU', 3, '$2y$10$xJHgcQB./qLDlYAbXtvpgOipBqGcNWdunaEkpWj.M5oAl2S.5znUC', 'Bangka Tengah', 'Bangka Belitung', 1599978790, 1599978790),
(651, 'P1905010101', 'PAYUNG', 3, '$2y$10$FJLEgyZzYTCs3jv9Ig9bI.QRG/oKiVIqcSUbdA5QSExQfgJNCUuja', 'Bangka Selatan', 'Bangka Belitung', 1599978790, 1599978790),
(652, 'P1906030201', 'MANGGAR', 3, '$2y$10$sI.yeb2tCo8PYSuhEKXHqem/jlScEB1imFTQxjASz7aATUWv0UhZG', 'Belitung Timur', 'Bangka Belitung', 1599978790, 1599978790),
(653, 'P1971021201', 'GIRIMAYA', 3, '$2y$10$ShkyXk08/NnYueGAJzdW/.LqAKH/WupX7qHqNX7Q591tQHMJZBRmG', 'Kota Pangkal Pinang', 'Bangka Belitung', 1599978791, 1599978791),
(654, 'P2101030101', 'TANJUNG BALAI', 3, '$2y$10$u.6lqbrhJ2uTGmRcHoo6Ie3h2.MCbvmGUkHiNFV1ocM685CwnaYWy', 'Karimun', 'Kepulauan Riau', 1599978791, 1599978791),
(655, 'P2102052201', 'TELUK SASAH', 3, '$2y$10$LxiXre8HRtRV5rvBrWKMAujTMdWM8DkHWORXvIlb8Mob6TWAlbRae', 'Bintan', 'Kepulauan Riau', 1599978791, 1599978791),
(656, 'P2103050101', 'RANAI', 3, '$2y$10$tGvMIWIr14J1zL3rDB4Gj.fxuf4DBL3jHq0/RmlCibrqjuQJe41Re', 'Natuna', 'Kepulauan Riau', 1599978792, 1599978792),
(657, 'P2104020202', 'DABO LAMA', 3, '$2y$10$O3bfaZYotNrcsnJQDlzo...Oju2DJtMHitYqWaDOyH378zCHDrNai', 'Lingga', 'Kepulauan Riau', 1599978792, 1599978792),
(658, 'P2105070101', 'PALMATAK', 3, '$2y$10$m2nEPUaG6S/4jJBuT0Nx.uHPtTAYHH85m.KcsgqFid/L5o0iYwLMy', 'Kep. Anambas', 'Kepulauan Riau', 1599978792, 1599978792),
(659, 'P2171060201', 'SEKUPANG', 3, '$2y$10$MCjkRHIPdZ0WL7TXnx0g2.yGgc0toMauWP5vX0XjfVZhj.Nd8F9fi', 'Kota Batam', 'Kepulauan Riau', 1599978792, 1599978792),
(660, 'P2172020201', 'BATU 10', 3, '$2y$10$m6G0F65d8zlkqRKAybgF0en9iqkhFgJrFoCa8xbIkGsk.du1fueki', 'Kota Tanjung Pinang', 'Kepulauan Riau', 1599978793, 1599978793),
(661, 'P3101020201', 'KEC. KEP. SERIBU  UTARA/RB', 3, '$2y$10$ZqKfGU1lcR6V9Sy9wiMvceDLGYMROsIS4tvMgDbz2DPgDjtqHtHHa', 'Kepulauan Seribu', 'DKI Jakarta', 1599978793, 1599978793),
(662, 'P3171010101', 'KEC. JAGAKARSA', 3, '$2y$10$47HDnPDr4ryvytz/fiGq8.xAJOCTcuQSQ3.YmmMezwStUGq.vfjC6', 'Jakarta Selatan', 'DKI Jakarta', 1599978793, 1599978793),
(663, 'P3172060201', 'KEC. JATINEGARA', 3, '$2y$10$zkLNWEXaHvVDgqP8PC/jae2zRISatUqE/KKC2djgLtLtjnzPZm10u', 'Jakarta Timur', 'DKI Jakarta', 1599978793, 1599978793),
(664, 'P3173010201', 'KEC. TANAH ABANG', 3, '$2y$10$UQ/iByl/HaxEiLEUjE.pZu0..QryuAU4doXz9FfWm5/NYJN3s0C2u', 'Jakarta Pusat', 'DKI Jakarta', 1599978794, 1599978794),
(665, 'P3174080101', 'KEC. KALIDERES', 3, '$2y$10$fidszGTIHA7djYqQ/1uixOuxZIMeb47DxzmuA2.mUkiZKj/oN52Gm', 'Jakarta Barat', 'DKI Jakarta', 1599978794, 1599978794),
(666, 'P3175030101', 'KEC. TANJUNG PRIOK', 3, '$2y$10$Wx0SfZxhgoIMCnqCKywRXuU.p9qzUsCjCRUVQAFqRscA3vkWvBcii', 'Jakarta Utara', 'DKI Jakarta', 1599978794, 1599978794),
(667, 'P3202140201', 'CIKEMBAR', 3, '$2y$10$tzfscAouuIMIFzOsd1zS/eahF8185Wdwc4PuUrjNXi9Zpiqc9J2Ne', 'Sukabumi', 'Jawa Barat', 1599978794, 1599978794),
(668, 'P3203200201', 'CIANJUR KOTA', 3, '$2y$10$5RqqXpeGjTXcOOubIc4xaOUOuSzDuU1zdxYzDjLbudo6SBasptDqu', 'Cianjur', 'Jawa Barat', 1599978795, 1599978795),
(669, 'P3204110101', 'RANCA EKEK DTP', 3, '$2y$10$1G5xDz4ePa9PBHQ2JyP4h.jsWuibqxEFxr6ZKho89tb.Q3LibmsAS', 'Bandung', 'Jawa Barat', 1599978795, 1599978795),
(670, 'P3205190201', 'SILIWANGI', 3, '$2y$10$n8FEA4V07raupTR/fF8X9O1Y.6aIsvkCQqzE7I4y/FRa675VApbTi', 'Garut', 'Jawa Barat', 1599978795, 1599978795),
(671, 'P3206240101', 'RAJAPOLAH', 3, '$2y$10$LyKv1V.Lhj3WbwGpz7zT0uhHzdVWzB2FbP/qxrih1EGhRUi2VuyoO', 'Tasikmalaya', 'Jawa Barat', 1599978795, 1599978795),
(672, 'P3207210201', 'CIAMIS', 3, '$2y$10$69TqMHlV3vedQZ.mAhd2jer1f4EBpuD47QILhobrz1rB2zgVYSQAK', 'Ciamis', 'Jawa Barat', 1599978795, 1599978795),
(673, 'P3208140201', 'SUKA MULYA', 3, '$2y$10$osiUEiafGw6zQXkJBbZJsO6T5e6H0QsbQ1Fq5BjUADmKMucZNwAbu', 'Kuningan', 'Jawa Barat', 1599978796, 1599978796),
(674, 'P3209140101', 'PLUMBON', 3, '$2y$10$og92iPk5nGZa/Vrs3vyrSe0R6McZUoMWifTqLMN29ECor7E8juKwy', 'Cirebon', 'Jawa Barat', 1599978796, 1599978796),
(675, 'P3210070201', 'MAJALENGKA', 3, '$2y$10$RKKVe7sVoTy/nOy/rpiGqenRBQMl.u8QL.rPVLQ5ds56BfaGhKIam', 'Majalengka', 'Jawa Barat', 1599978796, 1599978796),
(676, 'P3211010101', 'JATINANGOR', 3, '$2y$10$bZM9VK9ukTXXmGwMIfBAHuI4M6L6Aq6kobRXkEn1Dsh.J7J0fQsra', 'Sumedang', 'Jawa Barat', 1599978797, 1599978797),
(677, 'P3212041101', 'TERISI', 3, '$2y$10$4zx2K87Dmz6HIzVF5kPu/uaOcuxGdVwjRFK19w.P7KJqNzZ13IJUS', 'Indramayu ', 'Jawa Barat', 1599978797, 1599978797),
(678, 'P3213170101', 'BINONG', 3, '$2y$10$gqhzTdbbjkL4ZbAdbjxn/OUdfrUG3swKC2tHHDOtOOxStoZEkTBi2', 'Subang', 'Jawa Barat', 1599978797, 1599978797),
(679, 'P3214050101', 'SUKATANI', 3, '$2y$10$fGbvyatPH.if9LafCSrrseLsSsSiYP7vKwpL4oTKbpifWwhQ2oj.2', 'Purwakarta', 'Jawa Barat', 1599978797, 1599978797),
(680, 'P3215051201', 'PURWASARI', 3, '$2y$10$VViEmnZaa9mTy0rntynHq.z7WY2YSDRMETwYETgrmIp.WNsAMATqO', 'Karawang', 'Jawa Barat', 1599978798, 1599978798),
(681, 'P3216061102', 'MEKAR MUKTI', 3, '$2y$10$Hl/z87VAJyNXLl6IwmRJs.2QfO1z1f7FOZ14N.EKuA2JaYRvxnk2u', 'Bekasi', 'Jawa Barat', 1599978798, 1599978798),
(682, 'P3217070201', 'BATUJAJAR', 3, '$2y$10$WeDuEe2VfA.F8iqJzhglweGDq3Frkgf84enktJppnqvX1Z4uJF/bK', 'Bandung Barat', 'Jawa Barat', 1599978798, 1599978798),
(683, 'P3218080101', 'KALIPUCANG', 3, '$2y$10$9ry3iuMRFLAQWtq.BoWG..NrkfRQQ1ka7SOuWDVNA3aNY06T3ycD6', 'Pangandaran', 'Jawa Barat', 1599978799, 1599978799),
(684, 'P3271060101', 'TANAH SAREAL', 3, '$2y$10$uS/5nu5fuGv9pxOWIr4wt.jIodTW.BJcwjQFwDIhYOR5MqHKbOYti', 'Kota Bogor', 'Jawa Barat', 1599978799, 1599978799),
(685, 'P3272050202', 'SUKABUMI', 3, '$2y$10$ZBO4MJ1.MWP2C4k12HfIm.mRKiXEJ3D4klDsJ7wu8ogd0WvyiVO.C', 'Kota Sukabumi', 'Jawa Barat', 1599978799, 1599978799),
(686, 'P3273180202', 'UPT GARUDA', 3, '$2y$10$5Qkkt1yi7/ISjFBfFElhuOq1MQwJwl3j1rTgyh05r05SMA.jDXc5C', 'Kota Bandung', 'Jawa Barat', 1599978799, 1599978799),
(687, 'P3274050201', 'KEJAKSAN', 3, '$2y$10$xK2Qc6cqlY6.73oHp4pISu9X7.vjwmYC15Zf3m5e1xHuGqn95afWG', 'Kota Cirebon', 'Jawa Barat', 1599978800, 1599978800),
(688, 'P3275040203', 'KARANG KITRI', 3, '$2y$10$HaXAkJFpL9VNQSIvHoFr0eyfiyRePMAwVaT4x3OPgrl20hyXXY8CC', 'Kota Bekasi', 'Jawa Barat', 1599978800, 1599978800),
(689, 'P3276040101', 'CIMANGGIS', 3, '$2y$10$0KCDWyoOFTETu/eNM1Xnx.izIFSyn96EKRftRSdJ.Fgdv5pLacju6', 'Kota Depok', 'Jawa Barat', 1599978800, 1599978800),
(690, 'P3277020201', 'CIMAHI TENGAH', 3, '$2y$10$PfJ8aennWCRwJaWRQWCGge9n8f0ddDkCdZt3/w2z4xr5EbHre3P5a', 'Kota Cimahi', 'Jawa Barat', 1599978801, 1599978801),
(691, 'P3277030204', 'CITEUREUP', 3, '$2y$10$VyoEcuPVOEok1XqdgSLAkuvDH3UCYd9YLH4yf6m.mygkJakKfIPRG', 'Bogor', 'Jawa Barat', 1599978801, 1599978801),
(692, 'P3278010201', 'KAWALU', 3, '$2y$10$AJF/vlFpwHLez/yhzDJNFONj/c7OBboZ/aDkEObU1p.Xc..4UA4d.', 'Kota Tasikmalaya', 'Jawa Barat', 1599978801, 1599978801),
(693, 'P3279010203', 'BANJAR III', 3, '$2y$10$7otSTHlYcamiwO1/7yQIheWI7zpOb4C5.2bYOyumeNPAgWqlvxuYC', 'Kota Banjar', 'Jawa Barat', 1599978801, 1599978801),
(694, 'P3301730201', 'CILACAP UTARA  I', 3, '$2y$10$wqrkcGPzeLudjeX0HN6NEef.llESfU4y7M53HW99CW6afhNQmpzly', 'Cilacap', 'Jawa Tengah', 1599978802, 1599978802),
(695, 'P3302060101', 'KEMRANJEN I', 3, '$2y$10$bUfVDaYLB2RDeEMVFr.UROvO8ow2d5nPdRF68ntRtKcjh4j/tFw.O', 'Banyumas', 'Jawa Tengah', 1599978802, 1599978802),
(696, 'P3303060201', 'PURBALINGGA', 3, '$2y$10$fhnXyZTouIJK4imvOBMGDeqnYbNPwsMMpBJ0cf73PD93NmJ3FFFp.', 'Purbalingga', 'Jawa Tengah', 1599978802, 1599978802),
(697, 'P3304060201', 'BANJARNEGARA I', 3, '$2y$10$GMnJNOQqmmDmFhqy.lB8i.3k1ZwP/.vVXjnJT5/gFDIzgZq4wiq3u', 'Banjarnegara', 'Jawa Tengah', 1599978803, 1599978803),
(698, 'P3305100101', 'KUTOWINANGUN', 3, '$2y$10$gg9Bot7znfkFY2cJATxb0Odydts1M0tcTcdjPM94rL.2qdLHoDqWC', 'Kebumen', 'Jawa Tengah', 1599978803, 1599978803),
(699, 'P3306110101', 'PITURUH', 3, '$2y$10$Rz1.0aaPDpkt2TDHPEEUquMzZKUMpZsDjHOlwbeJtU0WbOokCDE8i', 'Purworejo', 'Jawa Tengah', 1599978803, 1599978803),
(700, 'P3307040101', 'KALIWIRO', 3, '$2y$10$GWsaRI5fTwPkqlM4Yd0qquuG8HgeQiTVl7wgogJl2iCcQYkm5Sgu6', 'Wonosobo', 'Jawa Tengah', 1599978804, 1599978804),
(701, 'P3308020101', 'BOROBUDUR', 3, '$2y$10$rMJxKNM6YUxvTQkpiUG2AuQyAKhesBKG3dnPp1PP0boRdmfCYNMcy', 'Magelang', 'Jawa Tengah', 1599978804, 1599978804),
(702, 'P3309060201', 'MOJOSONGO', 3, '$2y$10$2954ZRWIfwdwijt1kQOQEOPBsAmO1evMzymYExhsJgLUWMzPluoT2', 'Boyolali', 'Jawa Tengah', 1599978804, 1599978804),
(703, 'P3310160101', 'JUWIRING', 3, '$2y$10$ARtTyWIZb8/8Y80sev8AXue3zcj.zDtYTB08pPMd/EATGhKWrXoE6', 'Klaten', 'Jawa Tengah', 1599978804, 1599978804),
(704, 'P3311040201', 'SUKOHARJO', 3, '$2y$10$zkY6CAXZtPpmoj/KaVQ/OORHkrh3UWuHLF07tEBLJpkpmcUc.DI4u', 'Sukoharjo', 'Jawa Tengah', 1599978804, 1599978804),
(705, 'P3312140201', 'WONOGIRI   I', 3, '$2y$10$ZJGocNyYO5VqSQYzw/UsF.qOS0Q2P5ytdy0wfn0FJmv3Lc2rOYJQe', 'Wonogiri', 'Jawa Tengah', 1599978805, 1599978805),
(706, 'P3313160101', 'KERJO', 3, '$2y$10$482KSXtJRkR3qunhvJrN.OtavDq1DMi4P9q7fo0zgLr6Qz/dhtoyG', 'Karanganyar', 'Jawa Tengah', 1599978805, 1599978805),
(707, 'P3314040101', 'KEDAWUNG  I', 3, '$2y$10$KHKh5lMhqYKVU2D6wek.Xept9acUUUD.QWghonBd9rT4FxOIf72Rq', 'Sragen', 'Jawa Tengah', 1599978805, 1599978805),
(708, 'P3315160101', 'GODONG  I', 3, '$2y$10$cqyvuDfqBbS1hdwF/kH1IOUrT8LL3FDe4TnwXvxP7Rh7e1ASvczZC', 'Grobogan', 'Jawa Tengah', 1599978923, 1599978923),
(709, 'P3316150101', 'KUNDURAN', 3, '$2y$10$glRSftGCyfRT5G.J2mur8eZRZQzSoDygad5.g8zBi7/CnnFFbqcl6', 'Blora', 'Jawa Tengah', 1599978923, 1599978923),
(710, 'P3317120102', 'KRAGAN  II', 3, '$2y$10$i5Z.SxIXtPwHWz/3wFbUXujwbxY/DfcX9fZ60UR39r7Ki9OkU9OB6', 'Rembang', 'Jawa Tengah', 1599978924, 1599978924),
(711, 'P3318120201', 'MARGOREJO', 3, '$2y$10$MwvUBmz200oFWXefTZk7ceWtCLd0AoWGC0vTvIiqJSKHi995DR1X2', 'Pati', 'Jawa Tengah', 1599978924, 1599978924),
(712, 'P3319010201', 'KALIWUNGU', 3, '$2y$10$b9dPLn3LcHdiU90hgAfFteEXUDxGMzsBE.BmO/qeUENNk8Ho5HdBa', 'Kudus', 'Jawa Tengah', 1599978924, 1599978924),
(713, 'P3320060101', 'BATEALIT', 3, '$2y$10$btzeRW1xY1cM2l3Sr03OM.6FEPuGlL7AuDjgJxOBd0Q4NQmZfpZXq', 'Jepara', 'Jawa Tengah', 1599978924, 1599978924),
(714, 'P3321091101', 'KEBONAGUNG', 3, '$2y$10$s6XgRG3l.acL4/ZWl5EETeiQ.bZYGVp0jT5JDjlufl.j2BEQOK97S', 'Demak', 'Jawa Tengah', 1599978924, 1599978924),
(715, 'P3322140101', 'BERGAS', 3, '$2y$10$ZHxoY1Cql1jwGdLAwai91.h42ilU8NJsy4uzFGKw49WKG78VvtHwG', 'Semarang', 'Jawa Tengah', 1599978925, 1599978925),
(716, 'P3323010201', 'PARAKAN', 3, '$2y$10$fDBFICPiMGhHLKghgSugoe6M6ZO./ayA.UPgXlnokliJYIMmrgPfS', 'Temanggung', 'Jawa Tengah', 1599978925, 1599978925),
(717, 'P3324040101', 'PATEAN', 3, '$2y$10$qk5nlhv1HOX4iNKL/VRBpuheCQvNOwYj1X2zZxXd/k38o.L8lZS8e', 'Kendal', 'Jawa Tengah', 1599978925, 1599978925),
(718, 'P3325090101', 'SUBAH', 3, '$2y$10$zCduw82LQbRuQGKxpfkQMeNMKzGS/Zde3qya0j4Yv9EoGX439.81e', 'Batang', 'Jawa Tengah', 1599978925, 1599978925),
(719, 'P3326150201', 'TIRTO I', 3, '$2y$10$u79MVEZOHVgHd2yIgu4YAu6cBPEu5sMqOrsiOsNzGYTOrM1psLGwy', 'Pekalongan', 'Jawa Tengah', 1599978925, 1599978925),
(720, 'P3327080203', 'KEBONDALEM', 3, '$2y$10$z1PfuNnF3ECBRInDmCZocupGdFYomhb74h1lHMdV2ERMg4K86tmZK', 'Pemalang', 'Jawa Tengah', 1599978925, 1599978925),
(721, 'P3328120201', 'ADIWERNA', 3, '$2y$10$6goPdHmtf4zq4UoL5NgNC.ce6ian3M28sXl7HlPwvqqsK7mF0XCqy', 'Tegal', 'Jawa Tengah', 1599978925, 1599978925),
(722, 'P3329170201', 'BREBES', 3, '$2y$10$1q0I2eArubpJgKu98BykSO4RmaSttuzR8.Vi6kOJLJeDa8rhtxk/S', 'Brebes', 'Jawa Tengah', 1599978926, 1599978926),
(723, 'P3371020201', 'MAGELANG UTARA', 3, '$2y$10$OReRkcgKUwrPQi3e9BvaD.4cMzNbKK8Hv/kC6.arCXTKMeDsxaCPG', 'Kota Magelang', 'Jawa Tengah', 1599978926, 1599978926),
(724, 'P3372030202', 'SANGKRAH', 3, '$2y$10$2l9AYqQ4.9dkR4W9c2XuTeY6GJgoDoZeXNUvAV6iCl/Xg/y4ydvrW', 'Kota Surakarta', 'Jawa Tengah', 1599978926, 1599978926),
(725, 'P3373020201', 'SIDOREJO KIDUL', 3, '$2y$10$cIk2JvN9TBSoZV2SeDtWHe0ZjjutXy8xp.M5/PgDkhGez6jCfCmfe', 'Kota Salatiga', 'Jawa Tengah', 1599978926, 1599978926),
(726, 'P3374140203', 'MANYARAN', 3, '$2y$10$HVFzMixaOCVOhYoXeiYpkepAkD7CWpl6pI1mpHDfhUmyErzlc6VF2', 'Kota Semarang', 'Jawa Tengah', 1599978926, 1599978926),
(727, 'P3375020104', 'SOKOREJO', 3, '$2y$10$7/jIl5BBIoQkYhFDD30rn./0Zhy4r98FXPiZ72ZmHhJOtYCB5pQ1e', 'Kota Pekalongan', 'Jawa Tengah', 1599978926, 1599978926),
(728, 'P3376030201', 'TEGAL BARAT', 3, '$2y$10$ckTI1FIVaHSiFoRvvyPXX.7YgUC3wJ08vCDesQQcPuayUgg4FhPBC', 'Kota Tegal', 'Jawa Tengah', 1599978927, 1599978927),
(729, 'P3401110201', 'KALIBAWANG', 3, '$2y$10$hjqkr8vks1XkvLkmPOnlwuu0t0.p9/QPIwJt6EfkXn9ivtTJVfuxq', 'Kulon Progo', 'DI Yogyakarta', 1599978927, 1599978927),
(730, 'P3402070103', 'SEWON I', 3, '$2y$10$QYdiCiD9Eshgmof0SQJG7ewS198dgYg6vZErelPSv84N9ZCAc3PYm', 'Bantul', 'DI Yogyakarta', 1599978927, 1599978927),
(731, 'P3403060101', 'SEMANU  I', 3, '$2y$10$mRBNTA1i6/bObfNMdaOVEucaerJwgoAGk7bUkTMDHoXIYTybKWHIe', 'Gunung Kidul', 'DI Yogyakarta', 1599978927, 1599978927),
(732, 'P3404060101', 'MLATI   II', 3, '$2y$10$/uaPkKvBpCoWMZKrrQnKOOJSoOJnWzAXPSHAnIVeZoNxfEdfcS/1K', 'Sleman', 'DI Yogyakarta', 1599978927, 1599978927),
(733, 'P3471140101', 'TEGAL REJO', 3, '$2y$10$IEmZgpuwoTo5ViJV.bwFNOZJkTwi.pyrl.5nqJ4J1QuciEeYlviAm', 'Kota Yogyakarta', 'DI Yogyakarta', 1599978927, 1599978927),
(734, 'P3501100202', 'BUBAKAN', 3, '$2y$10$oqgBGae4UfHSMwP.DqWMeu77qWHyTr4XVMxKNRCjHQHss45/0Hs7a', 'Pacitan', 'Jawa Timur', 1599978928, 1599978928),
(735, 'P3502120101', 'KAUMAN', 3, '$2y$10$MQ1uJe0kUrmzKPjePs5.4OWcVC3E7TfTmbE5jELCGTH.vL8S5hNlC', 'Ponorogo', 'Jawa Timur', 1599978928, 1599978928),
(736, 'P3503070101', 'KARANGAN', 3, '$2y$10$6M0MrFY7BBFQdDb82oxJlOCxVANUa7WvCC9O76dSNSNrtaHSS/D.G', 'Trenggalek', 'Jawa Timur', 1599978928, 1599978928),
(737, 'P3505200101', 'SRENGAT', 3, '$2y$10$ZkGgVPo0Xzne4HkwVKxPZeZu5BfZ5S1wOzm0QVLxpebzyifurQQ.O', 'Blitar', 'Jawa Timur', 1599978928, 1599978928),
(738, 'P3506201201', 'NGASEM', 3, '$2y$10$WIyJZixqB11R7O5Ka/x9XeOYoBWGwRVTWa3JwPL0nniCXeNBa/eYy', 'Kediri', 'Jawa Timur', 1599978928, 1599978928),
(739, 'P3507240101', 'TUMPANG', 3, '$2y$10$68ssuK0/kYDUXhZkUCOZG.M5PmGR73yXLp0YtDefbDKCbzrXw8zye', 'Malang', 'Jawa Timur', 1599978928, 1599978928),
(740, 'P3508060101', 'ROGOTRUNAN', 3, '$2y$10$l/bgWkUHzUckWwzHIu4ZvOP4vae06mxDfx8k1uKokTeOcP550p0VC', 'Lumajang', 'Jawa Timur', 1599978928, 1599978928),
(741, 'P3509710201', 'KALIWATES', 3, '$2y$10$hZnRQUOZgG9jPblWyzttTOi31Anh0IWtEHzHi7Srud./h3zyHQIni', 'Jember', 'Jawa Timur', 1599978929, 1599978929),
(742, 'P3510120101', 'GITIK', 3, '$2y$10$BdKVsLo7FJRPo7BV50o8cuCwus0ZURZQdwl0tfxaN9pW8OrEJRnXC', 'Banyuwangi', 'Jawa Timur', 1599978929, 1599978929),
(743, 'P3511160101', 'PRAJEKAN', 3, '$2y$10$TXkTsei1USRKe3ORAaT2yer0Icnmc8LJjpDcAMQJuqb.30j6DGZ7C', 'Bondowoso', 'Jawa Timur', 1599978929, 1599978929),
(744, 'P3512160101', 'ASEMBAGUS', 3, '$2y$10$zs.3ThbDi/.zye45iUWomu/QpSYy1FXemdkb9odxShkvjyybh31Lq', 'Situbondo', 'Jawa Timur', 1599978929, 1599978929),
(745, 'P3513180101', 'MARON', 3, '$2y$10$LIOSAesSkCFPPcIFbT2HcO0.BUnkGgRtlG/6sPSTx/HJ8XD6iP1Aq', 'Probolinggo', 'Jawa Timur', 1599978929, 1599978929),
(746, 'P3514090101', 'PURWOSARI', 3, '$2y$10$W74rn6ZUpCxl.fDPocAvFuA0pFVFvHZsplAWuA6C04ntwuBHtF/H6', 'Pasuruan', 'Jawa Timur', 1599978930, 1599978930),
(747, 'P3515160101', 'TAMAN', 3, '$2y$10$3LvhHfXd/8D.6A1LRh5hF.d1HyaXTAXzNCRTg8NmUkwV6BGttNG5.', 'Sidoarjo', 'Jawa Timur', 1599978930, 1599978930),
(748, 'P3516090101', 'BANGSAL', 3, '$2y$10$uyOzcBqgRzNwecCxn5N3dO22Cin7FgbKEbbTkhWL3hPpyIIkp7glK', 'Mojokerto', 'Jawa Timur', 1599978930, 1599978930),
(749, 'P3517070101', 'BARENG', 3, '$2y$10$d./RFVqH2OjQ9ygM9IMuf.bd1OkUw4KWiJd0nxrKK/YtRQKQ8j9Je', 'Jombang', 'Jawa Timur', 1599978930, 1599978930),
(750, 'P3518140201', 'NGANJUK', 3, '$2y$10$FRY.hCoZG26tfe.6zoH2OOs6Su3RNAEiG4wCvtdlSBDMtld2OZx5C', 'Nganjuk', 'Jawa Timur', 1599978930, 1599978930),
(751, 'P3519120101', 'BALEREJO', 3, '$2y$10$i473FHembOajz.qrz7shfedUV39hkJUOxWiNl95IeQPkdAUp.sfHi', 'Madiun', 'Jawa Timur', 1599978930, 1599978930),
(752, 'P3520120101', 'KARANGREJO', 3, '$2y$10$J0lydcf1UC9sM5KVnn7BVOmawKzIgbKf6fQiz8LJ04P4AHZSu1UVm', 'Magetan', 'Jawa Timur', 1599978931, 1599978931),
(753, 'P3521100101', 'PADAS', 3, '$2y$10$1oQhUO.2rfslZ6duCRDj/ea974isBZUv/8b23Gw509UEo5amnpRp.', 'Ngawi', 'Jawa Timur', 1599978931, 1599978931),
(754, 'P3522130201', 'BALEN', 3, '$2y$10$DtxnVf8qzi6vdyA/oqMNpezucpo0I8gTrKSANhwYBcIS60QZWtt9.', 'Bojonegoro', 'Jawa Timur', 1599978931, 1599978931),
(755, 'P3523130201', 'TUBAN', 3, '$2y$10$5hAOyQd9X3O7gIew59mz7uEhpwOVFkIWpWC4wUjgGW6CKQKB7Beoe', 'Tuban', 'Jawa Timur', 1599978931, 1599978931),
(756, 'P3524150101', 'DEKET', 3, '$2y$10$Lq.SSPiZ3KPzrT/11oOdOuTNi8gJKXKZSvsAqNFFpcdMSIRg6kzBi', 'Lamongan', 'Jawa Timur', 1599978931, 1599978931),
(757, 'P3525110201', 'MANYAR', 3, '$2y$10$vbJaf0LPMtuh0M3A6A9L7eA3LwwINO0iqjGCibC0SXeGpMiPCQTg2', 'Gresik', 'Jawa Timur', 1599978932, 1599978932),
(758, 'P3526050101', 'BLEGA', 3, '$2y$10$K.dnsCJIAU8zG4OZoVui2uP3acTy0ryAJ9kPGD6JvO5XQfC5ENSCi', 'Bangkalan', 'Jawa Timur', 1599978932, 1599978932),
(759, 'P3527030202', 'BANYUANYAR', 3, '$2y$10$x3JILa7i2kTBrN0pXAca4.oy193w4Najee1o6.P0sPl5QHYgiPHs6', 'Sampang', 'Jawa Timur', 1599978932, 1599978932),
(760, 'P3528070101', 'PALENGAAN', 3, '$2y$10$RXgaGvxMWFpqC7pN7zj1F.Z5Kw7Dh3yvtizK.djetzdS2DkE/5dDG', 'Pamekasan', 'Jawa Timur', 1599978932, 1599978932),
(761, 'P3529020101', 'BLUTO', 3, '$2y$10$BNzO.dCMy1MNudFP8syC9uwa5I52cZG0PufSHXDFr12CxNoPjFFgu', 'Sumenep', 'Jawa Timur', 1599978932, 1599978932),
(762, 'P3571010202', 'CAMPUREJO', 3, '$2y$10$LNe3ISyrAoWhFu.LOtTvjux.SsyOQwCl8iQSYN5VSckxaDlTVpSam', 'Kota Kediri', 'Jawa Timur', 1599978932, 1599978932),
(763, 'P3572030101', 'UPTD KESEHATAN KEC. SANANWETAN', 3, '$2y$10$2O0MXxOEOM5hlyYSLF2P..xyraVh8yAqsVpBFpmjx7jf9hDxms50O', 'Kota Blitar', 'Jawa Timur', 1599978932, 1599978932),
(764, 'P3573020201', 'JANTI', 3, '$2y$10$XGGqqChHhPN8eXgYR97XBObIWPog6004KiNUiBj0dbEVJaf/AnPEG', 'Kota Malang', 'Jawa Timur', 1599978933, 1599978933),
(765, 'P3574020101', 'WONOASIH', 3, '$2y$10$h.ZZzzq/9wsmV.fQlUnZ0eS0RvAY/NiK2uxLPWsl4xSxyKOUHhfNi', 'Kota Probolinggo', 'Jawa Timur', 1599978933, 1599978933),
(766, 'P3575010201', 'GADINGREJO', 3, '$2y$10$mzsRn1Iy9YFXOcnTsweyKeif29KVcmkTt6bwckmXHLmdRTtBbHnMq', 'Kota Pasuruan', 'Jawa Timur', 1599978933, 1599978933),
(767, 'P3576020102', 'KEDUNDUNG', 3, '$2y$10$C6wzulv2U4rjv3SuuCvoT.ceUB0swezdRMY31rpFbbjK4D78vJZVC', 'Kota Mojokerto', 'Jawa Timur', 1599978933, 1599978933),
(768, 'P3577030102', 'TAWANGREJO', 3, '$2y$10$hrE.lYoJI7DPvTuQRKu6sO.nz4MdaHZT87ulM9dhsU.ZWmLan0eTS', 'Kota Madiun', 'Jawa Timur', 1599978933, 1599978933),
(769, 'P3578110101', 'JAGIR', 3, '$2y$10$iyG3.UgpBe.UemhrwshJhOpbboGeiYKDTLjU.4Ip1M9DYhgbrS/ra', 'Kota Surabaya', 'Jawa Timur', 1599978934, 1599978934),
(770, 'P3579020102', 'BEJI', 3, '$2y$10$xAy64U1olQIgPJzUi2ACB.RUeAaCrxT01VXF3D9Q8Cm.6wqPuY25q', 'Kota Batu', 'Jawa Timur', 1599978934, 1599978934),
(771, 'P3601171201', 'KADU HEJO', 3, '$2y$10$I.fvBSKPWdmnEh2IVul1nODBeD2Jhxlt.BWz9PleD5ePnllFEvvLC', 'Pandeglang', 'Banten', 1599978934, 1599978934),
(772, 'P3602170202', 'MANDALA', 3, '$2y$10$R4s2xpL/Kfew/hpVn39Fc.TSElGEym5W1ijAzBVTs/hX0qYY8u/Li', 'Lebak', 'Banten', 1599978934, 1599978934),
(773, 'P3603130102', 'BALARAJA', 3, '$2y$10$hPy/rVs0vuEA0d1obDOHxOWVzX2Cc.apw1oo/YZHcnyM7uXj9S6WK', 'Tangerang', 'Banten', 1599978935, 1599978935),
(774, 'P3604240101', 'CIRUAS', 3, '$2y$10$Y3T/LEg4PGyNLsu33XXZS.SEhEhFCMIsv5YNtn1qWjVDappndUPRK', 'Serang', 'Banten', 1599978935, 1599978935),
(775, 'P3671051202', 'KEDAUNG WETAN', 3, '$2y$10$UAV6m.s4bI5DFSWG3b2TxuVdqATnMVThIfx60ro9AyCQOC1JyutxG', 'Kota Tangerang', 'Banten', 1599978935, 1599978935),
(776, 'P3672040101', 'CIBEBER', 3, '$2y$10$wK42hD/wGsuhQ/MhjGI3MOOyh9lTXN0l.wJ0Wo8aF8E3KOMcsOQuq', 'Kota Cilegon', 'Banten', 1599978935, 1599978935),
(777, 'P3673040104', 'SERANG KOTA', 3, '$2y$10$.sXEKAtfJ1ssPciqu4xVweC6BhqBmalkQWMPVbe29FBUNcecPpGkW', 'Kota Serang', 'Banten', 1599978935, 1599978935),
(778, 'P3674070101', 'PONDOK JAGUNG', 3, '$2y$10$driOrD8E6DdARVusT.7QruzOjTDJ7qK/8yfowO6lYBM7obAYYXeMe', 'Kota Tangerang Selatan', 'Banten', 1599978936, 1599978936),
(779, 'P5101010101', 'I MELAYA', 3, '$2y$10$6doqUb.RR19r6awaqNv0Nee9D0L1X60n.UwvzRg4JLkuW3WSq5.WW', 'Jembrana', 'Bali', 1599978936, 1599978936),
(780, 'P5102030103', 'TABANAN III', 3, '$2y$10$9XD2tIzxj8HU672W.jk5wetgjmWD7w052UNSV14Kbk5LGulkV.UEu', 'Tabanan', 'Bali', 1599978936, 1599978936),
(781, 'P5103050101', 'ABIANSEMAL I', 3, '$2y$10$lPAmJiBrogp43LauNGBoDeezLHRMkacOaGTHZADVmzFq5W27TNPdS', 'Badung', 'Bali', 1599978936, 1599978936),
(782, 'P5104060101', 'TEGALALANG I', 3, '$2y$10$u11/MAOBdjGZHeJNg3OGbOzsotlRb1NYLeguGB9AZIbBn2NMpouQS', 'Gianyar', 'Bali', 1599978936, 1599978936),
(783, 'P5105020101', 'BANJARANGKAN I', 3, '$2y$10$KAFlDK2CnWo/5PmhiQMCn.N1PC74nGXNRfKi9DEmrWgjyQALJwnlS', 'Klungkung', 'Bali', 1599978937, 1599978937),
(784, 'P5106040101', 'KINTAMANI I', 3, '$2y$10$/Q0F5mmf3zV4gpFXvqYlTuFRtv5YxV0AYGjkPo6RP0vsThLsEKs8i', 'Bangli', 'Bali', 1599978937, 1599978937),
(785, 'P5107040102', 'KARANGASEM I', 3, '$2y$10$fvBrWmAZR61NNOTkx3g31.R8mIH5qU9UQVNam9GAjFu7X0f9OHVri', 'Karangasem', 'Bali', 1599978937, 1599978937),
(786, 'P5108040101', 'BANJAR I', 3, '$2y$10$Tdw4J3WT7pHnrmnEUApE5Om48ayaSsA7YjnUQMtSdydgrGT5dKwNK', 'Buleleng', 'Bali', 1599978937, 1599978937),
(787, 'P5171030102', 'II DENPASAR BARAT ', 3, '$2y$10$DBOnv1RdP2aa7IzIxaOl4uV0PhbXHakOM8iOWhx2ZMOPz4Ek/TOf.', 'Kota Denpasar', 'Bali', 1599978937, 1599978937),
(788, 'P5201040101', 'KEDIRI', 3, '$2y$10$L8uj2PYSkp4liBUtdGyBtejxi8c7zTageEJzmVQ0lx/Jg7x1KR56u', 'Lombok Barat', 'Nusa Tenggara Barat', 1599978938, 1599978938),
(789, 'P5202060101', 'PRAYA', 3, '$2y$10$CYT6nNx2y/8IupDPdA/WEO5gRDpiXVsJtWO/RhzX7nK/adZcOSwuC', 'Lombok Tengah', 'Nusa Tenggara Barat', 1599978938, 1599978938),
(790, 'P5203030101', 'TERARA', 3, '$2y$10$NL13mDmF4CtONEnTjktFn.CfoD7FyhI2vC/As7hWCd96gECM1K8hO', 'Lombok Timur', 'Nusa Tenggara Barat', 1599978938, 1599978938),
(791, 'P5204050101', 'ALAS', 3, '$2y$10$pj3lR3Ic/q3KZFuwnO/Feem3vFPEP5s/ZtWO7QwxekeBxvTNB5ywy', 'Sumbawa', 'Nusa Tenggara Barat', 1599978938, 1599978938),
(792, 'P5205030201', 'DOMPU BARAT', 3, '$2y$10$Popn7Gqx86Oe2pTSudiFl.lMEGaF4w30arMXFjF6n3I/SeiStCaTm', 'Dompu', 'Nusa Tenggara Barat', 1599978938, 1599978938),
(793, 'P5206060101', 'SAPE ', 3, '$2y$10$UmKNpQeGCg5wV7TsrkRDM.t5fFfdAXrHqyZtqfmNUcCEMb1YPnY4.', 'Bima', 'Nusa Tenggara Barat', 1599978939, 1599978939),
(794, 'P5207030101', 'TALIWANG', 3, '$2y$10$YJk1IjKBf0qGvjXs.8qW1el7yZU4shylwVLLSGU5m37eehv6OWgr.', 'Sumbawa Barat', 'Nusa Tenggara Barat', 1599978939, 1599978939),
(795, 'P5208020201', 'TANJUNG', 3, '$2y$10$Q4.CUWf7u/CU3U8DHwnwQOs0hKM.a9RijiVvumcprZkYgcMJ19LfO', 'Lombok Utara', 'Nusa Tenggara Barat', 1599978939, 1599978939),
(796, 'P5271031101', 'CAKRANEGARA', 3, '$2y$10$HJ2JxMMHhYDbMQPWYYnvl.dzB9YzjgyPI3DB0Dn.TJP8tAVqSdxHC', 'Kota Mataram', 'Nusa Tenggara Barat', 1599978939, 1599978939),
(797, 'P5272011201', 'MPUNDA', 3, '$2y$10$fKFVU6MtHaxl./fUQaVbqOo6LqjUzrMb4ZU6hGP4eJPpcb7/6XMVq', 'Kota Bima', 'Nusa Tenggara Barat', 1599978939, 1599978939),
(798, 'P5301072201', 'MALATA', 3, '$2y$10$GaDBNzNXhjzaP5gCYiS.sewXtg09wzBy6fNbAFHUooLw.bSxadL9y', 'Sumba Barat', 'Nusa Tenggara Timur', 1599978939, 1599978939),
(799, 'P5302070201', 'WAINGAPU', 3, '$2y$10$4HjICs.iFuKOvcUDqooouObNPTMq91DmW1JE9BunNLLjvVHuvx3Jy', 'Sumba Timur', 'Nusa Tenggara Timur', 1599978940, 1599978940),
(800, 'P5303140101', 'OESAO', 3, '$2y$10$3Q4cBhijBVDAjui2ql00Eu.NMHQhbNBE2Fhs2fNoQNLYYFkUlX9V6', 'Kupang', 'Nusa Tenggara Timur', 1599978940, 1599978940),
(801, 'P5304021202', 'FATUMNUTU', 3, '$2y$10$4nRRozUGjYpNVLXIzpMwxe5kQDuY7ckGAcork6zNPyLHZL14t0DJm', 'Timor Tengah Selatan', 'Nusa Tenggara Timur', 1599978940, 1599978940),
(802, 'P5305020201', 'NUNPENE', 3, '$2y$10$5fWLnzOtZYd5U6jj2m5MRuqCM28vUBfhlT1l3odszq1.D2tfBhpou', 'Timor Tengah Utara', 'Nusa Tenggara Timur', 1599978940, 1599978940),
(803, 'P5306061201', 'KOTA  ATAMBUA', 3, '$2y$10$Mq.1hgHiuRegzEudIy6ehufArPy7EpKgR1uaSHiiXWOt0cqBWJdFy', 'Belu', 'Nusa Tenggara Timur', 1599978940, 1599978940),
(804, 'P5307060202', 'ALOR KECIL', 3, '$2y$10$eMLwZAAXCpEqDH/Blv7eiOpGQ4feDr8FzWByaMfRlMa6Rvz2ghM.O', 'Alor', 'Nusa Tenggara Timur', 1599978940, 1599978940),
(805, 'P5308050201', 'LEWOLEBA', 3, '$2y$10$zLtOKXB.6pmnmTtHzH/XmO9VeCwYqyOvOL.lRKkLz96CwT5IEUOj6', 'Lembata', 'Nusa Tenggara Timur', 1599978941, 1599978941),
(806, 'P5309060101', 'WAIWADAN', 3, '$2y$10$VskyudX1MSjdT3Ofh3FuguUfqwN8seQaNLGvuGW.sIGLbdXAD91Ru', 'Flores Timur', 'Nusa Tenggara Timur', 1599978941, 1599978941),
(807, 'P5310080201', 'KOPETA', 3, '$2y$10$BI0kcJoF0mjeq8M3wMP/JOFef5LvG9fDP031ahpwmYqq05Pdi/vYa', 'Sikka', 'Nusa Tenggara Timur', 1599978941, 1599978941),
(808, 'P5311032202', 'ONEKORE', 3, '$2y$10$icsjO0bvs3ED2o5YhXFv0OSoAvzJlEWMBCMiWQahR6B3SDFryxVTq', 'Ende', 'Nusa Tenggara Timur', 1599978941, 1599978941),
(809, 'P5312020201', 'KOTA', 3, '$2y$10$tDRMZeJN9nBhcW68fjyxnuGwtw1saO8jd1YbPJ4bzzggRcPp/mqK.', 'Manggarai', 'Nusa Tenggara Timur', 1599978941, 1599978941),
(810, 'P5312071101', 'WAEPANA', 3, '$2y$10$9Go8DUfpPhZmKawskvX6zO1m1ATP8AI.4tepevL9DyJMjSLNwK1/y', 'Ngada', 'Nusa Tenggara Timur', 1599978941, 1599978941),
(811, 'P5314030201', 'BAA', 3, '$2y$10$c5beKHtyJnyMHZZEJI8Wdud99ChTdsHbhymFd1XJLO1qL2z0zFN3.', 'Rote Ndao', 'Nusa Tenggara Timur', 1599978942, 1599978942),
(812, 'P5315030101', 'WAE NAKENG', 3, '$2y$10$13/JjZGTGnxlUWJti/SYveWGQmCoAzRcziZpJTI0baKwLsgZkX9Ni', 'Manggarai Barat', 'Nusa Tenggara Timur', 1599978942, 1599978942),
(813, 'P5316010201', 'WAIRASA', 3, '$2y$10$vmD47X7hxTwaiRwRiL2wv.5U5QLuLrLxaykeHV0N6hyxE.33FgUTC', 'Sumba Tengah', 'Nusa Tenggara Timur', 1599978942, 1599978942),
(814, 'P5317050202', 'WATU KAWULA', 3, '$2y$10$umw09FH.RYHkt9zx31nKm.sOUMO0.Gsvb9l68f0F8YjoKGi476th.', 'Sumba Barat Daya', 'Nusa Tenggara Timur', 1599978942, 1599978942),
(815, 'P5318030201', 'NANGARORO', 3, '$2y$10$HiUMxnIk7t78Z1TvdWKLf.Bo4YcCLlCjGkJem4v2pIRbIJ.CoJH6y', 'Nagekeo', 'Nusa Tenggara Timur', 1599978943, 1599978943),
(816, 'P5319010101', 'BORONG', 3, '$2y$10$GWT5lKHLoGiB494ZCXmqveojtWj.t6wzAe/aMCeAwPfmiU/PmJ/My', 'Manggarai Timur', 'Nusa Tenggara Timur', 1599978943, 1599978943),
(817, 'P5320040101', 'SEBA', 3, '$2y$10$WPOfSco3vNFQemtdzInxGO.dEX4NUrGmQBSzWWXceXWwhxrRKqvny', 'Sabu Raijua', 'Nusa Tenggara Timur', 1599978943, 1599978943),
(818, 'P5321020201', 'BESIKAMA', 3, '$2y$10$PxjmaZT067EQnqVjiUe.i.LVzzlqY6rw/Q/MeR6dbgUcZpSWEbFjS', 'Malaka', 'Nusa Tenggara Timur', 1599978944, 1599978944),
(819, 'P6101010201', 'OESAPA', 3, '$2y$10$y/unliftarESfNCnPGbrxe94Xx84Hr00O8Z1loBwOmLNh./IKszva', 'Kota Kupang', 'Nusa Tenggara Timur', 1599978944, 1599978944),
(820, 'P6102010101', 'SUNGAI DURI', 3, '$2y$10$JP2TSGJm0yjP6yuLl0ItnuDbRZQzyBu1acTf7rHe5TwfEwkG8awLy', 'Bengkayang', 'Kalimantan Barat', 1599978944, 1599978944),
(821, 'P6103070101', 'KARANGAN', 3, '$2y$10$bEyT//ZqJvHqh6OVkubfju2.XxeAtWXHmQ6fdPEnGPV17uKcMMvp.', 'Landak', 'Kalimantan Barat', 1599978945, 1599978945),
(822, 'P6104090101', 'SUNGAI PINYUH', 3, '$2y$10$YuvULk6/fwIes9s4YFY.iu249MGVsoDYOWLkTMfNMrKQYUkfB58Dq', 'Pontianak/mempawah', 'Kalimantan Barat', 1599978945, 1599978945),
(823, 'P6105210101', 'BALAI KARANGAN', 3, '$2y$10$xS7/p/RHBnr/BF3CdQeHwe62xWid5.EZzI1vC5vfhdHHxQjulI.PS', 'Sanggau', 'Kalimantan Barat', 1599978945, 1599978945),
(824, 'P6106071201', 'MULIA BARU', 3, '$2y$10$s0JlSE3ZRmp/0wdzVUaP9ONZ51Gy8c1nRpduK0xgJdOKL9kJ25ATa', 'Ketapang', 'Kalimantan Barat', 1599978945, 1599978945),
(825, 'P6107140201', 'SUNGAI DURIAN', 3, '$2y$10$vq5xEM8WJl7WQVSIwf/ydOduTadmnZ/gs9eVBB7y1RdHm6OZe9Ap6', 'Sintang', 'Kalimantan Barat', 1599978946, 1599978946),
(826, 'P6108230201', 'PUTUSSIBAU UTARA', 3, '$2y$10$2jTAsFS56cxDjVupWyhKceZ0D.LncySsNG4ncM/00V2.XgycgpEO6', 'Kapuas Hulu', 'Kalimantan Barat', 1599978946, 1599978946),
(827, 'P6109040101', 'SEKADAU', 3, '$2y$10$MK3LKE80ayfqqRA4T4bWgOoyiTLaUXgqdGoIyEQorLsWjgElM2lzG', 'Sekadau', 'Kalimantan Barat', 1599978946, 1599978946),
(828, 'P6110050201', 'NANGA PINOH', 3, '$2y$10$uXya.epn8CNgJPK2qoSl0e1jTkZKQUHVcuhQ6CpEAB/XtTx5AT9OW', 'Melawi', 'Kalimantan Barat', 1599978946, 1599978946),
(829, 'P6111020201', 'SIDUK', 3, '$2y$10$JWKlwj2uJujGzElcXQHUMefARacHkrOHtA5xf931AV2mPHfLTJRUG', 'Kayong Utara', 'Kalimantan Barat', 1599978947, 1599978947),
(830, 'P6112070103', 'SUNGAI DURIAN', 3, '$2y$10$fkKWdrOkStb0FcbnYoPEReY3gT/MClKBYDKojpOVVLszy5VGQUuTe', 'Kubu Raya', 'Kalimantan Barat', 1599978947, 1599978947),
(831, 'P6171020106', 'SAIGON', 3, '$2y$10$MZFm6moau692yd.Lw53nx.A8JgiA/A68CBI6qI2JiTNggqDaMXkxy', 'Kota Pontianak', 'Kalimantan Barat', 1599978947, 1599978947),
(832, 'P6172020101', 'SINGKAWANG TIMUR I\n', 3, '$2y$10$mYZq82wyyOXWtSF0Nm5dW.dC/dIGsV38H9Qv3HBtJUKM2kFVMv20q', 'Kota Singkawang', 'Kalimantan Barat', 1599978947, 1599978947),
(833, 'P6201060202', 'SUNGAI RANGIT', 3, '$2y$10$pZ.a0270cAIqtML8Pxzjp.kR6FJhsWVJDs.FFsFs2O57OamukahWq', 'Kotawaringin Barat', 'Kalimantan Tengah', 1599978948, 1599978948),
(834, 'P6202060201', 'KETAPANG  I', 3, '$2y$10$inut1b10fwdA2L15XRH98u7.cXVl1MPCNFBqppI5HNZgwz9fIFQk.', 'Kotawaringin Timur', 'Kalimantan Tengah', 1599978948, 1599978948),
(835, 'P6203100201', 'PALINGKAU', 3, '$2y$10$jmJAReQHENwch3tCU93s0e/LYX7jjrst3RFYGQbcPJ2EjZjCT4x6O', 'Kapuas', 'Kalimantan Tengah', 1599978948, 1599978948),
(836, 'P6204040201', 'B U N T O K', 3, '$2y$10$hLWNKt1BlM33YMnJf2h/Y.NI214.hxn/26CsJSfsEsVPBWlS.MQEe', 'Barito Selatan', 'Kalimantan Tengah', 1599978949, 1599978949),
(837, 'P6205050202', 'LANJAS', 3, '$2y$10$MdvrTnLJr3yUk9QVucIy5OTfmhtmiMl8pMvk1L1z5.udZUbtsKET.', 'Barito Utara', 'Kalimantan Tengah', 1599978949, 1599978949),
(838, 'P6206020201', 'SUKAMARA', 3, '$2y$10$JxAYpbX5QkhUh9Cj9d/Ygum5LmUjFuyhlIskjGxJnYE1RjsIV8nxu', 'Sukamara', 'Kalimantan Tengah', 1599978949, 1599978949),
(839, 'P6207011101', 'SEMATU JAYA', 3, '$2y$10$HzoBQLnTsaATneE6Aa3nKOyl.LbbGKUjAlhwOh3EQEnK1hfMhMaKO', 'Lamandau', 'Kalimantan Tengah', 1599978949, 1599978949),
(840, 'P6208010202', 'KUALA PEMBUANG II', 3, '$2y$10$XBRkV7RrClxpfVwa5NC80.DhijudbBaJdIGDX54Yk2XPZvpG5A2ZW', 'Seruyan', 'Kalimantan Tengah', 1599978949, 1599978949),
(841, 'P6209050202', 'KERENG PANGI', 3, '$2y$10$O1AQ84bZfkTlsi3l5dxbqOLds5AHRTuosTDgSbbT0l0ugSiFEJyIu', 'Katingan', 'Kalimantan Tengah', 1599978950, 1599978950),
(842, 'P6210040201', 'PULANG PISAU', 3, '$2y$10$m3Q1Pj6ExP4wiFU9h/XEE.c4Bg2Fj4AG9A7UeElb7Hx8X1Yp94V4S', 'Pulang Pisau', 'Kalimantan Tengah', 1599978950, 1599978950),
(843, 'P6211040201', 'KURUN', 3, '$2y$10$jfR1ZZT5rucKI8dkhqTmPOUHM5b/p7DFXK5UeUW2xu9H0Y1AhbBVO', 'Gunung Mas', 'Kalimantan Tengah', 1599978950, 1599978950),
(844, 'P6212010201', 'PASAR PANAS', 3, '$2y$10$koWZjW6HtS4KyEc7b152WuLdoh3pVhqlEogcVHqvsJ8VP5a5hWFqC', 'Barito Timur', 'Kalimantan Tengah', 1599978950, 1599978950),
(845, 'P6213020201', 'PURUK CAHU', 3, '$2y$10$yOTfK2WfpAYgVCylbAJk0.EbsrZYp9rtSOFrI5I2/DJrFQ39nmU3u', 'Murung Raya', 'Kalimantan Tengah', 1599978951, 1599978951),
(846, 'P6271012203', 'MENTENG', 3, '$2y$10$th.FTHgyB2n9GZ5AfI5z3OfUE9emOHJYJzM04wrjSJCOCYO5/Rt0S', 'Kota Palangka Raya', 'Kalimantan Tengah', 1599978951, 1599978951),
(847, 'P6301050201', 'TAMBANG ULANG', 3, '$2y$10$xwNaz/xAkndXieRJMlzlH.4LiaBfiq4A0V8Zdupd9z9zIdDoCAvg2', 'Tanah Laut', 'Kalimantan Selatan', 1599978951, 1599978951),
(848, 'P6302121101', 'SERONGGA', 3, '$2y$10$n98GljT6jEukq4H78.pVlu2urhyu2.njYxVoSzVbOiYteiOioK6B2', 'Kota Baru', 'Kalimantan Selatan', 1599978951, 1599978951),
(849, 'P6303020201', 'GAMBUT', 3, '$2y$10$zyq8UtY8yfM/M3doc.L9XuAjllQ0zwbpZjKrD7k0c6idy3uy3AcoO', 'Banjar', 'Kalimantan Selatan', 1599978952, 1599978952),
(850, 'P6304060202', 'SEMANGAT DALAM', 3, '$2y$10$WIrsG42qrtaUWO9Nwu0Zg.yCVFwXZUpNflynwHXFjO3MEzv0mgupe', 'Barito Kuala', 'Kalimantan Selatan', 1599978952, 1599978952),
(851, 'P6305040201', 'BANUA PADANG', 3, '$2y$10$enqumGNn6JrDZifOqom41OaeW.hZv1kExrxBmpqAyO.rBoaNWMEvi', 'Tapin', 'Kalimantan Selatan', 1599978952, 1599978952),
(852, 'P6306100102', 'NEGARA', 3, '$2y$10$2U5uhZDuRqbSb/cjpLjndu.2Uk6BPEhssrg7utM8tx7O4kX7kghsa', 'Hulu Sungai Selatan', 'Kalimantan Selatan', 1599978952, 1599978952),
(853, 'P6307010201', 'HARUYAN', 3, '$2y$10$W82qjgn/tqNQPpuysk6u9.v8qPdGAE.Ug7QM4O4XFrBfJXB7rlGda', 'Hulu Sungai Tengah', 'Kalimantan Selatan', 1599978953, 1599978953),
(854, 'P6308071201', 'HAUR GADING', 3, '$2y$10$9lm06hwOkG/OLHxqxob1Y.ydfAkqCOmEkhD9wbiQErBhJI4dURlDe', 'Hulu Sungai Utara', 'Kalimantan Selatan', 1599978953, 1599978953),
(855, 'P6309060202', 'HIKUN', 3, '$2y$10$BUp04zjgIuEhkNmCoTi0cOVGdYqvXvJKHVyK6vdD/Cw1G9lNXqAjK', 'Tabalong', 'Kalimantan Selatan', 1599978953, 1599978953),
(856, 'P6310010101', 'PAGATAN', 3, '$2y$10$EWUEacTf79Le482tVvVMZeNarDTFQlGzQFZ1a/dCyKhG.rgy0fwFq', 'Tanah Bumbu', 'Kalimantan Selatan', 1599978953, 1599978953),
(857, 'P6311040101', 'PARINGIN', 3, '$2y$10$uMI2k5RvE25kQd5BocP8KOtZKGH4Ka7aYfIhNkwHy3VrQBr18eUSK', 'Balangan', 'Kalimantan Selatan', 1599978954, 1599978954),
(858, 'P6371031203', 'CEMPAKA', 3, '$2y$10$7.PCRlBSypziNE/9MeIf8OFIeqUxqR1Hz9nbAIeKxlFqj4Jgo2Ux2', 'Kota Banjarmasin', 'Kalimantan Selatan', 1599978954, 1599978954),
(859, 'P6372031201', 'BANJARBARU UTARA', 3, '$2y$10$/CnY3JSn9g9G38QMtLyPR.P2aB.6YxrsdQe7SQXt/efHsIUWeutXu', 'Kota Banjar Baru', 'Kalimantan Selatan', 1599978954, 1599978954),
(860, 'P6401040202', 'TANAH GROGOT', 3, '$2y$10$iILhxfhbEZkugQRyh.samer86Qnlrq3FMYlEiopSLvs9amVifBG1a', 'Paser', 'Kalimantan Timur', 1599978954, 1599978954),
(861, 'P6402070101', 'BARONG TONGKOK', 3, '$2y$10$UP9n4Y8OwKRmGy3KZ.w88u551.cUnX2eHnmNcmpmoioNjRo4CDPiu', 'Kutai Barat', 'Kalimantan Timur', 1599978955, 1599978955),
(862, 'P6403090202', 'RAPAK MAHANG', 3, '$2y$10$ExMxNX.EWaJMxCHgdYyhmu/XyiysA2F2aJ1Pc/vc5XF0IVBdH5n6y', 'Kutai Kartanegara', 'Kalimantan Timur', 1599978955, 1599978955),
(863, 'P6404040203', 'TELUK LINGGA', 3, '$2y$10$1/KgSsqGP4.yASwavy.g1.llVJmdisr.Sro8GFT3I6Xf9A0TZXSc6', 'Kutai Timur', 'Kalimantan Timur', 1599978955, 1599978955),
(864, 'P6405070202', 'MERANCANG ULU', 3, '$2y$10$Fd3ldgmpx8WaD9mOUJsLT.GNhSQmicdYQKvQQoRuPCL65Iav4Yal6', 'Berau', 'Kalimantan Timur', 1599978956, 1599978956),
(865, 'P6409030101', 'PENAJAM', 3, '$2y$10$ZHlIt8P/rkJy5jriJi7Cd.NRouAPlIwLbBGPsg7c7fCwo8GpgzRdq', 'Penajam Paser Utara', 'Kalimantan Timur', 1599978956, 1599978956),
(866, 'P6411030101', 'UJOH BILANG', 3, '$2y$10$gtTWGEnnrBuYtlOGDLDib.1NYa0eKqFxOZHahKZMZVKmyRGqlf.Oy', 'Mahakam Hulu', 'Kalimantan Timur', 1599978956, 1599978956),
(867, 'P6471010105', 'KLANDASAN ILIR', 3, '$2y$10$E9C8yGNnLZEGDO/lCvcaQOXex/ixBgjWxMUpYgQ3AGZELW//jkEku', 'Kota Balikpapan', 'Kalimantan Timur', 1599978956, 1599978956),
(868, 'P6472030201', 'KAMPUNG BAKA', 3, '$2y$10$w3Rn0mouiJ1kPpJrPEeVWuLoOJaGNYUBL/aTAjc4LzJNQugzLriL6', 'Kota Samarinda', 'Kalimantan Timur', 1599978957, 1599978957),
(869, 'P6474010203', 'BONTANG SELATAN II', 3, '$2y$10$uHqGk/.EgpgUvFs0BHOuWedSxosmf9.0Thdl.MU5ycIrz.ojlbUBu', 'Kota Bontang', 'Kalimantan Timur', 1599978957, 1599978957),
(870, 'P6501150201', 'MALINAU', 3, '$2y$10$IH9r/GzxRKC0o7plY1vkoueCjdkv3B4.kdyuf/B2ombxni/X2nKKu', 'Malinau', 'Kalimantan Utara', 1599978957, 1599978957),
(871, 'P6502050201', 'TANJUNG SELOR', 3, '$2y$10$l3tpF03M2SL1lfSgss8WfONIAkDMR22XTHFjumk9je.7GqaN8LXfO', 'Bulungan', 'Kalimantan Utara', 1599978957, 1599978957),
(872, 'P6503020101', 'TIDENG PALE', 3, '$2y$10$GKzd5GrmSi42bMEW8wujo.LKIDDuUEfUNaGlvnMlFH3XSJqfRJR2C', 'Tana Tidung', 'Kalimantan Utara', 1599978958, 1599978958),
(873, 'P6504100102', 'SEDADAP', 3, '$2y$10$4ggAQStK3B7vPkcIaq5U7.d9wWPQA0nBy2Dn6zOCOWquBZaWv8xsi', 'Nunukan', 'Kalimantan Utara', 1599978958, 1599978958),
(874, 'P6571030201', 'KARANG REJO', 3, '$2y$10$8ePzGb5YE.eTyT7BHE2vyemJhLslQklEqSIwLUDVI85VO1Fcn2S8u', 'Kota Tarakan', 'Kalimantan Utara', 1599978958, 1599978958),
(875, 'P7101021201', 'DOLODUO', 3, '$2y$10$sjEZZkLIcFt633jOqGEGz.P90vUVKbdz1ORvyn8dWPYKauSSJechy', 'Bolaang Mongondow', 'Sulawesi Utara', 1599978959, 1599978959),
(876, 'P7102170101', 'PINELENG', 3, '$2y$10$POuKMcvTN0O/9Sjf4FFT6O8lhz8kjmTBM2WC2AL98knzUctcmnKoy', 'Minahasa', 'Sulawesi Utara', 1599978959, 1599978959),
(877, 'P7103080101', 'MANGANITU', 3, '$2y$10$MagQVoX7KdoI4CnoQoi8BO4j39.IbdzsBo.WXqN5ySwl9a5U21Wpu', 'Kepulauan Sangihe', 'Sulawesi Utara', 1599978959, 1599978959),
(878, 'P7104030101', 'MELONGUANE', 3, '$2y$10$IYzv3ZgKHaigeREMjkNqAuOsZIK22s6p3Zj0jcBhMq23D93Re9cSe', 'Kepulauan Talaud', 'Sulawesi Utara', 1599978959, 1599978959),
(879, 'P7105130101', 'TUMPAAN', 3, '$2y$10$BW93FFp4wnr3H2.190qISe7eGVXQOSl5fwnLqpurmX7eyvfIwkQyW', 'Minahasan Selatan', 'Sulawesi Utara', 1599978960, 1599978960),
(880, 'P7106010101', 'KEMA', 3, '$2y$10$JCbgsM95IMeYx2RLXC1mpueupOJP88W6OMkBfw9QtnIZbCtSzT36y', 'Minahasa Utara', 'Sulawesi Utara', 1599978960, 1599978960),
(881, 'P7107030101', 'BOLAANG ITANG', 3, '$2y$10$rsnz0hgxMPyXpj4mNg0FyOX89LW6sPRLLz0KuHDM2PAewpjuCZ3.W', 'Bolaang Mongodow Utara', 'Sulawesi Utara', 1599978961, 1599978961),
(882, 'P7108070101', 'ONDONG', 3, '$2y$10$O9ch0BMH0hv2cpgcrrLjl.POd4eaY4e1ddPaXdOF1SStja4csiBQG', 'Siau Tagulandang Biaro', 'Sulawesi Utara', 1599978961, 1599978961),
(883, 'P7109040101', 'RATAHAN', 3, '$2y$10$bO2FgxSahcSDucx4AXN3Mes6VqmNIvKC8e57loZzYw9EG3FT4MZUa', 'Minahasa Tenggara', 'Sulawesi Utara', 1599978961, 1599978961),
(884, 'P7110020101', 'MOLIBAGU', 3, '$2y$10$ci1Vh.YAPrSX2HrewBa67uFG5o9tNnzZ9QJJZiNxlzIuUx83s5EHO', 'Bolaang Mongondow Selatan', 'Sulawesi Utara', 1599978962, 1599978962),
(885, 'P7111040101', 'MODAYAG', 3, '$2y$10$JXoizqJAfuBlj.sko3e0yuHGxGogxH/BCtGaUCwVcZ.c4z2vNwYUu', 'Bolaang Mongondow Timur', 'Sulawesi Utara', 1599978962, 1599978962),
(886, 'P7171010101', 'BAHU', 3, '$2y$10$Yq3g8td7ktfllrgCYCFTlOnm6uAbxtT.6GsZxDgx5AOdRd7ke6Piy', 'Kota Manado ', 'Sulawesi Utara', 1599978962, 1599978962),
(887, 'P7172012101', 'GIRUAN WERU', 3, '$2y$10$kk48w2jtLNv6a/j/9PGZbu9dbBqr5c/FVbcMOXFOGLtXdj0nP9V5a', 'Kota Bitung', 'Sulawesi Utara', 1599978962, 1599978962),
(888, 'P7173030201', 'KAKASKASEN', 3, '$2y$10$f3JUE2ressFeFrlGSP6kY.OY8GpAuOcn8hrE.Co4IR82WjPAuJzni', 'Kota Tomohon', 'Sulawesi Utara', 1599978963, 1599978963),
(889, 'P7174030101', 'GOGAGOMAN', 3, '$2y$10$h42dBbkslrEMjoeLPE3J..SdCSVLGRGpiG2h4ISlmUucFa1sRLmKG', 'Kota Kotamobagu', 'Sulawesi Utara', 1599978963, 1599978963),
(890, 'P7201040101', 'SALAKAN', 3, '$2y$10$0vITcaXboU27U1.9cwBGn.7Umk1STKRJcf1w45Jh/IWc63UUysld6', 'Banggai Kepulauan', 'Sulawesi Tengah', 1599978963, 1599978963),
(891, 'P7202050102', 'KAMPUNG BARU', 3, '$2y$10$.xgEgqjUg3XPn6/v4jWgrupCxvhBokR14Cz0JyfByMoLCF6lu1L.q', 'Banggai', 'Sulawesi Tengah', 1599978963, 1599978963),
(892, 'P7203040101', 'WOSU', 3, '$2y$10$JQ47cd85BqbNQKuKVBeeQOIzrgUMzSe250viSlSipDyBMeWCfMG.K', 'Morowali', 'Sulawesi Tengah', 1599978963, 1599978963),
(893, 'P7204072201', 'KAWUA', 3, '$2y$10$SqOyGLIxOAp2BM2aJr2r4eACvLVfUuElvuMTjKUsCab8oofZn/v3G', 'Poso', 'Sulawesi Tengah', 1599978964, 1599978964),
(894, 'P7205120101', 'TOMPE', 3, '$2y$10$nSpXCfDpIydYloeLQvKqmOaIZ3ebWwlIWu5B8KYnuNI..M7yILl12', 'Donggala', 'Sulawesi Tengah', 1599978964, 1599978964),
(895, 'P7206040202', 'KOTA', 3, '$2y$10$LH3FvzwBY.MoWTEhZkh4o.tgYGrsi/IpLGaUa7YwknwKoueF9AgH2', 'Toli-Toli', 'Sulawesi Tengah', 1599978964, 1599978964),
(896, 'P7207020201', 'MOMUNU', 3, '$2y$10$mn4ZFpxt9mdBxKRSiQVoxegBg8sg5SNifd7b04koYpNV8baZP9n6a', 'Buol', 'Sulawesi Tengah', 1599978965, 1599978965),
(897, 'P7208023201', 'PANGI', 3, '$2y$10$NqEEg.fO96dz99myDYav/.o7KlirmlrnML00FvwcqlCkKvZWp4O.C', 'Parigi Moutong', 'Sulawesi Tengah', 1599978965, 1599978965),
(898, 'P7209020101', 'UEKULI', 3, '$2y$10$nhBj7dEiY4jNaNA.SCLaZu6HTXCl4ag9DN8M3MAUIXDbwy2OTu0/6', 'Tojo Una-Una', 'Sulawesi Tengah', 1599978965, 1599978965),
(899, 'P7210130201', 'MARAWOLA', 3, '$2y$10$FQ.0OHAoNephb5PgUDaqZe7Q5JprpJdIozjOWe7kDNrlHqIAfExS6', 'Sigi', 'Sulawesi Tengah', 1599978965, 1599978965),
(900, 'P7211030201', 'LOKOTOY', 3, '$2y$10$sW2ZJLhaXTheKWuIOh84R.FhuQj/4GTvEsbztpyUMoeth2QYsp8xe', 'Banggai Laut', 'Sulawesi Tengah', 1599978965, 1599978965),
(901, 'P7212020101', 'BETELEME', 3, '$2y$10$h3XgkoSuJ28fyJ17maSvmet9g/kMPWlrEUC.F68/t7hKUD8WVIx/C', 'Morowali Utara', 'Sulawesi Tengah', 1599978966, 1599978966),
(902, 'P7301041102', 'BENTENG', 3, '$2y$10$/4IRvjdPb.U6RiLUE.spwe9CUTjOFMrPUox2Iz/6Wjet2Itcowg0W', 'Selayar', 'Sulawesi Selatan', 1599978966, 1599978966),
(903, 'P7302070101', 'TANETE', 3, '$2y$10$1p0ikpbRrhl9bgjTuVuUuO6V6sv6IGSOjV.yoHLFZEkiapOvB9POy', 'Bulukumba', 'Sulawesi Selatan', 1599978966, 1599978966),
(904, 'P7303011101', 'LOKA', 3, '$2y$10$R6wOGt4dmVkfOEpNRXzKqefLrpYpS37n8ymhrQjFHPJN.lGNiGXJm', 'Bantaeng', 'Sulawesi Selatan', 1599978966, 1599978966),
(905, 'P7304030203', 'BINAMU KOTA', 3, '$2y$10$zX8aqjY/pZN.gFN3W8izHum68pd5RgYnkuR6hOsfEwuaZNlsN9/am', 'Jeneponto', 'Sulawesi Selatan', 1599978967, 1599978967),
(906, 'P7305010101', 'MANGARA BOMBANE', 3, '$2y$10$2e5/A3KM.7heBoRSxDoxJ.XffSSnvkGqd9bFlGrbplqMahJwKX922', 'Takalar', 'Sulawesi Selatan', 1599978967, 1599978967),
(907, 'P7306040201', 'SOMBA OPU', 3, '$2y$10$tK5tkQ9XR0w7mN4WqpoQEuX7MmCn5nt7TAFYT.ychr54pz7NFUycG', 'Gowa', 'Sulawesi Selatan', 1599978968, 1599978968),
(908, 'P7307060101', 'LAPPADATA', 3, '$2y$10$pnQZm.lQoTzoPU282Wv3H.44YHzj6Z6lPyHRLfeMB8ntGA7zkgQG6', 'Sinjai', 'Sulawesi Selatan', 1599978968, 1599978968),
(909, 'P7308023101', 'L A U', 3, '$2y$10$GTJDfFPM2AmdHty9eOrKkO8ZK/cfZfqAm71dyieos8q9tXxsI64c.', 'Maros', 'Sulawesi Selatan', 1599978968, 1599978968),
(910, 'P7309041101', 'MINASATE\'NE', 3, '$2y$10$e3FIrpuS6xZSoqvCaAu4buMY/b2L05MV3TVFDDbOsV4QLMGtsg7Zy', 'Pangkajene Kepulauan', 'Sulawesi Selatan', 1599978968, 1599978968),
(911, 'P7310041101', 'MADELLO', 3, '$2y$10$i8oGxfhmAaeonTIN1LlCf.Vfk/0hyHIMPZQ87wKdJujMoxe8StUtu', 'Barru', 'Sulawesi Selatan', 1599978968, 1599978968),
(912, 'P7311210101', 'AJANGALE', 3, '$2y$10$A0dnPjKGfqi0DOfSTbgj.ebsxBTCkpEKI7SticBI2xbXQOuJbPfjO', 'Bone', 'Sulawesi Selatan', 1599978968, 1599978968),
(913, 'P7312060102', 'TAKALALA', 3, '$2y$10$.YKQlR.MFEpBC4ZmVwQKmeE7OgZFY3zYNDmOKrXPre9gDRuddCdiC', 'Soppeng', 'Sulawesi Selatan', 1599978968, 1599978968),
(914, 'P7313040101', 'SOLO', 3, '$2y$10$Z3ul3UZASLp0AujQbFXkouQvHwVxmc0krvy1GNbHJn.erkPwwTBw.', 'Wajo', 'Sulawesi Selatan', 1599978968, 1599978968),
(915, 'P7314060201', 'PANGKAJENE', 3, '$2y$10$lejFLjrkAL8gIDvwGFe9zuz3w093legcpEcfyj3N6Mu15SNM1qOd.', 'Sedereng Rappang', 'Sulawesi Selatan', 1599978968, 1599978968),
(916, 'P7315041201', 'SULILI', 3, '$2y$10$CkKlXCtufsFvO0ajJHLNOeb9gt3PQA182aZI/lHv/olGaaPelheMG', 'Pinrang', 'Sulawesi Selatan', 1599978968, 1599978968),
(917, 'P7316030101', 'BARAKA', 3, '$2y$10$Xo80byGXOrio/T726SZTwuUNFr9kzGIDDfs6BBHgOFCczHP.1.Z9e', 'Enrekang', 'Sulawesi Selatan', 1599978968, 1599978968),
(918, 'P7317061101', 'PONRANG', 3, '$2y$10$rVja2Bo8.Q6Et/MJz9l1Y.csz6A9l.zxEsPQCq45BEZfvf3RTgYsq', 'Luwu', 'Sulawesi Selatan', 1599978968, 1599978968),
(919, 'P7318040101', 'MAKALE', 3, '$2y$10$Y6kGQ3GlHh07a.SAxI5O9e5B.Qz0/W8D3DV6s7vJEpXxVZICF0Gu.', 'Tana Toraja', 'Sulawesi Selatan', 1599978968, 1599978968),
(920, 'P7322050101', 'BONE-BONE', 3, '$2y$10$teRcZQz/kw3r1/GtvkwcVOpY0qCVFKBt06D5suxqqV104NLyLe36W', 'Luwu Utara', 'Sulawesi Selatan', 1599978968, 1599978968),
(921, 'P7325080101', 'MANGKUTANA', 3, '$2y$10$nJA0rwyHf678aOZSXhBEIu/YMMb3HCf2ZhuLV/UV2dWVlE4aO17K2', 'Luwu Timur', 'Sulawesi Selatan', 1599978968, 1599978968),
(922, 'P7326090201', 'RANTEPAO', 3, '$2y$10$Dfmit5OAYcbjRF5vV/3/LOZ9MY1ad06INF.uSizPKONnBv3YNAx6m', 'Toraja Utara', 'Sulawesi Selatan', 1599978968, 1599978968),
(923, 'P7371031102', 'MINASA UPA', 3, '$2y$10$Sk9RYTuo/Mm6yyMxlIioo.B4XBIe658HmgGvfFhM3C8OadzLFFpLy', 'Kota Makassar', 'Sulawesi Selatan', 1599978968, 1599978968),
(924, 'P7372030101', 'LAKESSI', 3, '$2y$10$pWaSp/LwVgWfucxY2zwKwuiVUuI9qBuHbWpe8wco5t5isuiohmoUW', 'Kota Pare-pare', 'Sulawesi Selatan', 1599978968, 1599978968),
(925, 'P7373020101', 'WARA', 3, '$2y$10$WKjoP400eYnDgTvsqFblUe/hk0k5t.RsEKLgLGn4Jqx5dr52q.iTq', 'Kota Palopo', 'Sulawesi Selatan', 1599978968, 1599978968),
(926, 'P7401052101', 'SIONTAPINA', 3, '$2y$10$Mb6lLSNyDjP328k.S.Ewr.FFZEE31anMenIAGFhypqggKeXu2wn3.', 'Buton', 'Sulawesi Tenggara', 1599978968, 1599978968),
(927, 'P7401070101', 'SAMPOLAWA', 3, '$2y$10$qCFNcAOIgbWw3y8yK4/ZEeEikg6G4qX36H24JEiVTexh3XC1T4TdW', 'Buton Selatan', 'Sulawesi Tenggara', 1599978968, 1599978968),
(928, 'P7401140101', 'MAWASANGKA', 3, '$2y$10$oFxS0VTOHsSA2fhFI30Zy.0SzwVilh4SMVmsjIjLOdPG2ifxXUf/O', 'Buton Tengah', 'Sulawesi Tenggara', 1599978968, 1599978968),
(929, 'P7402042202', 'TIWORO TENGAH', 3, '$2y$10$ziJLttjNtRqwWOa7zueXQudzAs9dhzBv7dmNiE0P6UN2yXrd4JAAi', 'Muna Barat', 'Sulawesi Tenggara', 1599978968, 1599978968),
(930, 'P7402071201', 'WAARA', 3, '$2y$10$oMfr96/m6F/omkOemX3M9OLs11xwKIiqgcHEfNCnIbBq7D0jfWZGS', 'Muna', 'Sulawesi Tenggara', 1599978968, 1599978968),
(931, 'P7403170201', 'UNAAHA', 3, '$2y$10$ZKfeqFqVSQyStkkb09Ib2On2xE.h//RoOR9y.GSMuSyavGdCjCPMK', 'Konawe', 'Sulawesi Tenggara', 1599978968, 1599978968),
(932, 'P7404020101', 'POMALAA', 3, '$2y$10$VwfOmGkhsbMcF7DjsT4wle5owXk69dPVI9/HR80FwaApXPV/PoLxK', 'Kolaka', 'Sulawesi Tenggara', 1599978968, 1599978968),
(933, 'P7405041101', 'LAINEA', 3, '$2y$10$7fo.skTRZAvCt5FGhGvoYu5QNfWK1vlUGf.2hziNEzLyh8Lo.Wlda', 'Konawe Selatan', 'Sulawesi Tenggara', 1599978968, 1599978968),
(934, 'P7406030101', 'RUMBIA', 3, '$2y$10$rGLZJYV3.6hlxhA1IHN8C.RslA80RNnkV1tbE2b3e8xTxvL3wfJT2', 'Bombana', 'Sulawesi Tenggara', 1599978968, 1599978968),
(935, 'P7407040102', 'WANGI-WANGI', 3, '$2y$10$i9dpmJmjaBhhznLDGzY/Oe3dZKJJ80g6kMeClGf45fkmND9Rb./6G', 'Wakatobi', 'Sulawesi Tenggara', 1599978968, 1599978968),
(936, 'P7408020101', 'LASUSUA', 3, '$2y$10$/FVyPs2OaAajHELDm7L3/ep06GyIMbn8RHAx7/Ko2/KSVmWTS0tem', 'Kolaka Utara', 'Sulawesi Tenggara', 1599978968, 1599978968),
(937, 'P7409122201', 'WAODE BURI', 3, '$2y$10$qIutWXVC2T86vNVfmnpwq.vQGR6aoy2ngIFyilOL1FwzFWfGTomhq', 'Buton Utara', 'Sulawesi Tenggara', 1599978968, 1599978968),
(938, 'P7410030101', 'LASOLO', 3, '$2y$10$q5Y/uRxLm87UvW01PhFHnOhU1daYm8ONDp1QHuCHepsWEbAXRXvP2', 'Konawe Utara', 'Sulawesi Tenggara', 1599978968, 1599978968),
(939, 'P7411070101', 'TIRAWUTA', 3, '$2y$10$gCwl5xr9tjLVkAakuFlaY.utoNI.OjnXyfasQcsyGRqvMdVTfEM9y', 'Kolaka Timur', 'Sulawesi Tenggara', 1599978968, 1599978968),
(940, 'P7412072101', 'LANGARA', 3, '$2y$10$8P6dBRzjRodTjJdByXyiYuHkCxrZZKhWC/DJEEgg50x3N4p8pX5DW', 'Konawe Kepulauan', 'Sulawesi Tenggara', 1599978968, 1599978968),
(941, 'P7471012101', 'PUUWATU', 3, '$2y$10$ZABFeBp3OeKqeCaKw520nuv0O2Cvt7B72U7I09OakXbQEWyQiuLny', 'Kota Kendari', 'Sulawesi Tenggara', 1599978968, 1599978968),
(942, 'P7472011101', 'WAJO', 3, '$2y$10$197lCB5gIviQ5pzyi2n7veIaJ7MflkEj2K/qau26H0VwKMJgCFJT.', 'Kota Bau-Bau', 'Sulawesi Tenggara', 1599978968, 1599978968),
(943, 'P7501050102', 'BONGO II', 3, '$2y$10$TJVB7qC1eTTimnRk8IbWqebAVHVZFxKdIPTB/wx3FOA9GClfOMyGe', 'Boalemo', 'Gorontalo', 1599978968, 1599978968),
(944, 'P7502071201', 'LIMBOTO BARAT', 3, '$2y$10$.rqVJWKo715AKFP5FDe1QOSaaGQj8VsvDJI4xjYoNLmckDztzHmn2', 'Gorontalo', 'Gorontalo', 1599978968, 1599978968),
(945, 'P7503040101', 'MOTOLOHU', 3, '$2y$10$RyMX8D.YbEGMnlS.FVHtYu8C74ZPWa79LOaz8LIpvKBowke/gJTJW', 'Pohuwato', 'Gorontalo', 1599978968, 1599978968),
(946, 'P7504020201', 'KABILA', 3, '$2y$10$3Nb1zUpes7z0nxgMtaHlAOTQ0zDkWVMLQBNeE3.HS.XzIza1ynalu', 'Bone Bolango', 'Gorontalo', 1599978968, 1599978968),
(947, 'P7505020101', 'KWANDANG', 3, '$2y$10$CpQ1O8gaSuyxcZaDdZ/Pi.mxe7Ge95v5UDNnMU7Yu5qK6Axmhwrai', 'Gorontalo Utara', 'Gorontalo', 1599978968, 1599978968),
(948, 'P7601020101', 'PAMBOANG', 3, '$2y$10$5vp97nH9jz7CyKEFQJttvO73Sn85I7EZki1Mif0fQhH.paxYiaUBi', 'Majene', 'Sulawesi Barat', 1599978968, 1599978968),
(949, 'P7602010101', 'TINAMBUNG', 3, '$2y$10$ohnjGQDQ.r4ylvN006LxWOfdMBNrF9mYbk0Dk2XfZFG0Rs8XYEABK', 'Polewali Mandar', 'Sulawesi Barat', 1599978968, 1599978968),
(950, 'P7603050101', 'MAMASA', 3, '$2y$10$/Gf8EH5gBqdTpK/IIr6rke72.R1tgQBoYrRWg0ngiy.azcVqRsSiG', 'Mamasa', 'Sulawesi Barat', 1599978968, 1599978968),
(951, 'P7604030101', 'TAMPAPADANG', 3, '$2y$10$k1tNUbMdZisrlInQPDEn7.kEYmXNRE3rFLu/nNwCS18V55irR.eXu', 'Mamuju', 'Sulawesi Barat', 1599978968, 1599978968),
(952, 'P7605042101', 'SARJO', 3, '$2y$10$pejiLJgsA4uQkJ.53YIAluOLA4sAb/ixRyJ40IizfyYTkJi0BcitW', 'Mamuju Utara', 'Sulawesi Barat', 1599978968, 1599978968),
(953, 'P7606053101', 'DURIKUMBA', 3, '$2y$10$LCwJDHEN8ipMhOhFmWuWZucmuGKr1AxZIJXj35Y9dw2x3t/y9c/X6', 'Mamuju Tengah', 'Sulawesi Barat', 1599978968, 1599978968),
(954, 'P8101040101', 'SAUMLAKI', 3, '$2y$10$DCPOUg.L9yFgG6l.GYHAwuv/yJn1djoSx5d1Z6DybDde8HAK4pQQe', 'Maluku Tenggara Barat', 'Maluku', 1599978968, 1599978968),
(955, 'P8102010202', 'KOLSER', 3, '$2y$10$hMCmKW.vykVawo29.A09zu2et5C19qbnvJHncXqW7ohoNhv8hguxS', 'Maluku Tenggara', 'Maluku', 1599978968, 1599978968),
(956, 'P8103050101', 'AMAHAI', 3, '$2y$10$cSm5yHcAV/Djy5kNaxSxrOj5p2e6BnODc8N.dOrQHqwOI5QS546cm', 'Maluku Tengah', 'Maluku', 1599978968, 1599978968),
(957, 'P8104020202', 'NAMLEA', 3, '$2y$10$DmvTe/dCJcFX29h.wPxVe.g8TNpJdcEP8ScH48gvyK4h0ugHjMjf.', 'Buru', 'Maluku', 1599978968, 1599978968),
(958, 'P8105030101', 'DOBO', 3, '$2y$10$uJd.pmWGo03xMao7TXTcmuU.uiE/rUxfXaUKDEFCQzyHkqmIrm3Vq', 'Kepulauan Aru', 'Maluku', 1599978968, 1599978968);
INSERT INTO `user` (`no`, `kode`, `nama`, `role_id`, `password`, `kab_kota`, `provinsi`, `date_created`, `last_login`) VALUES
(959, 'P8106030205', 'KAIRATU BARAT', 3, '$2y$10$JTlX5pp3LHDb1VFz5mjtnOhrp1nElCWpIen4dyrYpzyEjgvzzAXvm', 'Seram Bagian Barat', 'Maluku', 1599978968, 1599978968),
(960, 'P8107040101', 'BULA', 3, '$2y$10$FykpWB3HAxKE1BjzeNk3hOuTtXQNzAnbCOeHmvaoeO05USIcuONIm', 'Seram Bagian Timur', 'Maluku', 1599978968, 1599978968),
(961, 'P8108030101', 'SERWARU', 3, '$2y$10$flUsva4bJHRDqEWmgr0PHOfcmwvuMbNjbt09864ikJGtTP.oo.Mui', 'Maluku Barat Daya', 'Maluku', 1599978968, 1599978968),
(962, 'P8109030101', 'NAMROLE', 3, '$2y$10$2FuoOnq2/qwPfzUHdR7tKOftDKu9ZcyHuuNGiLZHJqSlZ57vLWiwO', 'Buru Selatan', 'Maluku', 1599978968, 1599978968),
(963, 'P8171010202', 'WAIHAONG', 3, '$2y$10$XVqbfbfppHSQotRwMwb1xewp3nxR4Kdf74r0XGhPkNU3HPBW0Vx2e', 'Kota Ambon', 'Maluku', 1599978968, 1599978968),
(964, 'P8172040202', 'UN', 3, '$2y$10$VCWdOTeWKuQ4ox97hoCSmucna8lUdpG6iJhc72I32rKITXIQeGnlG', 'Kota Tual', 'Maluku', 1599978968, 1599978968),
(965, 'P8201090201', 'JAILOLO', 3, '$2y$10$VPJpk.r90tPG3gjOED4Ng.M.CN6WvsVOipyyrkdrxQsRsf5/wZNIm', 'Halmahera Barat', 'Maluku Utara', 1599978968, 1599978968),
(966, 'P8202030102', 'WEDA', 3, '$2y$10$UM8kR62pbvLMoXUikj0e.eYo0b234RNTwWY/t89k5tqBLcaCQf0uS', 'Halmahera Tengah', 'Maluku Utara', 1599978968, 1599978968),
(967, 'P8203021201', 'WAIBOGA', 3, '$2y$10$YmevIb4Fp1bt6vSYyDbeTOfLn8xCdFmjfJ9ebEtDKjcg/bzqVOXbO', 'Kepulauan Sula', 'Maluku Utara', 1599978968, 1599978968),
(968, 'P8204030201', 'LABUHA', 3, '$2y$10$AFfyRtKyhBGIWwVrnqT0qunnY9xuggcUIubpJLYhU3fb0YqRzFPmS', 'Halmahera Selatan', 'Maluku Utara', 1599978968, 1599978968),
(969, 'P8205040201', 'TOBELO', 3, '$2y$10$KVTn30jHqAEZemuCrLDYoumExm15.KT2k.Y2N95cJ7RqVxnsQEf5i', 'Halmahera Utara', 'Maluku Utara', 1599978968, 1599978968),
(970, 'P8206030101', 'SUBAIM', 3, '$2y$10$NMBQVbrtHhLhTCcXRCcx7.yGTMDfmV.yuuv3SledZ2Q4bxdb8GY62', 'Halmahera Timur', 'Maluku Utara', 1599978968, 1599978968),
(971, 'P8207010201', 'DARUBA', 3, '$2y$10$6N4E95UG93k4EZt2gW7.VO8GnF2dDixeulXAxY19ai.WuvqEA3F0W', 'Pulau Morotai', 'Maluku Utara', 1599978968, 1599978968),
(972, 'P8208010101', 'BOBONG', 3, '$2y$10$h5OTsz2HXCCakJIHOsYaienLzFuLq7s4bWhW6wb32jS6gQEPXQ066', 'Pulau Taliabu', 'Maluku Utara', 1599978968, 1599978968),
(973, 'P8271030101', 'SIKO', 3, '$2y$10$Py6FL3Yixs7d7k7Ppo.M6ekKH6mnVZ5r2WI2tMMlTCikqwbG3N4Km', 'Kota Ternate', 'Maluku Utara', 1599978968, 1599978968),
(974, 'P8272030201', 'SOA SIO', 3, '$2y$10$cFDTLyHHUH3xcKp4yP/kSeKj6paQsJmwLMIXeveYc/vleZx9IE/rq', 'Kota Tidore Kepulauan', 'Maluku Utara', 1599978968, 1599978968),
(975, 'P9101060201', 'FAK-FAK KOTA', 3, '$2y$10$ZeyuraXIGohkmXVSsiqCPuSncOiEqVtBGhcLQmlwF7U/Az7OacJY2', 'Fak-fak', 'Papua Barat', 1599978968, 1599978968),
(976, 'P9102030101', 'KAIMANA', 3, '$2y$10$mof7qX9KK2X3OWMKuPherepeoq6FqqRg9r5ituVFfPFvQszIOgHX6', 'Kaimana', 'Papua Barat', 1599978968, 1599978968),
(977, 'P9103030101', 'WASIOR', 3, '$2y$10$cPiaRTvmBBOfTZNdUz7X/emGMNHxgOhkL0KvShNTSnM3SkLOTNtF6', 'Teluk Wondama', 'Papua Barat', 1599978968, 1599978968),
(978, 'P9104050101', 'BINTUNI', 3, '$2y$10$nvW0o0o0OystQaxTW2qQQu1glkpJDwGxRVzHJRSnCo4SOuF1yw9M.', 'Teluk Bintuni', 'Papua Barat', 1599978968, 1599978968),
(979, 'P9105141202', 'SANGGENG', 3, '$2y$10$d1JhAlrp9L6MFJFi6L3Yr.vaZFp13ADieqbxJM7yWvQOCPGTyziKG', 'Manokwari', 'Papua Barat', 1599978968, 1599978968),
(980, 'P9106060201', 'MOSWAREN', 3, '$2y$10$p2Np07lHpDd2x05Z7m4zzeQbpKiBBjQqMlD9QQI5vrhKVOhWJB6WO', 'Sorong Selatan', 'Papua Barat', 1599978968, 1599978968),
(981, 'P9108040202', 'WAISAI', 3, '$2y$10$POJ1GtyBfP4XP7GUldiZGuXTdQtS4emmE./CY6AUHfEJHXWf1QRZG', 'Raja Ampat', 'Papua Barat', 1599978968, 1599978968),
(982, 'P9110060201', 'AYAMARU TIMUR', 3, '$2y$10$xQXq3VPj1lhHn5AlP6Hbx.QniWtucsDRtH4I0vKeW.W1aVgjmLM4.', 'Maybrat', 'Papua Barat', 1599978968, 1599978968),
(983, 'P9111060101', 'ORANSBARI', 3, '$2y$10$RCvheGezqkECQhuEmLcoiey..nfpDfQa4CKwV7Oi5zPBInQnhBx5m', 'Manokwari Selatan', 'Papua Barat', 1599978968, 1599978968),
(984, 'P9112050101', 'ANGGI', 3, '$2y$10$N6ujCin1IcIr2JpiVAAR0ugFr3/HCWgxVGYm1asisVHM82aO3O43W', 'Pegunungan Arfak', 'Papua Barat', 1599978968, 1599978968),
(985, 'P9171020201', 'KLASAMAN', 3, '$2y$10$bvYvBVOudIgQPJFTNA5Q/.JREPKS4gkB5tn.NlWaF6eJmNU/Byv0K', 'Kota Sorong', 'Papua Barat', 1599978968, 1599978968),
(986, 'P9401040201', 'MOPAH BARU', 3, '$2y$10$8eAog87u8g4nrOVNRZM30eYPLzmBFsJGWUMNNV/ul0AbKLMCJAZp6', 'Merauke', 'Papua', 1599978968, 1599978968),
(987, 'P9402110201', 'WAMENA KOTA', 3, '$2y$10$Ar5y0sx9deNDHP3ZgbyO0uTDVmSaXPOOFlHjRwOWJOEv0wcP.5Xr2', 'Jayawijaya', 'Papua', 1599978968, 1599978968),
(988, 'P9403240201', 'HARAPAN', 3, '$2y$10$4/tkXyoIYTtDzkReG3lpte3EBBHZuuyl5XmIHXa1KN0vye1/vD0Zm', 'Jayapura', 'Papua', 1599978968, 1599978968),
(989, 'P9404080204', 'NABIRE KOTA', 3, '$2y$10$El.CTbAuWTmnEa1UxPcwb.cYtbDGGAPRxhl1LLIPs5acGJ5fPqauy', 'Nabire', 'Papua', 1599978968, 1599978968),
(990, 'P9408060202', 'WARARI', 3, '$2y$10$AuTqD.ef5k.8sEDGfvsrS.csIRCKgYDnlGeVveHKZZkhKXOPbH2na', 'Kep. Yapen', 'Papua', 1599978968, 1599978968),
(991, 'P9409060202', 'SUMBERKER', 3, '$2y$10$Cd9w5JVqWwDbjOHswbR02Ov.XIpxjsWfDaaQ3gLrQsgc.2VPPUnIG', 'Biak Numfor', 'Papua', 1599978968, 1599978968),
(992, 'P9410030101', 'ENAROTALI', 3, '$2y$10$tX2EJiMKtUMa74vt493nUOPDkfdwe2iRpFFlhPEcZWnGycBjPfOCe', 'Paniai', 'Papua', 1599978968, 1599978968),
(993, 'P9411050201', 'MULIA', 3, '$2y$10$PZWMQ/U5p8yQdnumUVEXJek23HEtiuRpyOQWC2ZF51VUIyBi/88UC', 'Puncak Jaya', 'Papua', 1599978968, 1599978968),
(994, 'P9412030202', 'TIMIKA JAYA', 3, '$2y$10$UbASZ38NMB7D/zyqfIJoeeihFSFRIfP7hC4Aubo3WA/7rhT6KH5jS', 'Mimika', 'Papua', 1599978968, 1599978968),
(995, 'P9413030101', 'TANAH MERAH', 3, '$2y$10$PE4NIDlBcZrLPeT9XDN.febnrfC6cAn0eP8Imb.amKKU5p5uiyhRq', 'Boven Digoel', 'Papua', 1599978968, 1599978968),
(996, 'P9415010201', 'KAMUR', 3, '$2y$10$GgVuuN5SrEbZat5wU1xZfuG0u21zfcg2IVYwq4dq7zd8VYl/xpi9m', 'Asmat', 'Papua', 1599978968, 1599978968),
(997, 'P9416013101', 'DEKAI', 3, '$2y$10$euGlotgcyzvnL3L33o9gvua2vN1Pq7FH058UVtwjRxyRSET46wFcG', 'Yahukimo', 'Papua', 1599978968, 1599978968),
(998, 'P9417020101', 'OKSIBIL', 3, '$2y$10$ArxG8hgwHEUoaRVONA0vT.ehIQColfkC1hxmRIkA3h55I5ocGpV4e', 'Pegunungan Bintang', 'Papua', 1599978968, 1599978968),
(999, 'P9418020101', 'KARUBAGA', 3, '$2y$10$AllnkfcjV9K2RoeOwLqlrOyJZTVJ1llNJGxVZsfXJBrQo0H2uJyLO', 'Tolikara', 'Papua', 1599978968, 1599978968),
(1000, 'P9419050101', 'SARMI', 3, '$2y$10$C7rdVQvzZ2/tnd8NqGJlLuSKs.9SST1hLSPGWpX1lK4j5PWDugSL2', 'Sarmi', 'Papua', 1599978968, 1599978968),
(1001, 'P9420050101', 'ARSO III', 3, '$2y$10$VBTEmkMnVUwzL1G/4UiGTeiziLs3VBCmqKX1QcUWXkpUEs1ias19a', 'Keerom', 'Papua', 1599978968, 1599978968),
(1002, 'P9426010101', 'WAREN', 3, '$2y$10$O4J.co4Q2grVJARAyTMl3.v.pbYqUV3WVwQ2ISHjyDO9607GGLMUS', 'Waropen', 'Papua', 1599978968, 1599978968),
(1003, 'P9427030103', 'SORENDIWERI', 3, '$2y$10$10bieePsJJVQr4SO5U6QeuHpHYduZ.EC250TTY3akedGxn.czQFJu', 'Supiori', 'Papua', 1599978968, 1599978968),
(1004, 'P9428050101', 'KASONAWEJA', 3, '$2y$10$tPTXUDoLun8t4jpQRJswluR/x0fYNMyo9panRsRYM79e/qkQah2F.', 'Memberamo Raya', 'Papua', 1599978968, 1599978968),
(1005, 'P9429020101', 'KENEYAM ', 3, '$2y$10$iePnXbN6AlDvHbGef1TMses2yvl0CulZtmM4thaPy1RBt3lJ2/XhG', 'Nduga', 'Papua', 1599978968, 1599978968),
(1006, 'P9430030101', 'TIOM ', 3, '$2y$10$glOet6bqhR7nbajG49niTeoass9s1V37Jy6Tmt1Jz1TGl2EGePasG', 'Lanny Jaya', 'Papua', 1599978968, 1599978968),
(1007, 'P9431010201', 'KOBAKMA ', 3, '$2y$10$zi57/fNltVn24KqY.cMJO.1Khb8Dr.VJOqiL1lzrOSqWp2M7TbFJK', 'Memberamo Tengah', 'Papua', 1599978968, 1599978968),
(1008, 'P9432040101', 'ELELIM ', 3, '$2y$10$YJ4ZfSIybadjFWzOnean4eE6Rj5ngGNLgCjS8wxVhlnRhCiYajzyW', 'Yalimo', 'Papua', 1599978968, 1599978968),
(1009, 'P9433030101', 'ILAGA ', 3, '$2y$10$gcQQYxxzT4lBCePpZ5FIOulFovZr1K6u3AewpRJ5IQvQbA6TmYeZi', 'Puncak', 'Papua', 1599978968, 1599978968),
(1010, 'P9434080101', 'MOANEMANI ', 3, '$2y$10$PJdR/83cXN8EFjd4hzjXDuRcgD/V5gcoIivLQdZUiDxe2hGpYkGVu', 'Dogiyai', 'Papua', 1599978968, 1599978968),
(1011, 'P9435020101', 'BILOGAI', 3, '$2y$10$loqlYXI.8IjoRjhfyW9L/u0297MSJHURfDGlV9StN2PeqNhtBrhf2', 'Intan Jaya', 'Papua', 1599978968, 1599978968),
(1012, 'P9436030101', 'WAGHETE ', 3, '$2y$10$rcQ3Q7gunOq15iuGk48aZOuwavW4ReYX1kr7lm.Ddvej/yUjl7osq', 'Deiyai', 'Papua', 1599978968, 1599978968),
(1013, 'P9471020203', 'WAENA', 3, '$2y$10$hOcC4JeaGRQ/wVHOjk4C0.q7rd9.4k0kRFLMViD2FPiH34TiscW8O', 'Kota Jayapura', 'Papua', 1599978968, 1599978968),
(1014, 'Pr10011', 'Aceh', 1, '$2y$10$Ua7mN4ehbOvzAM1Nw0q/ZeaWVHOujgJxtnL31SmuKdSiJ0b4AefpK', '-', 'Aceh', 1599978968, 1599978968),
(1015, 'Pr10012', 'Sumatera Utara', 1, '$2y$10$YcHXKqueVY3BmeiEBVzJ2u7CvsYLWG1QOIW3UBN7LY88RL7Lvtp9u', '-', 'Sumatera Utara', 1599978968, 1599978968),
(1016, 'Pr10013', 'Sumatera Barat', 1, '$2y$10$Gaquzb/ELzG9u3O//DmsS.ogY7WE5gwn4itbol61aGfAM7eJjQCaS', '-', 'Sumatera Barat', 1599978968, 1599978968),
(1017, 'Pr10014', 'Riau', 1, '$2y$10$2UE.n8vohsfkZFayN.BTx.jXvSLpAj4myV2QZ4ilkqVoHSMqD/.qa', '-', 'Riau', 1599978968, 1599978968),
(1018, 'Pr10015', 'Kepulauan Riau', 1, '$2y$10$RXaOPHYfkHXBgeNVxAqRse7425qs.04.L.BLzO8Qe9j/9Y5iXTIba', '-', 'Kepulauan Riau', 1599978968, 1599978968),
(1019, 'Pr10016', 'Jambi', 1, '$2y$10$oSArd8rYuzTQQQd3PojOluxlPY95mMMndYz3pJh/f.YXZbvt.alAq', '-', 'Jambi', 1599978968, 1599978968),
(1020, 'Pr10017', 'Bengkulu', 1, '$2y$10$K65E1nJoZwEa4UixR83NSe7yDLnpCYJb47il0hgTvE/YVu15oSBmW', '-', 'Bengkulu', 1599978968, 1599978968),
(1021, 'Pr10018', 'Sumatera Selatan', 1, '$2y$10$ZibRnijucg9sEDAQwfyNjOj3Iq/2Zap72bHWpMmKbpBhp2dQhV4zG', '-', 'Sumatera Selatan', 1599978968, 1599978968),
(1022, 'Pr10019', 'Kepulauan Bangka Belitung', 1, '$2y$10$5bqBXRsVXH8TkQIajQ63SO.t7chuUYeYerwvcdeB2MK1BFbBGEp2e', '-', 'Kepulauan Bangka Belitung', 1599978968, 1599978968),
(1023, 'Pr10020', 'Lampung', 1, '$2y$10$de1rBAgP0USEW6zxc0iNieYNxPU5cishgebmuvnVLhufb/tBdfPq.', '-', 'Lampung', 1599978968, 1599978968),
(1024, 'Pr10021', 'Banten', 1, '$2y$10$Dd93CIKF/hZuA3AssyLqHOCWC.I/aEXitaN4T5lD6LhqESP1XnfD2', '-', 'Banten', 1599978968, 1599978968),
(1025, 'Pr10022', 'Jawa Barat', 1, '$2y$10$XYeU0/4eZo/7g3FEuCdN3.MD45Maz8xAnCbgbzVPjC7Zh/X6u/POi', '-', 'Jawa Barat', 1599978968, 1599978968),
(1026, 'Pr10023', 'DKI Jakarta', 1, '$2y$10$Qu8wInAGK6hF.7R8xHwKFeAF1yjvH89DQp31beSgvLPf9yr.vgsXm', '-', 'DKI Jakarta', 1599978968, 1599978968),
(1027, 'Pr10024', 'Jawa Tengah', 1, '$2y$10$BngFji/EEyZKpFuDqGTUJOnqUhFOoIGlZw.Bru5i4dTakKcyHgS0C', '-', 'Jawa Tengah', 1599978968, 1599978968),
(1028, 'Pr10025', 'DI Yogyakarta', 1, '$2y$10$VQlfOFdkgbDTFuEcDIj8Xe6VVnbgGNxj3ggbAB1MHnPaWxaSyxJU6', '-', 'DI Yogyakarta', 1599978968, 1599978968),
(1029, 'Pr10026', 'Jawa Timur', 1, '$2y$10$wGuBsUkhQP4XOrYK5sj7oegggBtQzYOvJGJXok9xjwCIJ4wQ/wc7q', '-', 'Jawa Timur', 1599978968, 1599978968),
(1030, 'Pr10027', 'Bali', 1, '$2y$10$51xesfR6a9HqwwF9sRBT8.IMV1nZ.NAug.YkHfTNZZqo3CCFaFS7W', '-', 'Bali', 1599978968, 1599978968),
(1031, 'Pr10028', 'Nusa Tenggara Barat', 1, '$2y$10$F/mHN/lLsefBvVfCJxU7TeIPns1vGTv2U71RPwoteKqS6bZB5aKbG', '-', 'Nusa Tenggara Barat', 1599978968, 1599978968),
(1032, 'Pr10029', 'Nusa Tenggara Timur', 1, '$2y$10$Nf6QV9n/NOfxzakOqV74A.N8sWczRwcfYpMk6J6FtsDCehzG9xhi6', '-', 'Nusa Tenggara Timur', 1599978968, 1599978968),
(1033, 'Pr10030', 'Kalimantan Utara', 1, '$2y$10$SfQCAdGyK1ia5pDlcbsPjemDn9lzwXnRjiH0vi2IRaIrjsglq6BBK', '-', 'Kalimantan Utara', 1599978968, 1599978968),
(1034, 'Pr10031', 'Kalimantan Barat', 1, '$2y$10$dfLoQ5aFABMZcPxDPHjeIO16bNzTvBT8SjH3qWqK5.70/cbqzfJQm', '-', 'Kalimantan Barat', 1599978968, 1599978968),
(1035, 'Pr10032', 'Kalimantan Tengah', 1, '$2y$10$zSrtdrJ/d5hCUd1TgpyP..SUXFYuBPZtM7zFP177SdVP84ExLPpo6', '-', 'Kalimantan Tengah', 1599978968, 1599978968),
(1036, 'Pr10033', 'Kalimantan Selatan', 1, '$2y$10$UZhMcFQNlxJiGMvcK/Rfb.bfRRXbf2ODkMLWH19b6jiggf7FvXNF2', '-', 'Kalimantan Selatan', 1599978968, 1599978968),
(1037, 'Pr10034', 'Kalimantan Timur', 1, '$2y$10$zTGHG7UaHFhpvCAdaMiElOCaJ7SG7UkUeY3e0D.IKp/d4HRm6DyTe', '-', 'Kalimantan Timur', 1599978968, 1599978968),
(1038, 'Pr10035', 'Gorontalo', 1, '$2y$10$Ue/kgrp2BSzM5sCZZOxR0eaWbrBcaMs9c/XHLgrarCkwqK4bAnN5a', '-', 'Gorontalo', 1599978968, 1599978968),
(1039, 'Pr10036', 'Sulawesi Utara', 1, '$2y$10$M1/3sXQ4edUeJJO8evrRgOwK8oSOZuG6ucy.WAx68rWLfc6jk6oyK', '-', 'Sulawesi Utara', 1599978968, 1599978968),
(1040, 'Pr10037', 'Sulawesi Barat', 1, '$2y$10$c.3xuTZuycLTt7sHIoEpluWrQUPJrEPQU4JsO6lulzknOQ631QBBa', '-', 'Sulawesi Barat', 1599978968, 1599978968),
(1041, 'Pr10038', 'Sulawesi Tengah', 1, '$2y$10$T.g1JJPoZBuydwL2lYcaj.9UHstdHoeHQ603lfWxdO/QLdH2Djffe', '-', 'Sulawesi Tengah', 1599978968, 1599978968),
(1042, 'Pr10039', 'Sulawesi Selatan', 1, '$2y$10$39vp4V0Be/YcPnde8qXJEuXdWa0MD4WJ9FIC009i1HtZ43ESuu6qi', '-', 'Sulawesi Selatan', 1599978968, 1599978968),
(1043, 'Pr10040', 'Sulawesi Tenggara', 1, '$2y$10$OezIWKWyDfmgFWkv8fc0WegLM/shq1bizUrE93popQ.uNPcCySL5S', '-', 'Sulawesi Tenggara', 1599978968, 1599978968),
(1044, 'Pr10041', 'Maluku Utara', 1, '$2y$10$Dj42F6D.zKx1ZMElqOtynOMGQIoOmV436cpPINRCdjN.PbOQXXcl2', '-', 'Maluku Utara', 1599978968, 1599978968),
(1045, 'Pr10042', 'Maluku', 1, '$2y$10$TmJb2Rylrx4wmKyhoxWcW.cbU0LU1zV8EH/zxziOyxPXyOb/VCZ.u', '-', 'Maluku', 1599978968, 1599978968),
(1046, 'Pr10043', 'Papua Barat', 1, '$2y$10$XCR6NN.pxys4zrUTEKcb/uIi./ZA1HxXRD7obYFfQX8G2I5Y714iG', '-', 'Papua Barat', 1599978968, 1599978968),
(1047, 'Pr10044', 'Papua', 1, '$2y$10$eZISdgKIk8fb.S8DoCpQs.6aR4EZvdMqBq0.C0XrYeMdb2uei7egK', '-', 'Papua', 1599978968, 1599978968),
(1048, 'pusat1234', 'Pusat', 0, '$2y$10$8GX4H75bhSTyKTw.Hp6PTeK6c2qOy/L4xs7HTn.1iJfDYHQDu/LSa', '-', '-', 0, 0),
(1049, 'puskesmas', 'Puskesmas Contoh', 3, '$2y$10$YnM5CXIPYuPbPA9RNOnikulhJnlSfuH7WwpMvn5IeoUe7Z4nlSXRC', '-', '-', 1599978968, 1599978968),
(1050, 'kabupaten_kota', 'kabupaten kota Contoh', 2, '$2y$10$8Wt2Ek8T34RRxVCI3LXvI.PNNj58EPIVTAXJD6JVJa5uvM9AWR7bG', '-', '-', 1599978968, 1599978968),
(1051, 'provinsi', 'Provinsi Contoh', 1, '$2y$10$5xlP/7HGdQHf4ZVERZBCYOwaBYu/coDXsEpymuE6mTsQa3EFShqyu', '-', '-', 1599978968, 1599978968),
(1052, 'pusat', 'Pusat Contoh', 0, '$2y$10$GEcS3Ho4SzPkZKdtOeX1LOERIECJXcNpsH2eDsr/zzWRyzVPl8gle', '-', '-', 1599978968, 1599978968);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bangunan_puskesmas`
--
ALTER TABLE `bangunan_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `cakupan_indikator_program`
--
ALTER TABLE `cakupan_indikator_program`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `identitas_puskesmas`
--
ALTER TABLE `identitas_puskesmas`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `lokasi_puskesmas`
--
ALTER TABLE `lokasi_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `organisasi_manajemen`
--
ALTER TABLE `organisasi_manajemen`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pelaksanaan_sistem_kewaspadaan_dini`
--
ALTER TABLE `pelaksanaan_sistem_kewaspadaan_dini`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pemenuhan_sdm_puskesmas`
--
ALTER TABLE `pemenuhan_sdm_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pencegahan_dan_pengendalian_infeksi`
--
ALTER TABLE `pencegahan_dan_pengendalian_infeksi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas`
--
ALTER TABLE `pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `penggerakan_dan_pelaksanaan_kegiatan_puskesmas`
--
ALTER TABLE `penggerakan_dan_pelaksanaan_kegiatan_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pengisian_aspak`
--
ALTER TABLE `pengisian_aspak`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `penilaian_kinerja_puskesmas`
--
ALTER TABLE `penilaian_kinerja_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `peningkatan_mutu`
--
ALTER TABLE `peningkatan_mutu`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `peralatan_puskesmas`
--
ALTER TABLE `peralatan_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `prasarana_puskesmas`
--
ALTER TABLE `prasarana_puskesmas`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `sumber_daya_manusia`
--
ALTER TABLE `sumber_daya_manusia`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tim_pembina_terpadu`
--
ALTER TABLE `tim_pembina_terpadu`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `upaya_inovasi`
--
ALTER TABLE `upaya_inovasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `identitas_puskesmas`
--
ALTER TABLE `identitas_puskesmas`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1053;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
