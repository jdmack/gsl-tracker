PAGEDIR=/var/www/html/gsl-tracker

all: ${PAGEDIR}/index.html \
	${PAGEDIR}/gsl-service.php \
	${PAGEDIR}/gsl-bl.php \
	${PAGEDIR}/gsl-dal.php \
	${PAGEDIR}/gsl-tracker.js\
	${PAGEDIR}/gsl-variable.js \
	${PAGEDIR}/main.css \
	${PAGEDIR}/images/gsl.ico

${PAGEDIR}/index.html: index.html
	cp index.html ${PAGEDIR}/index.html

${PAGEDIR}/gsl-service.php: gsl-service.php
	cp gsl-service.php ${PAGEDIR}/gsl-service.php

${PAGEDIR}/gsl-bl.php: gsl-bl.php
	cp gsl-bl.php ${PAGEDIR}/gsl-bl.php

${PAGEDIR}/gsl-dal.php: gsl-dal.php
	cp gsl-dal.php ${PAGEDIR}/gsl-dal.php

${PAGEDIR}/gsl-tracker.js: gsl-tracker.js
	cp gsl-tracker.js ${PAGEDIR}/gsl-tracker.js

${PAGEDIR}/gsl-variable.js: gsl-variable.js
	cp gsl-variable.js ${PAGEDIR}/gsl-variable.js

${PAGEDIR}/main.css: main.css
	cp main.css ${PAGEDIR}/main.css

${PAGEDIR}/images/gsl.ico: images/gsl.ico
	cp images/gsl.ico ${PAGEDIR}/images/gsl.ico

