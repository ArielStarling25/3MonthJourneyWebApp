'use strict';

const gridElements = document.querySelectorAll('.grid div');
const botSwitch = document.getElementsByClassName('switch')[0];
const promptBox = document.getElementsByClassName('prompt')[0];
let winCond = '';
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
      checkWin();
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
  if (winCond == '') {
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
  } else {
    promptBox.textContent = 'Player ' + winCond + ' Wins';
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

//Win condition, kinda hard ngl
function checkWin() {
  let winCondition = false;
  let winPlayer = '';
  for (let i = 0; i < gridView.length; i++) {
    let item = gridView[i][0];
    if (item != '') {
      if (item == gridView[i][0 + 1] && item == gridView[i][0 + 2]) {
        //win
        winCondition = true;
        winPlayer = item;
        break;
      }
    }
  }

  if (!winCondition) {
    for (let i = 0; i < gridView[0].length; i++) {
      let item = gridView[0][i];
      if (item != '') {
        if (item == gridView[0 + 1][i] && item == gridView[0 + 2][i]) {
          //win
          winCondition = true;
          winPlayer = item;
          break;
        }
      }
    }
  }

  if (!winCondition) {
    let gridItem = gridView[0][0];
    if (gridItem != '') {
      if (gridItem == gridView[1][1] && gridItem == gridView[2][2]) {
        winCondition = true;
        winPlayer = gridItem;
      }
    }
  }

  if (!winCondition) {
    let gridItem = gridView[2][0];
    if (gridItem != '') {
      if (gridItem == gridView[1][1] && gridItem == gridView[0][2]) {
        winCondition = true;
        winPlayer = gridItem;
      }
    }
  }

  console.log('Win condition: ', winCondition, 'Win player: ', winPlayer);
  if (winCondition) {
    if (winPlayer == 'O') {
      winCond = '1';
    } else if (winPlayer == 'X') {
      winCond = '2';
    }
  }
}

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
