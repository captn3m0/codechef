---
{"category_name":"challenge","problem_code":"SEAPERM","problem_name":"Sereja and Permutation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"white_king","date_added":"9-11-2013","tags":{"0":"april14","1":"challenge","2":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAPERM","time":{"view_start_date":1397468446,"submit_start_date":1397468446,"visible_start_date":1397467741,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/SEAPERM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/SEAPERM.pdf">Russian</a>.</h3>
<p> </p>
<p>Sereja have array <b>A'</b> that contain <b>N</b> integers. Now Sereja want to permute elements of the array, he want to use some permutation <b>p</b>, such that <b>A[i] = A'[p[i]]</b>, where <b>A</b> - new array. </p>
<p> </p>
<p>Lets function <b>f(A,i) = S - A[i] - A[i +1] - ... - A[j]</b>, where <b>j</b> is the maximum possible index, such that <b>A[i] + A[i + 1] + ... + A[j] &lt;= S</b>, if <b>A[i] > S, f(A, i) = S</b>.</p>
<p> </p>
<p>Help Sereja to find such permutation <b>p</b>, such that <b>(f(A, 1) + f(A, 2) + ... f(A, k))/k</b> will be as low as possible. </p>
<h3>Input</h3>
<p> </p>
<p>First line of input contain integer <b>T</b> - number of testcases. Next lines contain <b>T</b> testcases. First line of each testcase contain three integers <b>N, k, S</b>. Next line contain <b>N</b> integers - array <b>A'</b>.</p>
<p> </p>
<h3>Output</h3>
<p> </p>
<p>For each testcase output <b>N</b> numbers in one line - permutation <b>p</b>. </p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>A'[i]</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 2 4
3 4 1
4 4 1
1 1 1 1

<b>Output:</b>
2 1 3
4 3 2 1

</pre><p> </p>
<h3>Scoring</h3>
<p> </p>
<p>Suppose <b>Sum</b> will be sum of yours <b>(f(A, 1) + f(A, 2) + ... f(A, k))/k</b> per each testcase.<br />
Lets <b>B</b> will be the smallest such sum. Your score will be equal to <b>B/Sum</b>. Lower scores will earn more points.</p>
<p>We have 20 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 4 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 16 test files. Note, that public part of the tests may not contain some border cases.</p>
