all:
	make release

build:
	git log -n15 --pretty='format:<li>%h (%s, %ad)</li>' > gitlog.html
	jekyll b --incremental

clean:
	rm -rf _site/*
	rm -f gitlog.html

freshrelease:
	make clean
	make release

freshrun:
	make clean
	make run

release:
	make build
	find ./_site -name "*.html" -exec minify --html-keep-document-tags --html-keep-end-tags  -o {} {} \;
	find ./_site -name "*.css" -exec minify --css-precision 0  -o {} {} \;
	find ./_site -name "*.xml" -exec minify -o {} {} \;
	make sync

releaseraw:
	make clean
	make build
	make sync

run:
	jekyll s --incremental --drafts

runclean:
	make clean
	jekyll s --incremental --drafts

sync:
	rsync -avr --delete --delete-excluded --exclude=_site/build.log --exclude=_site/Makefile ./_site/ xw3.org:/var/www/xw3.org/www/_site/
	scp -r .well-known xw3.org:/var/www/xw3.org/www/_site/

syncdev:
	rsync -avr --delete --delete-excluded ./ xw3.org:/var/www/xw3.org/www/

