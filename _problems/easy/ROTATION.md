---
{"category_name":"easy","problem_code":"ROTATION","problem_name":"Fun with Rotation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"xcwgf666","date_added":"21-07-2014","tags":{"0":"ad","1":"cakewalk","2":"devuy11","3":"sept14"},"editorial_url":"http://discuss.codechef.com/problems/ROTATION","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/ROTATION.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/ROTATION.pdf">Russian</a>.</h3>
<p>
You are given an array <b>A</b> of <b>N</b> integers. You are to fulfill <b>M</b> queries. Each query has one of the following three types:<br /></p>
<ul>
<li>C <b>d</b> : Rotate the array <b>A</b> clockwise by <b>d</b> units.</li>
<li>A <b>d</b> : Rotate the array <b>A</b> anticlockwise by <b>d</b> units.</li>
<li>R <b>d</b> : Query for the value of the element, currently being the <b>d</b>-th in the array <b>A</b>.</li>
</ul>

<h3>Input</h3>
<p>The first line contains two numbers - <b>N</b> and <b>M</b> respectively.<br /></p>
<p>The next line contains <b>N</b> space separated Integers, denoting the array <b>A</b>.</p>
<p>Each of the following <b>M</b> lines contains a query in the one of the forms described above.</p>
<h3>Output</h3>
<p>For each query of type <b>R</b> output the answer on a separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b> </li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100000</b> </li>
<li><b>1</b> ≤ <b>d</b> ≤ <b>N</b>, in all the queries</li>
<li><b>1</b> ≤ elements of <b>A</b> ≤ <b>1000000</b></li>
<li>The array <b>A</b> and the queries of the type <b>R</b> are <b>1-based</b>.
</li></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 5
5 4 3 3 9
R 1
C 4
R 5
A 3
R 2
<b>Output:</b>
5
3
3
</pre><h3>Explanation</h3>
<p>
The initial array : 5 4 3 3 9<br /><br />
The answer for <b>R 1</b> : 5<br /><br />
The array after <b>C 4</b> :  9 5 4 3 3<br /><br />
The answer for <b>R 5</b> : 3<br /><br />
The array after <b>A 3</b> : 4 3 3 9 5<br /><br />
The answer for <b>R 2</b> : 3 <br />
</p>
