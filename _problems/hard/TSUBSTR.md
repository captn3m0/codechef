---
{"category_name":"hard","problem_code":"TSUBSTR","problem_name":"Substrings on a Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"laycurse","date_added":"1-03-2012","tags":{"0":"april12","1":"hard","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TSUBSTR","time":{"view_start_date":1334137553,"submit_start_date":1334137553,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chefland scientists have made a new invention! They developed a new way to represent a string with <b>N</b> symbols: consider a tree with <b>N</b> vertices, rooted at the first vertice. For each vertice, a single latin letter is written. So we have obtained a "<b>treestring</b>". The scientists haven't decided yet how the treestring should be pronounced, but they have invented a definition of a <b>substring for a treestring</b>. A string is a <b>substring of a treestring</b> if and only it can be obtained by moving from some vertice to its descendant and writing out all the letters from vertices that occured on this path in the order they have appeared. For example, consider the following treestring :<br />
<br /><br /><br />
<img src="http://www.codechef.com/download/tsubstr.png" /><br />
<br /><br />
The string "ba" is a <b>substring</b> of a given treestring because it can be obtained by moving from vertice <b>4</b> to vertice <b>6</b>, the string "abb" is also a substring of this treestring - it can be obtained by moving from the root to vertice <b>5</b>. However the string "cb" is <b>not a substring</b> of this treestring because there is no way from any vertice to its descendant in such a way that the sequence of letters is "cb".<br />
<br /><br /><br />
Now the Chefland researchers ask you to help them with the treestring research.<br />
They have given you a treestring with <b>N</b> vertices.<br />
Please output the number of <b>distinct</b> substrings of a given treestring (including the empty one).<br />
Then, <b>Q</b> queries will follow.<br />
For the <b>i</b>-th query, the permutation <b>P<sub>i</sub></b> of <b>26</b> latin alphabet letters and an integer <b>K<sub>i</sub></b> will be given.<br />
That means that if we sort all distinct substrings of the given treestring according to the <b>alphabetical order described in P<sub>i</sub></b>, you will have to output the <b>K<sub>i</sub></b>-th string.<br />
"According to the alphabetical order described in <b>P<sub>i</sub></b>" means that letter <b>X</b> is lexicographically smaller that letter <b>Y</b> if and only <b>X</b> appears<br />
in <b>P<sub>i</sub></b> earlier than <b>Y</b>. For example if the <b>alphabetical order</b> is "cbadefghijklmnopqrstuvwxyz", then letter "c" is <b>lexicographically smaller</b> than letter "a" because "c" is the first symbol of this permutation, and "a" is the third symbol of this permutation, therefore 1&lt;3 and for the given arrangement, "c" is <b>alphabetically less</b> than "a".<br />
Here note that the string <b>A</b> is smaller than the string <b>B</b> (that means <b>A</b> comes earlier than <b>B</b><br />
after sorting) if and only if<br />
<b>A</b> is a prefix of <b>B</b>,<br />
or <b>A<sub>i</sub></b> = <b>B<sub>i</sub></b> (for all <b>i</b> &lt; <b>k</b>) and <b>A<sub>k</sub></b> &lt; <b>B<sub>k</sub></b> (in terms of alphabetical order)<br />
where <b>A<sub>i</sub></b> denotes the <b>i</b>-th letter of <b>A</b>.</p>
<h3>Constraints</h3>
<p>
<ul>
<li>1&lt;=<b>N</b>&lt;=250000</li>
<li>1&lt;=<b>Q</b>&lt;=50000</li>
<li>1&lt;=<b>K<sub>i</sub></b>&lt;=9223372036854775807 (2^63-1)</li>
<li>Output will not exceed 800 KB.</li>
<li>It is guaranteed that the N lowercase latin letters have been generated randomly.</li>
</ul>
</p><p><br /></p>
<h3>Input</h3>
<p>The first line of input consists of two integers - <b>N</b> and <b>Q</b>.<br />Then, a string composed of <b>N</b> lowercase latin letters follow.<br /><br />
Then, <b>N-1</b> lines follow. Each line is composed of <b>two</b> numbers - <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>. It means that there is an edge between vertice <b>X<sub>i</sub></b> and vertice <b>Y<sub>i</sub></b>.<br /><br />
Then, <b>Q</b> lines follow. Each line consists of a permutation of <b>26</b> lowercase latin letters <b>P<sub>i</sub></b> and an integer <b>K<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>Output <b>Q+1</b> lines. On the first line output a single integer - the number of <b>distinct</b> substrings of a given treestring. The following <b>Q</b> lines should contain answers to the queries. <b>I</b>-th line should contain an answer to <b>i</b>-th query or a string <b>"-1"</b> if it is impossible<br />
to find <b>K<sub>i</sub></b>-th string for <b>i</b>-th query.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8 4
abcbbaca
1 2
2 3
1 4
4 5
4 6
4 7
1 8
abcdefghijklmnopqrstuvwxyz 5
abcdefghijklmnopqrstuvwxyz 1
bcadefghijklmnopqrstuvwxyz 5
abcdefghijklmnopqrstuvwxyz 100

<b>Output:</b>
12
aba

ba
-1
</pre>