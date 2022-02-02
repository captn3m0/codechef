---
{"languages_supported":{"0":"NA"},"title":"MIME2","category":"NA","old_version":true,"problem_code":"MIME2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Many internet protocols these days include the option of associating a
media type with the content being sent.
The type is usually inferred from the file extension.
You are to write a program that facilitates the lookup of media types for
a number of files.</p>

<p>You will be given a table of media type associations that associate a certain
file extension with a certain media type.
You will then be given a number of file names, and tasked to determine the correct
media type for each file.
A file extension is defined as the part of the file name after the final period.
If a file name has no periods, then it has no extension and the media type cannot
be determined.
If the file extension is not present in the table, then the media type cannot be
determined.
In such cases you will print "unknown" as the media type.
If the file extension does appear in the table (case matters), then print the associated
media type.</p>

<h3>Input</h3>
<p>Input begins with 2 integers N and Q on a line.
N is the number of media type associations, and Q is the number of file names.
Following this are N lines, each containing a file extension and a media type, separated by a space.
Finally, Q lines, each containing the name of a file.</p>
<p>N and Q will be no greater than 100 each.
File extensions will consist only of alphanumeric characters, will have length at most 10, and will be distinct.
Media types will have length at most 50, and will contain only alphanumeric characters and punctuation.
File names will consist only of alphanumeric characters and periods and have length at most 50.</p>

<h3>Output</h3>
<p>For each of the Q file names, print on a line the media type of the file.
If there is no matching entry, print "unknown" (quotes for clarity).</p>

<h3>Sample Input</h3>
<pre>5 6
html text/html
htm text/html
png image/png
svg image/svg+xml
txt text/plain
index.html
this.file.has.lots.of.dots.txt
nodotsatall
virus.exe
dont.let.the.png.fool.you
case.matters.TXT
</pre>

<h3>Sample Output</h3>
<pre>text/html
text/plain
unknown
unknown
unknown
unknown
</pre>    