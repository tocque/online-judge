var host = window.location.host;

$("#submit_normal").click(function () {
   $err = $("#err_normal");
   $err.text('');

   var runid = $("#runid").val();
    $.ajax({
        type: "post",
        url: 'http://' + host + '/admin/rejudge-status',
        dataType: 'json',
        async: false,
        data: {
            runid: runid,
        },
        success: function(resp) {
            if (resp.code == 0) {
                $err.removeClass('error-text').addClass('success-text').text(resp.data);
            } else {
                $err.removeClass('success-text').addClass('error-text').text(resp.data);
            }
        },
        error: function() {
            $err.removeClass('success-text').addClass('error-text').text('获取JSON数据异常');
        }
    });
});