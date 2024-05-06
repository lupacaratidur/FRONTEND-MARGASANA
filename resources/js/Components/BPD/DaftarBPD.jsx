import { useState, useEffect } from 'react';
import './BPD.css'
useEffect


const DaftarBPD = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        let result = await fetch("http://127.0.0.1:8000/api/daftar-bpd-desa");
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


      <table className="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>

          </tr>
        </thead>
        {data.map((item, id) => (
          <tbody>
            <tr className="hover">
              <th>{id + 1}</th>
              <td>{item.nama}</td>
              <td>{item.jabatan}</td>
            </tr>
          </tbody>
        ))}
      </table>


    </>
  )
}
export default DaftarBPD