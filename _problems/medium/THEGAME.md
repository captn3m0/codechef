---
{"category_name":"medium","problem_code":"THEGAME","problem_name":"Filling the maze","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"kevinsogo","date_added":"27-01-2015","tags":{"0":"bfs","1":"dfs","2":"expected","3":"medium","4":"probability","5":"sept15","6":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/THEGAME","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/THEGAME.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/THEGAME.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/THEGAME.jpg" /> </p>
<p>
Consider a maze like this one, encoded in ASCII as a grid of <b>R</b> by <b>C</b> cells, denoted by characters <tt>#</tt> (a wall) and <tt>o</tt> (a walkable cell). The top left cell of the maze is the <i>start</i> and the bottom right one is the <i>goal</i>. All walkable cells are initially white.
</p>
<p>
Cell <tt>B</tt> is <i>reachable</i> from cell <tt>A</tt> iff <tt>A</tt> and <tt>B</tt> are both walkable and it's possible to get to <tt>B</tt> by starting at <tt>A</tt> and moving only to walkable cells in the four cardinal directions — up, right, down and left.
</p>
<p>
The maze is complicated and you're too lazy. That's why you try to solve it using the following algorithm:</p>
<ul>
<li>
Pick a white walkable cell at random and click on it.
</li>
<li>
The cell you picked in the first step and all cells reachable from it turn red.
</li>
<li>
If there's a red path from the start to the goal, you have solved the maze.
</li>
<li>Else: goto first step.
</li>
</ul>
<p>(Note that once a cell turns red, it will remain red until the maze is solved. Also note that this algorithm will always terminate.)
</p>
<p>
What's the expected number of clicks (<a href="http://mathworld.wolfram.com/ExpectationValue.html">expectation value</a> of the number of clicks) you'll have to make to solve the maze?
</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases.</p>
<ul>
<li>
The first line of each test case contains two positive integers <b>R</b> and <b>C</b> — the number of rows and columns of the maze, respectively.
</li>
<li>
The following <b>R</b> lines each contain <b>C</b> characters. Each character is either <tt>#</tt> or <tt>o</tt>.
</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line containing one real number: the expected number of clicks necessary to solve the maze.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><i>subtask 1 (15 pts):</i> <b>1</b> ≤ <b>RC</b> ≤ <b>30</b></li>
<li><i>subtask 2 (85 pts):</i> <b>1</b> ≤ <b>RC</b> ≤ <b>50000</b></li>
<li>At least one path from the start to the goal exists in each test case.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
o#o
oo#
#oo
2 2
oo
oo

<b>Output:</b>
1.166666667
1.000000000

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> With 5/6 chance, the first click you'll make will be on the only path from the start to the goal. With 1/6 chance, you'll click on the top right cell before that. The expected number of clicks is therefore <tt>5/6*1+1/6*2</tt>.</p>
