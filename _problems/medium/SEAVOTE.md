---
{"category_name":"medium","problem_code":"SEAVOTE","problem_name":"Sereja and Votes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shiplu","date_added":"1-12-2014","tags":{"0":"easy","1":"jan15","2":"maths","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAVOTE","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/SEAVOTE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/SEAVOTE.pdf">Russian</a>.</h3>


<p>
Sereja conducted a voting about <b>N</b> of his opinions. <b>A<sub>i</sub></b> percent of people voted for opinion number <b>i</b>. 
This statistics is called valid if sum of all <b>A<sub>i</sub></b> is equal to <b>100</b>. 
</p>

<p>
Now let us define rounding up of a statistics <b>A</b>. 
<ul>
<li> If <b>A<sub>i</sub></b> is not an integer, it will be rounded up to next integer. </li>
<li> Otherwise it will be left as it is. </li>
</ul>

e.g. <b>4.1</b> became <b>5</b>, <b>4.9</b> became <b>5</b> but <b>6</b> will still be <b>6</b>.
</p>

<p>
Now let us consider a statistics <b>B</b> of size <b>N</b> in which each of <b>B<sub>i</sub></b> is an integer. Now he wants to know whether there exists some valid statistic <b>A</b> of size <b>N</b>  (may contain real numbers) such that after rounding it up, it becomes same as <b>B</b>?
</p>

<h3>Input</h3>
<ul>
<li>First line of input contain integer <b>T</b> - number of test cases. </li>
<li>For each test, case first line contains integer <b>N</b> - number of opinions. </li>
<li>Next line contains <b>N</b> integers <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>N</sub></b> as defined in the problem.</li>
</ul>

<h3>Output</h3>
For each test case, output <b>YES</b> or <b>NO</b> denoting the answer of the problem, i.e. if there exists some statistics <b>A</b> which could be rounded to make it <b>B</b>, print <b>YES</b> otherwise <b>NO</b>. 

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>0</b> ≤ <b>B<sub>i</sub></b> ≤ <b>1000</b></li>
</ul>
</p>

<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: <b>N ≤ 100</b> (50 points)</li>
<li>Subtask #2: <b>original</b> (50 points)</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3
30 30 30
4
25 25 25 25
2
50 51
<b>Output:</b>
NO
YES
YES
</pre>

<h3>Explanation</h3>
<p>
<ul>
<li>In test case 1, There can not be any <b>A</b> which could be rounded up to get <b>B</b>. Hence answer is NO.</li>
<li>In test case 2, In this case <b>A</b> = {25, 25, 25, 25}. After rounding we get {25, 25, 25, 25} which is equal to <b>B</b>. Hence answer is YES.</li>
<li> In test case 3, <b>A</b> = {49.5, 50.5}. After rounding up we get {50, 51} which is equal to <b>B</b>. Hence answer is YES.
</ul>
</p>