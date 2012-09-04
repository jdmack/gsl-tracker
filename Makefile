PAGEDIR=/var/www/html/gsl-tracker

all: ${PAGEDIR}/index.html \
	${PAGEDIR}/gsl-service.php

${PAGEDIR}/index.html: index.html
	cp index.html ${PAGEDIR}/index.html

${PAGEDIR}/gsl-service.php: gsl-service.php
	cp gsl-service.php ${PAGEDIR}/gsl-service.php

