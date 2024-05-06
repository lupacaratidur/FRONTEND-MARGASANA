import { useEffect, useState } from 'react'
import './Galeri.css'

const DaftarFoto = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        let result = await fetch("http://127.0.0.1:8000/api/daftar-galeri-desa");
        result = await result.json();
        setData(result);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, []);

  return (
    <>
      <div className="container" >
        {data.map((item, id) => (
          <div key={id} className="flex gap-4" style={{ marginRight: 50, marginLeft: 50, marginTop: 50, marginBottom: 50 }}>
            <div className="card bg-base-100 shadow-xl" style={{ width: 300 }}>
              <figure><img src={"storage/" + item.gambar1} alt={item.judul} /></figure>
              <div className="card-body">
                <strong className="text-center text-2xl font-bold"><a href={'galeri-desa/' + item.slug}>{item.judul}</a></strong>
              </div>
            </div>
          </div>
        ))}
      </div>
    </>
  )
}

export default DaftarFoto
