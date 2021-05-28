config.cgi: config.o parsing.o
	gcc config.o parsing.o -o config.cgi -lm
	chmod ugo+x *.sh
	chmod ugo+x *.cgi


parsing.o: parsing.c
	gcc -c parsing.c

config.o: config.c
	gcc -c config.c

clean:
	-rm *.o
	-rm
