---
{"category_name":"easy","problem_code":"INTERVAL","problem_name":"Interval Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"8-06-2016","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/INTERVAL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/INTERVAL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/INTERVAL.pdf">Vietnamese</a> as well.</h3>

<p>Chef and his brother Chefu are playing a game. The game consist of two sequences of integers <b>A</b> of length <b>N</b> and <b>B</b> of length <b>M</b>, and it will last for exactly <b>M</b> turns, Chef will play in odd turns whereas Chefu will play in even turns (turns and sequences are 1-based).</p>

<p>In the <b>i</b>-th turn, the corresponding player should select an interval (continuous subsegment) of sequence <b>A</b> of length <b>B<sub>i</sub></b> that is <b>strictly</b> inside the interval selected in previous turn, i.e. if the interval in previous turn was <b>[l,r]</b> then if the interval in current turn is <b>[u,v]</b> then it should satisfy <b>l < u ≤ v < r</b>, except in the first turn where the player can select any interval of length <b>B<sub>1</sub></b>.</p>

<p>Initially the score of the game is 0. If it was <b>Chef</b>'s turn then we <b>add</b> to the score of the game points equal to sum of integers of the selected interval of sequence <b>A</b>. If it was <b>Chefu</b>'s turn then we <b>subtract</b> from the score of the game points equal to sum of integers of the selected interval of sequence <b>A</b>.</p>

<p>Chef wants to maximize the score of the game in the end while Chefu want to minimize it. Can you find out the score of the game in the end given that both Chef and Chefu are playing optimally.</p>


<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the number of test-cases. Description of <b>T</b> test cases follow.</p>
<p>First line of each test case contains two space separated integers <b>N</b> and <b>M</b>, denoting the length of the sequence and the number of turns for which the game will last, respectively.</p>
<p>Second line of each test case contains <b>N</b> space separated integers denoting the sequence <b>A</b></p>
<p>Third line of each test case contains <b>M</b> space separated integers denoting the sequence <b>B</b></p>

<h3>Output</h3>
<p>For each test case, output a single integer in a separate line corresponding to the score of the game at the end of the game.</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10,000</b></li>
<li><b>1</b> ≤ sum of <b>N</b> in all test-cases ≤ <b>300,000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>1,000,000,000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>N</b></li>
<li>For each valid <b>i</b>: <b>B<sub>i+1</sub></b> + 2 ≤ <b>B<sub>i</sub></b></li>
</ul>


<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (20 points)</b>: sum of <b>N</b> in all test-cases ≤ <b>400</b></li>
<li><b>Subtask #2 (20 points)</b>: <b>M = 2</b></li>
<li><b>Subtask #3 (60 points</b>: No additional constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
8 3
3 7 5 4 9 6 1 3
6 3 1</tt>

<b>Output:</b>
<tt>20</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef chooses the interval <b>[1, 6]</b> (i.e. <b>(3, 7, 5, 4, 9, 6)</b>). The score now is 34 points.</p>

<p>In the next turn, Chefu chooses the interval <b>[3, 5]</b> (i.e. <b>(5, 4, 9)</b>). The score now is 34 - 18 = 16 points.</p>

<p>In the next turn, Chef chooses the interval <b>[4, 4]</b> (i.e. <b>(4)</b>). So finally score of the game is 16 + 4 =20.</p>

<p>This is the score of the game when both Chef and Chefu play optimally.</p>