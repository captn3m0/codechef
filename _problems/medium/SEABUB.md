---
{"category_name":"medium","problem_code":"SEABUB","problem_name":"Sereja and Bubble Sort","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"xcwgf666","date_added":"15-03-2014","tags":{"0":"dynamic","1":"expectation","2":"medium","3":"sept14","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEABUB","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/SEABUB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/SEABUB.pdf">Russian</a>.</h3>
<p> </p>
<p>Sereja has an array <b>A</b> that contains <b>n</b> integers, namely <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>. A single action consists of performing one of two following operations:</p>
<ul>
<li>To swap two consecutive elements;</li>
<li>To make a random and uniform shuffle of all the elements of the array <b>A</b>.
</li></ul>

<p>Now Sereja's goal is to make the expected value of the function <b>f(A)</b> as minimal as possible, by doing no more than <b>k</b> actions.</p>
<p>The function <b>f(A)</b> is the minimal number of consecutive elements' swaps you need in order to sort the array <b>A</b> in the increasing order.</p>
<p>What is the expected value of <b>f(A)</b> in case Sereja uses no more than <b>k</b> actions in the optimal way?</p>
<h3>Input</h3>
<p>
The first line contains an integer <b>T</b>, denoting the number of testcases. Then, <b>T</b> testcase descriptions follow.</p>
<p>The first line of each desription contains the integers <b>n</b> and <b>k</b> from the statement, respectively. The following line contains <b>n</b> space separated integers - <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>. All the values of <b>A<sub>i</sub></b> will form a permutation of the first <b>N</b> natural numbers.</p>
<h3>Output</h3>
<p>For each test case output the minimal possible expected value of <b>f(A)</b>. Your answer will be considered correct in case it differs by no more than <b>10<sup>-6</sup></b> from the official one.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>k</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>n</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 1
2 1
3 1
3 2 1

<b>Output:</b>
0.0000
1.5000

</pre><p> </p>
