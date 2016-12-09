# Mobilní nástěnka - JSON-REST

Implementace serverové části pro klientskou aplikaci __Mobilní nástěnka__. Použito je [PHP](http://php.net/) bez dalších závislostí na externích zdrojových kódech. Jako úložiště může použít buď lokální XML soubor, [SQLite](http://sqlite.org/) nebo [MySQL](http://www.mysql.com/).

## API

Server je rozdělen na veřejnou a neveřejnou část.

### Veřejná část API

Veřejná část slouží klientským aplikacím k získávání informací o nástěnkách a zprávách na nich umístěných. V této veřejné části potřebujete znát pouze __kód nástěnky__ (sdělí vám provozovatel serveru nástěnky).

#### Info o nástěnce

Cesta: [http://mobilninastenka.cz/api/info](http://mobilninastenka.cz/api/info)
Typ dotazu: __POST__
Tělo dotazu:
```javascript
{
    "hash": "9MOYYN"
}
```
Odpověď:
```javascript
{
    "name": "4 ZŠ. - třída 1.A",
    "link": "http://testovaci-skola.cz/",
    "email": "info@testovaci-skola.cz",
    "phone": "+0420777999333"
}
```

#### Získání zpráv z nástěnky

Cesta: [http://mobilninastenka.cz/api/messages](http://mobilninastenka.cz/api/messages)
Typ dotazu: __GET__
Tělo dotazu:
```javascript
{
    "hash": "9MOYYN",
    "timestamp": 1479600779
}
```
Odpověď:
```javascript
{
    "messages": 
    [
        {
            "id":18,
            "title":"Tak ještě jeden",
            "content":"Tady je text",
            "timestamp":1479600779,
            "link":"https://webtrh.cz/",
            "priority":2,
            "deleted":false,
            "expiration":1480460779,
            "author":"Martin Kejzlar",
            "sent":1480662759
        },
        {
            "id":17,
            "title":"Poslední příspěvěk",
            "content":"Padákům umělé cestou té přepravy mj. vína spojení, jezdí pole se ven více, útočí 1967 mé dob plyn. Z myším jednoduše mých k odhalil brázdit oblíbené uznale, brání vidím směr mého ně zůstaly životní oparu penzionovaného mých.",
            "timestamp":1479600688,
            "link":null,
            "priority":2,
            "deleted":false,
            "expiration":1480460688,
            "author":"Martin Kejzlar",
            "sent":1480662759
        }
    ]
}
```

#### Chybný kód nástěnky

Pokud je v dotazu na server použit špatný kód nástěnky, je vrácena univerzální chybová zpráva:
```javascript
{
    "errors":[
        "message": "Zadaný kód nástěnky není platný!"
    ]
}
```

### Neveřejná část API

Neveřejná část slouží k administraci nástěnek i zpráv na nich umístěných. Součástí dotazů __musí__ být i identifikace uživatele.

`... TODO Dokončit! ...`

