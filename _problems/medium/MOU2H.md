---
{"category_name":"medium","problem_code":"MOU2H","problem_name":"Mountain Holidays 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":null,"date_added":"30-03-2013","tags":{"0":"aug14","1":"dynamic","2":"medium","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/MOU2H","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/MOU2H.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/MOU2H.pdf">Russian</a>.</h3>
<p>Let’s remember the problem <i>Mountain holidays</i> (<a href="http://www.codechef.com/JULY13/problems/MOU1H">MOU1H</a>). The story of <i>Mountain holidays</i> is the following. Some time ago, Chef discovered that more and more people have started climbing mountains every day. So he decided to build a restaurant in the Ukrainian resort Bukovel (Carpathian Mountains). But there are many places to choose, so he wants to choose the best one.</p>
<p>By your great helps, Chef could find to the best place to build a restaurant, now Chef becomes rich. Now he wants to build a restaurant in the next mountain. Similar to previous one, the next mountain is described by a sequence of <b>N</b> points. Here the points are numbered from <b>1</b> to <b>N</b>, and the height of point <b>k</b> is denoted by <b>H<sub>k</sub></b>. Every two adjacent points of the mountain are connected by a segment.
</p>
<p>
For example, the mountain described by <b>N = 9, H = [0, 2, 1, 2, 1, 3, 0, 1, 0] </b> is like a following:
</p>
<p><pre>
       /\
  /\/\/  \
 /        \/\
</pre></p>
<p> In the mountain, all of the tourists will go from the point <b>1</b> to point <b>N</b>.
</p>
<p>
For comfort of the tourists, Chef has bought teleports too. Using a teleport, a tourist can be transferred from point <b>i</b> to point <b>j</b>, for all <b>i</b> &lt; <b>j</b>. Of course, tourists can also walk from point <b>i</b> to point <b>i+1</b> on foot.
</p>
<p>
Now Chef  wants to calculate the attractiveness of the mountain, as the number of the different climbs. </p>
<p>A climb is defined by the <i>nonempty</i> sequence <b>(p<sub>1</sub>, p<sub>1</sub>+1), (p<sub>2</sub>, p<sub>2</sub>+1), ..., (p<sub>s</sub>, p<sub>s</sub>+1)</b> of the moves <b> on foot </b>, where <b>p<sub>k</sub>+1 ≤ p<sub>k+1</sub></b> for <b>k = 1, 2, ..., s − 1</b>.
</p>
<p>Two climbs, say <b>(p<sub>1</sub>, p<sub>1</sub>+1), (p<sub>2</sub>, p<sub>2</sub>+1), ..., (p<sub>s</sub>, p<sub>s</sub>+1)</b> and <b>(q<sub>1</sub>, q<sub>1</sub>+1), (q<sub>2</sub>, q<sub>2</sub>+1), ..., (q<sub>t</sub>, q<sub>t</sub>+1)</b> are different if and only if</p>
<ul>
<li><b>s ≠ t</b> or</li>
<li>There exists at least one <b>k</b> such that <b>1 ≤ k &lt; min(s, t)</b> and <b>H<sub>p<sub>k</sub>+1</sub> – H<sub>p<sub>k</sub></sub> ≠ H<sub>q<sub>k</sub>+1</sub> – H<sub>q<sub>k</sub></sub></b>.</li>
</ul>

<p>You are given the array <b>H</b>, find the number of the different climbs that exist on the mountain. Since the answer can be very large, output it modulo <b>10<sup>9</sup>+9 = 1000000009</b>.</p>
<h3>Input</h3>
<p>The first line of input contains <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test case contains an integer <b>N</b>, denoting the number of points on the mountain.<br />
On second line of each test case, there are <b>N</b> space-separated integers <b>H<sub>1</sub>, H<sub>2</sub>, ..., H<sub>N</sub></b>, denoting the height of each point.</p>
<h3>Output</h3>
<p>For each test case, output an integer denoting the number of the different climbs modulo <b>10<sup>9</sup>+9 = 1000000009</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100000</b>, that is, <b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>2 ≤ N ≤ 1000000</b>, that is, <b>2 ≤ N ≤ 10<sup>6</sup></b></li>
<li>Sum of <b>N</b> over all test cases in one file will be at most <b>1000000 = 10<sup>6</sup></b></li>
<li><b>-2000000 ≤ H<sub>k</sub> ≤ 2000000</b>, that is, <b>−2 × 10<sup>6</sup> ≤ H<sub>k</sub> ≤ 2 × 10<sup>6</sup></b></li>
</ul>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
6
1 2 3 4 5 6
9
0 2 1 2 1 3 0 1 0
7
0 5 -5 5 -5 4 -4

<b>Output</b>
5
199
55
</pre><h3>Explanation</h3>
<p>In the first test case, since height increases by one for each move on foot, there will be one unique climb for each length. So there are <b>5</b> climbs with length <b>1, 2, ..., 5</b>. Here length means the number of moves by foot.</p>
<p>We can get  the following <b>5</b> distinct climbs. </p>
<ul>
<li><b>(1, 2)</b></li>
<li><b>(1, 2), (2, 3)</b></li>
<li><b>(1, 2), (2, 3), (3, 4)</b></li>
<li><b>(1, 2), (2, 3), (3, 4), (4, 5)</b></li>
<li><b>(1, 2), (2, 3), (3, 4), (4, 5), (5, 6)</b></li>
</ul>

<p>The second test case is taken from the problem statement.</p>
<p><i>Warning</i>: The input and output can be large. Please don't use a slow input/output method.</p>
