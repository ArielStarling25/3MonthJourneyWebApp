//Body Div
var titleBox = document.getElementsByClassName('titleBox')[0];
var ripple = document.getElementsByClassName('rippleAnimContainer')[0];
var bodyScrollBar = document.getElementsByClassName('leftScroller')[0];
var bodyScrollTitle = document.getElementsByClassName('leftScrollerTitle')[0];

//TailDiv
const dataInsLink = document.getElementsByClassName('dataInsDiv')[0];
const dataInsBtn = document.getElementsByClassName('dataInsBtn')[0];
const gitHubRepoBtn = document.getElementsByClassName('gitHubRepoBtn')[0];
const programRunnerBtn = document.getElementsByClassName('programRunnerBtn')[0];
const mediaBrowserBtn = document.getElementsByClassName('mediaBrowserBtn')[0];
const miniGameBtn = document.getElementsByClassName('miniGameBtn')[0];
const phpCheckBtn = document.getElementsByClassName('phpCheckBtn')[0];

//PS: where it shows ==/ they are places where it should be updated when a new node is added

//Array holding node element objects ==/
const nodes = [
  document.getElementsByClassName('Node1')[0],
  document.getElementsByClassName('Node2')[0],
  document.getElementsByClassName('Node3')[0],
  document.getElementsByClassName('Node4')[0],
  document.getElementsByClassName('Node5')[0],
  document.getElementsByClassName('Node6')[0],
  document.getElementsByClassName('Node7')[0],
  document.getElementsByClassName('Node8')[0],
  document.getElementsByClassName('Node9')[0],
  document.getElementsByClassName('Node10')[0],
  document.getElementsByClassName('Node11')[0],
  document.getElementsByClassName('Node12')[0],
  document.getElementsByClassName('Node13')[0],
  document.getElementsByClassName('Node14')[0],
];

//When the starting button is clicked
document.getElementsByClassName('titleBtn')[0].onclick = function () {
  if (this.value === 'begin') {
    console.log('HEHE');
    console.log('Start button pressed');
    console.log('HEHE');
    this.innerHTML = '...';
    titleBox.classList.add('horizTranslate');
    ripple.classList.add('disappear');
    bodyScrollBar.classList.add('fadeIn');
    bodyScrollTitle.classList.add('fadeIn');
    for (let i = 0; i < nodes.length; i++) {
      nodes[i].classList.add('floatUp');
    }
    dataInsLink.classList.add('fadeIn');
    dataInsBtn.classList.add('fadeIn');
    console.log('HEY');
    gitHubRepoBtn.classList.add('fadeIn');
    programRunnerBtn.classList.add('fadeIn');
    mediaBrowserBtn.classList.add('fadeIn');
    miniGameBtn.classList.add('fadeIn');
    phpCheckBtn.classList.add('fadeIn');
    console.log('FadeIn Complete');
  }
};

//Array holding names of each week node ==/
let nodeState = [];
for (let i = 0; i < nodes.length; i++) {
  nodeState.push(false);
}

//Add another case here in case of new node ==/
function contentGrowth(nd) {
  switch (nd) {
    case 'nd1':
      if (nodeState[0]) {
        nodes[0].classList.remove('growContent');
        nodeState[0] = false;
      } else {
        nodes[0].classList.add('growContent');
        nodeState[0] = true;
      }
      break;
    case 'nd2':
      if (nodeState[1]) {
        nodes[1].classList.remove('growContent');
        nodeState[1] = false;
      } else {
        nodes[1].classList.add('growContent');
        nodeState[1] = true;
      }
      break;
    case 'nd3':
      if (nodeState[2]) {
        nodes[2].classList.remove('growContent');
        nodeState[2] = false;
      } else {
        nodes[2].classList.add('growContent');
        nodeState[2] = true;
      }
      break;
    case 'nd4':
      if (nodeState[3]) {
        nodes[3].classList.remove('growContent');
        nodeState[3] = false;
      } else {
        nodes[3].classList.add('growContent');
        nodeState[3] = true;
      }
      break;
    case 'nd5':
      if (nodeState[4]) {
        nodes[4].classList.remove('growContent');
        nodeState[4] = false;
      } else {
        nodes[4].classList.add('growContent');
        nodeState[4] = true;
      }
      break;
    case 'nd6':
      if (nodeState[5]) {
        nodes[5].classList.remove('growContent');
        nodeState[5] = false;
      } else {
        nodes[5].classList.add('growContent');
        nodeState[5] = true;
      }
      break;
    case 'nd7':
      if (nodeState[6]) {
        nodes[6].classList.remove('growContent');
        nodeState[6] = false;
      } else {
        nodes[6].classList.add('growContent');
        nodeState[6] = true;
      }
      break;
    case 'nd8':
      if (nodeState[7]) {
        nodes[7].classList.remove('growContent');
        nodeState[7] = false;
      } else {
        nodes[7].classList.add('growContent');
        nodeState[7] = true;
      }
      break;
    case 'nd9':
      if (nodeState[8]) {
        nodes[8].classList.remove('growContent');
        nodeState[8] = false;
      } else {
        nodes[8].classList.add('growContent');
        nodeState[8] = true;
      }
      break;
    case 'nd10':
      if (nodeState[9]) {
        nodes[9].classList.remove('growContent');
        nodeState[9] = false;
      } else {
        nodes[9].classList.add('growContent');
        nodeState[9] = true;
      }
      break;
    case 'nd11':
      if (nodeState[10]) {
        nodes[10].classList.remove('growContent');
        nodeState[10] = false;
      } else {
        nodes[10].classList.add('growContent');
        nodeState[10] = true;
      }
      break;
    case 'nd12':
      if (nodeState[11]) {
        nodes[11].classList.remove('growContent');
        nodeState[11] = false;
      } else {
        nodes[11].classList.add('growContent');
        nodeState[11] = true;
      }
      break;
    case 'nd13':
      if (nodeState[12]) {
        nodes[12].classList.remove('growContent');
        nodeState[12] = false;
      } else {
        nodes[12].classList.add('growContent');
        nodeState[12] = true;
      }
      break;
    case 'nd14':
      if (nodeState[13]) {
        nodes[13].classList.remove('growContent');
        nodeState[13] = false;
      } else {
        nodes[13].classList.add('growContent');
        nodeState[13] = true;
      }
      break;
    default:
      this.innerHTML = '...';
    //Nth
  }
}

//event listeners for each node ==/
document.getElementsByClassName('Node1')[0].onclick = function () {
  console.log('Week 1 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node2')[0].onclick = function () {
  console.log('Week 2 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node3')[0].onclick = function () {
  console.log('Week 3 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node4')[0].onclick = function () {
  console.log('Week 4 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node5')[0].onclick = function () {
  console.log('Week 5 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node6')[0].onclick = function () {
  console.log('Week 6 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node7')[0].onclick = function () {
  console.log('Week 7 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node8')[0].onclick = function () {
  console.log('Week 8 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node9')[0].onclick = function () {
  console.log('Week 9 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node10')[0].onclick = function () {
  console.log('Week 10 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node11')[0].onclick = function () {
  console.log('Week 11 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node12')[0].onclick = function () {
  console.log('Week 12 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node13')[0].onclick = function () {
  console.log('Week 13 pressed');
  contentGrowth(this.value);
};

document.getElementsByClassName('Node14')[0].onclick = function () {
  console.log('Week 14 pressed');
  contentGrowth(this.value);
};
