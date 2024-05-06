<html moznomarginboxes mozdisallowselectionprint>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan</title>

    <style>
        .fs-1 {
            font-size: 16px;
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
            padding: 3px;
            width: 100px;
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }

        .text-uppercase {
            text-transform: uppercase;
        }
    </style>
</head>


<body style="margin: 50px 10px;">


    <!-- Kop Surat -->
    <div align="center" style="border-bottom: 2px solid #000000; padding-bottom: 20px; margin-top: -60px !important">
        <img src="https://raw.githubusercontent.com/lupacaratidur/Desa_Margasana/main/public/img/kop-surat.png"
            width="100%" alt="">
    </div>

    <br <br <!-- Title -->
    <div align="center" style="text-align: center; margin-top: 1em;">
        <div>
            <span class="fw-bold fs-1 text-uppercase" style="border-bottom: 2px solid black; padding: -10px"> Surat
                Keterangan/Pengantar</span>
            <p class="fs-1" style="margin-top: 5px">Nomor : {{ $surat->nomor_surat }}</p>
        </div>

    </div>

    <!-- Content -->

    <div style="margin-top: 50px;">
        <div class="fs-1" style="margin-bottom: 10px;">Yang bertanda tangan dibawah ini :</div>
        <table width="100%">
            <tr>
                <td width="35%" class="fs-1">Nama</td>
                <td class="fs-1 ">: DODIT ARI WIBOWO, S.Farm.,Apt</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">NIK</td>
                <td class="fs-1 text-uppercase">: 3302031411880001</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Jabatan</td>
                <td class="fs-1">: Kepala Desa Margasana</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Unit Kerja</td>
                <td class="fs-1">: Desa Margasana Kecamatan Kabupaten Banyumas</td>
            </tr>
            <div class="fs-1" style="margin-bottom: 10px;">Yang bertanda tangan dibawah ini :</div>
            <tr>
                <td width="35%" class="fs-1">Nama</td>
                <td class="fs-1 text-uppercase">: {{ $surat->nama }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">NIM</td>
                <td class="fs-1 text-uppercase">: {{ $surat->nim }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Perguruan Tinggi</td>
                <td class="fs-1" style="text-transform:capitalize">: {{ $surat->univ }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Program Studi</td>
                <td class="fs-1" style="text-transform:capitalize">: {{ $surat->prodi }}</td>
            </tr>

        </table>

        <div class="fs-1" style="margin-top: 20px;">akan melaksanakan penelitian di Desa Margasana Kecamatan
            Jatilawang kabupaten Banyumas pada tanggal
            {{ \Carbon\Carbon::parse($surat->awal_penelitian)->isoFormat('D MMMM Y') }}
            sampai dengan {{ \Carbon\Carbon::parse($surat->akhir_penelitian)->isoFormat('D MMMM Y') }} untuk memperoleh
            data dalam rangka penelitian dengan judul</div>
        <div class="fs-1 text-uppercase" style="margin-top: 20px; margin-bottom:20px">"{{ $surat->judul_penelitian }}"
        </div>

        <div class="fs-1" style="margin-top: 20px;">Demikian Surat ini dibuat untuk digunakan
            sebagaimana mestinya.</div>

    </div>

    <br>
    <br>
    <br>
    <!-- Tanda Tangan -->
    <div align="center" style="width: 250px; position: relative; right: -27.5em; float: left;" class="fs-1">
        <p>Margasana, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
    </div>


    <br <br <br <div width="100%">
    <div align="center" class="fs-1" style="width: 250px; position: relative; right: -27.5em; float: left;">
        <p style="margin-top: -10px !important">Kepala Desa Margasana</p>

        <br><br><br><br>
        <p style="margin-top: -10px !important">DODIT ARI WIBOWO, S.Farm.,Apt</p>
    </div>

    </div>

</body>

</html>
