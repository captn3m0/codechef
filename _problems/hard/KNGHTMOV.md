---
{"category_name":"hard","problem_code":"KNGHTMOV","problem_name":"Knight Moving","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":9,"source_sizelimit":50000,"problem_author":"anhdq","problem_tester":"laycurse","date_added":"20-07-2012","tags":{"0":"anhdq","1":"dynamic","2":"gauss","3":"number","4":"sep12"},"editorial_url":"http://discuss.codechef.com/problems/KNGHTMOV","time":{"view_start_date":1347355996,"submit_start_date":1347355996,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Consider an infinitely large chess table.
From the cell (0, 0), our knight has to move to the cell (<b>X</b>, <b>Y</b>) by the rule:
our knight could only move from a cell (<b>u</b>, <b>v</b>) to the cell (<b>u</b>+<b>A<sub>X</sub></b>, <b>v</b>+<b>A<sub>Y</sub></b>) or (<b>u</b>+<b>B<sub>X</sub></b>, <b>v</b>+<b>B<sub>Y</sub></b>) in one move.
Note that it may be different from ordinary knight's move of chess.
</p>

<p>In addition, there is <b>K</b> blocked cell(s) on the table where the knight could not move on.</p>

<p>
Your task is to count how many distinct ways the knight could complete his mission.
Two ways are called "distinct" if and only if they have different numbers of steps or there exists <b>i</b> such that they are in different cells after <b>i</b>-th step.
Note that our knight may continue to move after he reaches the cell (<b>X</b>, <b>Y</b>).
</p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b>, denoting the number of test cases. Each test case is described as follows:</p>
<ul>
<li>The first line contains 3 integer <b>X</b>, <b>Y</b>, <b>K</b>.</li>
<li>The second line contains 4 integers <b>A<sub>X</sub></b>, <b>A<sub>Y</sub></b>, <b>B<sub>X</sub></b>, <b>B<sub>Y</sub></b>.</li>
<li>The third line contains <b>K</b> pair(s) of integers, each represents co-ordinate of a blocked cell. This line does not exist if <b>K</b> = 0.</li>
</ul>

<h3>Output</h3>
<p>
For each test case, output on a line the number of ways found modulo 1000000007 (10<sup>9</sup>+7).
If there are infinitely many ways, then output -1 instead.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 5<br />
0 ≤ <b>K</b> ≤ 15<br />
The absolute values of all other input values are at most 500.<br />
(0, 0) is not a blocked cell.<br />
(<b>X</b>, <b>Y</b>) is not a blocked cell.<br />
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
3
3 3 0
1 2 2 1
9 9 2
1 2 2 1
1 2 6 6
1 1 0
0 0 0 0

<b>Output:</b>
2
4
0


</pre>

<p>
<b>Explanations:</b>
</p>
<p>
In the first and second examples, our knight's move is the similar to ordinary knight's, but only 2 directions are allowed. In the first example, there are 2 ways (0, 0) -&gt; (1, 2) -&gt; (3, 3) and (0, 0) -&gt; (2, 1) -&gt; (3, 3).
</p>
<p>
In the third example, our knight's cannot move toward, so our knight's cannot complete his mission.
</p>