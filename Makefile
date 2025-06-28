all: psr2 server

server:
	php -S 127.0.0.1:7692 -t public/

psr2:
	 @for file in `find ./ -name \*.php`; do php-cs-fixer fix $$file --fixers=psr2; done

