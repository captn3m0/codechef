---
{"category_name":"medium","problem_code":"LOTERY","problem_name":"LCM equation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 4","source_sizelimit":50000,"problem_author":"kaizer","problem_tester":null,"date_added":"5-09-2015","tags":{"0":"kaizer","1":"lcm","2":"medium","3":"oct15","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/LOTERY","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/LOTERY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/LOTERY.pdf">Russian</a> </h3>
<p>Chef is exploring a new mathematical problem, which can be stated as follows:</p>
<p>
<img src ="http://mathurl.com/ok7rd4a.png" /><br />
<br />
<img src="http://mathurl.com/nz4fycw.png" /> </p>
<p>where <b>[x]</b> means greatest integer which doesn't exceed <b>x</b>.
</p>
<p>
Chef wants you to answer some questions for a given pair of integers <b>N</b>, <b>K</b>:<br />
What is the <a href = "https://en.wikipedia.org/wiki/Least_common_multiple"> <b> least common multiple</b></a> of <b>F(N, 1)</b>, <b>F(N, 2)</b>, ... , <b>F(N, K)</b> modulo <b>10<sup>9</sup> + 7</b>.
</p>
<p>Chef is not willing to give you all queries at once. Instead, he gives you the first query and suggests you generate all the following queries in this way:</p>
<p>
<b>N<sub>i</sub> = 1 + (A * Answer<sub>i-1</sub> + C<sub>i</sub>) mod M </b>,<br />
<b>K<sub>i</sub> = 1 + (B * Answer<sub>i-1</sub> + D<sub>i</sub>) mod N<sub>i</sub></b>, <br />
where <b>Answer<sub>i</sub></b> is the answer for the <b>i</b><sup>th</sup> query.
</p>
<h3>Input</h3>
<p>
The first line of input contains an integer <b>T</b> denoting the number of questions Chef wants to ask you. <br />
Second line contains two space-separated integers <b>N<sub>1</sub>, K<sub>1</sub></b>.<br />
Third line contains three space-separated integers <b>A</b>, <b>B</b>, and <b>M</b>, described in the statement.<br />
Next line contains <b>T-1</b> space-separated integers: <b>C<sub>2</sub></b>, <b>C<sub>3</sub></b>, ... , <b>C<sub>T</sub></b><br />
Next line contains <b>T-1</b> space-separated integers: <b>D<sub>2</sub></b>, <b>D<sub>3</sub></b>, ... , <b>D<sub>T</sub></b>
</p>
<h3>Output</h3>
<p>
For each test case, output a single integer — the answer for the given query.
</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>A</b>, <b>B</b>, <b>C<sub>i</sub></b>, <b>D<sub>i</sub></b> &lt; <b>M</b> ≤  <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>K<sub>1</sub></b> ≤ <b>N<sub>1</sub></b>&lt; <b>M</b></li>
</ul>
<p></p>
<p><b>Subtask1:(10 points) </b></p>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10</b></li>
<li>Time Limit is <b>1</b> second</li>
</ul>
<p></p>
<p><b>Subtask2: (20 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>2</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>3</sup></b></li>
<li>Time Limit is <b>1</b> second</li>
</ul>
<p></p>
<p><b>Subtask3: (30 points)</b></p>
<ul>
<li><b>A = B = 0</b></li>
<li>Time Limit is <b>4</b> seconds</li>
</ul>
<p></p>
<p><b>Subtask4: (40 points)</b></p>
<ul>
<li>No additional constraints</li>
<li>Time Limit is <b>4</b> seconds</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
2 1
0 0 3
2 2
0 1</tt>
<b>Output:</b>
<tt>2
3
6</tt>
</pre><p></p>
<pre><b>Input:</b>
<tt>4
5 2
2 3 6
4 2 3
2 4 2</tt>
<b>Output:</b>
<tt>20
6
6
4</tt>

<h3>Explanation</h3>
<p><b>Example case 1.</b> 
<b>F(2,1) = F(2,2) = 2,  F(3,1) = 3, F(3,2) = 6, F(3,3) = 3</b>
<b>1st query</b> - (2,1). <b>Answer</b> = 2.
<b>2nd query</b> - (3,1). <b>Answer</b> = 3
<b>3rd query</b> - (3,2). <b>Answer</b> = 6
</p>

<p><b>Example case 2.</b> 
<b>F(4,1) = 4, F(5,2) = 20</b>
<b>1st query</b> - (5,2). 
      <b>Answer</b> = lcm(F(5,1), F(5,2)) = lcm(5,20) = 20
<b>2nd query</b> - (1 + (20 * 2 + 4) mod 6, 1 + (20 * 3 + 2) mod n) = (3, 3). 
      <b>Answer</b> = lcm(F(3,1), F(3,2), F(3,3)) = lcm(3,6,3) = 6
<b>3rd query</b> - (1 + (6*2 + 2) mod 6, 1 + (6*3 + 4) mod n) = (3,2). 
      <b>Answer</b> = lcm(F(3,1), F(3,2)) = 6
<b>4th query</b> - (1 + (6*2 + 3) mod 6, 1 + (6*3 + 2) mod n) = (4,1).
      <b>Answer</b> = lcm(F(4,1)) = 4
</p></pre>