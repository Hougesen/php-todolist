let tasks = document.querySelectorAll(".taskItem");

for (let i = 0; i < tasks.length; i++) {
  tasks[i].addEventListener("click", function () {
    tasks[i].style.textDecoration = "line-through";
  });
}
