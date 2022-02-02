---
{"category_name":"challenge","problem_code":"CX","problem_name":"Best board fill","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"kotlin","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"COB","45":"FS"},"max_timelimit":0.120365,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"15-04-2009","tags":{"0":"admin"},"time":{"view_start_date":1242034200,"submit_start_date":1242034200,"visible_start_date":1242034200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><strong>The following a tie breaker problem.  The best solution will receive one point.  All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.</strong></p>

<p>Given a large board (with holes) and set of tetris-like figures (an unlimited source, capable of generating any number of them), try to cover the board as exactly as possible.
The source is capable of generating the following pieces:
<p style="font-family: monospace">

<pre  style="font-family: monospace">
1)
###
.#.
</pre>
<p>
<pre style="font-family: monospace">
2)
##.
.##
</pre>
<p>
<pre style="font-family: monospace">
3)
#.#
###
</pre>
<p>
<pre style="font-family: monospace">
4)
###
#..
</pre>
<p>
<pre style="font-family: monospace">
5)
..#
###
#..
</pre>
<p>
<pre style="font-family: monospace">
6)
#.#
###
.#.
</pre>
<br/>
<p>
You are allowed to flip and rotate pieces before placing them on the board.
<h3>Input</h3>
<p>
The first line contains two numbers - 100<=<var>n</var>,<var>m</var><=1000 - the height and the width of the board.
The next <var>n</var> lines, each containing <var>m</var> space-separated numbers, are the board description. The symbol '<b>0</b>' is a square which should be filled, the symbol '<b>1</b>' is a square which should not be filled.

<h3>Output</h3>
<p>
First output the number of pieces used, <var>k</var> < 10<sup>6</sup>. Then write <var>k</var> successive descriptions of the used pieces. Each description should be of the form: <var>t</var> - the number of full squares of the piece, followed by <var>t</var> pairs of integers denoting the coordinates of the respective squares (using 0-based offsets, with the top-left of input written as (0,0) ).

<h3>Example</h3>

<pre>
<b>Input:</b>
3 3
0 0 0
0 1 0
0 0 0


<b>Output:</b>
2
4
0 0
0 1
1 1
0 2
4
0 2
1 2
2 2
2 1

</pre>
<h3>Scoring</h3>
<p>
For each square you will receive a penalty, calculated in the following way:
Let <var>a</var> be the number a square should be covered by (either 0 or 1), and let <var>b</var> be the actual number <i>of times</i> the square has been covered by a # piece (pieces <b>may overlap</b>). If <var>a</var> > <var>b</var> (the square should have been covered, but was not), the penalty is <b>3</b>. If <var>b</var> > <var>a</var> (the square should not have be covered and was covered, or should have been covered, but was covered more than once), the penalty is <b><var>b</var>-<var>a</var></b>.
The total penalty is the sum of individual penalties, taken over all squares.
<br/>

<p>
In the example the penalty is 3+3+1+1 = 8.
</p>

<p>
The program will be run several times for different data sets and the overall score will be the mean of scores received.
</p>

<h3>Tests</h3>
<p>
All tests have been randomly generated, with <b>1</b> covering less than 40% of the total number of squares.