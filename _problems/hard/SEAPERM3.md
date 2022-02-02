---
{"category_name":"hard","problem_code":"SEAPERM3","problem_name":"Sereja and Permutations 3","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"xcwgf666","date_added":"7-10-2016","tags":{"0":"dynamic","1":"hard","2":"matrix","3":"nov16","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAPERM3","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/SEAPERM3.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/SEAPERM3.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/SEAPERM3.pdf">Vietnamese</a> as well.</h3>


Let <b>p</b> be a permutation of integers <b>1, ..., N</b>. Lets call <b>p</b> <i>good</i> if there is at least one pair of indices <b>(i,j)</b> such that <b>i < j</b> and <b>p[i] > j, p[j] > i</b>.
<p></p>
Sereja is interested in the number of permutations <b>p</b> of <b>1, ..., N</b> that are good. This might seem easy at first, but Sereja is only interested in permutations that obey a list of <b>M</b> additional rules. Rule number <b>i (1 ≤ i ≤ M)</b> in Sereja's list says <b>p(X<sub>i</sub>)</b>  should equal <b>V<sub>i</sub></b>.
<p></p>
Help Sereja count number of good permutations that obey the <b>M</b> additional constraints. As this number can be quite large, you should only output its value modulo <b>2000000011</b>.
<p></p>

<h3>Input</h3>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case starts with line that contains two numbers <b>N, M</b>. The rest of the test cases consists of <b>M</b> lines describing Sereja's additional rules. The <b>i</b>'th such line gives the integers <b>X<sub>i</sub></b> and <b>V<sub>i</sub></b>.
<p></p>

<h3>Output</h3>
Output one line per test case that gives the number of good permutations obeying Sereja's constraints modulo 2000000011.
<p></p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^9</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub>, V<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
3 0
3 2
3 1
1 2</tt>

<b>Output:</b>
<tt>1
0</tt>
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The only good permutation is <b>3,2,1</b> (i = 1, j = 2).</p>
<h3>Sub tasks</h3>
<ul>
<li><b>Subtask #1:</b> <b>1</b> ≤ <b>N</b> ≤ <b>8</b> (5 points)</li>
<li><b>Subtask #2:</b> <b>1</b> ≤ <b>N</b> ≤ <b>20</b> (10 points)</li>
<li><b>Subtask #3:</b> <b>1</b> ≤ <b>N</b> ≤ <b>1000</b> (15 points)</li>
<li><b>Subtask #4:</b> <b>1</b> ≤ <b>N</b> ≤ <b>10000</b> (15 points)</li>
<li><b>Subtask #5:</b> <b>1</b> ≤ <b>N</b> ≤ <b>100000000</b> (20 points)</li>
<li><b>Subtask #6:</b> <b>original</b> (35 points)</li>
</ul>