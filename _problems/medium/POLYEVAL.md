---
{"category_name":"medium","problem_code":"POLYEVAL","problem_name":"Evaluate the polynomial","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"mugurelionut","date_added":"22-05-2016","tags":{"0":"fft","1":"july16","2":"simple","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/POLYEVAL","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/POLYEVAL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/POLYEVAL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/POLYEVAL.pdf">Vietnamese</a> as well.</h3>
<p>You are given a polynomial of degree <b>N</b> with integer coefficients. Your task is to find the value of this polynomial at some <b>K</b> different integers, modulo <b>786433</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the degree of the polynomial.</p>
<p>The following line of each test case contains <b>(N+1)</b> integers denoting the coefficients of the polynomial. The <b>i</b><sup>th</sup> numbers in this line denotes the coefficient <b>a<sub>i-1</sub></b> in the polynomial <b>a<sub>0</sub> + a<sub>1</sub> × x<sup>1</sup> + a<sub>2</sub> × x<sup>2</sup> + ... + a<sub>N</sub> × x<sup>N</sup></b>. </p>
<p>The following line contains a single integer <b>Q</b> denoting the number of queries.</p>
<p>The <b>j</b><sup>th</sup> of the following <b>Q</b> lines contains an integer number <b>x<sub>j</sub></b> denoting the query.</p>
<h3>Output</h3>
<p>For each query, output a single line containing the answer to the corresponding query. In other words, the <b>j</b><sup>th</sup> line of the output should have an integer equal to <b>a<sub>0</sub> + a<sub>1</sub> × x<sub>j</sub> + a<sub>2</sub> × x<sub>j</sub><sup>2</sup> + ... + a<sub>N</sub> × x<sub>j</sub><sup>N</sup></b> modulo <b>786433</b>.
</p>
<h3>Constraints and Subtasks</h3>
<p><ul>
<li><b>0</b> ≤ <b>a<sub>i</sub></b>, <b>x<sub>j</sub></b> &lt; <b>786433</b></li>
<li><b>Subtask #1</b> (37 points): <b>0</b> ≤ <b>N, Q</b> ≤ <b>1000</b></li>
<li><b>Subtask #2</b> (63 points): <b>0</b> ≤ <b>N, Q</b> ≤ <b>2.5 × 10<sup>5</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
1 2 3
3
7
8
9</tt>

<b>Output:</b>
<tt>162
209
262</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> </p>
<ul>
<li>Query 1: 1 + 2 × 7 + 3 × 7 × 7 = 162</li>
<li>Query 2: 1 + 2 × 8 + 3 × 8 × 8 = 209</li>
<li>Query 3: 1 + 2 × 9 + 3 × 9 × 9 = 262</li>
</ul>

