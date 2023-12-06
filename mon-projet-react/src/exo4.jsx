import { useState } from "react";
import axios from "axios";

const Exercice4 = () => {
  // State pour la valeur de la recherche
  const [recherche, setRecherche] = useState("");

  // State pour la liste des films
  const [liste, setListe] = useState([]);

  // Fonction pour gérer le changement de la valeur de recherche
  const handleChange = (event) => {
    setRecherche(event.target.value);
  };

  // Fonction déclenchée lors du clic sur le bouton de recherche
  const handleClick = () => {
    // Appel à l'API pour récupérer les films en fonction de la recherche
    axios
      .get(
        "http://api.themoviedb.org/3/search/movie?api_key=f33cd318f5135dba306176c13104506a&query=" +
          recherche
      )
      .then((reponse) => {
        // Affichage de la réponse dans la console (à des fins de débogage)
        console.log(reponse);

        // Mise à jour de la liste des films avec les résultats de la recherche
        setListe(reponse.data.results);
      });
  };

  return (
    <div>
      {/* Champ de saisie pour la recherche */}
      <input type="text" value={recherche} onChange={handleChange} />

      {/* Bouton de recherche */}
      <button onClick={handleClick}>Rechercher...</button>

      {/* Affichage des résultats de la recherche */}
      <div>
        {liste.map((film, i) => (
          <div key={i}>
            <div>
              {/* Affichage du titre du film */}
              {film.title}
            </div>

            {/* Affichage de l'image du film avec l'URL de l'affiche */}
            <img
              src={`http://image.tmdb.org/t/p/w185${film.poster_path}`}
              alt=""
            />
          </div>
        ))}
      </div>
    </div>
  );
};

export default Exercice4;
