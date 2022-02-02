---
{"category_name":"medium","problem_code":"SMARKET","problem_name":"Stable market","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pkacprzak","problem_tester":null,"date_added":"29-03-2017","tags":{"0":"april17","1":"pkacprzak"},"editorial_url":"https://discuss.codechef.com/problems/SMARKET","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/SMARKET.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/SMARKET.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/SMARKET.pdf">Vietnamese</a> as well.</h3>

<p>Sometimes, the stability of a stock market is at least as important as rapid price changes.</p>

<p>Let a <b>stable block</b> be a maximal consecutive block of days with same stock prices.</p>

<p>Moreover, let a <b>stable block of order K</b> be a stable block of length <b>at least K</b>.</p>

For example, if stock prices for 7 consecutive days are: 20, 10, 10, 7, 7, 7, 10, then there are 4 stable blocks there: [20], [10, 10], [7, 7, 7] and [10]. Moreover, there are:
<p></p>
<ul>
<li>0 stable blocks of order 4 or higher
<li>1 stable block of order 3: [7, 7, 7]
<li>2 stable block of order 2: [10, 10], [7, 7, 7]
<li>4 stable block of order 1: [20], [10, 10], [7, 7, 7] and [10]
</ul>
<p></p>

<p>Given historical prices of a stock across <b>N</b> days, the goal is to answer <b>Q</b> customers' questions.</p>

<p>The <b>i</b>-th question contains three integers <b>L<sub>i</sub>, R<sub>i</sub></b> and <b>K<sub>i</sub></b>. It asks for the number of stable blocks of order <b>K<sub>i</sub></b>, if only the stock prices of the days in the range <b>L<sub>i</sub>, R<sub>i</sub></b> are considered.

<h3>Input</h3>
<ul>
<li>In the first line there is a single integer <b>T</b>, denoting the number of test cases to handle. After that the description of <b>T</b> test cases follow.</li>

<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>Q</b>, denoting respectively, the number of days for which the stock prices are given, and the number of questions to answer.</li>

<li>
The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>, where <b>A<sub>i</sub></b> denotes the price of the stock on the <b>i</b>-th day. 
</li>
<li>
<b>Q</b> lines follow. In the <b>i</b>-th of them there are three space-separated integers <b>L<sub>i</sub>, R<sub>i</sub></b> and <b>K<sub>i</sub></b> denoting the <b>i</b>-th query.
</li>
</ul>

<h3>Output</h3>
<p>
For each test case, print answers to all queries in the test case, one per line.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li> 
<li>1 ≤ <b>N, Q</b> ≤ 10<sup>5</li> 
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>6</li> 
<li>1 ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b></li> 
<li>1 ≤ <b>K<sub>i</sub></b> ≤ <b>R<sub>i</sub> - L<sub>i</sub> + 1</b></li> 
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1: (10 points)</b>
<ul>
<li>1 ≤ <b>N, Q</b> ≤ 3000</li> 
</ul>
</p>

<p>
<b>Subtask #2: (90 points)</b>
<ul>
<li>original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
2
8 5
20 10 10 10 7 7 7 10
2 6 2
3 6 2
3 6 3
3 8 3
3 8 1
3 2
27 27 27
1 3 1
2 2 1


<b>Output:</b>
2
2
0
1
3
1
1
</pre>

<h3>Explanation</h3>
<p>There are two test cases to handle</p>

<p><b>Test case #1:</b></p>
<p>There are <b>8</b> days for which prices are given and <b>5</b> queries to handle.</p>
<p>The first query asks for the number of stable blocks of order <b>2</b> in range <b>[2, 6]</b>, which corresponds to prices <b>10 10 10 7 7</b>. The answer is <b>2</b> because there are two such blocks: <b>10 10 10</b> and <b>7 7</b>.</p>
<p>The second query asks for the number of stable blocks of order <b>2</b> in range <b>[3, 6]</b>, which corresponds to prices <b>10 10 7 7</b>. The answer is <b>2</b> because there are two such blocks: <b>10 10</b> and <b>7 7</b>.</p>
<p>The third query asks for the number of stable blocks of order <b>3</b> in range <b>[3, 6]</b>, which corresponds to prices <b>10 10 7 7</b>. The answer is <b>0</b> because there is no stable block of order <b>3</b> there (maximum order of a stable block is <b>2</b>).</p>
<p>The fourth query asks for the number of stable blocks of order <b>3</b> in range <b>[3, 8]</b>, which corresponds to prices <b>10 10 7 7 7 10</b>. The answer is <b>1</b> because the only stable block of order <b>3</b> here is <b>7 7 7</b>.</p>
<p>The fifth query asks for the number of stable blocks of order <b>1</b> in range <b>[3, 8]</b>, which corresponds to prices <b>10 10 7 7 7 10</b>. The answer is <b>3</b> because there are <b>3</b> stable blocks of order <b>1</b> there: <b>10 10</b>, <b>7 7 7</b> and <b>10</b>.

<p><b>Test case #2:</b></p>
<p>There are <b>3</b> days for which prices are given and <b>2</b> queries to handle.</p>
<p>The first query asks for the number of stable blocks of order <b>1</b> in range <b>[1, 3]</b>, which corresponds to prices <b>27 27 27</b>. The answer is <b>1</b> because the only such block there is <b>27 27 27</b>.</p>
<p>The second query asks for the number of stable blocks of order <b>1</b> in range <b>[2, 2]</b>, which corresponds to a single price <b>27</b>. The answer is <b>1</b> because the only such block there is <b>27</b>.</p>
