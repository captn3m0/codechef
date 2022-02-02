---
{"category_name":"easy","problem_code":"EXPTREE","problem_name":"Tree Expectancy","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"melfice","problem_tester":null,"date_added":"27-06-2017","tags":{"0":"combinatorics","1":"july17","2":"math","3":"melfice","4":"numbertheory"},"editorial_url":"https://discuss.codechef.com/problems/EXPTREE","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/EXPTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/EXPTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/EXPTREE.pdf">Vietnamese</a> as well.</h3>


<p>Consider an <a href="https://en.wikipedia.org/wiki/Tree_(graph_theory)#Ordered_tree">ordered tree</a> with <b>N</b> vertices. Your task is to calculate the expected value of the number of vertices having exactly one child in such tree assuming that it is uniformly chosen from the set of all ordered trees of size <b>N</b>. </p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>

<p>Each testcase contains a single integer <b>N</b> for which you should calculate the answer.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing two integers, which are explained below.</p>
<p>Consider the answer to be a proper fraction <b>P</b>/<b>Q</b>, where gcd(<b>P</b>, <b>Q</b>) = 1. Then your task is to output two integers <b>PQ<sup>-1</sup></b> mod 10<sup>9</sup>+7 and <b>PQ<sup>-1</sup></b> mod 10<sup>9</sup>+9.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>It is guaranteed that <b>Q</b> will be invertible with respect to both the modulos.</li>
</ul>

<p></p>


<h3>Subtasks</h3>

<p><b>Subtask #1 (10 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>3</sup></li>
</ul>
</p>

<p><b>Subtask #2 (20 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>6</sup></li>
</ul>
</p>

<p><b>Subtask #3 (30 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>9</sup></li>
</ul>
</p>

<p><b>Subtask #4 (40 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>18</sup></li>
</ul>
</p>


<h3>Example</h3>
<pre><b>Input:</b>
4
1
2
3
4

<b>Output:</b>
0 0
1 1
1 1
400000004 200000003

</pre>
<h3>Explanation</h3>
<p>You can see every possible tree with 1, 2, 3 or 4 vertices on the diagram below.</p>


<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/JULY17/exptree.jpg" height="300"/>
<p></p>

<p>From this you can see that answers for these inputs are 0/1 = 0, 1/1 = 1, (2+0)/2 = 1 and (3+1+1+1+0)/5 = 6/5 correspondingly.</p>