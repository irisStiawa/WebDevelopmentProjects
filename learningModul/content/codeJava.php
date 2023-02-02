println		Gibt eine Zeile mit Zeilenumbruch aus, erwartet keinen bestimmten Datentyp, Rechenoperationen werden ausgeführt bei selben Datentyp

print				gibt Code aus ohne Zeilenumbruch

System.out			Methode generiert Output

System.in			Methode generiert Input

int 				Integer, ganze Zahlen

float		Gleitkommazahl mit F am Schluss, 7 Nachkommastellen (kaufmännisches Runden)

double 			Gleitkommazahl, 16 Nachkommastellen

input Objekt.nextLine()	generiert einen Programmstop und wartet auf einen String input

new Scanner			erstellt ein Scannerobjekt

for(){}				for-Schleife

while(){}			while-Schleife

type[] Variablenname = {};			definiert ein Array eines bestimmten Typs

class Variablenname = new class		erstellt ein Objekt einer Klasse

import javax.swing.*		Java Bibliothek für Klassenelemente (Frames, Panels, Buttons)

import java.awt.*				Java Bibliothek für Farben

Variable.setSize(height, width)		definiert die Größe eines Objektes

Variable.setVisible(true);			Objekt wird sichtbar

Variable.getContentPane()			um das Panel des Frames zu generieren

Variable.setTitle				setzt den Programmtitel

Variable.setResizable(false)			lässt eine Größenänderung eines Objektes/Frames nicht zu

ImageIcon image = new ImageIcon()	erstellen eines neuen Icons für den Programmkopf

Var.setIconImage(image.getImage())	Bild für Programmkopf generieren

Var.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); 	mit dieser Anweisung wird das Programm auch im Hintergrund bei Close geschlissen

Var.setBounds();		Eigenschaften eines Elements definieren, Werte: x, y, Breite, Höhe

Var.setBackground(new Color());		setzt die Hintergrundfarbe eines Elements, Werte: RGB, 0xHexacode

Parentelem.add(Childelement);		fügt ein Kindelement zum Elternelement hinzu


Variable.setPreferredSize(new Dimension())	definiert die Größe durch ein Dimensionsobjekt, Werte: Breite, Höhe

frame.pack();	kompiliert die Größe des Objekts auf seinen tatsächlichen Inhalt (sinnvoll am Ende der Strukturaufstellung)

final	setzt eine Konstante

Variable.setUndecorated(true);	entfernt die Standardkopfzeile 

Variable.addActionListener(e ->      );	Eventlistener mit Eventübergabe an Funktion

System.exit(0)	Methode um ein Programm zu beenden, Wert: Status beim beenden, Standard: 0

Variable.setForeground(new Color());	Schriftfarbe eines Objekts

Map<Schlüsseltyp, Valuetype> VarName = new HashMap<>();	erstellt ein assoziatives Array

VarName.put()	fügt Werte dem assoziativen Array hinzu, Werte: Schlüssel, Value

VarName.get()	liest Value aus dem assoziativen Array aus, Wert: Schlüssel

VarName.remove()	entfernt ein Schlüssel, Value Paar aus dem assoziativen Array, Wert: Schlüssel

VarName.clear()	entfernt alle Elemente aus einem assoziativen Array

VarName.size()	gibt die Anzahl der Paare in einem assoziativen Array zurück

VarName.keySet()	läuft bei einer Schleife durch die Schlüssel des assoz. Arrays

VarName.values()	läuft bei einer Schleife durch die Values des assoz. Arrays

VarName.containsKey()	suche nach Schlüsselwerten im assoz. Array, Rückgabe: boolean

VarName.containsValue()	suche nach Values im assoz. Array, Rückgabe: boolean

Klasse ResultSet	Set an Informationen das aus einer Datenbank in tabellarischer Form zurückkommt

ResultSet.next()	liest die nächste Zeile eines ResultSets aus und gibt einen boolean Wert zurück (while-Schleife für Durchlauf) – <span class="strong">MUSS IN EINEM TRY – CATCH Block stehen</span>

connection.createStatement()	erstellt ein Statementobjekt für eine Datenbankabfrage(Statementklasse)

String.format()			speichert einen formatierten String	

rs.wasNull()			Abfrage ob Ergebnis Null ist

stmt.executeQuery(Abfrage)		führt eine Datenbankabfrage aus


