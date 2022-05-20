
/* el javaScript hace que al hacer clic en una provincia se muestre el select 
 * con sus monumentos */

const selectElement = document.querySelector('.lugar');

selectElement.addEventListener('change', (event) => {
const resultado = document.querySelector('.resultado');

if (event.target.value == "sevilla"){
    const sevilla = document.getElementById("sevilla");
    sevilla.style.display = "inline";
    huelva.style.display = "none";
    cadiz.style.display = "none";
    malaga.style.display = "none";
    cordoba.style.display = "none";
    jaen.style.display = "none";
    almeria.style.display = "none";
    granada.style.display = "none";
}
else if (event.target.value == "huelva"){
    const huelva = document.getElementById("huelva");
    huelva.style.display = "inline";
    sevilla.style.display = "none";
    cadiz.style.display = "none";
    malaga.style.display = "none";
    cordoba.style.display = "none";
    jaen.style.display = "none";
    almeria.style.display = "none";
    granada.style.display = "none";
}
else if (event.target.value == "granada"){
    const granada = document.getElementById("granada");
    granada.style.display = "inline";
    sevilla.style.display = "none";
    cadiz.style.display = "none";
    malaga.style.display = "none";
    cordoba.style.display = "none";
    jaen.style.display = "none";
    almeria.style.display = "none";
    huelva.style.display = "none";
}
else if (event.target.value == "cadiz"){
    const cadiz = document.getElementById("cadiz");
    cadiz.style.display = "inline";
    sevilla.style.display = "none";
    granada.style.display = "none";
    malaga.style.display = "none";
    cordoba.style.display = "none";
    jaen.style.display = "none";
    almeria.style.display = "none";
    huelva.style.display = "none";
}
else if (event.target.value == "malaga"){
    const malaga = document.getElementById("malaga");
    malaga.style.display = "inline";
    sevilla.style.display = "none";
    cadiz.style.display = "none";
    cordoba.style.display = "none";
    jaen.style.display = "none";
    almeria.style.display = "none";
    huelva.style.display = "none";
    granada.style.display = "none";
}
else if (event.target.value == "almeria"){
    const almeria = document.getElementById("almeria");
    almeria.style.display = "inline";
    sevilla.style.display = "none";
    cadiz.style.display = "none";
    cordoba.style.display = "none";
    jaen.style.display = "none";
    huelva.style.display = "none";
    granada.style.display = "none";
    malaga.style.display = "none";
}
else if (event.target.value == "jaen"){
    const jaen = document.getElementById("jaen");
    jaen.style.display = "inline";
    sevilla.style.display = "none";
    cadiz.style.display = "none";
    cordoba.style.display = "none";
    malaga.style.display = "none";
    huelva.style.display = "none";
    granada.style.display = "none";
    almeria.style.display = "none";
}
else if (event.target.value == "cordoba"){
    const cordoba = document.getElementById("cordoba");
    cordoba.style.display = "inline";
    sevilla.style.display = "none";
    cadiz.style.display = "none";
    jaen.style.display = "none";
    almeria.style.display = "none";
    huelva.style.display = "none";
    granada.style.display = "none";
    malaga.style.display = "none";
}

});











