<div>
<h4 class="m1">NETZWERKE – GRUNDLAGEN</h4>

<p class="m1 strong">was passiert wenn ich „google“?</p>

<ul class="m2">
    <li>Browser öffnen</li>
    <li>Google öffnen</li>
</ul>

<p class="strong">URL</p>
<p class="m1">216.58.206.3 oder google.at?</p>

<p class="m1"><span class="strong">DNS </span>- Domain Name System</p>

<p class="m3"><span class="strong">IP-Adresse</span> -> IPv4/IPv6</p>

<h4 class="m1">URL – UNIFORM RECOURCE LOCATOR</h4>
<ul class="m3">
    <li>ruft eine Internetadresse auf – kann aber viel mehr</li>
    <li>Struktur: 	Protokoll://Domain-Name/Ordner/Datei
        <ul>
            <li>Beispiele für Protokolle: HTTP, FTP, SMTP, POP, etc.</li>
            <li>Beispiel für einen Domain-Namen: google.at</li>
        </ul>
    </li>
</ul>

<h4 class="m1">DNS - DOMAIN NAME SYSTEM</h4>
<ul class="m3">
    <li>das DNS wandelt die Texteingabe in IP-Adressen um</li>
    <li>(www.orf.at wird zu 194.232.104.141)</li>
    <li>ein vollständiger Domain – Name darf maximal (inkl. Punkte) 255 Bytes lang sein</li>
    <li>bis 2004 waren Umlaute in Domain – Namen nicht möglich</li>
    <li>IDN (internationalized domain name) ermöglichen Sonderzeichendomains (z.B. Umlaute) – <span class="fC-red">sorgt nur für Probleme und ist nicht empfehlenswert</span></li>
    <li>Punycode übersetzt die Sonderzeichen in ASCII – kompatible Zeichen</li>
</ul>

<h4 class="m1">DNS - DOMAIN NAME SYSTEM</h4>	
 
<ul class="m3">
    <li>jeder Domain-Name besteht aus mehreren Teilen (label)</li>
    <li>die Teile werden durch Punkte getrennt</li>
    <li>ganz rechts steht die top-level-domain, der höchste Teil in der Hierarchie</li>
    <li>die Hierarchie  ist von rechts nach links absteigend</li>
</ul>

<img src="img/network/network1.jpg" class="iW-600 m2" alt="network">

<h4 class="m1">IP – ADRESSEN</h4>

<div class="flex m3">
    <div>
        <ul>
            <li>IP = Internet Protocoll
                <ul>
                    <li>werden dynamisch vergeben</li>
                </ul>
            </li>
            <li>2 Varianten (IPv4 und IPv6)</li>
            <li>Struktur (IPv4)
                <ul>
                    <li>bestehen aus Netzanteil und Hostanteil</li>
                    <li>werden durch Punkte getrennt</li>
                    <li>bestehen aus 4 Oktetten</li>
                    <li>beinhalten 3 Netzklassen und 2 Spezialklassen</li>
                </ul>
            </li>
        </ul>
    </div>
    <img src="img/network/network2.jpg" class="iW-300" alt="network">
</div>

<h4 class="m1">IP – ADRESSEN – WER VERGIBT SIE?</h4>
<img src="img/network/network3.jpg" class="iW-800 m3" alt="network">
<p class="text-center m3">für Österreich werden die Adressen at, co.at und or.at bei nic.at verwaltet <br>
.com wird direkt von IANA verwaltet <br>
IANA ist auch die einzige Organisation die weitere Verwaltung übernimmt
</p>

<h4 class="m1">IP – ADRESSEN</h4>
<div class="flex-column m3">
    <p class="text-center">IPv4: 32 Bit => 232 Adressen in 4 Oktetten <br>Anzahl: ca. 4,3 Milliarden (4.294.967.296)</p>
    <img src="img/network/network4.jpg" class="m-auto iW-180" alt="network">
    <p class="text-center m2">Beispiel: 216.58.206.3</p>

    <p class="text-center">IPv6: 128 Bit => 2128 Adressen in 16 Oktetten <br>Anzahl: ca. 340 Sextillionen Adressen <br> (340.282.366.920.938.463.463.374.607.431.768.211.456)</p>
    <img src="img/network/network5.jpg" class="iW-700 " alt="network">
    <p class="text-center m3">Beispiel: 2001:0D88:2135:A201:00FD:DCEF:125A:DC12</p>
</div>


<h4 class="m1">… WAS IST EINE SUBNETZMASKE?</h4>

<ul class="m3">
    <li>eine Bit-Maske, die Netzwerk- und Hostteil in einer IP-Adresse trennt</li>
    <li>Netzwerkteil (Netzwerkkennung) – wenn der Netzwerkanteil gleich ist sind alle <br> im gleichen Netzwerk:
        <ul>
            <li>3 mögliche Netzklassen (A,B,C)
                <ul>
                    <li>Klasse A: 1. Oktett in der IP-Adresse (10.125.212.16)</li>
                    <li>Klasse B: 1. und 2. Oktett in der IP-Adresse (172.69.105.24)</li>
                    <li>Klasse C: 1., 2., 3. Oktett in der IP-Adresse (192.212.168.14)</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>alle Rechner, Router und andere Geräte, die den Netzwerkanteil gleich haben, befinden sich im gleichen Netzwerk</li>
    <li>der Hostanteil der IP-Adresse definiert die Zahl der Hostadressen, die in einem Netzwerk zur Verfügung stehen
        <ul>
            <li>zum Beispiel: die IP-Adresse 192.168.176.0 hätte die Subnetzmaske 
            255.255.255.0 <br>
            das bedeutet, es stehen im Netzwerk 192.168.176.0 exakt 254 Hostadresse zur Verfügung (die 0 und die 255 dürfen nicht vergeben werden) ein Rechner in diesem Netzwerk könnte die IP-Adresse 192.168.176.25 
            haben
            </li>
            <img src="img/network/network6.jpg" class="iW-120 m0" alt="network">
        </ul>
    </li>
    <li>was tun, wenn die Anzahl der IP-Adressen in meinem Netzwerk nicht ausreicht (254 IP-Adressen, aber 350 Geräte, die eine IP-Adresse benötigen)</li>
    <li>Variante 1: in eine höhere Netzklasse wechseln (um den Host-Anteil zu erhöhen)</li>
    <li>Variante 2: mit der Technik des subnettings kann der Bereich der IP-Adressen innerhalb eines Netzwerks erweitert werden</li>
</ul>

	
<h4 class="m1">MAC – ADRESSEN</h4>
<ul class="m3">
    <li>MAC = Media Access Control
        <ul>
            <li>befindet sich auf der Netzwerkkarte (Netzwerk-Adapter)</li>
            <li>hardwaremäßig festgelegt</li>
            <li>sollte weltweit einmalig sein </li>
            <li>wird hexadezimal notiert</li>
            <li>6x8 Bit (48 Bit) ergeben 248 (281 Billionen) Möglichkeiten</li>
        </ul>
    </li>
</ul>

<h4 class="m1">… WAS PASSIERT, WENN ICH DE.WIKIPEDIA.ORG GOOGLE?</h4>	

<p class="strong">Bestens erklärt unter:</p>
<p class="m2">https://upload.wikimedia.org/wikipedia/commons/3/3c/DNS-query-to-wikipedia.svg</p>

<p class="strong">ergänzend dazu:</p>

<table class="m3">
    <tbody>
        <tr>
            <td class="strong">bevorzugter DNS-Server:</td>
            <td>wird im Betriebssystem eingestellt z.B. 8.8.8.8 ist der DNS-Server von google</td>
        </tr>
        <tr>
            <td class="strong">Cache:</td>
            <td>schneller Pufferspeicher, der Daten die einmal geladen waren zur Wiederansicht speichert</td>
        </tr>
        <tr>
            <td class="strong">DNS-Request: </td>
            <td>Anfrage an einen DNS-Server für das Umwandeln eines Domain-Namens in eine IP - Adresse</td>
        </tr>
    </tbody>
</table>

<p class="fC-red">pingen: </p>
<p class="m3">Windows+R > CMD > ping + (Webadresse)
Bei IPv6 Adressen folgendes eingeben: ping-6 + (Webadresse)</p>	
 	
	
<h4 class="m1">ÜBERTRAGUNG VON DATENPAKETEN</h4>

<ul class="m3">
    <li>was wird benötigt:
        <ul>
            <li>zwei Knoten (Geräte) in einem gemeinsamen Netzwerk</li>
            <li>eindeutige IP-Adressen (IPv4 oder IPv6)</li>
            <li>ein Transportprotokoll (in unserem Beispiel TCP)</li>
        </ul>
    </li>
    <li>die Funktionsweise („Drei-Wege-Handshake“)
        <ul>
            <li>der Client schickt dem Server ein SYN-Paket (SYN für Synchronisation)</li>
            <li>der Server schickt ein SYN-ACK-Paket zurück (ACK für Bestätigung)</li>
            <li>der Client bestätigt den Erhalt des Pakets und schickt ein eigenes <br>ACK-Paket an den Server, gleichzeitig auch erste Daten </li>
        </ul>
    </li>
</ul>

<h4>3-WEGE-HANDSHAKE GRAFISCH DARGESTELLT</h4>

<img src="img/network/network7.jpg" class="iW-700" alt="network">


<h4 class="m1">ÜBERTRAGUNG VON DATENPAKETEN</h4>

<ul class="m3">
    <li>die Daten werden für die Übertragung in Datenpakete aufgeteilt, sogenannte Segmente</li>
    <li>die Pakete (Segmente) dürfen eine max. Größe von 1,5 kb haben</li>
    <li>jedes Paket hat einen IP und einen TCP – Header (jeweils 20 kb), damit stehen für die eigentlichen Daten 1,46 kb zur Verfügung.</li>
    <img src="img/network/network8.jpg" class="iW-600" alt="network">
    <li>die Pakete werden mit einer Nummer (sequence number) versehen</li>
    <li>mit jedem Paket werden die beiden Header mitgeschickt</li>
    <li>die Pakete können in beliebiger Reihenfolge und über unterschiedliche Wege versendet werden (Source IP, Destination IP und Sequence number sorgt dafür das die Pakete wieder zusammen findet)</li>
    <li>der Empfang jedes Pakets muss bestätigt werden</li>
    <li>durch die Sequence number kann die Datei wieder „zusammengesetzt“ werden</li>
    <li>wenn der Versender keine Empfangsbestätigung bekommt, wird das Paket neu verschickt</li>
</ul>


<h4 class="m1">KOMMUNIKATION IM GLEICHEN NETZWERK</h4>

<p class="m1">Geräte (sogenannte Knoten) innerhalb eines (Sub)Netzes kommunizieren über die MAC-Adresse (Hardware-Adressen)</p>

<img src="img/network/network9.jpg" class="iW-700 m3" alt="network">

<h4 class="1">KOMMUNIKATION IN VERSCHIEDENEN NETZWERKEN</h4>
<p>Knoten in verschiedenen (Sub)Netzen kommunizieren über die Router miteinander</p>
<img src="img/network/network10.jpg" class="iW-700 m3" alt="network">

<h4 class="m1">ÜBERSICHT DER NETZKLASSEN (VERALTET)</h4>
<img src="img/network/network11.jpg" class="iW-1000 m3" alt="network">

<table class="m3">
    <tbody>
        <tr>
            <td class="strong">Sub-Domainen</td>
            <td>wird verwendet um die Domain abzutrennen – Einkauf, Verkauf, usw.- eigens CMS laufen lassen, streng getrennt</td>
        </tr>
        <tr>
            <td class="strong">Pop3-Adressen</td>
            <td>normale Mail Adresse, Mail Adresse selbst einrichten, über Outlook, Daten werden physisch herunter geladen und sind nicht mehr am Server verfügbar</td>
        </tr>
        <tr>
            <td class="strong">Exchange-Adressen:</td>
            <td>auch im Outlook zu verwenden, beim herunterladen sind die Daten nur auf dem Gerät, Daten trotzdem noch am Server</td>
        </tr>
        <tr>
            <td class="strong">CMS</td>
            <td>größtes ist Wordpress(hat viele Gratis Designvorlagen- wird installiert und auf einem Server hochgeladen), haben Dashbords (System/Oberfläche das die Website im Hintergrund verwaltet) – benötigt Datenbank im Hintergrund</td>
        </tr>
        <tr>
            <td class="strong">Kontant-Manag.-System</td>
            <td>Daten werden aus einer Datenbank geholt</td>
        </tr>
        <tr>
            <td class="strong">PROXY-Server</td>
            <td>Kommunikationsschnittstelle zwischen Netzwerken, hat einen eigenen Zwischenspeicher, für Firewall-Konzepte herangezogen, Proxy-Server Sicherheitspuffer zwischen Internet und dem Gerät(Daten werden vom Server abgefangen)</td>
        </tr>
        <tr>
            <td class="strong">NAT</td>
            <td>Network Adress Translator, NAT übersetzt Private Emailadresse in eine die im Internet verwendet werden darf (international gültige) und umgekehrt</td>
        </tr>
        <tr>
            <td class="strong">DHCP</td>
            <td>Dynamic Host Configuration Protocol, verteilt IP-Adressen an die Geräte dynamisch (funktioniert nur mit einem DHCP, bei mehreren tritt eine Überschneidung auf)</td>
        </tr>
        <tr>
            <td class="strong">ARP</td>
            <td>Address Resolution Protocol</td>
        </tr>
        <tr>
            <td class="strong">TCP/IP</td>
            <td>Transmission Control Protocol</td>
        </tr>
        <tr>
            <td class="strong">Port</td>
            <td>Schnittstelle für bestimmte Aktionen vorbelegt, sind teilweise festgelegt </td>
        </tr>
        <tr>
            <td class="strong">Sub-Net</td>
            <td>benötigt man um Netzwerk in Unternetzwerke aufzuteilen, innerhalb der Unternetze Kommunikation schneller</td>
        </tr>
        <tr>
            <td class="strong">IP-Adressen</td>
            <td>Internetadresse</td>
        </tr>
        <tr>
            <td class="strong">MAC-Adresse</td>
            <td>bei jedem Netzwerkadapter einzigartig aber auch überschreibbar/programmierbar</td>
        </tr>
        <tr>
            <td class="strong">Subnet-Masken</td>
            <td>erforderlich zum Aufteilen des Unternetzes (siehe ob.: Übersicht der Netzklassen) </td>
        </tr>
        <tr>
            <td class="strong">RFC</td>
            <td>Request of Comments, technischer und organisatorischer Dokumente zum Internet</td>
        </tr>
    </tbody>
</table>

<h4>FIREWALL, PORT (65.536 Ports pro Rechner), SOCKET</h4>
<p class="kursiv fS-08">= erlaubt oder verhindert den Zugang zum Netzwerk</p>

<img src="img/network/network12.jpg" class="iW-700" alt="network">
<p class="strong text center m3">Der Port über der eine Website kommuniziert ist am DNS Server deklariert.</p>

<p class="strong">well known Ports:</p>
<table class="m3">
    <tr>
        <td class="strong">21 FTP</td>
        <td>um Files zu verschicken</td>
    </tr>
    <tr>
        <td class="strong">22 SFTP</td>
        <td>um Files verschlüsselt zu verschicken</td>
    </tr>
    <tr>
        <td class="strong">80 HTTP</td>
        <td>Hypertext Transfer Protocoll</td>
    </tr>
    <tr>
        <td class="strong">443 HTTPS</td>
        <td>(Hypertext Transfer Protocol over SSL/TLS</td>
    </tr>
    <tr>
        <td class="strong">3389 RDP</td>
        <td>Remote Desktop Protocoll,</td>
    </tr>
    
</table>

<p class="strong">TCP (Header 36 Byte bei 4 Byte Datenvolumen)</p>	
<p class="kursiv fS-08 m1">= Transmission Control Protocol/Internet Protocol</p>	
<ul class="m3">
    <li>“Guaranteed to arrive or disconnected” (wartet auf Antwort von der Netzwerkseite sonst Verbindungstrennung)</li>
    <li>„Arrive in Order“ – selbe Reihenfolge der Requests</li>
</ul>		

<p class="strong">UDP (Header 4 Byte bei 4 Byte Datenvolumen)</p>
<p class="kurisv fS-08 m1">= User Datagram Protocol</p>
<ul>
    <li>Vorteile: klein und schnell </li>
    <li>“Connectionless” (hält Verbindung ohne Antwort)</li>
    <li>„No Order“ – keine Garantie für die Reihenfolge der Requests <br><span class="kursiv fC-red">mögl. Packet loss - Paketverlust (0,2-0,5% werden toleriert)</span> </li>
</ul>
<img src="img/network/network13.jpg" class="iW-700 m2" alt="network">

<p class="border-red m3 fC-red text-center">HOLE PUNCHING <br>
= wenn die Firewall HOLE PUNCHING nicht unterstützt würden keine UDP Datenpakete hindurchkommen. Hole Punching sorgt dafür das der Port 60 Sekunden offen bleibt und schließt sich dann wieder. (die 60Sek können generiert werden, grundsätzlich besitzt jede Firewall Hole Punching)</p>

<p class="strong">DDoS</p>
<p class="kursiv m1 fS-08">= Distributed Denial of Service</p>

<p class=" kursiv m3"><span class="strong">Wikipedia-Definition:</span><br>
Im Fall einer durch eine Vielzahl von gezielten Anfragen verursachten, mutwilligen Dienstblockade spricht man von einer Denial-of-Service-Attacke und, wenn die Anfragen von einer großen Zahl an Rechnern aus durchgeführt werden, von einer Distributed-Denial-of-Service attack (DDoS-Angriff, deutsch wörtlich verteilter Dienstverweigerungsangriff). Da beim DDoS-Angriff die Anfragen von einer Vielzahl von Quellen ausgehen, ist es nicht möglich, den Angreifer zu blockieren, ohne die Kommunikation mit dem Netzwerk komplett einzustellen.</p>

<p class="strong">IPS</p>
<p class="kursiv fS-08">= werden Intrusion-Detection-Systeme bezeichnet, die über die reine Generierung von Ereignissen hinaus Funktionen bereitstellen, die einen entdeckten Angriff abwehren können - Sicherheitsstufe vor Firewall zum Internet</p>
<img src="img/network/network14.png" class="iW-600 m3" alt="network">

<h4 class="m1">Infrastruktur & HOSTING</h4>

<p class="strong">Xaa S (Everything as a Service)</p>
<ul class="m3">
    <li class="m2">Paa S (Platform as a Service) <br><br>
    <span class="kursiv strong">Vorteile:</span>
        <ul>
            <li>Platformen dessen Speicher und Kapazitäten genutzt werden können (Figma, Github)</li>
        </ul>
    </li>
    <li class="m2">Iaa S (Infrastructure as a Service) <br><br><span class="kursiv strong">Vorteile:</span>
        <ul>
            <li>gesamte IT ausgelagert nur Client-Rechner Vorort (Software, Datenspeicher usw. sind ausgelagert)</li>
        </ul>
    </li>
    <li class="m2">Saa S (Software as a Service) <br><br><span class="kursiv strong">Vorteile:</span>
        <ul class="m1">
            <li>Abo, neuste Softwareversion ohne die Notwendigkeit eines Neukaufes</li>
            <li>notwendige Software für einzelne Projekte muss nicht zum vollen Neukaufspreis erworben werden</li>
            <li>Updates und Installationen werden automatisch vom Anbieter übernommen </li>
        </ul> 
        <span class="kursiv strong">Nachteile:</span><br>
        <ul>
            <li>Offline arbeiten ist nicht möglich</li>
        </ul>
    </li>
</ul>

<p class="strong m1">HOSTING</p>
<ul class="m3">
    <li>wix, Hostpapa, Squarespace <br><br><span class="kursiv strong">Vorteile:</span><br>
        <ul class="m1">
            <li>keine Programmiererfahrung</li>
            <li>Stockfotos</li>
            <li>schnelle Erstellung einer Website</li>
        </ul>
        <span class="kursiv strong">Nachteile:</span>
        <ul>
            <li>Werbung</li>
            <li>keine eigene Domain sondern immer mit der Anbieter-URL verbunden</li>
            <li>Bestandteile der Website aus einem Set an vorgefertigten Anwendungen</li>
            <li>Datenmenge</li>
            <li>Zugriffsbeschränkung</li>
            <li>Zusätze müssen bezahlt werden</li>
        </ul>
    </li>
</ul>


<p class="strong m1">Provider/Domainnamen</p>	
<table class="m2">
    <tbody>
        <tr>
            <td class="strong">Hosting Provider</td>
            <td>Anbieter</td>
        </tr>
        <tr>
            <td class="strong">Host</td>
            <td>Gastgeber</td>
        </tr>
        <tr>
            <td class="strong">DNS</td>
            <td>Domainname Server</td>
        </tr>
    </tbody>
</table>

<p class="fC-red ">Domainnamen auf nic.at (Vergabe und Verwaltung von .at, .co.at und .or.at Domains)
</p>
<img src="img/network/network15.jpg" class="iW-700 m3" alt="network">

<h4>Server/Hosting</h4>
<p class="kursiv m1 fS-08">erforderlich hierfür: Hosting-Provider, Domainname Registierung</p>

<ul class="m3">
    <li class="m2">Shared Server<br><br><span class="kursiv strong">Vorteile:</span><br>
        <ul class="m1">
            <li>Updates, Installationen am Server werden vom Anbieter durchgeführt</li>
            <li>Administration, Sicherheitsupdates werden vom Anbieter</li>
            <li>Firewall wird vom Anbieter verwaltet</li>
        </ul>
        <span class="kursiv strong">Nachteile:</span>
        <ul>
            <li>möglicher Ausfall/Überlastung(keine Einfluss auf mögl. andere Kunden auf diesem Server, welcher womögl. eine stark besuchte Seite hat)</li>
            <li>keinen Zugriff auf Administration, Sicherheitseinstellungen</li>
        </ul>
    </li>
    <li class="m2">Dedicated Server (eigner Server, eigener PC)<br><br><span class="kursiv strong">Vorteile:</span><br>
        <ul class="m1">
            <li>Änderungen können selbst durchgeführt werden</li>
            <li>keine mögl. Überlastung durch andere Websites auf diesem Server</li>
        </ul>
        <span class="kursiv strong">Nachteile:</span>
        <ul>
            <li>zahlt sich für eine einzelne Website nicht aus</li>
            <li>hohe Kosten</li>
            <li>Administration muss selbst verwaltet werden</li>
            <li>Datenbanken, PHP Versionen müssen selbst upgedatet werden</li>
            <li>Teile der Firewall müssen unter Umständen selbst verwaltet werden</li>            
        </ul>
    </li>
    <li class="m2">Virtual Server (eigener Server der nicht zwangsläufig eine eigene Hardware besitzt – Hardware mit mehreren Servern)<br><br><span class="kursiv strong">Vorteile:</span><br>
        <ul class="m1">
            <li>mittelgroße Websites</li>
            <li>Datenbanken, PHP Versionen müssen selbst upgedatet werden</li>
            <li>Teile der Firewall müssen unter Umständen selbst verwaltet werden</li>
        </ul>
        <span class="kursiv strong">Nachteile:</span>
        <ul>
            <li>möglicher Ausfall/Überlastung(keine Einfluss auf mögl. andere Kunden auf diesem Server, welcher womögl. eine stark besuchte Seite hat)</li>
        </ul>
    </li>
</ul>

<p class="text-center m3"><span class="strong">CDN (Content Delivery Network)</span> <br>verteilt die Serverlast</p>

<p class="strong">Bei Website Registrierung zu beachten:</p>
<ul class="m3">
    <li>Speicherplatz – Größe ?</li>
    <li>Datenbank – Anzahl ?</li>
    <li>PHP – Unterstützung</li>
    <li>Mailserver – Anzahl der Mailadressen? Speicherplatzgröße? Größe der Daten bei versenden? (max. Anhänge)</li>
    <li>Subdomains <br><img src="img/network/network16.jpg" class="iW-600" alt="network"></li>
</ul>

<h4 >DNS Server</h4>

<img src="img/network/network17.jpg" class="iW-600" alt="network">
<p class="fC-red text-center kursiv m2">Eingabe Aufforderung: mit dem ping Befehl Webadresse abfragen</p>
<p class="strong text-center m2">ww.ripe.net – hier Provider ausfindig machen</p>

<p class="kursiv m3">Wichtige Datumswerte in der Informatik:  3600, 1440, 86400, 168</p>

<p class="strong">Fachbegriffe zur Netzwerktechnik</p>
<table>
    <tbody>
        <tr>
            <td class="strong">DNS – Domain Name System</td>
            <td>wandelt die Webadresse in eine IP-Adresse um der DNS Server wird bereits vom User PC angepeilt – weltweit gibt es 5 Global DNS Server die alle Adressen verwalten (www.erdbeerwelt.at => 83.133.244.104)</td>
        </tr>
        <tr>
            <td class="strong">DHCP - Dynamic Host Configuration Protocoll</td>
            <td>Router vergibt die nächste freie Device die sich ins Netz anmeldet; (LEASE => Dauer, für diese Dauer bekommt die Device die selbe Adresse, nach Ablauf dieser Zeit wird eine neue vergeben bei Abmeldung)</td>
        </tr>
        <tr>
            <td class="strong">VPN</td>
            <td>man spricht auch: VPN-Tunnels, PPTP = Point-to-Point Tunneling Protocoll</td>
        </tr>
    </tbody>
</table>
<img src="img/network/network18.jpg" class="iW-700 m3" alt="network">

<p class="strong">NAT- Network Adress Translation	</p>
<img src="img/network/network19.jpg" class="iW-700 m3" alt="network">

<p class="strong">Proxy</p>
<img src="img/network/network20.jpg" class="iW-700 m3" alt="network">

<p class="strong">Gateway(Verteiler wo geht es weiter)</p>
<img src="img/network/network21.jpg" class="iW-700 m3" alt="network">

<p class="strong">TOR</p>
<p class="fS-08 kursiv">(verschlüsselte Verbindung zum Endserver über mehrere Clients, welche Tor nützen)</p>
<img src="img/network/network22.jpg" class="iW-600 m3" alt="network">

<h4>Internes Netzwerk</h4>
<img src="img/network/network23.jpg" class="iW-700 m3" alt="network">

<h4>ISO/OSI(Open System Interconnection)-Referenzmodell </h4>
<img src="img/network/network24.jpg" class="iW-500 m3" alt="network">

<p class="strong">7 Schichtenmodell (Layer - Schicht)</p>
<img src="img/network/network25.jpg" class="iW-700 m3" alt="network">

<p class="strong">Layer 1 (Bitübertragungsschicht)</p>
<p class="m1 kursiv fS-08">= Hub od. Verteiler routet überall hin</p>
<ul>
    <li>Kabel (Koaxial, Twisted Link, Glasfaser/optical, Kupferkabel - eignet sich nicht sonderlich gut, aber weit günstiger)</li>
    <li>Funk</li>
</ul>
	
<div class="flex">
    <p class="kursiv">Koaxialkabel:</p>
    <img src="img/network/network26.jpg" class="iW-300" alt="network">
    <img src="img/network/network27.jpg" class="iW-250" alt="network">
</div>

<div class="flex m2">
    <p class="kursiv">Twisted Link Kabel (4er): </p>
    <img src="img/network/network28.jpg" class="iW-300" alt="network">
</div>

<p class="strong">Funk:</p>
<img src="img/network/network29.jpg" class="iW-700 m2" alt="network">

<table class="m2">
    <tbody>
        <tr>
            <td class="strong">Trägerfrequenz</td>
            <td>um Sender anzupeilen – höhere Frequenz (GHz), aber eigentliche Nachricht auf einer niedrigeren Frequenz (KHz)</td>
        </tr>
        <tr>
            <td class="strong">Dämpfung</td>
            <td>die Signalstärke eines Signals nimmt exponentiell(quadratisch) mit der Entfernung ab</td>
        </tr>
        <tr>
            <td class="strong">Repeater</td>
            <td>digitales Signal (es gibt nur 0,1)</td>
        </tr>
        <tr>
            <td class="strong">Verstärker</td>
            <td>	analoges Signal (es gibt jede Art von Code durch)</td>
        </tr>
    </tbody>
</table>

<div class="m3 flex-top">
    <div class="iW-400">
        <p class="kursiv">Digital Medium CDS(Datenlöcher):</p>
        <img src="img/network/network30.jpg" class="iW-300 m2" alt="network">
    </div>
    <div class="iW-400">
        <p class="kursiv m2">Digitales Medium Diskette(Magnetfeld):</p>
        <p class="border-black iW-300">Disketten, auch als Floppy Disk (FD) bezeichnet, sind wechselbare magnetische Datenträger, die einen wahlfreien Zugriff zu den Daten gewährleisten. ... Auf den Schichten werden die Daten durch Magnetisierung in konzentrischen Spuren gespeichert. Dazu rotiert die Diskette mit 360 U/min unter dem Schreib-/Lesekopf hindurch.</p>
    </div>
</div>

<p class="strong">Dämpfung errechnen:</p>		
<img src="img/network/network31.jpg" class="iW-600 m3" alt="network">

<p class="strong">Signalverlust: 20%</p>
<img src="img/network/network32.jpg" class="iW-250 m3" alt="network">

<p class="strong">Signalverlust: 0,2 dB</p>
<img src="img/network/network33.jpg" class="iW-250 m3" alt="network">

<p class="strong">mit dBm:</p>
<img src="img/network/network34.jpg" class="iW-400 m3" alt="network">

<p class="strong">Signalverlust: -40dBm</p>
<img src="img/network/network35.jpg" class="iW-300 m3" alt="network">

<p class="strong">Topologie:</p>
<img src="img/network/network36.jpg" class="iW-700 m2" alt="network">

<table>
    <tbody>
        <tr>
            <td class="strong">physical topology</td>
            <td>wo liegen die Kabel, wo stehen die Geräte</td>
        </tr>
        <tr>
            <td class="strong">logical topology</td>
            <td>logische hierarchische Anordnung im Netzwerk</td>
        </tr>
    </tbody>
</table>
<img src="img/network/network37.jpg" class="iW-700 m3" alt="network">

<p class="strong">Layer 2 (Sicherungsschicht)</p>
<p class="fS-08 m1 kursiv">= z.B. Switch kennt die MAC-Adresse </p>
<ul class="m3">
    <li>LLC (Logical Link Control)</li>
    <li>MAC(Media Access Control)</li>
    <li>ARP(Adress Resolution Protocol): um MAC und LLC aufzulösen (Wegweiser Protokoll)</li>
    <li>CSMA (Carrier sense multiple access Protocol)
        <ul>
            <li>CD - collision detection (herausfinden der Kollision bei ankommenden Frames)</li>
            <li>CA - collision avoidance (verhindern der Kollision bei ankommenden Frames)</li>
        </ul>
    </li>
    <li>IEEE (Institut of Electrical Electronical Engineers)
        <ul>
            <li>802 lokales Netzwerk</li>
            <li>802.3 Ethernet</li>
            <li>802.11 WLAN</li>
        </ul>
    </li>
</ul>


<p class="strong">Layer3 (Vermittlungs-/Paketschicht)</p>
<p class="kursiv fS-08 m1">= z.B Router kennt die Netzwerkadresse kann routen</p>
	
<ul class="m3">
    <li>Route (von welcher Adresse zu welcher Adresse – Adresse zu Gateway usw…)</li>
    <li>Pfad (von welchem Gerät zu welchem Gerät – physikalische Sprunge von Kabel zu Kabel zu Switch)</li>
    <li>IP (Internet Protocol) – IPv4, IPv6: verantwortlich für die Kommunikation im Netzwerk
        <ul>
            <li>connectionless – schickt seine Pakete ziellos durch das Netz auf das der Empfänger diese abholt (keine Kontrolle über Erhalt oder Verlust der Pakete)</li>
            <li>orderless – schickt Pakete nicht notwendigerweise in der richtigen Reihenfolge</li>
        </ul>
    </li>
</ul>	

<p class="strong">IPv4(32bit)</p>
<img src="img/network/network38.jpg" class="iW-500 m3" alt="network">

<p class="strong">CIDR (Classless Inter Domain Routing) Notration</p>
<ul class="m2">
    <li>8-Bit Network : 10.0.0.0/8</li>
    <li>16-Bit Network: 172.21.0.0/16</li>
    <li>24-Bit Network: 192.168.0.0/24</li>
</ul>

<p class="border-black text-center m3"><span class="strong">Iana-Network reservierte Adressliste:</span><br>
https://www.iana.org/assignments/iana-ipv4-special-registry/iana-ipv4-special-registry.xhtml</p>	
	
<p><span class="strong">Beispiel:</span> 12bit Netzwerk</p>	
<img src="img/network/network39.jpg" class="iW-500 m3" alt="network">

<p><span class="strong">Beispiel:</span> 24bit Netzwerk</p>
<img src="img/network/network40.jpg" class="iW-600 m3" alt="network">

<p ><span class="strong">Beispiel:</span> 20bit Netzwerk</p>
<img src="img/network/network41.jpg" class="iW-500 m3" alt="network">

<p><span class="strong">Beispiel:</span>Funktionalität der Subnetzmaske</p><img src="img/network/network42.jpg" class="iW-700 m3" alt="network">
 

<p class="strong">IPv6 (128bit)</p>
<img src="img/network/network43.jpg" class="iW-500" alt="network">
<p class="kursiv m3">gegliedert in 16bit Blöcke</p> 

<table class="m3">
    <tbody>
        <tr>
            <td class="strong">Schnittstellen-ID</td>
            <td>ist von der MAC-Adresse abhängig</td>
        </tr>
        <tr>
            <td class="strong">MAC-Adresse</td>
            <td>auf der Netzwerkkarte jedes netzwerkfähigen Gerätes; unveränderbar (Ranche wird von der IEEE an Hersteller vergeben)</td>
        </tr>
    </tbody>
</table>

<p class="strong m1">Layer4 (Transport)</p>
<ul class="m3">
    <li>TCP (Transmission Control Protocol; stream)
        <ul>
            <li>TCP schickt die Pakete übers IP, welche nicht notwendigerweise in der richtigen Reihenfolge ankommen, Pakete werden gezwungen in der richten Reihenfolge von TCP abgearbeitet (sollte hierbei ein Paket fehlen stoppt die Abarbeitung bis das Paket angekommen ist); <span class="kursiv">eignet sich nicht für Echtzeitprogramme: z.B. Telefonate, Games, oder Videos werden über UDP verschickt</span></li>
            <li>Ack(nowledgment) – versichert sich über erfolgreichen Transport aller Pakete (TCP-Handshake)</li>
            <li>multicast – schickt Signal aus, mehrere Empfänger können es sich holen – <span class="fC-red">nur mit speziellen Erweiterungen möglich!!</span></li>
            <li>unicast – schickt Signal aus, ein Empfänger kann es sich holen (starke Bevorzugung bei Verwendung durch TCP)</li>
        </ul>
    </li>
    <img src="img/network/network44.jpg" class="iW-500" alt="network">
    <li>UDP (User Datagramm Protocol; datagramm) – schnelles Ankommen der Daten relevant
        <ul>
            <li>connectionless, prüft nicht nach ob Pakete ankommen</li>
            <li>unordered</li>
            <li>schickt viele Pakete in kurzer Zeit</li>
            <li>broadcast – schickt Signal aus ins Netz, wem das Signal gehört der soll es sich holen (starke Bevorzugung bei Verwendung durch UDP)</li>
            <li>multicast – schickt Signal aus, mehrere Empfänger können es sich holen (starke Bevorzugung bei Verwendung durch UDP) </li>
            <li>unicast – schickt Signal aus, ein Empfänger kann es sich holen</li>
        </ul>
    </li>
</ul>

<p class="strong m1">Layer5 (Sitzung), Layer6 (Darstellung), Layer7 (Anwendung)</p>	
	
<ul class="m3">
    <li>DHCP (Dynamic Host Configuration Protocol)
        <ul>
            <li>vergibt die IP-Adressen dynamisch für eine lease time(bestimmte Zeit bleibt die IP-Adresse diesem Gerät zugeordnet anhand der MAC-Adresse des Geräts)</li>
        </ul>
        <img src="img/network/network45.jpg" class="iW-500" alt="network">
    </li>
    <li>DNS (Domain Name System)
        <ul>
            <li>statische IP-Adressen aus dem Internet hinterlegt</li>
            <li>TTL = time to live</li>
        </ul>
    </li>
    <li>AD (Active Directory) | Intranet (internes Netz)
        <ul>
            <li>Netzwerklösung von Firmen (von Microsoft)</li>
            <li>firmenintern ein Domainserver an dem die Clients hängen (entspricht der Star Network Topology)</li>
            <li>GDO (group policy objects- Gruppenrichtlinien)</li>
            <li>SaS (Software as a Service)</li>
        </ul>
    </li>
</ul>	




	
	
	
 
	
	
	
	
	












</div>