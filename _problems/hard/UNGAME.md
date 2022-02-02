---
{"category_name":"hard","problem_code":"UNGAME","problem_name":"Unusual game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"kingofnumbers","date_added":"21-01-2017","tags":{"0":"alex_2oo8","1":"cook78","2":"dynamic","3":"fractals","4":"math","5":"medium"},"editorial_url":"https://discuss.codechef.com/problems/UNGAME","time":{"view_start_date":1485109800,"submit_start_date":1485109800,"visible_start_date":1485109800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/mandarin/UNGAME.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/russian/UNGAME.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/vietnamese/UNGAME.pdf">Vietnamese</a> as well.</h3>


<p>Recently Chef invented a two player game. The game is played on a horizontal strip consisting of <b>n</b> cells that are numbered from left to right with consecutive integers from <b>1</b> to <b>n</b>. At the beginning of the game, a pawn is placed at the cell numbered <b>x</b>. The players make moves alternately, i.e. the first player makes all odd numbered moves (1st, 3rd, 5th and so on) and the second player all even numbered moves (2nd, 4th, 6th and so on). During the <b>k</b>-th move the player should move the pawn either exactly <b>k</b> cells to the left or exactly <b>k</b> cells to the right (provided the pawn doesn't land outside the strip). For example, in the <b>k</b>-th move, if the pawn is located at cell <b>p</b> before the move, it can be moved to either <b>(p - k)</b> or <b>(p + k)</b> if the appropriate cells are part of the strip	. The player who is not able to make a move (i.e. both the above choices lead to cells outside of the strip) loses the game. Assume that both the players play optimally.</p>

<p>Before trying to play the game himself, Chef wants to understand the game more. So, he wants to find the outcome of <b>m</b> such games, where in the <b>i</b>-th game the initial location of pawn is <b>x<sub>i</sub></b>. Can you please help Chef in this?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, the first line of input contains two space separated integers ― <b>n</b> and <b>m</b>.</p>
<p>The second line contains <b>m</b> space separated integers ― <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>, ..., <b>x<sub>m</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing <b>m</b> space separated integers ― <b>i</b>-th of them should be an integer either <b>1</b> or <b>2</b>, corresponding to the player that will win if the game starts with the pawn located at cell <b>x<sub>i</sub></b>.</p>

<h3>Constraints</h3>
<ul>
    <li><b>1</b> ≤ <b>T</b> ≤ <b>300</b></li>
    <li><b>1</b> ≤ the sum of <b>n</b> over all test cases ≤ <b>10<sup>6</sup></b></li>
    <li><b>1</b> ≤ <b>m</b> ≤ <b>50</b></li>
    <li><b>1</b> ≤ <b>x<sub>i</sub></b> ≤ <b>n</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 2
2 3
4 2
2 4

<b>Output:</b>
2 1
1 1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>There are three cells in the horizontal strip.</p>
<p>If the pawn is initially located at cell <b>2</b>, during the first move it will be moved to either <b>1</b> or <b>3</b>. The second player can later move the pawn to cell <b>3</b> or <b>1</b>, respectively. Now, the first player has to move the pawn to three cells to the left or to the right, both of which end up moving the pawn outside the strip, so he is unable to make a move and will lose the game in this case. Hence, the second player wins the game.</p>
<p>If the pawn is initially located at cell <b>3</b>, the first player will have to move to cell <b>2</b> during first move and then the second player will be have no available move that can still keep the pawn on the strip, thus the second player loses the game. So, the first player is the winner in this case.
