// 동적으로 html 에서 리스트 추가하는 자바스크립트

var save = document.getElementById('btnSave');

btnSave.addEventListener('click', function() {

  var aNode = document.createElement("a");
  aNode.className = "list-group-item list-group-item-action"
  aNode.href = "#"
  var t = document.createTextNode("AAAAAA");
  aNode.appendChild(t);
  document.getElementById("todoList").appendChild(aNode);



});



// $(function() {
//
//
// // configuration
//
// // button
// var add = $('#add');
//
// // list container
// var listContainer = $('#list');
//
//
//
// // click event for button
//
// add.on('click', function() {
//
//      event.preventDefault(); // stop default behaviour of submit button
//     // value of input
//     inputValue = $('#input').val();
//
//     // add new list item
//     listContainer.prepend('<li> ' + inputValue + '</li>');
//     // clear value input
//     $('#input').val('');
//
//
//
// });
//
// });
