---
{"category_name":"hard","problem_code":"GLBEGA","problem_name":"Glass Bead Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"yogesh01","problem_tester":null,"date_added":"26-12-2014","tags":{"0":"easy","1":"greedy","2":"inpr1502","3":"yogesh01"},"time":{"view_start_date":1422636239,"submit_start_date":1422636239,"visible_start_date":1422633735,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>  You play the following game against a devilishly clever opponent. On the table, there are two bowls ﬁlled with glass beads. In each move, depending on whose turn it is, you or your opponent can do one of the following.</p>
<ul>
<li>Move one bead from the ﬁrst bowl to the second bowl</li>
<li>Remove one bead from the second bowl.</li>
</ul>
<p> </p>
<p>At any point in the game, let x denote the number of beads in the ﬁrst bowl and y denote the number of beads in the second bowl. If x + y is even, it is your turn to move. If x + y is odd, it is your opponent’s turn to move</p>
<p>At each position of the game, you get some points that depend on the number of beads, x and y, in the two bowls. This is given by a function f(x, y) = Ax<sup>2</sup> + By<sup>2</sup> + Cxy, where A, B and C are integers that are ﬁxed each time the game is played.</p>
<p>The game starts with M beads in the ﬁrst bowl and N beads in the second bowl. As the game progresses, beads are removed. The game ends when both bowls are empty.</p>
<p>Your score for the game is the sum of the values f(x, y) for each position (x, y) that the game passes through, starting from (M, N) and ending with (0, 0). Your aim is to obtain as high a score as possible, no matter what moves your opponent chooses. Remember that your opponent is ﬁendishly ingenious and will always play in such a way as to minimize your score.</p>
<p>For example, suppose the game starts with 2 beads in each bowl and the score function is f(x, y) = x<sup>2</sup> − y<sup>2</sup> − xy: that is, A = 1, B = −1 and C = −1. Here are some plays of the game—the positions where you choose the move are enclosed in boxes and the positions where your opponent moves are not enclosed in boxes.<br />
<img src="/download/extimages/527ffcdf26a5a9d5ef96fec4f7ca6b40.png" width="450px;" /><br />
<br />
In this particular game, the best possible score that you can achieve if you consider all possible moves that your opponent can choose is −22. Recall that your devilishly clever opponent always plays in such a way that your score is minimized.</p>
<h3>Input</h3>
<p>The input consists of a single line containing ﬁve integers, M, N, A, B and C where M and N are the number of beads initially in the ﬁrst and second bowl, respectively and A, B and C are the coeﬃcients of the score function f(x, y) = Ax<sup>2</sup> + By<sup>2</sup> + Cxy.</p>
<h3>Output</h3>
<p>The output should be a single integer, the maximum score that you can achieve in this game.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>M,N</b> ≤ <b>600</b></li>
<li><b>-1000</b>≤<b>A,B,C</b>≤<b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<p><b>Input:</b><br />
2 2 1 -1 -1</p>
<p><b>Output:</b></p>
<p>-22<font face="sans-serif, Arial, Verdana, Trebuchet MS"><span style="white-space: normal;"> </span></font></p>
