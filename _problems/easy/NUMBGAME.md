---
{"category_name":"easy","problem_code":"NUMBGAME","problem_name":"Number Game","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"13-12-2017","tags":{"0":"acm17kgp","1":"balajiganapath","2":"dfs","3":"graph","4":"kgp17rol","5":"medium","6":"number"},"editorial_url":"https://discuss.codechef.com/problems/NUMBGAME","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are playing a game with a robot. The game starts with two integers: <b>A</b> and <b>M</b>. The robot makes exactly one move in the entire game, and it does so at the very beginning - it will remove exactly 1 digit from <b>A</b> and output it as the starting value (say <i>X</i>). Note that the value <b>A</b> remains intact. It is not changed by the robot. After the robot makes its moves, it is your turn. You can make an unlimited number of moves. In each move, you must remove exactly 1 digit from A and append it to <i>X</i> (to the right side of X). Again note that none of your moves change the value of <b>A</b>. You win if you can eventually make X a multiple of M (i.e. X mod M = 0). How many possible starting moves bot can make such that you are guaranteed to win assuming you play optimally?</p>
<p>
Here is an example of a game:
Suppose the numbers are <b>A</b> = 1003, <b>M</b> = 4. The robot can make four possible starting moves: 003 by removing 1st digit, 103 by removing 2nd or 3rd digit (both count as a separate possibilities even though the starting X will be same) or 100 by removing the 4th digit.
Let us say the robot chooses 003 as the starting move. Then you can win by appending 100 (by removing the 4th digit) making X = 003100 which is divisible by 4.
</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows</li>
<li>The only line of each test case contains 2 integers <b>A</b> and <b>M</b>.</li>
</ul>


<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the number of possible first moves that the robot can make such that you can force a win.</li>
</ul>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>10</b> ≤ <b>A</b> &lt; <b>10<sup>10<sup>6</sup></sup></b> (i.e. The number of digits in <b>A</b> can be upto 10<sup>6</sup>) </li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li>The sum of number of digits of <b>A</b> over all test cases will not exceed <b>5 * 10^6</b>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
1003 4
11 4
2004 3
123 1
100000 27

<b>Output:</b>
4
0
4
3
6
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1:</b> Whatever the robot's starting move is, you can win by appending 100</p>
<p><b>Testcase 2:</b> It is not possible to win, whatever the starting move of the robot </p>