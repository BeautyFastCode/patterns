# Design Patterns in PHP7

| Lp. | Pattern | Category | PHP |
| --- | ------- | -------- | --- |
| 1. | Strategy | Behavioral | 3x |
| 2. | Observer or Publish/Subscribe | Behavioral | 2x |
| 3. | Decorator | Structural | x |
| 4. | Factory method | Creation | x |
| 5. | Static Factory | Creation | x |
| 6. | Simple Factory | Creation | x |
| 7. | Abstract Factory | Creation | x |
| 8. | Singleton | Creation | x |
| 9. | Command | Behavioral | x |
| 10. | Adapter, Wrapper, Translator | Structural | x |
| 11. | Facade | Structural | x |
| 12. | Template method | Behavioral | x |
| 13. | Iterator | Behavioral | 2x |
| 14. | Composite | Structural | x |
| 15. | State | Behavioral | x |
| 16. | Proxy | Structural | x |
| 17. | MVC (inside: Repository) | Compound | x |
| 18. | Dependency Injection | Structural | x |
| 19. | Mediator | Behavioral | x |
| 20. | Builder | Creation | x |
| 21. | Flyweight | Structural | x |

---

# Tools for PHP

#### 1. The `PHP Unit` tests

```
$ vendor/bin/phpunit
$ PHP/vendor/bin/phpunit -c PHP/phpunit.xml.dist 
```

#### 2. The `PHP Coding Standard Fixer` 

a tool to automatically fix PHP coding standards issues

```
$ vendor/bin/php-cs-fixer fix --verbose 
```

#### 3. `PHP_CodeSniffer`

tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.
 
``` 
$ vendor/bin/phpcs -h       # detect violations
$ vendor/bin/phpcbf -h      # automatically correct coding standard violations

$ vendor/bin/phpcs --standard=PSR2 Behavioral Creation Structural
$ vendor/bin/phpcbf --standard=PSR2 Behavioral Creation Structural
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

#### 4. PHP `Copy/Paste Detector` (PHPCPD)

```
$ vendor/bin/phpcpd ./ --exclude vendor --exclude log --log-pmd=log/copy-paste.xml 
```

#### 5. PHP `Mess Detector`

```
$ vendor/bin/phpmd Behavioral html codesize --reportfile log/mess.html

$ vendor/bin/phpmd Behavioral html \
    cleancode,codesize,controversial,design,naming,unusedcode --reportfile log/mess.html 
```

#### 6. The `PHP_Depend`
 
shows you the quality of your design in the terms of extensibility, reusability and maintainability.
 
 - [Abstraction Instability Chart](https://pdepend.org/documentation/handbook/reports/abstraction-instability-chart.html)
 - [Overview Pyramid](https://pdepend.org/documentation/handbook/reports/overview-pyramid.html)

```
$ vendor/bin/pdepend --summary-xml=log/depend/summary.xml \ 
                     --jdepend-chart=log/depend/jdepend.svg \
                     --overview-pyramid=log/depend/pyramid.svg \
                     Behavioral
```

#### 7. `PHPLOC`

A tool for quickly measuring the size of a PHP project. 

```
$ vendor/bin/phploc Behavioral
```

#### 8. `phpDocumentor`

phpDocumentor is an application that is capable of analyzing your PHP source code and DocBlock comments
 to generate a complete set of API Documentation.

```
$ ./phpDocumentor.phar run -d Behavioral -t docs
$ ./phpDocumentor.phar run -d Behavioral -t docs --template="checkstyle" 
$ ./phpDocumentor.phar run -d Behavioral -t docs --template=responsive
```

Via docker

```
$ docker pull phpdoc/phpdoc:develop
$ docker run --rm -v $(pwd):/data phpdoc/phpdoc:develop
$ docker run --rm -v $(pwd):/data phpdoc/phpdoc run -d Behavioral -t docs
```

---
