---
{"category_name":"easy","problem_code":"CHEFRRUN","problem_name":"Chef and Round Run","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"8-04-2016","tags":{"0":"aug16","1":"berezin","2":"graph","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFRRUN","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/CHEFRRUN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/CHEFRRUN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/CHEFRRUN.pdf">Vietnamese</a> as well.</h3>

<p>Chef cooks nice receipes in the cafeteria of his company. The cafe contains <b>N</b> boxes with food enumerated from <b>1</b> to <b>N</b> and are placed in a circle in clocwise order (boxes <b>1</b> and <b>N</b> are adjacent). Each box has unlimited amount of food with a tastyness level of <b>A<sub>i</sub></b>. Chef invented a definition of a magic box!
<ul>
<li>Chef picks a box <b>i</b> and stays in front of it. </li>
<li>Now Chef eats food from box <b>i</b> and <b>skips</b> next <b>A<sub>i</sub></b> boxes.</li>
<li>Now Chef is staying at some other (probably even the same!) box and repeats. </li>
<li>Box <b>i</b> is a magic box if at some point of such game started from box <b>i</b>, Chef will find himself staying in front of it again. </li>
</ul>
</p>

<p>
When Chef came home, Chef's dog Tommy asked him about how many magic boxes were in the cafe? Help Chef to in finding that!
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of boxes.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the tastyness levels of each box.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing number of magical boxes.</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ sum of all <b>N</b> over all the test cases in a single test file ≤ <b>10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (30 points):</b> <b>1</b> ≤ sum of all <b>N</b> over all the test cases ≤ <b>10<sup>4</sup></b>; <b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>

<li><b>Subtask #2 (70 points):</b> <b>1</b> ≤ sum of all <b>N</b> over all the test cases ≤ <b>10<sup>6</sup></b>; <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
4
1 1 1 1
4
3 0 0 0
4
0 0 0 2</tt>
<b>Output:</b>
<tt>4
1
2</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
Here are Chef's paths if he starting from each the box:
<pre>
<b>1</b>-><b>3</b>-><b>1</b>
<b>2</b>-><b>4</b>-><b>2</b>
<b>3</b>-><b>1</b>-><b>3</b>
<b>4</b>-><b>2</b>-><b>4</b>
</pre>
As you see, all <b>4</b> boxes are magical.

<p><b>Example case 2.</b></p>
Here are Chef's paths if he starts from each box appropriately:
<pre>
<b>1</b>-><b>1</b>
<b>2</b>-><b>3</b>-><b>4</b>-><b>1</b>-><b>1</b>
<b>3</b>-><b>4</b>-><b>1</b>-><b>1</b>
<b>4</b>-><b>1</b>-><b>1</b>
</pre>
AS you see, only box <b>1</b> is magical.