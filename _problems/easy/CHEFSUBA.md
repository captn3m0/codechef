---
{"category_name":"easy","problem_code":"CHEFSUBA","problem_name":"Chef and Sub Array ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"18-11-2015","tags":{"0":"berezin","1":"long","2":"may17"},"editorial_url":"https://discuss.codechef.com/problems/CHEFSUBA","time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/mandarin/CHEFSUBA.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/russian/CHEFSUBA.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/vietnamese/CHEFSUBA.pdf">vietnamese</a> as well.</h3>


<p>Chef has a binary array <b>A</b> of length <b>N</b>. He also has a frame that can focus on at max <b>K</b> consecutive elements of the array. </p>

<p>Chef has a lovely dog which likes to do following two things.  
<ul>
<li>Shifting the array <b>A</b> to the right by one element (<b>N</b>-th element becomes 1<sub>st</sub>, 1<sub>st</sub> becomes 2<sub>nd</sub> and so on) </li>
<li>Asking Chef what is the maximal number of elements equal to 1, that can be captured by a frame (frame can capture <b>not more</b> than <b>K</b> consecutive elements of array).</li>
</ul>
</p>

<p>Help Chef entertain his Dog!</p>

<h3>Input</h3>
<p>The first line of each test case contains three integers <b>N</b>, <b>K</b> and <b>P</b> denoting the number of elements in array <b>A</b>, size of a frame and the number of Dog's requests.</p>

<p>The second line contains <b>N</b> space-separated integers <b>A</b><sub>1</sub>, <b>A</b><sub>2</sub>, ..., <b>A<sub>N</sub></b> denoting the elements of array. </p>

<p>The third line contains string consisting of <b>P</b> characters, i-th character stands for dog's i-th question and equals <b>'!'</b> if  Dog shifts the array and <b>'?'</b> if dog asks what is the maximal number of ones captured by the frame. </p>

<h3>Output</h3>
<p>For each Dog's question output a single line containing an integer corresponding to the answer of the question. </p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N, K, P</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>A<sub>i</sub></b> ≤ 1</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1  (30 points)</b> <b>N, K, P</b> ≤ 10<sup>3</sup> </li>
<li><b>Subtask #2 (70 points)</b> Original constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5 3 4
1 0 0 1 1
?!!?

<b>Output:</b>
2
3
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>For the first question , Chef can pick last <b>3</b> elements (or last two, no matter) for his frame, 
and will have <b>2</b> elements equal <b>1</b>.</p>
<p>After first shift (exclamation mark) array will become: <b>1 1 0 0 1</b>.</p>
<p>After second shift (exclamation mark) array will become: <b>1 1 1 0 0</b>.</p>
<p>Now for the second question Chef can pick first <b>3</b> elements for his frame,
and will have <b>3</b> elements equal <b>1</b>.</p>
