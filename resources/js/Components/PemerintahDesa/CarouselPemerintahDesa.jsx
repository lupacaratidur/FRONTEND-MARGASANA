import './PemerintahDesa.css'

const CarouselPemerintahDesa = () => {
  return (
    <>
      <div className='container-carousel'>
        <div className="carousel w-full z-index-0" >
          <div id="slide1" className="carousel-item relative w-full">
            <div className="bg-gradient-to-r from-blue-500 to-blue-800 w-full h-full absolute top-0 left-0 opacity-50"></div>
            <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" className="w-full" />
            <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
              <div>
                <h1 className="text-4xl font-bold" style={{ marginLeft: 200 }}>PEMERINTAH DESA</h1>
                <h1 className="text-4xl font-bold" style={{ marginLeft: 200 }}>DESA MARGASANA</h1>
                <hr className="blue-line-pemerintah-desa" style={{ marginLeft: 200 }} />
              </div>
            </div>
          </div>
        </div >
      </div>
    </>
  )
}
export default CarouselPemerintahDesa