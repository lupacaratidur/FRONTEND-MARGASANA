<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surat Keterangan Kematian</title>

    <style>
        .fs-1 {
            font-size: 9px;

        }

        .fs-2 {
            font-size: 20px;
        }

        .fs-3 {
            font-size: 14px;
        }

        .table,
        .td,
        .th {
            border: 1px solid #595959;
            border-collapse: collapse;
        }

        .td,
        .th {
            padding: 5px;

            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .with-border10::before {
            content: ': ';
            margin-left: 10px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border29::before {
            content: ': ';
            margin-left: 29px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border20::before {
            content: ': ';
            margin-left: 20px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border25::before {
            content: ': ';
            margin-left: 25px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border24::before {
            content: ': ';
            margin-left: 24px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border23::before {
            content: ': ';
            margin-left: 23px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border22::before {
            content: ': ';
            margin-left: 22px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border21::before {
            content: ': ';
            margin-left: 21px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border4::before {
            content: ': ';
            margin-left: 4px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border03::before {
            content: ': ';
            margin-left: -3px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border57::before {
            content: ': ';
            margin-left: 57px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border0150::before {
            content: ' : ';
            margin-left: -150px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border0140v2::before {
            content: ' ';
            margin-left: -140px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border10v2::before {
            content: ' ';
            margin-left: 10px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border0100::before {
            content: ': ';
            margin-left: -100px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border090v2::before {
            content: ' ';
            margin-left: -90px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border41::before {
            content: ': ';
            margin-left: 41px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border0257::before {
            content: ': ';
            margin-left: -257px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border0150::before {
            content: ': ';
            margin-left: -150px;
            /* Sesuaikan jarak antara : dan border */
        }

        .with-border50::before {
            content: ': ';
            margin-left: 50px;
            /* Sesuaikan jarak antara : dan border */
        }
    </style>
</head>
{{--  --}}

<body style="margin: 0px 10px 0px;">


    <!-- KOP SURAT -->

    <div style="margin-top: -30px; margin-bottom: 25px;">
        <table>
            <tr>
                <td class="fs-1">
                    Pemerintah Desa/Kelurahan
                </td>
                <td class="fs-1 with-border50">
                    <a>MARGASANA</a>
                </td>
                <td class="fs-1" style=" padding-left:380px">
                    <a style="border: 1px solid black;">Kode F.201</a>
                </td>
            </tr>
            <tr>
                <td class="fs-1">
                    Kecamatan
                </td>
                <td class="fs-1
                    with-border50"><a>JATILAWANG</a>
                </td>
                <td class="fs-1" style=" padding-left:340px"><a>Lembar 1 : UPTD/Instansi</a>
                </td>

            </tr>
            <tr>
                <td class="fs-1">
                    Kabupaten
                </td>
                <td class="fs-1
                    with-border50"><a>BANYUMAS</a>
                </td>
                <td class="fs-1" style=" padding-left:340px"><a>Lembar 2 : Untuk yang</a>
                </td>

            </tr>
            <tr>
                <td class="fs-1">
                    Kode Wilayah
                </td>
                <td class="fs-1
                    with-border50">
                    <a style="border: 1px solid black">872465982473598</a>
                </td>
                <td class="fs-1" style=" padding-left:340px">
                    <a>Lembar 3 : Desa/kelurahan</a>
                </td>

            </tr>

        </table>
    </div>


    <!-- JUDUL SURAT  -->
    <div align="center" style="margin-top: -30px;">
        <div class="fw-bold fs-1 text-uppercase">
            <span> Surat Keterangan kematian</span>
        </div>
        <p class="fs-1" style="margin-top: 0px;">Nomor : {{ $surat->nomor_surat_kematian }}</p>
    </div>


    <!-- ISI SURAT -->

    <table width="100%">
        <table>
            <tr>
                <td class="fs-1" style="padding-right:55px">Nama Kepala Keluarga</td>
                <td class="fs-1 with-border10"><a class="fs-1 text-uppercase"
                        style="border: 1px solid black">{{ $surat->kepala_keluarga_jenazah }}</a></td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="fs-1" style="padding-right:58px">Nomor Kartu keluarga</td>
                <td class="fs-1 with-border10"><a class="fs-1"
                        style="border: 1px solid black; padding: 2px 30px 0px 2px; ">
                        {{ $surat->no_kk_jenazah }}</a>
                </td>
            </tr>
        </table>
    </table>


    <!-- DATA JENAZAH -->

    <table width="100%">
        <tr>
            <td class="fs-1" style="font-weight: bold;">JENAZAH</td>
        </tr>
        <tr>
            <td class="fs-1" style="padding-right:72px">1. NIK</td>
            <td class="fs-1 with-border21"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; ">{{ $surat->nik_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->nama_jenazah }}</a>
                <a style="margin-right: 50px; margin-left: 40px">1. Laki-laki </a> <a>2. Perempuan</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">3. Jenis Kelamin</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kelamin_jenazah }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. Laki-Laki </a> <a style="margin-right: 20px">2.
                    Perempuan </a>
            </td>
        </tr>


        <tr>
            <td class="fs-1">4. Tanggal Lahir/Umur</td>
            <td class="fs-1 with-border21"><a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_jenazah }}</a>

                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_jenazah }}</a>

                <a>Thn </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_jenazah }}</a>
                <a>Umur</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_jenazah }}</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">5. tempat Lahir</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">
                    {{ $surat->tempat_lahir_jenazah }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">6. Agama</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->agama_jenazah }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. Islam </a> <a style="margin-right: 20px">2.
                    Kristen </a><a style="margin-right: 20px">3.
                    Katholik</a><a style="margin-right: 20px">4. Hindu</a><a style="margin-right: 20px">5.
                    Budha</a><a style="margin-right: 20px">6.
                    Lainnya</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">7. Pekerjaan</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->pekerjaan_jenazah }}</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">8. Alamat</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->alamat_jenazah }}</a>

            </td>
        </tr>

        <tr>
            <td class="fs-1">9. Anak Ke</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->anak_ke_jenazah }}</a>
                <a style="margin-right: 20px">1, 2, 3, 4, 5, ......</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">10. Tanggal Kematian</td>
            <td class="fs-1 with-border21"><a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_mati_jenazah }}</a>

                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_mati_jenazah }}</a>

                <a>Thn </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_mati_jenazah }}</a>

            </td>
        </tr>
        <tr>
            <td class="fs-1" style="margin-right: 200px; ">11. Pukul</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->pukul_jenazah }}</a></a>

            </td>
            </td>
        </tr>
    </table>
    </div>



    <!-- DATA AYAH -->
    <table width="100%">
        <tr>
            <td class="fs-1" style="font-weight: bold;">AYAH</td>
        </tr>
        <tr>
            <td class="fs-1" style="padding-right:83px">1. NIK</td>
            <td class="fs-1 with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border03"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1 with-border03">
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_ayah_jenazah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_ayah_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_ayah_jenazah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 text-uppercase with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">5. Alamat</td>
            <td class="fs-1 with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_ayah_jenazah }}</a>
            </td>
        <tr>
            <td style="margin-right: 10px"></td>
            <td class="fs-1 with-border10v2">a. Desa / Kelurahan</td>
            <td class="fs-1 with-border0150"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">MARGASANA
                </a></td>
            <td class="fs-1 with-border0100v2">c. Kab/Kota</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td class="fs-1 with-border10v2">b. Kecamatan</td>
            <td class="fs-1 with-border0150"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATILAWANG</a></td>
            <td class="fs-1">d. Provinsi</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JAWA
                    TENGAH</a></td>
        </tr>
        </tr>

    </table>


    <!-- DATA IBU -->
    <table width="100%">
        <tr>
            <td class="fs-1" style="font-weight: bold;">IBU</td>
        </tr>
        <tr>
            <td class="fs-1" style="padding-right:83px">1. NIK</td>
            <td class="fs-1 with-border03"><a class="fs-1 "
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_ibu_jenazah }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border03"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_ibu_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1 with-border03">
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_ibu_jenazah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_ibu_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_ibu_jenazah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_ibu_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 text-uppercase with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_ibu_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">5. Alamat</td>
            <td class="fs-1 with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px text-transform:capitalize;">{{ $surat->alamat_ibu_jenazah }}</a>
            </td>
        <tr>
            <td> </td>
            <td class="fs-1 " style="padding-left:30px">a. Desa / Kelurahan</td>
            <td class="fs-1 with-border0150"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">MARGASANA
                </a></td>
            <td class="fs-1 with-border0100v2">c. Kab/Kota</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td class="fs-1" style="padding-left:30px">b. Kecamatan</td>
            <td class="fs-1 with-border0150"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATILAWANG</a></td>
            <td class="fs-1">d. Provinsi</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JAWA
                    TENGAH</a></td>
        </tr>

    </table>


    <!-- DATA PELAPOR-->
    <table width="100%">
        <tr>
            <td class="fs-1" style="font-weight: bold;">PELAPOR</td>
        </tr>
        <tr>
            <td class="fs-1" style="padding-right:43px">1. NIK</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border57"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">3. Umur</td>
            <td class="fs-1 with-border57">
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">4. Jenis Kelamin</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kelamin_pelapor_jenazah }}</a>
                <a style="margin-right: 50px; margin-left: 40px">1. Laki-laki </a> <a>2. Perempuan</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">5. Pekerjaan</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">6. Alamat</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_pelapor_jenazah }}</a>
            </td>
        <tr>
            <td style="margin-right: 10px"></td>
            <td class="fs-1" style="padding-left:65px">a. Desa / Kelurahan </td>
            <td class="fs-1 with-border0150"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">MARGASANA
                </a></td>
            <td class="fs-1 with-border0100v2">c. Kab/Kota</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td class="fs-1" style="padding-left:65px">b. Kecamatan</td>
            <td class="fs-1 with-border0150"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATILAWANG</a></td>
            <td class="fs-1">d. Provinsi</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JAWA
                    TENGAH</a></td>
        </tr>
        </tr>
    </table>


    <!-- DATA SAKSI I-->
    <table width="100%">
        <tr>
            <td class="fs-1" style="font-weight: bold;">SAKSI I</td>
        </tr>
        <tr>
            <td class="fs-1" style="padding-right:45px">1. NIK</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_saksi1_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border57"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_saksi1_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">3. Umur</td>
            <td class="fs-1 with-border57">
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_saksi1_jenazah }}</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_saksi1_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">5. Alamat</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_saksi1_jenazah }}</a>
            </td>
        <tr>
            <td style="margin-right: 10px"></td>
            <td class="fs-1" style="padding-left: 65px">a. Desa / Kelurahan</td>
            <td class="fs-1 with-border0150" style="padding-left: 115px"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">MARGASANA</a></td>
            <td class="fs-1 with-border0100v2">c. Kab/Kota</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td class="fs-1 with-border10v2" style="padding-left: 55px">b. Kecamatan</td>
            <td class="fs-1 with-border0150" style="padding-left: 115px"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATILAWANG</a></td>
            <td class="fs-1">d. Provinsi</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JAWA
                    TENGAH</a></td>
        </tr>

    </table>

    <!-- DATA SAKSI II-->
    <table width="100%">
        <tr>
            <td class="fs-1" style="font-weight: bold;">SAKSI II</td>
        </tr>
        <tr>
            <td class="fs-1" style="padding-right:61px">1. NIK</td>
            <td class="fs-1 with-border41"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_saksi2_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border41"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_saksi2_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">3. Umur</td>
            <td class="fs-1 with-border41">
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_saksi2_jenazah }}</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">4. Pekerjaan Saksi 2</td>
            <td class="fs-1 with-border41"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_saksi2_jenazah }}</a>

            </td>
        </tr>

        <tr>
            <td class="fs-1">5. Alamat</td>
            <td class="fs-1 with-border41"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_saksi2_jenazah }}</a>
            </td>
        <tr>
            <td style="margin-right: 10px"></td>
            <td class="fs-1" style="padding-left: 55px">a. Desa / Kelurahan</td>
            <td class="fs-1 with-border0150" style="padding-left: 115px"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">MARGASANA</a></td>
            <td class="fs-1 with-border0100v2">c. Kab/Kota</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td class="fs-1 with-border10v2" style="padding-left: 45px">b. Kecamatan</td>
            <td class="fs-1 with-border0150" style="padding-left: 115px"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATILAWANG</a></td>
            <td class="fs-1">d. Provinsi</td>
            <td class="fs-1 with-border10"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JAWA
                    TENGAH</a></td>
        </tr>

    </table>

    <!-- Tanda Tangan -->
    <div width="100%" style="margin-top: 30px">
        <div align="center" class="fs-1" style="width: 250px; position: relative; float: left; right: -27em">
            <p>Margasana, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>

            <p style="margin-top: -10px !important">Kepala Desa Margasana</p>
            <br> <br><br><br><br><br>
            <p style="margin-top: -10px !important" class="text-uppercase">DODIT ARI WIBOWO, S.Farm.,Apt</p>
        </div>
    </div>
</body>

</html>
