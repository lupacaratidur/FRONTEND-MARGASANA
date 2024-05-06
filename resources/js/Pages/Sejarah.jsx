import Footer from "@/Components/Common/footer/Footer";
import Navbar from "@/Components/Common/navbar/Navbar"
import CarouselSejarah from "@/Components/Sejarah/CarouselSejarah"
import SejarahDesa from "@/Components/Sejarah/SejarahDesa"
import { Helmet } from "react-helmet";



function Sejarah() {
  return (
    <>
      <Helmet>
        <title>Sejarah Desa - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselSejarah />
      <SejarahDesa />
      <Footer />

    </>

  )
}
export default Sejarah