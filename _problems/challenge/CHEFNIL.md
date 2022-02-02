---
{"category_name":"challenge","problem_code":"CHEFNIL","problem_name":"Chef and Intersection Line","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"8-09-2014","tags":{"0":"berezin","1":"challenge","2":"nov17"},"time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/CHEFNIL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/CHEFNIL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/CHEFNIL.pdf">Vietnamese</a> as well.</h3>

<p>Chef is playing a game that lasts <b>M</b> seconds. She has a matrix <b>A</b>[<b>M</b>][<b>N</b>][<b>N</b>] which contains a single integer in each of the <b>M</b> * <b>N</b> * <b>N</b> cells. For each k such that 1 ≤ k ≤ <b>M</b>, on the k-th second, she chooses some pair (i, j) such that 1 ≤ i, j ≤ <b>N</b>. This will fetch her <b>A</b>[k][i][j] points. She also has a 2-D Cartesian plane which is empty initially. Then for each second k, where k > 1, she will draw a line segment in the plane which joins the coordinates (i, j) and the coordinates chosen in the previous second. She can only select the pair (i, j) if this segment doesn't intersect with any already drawn segment (the touching of the newly drawn segment at the previous second segment point is allowed). So, the segments shouldn't intersect with each other at any point (except two consecutive segments touching at a single point). She is also not allowed to choose a pair (i, j) more than once. If Chef is not able to select a pair, or doesn't wish to play the game any longer, she can exit the game at any point. The aim is to maximize the sum of the points scored.</p>

<p>Can you please play the game on behalf of Chef?</p>

<h3>Input</h3>
<p>The first line of each test case contains two space-separated integers <b>N</b>, <b>M</b>.</p>
<p>Next, you will provided matrix <b>A</b>[k] for each k from 1 to <b>M</b>.</p>
<p>The k-th matrix is given by <b>N</b> lines each containing <b>N</b> space separated integers.</p>

<h3>Output</h3>
<p>You should output at least 1 and at most <b>M</b> lines with two integers in each, denoting the r (for row index) and c (for column index) of the cells selected (1-based indexing) or "-1 -1" in order to exit the game.</p>

<h3>Constraints</h3>
<ul>
<li><b>N</b> = 50</li>
<li>1 ≤ <b>A</b>[k][i][j] ≤ 100</li>
<li>Constraints on <b>M</b> given below.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3 4
1 3 2
3 4 2
1 1 3
2 2 5
1 4 2
3 3 3 
2 3 1
2 3 4
1 8 1
1 1 1
1 1 1
1 1 1

<b>Output:</b>
2 2
3 1
2 3
1 1
</pre>

<h3>Scoring</h3>
<p>Let <b>P</b> denote the total number of points that you receive during the game. Let <b>S</b> be the sum of all the <b>M</b> * <b>N</b> * <b>N</b> integers in the matrix <b>A</b>[<b>M</b>][<b>N</b>][<b>N</b>]. Then the score obtained will be 1000 * (<b>N</b> * <b>N</b> * <b>P</b>) / (sqrt(<b>M</b>) * <b>S</b>)</b>. Your total score will be the sum of your scores over all the test files.</p>

<h3>Test Distribution</h3>
<p>There are four kind of test files. </p>

<p>First, we describe two probability distributions for generating the value in the cell <b>A</b>[k][i][j].</p>
<p>Type 1 distribution is <b>int(100 * e<sup>d - 100</sup>)) + 1</b>, where the real number <b>d</b> is drawn from an uniform real distribution with range from 0 to 100.</p>
<p>Type 2 distribution is minimum  of <b>(100 * 2<sup>-X + d</sup>) + 1</b> over 10 iterations, where <b>d</b>  is drawn from an uniform real distribution with range from 0 to 20, and X denotes the minimum of the Manhattan distances of cell (k, i, j) from the cells (k, 1, 1), (k, 1, <b>N</b>), (k, <b>N</b>, 1), (k, <b>N</b>, <b>N</b>), and (k, <b>N</b>/2, <b>N</b>/2). Note that if the value of the element exceeds 100, we keep it to 100.</p>

<p>
<ul>
<li>Test 1 tests: Type 1 distribution and <b>M</b> = 50.</li>
<li>Test 2 tests: Type 1 distribution and <b>M</b> = 500.</li>
<li>Test 3 tests: Type 2 distribution and <b>M</b> = 50.</li>
<li>Test 4 tests: Type 2 distribution and <b>M</b> = 500.</li>
</ul>
</p>

<p>There are 3 files of each type of tests. During the contest, your score will be calculated over one-third of the test files, i.e. 1 file from each of these types. However, your submission will be run on all the test files and AC/Non AC verdict will be given by running across all the test files.</p>

<h3>Example Explanation</h3>
<p>First second: Chef chooses the point <b>(2, 2)</b>, gets <b>A</b>[1][2][2] = 4 points.</p>
<p>Second second: Chef chooses the point <b>(3, 1)</b>, gets <b>A</b>[2][3][1] = 3 points. A segment is drawn between points (2, 2) and (3, 1).</p>
<p>Third second: Chef chooses the point <b>(2, 3)</b>, gets <b>A</b>[3][2][3] = 4 points. The newly drawn segment is between (3, 1) and (2, 3) which doesn't intersect with the already drawn segment between (2, 2) and (3, 1) (note that it's allowed to touch at the endpoint).</p>
<p>Fourth second: Chef chooses the point <b>(1, 1)</b>, gets <b>A</b>[4][1][1] = 1 points. The newly drawn segment is between (2, 3) and (1, 1) which doesn't intersect with the already drawn segments.</p>

<p>So total number of points obtained is <b>P</b> = 12. The final score obtained will be 683.544.</p>

<p>For the given input, one could have also had the following output.

<pre>
1 1
3 1
2 1
-1 -1

</pre>

But this will give a WA, because the segment (1, 1) -> (3, 1) has many common points with (3, 1) -> (2, 1). </p>