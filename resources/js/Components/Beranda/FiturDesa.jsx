import React from 'react';
import informasi from '../assets/informasi-desa.png'
import pengaduanmasyarakat from '../assets/pengaduan-masyarakat.png'
import pengajuansurat from '../assets/pengajuan-surat.png'



const FiturDesa = () => {
  return (
    <div className="container-fitur">
      <h1 className="judul-fitur font-bold">FITUR DESA ONLINE KAMI</h1>
      <p className="sub-judul-fitur">
        Desa Online memudahkan dalam menjaring informasi perihal desa dan <br></br>membantu
        mempermudah pelayanan Pelayanan Desa yang Terbaik untuk warga
      </p>
      <div className="card-container">

        <div className="card-fitur">
          <img src={informasi} alt="informasi" />
          <h3 className="font-bold text-center">Informasi Desa</h3>
          <p className="text-center">Website desa margasana menyediakan informasi yang berguna bagi pengunjung website desa margasana.</p>
          <div className="tombol">
            <button>Learn More</button>
          </div>
        </div>
        <div className="card-fitur">
          <img src={pengaduanmasyarakat} alt="pengaduan masyarakat" />
          <h3 className="font-bold text-center">Pengaduan Masyarakat</h3>
          <p className="text-center">Mempermudah anda dalam melakukan Konsultasi Hukum dan Pengaduan Masyarakat</p>
          <div className="tombol">
            <button>Learn More</button>
          </div>
        </div>
        <div className="card-fitur">
          <img src={pengajuansurat} alt="pengajuan surat" />
          <h3 className="font-bold text-center">Pengajuan Surat</h3>
          <p className="text-center">Pelayanan surat online desa yang mempermudah dalam pengajuan surat.</p>
          <div className="tombol">
            <button>Learn More</button>
          </div>
        </div>

      </div>
    </div>
  );
}

export default FiturDesa;