---
{"category_name":"medium","problem_code":"AMXOR","problem_name":"XOR Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":"gamabunta","date_added":"10-05-2013","tags":{"0":"cook34","1":"dynamic","2":"medium","3":"satej"},"editorial_url":"http://discuss.codechef.com/problems/AMXOR","time":{"view_start_date":1368988200,"submit_start_date":1368988200,"visible_start_date":1368988200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify"><b>WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.</b></p>
<p style="text-align:justify">Chef has a sequence of <b>N</b> positive integers <b>{ a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, ... a<sub>N</sub> }</b>. The Sous Chef wants to choose another sequence of <b>N</b> <b>non-negative integers</b> <b>{ b<sub>1</sub>, b<sub>2</sub>, b<sub>3</sub>, ... b<sub>N</sub> }</b> such that</p>
<p><ul>
<li>The <b>bitwise xor sum</b> of these <b>2</b> sequences is equal</li>
<li>i.e, <b>a<sub>1</sub> ^ a<sub>2</sub> ^ a<sub>3</sub> ^ ... a<sub>N</sub> = b<sub>1</sub> ^ b<sub>2</sub> ^ b<sub>3</sub> ^ ... b<sub>N</sub></b></li>
<li>for each <b>i</b>, <b>b<sub>i</sub></b> ≤ <b>a<sub>i</sub></b></li>
</ul>
</p>
<p style="text-align:justify">The Sous Chef asks for your help. Your allegiance to the Chef withstanding, you tell him that you will not generate such a sequence for him. Instead, you will tell him the number of such sequences possible.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the length of your sequence. The second line contains <b>N</b> space-separated integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b>. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of ways your friend can choose his sequence. Since this number may be too big, output this number modulo <b>1000000009</b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 10</b><br />
<b>1 ≤ N ≤ 100000</b><br />
<b>1 ≤ a<sub>i</sub> ≤ 1000000000</b></p>
<h3>Sample</h3>
<pre>
<b>Input</b>
4
1
5
2
3 3
3
3 3 3
4
1 2 3 4

<b>Output</b>
1
4
16
6

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> The only possible sequence is <b>{ 5 }</b>.</p>
<p style="text-align:justify"><b>Test Case 2:</b> There are 4 possible sequences whose bitwise xor is equal to 3^3 = 0</p>
<p>
<ul>
<li>{ 0, 0 }</li>
<li>{ 1, 1 }</li>
<li>{ 2, 2 }</li>
<li>{ 3, 3 }</li>
</ul>
</p>
<p style="text-align:justify"><b>Test Case 4:</b> The 6 possible sequences are</p>
<p>
<ul>
<li>{ 0, 0, 0, 4 }</li>
<li>{ 0, 1, 1, 4 }</li>
<li>{ 1, 0, 1, 4 }</li>
<li>{ 1, 1, 0, 4 }</li>
<li>{ 0, 2, 2, 4 }</li>
<li>{ 1, 2, 3, 4 }</li>
</ul>
</p>
