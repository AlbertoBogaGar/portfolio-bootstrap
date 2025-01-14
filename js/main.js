




    
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('ul');
        console.log("Escrolleando");
        
        if (window.scrollY > 50) { 
          nav.classList.add('nav-scrolled');
        } else {
          nav.classList.remove('nav-scrolled');
        }
      });
