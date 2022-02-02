---
{"category_name":"challenge","problem_code":"KILOWHAT","problem_name":"A Fence for Byteland","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"9-11-2012","tags":{"0":"challenge","1":"jan13","2":"pieguy","3":"polygons"},"editorial_url":"http://discuss.codechef.com/problems/KILOWHAT","time":{"view_start_date":1358247801,"submit_start_date":1358247801,"visible_start_date":1358242651,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Byteland is in turmoil! The citizens of Byteland cannot agree on how many bytes are in a kilobyte. Members of the Decocratic party claim there are 1000 bytes in a kilobyte, and members of the Rebytelican party insist there are 1024 bytes in a kilobyte. The country is on the verge of a civil war. These times call for drastic measures, and Chef has decided the only option is to build a fence separating the citizens based on their opinions. Once the fence is built, the Decocrats should be fully separated from the Rebytelicans. Note that the fence is allowed to pass through the location of a citizen.</p>
<p>Chef wants your help in designing the fence. Chef will be happy as long as the fence separates the citizens properly, but would prefer a shorter fence. You'll be given a map of the city, and need to produce a polygonal fence that separates the citizens. The polygon must be strictly non-self-intersecting (that is, no two edges may cross, and no vertex may belong to more than two edges). Additionally, one of the following must be true:
<ul>
<li>All Decocrats are inside or on the border of the polygon, and all Rebytelicans are outside or on the border of the polygon, or</li>
<li>All Decocrats are outside or on the border of the polygon, and all Rebytelicans are inside or on the border of the polygon.</li>
</ul>
</p>
<h3>Input</h3>
<p>Input will begin with an integer <b>N</b>, the number of citizens in Byteland. <b>N</b> lines follow with 3 integers each: the <b>x</b> and <b>y</b> coordinates of the citizen, and the number of bytes the citizen believes are in a kilobyte (this will always be either 1000 or 1024).</p>
<h3>Output</h3>
<p>First, output the number of vertices in your polygon.  It should be an integer from 3 to 1000, inclusive.  Then output the vertices of your polygon in order, <b>x</b> coordinate then <b>y</b> coordinate. All coordinates must be integers with absolute value at most 2000.  All vertices must be distinct.</p>
<p>Just to reiterate, you output will be accepted if and only if all of the following conditions are satisfied:</p>
<ul>
<li>Let <b>L</b> be the number of vertices in your polygon. Output must contain exactly <b>2 * L + 1</b> integers separated by spaces or line breaks, with first integer in the output equal to <b>L</b>.</li>
<li>The number of vertices of your polygon (that is <b>L</b>) lies between 3 and 1000, inclusive.</li>
<li>Coordinates of all vertices of your polygon must be integers with absolute value at most 2000.</li>
<li>All vertices of your polygon are distinct (which actually follows from the next condition).</li>
<li>Every two non-consecutive sides of your polygon have no common points considered as closed segments on the plane (it is equivalent formulation of strictly non-self intersecting property of the polygon described above).</li>
<li>Your polygon separates Decocrats and Rebytelicans as described above (which is, of course, the most important condition).</li>
</ul>

<h3>Scoring</h3>
<p>Let <b>D</b> be the greatest distance between any two citizens, and <b>P</b> the perimeter of your polygon (the sum of the lengths of all the sides). Your score is then calculated as <b>10 * P / (D * sqrt(N))</b>. The score of the submission is the average score over all test files. Smaller scores will earn more points.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
16
1 1 1024
1 2 1024
1 3 1024
1 4 1000
2 1 1000
2 2 1000
2 3 1000
2 4 1024
3 1 1000
3 2 1024
3 3 1000
3 4 1000
4 1 1000
4 2 1024
4 3 1024
4 4 1024

<b>Output:</b>
5
4 1
3 2
3 4
1 4
2 1
</pre><h3>Explanation</h3>
<p>For this sample output, the Decocrats at (2, 2) and (2, 3) are inside the fence. The Rebytelicans at (1, 1), (1, 2), (1, 3), (4, 2), (4, 3), (4, 4) are outside the fence. Everyone else is on the border of the fence. Here <b>D</b> = 3 * sqrt(2) = 4.2426, <b>P</b> = sqrt(2) + 2 + 2 + sqrt(10) + 2 = 10.5765, and <b>N</b> = 16. The sample output would therefore score 10 * 10.5765 / (4.2426 * sqrt(16)) = 6.2323. Note that this output is optimal for this case. But you can output any polygon satisfying constraints above in order to get Accepted.</p>
<h3>Test Case Generation</h3>
<p>There are two test case generation methods, each making up half of the test cases.</p>
<p>In the first method, <b>N</b> is chosen randomly between 100 and 200, inclusive.  A real value <b>Q</b> is chosen randomly between 0.2 and 0.8, inclusive.  Then <b>N</b> distinct points are chosen randomly with <b>x</b> and <b>y</b> coordinates between 1 and 1000, inclusive.  Each point will be a Decocrat with probability <b>Q</b>, and a Rebytelican with probability (1-<b>Q</b>).</p>
<p>In the second method, two integers <b>W</b> and <b>H</b> are chosen randomly between 10 and 14, inclusive.  Two integers <b>dW</b> and <b>dH</b> are chosen randomly between 20 and 70, inclusive.  A real value <b>Q</b> is chosen randomly between 0.2 and 0.8, inclusive.  <b>N</b> is set to <b>W</b> * <b>H</b>, and the <b>N</b> points are generated as (<b>dW</b>*<b>i</b>, <b>dH</b>*<b>j</b>) with <b>i</b> ranging from 1 to <b>W</b>, inclusive, and <b>j</b> ranging from 1 to <b>H</b>, inclusive.  Each point will be a Decocrat with probability <b>Q</b>, and a Rebytelican with probability (1-<b>Q</b>).</p>
<p>Note that example does not satisfy any of these schemes. But it is guaranteed that every official test file will satisfy one of these schemes.</p>
<h3>Hint</h3>
<p>In order to get Accepted you could simply output a polygon having all citizens on its border. It means that your answer will be accepted if, for example, you output some strictly non-self-intersecting polygon such that each citizen lies on its border. Actually, it is even possible to output all citizens in some order to get AC. (All these details on the hint have already contained in the comments.)</p>
