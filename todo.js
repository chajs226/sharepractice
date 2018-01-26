$(window).load(function() {
// TODO 조회
  $.ajax({
  type: "POST", // POST형식으로 폼 전송
  url: "./todo_list.php", // 목적지
  timeout: 10000,
  data: {
    "email": <?php $_SESSION['email']; ?>;
  },
  cache: false,
  dataType: "text",
  error: function(xhr, textStatus, errorThrown) { // 전송 실패
      alert("전송에 실패했습니다.");

})


var save = document.getElementById('btnSave');

btnSave.addEventListener('click', function() {

 if ($('#todo_title').val() == '') {
    alert("입력된 내용이 없습니다.");
  }
  else {
    $.ajax({
    type: "POST", // POST형식으로 폼 전송
    url: "./todo.php", // 목적지
    timeout: 10000,
    data: {
      "email": <?php $_SESSION['email'] ?>
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

/* 리스트를 동적으로 추가하는 자바스크립트 소스
  //리스트 그룹에 노드 추가
  var aNode = document.createElement("a");
  aNode.className = "list-group-item list-group-item-action"
  aNode.href = "#"
  //제목
  var h4Node = document.createElement("h4");
  h4Node.className = "list-group-item-heading"
  var h4text = document.createTextNode($('#recipient-name').val());
  h4Node.appendChild(h4text);
  //내용
  var pNode = document.createElement("p");
  pNode.className = "list-group-item-text"
  var ptext = document.createTextNode($('#message-text').val());
  pNode.appendChild(ptext);

  aNode.appendChild(h4Node);
  aNode.appendChild(pNode);

  document.getElementById("todoList").appendChild(aNode);
*/


});
