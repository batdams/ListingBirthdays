export default class Form //export default = on va l'importer dans un autre fichier
{
    // définition du constructeur
    constructor(id) {
        this.id = id;
        this.formHtml = document.getElementById(id);
        this.formData = new FormData(this.formHtml);
        this.answers = new Array();
    }
    // Récupérer le DIV Parent
    getDiv(id) {
        return document.getElementById(id).parentNode;
    }
    // Récupérer un élément
    getElement(id) {
        return document.getElementById(id);
    }
    // Masquer un élément sans animation
    maskElement(id) {
        let divElement = this.getDiv(id);
        divElement.classList.add("mask");
        this.getElement(id).required = false; // On retire l'attribut required pour pouvoir remplir le formulaire
    }
    // Afficher un élément avec animation
    showElement(id) {
        this.getDiv(id).classList.remove('disp');
        this.getDiv(id).classList.add("app");
        this.getElement(id).required = true;
    }
    // Masquer un élément avec animation
    hideElement(id) {
        this.getDiv(id).classList.remove('app');
        this.getDiv(id).classList.add("disp");
        this.getElement(id).required = false
    }
    // Savoir si un radio est selectionné
    isSelected(id, value, action, otherAction) {
        // On instancie FormData pour l'actualiser
        this.formData = new FormData(this.formHtml);
        if (this.formData.get(id) == value) {
            action();
        } else {
            otherAction();
        }
    }
    // Récupérer les éléments de chaque input (et les ajouter à notre tableau answer)
    getAnswer() {
        this.formdata = new FormData(this.formHtml);
        this.formdata.forEach(
            (value, key) => {
                if(value != "" && value != "on") {
                this.answers.push([key, value]);
                }
            }
        )
        return this.answers;
    }
    // Afficher les résultats dans un alert
    affAnswer() {
        let chaine = "Récapitulatif\n\n";
        for (let ligne of this.getAnswer()) {
            chaine += `${ligne[0]} : ${ligne[1]}\n`;
        }
        alert(chaine);
    }
}