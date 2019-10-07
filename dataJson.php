<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>Parsing JSon/JavaScript</title>
    <meta charset="utf-8" />
</head>
<body>
<script language="JavaScript">
    // A : moto
    // B : auto
    // C : poids lourds
    // D : transport en commun
    let permis =s
        [{
            "nom": "Riri",
            "permis": ["B"],
            "vehicule": [{
                "marque": "Peugeot",
                "modele": "308",
                "moteur": "HDI"
            }, {
                "marque": "Renault",
                "modele": "Clio",
                "moteur": "dCi"
            }, {
                "marque": "Lamborghini",
                "modele": "Reventon",
                "moteur": "V12"
            }]
        }, {
            "nom": "Fifi",
            "permis": ["A", "B"],
            "vehicule": [{
                "marque": "Citroen",
                "modele": "C3",
                "moteur": "VTi"
            }, {
                "marque": "Yamaha",
                "modele": "600",
                "moteur": "essence"
            }]
        },
            {
                "nom": "Loulou",
                "permis": ["B"],
                "vehicule": [{
                    "marque": "Peugeot",
                    "modele": "306",
                    "moteur": "HDI"
                }, {
                    "marque": "Ford",
                    "modele": "Focus",
                    "moteur": "TDCi"
                }]
            }
        ]
    let textHTML = "" // liste des véhicules
    let nom = "";
    let marque = "";
    let modele = "";
    for (i in permis) {
        textHTML += "<h1> Véhicules de " + ###TODO## + "</h1>";
        for (j in permis[i].vehicule) {
            textHTML += ###TODO## + " " + ###TODO## + "<br>";
        }
    }
    document.write(textHTML);
</script>
</body>
</html>
