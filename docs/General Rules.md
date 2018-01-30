# General Rules in OOP - Zasady ogólne

Zasady projektowania oprogramowania zorientowanego obiektowo.

- **Zmiany** jedyny pewny element w procesie tworzenia oprogramowania

Podstawy programowania obiektowego
- `abstrakcyjność`
- `hermetyzacja`
- `polimorfizm`
- `dziedziczenie`
- `interfejsy`

---

## Reguły projektowania

- Poddawaj `hermetyzacji` to, co się zmienia
- Przekładaj `kompozycję` nad `dziedziczenie`
- Skoncentruj się na tworzeniu `interfejsów`, a nie `implementacji`
- Siła `luźnych` zależności
- `Otwarty` na zmiany, `zamknięty` na modyfikację
- Reguła `odwracania` zależności
- Rozmawiaj tylko z `najbliższymi` przyjaciółmi - demeter
- Reguła `Hollywood`
- Klasa powinna mieć tylko `jeden powód` do zmian

---

## Szersze opisy

---

Zidentyfikuj fragmenty aplikacji, które się `zmieniają` i oddziel je od tych, które pozostają `stałe`

- weź elementy, które się zmieniają i dokonaj ich `hermetyzacji`,
- tak aby ich modyfikacja i aktualizacja w przyszłości nie pociągała za sobą konieczności dokonywania jakichkolwiek zmian w elementach stałych.

---

Przekładaj kompozycję nad dziedziczenie

- relacja `MA` może być lepsza niż `JEST`

---

Skoncentruj się na tworzeniu `interfejsów`, a nie `implementacji`.

- oznacza skoncentruj się na tworzeniu `supertypów`,
- odpowiednio wykorzystać `polimorfizm` i tworzyć odpowiednie supertypy
- tak żeby zachowanie poszczególnych obiektów nie było ściśle związane z ich własnym kodem.

---

Staraj się tworzyć projekty, w których obiekty są ze sobą `luźno powiązane`

- o ile to możliwe, nie oddziałują na siebie wzajemnie
- kiedy dwa obiekty są ze sobą luźno powiązane,
    - mogą ze sobą współpracować,
    - ale z drugiej strony wzajemnie nie wiedzą o sobie zbyt wiele
- pozwala to na tworzenie bardziej elastycznych systemów, w łatwy sposób adaptujących się do wprowadzanych zmian

---

Klasy powinny być `otwarte` na rozbudowę, ale `zamknięte` na modyfikacje

- celem jest umożliwienie `łatwej rozbudowy` poszczególnych klas poprzez dodawanie im nowych zachowań,
- ale bez konieczności `modyfikacji istniejącego kodu`
    - ponieważ modyfikacje wprowadzają nowe błędy
- powinieneś zachować umiar i zdrowy rozsądek

---

`Odwracaj zależności`

- Uzależniaj kod od `abstrakcji`, a nie od klas `rzeczywistych`

---

Reguła `ograniczania interakcji` - rozmawiaj tylko z najbliższymi przyjaciółmi

- podczas tworzenia projektu danego systemu powinieneś zwracać baczną uwagę
    - na `ilość klas`, z którymi współpracuje każdy obiekt
- kiedy tworzysz `wiele zależności` pomiędzy klasami, system staje się bardzo wrażliwy na modyfikacje, kosztowny w utrzymaniu i serwisowaniu, jak również trudny do analizy dla innych.

`Reguły interakcji`:
    - dla dowolnego obiektu powinniśmy wywoływać tylko te metody które:
        - należą do samego obiektu
        - obiektów przekazywanych jako argumenty metody
        - dowolnego obiektu, który tworzy dane metoda
        - dowolnego składnika danego obiektu

---

`Reguła Hollywood` - Nie dzwoń do nas, My zadzwonimy do Ciebie

- pozwala uniknąć zjawiska nazwanego `butwieniem drzewa zależności`

---

`Wysoka Kohezja`, każdy zakres odpowiedzialności klasy to obszar potencjalnych zmian.

- Większy zakres odpowiedzialności poszerza pole zmian.
- Każda klasa powinna mieć jeden obszar odpowiedzialności

---

---
