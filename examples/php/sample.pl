#!/usr/bin/perl

use strict;

my $timestamp = time();

print "<!doctype html>\n";
print "<html>\n";
print "<head>\n";
print "  <title>Hello World</title>\n";
print "</head>\n";
print "<body>\n";
print "  <h1>Hello World: " . $timestamp . "</h1>\n";
print "</body>\n";
print "</html>\n";
