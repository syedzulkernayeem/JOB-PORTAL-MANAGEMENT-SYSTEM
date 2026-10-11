document.querySelectorAll('form').forEach(form=>form.addEventListener('submit',()=>{const btn=form.querySelector('.submit');if(btn){btn.disabled=true;btn.textContent='Saving...';}}));
