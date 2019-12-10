var input1 = document.getElementById("i116");
var input1Center = document.getElementById("i19");

var input2 = document.getElementById("i217");
var input2f = document.getElementById("i21");
var input2Center = document.getElementById("i21");

var input3 = document.getElementById("i311");
var input3f = document.getElementById("i31");
var input3Center = document.getElementById("i33");

var input4 = document.getElementById("i415");
var input4f = document.getElementById("i41");
var input4Center = document.getElementById("i411");

var input5 = document.getElementById("i58");
var input5f = document.getElementById("i51");
var input5Center = document.getElementById("i52");

var input6 = document.getElementById("i610");
var input6f = document.getElementById("i61");
var input6Center = document.getElementById("i67");

var input7 = document.getElementById("i710");
var input7f = document.getElementById("i71");
var input7Center = document.getElementById("i76");

input1.onchange = function() {
    if (input1.value == 'Ь' || input1.value == 'ь')
        input1Center.style.background = "#ccffcc";
}

input2.onchange = function() {
    if ((input2.value == 'Е' || input2.value == 'е') && (input2f.value == 'Э' || input2f.value == 'э'))
        input2Center.style.background = "#ccffcc";
}
input3.onchange = function() {
    if ((input3.value == 'ы' || input3.value == 'Ы') && (input3f.value == 'М' || input3f.value == 'м'))
        input3Center.style.background = "#ccffcc";
}
input4.onchange = function() {
    if ((input4.value == 'Е' || input4.value == 'е') && (input4f.value == 'В' || input4f.value == 'в'))
        input4Center.style.background = "#ccffcc";
}
input5.onchange = function() {
    if ((input5.value == 'Й' || input5.value == 'й') && (input5f.value == 'Ф' || input5f.value == 'ф'))
        input5Center.style.background = "#ccffcc";
}
input6.onchange = function() {
    if ((input6.value == 'Р' || input6.value == 'р') && (input6f.value == 'К' || input6f.value == 'к'))
        input6Center.style.background = "#ccffcc";
}
input7.onchange = function() {
    if ((input7.value == 'Е' || input7.value == 'е') && (input7f.value == 'Г' || input7f.value == 'г'))
        input7Center.style.background = "#ccffcc";
}