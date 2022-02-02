---
{"category_name":"medium","problem_code":"SEEDLING","problem_name":"Buying Seedlings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"pavel1996","date_added":"3-11-2015","tags":{"0":"dynamic","1":"easy","2":"ltime31","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SEEDLING","time":{"view_start_date":1451205000,"submit_start_date":1451205000,"visible_start_date":1451205000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/mandarin/SEEDLING.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/russian/SEEDLING.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/vietnamese/SEEDLING.pdf">Vietnamese</a> as well.</h3>

<p>Recently, Sergey bought a plot of <b>S</b> square units and now wants to build a cherry tree farm at this plot.</p>

<p>In order to do so, he wants to visit the market and buy a number of cherry tree seedlings. There are <b>N</b> kinds of seedlings available in the market. One seedling of the <b>i</b><sup>th</sup> kind will occupy <b>A<sub>i</sub></b> square units of Sergey's farm, will bring Sergey <b>C<sub>i</sub></b> burles of profit, and costs <b>B<sub>i</sub></b> burles each. There is an infinite amount of seedlings of each kind available.</p>

<p>Now, Sergey wants to know the number of ways to buy some seedlings in such a way that the total space they occupy will not exceed the size of Sergey's plot of land and the profit from cherry trees from the seedlings bought exceeds the money spent on them.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each description contains two space-separated integers <b>N</b> and <b>S</b> denoting the number of kinds of seedlings and the area of Sergey's plot of land.</p>

<p>Each of the following <b>N</b> lines contains three space-separated integers — <b>A<sub>i</sub>, B<sub>i</sub>, and C<sub>i</sub></b> — denoting the area occupied by one seedling of the <b>i</b><sup>th</sup> kind, the cost of one seedling of this kind and the profit a seedling of this kind will bring, respectively.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the number of ways to buy seedlings in such a way that the profit from these seedlings exceeds the expenses on these seedlings and the occupied area doesn't exceed <b>S</b>, modulo 10<sup>9</sup>+7. </p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>S</b></li>
<li><b>1</b> ≤ sum of <b>N</b> in a single test case ≤ <b>100</b></li>

<li>Subtask 1 (17 points):

<ul>
<li><b>1</b> ≤ <b>N, S</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub>, C<sub>i</sub></b> ≤ <b>10</b></li>
</ul>

</li>

<li>Subtask 2 (35 points):

<ul>
<li><b>1</b> ≤ <b>N, S</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub>, C<sub>i</sub></b> ≤ <b>50</b></li>
</ul>

</li>

<li>Subtask 3 (48 points):


<ul>
<li><b>1</b> ≤ <b>N, S</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b> ≤ <b>10<sup>7</sup></b></li>
</ul>

</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
2 2
1 45 8668081
1 97 55</tt>

<b>Output:</b>
<tt>3</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There are three possible options: 
<ul>
<li>Buy one seedling of the first kind.</li>
<li>Buy two seedlings of the first kind.</li>
<li>Buy one seedling of the first kind and one seedling of the second kind.</li>
</ul>
</p>