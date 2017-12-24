var save = document.getElementById('btnSave');

btnSave.addEventListener('click', function() {

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

  //var t = document.createTextNode("AAAAAA");
  //aNode.appendChild(t);
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
