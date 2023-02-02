<div>
    <h4 class ="m2">GNU Image Manipulation Program</h4>

    <p class="m1">Bildformate: .jpg, .gif, .png</p>
    <p>Links: Werkzeugleiste</p>
    <p class="m1">Rechts: Paletten</p>

    <p class="m1">Gimp Programm anpassen: Bearbeiten > Einstellungen > Oberfläche</p>
    <p><span class = "strong">Bildgröße ändern (verkleinern)</span> – Bild > Bild skalieren</p>
    <p>Kubisch: Pixel werden gleichmäßig entfernt und für die übrigen wird ein Farbmittelwert aus den gelöschten und den verbleibenden errechnet.</p>
    <p class="m1"><span class="strong">Bildgröße ändern (vergrößern)</span>Bildinformation muss erfunden werden, Mischung aus benachbarten Farben</p>

    <p class="m1">Engl. beschneiden - crop</p>
    
    <p class="m2 strong">Bilder nebeneinander ansehen: Menü > Fenster > Einzelfenstermodus</p>
    
    <h4>Bildverbesserung</h4>
    
    <img src="img/gimp/gimp1.jpg" class="iW-500" alt="gimp">

    <ul class="m1">
        <li>Bilder sollten immer einen geraden Horizont haben (schiefer Horizont)</li>
        <li>Farben (blass/starker Kontrast, ausgewaschen)</li>
        <li>Bild ist leicht nach hinten gekippt, stürzende Linie</li>
    </ul>

<p class="m3 fC-red">Erste Frage bei der Verbesserung: Passt das Foto perspektivisch zusammen?</p>	

<h4 class="m1">Hilfslinien</h4>

<p><span class="strong">Hilfslinien erstellen:</span> im Lineal linke Maustaste drücken und nach unten ziehen, bei genauer Angabe: Menü > Bild > Hilfslinien > Neue Hilfslinien (Vereinfachung durch Definierung einer Tastenkombination: Bearbeiten > Tastenkombinationen)</p>
<p><span class="strong">Hilfslinie verschieben:</span> im Werkzeugkasten den Werkzeugmodus auf „Ebene oder Hilfsline auswählen“, dann kann die Linie verschieben werden</p>
<p class="m2"><span class="strong">Hilfslinien löschen:</span> waagrechte nach rechts oder links aus dem Bild ziehen, senkrechte nach oben oder unten aus dem Bild ziehen</p>

<p class="strong m1">Bilder drehen (Vereinheitlichtes Transformationswerkzeug)
</p>

<p class = "m3"><span class="strong">Bild drehen:</span> Menü > Ebene > Transformation > Beliebig drehen, linke Maustaste gedrückt halten und Bild drehen</p>


<h4 class="m1">Stürzende Linien</h4>

<p class="m1">Um das Bild auszugleichen muss dieses verzehrt werden. (oberes Ende nach außen verzehren)</p>

<ul class="m1">
    <li>mit senkrechten Hilfslinien arbeiten</li>
    <li>Werkzeug > Transformationen > Vereinheitlichte Transformation (um das Werkzeug nur in eine Richtung zu benutzen Shift gedrückt halten</li>
</ul>

<img src="img/gimp/gimp2.jpg" class="iW-500 m3" alt="gimp">

<h4>Kontrast anpassen</h4>
<p class="fS-08 m1">= bedeutet die Größe der Bandbreite zwischen den Farben (dunkel/hell)</p>

<div class="flex-center m1">
    <img src="img/gimp/gimp3.jpg" class="iW-200" alt="gimp">
    <p>Bsp. Nicht wirklich starke schwarz oder weiß Töne, wie durch Nebel</p>
</div>

<p class="m1"><span class="strong">Farbwerte anpassen:</span> Menü > Farben > Werte (in der Grafik werden die Helligkeitswerte angezeigt – wie viele Pixel welche Farbe haben)</p>

<p class="m1">Bei Kontrast ist darauf zu achten das schwarze und weiße Werte im Bild ausgeglichen sind (für Bsp.: den Regler unter der Graphik verschieben um schwarz und weiß unter die Werte zu setzen)</p>

<div class="flex-center m2">
    <p class ="strong">Ergebnis:</p>
    <img src="img/gimp/gimp4.jpg" class="iW-200" alt="gimp">
</div>


<h4>Übung (Bild drehen, stürzende Linie, Kontrast)</h4>

<div class="flex-center m1">
    <div>
        <img src="img/gimp/gimp5.jpg" class="iW-400" alt="gimp">
        <p class="ml1 strong">Vorher</p>
    </div> 
    <div>
        <img src="img/gimp/gimp6.jpg" class="iW-400" alt="gimp">
        <p class="ml1 strong">Nachher</p>
    </div>
</div>

<p class="m3"><span class="strong">Journal:</span> Im Werkzeugkasten findet man das Journal (3. Tab: gelber Pfeil nach links, unter den Werkzeugen) hier werden alle Bearbeitungsschritte aufgelistet und es ist möglich auf frühere Schritte zurückzuspringen.</p>


<h4 class="m1">Arbeiten mit Ebenen</h4>

<p class="strong">Neue Datei in GIMP erstellen</p>
<p class="m1">= Datei > Neu > Größe bestimmen</p>

<p class="m2"><span class="strong">Hintergrund/Vordergrund Farben: </span>Symbol im Werkzeugkasten unter den Werkzeugen, für die Änderung anklicken und Werte bestimmen (RGB Werte 0 = schwarz, RGB Werte 100 = weiß)<span class="fC-red">ACHTUNG!!: über der Leiste zwei mögl. Varianten 0-100% Werte und 0-255 Werte RGB möglich, wir arbeiten mit 256 Möglichkeiten daher immer zweite Variante</span></p>

<p class="m1"><span class="strong">Ebene erstellen:</span> im Reiter Ebenen ganz unten das Blatt+ Symbol oder rechte Maustaste neue Ebene</p>

<p class="fC-red text-center m1">ACHTUNG!!: Bei Überlagerung der Ebenen kann immer nur die jeweilige Bearbeitung dieser Ebene abgeändert werden.</p>

<p class="m2"><span class="strong">Steg:</span> Leerraum zwischen Bildern</p>

<p class="strong">Bilder auf Auswahl begrenzen</p>
<ul class="m2">
    <li>Bild skalieren (Höhe, Breite definieren)</li>
    <li>Bild auf gewünschten Platz verschieben</li>
    <li>Eine Auswahl definieren für die Größe des Bildes</li>
    <li>Menü > Ebene > Auf Auswahl zuschneiden</li>
</ul>



<div class="flex">
    <img src="img/gimp/gimp7.jpg" class="iW-100" alt="gimp">

    <div>
        <h4 class="m1">ZIP Dateien</h4>
        <p class="m1"><span class="strong">Daten komprimieren (ZIP-Datei):</span> rechte Maustaste > Senden an > ZIP komprimierter Ordner</p>
        <p><span class="strong">ZIP Datei entpacken: </span>rechte Maustaste > Alle extrahieren…</p>
       
    </div>
</div>












    
</div>