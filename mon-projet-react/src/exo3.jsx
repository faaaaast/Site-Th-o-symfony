import { useState } from "react";

const Exercice3 = () => {
  // State pour la valeur du texte saisi
  const [texte, setTexte] = useState("");

  // State pour la liste d'éléments
  const [liste, setListe] = useState(["aa", "bb", "cc"]);

  // Fonction pour gérer le changement de la valeur du texte saisi
  const handleChange = (event) => {
    setTexte(event.target.value);
  };

  // Fonction déclenchée lors du clic sur le bouton "Ajouter"
  const handleClick = () => {
    // Version utilisant une variable temporaire (commentée)
    // let tmp = [...liste];
    // tmp.push(texte);
    // setListe(tmp);

    // Version utilisant la propagation (spread) et la mise à jour directe
    setListe([...liste, texte]);
  };

  return (
    <div>
      {/* Champ de saisie pour le texte */}
      <input type="text" value={texte} onChange={handleChange} />

      {/* Bouton pour ajouter le texte à la liste */}
      <button onClick={handleClick}>Ajouter</button>

      {/* Affichage de la liste des éléments */}
      <div>
        {liste.map((element, i) => (
          <div key={i}>
            {/* Affichage de chaque élément de la liste */}
            {element}
          </div>
        ))}
      </div>
    </div>
  );
}

export default Exercice3;
