import './PengaduanMasyarakat.css'


const TutorialPengaduanMasyarakat = () => {
  return (
    <>
      <div className="container-tutorial">
        <h1 className="text-4xl font-bold" style={{ marginLeft: 100, marginTop: 150 }}>TUTORIAL MEMBUAT PENGADUAN MASYARAKAT </h1>
        <hr className="blue-line-pengaduan-masyarakat" style={{ marginLeft: 110, marginBottom: 70 }} />
      </div>
      <div style={{ marginLeft: 205, marginBottom: 200, marginRight: 120 }}>
        <p>Website Desa Margasana saat ini sudah memiliki fitur untuk melakukan pengajuan surat dengan cara sebagai berikut :</p>
        <br></br>
        <p>1. Daftar akun  pada website desa margasana.</p>
        <p>2. Login menggunakan username dan password yang sudah didaftarkan.</p>
        <p>3. Masuk ke menu Pengaduan untuk membuat pengaduan secara online.</p>
        <p>4. Tuliskan pengaduan yang ingin disampaikan.</p>
        <p>5. Tambahkan foto untuk sebagai bukti pengaduan.</p>
        <p>6. Klik submit untuk memproses pengaduan.</p>
        <p>7. Tunggu aduan anda ditanggapi oleh petugas.</p>
      </div>
    </>
  )
}

export default TutorialPengaduanMasyarakat