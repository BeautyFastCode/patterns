# Patterns

| Lp. | Pattern | Category | PHP |
| --- | ------- | -------- | --- |
| 1. | Strategy | Behavioral | 3x |

---

# Tools for PHP

The `PHP Unit` tests
```
$ vendor/bin/phpunit
```

The `PHP Coding Standard Fixer` a tool to automatically fix PHP coding standards issues
```
$ vendor/bin/php-cs-fixer fix --verbose 
```

`PHP_CodeSniffer` tokenizes PHP, JavaScript and CSS files
and detects violations of a defined set of coding standards.
``` 
$ vendor/bin/phpcs -h       # detect violations
$ vendor/bin/phpcbf -h      # automatically correct coding standard violations

$ vendor/bin/phpcs --standard=PSR2 Behavioral
$ vendor/bin/phpcbf --standard=PSR2 Behavioral
```

Printing multiple reports to files.
[Reporting](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Reporting)

- summary
- full
- source
- information
- code
- checkstyle
- csv
- gitblame
- json
- xml

```
$ vendor/bin/phpcs --standard=PSR2 \
    --report-summary=log/phpcs/summary.txt \
    --report-full=log/phpcs/full.txt \
    --report-source=log/phpcs/source.txt \
    --report-info=log/phpcs/info.txt \
    --report-code=log/phpcs/code.txt \
    --report-checkstyle=log/phpcs/checkstyle.xml \
    --report-csv=log/phpcs/csv.csv \
    --report-gitblame=log/phpcs/gitblame.txt \
    --report-json=log/phpcs/json.json \
    --report-xml=log/phpcs/xml.xml \
    Behavioral

```

PHP `Copy/Paste Detector` (PHPCPD)

```
$ vendor/bin/phpcpd ./ --exclude vendor --exclude log --log-pmd=log/copy-paste.xml 
```

---

PHP `Mess Detector`
```
$ vendor/bin/phpmd Behavioral html codesize --reportfile log/mess.html

$ vendor/bin/phpmd Behavioral html \
    cleancode,codesize,controversial,design,naming,unusedcode --reportfile log/mess.html 
```

The `PHP_Depend` shows you the quality of your design in the terms of extensibility,
reusability and maintainability. 

```
$ vendor/bin/pdepend --summary-xml=log/depend/summary.xml \ 
                     --jdepend-chart=log/depend/jdepend.svg \
                     --overview-pyramid=log/depend/pyramid.svg \
                     Behavioral
```

- [Abstraction Instability Chart](https://pdepend.org/documentation/handbook/reports/abstraction-instability-chart.html)
- [Overview Pyramid](https://pdepend.org/documentation/handbook/reports/overview-pyramid.html)

---
