var save = document.getElementById('btnSignUp');

btnSignUp.addEventListener('click', function() {

 if ($('#inputEmail').val() == '' ||
      $('#inputNickname').val() == '' ||
      $('#inputPassword').val() == '' ||
      $('#inputConfirmPassword').val() == '' ) {
    alert("입력 정보를 다시 확인바랍니다.");
    window.location.href = "index.php?id=signup";
  }
  else if ($('#inputPassword').val() != $('#inputConfirmPassword').val())  {
    alert("비밀번호가 틀렸습니다. 입력 정보를 다시 확인바랍니다.");
    window.location.href = "index.php?id=signup";
  }
  else {
    $.ajax({
    type: 'POST', // POST형식으로 폼 전송
    dataType: 'json',
    async: false, //true:비동기, false:동기
    url: './signup.php', // 목적지
    data: {
      email: $('#inputEmail').val(),
      nickname: $('#inputNickname').val(),
      password: $('#inputPassword').val()
      },
    success: function (data) {
        console.log(data);
        $('#response').html(data);
        //location.replace('index.php?id=signin');
        // window.location.href = "index.php";
        // window.location.search = "?id=signin"
      },
    error: function (request, status, error) {
        //alert('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
        //console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
        //console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
        console.log(error);
        //window.location.href = "index.php?id=signup";
      }
    });
  }
});
