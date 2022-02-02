---
{"category_name":"easy","problem_code":"CAPPLE","problem_name":"Chef and Apple Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"shiplu","date_added":"14-10-2014","tags":{"0":"ad","1":"cakewalk","2":"dec14","3":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/CAPPLE","time":{"view_start_date":1418643028,"submit_start_date":1418643028,"visible_start_date":1418643000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/CAPPLE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/CAPPLE.pdf">Russian</a>.</h3>
<p>Chef loves to prepare delicious dishes. This time, Chef has decided to prepare a special dish for you, and needs to gather several apples to do so.</p>
<p>Chef has <b>N</b> apple trees in his home garden. Each tree has a certain (non-zero) number of apples on it. In order to create his dish, Chef wants to pluck every apple from every tree.</p>
<p>Chef has an unusual method of collecting apples. In a single minute, he can perform the following task:</p>
<ul>
<li>Pick any subset of trees such that every tree in the subset has the same number of apples.</li>
<li>From each tree in the subset, pluck any number of apples, as long as the number of apples left on the tree equals the number of apples on a tree not in the subset.</li>
</ul>

<p>If all trees have the same number of apples left, Chef can pluck all of the apples remaining in a single minute.</p>
<p>Chef does not want to keep you waiting, so wants to achieve this task in the minimum possible time. Can you tell him what the minimum time required is?</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. This will be followed by <b>T</b> test cases. The first line of each test case contains a single integer <b>N</b> denoting the number of apple trees in Chef's garden. The next line of each test case contains <b>N</b> space separated integers denoting the number of apples on each tree.</p>
<h3>Output</h3>
<p>For each of the <b>T</b> test cases, output a single line - the minimum time to pluck all apples from all trees.</p>
<h3>Constraints</h3>
<ul>
<li>1 &lt;= <b>T</b> &lt;= 10</li>
<li>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup></li>
<li>1 &lt;= Number of apples on a tree &lt;= 10<sup>5</sup></li>
</ul>
<h3>Scoring</h3>
<ul>
<li>Subtask 1 : 1 &lt;= <b>T</b> &lt;= 10 , 1 &lt;= <b>N</b> &lt;=  10<sup>3</sup>: <b> (27 pts) </b> </li>
<li>Subtask 2 : 1 &lt;= <b>T</b> &lt;= 10 , 1 &lt;= <b>N</b> &lt;=  10<sup>4</sup>: <b> (25 pts) </b> </li>
<li>Subtask 3 : 1 &lt;= <b>T</b> &lt;= 10 , 1 &lt;= <b>N</b> &lt;=  10<sup>5</sup>: <b> (48 pts) </b> </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
2
3
3 3 3
4
1 2 3 3

<b>Output</b>
1
3
</pre><h3>Explanation</h3>
<p>For test 1, Chef can select all the trees and can pluck all the apples in 1 minute.</p>
<p>For test 2, there are many ways Chef can pluck all of the apples in 3 minutes. Here is one example: </p>
<ul>
<li>First minute: Select the third and fourth trees. Pluck 1 apple from the third tree, and 2 apples from the fourth tree.</li>
<li>Second minute: Select the second and third tree. Pluck 1 apple from each tree.</li>
<li>Third minute: Select all of the trees and pluck the last apple from each tree.</li>
</ul>
