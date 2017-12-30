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
    url: "./todo.php", // 목적지
    timeout: 10000,
    data: {
      "recipient-name": $('#recipient-name').val(),
      "message-text": $('#message-text').val()
    },
    cache: false,
    dataType: "text",
    error: function(xhr, textStatus, errorThrown) { // 전송 실패
        alert("전송에 실패했습니다.");
  }
});
}

});
