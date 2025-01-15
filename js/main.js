




    
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('nav');
        //const elements = this.document.getElementById("content-nav")
        //console.log("Escrolleando");
        
        if (window.scrollY > 20) {
          nav.classList.remove("navegacion");
         nav.classList.add('nav-scrolled');
        //elements.classList.add('nav-scrolled');  
        } else {
          nav.classList.remove('nav-scrolled');
          nav.classList.add("navegacion");
          //elements.classList.remove('nav-scrolled');
        }
      });
