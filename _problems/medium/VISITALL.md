---
{"category_name":"medium","problem_code":"VISITALL","problem_name":"How to Operate a Robot","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"iscsi","date_added":"19-03-2015","tags":{"0":"cook56","1":"easy","2":"simulation","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/VISITALL","time":{"view_start_date":1427049000,"submit_start_date":1427049000,"visible_start_date":1427049000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/mandarin/VISITALL.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/russian/VISITALL.pdf">Russian</a> as well.</h3>
<p>There is s a square maze consisting of <b>N</b> rows and <b>N</b> columns divided into unit cells. The rows are numbered from the top to the bottom starting from 1, and the columns are numbered from the left to the right also starting from 1.
</p>
<p>
You have a robot which you have to operate. Initially the robot is located in the upper-left corner of the maze (i.e. at the cell <b>(1, 1)</b>). In a single move you can move the robot in any one of four basic directions: left, right, up or down.
</p>
<p>
Some cells of the maze are forbidden. It is known that there are no two forbidden cells that share an edge or a corner. The cell <b>(1, 1)</b> is not forbidden.
</p>
<p>
You have to construct a sequence of moves of the robot satisfying the following conditions.</p>
<ul>
<li>
Robot never leaves the maze.
</li>
<li>
Robot never visits a forbidden cell.
</li>
<li>
Robot visits each non-forbidden cell of the maze at least once.
</li>
</ul>

<p>
You are interested in finding any valid sequence of moves such that there are no more than three consecutive moves that moved the robot in the same direction eg. 'DDDD' is invalid sequence of moves while 'D' and 'DDD' is valid. Also total number of moves should not be more than <b>N * (N + 7)</b>. Please find any such sequence.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains the single integer <b>N</b>.</p>
<p>In the next <b>N</b> lines, each line contains <b>N</b> characters representing the rows of maze. The characters can be one of the following ones:</p>
<ul>
<li>
'.' denoting a non-forbidden cell.
</li>
<li>
'#' denoting a forbidden cell.
</li>
</ul>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case. The answer should be a string of characters 'L', 'R', 'U' and 'D', representing left, right, up and down moves, respectively. <b>The answer for each test case should not contain more than N*(N+7) moves</b>.
</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li>It is guaranteed that there exists a valid sequence of moves containing no more than <b>N * (N + 7)</b> moves.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
..
.#
3
...
#..
..#

<b>Output:</b>
DUR
RRDLDL
</pre>