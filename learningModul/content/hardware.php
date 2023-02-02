<div>
    <p class="m2"><span class="strong">Definition:</span> alles das was man angreifen kann</p>
    <p class="m2"><span class="strong">Komponenten:</span> eingebaute und außerhalb des Computers</p>
    <p class="ml2 m3"> <span class="strong">externe Geräte:</span> Scanner, Drucker, Maus, Joystick <br><span class="strong">interne Geräte:</span> Motherboard, Prozessor, Festplatte </p>

<h4>Netzteil</h4>
<p class="fS-08 m1">= dient zur Stromversorgung in Mikrocomputern.</p>

<p class="m3">Es gibt verschiedene Spannungsvarianten. Der Stromverbrauch, der einzelnen Komponenten eines Rechners ist wichtig, wenn die Spannung vom Netzteil zu gering ist kann dieser nicht starten. Empfohlen sind Websites in denen der Stromverbrauch der einzelnen Komponenten ausrechnet werden kann, um die Belastbarkeit des Netzteils zu eruieren. Der Aufbau ist immer gleich. Das Netzteil hat einen eigenen Lüfter(welcher als erstes Startet), Anschluss: 24 Polig</p>


<h4 class="m1">Motherboard</h4>

<p class="m1">Als nächstes kommt der Strom kommt auf das Motherboard. Es ist in einem nichtflüchtigen Speicher auf der Hauptplatine eines PC abgelegt und wird unmittelbar nach dessen Einschalten ausgeführt. Es eruiert ob alle im BIOS eingetragenen Geräte auch Strom bekommen. Im BIOS ist der Standort des Betriebssystems festgelegt und kann manipuliert werden. Power on System(POS System Test). Hier können je nach Hersteller diverse Einstellungen vorgenommen werden. Meist kann BIOS mit F2 beim Start aufgerufen werden.
(Start Sequenz hier ändern, wenn kein Betriebssystem vorhanden)</p>

<p class="m1">Am Motherboard fließen Datenströme über ein Bussystem. Bussysteme gibt es in unterschiedlichen Ausfertigungen (Hersteller unterscheiden) </p>

<table class="m2">
    <tbody>
        <tr>
            <td class="strong">Steuerbus</td>
            <td>heißt auch Kontrollbus, steuert ob die Daten eingelesen werden sollen oder geschrieben werden sollen, durch welche Eingabe und Ausgabe die Daten erfolgen</td>
        </tr>
        <tr>
            <td class="strong">Adressbus</td>
            <td>schickt dem Datenbus den Standort an dem die Daten gespeichert werden</td>
        </tr>
        <tr>
            <td class="strong">Datenbus</td>
            <td>dient dazu, das Daten mit dem Arbeitsspeicher ausgetauscht werden, dies geht nach einer bestimmten Struktur</td>
        </tr>
    </tbody>
</table>

<ul class="m3">
    <li class="m1"><span class="strong">Boot-Manager startet: </span>Auf ihm ist festlegen mit welchem Betriebssystem gearbeitet wird
</li>
    <li class="m1"><span class="strong">Startsequenzen:</span> werden in den Arbeitsspeicher geladen(RAM), müssen die selbe Frequenz und Geschwindigkeit haben wie das Bussystem, wenn die Geschwindigkeiten variieren richtet sich das System nach dem langsamsten</li>
    <li class="m1"><span class="strong">Auf dem Motherboard werden folgende Komponenten angesprochen:</span>
        <ul>
            <li>CPU(Prozessor)</li>
            <li>Steckbänke oder Slots</li>
            <li>Slots für Platten(Grafikkarten, Soundkarten – bei alten PCS mittlerweile alles am Board, Netzwerkkarten, W-LAN Karte)</li>
            <li>Steckplätze für Anschlüsse der Festplatten</li>
            <li>I/O Anschlüsse(Input-Output Anschlüsse) – z.B.: Audio, Mikrofon, USB.2, PS2 Anschluss(ehemals f. Maus), HDMI-Schnittstelle - Vorteil kurzer Leitungsweg da am Motherboard</li>
            <li>Knopfbatterie – sichert das sich das Gerät das Datum merkt (ohne Datumsinfo kann der Computer nicht starten, manuell im Boot-Manager einzustellen)
            </li>
        </ul>
    </li>
    <li class="m1"><span class="strong">alle externen Schnittstellen:</span> I/O werden angesprochen, sofern alle Geräte angesprochen werden können kommt der Starbildschirm vom Betriebssystem</li>
    <li class="m1"><span class="strong">Ländereinstellung:</span> wenn das Betriebssystem hochfährt wird die Ländereinstellung mitgeladen um die Tastatur Einstellung zu gewährleisten</li>
</ul>

<h4>Prozessor oder CPU</h4>
<p class="m1 fS-08">= besteht aus 2 Teilen, Rechenwerk und Steuerwerk</p>

<p class="m1">Der Prozessor oder CPU sitzt auf einem Sockel auf dem Motherboard. Es passt nicht jeder Prozessor auf jedes Motherboard. Der Hersteller gibt Empfehlungen welche Komponenten gut zusammen arbeiten. (Intel und AMD) Desto schneller und besser sie werden desto mehr kann drauf verarbeitet werden, nur durch Wärmeentwicklung begrenzt.</p>

<p class="m1">Prozessoren sind mittlerweile mehrkernig. Hier werden mehrere Prozessorkerne (bis zu 10 Prozessorkerne) in einem Prozessor verbaut.
</p>

<p class="m1">Das Eingabewerk, Ausgabewerk und Speicherwerk und ist über ein Bussystem verknüpft.</p>

<p class="m1"><span class="strong">Von-Neumann-Architektur:</span> bildet die Grundlage für die Arbeitsweise der meisten heute bekannten Computer. (Hauptbestandteil: 5 Komponenten)</p>

<p class="m1"><span class="strong">Grundprinzip der Datenverarbeitung:</span> Eva-Prinzip (Eingabe, Verarbeitung, Ausgabe)</p>

<p class="m1"><span class="strong">Datenverarbeitung: </span>Steuerung übernimmt die Steuereinheit im Prozessor</p>

<p class="m1 text-center fC-red">Im Prozessor gibt es verschiedene Speicherplätze die Cache- Speichersteine.
</p>

<p class="strong">Funktionen werden in zwei Bereich geteilt:</p>
<table class="ml2 m3">
    <tr>
        <td class="strong">South Bridge:</td>
        <td>Festplatten, externe Geräte, Arbeitsspeicher (nur begrenzt)</td>
    </tr>
    <tr>
        <td class="strong">North Bridge:</td>
        <td>ganz nahe an der CPU für kurze Leitungswege, Grafikkarte wird als einziges Gerät von der North Bridge gesteuert, Befehlsübergabe an den Arbeitsspeicher</td>
    </tr>
</table>

<p class="strong">Transistorenentwicklung seit 1970</p>
<img src="img/hardware/hardware1.gif" class="iW-700 m3" alt="html">

<h4 class="m1">Festplatten und SSD</h4>
<table class=" m3">
    <tr>
        <td class="strong">Festplatte:</td>
        <td>eine Metallplatte im inneren dreht sich wie bei einem Plattenspieler, Schreib- und Lesearm hat einen ganz geringen Abstand zur Platte, sind Luftdicht abgeschlossen und auch so hergestellt (System veraltet), Festplatten haben 7200 Umdrehungen pro Minute im Normalfall</td>
    </tr>
    <tr>
        <td class="strong">SSD:</td>
        <td>läuft mit Platinen, auf welchen Chips aufgelötet sind (Chipsatz), kein mechanischer Prozess mehr, je hochwertiger die Chips desto größer der Speicherplatz, begrenzte Laufzeit die in Löschzyklen angegeben ist</td>
    </tr>
</table>
 	
 	
<h4  class="m1">Netzwerkkarte</h4>
<p class="m3">ist veraltet bereits am Motherboard verbaut</p>

<h4 class="m1">WLAN-Karte </h4>
<p class="m3">PCs sind grundsätzlich nicht WLAN fähig, wenn sie keine WLAN-Karte am Board verbaut haben ansonsten wird eine Karte benötigt</p>

<h4 class="m1">Drucker</h4>
<p class="m1"><span class="strong">Tintenstrahldrucker:</span> sind am weitesten verbreitet, da sie am günstigsten sind.</p>
<p class="kursiv">zwei Verfahren:</p>
<ul class="m2">
    <li><span class="strong">Bubble-Jet-Verfahren: </span>	(z.B. Fa. HP, Canon) eine Düse wird erhitzt, durch das erhitzen entsteht eine Luftblase und dies spritzt aufs Papier</li>
    <li><span class="strong">Piezo-Verfahren: </span>		(z.B. Fa. Epson) eine Art Keramik, die sich bei elektrischer Spannung zusammen zieht, dadurch entsteht ein hoher Druck mit diesem Druck wird dieser auf das Papier gesteuert</li>
</ul>


<p class="m1"><span class="strong">Leserdrucker: </span>sind die Anschaffungskasten meistens hoch und die Nachfüllung ebenfalls. Vorteil das durch die Technik der Druck nicht verrinnen kann. 
</p>

<p class="kursiv">Vorteile:</p>
<ul class="m2">
    <li>kann sehr schnell drucken</li>
    <li>wenig Tonner bei schwarz/weiß Druck</li>
</ul>

<p class="m2"><span class="strong">Nadeldrucker: </span>Nachteile: laut, langsam. Durch die Technik kann man echte Durchschläge erzeugen, wo bei den anderen Druckern nur eine Kopie erzeugt wird.</p>

<p class="m2"><span class="strong">Thermodrucker:</span> (z.B. Rechnungen, Barcodedrucker, Fahrscheindrucker) haben einen ganz großen Nachteil, dass das Druckbild nach einer Zeit verschwindet</p>

<p class="m2"><span class="strong">Plotter:</span> es werden Rollendrucker und Flachbrettdrucker unterschieden, oft in Architekturbüros eingesetzt, können auf großem Papier (sehr große Arbeitsflächen) drucken und das Druckmedium ist variabel (Pinsel, Filzstift, Tuschstift)</p>

<p class="m1"><span class="strong">3D-Drucker(bereits hausgebraucht): </span>nach 2 Prinzipien zu unterscheiden</p>
<ul>
    <li><span class="strong">Materialauftragung: </span>	Material wird aufgespritzt (Plastik, Metall)</li>
    <li><span class="strong">Leserschmelzverfahren: </span>Material in einem Behälter wird beschossen und verschmolzen</li>
</ul>





</div>
	
	
	
	
	
	
