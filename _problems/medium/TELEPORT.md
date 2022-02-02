---
{"category_name":"medium","problem_code":"TELEPORT","problem_name":"Teleports","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":"melfice","date_added":"26-05-2017","tags":{"0":"gainullinildar","1":"ltime48","2":"medium","3":"segment","4":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/TELEPORT","time":{"view_start_date":1495899840,"submit_start_date":1495899840,"visible_start_date":1495899840,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/mandarin/TELEPORT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/russian/TELEPORT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/vietnamese/TELEPORT.pdf">Vietnamese</a> as well.</h3>

<p>Teleports are magical devices. If there is a teleport located at point (x, y) and has radius <b>R</b>, then it can transport a person from any point (a, b) such that |x-a|+|y-b| ≤ <b>R</b> to any point (c, d) such that |x-c|+|y-d| ≤ <b>R</b>.</p>

<p>Initially there are no teleports. You need to process operations of two types:</p>
<ul>
<li>Add a new teleport at the location (<b>x</b>, <b>y</b>)</li>
<li>Report whether it is possible to reach teleport <b>j</b> from teleport <b>i</b>, where by teleport <b>i</b>, we mean the teleport added during the i-th operation</li>
</ul>
<p></p>
<p>Note that you can transport from a teleport to a location which does not contain a teleport as well.</p>
 
<h3>Input</h3>
 <ul>
<li>The first line of the input contains two integers, <b>Q</b>, and <b>R</b>, denoting the total number of operations and the radius of each teleport.</li>

<li>The i-th of the next <b>Q</b> lines contains one operation, which will be one of the following two types:</p>

<ul>
<li>+ <b>x y</b> — add a new teleport at location (<b>x</b>, <b>y</b>). This teleport will be called teleport i.</li>
<li>? <b>i j</b> — Report whether it is possible to reach teleport <b>j</b> from teleport <b>i</b></li>
</ul>
</li>
</ul>
 
<h3>Output</h3>
 
<p>For each operation, output a single line containing "DA" (without quotes) if we can reach teleport <b>j</b> from teleport <b>i</b> or "NET" (without quotes) otherwise.</p>
 
 
<h3>Constraints</h3>
 
<ul>
<li>1 ≤ <b>Q</b>, <b>R</b>, <b>x</b>, <b>y</b> ≤ 100,000</li>
<li> It is guaranteed that all operations are valid. In particular, if there is an operation of the form ? i j, then it is guaranteed that the i-th and j-th operations were insert operations.</li>
</ul>
 
 
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): 1 ≤ <b>Q</b> ≤ 2000</li>
<li>Subtask #2 (70 points): Original constraints.</li>
</ul>
 
<h3>Example</h3>
<pre><b>Input:</b>
5 1
+ 2 2
+ 3 3
? 1 2
+ 100 3
? 2 4

<b>Output:</b>
DA 
NET
</pre>
 
 
<h3>Explanation</h3>
 
<p>The first two operations make us add teleports at the locations (2, 2) and (3, 3).</p>
<p> Then, we need to find if the 2nd teleport can be reached from the 1st teleport. From teleport at (2, 2) we can reach the point (2, 3) (because |2-2|+|2-3| <=1), and then from the point (2, 3) we can go to (3, 3) by using the teleport at (3, 3) (because |2-3|+|3-3| <= 1). Hence, the answer is DA.</p>
<p> Then we add teleport 4 at (100, 3).</p>
<p> In the last operation, we are asked whether we can reach the teleport at (100, 3) from the teleport at (3, 3). We cannot, and hence the answer is NET.</p>