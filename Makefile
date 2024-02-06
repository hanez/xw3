run:
	jekyll s --incremental --drafts

runclean:
	rm -rf ./_site/*
	jekyll s --incremental --drafts

build:
	jekyll b --incremental

release:
	jekyll b --incremental
	find ./_site -name "*.html" -exec minify --html-keep-document-tags --html-keep-end-tags  -o {} {} \;
	find ./_site -name "*.css" -exec minify --css-precision 0  -o {} {} \;
	find ./_site -name "*.xml" -exec minify -o {} {} \;
	make sync

releaseraw:
	make clean
	jekyll b --incremental
	make sync

releaseclean:
	jekyll b --incremental
	make syncclean

sync:
	rsync -avr --delete --delete-excluded --exclude=build.log --exclude=Makefile ./_site/ xw3.org:/var/www/xw3.org/www/htdocs/
	scp -r .well-known xw3.org:/var/www/xw3.org/www/htdocs/

syncclean:
	rsync -avr --delete --delete-excluded --exclude=Makefile ./_site/ xw3.org:/var/www/xw3.org/www/htdocs/
	scp -r .well-known xw3.org:/var/www/xw3.org/www/htdocs/

all:
	make release

freshrelease:
	rm -rf _site/*
	make release

freshrun:
	rm -rf _site/*
	make run

clean:
	rm -rf _site/*

