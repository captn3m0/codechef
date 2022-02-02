---
{"category_name":"medium","problem_code":"TAAND","problem_name":"And Operation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":null,"date_added":"3-07-2014","tags":{"0":"ad","1":"bitwise","2":"easy","3":"ltime14","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAAND","time":{"view_start_date":1406452500,"submit_start_date":1406452500,"visible_start_date":1406452500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TAAND1.pdf">Mandarin Chinese </a>.</h3>
<p> </p>
<p>Given an array of <b>n</b> non-negative integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, …, <b>A<sub>N</sub></b>. Your mission is finding a pair of integers <b>A<sub>u</sub></b>, <b>A<sub>v</sub></b> (1 ≤ <b> u</b> &lt; <b>v</b> ≤ <b>N</b>) such that (<b>A<sub>u</sub></b> and <b>A<sub>v</sub></b>) is as large as possible.<br />
<b>And</b> is a bit-wise operation which is corresponding to <b>&amp;</b> in C++ and Java.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>. The <b>i</b>th line in the next <b>N</b> lines contains the <b>A<sub>i</sub></b>.</p>
<p> </p>
<h3>Output</h3>
<p>Contains a single integer which is the largest value of <b>A<sub>u</sub></b> and <b>A<sub>v</sub></b> where 1 ≤ <b> u</b> &lt; <b>v</b> ≤ <b>N</b>.</p>
<p> </p>
<h3>Constraints</h3>
<p>50 points:</p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>5000</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p>50 points:</p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>3 × 10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
2
4
8
10

<b>Output:</b>
8

</pre><p> </p>
<h3>Explanation</h3>
<ul>
<li>2 and 4 = 0</li>
<li>2 and 8 = 0</li>
<li>2 and 10 = 2</li>
<li>4 and 8 = 0</li>
<li>4 and 10 = 0</li>
<li>8 and 10 = 8</li>
</ul>
