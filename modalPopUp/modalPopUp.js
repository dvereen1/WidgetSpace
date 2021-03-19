//window.onload = function(){
 

  ////////////////////
 /////// Modal //////
////////////////////

//creating references to modal button, modal close button, the modal itself and the modal close button
const openModalBtn = document.querySelector(".modal-open-btn");
const modalBg = document.querySelector(".modal-bg");
const modal = document.querySelector(".modal-modal-content");
const closeModalBtn = document.querySelector(".modal-modal-closer");

//an array holding modal elements
const modalArr = [modalBg, modal];

openModalBtn.addEventListener("click", () => {
    //Add active class and a class which triggers opacity animation to give a fade in effect
    modalArr.forEach( item => {
        item.classList.add("active", "modal-modal-revealer");
    });
}); 

closeModalBtn.addEventListener("click", () => {
    //console.log("close modal");
    modalArr.forEach( item => {
        item.classList.remove("active", "modal-modal-revealer");
    });
});


//}//EOF

