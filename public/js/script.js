//import Form from "./Form.js";
//import { updateClock } from "./clock.js";

// START FORM CONTACT SCRIPT
// Création du formulaire
const form = new Form("formContact");
form.maskElement('section');
// addEventListener pour changer le comportement en fonction de l'objet
form.getElement('objet').addEventListener('change', () => {form.isSelected('objet', 'serviceProblem', () => {form.showElement('section')}, () => {form.hideElement('section')})});
// addEventListener pour récupérer les données du formulaire
form.formHtml.addEventListener('submit', 
  (event) => { // event contient l'évènement de soumission du formulaire par défaut
      event.preventDefault(); // permet de ne pas soummettre le formulaire
      form.affAnswer();
  }
)
// END FORM CONTACT SCRIPT
