---
{"category_name":"medium","problem_code":"ES","problem_name":"Euler Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":1000,"problem_author":"cgy4ever","problem_tester":null,"date_added":"9-05-2017","tags":{"0":"cgy4ever","1":"hard","2":"june17","3":"number"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/ES.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/ES.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/ES.pdf">Vietnamese</a> as well.</h3>

<p>Compute:</p>
<p> floor[1*e] + floor[2*e] + floor[3*e] + ... + floor[<b>n</b>*e],</p>
<p>where floor[x] is the largest integer that is not greater than x, and e is Euler's number: 2.7182818284...</p>


<h3>Input</h3>
<p>A single line which contains a single integer: <b>n</b>.</p>

<h3>Output</h3>
<p>A single line which contains a single integer which should be the answer.</p>

<h3>Constraints</h3>
<b>1</b> ≤ <b>n</b> ≤ <b>10<sup>4000</sup></b>


<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (50 points): <b>1</b> ≤ <b>n</b> ≤ <b>10<sup>100</sup></b>
<li>Subtask #2 (50 points): Original constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3

<b>Output:</b>
15
</pre>
<p> </p>
<h3>Explanation</h3>
<p>
<pre>
floor[1*e] = floor[2.71828..] = 2.
floor[2*e] = floor[5.43656..] = 5.
floor[3*e] = floor[8.15484..] = 8.
So the answer is 2+5+8=15.
</pre>
</p>
<h3>Note</h3>
<p>Source code limit is 1000 bytes.</p>