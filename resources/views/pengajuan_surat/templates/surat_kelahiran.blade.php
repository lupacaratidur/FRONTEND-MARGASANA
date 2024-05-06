<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surat Keterangan Kelahiran</title>

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
            <span> Surat Keterangan Kelahiran</span>
        </div>
        <p class="fs-1" style="margin-top: 0px;">Nomor : {{ $surat->nomor_surat }}</p>
    </div>


    <!-- ISI SURAT -->

    <table width="100%">
        <table>
            <tr>
                <td class="fs-1" style="padding-right:55px">Nama Kepala Keluarga</td>
                <td class="fs-1 with-border10"><a class="fs-1 text-uppercase"
                        style="border: 1px solid black">{{ $surat->kepala_keluarga }}</a></td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="fs-1" style="padding-right:58px">Nomor Kartu keluarga</td>
                <td class="fs-1 with-border10"><a class="fs-1"
                        style="border: 1px solid black; padding: 2px 30px 0px 2px; ">
                        {{ $surat->no_kk }}</a>
                </td>
            </tr>
        </table>
    </table>


    <!-- DATA ANAK -->

    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td class="fs-1" style="font-weight: bold;">BAYI/ANAK</td>
        </tr>
        <tr>
            <td class="fs-1">1. Nama</td>
            <td class="fs-1 with-border21"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; with-border">{{ $surat->nama_bayi }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">2. Jenis Kelamin</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kelamin_bayi }}</a>
                <a style="margin-right: 50px; margin-left: 40px">1. Laki-laki </a> <a>2. Perempuan</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">3. Tempat Dilahirkan</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->tempat_lahir }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. RS/RB </a> <a style="margin-right: 20px">2.
                    Puskesmas </a><a style="margin-right: 20px">3.
                    Polindes</a><a style="margin-right: 20px">4. Rumah</a><a style="margin-right: 20px">5.
                    Lainnya</a>
            </td>
        </tr>

        <td class="fs-1">4. Tempat Kelahiran</td>
        <td class="fs-1 text-uppercase with-border21"><a class="fs-1 text-uppercase"
                style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->lokasi_lahir }}</a></td>

        <tr>
            <td class="fs-1">5. hari dan Tanggal Lahir</td>
            <td class="fs-1 with-border21"><a>Hari </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->hari_lahir }}</a>

                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_bayi }}</a>

                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_bayi }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_bayi }}</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">6. Pukul</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">
                    {{ $surat->lahir_pukul }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">7. Jenis Kelahiran</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->jenis_lahir }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. Tunggal </a> <a style="margin-right: 20px">2.
                    Kembar 2 </a><a style="margin-right: 20px">3.
                    Kembar 3</a><a style="margin-right: 20px">4. Kembar 4</a><a style="margin-right: 20px">5.
                    Lainnya</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">8. kelahiran Ke</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->lahiran_ke }}</a><a
                    style="margin-right: 20px">1. 2. 3. 4. 5. .....</a></td>
        </tr>

        <tr>
            <td class="fs-1">9. Penolong Kelahiran</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->penolong_lahir }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. Dokter </a> <a style="margin-right: 20px">2.
                    Bidan/Perawat </a><a style="margin-right: 20px">3.
                    Dukun</a><a style="margin-right: 20px">4.
                    Lainnya</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">11. Berat Bayi</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->berat_bayi }}</a>
                <a style="margin-right: 20px"> Kg</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1" style="margin-right: 200px; ">12. Panjang Bayi</td>
            <td class="fs-1 with-border21"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->panjang_bayi }}</a></a>
                <a style="margin-right: 20px"> Cm</a>
            </td>
            </td>
        </tr>
    </table>
    </div>



    <!-- DATA IBU -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td class="fs-1" style="font-weight: bold;">IBU</td>
        </tr>
        <tr>
            <td class="fs-1">1. NIK</td>
            <td class="fs-1 with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_ibu }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border03"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_ibu }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1 with-border03">
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_ibu }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_ibu }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_ibu }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_ibu }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 text-uppercase with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_ibu }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">5. Alamat</td>
            <td class="fs-1 with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_ibu }}</a>
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
        <tr>
            <td class="fs-1">6. Kewarganegaraan</td>
            <td class="fs-1 with-border03"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kewarganegaraan_ibu }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. WNI </a> <a style="margin-right: 20px">2.
                    WNA </a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">7. Kebangsaan</td>
            <td class="fs-1 text-uppercase with-border03"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; ">Indonesia{{ $surat->kebangsaan_ibu }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">8. Tgl Pencatatan Perkawinan</td>
            <td class="fs-1 with-border03">
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_nikah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_nikah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_nikah }}</a>
            </td>
        </tr>
    </table>


    <!-- DATA AYAH -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td class="fs-1" style="font-weight: bold;">AYAH</td>
        </tr>
        <tr>
            <td class="fs-1">1. NIK</td>
            <td class="fs-1 with-border24"><a class="fs-1 "
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_ayah }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border24"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_ayah }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1 with-border24">
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_ayah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_ayah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_ayah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_ayah }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">4. Alamat</td>
            <td class="fs-1 with-border24"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px text-transform:capitalize;">{{ $surat->alamat_ayah }}</a>
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
        <tr>
            <td class="fs-1">5. Kewarganegaraan</td>
            <td class="fs-1 with-border24"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kewarganegaraan_ayah }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. WNI </a> <a style="margin-right: 20px">2.
                    WNA </a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">6. Kebangsaan</td>
            <td class="fs-1 text-uppercase with-border24"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; ">{{ $surat->kebangsaan_ayah }}</a>
            </td>
        </tr>
    </table>


    <!-- DATA PELAPOR-->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td class="fs-1" style="font-weight: bold;">PELAPOR</td>
        </tr>
        <tr>
            <td class="fs-1">1. NIK</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_pelapor }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border57"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_pelapor }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">3. Umur</td>
            <td class="fs-1 with-border57">
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_pelapor }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">4. Jenis Kelamin</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kelamin_pelapor }}</a>
                <a style="margin-right: 50px; margin-left: 40px">1. Laki-laki </a> <a>2. Perempuan</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">5. Pekerjaan</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_pelapor }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">6. Alamat</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_pelapor }}</a>
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


    <!-- DATA SAKSI-->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td class="fs-1" style="font-weight: bold;">SAKSI I</td>
        </tr>
        <tr>
            <td class="fs-1">1. NIK</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_saksi1 }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border57"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_saksi1 }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">3. Umur</td>
            <td class="fs-1 with-border57">
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_saksi1 }}</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_saksi1 }}</a>
            </td>
        </tr>
        <tr>
            <td class="fs-1">5. Alamat</td>
            <td class="fs-1 with-border57"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_saksi1 }}</a>
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

    <!-- DATA SAKSI-->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td class="fs-1" style="font-weight: bold;">SAKSI II</td>
        </tr>
        <tr>
            <td class="fs-1">1. NIK</td>
            <td class="fs-1 with-border41"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_saksi2 }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1 with-border41"><a class="fs-1 text-uppercase"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_saksi2 }}</a></td>
        </tr>
        <tr>
            <td class="fs-1">3. Umur</td>
            <td class="fs-1 with-border41">
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_saksi2 }}</a>
            </td>
        </tr>

        <tr>
            <td class="fs-1">4. Pekerjaan Saksi 2</td>
            <td class="fs-1 with-border41"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px; text-transform:capitalize">{{ $surat->pekerjaan_saksi2 }}</a>

            </td>
        </tr>

        <tr>
            <td class="fs-1">5. Alamat</td>
            <td class="fs-1 with-border41"><a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px; text-transform:capitalize">{{ $surat->alamat_saksi2 }}</a>
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
    <div width="100%" style="margin-bottom: -30px">
        <div align="center" class="fs-1" style="width: 250px; position: relative; float: left; right: -5em">
            <p>Margasana, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>

            <p style="margin-top: -10px !important">Kepala Desa Margasana</p>
            <br> <br><br><br>
            <p style="margin-top: -10px !important" class="text-uppercase">DODIT ARI WIBOWO, S.Farm.,Apt</p>
        </div>
        <div align="center" class="fs-1" style="width: 250px; position: relative; right: -12em; float: left;">
            <p>Margasana, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>

            <p style="margin-top: -10px !important">Pelapor</p>

            <br><br><br><br>
            <p style="margin-top: -10px !important" class="text-uppercase">{{ $surat->nama_pelapor }}</p>
        </div>

    </div>
</body>

</html>
