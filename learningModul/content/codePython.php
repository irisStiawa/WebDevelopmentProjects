append(Wert)		fügt einen Liste einer Wert hinzu, (immer nur 1 Wert erlaubt)

Liste.sort()		sortiert ein Liste, keine assoziativen Listen oder gemischte Listen erlaubt	; erlaubte Typen: String, Integer, Boolean, Boolean + Integer; nicht erlaubte Typen: Boolean + String, Integer+String

count(Wert)	gibt die Anzahl der Elemente in der Liste zurück die dem Wert entsprechen

pop(Wert)	entfernt ein Element aus einer Liste, Wert: Position in der Liste

remove(Wert)	entfernt ein Wert aus einer Liste, Wert: das zu entfernende Element (bei öfteren Vorkommen wird erstes Element des entsprechenden Werts entfernt)

reverse()	dreht Elemente einer Liste um

input()	erlaubt User Input

int()	Validierung auf eine ganze Zahl

index()	gibt die Position eines Wertes in einer Liste zurück

id()	gibt die Idee des Objektes zurück

extend()	erweitert eine Listen um weitere Listen, Wert: nur Listen erlaubt

insert()	fügt ein Element zu einer Liste, Werte: Position, Element

w 		write, steht für überschreiben(in Zusammenhang mit + wird eine neue Datei erstellt)

a 			append, an eine Datei Context anhängen

r			read, um eine Datei zu lesen

rb			read binary, gibt den Text gecodet zurück

encoding=‘UTF-8‘ 	um ein bestimmtes Encoding zu verwenden beim öffnen der Datei

read			liest Datei aus, Wert: ohne gesamte Datei, mit Wert die entsprechenden Zeichen

readline()		liest AKTUELLE Zeile aus

readlines()		gibt eine Liste zurück mit allen Zeilen

replace()		ersetzt einen String in einem Text, Werte: String der ersetzt werden soll, durch welchen String ersetzt werden soll, wie oft ersetzt werden soll

.seek()				um den Cursor an eine bestimmte Position setzen, Wert: Position

def Funktionsname():		definiert eine Funktion

**				Operator für Hochzahl

float()				in eine Gleitkommazahl umwandeln

str()				in einen String umwandeln

int()				in eine Ganzzahl umwandeln

pass				dient als Platzhalter, Syntax verlangt Befehl aber es soll kein Befehl ausgeführt werden

f’String{}‘			mit f vor String wird der Inhalt zum String, Variablen werden mit {} eingefügt, bei Zahlen samt Format

Variable: .1f			f steht für float und nimmt .1 eine Nachkommastelle

range(Wert)			Methode gibt Zahlen von Null bis Wert ab

list(filter())	Methode um zu filtern, Werte: Funktion nach der gefiltert werden soll, Liste

if…in…	Abfrage für Listen

try: …execpt:…	versuche dies durchzuführen(Optionen in try werden nicht als Error für Durchläufe gehandhabt), wenn nicht dann folgenden Error

ValueError	überprüft ob Fehler weil Input inkorrekt ist

ZeroDivisionError	überprüft ob Fehler weil Ergebnis 0 ist

import requests		Anfragen an einen Server

requests.get()			Methode um Informationen vom Server abzufragen

requests.update()		Methode um Informationen am Server updaten zu können

requests.delete()		Methode um Informationen am Server zu löschen

requests.post()		Methode um Informationen am Server zu posten

responseobjekt.text		gibt den Quellcode einer http -Seite zurück

import re			regular expressions – regex

re					regular Expressions

findall()	gibt eine Liste mit allen Vorkommnissen in einem Text zurück nach Regex

sub()				wie replace() nur für Regex
zip()	zwei Listen miteinander verbinden, Listenelement mit gleichem Index werden ein Tuple

join()				Methode eines String Objekts es zu verbinden

urllib				Bibliothek(beinhaltet requests)

urljoin()	Methode aus urllib, Werte: Basispfad, relativer Pfad nachdem gesucht werden soll <span class="fC-red">(ACHTUNG!!: Methode sehr unsicher)</span> 

secrets	Bibliothek die Zufallszahlen generiert (für Verschlüsselungen)

random	Bibliothek die Zufallszahlen generiert <span class="fC-red">(ACHTUNG: nicht für Verschlüsselungen)</span>

secrets.randbelow()	generiert eine Zufallszahl unter dem angegeben Wert, Wert: Zahl

random.randint()	generiert eine Zufallszahl zwischen zwei Zahlen, Wert: min, u. max. Wert

random.SystemRandom.random()	Zufallszahl anhand von Bytes, Wert: Bytes die genützt werden soll um die Zahl zu generieren (Ergebnis immer eine Zahl zwischen 0 und 1)

time.time()	Systemzeit in Sekunden


pip install modulname		installiert ein Modul über die Kommandozeile

__name__				Variable mit vergebenen Wert

pygame.init()				vergibt grundlegende Werte um die Zugriffszeit zu verkürzen 

pygame.display.set_mode()		generiert einen Programmstart, Werte: Höhe und Breite – können in Form eines Tuples übergeben werden oder durch den Wert (h,b)

pygame.event.get()			Eventlistener für alle Events die in pygame ausgeführt werden

pygame.QUIT				Event das bei schließen das Programmes zustande kommt

pygame.quit()				Funktion die das Programm schließt

pygame.image.load().convert()	ladet ein Bild in pygame, Wert: Datepfad, Methode 

convert() um das Bild auf seine Größe zu reduzieren
screen.fill()				generiert eine Hintergrundfarbe, Wert: Tuple, oder RGB Werte in Klammer

screen.blit()				setzt eine Grafik ins Bild an eine bestimmte Stelle, Wert: Bild und Tuple oder Werte in Klammer (x,y)

pygame.display.flip()			mit diesem Befehl wird alles angezeigt

img.set_colorkey()			pygame kennt keine Transparenz um eine Farbe transparent zu setzen wie folgt, Wert: Tuple oder RGB Werte in Klammer

pygame.KEYDOWN			Tastureingabeevent in pygame

pygame.transform.scale()		definiert die Größe eines Objektes, Werte: Bild, Tuple oder Höhe und Breite in Klammer

pygame.draw.line()			zeichnet eine Linie in pygame, Werte: Variable die den Screen in dem gezeichnet werden soll enthält, Farbe der Linie, Startpunkt, Endpunkt, Breite der Linie

img.get_size()[]			eruiert die Breite und Höhe eines Bildes, Wert: 0 ist Breite, 1 ist Höhe

globals()		wirft alle globalen Objekte eines Programmes aus (Variablen, Klassen,
Funktionen)



