---
{"category_name":"medium","problem_code":"LEMOVIE","problem_name":"Little Elephant and Movies","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"20-03-2012","tags":{"0":"easy","1":"feb14","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEMOVIE","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/LEMOVIE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/LEMOVIE.pdf">Russian</a>.</h3>
<p>Little Elephant from Zoo of Lviv likes to watch movies.</p>
<p>There are <b>N</b> different movies (numbered from <b>0</b> to <b>N − 1</b>) he wants to watch in some order. Of course, he will watch each movie exactly once. The priority of <b>i</b><sup>th</sup> movie is <b>P<sub>i</sub></b>.</p>
<p>A watching of a movie is called <i>exciting</i> if and only if one of the following two conditions holds:</p>
<ul>
<li>This is the first watching.</li>
<li>The priority of this movie is strictly greater than the maximal priority of the movies watched so far.</li>
</ul>
<p>Let us call the number of <i>exciting</i> watchings the <i>excitingness</i> of the order.</p>
<p>Help him to find the number of different watching orders whose <i>excitingness</i> does not exceed <b>K</b>. Since the answer can be large, print it modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>. The next line contains <b>N</b> space-separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, print the number of different watching orders having at most <b>K</b> <i>excitingness</i> modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ K ≤ N ≤ 200</b></li>
<li><b>1 ≤ P<sub>i</sub> ≤ 200</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 1
3 1 2
4 3
1 2 2 3

<b>Output:</b>
2
24
</pre>
<h3>Explanation</h3>
<p>In the first case, there are two boring watching orders whose <i>excitingness</i> not greater than <b>K=1</b>: <b>[3, 1, 2]</b>, <b>[3, 2, 1]</b>. Both watching orders have one <i>exciting</i> watching: the first watching.</p>
<p>In the second case, every watching order has at most <b>3</b> <i>excitingness</i>.</p>