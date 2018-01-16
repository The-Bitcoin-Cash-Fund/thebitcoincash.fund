#!/usr/bin/perl

use YAML qw'LoadFile';

binmode(STDOUT, ":utf8");

my $ymlfile = shift or die "YML file not specified";
my $yml = LoadFile($ymlfile);
my $lang = (keys %{$yml})[0];
my $translation = $yml->{$lang};

while (<>) {
  for my $key (keys %{$translation}) {
    s/\{\{$key\}\}/$translation->{$key}/g;
  }
  print;
}
