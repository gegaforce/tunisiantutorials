SELECT nom, possesseur, console, prix FROM jeux_video WHERE
console='Xbox' OR console='PS2' ORDER BY prix DESC LIMIT 0,10
