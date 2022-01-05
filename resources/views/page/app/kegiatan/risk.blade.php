<div class="row gy-5 g-xl-10">
    <div class="col-xl-6">
        <div class="card card-xxl-stretch mb-5 mb-xl-10" style="background-color: #F7D9E3">
            <div class="card-body d-flex flex-column">
                <div class="d-flex flex-column mb-7">
                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Jumlah Kegiatan</a>
                </div>
                <div class="row g-0">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="black" />
                                            <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.risk')}}');">
                                <div class="fs-5 text-dark fw-bolder lh-1">{{$ar->count()}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">AT RISK</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-9 ms-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="black" />
                                            <path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.bs')}}');">
                                <div class="fs-5 text-dark fw-bolder lh-1">{{$bs->count()}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">BEHIND SCHEDULE</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center me-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="black" />
                                            <path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.os')}}');">
                                <div class="fs-5 text-dark fw-bolder lh-1">{{$os->count()}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">ON SCHEDULE</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center ms-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="black" />
                                            <path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{$ar->count() + $bs->count() + $os->count()}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">TOTAL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card card-xxl-stretch mb-5 mb-xl-10" style="background-color: #CBF0F4">
            <div class="card-body d-flex flex-column">
                <div class="d-flex flex-column mb-7">
                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Nilai Alokasi</a>
                </div>
                <div class="row g-0">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="black" />
                                            <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.risk')}}');">
                                <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($ar->sum('nilai_konversi'),2,",",".")}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">AT RISK</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-9 ms-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="black" />
                                            <path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.bs')}}');">
                                <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($bs->sum('nilai_konversi'),2,",",".")}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">BEHIND SCHEDULE</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center me-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="black" />
                                            <path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.os')}}');">
                                <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($os->sum('nilai_konversi'),2,",",".")}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">ON SCHEDULE</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center ms-2">
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="black" />
                                            <path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($ar->sum('nilai_konversi')+$bs->sum('nilai_konversi')+$os->sum('nilai_konversi'),2,",",".")}}</div>
                                <div class="fs-7 text-gray-600 fw-bold">TOTAL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Pelaksanaan</span>
            <span class="text-muted mt-1 fw-bold fs-7">Pinjaman</span>
            <span class="text-muted mt-1 fw-bold fs-7">At Risk</span>
        </h3>
        <div class="card-toolbar">
            <div class="row">
                <div class="col-lg-12">
                    <a href="javascript:;" onclick="load_list(1);" class="btn btn-sm btn-light btn-active-primary">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8.42034438,20 L21,20 C22.1045695,20 23,19.1045695 23,18 L23,6 C23,4.8954305 22.1045695,4 21,4 L8.42034438,4 C8.15668432,4 7.90369297,4.10412727 7.71642146,4.28972363 L0.653241109,11.2897236 C0.260966303,11.6784895 0.25812177,12.3116481 0.646887666,12.7039229 C0.648995955,12.7060502 0.651113791,12.7081681 0.653241109,12.7102764 L7.71642146,19.7102764 C7.90369297,19.8958727 8.15668432,20 8.42034438,20 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M12.5857864,12 L11.1715729,10.5857864 C10.7810486,10.1952621 10.7810486,9.56209717 11.1715729,9.17157288 C11.5620972,8.78104858 12.1952621,8.78104858 12.5857864,9.17157288 L14,10.5857864 L15.4142136,9.17157288 C15.8047379,8.78104858 16.4379028,8.78104858 16.8284271,9.17157288 C17.2189514,9.56209717 17.2189514,10.1952621 16.8284271,10.5857864 L15.4142136,12 L16.8284271,13.4142136 C17.2189514,13.8047379 17.2189514,14.4379028 16.8284271,14.8284271 C16.4379028,15.2189514 15.8047379,15.2189514 15.4142136,14.8284271 L14,13.4142136 L12.5857864,14.8284271 C12.1952621,15.2189514 11.5620972,15.2189514 11.1715729,14.8284271 C10.7810486,14.4379028 10.7810486,13.8047379 11.1715729,13.4142136 L12.5857864,12 Z" fill="#000000"/>
                                </g>
                            </svg>
                        </span>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body py-3">
        <div class="table-responsive">
            @if ($ar->count() > 0)
            <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                <thead>
                    <tr class="fw-bolder text-muted">
                        <th class="min-w-30px">NO</th>
                        <th class="min-w-150px">NAMA KEGIATAN | NO LOAN | NO REGISTER</th>
                        <th class="min-w-150px">TANGGAL</th>
                        <th class="min-w-70px">ETR</th>
                        <th class="min-w-70px">DR</th>
                        <th class="min-w-70px">PV</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($ar as $item)
                    <tr>
                        <td>
                            <span class="fw-bold d-block fs-7">{{$no++}}</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                {{-- <div class="symbol symbol-45px me-5">
                                    <img src="assets/media/avatars/150-11.jpg" alt="" />
                                </div> --}}
                                <div class="d-flex justify-content-start flex-column">
                                    {{-- <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a> --}}
                                    <span class="fw-bold d-block fs-7">{{$item->judul}} <br> {{$item->no_loan}} | {{$item->kode_register}}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="fw-bold d-block fs-7">
                                Efektif :{{$item->tanggal_efektif->format('j M Y')}} <br>
                                Closing :{{$item->tanggal_closing->format('j M Y')}} <br>
                            </span>
                        </td>
                        <td>
                            <span class="fw-bold d-block fs-7">
                                {{$item->etr ? number_format($item->etr,2,',','.') : 0}} %
                            </span>
                        </td>
                        <td>
                            <span class="fw-bold d-block fs-7">
                                {{$item->dr ? number_format($item->dr,2,',','.') : 0}} %
                            </span>
                        </td>
                        <td>
                            <span class="fw-bold d-block fs-7">
                                {{$item->pv ? number_format($item->pv,2,',','.') : 0}} %
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="text-center px-4 mb-3">
                <img class="mw-100 mh-300px" alt="" src="{{asset('keenthemes/media/illustrations/sketchy-1/2.png')}}">
            </div>
            @endif
        </div>
    </div>
</div>