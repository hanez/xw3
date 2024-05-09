all:
	make release

build:
	git log -n24 --date='format:%F %H:%M' --pretty='format:<li>%ad - <a href="https://git.xw3.org/xw3/xw3.org/commit/%H">%s</a></li>' > gitlog.html
	cd cgi && git log -n24 --date='format:%F %H:%M' --pretty='format:<li>%ad - <a href="https://git.xw3.org/xw3/cgi/commit/%H">%s</a></li>' > ../gitlog_cgi.html && cd ..
	cd lib && git log -n24 --date='format:%F %H:%M' --pretty='format:<li>%ad - <a href="https://git.xw3.org/xw3/lib/commit/%H">%s</a></li>' > ../gitlog_lib.html && cd ..
	bundle exec jekyll b --incremental

clean:
	rm -rf _site/*
	rm -f gitlog.html

freshrelease:
	make clean
	make build
	make minify
	make sync

freshreleaseraw:
	make clean
	make build
	make sync

freshrun:
	make clean
	make build
	make minify
	make run

local:
	make clean
	make build
	make minify
	mkdir -p ./_site/.well-known/

localraw:
	make clean
	make build
	mkdir -p ./_site/.well-known/

localrelease:
	make local
	make minify

minify:
	find ./_site -name "*.html" -exec minify --html-keep-document-tags --html-keep-end-tags -o {} {} \;
	find ./_site -name "*.css" -exec minify --css-precision 0 -o {} {} \;
	find ./_site -name "*.xml" -exec minify -o {} {} \;

release:
	make build
	make minify
	make sync

releaseraw:
	make build
	make sync

run:
	bundle exec jekyll s --incremental --drafts

runclean:
	make clean
	bundle exec jekyll s --incremental --drafts

runcleanreload:
	make clean
	bundle exec jekyll s --incremental --drafts --livereload

runreload:
	bundle exec jekyll s --incremental --drafts --livereload

sync:
	rsync -avr --delete --delete-excluded ./_site/ xw3.org:/var/www/xw3.org/www/_site/
	ssh a.xw3.org 'cd /var/www/xw3.org/www/_site/cgi/bin/ && gcc index.c -o index'

