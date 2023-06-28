@extends('layout.layoutchinh')
@section('content')
<div class="col-span-9">
    <div class="w-full mb-6">

        <div class="border-red-700 px-3 py-2 font-bold text-2xl bg-gray-700 text-white w-1/4 mb-4">Văn bản
        </div>

   
        
        <!--  -->

        <div class="w-full mt-3 sm:mb-0 mb-3">
            @foreach($dsvanban as $ds)
            <table class="table is-bordered w-full">
                <tr class="bg-gray-300 py-1.5 ">
                    <td colspan="2" class="text-lg text-justify">
                        <a href="/van-ban-chi-tiet/{{$ds->id}}" class="flex items-center font-bold text-justify text-lg">
                            <i class="far fa-file-pdf text-4xl text-red-700 mr-3"></i>{{$ds->sokyhieu}}
                        </a>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" class="col-table-vanban pl-6 pr-6">
                        <p class="text-lg text-justify">
                            {{$ds->trichyeu}}
                        </p>
                    </td>
                    <td rowspan="1">
                        <p class="text-green-400">
                            Ban hành:
                            {{$ds->ngaybh}}

                        </p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="1">
                        <p class="text-green-400">
                            Hết hạn
                            {{$ds->ngayhh}}

                        </p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="1">

                    </td>
                    <td rowspan="1">
                        <p class="text-green-400">
                            Trạng thái: {{$ds->trangthai}}
                        </p>
                    </td>
                </tr>
            </table>
            @endforeach
            <div>
                {{$dsvanban ->links()}}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
var vm = new Vue({
    el: '#searchvanban',
    data: {
        dsvanban: [],
        sokyhieu: '',
        tennganh: '',
        ngaybanhanh: '',
        ngayhethan: '',
        coquanbanhanh: '',
        loaivb: '',
        idvb: '27',
    },
    // chạy ngay khi web load
    mounted: function() {
        const self = this;
      
    },
    // chạy khi thực hiện event
    methods: {
       
    }
})
</script>


@endsection