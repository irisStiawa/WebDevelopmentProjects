<div>

<p class="text-center m2"><span class="strong">SGML – Standard Generalized Markup Language:</span> <br><span class="fC-red kursiv">Metasprache</span> beschreibt wie andere Sprachen aussehen können (HTML basiert auf dem Standard von SGML)</p>

<p class="text-center kursiv">für XML wird in Visual Studio Code folgende Extension benötigt:</p>
<img src="img/xml/xml1.jpg" class= "iW-500" alt="xml">

<ul class="m3">
    <li>XML kann eine Dokumenttype festgelegen</li>
    <li>XML beschreibt die Struktur eines Dokuments durch ein .dtd File</li>
    <li>XML <span class="fC-red">MUSS</span> richtig strukturiert sein (Einrückung, korrekte Verschachtelung, usw.)</li>
    <li>Attribute müssen immer Schlüsselwertpaare sein (z.B. required = „required“), der Wert kann angepasst werden aber er ist notwenig</li>
    <li>alle Container müssen geschlossen werden (alt. &lt;contact/&gt;)</li>
</ul>

<p class="strong">Dokumenttype Definition (.dtd)</p>
<img src="img/xml/xml2.jpg" class= "iW-700" alt="xml">

<ul class="m3">
    <li>(#PCDATA): parsable Character: kann jeden Inhalt enthalten</li>
    <li>#REQUIRED: definiert die Notwendigkeit eines Attributs</li>
    <li>&lt;!ATTLIST: Definiert ein Attribut zu einem Element (z.B. id ID #REQUIRED)</li>
    <li>&lt;!ELEMENT: definiert ein Element</li>
</ul>

<p class="strong">Attribute in HTML selber mitführen mit DATA</p>	
<img src="img/xml/xml3.jpg" class= "iW-700 m3" alt="xml">


<p class="strong">Element Deklaration</p>
<img src="img/xml/xml4.jpg" class= "iW-700" alt="xml">

<ul class="m3">
    <li>&lt;!ENTITY %: definiert ein Set an Elementen die erlaubt sind unter einem Entitynamen</li>
</ul>

<p class="strong">XML Daten nach Javascript importieren</p>
<img src="img/xml/xml5.jpg" class= "iW-700 m3" alt="xml">


</div>