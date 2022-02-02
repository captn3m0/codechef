---
{"category_name":"school","problem_code":"RGAME","problem_name":"Rupsa and the Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":"mgch","date_added":"11-05-2015","tags":{"0":"abhra73","1":"ad","2":"easy","3":"jan16"},"editorial_url":"http://discuss.codechef.com/problems/RGAME","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/RGAME.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/RGAME.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/RGAME.pdf">Vietnamese</a> as well.</h3>


<p>Princess Rupsa saw one of her friends playing a special game. The game goes as follows:
<ul>
<li><b>N+1</b> numbers occur sequentially (one at a time) from <b>A<sub>0</sup></b> to <b>A<sub>N</sub></b>.</li>
<li>You must write the numbers on a sheet of paper, such that <b>A<sub>0</sub></b> is written first. The other numbers are written according to an inductive rule — after <b>A<sub>i-1</sub></b> numbers have been written in a row, then <b>A<sub>i</sub></b> can be written at either end of the row. That is, you first write <b>A<sub>0</sub></b>, and then <b>A<sub>1</sub></b> can be written on its left or right to make <b>A<sub>0</sub>A<sub>1</sub></b> or <b>A<sub>1</sub>A<sub>0</sub></b>, and so on.</li>
<li><b>A<sub>i</sub></b> must be written before writing <b>A<sub>j</sub></b>, for every <b>i &lt; j</b>.</li>
<li>For a move in which you write a number <b>A<sub>i</sub> (i>0)</b>, your points increase by the product of <b>A<sub>i</sub></b> and its neighbour. (Note that for any move it will have only one neighbour as you write the number at an end).</li>
<li>Total score of a game is the score you attain after placing all the <b>N + 1</b> numbers.</li></ul></p>

<p>Princess Rupsa wants to find out the sum of scores obtained by all possible different gameplays. Two gameplays are different, if after writing down all <b>N + 1</b> numbers, when we read from left to right, there exists some position <b>i</b>, at which the gameplays have <b>a<sub>j</sub></b> and <b>a<sub>k</sub></b> written at the <b>i<sup>th</sup></b> position such that <b>j &ne; k</b>. But since she has recently found her true love, a frog Prince, and is in a hurry to meet him, you must help her solve the problem as fast as possible. Since the answer can be very large, print the answer modulo <b>10<sup>9</sup> + 7</b>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>		
<li>The first line of each test case contains a single integer <b>N</b>. </li>
<li>The second line contains <b>N + 1</b> space-separated integers denoting <b>A<sub>0</sub></b> to <b>A<sub>N</sub></b>.</li>
</ul> 

<h3>Output</h3>
<ul><li>
For each test case, output a single line containing an integer denoting the answer.
</li></ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</b></li>
<li><b>1</b> ≤ <b>A<sub>i</b> ≤ <b>10<sup>9</b></li>
</ul>

<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: 1 ≤ <b>N</b> ≤ 10 (10 points)</li>
<li>Subtask #2: 1 ≤ <b>N</b> ≤ 1000 (20 points)</li>
<li>Subtask #3: Original Constraints (70 points)</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1
1 2
2
1 2 1

<b>Output:</b>
4
14
</pre>

<h3>Explanation</h3>
<ul>
<li>There are <b>2</b> possible gameplays. <b>A<sub>0</sub>A<sub>1</sub></b> which gives score of <b>2</b> and  <b>A<sub>1</sub>A<sub>0</sub></b> which also gives score of <b>2</b>. So the answer is <b>2 + 2 = 4</b>
</ul>