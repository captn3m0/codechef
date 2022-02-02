---
{"category_name":"easy","problem_code":"SPECIES","problem_name":"Bear and Species","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"kingofnumbers","date_added":"24-03-2017","tags":{"0":"dfs","1":"errichto","2":"flood_fill_algorithm","3":"graph","4":"ltime46","5":"simple"},"editorial_url":"https://discuss.codechef.com/problems/SPECIES","time":{"view_start_date":1490461200,"submit_start_date":1490461200,"visible_start_date":1490461200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/mandarin/SPECIES.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/russian/SPECIES.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/vietnamese/SPECIES.pdf">Vietnamese</a> as well.</h3>


<p>
Bearland can be represented as a square grid that consists of <b>N</b> rows and <b>N</b> columns.
Two cells are called adjacent if they share a side.
In the input, each cell is described by one character:
</p>

<ul>
<li>'.' is an empty cell.</li>
<li>'B', 'G' or 'P' is a cell inhabited by bears of one species — brown, grizzly or polar bears respectively.</li>
<li>'?' is a cell inhabited by bears of one species but you don't know which one.
Note that this cell can't be empty.</li>
</ul>

<p>Grizzly bears are the most aggressive species.
If a cell is inhabited by grizzly bears, all adjacent cells should be empty, because otherwise there would be fights between bears.</p>

<p>Brown and polar bears are a bit calmer.
All brown bears are fine with other brown bears in adjacent cells, but they would fight with bears of any other species.
Similarly, polar bears would fight with bears of any species other than polar bears.</p>

<p>Let X denote the number of question marks.
Since each question mark represents one of the three species, there are 3<sup>X</sup> ways to replace them with characters 'B', 'G' and 'P' (denoting the species that live in that cell).
Find the number of such ways that there are no fights between bears.
Print the answer modulo (10<sup>9</sup>+7).</p>




<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>
The first line of each test case contains an integer <b>N</b> denoting the size of the grid.
</p>

<p>The following <b>N</b> lines describe the grid.
Each of those lines contains a string of length <b>N</b>.
Each character is one of five: '.', '?', 'B', 'G', 'P'.



<h3>Output</h3>

<p>For each test case, output a single line containing one integer — the number of ways to replace question marks to avoid fights in Bearland, modulo (10<sup>9</sup>+7).</p>



<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>2 ≤ <b>N</b> ≤ 50</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): 2 ≤ <b>N</b> ≤ 3</li>
<li>Subtask #2 (30 points): Each character in the grid will be either '.' or '?'.</li>
<li>Subtask #3 (40 points): Original constraints.</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
<code>6
3
..?
.?B
G..
2
GG
..
3
?..
.??
??.
3
??P
???
??B
7
?.?.?.?
.?.?.?.
?.?.?.?
.?.?.?.
?.?.?.?
.?.?.?.
?.?.?.?
2
PP
PP</code>

<b>Output:</b>
1
0
6
0
288603514
1
</pre>



<h3>Explanation</h3>

<p><b>Test case 1.</b> We are given the grid of size 3 × 3. One of the already fixed cells is inhabited by brown bears. They would fight with bears of any species other than brown bears, so adjacent cells with question marks must by inhabited by brown bears as well.
Hence, there is only 1 way to replace question marks (both of them must be replaced by 'B').</p>

<p><b>Test case 2.</b> In the given grid, there are two adjacent cells both inhabited by grizzly bears.
They will fight with each other, so the answer is 0 — it's impossible to replace question marks so that there would be no fights (it doesn't matter that there are no question marks at all).</p>

<p><b>Test case 3.</b> There are 6 ways:</p>

<pre><code>B.. B.. G.. G.. P.. P..
.BB .PP .BB .PP .BB .PP
BB. PP. BB. PP. BB. PP.</code></pre>

<br>


<p><b>Test case 4.</b> No matter how we replace question marks, bears in some two adjacent cells will start a fight.
The answer is 0.</p>