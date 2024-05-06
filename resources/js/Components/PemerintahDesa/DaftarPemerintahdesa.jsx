import { useEffect, useState } from 'react'
import './PemerintahDesa.css'

const DaftarPemerintahDesa = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        let result = await fetch("http://127.0.0.1:8000/api/daftar-pemerintah-desa");
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
              <figure><img src={"storage/" + item.foto} alt={item.nama} /></figure>
              <div className="card-body">
                <strong className="text-center text-2xl font-bold">{item.jabatan}</strong>
                <p className="text-center">{item.nama}</p>
              </div>
            </div>
          </div>
        ))}
      </div>
    </>
  )
}

export default DaftarPemerintahDesa
