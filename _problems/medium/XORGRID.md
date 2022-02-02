---
{"category_name":"medium","problem_code":"XORGRID","problem_name":"Devu and most energetic minion","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":null,"date_added":"15-05-2015","tags":{"0":"cook58","1":"flying_ant","2":"medium","3":"tries"},"editorial_url":"http://discuss.codechef.com/problems/XORGRID","time":{"view_start_date":1432492200,"submit_start_date":1432492200,"visible_start_date":1432492200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/mandarin/XORGRID.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/russian/XORGRID.pdf">Russian</a> as well.</h3>


<p>After celebrating his birthday, Devu decided to have some adventure and set himself on a secret mission by joining the AVL (Anti-Villain League) to fight against bad people. For their new secret mission, Devu wants to recruit the most energetic minion. You know how minions get energy? By eating bananas. The minions travel in a grid <b>B</b> that has bananas in each of its <b>N x N</b> cells. <b>B[x][y]</b> is the energy stored in a banana in row <b>x</b> and column <b>y</b>.</p>

<p>
The journey starts from top-left cell (1, 1) and ends at bottom-right cell <b>(N, N)</b> by going only either right or down each step (i.e. from a cell (x, y) to either (x, y + 1) or (x + 1, y) only). Initial energy of minion is zero. When a minion with energy <b>e</b> enters a cell (x, y), it eats a banana and its energy becomes <b>e ^ B[x][y]</b>, where <b>^</b> is the standard bitwise-XOR operator. There are many different ways of completing the journey. Please help the minion to find out a journey with maximum energy so that it can be recruited by Devu. Please output the maximum energy a minion can achieve in some journey </p>

<i>(Bitwise xor operator is denoted by a caret (^) in several programming languages like C, C++, C#, Java, Perl, Ruby and Python. More about it: http://en.wikipedia.org/wiki/Exclusive_or)</i>


<h3>Input</h3>
<ul>
<li>There is a single test case.</li>
<li>First line contains an integer <b>N</b> denoting the number of rows or columns of the grid <b>B</b>.</li> 
<li>Next <b>N</b> lines represent the grid B, where each of these N lines contain N space separated integers. i-th line contains <b>N</b> space separated integers denoting i-th row of the grid B.</li>
</ul>

<h3>Output</h3>
<p>Print a single integer denoting maximum energy a minion can achieve at the end of a right-down path from (1, 1) to <b>(N, N)</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>18</b></li>
<li><b>0</b> ≤ <b>B[i][j]</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 3 2
3 4 3
5 3 7

<b>Output:</b>
4
</pre>

<h3>Explanation</h3>
<pre>
There are 6 different possible journeys of the minion, and energy at the end of them are --
One journey -- 1 ^ 3 ^ 2 ^ 3 ^ 7 = 4
Four journeys -- 1 ^ 3 ^ 4 ^ 3 ^ 7 = 2
One journeys -- 1 ^ 3 ^ 5 ^ 3 ^ 7 = 3
So the maximum energy achieved by a minion is 4.
</pre>