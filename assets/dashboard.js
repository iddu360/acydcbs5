let arrow = document.querySelectorAll(".d-arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;
    arrowParent.classList.toggle("showMenu");
  });
}
let sidebar = document.querySelector(".dsidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
  sidebar.classList.toggle("dclose");
});

let chart = bb.generate({
  data: {
    columns: [
      ["Blue", 2],
      ["orange", 4],
      ["green", 3],
    ],
    type: "donut",
    onclick: function (d, i) {
      console.log("onclick", d, i);
    },
    onover: function (d, i) {
      console.log("onover", d, i);
    },
    onout: function (d, i) {
      console.log("onout", d, i);
    },
  },
  donut: {
    title: "70",
  },
  bindto: "#donut-chart",
});