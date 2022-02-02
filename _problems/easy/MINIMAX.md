---
{"category_name":"easy","problem_code":"MINIMAX","problem_name":"Minimax","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"19-06-2017","tags":{"0":"errichto"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/MINIMAX.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/MINIMAX.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MINIMAX.pdf">Vietnamese</a> as well.</h3>

<p>Let's consider a square grid with <b>N</b> rows and <b>N</b> columns, both numbered 1 through <b>N</b>. Each cell contains one integer. Let r<sub>i</sub> denote the minimum value in the i-th row, and let C<sub>i</sub> denote the maximum value in the i-th column. A grid is called <i>nice</i> if and only if the following condition holds true:</p>

<p>max(r<sub>1</sub>, r<sub>2</sub>, ..., r<sub><b>N</b></sub>) = min(C<sub>1</sub>, C<sub>2</sub>, ..., C<sub><b>N</b></sub>)</p>

<p>Chef has a square grid and can change some of its elements (numbers in the cells).
Find the minimum possible number of elements Chef should change, so that the new grid is nice.</p>

<p>An element can be changed to any integer.</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>N</b>, denoting the size of the grid.</p>

<p>The following <b>N</b> lines describe the grid.
The i-th of those lines contains <b>N</b> integers, denoting the numbers in the i-th row.</p>

<h3>Output</h3>

<p>Print one integer, denoting the minimum number of changes required to make the grid nice.</p>

<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>N</b> ≤ 1000</li>
<li>Each number in the initial grid is between 1 and 10<sup>6</sup>, inclusive.</li>
</ul>


<h3>Examples</h3>
<pre><b>Input1:</b>
3
10 20 30
20 10 30
10 5 35

<b>Output1:</b>
1


<b>Input2:</b>
3
10 20 10
20 10 5
30 30 35

<b>Output2:</b>
0


<b>Input3:</b>
4
1 1 3 4
5 1 1 8
9 10 1 1
1 14 15 1

<b>Output3:</b>
2
</pre>


<h3>Explanation</h3>

<p><b>Example #1.</b> In the first example, initially we have r<sub>1</sub> = 10, r<sub>2</sub> = 10 and r<sub>3</sub> = 5. For columns, we have C<sub>1</sub> = 20, C<sub>2</sub> = 20 and C<sub>3</sub> = 35.</p>

<p>max(r<sub>1</sub>, r<sub>2</sub>, r<sub>3</sub>) = 10 and min(C<sub>1</sub>, C<sub>2</sub>, C<sub>3</sub>) = 20, and so the given grid isn't nice.
Chef can change the second number in the first row from 20 to 10, to get the following nice grid:</p>

<pre>10 <b>10</b> 30
20 10 30
10 5 35</pre>

<p>The answer is 1 because we must change at least 1 number.</p>

<p><b>Example #2.</b> The provided grid is already nice, so the answer is 0.</p>