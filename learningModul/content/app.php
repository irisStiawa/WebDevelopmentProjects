<div>
    <h2 class="m2">Android APPENTWICKLUNG</h2>

    <p class="strong">Android Entwicklung Fachbegriffe </p>
    <table class="m2">
        <tbody>
            <tr>
                <td class="strong">gradle</td>
                <td>das build system (compiler) </td>
            </tr>
            <tr>
                <td class="strong">"build"/"make"</td>
                <td>compilieren</td>
            </tr>
            <tr>
                <td class="strong">"assemble"</td>
                <td>erzeugen des executable (ausführbares... dings) </td>
            </tr>
            <tr>
                <td class="strong">"task"</td>
                <td>ein schritt während des compile-vorgangs</td>
            </tr>
            <tr>
                <td class="strong">.aab</td>
                <td>Android App Bundle (Datei die die App enthält – landet nie auf der Device)</td>
            </tr>
            <tr>
                <td class="strong">wakelook</td>
                <td>immer dann wenn der Code nicht unterbrochen werden darf(bei versenden von Daten an Server) – keine Wakelooks die sich überlagen und das Handy über Stunden aktiv halten, vernünftiger Einsatz – WICHTIG!! – Wie lange und wie oft? <br><span class="kurisiv">im Code:</span><br><img src="img/app/app1.jpg" class="iW-150" alt="app"></td>
            </tr>
            <tr>
                <td class="strong">dp => dip => device independent pixel</td>
                <td></td>
            </tr>
        </tbody>
    </table>

<p class="kursiv">wichtigste Dateien in einem Android Projekt: </p>
<table class="m3">
    <tbody>
        <tr>
            <td class="strong">build.gradle</td>
            <td>Compilescript, alle Informationen über die App DIESE DATEI EXISTIERT ZWEI MAL (1x für Projekt, 1x für App)</td>
        </tr>
    </tbody>
</table>

<h4>Lifecycle</h4>
<p class="kursiv">(wir unterscheiden App- und Activity-Lifecycle)</p>
<img src="img/app/app2.jpg" class="iW-700 m3" alt="app">

<h4 class="m1">App Lifecycle</h4>

<p class="strong">Events - Callbacks (Arten der Betriebssystem Kommunikation mit App)</p>
<ul class="m3">
    <li>Sensorik
        <ul class="m1">
            <li>Gyro (lage des Gerätes)</li>
            <li>GPS</li>
            <li>Proximity (Annäherungssensor)</li>
            <li>Lights (Lichtsensor)</li>
            <li>Batterysensor</li>
        </ul>
    </li>
    <li>Icon – Appstart</li>
    <li>Push/Benachrichtungen</li>
    <li>App – History (Foreground/Background)</li>
    <li>Installation</li>
    <li>Bluetooth</li>
    <li>WLan/Network (Siehe unten Services - Connectivity MGR)</li>
    <li class="m1">Boot/Update</li>
    <p class="kursiv">Arten die von der App nicht registriert werden:</p>
    <ul>
        <li>Kill</li>
        <li>Shutdown/Reboot</li>
        <li>Uninstall</li>
    </ul>
</ul>

<p class="strong">Services</p>	
<ul class="m3">
    <li>Telephony Manager(kommt ein Anruf hinein, App muss pausieren)</li>
    <li>Connectivity MGR</li>
    <li>Task Scheduler (wie tief schläft das Handy- wielang der Bildschirm inaktiv)</li>
</ul>

<h4>Activitiy Lifecycle</h4>

<div class="flex m3">
    <img src="img/app/app3.jpg" class="iW-400" alt="app">
    <p class="border-black">onConfigurationChanged (Hochformat/Querformat) – App wird zerstört und neu kreiert</p>
</div>

<p class="strong">Point and Pic</p>
<p class="kursiv m1">(unzuverlässige Variante)</p>
<img src="img/app/app4.jpg" class="iW-700 m3" alt="app">

<p class="strong m1">Layoutarten</p>
<table class="m3">
    <tbody>
        <tr>
            <td class="strong">Linearlayout</td>
            <td>beginnt links oben</td>
        </tr>
        <tr>
            <td class="strong">Relativlayout <br> <span class="kursiv fS-08">(etwas langsamer als das Linear)</span></td>
            <td>ein Element und steht mit anderen in 		Beziehung</td>
        </tr>
    </tbody>
</table>
 
<p class="strong">wichtige Dateien(res\values)</p>
<ul>
    <li>dimens.xml -> Konstante für Größen (Abstände, Textgrößen, etc) 
        <ul>
            <li>ohne Bedingung <br><span class="kursiv strong">Datei:</span> <br><img src="img/app/app5.jpg" class="iW-400 mt0" alt="app"></li>
        </ul>
    </li>
    <li>colors.xml -> Konstante für Farben</li>
    <li>styles.xml -> "android-style-css" <br><span class="kursiv fS-08">(https://developer.android.com/guide/topics/ui/look-and-feel/themes)</span></li>
    <li>themes.xml -> Themes (Light, Dark, ...) bzw Customer-Brandings</li>
</ul>

<img src="img/app/app6.jpg" class="iW-700" alt="app">
<p class="kursiv m3">(Rechtsklick auf package values)</p>

<p class="strong">Views in Java </p>
<p class="kursiv">eine View setzen:</p>
<img src="img/app/app7.jpg" class="iW-700 m3" alt="app">

<p class="strong">Errors in der APP Debuggen</p>
<img src="img/app/app8.jpg" class="iW-700 m3" alt="app">
 
<p class="strong">EditTextfelder auslesen/löschen</p>
<img src="img/app/app9.jpg" class="iW-700 m3" alt="app">

<p class="strong">XML Code</p>
<table class="m3">
    <tbody>
        <tr>
            <td class="strong">match_parent</td>
            <td>so breit wie das Elternelement</td>
        </tr>
        <tr>
            <td class="strong">wrap_content</td>
            <td>so breit wie der Inhalt des Elements</td>
        </tr>
    </tbody>
</table>
 
<p class="strong">Java Code</p>
<table class="m3">
    <tbody>
        <tr>
            <td class="strong">Klasse R</td>
            <td>Ressources, alles was in res existiert wird über diese Klasse aufgerufen</td>
        </tr>
    </tbody>
</table>
			
			
<h4 class="m1">Unit testing (App bezogen)</h4>
<p class="m2"><span class="strong">ctor:</span> constructor</p>

<ul>
    <li>Testet Code isoliert</li>
    <li>im Schnitt wird pro Klasse getestet</li>
    <li>1 Methode = 1 Test</li>
    <li>„Code Coverage“</li>
    <li>sind reproduzierbar, müssen immer das gleiche Ergebnis liefern</li>
    <li>generierte getter und setter Methoden werden im Normalfall nicht getestet (sinnvoll da getter und setter nicht immer Einzeiler sind)</li>
</ul>

<img src="img/app/app10.jpg" class="iW-500 m2" alt="app">
<img src="img/app/app11.jpg" class="iW-300 m3" alt="app">	

<p class="strong">Testeinheiten für GetNullIndex Method</p>
<img src="img/app/app12.jpg" class="iW-300 m3" alt="app">

<p class="strong">Testeinheiten für SolveDirect/SolveIndirect Method</p>
<img src="img/app/app13.jpg" class="iW-400 m3" alt="app">

<p class="strong">Für die Unittests muss dieselbe Ordnerstruktur angelegt werden wie für das Projekt</p>
<img src="img/app/app14.jpg" class="iW-300 m3" alt="app">

<p class="strong">Testing Add Method</p>
<img src="img/app/app15.jpg" class="iW-150" alt="app">
<p class="kursiv fC-red m3">Test Code: assertTrue(4, add(2,2));</p>

<p class="strong">Struktur Unittest</p>
<ol class="m3">
    <li>Instanz der getesteten Daten (Klasse erstellen)</li>
    <li>Testdaten in Variablen</li>
    <li>Aufruf der zu testenden Methode</li>
    <li>Vergleich Ergebnis mit einer Assert Methode (z.B. assertEquals())</li>
</ol>


	
	
	
	






	
</div>