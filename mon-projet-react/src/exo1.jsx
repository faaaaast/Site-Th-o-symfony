import { useState } from "react";

// Composant principal (Exercice1)
const Exercice1 = () => {
  // States pour le nom et le prénom
  const [nom, setNom] = useState("");
  const [prenom, setPrenom] = useState("");

  // Fonction pour gérer le changement de la valeur du champ "Nom"
  const handleChangeNom = (event) => {
    setNom(event.target.value);
  };

  // Fonction pour gérer le changement de la valeur du champ "Prénom"
  const handleChangePrenom = (event) => {
    setPrenom(event.target.value);
  };

  // Rendu du composant
  return (
    <>
      {/* Champ de saisie pour le nom */}
      <input type="text" value={nom} onChange={handleChangeNom} />
      <br />

      {/* Champ de saisie pour le prénom */}
      <input type="text" value={prenom} onChange={handleChangePrenom} />
      <br />

      {/* Affichage du message de salutation */}
      <span>Bonjour {prenom} {nom}</span>
    </>
  );
}

export default Exercice1;

