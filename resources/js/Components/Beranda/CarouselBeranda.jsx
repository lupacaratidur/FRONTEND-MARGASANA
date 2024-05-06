import './Beranda.css'

const CarouselBeranda = () => {
  return (
    <>
      <div className='container-carousel'>
        <div className="carousel w-full z-index-0" >
          <div id="slide1" className="carousel-item relative w-full">
            <div className="bg-gradient-to-r from-blue-500 to-blue-800 w-full h-full absolute top-0 left-0 opacity-50"></div>
            <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" className="w-full" />
            <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
              <div>
                <h1 className="text-4xl font-bold judul-carousel">SELAMAT DATANG DI WEBSITE RESMI DESA MARGASANA</h1>
                <p className="sub-judul-carousel"> Desa Margasana dalam bahasa jawa berarti " dalan asu" atau dalam bahasa Indonesia berarti "jalan anjing".

                  <br></br> Awalnya desa Margasana dipimpin oleh selir Mataram yaitu Eyang Ayu didampingi Eyang Patrawisa dan Eyang Margati,
                  <br></br>setelah wafat beliau dimakamkan di sebuah tempat yang biasa dinamakan Punden.
                </p>
                <br></br>
                <button className="btn btn-primary baca-sejarah">Baca sejarah</button>
              </div>
            </div>
          </div>
        </div >
      </div >
    </>
  )
}
export default CarouselBeranda