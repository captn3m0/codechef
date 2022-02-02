---
{"category_name":"easy","problem_code":"CHEFTIC","problem_name":"Chef and Tic-Tac-Toe","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"6-02-2016","tags":{"0":"ltime33","1":"mgch","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFTIC","time":{"view_start_date":1456592400,"submit_start_date":1456592400,"visible_start_date":1456592400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFTIC.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/CHEFTIC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFTIC.pdf">Vietnamese</a> as well.</h3>


<p>Tic-Tac-Toe used to be Chef's favourite game during his childhood. Reminiscing in his childhood memories, he decided to create his own "Tic-Tac-Toe", with rules being similar to the original Tic-Tac-Toe, other than the fact that it is played on an <b>NxN</b> board.
</p>
<p>
The game is played between two players taking turns. First player puts an 'X' in an empty cell of the board, then the second player puts an 'O' in some other free cell. If the first player has <b>K</b> continuous <b>X's</b> or the second player has <b>K</b> continuous <b>O's</b> in row, column or diagonal, then he wins.
</p>
<p>
Chef started playing this new "Tic-Tac-Toe" with his assistant, beginning as the first player himself (that is, Chef plays 'X's). Currently, the game is ongoign, and it's Chef's turn. However, he needs to leave soon to begin tonight's dinner preparations, and has time to play only one more move. If he can win in one move, output "YES", otherwise output "NO" (without quotes). It is guaranteed that no player has already completed the winning criterion before this turn, and that it's a valid "Tic-Tac-Toe" game.</p>

<h3>Input</h3>
<p>The first line of input contains one integer <b>T</b> denoting the number of testcases. First line of each testcase contains two integers <b>N</b> and <b>K</b>, next <b>N</b> lines contains <b>N</b> characters each. Each character is either an 'X' denoting that the first player used this cell, an 'O' meaning that the second player used this cell, or a '.' (a period) representing a free cell.
</p>

<h3>Output</h3>
<p>For each testcase, output, in a single line, "YES" if Chef can win in one move, or "NO" otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</sup></b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>20</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
XOX
O.O
XOX
3 1
...
...
...
3 2
...
...
...


<b>Output:</b>
YES
YES
NO

<b>Input:</b>
1
4 4
XOXO
OX..
XO..
OXOX

<b>Output:</b>
YES

</pre>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask 1:</b> <b> K </b> = 1. <b>Points - 10</b></li>
 <li><b>Subtask 2:</b> <b> N </b> = <b> K </b> = 3. <b>Points - 30</b></li>
 <li><b>Subtask 3:</b> Original constraints. <b>Points - 60</b></li>
</ul>

<h3>Explanation</h3>
<ul>
<p>Test #1:<br/>
In first testcase, put 'X' in (2, 2), in second we can put 'X' in any cell and win. </p>
<p>Test #2:<br/>
If you put an 'X' in (3, 3), there will be four 'X's on the main diagonal (1, 1) - (2, 2) - (3, 3) - (4, 4).</p>
</ul>