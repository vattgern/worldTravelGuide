let sidebarItems = document.querySelectorAll('.sidebar-list-item');
let views = document.querySelectorAll('.app-content');
sidebarItems.forEach( item =>{
   item.addEventListener('click',()=>{
      sidebarItems.forEach( list =>{
         list.classList.remove('active');
      });
      item.classList.add('active');
      if(item.id === 'side-users'){
         views.forEach(view =>{
            if(view.id === 'users'){
               view.style.display = 'block';
            } else{
               view.style.display = 'none';
            }
         });
      } else if(item.id === 'side-request'){
         views.forEach(view =>{
            if(view.id === 'requests'){
               view.style.display = 'block';
            } else{
               view.style.display = 'none';
            }
         });
      } else if(item.id === 'side-subscribe'){
         views.forEach(view =>{
            if(view.id === 'subscribes'){
               view.style.display = 'block';
            } else{
               view.style.display = 'none';
            }
         });
      }
   });
});