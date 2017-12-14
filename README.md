# SmartQuote
A simple php-function that replaces apple smart quotes with a regular double quote mark

when reading files that were created on a apple mac computer, sometimes double quotes are replaced by strange apple smart qoutes.
These "smart" quotes for example breaks json files
This scripts finds those strange characters in a string and replaces them with regular qoutes.

The most robust way to do this I found is to find the hexadecimal representation of the quote and do a string replace.
