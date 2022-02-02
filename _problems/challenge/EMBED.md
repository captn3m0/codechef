---
{"category_name":"challenge","problem_code":"EMBED","problem_name":"Embedding","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"nssprogrammer","problem_tester":"laycurse","date_added":"29-11-2014","tags":{"0":"challenge","1":"march15","2":"nssprogrammer"},"editorial_url":"http://discuss.codechef.com/problems/EMBED","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/EMBED.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/EMBED.pdf">Russian</a>.</h3>
<p>You have <b>N</b> points, numbered from <b>1</b> to <b>N</b>. You have to position these <b>N</b> points on the Cartesian plane.</p>
<p>You have to decide the coordinates of the points. But there are some restrictions. Firstly, the coordinates should be integers, at least <b>1</b> and at most <b>4000</b>, thus you can put a point only on a lattice point. Secondly, every point must have distinct coordinates.</p>
<p>After the points are positioned on the Cartesian plane, they need to be connected through line segments. The length of a line segment connecting two points is of course the euclidean distance between the points. There will be <b>N − 1</b> line segments in total. The structure of points and line segments will be the same as tree in graph theory. Every pair of points will be connected directly or indirectly by the segments.</p>
<p>There is one more restriction corresponding to the length of each line segment. Let the <b>i</b><sup>th</sup> segment connect points <b>P<sub>i</sub></b> and <b>Q<sub>i</sub></b>. You are given the minimum length <b>K<sub>i</sub></b> and the maximum length <b>L<sub>i</sub></b> of the <b>i</b><sup>th</sup> segment, receptively , the length between points <b>P<sub>i</sub></b> and <b>Q<sub>i</sub></b> must be at least <b>K<sub>i</sub></b> and at most <b>L<sub>i</sub></b>.</p>
<p><b>What needs to be optimized ?</b><br /><br />Here we explain what needs to be optimized. Two points are considered to be adjacent if they are connected through a line segment. You want to minimize the ratio between the maximum distance between any two adjacent points and the minimum distance between any two non-adjacent points over all the points on the Cartesian plane. Also there are some <b>evil coordinates</b> on the Cartesian plane. You will be given three integers <b>A</b>, <b>B</b> and <b>S</b>. Then, the coordinates <b>(x, y)</b> are evil coordinates if and only if <b>(A<sup>x</sup> mod 10007) + (B<sup>y</sup> mod 10007) ≤ S</b>. Assignment of evil coordinates to any point shall be avoided so far as possible. In addition, it is better that each segment does not intersect with other segments (please see Scoring section for definition of "intersect").</p>
<p>Your task is to find valid and better integer coordinates for each point on the Cartesian plane. Of course, it is too hard to find the optimal solution. Thus your final aim is to maximize your total score described in the below Scoring section.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test case follow.</p>
<p>The first line of each test case contains an integer <b>N</b>, denoting the number of the points. The second line contains three integers <b>A</b>, <b>B</b> and <b>S</b>, denoting the information about evil cells. Then <b>N − 1</b> lines follow. The <b>i</b><sup>th</sup> of such lines contains four space-separated integers <b>P<sub>i</sub></b>, <b>Q<sub>i</sub></b>, <b>K<sub>i</sub></b> and <b>L<sub>i</sub></b>, denoting the information about the <b>i</b><sup>th</sup> segment.</p>
<h3>Output</h3>
<p>For each test case, print <b>N</b> lines, where the <b>i</b><sup>th</sup> line should have two space-separated integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>, denoting the coordinates of point <b>i</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>3 ≤ N ≤ 500</b></li>
<li><b>1 ≤ A, B ≤ 10006</b></li>
<li><b>0 ≤ S ≤ 20012</b></li>
<li><b>1 ≤ P<sub>i</sub>, Q<sub>i</sub> ≤ N</b>, and <b>P<sub>i</sub> ≠ Q<sub>i</sub></b></li>
<li><b>1 ≤ K<sub>i</sub> ≤ L<sub>i</sub> ≤ 6000</b></li>
<li>The structure of the graph denoted by input will be a tree</li>
<li>All the judge file (not included the below Example) generated by the method described in Test generation section</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4
6476 5351 10367
1 2 1 5
2 3 1 5
3 4 1 5
4
8316 8371 7
1 2 100 5000
2 3 100 5000
3 4 100 5000
4
8316 8371 7
1 2 100 5000
2 3 100 5000
3 4 100 5000

<b>Output:</b>
1 1
2 1
2 2
3 2
1000 1000
1000 2000
1000 1100
1000 1900
1000 1000
1000 1200
1000 1500
1000 2000
</pre><h3>Test generation</h3>
<p>We have <b>10</b> input files. Each of our input file contains <b>100</b> test cases, that is, <b>T = 100</b>. Each test case is generated as follows.</p>
<p>At first, the integer <b>N</b> is chosen from <b>[3, 500]</b>, randomly and uniformly. Then the integer <b>A</b> and <b>B</b> are chosen from <b>[1, 10006]</b>, randomly, uniformly and independently. The integer <b>S</b> is also chosen from <b>[0, 20012]</b>, randomly and uniformly.</p>
<p>Then we enumerate the lattice points which are not evil points, let the set <b>e</b> be the such lattice points. If the number of elements of the set <b>e</b> is less than <b>2 × N</b>, then the test is discarded, and new a test case is generated instead of it. For <b>i = 1, 2, ..., N</b>, one point, say <b>f<sub>i</sub></b> are chosen from the set <b>e</b> randomly and uniformly, and delete <b>f<sub>i</sub></b> from the set <b>e</b>. Thus we selected <b>N</b> distinct lattice points <b>f<sub>i</sub></b> which are not evil.</p>
<p>Then the real parameter <b>r</b> are chosen from the set <b>{0.6, 0.8, 0.9, 1.0, 1.1, 1.3, 1.6}</b> randomly and uniformly. For <b>i = 2, 3, ..., N</b>, we choose <b>j</b> from <b>[1, i−1]</b>, randomly but not uniformly. Here, let <b>sum = r<sup>1</sup> + r<sup>2</sup> + ... + r<sup>i−1</sup></b>, then the probability of <b>j = k</b> is <b>r<sub>k</sub> / sum</b>. This means that there is a segment between the points <b>i</b> and <b>j</b>.</p>
<p>The minimum length and maximum length of each segment are generated as follows. Let the segment connect points <b>i</b> and <b>j</b>, and let the length between <b>f<sub>i</sub></b> and <b>f<sub>j</sub></b> be <b>d</b>. The real value <b>a</b> is chosen from <b>[d/5, d]</b>, and the real value <b>b</b> are chosen from <b>[d, 5×d]</b> randomly, uniformly and independently, then the minimum length of the segment is set as <b>max(1, floor(a))</b>, and the maximum length of the segment is set as <b>min(6000, ceil(b))</b>.</p>
<p>Lastly, the numbers of points are shuffled, and the order of edges are also shuffled, where every permutation occurs with the same probability. And, for each <b>i</b>, <b>P<sub>i</sub></b> and <b>Q<sub>i</sub></b> are swapped with probability <b>0.5</b>.</p>
<h3>Scoring</h3>
<p>At first, you will get <i>Wrong Answer</i> if you print invalid coordinates for at least one test case.</p>
<p>The score for each test case are calculated as follows. Let <b>X</b> be the maximum distance between any two adjacent points over the set of points, and <b>Y</b> be the minimum distance between any two non-adjacent points over the set of points, And let <b>C</b> be the number of the unordered pairs <b>(u, v)</b> of segments, where the <b>u</b><sup>th</sup> segment intersects with the <b>v</b><sup>th</sup> segment. And let <b>W</b> be the number of the points on the evil coordinate. Then the score for this case is calculated as : <br /><br /><b>Score = 10000 × Y / X × (1 − Z) × (1 − Q),</b><br />where <b>Z = 2 × C / (N − 1) / (N − 2),</b><br />and <b>Q = W / N</b>.<br /><br /> Here the <b>u</b><sup>th</sup>line segment intersects the <b>v</b><sup>th</sup>line  segment if and only if there is some point <b>p</b> such that:</p>
<ul>
<li><b>p</b> is not an end point of the <b>u</b><sup>th</sup> segment, or <b>p</b> is not an end point of the <b>v</b><sup>th</sup> segment</li>
<li><b>p</b> is on both the <b>u</b><sup>th</sup> segment and <b>v</b><sup>th</sup> segment, where the segment include the end points.</li>
</ul>
<p> </p>
<p>Then the score for each test file is defined by the sum of the score of test cases in the test file. Finally, the final score is defined by the average of the score for each test file.</p>
<p>During the contest, the shown score will be affected by only the first <b>20</b> test case for each test file. That is, the score of the last <b>80</b> test cases are calculated as <b>0</b>.</p>
<h3>Explanation</h3>
<p><b>Example 1.</b></p>
<p>The above output is a valid one. Let's check it. All points have distinct integer coordinates. And the length of the <b>1</b><sup>st</sup> segment is <b>sqrt( (x<sub>1</sub> − x<sub>2</sub>)<sup>2</sup> +  (y<sub>1</sub> − y<sub>2</sub>)<sup>2</sup> ) = sqrt( (1 − 2)<sup>2</sup> + (1 − 1)<sup>2</sup> ) = 1</b>. The minimum length and maximum length of the <b>1</b><sup>st</sup> segment are <b>1</b> and <b>5</b> respectively, so it does not break constraints. Similarly, the length of the <b>2</b><sup>nd</sup> segment and the <b>3</b><sup>rd</sup> segment are <b>1</b> and <b>1</b> respectively. They also do not break the constraint. So the output is valid.</p>
<p>Then let's calculate the score for this test case. The pairs of adjacent points are <b>(1, 2)</b>, <b>(2, 3)</b> and <b>(3, 4)</b>. The all distances of the between adjacent points are <b>1</b>, as seeing above. Thus <b>X = 1</b>, denoting the maximum distance between any two adjacent points over the set of points.</p>
<p>The pairs of non-adjacent points are <b>(1, 3)</b>, <b>(1, 4)</b> and <b>(2, 4)</b>. The distances between non-adjacent points are <b>1.414...</b>, <b>2.236...</b> and <b>1.141...</b> respectively. Thus <b>Y = 1.414...</b>, denoting the the minimum distance between any two non-adjacent points over the set of points.</p>
<p>You can see that each segment does not intersect with others. Thus <b>C = 0</b>.</p>
<p>The only point <b>4</b> on an evil coordinate, since</p>
<ul>
<li>About point <b>1</b>: <b>(A<sup>x<sub>1</sub></sup> mod 10007) + (B<sup>y<sub>1</sub></sup> mod 10007) = (6476<sup>1</sup> mod 10007) + (5351<sup>1</sup> mod 10007) = 11827 > S</b>,</li>
<li>About point <b>2</b>: <b>(A<sup>x<sub>2</sub></sup> mod 10007) + (B<sup>y<sub>2</sub></sup> mod 10007) = (6476<sup>2</sup> mod 10007) + (5351<sup>1</sup> mod 10007) = 14597 > S</b>,</li>
<li>About point <b>3</b>: <b>(A<sup>x<sub>3</sub></sup> mod 10007) + (B<sup>y<sub>3</sub></sup> mod 10007) = (6476<sup>2</sup> mod 10007) + (5351<sup>2</sup> mod 10007) = 12420 > S</b>,</li>
<li>About point <b>4</b>: <b>(A<sup>x<sub>4</sub></sup> mod 10007) + (B<sup>y<sub>4</sub></sup> mod 10007) = (6476<sup>3</sup> mod 10007) + (5351<sup>2</sup> mod 10007) = 8389 ≤ S</b>.</li>
</ul>
<p> </p>
<p>Thus <b>W = 1</b>.</p>
<p>Put it all together, the score of this test case is about <b>10000 × 1.414... / 1 × (1 − 0) × (1 − 0.25) = 10606.6017....</b></p>
<p><b>Example 2.</b></p>
<p>You can check that the output is valid. But it is also can be checked easily, each segment intersects all other segments. Thus <b>C = 3 × 2 / 2 = 3</b>, and <b>Z = 1</b>. Then the score of this test case is <b>0</b>.</p>
<p><b>Example 3.</b></p>
<p>You can check that the output is valid. And, in this case, each segment does not intersect all other segments. Please note that, in the definition of intersect, the point <b>p</b> is not an end point of at least one segment. In this case, <b>X = Y = 500, C = 0, W = 0</b>. Thus the score is just <b>10000</b>.</p>
