CC=g++
CFLAGS=-c -std=c++11 -pthread
LDFLAGS=-std=c++11 -pthread
SOURCES=$(wildcard *.cpp)
OBJECTS=$(SOURCES:.cpp=.o)
EXECUTABLE=xlxd

all: $(SOURCES) $(EXECUTABLE)

$(EXECUTABLE): $(OBJECTS)
	$(CC) $(LDFLAGS) $(OBJECTS) -o $@

.cpp.o:
	$(CC) $(CFLAGS) $< -o $@

clean:
	$(RM) $(EXECUTABLE) *.o

install:
	mkdir -p /opt/xlxd
	cp -f $(EXECUTABLE) /opt/xlxd/
	[ -f /opt/xlxd/xlxd.blacklist ] && \
		cp ../config/xlxd.blacklist /opt/xlxd/xlxd.blacklist.sample || \
		cp ../config/xlxd.blacklist /opt/xlxd/xlxd.blacklist
	[ -f /opt/xlxd/xlxd.whitelist ] && \
		cp ../config/xlxd.whitelist /opt/xlxd/xlxd.whitelist.sample || \
		cp ../config/xlxd.whitelist /opt/xlxd/xlxd.whitelist
	[ -f /opt/xlxd/xlxd.interlink ] && \
		cp ../config/xlxd.interlink /opt/xlxd/xlxd.interlink.sample || \
		cp ../config/xlxd.interlink /opt/xlxd/xlxd.interlink
