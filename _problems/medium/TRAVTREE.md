---
{"category_name":"medium","problem_code":"TRAVTREE","problem_name":"Travelling in a tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"karanaggarwal","date_added":"14-06-2016","tags":{"0":"heavy","1":"lca","2":"ltime37","3":"med","4":"pavel1996","5":"subtree"},"editorial_url":"http://discuss.codechef.com/problems/TRAVTREE","time":{"view_start_date":1466874000,"submit_start_date":1466874000,"visible_start_date":1466874000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/mandarin/TRAVTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/russian/TRAVTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/vietnamese/TRAVTREE.pdf">Vietnamese</a> as well.</h3>
<p>Leha likes traveling a lot. In particular he likes discovering new routes in his world which he calls a tree-world. </p>
<p>Leha's world is a connected tree of <b>N</b> vertices, so there is a unique path between any pair of vertices <b>a</b> and <b>b</b>. Every day Leha chooses some new pair of vertices and walks along this route. Sometimes he notices that he has already been in some vertices during his previous walks. So now for each new route that he takes, he is interested in knowing how many previous routes does it intersect? Two routes are considered to be intersecting with each other, if they have at least one common vertex.</p>
<h3>Input</h3>
<p>The first line contains one integer <b>N</b> denoting the number of vertices in the tree. Vertices are enumerated from <b>1</b> to <b>N</b>.</p>
<p>The following <b>N-1</b> describe the edges of the tree. Each of these lines contains two space separated integers <b>u, v</b> denoting that there is an edge between vertex <b>u</b> and <b>v</b>.</p>
<p>The next line contains an integer <b>Q</b> denoting the number of days Leha is traveling. Each of next <b>Q</b> lines contains two space separated integers <b>u, v</b> denoting the start and finish vertices of the corresponding route.<br />
<h3>Output</h3>
</p><p>For each day output one integer on a separate line - the number of previous routes it intersects with.</p>
<h3>Constraints with Subtasks</h3>
<ul>
<li><b>Subtask #1[18 points]</b>:<br />
<b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>2</sup></b></li>
<li><b>Subtask #2[19 points]</b>:<br />
<b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>Subtask #3[21 points]</b>:<br />
<b>1</b> ≤ <b>N, Q</b> ≤ <b>5*10<sup>4</sup></b></li>
<li><b>Subtask #4[42 points]</b>:<br />
<b>1</b> ≤ <b>N</b> ≤ <b>2*10<sup>5</sup></b>, <b>1</b> ≤ <b>Q</b> ≤ <b>3*10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2
1 3
3 4
3 5
4
4 5
4 2
1 3
1 2

<b>Output:</b>
0
1
2
2
</pre><h3>Explanation</h3>
<p><b>Day 1</b>. As there is no previous route, the route from <b>4</b> to <b>5</b> can't intersect with any round. Hence answer is <b>0</b>.</p>
<p><b>Day 2</b>. Route from <b>4</b> to <b>2</b> intersects with route 1 (at vertices <b>3</b> and <b>4</b>), So the answer is <b>1</b>.</p>
<p><b>Day 3</b>. Route from <b>1</b> to <b>3</b>: intersects with both the previous routes. Hence answer is 2.</p>
<p><b>Day 4</b>. Route from <b>1</b> to <b>2</b>: intersects with route 2 and 3. Hence answer is <b>2</b>.</p>
