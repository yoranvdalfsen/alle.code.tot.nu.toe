function validateForm() {
    let x = document.forms["myForm"]["vnaam"].value;
    let L = document.forms["myForm"]["anaam"].value;
    let y = document.forms["myForm"]["adres"].value;
    let z = document.forms["myForm"]["plaats"].value;
    let F = document.forms["myForm"]["pc"].value;

    if (x == "") {
      alert(" Vnaam moet ingevuld zijn");
      var input = document.getElementById('vnaam');
      input.style.backgroundColor ="rgba(255,0,0,0.4)";
      return false;
    }
    else{
        var input = document.getElementById('vnaam');
      input.style.backgroundColor ="rgba(255,255,255)";

    }
    if (L == "") {
        alert("achternaam  moet ingevuld zijn");
        var input = document.getElementById('anaam');
      input.style.backgroundColor ="rgba(255,0,0,0.4)";
        return false;
      }
      else{
        var input = document.getElementById('anaam');
      input.style.backgroundColor ="rgba(255,255,255)";

    }
    if (y == "") {
        alert(" adres moet ingevuld zijn");
        var input = document.getElementById('adres');
      input.style.backgroundColor ="rgba(255,0,0,0.4)";
        return false;
      }
      else{
        var input = document.getElementById('adres');
      input.style.backgroundColor ="rgba(255,255,255)";

    }
      if (F == "") {
        alert("postcode  moet ingevuld zijn");
        var input = document.getElementById('pc');
      input.style.backgroundColor ="rgba(255,0,0,0.4)";
        return false;
      }
      else{
        var input = document.getElementById('pc');
      input.style.backgroundColor ="rgba(255,255,255)";

    }
    
      if (z == "") {
        alert("Plaats  moet ingevuld zijn");
        var input = document.getElementById('plaats');
      input.style.backgroundColor ="rgba(255,0,0,0.4)";
        return false;
      }
      else{
        var input = document.getElementById('plaats');
      input.style.backgroundColor ="rgba(255,255,255)";

    }
   

  }

  function checkvnaam(){
    let vnaam= document.getElementById("vnaam").value;
      let lengtevnaam = vnaam.length
      if(lengtevnaam > 10){
        document.getElementById("vnaam").style.backgroundColor = "red"
        document.getElementById("ErrorvNaam").innerHTML = "voornaam mag niet langer dan 10 tekens"
      } 
      else{
        document.getElementById("vnaam").style.backgroundColor = "green"
        document.getElementById("ErrorvNaam").innerHTML = ""
      }
    }
    function checkanaam(){
      let anaam= document.getElementById("anaam").value;
      let lengteanaam = anaam.length

      if(lengteanaam  > 10){
        document.getElementById("anaam").style.backgroundColor = "red"
        document.getElementById("ErroraNaam").innerHTML = "achternaam mag niet langer dan 10 tekens"
      } 
      else{
        document.getElementById("anaam").style.backgroundColor = "green"
        document.getElementById("ErroraNaam").innerHTML = ""
      }
    } 
      function checkpc(){
        let pc= document.getElementById("pc").value;
          let lengtepc = pc.length
          if(lengtepc == 6){
            document.getElementById("pc").style.backgroundColor = "green"
            document.getElementById("Errorpc").innerHTML = ""
          } 
          else{
            document.getElementById("pc").style.backgroundColor = "red"
            document.getElementById("Errorpc").innerHTML = "vul uw postcode goed in"

  
          }
      
        


  }
