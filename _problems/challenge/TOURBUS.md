---
{"category_name":"challenge","problem_code":"TOURBUS","problem_name":"Byteland Tours","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"white_king","date_added":"28-11-2013","tags":{"0":"challenge","1":"dynamic","2":"greedy","3":"heuristic","4":"jan14","5":"pieguy","6":"search"},"editorial_url":"http://discuss.codechef.com/problems/TOURBUS","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/TOURBUS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/TOURBUS.pdf">Russian</a>.</h3>
<p>As part of a new program to attract tourists to Byteland, Chef has been placed in charge of organizing a series of bus tours around the city.  There are <b>N</b> scenic locations (points on the plane) in Byteland (numbered <b>0</b> through <b>N-1</b>), and <b>M</b> bidirectional scenic roads, each of which connects two scenic locations via a straight line. Chef wishes to organize the tours according to the following rules:</p>
<ul>
<li>A tour is defined as sequence of locations, where a tour bus begins at the first location, and moves directly from each location to the next location in the sequence until it reaches the last location. There must be a scenic road between consecutive locations.</li>
<li>A tour does not have to start and end at the same location, but it is allowed.</li>
<li>A tour cannot visit the same location more than once, with the possible exception of the start/end location.</li>
<li>A tour cannot cross itself. That is, none of the roads belonging to a tour may intersect.</li>
<li>Each road must be visited by exactly one tour.</li>
</ul>
<p>Setting up tours is expensive, so Chef wishes to minimize the total number of tours.  Optimal solutions are not required, but solutions that use fewer tours will score more points (see the scoring section below).  However, your solution must use at most <b>(N+M)/2</b> tours or else it will be judged Wrong Answer.</p>
<h3>Input</h3>
<p>Input will begin with a line containing an integer <b>N</b>.  Following this will be <b>N</b> lines containing the locations of the <b>N</b> scenic locations.  Each location is given as a pair of integers, with the <b>i</b>-th line giving <b>x_i</b> and <b>y_i</b>, the respective <b>x</b> and <b>y</b> coordinates of the <b>i</b>-th scenic location. Following this will be <b>N</b> lines containing <b>N</b> characters each.  The <b>i</b>-th character of the <b>j</b>-th line will be 'Y' if there is a scenic road connecting locations <b>i</b> and <b>j</b>, and 'N' otherwise.</p>
<h3>Output</h3>
<p>First, print an integer <b>K</b>, the number of tours.  Then print <b>K</b> tour descriptions.  Each tour description should consist of an integer <b>L</b>, the length of the tour (in roads), followed by <b>L+1</b> integers, the ordinal numbers of the locations on the tour, in order.</p>
<h3>Scoring</h3>
<p>Your score is <b>K*N/M</b>.  Lower scores will earn more points.<br /><br />
We have 50 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 10 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 40 test files. Note, that public part of the tests can not contain some border cases.</p>
<h3>Constraints</h3>
<ul>
<li>20 ≤ <b>N</b> ≤ 50</li>
<li>0 ≤ <b>x_i</b>, <b>y_i</b> ≤ 100</li>
<li>No three points will be collinear.</li>
<li>The i-th character of the i-th row of the road descriptions will be 'N'.</li>
<li>The i-th character of the j-th row of the road descriptions will equal the j-th character of the i-th row.</li>
<li>Each city will be connected to at least one road.</li>
</ul>
<h3>Sample Input</h3>
<pre>6
2 3
10 0
10 7
3 7
9 8
2 1
NNNYNY
NNYYNN
NYNYYN
YYYNYN
NNYYNY
YNNNYN
</pre><h3>Sample Output</h3>
<pre>3
4 3 0 5 4 2
1 4 3
3 1 2 3 1

</pre><p>This sample output would score <b>3*6/8 = 2.25</b> points.</p>
<h3>Test Case Generation</h3>
<p><b>N</b> will be chosen randomly and uniformly between 20 and 50, inclusive.  Each point's coordinates are chosen randomly and uniformly between 0 and 100, inclusive.  If two points coincide or three points are collinear, the process is restarted (with the same value of <b>N</b>).</p>
<p>A real value <b>P</b> is chosen randomly and uniformly between 0.3 and 1.0.  Between each pair of cities a road exists with probability <b>P</b>.  If some city has no roads, the process is restarted (with the same value of <b>P</b>).</p>
