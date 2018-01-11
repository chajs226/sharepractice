var save = document.getElementById('btnSignIn');

btnSignIn.addEventListener('click', function() {

 if ($('#inputEmail').val() == '' ||
      $('#inputPassword').val() == '' ) {
    alert("입력 정보를 다시 확인바랍니다.");
    window.location.search = "?id=signin";
  }
  else {
    $.ajax({
    type: 'POST', // POST형식으로 폼 전송
    dataType: 'json',
    async: false, //true:비동기, false:동기
    url: './signin.php', // 목적지
    data: {
      email: $('#inputEmail').val(),
      password: $('#inputPassword').val()
      },
    success: function (data) {
        console.log(data);
        // $('#response').html(data);
        window.location.href = "index.php"
      },
    error: function (request, status, error) {
        //alert('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
        //console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
        //console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
        console.log(error);
        window.location.search = "?id=signin";
      }
    });
  }
});
