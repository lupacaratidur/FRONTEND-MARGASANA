@extends('templates/dashboard')
@section('content')
    @php
        $surat = json_decode($pengajuan_surat->surat);
    @endphp
    <div class="bg-white py-6 px-9 mb-5 rounded-lg">
        <form action="{{ route('pengajuan-surat.update', $pengajuan_surat->id) }}" method="POST" enctype="multipart/form-data"
            class="
    [&>div>label]:block [&>div>label]:mb-2 [&>div>label]:text-sm [&>div>label]:font-medium [&>div>label]:text-dark 
    [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
    [&>div>div>select]:border [&>div>div>select]:p-2.5 [&>div>div>select]:shadow-sm [&>div>div>select]:placeholder-secondary [&>div>div>select]:text-secondary [&>div>div>select]:w-full [&>div>div>select]:block [&>div>div>select]:rounded-lg [&>div>div>select]:sm:text-sm
    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm ">
            @csrf
            @method('PUT')

            <h1 class="text-2xl mt-10">Form Pengisian Surat Keterangan Kematian</h1>

            <div class="flex my-12 flex-col lg:flex-row gap-5 justify-center">

                <div
                    class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                ">
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nomor Surat </label>
                        <small class="text-secondary">Contoh penulisan : 474.3 / 016 / I / 2022</small>
                        <input type="text" name="nomor_surat_kematian"
                            class="mt-1 px-3 py-2 @error('nomor_surat_kematian') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Masukkan Nomor Surat" value="{{ old('nomor_surat_kematian') }}" required />
                        @error('nomor_surat_kematian')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div
                    class="w-full
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm">

                </div>
            </div>
            <input type="hidden" value="kematian" name="jenis_surat">
            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div
                    class="w-full 
                    [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                    [&>div>div>select]:border [&>div>div>select]:p-2.5 [&>div>div>select]:shadow-sm [&>div>div>select]:placeholder-secondary [&>div>div>select]:text-secondary [&>div>div>select]:w-full [&>div>div>select]:block [&>div>div>select]:rounded-lg [&>div>div>select]:sm:text-sm
                    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                    ">
                    <h2 class="text-[20px] mb-10">Informasi Keluarga</h2>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Kepala Keluarga</label>
                        <input type="text" name="kepala_keluarga_jenazah"
                            class="mt-1 px-3 py-2 @error('kepala_keluarga_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Nama"
                            value="{{ old('kepala_keluarga_jenazah', $surat->kepala_keluarga_jenazah) }}" />
                        @error('kepala_keluarga_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">No Kartu Keluarga</label>
                        <input type="text" name="no_kk_jenazah"
                            class="mt-1 px-3 py-2 @error('no_kk_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="NIK" value="{{ old('no_kk_jenazah', $surat->no_kk_jenazah) }}" />
                        @error('no_kk_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <input type="hidden" value="kematian" name="jenis_surat">
            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div
                    class="w-full 
                    [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                    [&>div>div>select]:border [&>div>div>select]:p-2.5 [&>div>div>select]:shadow-sm [&>div>div>select]:placeholder-secondary [&>div>div>select]:text-secondary [&>div>div>select]:w-full [&>div>div>select]:block [&>div>div>select]:rounded-lg [&>div>div>select]:sm:text-sm
                    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                    ">
                    <h2 class="text-[20px] mb-10">Informasi Jenazah</h2>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK</label>
                        <input type="text" name="nik_jenazah"
                            class="mt-1 px-3 py-2 @error('nik_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Contoh : Pati, 20 Agustus 2000"
                            value="{{ old('nik_jenazah', $surat->nik_jenazah) }}" />
                        @error('nik_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Lengkap</label>
                        <input type="text" name="nama_jenazah"
                            class="mt-1 px-3 py-2 @error('nama_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="" value="{{ old('nama_jenazah', $surat->nama_jenazah) }}" />
                        @error('nama_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kelamin</label>
                        <div class="relative">
                            <select
                                class="appearance-none px-3 py-2 @error('kelamin_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                id="grid-state" name="kelamin_jenazah">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="1" {{ $surat->kelamin_jenazah == '1' ? 'selected' : '' }}>
                                    Laki-Laki
                                </option>
                                <option value="2" {{ $surat->kelamin_jenazah == '2' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <i class='bx bx-chevron-down text-xl'></i>
                            </div>
                        </div>
                        @error('kelamin_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir</label>
                        <input type="number" name="tgl_lahir_jenazah"
                            class="mt-1 px-3 py-2 @error('tgl_lahir_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Masukan tanggal lahir bayi" value="{{ $surat->tgl_lahir_jenazah }}" min="1"
                            max="31" />
                        @error('tgl_lahir_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir</label>
                        <input type="number" name="bln_lahir_jenazah"
                            class="mt-1 px-3 py-2 @error('bln_lahir_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="" value="{{ $surat->bln_lahir_jenazah }}" />
                        @error('bln_lahir_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir</label>
                        <input type="number" name="thn_lahir_jenazah"
                            class="mt-1 px-3 py-2 @error('thn_lahir_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Masukan tanggal lahir bayi" value="{{ $surat->thn_lahir_jenazah }}" />
                        @error('thn_lahir_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur</label>
                        <input type="number" name="umur_jenazah"
                            class="mt-1 px-3 py-2 @error('umur_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="" value="{{ $surat->umur_jenazah }}" />
                        @error('umur_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tempat Lahir </label>
                        <input type="text" name="tempat_lahir_jenazah"
                            class="mt-1 px-3 py-2 @error('tempat_lahir_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Masukan tanggal lahir bayi" value="{{ $surat->tempat_lahir_jenazah }}" />
                        @error('tempat_lahir_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Agama</label>
                        <div class="relative">
                            <select
                                class="appearance-none px-3 py-2 @error('agama_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                id="grid-state" name="agama_jenazah">
                                <option value="">Pilih Hari Dilahirkan</option>
                                <option value="1"{{ $surat->agama_jenazah == '1' ? 'selected' : '' }}>1. Islam
                                </option>
                                <option value="2"{{ $surat->agama_jenazah == '2' ? 'selected' : '' }}>
                                    2. Kristen</option>
                                <option value="3"{{ $surat->agama_jenazah == '3' ? 'selected' : '' }}>3. Katholik
                                </option>
                                <option value="4"{{ $surat->agama_jenazah == '4' ? 'selected' : '' }}>4. Hindu
                                </option>
                                <option value="5"{{ $surat->agama_jenazah == '5' ? 'selected' : '' }}>5. Budha
                                </option>
                                <option value="6"{{ $surat->agama_jenazah == '6' ? 'selected' : '' }}>6. Lainnya
                                </option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <i class='bx bx-chevron-down text-xl'></i>
                            </div>
                        </div>
                        @error('agama_jenazah')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan</label>
                            <input type="text" name="pekerjaan_jenazah"
                                class="mt-1 px-3 py-2 @error('pekerjaan_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Kewarganegaraan & Agama"
                                value="{{ old('pekerjaan_jenazah', $surat->pekerjaan_jenazah) }}" />
                            @error('pekerjaan_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat</label>
                            <textarea id="alamat_jenazah" name="alamat_jenazah" rows="4"
                                class="px-3 py-2 focus:outline-none @error('alamat_jenazah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                placeholder="Alamat">{{ old('alamat_jenazah', $surat->alamat_jenazah) }}</textarea>
                            @error('alamat_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Anak Ke</label>
                            <input type="number" name="anak_ke_jenazah"
                                class="mt-1 px-3 py-2 @error('anak_ke_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="anak_ke_jenazah"
                                value="{{ old('anak_ke_jenazah', $surat->anak_ke_jenazah) }}" />
                            @error('anak_ke_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Kematian</label>
                            <input type="number" name="tgl_mati_jenazah"
                                class="mt-1 px-3 py-2 @error('tgl_mati_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('tgl_mati_jenazah', $surat->tgl_mati_jenazah) }}" />
                            @error('tgl_mati_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Kematian</label>
                            <input type="number" name="bln_mati_jenazah"
                                class="mt-1 px-3 py-2 @error('bln_mati_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('bln_mati_jenazah', $surat->bln_mati_jenazah) }}" />
                            @error('bln_mati_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Kematian</label>
                            <input type="number" name="thn_mati_jenazah"
                                class="mt-1 px-3 py-2 @error('thn_mati_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('thn_mati_jenazah', $surat->thn_mati_jenazah) }}" />
                            @error('thn_mati_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pukul</label>
                            <input type="time" name="pukul_jenazah"
                                class="mt-1 px-3 py-2 @error('pukul_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Penyebab Kematian"
                                value="{{ old('pukul_jenazah', $surat->pukul_jenazah) }}" />
                            @error('pukul_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Sebab Kematian</label>
                            <div class="relative">
                                <select
                                    class="appearance-none px-3 py-2 @error('sebab_mati_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    id="grid-state" name="sebab_mati_jenazah">
                                    <option value="">Pilih Sebab Kematian</option>
                                    <option value="1"{{ $surat->sebab_mati_jenazah == '1' ? 'selected' : '' }}>1.
                                        Sakit Biasa/Tua
                                    </option>
                                    <option value="2"{{ $surat->sebab_mati_jenazah == '2' ? 'selected' : '' }}>
                                        2. Wabah Penyakit</option>
                                    <option value="3"{{ $surat->sebab_mati_jenazah == '3' ? 'selected' : '' }}>3.
                                        Kecelakaan
                                    </option>
                                    <option value="4"{{ $surat->sebab_mati_jenazah == '4' ? 'selected' : '' }}>4.
                                        Kriminalitas
                                    </option>
                                    <option value="5"{{ $surat->sebab_mati_jenazah == '5' ? 'selected' : '' }}>5.
                                        Bunuh Diri
                                    </option>
                                    <option value="6"{{ $surat->sebab_mati_jenazah == '6' ? 'selected' : '' }}>6.
                                        Lainnya
                                    </option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class='bx bx-chevron-down text-xl'></i>
                                </div>
                            </div>
                            @error('sebab_mati_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tempat Kematian</label>
                            <textarea id="tempat_mati_jenazah" name="tempat_mati_jenazah" rows="1"
                                class="px-3 py-2 focus:outline-none @error('tempat_mati_jenazah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                placeholder="Alamat">{{ old('tempat_mati_jenazah', $surat->tempat_mati_jenazah) }}</textarea>
                            @error('tempat_mati_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Yang Menerangkan</label>
                            <div class="relative">
                                <select
                                    class="appearance-none px-3 py-2 @error('yang_menerangkan_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    id="grid-state" name="yang_menerangkan_jenazah">
                                    <option value="">Pilih Sebab Kematian</option>
                                    <option value="1"{{ $surat->yang_menerangkan_jenazah == '1' ? 'selected' : '' }}>
                                        1.
                                        Dokter
                                    </option>
                                    <option value="2"{{ $surat->yang_menerangkan_jenazah == '2' ? 'selected' : '' }}>
                                        2. Bidan/Perawat</option>
                                    <option value="3"{{ $surat->yang_menerangkan_jenazah == '3' ? 'selected' : '' }}>
                                        3.
                                        Tenaga Kesehatan
                                    </option>
                                    <option value="4"{{ $surat->yang_menerangkan_jenazah == '4' ? 'selected' : '' }}>
                                        4.
                                        Kepolisian
                                    </option>
                                    <option value="5"{{ $surat->yang_menerangkan_jenazah == '5' ? 'selected' : '' }}>
                                        5.
                                        Lainnya
                                    </option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class='bx bx-chevron-down text-xl'></i>
                                </div>
                            </div>
                            @error('yang_menerangkan_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div
                        class="w-full
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm">
                        <h2 class="text-[20px] mb-10">Informasi Ayah</h2>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Ayah</label>
                            <input type="number" name="nik_ayah_jenazah"
                                class="mt-1 px-3 py-2 @error('nik_ayah_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="NIK pelapor"
                                value="{{ old('nik_ayah_jenazah', $surat->nik_ayah_jenazah) }}" />
                            @error('nik_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Ayah</label>
                            <input type="text" name="nama_ayah_jenazah"
                                class="mt-1 px-3 py-2 @error('nama_ayah_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Nama pelapor"
                                value="{{ old('nama_ayah_jenazah', $surat->nama_ayah_jenazah) }}" />
                            @error('nama_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir Ayah</label>
                            <input type="number" name="tgl_lahir_ayah_jenazah"
                                class="mt-1 px-3 py-2 @error('tgl_lahir_ayah_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('tgl_lahir_ayah_jenazah', $surat->tgl_lahir_ayah_jenazah) }}" />
                            @error('tgl_lahir_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir Ayah</label>
                            <input type="number" name="bln_lahir_ayah_jenazah"
                                class="mt-1 px-3 py-2 @error('bln_lahir_ayah_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('bln_lahir_ayah_jenazah', $surat->bln_lahir_ayah_jenazah) }}" />
                            @error('bln_lahir_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir Ayah</label>
                            <input type="number" name="thn_lahir_ayah_jenazah"
                                class="mt-1 px-3 py-2 @error('thn_lahir_ayah_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('thn_lahir_ayah_jenazah', $surat->thn_lahir_ayah_jenazah) }}" />
                            @error('thn_lahir_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur Ayah</label>
                            <input type="number" name="umur_ayah_jenazah"
                                class="mt-1 px-3 py-2 @error('umur_ayah_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('umur_ayah_jenazah', $surat->umur_ayah_jenazah) }}" />
                            @error('umur_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaan_ayah_jenazah"
                                class="mt-1 px-3 py-2 @error('pekerjaan_ayah_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Pekerjaan pelapor"
                                value="{{ old('pekerjaan_ayah_jenazah', $surat->pekerjaan_ayah_jenazah) }}" />
                            @error('pekerjaan_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Ayah</label>

                            <textarea id="alamat_ayah_jenazah" name="alamat_ayah_jenazah" rows="4"
                                class="px-3 py-2 focus:outline-none @error('alamat_ayah_jenazah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                placeholder="Alamat pelapor">{{ old('alamat_ayah_jenazah', $surat->alamat_ayah_jenazah) }}</textarea>
                            @error('alamat_ayah_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div
                        class="w-full
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm">
                        <h2 class="text-[20px] mb-10">Informasi Ibu</h2>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Ibu</label>
                            <input type="number" name="nik_ibu_jenazah"
                                class="mt-1 px-3 py-2 @error('nik_ibu_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="NIK pelapor"
                                value="{{ old('nik_ibu_jenazah', $surat->nik_ibu_jenazah) }}" />
                            @error('nik_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Ibu</label>
                            <input type="text" name="nama_ibu_jenazah"
                                class="mt-1 px-3 py-2 @error('nama_ibu_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Nama pelapor"
                                value="{{ old('nama_ibu_jenazah', $surat->nama_ibu_jenazah) }}" />
                            @error('nama_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir Ayah</label>
                            <input type="number" name="tgl_lahir_ibu_jenazah"
                                class="mt-1 px-3 py-2 @error('tgl_lahir_ibu_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('tgl_lahir_ibu_jenazah', $surat->tgl_lahir_ibu_jenazah) }}" />
                            @error('tgl_lahir_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir Ibu</label>
                            <input type="number" name="bln_lahir_ibu_jenazah"
                                class="mt-1 px-3 py-2 @error('bln_lahir_ibu_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('bln_lahir_ibu_jenazah', $surat->bln_lahir_ibu_jenazah) }}" />
                            @error('bln_lahir_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir Ibu</label>
                            <input type="number" name="thn_lahir_ibu_jenazah"
                                class="mt-1 px-3 py-2 @error('thn_lahir_ibu_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('thn_lahir_ibu_jenazah', $surat->thn_lahir_ibu_jenazah) }}" />
                            @error('thn_lahir_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur Ibu</label>
                            <input type="number" name="umur_ibu_jenazah"
                                class="mt-1 px-3 py-2 @error('umur_ibu_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('umur_ibu_jenazah', $surat->umur_ibu_jenazah) }}" />
                            @error('umur_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Ibu</label>
                            <input type="text" name="pekerjaan_ibu_jenazah"
                                class="mt-1 px-3 py-2 @error('pekerjaan_ibu_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Pekerjaan pelapor"
                                value="{{ old('pekerjaan_ibu_jenazah', $surat->pekerjaan_ibu_jenazah) }}" />
                            @error('pekerjaan_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Ibu</label>

                            <textarea id="alamat_ibu_jenazah" name="alamat_ibu_jenazah" rows="4"
                                class="px-3 py-2 focus:outline-none @error('alamat_ibu_jenazah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                placeholder="Alamat pelapor">{{ old('alamat_ibu_jenazah', $surat->alamat_ibu_jenazah) }}</textarea>
                            @error('alamat_ibu_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div
                        class="w-full
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm">
                        <h2 class="text-[20px] mb-10">Informasi Pelapor</h2>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Pelapor</label>
                            <input type="number" name="nik_pelapor_jenazah"
                                class="mt-1 px-3 py-2 @error('nik_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="NIK pelapor"
                                value="{{ old('nik_pelapor_jenazah', $surat->nik_pelapor_jenazah) }}" />
                            @error('nik_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Pelapor</label>
                            <input type="text" name="nama_pelapor_jenazah"
                                class="mt-1 px-3 py-2 @error('nama_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Nama pelapor"
                                value="{{ old('nama_pelapor_jenazah', $surat->nama_pelapor_jenazah) }}" />
                            @error('nama_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir Ayah</label>
                            <input type="number" name="tgl_lahir_pelapor_jenazah"
                                class="mt-1 px-3 py-2 @error('tgl_lahir_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('tgl_lahir_pelapor_jenazah', $surat->tgl_lahir_pelapor_jenazah) }}" />
                            @error('tgl_lahir_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir Pelapor</label>
                            <input type="number" name="bln_lahir_pelapor_jenazah"
                                class="mt-1 px-3 py-2 @error('bln_lahir_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('bln_lahir_pelapor_jenazah', $surat->bln_lahir_pelapor_jenazah) }}" />
                            @error('bln_lahir_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir Pelapor</label>
                            <input type="number" name="thn_lahir_pelapor_jenazah"
                                class="mt-1 px-3 py-2 @error('thn_lahir_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('thn_lahir_pelapor_jenazah', $surat->thn_lahir_pelapor_jenazah) }}" />
                            @error('thn_lahir_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur Pelapor</label>
                            <input type="number" name="umur_pelapor_jenazah"
                                class="mt-1 px-3 py-2 @error('umur_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('umur_pelapor_jenazah', $surat->umur_pelapor_jenazah) }}" />
                            @error('umur_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kelamin</label>
                            <div class="relative">
                                <select
                                    class="appearance-none px-3 py-2 @error('kelamin_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    id="grid-state" name="kelamin_pelapor_jenazah">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="1"
                                        {{ $surat->kelamin_pelapor_jenazah == '1' ? 'selected' : '' }}>
                                        Laki-Laki
                                    </option>
                                    <option value="2"
                                        {{ $surat->kelamin_pelapor_jenazah == '2' ? 'selected' : '' }}>
                                        Perempuan
                                    </option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class='bx bx-chevron-down text-xl'></i>
                                </div>
                            </div>
                            @error('kelamin_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Pelapor</label>
                            <input type="text" name="pekerjaan_pelapor_jenazah"
                                class="mt-1 px-3 py-2 @error('pekerjaan_pelapor_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Pekerjaan pelapor"
                                value="{{ old('pekerjaan_pelapor_jenazah', $surat->pekerjaan_pelapor_jenazah) }}" />
                            @error('pekerjaan_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Pelapor</label>

                            <textarea id="alamat_pelapor_jenazah" name="alamat_pelapor_jenazah" rows="4"
                                class="px-3 py-2 focus:outline-none @error('alamat_pelapor_jenazah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                placeholder="Alamat pelapor">{{ old('alamat_pelapor_jenazah', $surat->alamat_pelapor_jenazah) }}</textarea>
                            @error('alamat_pelapor_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>


                    <div
                        class="w-full
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm">
                        <h2 class="text-[20px] mb-10">Informasi Saksi 1</h2>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Saksi 1</label>
                            <input type="number" name="nik_saksi1_jenazah"
                                class="mt-1 px-3 py-2 @error('nik_saksi1_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="NIK pelapor"
                                value="{{ old('nik_saksi1_jenazah', $surat->nik_saksi1_jenazah) }}" />
                            @error('nik_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Saksi 1</label>
                            <input type="text" name="nama_saksi1_jenazah"
                                class="mt-1 px-3 py-2 @error('nama_saksi1_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Nama pelapor"
                                value="{{ old('nama_saksi1_jenazah', $surat->nama_saksi1_jenazah) }}" />
                            @error('nama_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir Saksi 1</label>
                            <input type="number" name="tgl_lahir_saksi1_jenazah"
                                class="mt-1 px-3 py-2 @error('tgl_lahir_saksi1_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('tgl_lahir_saksi1_jenazah', $surat->tgl_lahir_saksi1_jenazah) }}" />
                            @error('tgl_lahir_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir Saksi 1</label>
                            <input type="number" name="bln_lahir_saksi1_jenazah"
                                class="mt-1 px-3 py-2 @error('bln_lahir_saksi1_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('bln_lahir_saksi1_jenazah', $surat->bln_lahir_saksi1_jenazah) }}" />
                            @error('bln_lahir_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir Saksi 1</label>
                            <input type="number" name="thn_lahir_saksi1_jenazah"
                                class="mt-1 px-3 py-2 @error('thn_lahir_saksi1_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('thn_lahir_saksi1_jenazah', $surat->thn_lahir_saksi1_jenazah) }}" />
                            @error('thn_lahir_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur Saksi 1</label>
                            <input type="number" name="umur_saksi1_jenazah"
                                class="mt-1 px-3 py-2 @error('umur_saksi1_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('umur_saksi1_jenazah', $surat->umur_saksi1_jenazah) }}" />
                            @error('umur_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Saksi 1</label>
                            <input type="text" name="pekerjaan_saksi1_jenazah"
                                class="mt-1 px-3 py-2 @error('pekerjaan_saksi1_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Pekerjaan pelapor"
                                value="{{ old('pekerjaan_saksi1_jenazah', $surat->pekerjaan_saksi1_jenazah) }}" />
                            @error('pekerjaan_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Saksi 1</label>

                            <textarea id="alamat_saksi1_jenazah" name="alamat_saksi1_jenazah" rows="4"
                                class="px-3 py-2 focus:outline-none @error('alamat_saksi1_jenazah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                placeholder="Alamat pelapor">{{ old('alamat_saksi1_jenazah', $surat->alamat_saksi1_jenazah) }}</textarea>
                            @error('alamat_saksi1_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div
                        class="w-full
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm">
                        <h2 class="text-[20px] mb-10">Informasi Saksi 2</h2>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Saksi 2</label>
                            <input type="number" name="nik_saksi2_jenazah"
                                class="mt-1 px-3 py-2 @error('nik_saksi2_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="NIK pelapor"
                                value="{{ old('nik_saksi2_jenazah', $surat->nik_saksi2_jenazah) }}" />
                            @error('nik_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Saksi 2</label>
                            <input type="text" name="nama_saksi2_jenazah"
                                class="mt-1 px-3 py-2 @error('nama_saksi2_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Nama pelapor"
                                value="{{ old('nama_saksi2_jenazah', $surat->nama_saksi2_jenazah) }}" />
                            @error('nama_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir Saksi 2</label>
                            <input type="number" name="tgl_lahir_saksi2_jenazah"
                                class="mt-1 px-3 py-2 @error('tgl_lahir_saksi2_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('tgl_lahir_saksi2_jenazah', $surat->tgl_lahir_saksi2_jenazah) }}" />
                            @error('tgl_lahir_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir Saksi 2</label>
                            <input type="number" name="bln_lahir_saksi2_jenazah"
                                class="mt-1 px-3 py-2 @error('bln_lahir_saksi2_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('bln_lahir_saksi2_jenazah', $surat->bln_lahir_saksi2_jenazah) }}" />
                            @error('bln_lahir_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir Saksi 2</label>
                            <input type="number" name="thn_lahir_saksi2_jenazah"
                                class="mt-1 px-3 py-2 @error('thn_lahir_saksi2_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('thn_lahir_saksi2_jenazah', $surat->thn_lahir_saksi2_jenazah) }}" />
                            @error('thn_lahir_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur Saksi 2</label>
                            <input type="number" name="umur_saksi2_jenazah"
                                class="mt-1 px-3 py-2 @error('umur_saksi2_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Tempat Meninggal"
                                value="{{ old('umur_saksi2_jenazah', $surat->umur_saksi2_jenazah) }}" />
                            @error('umur_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Saksi 2</label>
                            <input type="text" name="pekerjaan_saksi2_jenazah"
                                class="mt-1 px-3 py-2 @error('pekerjaan_saksi2_jenazah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="Pekerjaan pelapor"
                                value="{{ old('pekerjaan_saksi2_jenazah', $surat->pekerjaan_saksi2_jenazah) }}" />
                            @error('pekerjaan_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Saksi 2</label>

                            <textarea id="alamat_saksi2_jenazah" name="alamat_saksi2_jenazah" rows="4"
                                class="px-3 py-2 focus:outline-none @error('alamat_saksi2_jenazah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                placeholder="Alamat pelapor">{{ old('alamat_saksi2_jenazah', $surat->alamat_saksi2_jenazah) }}</textarea>
                            @error('alamat_saksi2_jenazah')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                </div>


                <div class="flex justify-end">
                    <button type="submit"
                        class="text-white bg-danger focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                </div>
        </form>
    </div>
@endsection
