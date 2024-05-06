@extends('templates/dashboard')
@section('content')
    @php
        $surat = json_decode($pengajuan_surat->surat);
    @endphp
    <div class="bg-white py-4 px-9 mb-5 rounded-lg flex flex-col lg:flex-row justify-center lg:justify-between items-center">
        <div class="text-center lg:text-left">
            <h1 class="text-lg lg:text-2xl text-danger font-semibold mb-2">Detail Pengajuan Surat</h1>
            <p class="text-base text-[13px] lg:text-lg font-normal text-secondary">{{ $pengajuan_surat->jenis_surat }}</p>
        </div>
        @canany(['admin', 'petugas'])
            @if ($pengajuan_surat->status == 'Pending')
                <div class="mt-5 lg:mt-0 flex flex-col lg:flex-row justify-center text-center">
                    <form action="{{ route('pengajuan_surat.reject', $pengajuan_surat->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit"
                            class="text-white bg-danger focus:outline-none font-medium text-xs rounded-lg lg:text-sm px-5 py-2.5 text-center">Tolak</button>
                    </form>
                    <form class="mt-3 ml-0 lg:ml-3 lg:mt-0" action="{{ route('pengajuan_surat.approve', $pengajuan_surat->id) }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit"
                            class="text-dark bg-warning focus:outline-none font-medium text-xs rounded-lg lg:text-sm px-5 py-2.5 text-center ">Setujui
                            & Proses
                            Surat</button>
                    </form>

                </div>
            @endif

            @if ($pengajuan_surat->status == 'Diproses')
                <a href="{{ route('pengajuan-surat.edit', $pengajuan_surat->id) }}"
                    class="text-white bg-danger focus:outline-none font-medium text-xs rounded-lg lg:text-sm px-5 py-2.5 text-center ">Proses
                    Surat</a>
            @endif
        @endcanany
    </div>

    @if ($pengajuan_surat->jenis_surat == 'Surat Keterangan')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="overflow-x">
                <table class="w-full mt-10 bg-divide-y overflow-hidden">
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Nama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nama }} <br> <br></td>

                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            NIK
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nik }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tempat Lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->tempat_lahir }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tanggal lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->ttl }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Pekerjaan
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->pekerjaan }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Alamat
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->alamat }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Kewarganegaraan & Agama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->negara_agama }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Keperluan
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->keperluan }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Status
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->status }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Keterangan Surat
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->keterangan_surat }} <br> <br></td>
                    </tr>

                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Foto KTP
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $pengajuan_surat->foto_ktp) }}" alt="Foto KTP">
                            <br> <br>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Kelahiran')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div class="w-full ">

                    <h1 class="text-2xl text-dark">Informasi Keluarga</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Kepala Keluarga
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->kepala_keluarga }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                No Kartu keluarga
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->no_kk }}
                                <br> <br>
                            </td>
                        </tr>
                    </table>

                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Anak</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Bayi
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_bayi }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Jenis Kelamin
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kelamin_bayi }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tempat Dilahirkan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tempat_lahir }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tempat Kelahiran
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->lokasi_lahir }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Hari lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->hari_lahir }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_lahir_bayi }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_lahir_bayi }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_lahir_bayi }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Lahir Pukul
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->lahir_pukul }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Jenis Kelahiran
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->jenis_lahir }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kelahiran Ke-
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->lahiran_ke }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Penolong Kelahiran
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->penolong_lahir }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Berat Bayi
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->berat_bayi }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Panjang Bayi
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->panjang_bayi }}
                                    <br> <br>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Orang Tua</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal lahir ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_lahir_ibu }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan lahir ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_lahir_ibu }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun lahir ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_lahir_ibu }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kewarganegaraan Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kewarganegaraan_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kebangsaan Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kebangsaan_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal Pencatatan Perkawinan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_nikah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan Pencatatan Perkawinan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_nikah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun Pencatatan Perkawinan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_nikah }} <br> <br></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


            <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
                <div class="flex flex-col lg:flex-row gap-5 justify-center">
                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Ayah</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal lahir ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_lahir_ayah }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan lahir ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_lahir_ayah }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun lahir ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_lahir_ayah }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kewarganegaraan Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kewarganegaraan_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kebangsaan Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kebangsaan_ayah }} <br> <br></td>
                            </tr>
                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Pelapor</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_pelapor }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Jenis Kelamin Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kelamin_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_pelapor }} <br> <br></td>
                            </tr>

                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Saksi 1</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_saksi1 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_saksi1 }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_saksi1 }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_saksi1 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_saksi1 }} <br> <br></td>
                            </tr>
                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Saksi 2</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_saksi2 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_saksi2 }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_saksi2 }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_saksi2 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_saksi2 }} <br> <br></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Kematian')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Keluarga</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Kepala Keluarga
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->kepala_keluarga_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                No Kartu keluarga
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->no_kk_jenazah }}
                                <br> <br>
                            </td>
                        </tr>
                    </table>

                    <h1 class="text-2xl text-dark">Informasi Jenazah</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik_jenazah }} <br> <br></td>
                        </tr>


                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Lengkap
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Jenis Kelamin
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->kelamin_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Lahir Jenazah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tgl_lahir_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Bulan Lahir Jenazah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->bln_lahir_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tahun Lahir Jenazah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->thn_lahir_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Umur
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->umur_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tempat Lahir
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tempat_lahir_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Agama
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->agama_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pekerjaan
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pekerjaan_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Anak ke
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->anak_ke_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Kematian Jenazah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tgl_mati_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Bulan Kematian Jenazah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->bln_mati_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tahun Kematian Jenazah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->thn_mati_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pukul
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pukul_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Sebab Kematian
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->sebab_mati_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tempat Kematian
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tempat_mati_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Yang Menerangkan
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->yang_menerangkan_jenazah }} <br> <br></td>
                        </tr>
                    </table>
                </div>

                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Ayah</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik_ayah_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Lengkap
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama_ayah_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Lahir Ayah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tgl_lahir_ayah_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Bulan Lahir Ayah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->bln_lahir_ayah_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tahun Lahir Ayah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->thn_lahir_ayah_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Umur
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->umur_ayah_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pekerjaan
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pekerjaan_ayah_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat_ayah_jenazah }} <br> <br></td>
                        </tr>

                    </table>
                </div>

                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Ibu</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik_ibu_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Lengkap
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama_ibu_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Lahir Ibu
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tgl_lahir_ibu_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Bulan Lahir Ibu
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->bln_lahir_ibu_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tahun Lahir Ibu
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->thn_lahir_ibu_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Umur
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->umur_ibu_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pekerjaan
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pekerjaan_ibu_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat_ibu_jenazah }} <br> <br></td>
                        </tr>

                    </table>
                </div>
                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Pelapor</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Lengkap
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Lahir Pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tgl_lahir_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Bulan Lahir Pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->bln_lahir_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tahun Lahir Pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->thn_lahir_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Umur
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->umur_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Jenis Kelamin
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->kelamin_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pekerjaan
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pekerjaan_pelapor_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat_pelapor_jenazah }} <br> <br></td>
                        </tr>

                    </table>
                </div>


                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Saksi 1</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik_saksi1_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Lengkap
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama_saksi1_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Lahir Saksi 1
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tgl_lahir_saksi1_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Bulan Lahir Saksi1
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->bln_lahir_saksi1_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tahun Lahir Saksi 1
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->thn_lahir_saksi1_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Umur
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->umur_saksi1_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pekerjaan
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pekerjaan_saksi1_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat_saksi1_jenazah }} <br> <br></td>
                        </tr>

                    </table>
                </div>
                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Saksi 2</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik_saksi2_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Lengkap
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama_saksi2_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Lahir Saksi 2
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tgl_lahir_saksi2_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Bulan Lahir Saksi 2
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->bln_lahir_saksi2_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tahun Lahir Saksi 2
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->thn_lahir_saksi2_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Umur
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->umur_saksi2_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pekerjaan
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pekerjaan_saksi2_jenazah }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat_saksi2_jenazah }} <br> <br></td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Keterangan Usaha')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="overflow-x">
                <table class="w-full mt-10 bg-divide-y overflow-hidden">
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Nama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nama }} <br> <br></td>

                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tempat Lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->tempat_lahir }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tanggal lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->ttl }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Kewarganegaraan/Agama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->negara_agama }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Alamat
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->alamat }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            NIK
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nik }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Lama Usaha
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->lama_usaha }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Nama Usaha
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nama_usaha }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Foto KTP
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $pengajuan_surat->foto_ktp) }}" alt="Foto KTP">
                            <br> <br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Keterangan Domisili')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="overflow-x">
                <table class="w-full mt-10 bg-divide-y overflow-hidden">
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Nama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nama }} <br> <br></td>

                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tempat Lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->tempat_lahir }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tanggal lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->ttl }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            NIK
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nik }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Jenis Kelamin
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->kelamin }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Pekerjaan
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->pekerjaan }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Status Perkawinan
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->status }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Agama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->agama }} <br> <br></td>
                    </tr>
                </table>
            </div>
        </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Keterangan Tidak Mampu')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="overflow-x">
                <table class="w-full mt-10 bg-divide-y overflow-hidden">
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Nama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nama }} <br> <br></td>

                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tempat Lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->tempat_lahir }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tanggal lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->ttl }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Alamat
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->alamat }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            NIK
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nik }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Foto KTP
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('storage/app/public/' . $pengajuan_surat->foto_ktp) }}" alt="Foto KTP">
                            <br> <br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Keterangan Izin Penelitian')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="overflow-x">
                <table class="w-full mt-10 bg-divide-y overflow-hidden">
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Nama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nama }} <br> <br></td>

                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            NIM
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nim }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Perguruan Tinggi
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->univ }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Program Studi
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->prodi }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Awal Penelitian
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->awal_penelitian }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Akhir Penelitian
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->akhir_penelitian }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Judul Penelitian
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->judul_penelitian }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Foto KTP
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $pengajuan_surat->foto_ktp) }}" alt="Foto KTP">
                            <br> <br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    @endif
@endsection
