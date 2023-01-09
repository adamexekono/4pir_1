function zamow() {


    var ksztalt = document.getElementById("ksztalt").value;
    var wynik = document.getElementById("wynik");
    var przycisk = document.getElementById("przycisk");


    var R = document.getElementById("R").value;
    var G = document.getElementById("G").value;
    var B = document.getElementById("B").value;

    var tekst = "Zamówiłeś żelka: ";


    if(ksztalt==1){
        tekst+="miś";

    }else if(ksztalt==2) {
        tekst+="żabka";

    }else if(ksztalt==3) {
        tekst+="serce";

    }else {
        tekst+="inny kształt";
    }

    wynik.innerHTML=tekst;
    przycisk.style.backgroundColor="rgb("+R+","+G+","+B+")";

}