<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DaftarPuskesmas_Model');
        $this->load->model('PemenuhanSD_Model');
        $this->load->model('IdentitasPuskesmas_Model');
        $this->load->model('OrganisasiManajemen_Model');
        is_logged_in();
    }

    public function identitas_puskesmas($kode)
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $identitas = $this->IdentitasPuskesmas_Model->check($kode);

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ],
        ];

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Puskesmas')
            ->setCellValue('A2', 'No Registrasi')
            ->setCellValue('A3', 'Tanggal Pendirian')
            ->setCellValue('A4', 'Alamat')
            ->setCellValue('A5', 'Kecamatan')
            ->setCellValue('A6', 'Kabupaten/Kota')
            ->setCellValue('A7', 'Provinsi')
            ->setCellValue('A8', 'No. Telepon Puskesmas dan No Telepon Whatsapp')
            ->setCellValue('A9', 'No. Telepon Ruang Gadar')
            ->setCellValue('A10', 'No. Faksimile')
            ->setCellValue('A11', 'Alamat email')
            ->setCellValue('A12', 'Alamat website');

        $spreadsheet->getActiveSheet()->getStyle('A1:A12')->applyFromArray($styleArray);

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('B1', $identitas['nama'])
            ->setCellValue('B2', $identitas['no_reg'])
            ->setCellValue('B3', date('d F Y', $identitas['tgl_pendirian']))
            ->setCellValue('B4', $identitas['alamat'])
            ->setCellValue('B5', $identitas['kecamatan'])
            ->setCellValue('B6', $identitas['kab_kota'])
            ->setCellValue('B7', $identitas['provinsi'])
            ->setCellValue('B8', $identitas['no_telp'])
            ->setCellValue('B9', $identitas['no_telp_gadar'])
            ->setCellValue('B10', $identitas['no_faksimile'])
            ->setCellValue('B11', $identitas['email'])
            ->setCellValue('B12', $identitas['website']);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(50);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(30);

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Identitas Puskesmas.xlsx"');
        header('Cache-Control: max-age=0');

        $myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'My Data');

        // Attach the "My Data" worksheet as the first worksheet in the Spreadsheet object
        $spreadsheet->addSheet($myWorkSheet, 0);

        $writer->save('php://output');
    }

    public function organisasi_manajemen($kode)
    {
        $organisasi = $this->OrganisasiManajemen_Model->check($kode);

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ],
        ];

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nomor Izin Operasional Puskesmas')
            ->setCellValue('A2', 'Tanggal Terbit Izin Operasional Puskesmas')
            ->setCellValue('A3', 'Kategori Puskesmas')
            ->setCellValue('A4', 'Kategori Puskesmas (Kawasan)')
            ->setCellValue('A5', 'Kategori Puskesmas (Rawat Inap/Non Rawat Inap)')
            ->setCellValue('A6', 'Status Akreditasi')
            ->setCellValue('A7', 'Puskesmas Mempunyai Dokumen Pengelolaan Lingkungan (UKL/UPL atau PPLH)');

        $spreadsheet->getActiveSheet()->getStyle('A1:A7')->applyFromArray($styleArray);

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('B1', $organisasi['niop'])
            ->setCellValue('B2', date('d F Y', $organisasi['tgl_izin']))
            ->setCellValue('B4', $organisasi['kategori'])
            ->setCellValue('B5', $organisasi['kategorinon'])
            ->setCellValue('B6', $organisasi['status'])
            ->setCellValue('B7', $organisasi['pplh']);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(50);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(30);

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Organisasi Puskesmas.xlsx"');
        header('Cache-Control: max-age=0');

        $myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'My Data');

        // Attach the "My Data" worksheet as the first worksheet in the Spreadsheet object
        $spreadsheet->addSheet($myWorkSheet, 0);
        $writer->save('php://output');
    }
}
