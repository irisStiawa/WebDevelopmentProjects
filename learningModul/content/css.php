<div>

    <h4 class="m1">Farbcodes in Hexadezimalsystem</h4>

    <table class="m1">
        <tbody>
            <tr>
                <td class="strong">Dezimalzahlen:</td>
                <td>0,1,2,3,4,5,6,7,8,9</td>
            </tr>
            <tr>
                <td class="strong">Binär:</td>
                <td>0,1</td>
            </tr>
            <tr>
                <td class="strong">Hexadezimal:</td>
                <td>0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F</td>
            </tr>
        </tbody>
    </table>

<p class="fC-red text-center m3">Internetseite für Farbcodes/Farbschema: Color Picker – gegebenen falls in Google</p>
 	
 	<h4>CSS in HTML</h4>
     <p class="m1 fS-08">= mögl. CSS-Code in HTML einzubinden</p>		
 		<ul class="m3">
            <li>externe Stylesheets</li>
            <li>In HTML Dokument:
            <p class=" fS-08">&lt;style&gt;</p>
            <p class="ml1 fS-08">CSS-Code</p>
            <p class="m1 fS-08">&lt;/style&gt;</p>        
            </li>
            <li>In HTML-Tag:
            <p class="m1 fS-08">&lt;h1 style ="CSS-Code"&gt;</p> 
            </li>
         </ul>



<h4 class="m1">Auszeichnungen mit ID</h4>
<p class="m3">Verbindungen durch ID ist spezifischer. Sofern die Mehrheit einer Textstruktur gleich ist wird diese in CSS definiert (für Ausnahmen ID vergeben).</p>


<h4>Schriftfarbe</h4>
<p class="fS-08">=zur Einstellung einer neuen/anderen Schriftfarbe</p>
<img src="img/css/css1.jpg" class="iW-700 m3" alt="css">


<h4>Hintergrundfarbe</h4>
<img src="img/css/css2.jpg" class="iW-500 m3" alt="css">

<h4>Textbreite, Blocksatz</h4>
 
<img src="img/css/css3.jpg" class="iW-700 m3" alt="css">

<h4 class="m1">Verknüpfung mit HTML</h4>

<p>&lt;link href="css/design.css" type="text/css" rel="stylesheet"&gt;</p>
<p class="m3 fC-red">(für javascript wird statt href das Attribut src verwendet)</p>



<h4>Seitenhintergrund = Hellgrau</h4>
<p class="m1 fS-08">= Format ist nicht zwingend, aber übersichtlich</p>
<img src="img/css/css4.jpg" class="iW-600 m3" alt="css">

<p class="m3"><span class="strong">Kommentare in CSS:</span>  /*Text*/  (* in englisch Asterisk)</p>

<h4>Inspector/Console</h4>
<p class="fS-08 m1">=F12 Taste auf der Internetseite</p>

<p class="m3">Zeigt den gesamten HTML Code und die dazugehörige Formatierung. (Hilfreich bei ungewünschten Formatierungsergebnissen- man kann Kleinigkeiten ändern und austesten)</p>

<h4>CSS Box Model</h4>

<img src="img/css/css5.jpg" class="iW-1000 m3" alt="css">

<p class="strong">ID in CSS</p>
<p class="m3">= wenn ich in CSS mit IDs arbeiten will, dann muss ich davor ein # setzen, IDs dürfen nicht mit einer Zahl beginnen</p>

<p class="strong">Klasse in CSS</p>
<p class="m3">= um eine Klasse zu definieren, vor der Klasse einen „.“ setzen</p>

<p class="strong">Links in CSS</p>
<p class="m3">= werden automatisch blau; Der &lt;a&gt; Tag übernimmt Schriftart und Schriftgröße. <span class="fC-red">(Links sind in der Grundstruktur der Webbrowser Programmierung sehr tief verankert, daher muss ein Link immer direkt angesprochen werden wenn er im CSS-Code verändert werden soll.)</span></p>

<h4>Pseudoklasse</h4>
<p class="m1 fS-08"> = Status des Textes (hover -wenn man mit der Maustaste darüber streicht)</p>

<p class="m1"><span class="strong">CSS Code:</span>Selector:Pseudoklasse</p>


<p class="strong m1">mögliche Pseudoklassen:</p>

<table class="m3">
    <tbody>
        <tr>
            <td class="strong">hover</td>
            <td>darüberstreichen mit Maus</td>
        </tr>
        <tr>
            <td class="strong">active</td>
            <td>beim anklicken</td>
        </tr>
        <tr>
            <td class="strong">visited</td>
            <td>besucht</td>
        </tr>
        <tr>
            <td class="strong">last-child</td>
            <td>letztes Element</td>
        </tr>
    </tbody>
</table>

<h4>Buttons</h4>
<p class="m1 fS-08">=geometrische Fläche die sensitiv ist, meist rechteckig od. rund</p>

<p>Hierfür Link als Blockelement definieren und ein Padding setzen.</p>

<img src="img/css/css6.jpg" class="iW-700 m3" alt="css">

<h4>Drop-down Menü</h4>
<p class="m1 fS-08">= unorderd List mit Link</p>
<img src="img/css/css7.jpg" class="iW-1000 m1" alt="css">

<p>dazugehöriger CSS-Code:</p>
<img src="img/css/css8.jpg" class="iW-700 m3" alt="css">

<h4>Drop-down Menü (Sublist ansprechen)</h4>
<img src="img/css/css9.jpg" class="iW-700 m3" alt="css">

<h4>Drop-down Menü (Sublist im Aktivmodus ansprechen)</h4>
<img src="img/css/css10.jpg" class="iW-700 m3" alt="css">

<p class="strong">Ergebnis:</p>
<img src="img/css/css11.jpg" class="iW-1000 m3" alt="css">

<h4>DOM - Document Object Model</h4>
<p class="fS-08 m1">=bietet ein Schema wie die Elemente voneinander abhängig sind</p>

<ul class="m1">
    <li>ul – parent element</li>
    <li>li – child element</li>
</ul>

<p class="m1">um unterstes Element anzusprechen: ul li ul li</p>

<table>
    <tbody>
        <tr>
            <td class="strong">.subnav</td>
            <td>wähle alle Elemente mit der Klasse subnav auf der Seite</td>
        </tr>
        <tr>
            <td class="strong">li.subnav</td>
            <td>wähle alle Listenelmente mit der Klasse subnav</td>
        </tr>
        <tr>
            <td class="strong">.subnav li </td>
            <td>damit werden alle Elemente der Klasse subnav haben (Listenelemente müssen in der Klasse enthalten sein – Kindelement der Klasse subnav)</td>
        </tr>
    </tbody>
</table>

<img src="img/css/css12.jpg" class="iW-600 m1" alt="css">

<h4 class="m1">Responsive Website</h4>

<p class="strong">Desktop vs IPhone/Tablet:</p>
<img src="img/css/css13.jpg" class="iW-1000 m1" alt="css">

<h4 class="m1">Flexbox</h4>

<p class="strong">Flexcontainer</p>
<img src="img/css/css14.jpg" class="iW-1000 m1" alt="css">

<p class="text-center strong">entlang der Hauptachse ausgerichtet</p>
<p class="text-center strong">(wenn sich die Hauptachse ändert, werden die Elemente untereinander angezeigt)</p>
<p class="text-center strong m1">Items können nur gmeeinsam strukturiert werden, wenn Höhe und Breite definiert ist</p>

<p class="text-center border-red fC-red m3">Wenn das Elternelement als Flexbox definiert wird, sind die Kindelemente automatisch Items.</p>

<h4>Flexboxen (Elternelemente) ausrichten</h4>
<p class="m1 fS-08">=(https://css-tricks.com/snippets/css/a-guide-to-flexbox/)</p>

<div class="flex-center m3">
<img src="img/css/css15.jpg" class="iW-300" alt="css">

<img src="img/css/css16.jpg" class="iW-300" alt="css">
<img src="img/css/css17.jpg" class="iW-300" alt="css">
</div>

<h4>Google Schrift in CSS einbinden</h4>
<p class="fS-08 m1">= Schriften die wir gratis in CSS verwenden können (https://fonts.google.com/)</p>

<p class="m3">Schrift auswählen> Select this style> Embled> @import> alles zwischen dem öffnenden und dem schließenden Style Tag kopieren> ganz am Anfang in den CSS-Code einfügen
</p>

<h4>Media Query</h4>
<p class="fS-08 m1">= Abfrage, welche Bildschirmgröße verwendet wird</p>

<p class="strong">CSS Code:</p>
<p class="m3">@media (max-width: Wert in px) {} = wenn der Bildschirm (media) max. groß wie Wert ist, dann werden die Deklarationen aus der Klammer erfüllt </p>

<h4>SVG- Scalable Vector Graphics</h4>
<p class="fS-08 m3">= Format zum abspeichern von Bildern, für Flexboxdesign auf Websites, für pixelloses vergrößern </p>

<h4>CSS-GRID </h4>
<p class="fS-08 m1">= dt. Raster, <span class="fC-red">!!!Hilfreich: der Browser Inspektor!!!</span></p>
<img src="img/css/css18.jpg" class="iW-1000 m1" alt="css">

<h4>Grid Areas definieren</h4>
<img src="img/css/css19.jpg" class="iW-450 m1" alt="css">

 	















 
	
 	
 	






		
		
	
	

















</div>


<?php require_once("content/codeCSS.php");?>