---
{"category_name":"challenge","problem_code":"STORO","problem_name":"Rotation Puzzle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":1.49,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"6-04-2010","tags":{"0":"admin"},"editorial_url":"http://discuss.codechef.com/problems/STORO","time":{"view_start_date":1273669494,"submit_start_date":1273669494,"visible_start_date":1273669494,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Recently, with the release of the ultimate computing device bytePad, a platform game with the simple name "Rotation Puzzle" immediately became a phenomenon among Bytelandians. The game is extremely simple, yet quite additive. Here's the rule:
<p>Given a MxN rectangular grid in which each cell contains a unique number from 1 to MxN. In each step, the player can pick any 2x2 subgrid and perform a rotation (whether clockwise or counterclockwise).
<p>The task is to transform from the initial grid to the final configuration, using as few steps as possible.
<p>The final configuration is the configuration</p>
<table>
<tr>
<td>1</td>
<td>2</td>
<td>...</td>
<td>n</td>
</tr>
<tr>
<td>n+1</td>
<td>n+2</td>
<td>...</td>
<td>2n</td>
</tr>
<tr>
<td>...</td>
<td>...</td>
<td>...</td>
<td>...</td>
</tr>
<tr>
<td>(m-1)n+1</td>
<td>(m-1)n+2</td>
<td>...</td>
<td>mn</td>
</tr>
</table>
<p>You may have guessed why this game is addictive: it requires a tremendous visualization skill!

<h3>Input</h3>
<p>The first line contains a number T (about 5000), which is the number of test cases. Each test case has the following form.
<p>The first line contains two numbers M and N (2 <= M, N <= 33).
<p>The next M lines contains the description of the grid.
<p>Each test case's input is separated by a blank line.
<p>It is guaranteed that each input data has a solution.

<h3>Output</h3>
<p>For each test case, output the result in the following format.
<p>The first line contains a number K, the number of steps you need to solve the puzzle. K must not exceed 10000.
<p>Each line of the next K lines contain three numbers c, i, j (c=0 or c=1, 1<=I < M, 1 <= J < N). (i,j) is the top-left coordinate of the 2x2 square that is need to be rotated. c=1 if the rotation if clockwise and c=0 if the rotation is counter-clockwise.
<p>Prints a blank link after each test case's output.

<h3>Scoring</h3>
Given m and n, we pick a random positive integer K* and starting from the final configuration, we perform a random operation K* times to generate the test case. 
For each test case, your score is K*/K. 
Higher score is
better.
<h3>Example</h3>

<pre>
<b>Input:</b>
2

2 3
1 5 2
4 6 3

2 3
5 6 2
1 4 3

<b>Output:</b>
1
0 1 2

2
1 1 1
0 1 2
</pre>
