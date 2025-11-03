(function renderCards(){
      const tpl = document.getElementById('cardTpl').content;
      const grid = document.querySelector('main section div.grid');
      if(!grid) return;
      // remove placeholders and add 8 cards
      grid.innerHTML = '';
      for(let i=0;i<8;i++){
        const node = tpl.cloneNode(true);
        grid.appendChild(node);
      }
    })();

// Basic quantity control
const decreaseBtn = document.getElementById("decrease");
const increaseBtn = document.getElementById("increase");
const quantityText = document.getElementById("quantity");

let quantity = 1;

increaseBtn.addEventListener("click", () => {
  quantity++;
  quantityText.textContent = quantity;
});

decreaseBtn.addEventListener("click", () => {
  if (quantity > 1) {
    quantity--;
    quantityText.textContent = quantity;
  }
});
