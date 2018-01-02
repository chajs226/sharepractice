var save = document.getElementById('btnSignUp');

btnSignUp.addEventListener('click', function() {

 if ($('#inputEmail').val() == '' ||
      $('#inputNickname').val() == '' ||
      $('#inputPassword').val() == '' ||
      $('#inputConfirmPassword').val() == '' ) {
    alert("입력 정보를 다시 확인바랍니다.");
  }
  else {
    $.ajax({
    type: "POST", // POST형식으로 폼 전송
    url: "./signup.php", // 목적지
    timeout: 10000,
    data: {
      "email": $('#inputEmail').val(),
      "nicname": $('#inputNickname').val(),
      "password": $('#inputPassword').val()
    },
    cache: false,
    dataType: "text",
    success:function(args){
      // $('#resultComment').html("환영합니다.");
      alert("환영합니다.");
    },
    error: function(e) { // 전송 실패
        alert(e.responseText);
  }
});
}

});
