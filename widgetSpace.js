//window.onload = function(){


    ////////////////////////////
    //////Navigation/////////
    ////////////////////////

    //creating reference to the menu button and the navigation menu
    const menuBtn = document.querySelector(".hamburger-btn");
    const navMenu = document.getElementsByTagName("nav")[0];

    menuBtn.addEventListener("click", event =>{
        event.preventDefault();
        navMenu.classList.toggle("active");
        ////console.log("open menu");
    });


    //creating references to the navigation links
    const menuLinks = document.querySelectorAll(".menu-link");

    menuLinks.forEach( link => {
        link.addEventListener("click", ()=>{
            navMenu.classList.toggle("active");
        });
    });

//}//EOF