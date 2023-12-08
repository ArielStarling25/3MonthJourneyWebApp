var titleBox = document.getElementsByClassName("titleBox")[0];
var ripple = document.getElementsByClassName("rippleAnimContainer")[0];
var bodyScrollBar = document.getElementsByClassName("leftScroller")[0];
var bodyScrollTitle = document.getElementsByClassName("leftScrollerTitle")[0];

const nodes = [
  document.getElementsByClassName("Node1")[0],
  document.getElementsByClassName("Node2")[0],
  document.getElementsByClassName("Node3")[0],
];

document.getElementsByClassName("titleBtn")[0].onclick = function () {
  if (this.value === "begin") {
    this.innerHTML = "...";
    titleBox.classList.add("horizTranslate");
    ripple.classList.add("disappear");
    bodyScrollBar.classList.add("fadeIn");
    bodyScrollTitle.classList.add("fadeIn");
    for (let i = 0; i < nodes.length; i++) {
      nodes[i].classList.add("floatUp");
    }
  }
};

//Array holding names of each week node
const nodesNames = ["Node1", "Node2", "Node3"];
let nodeState = [];

for (let i = 0; i < nodesNames.length; i++) {
  nodeState.push(false);
}

function contentGrowth(nd) {
  switch (nd) {
    case "nd1":
      if (nodeState[0]) {
        nodes[0].classList.remove("growContent");
        nodeState[0] = false;
      } else {
        nodes[0].classList.add("growContent");
        nodeState[0] = true;
      }
      break;
    case "nd2":
      if (nodeState[1]) {
        nodes[1].classList.remove("growContent");
        nodeState[1] = false;
      } else {
        nodes[1].classList.add("growContent");
        nodeState[1] = true;
      }
      break;
    case "nd3":
      if (nodeState[2]) {
        nodes[2].classList.remove("growContent");
        nodeState[2] = false;
      } else {
        nodes[2].classList.add("growContent");
        nodeState[2] = true;
      }
      break;
    default:
      this.innerHTML = "...";
    //Nth
  }
}

document.getElementsByClassName("Node1")[0].onclick = function () {
  contentGrowth(this.value);
};

document.getElementsByClassName("Node2")[0].onclick = function () {
  contentGrowth(this.value);
};

document.getElementsByClassName("Node3")[0].onclick = function () {
  contentGrowth(this.value);
};
