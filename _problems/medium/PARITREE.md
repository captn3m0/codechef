---
{"category_name":"medium","problem_code":"PARITREE","problem_name":"Parity tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kevinsogo","date_added":"9-02-2016","tags":{"0":"admin2","1":"bicolor","2":"disjoint","3":"graph","4":"march16","5":"medium","6":"xor"},"editorial_url":"http://discuss.codechef.com/problems/PARITREE","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/PARITREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/PARITREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/PARITREE.pdf">Vietnamese</a> as well.</h3>
<p>
You are given a tree consisting of <b>n</b> nodes numbered from <b>1</b> to <b>n</b>. The weights of edges of the tree can be any <b>binary</b> integer satisfying following <b>Q</b> conditions.</p>
<ul>
<li>
		Each condition is of form <b>u, v, x</b> where <b>u, v</b> are nodes of the tree and <b>x</b> is a binary number. <br />
		For satisfying this condition,  sum of the weight of all the edges present in the path from node <b>u</b> to <b>v</b> of the tree, should have even if <b>x = 0</b>, odd otherwise.
	</li>
</ul>

<p>
Now, you have to find out number of ways of assigning <b>0/1</b> (binary) weights to the edges of the tree satisfying the above conditions.<br />
As the answer could be quite large, print your answer modulo <b>10<sup>9</sup> + 7</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases.</li>
<li>For each test case:
<ul>
<li>First line contains two space separated integers <b>n, Q</b>.</li>
<li>Each of the next <b>n - 1</b> lines will contain two space separated integer  <b>u, v</b> denoting that there is an edge between vertex <b>u</b> and <b>v</b> in the tree.</li>
<li>Each of the next <b>Q</b> lines will contain three space separated integer  <b>u, v, x</b> denoting a condition as stated in the probelm.</li>
</ul>
</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single integer corresponding to the answer of the problem.
</li></ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>u, v</b> ≤ <b>n</b></li>
<li>0 ≤ <b>x</b> ≤ <b>1</b></li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (10 points)</b></p>
<ul>
<li>Sum of each of variables <b>n</b> and <b>Q</b> over all the test cases ≤ <b>20</b></li>
</ul>

<p>
<b>Subtask #2 : (20 points)</b></p>
<ul>
<li>Sum of each of variables <b>n</b> and <b>Q</b> over all the test cases ≤ <b>100</b></li>
</ul>

<p>
<b>Subtask #3 : (30 points)</b></p>
<ul>
<li>Sum of each of variables <b>n</b> and <b>Q</b> over all the test cases ≤ <b>5000</b></li>
</ul>

<p>
<b>Subtask #4 : (40 points)</b></p>
<ul>
<li>Sum of each of variables <b>n</b> and <b>Q</b> over all the test cases ≤ <b>100000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3 2
1 2
1 3
1 2 0
1 3 0
3 0
1 2
2 3
3 1
1 2
2 3
1 2 1

<b>Output:</b>
1
4
2
</pre><h3>Explanation</h3>
<p><b>In the first example</b>,<br />
You can only set the weight of each edge equal to 0 for satisfying the given condition. So, there is exactly one way of doing this. Hence answer is 1.
</p>
<p><b>In the second example</b>,<br />
There are two edges and there is no condition on the edges. So, you can assign them in 4 ways.
</p>
<p><b>In the third example</b>,<br />
You have to assign the weight of edge between node 1 and 2 to 1. You can assign the remaining edge from 2 to 3 either 0 or 1. So, the answer is 2.
</p>
