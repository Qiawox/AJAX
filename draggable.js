function onDragStart(event) {
  event
    .dataTransfer
    .setData('text/plain', event.target.id);
    // localStorage.setItem('move', 1);
    // console.log(document.querySelector(localStorage.getItem('move')));
    // console.log(dropzone);
    
}
function onDragOver(event) {
  event.preventDefault();
}
function onDrop(event) {
  const id = event
    .dataTransfer
    .getData('text');

  const draggableElement = document.getElementById(id);
  const dropzone = event.target;
  dropzone.appendChild(draggableElement);
  event
  .dataTransfer
  .clearData();
  // localStorage.setItem('plane', document.querySelector('.autz').innerHTML);
  // localSorage.setItem('move', document.querySelector('.aphz').innerHTML);
  
}
function dragEnd( event ) {
  localStorage.setItem('plane', document.querySelector('.autz').innerHTML);
  localStorage.setItem('move', document.querySelector('.aphz').innerHTML);
  console.log('privet');
  const plane = localStorage.getItem('plane');
  document.querySelector('.autz').innerHTML = plane;
  const move = localStorage.getItem('move');
  document.querySelector('.aphz').innerHTML = move;
  Loc();
}
function Loc() {
  
  if (document.querySelector('.autz').innerHTML == '') {
    localStorage.setItem('plane', document.querySelector('.autz').innerHTML);
  }
  if (document.querySelector('.aphz').innerHTML == '') {
    localStorage.setItem('move', document.querySelector('.aphz').innerHTML);
  }
  if (localStorage.getItem('move')) {
    const move = localStorage.getItem('move');
    document.querySelector('.aphz').innerHTML = move;
  }
  if (localStorage.getItem('plane')) {
    const plane = localStorage.getItem('plane');
    document.querySelector('.autz').innerHTML = plane;
  }
  
}
Loc();


// const zone1 =  document.querySelector('.autz');
// const zone2 = document.querySelector('.aphz');
// const ufo = document.querySelector('#text');

// zone1.ondragover = allowDrop;
// zone2.ondragover = allowDrop
// function allowDrop(event){
//   event.preventDefault();
// }

// ufo.ondragstart = drag;

// function drag(event){
//   event.dataTransfer.setData('id', event.target.id);
//   localStorage.setItem('id', event.target.id);
// }

// zone1.ondrop = drop;
// zone2.ondrop = drop;
// function drop(event){
//   let itemId = event.dataTransfer.getData('id');
//   console.log(itemId);
//   event.target.append(document.getElementById(itemId));
// }

// function onDragStart2(event) {
//   event
//     .dataTransfer
//     .setData('text/plain', event.target.id2);
// }
// function onDragOver2(event) {
//   event.preventDefault();
// }
// function onDrop(event) {
//   const id2 = event
//     .dataTransfer
//     .getData('text');
    
//     const draggableElement2 = document.getElementById(id2);
//     const dropzone2 = event.target;
//     dropzone2.appendChild(draggableElement2);

//     event
//       .dataTransfer
//       .clearData();
// }