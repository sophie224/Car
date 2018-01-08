      var showhideMenu = document.getElementById("showhideMenu");
      var logo = document.getElementById("logo");

      showhideMenu.onclick = function(){

        // ნავიგაციის სკრიპტი
        var showAttr = showhideMenu.getAttribute("class");

        $("#menu").slideToggle("slow");
        
        if (showAttr == "showMenu") {
          showhideMenu.removeAttribute("class");
          showhideMenu.setAttribute("class", "hideMenu");
        }
        else {
          showhideMenu.removeAttribute("class");
          showhideMenu.setAttribute("class", "showMenu");
        }
        // ნავიგაციის სკრიპტის დასასრული

        // ლოგოს სკრიპტი

        if (logo.hasAttribute("class")) {
          logo.removeAttribute("class");
        }
        else {
          logo.setAttribute("class", "active");
        }

        // ლოგოს სკრიპტის დასასრული

      }