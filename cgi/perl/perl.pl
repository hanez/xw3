---
permalink: /cgi/perl/index.pl
---

use warnings;
use strict;
use POSIX qw(strftime);

my $date = strftime "%m/%d/%Y", localtime;

print "Hello from Perl!\n\n";
print $date;
print "\n\n";

print('my @i = (1..10); for(@i) { print("$_", "\n"); }');
print("\n");

my @i = (1..10); for(@i) { print("$_", "\n"); }

