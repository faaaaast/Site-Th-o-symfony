import { useState } from "react";

// Composant principal (Exercice2)
const Exercice2 = () => {
  // State pour le compteur
  const [compteur, setCompteur] = useState(0);

  // Fonction déclenchée lors du clic sur le bouton
  const handleClick = () => {
    // Mise à jour du compteur en incrémentant sa valeur actuelle
    setCompteur(compteur + 1);
  };

  // Rendu du composant
  return (
    <div>
      {/* Bouton avec gestion du clic et affichage du compteur */}
      <button onClick={handleClick}>Compteur = {compteur}</button>
    </div>
  );
};

export default Exercice2;
