
<div>
    <table>
        <tr>
            <td class="strong">color</td>
            <td>Schriftfarbe (Farbe in Hexadezimal angeben oder benennen), RGB-Alpha (Alphakanal) - Transparenz, Wert ist wäre der RGB-Wert und der Alphawart, z.B. schwarze Transparenz 50% –  „0, 0, 0, 0.5“</td>
        </tr>
        <tr>
            <td class="strong">width</td>
            <td>Textbreite, kann in px oder Prozent zur Fenstergröße angeben werden</td>
        </tr>
        <tr>
            <td class="strong">text-align</td>
            <td>Textausrichtung, Wert: center, left, right, justifiy</td>
        </tr>
        <tr>
            <td class="strong">font-family</td>
            <td>Schriftart, es können mehrere angeben werden falls eine nicht hinterlegt ist im Webbowser</td>
        </tr>
        <tr>
            <td class="strong">border</td>
            <td>Boxrand</td>
        </tr>
        <tr>
            <td class="strong">width</td>
            <td>Breite</td>
        </tr>
        <tr>
            <td class="strong">height</td>
            <td>Höhe</td>
        </tr>
        <tr>
            <td class="strong">padding</td>
            <td>Innenabstand</td>
        </tr>
        <tr>
            <td class="strong">margin</td>
            <td>Außenabstand, Zentrieren mit Margin (wenn der Inhalt nicht über die gesamte Breite der Seite geht): 0 auto, </td>
        </tr>
        <tr>
            <td class="strong">border-color</td>
            <td>Boxrandfarbe, (dashed, solid, dotted)</td>
        </tr>
        <tr>
            <td class="strong">font-size</td>
            <td>Schriftgröße</td>
        </tr>
        <tr>
            <td class="strong">line-height</td>
            <td>Zeilenabstand</td>
        </tr>
        <tr>
            <td class="strong">text-decoration</td>
            <td>Werte: none, underline, line through</td>
        </tr>
        <tr>
            <td class="strong">float</td>
            <td>Wert: Left, Listenelemente nebeneinander</td>
        </tr>
        <tr>
            <td class="strong">list-style</td>
            <td>Wert: none, Listenelemente ohne Aufzählungszeichen</td>
        </tr>
        <tr>
            <td class="strong">:first Child</td>
            <td>Pseudoklasse für das erste Element></td>
        </tr>
        <tr>
            <td class="strong">display</td>
            <td>Wert: block, um ein Blockelement zu kreieren; Wert: none, lässt das Element verschwinden; Wert: flex, Element wird zur Flexbox (Breite und Höhe muss definiert sein); grid,	Gridcontainer</td>
        </tr>
        <tr>
            <td class="strong">clear</td>
            <td>Wert: both, lässt die Elemente der List untereinander erscheinen (neutralisiert die float Anweisung)</td>
        </tr>
        <tr>
            <td class="strong">position</td>
            <td>Wert: fixiert die Deklaration auf dem Bildschrim (zusätzlich benötigt es eine Deklaration wo es liegen soll (z.B. bottom: 0 – ganz unten oder top – ganz oben)</td>
        </tr>
        <tr>
            <td class="strong">vh</td>
            <td>Viewport height, Viewporthöhe (Wert in %)</td>
        </tr>
        <tr>
            <td class="strong">vw</td>
            <td>Viewport width, Viewportbreite (Wert in %)</td>
        </tr>
        <tr>
            <td class="strong">overflow</td>
            <td>Inhalt der zu groß ist, Wert: hidden- alles was darüber hinaussteht wird ausgebendet</td>
        </tr>
        <tr>
            <td class="strong">text-aglin</td>
            <td>Horizontale Ausrichtung von Boxelementen, benötigt eine Breite (width=““) um angesteuert zu werden</td>
        </tr>
        <tr>
            <td class="strong">justify-content</td>
            <td>in Kombination mit Flexbox; Wert: center - zentriert horizontal in einer Flexbox (entlang der Main Axis; space-around - verteilt bei ungleichmäßigen Elementen den Abstand anteilsmäßig; space-evenly - verteilt sie horizontal entlang der Main Axis gleichmäßig;space-between - verteilt den Abstand zur Mitte hin;inherit - erbt die justify-content Definition des Elternelements; initial - stellt den Standard wieder her; unset - stellt die Einstellungen zurück</td>
        </tr>
        <tr>
            <td class="strong">flex-direction</td>
            <td>in Kombination mit Flexbox; Wert: column -	die Flexboxen stehen untereinander (autom. als row deklariert); row reverse	- ließt den Code rückwärts (zB.: für arabische Sprachen)</td>
        </tr>
        <tr>
            <td class="strong">flex-wrap</td>
            <td>in Kombination mit Flexbox; Wert: wrap - Flexboxumbrüche abhängig von der Bildschirmbreite (autom. als nowrap deklariert)</td>
        </tr>
        <tr>
            <td class="strong">align-items</td>
            <td>in Kombination mit Flexbox; Wert: center - zentriert die Items vertikal</td>
        </tr>

        <tr>
            <td class="strong">gap</td>
            <td>in Kombination mit Flexbox oder Grid; Abstand zwischen den Elementen, ersetzt den margin ZWISCHEN den Flexboxen (wird nicht von Chrome übernommen)</td>
        </tr>
        <tr>
            <td class="strong">box-shadow</td>
            <td>Schlagschatten (Wert: horizontaler Versatz in px, vertikaler Versatz in px, Größe des Schlagschattens in px, Farbe (sinnvoll transparent)</td>
        </tr>
        <tr>
            <td class="strong">transition</td>
            <td>Effektverzögerung(im Übergang), Wert: Anteil vom hovereffekt der gewünscht ist (all, height, usw.) und Anzahl der Sekunden</td>
        </tr>
        <tr>
            <td class="strong">transition-delay</td>
            <td>Effekt nach Ablauf der Sekunden, Wert: ms, s (Millisekunden, Sekunden)</td>
        </tr>
        <tr>
            <td class="strong">grid-template-colums</td>
            <td>Wert ist in fractions (fr), je nachdem wie viele Spalten wird der Viewport aufgeteilt (z.B. 1f 1f – zwei gleich große Spalten, 2f 1f – erste Spalte doppelt so groß wie zweite) Hinweis: der Gesamtbildschirm ergibt sich aus der Anzahl der Fractions)</td>
        </tr>
        <tr>
            <td class="strong">grid-template-rows</td>
            <td>Wert ist in fractions (fr), je nachdem wie viele Spalten wird der Viewport aufgeteilt (z.B. 1f 1f – zwei gleich große Spalten, 2f 1f – erste Spalte doppelt so groß wie zweite) Hinweis: der Gesamtbildschirm ergibt sich aus der Anzahl der Fractions)</td>
        </tr>
        <tr>
            <td class="strong">grid-area</td>
            <td>Wert: sofern keine template-area definiert ist (Siehe: grid-template-area) - Koordinaten durch / getrennt (z.B. Beginn/Ende 1 / 2 / 3 / 3) </td>
        </tr>
        <tr>
            <td class="strong">grid-template-area</td>
            <td>es können Bereiche mit Namen statt mit Koordinaten definiert werden, sodass im jeweiligen div nur noch der Name des Bereichs statt der Koordinaten definiert werden muss</td>
        </tr>
        <tr>
            <td class="strong">background</td>
            <td>bei dieser Deklaration kann ich mehrere Eigenschaften zusammenfassen oder alles einzeln deklarieren (z.B., background: Farbe url() no repeat-Anordnung der Eigenschaften nicht relevant od. background-repeat:no-repeat)</td>
        </tr>
        <tr>
            <td class="strong">background-size</td>
            <td>Wert: Cover - alles was zuviel ist wird abgeschnitten, Wert: contain - Bild schrumpft auf ganze Höhe und repeated, Wert:auto- original Größe, Wert: inherit - background-size Einstellungen werden vom Elternelement übernommen, Wert:unset – alle voreingestellten Werte löschen	</td>
        </tr>
        <tr>
            <td class="strong">background-position</td>
            <td>Bildausschnitt ändern, Standardwert: top left, Werte: right, left, bottom, center</td>
        </tr>
        <tr>
            <td class="strong">box-sizing</td>
            <td>border-box - korrigiert das automatische padding</td>
        </tr>
        <tr>
            <td class="strong">visibility</td>
            <td>hidden - lässt ein Element verschwinden, aber erhält den Raum den es eingenommen hat</td>
        </tr>
        <tr>
            <td class="strong"></td>
            <td></td>
        </tr>

        
        letter-spacing	Wert: 0 – Standardabstand zwischen den Buchstaben

        word-spacing	Abstand zwischen den Wörter



        font-variant    Wert: small-caps, Kapitälchen (small-caps: kleine Großbuchstaben)	


        property:nth-child()	gibt entweder jedem geraden oder ungeraden Wert ein anderes design, Wert: even – gerade Werte, odd – gerade Werte


	
	
	
	

	
        	
	








	
	
	
			
	
	
	

	
	
			
		



 		
		
	
	




    </table>

</div>