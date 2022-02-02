---
{"category_name":"medium","problem_code":"TREEPROD","problem_name":"Product on Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"pushkarmishra","date_added":"13-11-2015","tags":{"0":"amitpandeykgp","1":"dfs","2":"dynamic","3":"ltime30","4":"tree"},"editorial_url":"http://discuss.codechef.com/problems/TREEPROD","time":{"view_start_date":1448785800,"submit_start_date":1448785800,"visible_start_date":1448785800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/mandarin/TREEPROD.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/russian/TREEPROD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/vietnamese/TREEPROD.pdf"> Vietnamese</a></h3>


<p>
Chef is going to leave his home town and shift to a new city. The new city contains exactly <b>N</b> houses. There are roads connecting the houses in such a way that there is exactly one way to go from a house to any other house. Length of each of the roads is known to Chef.
</p>
<p>
Chief is doing a lot of research before shifting to the new city. He wants to know how many pairs of houses (a,b) are there, such that if we multiply length of all the roads on the path from a to b, the product will be divisible by <b>M</b>.
</p>

<h3>Input</h3>
<ul>
<li>
First line of the input contains a pair of  integers <b>N</b> and <b>M</b>, where <b>N</b> denotes the number of houses.  
</li>
<li>
Each of the next <b>(N-1)</b> lines contains a triplet of numbers (a,b,c) which will denote that the length of the road between houses <b>a</b> and <b>b</b> is <b>c</b>.
</li>
</ul>

<h3>Output</h3>
A single integer denoting the number of pair of houses. 


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ M ≤ 500</li>
<li>1 ≤ weight of the road ≤ 10<sup>9</sup></b></li>
</ul>
<br />
<b>Subtask #1: 20 points</b>
<ul>
	<li><b>1 ≤ N ≤ 10<sup>5</sup></li>
	<li>M is a prime</b></li>
</ul>
<b>Subtask #2: 20 points</b>
<ul>
	<li><b>1 ≤ N ≤ 1000</b></li>
</ul>
<b>Subtask #3: 60 points</b>
<ul>
	<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 3 4
1 2 4
1 4 4

<b>Output:</b>
6
</pre>

<h3>Explanation</h3>
If we multiply the lengths of the roads on the path between any pair of the vertices, it will be divisible by 2.
