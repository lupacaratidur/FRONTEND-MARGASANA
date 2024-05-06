import './PengajuanSurat.css'

const TutorialPengajuanSurat = () => {
  return (
    <>
      <div className="container-tutorial">
        <h1 className="text-4xl font-bold" style={{ marginLeft: 200, marginTop: 150 }}>TUTORIAL MENGAJUKAN SURAT </h1>
        <hr className="blue-line-pengajuan-surat" style={{ marginLeft: 205, marginBottom: 70 }} />
      </div>
      <div style={{ marginLeft: 205, marginBottom: 200, marginRight: 120 }}>
        <p>Website Desa Margasana saat ini sudah memiliki fitur untuk melakukan pengajuan surat dengan cara sebagai berikut :</p>
        <br></br>
        <p>1. Daftar akun  pada website desa margasana.</p>
        <p>2. Login menggunakan username dan password yang sudah didaftarkan.</p>
        <p>3. Masuk ke menu Pengajuan Surat untuk membuat surat secara online.</p>
        <p>4. Pilih surat yang ingin diajukan dengan cara klik buat surat.</p>
        <p>5. Masukan data yang harus dimasukan.</p>
        <p>6. Klik submit untuk menyimpan data.</p>
        <p>7. Tunggu surat anda diproses oleh petugas.</p>
      </div>
    </>
  )
}

export default TutorialPengajuanSurat