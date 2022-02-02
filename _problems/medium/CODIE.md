---
{"category_name":"medium","problem_code":"CODIE","problem_name":"Codie Bird","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"kotlin"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":null,"date_added":"1-12-2017","tags":{"0":"acm17chn","1":"chn17rol","2":"expected","3":"matrix","4":"med","5":"sidhant007"},"editorial_url":"https://discuss.codechef.com/problems/CODIE","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Codie is a super intelligent bird stuck inside a flappy bird simulation. The game is simple: if the position of the bird is denoted by <b>(x, y)</b>, then the bird can move in the following directions in one step:
<ul>
<li>right — to <b>(x + 1, y)</b>,</li>
<li>up-right — to <b>(x + 1, y + 1)</b>,</li>
<li>down-right — to <b>(x + 1, y - 1)</b>.</li>
</ul></p>
<p>The screen has width <b>K</b> and you are <b>not allowed</b> to move outside of the screen, i.e. the position of the bird must satisfy 1 ≤ <b>y</b> ≤ <b>K</b> at each moment.</p>
<img src = "https://discuss.codechef.com/upfiles/giphy.gif" alt = "Animation for flappy bird game">
<p><br />
Codie is moving from <b>(1, K/2)</b> to <b>(N, K/2)</b>. However, there is exactly one obstacle in the simulation. This obstacle occurs at a random <b>x</b>-coordinate between <b>2</b> and <b>N - 1</b> (both inclusive), where each <b>x</b> has equal probability. The obstacle is composed of <b>two</b> vertical pipes. One of them is at the top and covers all <b>y</b>-coordinates between <b>b</b> and <b>K</b> (both inclusive). The other one is at the bottom and covers all <b>y</b>-coordinates between 1 and <b>a</b> (both inclusive). The pipes only allow Codie to move through <b>y</b>-coordinates that are <b>≥ a+1</b> and <b>≤ b-1</b> at this particular <b>x</b>-coordinate.</p>

<p>Codie, being a super smart and geeky bird, is interested in finding the expected number of paths from <b>(1, K/2)</b> to <b>(N, K/2)</b>. Help Codie find the answer!</p>

<p>Specifically, let's assume that the expected number of paths is a fraction of the form <b>P / Q</b>, where <b>P</b> and <b>Q</b> are coprime. Let <b>Q<sup>-1</sup></b> be the multiplicative inverse of <b>Q</b> modulo 10<sup>9</sup> + 7. Compute <b>P · Q<sup>-1</sup> modulo 10<sup>9</sup> + 7</b>.</p>

<h3>Input</h3>
<p>The only line of the input contains four space-separated integers <b>N</b>, <b>K</b>, <b>a</b> and <b>b</b> denoting the final <b>x</b>-coordinate, the width of the screen, the highest coordinate blocked by the bottom pipe and the lowest coordinate blocked by the top pipe.</p>

<h3>Output</h3>
<p>Print a single line containing one integer — the expected number of paths from <b>(1, K/2)</b> to <b>(N, K/2)</b> modulo 10<sup>9</sup> + 7.</p>

<h3>Constraints</h3>
<ul>
<li>3 ≤ <b>N</b> ≤ 10<sup>9</sup></li>
<li>2 ≤ <b>K</b> ≤ 50</li>
<li><b>K</b> is even</li>
<li>1 ≤ <b>a</b> &lt; <b>b</b> ≤ <b>K</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

5 4 1 3

<b>Output:</b>

666666679
</pre>

<h3>Explanation</h3>
<p>Let <b>X</b> denote the starting and ending coordinate, and <b>B</b> denote the cells blocked by pipes.</p>
<p><img src = "https://discuss.codechef.com/upfiles/codie_explain_RFTTQft.png"
 width = "600"></p>
The expected value is (7 · 1/3) + (9 · 1/3) + (7 · 1/3) = 23/3 = 666666679 (modulo 10<sup>9</sup> + 7).