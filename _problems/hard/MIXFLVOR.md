---
{"category_name":"hard","problem_code":"MIXFLVOR","problem_name":"Mixing flavors","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"errichto","date_added":"31-01-2017","tags":{"0":"cook79","1":"gauss","2":"kingofnumbers","3":"medium","4":"two"},"editorial_url":"https://discuss.codechef.com/problems/MIXFLVOR","time":{"view_start_date":1487529000,"submit_start_date":1487529000,"visible_start_date":1487529000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Please refer to sample test in English version of statement.<br>
Except for that, you can read problem statement in <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/mandarin/MIXFLVOR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/russian/MIXFLVOR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/vietnamese/MIXFLVOR.pdf">Vietnamese</a>.</h3>

<p>There are <b>N</b> ice-creams placed in a row in a shop, where the <b>i</b>-th has cost <b>C[i]</b> and flavor <b>F[i]</b>. Chef wants to buy some <b>consecutive segment</b> of ice-creams so that their total cost doesn't exceed his budget <b>K</b>, and he can mix some subset of bought ice-creams to make a new ice-cream with maximum possible flavor.</p>

<p>Mixing m ice-creams of flavors <b>A<sub>1</sub>, A<sub>2</sub>, .., A<sub>m</sub></b> will result in an ice-cream of flavor equal to <b>A<sub>1</sub> ^ A<sub>2</sub> ^ ... ^ A<sub>m</sub></b> where <b>^</b> is the <A HREF = "https://en.wikipedia.org/wiki/Bitwise_operation#XOR">xor</A> operation. </p>

<p>What is maximum possible flavor that Chef can get?
It's guaranteed that at least one ice-cream has cost that doesn't exceed Chef's budget.
</p>



<h3>Input</h3>
<p>First line contains an integer <b>T</b>, which is the number of test-cases.</p>

<p>The first line of each test-case contains two integers: <b>N</b> and <b>K</b>.</p>

<p>Each of the following <b>N</b> lines contains two integers <b>C[i]</b> and <b>F[i]</b>. </p>

<h3>Output</h3>
<p>Output the answer of each test-case in new line, the maximum flavor that the Chef can get.</p>

<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10,000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li>sum of <b>N</b> in all test-cases will not exceed <b>100,000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10^14</b></li>
<li><b>1</b> ≤ <b>F[i]</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>C[i]</b> ≤ <b>10^9</b></li>
<li><b>C[i]</b> ≤ <b>K</b> for at least one <b>i</b>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
5 15
2 4
7 1
5 9
15 6
3 12
3 1000
123 8
99999 1
80 7

<b>Output:</b>
13
8
</pre>

<h3>Explanation</h3>
<p><b>Test case 1:</b> The binary representations of the 5 flavors, in order, are: (<i>0100, 0001, 1001, 0110, 1100</i>), and the corresponding prices are (2,7,5,15,3).</p>

<p>If Chef buys only the 5<sup>th</sup> ice-cream with cost 3 and flavor 12. But if Chef buys the first 3 ice-creams, his total cost is 2+7+5 = 14, which is within his budget of 15, and hence valid. Now, from these three bought ice-creams, he can choose to mix just the first and third, and get a flavor of <i>0100^1001</i> = <i>1101</i>, which is  13. You can verify that this is the best that he can do.</p>
<p><b>Test case 2:</b> Chef can afford the first or the last ice-cream. He could afford them both but he must buy a consecutive segment of ice-creams while the cost of the second ice-cream is beyond his budget.</p>
<p>It's optimal to buy the first ice-cream only and use its flavor only, what gives us the answer 8.</p>