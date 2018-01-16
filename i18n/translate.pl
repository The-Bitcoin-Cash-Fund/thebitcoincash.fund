#!/usr/bin/perl

use YAML qw'LoadFile';
use open qw(:std :utf8);

binmode(STDOUT, ":utf8");

my $basefile = shift or die "YML file not specified";
my $baseyml = LoadFile($basefile);
my $baselang = (keys %{$baseyml})[0];
my $base = $baseyml->{$baselang};

my $langfile = shift or die "YML file not specified";
my $langyml = LoadFile($langfile);
my $lang = (keys %{$langyml})[0];
my $translation = $langyml->{$lang};

while (<>) {
    for my $key (keys %{$base}) {
	my $text = $translation->{$key} || $base->{$key};
	s/\{\{$key\}\}/$text/g;
    }
    print;
}
