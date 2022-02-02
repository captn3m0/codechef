---
{"category_name":"medium","problem_code":"GAMSTICK","problem_name":"Game on Stick","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"melnik","problem_tester":"kingofnumbers","date_added":"17-08-2017","tags":{"0":"cook85","1":"game","2":"medium","3":"melnik"},"editorial_url":"https://discuss.codechef.com/problems/GAMSTICK","time":{"view_start_date":1503253800,"submit_start_date":1503253800,"visible_start_date":1503253800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/mandarin/GAMSTICK.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/russian/GAMSTICK.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/vietnamese/GAMSTICK.pdf">vietnamese</a> as well.</h3>

<p> </p>
<p>One free afternoon, Chef found an old board game in his kitchen. He decided to invite his friends Miron and Slava to come play it with him. </p> 

<p>The board is a rectangular grid of size <b> 2 × N</b>. Initially, Miron and Slava each put their chips at a location <b>(x<sub>1</sub>,y<sub>1</sub> )</b> and <b>(x<sub>2</sub>,y<sub>2</sub> )</b> respectively. The game then proceeds as follows : 

<ul>
<li> Each player moves their chip in turns.</li>
<li> In each turn, a player can move his chip to an adjacent cell that has not been visited by the other player before.</li>
<li> Two cells are adjacent if they share a side</li>
<li> A player can also skip his turn</li>
<li> The cell that is initially occupied by a particular player's chip is considered visited by him</li>
</ul>
</p>
 
<p> The outcome of the game is decided as follows : 
<ul>
<li> If a player manages to visit strictly more than half the total number of cells (i.e. visited at least <b>N</b>+1 cells), he immediately <b>wins</b> and the other player loses.</li>
<li>if the game continued for more than <b>10<sup>100</sup></b> turns without any player declared a winner yet then it becomes a <b>draw</b>.</li>
</ul>
</p>

<p>Given that both players move optimally and Miron starts first, can you help Chef predict the winner of the game?</p>




<h3>Input</h3>
<p> The first line contains a single integer <b>T</b>, the number of test cases. Each test case is described by a single line containing five space-separated integers <b>N</b>, <b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>, <b>x<sub>2</sub></b>, <b>y<sub>2</sub></b>. </p>

<h3>Output</h3>
<p>For each test case, output a single line with string <b>Miron</b>, <b>Slava</b> or <b>Draw</b>, denoting the answer to the problem.</p>

<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10<sup>5</sup> </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10<sup>18</sup> </b></li>
<li><b>1</b> ≤ <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>  ≤  <b>2</b></li>
<li><b>1</b> ≤ <b>y<sub>1</sub></b>, <b>y<sub>2</sub></b>  ≤  <b>N</b></li>
<li>Cells (<b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>) and (<b>x<sub>2</sub></b>, <b>y<sub>2</sub></b>) are different.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
5 1 1 2 3
1 1 1 2 1
3 1 1 2 3
4 1 2 1 4
<b>Output:</b>
Slava
Draw
Draw
Miron
</pre>
<p> </p>