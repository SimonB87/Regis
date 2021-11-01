function copy() {
  const target = this.parentElement.innerText;
  navigator.clipboard.writeText(target);
}

const icons = document.querySelectorAll(".toCopyIcon");
icons.forEach(function(icon,ids){
  icon.addEventListener("click",copy)
});