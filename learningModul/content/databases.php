<div>
    <p class="strong m2">= System zum Speichern und Aufrufen elektronischer Daten(strukturierte Ansammlung von Daten)</p>

    <h4 class="m1">Datennormalisierung</h4>
<ul>
    <li>Zusammenhänge eruieren</li>
    <li>5 Grade der Normalisierung in der Praxis bis zum 3.Grad</li>
</ul>
<img src="img/databases/databases1.jpg" class="iW-700 m3" alt="databases">

<h4 class="m1">Arten der Datenbanken</h4>

<ul>
    <li class="strong m2">
        <ul class="m1">Relational Datenbank System RDBMS
            <li>Orcale</li>
            <li>MsSQL</li>
            <li><span class="fC-red">MySQL</span> – ziemlich populär am Markt</li>
            <li class="m2">PostgreSQL</li>
            <p class="strong">SQL – Structured Query Language</p>
            <p class="fS-08 m1"> Sprache für Datenbanken</p>
            <ul>
                <li>natürliche Sprache</li>
                <li>am meisten verwendete Syntax: Select * from presents</li>
            </ul>
        </ul>
        <p class="fC-red text-center border-red">Datenstruktur bei allen Datensätzen gleich, immer gleiches Schema für alle Datensätze</p>
        

    </li>
    <li class="strong">Object oriented DB NoSQL 
        <p class="fS-08">= sind flexibler als Listen</p>
        <img src="img/databases/databases2.jpg" class="iW-700 m3" alt="databases">
    </li>
</ul>

<h4 class="m1">Localhost/phpadmin</h4>

<p class="strong">SQL Code schreiben (mehrere Anweisungen durch ; trennen)</p>
<img src="img/databases/databases3.jpg" class="iW-1000" alt="databases">

<p class="kursiv">mögliche Datenbank - Abfrage :</p>
<img src="img/databases/databases4.jpg" class="iW-1000 m2" alt="databases">

<p class="fC-red text-center m2">Tabellenname kann auch ohne Anführungszeichen gecodet werden.</p>

<p class="kursiv">nur Nachnamen abfragen:</p>
<img src="img/databases/databases5.jpg" class="iW-1000" alt="databases">

<p class="kursiv">zwei Spalten Abfragen:</p>
<img src="img/databases/databases6.jpg" class="iW-1000" alt="databases">

<p class="kursiv">spezifisch Abfragen:</p>
<img src="img/databases/databases7.jpg" class="iW-1000" alt="databases">

<p class="kursiv">Abfrage Daten beginnen mit:</p>
<img src="img/databases/databases8.jpg" class="iW-1000" alt="databases">

<p class="kursiv">zwei Abfrage Bedingungen(AND oder &&):</p>
<img src="img/databases/databases9.jpg" class="iW-1000" alt="databases">

<p class="kursiv">in der selben Spalte nach zwei Bedingungen suchen:</p>
<img src="img/databases/databases10.jpg" class="iW-1000" alt="databases">

<p class="kursiv">zwei Bedingungen mit einer ist nicht Bedingung:</p>
<img src="img/databases/databases11.jpg" class="iW-1000" alt="databases">

<p class="kursiv">Update:</p>
<img src="img/databases/databases12.jpg" class="iW-1000" alt="databases">

<p class="kursiv">od.:</p>
<img src="img/databases/databases13.jpg" class="iW-1000" alt="databases">

<p class="kursiv">Abfrage vorab überprüfen mit Abfrage simulieren:</p>
<img src="img/databases/databases14.jpg" class="iW-1000" alt="databases">

<p class="kursiv">Datensatz hinzufügen:</p>
<img src="img/databases/databases15.jpg" class="iW-1000" alt="databases">

<p class="kursiv">Datensatz löschen(kann nicht rückgängig gemacht werden):</p>
<img src="img/databases/databases16.jpg" class="iW-1000 m3"  alt="databases">


<p class="strong">Rechte verwalten</p>
<img src="img/databases/databases17.jpg" class="iW-1000 m3" alt="databases">

<h4 class="m1">Normalisierung</h4>
<ul class="2">
    <li>Aufteilung von Attributen in mehrere Relationen (Tabellen)</li>
    <li>Anwendung von Normalisierungsregeln</li>
</ul>

<p class="strong m1">Wofür:</p>
<ul class="m3">
    <li>Vermeidung von Redundanzen</li>
    <li>Vermeidung von Datenverlust</li>
    <li>Vermeidung von Anomalien</li>
</ul>

<p class="strong">0. Normalform(2.NF)</p>
<img src="img/databases/databases18.jpg" class="iW-700 m3" alt="databases">

<p class="strong m1">1. Normalform(1NF)</p>
<div class="flex">
    <p class = "iW-400"> ist dann gegeben, wenn alle Informationen in einer Tabelle atomar vorliegen</p>
    <img src="img/databases/databases19.jpg" class="iW-400 m3" alt="databases">
</div>
<img src="img/databases/databases20.jpg" class="iW-1000 m3" alt="databases">


<p class="strong">2. Normalform(2NF)</p>
<div class="flex">
    <p class = "iW-400"> eine Tabelle befindet sich genau dann in der zweiten Normalform(2NF), wenn er sich in der ersten Normalform(1NF) befindet und jedes Nichtschlüsselattribut von jedem Schlüsselkandidaten voll funktional abhängig ist</p>
    <img src="img/databases/databases21.jpg" class="iW-400 m3" alt="databases">
</div>
<img src="img/databases/databases22.jpg" class="iW-1000 m3" alt="databases">

<p class="strong">3. Normalform(3NF)</p>
<div class="flex">
    <p class = "iW-400"> ein Relationstyp befindet sich genau dann in der zweiten Normalform(2NF), wenn er sich in der ersten Normalform(1NF) befindet und jedes Nichtschlüsselattribut von jedem Kandidatenschlüssel voll funktional abhängig ist</p>
    <img src="img/databases/databases23.jpg" class="iW-400 m3" alt="databases">
</div>
<img src="img/databases/databases24.jpg" class="iW-1000 m3" alt="databases">


<p class="strong">Relationen</p>
<img src="img/databases/databases25.jpg" class="iW-200 m3" alt="databases">


<p class="strong">Datenbanktabellen erstellen</p>
<img src="img/databases/databases26.jpg" class="iW-1000 m3" alt="databases">

<p class="strong">Kollation</p>
<p class="fC-red fS-08">= empfohlen utf8mb4_unicode_ci</p>
<img src="img/databases/databases27.jpg" class="iW-1000 m3" alt="databases">

<p class="strong">Null bei Audio-Increment</p>
<img src="img/databases/databases28.jpg" class="iW-1000 m3" alt="databases">


<p class="strong">Statement welches mehrere Tabellen betrifft</p>
<img src="img/databases/databases29.jpg" class="iW-1000 m3" alt="databases">

<p class="strong">Spaltennamen in der Ausgabe definieren</p>
<img src="img/databases/databases30.jpg" class="iW-1000 m3" alt="databases">
 

<p class="strong">Mehrere Datensätze in derselben Spalte mit IN ändern</p>
<p class="fS-08">= ändert den chipped Status bei beiden IDs</p>
<img src="img/databases/databases31.jpg" class="iW-1000 m3" alt="databases">
 

<p class="strong">Abfrage in mehreren Tabellen welche nur eine Teil einer Spalte ausgeben sollen</p>
<img src="img/databases/databases32.jpg" class="iW-1000 m3" alt="databases">
 
<p class="strong">Datensätze zählen</p>
<img src="img/databases/databases33.jpg" class="iW-1000 m3" alt="databases">

<p class="strong">Zählt die Einträge welche zur jeweiligen Kategorie vorhanden sind</p>
<img src="img/databases/databases34.jpg" class="iW-1000 m3" alt="databases">

<h4 class="m1">Abfragen mit JOIN</h4>
<p class="kursiv">Bsp.: zwei Tabellen A,B</p>
<img src="img/databases/databases35.jpg" class="iW-700 m3" alt="databases">

<p class=" m2 text-center border-black"><span class="strong">Syntax</span><br>
SELECT spalten FROM table A (I/L/R) JOIN table B ON which id should search for (über welchem Wert sind die Tabellen verbunden) WHERE which fields should be the same (wie sieht diese Verbindung aus)</p>

<p class="strong">Statement with JOIN: </p>
<p class="m3">SELECT pets.name FROM pets INNER JOIN species WHERE pets.species_id = species.species_id</p>

<p class="strong">Statement without JOIN: </p>
<p class="m3">SELECT pets.name, species.name FROM pets, species WHERE pets.species_id = species.species_id</p>

<p class="strong">Select LEFT JOIN (auch alle undefinierten aus der linken Tabelle)</p>
<img src="img/databases/databases36.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">Select LEFT JOIN (auch alle undefinierten aus der rechten Tabelle)</p>
<img src="img/databases/databases37.jpg" class="iW-1000 m3"  alt="databases">
 

<p class="strong">mit UNION mehrere Abfragen verbinden</p>
<img src="img/databases/databases38.jpg" class="iW-1000 m3"  alt="databases">

<h4>ERDs – Entity Relationship Diagram</h4>
<p class="fS-08 kursiv">https://www.youtube.com/watch?v=QpdhBUYk7Kk&t=9s</p>
<img src="img/databases/databases53.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">Trigger</p>
<img src="img/databases/databases54.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">PHP Snippets(File/Preferences/User Snippets):</p>
<img src="img/databases/databases55.jpg" class="iW-500 m5"  alt="databases">
 


 












<h2>SQLite Studio</h2>

<p class="strong">Neue Datenbank erstellen</p>
<img src="img/databases/databases39.jpg" class="iW-1000 m3"  alt="databases">


<p class="strong">Neue Tabelle erstellen</p>
<img src="img/databases/databases40.jpg" class="iW-1000"  alt="databases">

<img src="img/databases/databases41.jpg" class="iW-1000"  alt="databases">
<p class="kursiv m3">(mit doppeltem Mausklick in die Tabelle neue Spalte erzeugen)</p>

<p class="strong">Spalte anlegen (Primary Key)</p>
<img src="img/databases/databases42.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">Data Description Language</p>
<img src="img/databases/databases43.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">Editor für Datenbank Input</p>
<img src="img/databases/databases44.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">Transaktionen für Inserts</p>
<img src="img/databases/databases45.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">View erstellen</p>
<img src="img/databases/databases46.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">SELECT im Editor</p>
<img src="img/databases/databases47.jpg" class="iW-1000"  alt="databases">
<p class="kursiv m3">bei Markierung im EDITOR wird nur der markierte Code ausgeführt</p>
 
<p class="strong">Abfragen nach einem NULL gehen nur mit IS oder IS NOT, während Abfragen nach einer Zahl oder anderem Inhalt mit = oder != funktionieren</p>
<img src="img/databases/databases48.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">Indexes um Daten leichter und schneller zu selektieren</p>
<img src="img/databases/databases49.jpg" class="iW-1000 m3"  alt="databases">

<table class="m3">
    <tbody>
        <tr>
            <td class="strong">ORDER BY ID DESC</td>
            <td>Statement ordnet Tabelle nach ID</td>
        </tr>
    </tbody>
</table>

<p class="strong">Insert Statement</p>
<img src="img/databases/databases50.jpg" class="iW-1000 m3"  alt="databases">

<p class="strong">Update Statement</p>
<img src="img/databases/databases51.jpg" class="iW-1000 m3"  alt="databases">


<p class="strong">Delete Statement</p>
<p class="kursiv m1 fS-08">= bei Verknüfung mit der Skill Tabelle nicht lösbar
</p>
<img src="img/databases/databases52.jpg" class="iW-1000 m3"  alt="databases">


			


 









 













</div>