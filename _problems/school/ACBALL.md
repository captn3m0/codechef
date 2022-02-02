---
{"category_name":"school","problem_code":"ACBALL","problem_name":"Akhil And Colored Balls","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"prateekg603","date_added":"7-05-2016","tags":{"0":"amitpandeykgp","1":"greedy","2":"ltime36"},"editorial_url":"http://discuss.codechef.com/problems/ACBALL","time":{"view_start_date":1464454800,"submit_start_date":1464454800,"visible_start_date":1464454800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/mandarin/ACBALL.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/russian/ACBALL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/vietnamese/ACBALL.pdf">Vietnamese</a> as well.</h3>


<p>Akhil has many balls of white and black colors. One day, he was playing with them. During the play, he arranged the balls into two rows both consisting of <b>N</b> number of balls. These two rows of balls are given to you in the form of strings <b>X, Y</b>. Both these string consist of 'W' and 'B', where 'W' denotes a white colored ball and 'B' a black colored.
</p>

<p>Other than these two rows of balls, Akhil has an infinite supply of extra balls of each color. he wants to create another row of <b>N</b> balls, <b>Z</b> in such a way that the sum of hamming distance between <b>X</b> and <b>Z</b>, and hamming distance between <b>Y</b> and <b>Z</b> is maximized.</p>

<p><a href = "https://en.wikipedia.org/wiki/Hamming_distance">Hamming Distance</a> between two strings <b>X</b> and <b>Y</b> is defined as the number of positions where the color of balls in row <b>X</b> differs from the row <b>Y</b> ball at that position. e.g. hamming distance between "WBB", "BWB" is 2, as at position 1 and 2, corresponding colors in the two strings differ.</p>.

<p>As there can be multiple such arrangements of row <b>Z</b>, Akhil wants you to find the lexicographically smallest arrangement which will maximize the above value. 
</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>First line of each test case will contain a string <b>X</b> denoting the arrangement of balls in first row</li>
<li>Second line will contain the string <b>Y</b> denoting the arrangement of balls in second row.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the string of length <b>N</b> denoting the arrangement of colors of the balls belonging to row <b>Z</b>.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
</ul>

<h3>Subtasks</h3>
<li>Subtask #1 (10 points) : <b>1</b> ≤ <b>N</b> ≤ <b>16</b></li>
<li>Subtask #2 (20 points) : <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<li>Subtask #3 (70 points) : <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>

<pre><b>Input:</b>
1
WBWB
WBBB

<b>Output:</b>
BWBW

<h3>Explanation</h3>
<p><b>Example case 1.</b> As we know, Hamming Distance(WBWB, BWBW) + Hamming Distance(WBBB, BWBW) = 4 + 3 = 7.
You can try any other value for string <b>Z</b>, it will never exceed 6. </p>