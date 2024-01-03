'use strict';

let gridElements = document.querySelectorAll('.grid div');

for (let i = 0; i < gridElements.length; i++) {
  gridElements[i].textContent = '';
}
