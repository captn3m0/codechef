---
{"category_name":"easy","problem_code":"BWCELL","problem_name":"Black And White Cells","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"pushkarmishra","date_added":"4-11-2015","tags":{"0":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/BWCELL","time":{"view_start_date":1448785800,"submit_start_date":1448785800,"visible_start_date":1448785800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/mandarin/BWCELL.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/russian/BWCELL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/vietnamese/BWCELL.pdf"> Vietnamese</a></h3>


<p>Chef and his best friend Aleksa are into mathematical games these days. Today, they have some <b>( ≥ 0 )</b> black cells represented as <b>B</b>, and a white cell represented as <b>W</b>, lying randomly in a straight line.
They have decided to play with these cells. In a move, a player chooses some <b>( > 0 )</b> black cells lying on any one side of the white cell and remove them. It should be noted that a player is not allowed to choose black cells from both side of the given white cell. Both the players alternate their moves, and play optimally. The player who is unable to move in his respective turn will lose the game.</p>

<p>Aleksa, being a girl, has a habit of playing first. But Chef is fairly smart himself, and will not play the game if he is going to lose it. Therefore, he wants to know the winner beforehand. Can you tell him who is going to win the game for the given configuration of cells?</p>

<h3>Input</h3>
<p> First line of input contains a single integer <b>T</b> denoting the number of test cases. First and the only line of each test case contains a string <b>S</b> consisting of the characters <b>'B'</b> and <b>'W'</b>, denoting black and white cells, respectively.</p>

<h3>Output</h3>
<p>For each test case, output <b>"Chef"</b> if chef wins the game for the given configuration. Else print <b>"Aleksa"</b>. (quotes for clarity only).</p>

<h3>Constraints</h3>
<ul>
<b><li>1 ≤ T ≤ 10</li></b>
<b><li>1 ≤ |S| ≤ 10000</li></b>
<b><li>S contains exactly 1 white cell.</li></b>
</ul>

<h3>Scoring</h3>
<ul>
<b><li> Subtask 1:  1 ≤ T ≤ 10, 1 ≤ |S| ≤ 10 : ( 30 pts )</li></b>
<b><li> Subtask 2:  1 ≤ T ≤ 10, 1 ≤ |S| ≤ 100 : ( 30 pts )</li></b>
<b><li> Subtask 3:  1 ≤ T ≤ 10, 1 ≤ |S| ≤ 10000 : ( 40 pts )</li></b>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
W
BW
BWBB

<b>Output</b>
Chef
Aleksa
Aleksa
</pre>

<h3> Explanation</h3>
<ul>
<li> <b>Test 1 :</b> Aleksa cannot make a move in her first turn as there is no black cell in the given configuration.</li>
<li> <b>Test 2 :</b> Aleksa can remove 1 black cell lying on the left of white cell in her turn. But then, Chef cannot make a move in his turn as there will be no black cells left.</li>
<li> <b>Test 3 :</b> Figure out yourself.</li>
</ul>