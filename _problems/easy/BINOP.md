---
{"category_name":"easy","problem_code":"BINOP","problem_name":"Chef And Binary Operation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"iscsi","date_added":"5-01-2016","tags":{"0":"binay","1":"easy","2":"june16","3":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/BINOP","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/BINOP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/BINOP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/BINOP.pdf">Vietnamese</a> as well.</h3>
<p>Today is Chef's birthday. His mom decided to surprise him with a truly fantastic gift: his favourite binary string <b>B</b>. But, unfortunately, all the stocks of binary string <b>B</b> have been sold out, and only a binary string <b>A</b> <b>(A ≠ B)</b> is available in the market.</p>
<p>She purchases the string <b>A</b> and tries to convert it to string <b>B</b> by applying any of following three operations zero or more times.</p>
<p>
<b>AND Operation:</b><br />
She will choose a pair of indices <b>i</b> and <b>j</b> such that <b>i != j</b> and perform following sequence of operations.</p>
<ul>
<b>
<li> result = A<sub>i</sub> &amp; A<sub>j</sub> </li>
<p></p></b><br />
<b>
<li> A<sub>i</sub> = result &amp; A<sub>i</sub> </li>
<p></p></b><br />
<b>
<li> A<sub>j</sub> = result &amp; A<sub>j</sub> </li>
<p></p></b>
</ul>

<p>
<b>OR Operation:</b><br />
She will choose a pair of indices <b>i</b> and <b>j</b> such that <b>i != j</b> and perform following sequence of operations.</p>
<ul>
<b>
<li> result = A<sub>i</sub> | A<sub>j</sub> </li>
<p></p></b><br />
<b>
<li> A<sub>i</sub> = result | A<sub>i</sub> </li>
<p></p></b><br />
<b>
<li> A<sub>j</sub> = result | A<sub>j</sub> </li>
<p></p></b>
</ul>

<p>
<b>XOR Operation:</b><br />
She will choose a pair of indices <b>i</b> and <b>j</b> such that <b>i != j</b> and perform following sequence of operations.</p>
<ul>
<b>
<li> result = A<sub>i</sub> ^ A<sub>j</sub> </li>
<p></p></b><br />
<b>
<li> A<sub>i</sub> = result ^ A<sub>i</sub> </li>
<p></p></b><br />
<b>
<li> A<sub>j</sub> = result ^ A<sub>j</sub> </li>
<p></p></b>
</ul>

<p>Chef's mom is eagerly waiting to surprise him with his favourite gift and therefore, she wants to convert string <b>A</b> to string <b>B</b> as fast as possible. Can you please help her by telling her the minimum number of operations she will require? If it is impossible to do so, then let Chef's mom know about it.</p>
<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>First line of each test case, will contain binary string <b>A</b>.</p>
<p>Second line of each test case, will contain binary string <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, Print "Lucky Chef" (without quotes) in first line and minimum number of operations required to convert string <b>A</b> to sting <b>B</b> in second line if conversion is possible. Print "Unlucky Chef" (without quotes) in a new line otherwise.</p>
<h3>Constraints</h3>
<ul>
<b>
<li>1 ≤ T ≤ 10<sup>5</sup></li>
<p></p></b><br />
<b>
<li>1 ≤ |A| ≤ 10<sup>6</sup></li>
<p></p></b><br />
<b>
<li>1 ≤ |B| ≤ 10<sup>6</sup></li>
<p></p></b><br />
<b>
<li>A != B</li>
<p></p></b><br />
<b>
<li>|A| = |B|</li>
<p></p></b><br />
<b>
<li>sum of |A| over all test cases does not exceed 10<sup>6</sup></li>
<p></p></b><br />
<b>
<li>sum of |B| over all test cases does not exceed 10<sup>6</sup></li>
<p></p></b>
</ul>
<h3>Subtasks</h3>
<ul>
<b>
<li> Subtask #1 (40 points) : Sum of |A| &amp; |B| over all test cases does not exceed 10<sup>3</sup></li>
<p></p></b><br />
<b>
<li> Subtask #2 (60 points) : Sum of |A| &amp; |B| over all test cases does not exceed 10<sup>6</sup></li>
<p></p></b>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
2
101
010
1111
1010
<b>Output</b>
Lucky Chef
2
Unlucky Chef

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> </p>
<ul>
<li>Applying XOR operation with indices i = 1 and j = 2. Resulting string will be 011.</li>
<li>Then, Applying AND operation with indices i = 1 and j = 3. Resulting string will be 010.</li>
<p></p></ul><br />

<p><b>Example case 2.</b> </p>
<ul>
<li>It is impossible to convert string A to string B.</li>
</ul>

