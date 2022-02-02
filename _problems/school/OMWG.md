---
{"category_name":"school","problem_code":"OMWG","problem_name":"One more weird game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"karanaggarwal","date_added":"11-06-2016","tags":{"0":"basic","1":"ltime37","2":"pavel1996","3":"simple","4":"trial"},"editorial_url":"http://discuss.codechef.com/problems/OMWG","time":{"view_start_date":1466874000,"submit_start_date":1466874000,"visible_start_date":1466874000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/mandarin/OMWG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/russian/OMWG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/vietnamese/OMWG.pdf">Vietnamese</a> as well.</h3>
<p>Leha is playing a very interesting game. The game will be played on a rectangular grid consisting of <b>N</b> rows and <b>M</b> columns. Initially all the cells of the grid are uncolored. </p>
<p>Leha's initial score is zero. At each turn, he chooses some cell that is yet not colored, and colors that cell. The score obtained in this step will be number of neighboring colored cells of the cell that Leha colored in this step. Two cells are neighbors of each other if they share a side between them. The game will end when all the cells are colored. Finally, total score obtained at the end of the game will sum of score obtained in each turn.</p>
<p>Leha wants to know what maximum score he can get? Can you please help him in finding this out?</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>Each of the following <b>T</b> lines contains two space-separated integers <b>N, M</b> denoting the dimensions of the grid.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing an integer corresponding to the maximal possible score Leha can obtain.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1 000</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1[30 points]</b>: <b>1</b> ≤ <b>N, M</b> ≤ <b>3</b></li>
<li><b>Subtask #2[70 points]</b>: <b>1</b> ≤ <b>N, M</b> ≤ <b>1 000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
2 2

<b>Output:</b>
4
</pre><h3>Explanation</h3>
<p>Leha can obtain total score 4 in the following way.</p>
<ul>
<li>In the first step, he colors down left cell, all the neighboring cells of this cell are uncolored. So, it adds <b>0</b> to total score.</li>
<li>In second step, he can color upper right cell, it also adds total <b>0</b> to the score.</li>
<li>In third step, he can color top left cell. There are two neighboring cell of this cell, both of which are colored. So, this add <b>2</b> to the score.</li>
<li>In the last step, he can choose the remaining down right cell. There are two neighboring cell of this cell, both of which are colored. So, this also add <b>2</b> to the score.</li>
</ul>

<p>
Leha can't obtain a score more than 4. Hence 4 is the answer.
</p>
