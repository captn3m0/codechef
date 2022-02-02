---
{"category_name":"medium","problem_code":"TWONIM","problem_name":"Dual Nim","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"antoniuk1","date_added":"27-01-2016","tags":{"0":"cook68","1":"easy","2":"game","3":"nim","4":"parity","5":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/TWONIM","time":{"view_start_date":1458498600,"submit_start_date":1458498600,"visible_start_date":1458498600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/mandarin/TWONIM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/russian/TWONIM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/vietnamese/TWONIM.pdf">Vietnamese</a> as well.</h3>
<p><a href="https://en.wikipedia.org/wiki/Nim">Nim</a> is a well-known combinatorial game, based on removing stones from piles. In this problem, we'll deal with a similar game, which we'll call Dual Nim. The rules of this game are as follows:</p>
<ul>
<li>Initially, there are <b>N</b> piles of stones, numbered <b>1</b> through <b>N</b>. The <b>i</b>-th pile contains <b>a<sub>i</sub></b> stones.</li>
<li>The players take alternate turns. If the <a href="https://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise XOR</a> of all piles equals 0 before a player's turn, then that player wins the game.</li>
<li>In his/her turn, a player must choose one of the remaining piles and remove it. (Note that if there are no piles, that player already won.)</li>
</ul>

<p>Decide which player wins, given that both play optimally.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> - the number of test cases.</li>
<li>The first line of each test case contains <b>N</b> - the number of piles.</li>
<li>The following line contains <b>N</b> space-separated integers <b>a<sub>1</sub>,..,a<sub>N</sub></b> - the sizes of piles.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output one string on a separate line - "First" (without quotes) if the first player wins, "Second" (without quotes) if the second player wins.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 500</b></li>
<li><b>1 ≤ a<sub>i</sub> ≤ 500</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
1 2 4 8
3
2 3 3
5
3 3 3 3 3

<b>Output:</b>
First
Second
Second
</pre>