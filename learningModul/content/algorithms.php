<div>
<h2 class="m1">Sortieralgorithmen</h2>

<table class="m2">
    <tbody>
        <tr>
            <td class="strong">in situ</td>
            <td>in place</td>
        </tr>
        <tr>
            <td class="strong">ex situ</td>
            <td>out of place (wächst der Speicherbedarf mit der Größe der zur sortierenden Menge)</td>
        </tr>
        <tr>
            <td class="strong">best case</td>
            <td>es wäre erstes Element</td>
        </tr>
        <tr>
            <td class="strong">worst case</td>
            <td>es wäre letztes Element</td>
        </tr>
    </tbody>
</table>

<p class="strong text-center border-black m3">[1,2,3,…… n] <br>
n-Elemente
</p>		

<h4 class="m1">Bubble Sort </h4>

<ul class="m3">
    <li>worst case: 0(n²)</li>
    <li>average: 0(n²)</li>
</ul>

<h2 class="m1">Primzahlen, Verschlüsselung</h2>

<p class="strong">Primzahlen finden</p>
<img src="img/algorithms/algorithms1.jpg" class="iW-150 m3" alt="algorithms">

<p class="strong">Python Variante</p>
<img src="img/algorithms/algorithms2.jpg" class="iW-700 m3" alt="algorithms">
 
<p class="strong m1">Modulo</p>
 
<p class="kursiv">Restklassen von 3:</p>
<ul>
    <li>0,1,2</li>
    <li>0,1,-1</li>
</ul>
<img src="img/algorithms/algorithms3.jpg" class="iW-700 m3" alt="algorithms">
	
<p class="strong">Verschlüsselung</p>
<img src="img/algorithms/algorithms4.jpg" class="iW-300 m2" alt="algorithms">



<p class="kursiv">Schlüsselvarianten</p>
<ul>
    <li>OTP – One Time Pad (Schlüssel wird ausgegeben > Daten werden versendet einmalig mit diesem Schlüssel > Schlüssel nicht mehr gültig)</li>
    <li>RSA-Verschlüsselung (public key, private key: public key wird öffentlich gemacht- bzw. dem Sender übermittelt, Nachricht kann aber nur mit dem private key der nur dem Empfänger zur Verfügung steht entschlüsselt werden) </li>
</ul>
<p class="text-center m3 kursiv">encode > public key <br>decode > private key</p>
	
<h2 class="m1">Zeichen Codierung </h2>

<p class="text-center border-black m3"><span class="strong">ASCII Tabelle</span><br>
https://theasciicode.com.ar/ <br><br><span class="strong">Zusatztabellen</span><br>
https://networkencyclopedia.com/ansi-character-set/</p>
<img src="img/algorithms/algorithms5.jpg" class="iW-400 m3" alt="algorithms">

<p class="strong">Codierung die zwei Bits verwenden – Varianten (z.B. UTF-16):</p>
<p class="m1 kurisv fS-08">(byte order od. Bytereihenfolge)</p>
<div class="flex m3">
    <ul>
        <li>Big Endian (Notation: Notorola)</li>
        <li>Little Ending (Notation: Intel) – <br><span class="kursiv">meist verwendete Variante</span></li>
    </ul>
    <img src="img/algorithms/algorithms6.jpg" class="iW-300" alt="algorithms">
</div>

<p class="strong">ASCII Tabelle</p>
 <img src="img/algorithms/algorithms7.jpg" class="iW-700 m3" alt="algorithms">


<h4 class="m1">Prüfziffern</h4>

<p class="text-center fC-red m2">Redundanz aufgrund Kontext <br>
(Der H*se hoppelt auf der Wiese; Hose, Hase)</p>

<p class="strong">Bekanntesten Varianten(nach den Erfindern benannt):</p>
<ul class="m3">
    <li>Hammling</li>
    <li>Reed-Solomon</li>
</ul>

<p class="strong">EAN Code(13stellig) Prüfziffer berechnen</p>
<img src="img/algorithms/algorithms8.jpg" class="iW-500 m3" alt="algorithms">

<p class="strong">Sozialversicherungsnummer Prüfziffer</p>
<img src="img/algorithms/algorithms9.jpg" class="iW-300 m3" alt="algorithms">

<p class="strong">IBAN</p>
<div class="flex m2">
    <ul>
        <li>Die IBAN schaut so aus: <br> AT611904300234573201</li>
        <li>AT ist das Länderkennzeichen.</li>
        <li>61 ist die Prüfziffer.</li>
        <li>19043 ist die Bankleitzahl.</li>
        <li>00234573201 ist die Kontonummer.</li>
    </ul>
    <img src="img/algorithms/algorithms10.png" class="iW-500 m3" alt="algorithms">
</div>

<p class="kursiv">Berechnung:</p>
<img src="img/algorithms/algorithms11.jpg" class="iW-700 m3" alt="algorithms">




</div>