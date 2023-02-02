git add –all				es wird alles geaddet in die Staging-Instanz

git commit -am	um die Staging-Instanz zu überspringen und gleich zu commiten (oder: git commit -a -m)

git remote add 	um eine repository in Github mit Projekt zu verbinden, Wert: Name (konventionell: origin) und Link

git remote -v				die Verbindung überprüfen

git push Projektname branch	(main)	um Projekt auf Github hinzuzufügen

git remote update			Änderungen überprüfen und aus Git herunterziehen (mit Git Status Änderungen anzeigen)

git diff origin/main			Änderungen überprüfen und anzeigen als zweite Variante

git pull Projektname branch(main)	um Änderungen aus dem Projekt herunterzuziehen

dir	directory, zeigt die Dateien in dem Verzeichnis an in dem wir uns befinden

cd					change directory, wechselt das Verzeichnis

cd ..					wechsel eine Ebene nach oben

ls	zeigt alle  Dateien in dem Verzeichnis (ähnlich wie dir, unterscheidet nur farblich anhand der Dateien)

clear						console löschen

Strg+ Pfeiltaste oben oder unten	durch letzte Befehle blättern

mkdir						make directory, erstellt ein neues Verzeichnis

>						in eine Datei einfügen (ersetzt vorhandene Daten)

>>						zu einer Datei hinzufügen (ersetzt vorhandene Daten nicht sondern hängt diese an)

mv						move, Datei oder Verzeichnis verschieben

rm	remove, löscht eine Datei (um Directory zu löschen muss die Anweisung den Befehl rekursiv „-r“ bekommen) – über die console gelöschte Dateien werden endgültig gelöscht und wandern nicht in den Papierkorb

code	öffnet mit Visual Studio Code

git config –global user.name	Username ändern

git config –global user.email	Mailadresse ändern

git config --global core.autocrlf true	Zeilenumbrüche durch Git in verschiedenen Betriebssystemen automatisch korrigieren

git init	initialisiert dieses Projekt mit Git

git status	Status von git anzeigen, bei Status clean läuft alles einwandfrei

git status -s	zeigt kurz Version an

git add	Dateien zu git hinzufügen, alle Dateien mit: *.*, nur Javascript Dateien: *.js (in Folder muss einzeln hineinnavigiert werden)

git commit -m	um eine Commit Message zu intialisieren

git commit	öffnet einen Editordatei im Visual Studio Code der erlaubt eine längere commit message zu schreiben (erst kurze Nachricht, dann lange Nachtricht) 

git config –global core.editor "code --wait"	um Visual Studio Code als Standard Programm fürs öffnen mit dem Befehl code

git log	zeigt an wer was commitet hat

git shortog	zeigt eine Übersicht über alle commits (für den aktuellsten commit zuerst: git shortlog –reverse)

git restore –staged	löscht File aus der staging Umgebung

git restore – source=HEAD~	setzt eine Datei auf einen früheren Status zurück, (einzufügen ist wieviele Staten zurückzugehen ist)

git config – global -e	zeigt das Configfeil

