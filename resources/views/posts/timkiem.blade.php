@extends('layout.trangchu')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@riophae/vue-treeselect@^0.4.0/dist/vue-treeselect.min.css">
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<div id="timkiem" class="col-span-12">
    <span> <a href="/"> <i class="fa fa-home text-black mr-3 mb-5"> </i> </a> <i class="fa fa-chevron-right text-black mr-3"></i> <span class="font-bold text-blue-600 text-lg">Tìm
            kiếm</span>

        <div>
            <input @keyup="searchTitle($event)" v-model=" searchName " type="text" name="" id="" style="border: 2px solid #cdb6b6; width:90%; float: left; padding: 6px 6px">
            <button @click="search" style="width: 10% ; background-color:#5bc0de; height: 40px; "> <i class="fa fa-search text-lg mt-2 text-white px-3"></i> </button>
        </div>
        <div class="grid grid-cols-12 mt-4">
            <div v-for="listPost  in listPost" class=" col-span-12 grid grid-cols-12 my-2 bg-white p-4" style="border: 1px solid gray">
                <div class="col-span-3">
                    <div>
                        <img class="w-full" :src="'/storage/'+listPost['thumbnail']" alt="">
                    </div>
                </div>

                <div class="col-span-8 ml-4">
                    <div class="col-span-12 text-justify ">
                        <a :href="'/chi-tiet-tin-tuc/' + listPost['slug']">
                            <p class="sm:text-lg text-base text-gray-700 font-bold mb-4" style="color: #000;">
                                @{{listPost.title}}</p>
                        </a>
                    </div>
                    <div v-if="listPost.published_at">
                        <div class="col-span-12">
                            <p class="text-gray-500 sm:text-base text-sm"><i class="fas fa-calendar-alt"></i>
                            @{{new Date(listPost.published_at).toLocaleDateString('vi-VN')}}</p>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 m-2">
                        <!-- <treeselect v-model="danhmucs"  :options="danhmucs" :multiple="true"/> -->
                        <!-- <option value="0"> -- Chuyên Mục --</option>
                        <option v-for="cm in danhmucs" :value="cm.id">
                            @{{ cm.name }}
                        </option> -->
                        <treeselect @close="optionValue($event,listPost.id)" v-model="datalist[listPost.id]" :options="danhmucs" :multiple="true" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8" id="grid-state" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;"></treeselect>
                    </div>
                </div>


            </div>

        </div>
</div>

<!-- import CSS -->

<!-- import JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@riophae/vue-treeselect@^0.4.0/dist/vue-treeselect.umd.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    Vue.component('treeselect', VueTreeselect.Treeselect)
    var vm = new Vue({
        el: '#timkiem',
        data: {
            listPost: [],
            danhmucs: [],
            lists: [],
            chuyenmuc_id: '',
            show: false,
            isActivemodal: true,
            searchName: '',
            danhmuc: '',
            list: '',
            // listPost: '',
            ngaybd: '',
            ngaykt: '',
            datalist:[],

            normalizer(node) {
                return {
                    id: node.id,
                    label: node.label,
                    children: node.children,
                }
            },
        },
        // chạy ngay khi web load
        mounted: function() {
            const self = this;
            this.search()
            axios.get("/danh-muc/danhmucs").then(function(response) {
                self.danhmucs = response.data;
                console.log(self.danhmucs);
            })
            axios.get("/list").then(function(response) {
                self.danhmucs = response.data;
                console.log(self.danhmucs);
            })
        },
        watch: {
            'listPost.data'() {
             console.log(1);
            },


        },
       
        methods: {
            search() {
                const self = this;
                axios.get("/searchPost?searchName=" + self.searchName + '&chuyenmuc_id=' + self.chuyenmuc_id +
                        '&ngaybd=' + self.ngaybd + '&ngaykt=' + self.ngaykt)
                    .then(function(response) {
                        self.listPost = response.data;
                    });
            },
            optionValue(event, id) {
                // console.log(1);
                // const self = this;
                // axios.post("/api/quy-trinh", values)
                // .then(function (response) {
                //     // toast.current.show({ severity: 'success', summary: 'Successfully', detail: 'Thêm mới thành công', life: 3000 });
                //     // setIsActivemodal(pre => !pre)
                //     // setCheckLoadding(pre => !pre)
                // })
                // .catch(error => {
                //     // toast.current.show({ severity: 'error', summary: 'Error', detail: error, life: 3000 });
                // });
                const self = this;
                axios.post("/updateData?",{
                    'danhmuc':event,
                    'id':id,

                } )
                    .then(function(response) {
                        self.search()
                    });
                console.log(event);
                console.log(id);
            },

            searchTitle(e) {
                this.searchName = e.target.value;
                console.log(this.searchName);
            },
            chuyenMuc(e) {
                this.chuyenmuc_id = e.target.value;
            },

        }
    })
</script>

@endsection