---
{"category_name":"school","problem_code":"LUCKFOUR","problem_name":"Lucky Four","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"23-01-2015","tags":{"0":"cakewalk","1":"ltime21","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/LUCKFOUR","time":{"view_start_date":1424593800,"submit_start_date":1424593800,"visible_start_date":1424593800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME21/mandarin/LUCKFOUR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME21/russian/LUCKFOUR.pdf">Russian</a>.</h3>

<p>Kostya likes the number <b>4</b> much. Of course! This number has such a lot of properties, like:
<ul>
<li>Four is the smallest composite number;</li>
<li>It is also the smallest Smith number;</li>
<li>The smallest non-cyclic group has four elements;</li>
<li>Four is the maximal degree of the equation that can be solved in radicals;</li>
<li>There is four-color theorem that states that any map can be colored in no more than four colors in such a way that no two adjacent regions are colored in the same color;</li>
<li>Lagrange's four-square theorem states that every positive integer can be written as the sum of at most four square numbers;</li>
<li>Four is the maximum number of dimensions of a real division algebra;</li>
<li>In bases 6 and 12, 4 is a 1-automorphic number;</li>
<li>And there are a lot more cool stuff about this number!</li>
</ul>
</p>

<p>Impressed by the power of this number, Kostya has begun to look for occurrences of four anywhere. He has a list of <b>T</b> integers, for each of them he wants to calculate the number of occurrences of the digit <b>4</b> in the decimal representation. He is too busy now, so please help him.</p>

<h3>Input</h3>
<p>The first line of input consists of a single integer <b>T</b>, denoting the number of integers in Kostya's list.</p>

<p>Then, there are <b>T</b> lines, each of them contain a single integer from the list.</p>

<h3>Output</h3>
<p>Output <b>T</b> lines. Each of these lines should contain the number of occurences of the digit <b>4</b> in the respective integer from Kostya's list.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li>(Subtask 1): <b>0</b> ≤ Numbers from the list  ≤ <b>9</b> - 33 points.</li>
<li>(Subtask 2): <b>0</b> ≤ Numbers from the list  ≤ <b>10<sup>9</sup></b> - 67 points.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
447474
228
6664
40
81

<b>Output:</b>
4
0
1
1
0
</pre>
