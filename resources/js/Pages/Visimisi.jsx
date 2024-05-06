import CarouselVisimisi from "@/Components/Visimisi/CarouselVisimisi"
import Visidanmisi from "@/Components/Visimisi/Visidanmisi"
import Navbar from "@/Components/Common/navbar/Navbar"
import { Helmet } from "react-helmet";
import Footer from "@/Components/Common/footer/Footer";


function Visimisi() {
  return (
    <>
      <Helmet>
        <title>Visi dan Misi - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselVisimisi />
      <Visidanmisi />
      <Footer />

    </>
  )
}
export default Visimisi