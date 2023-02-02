<div>


<p class="m3"><span class="strong">Programmiersprache:</span> feststehende Syntax, dessen Bedeutung sich nicht verändert</p>


<h4 class="fC-red m3 text-center border-red">JAVASCRIPT != JAVA</h4>

<p class="m1">Netscrape hat eine Scriptsprache entwickelt um Javaprogramme im Internet laufen zu lassen. Dies hat sich verselbstständigt und Javascript wurde zur eigenen Sprache. ECMA-Script (European Computer Manufacturers Association) - standardisierter Sprachkern von Javascript</p>

<p class="m3">Bei Programmdownload lädt man ein kompiliertes Programm, gesamter Code ist in einem Compiler den gesamten Programmcode enthält, im HTML Code auf der Browserseite ist das Programm bereits enthalten (direkt auf der HTML-Seite oder in einem externen File), für Javascript benötigen wir einen Interpreter (Internetbrowser) um den Code zu interpretieren.</p>


<h4 class="m1">Sprachbestandteile von Javascript:</h4>

<table class="m3">
    <tbody>
        <tr>
            <td class="strong">Variablen</td>
            <td>dürfen nicht mit einer Zahl beginnen, dürfen keine Abstände enthalten, sollten nicht mit einem Großbuchstaben beginnen, Name soll Sinn ergeben</td>
        </tr>
        <tr>
            <td class="strong">console.log(‚Hallo Boris!‘);</td>
            <td>Javascript gibt im Browser: Hallo Boris! aus</td>
        </tr>
        <tr>
            <td class="strong">let name;</td>
            <td>Variable ist ‚name‘</td>
        </tr>
        <tr>
            <td class="strong">console.log(‚Hallo‘+name);</td>
            <td></td>
        </tr>
        <tr>
            <td class="strong">conditions (Bedingungen: wenn, dann)</td>
            <td>wenn etwas passiert, dann tu das…</td>
        </tr>
        <tr>
            <td class="strong">loops (Schleifen)</td>
            <td>Wiederholung bis Bedingung erfüllt</td>
        </tr>
    </tbody>
</table>

<h4 class="m1">HTML Verbindung</h4>
<p class="m3"> <span class="strong">script:</span> Javascript-Datei einbinden (Attribut: src und Wert ist der Pfad)</p>

<h4 class="m1">Primitives</h4>
<ul class="m2">
    <li>Numbers (1	2000	34.574)</li>
    <li>Strings (Zeichenkette) – (‚Hallo‘  ‚roiaefiwsf09$%&/‘)</li>
    <li>Boolean (Wert der nur richtig oder falsch sein kann) – (true   false)</li>
    <li>Null</li>
    <li>Undefined</li>
</ul>

<p class="strong">Variable deklarieren (Abstand f. Lesbarkeit):</p> 
<img src="img/javascript/javascript1.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Bei Variablennamen Definition darf folgendes nicht sein:</p>
<ul class="m2">
    <li>sollte nicht mit einem Großbuchstaben beginnen, keine Umlaute, kein Dollarzeichen (Konvention)</li>
    <li>dürfen keine Reservierten Wörter sein (let, function)</li>
    <li>dürfen nicht mit einer Zahl beginnen</li>
</ul>


<p class="border-red m2 fC-red text-center">nach jeder Anweisung einen ; setzen</p>

<p class="strong">Inhalt einer Variable ausgeben:</p>
<img src="img/javascript/javascript2.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Ausgabe kombinieren:</p>
<img src="img/javascript/javascript3.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Programmiersprachen versteht die Regeln:</p>
<img src="img/javascript/javascript4.jpg" class="iW-700 m2" alt="javascript">

<p class="text-center border-red m2 fC-red">ACHTUNG!!:  Wenn der erste Wert ein String ist, ist das Ergebnis: 234</p>

<img src="img/javascript/javascript5.jpg" class="iW-700 m2" alt="javascript">

<p class="m1">z.B. ein Nutzer soll drei Zahlen eingeben die addiert werden, aber erstes Feld wird als Zeichen gefüllt – Ergebnis wird falsch sein</p>

<p class="strong">Evaluierung möglich:</p>
<img src="img/javascript/javascript6.jpg" class="iW-700 m2" alt="javascript">


<p class="strong">Dezimalstellen immer mit PUNKT</p>
<img src="img/javascript/javascript7.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Ausgabe der Länge einer Variable:</p>
<img src="img/javascript/javascript8.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Gibt Namen in Großbuchstaben aus:</p>
<img src="img/javascript/javascript9.jpg" class="iW-700" alt="javascript">
<p class="m2">!! toUpperCase ist eine Funktion daher muss diese mit Klammern erfolgen</p>


<p class="strong">Ersetzt den ersten definierten String in einer Variable:</p>
<img src="img/javascript/javascript10.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">In der gesamten Variable einen String ersetzen:</p>
<img src="img/javascript/javascript11.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Alte Funktion: NICHT MEHR VERWENDEN</p>
<img src="img/javascript/javascript12.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Teil einer Variable ausgeben:</p>
<img src="img/javascript/javascript13.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">substr() oder substring():</p>
<img src="img/javascript/javascript14.jpg" class="iW-700 m2" alt="javascript">

<div class="flex">
<p class="strong">Ergebnis:</p>
<img src="img/javascript/javascript15.jpg" class="iW-100 m2" alt="javascript">
</div>


<p class="strong">Ausgabe des Variablentypens:</p>
<img src="img/javascript/javascript16.jpg" class="iW-700 m2" alt="javascript">

<p class="fC-red border-red m2 text-center">Variablen die nicht deklariert werden sind undefine.</p>

<p class="strong">Es können auch mehrere Variablen hintereinander definiert werden (UNÜBERSICHTLICH):</p>
<img src="img/javascript/javascript17.jpg" class="iW-700 m2" alt="javascript">

<p class="strong fS-08">mögl. Schreibweise:</p>
<img src="img/javascript/javascript18.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Liste von Werten (array)</p>
<p class="fS-08">= wir können uns jeden beliebigen Wert ausgeben lassen, Bsp. erster Wert</p>
<img src="img/javascript/javascript19.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Template String für eine Ausgabe (in größeren Programmcodes hilfreich):</p>
<img src="img/javascript/javascript20.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">kann auch erweitert werden:</p>
<img src="img/javascript/javascript20.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">indexOf()=b ein Array einen Wert enthält (gibt die Position aus):</p>
<img src="img/javascript/javascript21.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">pop() und shift():</p>
<img src="img/javascript/javascript22.jpg" class="iW-700 m2" alt="javascript">

<div class="flex m2">
<p class="strong">Ergebnis:</p>
<img src="img/javascript/javascript23.jpg" class="iW-600" alt="javascript">
</div>

<p class="strong">am Ende einen Wert hinzufügen, push():</p>
<img src="img/javascript/javascript24.jpg" class="iW-700 m2" alt="javascript">

<div class="flex m2">
<p class="strong">Ergebnis:</p>
<img src="img/javascript/javascript25.jpg" class="iW-600" alt="javascript">
</div>

<p class="strong">Wert ans Ende setzen:</p>
<img src="img/javascript/javascript26.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Bedingungen:</p>
<img src="img/javascript/javascript27.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">mehrere Bedingungen abfragen:</p>
<img src="img/javascript/javascript28.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Vergleichsoperator: ==</p>
<img src="img/javascript/javascript29.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Ist eine Variable nicht (ungleich):</p>
<img src="img/javascript/javascript30.jpg" class="iW-700 m2" alt="javascript">


<p class="strong">In diesem Fall ist die Ausgabe gegeben, da nur der Inhalt nicht der Type geprüft wird:</p>
<img src="img/javascript/javascript31.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Präzise Überprüfung (auch der Datentype):</p>
<img src="img/javascript/javascript32.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Javascript-Meldung: NaN</p>
<p class="m2">-	bei einer Subtraktion zweier Strings wird gemeldet das die Variablen keine Ziffern sind <span class="fC-red">(ACHTUNG!!: werden Strings, welche mit Ziffern deklariert und subtrahiert – Javascript rechnet trotzdem das Ergebnis aus)</span></p>

<p class="strong">String am Anfang einer Ausgabe (hier werden alle Variablen als Strings verstanden): </p>
<img src="img/javascript/javascript33.jpg" class="iW-700 m2" alt="javascript">


<h4 class="strong border-black text-center m2">Operatoren in Javascript:<br>
+,-,*,/,%
</h4>

<p class="strong">Überprüfung ob die Variable gleiche Werte enthält (Ausgabe: true od. false):</p>
<img src="img/javascript/javascript34.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Überprüfung ob die Variable gleiche Werte enthält und ob sie vom selben Typ ist (Ausgabe: true od. false):</p>
<img src="img/javascript/javascript35.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Gibt nicht dasselbe aus</p>
<img src="img/javascript/javascript108.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">bei let existiert die Zahl nur im Codeblock (daher b wird eine Error-Meldung)</p>
<img src="img/javascript/javascript109.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">bei var existiert die Zahl auch außerhalb des Codeblocks (daher b wird ausgegeben)</p>
<img src="img/javascript/javascript110.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">wenn wir den letzten String mit dieser Deklaration erfahren wollen (z.B. wenn wir bei einer Datei die Endung erfahren wollen – alles nach dem letzten Punkt)</p>
<img src="img/javascript/javascript111.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Endung einer Datei ausgeben</p>
<img src="img/javascript/javascript112.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">kürzere Schreibmethode:</p>
<img src="img/javascript/javascript113.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Slice gibt die letzten 6 Strings aus:</p>
<img src="img/javascript/javascript114.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Splittet einen String (mit Anführungszeichen die die Buchstaben, ohne Anführungszeichen die Wörter)</p>
<img src="img/javascript/javascript115.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Um ein Objekt aus HTML anzusprechen und in eine Variable legen:</p>
<img src="img/javascript/javascript116.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Inhalt eines HTML-Elements deklarieren</p>
<img src="img/javascript/javascript117.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">innerHTML mit HTML-Tag</p>
<img src="img/javascript/javascript118.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Definiert die Hintergrundfarbe eines HTML-Elements</p>
<img src="img/javascript/javascript119.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">CSS-Styling in Javascript:</p>
<img src="img/javascript/javascript36.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Statt mit Split eine andere Variante um ein Array zu kreieren:</p>
<img src="img/javascript/javascript37.jpg" class="iW-700 m2" alt="javascript">

<h4>Funktionen</h4>
<p class="fS-08 m1">= ist ein Codeblock, dem ein Name zugewiesen wird und der immer wieder im Code abgerufen werden kann</p>

<ul class="m2">
    <li>vernünftig bei der Namensvergabe ist ein Verb (tu etwas, was tut die Funktion)</li>
    <li>Funktionen werden im Javascriptcode nach oben geschoben und können daher nach der Ausgabe geschrieben/beschrieben werden</li>
</ul>

<p class="strong">Funktion um Quadratzahlen zu erzeugen:</p>
<img src="img/javascript/javascript38.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Um eine Funktion aufzurufen:</p>
<img src="img/javascript/javascript39.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Um eine Funktion aufzurufen und ihr einen Wert zu geben den Sie definieren soll:</p>
<img src="img/javascript/javascript40.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Ergebnis:</p>
<img src="img/javascript/javascript41.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Mehrere Werte deklarieren:</p>
<img src="img/javascript/javascript42.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Zufallszahl generieren:</p>
<img src="img/javascript/javascript43.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Zufallszahl höher als 1 generieren, dann * der gewünschten Maxime (z.B. Maxime 3):</p>
<img src="img/javascript/javascript44.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Zufallszahl runden:</p>
<img src="img/javascript/javascript45.jpg" class="iW-700 m2" alt="javascript">

<p>kurz Schreibweise:</p>
<img src="img/javascript/javascript46.jpg" class="iW-700 iH-25 m2" alt="javascript">

<p class="strong">Zufällige Namen generieren:</p>
<img src="img/javascript/javascript47.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">in einer Funktion:</p>
<img src="img/javascript/javascript48.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Schleife: for</p>
<img src="img/javascript/javascript49.jpg" class="iW-700 m2" alt="javascript">

<p class="text-center m2 border-red fC-red">for ([initialization]; [condition]; [final-expression])
statement</p>

<p class="strong">Schleife: while, solange..</p>
<img src="img/javascript/javascript50.jpg" class="iW-700 m2" alt="javascript">

<p class="strong">Schleife: do…while, tu…solange</p>
<img src="img/javascript/javascript51.jpg" class="iW-700 m2" alt="javascript">

<p class="strong"></p>
<img src="img/javascript/javascript52.jpg" class="iW-700 m3" alt="javascript">

<h4 class="m1">JavaScript Assignment Operators</h4>

<table class="m3 text-center border-black">
    <thead>
        <tr>
            <th>Operator</th>
            <th>Example</th>
            <th>Same As</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>=</td>
            <td>x = y</td>
            <td>x = y</td>
        </tr>
        <tr>
            <td>+=</td>
            <td>x += y</td>
            <td>x = x + y</td>
        </tr>
        <tr>
            <td>-=</td>
            <td>x -= y</td>
            <td>x = x - y</td>
        </tr>
        <tr>
            <td>*=</td>
            <td>x *= y </td>
            <td>x = x * y</td>
        </tr>
        <tr>
            <td>/=</td>
            <td>x /= y</td>
            <td>x = x / y</td>
        </tr>
        <tr>
            <td>%=</td>
            <td>x %= y</td>
            <td>x = x % y</td>
        </tr>
        <tr>
            <td>**=</td>
            <td>x **= y</td>
            <td>x = x ** y</td>
        </tr>
    </tbody>
</table>		 		

<h4 class="m1">JavaScript Arithmetic Operators</h4>

<table class="m3">
    <tr>
        <td class="strong">**</td>
        <td>Exponentiation </td>
    </tr>
    <tr>
        <td class="strong">++</td>
        <td>Increment</td>
    </tr>
    <tr>
        <td class="strong">--</td>
        <td>Decrement</td>
    </tr>
</table>

<div class="text-center border-black m2">
    <h4 class="m1">CSS styling in Javascript</h4>
    <p><span class="kursiv strong">element</span>.style.fontFamily<br>
    <span class="kursiv strong">element</span>.style.color<br>
    <span class="kursiv strong">element</span>.style.paddingLeft</p>
</div>

<p class="strong">Element entfernen</p>
<img src="img/javascript/javascript53.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">zurückgegeben wird trotzdem ein Array obwohl nur ein Element entfernt wird, daher wenn der Inhalt vorrangig ist:</p>
<img src="img/javascript/javascript54.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Aufgabe: generiere ein Array welches per Zufall die Anzahl der Namen ausgibt die gewünscht ist: </p>
<img src="img/javascript/javascript55.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Binär zu Decimal:</p>
<img src="img/javascript/javascript56.jpg" class="iW-700 " alt="javascript">

<p>oder:</p>
<img src="img/javascript/javascript57.jpg" class="iW-700" alt="javascript">

<img src="img/javascript/javascript58.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Schreibweise vereinfachen:</p>
<img src="img/javascript/javascript59.jpg" class="iW-700 m3" alt="javascript">

<p>verketten:</p>
<img src="img/javascript/javascript60.jpg" class="iW-700 iH-30 m3" alt="javascript">

<p class="strong">Wert auf HTML-Seite ausgeben:</p>
<img src="img/javascript/javascript61.jpg" class="iW-700" alt="javascript">

<p>oder:</p>
<img src="img/javascript/javascript62.jpg" class="iW-700" alt="javascript">

<p>oder Zahlen zurückgeben:</p>
<img src="img/javascript/javascript63.jpg" class="iW-700 m3" alt="javascript">

<div class="border-black text-center m3">
    <h4 class="m1">Youtube Tutorials</h4>
    <p>Search for: Javascript beginners Tutorial <br><br>
    <span class="strong">Channel: The Coding Train</span><br>
    16.1: let vs var – Topics of JavasScript/ES6 <br>
    16.3: ES6 Arrow Function – Topics of JavasScript/ES6 <br><br>
    Channel: Programming with Mosh <br>
    Channel: freeCodeCamp.org</p>
</div>

<p class="strong">Hintergrundfarbe mit Buttons ändern:</p>
<img src="img/javascript/javascript64.jpg" class="iW-700" alt="javascript">
<img src="img/javascript/javascript65.jpg" class="iW-700 m3" alt="javascript">

<h4 class="m1">THIS</h4>
<ul class="m3">
    <li>um CSS- Eigenschaften aus einem HTML-Element auszulesen wird <span class="fC-red">getComputedStyle(this).Eigenschaft</span>  benötigt</li>
    <li>um eine CSS- Eigenschaft auf ein HTML-Element anzuwenden kann es in einer Funcktion mit <span class="fC-red">this.style.Eigenschaft</span> werden</li>
</ul>

<p class="strong">Funktionen können gleich undefiniert in die Aktion eines .addEventListener eingefügt werden:</p>
<img src="img/javascript/javascript66.jpg" class="iW-700 m3" alt="javascript">

<h4 class="m1">Schreiboption: if-Bedingungen </h4>
<p class="m3">counter ==? score+=50:score+=25</p>

<h4 class="m1">Objekte</h4>

<p class="strong">Array mit Schlüssel (key) zu jedem Wert (value):</p>
<img src="img/javascript/javascript67.jpg" class="iW-700 m3" alt="javascript">

<p class="fC-red border-red m3 text-center">Objekte sollten mit einem Großbuchstaben beginnen um sie zu differenzieren.
Propertys sind die Eigenschaften (firstname, lastname)</p>

<p class="strong">Um in einem Objekt auf eine Property zurückzugreifen muss in der Funktion das Objekt durch <span class="fC-red">this</span> angesprochen werden:</p>
<img src="img/javascript/javascript68.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">an die Funktion des Objekts können Werte übergeben werden:</p>
<img src="img/javascript/javascript69.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Objekte in der Local Storage speichern:</p>
<img src="img/javascript/javascript70.jpg" class="iW-700 m3" alt="javascript">

<h4 class="m1">Javascript Object Notation vs JSON</h4>

<p class="strong">Objektform in Javascript:</p>
<p class="m1">{firstname: ‚Max‘, age: 34}</p>

<p class="strong">Objektform in JSON:</p>
<p class="m2">{„fristname“: „Max“, „age“: 34}</p>

<p class="strong">Umwandlung in ein JSON Objekt:</p>

<img src="img/javascript/javascript71.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">JSON String wieder in ein Javascript Objekt zurückverwandeln:</p>
<img src="img/javascript/javascript72.jpg" class="iW-700 m1" alt="javascript">

<p class="m3"><span class="strong">JSON</span> erlaubt Daten an andere Programmiersprachen zu übergeben. Daher muss ein Objekt das in Javascript an JSON übergeben wird umgewandelt werden und auch in PHP wieder aus JSON übersetzt werden.</p>

<p class="strong">Vereinfachte Schreibweise Javascript</p>
<img src="img/javascript/javascript73.jpg" class="iW-700 m1" alt="javascript">
<img src="img/javascript/javascript74.jpg" class="iW-700 m3" alt="javascript">

<p class="strong m1">Objekt Properties können durch folgende mögliche schreibweisen aufgerufen:</p>

<ul>
    <li>Objektname.methode</li>
    <li>Objektname[‚property‘]</li>
</ul>

<img src="img/javascript/javascript81.jpg" class="iW-700 m3" alt="javascript">
	
<p class="strong">Um für alle Objekte eines Arrays ein neues HTML-Element erstellen und in ein bestehendes HTML-Element einzufügen:</p>
<img src="img/javascript/javascript82.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Um Kind-HTML-Elemente wieder zu löschen:</p>
<img src="img/javascript/javascript83.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">keypress-Event</p>
<p class="kursiv">Für die entsprechenden Anweisungen wird hier der keycode benötigt (Internet, Konsole):</p>
<img src="img/javascript/javascript84.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Es können property-Blöcke definiert werden:</p>
<img src="img/javascript/javascript85.jpg" class="iW-700" alt="javascript">

<p class="strong text-center m3">In JSON stehen auch die property-Namen unter Anführungszeichen.</p>

<p class="strong">Switch-Abfragen:</p>
<img src="img/javascript/javascript86.jpg" class="iW-700" alt="javascript">
<img src="img/javascript/javascript87.jpg" class="iW-700 mt0 m3" alt="javascript">

<h4 class="m1">Librarys und Frameworks </h4>
<p class="m2">Ein JavaScript-Framework ist ein in JavaScript geschriebenes Anwendungsframework. Es unterscheidet sich von einer JavaScript-Bibliothek in seinem Kontrollfluss: Eine Bibliothek bietet Funktionen, die vom übergeordneten Code aufgerufen werden können, während ein Framework das gesamte Anwendungsdesign definiert.
</p>

<div class="flex-top m2">

    <div>
        <p class="strong">Website für Bibliotheken: </p>
        <ul>
            <li>jquery</li>
            <li>Leaflet</li>
            <li>fullPage.js</li>
            <li>anime.js</li>
            <li>Screenfull.js</li>
            <li>Moment.js</li>
            <li>Hammer.js, Masonry</li>
            <li>D3.js, slick</li>
            <li>Popper.js</li>
            <li>Conclusion</li>
        </ul>
    </div>
    <div class=" ml2">
        <p class="strong">Website für Framework: </p>
        <ul>
            <li>React</li>
            <li>Vue.js</li>
            <li>Express</li>
            <li>Angular JS</li>
            <li>Rails</li>
            <li>Laravel – PHP</li>
            <li>Spring</li>
            <li>Django – Python</li>
            <li>Flask – Python</li>
            <li>Node.js</li>
            <li>Ember.js</li>
        </ul>
    </div>
</div>
<p class="strong">JS Framework</p>
<p class="fS-08 m1">= Sammlung von Programmcode um schneller Anwendungen zu erstellen</p>

<p class="m1">verfügen über eigene Architektur Grundgerüst der App Inversion of Control steilere Lernkurve</p>

<p class="m3">Syntax oft anders als tatsächlicher Javascript-Code</p>

<p class="strong">Bibliotheken</p>
<p class="fS-08 m1">=erleichtern Programmierung Hilfsfunktionen für bestimmte Anwendungen einfach zu lernen (z.B. Animationen, für bestimmte Arten von Anwendungen- Schwerpunkt, Akkordeonmenüs, User-Interface) > vergleichsweise leicht zu lernen</p>

<p class="m3">Hier müssen lediglich Parameter übergeben werden</p>

<p class="strong m1">JS-Code um Frameworks und Bibliotheken einzubinden</p>
<p class="kursiv fS-08 strong">Download oder extern Einbinden in Projekt</p>
<p class="m3">&lt;script src=‘https://cdn.jselivr.net/npm/vue/dist/vue.js‘&gt;&lt;/script&gt;</p>

<p class="strong m1">Syntax für jQuery</p>

<p class="fC-red m1 border-red text-center">Basic syntax is: $(selector).action()</p>

<p class="kursiv fS-08">in HTML:</p>
<img src="img/javascript/javascript75.jpg" class="iW-700 m3" alt="javascript">

<p class="kursiv fS-08">in JS:</p>
<img src="img/javascript/javascript76.jpg" class="iW-700 m3" alt="javascript">

<p class="strong m1">Syntax für DIV mit Animation</p>
<p class="kursiv fS-08">in HTML:</p>
<img src="img/javascript/javascript77.jpg" class="iW-700 m3" alt="javascript">

<p class="kursiv fS-08">in JS:</p>
<img src="img/javascript/javascript78.jpg" class="iW-700 m3" alt="javascript">


<h4>Chaining Syntax</h4>
<p class="fS-08">= Code verketten</p>
<img src="img/javascript/javascript79.jpg" class="iW-700 m1" alt="javascript">

<p class="strong text-center border-black m1">Find Syntax in Cheat Sheet: <br>https://oscarotero.com/jquery/</p>

<p class="strong">WICHTIGE Syntax: $(document).ready()</p>
<p class = "m3">The $(document).ready() method allows us to execute a function when the document is fully loaded. This event is already explained in the jQuery Syntax chapter. </p>


<h4 class="m1">Syntax für Frameworks</h4>
<p class="strong">In HTML einbinden</p>
<p class="m2">&lt;script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"&gt;&lt;/script&gt;</p>

<p class="strong">Basic Syntax in HTML:</p>
<img src="img/javascript/javascript80.jpg" class="iW-700 m3" alt="javascript">

<h4 class="m1">ARROW Funktions</h4>

<p class="strong">Funktionen (Schreibweisen)</p>
<img src="img/javascript/javascript88.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Arrow Funktion verlieren Ihren Bezug zu this nicht</p>
<img src="img/javascript/javascript89.jpg" class="iW-700" alt="javascript">

<p class="kursiv">Result: </p>
<img src="img/javascript/javascript90.jpg" class="iW-700 m3" alt="javascript">

<h4>AJAX</h4>
<p class="m2 fS-08">= lazy loding – Dinge werden nur geladen wenn sie erforderlich sind</p>

<p class="strong">Erforderlich</p>
<p class="kursiv ml1">1 Page:</p>
<ul class="m3 ml2">
    <li>DB connect</li>
    <li>Load 10 posts – SQL Auswahl ändern!</li>
    <li>Loop durch DB Result</li>
    <li>Link zu den nächsten 10 Posts</li>
</ul>

<p class="strong">SQL Datenbank Select Statement begrenzen</p>
<img src="img/javascript/javascript91.jpg" class="iW-700 m3" alt="javascript">


<p class="strong">Syntax if- else -Bedingung: <br>
Wenn ein Parameter nicht vorhanden dann setze diesen auf Null</p>

<img src="img/javascript/javascript92.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Konzept: Promise in Javascript</p>
<img src="img/javascript/javascript93.jpg" class="iW-700 m2" alt="javascript">

<p class="fC-red text-center m3">warten bis etwas passiert und wenn nicht dann kann der Fehler abgefangen werden</p>

<p class="strong m1">Promise – Methode: </p>

<p class="kursiv">um zu eruieren welcher Pfad gefetched wird:</p>
<img src="img/javascript/javascript94.jpg" class="iW-700" alt="javascript">

<p class="kursiv">Daten aus Datenbank fetchen, in Javascript aufbauen und an HTML übergeben:</p>
<img src="img/javascript/javascript95.jpg" class="iW-700" alt="javascript">


<p class="kursiv">Promise (Object Syntax bei zusätzlichen Aufgaben einer Funktion):</p>

<img src="img/javascript/javascript96.jpg" class="iW-700 m3" alt="javascript">

<p class="strong m1">Lazyload</p>
<p class="kursiv">Daten für Javascript in PHP vorbereiten:</p>
<img src="img/javascript/javascript97.jpg" class="iW-700" alt="javascript">

<p class="kursiv">Lazyload in Javascript aufbauen:</p>
<img src="img/javascript/javascript98.jpg" class="iW-700 m3" alt="javascript">

<h4 class="m1">Canvas</h4>

<p class="strong">Um ein Rechteck zu zeichen</p>
<img src="img/javascript/javascript99.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Zeichenobjekt eine Farbe zuweisen</p>
<img src="img/javascript/javascript100.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">Kreis zeichnen</p>
<img src="img/javascript/javascript101.jpg" class="iW-700 m3" alt="javascript">

<p class="strong">verkehrtes Dreieck zeichnen</p>
<img src="img/javascript/javascript102.jpg" class="iW-700" alt="javascript">

<p>Ergebnis:</p>
<img src="img/javascript/javascript103.jpg" class="iW-300 m3" alt="javascript">

<p class="strong">Viertelkreis und Sechseck</p>
<img src="img/javascript/javascript104.jpg" class="iW-700" alt="javascript">

<p>Ergebnis:</p>
<img src="img/javascript/javascript105.jpg" class="iW-300 m3" alt="javascript">

 
<h4 class="m1">Statistiken  Library -Charts.js </h4>

<p class="strong">Chart Klasse</p>
<img src="img/javascript/javascript106.jpg" class="iW-700" alt="javascript">

<p>Ergebnis:</p>

<img src="img/javascript/javascript107.jpg" class="iW-700 m3" alt="javascript">
 


 












</div>

<?php 
// require_once("content/codejs.php");
?>

