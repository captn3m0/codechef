---
{"category_name":"easy","problem_code":"DIVQUERY","problem_name":"Chef and The Divisibility Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"Rubanenko","date_added":"10-08-2013","tags":{"0":"cook37","1":"medium","2":"offline","3":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/DIVQUERY","time":{"view_start_date":1376852100,"submit_start_date":1376852100,"visible_start_date":1376852100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Chef is given a sequence of <b>N</b> integers <b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b>. He has to process <b>Q</b> queries on the above sequence. Each query is represented by three integers:</p>
<ul>
<li>
<b>L R K</b> => report cardinality of <b>{ i : K</b> divides <b>A<sub>i</sub></b>, <b>L</b> ≤ <b>i</b> ≤ <b>R }</b>. In other words, how many integers in the subsequence starting at <b>L</b><sup>th</sup> element and ending at <b>R</b><sup>th</sup> element are divisible by <b>K</b>.
</li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains two space separated integer <b>N</b>  and <b>Q</b>.<br />
The following line contains <b>N</b> space separated integers giving the sequence <b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b>.<br />
Then there will be <b>Q</b> lines each containing three space separated integers <b>L R K</b>, representing a query.</p>
<p> </p>
<h3>Output</h3>
<p>For each query output the result in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q </b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub> </b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li> <b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>K </b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
8 5
3 5 1 4 6 9 12 6
3 6 2
3 6 4
4 8 3
2 6 7
8 8 6

<b>Output:</b>
2
1
4
0
1
</pre>