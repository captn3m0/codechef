---
{"category_name":"medium","problem_code":"AMSTRING","problem_name":"Andrew and the Strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"28-03-2013","tags":{"0":"cook33","1":"easy","2":"sliding","3":"strings","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/AMSTRING","time":{"view_start_date":1366569000,"submit_start_date":1366569000,"visible_start_date":1728420627,"end_date":1735669800},"layout":"problem"}
---
<p>Andrew likes strings very much.</p>
<p>He has two strings <b>A</b> and <b>B</b> of <b>N</b> lower alphabet letters. We denote <b>S[i, j]</b> as the substring from <b>i</b><sup>th</sup> to <b>j</b><sup>th</sup> characters of string <b>S</b>.</p>
<p>Andrew is interested in the number of such fours of integers <b>(L<sub>A</sub>, R<sub>A</sub>, L<sub>B</sub>, R<sub>B</sub>)</b>, where <b>1</b> ≤ <b>L<sub>A</sub></b> ≤ <b>R<sub>A</sub></b> ≤ <b>N</b>, <b>1</b> ≤ <b>L<sub>B</sub></b> ≤ <b>R<sub>B</sub></b> ≤ <b>N</b>, and <b>R<sub>A</sub> − L<sub>A</sub> = R<sub>B</sub> − L<sub>B</sub></b>, such that the <a href="http://en.wikipedia.org/wiki/Hamming_distance">Hamming distance</a> between substrings <b>A[L<sub>A</sub>, R<sub>A</sub>]</b> and <b>B[L<sub>B</sub>, R<sub>B</sub>]</b> is not greater than <b>K</b>. Here the Hamming distance between two strings of the same length is the number of unequal characters on the same positions of strings.</p>
<p>Help him and find this number.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>. The second line contains string <b>A</b>, and the third line contains string <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, output an integer, denoting the number of fours <b>(L<sub>A</sub>, R<sub>A</sub>, L<sub>B</sub>, R<sub>B</sub>)</b> satisfying the conditions described in the problem statements.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>Both <b>A</b> and <b>B</b> are contain only <b>N</b> lower alphabet letters</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2
aba
abb
3 2
abc
def
1 1
a
a

<b>Output:</b>
14
13
1
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>: There are <b>14</b> fours as following:<br /><b>(1, 1, 1, 1) : dist(A[1, 1], B[1, 1]) = dist(a, a) = 0 ≤ 2</b><br /><b>(1, 1, 2, 2) : dist(A[1, 1], B[2, 2]) = dist(a, b) = 1 ≤ 2</b><br /><b>(1, 1, 3, 3) : dist(A[1, 1], B[3, 3]) = dist(a, b) = 1 ≤ 2</b><br /><b>(2, 2, 1, 1) : dist(A[2, 2], B[1, 1]) = dist(b, a) = 1 ≤ 2</b><br /><b>(2, 2, 2, 2) : dist(A[2, 2], B[2, 2]) = dist(b, b) = 0 ≤ 2</b><br /><b>(2, 2, 3, 3) : dist(A[2, 2], B[3, 3]) = dist(b, b) = 0 ≤ 2</b><br /><b>(3, 3, 1, 1) : dist(A[3, 3], B[1, 1]) = dist(a, a) = 0 ≤ 2</b><br /><b>(3, 3, 2, 2) : dist(A[3, 3], B[2, 2]) = dist(a, b) = 1 ≤ 2</b><br /><b>(3, 3, 3, 3) : dist(A[3, 3], B[3, 3]) = dist(a, b) = 1 ≤ 2</b><br /><b>(1, 2, 1, 2) : dist(A[1, 2], B[1, 2]) = dist(ab, ab) = 0 ≤ 2</b><br /><b>(1, 2, 2, 3) : dist(A[1, 2], B[2, 3]) = dist(ab, bb) = 1 ≤ 2</b><br /><b>(2, 3, 1, 2) : dist(A[2, 3], B[1, 2]) = dist(ba, ab) = 2 ≤ 2</b><br /><b>(2, 3, 2, 3) : dist(A[2, 3], B[2, 3]) = dist(ba, bb) = 1 ≤ 2</b><br /><b>(1, 3, 1, 3) : dist(A[1, 3], B[1, 3]) = dist(aba, abb) = 1 ≤ 2</b><br /></p>
<p><b>Example case 2</b>: The four <b>(1, 3, 1, 3)</b> no longer satisfies the conditions, because<br /><b>(1, 3, 1, 3) : dist(A[1, 3], B[1, 3]) = dist(abc, def) = 3 > 2</b><br /></p>
