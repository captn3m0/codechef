---
{"category_name":"medium","problem_code":"CHEFDIV","problem_name":"Chef and Divisor Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"saluja123","problem_tester":null,"date_added":"23-02-2017","tags":{"0":"april17","1":"saluja123"},"editorial_url":"https://discuss.codechef.com/problems/CHEFDIV","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/CHEFDIV.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/CHEFDIV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/CHEFDIV.pdf">Vietnamese</a> as well.</h3>

<p>Chef has defined a new type of rooted tree - <i>divisor tree</i>. In this tree, every node has a positive integer written on it. It follows some rules:</p>
<ul>
<li>The root can have any positive integer written on it.</li>
<li>Suppose a node has the integer A written on it, and suppose A has k <a href = "http://mathworld.wolfram.com/ProperDivisor.html">proper divisors</a>. [Note: Proper divisors of an integer are all its divisors except the integer itself. 1 has no proper divisor] Then this node will have exactly k child nodes, and each of A's proper divisors will be written on exactly one of the child nodes. For example, a node with number 12 written on it would have children with the numbers 1, 2, 3, 4, and 6 written on them.</li>
</ul>
<p></p>
<p>You can observe that the nodes have 1 written on them, if and only if, they are leaves. </p>

<p>The score of a path in this tree is defined as the sum of degrees of all of the nodes in the path. The Score of the tree is defined as the maximum score of a path <b>from the root to one of the leaves</b>.</p>

<p>You are given two integers <b>A, B</b>. You want to find the sum of Scores of all the <i>divisor trees</i> which have n written on their root, where <b>A</b> ≤ n ≤ <b>B</b>.</p>

<h3>Input</h3>
<p>The only line of the input contains two space separated integers <b>A</b> and <b>B</b> respectively.</p>

<h3><b>Output</b></h3>
<p>Output a single integer corresponding to the answer of the problem.</p>


<h3 >Constraints</h3>
<ul>
<li>1 ≤ <b> A</b> ≤ <b>B</b>  ≤ 10<sup>12</sup></b></li> 
<li> <b>B - A </b> < 10<sup>5</sup>  </li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (10 points):</b>
<ul>
<li>1 ≤ <b> A</b> ≤ <b>B</b>  ≤ 50</b></li>
</ul>
</p>

<p>
<b>Subtask #2 (25 points):</b>
<ul>
<li>1 ≤  <b>A</b> ≤ <b>B</b>  ≤ 10<sup>6</sup></b></li>
<li> <b>B - A</b> < 10<sup>5</sup> </b>  </li>
</ul>
<p>

<p>
<b>Subtask #3 (25 points):</b>
<ul>
<li> <b> A = B  </b></li>
</ul>
</p>

<p>
<b>Subtask #4 (40 points):</b>
<ul>
<li>Original constraints.</li> 
</ul>
</p>


<h3>Example</h3>
<pre><b>Input 1:</b>
11 12

<b>Output 1:</b>
14
</pre>

<pre><b>Input 2:</b>
932451 935212

<b>Output 2:</b>
101245
</pre>

<h3> <b> Explanation </b> </h3>
<p>
<b>Input 1.</b>
<p>
Here we have, <b>A</b> = 11 and <b>B</b> = 12.
</p>

<p>
The Score of the <i>divisor tree</i> which has 12 written on its root is 12. This because the path 12 -> 6 -> 3 -> 1  (look at the figure below) has sum of the degrees of all nodes in it = 5 + 4 + 2 + 1 = 12. This is the maximum score of a path among all paths from root to the leaves. Hence, the Score of this tree is 12.
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/APRIL17/chefdiv.png" style="width:100%;"/>
</p>
<p>
Note that in the figure, the nodes are denoted by (value written on it, degree of node), and the leaves are marked green.
</p>



<p>
You can find that the score of divisor tree which has 11 written on its root is 2. </p>

<p>Hence, answer will be 12 + 2 = 14.</p>