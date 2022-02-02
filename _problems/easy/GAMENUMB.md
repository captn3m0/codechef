---
{"category_name":"easy","problem_code":"GAMENUMB","problem_name":"Game with numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"21-02-2018","tags":{"0":"easy","1":"game","2":"kingofnumbers","3":"ltime57","4":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/GAMENUMB","time":{"view_start_date":1519491600,"submit_start_date":1519491600,"visible_start_date":1519491600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/mandarin/GAMENUMB.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/russian/GAMENUMB.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/vietnamese/GAMENUMB.pdf">Vietnamese</a> as well.</h3>

<p>Chef is playing a game with his brother Chefu. Before the game begins, <b>C</b> cards are placed on a table. Each card has a number written on it; since <b>C</b> can be very large, these numbers are described by two sequences <b>A</b> and <b>D</b>. Each of these sequences has length <b>N</b>; for each <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>), <b>D<sub>i</sub></b> cards, each with number <b>A<sub>i</sub></b> written on it, are placed on the table. Therefore, <b>C</b> is equal to the sum of elements of <b>D</b>. Note that the elements of <b>A</b> don't have to be unique.</p>

<p>You are also given a sequence <b>B</b> with length <b>K</b>. The game will last for exactly <b>K</b> rounds numbered 1 through <b>K</b>. The players alternate turns — Chef plays on odd-numbered turns and his brother on even-numbered turns. In the <b>i</b>-th round, the current player must select <b>B<sub>i</sub></b> cards currently lying on the table, keep these cards on the table and discard all other cards.</p>

<p>Chef's goal is to maximize the sum of numbers written on cards that remain on the table after the last round, while Chefu's goal is minimize this sum. What will be the sum of numbers written on cards remaining on the table if both players play optimally?</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
<li>The third line contains <b>N</b> space-separated integers <b>D<sub>1</sub>, D<sub>2</sub>, ..., D<sub>N</sub></b>.</li>
<li>The fourth line contains <b>K</b> space-separated integers <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>K</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the sum of numbers on cards that remain on the table at the end of the game.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b>, <b>K</b> ≤ 100,000</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 100,000</li>
<li>1 ≤ sum of <b>K</b> over all test cases ≤ 100,000</li>
<li>1 ≤ <b>A<sub>i</sub></b>, <b>D<sub>i</sub></b> ≤ 1,000,000 for each valid <b>i</b></li>
<li>1 ≤ <b>B<sub>i</sub></b> ≤ <b>C</b> for each valid <b>i</b></li>
<li><b>B<sub>i+1</sub></b> < <b>B<sub>i</sub></b> for each valid <b>i</b></li>

</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (20 points):</b> 
<ul>
<li><b>D<sub>i</sub></b> = 1 for each valid <b>i</b></li>
<li>sum of <b>N</b> over all test cases ≤ 1,000</li>
<li>sum of <b>K</b> over all test cases ≤ 1,000</lI>
</ul>
</p>

<p>
<b>Subtask #2 (80 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
4 2
1 2 3 4
2 2 2 2
6 3

<b>Output:</b>

7
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The cards that are on table initially are 1, 1, 2, 2, 3, 3, 4, 4 Chef in his turn should select 6 cards to keep and discard the rest, so he will keep 2, 2,
 3, 3, 4, 4 after that Chefu should keep 3 cards and discard the rest, so he will keep 2, 2,
 3 after that the game ends and sum of cards remained on the table is 2 + 2 + 3 = 7</p>