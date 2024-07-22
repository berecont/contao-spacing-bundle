# Installation  
Erstelle Verzeichnis `/bundles/contao-spacing-bundle/`  
Kopiere den Ordner `src` und die Datei `composer.json` in das Verzeichnis  
```
/src/  
/composer.json
```

ergänze die `/composer.json` der Contao Installation:  
```
    "require": {
        "berecont/contao-spacing-bundle": "^1.0"  
    }


    "repositories": {
        "contao-spacing-bundle": {
            "type": "path",
            "url": "bundles/contao-spacing-bundle"
        }
    }  
```
Starte den Contao Manager.  
In `PAKETE` wird die Erweiterung `berecont/contao-spacing-bundle` als `manuell hinzugefügt` eingetragen.  
Mit `Alle Pakete aktualisieren` wird die Erweiterung installiert.  
Nach der Installation muss die Datenbank aktualisiert werden.  

# Backend  
Im Backend stehen unter `Artikel bearbeiten` zwei neue Felder zur Verfügung:  
`vertikaler Abstand (oben)`  
`vertikaler Abstand (unten)`  
Innerhalb der Auswahllisten kann zwischen drei Abständen gewählt werden:  
`kleiner Abstand` 
`Standard` 
`grosser Abstand`  
Mit der Auswahl `-` wird kein Abstand gesetzt.  

# Dateistruktur  
/bundles/  
--contao-spacing-bundle/  
----src/  
------ContaoManager/   
--------Plugin.php  
------DependencyInjection/   
--------BerecontContaoSpacingExtension.php  
------Listener/  
--------HooksListener.php  
------Resources/  
--------config/  
----------services.yml  
--------contao/  
----------config/  
------------config.php  
----------dca/  
------------tl_article.php  
----------languages/  
------------de/  
--------------default.php  
--------public/   
----------contao_spacing_bundle.scss  
------BerecontContaoSpacingBundle.php  
----composer.json  


