'use strict';

let secretNumber = Math.trunc(Math.random() * 20) + 1;
// document.querySelector('.number').textContent = secretNumber;

let scoreNumber = 20;
let highScore = 0;

//When the "Check!" button is clicked
document.querySelector('.check').addEventListener('click', function () {
  const guess = Number(document.querySelector('.guess').value);
  console.log(guess, typeof guess);

  //No Input from player
  if (!guess) {
    document.querySelector('.message').textContent = `⛔ No Number ⛔`;

    //Player lands on the correct number
  } else if (guess === secretNumber) {
    document.querySelector('.message').textContent = ` 🎉 Correct Number! 🎉`;
    document.querySelector('.number').textContent = secretNumber;
    document.querySelector('body').style.backgroundColor = '#60b347';
    document.querySelector('.number').style.width = '30rem';

    if (scoreNumber > highScore) {
      highScore = scoreNumber;
      document.querySelector('.highscore').textContent = highScore;
    }
  } else {
    //while the score is greater than 1
    if (scoreNumber > 1) {
      //guess larger than secret number
      if (guess > secretNumber) {
        document.querySelector('.message').textContent = `📈 Too High! 📈`;
        scoreNumber--;
        document.querySelector('.score').textContent = scoreNumber;
        //guess is smaller than secret number
      } else if (guess < secretNumber) {
        document.querySelector('.message').textContent = `📉 Too Low! 📉`;
        scoreNumber--;
        document.querySelector('.score').textContent = scoreNumber;
      }
      //Player has lost when score drops to 0
    } else {
      document.querySelector('.message').textContent = `💥You Lost!💥`;
      scoreNumber--;
      document.querySelector('.score').textContent = scoreNumber;
    }
  }
});

//Resetting the game when the "Again!" button is pressed
document.querySelector('.again').addEventListener('click', function () {
  scoreNumber = 20;
  document.querySelector('.score').textContent = scoreNumber;
  document.querySelector('.number').textContent = '?';
  document.querySelector('.number').style.width = '15rem';
  document.querySelector('body').style.backgroundColor = '#222';

  secretNumber = Math.trunc(Math.random() * 20) + 1;

  document.querySelector('.message').textContent = `Start guessing...`;
  document.querySelector('.guess').value = '';
});
