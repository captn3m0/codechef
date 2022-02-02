---
{"category_name":"challenge","problem_code":"SEASORT2","problem_name":"Sereja and Sorting 2","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"9-09-2013","tags":{"0":"challenge","1":"greedy","2":"heuristic","3":"march14","4":"sereja","5":"test"},"editorial_url":"http://discuss.codechef.com/problems/SEASORT2","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/SEASORT2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/SEASORT2.pdf">Russian</a>.</h3>
<p>Sereja has an array <b>A[1 .. N]</b>, which contains <b>N</b> integers. Now Sereja wants to sort it.<br />
The only thing that Sereja can do, is to reverse all elements in some sub-array, which is a consecutive parts of <b>A</b>. In other words, in one operation, Sereja can choose two integers <b>L</b> and <b>R (1 &lt;= L &lt; R &lt;= N)</b>, and swap elements <b>A[L]</b> and <b>A[R]</b>, <b>A[L+1]</b> and <b>A[R-1]</b>, <b>A[L+2]</b> and <b>A[R-2]</b> and so on.
</p>
<p>
In such operation of <b>L, R</b>, the total energy that Sereja spends <b>R - L + 1</b>. Clearly, Sereja wants to minimize the spent energy. Also, Sereja would like to minimize the total number of all operations. Therefore, we give a mixed objective as shown in Scoring.
</p>
<h3>Input</h3>
<p>
First line contains an integer <b>N</b>. Next line contains a sequence of integers <b>A[1], A[2], A[3], ..., A[N]</b>.
</p>
<h3>Output</h3>
<p>
First line contains an integer <b>Q</b> - the total number of operations you need to sort the array. In each of next <b>Q</b> lines, there should be two integers <b>L</b> and <b>R</b> <b>(1 &lt;= L &lt; R &lt;= N)</b> indicate the operation that Sereja should do.
</p>
<p>
Also you should remember, that <b>Q</b> shouldn't be greater than <b>N</b>.
</p>
<h3>Scoring</h3>
<p>
Suppose <b>S</b> is the total spent energy of your output, i.e. the sum of <b>R - L + 1</b> of all operations. Your score is <b>S / N + Q</b>.  Lower scores will earn more points.</p>
<p>We have 40 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 10 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 10 test files. Note, that public part of the tests may not contain some border cases.
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10000</b></li>
<li><b>1</b> &lt;= <b>A[i]</b> &lt;= <b>5000</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
6
2 1 5 4 3 2
<b>Output:</b>
2
3 6
1 2
</pre>
