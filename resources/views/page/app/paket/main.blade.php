<x-app-layout title="Pinjaman">
    <div id="content_list">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header card-header-stretch">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('phln/kegiatan/*/paket-project-brief') ? 'active' : ''}}" href="{{route('phln.project_brief',$kegiatan->id)}}">1. Project Brief</a>
                        </li>
                        {{-- @if($data->id) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('office/kegiatan/*/paket') ? 'active' : ''}}" href="{{route('phln.kegiatan.paket',$kegiatan->id)}}">2. Pemaketan & Statusnya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('phln/kegiatan/*/paket-timeline') ? 'active' : ''}}" href="{{route('phln.paket_timeline',$kegiatan->id)}}">3. Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('phln/kegiatan/*/paket-owp') ? 'active' : ''}}" href="{{route('phln.paket_owp',$kegiatan->id)}}">4. OWP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('phln/kegiatan/*/paket-awp') ? 'active' : ''}}" href="{{route('phln.paket_awp',$kegiatan->id)}}">5. AWP</a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                </div>
            </div>
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Pelaksanaan</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Daftar Paket Kegiatan : {{$kegiatan->judul}} <br> {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}</span>
                </h3>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="javascript:;" onclick="load_input('{{route('phln.paket.create',$kegiatan->id)}}');" class="btn btn-icon btn-sm btn-light btn-active-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk tambah data">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                    </svg>
                                </span>
                            </a>
                            <a href="{{route('phln.kegiatan.index')}}" class="btn btn-sm btn-icon btn-light btn-active-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk kembali">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M8.42034438,20 L21,20 C22.1045695,20 23,19.1045695 23,18 L23,6 C23,4.8954305 22.1045695,4 21,4 L8.42034438,4 C8.15668432,4 7.90369297,4.10412727 7.71642146,4.28972363 L0.653241109,11.2897236 C0.260966303,11.6784895 0.25812177,12.3116481 0.646887666,12.7039229 C0.648995955,12.7060502 0.651113791,12.7081681 0.653241109,12.7102764 L7.71642146,19.7102764 C7.90369297,19.8958727 8.15668432,20 8.42034438,20 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M12.5857864,12 L11.1715729,10.5857864 C10.7810486,10.1952621 10.7810486,9.56209717 11.1715729,9.17157288 C11.5620972,8.78104858 12.1952621,8.78104858 12.5857864,9.17157288 L14,10.5857864 L15.4142136,9.17157288 C15.8047379,8.78104858 16.4379028,8.78104858 16.8284271,9.17157288 C17.2189514,9.56209717 17.2189514,10.1952621 16.8284271,10.5857864 L15.4142136,12 L16.8284271,13.4142136 C17.2189514,13.8047379 17.2189514,14.4379028 16.8284271,14.8284271 C16.4379028,15.2189514 15.8047379,15.2189514 15.4142136,14.8284271 L14,13.4142136 L12.5857864,14.8284271 C12.1952621,15.2189514 11.5620972,15.2189514 11.1715729,14.8284271 C10.7810486,14.4379028 10.7810486,13.8047379 11.1715729,13.4142136 L12.5857864,12 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <form id="content_filter">
                                <div class="input-group input-group-sm mb-5">
                                    <span class="input-group-text" id="keywords">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="text" name="keyword" onkeyup="load_list(1);" class="form-control" placeholder="Cari data..." aria-label="Cari data..." aria-describedby="keywords"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <div id="list_result"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection
</x-app-layout>