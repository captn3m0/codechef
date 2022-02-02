---
{"category_name":"medium","problem_code":"AMROOK","problem_name":"Rook Placement","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":"gamabunta","date_added":"8-05-2013","tags":{"0":"combinatorics","1":"cook34","2":"medium","3":"satej"},"editorial_url":"http://discuss.codechef.com/problems/AMROOK","time":{"view_start_date":1368988200,"submit_start_date":1368988200,"visible_start_date":1368988200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify"><b>Chef</b> and <b>Sous Chef</b> are playing a game. There are <b>N rooks</b> right next to a chessboard. The chessboard has <b>R</b> rows and <b>C</b> columns. The rows are numbered from <b>1</b> to <b>R</b> from top to bottom. The columns are numbered from <b>1</b> to <b>C</b> from left to right.</p>
<p style="text-align:justify">Chef will place the <b>N</b> rooks within the <b>R</b>*<b>C</b> cells of the chessboard. <b>He may keep multiple rooks on the same cell</b>. You may assume that each cell is large enough to hold all of the <b>N</b> rooks. After placing the <b>N</b> rooks, some of the cells may remain empty.</p>
<p style="text-align:justify">Note that not all possible placements of rooks within the <b>R*C</b> cells are <b>valid</b>. <b>If there is a rook at cell (r, c) then there should be no rooks in the cells (u, v)</b> where <b>u &lt; r AND v > c</b>.</p>
<p style="text-align:justify">Following the Chef's placement of the rooks, the Sous Chef will make an <b>unlimited number of moves</b> - including, of course, the possibility of <b>no move at all</b>. In each move he may move a rook to <b>one cell up</b> or <b>one cell left</b> of its position. He cannot move a rook out of the chessboard. At the end of all the moves (<b>i.e. not necessarily at the end of each move, but at the end of all of them</b>), Sous Chef must also ensure that the board is <b>valid</b> according to the condition given above.</p>
<p style="text-align:justify">The Sous Chef will win, if he can move the rooks into a valid arrangement where <b>no pairs of rooks attack each other</b>. In other words, into a valid arrangement where <b>no pairs of rooks share the same row or the same column</b>.</p>
<p style="text-align:justify">Chef, being Chef - having such wonderful cooks for his advantage - has asked you to count the number of <b>valid</b> ways he can place <b>N</b> rooks in a chessboard with <b>R</b> rows and <b>C</b> columns such that the Sous Chef <b>cannot win</b>. 2 initial arrangements are considered different if there is at least one cell that contains different number of rooks.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case contains 3 integers <b>R</b>, <b>C</b> and <b>N</b> respectively.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single line containing the number of <b>valid</b> (see the problem statement for the definition of valid) ways Chef can place the rooks such that Sous Chef cannot win. Since this number can be quite large, print the number modulo <b>10007</b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 1000</b><br />
<b>1 ≤ R ≤ 10<sup>15</sup></b><br />
<b>1 ≤ C ≤ 10<sup>15</sup></b><br />
<b>1 ≤ N ≤ 10<sup>15</sup></b></p>
<h3>Sample</h3>
<pre>
<b>Input:</b>
4
2 2 1
2 2 2
3 2 2
3 3 2

<b>Output:</b>
0
5
8
11

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> Chef has to place a single rook on a 2*2 board. Of course the Sous Chef can always make sure that the rooks are not under attack from each other (since there is only 1). Hence the Chef cannot place the rook in any way in which the Sous Chef may not win.</p>
<p style="text-align:justify"><b>Test Case 2:</b> There are 9 ways the chef can place the rooks initially. The ways that are marked in bold below are those in which the Sous Chef cannot win. The notation used below is simply the number of rooks placed on each of the 2*2 cells.</p>
<pre>
<b>1 1
0 0</b>

<b>1 0
1 0</b>

1 0
0 1

0 1
0 1

0 0
1 1

<b>2 0
0 0</b>

<b>0 2
0 0</b>

<b>0 0
2 0</b>

0 0
0 2
</pre><p style="text-align:justify">Note that the following way to place the rooks was invalid.</p>
<pre>
0 1
1 0
</pre>