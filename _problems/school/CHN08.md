---
{"category_name":"school","problem_code":"CHN08","problem_name":"Crazy Malvika discovers Crazy Fibonacci function","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"modulo","3":"recurrence"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Malvika was getting bored of the usual Fibonacci problems, and decided to add a little twist to it. She defined a new function <b>f()</b> with the following properties:
</p>

<ul>
<li>She'll give you two integers, <b>A</b> and <b>B</b>. <b>f(1)</b> is defined to be <b>A</b> and <b>f(2)</b> is <b>B</b>.</li>

<li>
And for all integers <b>x &ge; 2, f(x) = f(x-1) + f(x+1)</b>.</li>
</ul>

<p>
She'll give an integer <b>N</b>, and you have to find out what <b>f(N)</b> is. Output the answers modulo <b>10<sup>9</sup>+7</b>.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases.</li>
<li>The only line of each test case contains three integers: <b>A</b>, <b>B</b> and <b>N</b>, denoting <b>f(1)</b>, <b>f(2)</b> and the query.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a line which contains a single integer, corresponding to <b>f(N)</b> for the given input.</li>
</ul>
</ul>


<h3>Constraints</h3>
<ul>
<li>1 &le; <b>T</b> &le; <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> &le; <b>A</b> , <b>B</b> &le; <b>10<sup>9</sup></b></li>
<li>1 &le; <b>N</b> &le; <b>10<sup>9</sup></b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
10 17 3
23 17 3


<b>Output:</b>
7
1000000001
</pre>

<h3>Explanation</h3>
<p>
In the first test case, <b>f(3)</b> = 7, and so that is the output.
</p>
<p>
In the second test case, <b>f(3)</b> = -6 and the answer modulo <b>10<sup>9</sup>+7</b> is 1000000001.
</p>