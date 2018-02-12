# Patterns

| Lp. | Pattern | Category | PHP |
| --- | ------- | -------- | --- |
| 1. | Strategy | Behavioral | 3x |

---

# Tools for PHP

The PHP Unit tests
```
$ vendor/bin/phpunit
```

A tool to automatically fix PHP coding standards issues
```
$ vendor/bin/php-cs-fixer fix --verbose 
```

PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files
and detects violations of a defined set of coding standards.
``` 
$ vendor/bin/phpcs -h       # detect violations
$ vendor/bin/phpcbf -h      # automatically correct coding standard violations

$ vendor/bin/phpcs --standard=PSR2 Behavioral
$ vendor/bin/phpcbf --standard=PSR2 Behavioral
```
---
