# php-composer-studies

01. docker pull composer
02. docker run --rm --interactive --tty --volume $PWD:/app composer init
03. https://packagist.org/
04. docker run --rm --interactive --tty --volume $PWD:/app composer require guzzlehttp/guzzle
05. docker run --rm --interactive --tty --volume $PWD:/app composer require symfony/dom-crawler
06. docker run --rm --interactive --tty --volume $PWD:/app composer require symfony/css-selector
07. docker run --rm --interactive --tty --volume $PWD:/var/www/html --workdir=/var/www/html/ php php init.php
08. docker run --rm --interactive --tty --volume $PWD:/app composer dump-autoload
09. docker run --rm --interactive --tty --volume $PWD:/app composer require --dev phpunit/phpunit
10. docker run --rm --interactive --tty --volume $PWD:/var/www/html --workdir=/var/www/html/ php php vendor/bin/phpunit src/TrackerTest.php
11. composer install --no-dev -> não instalar itens marcados como --dev (apenas para desenvolvimento)
12. https://github.com/squizlabs/PHP_CodeSniffer
13. docker run --rm --interactive --tty --volume $PWD:/app composer require --dev squizlabs/php_codesniffer
14. docker run --rm --interactive --tty --volume $PWD:/var/www/html --workdir=/var/www/html/ php php vendor/bin/phpcs --help
15. docker run --rm --interactive --tty --volume $PWD:/var/www/html --workdir=/var/www/html/ php php vendor/bin/phpcs --standard=PSR12 src
16. https://github.com/phan/phan
17. docker run --rm --interactive --tty --volume $PWD:/app composer require --dev phan/phan
18. docker run --rm --interactive --tty --volume $PWD:/var/www/html --workdir=/var/www/html/ php php vendor/bin/phan --help
19. docker run --rm --interactive --tty --volume $PWD:/var/www/html --workdir=/var/www/html/ php php vendor/bin/phan --allow-polyfill-parser src/Tracker.php
20. Após a criação do arquivo .phan/config.php: docker run --rm --interactive --tty --volume $PWD:/var/www/html --workdir=/var/www/html/ php php vendor/bin/phan --allow-polyfill-parser
21. https://getcomposer.org/doc/articles/scripts.md
22. git tag -a v1.0.0 -> git push origin v.1.0.0 