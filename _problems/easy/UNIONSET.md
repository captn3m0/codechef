---
{"category_name":"easy","problem_code":"UNIONSET","problem_name":"Pairwise union of sets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"2-06-2017","tags":{"0":"admin2"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/UNIONSET.pdf">Mandarin</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/UNIONSET.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/UNIONSET.pdf">Vietnamese</a> as well.</h3>

<p>There are <b>N</b> sets of integers from 1 to <b>K</b> both inclusive. Find out number of pairs of sets whose union contains all the <b>K</b> elements.</p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denotes number of test cases.</p>
<p>The first line of each test case contains two space separated integers <b>N, K</b>.</p>
<p>The each of the next line first contains an integer <b>len</b><sub>i</sub> denoting number of elements in the i-th set, followed by <b>len</b><sub>i</sub> space separated integers in the range [1, <b>K</b>] denoting the elements in the set.</p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the answer.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, K</b> ≤ 2500</li>
<li>1 ≤ <b>len</b><sub>i</sub> ≤ K</li>
<li>Note that a set can't contain repeated elements.</li>
<li>1 ≤ <b>len</b><sub>1</sub> + <b>len</b><sub>2</sub> + .. + <b>len</b><sub><b>N</b></sub> ≤ 10000</li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1</b> (40 points)</p>
<p>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, K</b> ≤ 250</li>
<li>1 ≤ <b>len</b><sub>1</sub> + <b>len</b><sub>2</sub> + .. + <b>len</b><sub><b>N</b></sub> ≤ 1000</li>
</ul>
</p>

<p><b>Subtask #2</b> (60 points)</p>
<ul>
<li>original constraints.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
2 2
1 1
1 1
3 2
2 1 2
2 1 2
2 1 2
3 4
3 1 2 3
4 1 2 3 4
3 2 3 4

<b>Output</b>
0
3
3
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. No pair of sets is there with its union = 2.</p>
<p>For <b>example 2 and 3</b>, all the pairs are valid.</p>