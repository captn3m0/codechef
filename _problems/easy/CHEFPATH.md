---
{"category_name":"easy","problem_code":"CHEFPATH","problem_name":"Chef And Magical Path","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":"xcwgf666","date_added":"3-03-2016","tags":{"0":"april16","1":"hamiltonian","2":"prateekg603","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFPATH","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/CHEFPATH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/CHEFPATH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/CHEFPATH.pdf">Vietnamese</a> as well.</h3>
<p>
Chef is stuck in a two dimensional maze having <b>N</b> rows and <b>M</b> columns. He needs to get out of the maze as soon as possible and arrive at the kitchen in order to serve his hungry customers. But, he can get out of the maze only if he is able to successfully find any <em>magical</em> path in the given maze.
</p>
<p>
A path is defined as <em>magical</em> if it starts from any of the cell <b>(a,b)</b> of the maze and ends at the cell <b>(c,d)</b> such that the following conditions are satisfied :-</p>
<ul>
<li><b>|a - c| + |b - d| = 1</b></li>
<li>All the cells in the maze are traversed exactly once.</li>
<li>It is allowed to move only in the four directions - up, down, left and right from the current cell.</li>
</ul>

<h3>Input</h3>
<ul>
<li>First line of the input contains an integer <b>T</b> denoting the number of different types of scenarios.</li>
<li>Each of the next <b>T</b> lines will contain two integers <b>N, M</b> denoting the dimensions of the maze.</li>
</ul>
<h3>Output</h3>
<p>For each of the <b>T</b> scenarios, output a single line containing "<b>Yes</b>" or "<b>No</b>" (without quotes) denoting whether the Chef can get out of the maze or not.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (30 points)</b></p>
<ul>
<b>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li>1 ≤ N, M ≤ 10</li>
<p></p></b>
</ul>

<p>
<b>Subtask #2 : (70 points) </b><br /><br />
Original Constraints
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
2 2

<b>Output:</b>
Yes
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
Chef can start from (1,1), move down to (2,1), then move right to (2,2) and finally move upwards to reach (1,2). As, he is able to visit all the cells exactly once and sum of absolute differences of corresponding x and y dimension is 1, we can call this path a <i>magical</i> path.
</p>
