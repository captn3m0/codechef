---
{"category_name":"easy","problem_code":"CTHREE","problem_name":"Chef and Tuples","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"wwwwodddd","date_added":"3-02-2018","tags":{"0":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CTHREE","time":{"view_start_date":1518978600,"submit_start_date":1518978600,"visible_start_date":1518978600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/mandarin/CTHREE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/russian/CTHREE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/vietnamese/CTHREE.pdf">Vietnamese</a> as well.</h3>

<p>Today, Chef was trying to solve a problem he found pretty hard: Given an integer <b>N</b> and a triple of integers (<b>a</b>, <b>b</b>, <b>c</b>), compute the number of triples of positive integers (<b>x</b>, <b>y</b>, <b>z</b>) such that <b>N</b> = <b>x</b> · <b>y</b> · <b>z</b>, <b>x</b> ≤ <b>a</b>, <b>y</b> ≤ <b>b</b> and <b>z</b> ≤ <b>c</b>.</p>

<p>Can you help Chef solve this problem?</p>

<p>Two <a href="https://en.wikipedia.org/wiki/Tuple">triples</a> (<b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>, <b>z<sub>1</sub></b>) and (<b>x<sub>2</sub></b>, <b>y<sub>2</sub></b>, <b>z<sub>2</sub></b>) differ if <b>x<sub>1</sub></b> is not equal to <b>x<sub>2</sub></b> or <b>y<sub>1</sub></b> is not equal to <b>y<sub>2</sub></b> or <b>z<sub>1</sub></b> is not equal to <b>z<sub>2</sub></b>.

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains four space-separated integers <b>N</b>, <b>a</b>, <b>b</b> and <b>c</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the number of valid triples (<b>x</b>, <b>y</b>, <b>z</b>).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>a</b>, <b>b</b>, <b>c</b> ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

3
100 8 23 11
497296800 1000000 1000000 1000000
1 1 2 3

<b>Output:</b>

10
97800
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> There are 10 valid triples (<b>x</b>, <b>y</b>, <b>z</b>): (1, 10, 10), (1, 20, 5), (2, 5, 10), (2, 10, 5), (4, 5, 5), (5, 2, 10), (5, 4, 5), (5, 5, 4), (5, 10, 2), (5, 20, 1).</p>
