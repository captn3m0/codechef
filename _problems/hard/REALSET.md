---
{"category_name":"hard","problem_code":"REALSET","problem_name":"Petya and Sequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"KADR","problem_tester":"white_king","date_added":"18-10-2013","tags":{"0":"KADR","1":"dec13","2":"fft","3":"hard","4":"maths"},"editorial_url":"http://discuss.codechef.com/problems/REALSET","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/REALSET.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/REALSET_1.pdf">Russian</a>.</h3>
<p>Little Petya likes integer numbers a lot. Recently he has received a sequence of integers as a gift from his mother. Petya calls a sequence of <b>N</b> integers <b>A<sub>i</sub></b> beautiful if there exist a sequence of <b>N</b> integer numbers <b>B<sub>i</sub></b> for which the following conditions hold:</p>
<ul>
<li> At least one number <b>B<sub>i</sub></b> differs from 0. </li>
<li> For every <b>j</b> from 0 to <b>N</b>-1 the following holds: <br /> <b>A<sub>0</sub>* B<sub>j</sub></b> + <b>A<sub>1</sub>* B<sub>(j + 1) mod N</sub></b> + ... + <b>A<sub>N-1</sub>* B<sub>(j + N - 1) mod N</sub></b> = 0.</li>
</ul>
<p><br /><br />
Please, help Petya to check if his sequence <b>A<sub>i</sub></b> is beautiful.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
The first line of each test case contains a single integer <b>N</b> denoting the number of elements in Petya's sequence. The second line contains <b>N</b> space-separated integers <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, ..., <b>A<sub>N-1</sub></b> denoting the sequence.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the word "YES"(without quotes) if Petya's sequence is beautiful and "NO", otherwise.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3 * 10<sup>4</sup></b></li>
<li><b>-1000</b> ≤ <b>A<sub>i</sub></b> ≤ <b>1000</b></li>
</ul>
</p>
<p>Sum of N for all test cases in a single input file will not exceed 150 000.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
3
1 0 0
3
1 1 1
4
2 -4 1 1
5
1 3 2 1 5
<b>Output:</b>
NO
YES
YES
NO
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 2.</b> One of the possible sequences B is (1, -1, 0). </p>
<p><b>Example case 3.</b> One of the possible sequences B is (1, 1, 1, 1). </p>
