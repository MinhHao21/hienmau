<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DanhmucconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \App\Models\Danhmuccon::insert([
            [
                'tendm' => 'Lịch sử hình thành và phát triển',
                'slug' => 'lich-su-hinh-thanh-va-phat-trien',
                'danhmuc_id' => '1',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Danh bạ',
                'slug' => 'danh-ba',
                'danhmuc_id' => '1',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Báo cáo thống kê Kỳ Anh',
                'slug' => 'bao-cao-thong-ke-ky-anh',
                'danhmuc_id' => '1',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Di tích LS-DL thắng cảnh',
                'slug' => 'di-tich-ls-dl-thang-canh',
                'danhmuc_id' => '1',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Sản vật địa phương',
                'slug' => 'san-vat-dia-phuong',
                'danhmuc_id' => '1',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Danh nhân Kỳ Anh',
                'slug' => 'danh-nhan-ky-anh',
                'danhmuc_id' => '1',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Đền chùa, lễ hội',
                'slug' => 'den-chua-le-hoi',
                'danhmuc_id' => '1',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Lịch công tác tuần',
                'slug' => 'lich-cong-tac-tuan',
                'danhmuc_id' => '2',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Lịch công tác tháng',
                'slug' => 'lich-cong-tac-thang',
                'danhmuc_id' => '2',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Công tác Tổ chức-Cán bộ',
                'slug' => 'cong-tac-to-chuc-can-bo',
                'danhmuc_id' => '2',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Thông tin khen thưởng xử phạt',
                'slug' => 'thong-tin-khen-thuong-xu-phat',
                'danhmuc_id' => '2',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Thông tin chỉ đạo điều hành',
                'slug' => 'thong-tin-chi-dao-dieu-hanh',
                'danhmuc_id' => '2',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Lịch tiếp dân',
                'slug' => 'lich-tiep-dan',
                'danhmuc_id' => '2',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Kết quả giải quyết KNTC',
                'slug' => 'ket-qua-giai-quyet-kntc',
                'danhmuc_id' => '2',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Chính trị-kinh tế-xây dựng Đảng ',
                'slug' => 'chinh-tri-kinh-te-xay-dung-dang',
                'danhmuc_id' => '3',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Văn hóa-xã hội-môi trường',
                'slug' => 'van-hoa-xa-hoi-moi-truong',
                'danhmuc_id' => '3',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Nông thôn mới',
                'slug' => 'nong-thon-moi',
                'danhmuc_id' => '3',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'An ninh quốc phòng',
                'slug' => 'an-ninh-quoc-phong',
                'danhmuc_id' => '3',
                'loaibaiviet' => 'baiviet',
            ], [
                'tendm' => 'Giáo dục-y tế',
                'slug' => 'giao-duc-y-te',
                'danhmuc_id' => '3',
                'loaibaiviet' => 'baiviet',
            ], 
            [
                'tendm' => 'Bầu cử Đại biểu Quốc Hội và Hội đồng Nhân Dân các cấp mới nhất',
                'slug' => 'bau-cu-dai-bieu-quoc-hoi-va-hoi-dong-nhan-dan-cac-cap-moi-nhat',
                'danhmuc_id' => '3',
                'loaibaiviet' => 'baiviet',
            ], 
            
            [
                'tendm' => 'Công khai ngân sách huyện',
                'slug' => 'cong-khai-ngan-sach-huyen',
                'danhmuc_id' => '4',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Phân bố, quản lý, sử dụng nguồn vốn',
                'slug' => 'phan-bo-quan-ly-su-dung-nguon-von',
                'danhmuc_id' => '4',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Dịch vụ công',
                'slug' => 'dich-vu-cong',
                'danhmuc_id' => '5',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Hướng dẫn thủ tục hành chính',
                'slug' => 'hung-dan-thu-tuc-hanh-chinh',
                'danhmuc_id' => '5',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Tra cứu thủ tục hành chính',
                'slug' => 'tra-cuu-thu-tuc-hanh-chinh',
                'danhmuc_id' => '5',
                'loaibaiviet' => 'vanban',
            ],
            [
                'tendm' => 'Tiếp nhận khiếu nại tố cáo',
                'slug' => 'tiep-nhan-khieu-nai-to-cao',
                'danhmuc_id' => '5',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Địa chỉ tiếp nhận PAKN',
                'slug' => 'dia-chi-tiep-nhan-pakn',
                'danhmuc_id' => '5',
                'loaibaiviet' => 'baiviet',
            ],
            [
                'tendm' => 'Văn bản TW',
                'slug' => 'van-ban-tw',
                'danhmuc_id' => '6',
                'loaibaiviet' => 'vanban',
            ],
            [
                'tendm' => 'Văn bản tỉnh',
                'slug' => 'van-ban-tinh',
                'danhmuc_id' => '6',
                'loaibaiviet' => 'vanban',
            ],
            [
                'tendm' => 'Văn bản huyện',
                'slug' => 'van-ban-huyen',
                'danhmuc_id' => '6',
                'loaibaiviet' => 'vanban',
            ],
            
            
        ]);
    }

    
}
