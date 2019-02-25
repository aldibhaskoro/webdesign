function send() {
     var x, z, a, i;
    x = document.getElementById("inputnama");
    z = document.getElementById("inputchat");
    a = document.getElementById("send");
    i = document.getElementById("output1");

    a.addEventListener("click", function() {
        var newp1 = document.createElement("p");
        newp1.innerHTML = x.value;
        var newp2 = document.createElement("p");
        newp2.innerHTML = z.value;
        i.appendChild(newp1);
        x.value = "";

    });
}

function clear() {
  
}


function sesuatu() {

    var h1 = document.createElement("h1");
    h1.appendChild(document.createTextNode("Chat Board"));

    var badan = document.getElementById("jees");
 
    var div1 = document.createElement("div");
 
    var p1 = document.createElement("p");
    p1.appendChild(document.createTextNode("Nama Mahasiswa :"));
 
    var input1 = document.createElement("input");
    input1.setAttribute("type", "text");
    input1.setAttribute("id", "inputnama");
 
    var p2 = document.createElement("p");
    p2.appendChild(document.createTextNode("Chat :"));
 
    var input2 = document.createElement("input");
    input2.setAttribute("type", "text");
    input2.setAttribute("id", "inputchat");

    var input3 = document.createElement("input");
    input3.setAttribute("type", "button");
    input3.setAttribute("id", "send");
    input3.setAttribute("value", "Send!");
    input3.setAttribute("onclick", "send()");

    var input4 = document.createElement("input");
    input4.setAttribute("type", "button");
    input4.setAttribute("id", "clear");
    input4.setAttribute("value", "Clear!");
    input4.setAttribute("onclick", "clear()");
   

    var br1 = document.createElement("br");
    br1.appendChild(document.createTextNode(""));

    var br2 = document.createElement("br");
    br2.appendChild(document.createTextNode(""));
 
    var div2 = document.createElement("div");
    div2.setAttribute("id", "div2");

    var p3 = document.createElement("p");
    p3.setAttribute("id", "output1");
    var p4 = document.createElement("p");
    p4.setAttribute("id", "output2");


    badan.appendChild(h1);
    badan.appendChild(div1);
    badan.appendChild(div2);

    div1.appendChild(p1);
    div1.appendChild(input1);
    div1.appendChild(p2);
    div1.appendChild(input2);
    div1.appendChild(br1);
    div1.appendChild(br2);
    div1.appendChild(input3);
    div2.appendChild(p3);
    div2.appendChild(p4);
    div1.appendChild(input4);
}

