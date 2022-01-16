<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="text-center" rowspan='2'>No</th>
            <th class="text-center" rowspan='2'>Kode & Nama Paket</th>
            <th class="text-center" rowspan='2'>Lokasi</th>  
            @php
            $tender = $tanggal->tanggal_mtender;
            $kontrak = $tanggal->tanggal_skontrak;
            $diff = $kontrak->diffInMonths($tender);
            $dify = $kontrak->diffInYears($tender);
            $mt = $tanggal->tanggal_mtender->format('m');
            $mk = $tanggal->tanggal_skontrak->format('m');
            $yt = $tanggal->tanggal_mtender->format('Y');
            $yk = $tanggal->tanggal_skontrak->format('Y');
            // $col = '';
            $lm = \Carbon\CarbonPeriod::create($tender, '1 month', $kontrak);

            // $a = 0;
            // $colspan = array();
            // foreach ($lm as $item){
            //     $data_kol =  $item->format('m');
                // $a++;
                // if($data_kol == '12'){
                //     $colspan[] = $a;
                //     $a = 0;
                // } 
            // }
            // $b= 0;
            for($i=$yt;$i<=$yk;$i++){
                echo "<th class='text-center' colspan='12'>".$i."</th>";
            }
            @endphp
        </tr>
        <tr>
            @foreach ($lm as $item)
                <th>{{$item->format('F')}}</th>
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
            <td>({{$item->provinsi->nm_prov}}) - {{$item->kabupaten->nm_kab}}</td>
            @php
            // foreach ($lm as $items){
            //     $data_kol =  $items->format('m');
            //     $a++;
            //     if($data_kol == '12'){
            //         $colspan[] = $a;
            //         $a = 0;
            //     } 
            // }
            $col = ($yk - $yt + 1) * 12;
            $ttm = $item->tanggal_mtender->format('Y') - $yt;
            $tts = $item->tanggal_stender->format('Y') - $yt;
            $btm = 12 * $ttm + $item->tanggal_mtender->format('m');
            $bts = 12 * $tts + $item->tanggal_stender->format('m');
            for ($i=1; $i < $btm; $i++) { 
                echo "<th class='text-center'>Tidak ada kegiatan</th>";
            }
            for ($i=$btm; $i <= $bts; $i++) { 
                echo "<th class='text-center' style='background-color:skyblue;'>Tender</th>";
            }
            $tkm = $item->tanggal_mkontrak->format('Y') - $yt;
            $tks = $item->tanggal_skontrak->format('Y') - $yt;
            $bkm = 12 * $tkm + $item->tanggal_mkontrak->format('m') + 1;
            $bks = 12 * $tks + $item->tanggal_skontrak->format('m');
            for ($a=$bkm; $a <= $bks; $a++) { 
                echo "<th class='text-center' style='background-color:orange;'>Kontrak</th>";
            }
            @endphp
        </tr>
        @endforeach
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}