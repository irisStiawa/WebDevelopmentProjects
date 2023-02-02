<div>

<p class="kursiv m1">Code Review(ISTQB, IEE 1028)</p>

<p class="strong">Erfolgsfaktoren</p>
<ul class="m3">
    <li>Definition klarer Ziele</li>
    <li>Codeumfang(gute Ergebnisse bei 200 – 400 Zeilen Code)</li>
    <li>Auswahl geeigneter Personen</li>
    <li>Kritikfähigkeit</li>
    <li>Psychologie</li>
    <li>Auswahl geeigneter Reviewtechnik</li>
    <li>Unterstützung durch das Management</li>
    <li>Unternehmenskultur</li>
    <li>Immer wieder üben</li>
</ul>

<p class="strong">Anforderungen an Reviewer</p>
<ul class="m3">
    <li>Erfahrung und fachliche Kompetenz</li>
    <li>dürfen Code nicht selbst geschrieben haben</li>
    <li>Kommunikationsfähigkeit und Taktgefühl</li>
</ul>

<p class="strong">Arten des Reviews</p>
<ul class="m3">
    <li>Technischer Review</li>
    <li>Informeller Review</li>
    <li>Walk Through</li>
    <li>Inspektion</li>
</ul>

<p class="strong">Technischer Review</p>
<p class="fS-08 kursiv m1">= fachliche Prüfung eines wesentlichen Dokumentes auf Übereinstimmung mit der Spezifikation</p>

<p class="kursiv">Zweck:</p>
<ul class="m3">
    <li>Diskussion Entscheidungen treffen</li>
    <li>Alternativen bewerten</li>
    <li>Fehler finden</li>
    <li>technische Probleme lösen</li>
</ul>

<p class="strong">Informeller Review</p>
<ul class="m1 kursiv">
    <li>Inhaltlich wie technischer Review, aber nicht formalisiert</li>
    <li>Nicht im IEEE-Standard enthalten</li>
    <li>Bericht meist nur in vereinfachter Form oder ganz ausgelassen</li>
    <li>Einfache Art des Reviews</li>
</ul>

<p class="kursiv">Arten:</p>
<ul class="m3">
    <li>Schreibtischtest</li>
    <li>Peer Rating</li>
    <li>Stellungnahmeverfahren</li>
</ul>

<p class="strong">Walkthrough</p>
<ul class="m1 kursiv">
    <li>Diskussion von Szenarien, </li>
    <li>Probeläufen und Alternativen im Kreis gleichgestellter Mitarbeiter mit möglichst niedrig gehaltenem Aufwand</li>
</ul>

<p class="kursiv">Zweck:</p>
<ul class="m3">
    <li>Lernen</li>
    <li>Verständnis erzielen und Fehler finden</li>
</ul>

<p class="strong">Inspektion</p>
<ul class="m1 kursiv">
    <li>Formale Reviewtechnik</li>
    <li>dokumentiertes Vorgehen</li>
</ul>

<p class="kursiv">Zweck:</p>
<ul class="m3">
    <li>Sichtüberprüfung von Dokumenten, um Mängel zu finden (Nichteinhaltung von Entwicklungsstandards, Nicht-Konformität gegenüber Spezifikationen usw.)</li>
</ul>	

<p class="strong">Pros & Cons</p>
<ul class="m3">
    <li>- Zusätzlicher Aufwand (zeitlich, kognitiv)</li>
    <li>- Höheres Konfliktpotential im Team</li><br>
    <li>+ Wissenstransfer</li>
    <li>+ Codequalität</li>
    <li>+ Weniger Aufwand im Bug Fixing</li>
    <li>+ Lesbarerer Code</li>
</ul>

<p class="strong">Best Practices</p>
<ul class="m3">
    <li>Reviewe dich selbst</li>
    <li>Kritisiere den Code, nicht den Coder</li>
    <li>KISS (400 LOC, 60‘)</li>
    <li>Kommentare</li>
    <li>Not my Task…</li>
    <li>Vogelperspektive</li>
    <li>Feedback in Frage stellen</li>
    <li>Checklisten benutzen</li>
    <li>Tools benutzen</li>
    <li>Prozess für das Beheben von Fehlern etablieren</li>
</ul>

<p class="strong">Desk Test</p>	
<p class="kursiv m1 fS-08">= Verfahren zur Prüfung von Algorithmen auf Richtigkeit</p>
<img src="img/quality/quality1.jpg" class="iW-400 m3" alt="quality">

<p class="kursiv">Schreibtischtest</p>

<table class="m3">
    <thead>
        <tr>
            <th></th>
            <th>b</th>
            <th>e</th>
            <th>i</th>
            <th>res</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>4</td>
            <td>2</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>5</td>
            <td>2</td>
            <td>4</td>
            <td>-</td>
            <td>2</td>
        </tr>
        <tr>
            <td>6</td>
            <td>2</td>
            <td>4</td>
            <td>1</td>
            <td>2</td>
        </tr>
        <tr>
            <td>7</td>
            <td>2</td>
            <td>4</td>
            <td>1</td>
            <td>4</td>
        </tr>
        <tr>
            <td>6</td>
            <td>2</td>
            <td>4</td>
            <td>2</td>
            <td>4</td>
        </tr>
        <tr>
            <td>7</td>
            <td>2</td>
            <td>4</td>
            <td>2</td>
            <td>8</td>
        </tr>
        <tr>
            <td>6</td>
            <td>2</td>
            <td>4</td>
            <td>3</td>
            <td>8</td>
        </tr>
        <tr>
            <td>7</td>
            <td>2</td>
            <td>4</td>
            <td>3</td>
            <td>16</td>
        </tr>
        <tr>
            <td>6</td>
            <td>2</td>
            <td>4</td>
            <td>4</td>
            <td>16</td>
        </tr>
        <tr>
            <td>9</td>
            <td>2</td>
            <td>4</td>
            <td>4</td>
            <td>16</td>
        </tr>
    </tbody>
</table>


<h3>Softwareentwicklungslebenszyklus-Modelle </h3>
<p class="fS-08 kursiv m1">= beschreiben Arten von Aktivitäten, die in jeder Phase eines Softwareentwicklungsprojekts durchgeführt werden, und wie diese Aktivitäten logisch und zeitlich zueinander in Beziehung stehen. </p>

<p class="strong">Merkmale</p>
<ul class="m2">
    <li>Für jede Entwicklungsaktivität gibt es eine zugehörige Testaktivität. </li>
    <li>Jede Teststufe hat ihre stufenspezifischen Ziele für den Test. </li>
    <li>Für eine vorgegebene Teststufe beginnen Testanalyse und Testentwurf bereits während der zugehörigen Entwicklungsaktivität.  </li>
    <li>Tester nehmen aktiv an der Entwurfserstellung teil (z.B. Diskussionen zur Definition und Verfeinerung von Anforderungen) </li>
</ul>
 
<p class="m3">Testaktivitäten sollten in Übereinstimmung mit dem Grundsatz des frühen Testens schon in frühen Phasen des Lebenszyklus beginnen. </p>	

<p class="strong m1">Softwareentwicklungslebenszyklus-Modelle</p>
<ul class="m3">
    <li>Sequenzielle Entwicklungsmodelle 
        <ul class="m1">
            <li>jede Phase im Entwicklungsprozess beginnt erst, wenn die vorherige Phase abgeschlossen ist </li>
            <li>liefern Software, die das komplette Feature-Set enthält und benötigen typischerweise Monate oder Jahre für die Auslieferung an Stakeholder und Benutzer </li>
        </ul>
    </li>
    <li>Iterative und inkrementelle Entwicklungsmodelle <br>
        <p class="kursiv">inkrementelles Modell:</p>
        <ul class="m1">
            <li>die Festlegung der Anforderungen, der Entwurf, die Implementierung und das Testen eines Systems erfolgt in Teilen, d.h., dass die Software-Features inkrementell anwachsen</li>
            <li>die Größe der Inkremente kann variieren (z.B. einzige Veränderung in einer Maske der Benutzungsoberfläche oder wie eine neue Abfrageoption)</li>
        </ul>

        <p class="kursiv">iteratives Modell:</p>
        <ul class="m1">
            <li>findet Anwendung bei Gruppen von Features zusammen in einer Reihe von Zyklen, oft mit einer festgelegten Dauer, spezifiziert, entworfen, implementiert und getestet werden können</li>
            <li>Jede Iteration liefert hierbei so lange eine lauffähige Software, die eine wachsende Teilmenge des gesamten Feature-Sets darstellt, bis die endgültige Software geliefert oder die Entwicklung beendet ist. </li>
        </ul>
    </li>  

</ul>

<p class="strong m1">Modelle</p>
<ul class="m2">
    <li><span class="strong">Rational Unified Process:</span>  Jede Iteration ist tendenziell relativ lang (z.B. zwei bis drei Monate) und die Inkremente der Features sind entsprechend groß (z.B. zwei oder drei Gruppen zusammengehörender Features). </li>
    <li><span class="strong">Scrum:</span> Jede Iteration ist tendenziell eher kurz (z.B. Stunden, Tage oder einige Wochen) und die Inkremente der Features sind entsprechend klein (z.B. einige Verbesserungen und/oder zwei oder drei neue Features). </li>
    <li><span class="strong">Kanban:</span>Implementierung mit Iterationen mit oder ohne festgelegten Länge. Sie liefert entweder eine einzige Verbesserung oder ein einziges vollständiges Feature oder Gruppen von Features zusammengefasst in einem Release. </li>
    <li><span class="strong">Spiralmodell: </span>Beinhaltet das Schaffen von experimentellen Inkrementen, von denen einige in den folgenden Iterationen stark überarbeitet oder sogar aufgegeben werden müssen.  </li>
</ul>

<p class="kursiv m1">Beinhalten in der gesamten Entwicklung häufig Überlappung und iterative Teststufen. Idealerweise wird jedes Feature auf dem Weg zur Auslieferung auf mehreren Teststufen getestet. 
In manchen Fällen nutzen Teams eine kontinuierliche Auslieferung (continuous delivery) oder eine kontinuierliche Bereitstellung (continuous deployment) der Software. Beide beinhalten die Automatisierung von Tests auf mehreren Teststufen als Teil ihrer Delivery-Pipelines (Arbeitsstrang). </p>

<p class="m1 fC-red kursiv text-center">Je mehr das System wächst, desto wichtiger sind Regressionstests.</p>

<p class="kursiv m2">Im Gegensatz zu sequenziellen Modellen können iterative und inkrementelle Modelle in Wochen oder Tagen nutzbare Software liefern. Die vollständige Menge an Anforderungen können diese aber erst nach einer Reihe von Monaten oder sogar Jahren liefern.  </p>


<p class="kursiv strong m1">
Softwareentwicklungslebenszyklus-Modelle im Kontext</p>

<ul class="m2">
    <li>müssen der Projekt- und Produktmerkmale ausgewählt und angepasst werden</li>
    <li>auf Grundlage des Projektziels, der Art des zu entwickelnden Produkts, der Geschäftsprioritäten (z.B. Time-toMarket) und der identifizierten Produkt- und Projektrisiken ausgewählt und angepasst werden</li>
    <li>Abhängig vom Kontext des Projekts kann es notwendig sein, Teststufen und/oder Testaktivitäten zu kombinieren oder neu zu organisieren.</li>
    <li>Softwareentwicklungslebenszyklus-Modelle können miteinander kombiniert werden <br>
    <span class="fS-08">(z.B. kann das V-Modell für die Entwicklung und das Testen eines Backend-Systems und seiner Integrationen genutzt werden, während ein agiles Entwicklungsmodell zur Entwicklung und zum Testen der Frontend-Benutzungsschnittstelle (UI) und ihrer Funktionalität eingesetzt wird.)</span>
    </li>
</ul>

<p class="kursiv strong m1">Mögliche Gründe für die Anpassung des Projekts ans Modell: </p>
<ul class="m3">
    <li>Unterschiedliche Produktrisiken von Systemen (komplexes oder einfaches Projekt) </li>
    <li>Viele Geschäftseinheiten können Teil eines Projekts oder Programms sein (Kombination aus sequentieller und agiler Entwicklung). </li>
    <li>Kurze Zeit bis zur Markteinführung eines Produkts (Zusammenführung von Teststufen und/oder Integration von Testarten in Teststufen) </li>
</ul>

<h4>Teststufen </h4>
<p class="fS-08 kursiv m1">= sind Gruppen von Testaktivitäten, die gemeinsam organisiert und verwaltet werden </p>

<p class="m1">Jede Teststufe ist eine Instanz des Testprozesses, der aus Aktivitäten besteht. Diese Testaktivitäten beziehen sich auf die Software einer festgelegten Entwicklungsstufe von einzelnen Einheiten oder Komponenten bis hin zu vollständigen Systemen oder, falls zutreffend, von Systemen von Systemen. </p>

<p class="strong">verschiedenen Teststufen:</p>
<ul class="m2">
    <li>Komponententest</li>
    <li>Integrationstest</li>
    <li>Systemtest</li>
    <li>Abnahmetest</li>
</ul>
 
<p class="strong">Teststufen sind durch die folgenden Eigenschaften gekennzeichnet:</p>	
<ul class="m1">
    <li>Spezifische Ziele </li>
    <li>Testbasis, um mit Bezug darauf Testfälle abzuleiten</li>
    <li>Testobjekt (d.h., was wird getestet)  </li>
    <li>Typische Fehlerzustände und Fehlerwirkungen</li>
    <li>Spezifische Ansätze und Verantwortlichkeiten</li>
</ul>
 
<p class="fS-08 text-center m3">Für jede Teststufe ist eine passende Testumgebung erforderlich. Für den Abnahmetest ist beispielsweise eine produktionsähnliche Umgebung ideal, während die Entwickler im Komponententest üblicherweise ihre eigene Entwicklungsumgebung nutzen.</p>	  

<h4>Komponententest </h4>
<p class="fS-08 m1">=  (auch Unit- oder Modultest genannt) konzentriert sich auf Komponenten, die einzeln testbar sind </p>

<p class="strong">Ziele: </p>
<ul class="m1">
    <li>Risikoreduktion  </li>
    <li>Verifizierung, ob die funktionalen und nicht-funktionalen Verhaltensweisen der Komponente dem Entwurf und der Spezifikation entsprechen  </li>
    <li>Schaffen von Vertrauen in die Qualität der Komponente </li>
    <li>Finden von Fehlerzuständen in der Komponente  </li>
    <li>Verhindern, dass Fehlerzustände an höhere Teststufen weitergegeben werden </li>
</ul>
 
<p class="m2">In inkrementellen und iterativen Entwicklungsmodellen (z.B. agilen Entwicklungsmodellen), in denen Codeänderungen stetig erfolgen, spielen automatisierte Komponentenregressionstests eine Schlüsselrolle. Diese sollen Vertrauen schaffen, dass Änderungen bestehende Komponenten nicht beschädigt haben. 
Der Komponententest wird häufig isoliert vom Rest des Systems vorgenommen. Der Komponententest kann die Funktionalität (z.B. die Korrektheit von Berechnungen), nicht-funktionale Eigenschaften (z.B. Suche nach Speicherengpässen) und strukturelle Merkmale (z.B. Entscheidungstests) abdecken. </p>

 
<p class="strong">Testbasis </p>
<ul class="m2">
    <li>Feinentwurf</li>
    <li>Code</li>
    <li>Datenmodelle</li>
    <li>Komponentenspezifikationen</li>
</ul>

<p class="strong">Testobjekte</p>	 
<ul class="m2">
    <li>Komponenten, Units oder Module </li>
    <li>Code und Datenstrukturen</li>
    <li>Klassen</li>
    <li>Datenbankmodule</li>
</ul>

<p class="strong">Gängige Fehlerzustände und Fehlerwirkungen </p>
<ul class="m2">
    <li>Nicht korrekte Funktionalität (z.B. nicht wie in den Entwurfsspezifikationen beschrieben) </li>
    <li>Datenflussprobleme</li>
    <li>Nicht korrekter Code und nicht korrekte Logik</li>
</ul>

<p class="strong text-center fS-08 m2">Fehlerzustände werden in der Regel behoben, sobald sie gefunden werden, oftmals ohne formales Fehlermanagement. Wenn Entwickler allerdings Fehlerzustände berichten, liefert dies wichtige Informationen für die Grundursachenanalyse und die Prozessverbesserung.</p>	 

<p class="strong">Spezifische Ansätze und Verantwortlichkeiten</p>
<p class="m3">Komponententests werden üblicherweise von dem Entwickler durchgeführt, der den Code geschrieben hat. Zumindest aber erfordert dies den Zugang zum Code, der getestet werden soll.Entwickler schreiben oft Tests und führen diese aus, nachdem sie den Code für eine Komponente entwickelt haben. Insbesondere in der agilen Entwicklung kann es jedoch auch sein, dass das Schreiben von automatisierten Komponententestfällen dem Schreiben von Anwendungscode vorangeht.</p>

<h4>Integrationstest </h4>
<p class="fS-08 kursiv m1">= konzentrieren sich auf die Interaktion zwischen Komponenten oder Systemen</p>
 
<p class="strong">Ziele</p>
<ul class="m1">
    <li>Risikoreduktion</li>
    <li>Verifizierung, ob die funktionalen und nicht-funktionalen Verhaltensweisen der Schnittstellen dem Entwurf und der Spezifikation entsprechen </li>
    <li>Vertrauen schaffen in die Qualität der Schnittstellen</li>
    <li>Fehlerzustände finden (die in den Schnittstellen selbst oder innerhalb der Komponenten oder des Systems liegen können) </li>
    <li>Verhindern, dass Fehlerzustände an höhere Teststufen weitergegeben werden </li>
</ul>

<p class="m2">Wie beim Komponententest liefern automatisierte Integrationsregressionstests in manchen Fällen das Vertrauen, dass Änderungen bestehende Schnittstellen, Komponenten oder Systeme nicht beschädigt haben. </p>	
 
<p class="strong">Arten</p>
<ul class="m2">
    <li>Komponentenintegrationstests konzentrieren sich auf die Interaktionen und die Schnittstellen zwischen integrierten Komponenten.</li>
    <li>Systemintegrationstests konzentrieren sich auf die Interaktionen und Schnittstellen zwischen Systemen. Der Systemintegrationstest kann nach den Systemtests oder parallel zu andauernden Systemtestaktivitäten stattfinden. </li>
</ul>

<p class="strong">Testbasis</p>
<ul class="m2">
    <li>Software- und Systementwurf</li>
    <li>Sequenzdiagramme</li>
    <li>Spezifikationen von Schnittstellen und Kommunikationsprotokollen </li>
    <li>Anwendungsfälle</li>
    <li>Architektur auf Komponenten- oder Systemebene </li>
    <li>Workflows</li>
    <li>Externe Schnittstellendefinitionen </li>
</ul>

<p class="strong">Testobjekte</p>	
<ul class="m2">
    <li>Subsysteme</li>
    <li>Datenbanken</li>
    <li>Infrastruktur</li>
    <liSchnittstellen></li>
    <li>APIs</li>
    <li>Microservices</li>
</ul>

<p class="strong">Typische Fehlerzustände und Fehlerwirkungen für Komponentenintegrationstests:  </p>	 
<ul class="m2">
    <li>Falsche Daten, fehlende Daten oder falsche Datenverschlüsselung </li>
    <li>Falsche Reihenfolge oder fehlerhafte zeitliche Abfolge von Schnittstellenaufrufen  </li>
    <li>Falsch angepasste Schnittstellen </li>
    <li>Fehlerwirkungen in der Kommunikation zwischen Komponenten</li>
    <li>Nicht behandelte oder nicht ordnungsgemäß behandelte Fehlerwirkungen in der Kommunikation zwischen den Komponenten </li>
    <li>Nicht korrekte Annahmen über die Bedeutung, Einheiten oder Grenzen der Daten, die zwischen den Komponenten hin- und hergereicht werden </li>
</ul>

<p class="strong">Typischer Fehlerzustände und Fehlerwirkungen für Systemintegrationstests:</p>
<ul class="m2">
    <li>Inkonsistente Nachrichtenstrukturen zwischen den Systemen </li>
    <li>Falsche Daten, fehlende Daten oder falsche Datenverschlüsselung </li>
    <li>Falsch angepasste Schnittstellen </li>
    <li>Fehlerwirkungen in der Kommunikation zwischen den Systemen</li>
    <li>Nicht behandelte oder nicht ordnungsgemäß behandelte Fehlerwirkungen in der Kommunikation zwischen den Systemen </li>
    <li>Falsche Annahmen über die Bedeutung, Einheiten oder Grenzen der Daten, die zwischen den Systemen hin- und hergereicht werden </li>
    <li>Fehlende Konformität mit erforderlichen Richtlinien zur IT-Sicherheit </li>
</ul>

<p class="strong">Spezifische Ansätze und Verantwortlichkeiten </p>	
<p class="m3">Komponentenintegrationstests und Systemintegrationstests sollten sich auf die Integration selbst konzentrieren. Zum Beispiel, wenn das Modul A mit dem Modul B integriert wird, sollten sich die Tests auf die Kommunikation zwischen diesen Modulen konzentrieren und nicht auf die Funktionalität der einzelnen Module, da diese in den Komponententests abgedeckt sein sollte. <br>
Komponentenintegrationstests liegen häufig in der Verantwortung der Entwickler. Systemintegrationstests liegen im Allgemeinen in der Verantwortung der Tester. 
Um die Isolation von Fehlerzuständen zu vereinfachen und Fehlerzustände früh zu erkennen, sollte die Integration normalerweise inkrementell erfolgen (d.h. nur eine kleine Anzahl von zusätzlichen Komponenten oder Systemen zur gleichen Zeit) statt in einer Art „Big Bang“ (d.h. Integration aller Komponenten oder Systeme in einem einzigen Schritt). 
Je größer der Umfang der Integration, desto schwieriger wird es, die Fehlerzustände in einer spezifischen Komponente oder einem spezifischen System zu isolieren. Eine derartige kontinuierliche Integration (continuous integration) beinhaltet häufig automatisierte Regressionstests, idealerweise auf mehreren Teststufen.</p>


<h4>Systemtest</h4>
<p class="kursiv fS-08 m1">= konzentrieren sich auf das Verhalten und die Fähigkeiten des Systems oder Produkts. Dies geschieht oft unter Berücksichtigung der End-to-End-Aufgaben, die das System leisten kann. </p>
  
<p class="strong">Ziele</p>
<ul class="m1">
    <li>Risikoreduktion</li>
    <li>Verifizierung, ob die funktionalen und nicht-funktionalen Verhaltensweisen des Systems dem Entwurf und den Spezifikationen entsprechen </li>
    <li>Validierung, dass das System vollständig ist und wie erwartet funktionieren wird </li>
    <li>Vertrauen in die Qualität des Systems als Ganzes schaffen</li>
    <li>Finden von Fehlerzuständen</li>
    <li>Verhindern, dass Fehlerzustände an höhere Teststufen oder in die Produktion weitergegeben werden </li>
</ul>

<p class="m2">Für einige Systeme kann auch die Verifizierung der Datenqualität ein Ziel sein. Wie beim Komponententest und beim Integrationstest bieten in einigen Fällen automatisierte Systemregressionstests die Gewissheit, dass Änderungen nicht die bestehenden Features oder End-to-End-Fähigkeiten beeinträchtigt haben. Systemtests liefern häufig Informationen, die von Stakeholdern für Freigabeentscheidungen genutzt werden. Systemtests können auch zur Erfüllung rechtlicher oder regulatorischer Anforderungen oder Standards notwendig sein. <br>
Die Testumgebung sollte idealerweise der finalen Ziel- oder der Produktivumgebung entsprechen. </p>	
 
<p class="strong">Testbasis</p>
<ul class="m2">
    <li>System- und Softwareanforderungsspezifikationen (funktional und nicht-funktional) </li>
    <li>Risikoanalyseberichte</li>
    <li>Anwendungsfälle</li>
    <li>Epics und User-Stories </li>
    <li>Modelle des Systemverhaltens</li>
    <li>Zustandsdiagramme</li>
    <li>System- und Benutzeranleitungen </li>
</ul>
 
<p class="strong">Testobjekte</p>
<ul class="m2">
    <li>Anwendungen</li>
    <li>Hardware/Softwaresysteme </li>
    <li>Betriebssysteme</li>
    <li>Systeme unter Test (SUT)</li>
    <li>Systemkonfiguration und Konfigurationsdaten</li>
</ul>

<p class="strong">Typische Fehlerzustände und Fehlerwirkungen </p> 
<ul class="m2">
    <li>Falsche Berechnungen </li>
    <li>Falsche oder unerwartete funktionale oder nicht-funktionale Systemverhaltensweisen </li>
    <li>Falsche Kontroll- und/oder Datenflüsse innerhalb des Systems </li>
    <li>Versagen bei der korrekten oder vollständigen Ausführung von funktionalen End-to-End-Aufgaben </li>
    <li>Versagen des Systems bei der ordnungsgemäßen Arbeit in der/den Systemumgebung/en </li>
    <li>Das System funktioniert nicht wie in den System- oder Benutzeranleitungen beschrieben</li>
</ul>

<p class="strong">Spezifische Ansätze und Verantwortlichkeiten</p>
<p class="m3">Systemtests sollten sich auf das allgemeine End-to-End-Verhalten des Systems als Ganzes konzentrieren, sowohl in funktionaler als auch in nicht-funktionaler Hinsicht. Systemtests sollten die Verfahren nutzen, die am besten für die zu testenden Aspekte des Systems geeignet sind 
Systemtests werden in der Regel von unabhängigen Testern durchgeführt, die sich stark auf Spezifikationen stützen. Fehlerzustände in Spezifikationen (z.B. fehlende User-Stories, falsch benannte Fachanforderungen usw.) können zu einem Verständnisproblem oder Unstimmigkeiten über das erwartete Systemverhalten führen. Derartige Situationen können zu „falsch positiven“ und „falsch negativen“ Ergebnissen führen. (z.B. Tester einbeziehen, Reviews für Situationsvermeidung) 
</p> 


<h4>Abnahmetest</h4>
<p class="fS-08 kursiv m1">= konzentriert sich wie der Systemtest typischerweise auf das Verhalten und die Fähigkeiten eines gesamten Systems oder Produkts </p>

<p class="strong">Ziele</p>
<ul class="m1">
    <li>Vertrauen in die Qualität des Systems als Ganzen aufbauen</li>
    <li>Validieren, ob das System vollständig ist und wie erwartet funktionieren wird </li>
    <li>Verifizieren, ob funktionale und nicht-funktionale Verhaltensweisen des Systems den Spezifikationen entsprechen</li>
</ul>

<p class="m2">Der Abnahmetest kann Informationen bereitstellen, mit denen sich die Bereitschaft des Systems für den Einsatz und die Nutzung durch den Kunden (Endanwender) beurteilen lässt. Der Abnahmetest kann auch notwendig sein, um rechtliche oder regulatorische Anforderungen oder Standards zu erfüllen. </p>	 

<p class="strong">Mögliche Formen:</p>
<ul class="m2">
    <li>Benutzerabnahmetest (User Acceptance Testing (UAT) <br><span class="kursiv fS-08">=ist üblicherweise darauf konzentriert, die Bereitschaft des Systems zur Nutzung durch Benutzer in einer realen oder simulierten Betriebsumgebung zu validieren.(Hauptziel ist es, Vertrauen darin zu schaffen, dass die Benutzer das System so nutzen können, dass es ihre Bedürfnisse und Anforderungen erfüllt und ihre Geschäftsprozesse mit einem Minimum an Schwierigkeiten, Kosten und Risiken ausführt.)</span></li><br>
    <li >Betrieblicher Abnahmetest (Operational Acceptance Testing (OAT) <br> <span class="fS-08 kursiv">wird durch Mitarbeiter des Betriebs oder Systemadministratoren wird üblicherweise in einer (simulierten) Produktivumgebung durchgeführt</span> <br> <br>
    <span class="kursiv strong">Fokus hierbei:</span> <br>
        <ul>
            <li>Testen von Backups und Wiederherstellungen </li>
            <li>Installieren, Deinstallieren und Aktualisieren </li>
            <li>Notfallwiederherstellung (Disaster-Recovery)</li>
            <li>Benutzerverwaltung</li>
            <li>Wartungsaufgaben</li>
            <li>Datenlade- und Migrationsaufgaben</li>
            <li>Prüfen von IT-Sicherheitsschwachstellen</li>
            <li>Performanztest</li>
        </ul>
    </li><br>
    <li>Vertraglicher und regulatorischer Abnahmetest <br> <span class="kursiv fS-08">= wird aufgrund von vertraglichen Abnahmekriterien für die Herstellung von kundenspezifisch entwickelter Software durchgeführt. Abnahmekriterien sollten zu dem Zeitpunkt definiert werden, an dem sich die Vertragsparteien auf den Vertrag einigen. (werden häufig durch Benutzer oder unabhängige Tester durchgeführt)
    Regulatorische Abnahmetests werden gegen Regularien durchgeführt, die eingehalten werden müssen, (z.B. staatliche, gesetzliche oder Vorschriften zur funktionalen Sicherheit, evtl. Bestätigung durch Aufsichtsbehörden) </span></li><br>
    <li>Alpha- und Beta-Test <br> <span class="kursiv fS-08">= werden üblicherweise von Entwicklern von kommerzieller Standardsoftware genutzt, die Rückmeldungen von ihren potenziellen oder bestehenden Benutzern, Kunden und/oder Betreibern erhalten wollen, bevor die Software auf den Markt kommt. <br>
    <span class="strong">Alpha-Tests:</span> werden auf Seiten des entwickelnden Unternehmens vorgenommen, nicht vom Entwicklungsteam, sondern von potenziellen oder bestehenden Kunden und/oder Betreibern oder von einem unabhängigen Testteam. <br>
    <span class="strong">Beta-Tests:</span> werden von potenziellen oder bestehenden Kunden und/oder Betreibern an ihren eigenen Standorten durchgeführt. Beta-Tests können nach Alpha-Tests erfolgen oder auch ohne, dass ein vorausgehender Alpha-Test stattfand. <br><br> <span class="fC-red">Finden von Fehlerzuständen sein, die sich auf die Bedingungen und Umgebungen beziehen, in denen das System genutzt werden wird, insbesondere dann, wenn diese Bedingungen und Umgebungen durch das Entwicklungsteam nur schwer nachzubilden sind. </span></span></li>
</ul>

<p class="strong">Testbasis</p>
<ul class="m2">
    <li>Geschäftsprozesse</li>
    <li>Benutzer- oder Fachanforderungen </li>
    <li>Vorschriften, rechtliche Verträge und Standards </li>
    <li>Anwendungsfälle und/oder User Stories </li>
    <li>Systemanforderungen</li>
    <li>System- oder Benutzerdokumentation </li>
    <li>Installationsverfahren</li>
    <li>Risikoanalyseberichte</li>
</ul>

<p class="strong">Testobjekte</p>  
<ul class="m2">
    <li>System unter Test (SUT)</li>
    <li>Systemkonfigurationen und Konfigurationsdaten </li>
    <li>Geschäftsprozesse des vollintegrierten Systems </li>
    <li>Wiederherstellungssysteme und Hot Sites (für Tests zur Business-Continuity (Betriebskontinuität) und Notfallwiederherstellung) </li>
    <li>Betriebs- und Wartungsprozesse</li>
    <li>Formulare</li>
    <li>Berichte</li>
    <li>Bestehende und konvertierte Produktionsdaten </li>
</ul>

<p class="strong">Typische Fehlerzustände und Fehlerwirkungen </p>
<ul class="m2">
    <li>Systemworkflows erfüllen nicht die Fach- oder Benutzeranforderungen </li>
    <li>Geschäftsregeln wurden nicht korrekt umgesetzt </li>
    <li>Das System erfüllt nicht die vertraglichen oder regulatorischen Anforderungen </li>
    <li>Nicht-funktionale Fehlerwirkungen wie IT-Sicherheitsschwachstellen, nicht angemessene Performanz unter hoher Last oder nicht ordnungsgemäßer Betrieb auf einer unterstützten Plattform </li>
</ul>
 
<p class="strong">Spezifische Ansätze und Verantwortlichkeiten </p>
<p class="m3">Der Abnahmetest liegt häufig in der Verantwortung der Kunden, Fachanwender, Product Owner oder Betreiber eines Systems. Andere Stakeholder können ebenfalls mit einbezogen werden. (wird oft als die letzte Stufe in einem sequenziellen Prozesses verstanden, er kann aber auch zu anderen Zeitpunkten stattfinden, zb.: Abnahme eines Standardsoftwareprodukts, Abnahme einer neuen funktionalen Verbesserung vor dem Systemtest)</p>

<h4>Testarten</h4>
<p class="kursiv fS-08 m1">= ist eine Gruppe von Testaktivitäten, die darauf abzielt, spezifische Merkmale eines Softwaresystems oder eines Teils eines Systems auf der Grundlage spezifischer Testziele zu testen. </p>

<p class="strong">Ziele:</p>
<ul class="m3">
    <li>Bewertung funktionaler Qualitätsmerkmale wie Vollständigkeit, Korrektheit und Angemessenheit </li>
    <li>Bewertung nicht-funktionaler Qualitätsmerkmale wie Zuverlässigkeit, Performanz, IT-Sicherheit, Kompatibilität und Gebrauchstauglichkeit (Usability) </li>
    <li>Bewertung, ob die Struktur oder Architektur der Komponente oder des Systems korrekt und vollständig ist und den Spezifikationen entspricht </li>
    <li>Bewertung der Auswirkungen von Änderungen wie die Bestätigung, dass Fehlerzustände behoben wurden (Fehlernachtests), und die Suche nach nicht gewünschten Änderungen im Verhalten, die sich aus Software- oder Umgebungsänderungen ergeben (Regressionstests) </li>
</ul>

<p class="strong">Funktionale Tests</p>
<p class="kursiv fS-08 m1">= bewertet die Funktionen, die das System ausführen soll. (Funktionen: das, „was” das System tun sollte)</p>
 
<p class="m3">Funktionales Testen betrifft das Verhalten der Software. So können Black-Box-Verfahren genutzt werden, um Testbedingungen und Testfälle für die Funktionalität der Komponente oder des Systems abzuleiten. <br>
Die Gründlichkeit von funktionalen Tests kann durch die funktionale Überdeckung gemessen werden. Die funktionale Überdeckung ist der Grad, in dem eine gewisse Funktionalität durch Testen ausgeführt wurde, und wird als Prozentsatz der Arten ausgedrückt, die abgedeckt sind. </p>


<p class="strong">Nicht-funktionale Tests </p>
<p class="fS-08 kursiv m1">= bewerten Merkmale von Systemen und Software wie Gebrauchstauglichkeit, Performanz oder IT-Sicherheit. (“wie gut“ das System sich verhält.)</p>

<p class="m3">Im Gegensatz zu gängigen Fehleinschätzungen können und sollten nicht-funktionale Tests in den meisten Fällen in allen Teststufen und das so früh wie möglich durchgeführt werden. Das späte Entdecken von nicht-funktionalen Fehlerzuständen kann für den Erfolg eines Projekts extrem gefährlich sein.  
Um Testbedingungen und Testfälle für nicht-funktionale Tests abzuleiten, können Black-Box-Verfahren genutzt werden. 
Die Gründlichkeit von nicht-funktionalen Tests kann durch die nicht-funktionale Überdeckung gemessen werden. Nicht-funktionale Überdeckung ist der Grad, zu dem einige Arten von nicht-funktionalen Elementen durch Tests ausgeführt wurden, und wird als Prozentsatz der Arten der Elemente ausgedrückt, die abgedeckt sind. 
Nicht-funktionaler Testentwurf und die Durchführung nicht-funktionaler Tests können spezielle Fähigkeiten oder Kenntnisse erfordern, wie die Kenntnis der zugrunde liegenden Schwächen eines Entwurfs oder einer Technologie (z.B. IT-Sicherheitsschwachstellen, die mit bestimmten Programmiersprachen verbunden sind) oder einer bestimmten Benutzergruppe (z.B. die Personas3 von Verwaltungssystemen für Gesundheitseinrichtungen). </p>

<p class="strong">White-Box-Tests </p>
<p class="fS-08 m1 kursiv">= leiten Tests auf Basis der internen Struktur oder der Implementierung eines Systems ab. </p>
<p class="m3">Die Gründlichkeit von White-Box-Tests kann durch strukturelle Überdeckung gemessen werden. Strukturelle Überdeckung ist der Grad, zu dem einige Arten von strukturellen Elementen durch Tests ausgeführt wurden, und wird ausgedrückt durch den Prozentsatz der Elementart, die übergedeckt wurde. 
White-Box-Testentwurf und die Durchführung von White-Box-Tests können spezielle Fähigkeiten und Kenntnisse erfordern, wie Kenntnisse über die Art und Weise, wie der Code aufgebaut ist, wie Daten gespeichert werden (z.B. um mögliche Datenbankanfragen zu bewerten) und wie die Überdeckungswerkzeuge genutzt und ihre Ergebnisse korrekt interpretiert werden.  
</p>

<p class="strong">Änderungsbezogenes Testen </p>
<p class="kursiv fS-08 m1">=wenn Änderungen an einem System vorgenommen werden, entweder um einen Fehlerzustand zu korrigieren oder aufgrund einer neuen oder geänderten Funktionalität</p>

<ul class="m2">
    <li><span class="kursiv">Fehlernachtests:</span><br>Nachdem ein Fehlerzustand korrigiert wurde, muss die Software mit allen Testfällen getestet werden, die aufgrund des Fehlerzustands fehlgeschlagen sind. Die Schritte, die zur Fehlerwirkung oder die durch den Fehlerzustand entstanden sind müssen reproduziert werden und in der neuen Softwareversion getestet werden. Der Zweck eines Fehlernachtests ist es, zu bestätigen, dass der ursprüngliche Fehlerzustand erfolgreich behoben wurde. </li>
    <li><span class="kursiv">Regressionstests:</span><br>Es ist möglich, dass eine Änderung, die in einem Teil des Codes gemacht wurde (egal, ob aufgrund einer Fehlerbehebung oder aufgrund einer anderen Art von Änderung)  versehentlich das Verhalten anderer Teile des Codes beeinflusst. Sei es innerhalb der gleichen Komponente, in anderen Komponenten des gleichen Systems oder sogar in anderen Systemen. Solche nicht gewünschten Nebeneffekte nennt man Regressionen. Regressionstests beinhalten die Durchführung von Tests, um solche unbeabsichtigten Nebeneffekte zu finden. </li>
    
</ul>

<p class="kursiv m2 text-center">Fehlernachtests und Regressionstests werden in allen Teststufen durchgeführt.</p>

<p class="m3">Insbesondere in iterativen und inkrementellen Entwicklungslebenszyklen (z.B. agile) resultieren neue Features, Änderungen zu bestehenden Features und Code-Restrukturierung (Refactoring) in häufigen Änderungen am Code, was in gleicher Weise änderungsbezogenes Testen erfordert. Dies gilt insbesondere für Systeme des Internets der Dinge, bei denen individuelle Objekte (z.B. Endgeräte) häufig aktualisiert oder ersetzt werden.  
Regressionstestsuiten laufen viele Male und entwickeln sich in der Regel nur langsam. So sind Regressionstests ein starker Kandidat für Testautomatisierung. Die Automatisierung dieser Tests sollte früh im Projekt beginnen. </p>


<h4>Wartungstest </h4>
<p class="kursiv fs-08 m1">= entweder um Fehlerzustände zu beheben, die in der betrieblichen Nutzung aufgetreten sind, um neue Funktionalitäten hinzuzufügen oder um bereits gelieferte Funktionalitäten zu löschen oder zu ändern </p>

<p class="m2">Wartung wird auch benötigt, um nicht-funktionale Qualitätsmerkmale der Komponente oder des Systems über seine Lebenszeit hinweg zu erhalten oder zu verbessern, insbesondere Performanz, Kompatibilität, Zuverlässigkeit, IT-Sicherheit und Übertragbarkeit.  <br>
Wenn Änderungen als Teil der Wartung vorgenommen werden, sollten Wartungstests durchgeführt werden, sowohl um den Erfolg zu bewerten, mit dem die Änderungen vorgenommen wurden, als auch um mögliche Seiteneffekte (z.B. Regressionen) in Teilen des Systems zu prüfen, die unverändert bleiben (was üblicherweise der Großteil des Systems ist). Wartung kann geplante Releases und ungeplante Releases (sog. Hot Fixes) beinhalten.  </p>
 

<p class="strong">Umfang der Wartungstests sind abhängig von:</p>
<ul class="m2">
    <li>Der Risikohöhe der Änderung (z.B. der Grad, zu dem der geänderte Bereich der Software mit anderen Komponenten oder Systemen kommuniziert) </li>
    <li>Der Größe des bestehenden Systems  </li>
    <li>Der Größe der Änderung</li>
</ul>

<p class="strong">Auslöser für Wartung </p>
<p class="fS-08 kursiv m1">= für geplante als auch für ungeplante Änderungen</p>
<ul class="m2">
    <li>Modifikation, wie geplante Verbesserungen (z.B. releasegesteuert), korrigierende Änderungen und Notfalländerungen, Änderungen der betrieblichen Umgebung (wie geplante Betriebssystem- oder Datenbankaktualisierungen), Aktualisierungen von kommerzieller Standardsoftware und Patches für Fehlerzustände und Schwachstellen</li>
    <li>Migration, wie von einer Plattform zu einer anderen, was betriebliche Tests der neuen Umgebung und auch der veränderten Software erfordert oder Tests der Datenkonvertierung, wenn Daten von einer anderen Anwendung in das System migriert werden, das gewartet wird </li>
    <li>Außerbetriebnahme, z.B. wenn eine Anwendung das Ende ihres Lebenszyklus erreicht. Wenn eine Anwendung oder ein System außer Betrieb genommen wird, kann dies Tests der Datenmigration oder, wenn lange Datenspeicherungsfristen erforderlich sind Tests der Datenarchivierung erfordern </li>
    <li>Das Testen von Wiederherstellungsverfahren nach der Archivierung bei langen Aufbewahrungsfristen kann ebenso notwendig sein </li>
    <li>Regressionstests können erforderlich sein, um sicherzustellen, dass jede Funktionalität, die in Betrieb bleibt, weiterhin funktioniert. </li>
</ul>

<p class="strong">Auswirkungsanalyse für Wartung </p>
<p class="fS-08 kursiv m1">=bewertet die Veränderungen, die für ein Wartungsrelease gemacht wurden, um die gewünschten Folgen sowie die erwarteten als auch möglichen Nebeneffekte einer Veränderung zu identifizieren und um die Bereiche des Systems zu identifizieren, die von der Veränderung betroffen sind. </p>

<p class="m2">Die Auswirkungsanalyse kann vor der Veränderung durchgeführt werden, um bei der Entscheidung zu helfen, ob die Veränderung vorgenommen werden sollte</p>

<p class="kursiv">Mögliche Erschwernisse: </p>
<ul class="m3">
    <li>Spezifikationen (z.B. Fachanforderungen, User-Stories, Architektur) veraltet sind oder fehlen  </li>
    <li>Testfälle nicht dokumentiert oder veraltet sind  </li>
    <li>Bidirektionale Verfolgbarkeit zwischen Tests und der Testbasis nicht aufrechterhalten wurde  </li>
    <li>Werkzeugunterstützung schwach ist oder nicht existiert</li>
    <li>Die beteiligten Personen keine Fach- oder Systemkenntnis haben  </li>
    <li>Während der Entwicklung nur ungenügende Aufmerksamkeit auf die Wartbarkeit der Software gelegt wurde</li>
    <li></li>
</ul>

<p class="strong">Black Box Testing</p>
<ul class="m3">
    <li>Analyse der Testbasis (Spezifikation, User Stories etc.)</li>
    <li>Kann funktionale und nicht funktionale Tests angewendet werden</li>
    <li>Behandelt Input und Output</li>
    <li>Ignoriert die interne Struktur des Codes</li>
    <li>Testbedingungen, Testdaten und Testwerden als Spezifikationen abgeleitet</li>
    <li>Können Differenzen zwischen Anforderungen und Implementierung sichtbar machen</li>
</ul>

<p class="strong">White Box Testing</p>
<ul class="m3">
    <li>Strukturelles Verfahren</li>
    <li>Analyse von Architektur, Feinentwurf oder Code</li>
    <li>Konzentration auf Struktur und Abläufe innerhalb des Testobjekts</li>
</ul>

<p class="strong">Erfahrungsbasiertes Testen</p>
<ul class="m3">
    <li>Nutz die Erfahrung von Testern, Developern oder Usern</li>
    <li>Häufig in Kombination mit White Box oder Black Box </li>
    <li>Benötigt Erfahrung bez. erwarteter Systemverwendung, Systemumfeld und Fehlerzustände</li>
</ul>

<p class="strong">Testverfahren im Blackbox Testing</p>
<ul class="m3">
    <li>Äquivalenzklassenbildung</li>
    <li>Grenzwertanalyse</li>
    <li>Entscheidungstabellentests</li>
    <li>Zustandsübergangstest</li>
    <li>Anwendungsfallbasierte Tests</li>
</ul>

<p class="strong">Testverfahren in White Box Testing</p>
<ul class="m3">
    <li>Anweisungstests und -überdeckung</li>
    <li>Entscheidungstests und -überdeckung</li>
</ul>

<p class="strong">Testverfahren im erfahrungsbasiertes Testen</p>
<ul class="m3">
    <li>Intuitive Testfallermittlung</li>
    <li>Exploratives Testen</li>
    <li>Checklistenbasiertes Testen</li>
</ul>

<p class="strong">Exkurs- Überdeckung</p>
<ul class="m3">
    <li>Gibt an „wieviel“ getestet wurde</li>
    <li>Meist in Prozent ausgedrückt</li>
    <li>Beispiel: eine Programm beinhaltet 25 einfache If-Anweisungen</li>
</ul>

•	
•	
•	







</div>