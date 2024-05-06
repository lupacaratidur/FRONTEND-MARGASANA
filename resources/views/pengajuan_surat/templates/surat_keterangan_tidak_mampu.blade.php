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
        {{-- <table class="table" style="margin-right: -50% !important;">
            <tbody>
                <tr>
                    <td rowspan="2" class="td fw-bold fs-1 text-uppercase">Surat</td>
                    <td colspan="2" class="td fw-bold fs-1 text-uppercase" style="width: 150px;">Keterangan</td>
                </tr>
                <tr>
                    <td colspan="2" class="td fw-bold fs-1 text-uppercase">Usaha</td>
                </tr>
            </tbody>
        </table> --}}

        <div>
            <span class="fw-bold fs-1 text-uppercase" style="border-bottom: 2px solid black; padding: -10px"> Surat
                Keterangan Tidak mampu</span>
            <p class="fs-1" style="margin-top: 5px">Nomor : {{ $surat->nomor_surat }}</p>
        </div>
    </div>

    <!-- Content -->

    <div style="margin-top: 50px;">
        <div class="fs-1" style="margin-bottom: 10px;">Yang bertanda tangan dibawah ini :</div>
        <table width="100%">
            <tr>
                <td width="35%" class="fs-1">Nama</td>
                <td class="fs-1"> : DODIT ARI WIBOWO, S.Farm.,Apt</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Jabatan</td>
                <td class="fs-1"> : Kepala Desa Margasana</td>
            </tr>
        </table>
        <div class="fs-1" style="margin-bottom: 10px;">Dengan ini menerangkan bahwa :</div>
        <table width="100%">
            <tr>
                <td width="35%" class="fs-1">Nama</td>
                <td class="fs-1 text-uppercase"> : {{ $surat->nama }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Tempat & Tanggal Lahir</td>
                <td class="fs-1" style="text-transform:capitalize"> : {{ $surat->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($surat->ttl)->isoFormat('D-MM-Y') }}
                </td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">Alamat</td>
                <td class="fs-1" style="text-transform:capitalize"> : {{ $surat->alamat }}</td>
            </tr>
            <tr>
                <td width="35%" class="fs-1">NIK</td>
                <td class="fs-1"> : {{ $surat->nik }}</td>
            </tr>
        </table>

        <div class="fs-1" style="margin-top: 20px; "> Bahwa yang bersangkutan adalah benar warga desa yang sedang
            mengalami lemah ekonomi/tidak mampu.
        </div>
        <div class="fs-1" style="margin-top: 20px; ">Demikian surat keterangan ini kami buat, semoga
            dapat dipergunakan
            sebagaimana mestinya.</div>

    </div>

    <br>
    <br>
    <br>

    <!-- Tanda Tangan -->


    </div>

    <div align="center" class="fs-1 " style="width: 250px; position: relative; right: -27.5em;">
        <p>Margasana, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
        <p style="margin-top: -10px !important">
            Kepala Desa Margasana</p>
        <br><br><br><br><br>
        <p style="margin-top: -10px !important">DODIT ARI WIBOWO, S.Farm.,Apt</p>
    </div>

    </div>

</body>

</html>
