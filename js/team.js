var i=0,text;
  text = "   MEET OUR TEAM    "

  function typing() {
    if(i<text.length){
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(typing,80);
    }
  }
  typing();


// alert("bonjour tout le monde")