---
{"category_name":"medium","problem_code":"DYNAINV","problem_name":"Dynamic Inversion","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"10-06-2014","tags":{"0":"basic_math","1":"inversions","2":"ltime13","3":"simple","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/DYNAINV","time":{"view_start_date":1404030600,"submit_start_date":1404030600,"visible_start_date":1404030600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/DYNAINV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/DYNAINV.pdf">Russian</a>.</h3>
<p>You are given a permutation <b>A</b> of the first <b>N</b> positive integers. You are also given <b>Q</b> queries to perform one-by-one, the <b>i</b>-th is defined by a pair <b>X<sub>i</sub></b> <b>Y<sub>i</sub></b> and has the meaning that you swap the <b>X<sub>i</sub></b>-th number in the permutation with the <b>Y<sub>i</sub></b>-th one. After performing each query you should output the number of inversions in the obtained permutation, modulo 2.</p>
<p>The inversion is such a pair (<b>i</b>, <b>j</b>) that <b>i</b> &lt; <b>j</b> and <b>A<sub>i</sub></b> > <b>A<sub>j</sub></b>.</p>
<h3>Input</h3>
<p>The first line of input contains two space separated integers <b>N</b> and <b>Q</b> - the size of the permutation and the number of queries.</p>
<p>The second line contains <b>N</b> space separated integers - the permutation <b>A</b>.</p>
<p>Then there are <b>Q</b> lines. The <b>i</b>-th line contains two space separated integers - <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>, denoting the <b>i</b>-th query.</p>
<h3>Output</h3>
<p>Output <b>Q</b> lines. Output the number of inversions in the permutation (modulo 2) after performing the first <b>i</b> queries on the <b>i</b>-th line.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b>, <b>1</b> ≤ <b>Q</b> ≤ <b>100</b> : 14 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>Q</b> ≤ <b>1000</b> : 23 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b> : 63 points.</li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>X<sub>i</sub></b> isn't equal to <b>Y<sub>i</sub></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 1
1 2 3 4 5
2 3

<b>Output:</b>
1
</pre>