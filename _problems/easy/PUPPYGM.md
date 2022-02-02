---
{"category_name":"easy","problem_code":"PUPPYGM","problem_name":"Puppy and game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"zedthirtyeight","date_added":"24-06-2015","tags":{"0":"game","1":"ltime26","2":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/PUPPYGM","time":{"view_start_date":1437900300,"submit_start_date":1437900300,"visible_start_date":1437900300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME26/mandarin/PUPPYGM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME26/russian/PUPPYGM.pdf">Russian</a>.</h3>
<p>Tuzik and his master Vanka are playing some unusual game. Initially there are two stacks of nuts. The first stack contains <b>A</b> nuts and the second contains <b>B</b> nuts. A player's move consists of two steps:</p>
<ul>
<li>Choose one stack and eat it. </li>
<li>Split the other stack into two new stacks. If a player can't split it he loses (if stack contains only <b>1</b> nut).</li>
</ul>

<p>Tuzik starts the game. Tell who wins if both players play optimally.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The following <b>T</b> lines each contain 2 space-separated integers - <b>A</b> and <b>B</b> - for this test case.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the word "Tuzik" or "Vanka" (without quotes) depending on the winner in this test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>A, B</b> ≤ <b>10<sup>4</sup></b></li>
<li>Subtask #1[26 points]:<b>1</b> ≤ <b>A, B</b> ≤ <b>10</b></li>
<li>Subtask #2[30 points]:<b>1</b> ≤ <b>A, B</b> ≤ <b>100</b></li>
<li>Subtask #3[44 points]: <b>1</b> ≤ <b>A, B</b> ≤ <b>10<sup>4</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1
1 2

<b>Output:</b>
Vanka
Tuzik
</pre><h3>Explanation</h3>
<p>In the <b>first test case</b> Tuzik can't finish even the first move, so Vanka wins.</p>
<p>In the <b>second test case</b> Tuzik eats the first stack (with 1 nut), then splits the second stack (with 2 nuts) into two stacks, and Vanka loses.</p>
