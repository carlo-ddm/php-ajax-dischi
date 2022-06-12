<?php
// **Seconda Milestone:**
// Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue CDN.
// Questo file lo chiamate index-vue.html che chiamerà via axios un file che si chiamerà api.php.
// api.php includerà lo stesso “database” che viene incluso anche in index.php



include __DIR__ ."/assets/database/json.php";
// trasformare file php in json
header("Content-Type: application/json");
// traduce il contenuto del file php in json
echo json_encode($dischi);
?>