---
{"category_name":"hard","problem_code":"SUBQUERY","problem_name":"Substring Query","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"5-06-2014","tags":{"0":"ltime13","1":"medium","2":"suffix_automata","3":"trie","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SUBQUERY","time":{"view_start_date":1404030600,"submit_start_date":1404030600,"visible_start_date":1404030600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/SUBQUERY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/SUBQUERY.pdf">Russian</a>.</h3>
<p>You are given a string <b>S</b> and <b>N</b> queries. Each query is defined by two integers - <b>L<sub>i</sub></b> and <b>P<sub>i</sub></b>. Count the number of strings of the length <b>L<sub>i</sub></b> that occur <b>exactly P<sub>i</sub></b> times (as the consecutive substrings) in the string <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of input contains the string <b>S</b>.
</p>
<p>The second line of input contains the integer <b>N</b> - the number of queries.</p>
<p>Then there are <b>N</b> lines, the <b>i</b>-th one contains numbers <b>L<sub>i</sub></b> and <b>P<sub>i</sub></b> for the <b>i</b>-th query.</p>
<h3>Output</h3>
<p>For each query output the answer at the corresponding line of the output.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>50</b>, <b>1</b> ≤ <b>N</b> ≤ <b>100</b> : 13 points.</li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>N</b> ≤ <b>10000</b> : 27 points.</li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>200000</b>, <b>1</b> ≤ <b>N</b> ≤ <b>500000</b> : 60 points.</li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b>, <b>P<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
abacaba
1
3 2

<b>Output:</b>
1
</pre><p> </p>
<h3>Explanation</h3>
<p>The only such string is <b>aba</b>.</p>
