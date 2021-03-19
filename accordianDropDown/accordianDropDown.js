
     /**
      * Collapses accordian when another is expanded.
      * @param {NodeList} accordians - list containing the clickable elements which triggers accordian expansion.
      * 
      */

     function openOne(accordians){
        //loop through accordians and determine if any are expanded
        accordians.forEach( accordian => {
            let acExpanded = accordian.parentElement.getAttribute("aria-expanded") === "true" || false;
            //if an accordian has aria-expanded value of true and is active
            if(acExpanded && accordian.classList.contains("active")){  
                //reset the active class on the accordian, the aria-expanded attribute on the parent container and the accordian height to zero
                accordian.classList.toggle("active");
                accordian.parentElement.setAttribute("aria-expanded", !acExpanded);
                accordian.nextElementSibling.style.height = 0;
            }
        });
    }

    /**
     * Changes a given container's background to a given image
     * 
     * @param {HTMLElement} ogParent - the parent container whose background will be changed.
     * @param {String} img - the path to the image to change the parent container background to
     */
    function setBackground(ogParent, img){
        ogParent.style.backgroundImage = "url('accordianDropDown/"+ img +"')";
        ogParent.style.backgroundSize = "cover";
        ogParent.style.backgroundPosition = "center";
        ogParent.style.backgroundRepeat = "no-repeat";
    }
    
    //create references to the accordian option buttons
    const accordianOptBtns = document.querySelectorAll("input[type='radio']");
    //create reference to the accordians and the container holding all items
    const container = document.querySelector(".accordian");
    const accordianBtns = document.querySelectorAll(".dd-title");
    let onlyOneFlag = false;

    accordianOptBtns.forEach( btn => {
      btn.addEventListener("click", () =>{
        //reset all accordian state
        //console.log("reset all accordian states"); 
        openOne(accordianBtns);
        container.style.background = "none";
        container.style.backgroundColor = "var(--bg0-blue)";
        //determine how to handle individual accordian expansion based on clicked buttons value
         switch(btn.value){
             case "All Remain Open":
                    onlyOneFlag = false;
                 break;
             case "One and Done":
                    onlyOneFlag = true;
                 break;
         }
      });
    });

    
    accordianBtns.forEach( btn => {
       btn.addEventListener("click", function(){
          // ////console.log("Expand accordian");
           //Determine whether accordian was expanded
            let expanded = btn.parentElement.getAttribute("aria-expanded") === "true" || false;
            this.classList.toggle("active");
            //reference the text content of the accordian to derive the height to which the accordian should expand.
            const accordianText = this.nextElementSibling;
          
            //////console.log("THis the image:", accordianImg);
            if(this.classList.contains("active")){
                //expand the hidden text content to the proper height
                accordianText.style.height = accordianText.scrollHeight + "px";
                setBackground(container, this.getAttribute("data-image"));
                //if other accordians are expanded, collapse them 
                if(onlyOneFlag){
                    openOne(accordianBtns);
                }
                //only after all other accordian's aria-expanded values have been set to false, set current to true
                btn.parentElement.setAttribute("aria-expanded", !expanded);
            }else{
                btn.parentElement.setAttribute("aria-expanded", !expanded);
                accordianText.style.height = 0;
            }
       });
    });


//EOF
