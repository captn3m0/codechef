---
{"category_name":"easy","problem_code":"CHEFELEC","problem_name":"Chefland and Electricity","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"mugurelionut","date_added":"5-06-2016","tags":{"0":"admin2","1":"greedy","2":"july16","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFELEC","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/CHEFELEC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/CHEFELEC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFELEC.pdf">Vietnamese</a> as well.</h3>
<p>There are <b>n</b> villages in a Chefland. Some of the villages have electricity facilities, other doesn't. You can consider the villages arranged in line in the order <b>1</b> to <b>n</b> from left to right. i-th of village can be considered at <b>x<sub>i</sub></b> coordinates.</p>
<p>
Chef decided that electricity should be provided to all the villages. So, he decides to buy some amount of electric wires to connect the villeges without electricity to some villages with electricity. As Chef does not want to spend too much amount of money on wires, can you find out minimum amount of length of wire Chef should buy.
</p>
<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>First line of each test case contains an integer <b>n</b> denoting number of villages in Chefland.</p>
<p>Second line will contain a string of length <b>n</b> containing '0' or '1's only. If i-th character of the string is '1', then it denotes that i-th village has electricity.</p>
<p>Next line contains <b>n</b> space separated integers denoting the <b>x</b> coordinates of the villages in the order from village <b>1</b> to n</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a integer corresponding to the minimum length of wire Chef needs to buy.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li>It is guaranteed that there will be at least one village which will have electricity.</li>
<li><b>1 ≤ x<sub>1</sub> &lt;  x<sub>2</sub> &lt;  ... &lt; x<sub>n</sub> ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : 30 points</b></p>
<ul>
<li><b>1 ≤ N ≤ 1000</b></li>
</ul>

<p>
<b>Subtask #2 : 70 points</b></p>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
2
2
01
1 2
3
100
1 5 6
<b>Output:</b>
1
5
</pre><h3>Explanation</h3>
<p><b>In the first example</b>, first village does not have electricity. If we put a wire between village 1 and 2 of length 1, then both the villages will have electricity.
</p>
<p><b>In the second example</b>,<br />
We can a draw a wire from first village to third village, passing through second village. Its total length will be 5. Now all the villages will have electricity. This is the minimum length of wire you will require.
</p>
