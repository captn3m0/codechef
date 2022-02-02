---
{"category_name":"easy","problem_code":"BASE","problem_name":"Our Base is Under Attack","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"23-11-2016","tags":{"0":"kevinsogo"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/BASE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/BASE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/BASE.pdf">Vietnamese</a> as well.</h3>

<p>Chef has recently learned about <b>number bases</b> and is becoming fascinated.</p>

<p>Chef learned that for bases greater than ten, new digit symbols need to be introduced, and that the convention is to use the first few letters of the English alphabet. For example, in base 16, the digits are <tt>0123456789ABCDEF</tt>. Chef thought that this is unsustainable; the English alphabet only has 26 letters, so this scheme can only work up to base 36. But this is no problem for Chef, because Chef is very creative and can just invent new digit symbols when she needs them. (Chef is very creative.)</p>

<p>Chef also noticed that in base two, all positive integers start with the digit <b>1</b>! However, this is the only base where this is true. So naturally, Chef wonders: Given some integer <b>N</b>, how many bases <b>b</b> are there such that the base-<b>b</b> representation of <b>N</b> starts with a <b>1</b>?</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of one line containing a single integer <b>N</b> (in base ten).</p>


<h3>Output</h3>
<p>For each test case, output a single line containing the number of bases <b>b</b>, or <tt>INFINITY</tt> if there are an infinite number of them.</p>


<h3>Constraints</h3>

<h3>Subtasks</h3>
<b>Subtask #1 (16 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>0</b> ≤ <b>N</b> < <b>10<sup>3</sup></b></li>
</ul> 
<p></p>
<b>Subtask #2 (24 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>0</b> ≤ <b>N</b> < <b>10<sup>6</sup></b></li>
</ul> 
<p></p>
<b>Subtask #3 (28 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>0</b> ≤ <b>N</b> < <b>10<sup>12</sup></b></li>
</ul> 
<p></p>
<b>Subtask #4 (32 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>N</b> < <b>10<sup>12</sup></b></li>
</ul> 
<p></p>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>4
6
9
11
24</tt>

<b>Output:</b>
<tt>4
7
8
14</tt>
</pre>

<h3>Explanation</h3>
<p>In the first test case, <b>6</b> has a leading digit <b>1</b> in bases <b>2</b>, <b>4</b>, <b>5</b> and <b>6</b>: <b>6<sub>10</sub> = 110<sub>2</sub> = 12<sub>4</sub> = 11<sub>5</sub> = 10<sub>6</sub></b>.  
</p>
