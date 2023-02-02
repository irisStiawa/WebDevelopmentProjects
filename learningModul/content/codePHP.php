<?php…	?>		definiert den PHP-Code, danach kann mit HTML-Code
gearbeitet werden (sollte nur PHP-Code vorhanden sein wird kein ?> für schießenden Tag benötigt)

<?= ?>				alternativ, funktioniert nur wenn etwas geechot wird

// oder #			Kommentare (einzeilig)

/**/				Kommentare (mehrzeilig)

echo ´´				Ausgabe (HTML-Output), mit oder ohne Klammer

<=>	bei Zahlenvergleich, bei gleichen Zahlen ergibt 0, bei 3 u 5 ergibt -1, bei 5 u 3 ergibt 1

$Variable =			Variablendeklaration

$ nVar. = &$ Var.m.Ref.	neue Variable ändert sich wenn die Variable auf die referenziert 
wird sich ändert

print_r()			Ausgabe von Arrays und assoziativen Arrays´

define()			definiert eine Konstante, Wert: Name der Konstante, Wert

__LINE__	magische Konstante: Zeile im Code in der man steht, für De-Bug Funktionen

__FILE__			magische Konstante: wo liegt das File aus dem aufgerufen wird

__DIR__			magische Konstante: in welchem Verzeichnis man gerade ist

.				um Dinge aneinander zu hängen

„“ vs ‚‘				doppelte Anführungszeichen werten Variablen aus einfache 
nicht

\Variable	um die Variable in doppelten Anführungszeichen zu entwerten oder Zeichen zu entwerten(entwertet das nächste Zeichen)

<<<EOT….EOT;	erlaubt den Content zu schreiben ohne alle Anführungszeichen entwerten zu müssen

foreach(Array as Elem){}	for of - Schleife in PHP

require	Element wird verlangt

include	Element wird inkludiert

include_once	Element wird nur einmal inkludiert

isset()				Variable hat einen Wert und existiert

strip_tags: entfernt alles ab dem öffnenden Tag.

time()			UNIX-Timestamp, Wert: ohne 

header()		Methode die auf eine andere Seite verweist

session_start()				Methode um Sessions zu starten, verfällt wenn 
ich Browser schließe

$_SESSION[‚Schlüsselwert‘]			Werte: Schlüsselwert der Session und Inhalt

session_unset()				setzt die Schlüsselwerte zurück	

session_destroy				um User auszuloggen

array_key_exists(‘’,)				Methode um einen Key in einem Array abzufragen, Wert: Schlüsselwert nach dem gesucht wird, abzufragendes Array, es ist ein Boolean-Variable und kann mit json_encode() auf true od false des Wertes abgefragt werden

empty()					gibt aus ob ein String leer ist, Boolean-Variable und kann mit json_encode() auf true od false des Wertes abgefragt werden

password_hash()				Methode die Passwörter verschlüsselt, Wert: welches Passwort soll verschlüsselt werden, Methode; (2 häufige Methoden die nach Datenbankverwaltung unterschieden werden; PASSWORD_DEFAULT – kann sich in Zukunft ändern und mehr Zeichen enthalten, wird immer die sicherste Verschlüsselung enthalten – daher vorrangig nutzen; PASSWORD_BCRYPT – besteht immer aus 60 Zeichen)

password_verify()				Methode um das Passwort wieder zu entschlüsseln, Werte: eingegebenes Passwort und erzeugter Hash, Boolean-Variable und kann mit json_encode() auf true od false des Wertes abgefragt werden

filter_var()	Email-Überprüfung, Wert: String, Filterbefehl nach was gefiltert werden soll

file_get_contents()	Daten aus JSON-File abfragen, Wert: Relativer Pfad

json_encode()	Codiert einen String in einen JSON-String

json_decode()	Entcodet einen JSON-String in ein PHP-Objekt, Werte: Variable in der der JSON-Code liegt, alternativ zweiter Wert um ein Array zu erhalten: true

$_FILES	Array mit übergebenen Files

basename()			gibt den Dateinamen mit Endung zurück

move_uploaded_file()		Ladet ein File hoch und gibt einen Booleanwert zurück

strpos()			gibt die Position eines definierten Zeichens in einem String zurück, Werte: Variable, Zeichen nachdem gesucht werden soll

strrpos()		 	gibt die letzte Position eines definierten Zeichens in einem String zurück, Werte: Variable, Zeichen nachdem gesucht werden soll

substr()			gibt den Teil eines Strings zurück, Werte: Variable, Position ab welcher der String zurückgeben werden soll

strval()				validiert den String auf etwaige Fehler

file_put_contents()	Daten in JSON-File speichern, Wert: relativer Pfad, Variable die gespeichert werden soll


mkdir()			neuen Folder in PHP kreieren, Wert: Dateipfad inkl. Ordnername und / am Ende des Strings

file_exists()		Abfrage ob ein Ordner existiert

rmdir()			löscht den letzten Folder im relativen Pfad, Wert: relativer Pfad

scandir()		gibt die Dateien welche im relativen Pfad liegen zurück, Wert: relativer Pfad

unlink()		löscht eine Datei, Wert: relativer Pad

public				öffentliche Klasse, überall zugreifbar

privat				private Klasse, nur innerhalb der Klasse zugreifbar

protected            vererbte Klassen können diese Methoden/Eigenschaften aufrufen und verändern
class Klassenname{}		Definition einer Klasse

class newClass extends parentClass{}	Definiert eine Unterklasse für Elternklasse

parent:: Funktion()				übernimmt eine Funktion der Elternklasse, Werte: werden an die Elternfunktion übergeben

interface interfaceName{}			erstellt ein Interface 

class className implements Interface{}	Klasse mit implementiertem Interface, hier muss sich genau an die Struktur des implementierten Interfaces gehalten werden

new PDO()		erstellt ein neues PDO Objekt für Datenbanken, Werte: welche Datenbank, wo sie liegt und wie sie heisst 

define()	definiert eine Konstante, Werte: Name der Konstante und Wert den sie enthält

var_dump()	gibt alle Variablen aus wie print_r

query()	Methode um ein SQL Statement an den Server zu schicken

while()	Schleife die solange läuft wie es Objekte in der Variable gibt

fetch()	Methode um aus einem Objekt einen Datensatz zu ziehen

fetchAll()	Methode um aus einem Objekt alle Datensätze zu zieht

fetch(PDO::FETCH_OBJ)	Methode einen Datensatz als Objekt heraus

prepare()	Methode um SQL Code vorzubereiten

execute()	Array welches die zu ersetzende Variable definiert

rowCount()	zählt die abgefragten Datensätze

intval()							Integer Value definieren()

strpos()	sucht in einem String nach dem Vorkommen eines Suchstrings, Wert: 	String in dem gesucht wird, Suchstring

strip_tags	entfernt HTML- und PHP-Tags aus einem String, (z.B. Userinput kann keine ungewünschten Elemente erzeugen oder anderen Schaden 
	anrichten)


class Klassenname(Parentklasse):		definiert eine Klasse und ihre Parentklasse

def __init__(self):			 	Konstruktor Methode einer Klasse 

*args						Stern für Argumentübergabe unbegrenzt (Tuple)

**kwargs		zwei Sterne für Argumentübergabe unbegrenzt mit Schlüsselwörtern

super().__init__(args)	Übergabe der Argumente an die Parentklasse

__dict__	gibt den Inhalt eines Objekts wieder und ist ein Diktionarytyp 




