<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DanhmucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Danhmuc::insert([
            // giới thiệu
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Giới thiệu',
            'slug' => 'gioi-thieu',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '1',
            'name' => 'Lịch sử phát triển',
            'slug' => 'lich-su-phat-trien',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '1',
            'name' => 'Tổ chức bộ máy',
            'slug' => 'to-chuc-bo-may',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '1',
            'name' => 'Chức năng - nhiệm vụ',
            'slug' => 'chuc-nang-nhiem-vu',
        ], 

        // văn bản qppl
        [
            'loaidanhmuc_id' => '4',
            'danhmuc_id' => '',
            'name' => 'Văn bản QPPL',
            'slug' => 'van-ban-qppl',
        ],
        // sở điện tử
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Sở điện tử',
            'slug' => 'so-dien-tu',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '6',
            'name' => 'Hệ thống gửi nhận văn bản điện tử',
            'slug' => 'he-thong-gui-nhan-van-ban-dien-tu',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '6',
            'name' => 'Hệ thống văn bản chỉ đạo điều hành',
            'slug' => 'he-thong-van-ban-chi-dao-dieu-hanh',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '6',
            'name' => 'PM Quản lý văn bản & hồ sơ công việc',
            'slug' => 'phan-mem-quan-ly-van-ban-&-ho-so-cong-viec',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '6',
            'name' => 'PM Quản lý hồ sơ cán bộ công chức, viên chức tỉnh Hà Tĩnh',
            'slug' => 'phan-mem-quan-ly-ho-so-can-bo-cong-chuc-vien-chuc-tinh-ha-tinh',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '6',
            'name' => 'Thư điện tử Hà Tĩnh',
            'slug' => 'thu-dien-tu-ha-tinh',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '6',
            'name' => 'Thư điện tử Bộ tư pháp',
            'slug' => 'thu-dien-bo-tu-phap',
        ],
        // báp cáo 13 
        [
            'loaidanhmuc_id' => '5',
            'danhmuc_id' => '',
            'name' => 'Báo cáo',
            'slug' => 'bao-cao',
        ],

        // hỏi đáp lấy ý kiến 14 
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Hỏi đáp - Lấy ý kiến',
            'slug' => 'hoi-dap-lay-y-kien',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '14',
            'name' => 'Hỏi đáp',
            'slug' => 'hoi-dap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '14',
            'name' => 'Câu hỏi thường gặp',
            'slug' => 'cau-hoi-thuong-gap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '14',
            'name' => 'Lấy ý kiến',
            'slug' => 'lay-y-kien',
        ],
        // phổ biến giáo dục, pháp luật 18
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Phổ biến giáo dục, pháp luật',
            'slug' => 'pho-bien-giao-duc-phap-luat',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '18',
            'name' => 'Chỉ đạo hướng dẫn',
            'slug' => 'chi-dao-huong-dan',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '18',
            'name' => 'Văn bản pháp luật mới',
            'slug' => 'van-ban-phap-luat-moi',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '18',
            'name' => 'Tài liệu PBGDPL',
            'slug' => 'tai-lieu-pho-bien-giao-duc-phap-luat',
        ],
        // Tin tức sự kiện 22
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Tin tức sự kiện',
            'slug' => 'tin-tuc-su-kien',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '22',
            'name' => 'Tin nổi bật',
            'slug' => 'tin-noi-bat',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '22',
            'name' => 'Hoạt động tư pháp',
            'slug' => 'hoat-dong-tu-phap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '22',
            'name' => 'Hoạt động cơ sở',
            'slug' => 'hoat-dong-co-so',
        ],
        // chỉ đạo điều hành của đơn vị 26
        [
            'loaidanhmuc_id' => '4',
            'danhmuc_id' => '',
            'name' => 'Chỉ đạo điều hành của đơn vị',
            'slug' => 'chi-dao-dieu-hanh-cua-don-vi',
        ],
        // văn bản pháp luật chuyên ngành 27
        [
            'loaidanhmuc_id' => '4',
            'danhmuc_id' => '',
            'name' => 'Văn bản pháp luật chuyên ngành',
            'slug' => 'van-ban-phap-luat-chuyen-nganh',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Phổ biến giáo dục pháp luật',
            'slug' => 'vbpl-chuyen-nghanh-pho-bien-giao-duc-phap-luat',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'XD, KT, rà soát và hệ thống hóa văn bản',
            'slug' => 'xay-dung-kiem-tra-ra-soat-va-he-thong-hoa-van-ban',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Quản lý XLVBHC & TDTHPL',
            'slug' => 'quan-ly-xlvbhc-&-tdthpl',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Hành chính tư pháp',
            'slug' => 'hanh-chinh-tu-phap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Bổ trợ tư pháp',
            'slug' => 'bo-tro-tu-phap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Thanh tra khiếu nại tố cáo',
            'slug' => 'thanh-tra-khieu-nai-to-cao',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Văn phòng',
            'slug' => 'van-phong',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Hòa giải ở cơ sở và chuẩn tiếp cận pháp luật',
            'slug' => 'hoa-giai-o-co-so-va-chuan-tiep-can-phap-luat',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '27',
            'name' => 'Bồi thường nhà nước và pháp chế',
            'slug' => 'boi-thuong-nha-nuoc-va-phap-che',
        ],
        // nghiên cứu trao đổi 37
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Nghiên cứu trao đổi',
            'slug' => 'nghien-cuu-trao-doi',
        ],
        // Hướng dẫn nghiệp vụ 38
        [
            'loaidanhmuc_id' => '4',
            'danhmuc_id' => '',
            'name' => 'Hướng dẫn nghiệp vụ',
            'slug' => 'huong-dan-nghiep-vu',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Phổ biến pháp luật',
            'slug' => 'hdnv-pho-bien-phap-luat',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'XD, KT, rà soát và hệ thống hóa văn bản',
            'slug' => 'hdnv-xay-dung-kiem-tra-ra-soat-va-he-thong-hoa-van-ban',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Quản lý XLVBHC & TDTHPL',
            'slug' => 'hdnv-quan-ly-xlvbhc-&-tdthpl',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Hành chính tư pháp',
            'slug' => 'hdnv-hanh-chinh-tu-phap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Bổ trợ tư pháp',
            'slug' => 'hdnv-bo-tro-tu-phap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Thanh tra khiếu nại tố cáo',
            'slug' => 'hdnv-thanh-tra-khieu-nai-to-cao',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Văn phòng',
            'slug' => 'hdnv-van-phong',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Hòa giải ở cơ sở và chuẩn tiếp cận pháp luật',
            'slug' => 'hdnv-hoa-giai-o-co-so-va-chuan-tiep-can-phap-luat',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '38',
            'name' => 'Bồi thường nhà nước và pháp chế',
            'slug' => 'hdnv-boi-thuong-nha-nuoc-va-phap-che',
        ],

        // tuyên truyền cải cách hành chính 48
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Tuyên truyền cải cách hành chính',
            'slug' => 'tuyen-truyen-cai-cach-hanh-chinh',
        ],
        // kiểm soát thủ tục hành chính 49
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Kiểm soát thủ tục hành chính',
            'slug' => 'kiem-soat-thu-tuc-hanh-chinh',
        ],
        // iso hành chính 50
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'ISO Hành chính',
            'slug' => 'iso-hanh-chinh',
        ],
        // Thông tin tổ chức cá nhân hành nghề bổ trợ tư pháp 51
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Thông tin tổ chức cá nhân hành nghề bổ trợ tư pháp',
            'slug' => 'thong-tin-to-chuc-ca-nhan-hanh-nghe-bo-tro-tu-phap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '51',
            'name' => 'Luật sư và tư vấn pháp luật',
            'slug' => 'luat-su-va-tu-van-phap-luat',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '51',
            'name' => 'Công chứng',
            'slug' => 'cong-chung',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '51',
            'name' => 'Giám định tư pháp',
            'slug' => 'giam-dinh-tu-phap',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '51',
            'name' => 'Đấu giá tài sản',
            'slug' => 'dau-gia-tai-san',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '51',
            'name' => 'Thừa phát lại',
            'slug' => 'thua-phat-lai',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '51',
            'name' => 'Các tổ chức bổ trợ khác',
            'slug' => 'cac-cac-to-chuc-bo-tro-khac',
        ],
        // công khai minh bạch thông tin 58
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Công khai minh bạch thông tin',
            'slug' => 'cong-khai-minh-bach-thong-tin',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Giả quyết khiếu nại tố cáo',
            'slug' => 'giai-quyet-khieru-nai-to-cao',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Báo cáo - Thống kê',
            'slug' => 'bao-cao-thong-ke',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Chiến lược, quy hoạch, kế hoạch',
            'slug' => 'chien-luoc-quy-hoach-ke-hoach',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Dự án đầu tư đấu thầu',
            'slug' => 'du-an-dau-tu-dau-thau',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Chính sách ưu đãi, hỗ trợ đầu tư',
            'slug' => 'chinh-sach-uu-dai-ho-tro-dau-tu',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Sáng kiến, đề tài, khoa học',
            'slug' => 'sang-kien-de-tai-khoa-hoc',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Thông tin về công tác tổ chức cán bộ',
            'slug' => 'thong-tin-ve-cong-tac-to-chuc-can-bo',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '58',
            'name' => 'Ngân sách',
            'slug' => 'ngan-sach',
        ],
        // tiếp nhận phản ánh xử lý kiến nghị 67
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Tiếp nhận phản ánh xử lý kiến nghị',
            'slug' => 'tiep-nhan-phan-anh-xu-ly-kien-nghi',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '67',
            'name' => 'Tiếp nhận phản ánh kiến nghị',
            'slug' => 'tiep-nhan-phan-anh-kien-nghi',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '67',
            'name' => 'Xử lý kiến nghị',
            'slug' => 'xu-ly-kien-nghi',
        ],
        //Khen thưởng xử phạt 70
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Khen thưởng xử phạt',
            'slug' => 'khen-thuong-xu-phat',
        ],
        // Hỗ trợ pháp luật doanh nghiệp 71
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Hỗ trợ pháp luật doanh nghiệp',
            'slug' => 'ho-tro-doanh-nghiep',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '71',
            'name' => 'Nghiên cứu trao đổi',
            'slug' => 'nghien-cuu-trao-doi-pl-doanh-nghiep',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '71',
            'name' => 'Hoạt động hỗ trợ pháp lý',
            'slug' => 'hoat-dong-ho-tro-phap-ly-pl-doanh-nghiep',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '71',
            'name' => 'Văn bản pháp luật',
            'slug' => 'van-ban-phap-luat-doanh-nghiep',
        ],
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '71',
            'name' => 'Giải đáp pháp luật',
            'slug' => 'giai-dap-phap-luat-doanh-nghiep',
        ],
        // Hỗ trợ pháp luật cho người khuyết tật 76
        [
            'loaidanhmuc_id' => '1',
            'danhmuc_id' => '',
            'name' => 'Hỗ trợ người khuyết tật',
            'slug' => 'ho-tro-nguoi-khuyet-tat',
        ],
        ]);

    }
}
