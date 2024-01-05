'use strict';

const gridElements = document.querySelectorAll('.grid div');
const botSwitch = document.getElementsByClassName('switch')[0];
const promptBox = document.getElementsByClassName('prompt')[0];
let player1Turn = true;
let boardOccupancyCount = 0;

//setting all the grid elements to an empty block
function reset() {
  for (let i = 0; i < gridElements.length; i++) {
    gridElements[i].textContent = '';
  }
}

reset();

//Setting up background board functionality
for (let i = 0; i < gridElements.length; i++) {
  gridElements[i].addEventListener('click', function () {
    if (boardOccupancyCount < 9) {
      alternateClick(this);
      checkBoard();
    } else {
      document.querySelector('.prompt').textContent = 'Game Over';
    }
  });
}

let gridView = [
  ['', '', ''],
  ['', '', ''],
  ['', '', ''],
];

let gridViewTemp = ['', '', '', '', '', '', '', '', ''];

function alternateClick(node) {
  if (node.textContent == 'O' || node.textContent == 'X') {
    promptBox.textContent = 'You cant do that...';
  } else {
    if (player1Turn) {
      player1Turn = false;
      node.textContent = 'O';
      promptBox.textContent = 'Player 2 turn...';
    } else {
      player1Turn = true;
      node.textContent = 'X';
      promptBox.textContent = 'Player 1 turn...';
    }
  }
}

function checkBoard() {
  for (let i = 0; i < gridViewTemp.length; i++) {
    let item = gridElements[i].textContent;
    gridViewTemp[i] = item;
    if (item == 'O' || item == 'X') {
      boardOccupancyCount++;
    }
  }

  let count = 0;
  for (let i = 0; i < gridView.length; i++) {
    for (let u = 0; u < gridView[i].length; u++) {
      gridView[i][u] = gridViewTemp[count];
      count++;
    }
  }

  console.log(gridView, boardOccupancyCount);
  boardOccupancyCount = 0;
}

checkBoard();

//Bot Functionality
function performAI() {}

let switchToggle = true;
botSwitch.onclick = function () {
  console.log('Switch Toggled from: ', switchToggle);
  if (switchToggle) {
    switchToggle = false;
    this.classList.remove('activated');
  } else {
    switchToggle = true;
    this.classList.add('activated');
  }
};
