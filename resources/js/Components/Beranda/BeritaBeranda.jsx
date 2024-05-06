import { useEffect, useState } from 'react'
import { MdDateRange } from 'react-icons/md';
import { FaUser } from 'react-icons/fa';
import '../Berita/Berita.css'

const BeritaBeranda = () => {
  const [data, setData] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [itemsPerPage] = useState(3); // Ubah sesuai dengan jumlah item per halaman yang diinginkan

  useEffect(() => {
    const fetchData = async () => {
      try {
        let result = await fetch("http://127.0.0.1:8000/api/daftar-berita-desa");
        result = await result.json();
        setData(result);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, []);

  // Menghitung indeks awal dan akhir untuk item pada halaman saat ini
  const indexOfLastItem = currentPage * itemsPerPage;
  const indexOfFirstItem = indexOfLastItem - itemsPerPage;
  const currentItems = data.slice(indexOfFirstItem, indexOfLastItem);

  // Mengubah halaman
  const paginate = (pageNumber) => setCurrentPage(pageNumber);

  //membatasi kata dalam judul

  function truncateString(str, num) {
    if (str.length > num) {
      return str.slice(0, num) + '..';
    } else {
      return str;
    }
  }

  // Fungsi untuk mengubah format tanggal
  function formatDate(dateString) {
    // Buat objek Date dari string tanggal
    const date = new Date(dateString);
    // Daftar bulan dalam bahasa Inggris
    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    // Ambil hari, tanggal, bulan, dan tahun dari objek Date
    const dateNumber = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();

    // Gabungkan menjadi format yang diinginkan
    const formattedDate = `${dateNumber} ${month} ${year}`;

    return formattedDate;
  }

  // Contoh penggunaan
  const dateString = "2024-04-16T02:28:09.000000Z";
  console.log(formatDate(dateString)); // Output: 16 April 2024



  return (
    <>
      <h1 className="judul-berita-beranda">KABAR DESA MARGASANA</h1>
      <div className="container-berita-beranda">
        {currentItems.map((item, id) => (
          <div key={id} className="flex gap-4" style={{ marginRight: 50, marginLeft: 50, marginTop: 50, marginBottom: 50 }}>
            <div className="card bg-base-100 shadow-xl" style={{ width: 300, height: 400 }}>
              <figure><img src={"storage/" + item.gambar} alt={item.judul} style={{ width: 300, height: 200 }} /></figure>
              <div className="card-body">
                <div className="flex justify-between mb-2">
                  <p className="text-sm date">
                    <span className="icon"><MdDateRange /></span>
                    <span className="date-text">{formatDate(new Date(item.created_at))}</span>
                  </p>
                  <p className="text-sm user">
                    <span className="icon"><FaUser /></span>
                    <span className="date-text">{truncateString(item.user_name, 13)}</span>
                  </p>
                </div>
                <strong className="text-center text-2xl font-bold" ><a>{truncateString(item.judul, 50)}</a></strong>
              </div>
            </div>
          </div>
        ))}
      </div>

      <div className="paginator-berita-beranda" style={{ marginBottom: 30 }}>
        <div className="join">
          <button className="join-item btn" onClick={() => paginate(currentPage - 1)} disabled={currentPage === 1}>«</button>
          <button className="join-item btn" >Page {currentPage}</button>
          <button className="join-item btn" onClick={() => paginate(currentPage + 1)} disabled={indexOfLastItem >= data.length}>»</button>
        </div>
      </div>

    </>
  )
}

export default BeritaBeranda
