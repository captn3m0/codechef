---
{"category_name":"easy","problem_code":"FROGV","problem_name":"Chef and Frogs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"10-03-2014","tags":{"0":"berezin","1":"dynamic","2":"july14","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/FROGV","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/FROGV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/FROGV.pdf">Russian</a>.</h3>
<p>Nobody knows, but <b>N</b> frogs live in Chef's garden.</p>
<p>Now they are siting on the X-axis and want to speak to each other. One frog can send a message to another one if the distance between them is less or equal to <b>K</b>. </p>
<p>Chef knows all <b>P</b> pairs of frogs, which want to send messages. Help him to define can they or not! </p>
<p><b>Note</b> : More than 1 frog can be on the same point on the X-axis.</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line contains three integers <b>N</b>, <b>K</b> and <b>P</b>. </li>
<li> The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the x-coordinates of frogs". </li>
<li> Each of the next <b>P</b> lines contains two integers <b>A</b> and <b>B</b> denoting the numbers of frogs according to the input. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each pair print "Yes" without a brackets if frogs can speak and "No" if they cannot. </li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, P</b> ≤ <b>10^5</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub>, K</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>A, B</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 3 3
0 3 8 5 12
1 2
1 3
2 5

<b>Output:</b>
Yes
Yes
No

</pre><p> </p>
<pre>
<h3>Explanation</h3>
<p>For pair <b>(1, 2)</b> frog <b>1</b> can directly speak to the frog <b>2</b> as the distance between them is <b>3 - 0 = 3 &lt;= K </b>. </p>
<p>For pair <b>(1, 3)</b> frog <b>1</b> can send a message to frog <b>2</b>, frog <b>2</b> can send it to frog <b>4</b> and it can send it to frog <b>3</b>.
</p><p>For pair <b>(2, 5)</b> frogs can't send a message under current constraints. </p>
</pre>