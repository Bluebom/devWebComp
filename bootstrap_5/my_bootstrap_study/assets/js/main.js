// variables
const navbar = document.querySelector('#navbar')
const list = document.querySelector('#list');
let navbarA = navbar.children[0];
let listA = list.children[0];

// change on click
document.addEventListener('click', (e) => {
  let et = e.target;
  console.log(et); 
  for($i = 0; $i < navbar.children.length; $i++){
    if(navbar.children[$i] == et && !navbar.children[$i].classList.contains('active')){
      changeClassNavbar(navbarA, navbar.children[$i]);
      navbarA = navbar.children[$i];
      changeClassList(listA, list.children[$i]);
      listA = list.children[$i];
    }
    if(list.children[$i] == et && !list.children[$i].classList.contains('active')){
      changeClassList(listA, list.children[$i]);
      listA = list.children[$i];
      changeClassNavbar(navbarA, navbar.children[$i]);
      navbarA = navbar.children[$i];
    }
  }
})

// smothScroll


// métodos
function changeClassNavbar(pre, pos){
  pre.classList.remove('active');
  pos.classList.add('active');
}


function changeClassList(pre, pos){
  pre.classList.remove('bg-blue-default');
  pre.removeAttribute('aria-current', 'true')
  pos.classList.add('bg-blue-default');
  pos.setAttribute('aria-current', 'true')
}