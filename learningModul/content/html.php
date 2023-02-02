
<div>
    <h4 class= "m1">HTML – Hypertext Markup Language</h4>

    <p class ="m2">=ist keine Programmiersprache sondern eine Seitenbeschreibungssprache (keine Strukturen, keine Schleifen wie in Programmiersprachen)</p>

    <div class= "flex-center m2">
        <img src="img/html/bookSide2.jpg" class="iW-200" alt="bookSide">
        <div>
            <p>Seitenstruktur:</p>
            <h1>Überschrift</h1>
            <p>Text</p>
            <h4 >kleine Überschrift</h4>
            <p>Text</p>
            <img src="" alt="img">
            <p class = "fS-08">Bildlegende</p>
        </div>
    </div>

    <p class="m3">Wir benötigen hier lediglich HTML Kenntnisse und Texteditor.</p>



    <h4 class="m2">WEB 101</h4>

    <table class="m2 tborder">
        <thead>
            <tr class ="strong">
                <th>Was?</th>
                <th>Womit?</th>
            </tr>
        </thead>
        <tbody class ="">
            <tr>
                <td>Speicherplatz/td>
                <td>Host/Provider</td>
            </tr>
            <tr>
                <td>Adresse/Name</td>
                <td>Host/Provider<br>
                    <span class ="fS-08">Namen und Speicherplatz werden gemietet vom Host/Provider. (eine Domain registrieren)</span>
                </td>
            </tr>
            <tr>
                <td>Code (html, js, css)</td>
                <td>Texteditor, Wysiwyg-Ed</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>Texteditor, Wysiwyg-Ed</td>
            </tr>
            <tr>
                <td>Transfer/Upload</td>
                <td>FTP-Client</td>
            </tr>
        </tbody>
    </table>

    <h4 class="m1">Adresse</h4>

    <p class ="m1">Jedes mit dem Internet verbundene Gerät hat eine IP-Adresse.</p>

    <p>xxx.xxx.xxx.xxx</p>
    <p >192.101.211.103</p>
    <p class ="strong m2">jeder dreier Block hat 256 Mögl./32 Bit Adressen</p>

    <p class = "m4">Jeder Abschnitt hat 3 Stellen, aber führende Nullen werden oft weggelassen wie 192.001.002 werden als 192.1.2. angeführt.</p>

    <h4 class ="m1">Name</h4>
    <p class ="m3">Domain Namen merken sich Nutzer leichter als 12-stellige Zahlen, daher der Name.</p>

    <h4 class="m1">Code (html, js, css)</h4>
    <p class = "m3"><span class="strong">Wysiwyg-Ed</span> - schreiben keine sauberen Codes daher werden diese nicht verwendet</p>

    <h4 class="m1">Content</h4>
    <p class="m3">Informationen die eine Funktion erfüllen sollen.</p>
    

    <h4 class="m1">Transfer/Upload</h4>

    <p class="m3">FTP ermöglicht uns größere Datenmengen schnell ins Internet zu laden.</p>


    <h4 class="m1">WEB 101.5</h4>

    <p class ="m2">Website</p>

    <table class= "tborder m1 text-center">
        <tr >
            <th>Struktur</th>
            <th>Präsentation</th>
            <th>Funktionalität</th>
        </tr>
        <tr>
            <td class="fC-red" >HTML</td>
            <td class="fC-red">CSS</td>
            <td class="fC-red">Javascript</td>
        </tr>
    </table>

    <p class="m3">HTML bietet lediglich ein paar grundlegende Funktionalitäten, alle weiteren Funktionen werden von Javascript erfüllt.</p>

    <h4 >Filestruktur</h4>
    <img src="img/html/rootStructure.png" class= "iW-600 m3" alt="rootstructure">
            
    <h4 class="m1">Pfade – absoluter Weg</h4>
    <p class="m3">= setzen sich aus verschiedenen Ortsangaben zusammen, die durch Slashes getrennt sind. 
    </p>

    <h4 class="m1">Pfad rückwärts wandern</h4>

    <table class ="m1">
        <tbody>
            <tr>
                <td><span class= "strong">.../index.htm</span></td>
                <td>gehe eine Ebene zurück (kann auch kombiniert werden ../../index.htm um zwei Ordner zurück zu springen)</td>
            </tr>
        </tbody>
    </table>
            
    <p class="m3">Auf der jeweiligen Ebene kann beliebig nach unten gewandert werden, ohne das die vorangegangene Ordnerstruktur benötigt wird.</p>

    <h4>Erstellung einer Website</h4>

    <img src="img/html/html1.jpg" class="iW-1000 m2" alt="html">

    <h4>Absätze</h4>

    <img src="img/html/html2.jpg" class="iW-1000 m2" alt="html">

    <table class ="m1">
        <tbody>
            <tr>
                <td><span class= "strong">Text im Body</span></td>
                <td>Benötigt keine Formatierung</td>
            </tr>
            <tr>
                <td><span class= "strong">Nonsenstext	</span></td>
                <td>	Lorem ipsum (Mustertext für Websiten oder Präsentationen um Layouts zu präsentieren) – Samuel L. Ipsum als kleiner joke</td>
            </tr>
        </tbody>
    </table>

    <p class="m3">Der Seitenquelltext kann mit der rechten Maustaste > Seitenquelltext von jeder Internetseite angezeigt werden. (es besteht keine Möglichkeit im Quellcode Informationen zu verbergen)</p>


    <h4 class="m1">Überschriften</h4>

    <img src="img/html/html3.jpg" class="iW-1000 m2" alt="html">

    <p class="strong">ERGEBNIS:</p>

    <img src="img/html/html4.jpg" class="iW-1000 " alt="html">

    <p class = "strong">Seiten verlinken</p>
    <p class ="m1">=Link, heißt übersetzt Anker</p>

    <p class = "strong">Tags mit Attributen erweitern um z.B. einen Pfad zu deklarieren</p>
    <p class ="m1">&lt;a href=“html/01.htm“&gt;Klick mich.&lt;/a&gt;</p>


    <table class ="m1">
        <thead>
            <tr>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class= "strong">href</span></td>
                <td>hyperlinkRreferenz</td>
            </tr>
            <tr>
                <td><span class= "strong">target=“_blank“</span></td>
                <td>Link öffnet sich in einem neuen Fenster im Browser (Version ist nicht gerne gesehen)</td>
            </tr>
        </tbody>
    </table>
    <img src="img/html/html5.jpg" class="iW-1000" alt="html">

    <table>
        <tbody>
            <tr>
                <td><span class= "strong">title="Huhu!"	</span></td>
                <td>kleines Fenster über dem Link, wenn man mit der Maustaste drauf steht</td>
            </tr>
        </tbody>
    </table>

    <img src="img/html/html6.jpg" class="iW-1000 m5" alt="html">

    <h4 class="fS-140 m1 text-center">Zusammenfassung HTML-Struktur</h4>

        <ul class="m3">
            <li>Head (Kopf)</li>
            <li>Body (Körper)</li>
        </ul>

        <h4 class="m1">Standard Struktur in jedem HTML-Code&lt;!doctype&gt;</h4>

        <p>&lt;html&gt;</p>
        <p class="ml1">&lt;head&gt;</p>
        <p class="ml1">&lt;/head&gt;</p>
        <p class="ml1">&lt;body&gt;</p>
        <p class="ml1">&lt;/body&gt;</p>
        <p class= "m3">&lt;/html&gt;</p>
        
        
        <h4 class="m1">Informationen im &lt;head&gt;:</h4>
        
        <ul class="m3">
            <li>title</li>
            <li>verlinkte js, css</li>
            <li>Meta-Informationen (Informationen ÜBER eine Seite)</li>
            <li>js-code, css-code</li>
        </ul>
        
        <h4 class="m1">Informationen im &lt;body&gt;:</h4>

        <ul class="m3">
            <li>Inhalte(Bilder, Text, Video, etc.)</li>
            <li>js-code</li>
        </ul>

        <h4 class="m1">Tags</h4>

        <ul>
            <li>Anweisungen</li>
            <li>&lt;Spitzklammern&gt;</li>
            <li>alleine oder paarweise</li>
            <li>Opening od. Closing Tags</li>
            <li>Self-Closing Tags</li>
        </ul>

        
    <table class ="m3">
        <thead>
            <tr>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class= "strong">lang=“de“</span></td>
                <td>definiert die Sprache und ist nach der Dokumententype-Definition effizient (de=deutsch, en=englisch) – in Kombination mit Tag &lt;html&gt;</td>
            </tr>
            <tr>
                <td><span class= "strong">charset=“utf-8“</span></td>
                <td>Charakter Set, definiert den Zeichensatz – in Kombination mit Tag &lt;meta&gt;</td>
            </tr>
            <tr>
                <td><span class= "strong">id=““</span></td>
                <td>Auszeichnung um sich darauf zu referenzieren, bei Verwendung der Auszeichnung muss dem ID-Namen ein # vorangestellt werden</td>
            </tr>
            <tr>
                <td><span class= "strong">class=““</span></td>
                <td>kann mehrfach definiert werden und mehrere Elemente können dieselbe Klasse haben
                </td>
            </tr>
        </tbody>
    </table>

    <h4 class="text-center m1">Internetseiten für HTML Quellcodes und Infos:</h4>
    <a href= "https://wiki.selfhtml.org/" class="fC-red block text-center">https://wiki.selfhtml.org/</a>
    <a href= "https://www.w3schools.com/" class="fC-red block text-center">https://www.w3schools.com/</a>
    <a href="https://developer.mozilla.org/de/" class="fC-red block text-center">https://developer.mozilla.org/de/</a>
    <a href="https://css-tricks.com/archives/" class="fC-red m3 block text-center">https://css-tricks.com/archives/</a>

    <h4 class="m1">Listen</h4>

    <p>Verschachtelte Liste durch Beginn einer zweiten &lt;ul&gt; usw…:</p>

    <img src="img/html/html7.jpg" class="iW-1000 m2" alt="html">

    <p>Listeneinträge verlinken:</p>
    <img src="img/html/html8.jpg" class="iW-1000 m2" alt="html">
    
    <p>Um auf ein Mailprogramm zurück zu greifen, bei der Auszeichnung als Link die Mailadresse einfügen und mailto: voranführen:</p>
    <img src="img/html/html9.jpg" class="iW-1000 m2" alt="html">

    <p>Um auf eine spätere Überschrift zu springen, die weiter unten auf der Seite aufscheint mit einer ID auszeichnen:</p>
    <img src="img/html/html10.jpg" class="iW-1000 m2" alt="html">
    
    <p>unten im Text</p>
    <img src="img/html/html11.jpg" class="iW-1000 m2" alt="html">

    <p>Um zum Start zu springen den Body mit einer ID auszeichnen</p>
    <img src="img/html/html12.jpg" class="iW-1000 m3" alt="html">

    <h4 class="m1 fC-red">!!Wichtige Infos!!</h4>
    
    <ul class="m3">
        <li>In HTML sollten keine visuellen Tags benutzt werden da, da diese veraltet sind. Für den visuellen Aufbau wird CSS oder andere Programmiersprachen benutzt.</li>
        <li>Text soll nie unterstrichen werden, außer es handelt sich um einen Link, da dies von den Nutzern so verstanden wird.</li>
        <li>durch gedrückte Alt-Taste in Spalten arbeiten.</li>
        <li>mit Alt+C kann eine Nummerierung definiert werden</li>
    </ul>
    
    <table class="m3">
        <tr>
            <td class="strong">ASCII Zeichensatz</td>
            <td>internationaler Zeichensatz um den binären Code zu vereinheitlichen (beruht auf einem 7 Bit Code = 128 Mögl. und deckt aber nur die europäischen Satzzeichen und einige weitere Zeichen)</td>
        </tr>
        <tr>
            <td class="strong">UTF 8</td>
            <td>Zeichensatz mit 8 Bit-Code = 256 Mögl., heutiges Standard</td>
        </tr>
        <tr>
            <td class="strong">Freeware</td>
            <td>gratis Programme</td>
        </tr>
        <tr>
            <td class="strong">DOD</td>
            <td>Definition of Done</td>
        </tr>
        <tr>
            <td class="strong">DRY </td>
            <td>Don`t Repeat Yourself (Schreib nicht zweimal dasselbe!!))</td>
        </tr>
        <tr>
            <td class="strong">GIGO</td>
            <td>Garbage in, Garbage out (Bei unsauberen Input wird nur unsauberer Output herauskommen)</td>
        </tr>
        <tr>
            <td class="strong">Code Monkey</td>
            <td>jemand der Code schreibt und ihn nicht wirklich versteht</td>
        </tr>
    </table>
    
    <h4 class="m1">Nummerierung bei ol-Listen</h4>
    <p>Bei nummerierten Listen (ol) ist der Endtag für den letzten Listeneintrag immer nach der Unterelementen anzuführen (Grund ist die Nummerierung)</p>

    <img src="img/html/html13.jpg" class="iW-1000 m3" alt="html">

    <h4>Definition List</h4>
    <p class="m1">= Listen mit Begriffserklärung (Aufbau gleicht Wörterbuch, Lexikon)</p>
    <dl>
        <dt>Begriff</dt>
            <dd>Definition des Begriffs</dd>
        <dt>Begriff</dt>
            <dd>Definition des Begriffs</dd>
        <dt>Begriff</dt>
            <dd>Definition des Begriffs</dd>
    </dl>

    <img src="img/html/html14.jpg" class="iW-1000 m3" alt="html">

    <h4>Bild einfügen:</h4>
    <img src="img/html/html15.jpg" class="iW-1000" alt="html">
    <img src="img/html/html16.jpg" class="iW-1000 m3" alt="html">


    <h4 class="m1">Block- und Inlineelemente:</h4>
    <p class="m5">Blockelemente erzwingen eine neue Zeile (zum Bsp. Überschriften H1-H6, Paragraph p), Inlineelemente (zum Bsp. emphasize/Betonung em) tun dies nicht.</p>

    <h4 class="m1">Tabellen</h4>
    <img src="img/html/html17.jpg" class="iW-500" alt="html">

    <p class="m3">Tags: &lt;table&gt;&lt;tr&gt;&lt;td&gt;</p>

    <h4 class="m1">Tabellenstruktur</h4>
    
    <img src="img/html/html18.jpg" class="iW-1000 m3" alt="html">

    <p class="m1">CSS-Code:</p>
    <img src="img/html/html19.jpg" class="iW-500 m3" alt="html">

    <p class="strong m1">Ergebnis:</p>
    <img src="img/html/html20.jpg" class="iW-1000 m3" alt="html">

    
    <table class ="m3">
        <thead>
            <tr>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class= "strong">src</span></td>
                <td>source, Attribut für den Pfad zu einem Bild, in Kombination mit img</td>
            </tr>
            <tr>
                <td><span class= "strong">alt</span></td>
                <td>alternativ Text, wenn das Bild nicht gefunden wird, das Bild nicht angezeigt werden kann usw., in Kombination mit img</td>
            </tr>
            <tr>
                <td><span class= "strong">width, height</span></td>
                <td>Bildbreite und Bildhöhe (Platzhalter bei langsamer  Internetverbindung, keine strukturelle Relevanz), in Kombination mit img</td>
            </tr>
            <tr>
                <td><span class= "strong">rel</span></td>
                <td>Definition der eingebunden Datei, in Kombination mit link</td>
            </tr>
            <tr>
                <td><span class= "strong">type</span></td>
                <td>Definition des Typs der eingebunden Datei, in Kombination mit link</td>
            </tr>
            <tr>
                <td><span class= "strong">colspan</span></td>
                <td>Feld erstreckt sich über 2 Spalten, in Kombination mit td</td>
            </tr>
            <tr>
                <td><span class= "strong">rowspan</span></td>
                <td>Feld erstreckt sich über 2 Zeilen, in Kombination mit td (Achtung aus der unteren Zeile muss das Feld gelöscht werden!!)</td>
            </tr>
        </tbody>
    </table>

    <div class="border-red text-center fC-red m3">
        <h4>zu unterscheiden:</h4><br>
        <p>src: Quelle (Bilde: img, script, video)<br>href: Hyperlink Ref. (a, link)</p>
    </div>

    






    <h4 class="fS-140">Formulare</h4>
    <p class="m1">= Google ist die am meisten aufgerufene Seite, welche als Formular aufgebaut ist</p>

    <p class="strong">Verwendung im Internet:</p>
    <ul>
        <li>Onlinebestellungen</li>
        <li>Anmeldung- Login</li>
    </ul>
    <img src="img/html/html22.jpg" class="iW-1000 m3" alt="html">

    <h4 class="m1">Formularelemente:</h4>
    <ul class="m3">
        <li>Text</li>
        <li>Textarea, mehrzeiliger Text</li>
        <li>Kontrollkästchen zum Anklicken</li>
        <li>Kontrollkästchen mit nur einer Auswahl</li>
        <li>Drop-down Feld</li>
        <li>File upload</li>
        <li>Kalender</li>
        <li>Textfeld, Passwort fehlt</li>
    </ul>

    <table class ="m3">
        <thead>
            <tr>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class= "strong">name</span></td>
                <td>Name des Formulars (wenn in Kombination mit Tag form), (wenn in Kombination mit input wird das Feld deklariert)</td>
            </tr>
            <tr>
                <td><span class= "strong">action</span></td>
                <td>Wert ist eine URL, an welchen Server die Daten geschickt werden sollen</td>
            </tr>
            <tr>
                <td><span class= "strong">method</span></td>
                <td>Formulare können auf verschiedene Arten verschickt werden, <span class="strong">POST</span> – sichere Methode für große Datenmengen) oder <span class="strong">GET</span> – (Daten des Formulars werden auf Website übergeben, nicht sicher und keine großen Datenmengen)</td>
            </tr>
            <tr>
                <td><span class= "strong">type</span></td>
                <td>Typ des Textfeldes (kann man endlos viel reinschreiben wenn nicht mit css oder js korrigiert) –, Deklarationen: text – Texteingabe, password – Passwortfeld (Ausgabe sind nur Kugeln um Inhalt zu verschleiern)</td>
            </tr>
            <tr>
                <td><span class= "strong">tabindex</span></td>
                <td>um die Tabulatorsprünge zu nummerieren</td>
            </tr>
        </tbody>
    </table>

    <h4>GET – Methode (Bsp).:</h4>
    
    <img src="img/html/html23.jpg" class="iW-1000" alt="html">
    <p class="m1">Die eingebenen Daten werden an die Website versendet (unsichere Methode), wodurch sich der Link wie folgt erweitert:</p>
    <p class="m3 fC-red m2">file:///C:/Users/311-IrisStiawa/Documents/WORK/Webdevelopment/Formular/validate.htm?vorname=Iris&Nachname=Stiawa&PLZ=1220&Go%21=Senden </p>

    <p class="strong m1">GET-Methode mit Google Suche kombinieren</p>
    <p>Internetseite, z.B. Google arbeitet mit der Get-Methode, was an der URL erkannt werden kann, da bei der Googlesuche die Parameter angehängt werden. (Suchbegriff ist Grönland, dann in der URL der Parameter vor dem Suchbegriff z.B.: q=Grönland)</p>

    <img src="img/html/html24.jpg" class="iW-1000" alt="html">

    <p class="m3"><span class="strong">Parameter</span> – ist im Google Quellcode als Eingabewert des User deklariert (zum Verständnis: der Text der verschwindet in einem Suchfeld, q= User Eingabewert)</p>

    <h4>POST-Methode</h4>
    <p class="fS-08 m2">= Daten werden an Server versendet der vorher programmiert wird</p>
    
    <p class="strong">Platzhalter und Eingabe erforderlich machen </p>
    <img src="img/html/html25.jpg" class="iW-1000 m2" alt="html">

    <p class="strong">Maximallänge eines Passwortes</p>
    <img src="img/html/html26.jpg" class="iW-1000 m2" alt="html">
    
    <p class="strong">Datum-, E-Mail- und URL Eingabe</p>
    <img src="img/html/html27.jpg" class="iW-1000 m2" alt="html">

    <p class="strong">Radiobutton</p>
    <p class="fS-08 m1">=lässt nur eine Auswahl zu</p>
    <img src="img/html/html28.jpg" class="iW-700 m2" alt="html">

    <p class="m2">Um den User zu einer Eingabe zu zwingen mit dem required Attribut arbeiten. (Unerheblich ob es jetzt in alle Datensätze geschrieben wird oder nur in einen, da die Felder aufgrund des Namens miteinander in Bezug stehen.</p>

    <p class="strong">Checkboxen</p>
    <img src="img/html/html29.jpg" class="iW-1000 m2" alt="html">

    <p class="strong">Dropdown-Feld</p>

    <img src="img/html/html30.jpg" class="iW-700 m2" alt="html">

    <p>oder:</p>

    <img src="img/html/html31.jpg" class="iW-700 m2" alt="html">


    <p class="strong">Datei einfügen</p>
    <img src="img/html/html32.jpg" class="iW-700 m2" alt="html">


    <p class="strong">Zusätzliche versteckte Daten mit dem Formular an den Server verschicken</p>
    <img src="img/html/html33.jpg" class="iW-1000 m2" alt="html">

    <p class="strong">Beschriftung der Formularfelder</p>
    <p class="fS-08">= für den barrierefreien Zugang ein Label definieren, um einen Bezug zur Beschriftung zu erstellen</p>
    <img src="img/html/html34.jpg" class="iW-700 m2" alt="html">

    <p class="m1">Alle Formularfelder sollten beschriftet werden um den User zu erklären was er tun soll.</p>

    <p>Ob das Label davor oder nach dem Feld definiert wird ist nicht relevant: </p>
    <img src="img/html/html35.jpg" class="iW-1000 m2" alt="html">
    
    <p>Beispiel:</p>

    <img src="img/html/html36.jpg" class="iW-1000 m2" alt="html">

    <table class="m3">
        <thead>
            <tr>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="strong">type=“submit“</td>
                <td>Aktion der das Formular absendet; </td>
            </tr>
            <tr>
                <td class="strong">type=“date“</td>
                <td>Darstellung der Eingabefelder abhängig vom verwendeten Browser; </td>
            </tr>
            <tr>
                <td class="strong">type=“email“ </td>
                <td>verlangt eine E-Mailadresse (ignoriert aber das kein . und keine Toplevel-Domain eingeben wird – mit js korrigieren), ändert das Tastaturlayout sodass das @ Zeichen (z.B. bei Handys oder Tablets) darauf erscheint; </td>
            </tr>
            <tr>
                <td class="strong">type=“URL“</td>
                <td>verlangt eine korrekte URL (auf dieses Feld sollte man daher verzichten!) Alternative wäre ein normales Textfeld und dieses programmieren; </td>
            </tr>
            <tr>
                <td class="strong">type=“radio“</td>
                <td>um einen Radiobutten zu definieren, für die Auswahl müssen alle denselben Wert beim Attribut name haben,</td>
            </tr>
            <tr>
                <td class="strong">type=“checkbox“</td>
                <td>für eine Boxauswahl mit mehreren Auswahlmöglichkeiten</td>
            </tr>
            <tr>
                <td class="strong">type=“file“	</td>
                <td>erlaubt den Upload eines Dokuments</td>
            </tr>
            <tr>
                <td class="strong">type=“hidden“</td>
                <td>verstecktes Feld, in Kombination mit Tag input und dem Attribut value um den Wert zu definieren (z.B. welcher Browser oder welche Spracheingabe User eingestellt hat – Informationen über den User die wir uns zusätzlich holen, die der User womöglich nicht wirklich weiß) <br>=in Kombination mit Input</td>
            </tr>
            <tr>
                <td class="strong">value</td>
                <td>Wert (Text) der am Aktionsbutton steht wie „Senden oder Go“; <br>Wert der beim Server ankommt im Fall eines Radiobuttons<br>in Kombination mit Input</td>
            </tr>
            <tr>
                <td class="strong">placeholder</td>
                <td>Platzhalter, verschwindet wenn die Eingabe im Textfeld erfolgt </td>
            </tr>
            <tr>
                <td class="strong">required=“required“</td>
                <td>benötigt, erforderlich – Feld muss ausgefüllt werden, Wert ist required (Grund ist das ältere Browser dies auch verstehen, HTML 5 würde es akzeptieren auch ohne Definition), Formular wird erst beim ausfüllen abgeschickt</td>
            </tr>
            <tr>
                <td class="strong">maxlength</td>
                <td>Maximallänge der Eingabe</td>
            </tr>
            <tr>
                <td class="strong">checked=“checked“</td>
                <td>Wert ist checked für Kompatibilität; im Zuge eines Radiobuttons wird eine Vorauswahl getroffen ohne das der User etwas eingeben muss</td>
            </tr>
            <tr>
                <td class="strong">multiple=“multiple“</td>
                <td>Wert ist multiple für Kompatibilität; ermöglicht in Kombination mit Dropdown eine mehrfach Auswahl (ist nicht zu empfehlen, da es für viele User zu Verwirrung führt und einer Erklärung bedarf), in Kombination mit select</td>
            </tr>
            <tr>
                <td class="strong">size</td>
                <td>in Kombination mit Select erlaubt es ein Feld mit mehr als einer Zeile, als Wert ist 1 nicht effektiv</td>
            </tr>
            <tr>
                <td class="strong">accept</td>
                <td>erlaubt nur einen bestimmten Dokumententyp, z.B. Wert „image/jpg“- hier dürfen nur jpg-Dateien hoch geladen werden (mit , können mehrere Werte angegeben werden, z.B. Wert „image/*“ – hier dürfen alle Bilddatei hoch geladen werden, bei PDF Ausnahmewert – „application/pdf“</td>
            </tr>
            <tr>
                <td class="strong">for</td>
                <td>in Kombination mit label zur Verknüpfung mit dem dazugehörigen Feld (wird mit id abgeglichen)</td>
            </tr>
            <tr>
                <td class="strong">bug</td>
                <td>Fehler</td>
            </tr>
            <tr>
                <td class="strong">ISTQB</td>
                <td>International Software Testing Qualification Board, Softwaretester</td>
            </tr>
        </tbody>
    </table>
	
    <h4>Blöcke (&lt;fieldset&gt;)</h4>
    <p class="fS-08">= für bessere Übersicht</p>
	
    <img src="img/html/html37.jpg" class="iW-700 m2" alt="html">

    <h4>Datenliste &lt;datenliste&gt;, list</h4>
    <p class="fS-08">=Um bei einem Textfeld Daten zu hinterlegen</p>
    <img src="img/html/html38.jpg" class="iW-700 m2" alt="html">

    <table class="m3">
        <thead>
            <tr>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="strong">list</td>
                <td>um eine Datenliste zu hinterlegen</td>
            </tr>
        </tbody>
    </table>    

    <h4>Videos einbinden</h4>
    <p class="m1">= es kann mehr als nur ein Source Tag verwendet werden, sofern der Browser die Videoversion nicht abspielen kann. Danach kann noch ein Text als alternative angegeben werden.</p>

    <p class="m3"><span class="strong">Zum Video download:</span> www.file.examples.com</p>


    <table class="m1">
        <tbody>
            <tr>
                <td class="strong">muted</td>
                <td>(bedeutet Video ist stumm geschalten)</td>
            </tr>
            <tr>
                <td class="strong">poster</td>
                <td>vor Beginn des Videos wird ein Bild statt schwarzem Hintergrund angezeigt</td>
            </tr>
            <tr>
                <td class="strong">controls</td>
                <td>aktiviert eine Leiste mit Steuerungsfunktionen (Play, Vollbildschirm, usw.) für den Benutzer</td>
            </tr>
            <tr>
                <td class="strong">height</td>
                <td>Angabe der Höhe des Players (wird sonst automatisch erkannt)</td>
            </tr>
            <tr>
                <td class="strong">width</td>
                <td>Angabe der Breite des Players (wird sonst automatisch erkannt)</td>
            </tr>
            <tr>
                <td class="strong">loop</td>
                <td>Video nach Ende von vorne abspielen</td>
            </tr>
            <tr>
                <td class="strong">Metadaten</td>
                <td>Daten, die anderen Daten übergeordnet sind</td>
            </tr>
        </tbody>
    </table>

    <table class="m3">
        <thead>
            <tr>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="strong">rel</td>
                <td>Verhältnis zum HTML Dokument</td>
            </tr>
            <tr>
                <td class="strong">media</td>
                <td>eigener Stylesheet für den Drucker der nur für den Druck verwendet wird</td>
            </tr>
            <tr>
                <td class="strong">class</td>
                <td>Klassifizierung, mehrere Elemente gehören derselben Klasse an und sollen dasselbe tun</td>
            </tr>
        </tbody>
    </table>

    <img src="img/html/html39.jpg" class="iW-700 m2" alt="html">

    <h4 class="m1">HTML Entities</h4>
    <p class="m1">Reservierte Zeichen in HTML, werden als Programmbestandteil interpretiert. HTML Entities ermöglichen diese Zeichen darzustellen.</p>

    <p class="m1">Format ist immer ein &(Kaufmännisces Und – Ampersand), zwei Buchstaben und ein ;.</p>

    <img src="img/html/html40.jpg" class="iW-1000 m2" alt="html">

    <h4 class="m1"> Websiteaufbau/-struktur</h4>
   
    <ul class="m2">
        <li>Header</li>
        <li>Hero</li>
        <li>Content</li>
        <li>Footer</li>
    </ul>


    <p class="strong m1">Verschiedene Abschnitte einer Webseite (Struktur):</p>

<div class="flex m3">
    <ul>
        <li>&lt;article&gt;</li>
        <li>&lt;aside&gt;</li>
        <li>&lt;details&gt;</li>
        <li>&lt;figcaption&gt;</li>
        <li>&lt;figure&gt;</li>
        <li>&lt;footer&gt;</li>
        <li>&lt;header&gt;</li>
        <li>&lt;main&gt;</li>
        <li>&lt;mark&gt;</li>
        <li>&lt;nav&gt;</li>
        <li>&lt;section&gt;</li>
        <li>&lt;summary&gt;</li>
        <li>&lt;time&gt;</li>
    </ul>
    <img src="img/html/html42.jpg" class="iW-250 m2" alt="html">
</div>



 	
 	<p class="text-center fC-red m3 border-red">Viewport  ist der Bereich, welcher wirklich vom Display angezeigt wird unabhängig der Displaygröße.
</p>

<h4 class="m1">Awesome Font - Icons statt Text generieren, ab einer festgelegten Media Query</h4>

<p class="strong">in HTML</p>
<ul class="m2">
    <li>im Head einen Link Tag mit besprechender Referenz, 
    hierfür auf der Website: https://cdnjs.com/, die Schriftart Font Awesome suchen > auf den Button Copy klicken > Copy Link Tag</li>
    <li>im Body eine i Tag mit class für das gewünschte Icon einfügen (Definition der class=“fas fa-….)</li>
    <li>in https://fontawesome.com/ > im Tab Icons das entsprechende Icon suchen > Definition in der class im HTML Code einfügen</li>
</ul>

<p class="strong">HTML Code</p>
<table class="m2">
    <tbody>
        <tr>
            <td class="strong">i</td>
            <td>wird als Tag verwendet um Icons zu generieren (Tag ist verwaltet und sollte ansonsten nicht verwendet werden, ist aber bei Icons Konvention)</td>
        </tr>
        <tr>
            <td class="strong">span</td>
            <td>Definiert sich selbst als Tag und hat keine weiteren Eigenschaften, inline-Element</td>
        </tr>
    </tbody>
</table>	

<p class="strong">sinnvolle HTML-Variante für PC (Text) und Phone (Icon) Interface:</p>	
	
<img src="img/html/html41.jpg" class="iW-700 m2" alt="html">



 	
 	


				
			
	 		
						
						
						
						
					
			



    






 

			

 
		
		
		
		

		
		




	








 	

 	

 	


	









</div>

<?php require_once("content/code.php");?>

