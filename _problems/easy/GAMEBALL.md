---
{"category_name":"easy","problem_code":"GAMEBALL","problem_name":"A Game of Balls","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"26-05-2017","tags":{"0":"admin2","1":"implementation","2":"medium","3":"snackdown","4":"snckpa17"},"editorial_url":"https://discuss.codechef.com/problems/GAMEBALL","time":{"view_start_date":1495992600,"submit_start_date":1495992600,"visible_start_date":1495992600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPA17/mandarin/GAMEBALL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/russian/GAMEBALL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/vietnamese/GAMEBALL.pdf">Vietnamese</a> as well.</h3>

<p>You are playing a game of balls on a grid of dimensions <b>n * m</b>. All except one cell in this grid contains a ball each, i.e. exactly one of the cells is empty, and the others contain exactly 1 ball. You are allowed to make one of the following two kind of moves one by one in any order:</p>

<p>
<ul>
<li>Choose two adjacent cells one containing a ball and other being empty. Move the ball to the empty cell. Two cells are said to be adjacent to each other if they share a side with each other.</li>
<li>Choose three consecutive cells (either horizontal or vertical), in which the middle cell has a ball, one of the other cells has a ball and the remaining one is empty. You can move the ball from the non-empty non-middle cell to the empty cell, and destroy the ball in the middle cell while jumping over it, thus making middle cell empty too.</li>
</ul>
</p>

<p>You are asked to play this game. At the end of the game, you win if there is exactly one cell containing a ball. You can make at max 5000 moves per testcase. Find any possible sequence of moves to win this game. If this is impossible to achieve, print -1.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers, <b>n, m</b> which are the dimensions of the grid.</p>
<p>The i-th of the next <b>n</b> lines contains <b>m</b> characters. denoting the i-th row of the grid. The character '.' denotes that cell is empty, whereas '*' denotes that the cell has a ball in it.</p>

<h3>Output</h3>
<p>For each test case, the first line should contain an integer X which will denote the number of moves you want to make. If it is impossible to achieve the desired objective, this integer should be -1. This number X should be at most 5000.</p>
<p>If it is possible to achieve the objective, then each of the next X lines should contain four space separated integers: x1, y1, x2, y2 which signifies the following.
If you are making the first type of move, then you are moving the ball from the cell (x1, y1) to (x2, y2).
In the second type of move, it will denote that the non-middle cell with ball is (x1, y1) and the empty cell is (x2, y2).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>n, m</b> ≤ 10</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
1
2 3
<tt>***
**.
</tt>
<b>Output</b>
8
2 1 2 3
1 1 2 1
1 3 1 1
2 1 2 2
2 3 2 1
2 1 2 2
2 2 1 2
1 1 1 3
</pre>

<h3>Explanation</h3>
<pre>
<tt>
***
**.
</tt>
</pre>

<p>
In first move, you can take the ball at (2, 1) and move it to cell (2, 3), and the ball at cell (2, 2) will be destroyed. The resulting grid will be 
</p>
<pre>
<tt>
***
..*
</tt>
</pre>

<p>In second move, you can move the ball at cell (1, 1) to cell (2, 1). The resulting grid will be</p>
<pre>
<tt>
.**
*.*
</tt>
</pre>

<p>Now, you can move the ball (1, 3) to (1, 1) and destroying the ball at (1, 2), we get.</p>
<pre>
*..
*.*
</pre>

<p>Now, move the ball at cell (2, 1) to (2, 2)</p>
<pre>
<tt>
*..
.**
</tt>
</pre>

<p>Move the ball at cell (2, 3) to (2, 1) by destroying the ball at cell (2, 2).</p>
<pre>
<tt>
*..
*..
</tt>
</pre>

<p>Move the ball at cell (2, 1) to (2, 2)</p>
<pre>
<tt>
*..
.*.
</tt>
</pre>

<p>Move the ball at cell (2, 2) to (1, 2)</p>
<pre>
<tt>
**.
...
</tt>
</pre>

<p>Now, move the ball cell (1, 1) to (1, 3), thus destroying the ball at (1, 2).</p>
<pre>
<tt>
..*
...
</tt>
</pre>

<p>And you are done :)</p>