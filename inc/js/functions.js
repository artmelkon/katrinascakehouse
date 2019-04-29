//####### modal open/close function
/* ################################ */

let modalBtn = document.getElementById("hamburger-btn");
modalBtn.addEventListener("click", modalFn);

function modalFn() {
  modal = document.getElementById("modal");
  modal.classList.toggle("show-modal");
  modalBtn.classList.toggle("move");
  console.log(modal);
}

/* #### modal image display #### */
function displayImg(elm) {
  let modalContainer =document.querySelector('#imageModal'),
  modalImage = document.querySelector('.modal-image')
  modalContainer.style.display = 'block';
  modalImage.src = elm.src;
  //modalImage.style.transform = 'scale(1)';
  modalImage.animate([
    { transform: 'scale(0)' },
    { transform: 'scale(1)' }
  ], {
  duration: 500
  });
};

function closeImg(elm) {
  if(elm) {
    document.querySelector('#imageModal').style.display = 'none';
    document.querySelector('.modal-image').src = '';
  }
}