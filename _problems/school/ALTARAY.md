---
{"category_name":"school","problem_code":"ALTARAY","problem_name":"Alternating subarray prefix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"antoniuk1","date_added":"28-01-2016","tags":{"0":"cook68","1":"dynamic","2":"simple","3":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/ALTARAY","time":{"view_start_date":1458498600,"submit_start_date":1458498600,"visible_start_date":1458498600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/mandarin/ALTARAY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/russian/ALTARAY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/vietnamese/ALTARAY.pdf">Vietnamese</a> as well.</h3>
<p>
There's an array <b>A</b> consisting of <b>N</b> <b>non-zero</b> integers <b>A<sub>1..N</sub></b>. A subarray of <b>A</b> is called <i>alternating</i> if any two adjacent elements in it have different signs (i.e. one of them should be negative and the other should be positive).</p>
<p>
For each <b>x</b> from <b>1</b> to <b>N</b>, compute the length of the longest alternating subarray that starts at <b>x</b> - that is, a subarray <b>A<sub>x..y</sub></b> for the maximum possible <b>y ≥ x</b>. The length of such a subarray is <b>y-x+1</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> - the number of test cases.</li>
<li>The first line of each test case contains <b>N</b>.</li>
<li>The following line contains <b>N</b> space-separated integers <b>A<sub>1..N</sub></b>.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output one line with <b>N</b> space-separated integers - the lengths of the longest alternating subarray starting at <b>x</b>, for each <b>x</b> from <b>1</b> to <b>N</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup> ≤ A<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
1 2 3 4
4
1 -5 1 -5
6
-5 -1 -1 2 -2 -3

<b>Output:</b>
1 1 1 1
4 3 2 1
1 1 3 2 1 1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> No two elements have different signs, so any alternating subarray may only consist of a single number.</p>
<p><b>Example case 2.</b> Every subarray is alternating.</p>
<p><b>Example case 3.</b> The only alternating subarray of length 3 is <b>A<sub>3..5</sub></b>.</p>
