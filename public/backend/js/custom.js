$(document).ready(function () {
  
  if($('.datepicker').length > 0){
    // init datepicker
    $('.datepicker').datepicker.dates['vn'] = {
    days: ['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'],
    daysShort: ['T2','T3','T4','T5','T6','T7','CN'],
    daysMin: ['T2','T3','T4','T5','T6','T7','CN'],
    months: ['Tháng 1','Tháng 2','Tháng 3','Tháng 4','Tháng 5','Tháng 6',
      'Tháng 7','Tháng 8','Tháng 9','1Tháng 0','1Tháng 1','1Tháng 2'],
    monthsShort: ['Tháng 1','Tháng 2','Tháng 3','Tháng 4','Tháng 5','Tháng 6',
      'Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'],
    today: "今日",
    clear: "閉じる",
    format: "yyyy/mm/dd",
    titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
    weekStart: 0
   };

    $('.datepicker').datepicker({
        language: 'vn',
        autoclose: true
    });     
  }

  $.extend( $.fn.dataTable.defaults, {
    language: {
      "emptyTable" : "Không có dữ liệu.",
      "sProcessing":   "Đang xử lý...",
      "sLengthMenu":   " Hiện: _MENU_ bản ghi",
      "sZeroRecords":  "Không có dữ liệu này!",
      "sInfo":         " Tổng: _TOTAL_ | Từ _START_  đến _END_",
      "sInfoEmpty":    " Không có bản ghi nào",
      "sInfoFiltered": "（trong tổng số _MAX_ bản ghi）",
      "sInfoPostFix":  "",
      "sSearch":       "Tìm:",
      "sUrl":          "",
      "oPaginate": {
          "sFirst":    "Đầu tiên",
          "sPrevious": "Trước",
          "sNext":     "Sau",
          "sLast":     "Cuối cùng"
      }
    }
  });
  
});