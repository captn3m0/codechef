---
{"category_name":"hard","problem_code":"TUPLES","problem_name":"Coprime 6-tuples","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"iscsi","date_added":"8-12-2016","tags":{"0":"fft","1":"hard","2":"jan17","3":"kevinsogo","4":"mobius_function","5":"number","6":"primitive"},"editorial_url":"https://discuss.codechef.com/problems/TUPLES","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/TUPLES.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/TUPLES.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/TUPLES.pdf">Vietnamese</a> as well.</h3>

<p>There are <b>N</b> integers <b>X<sub>1</sub></b>, <b>X<sub>2</sub></b>, ..., <b>X<sub>N</sub></b>.</p>

<p>Let's define <b>Y<sub>i,j</sub> = X<sub>i</sub> × X<sub>j</sub> mod 359999</b>.</p>

<p>How many integer 6-tuples <b>(a, b, c, d, e, f)</b> are there such that:</p>

<p>
<ul>
<li><b>1 ≤ a, b, c, d, e, f ≤ N</b></li>
<li><b>gcd(Y<sub>a, b</sub>, Y<sub>c, d</sub>, Y<sub>e, f</sub>) = 1</b></li>
</ul>
</p>

<p>We define <b>gcd(0, 0) = 0</b>.</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b>.</p>
<p>The second line contains <b>N</b> integers separated by single spaces: <b>X<sub>1</sub></b>, <b>X<sub>2</sub></b>, ..., <b>X<sub>N</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer. Since the answer can be very large, only output it modulo <b>10<sup>9</sup> + 7</b>.</p>


<h3>Constraints</h3>

<ul>
<li><b>1 ≤ T ≤ 3</b></li>
<li><b>1 ≤ X<sub>i</sub> ≤ 10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (47 points):</b>
<ul>
<li><b>1 ≤ N ≤ 10<sup>3</sup></b></li>
</ul> 
<p></p>
<b>Subtask #2 (53 points):</b>
<ul>
<li><b>1 ≤ N ≤ 10<sup>6</sup></b></li>
<li>The sum of the <b>N</b>s is <b>≤ 10<sup>6</sup></b></li>
</ul> 

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
3
300 3000 30000
</tt>
<b>Output:</b>
<tt>234</tt>
</pre>
