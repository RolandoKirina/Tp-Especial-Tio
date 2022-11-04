"use strict"

let botonesEditar = document.querySelectorAll(".devInfo");
let info = document.querySelector(".infoAbout");
let infoNeta = document.querySelectorAll(".infoAbout");

for(let btn of botonesEditar){
    btn.addEventListener("click", ()=>{

        let idSelec = btn.dataset.id;
        infoNeta.forEach(inf => {
            if (inf.id == idSelec) {
                inf.classList.remove("hid");
            }else{
                inf.classList.add("hid");
            }
        });
        
    });
}

