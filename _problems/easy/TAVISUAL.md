---
{"category_name":"easy","problem_code":"TAVISUAL","problem_name":"The Ball And Cups","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"anton_lunyov","date_added":"26-01-2013","tags":{"0":"ad","1":"cakewalk","2":"cook32","3":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAVISUAL","time":{"view_start_date":1364150220,"submit_start_date":1364150220,"visible_start_date":1364150220,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
At the end of a busy day, The Chef and his assistants play a game together. The game is not just for fun but also used to decide who will have to clean the kitchen. The Chef is a Game Master, so his concern is how to manage the game but not how to win the game like his assistants do.
</p>
<p>
The game requires players to find the only ball under one of the <b>N</b> cups after their positions are changed in a special way. At the beginning of the game, The Chef places <b>N</b> cups in a row and put a ball under the <b>C</b>-th cup from the left (the cups are numbered from <b>1</b> to <b>N</b>). All players can see the initial position of the ball. Then Chef performs <b>Q</b> flip operations. Each flip operation is defined by two integers <b>L</b> and <b>R</b> such that <b>1 ≤ L ≤ R ≤ N</b> and consists in reversing the segment <b>[L, R]</b> of cups. Namely, Chef swaps <b>L</b>-th and <b>R</b>-th cups, <b>(L+1)</b>-th and <b>(R−1)</b>-th cups, and so on. After performing all the operations Chef asks his assistants to choose a cup that they think the ball is under it. Who can guess the position of the ball will win the game, and of course, the others will have to clean the kitchen.
</p>
<p>
The Chef doesn't want to check all the <b>N</b> cups at the end of the game. He notes down the value of <b>C</b> and the pairs <b>(L, R)</b> and asked you, the mastered programmer, to determine the cup that contains the ball.
</p>
<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains three space-separated integers <b>N</b>, <b>C</b> and <b>Q</b>, denoting the total number of cups, the initial position of the ball and the number of flip operations Chef will perform. Each of the following <b>Q</b> lines contains two space-separated integers <b>L</b> and <b>R</b>, denoting the ends of the segment of the current flip operation.
</p>
<h3>Output</h3>
<p>
For each test case output on a separate line the final position of the ball.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10000</b> (<b>10<sup>4</sup></b>)</li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 2 3
1 4
3 5
1 5

<b>Output:</b>
1
</pre><h3>Explanation</h3>
<p>
The row of cups at the beginning of the game and after each flip is shown below. Here <b>'-'</b> means an empty cup and <b>'B'</b> is the cup that hides the ball, the segment of flip is marked bold.</p>
<pre><code>
<b>-B--</b>-
--<b>B--</b>
<b>----B</b>
B----
</code></pre>
