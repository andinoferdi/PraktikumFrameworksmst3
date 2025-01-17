   @extends('dashboard.layouts.main')
   @section('container')
       <div class="row">
           <div class="col-lg-12 d-flex align-items-stretch">
               <div class="card w-100">
                   <div class="card-body p-4">
                       <h5 class="card-title fw-semibold mb-4">Daftar Mahasiswa</h5>
                       <div class="table-responsive">
                           <table class="table text-nowrap mb-0 align-middle">
                               <thead class="text-dark fs-4">
                                   <tr>
                                       <th class="border-bottom-0">
                                           <h6 class="fw-semibold mb-0">Nama</h6>
                                       </th>
                                       <th class="border-bottom-0">
                                           <h6 class="fw-semibold mb-0">NIM</h6>
                                       </th>
                                       <th class="border-bottom-0">
                                           <h6 class="fw-semibold mb-0">Email</h6>
                                       </th>
                                       <th class="border-bottom-0">
                                           <h6 class="fw-semibold mb-0">Alamat</h6>
                                       </th>

                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach ($mahasiswas as $mahasiswa)
                                       <tr>
                                           <td class="border-bottom-0">{{ $mahasiswa->nama }}</td>
                                           <td class="border-bottom-0">{{ $mahasiswa->nim }}</td>
                                           <td class="border-bottom-0">{{ $mahasiswa->email }}</td>
                                           <td class="border-bottom-0">{{ $mahasiswa->alamat }}</td>
                                       </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-8 d-flex align-items-strech">
               <div class="card w-100">
                   <div class="card-body">
                       <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                           <div class="mb-3 mb-sm-0">
                               <h5 class="card-title fw-semibold">Sales Overview</h5>
                           </div>
                           <div>
                               <select class="form-select">
                                   <option value="1">March 2023</option>
                                   <option value="2">April 2023</option>
                                   <option value="3">May 2023</option>
                                   <option value="4">June 2023</option>
                               </select>
                           </div>
                       </div>
                       <div id="chart"></div>
                   </div>
               </div>
           </div>
           <div class="col-lg-4">
               <div class="row">
                   <div class="col-lg-12">
                       <!-- Yearly Breakup -->
                       <div class="card overflow-hidden">
                           <div class="card-body p-4">
                               <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                               <div class="row align-items-center">
                                   <div class="col-8">
                                       <h4 class="fw-semibold mb-3">$36,358</h4>
                                       <div class="d-flex align-items-center mb-3">
                                           <span
                                               class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                               <i class="ti ti-arrow-up-left text-success"></i>
                                           </span>
                                           <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                           <p class="fs-3 mb-0">last year</p>
                                       </div>
                                       <div class="d-flex align-items-center">
                                           <div class="me-4">
                                               <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                               <span class="fs-2">2023</span>
                                           </div>
                                           <div>
                                               <span
                                                   class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                               <span class="fs-2">2023</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-4">
                                       <div class="d-flex justify-content-center">
                                           <div id="breakup"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-12">
                       <!-- Monthly Earnings -->
                       <div class="card">
                           <div class="card-body">
                               <div class="row alig n-items-start">
                                   <div class="col-8">
                                       <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                                       <h4 class="fw-semibold mb-3">$6,820</h4>
                                       <div class="d-flex align-items-center pb-1">
                                           <span
                                               class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                               <i class="ti ti-arrow-down-right text-danger"></i>
                                           </span>
                                           <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                           <p class="fs-3 mb-0">last year</p>
                                       </div>
                                   </div>
                                   <div class="col-4">
                                       <div class="d-flex justify-content-end">
                                           <div
                                               class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                               <i class="ti ti-currency-dollar fs-6"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div id="earning"></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="row">
           <div class="col-sm-6 col-xl-3">
               <div class="card overflow-hidden rounded-2">
                   <div class="position-relative">
                       <a href="javascript:void(0)"><img src="../assets/images/products/s4.jpg"
                               class="card-img-top rounded-0" alt="..."></a>
                       <a href="javascript:void(0)"
                           class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                               class="ti ti-basket fs-4"></i></a>
                   </div>
                   <div class="card-body pt-3 p-4">
                       <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                       <div class="d-flex align-items-center justify-content-between">
                           <h6 class="fw-semibold fs-4 mb-0">$50 <span
                                   class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                           <ul class="list-unstyled d-flex align-items-center mb-0">
                               <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                               </li>
                               <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                               </li>
                               <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                               </li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-sm-6 col-xl-3">
               <div class="card overflow-hidden rounded-2">
                   <div class="position-relative">
                       <a href="javascript:void(0)"><img src="../assets/images/products/s5.jpg"
                               class="card-img-top rounded-0" alt="..."></a>
                       <a href="javascript:void(0)"
                           class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                               class="ti ti-basket fs-4"></i></a>
                   </div>
                   <div class="card-body pt-3 p-4">
                       <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                       <div class="d-flex align-items-center justify-content-between">
                           <h6 class="fw-semibold fs-4 mb-0">$650 <span
                                   class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                           <ul class="list-unstyled d-flex align-items-center mb-0">
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-sm-6 col-xl-3">
               <div class="card overflow-hidden rounded-2">
                   <div class="position-relative">
                       <a href="javascript:void(0)"><img src="../assets/images/products/s7.jpg"
                               class="card-img-top rounded-0" alt="..."></a>
                       <a href="javascript:void(0)"
                           class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                               class="ti ti-basket fs-4"></i></a>
                   </div>
                   <div class="card-body pt-3 p-4">
                       <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                       <div class="d-flex align-items-center justify-content-between">
                           <h6 class="fw-semibold fs-4 mb-0">$150 <span
                                   class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                           <ul class="list-unstyled d-flex align-items-center mb-0">
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-sm-6 col-xl-3">
               <div class="card overflow-hidden rounded-2">
                   <div class="position-relative">
                       <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg"
                               class="card-img-top rounded-0" alt="..."></a>
                       <a href="javascript:void(0)"
                           class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                               class="ti ti-basket fs-4"></i></a>
                   </div>
                   <div class="card-body pt-3 p-4">
                       <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                       <div class="d-flex align-items-center justify-content-between">
                           <h6 class="fw-semibold fs-4 mb-0">$285 <span
                                   class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                           <ul class="list-unstyled d-flex align-items-center mb-0">
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="me-1" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                               <li><a class="" href="javascript:void(0)"><i
                                           class="ti ti-star text-warning"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   @endsection
