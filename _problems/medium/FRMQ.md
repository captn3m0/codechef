---
{"category_name":"medium","problem_code":"FRMQ","problem_name":"Chef and Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"xcwgf666","date_added":"17-07-2014","tags":{"0":"antoniuk1","1":"april15","2":"easy","3":"rmq","4":"sparse"},"editorial_url":"http://discuss.codechef.com/problems/FRMQ","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/FRMQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/FRMQ.pdf">Russian</a>.</h3>
<p>Chef has an array <b>A[]</b> of <b>N</b> elements denoted by <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N-1</sub></b>.</p>
<p>He thinks about <b>M</b> questions of following kind: <tt>"What is the maximum element among <b>A<sub>i</sub></b> where <b>i</b> lies between <b>min{x, y}</b> and <b>max{x, y}</b> both inclusive?"</tt></p>
<p>You have to help Chef to find out sum of answers of all the <b>M</b> questions.</p>
<p><i><b>Method of generation of values <b>x</b> and <b>y</b> for all <b>M</b> questions:</b></i> </p>
<p>You are given two integers <b>x<sub>1</sub></b> and <b>y<sub>1</sub></b> denoting values of <b>x</b> and <b>y</b> for the first question. </p>
<p>For the next questions, values of <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> are generated in the following way:</p>
<pre>
for <b>i = 2</b> to <b>M</b>:
	<b>x<sub>i</sub></b> = <b>(x<sub>i-1</sub> + 7) mod (N - 1)</b>
	<b>y<sub>i</sub></b> = <b>(y<sub>i-1</sub> + 11) mod N</b>
</pre><p> </p>
<p>Here <b>a mod b</b> denotes the remainder of division of <b>a</b> by <b>b</b>.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b>, denoting the number of elements in the array.</p>
<p>The second line contains <b>N</b> space-separated integers, denoting <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, ..., <b>A<sub>N-1</sub></b>. </p>
<p>The third line contains three space-separated integers <b>M</b>, <b>x<sub>1</sub></b> and <b>y<sub>1</sub></b>.</p>
<h3>Output</h3>
<p>Output a single integer denoting the <b>sum</b> of the answers to the questions.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>8</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b>x<sub>1</sub>, y<sub>1</sub></b> ≤ <b>N-1</b></li>
</ul>

<p></p>
<p><b>Subtask 1: (20 points)</b></p>
<ul>
<li><b>N, M ≤ 10<sup>3</sup></b>; <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<p></p>
<p><b>Subtask 2: (50 points)</b></p>
<ul>
<li><b>N, M ≤ 10<sup>5</sup></b></li>
</ul>
<p></p>
<p><b>Subtask 3: (30 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 2 3
3 0 1

<b>Output:</b>
7
</pre><h3>Explanation</h3>
<li>The first question: <b>x<sub>1</sub></b> = 0, <b>y<sub>1</sub></b> = 1      =>     <b>ans<sub>1</sub></b> = 2</li>
<li>The second question: <b>x<sub>2</sub></b> = (0 + 7) mod 2 = 1, <b>y<sub>2</sub></b> = (1 + 11) mod 3 = 0       =>       <b>ans<sub>2</sub></b> = 2</li>
<li>The third question: <b>x<sub>3</sub></b> = (1 + 7) mod 2 = 0, <b>y<sub>3</sub></b> = (0 + 11) mod 3 = 2      =>       <b>ans<sub>3</sub></b> = 3</li>
<p> </p>
<p>As <b>ans<sub>1</sub></b> + <b>ans<sub>2</sub></b> + <b>ans<sub>3</sub></b> = 2 + 2 + 3 = 7. So you have to print <b>7</b>.</p>
