function display() {
  var tr = document.querySelectorAll('tr:nth-last-child(-n+5):not(:last-child)'); // on récupère les tr avec la classe masque-onload.
  
  console.log(tr);
    
  // on boucle sur les nodes récupérés, et on ajoute la classe "masque" si elle n'y est pas, ou bien on l'enlève.
  tr.forEach(function (el) {
    el.classList.toggle('masque');
  });
}