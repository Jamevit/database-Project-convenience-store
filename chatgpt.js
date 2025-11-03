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

