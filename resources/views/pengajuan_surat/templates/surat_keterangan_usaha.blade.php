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
                Keterangan Usaha</span>
            <p class="fs-1" style="margin-top: 5px">Nomor : {{ $surat->nomor_surat }}</p>
        </div>

    </div>

    <!-- Content -->

    <div style="margin-top: 50px;">
        <div class="fs-1" style="margin-bottom: 10px;">Yang bertanda tangan dibawah ini atas nama Kepala Desa
            margasana Kecamatan Jatilawang Kabupaten Banyumas menerangkan bahwa :</div>
        <table width="100%">
            <tr>
                <td width="35%" class="fs-1">Nama</td>
                <td class="fs-1 text-uppercase"> : {{ $surat->nama }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Tempat & Tanggal Lahir</td>
                <td class="fs-1" style="text-transform: capitalize"> : {{ $surat->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($surat->ttl)->isoFormat('D-MM-Y') }}
                </td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Kewarganegaraan / Agama</td>
                <td class="fs-1"> : {{ $surat->negara_agama }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Tempat Tinggal</td>
                <td class="fs-1"> : {{ $surat->alamat }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Tanda Bukti Diri</td>
                <td class="fs-1"> : KTP No. {{ $surat->nik }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Lama Usaha</td>
                <td class="fs-1"> : {{ $surat->lama_usaha }}</td>
            </tr>

        </table>

        <div class="fs-1" style="margin-top: 20px;">Orang tersebut benar-benar mempunyai usaha sebagai
            pedagang/petani/jasa/industri/lainnya, dengan jenis usaha berupa: </div>
        <br <div class="fw-bold fs-1 text-uppercase" style="text-align:center">
        <span style="border: 1px solid black; padding: 10px">{{ $surat->nama_usaha }}</span>
    </div>
    <br <div class="fs-1" style="margin-top: 20px;">Demikian Surat Keterangan Usaha ini dibuat dengan sebenarnya untuk
    dapat dipergunakan sebagaimana mestinya.</div>

    </div>

    <br>
    <br>
    <br>
    <!-- Tanda Tangan -->
    <div align="center" style="width: 250px; position: relative; right: -27.5em; float: left;" class="fs-1">
        <p>Margasana, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
    </div>


    <br <br <br <div width="100%">
    <div align="center" class="fs-1" style="width: 250px; position: relative; float: left;">
        <p style="margin-top: -10px !important">Tanda Tangan</p>
        <p style="margin-top: -10px !important">Pemegang</p>
        <br><br><br><br><br>
        <p style="margin-top: -10px !important" class="text-uppercase">{{ $surat->nama }}</p>
    </div>
    <div align="center" class="fs-1" style="width: 250px; position: relative; right: -12em; float: left;">
        <p style="margin-top: -10px !important">An.Kepala Desa Margasana</p>
        <p style="margin-top: -10px !important">Sekretaris Desa</p>
        <br><br><br><br><br>
        <p style="margin-top: -10px !important">TOHIDIN</p>
    </div>

    </div>

</body>

</html>
