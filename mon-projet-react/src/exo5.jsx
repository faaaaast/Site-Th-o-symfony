import React, { useState } from 'react';
import DataTable from "react-data-table-component";

// Définition des colonnes pour le tableau
const columns = [
  {
    name: <b>Nom</b>,
    selector: (row) => row.nom,
    sortable: true,
  },
  {
    name: <b>Prénom</b>,
    selector: (row) => row.prenom,
    sortable: true,
  },
  {
    name: <b>Ville</b>,
    selector: (row) => row.ville,
    sortable: true,
  }
];

// Composant principal (Exercice5)
const Exercice5 = () => {
  // State pour les données du tableau
  const [data, setData] = useState([
    { nom: "Booth", prenom: "Cliff", ville: "Hollywood" },
    { nom: "Lebowski", prenom: "Jeff", ville: "Los Angeles" },
    { nom: "Vega", prenom: "Vincent", ville: "Los Angeles" },
    { nom: "Kiddo", prenom: "Beatrix", ville: "El Paso" },
  ]);

  // Rendu du composant DataTable avec les colonnes et les données
  return (
    <DataTable
      title="Tableau des Utilisateurs" // Titre du tableau
      columns={columns} // Colonnes définies précédemment
      data={data} // Données du tableau
      defaultSortFieldId={1} // Champ de tri par défaut (1 correspond à la deuxième colonne, indexée à partir de 0)
    />
  );
};

export default Exercice5;
