<div>
    <h2 class="m2">Betriebsystem Linux Ubuntu</h2>
    <img src="img/linux/linux1.jpg" class= "iW-600" alt="linux">
    <p class="kursiv m2">Shell mit Strg+Alt+T</p>
 
    <img src="img/linux/linux2.jpg" class= "iW-600" alt="linux">
<p class="kursiv m3">Shell leeren</p>

<p class="strong">Befehle in Ubunto</p>
<table class="m3">
    <tr>
        <td class="strong">ls</td>
        <td>alle Daten im Verzeichnis</td>
    </tr>
    <tr>
        <td class="strong">cd</td>
        <td>Verzeichnis wechseln</td>
    </tr>
    <tr>
        <td class="strong">cd..</td>
        <td>Verzeichnis nach oben</td>
    </tr>
    <tr>
        <td class="strong">cd /etc</td>
        <td>ins Stammverzeichnis wechseln</td>
    </tr>
    <tr>
        <td class="strong">apt update</td>
        <td>für ausstehende Updates</td>
    </tr>
    <tr>
        <td class="strong">sudo</td>
        <td>für Berechtigung als Superuser(höhere Berechtigung als Admin „superuser do“)</td>
    </tr>
    <tr>
        <td class="strong">mkdir</td>
        <td>erstellt Files und Folder</td>
    </tr>
    <tr>
        <td class="strong">cp</td>
        <td>kopiert ein File, Werte: sudo, cp, Dateiname, neuer Dateiname</td>
    </tr>
    <tr>
        <td class="strong">mv</td>
        <td>Werte: sudo, mv, Datei und neuer Dateipfad</td>
    </tr>
</table>
 
<p class="strong">Als Sudo nach updates suchen</p>
<img src="img/linux/linux3.jpg" class= "iW-600 m3" alt="linux">
 
<p class="strong">Updates installieren</p>
<img src="img/linux/linux4.jpg" class= "iW-600 m3" alt="linux">
 
<p class="strong">Programme installieren</p>
<img src="img/linux/linux5.jpg" class= "iW-600 m3" alt="linux">
 
<p class="strong">Installierte Version finden</p>
<img src="img/linux/linux6.jpg" class= "iW-600 m3" alt="linux">
 
<p class="strong">Systemkontroll erlaubt Zugriff auf laufende Programmprozesse</p>
<img src="img/linux/linux7.jpg" class= "iW-600" alt="linux">
<p class="kursiv m3">(grüner Punkt: Server läuft)</p>

<p class="strong">htdocs Folder vs www Folder am Apache Server Ubunto</p>
<img src="img/linux/linux8.jpg" class= "iW-600" alt="linux">
<p class="kursiv m3">mit dem Befehl nano Editor können Files geöffnet werden in der Shell (um die Datei zu überschreiben als Superuser öffnen)</p>

<p class="strong">Gedit Editor welcher in der Shell funktioniert (brauchbarer als nano)</p>
<img src="img/linux/linux9.jpg" class= "iW-600" alt="linux">
<p class="kursiv m3">Befehl: sudo gedit index.html</p>
 

<p class="strong">Website in sites-enable hinzufügen wie folgt:</p>
<img src="img/linux/linux10.jpg" class= "iW-600 m3" alt="linux">
 
<p class="strong">Website in hosts File im /etc Folder hinzufügen:</p>
<img src="img/linux/linux11.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Im Host File Seite hinzufügen:</p>
<img src="img/linux/linux12.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Server reloaden:</p>
<img src="img/linux/linux13.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Server Apache2</p>
<img src="img/linux/linux14.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">PHP auf Apache2 installieren</p>
<img src="img/linux/linux15.jpg" class= "iW-600 m3" alt="linux">

<p class="strong m1">MariaDB(Mysql) auf Apache2 installieren</p>
<ul class="m3">
    <li>sudo apt install mariadb-server</li>
    <li>sudo mysql_secure_installation</li>
</ul>

<p class="strong">MariaDB(Mysql) oder Apache2 Statusabfrage</p>
<img src="img/linux/linux16.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">PHPMyAdmin installieren</p>
<img src="img/linux/linux17.jpg" class= "iW-600 m2" alt="linux">

<p class="kursiv">danach:</p>
<img src="img/linux/linux18.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Config Files</p>
<img src="img/linux/linux19.jpg" class= "iW-600 m3" alt="linux">

<p class="fC-red border-red text-center m3">Rufus Programm zur Erstellung eines bootfähigen Sticks mit einem Linuxsystem</p>

<p class="strong">Info zu MariaDB:</p>
<table class="m3">
    <tbody>
        <tr>
            <td class="strong">phpmyadmin</td>
            <td>wird als Datenbank für Parameter genutzt</td>
        </tr>
        <tr>
            <td class="strong">root</td>
            <td>wird als Superuser im Terminal verwendet – kein Zugriff im Interface - um mit allen Rechten an der Konfiguration arbeiten zu können (kein User mit welchem sich eingeloggt werden kann) – Es muss ein neuer User mit allen Privilegien angelegt werden um im Interface damit arbeiten zu können</td>
        </tr>
    </tbody>
</table>

<p class="strong">MariaDB neu Starten</p>
<img src="img/linux/linux20.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Um eine Datenbank zu selektieren die benutzt werden soll:</p>
<img src="img/linux/linux21.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Um eine Tabelle anzuzeigen:</p>
<img src="img/linux/linux22.jpg" class= "iW-500 m3" alt="linux">

<p class="strong">Um User und Passwort zu selektieren:</p>
<img src="img/linux/linux23.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">User mit allen Rechten erstellen</p>
<img src="img/linux/linux24.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Node.js installieren</p>
<img src="img/linux/linux25.jpg" class= "iW-600 m3" alt="linux">
 
<p class="strong">Folder für Node und NPM installieren</p>
<img src="img/linux/linux26.jpg" class= "iW-600 m2" alt="linux">

<p class="kursiv">Express.js installieren</p>
<img src="img/linux/linux27.jpg" class= "iW-600 m2" alt="linux">

<p class="kursiv">mit folgender Anweisung initialisieren:</p>
<img src="img/linux/linux28.jpg" class= "iW-600 m2" alt="linux">

<p class="kursiv">installiere dotenv:</p>
<img src="img/linux/linux29.jpg" class= "iW-600 m3" alt="linux">


<p class="border-black strong text-center m3">Ubuntu Betriebsystem (Sleepmode Parameter auf 0 stellen) <br><span class="fC-red">sudo systemctl mask sleep.target suspend.target hibernate.target hyprid-sleep.target</span>
</p>

<h4>Postfix für SMTP </h4>
<img src="img/linux/linux30.jpg" class= "iW-600 m3" alt="linux">


<h4>Verzeichnisbaum Linux</h4>
<img src="img/linux/linux31.jpg" class= "iW-600 m3" alt="linux">
 

<p class="strong">Benutzerrechte zu Dateien </p>
<img src="img/linux/linux32.jpg" class= "iW-600 m3" alt="linux">

<p class="strong">Neuen User anlegen</p>
<table class="m3">
    <tbody>
        <tr>
            <td class="strong">useradd</td>
            <td>USERNAME</td>
        </tr>
        <tr>
            <td class="strong">passwd</td>
            <td>PASSWORD</td>
        </tr>
        <tr>
            <td class="strong">mkdir</td>
            <td>DIRNAME</td>
        </tr>
        <tr>
            <td class="strong">chown</td>
            <td>USERNAME DIRNAME</td>
        </tr>
        <tr>
            <td class="strong">chgrp</td>
            <td>USERNAME DIRNAME</td>
        </tr>
        <tr>
            <td class="strong">usermod -d</td>
            <td>DIRNAME USERNAME (für Home Directory eines Benutzers)</td>
        </tr>
    </tbody>
</table>







<h2 class="m1">Befehle in Linux:</h2>
<table class="m3">
    <tbody>
        <tr>
            <td class="strong">chown (change owner)</td>
            <td>Bash Befehl für Besitzeränderung einer directory</td>
        </tr>
        <tr>
            <td class="strong">chgrop (change groupe)</td>
            <td>Bash Befehl für Benutzergruppe</td>
        </tr>
        <tr>
            <td class="strong">chmod (change modify/mod)</td>
            <td>Ändert die Zugriffsberechtigungen anhand von Zahlen die definiert sind (lesen, ändern, schreiben, ausführen)</td>
        </tr>
        <tr>
            <td class="strong">chattr (change attribute)</td>
            <td>Verhaltensweisen der Datei	(Windowsattribute: schreibgeschützt(read only), Archivdatei- keine schneller Zugriff(archive), zeigt die Datei nicht an ausser versteckte Dateien sollen angezeigt werden(hidden), zeigt die Datei nicht an und schützt die Datei vor unberechtigtem Zugriff da die Datei systemrelevant(system), Linux Ubuntu: http://wiki.ubuntususers.de/chattr/)</td>
        </tr>
    </tbody>
</table>



</div>