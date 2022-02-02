---
{"category_name":"hard","problem_code":"SEZ","problem_name":"Special Economic Zone","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cgy4ever","problem_tester":"kevinsogo","date_added":"20-04-2015","tags":{"0":"cgy4ever","1":"lp","2":"may15","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/SEZ","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/SEZ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/SEZ.pdf">Russian</a>.</h3>
<p>Fox Ciel is the queen of Fox Kingdom. There are <b>n</b> cities and <b>m</b> bidirectional roads between them. Two cities are called neighbours if there is a road between them. She wants to select some of the cities to establish as SEZs (Special Economic Zones). Also she must ensure that no two neighbouring cities are SEZ's as it will hinders growth of both the cities.</p>
<p>
People in SEZ will be happy due to huge employments opportunities. People living in a non SEZ city and having at least one neighbouring SEZ city will be unhappy due to jealousy. </p>
<p></p><p>
Let <b>x</b> be the number of happy cities and <b>y</b> be the number of unhappy cities. Ciel's goal is to maximize the value of <b>(x - y)</b>. Please output the maximal value of <b>(x - y)</b>.
</p>
<h3>Input</h3>
<ul>
<li>There will be exactly one test case in a single test file. </li>
<li>The first line will contain two space separated integers <b>n</b> and <b>m</b>. </li>
<li>In the next <b>m</b> lines, each line will contain two space integers <b>u, v</b> denoting that there is a road between city <b>u</b> and <b>v</b>.</li>
<h3>Output</h3>
<p>
Print a single integer corresponding to the maximal value of <b>(x - y)</b>.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ n ≤ 200 </b></li>
<li><b>1 ≤ m ≤ 400 </b></li>
<li>There won't be any self-loop or repeated edges. </li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>5%: n &lt;= 20 </li>
<li>95%: no other constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6 5
1 2
2 3
4 5
5 6
6 4

<b>Output:</b>
1
</pre><h3>Explanation</h3>
<p>Ciel will select city <b>1</b> and <b>3</b> as SEZ. So <b>x = 2</b> (city <b>1</b> and <b>3</b>), <b>y = 1</b> (city <b>2</b>), <b>x - y = 1</b>.</p>
</ul>