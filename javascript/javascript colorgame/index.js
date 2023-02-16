function Placecolor() {
    let aColor = ['red', 'lightblue', 'lime','blue','darkblue','purple',' green',' pink','yellow' ];
let teller;
for (teller = 0; teller <= 8; teller=teller + 1) {
   console.log("de teller=" + teller)
   console.log(" de kleur=" + aColor[teller])
   document.getElementById("div" +teller).style.backgroundColor = aColor[teller];
   document.getElementById("div10").style.backgroundColor = aColor[0];
}

}