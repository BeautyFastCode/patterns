# Strategy - Strategia

---

> Wzorzec Strategia definiuje rodzinę algorytmów, pakuje je jako osobne klasy i powoduje, że są one w pełni wymienne.
Zastosowanie tego wzorca pozwala na to, aby zmiany w implementacji algorytmów przetwarzania były całkowicie niezależne od strony klienta, który z nich korzysta.


**Przykład:**
Obiekt `Unit` zamiast wykorzystywać metody opisujące `fly` i `walk` zdefiniowane w klasie lub super-klasie (bądź w klasach podrzędnych), będzie `delegować` te zachowania do innych obiektów.

Relacja `MA` jest bardzo ciekawa:

- Każda `unit` ma `interfejs` do którego deleguje zachowania `fly` i `walk`
- Kiedy w ten sposób łączysz dwie klasy, używasz `kompozycji`, zamiast `dziedziczyć zachowania`.

---

linki:
- http://designpatternsphp.readthedocs.io/pl/latest/Behavioral/Strategy/README.html


---
