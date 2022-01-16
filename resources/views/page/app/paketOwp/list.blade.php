@if ($collection->count() > 0)
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="text-center" rowspan='2'>No</th>
            <th class="text-center" rowspan='2'>Kode & Nama Paket</th>
            <th class="text-center" rowspan='2'>Alokasi</th>
            <th class="text-center" rowspan='2'>Realisasi Komulatif (T-1)</th>
            <th class="text-center" rowspan='2'>DIPA (Tahun Berjalan)</th>
            <th class="text-center" colspan='4'>Rencana Penyerapan (Tahun Berjalan)</th>
        </tr>
        <tr>
            @foreach ($collection as $item)
                @foreach ($item->paketOwp as $owp)
                    <th>{{$owp->ta}}</th>
                @endforeach
            @endforeach
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($collection as $item)
        <tr>
            <td>{{$no++}}</td>
            <td>({{$item->kode_paket}}) - {{$item->nama_paket}}</td>
            <td>{{number_format($item->alokasi)}}</td>
            <td>{{number_format($realisasi)}}</td>
            <td>{{number_format($dipa)}}</td>
            @if($item->paketOwp->count() > 0)
                @foreach ($item->paketOwp as $owp)
                    @if($owp->ta > date("Y"))
                    <td>
                        {{number_format($owp->target_dana)}}
                    </td>
                    @else
                    <td>0</td>
                    @endif
                @endforeach
            @else
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}
@else
<div class="text-center px-4 mb-3">
    <img class="mw-100 mh-300px" alt="" src="{{asset('keenthemes/media/illustrations/sketchy-1/2.png')}}">
</div>
@endif