
function titleCase(str) {
    var convertToArray = str.toLowerCase().split(' ');
    var result = convertToArray.map(function(val) {
      return val.replace(val.charAt(0), val.charAt(0).toUpperCase());
    });
    return result.join(' ');
  }
  function xemthongbao(elv){
    button = $(elv);
    $('.box-hideintb').toggle('slow');
    }
  $('input[type="text"]').keyup(function () {
    if($(this).hasClass('khonginhoa')==false)
    {
      $(this).val( titleCase($(this).val()));
    }
  });
const isVNPhoneMobile = /^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/;
  const isEmail = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/i;
  $(".box-hoten input").focusout(function(){
    $(this).closest('.box-hoten').removeClass('err1');
    $(this).closest('.box-hoten').find('.err').remove();
    if($(this).val()=='')
    {
       
        $('.box-hoten').addClass('err1').append('<div class="err">Vui lòng nhập họ tên</div>');
      
    } 
  });
  $(".box-madon input").focusout(function(){
    $(this).closest('.box-madon').removeClass('err1');
    $(this).closest('.box-madon').find('.err').remove();
    if($(this).val()=='')
    {
      
        $('.box-madon').addClass('err1').append('<div class="err">Vui lòng nhập mã đơn</div>');
     
    } 
  });
  $(".box-namsinh input").focusout(function(){
    $(this).closest('.box-namsinh').removeClass('err1');
    $(this).closest('.box-namsinh').find('.err').remove();
    if($(this).val()=='')
    {
      
        $('.box-namsinh').addClass('err1').append('<div class="err">Vui lòng nhập năm sinh</div>');
     
    } 
  });
  $(".box-cmndcccd input").focusout(function(){
    $(this).closest('.box-cmndcccd').removeClass('err1');
    $(this).closest('.box-cmndcccd').find('.err').remove();
    if($(this).val()=='')
    {
     
        $('.box-cmndcccd').addClass('err1').append('<div class="err">Vui lòng nhập CMND/CCCD</div>');return;
      
    } 
  });

  $(".box-madangky input").focusout(function(){
    $(this).closest('.box-madangky').removeClass('err1');
    $(this).closest('.box-madangky').find('.err').remove();
    if($(this).val()=='')
    {
   
        $('.box-madangky').addClass('err1').append('<div class="err">Vui lòng nhập mã đăng ký</div>');
      
    } 
  });
  $(".box-gioitinh select").bind('focusout change',function(){
    $(this).closest('.box-gioitinh').removeClass('err1');
    $(this).closest('.box-gioitinh').find('.err').remove();
    if($(this).val()==0)
    {
     
        $(this).closest('.box-gioitinh').addClass('err1').append('<div class="err">Vui lòng chọn giới tính</div>');
       
    } 
  });
  
  
    $(".box-sodienthoai input").focusout(function(){
      $(this).closest('.box-sodienthoai').removeClass('err1');
      $(this).closest('.box-sodienthoai').find('.err').remove();
     
      if(isVNPhoneMobile.test($(this).val())==false)
      {
       
          $('.box-sodienthoai').addClass('err1').append('<div class="err">Vui lòng nhập số điện thoại</div>');
       
      
  } 
    });
   
    function tieptuc(elv)
    {
      // location.reload();
     
        window.location.href = "/";
    }
    function huydonhm(elv)
{
  button = $(elv);
  data= {
    'ID':$('input[name=IDdon]').val()
  };
  swal({
title: 'Bạn có chắc chắn muốn hủy',
text: 'Đơn sẽ không thể khôi phục lại sau khi hủy!',
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#DD6B55',
confirmButtonText: 'Đồng ý',
cancelButtonText: 'Không ',
closeOnConfirm: false,
showLoaderOnConfirm: true
}, function() {
jQuery.ajax({
url: '/quanlyadmin/hienmau/huydonhm', //dẩn thư thư mục admin-ajax.php                       
data: data,                
type: 'POST',
dataType: "json",
beforeSend: function (xhr) {
},
success: function (data) {
if(data['error'])
                      {
                        swal('Hủy không thành công!', data['error'], 'error');
                          thongbao(data['error'],'error');
                          return;
                      }
swal('Bạn đã hủy đơn hiến máu thành công!', '', 'success');
$('#guihienmau,.box-thoigiandiadiem,.box-luuy').hide();
$('.box-hoantat').show().html('<p>Quý vị <b>'+data['Hoten']+'</b> đã hủy đăng ký hiến máu!</p>')
}

});
});
 
  
 
}
function chontinhlayquan(elv,selected=null){
  button =$(elv);
  data ={
    'ID':button.val(),
    'selected':selected
  };
  $.ajax({
    url: '/quanlyadmin/hienmau/chontinhlayquan', //dẩn thư thư mục admin-ajax.php       
    data: data,                
    type: 'POST',
    dataType: "json",
    beforeSend: function (xhr) {
        // $('input[type="submit"]').prop('disabled', true);
    },
    success: function (data) {
      if(data['error'])
      {  
         
          alert(data['error']);
          return;
      }
   
    button.closest('.box-diachi').find('.box-quan select').html(data).select2();
    button.closest('.box-diachi').find('.box-xa select').html(' <option value="0">Chọn Xã/Phường</option>').select2();
    if(button.closest('.box-diachi').hasClass('box-thuongtru'))
    {
      truottoi('box-thuongtru');
    }else{
      truottoi('box-hientai');
    }
    }
  });
}
function clickgiongdc(elv){
  if($(elv).prop('checked')){
    tinh = $('.tinhtt select').val();
    quan = $('.quantt select').val();
    xa = $('.xatt select').val();
    $('.tinhht select').val(tinh).select2();
    chontinhlayquan( $('.tinhht select'),quan);
    $('.quanht select').select2();
  setTimeout(() => {
    chonquanlayxa($('.quanht select'),xa);
    $('.xaht select').select2();
  }, 500);
  
   $('.diachiht input').val($('.diachitt input').val());
  }

}
function chonquanlayxa(elv,selected=null){
  button =$(elv);
  data ={
    'ID':button.val(),
    'selected':selected
  };
  console.log(button.val())
  $.ajax({
    url: '/quanlyadmin/hienmau/chonquanlayxa', //dẩn thư thư mục admin-ajax.php       
    data: data,                
    type: 'POST',
    dataType: "json",
    beforeSend: function (xhr) {
        // $('input[type="submit"]').prop('disabled', true);
    },
    success: function (data) {
      if(data['error'])
      {  
         
          alert(data['error']);
          return;
      }
    
    button.closest('.box-diachi').find('.box-xa select').html(data).select2();
    if(button.closest('.box-diachi').hasClass('box-thuongtru'))
    {
      truottoi('box-thuongtru');
    }else{
      truottoi('box-hientai');
    }
   
    }
  });
}
function xemlichdangkytrongngay(elv)
{
  button = $(elv);
  $('.cacngaydkhm').removeClass('active');
  button.addClass('active'); 
  iddon = button.attr('data-iddon');
  $('.box-ngayhm').html(' '+ button.find('option:selected').text()  );
  if($("input[name=Nhommau]").length>0)
  {
    $('.box-Dsnhommau').removeClass('err1');
    $('.box-Dsnhommau .err').remove();
    if(  $("input[name=Nhommau]").is(':checked')==false){      
        $('.box-Dsnhommau').addClass('err1').append('<div class="err" style="width:100%">Vui lòng chọn nhóm máu của quý vị!</div>');return;      
    }
  }
  data= {
    'Ngayhm':button.val(),
    'IDdot':$('input[name=ID]').val(),
    'iddon':iddon,
    'tien':$('input[name=tien]').val(),
    'Nhommau':$('input[name=Nhommau]:checked').val(),
    'Trangthai':$('input[name=Nhommau]:checked').attr('data-trangthai')
  };
   
  $.ajax({
    url: '/quanlyadmin/hienmau/tulistkhunggiohienmau1', //dẩn thư thư mục admin-ajax.php       
    data: data,                
    type: 'POST',
    dataType: "json",
    beforeSend: function (xhr) {
        // $('input[type="submit"]').prop('disabled', true);
    },
    success: function (data) {
      if(data['error'])
      {  
         
          alert(data['error']);
          return;
      }
      if(data['Chuangay']){
        $('.box-listcacngay .select').html(data['Chuoi']);
      }
    $('.box-chongiouutien .box').html(data);
    truottoi('box');
    }
  });
}

function truottoi(maclass)
{
  $('html, body').animate({
    scrollTop: $('.'+maclass).offset().top
  }, 500);
}
function chonnhommau(elv){
  button = $(elv);
  trangthai = button.attr('data-trangthai');
$('.thongbaochonhommau').remove();
  if(trangthai == 3){
$('.box-listcacngay,.box-chongiouutien').hide('slow');
$('.box-listcacngay').before('<div class="thongbaochonhommau err" style="margin-bottom:15px;">Nhóm máu của bạn hiện tại tạm không tiếp nhận!</div>');
truottoi('box-listcacngay');
  }else{
    $('.box-listcacngay,.box-chongiouutien').show('slow');
    if(trangthai==2){
      $('.box-chongiouutien .box input').prop( "disabled", false );
      $('.box-chongiouutien .box label span:nth-child(2)').html('Ưu tiên đăng ký');
    }else{
      xemlichdangkytrongngay($('.box-listcacngay select[name=Ngayhienmau]'));
     
    }
  }
}
$(document).ready(function() {
    $('.js-example-basic-single').select2();
        $('.box-namsinh input').inputmask("9999");
        
        
// $( "form#xemdon" ).on( "submit", function(e) {
//   e.preventDefault();
//   data = $( this ).serializeArray();
//   $('.err').remove();
//   $('form#xemdon input').removeClass('err1')
//   if($('.box-cmndcccd input').val()==''){
//     $('.box-cmndcccd').addClass('err1').append('<div class="err">Vui lòng nhập cmnd/cccd</div>');return;
//   }
//   if(isVNPhoneMobile.test($('.box-sodienthoai input').val())==false)
//   {
//       $('.box-sodienthoai').addClass('err1').append('<div class="err">Vui lòng nhập số điện thoại</div>');return;
// } 

//  duongdan =  $('base').attr('href');
//   $.ajax({
//                   url: '/quanlyadmin/hienmau/xemdon', //dẩn thư thư mục admin-ajax.php       
//                   data: data,                
//                   type: 'POST',
//                   dataType: "json",
//                   beforeSend: function (xhr) {
//                       // $('input[type="submit"]').prop('disabled', true);
//                   },
//                   success: function (data) {
//                       if(data['error'])
//                       {  
                           
//                           alert(data['error']);
//                           return;
//                       }
//                       location.href=data['Link'];
//                   }
//               });
// });
$( "form#guihienmau" ).on( "submit", function(e) {
    e.preventDefault();
    data = $( this ).serializeArray();

    data.push({name: "Danggio", value:$('.box input[name=Khunggio]:checked').attr('data-khunggio')});

    data.push({name: "Textgio", value:$('.box label[for='+$('.box input[name=Khunggio]:checked').attr('id')+'] span:nth-child(1)').text()});
    data.push({name: "Stt", value:$('.box input[name=Khunggio]:checked').attr('data-stt')});
    $('.err1').removeClass('err1');
    $('.err').remove();
    if($("input[name=flexRadioDefault]").length>0){
      if($("input[name=flexRadioDefault]").is(':checked')==false)
      {
       
         $('.box-listcacngay').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Chọn ngày hiến máu</div>');
       
       truottoi('box-listcacngay');
       return;
      }
    }

 
    if($(".box-hoten input").val()=='')
    {
      
        $('.box-hoten').addClass('err1').append('<div class="err">Vui lòng nhập họ tên</div>');
     
      truottoi('box-hoten');
      return;
    } 
    
    if($('.box-cmndcccd input').val()=='')
    {
     
        $('.box-cmndcccd').addClass('err1').append('<div class="err">Vui lòng nhập CMND/CCCD</div>');
     
      truottoi('box-cmndcccd');
      return;
    } 
    
    if($('.box-namsinh input').val()=='')
    {
      
        $('.box-namsinh').addClass('err1').append('<div class="err">Vui lòng nhập năm sinh</div>');
     
      truottoi('box-namsinh');
      return;
    } 
    
   
      if(isVNPhoneMobile.test($(".box-sodienthoai input").val())==false)
      {
      
          $('.box-sodienthoai').addClass('err1').append('<div class="err">Vui lòng nhập số điện thoại</div>');
        
        truottoi('box-sodienthoai');
        return;
      } 
      cmnd = $('.box-cmndcccd input').val();
      sdt = $('.box-sodienthoai input').val();
      if($('select[name=Quantt]').val() ==0)
      {
        $('.quantt').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Vui lòng chọn Quận/Huyện</div>');
        
        truottoi('quantt');
        return;
      }
      if($('select[name=Xatt]').val() ==0)
      {
        $('.xatt').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Vui lòng chọn Xã/Phường</div>');
        
        truottoi('xatt');
        return;
      }
      if($('input[name=Diachitt]').val() ==0)
      {
        $('.diachitt').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Vui lòng nhập địa chỉ</div>');
        
        truottoi('diachitt');
        return;
      }
      if($('select[name=Quanht]').val() ==0)
      {
        $('.quanht').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Vui lòng chọn Quận/Huyện</div>');
        
        truottoi('quanht');
        return;
      }
      if($('select[name=Xaht]').val() ==0)
      {
        $('.xaht').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Vui lòng chọn Xã/Phường</div>');
        
        truottoi('xaht');
        return;
      }
      if($('input[name=Diachiht]').val() ==0)
      {
        $('.diachiht').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Vui lòng nhập địa chỉ</div>');
        
        truottoi('diachiht');
        return;
      }
      if($("input[name=Nhommau]").length>0)
    {
      if(  $("input[name=Nhommau]").is(':checked')==false){
        if( $("input[name=Nhommau]:checked").attr('data-trangthai')==3){
          $('.box-Dsnhommau').addClass('err1').append('<div class="err">Nhóm máu của quý vị tạm thời chưa thể tiếp nhận!</div>');
          
        }else{
         
            $('.box-Dsnhommau').addClass('err1').append('<div class="err">Vui lòng chọn nhóm máu của quý vị!</div>');
          
         
        }
        truottoi('box-Dsnhommau');
        return;
      }
    }
    if($("input[name=Tiemvaccine]").length>0)
    {
      if(  $("input[name=Tiemvaccine]").is(':checked')==false){
     
           
            $('.box-tiemvaccine').addClass('err1').append('<div class="err">Vui lòng chọn, bạn đã tiêm vaccine chưa!</div>');
          
          truottoi('box-tiemvaccine');
          return;
     
      }
    }
 
    if($('select[name=Ngayhienmau]').length>0)
    {
      if($('select[name=Ngayhienmau] option:checked').val()      ==0)
      {
        
          $('.box-listcacngay').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Chọn ngày hiến máu</div>'); 
        
        truottoi('box-listcacngay');
        return;
      }
      
    }
    if($('input[name=Khunggio]:checked').val()    ==0)
    {
      
        $('.box-chongiouutien').addClass('err1').append('<div class="err" style="display: block;      width: 100%;      text-align: center;  ">Chọn giờ hiến máu</div>');
      
      truottoi('box-chongiouutien');
      return;
    }
   duongdan =  $('base').attr('href');
    $.ajax({
                    url: '/quanlyadmin/hienmau/actionadd', //dẩn thư thư mục admin-ajax.php       
                    data: data,                
                    type: 'POST',
                    dataType: "json",
                    beforeSend: function (xhr) {
                        // $('input[type="submit"]').prop('disabled', true);
                    },
                    success: function (data) {
                        if(data['error'])
                        {  
                            //  $('input[type="submit"]').prop('disabled', false);
                            // thongbao(data['error'],'error');\
                            alert(data['error']);
                            return;
                        }
                     
                    $('.maquyy').html(data['Madon']);
                    $('.hotenndk').html(data['Hoten']);
                    $('.chungminhnguoidangky').html(data['CMND/CCCD']);
                   
                $('.qrcodecuaban').attr('src','https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl='+duongdan+'/quanlyadmin/hienmau/xacnhanthamgia/?search='+cmnd+"-"+sdt+'&choe=UTF-8'); 
                a= location.pathname.split('/'); 
                      $('.suathongtindk').attr('href','/huydoithongtin?CMNDCCCD='+cmnd+"&Sodienthoai="+sdt); 
                   
                      $('.box-ngayhm').html(' '+data['Ngayhienmautext'] +' ' );
              $('.khunggiodadk').html(data['Namekhunggio']);
        
             $('#guihienmau,#headingtwo').hide();
              
 
          
             $('.box-hoantat').show();
            
                if(data['xu']==1 && data['Email']  )
                {
                  $.ajax({
                    url: '/quanlyadmin/hienmau/sendmail', //dẩn thư thư mục admin-ajax.php       
                    data: data,                
                    type: 'POST',
                    dataType: "json",
                    beforeSend: function (xhr) {
                    },
                    success: function (dataemail) {
                    }
                });
                }
                    }
                });
  });
    });
