let overlay;
document.querySelectorAll('#product-a, #product-b, #product-c').forEach(function(path) {
  path.onclick = chooseProduct;
})

function chooseProduct(e) {
  if (overlay) overlay.classList.remove('highlight')
  overlay = e.target
  overlay.classList.add('highlight')
}


var el = document.getElementsByClassName("color");
for (var i = 0; i < el.length; i++) {
  el[i].onclick = changeColor;
}

function changeColor(e) {
  let hex = e.target.getAttribute("data-hex");
  if (overlay) overlay.style.fill = hex;
}
