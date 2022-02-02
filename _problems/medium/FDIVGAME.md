---
{"category_name":"medium","problem_code":"FDIVGAME","problem_name":"Floor Division Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"kevinsogo,xcwgf666,antoniuk1","date_added":"25-05-2016","tags":{"0":"combinatorial","1":"easy","2":"game","3":"kevinsogo","4":"snckql16","5":"sprague"},"editorial_url":"http://discuss.codechef.com/problems/FDIVGAME","time":{"view_start_date":1464708600,"submit_start_date":1464708600,"visible_start_date":1464708600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/mandarin/FDIVGAME.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/russian/FDIVGAME.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/vietnamese/FDIVGAME.pdf">Vietnamese</a> as well.</h3>
<p>Henry and Derek are waiting on a room, eager to join the Snackdown 2016 Qualifier Round. They decide to pass the time by playing a game.  </p>
<p>In this game's setup, they write <b>N</b> positive integers on a blackboard. Then the players take turns, starting with Henry. In a turn, a player selects one of the integers, divides it by 2, 3, 4, 5 or 6, and then takes the <b>floor</b> to make it an integer again. If the integer becomes 0, it is erased from the board. The player who makes the last move wins.  </p>
<p>Henry and Derek are very competitive, so aside from wanting to win Snackdown, they also want to win this game. Assuming they play with the optimal strategy, your task is to predict who wins the game.  </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of integers they wrote on the board. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the integers themselves.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing either “<tt>Henry</tt>” or “<tt>Derek</tt>” (without quotes), denoting the winner of the game.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2
3 4
3
1 3 5
</tt>

<b>Output:</b>
<tt>Henry
Derek
</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In this test case, the numbers on the board are [3,4]. Henry can win by selecting 4 and then dividing it by 2. The integers on the board are now [3,2]. Derek now has a couple of choices:</p>
<ul>
<li>Derek can divide 2 by 3, 4, 5 or 6, making it 0 and removing it. Now only one integer remains on the board, 3, and Henry can just divide it by 6 to finish, and win, the game.</li>
<li>Derek can divide 3 by 4, 5 or 6, making it 0 and removing it. Now only one integer remains on the board, 2, and Henry can just divide it by 6 to finish, and win, the game.</li>
<li>Derek can divide 2 by 2. Now the integers are [1,3]. Henry can respond by dividing 3 by 3. The integers are now [1,1]. Now Derek has no choice but to divide 1 by 2, 3, 4, 5 or 6 and remove it (because it becomes 0). Henry can respond by dividing the remaining 1 by 2 to finish, and win, the game.</li>
<li>Derek can divide 3 by 2 or 3. Now the integers are [1,2]. Henry can respond by dividing 2 by 2. The integers are now [1,1]. This leads to a situation as in the previous case and Henry wins.</li>
</ul>
