'use strict';

let gridElements = document.querySelectorAll('.grid div');

//setting all the grid elements to an empty block
function reset() {
  for (let i = 0; i < gridElements.length; i++) {
    gridElements[i].textContent = '';
  }
}

reset();

for (let i = 0; i < gridElements.length; i++) {
  gridElements[i].addEventListener('click', function () {
    this.textContent = 'O';
    checkBoard();
  });
}

let gridView = [
  ['', '', ''],
  ['', '', ''],
  ['', '', ''],
];

let gridViewTemp = ['', '', '', '', '', '', '', '', ''];

function checkBoard() {
  for (let i = 0; i < gridViewTemp.length; i++) {
    let item = gridElements[i].textContent;
    gridViewTemp[i] = item;
  }

  let count = 0;
  for (let i = 0; i < gridView.length; i++) {
    for (let u = 0; u < gridView[i].length; u++) {
      gridView[i][u] = gridViewTemp[count];
      count++;
    }
  }

  console.log(gridView);
}

checkBoard();

function performAI() {}
