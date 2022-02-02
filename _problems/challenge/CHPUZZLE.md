---
{"category_name":"challenge","problem_code":"CHPUZZLE","problem_name":"Jigsaw Puzzle Solving","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"16-01-2015","tags":{"0":"challenge","1":"feb15","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/CHPUZZLE","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Imagine a usual jigsaw puzzle. Let its picture be a completely white rectangle with the width of <b>W</b> pixels and the height of <b>H</b> pixels.</p>
<p>The puzzle was splitted into <b>K</b> pieces, then they've got mixed up. Now you want to restore it again. Ideally, you'd like merge these pieces in such a way that they'd form a rectangle <b>W</b> pixels wide and <b>H</b> pixels tall, again. However, it can be very hard. Therefore, even reconstructing a part of a puzzle will make you happy.</p>
<p>Let's formalize the things a bit. You have an empty matrix of <b>H</b> x <b>W</b> cells and <b>K</b> pieces, every piece is a connected component (see the further illustration for better understanding). By connected component, we mean that a piece is a figure where you can reach any pixel of a figure by going through side-adjacent pixels from the figure. You can place a piece anywhere in the matrix, in case it doesn't overlap with other pieces and doesn't crosses the border of the matrix. You can skip the piece and not to place it at all. You <b>cannot rotate</b> the pieces. Given that it is possible to place all the the pieces in such a way that the every cell of the matrix is exactly covered by one piece.</p>
<p>Your goal is to place some (maybe, all) of the pieces in such a way that no two pieces overlap, no piece crosses the border of the matrix, and the number of the cells that are covered by placed pieces is maximized.</p>
<p>Here is the example of the puzzle, splitted into pieces:<br /><br />
<font face="courier">9 9 9 9 9 9 8 8 8 1 </font><br />
<font face="courier">9 9 9 9 9 9 8 8 8 1 </font><br />
<font face="courier">9 5 5 5 5 9 9 9 4 1 </font><br />
<font face="courier">5 5 5 5 5 9 9 4 4 1 </font><br />
<font face="courier">5 3 5 5 4 4 4 4 7 1 </font><br />
<font face="courier">3 3 5 5 4 2 2 7 7 1 </font><br />
<font face="courier">3 3 3 2 2 2 7 7 1 1 </font><br />
<font face="courier">3 3 3 2 7 7 7 7 7 7 </font><br />
<font face="courier">3 3 3 2 6 7 7 7 6 6 </font><br />
<font face="courier">2 2 2 2 6 6 6 6 6 6 </font>
</p>
<h3>Input</h3>
<p>The first line of input contains three space separated integers <b>H</b>, <b>W</b> and <b>K</b> - the number of rows, columns and pieces respectively.</p>
<p>Then <b>K</b> blocks, describing a piece follow.</p>
<p>Each description starts with a line, containing a single integer <b>P</b>, denoting the number of cells that this piece cover.</p>
<p>Then there are <b>P</b> lines, each contains a pair of integers <b>X, Y (1 &lt;= X &lt;= H, 1 &lt;= Y &lt;= W)</b>, denoting <b>1-based</b> coordinates of piece's cell in its' bounding box. That is, the minimal <b>X</b>-coordinate and the minimal <b>Y</b>-coordinate in each piece's description are both 1.</p>
<p>All the pieces are identified by consecutive positive integers (starting from 1) in the order of input.</p>
<h3>Output</h3>
<p>Output <b>H</b> lines of <b>W</b> integers separated by a single space. The <b>j</b>-th integer in the <b>i</b>-th line should denote the identification number of piece that covers the respective cell, or 0 if the cell is not covered by any piece.</p>
<h3>Test data information</h3>
<p>There will be several groups in this problem (<b>20</b> test cases in total):</p>
<p><ul>
<li>The first group will contain <b>5</b> test cases. In these test cases, <b>W</b> and <b>H</b> will be chosen randomly between <b>10</b> and <b>50</b>. <b>K</b> will be chosen randomly between <b>W * H / 10</b> and <b>W * H / 2</b>, inclusively.</li>
<li>The second group will contain <b>8</b> test cases. In these test cases, <b>W</b> and <b>H</b> will be chosen randomly between <b>100</b> and <b>200</b>. <b>K</b> will be chosen randomly between <b>W * H / 100</b> and <b>W * H / 34</b>, inclusively.</li>
<li>The third group will contain <b>3</b> test cases. In these test cases, <b>W</b> and <b>H</b> will be chosen randomly between <b>600</b> and <b>800</b>. <b>K</b> will be chosen randomly between <b>W * H / 100</b> and <b>W * H / 34</b>, inclusively.</li>
<li>The fourth group will contain <b>4</b> test cases. In these test cases, <b>W</b> and <b>H</b> will be chosen randomly between <b>500</b> and <b>1000</b>. <b>K</b> will be chosen randomly between <b>W * H / 50</b> and <b>W * H / 5</b>, inclusively.</li>
</ul>
</p>
<p>In the test data provided, the maximal number of pixels in a piece and the minimal number of pixels in a piece will differ in no more than 3 times. That is, the <b>max_P - min_P &lt;= 3 * min_P</b>.</p>
<h3>Scoring</h3>
<p>Your score for the test case equals to the percentage of the matrix that is covered by pieces. Your score for the problem is the average of your scores for all the test cases. Pay attention that during the contest only the score on 20% of the test cases will be revealed. These 20% will contain <b>a single test case from each of the groups</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
10 10 9
8
1 2
2 2
3 2
4 2
5 2
6 2
7 2
7 1
11
1 7
1 6
2 5
2 6
5 3
5 1
5 2
2 4
3 4
4 4
5 4
12
4 3
5 3
5 1
5 2
1 2
2 2
2 1
3 1
3 2
3 3
4 1
4 2
8
1 5
2 5
2 4
3 4
3 1
4 1
3 2
3 3
14
2 4
3 4
2 3
3 3
4 3
4 4
1 2
2 2
2 1
3 1
1 3
1 4
1 5
2 5
9
1 1
2 1
2 2
2 3
2 4
2 5
2 6
1 6
1 5
14
5 2
5 3
4 4
5 4
4 5
4 6
1 5
2 5
2 4
3 4
4 2
4 1
3 3
4 3
6
1 2
1 1
1 3
2 3
2 1
2 2
18
1 1
1 2
2 1
3 1
2 2
2 3
2 4
2 5
3 8
3 7
4 7
4 6
2 6
3 6
1 4
1 3
1 6
1 5

<b>Output:</b>
0 1 8 8 8 0 0 2 2 0 
0 1 8 8 8 2 2 2 3 0 
0 1 0 0 0 2 0 3 3 0 
0 1 0 0 0 2 0 3 3 3 
0 1 2 2 2 2 4 3 3 3 
0 1 0 0 0 4 4 3 3 3 
1 1 4 4 4 4 5 5 5 5 
0 0 4 0 0 5 5 5 5 5 
0 0 0 0 0 5 0 5 5 0 
0 0 0 0 0 0 0 5 5 0 
</pre><p> </p>
<h3>Explanation</h3>
<p>
<b>How to assign coordinates to the pieces. ? </b> </p>
<p>Let us consider the 6th piece. Its coordinates will be (1, 1), (1, 5), (1, 6), (2, 1), (2, 2), (2, 3), (2, 4), (2, 5), (2, 6). You can notice that x coordinate will increase when you go towards south direction, your y coordinate will increase when you towards east direction.
</p>
<p><b>Another example:</b> <br />
Let us consider this piece. <br />
010 <br />
110 <br />
011 </p>
<p>Its actual coordinates will be given you in row major in following way.<br />
(1 2), (2 1), (2 2), (3 2), (3 3).
</p>
<p>This solution corresponding to given output would get 0.59 points.</p>
