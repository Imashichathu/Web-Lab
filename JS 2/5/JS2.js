function changeBorderStyle() {

    const table = document.getElementById("t");
    if (table.style.border === "1px solid black") {
      table.style.border = "3px dashed black"; 
    } else {
      table.style.border = "1px solid black"; 
    }
  }