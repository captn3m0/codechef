---
{"category_name":"easy","problem_code":"CHEFYODA","problem_name":"Chef and Yoda","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"omelyanenko","problem_tester":"mgch","date_added":"26-04-2015","tags":{"0":"omelyanenko"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/CHEFYODA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/CHEFYODA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/CHEFYODA.pdf">Vietnamese</a> as well.</h3>

<p> </p>
<p>Chef has arrived in Dagobah to meet with Yoda to study cooking. Yoda is a very busy cook and he doesn't want to spend time with losers. So he challenges the Chef to a series of games, and agrees to teach the Chef if Chef can win at least <b>P</b> of the games. The total number of games is <b>K</b>. The games will be played on a chessboard of size <b>N</b>*<b>M</b>. That is, it has <b>N</b> rows, each of which has <b>M</b> squares. At the beginning of the game, a coin is on square (1, 1), which corresponds to the top-left corner, and every other square is empty. At every step, Yoda and Chef have to move the coin on the chessboard. The player who cannot make a move loses. Chef makes the first move. They can't move the coin to a square where it had been placed sometime before in the game, and they can't move outside chessboard.<br>
<br>
In this game, there are two different sets of rules according to which the game can be played:<br>
-from (x, y) player can move coin to (x+1, y), (x-1, y), (x, y+1), (x, y-1) in his turn, if they are valid squares.<br>
-from (x, y) player can move coin to (x+1, y+1), (x-1, y-1), (x-1, y+1), (x+1, y-1) in his turn, if they are valid squares.<br>
<br>
Before every game, the Power of the kitchen chooses one among the two sets of rules with equal probability of <b>0.5</b>, and the game will be played according to those rules. Chef and Yoda are very wise, therefore they play optimally. You have to calculate the probability that Yoda will teach Chef.<br>
<p> </p>


<h3>Input</h3>
<p>
Input begins with an integer <b>T</b>, the number of test cases<br>
Each test case begins with 4 integers <b>N</b>, <b>M</b>, <b>P</b>, <b>K</b>.
</p>

<h3>Output</h3>
<p>
For each test case, output a line containing the answer for task. The output must have an absolute error at most 0.000001 (10<sup>-6</sup>).  
</p>

<h3>Constraints and Subtasks</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>50</b> </li>
<li> <b>1</b> ≤ <b>K</b> </li>
<br>
<br>
<b> Subtask 1 : 10 points </b> 
<br>
<li> <b>2</b> ≤ <b>N, M</b> ≤ <b>5</b> </li>
<li> <b>0</b> ≤ <b>P</b> ≤ <b>K</b> ≤ <b>5</b> </li>
<br>
<br>
<b> Subtusk 2 : 10 points </b> 
<li> <b>2</b> ≤ <b>N, M</b> ≤ <b>10</b> </li>
<li> <b>0</b> ≤ <b>P</b> ≤ <b>K</b> ≤ <b>10^3</b> </li>
<br>
<br>
<b> Subtusk 3 : 20 points </b> 
<li> <b>2</b> ≤ <b>N, M</b> ≤ <b>100</b> </li>
<li> <b>0</b> ≤ <b>P</b> ≤ <b>K</b> ≤ <b>10^3</b> </li>
<br>
<br>
<b> Subtusk 4 : 60 points</b> 
<li> <b>2</b> ≤ <b>N, M</b> ≤ <b>100</b> </li>
<li> <b>0</b> ≤ <b>P</b> ≤ <b>K</b> ≤ <b>10^6</b> </li>
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 3 2 3
2 2 5 5
<b>Output:</b>
0.500000
1.000000
</pre>