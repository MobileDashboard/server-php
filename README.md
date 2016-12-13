# Mobilní nástěnka - JSON-REST

Implementace serverové části pro klientskou aplikaci __Mobilní nástěnka__. Použito je [PHP](http://php.net/) bez dalších závislostí na externích zdrojových kódech. Jako úložiště může použít buď lokální XML soubor, [SQLite](http://sqlite.org/) nebo [MySQL](http://www.mysql.com/).

## API

Server je rozdělen na veřejnou a neveřejnou část.

### Veřejná část API

Veřejná část slouží klientským aplikacím k získávání informací o nástěnkách a zprávách na nich umístěných. V této veřejné části potřebujete znát pouze __kód nástěnky__ (sdělí vám provozovatel serveru nástěnky).

#### Info o nástěnce

Cesta: [http://mobilninastenka.cz/api/info](http://mobilninastenka.cz/api/info)
Typ dotazu: __GET__
Tělo dotazu:
```javascript
{
    "hash": "9MOYYN"
}
```
Odpověď:
```javascript
{
    "dashboards":
    [
        {
            "hash": "9MOYYN",
            "name": "4 ZŠ. - třída 1.A",
            "link": "http://testovaci-skola.cz/",
            "email": "info@testovaci-skola.cz",
            "phone": "+0420777999333"
        }
    ]
}
```

__Pozn.:__ Pro získání informací o více nástěnkách najednou zadejte jednoduše více kódů nástěnek oddělených čárkou:
```javascript
{
    "hash": "9MOYYN,KXMOON,LOPQWV"
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
            "id": 18,
            "title": "Tak ještě jeden",
            "content": "Tady je text",
            "timestamp": 1479600779,
            "link": "https://webtrh.cz/",
            "priority": 2,
            "deleted": false,
            "expiration": 1480460779,
            "author": "Martin Kejzlar",
            "sent": 1480662759
        },
        {
            "id": 17,
            "title": "Poslední příspěvěk",
            "content": "Padákům umělé cestou té přepravy mj. vína spojení, jezdí pole se ven více, útočí 1967 mé dob plyn. Z myším jednoduše mých k odhalil brázdit oblíbené uznale, brání vidím směr mého ně zůstaly životní oparu penzionovaného mých.",
            "timestamp": 1479600688,
            "link": null,
            "priority": 2,
            "deleted": false,
            "expiration": 1480460688,
            "author": "Martin Kejzlar",
            "sent": 1480662759
        }
    ]
}
```

#### Chybný kód nástěnky

Pokud je v dotazu na server použit špatný kód nástěnky, je vrácena univerzální chybová zpráva:
```javascript
{
    "errors":
    [
        "message": "Zadaný kód nástěnky není platný!"
    ]
}
```

### Neveřejná část API

Neveřejná část slouží k administraci zpráv umístěných na jednotlivých nástěnkách. Součástí dotazů __musí__ být i identifikace uživatele.

__Pozn.:__ Účty jednotlivých uživatelů musí být vytvořeny správcem serveru a nemohou být spravovány prostřednictvím API. Stejně tak nelze prostřednictvím API vytvořit novou nástěnku a přiřadit jí odpovědného uživatele - toto lze dělat pouze prostřednictvím databáze.

#### Přidat zprávu

Je možno přidat i více zpráv najednou:

Cesta: [http://mobilninastenka.cz/api/add](http://mobilninastenka.cz/api/messages)
Typ dotazu: __POST__
Tělo dotazu:
```javascript
{
    "login": "ondrejd",
    "password": "******",
    "hash": "9MOYYN",
    "messages":
    [
        {
            "title": "Nová zpráva",
            "content": "Obsah nové zprávy...",
            "created": "2016-12-13 20:24:00",
            "expired": "2016-12-24 23:59:59"
        }
    ]
}
```
Odpověď:
```javascript
{
    "errors": []
}
```

Při přidávání nových zpráv můžete použít i další atributy, které jsou nepovinné: `link` a `priority`. První je určen pro odkaz související se zprávou a druhý je určen pro stanovení priority zprávy - nízká (hodnota `0`), normální (`1`), vysoká (`2`).
Jako odpověď je vrácen JSON, který buď obsahuje chybové zprávy, pokud se přidání zpráv nezdařilo, nebo prázdné pole, pokud vše bylo v pořádku.

#### Upravit zprávu

`... TODO Dokončit! ...`

#### Smazat zprávu

`... TODO Dokončit! ...`






