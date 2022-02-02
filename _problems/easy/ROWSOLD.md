---
{"category_name":"easy","problem_code":"ROWSOLD","problem_name":"Bear and Row 01","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"3-04-2017","tags":{"0":"april17","1":"errichto","2":"greedy"},"editorial_url":"https://discuss.codechef.com/problems/ROWSOLD","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/ROWSOLD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/ROWSOLD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/ROWSOLD.pdf">Vietnamese</a> as well.</h3>

<p>Limak is a little polar bear.
He is playing a video game and he needs your help.</p>

<p>There is a row with N cells, each either empty or occupied by a soldier, denoted by '0' and '1' respectively.
The goal of the game is to move all soldiers to the right (they should occupy some number of rightmost cells).</p>

<p>The only possible command is choosing a soldier and telling him to move to the right as far as possible.
Choosing a soldier takes 1 second, and a soldier moves with the speed of a cell per second.
The soldier stops immediately if he is in the last cell of the row or the next cell is already occupied.
Limak isn't allowed to choose a soldier that can't move at all (the chosen soldier must move at least one cell to the right).</p>

<p>Limak enjoys this game very much and wants to play as long as possible.
In particular, he doesn't start a new command while the previously chosen soldier moves.
Can you tell him, how many seconds he can play at most?</p>



<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>
The only line of each test case contains a string <b>S</b> describing the row with N cells.
Each character is either '0' or '1', denoting an empty cell or a cell with a soldier respectively.
</p>



<h3>Output</h3>

<p>For each test case, output a single line containing one integer — the maximum possible number of seconds Limak will play the game.</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ N ≤ 10<sup>5</sup> (N denotes the length of the string <b>S</b>)</li>
</ul>



<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (25 points): 1 ≤ N ≤ 10</li>
<li>Subtask #2 (25 points): 1 ≤ N ≤ 2000</li>
<li>Subtask #3 (50 points): Original constraints.</li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
4
10100
1100001
000000000111
001110100011010

<b>Output:</b>
8
10
0
48
</pre>


<h3>Explanation</h3>

<p><b>Test case 1.</b>
The initial string is 10100.
There are N = 5 cells.
There is one soldier in the first cell, and one soldier in the third cell.
The following scenario maximizes the total time:</p>

<ul>
<li>Limak chooses the soldier in the first cell.
This soldier can move only one cell to the right.
It takes 1 second to choose a soldier and 1 second for a soldier to move to the next cell (2 seconds in total).
The string is 01100 now.</li>
<li>Limak has only one choice.
He must choose the soldier in the third cell because the other soldier can't move at all (the soldier in the second cell can't move to the right because the next cell is already occupied).
Choosing a soldier takes 1 second.
The chosen soldier moves from the third cell to the fifth cell, which takes 2 seconds.
This operation takes 1 + 2 = 3 seconds in total.
The string is 01001 now.</li>
<li>Limak has only one choice again.
Since the soldier in the last row can't move further to the right, the soldier in the second cell must be chosen.
He will move 2 cells to the right.
This operation takes 1 + 2 = 3 seconds in total.
The string become 00011 and the game is over.</li>
</ul>

<p>The total time is 2 + 3 + 3 = 8.</p>

<p><b>Test case 2.</b>
The initial string is 1100001.
There is only one possible scenario:</p>

<ul>
<li>1100001 is changed to 1000011 in 5 seconds (1 second to choose a soldier and 4 seconds for the soldier to move 4 cells to the right).</li>
<li>1000011 is changed to 0000111 in 5 seconds.
</ul>

<p>The total time is 5 + 5 = 10 seconds.</p>

<p><b>Test case 3.</b>
The game is over immediately because all soldiers occupy rightmost cells already.
The answer is 0.</p>