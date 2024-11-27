@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">ChiDan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            NƯỚC HOA NICHE
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            NƯỚC HOA DESIGNER
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GIỚI THIỆU</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Tìm kiếm...">
                    <button class="btn btn btn-secondary" type="submit">Tìm</button>
                </form>
            </div>
        </div>
    </nav>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/slider_1.webp" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/slider_2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/slider_3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
          <h1 class="h1">Categories of The Month</h1>
          <p>
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
              deserunt mollit anim id est laborum.
          </p>
      </div>
  </div>
    <section style="background-color: #eee;">
      <div class="text-center container py-5">
        <h3 class="mt-4 mb-5"><strong>Sản Phẩm Nổi Bật</strong></h3>
    
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="./img/panther1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="./img/panther1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100"></div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  {{-- <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                      <h5>
                        <span class="badge bg-primary ms-2">New</span><span
                          class="badge bg-success ms-2">Eco</span><span class="badge bg-danger ms-2">-10%</span>
                      </h5>
                    </div>
                  </div> --}}
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="background-color: #eee;">
      <div class="text-center container py-5">
        <h3 class="mt-4 mb-5"><strong>Sản Phẩm Mới</strong></h3>
    
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="./img/panther1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="./img/panther1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100"></div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="./img/sp1.webp"
                  class="w-100" />
                <a href="#!">
                  {{-- <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                      <h5>
                        <span class="badge bg-primary ms-2">New</span><span
                          class="badge bg-success ms-2">Eco</span><span class="badge bg-danger ms-2">-10%</span>
                      </h5>
                    </div>
                  </div> --}}
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    

    <footer class="bg-body-tertiary text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2020 Copyright:
        <a class="text-body" href="https://mdbootstrap.com/">Dung</a>
      </div>
      <!-- Copyright -->
    </footer>
@endsection
