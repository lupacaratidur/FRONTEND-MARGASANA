import CarouselBPD from "@/Components/BPD/CarouselBPD"
import DaftarBPD from "@/Components/BPD/DaftarBPD"
import Footer from "@/Components/Common/footer/Footer";
import Navbar from "@/Components/Common/navbar/Navbar"
import { Helmet } from "react-helmet";


function BPD() {
  return (
    <>
      <Helmet>
        <title>BPD - Desa Margasana</title>
      </Helmet>
      <div className="container-x">
        <Navbar />
        <CarouselBPD />
        <DaftarBPD />
        <Footer />
      </div>
    </>
  )
}
export default BPD