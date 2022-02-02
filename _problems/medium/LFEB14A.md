---
{"category_name":"medium","problem_code":"LFEB14A","problem_name":"Sereja and Two Arrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"9-02-2014","tags":{"0":"fenwick","1":"inversions","2":"ltime09","3":"maths","4":"medium","5":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/LFEB14A","time":{"view_start_date":1393146000,"submit_start_date":1393146000,"visible_start_date":1393146000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/mandarin/LFEB14A.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/russian/LFEB14A.pdf">Russian</a>.</h3>
<p>Sereja and Arrays </p>
<p>Sereja have an array that consist of <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. Also Sereja have an array that consist of m integers <b>b[1], b[2], ..., b[m]</b>. Sereja make next operations:
</p><p> </p>
<p>- <b>random_shuffle(b)</b> — shuffle elements of <b>b</b>
</p><p> </p>
<p>- <b>random_merge(a, b)</b> — merge array <b>a</b> and <b>b</b> to array <b>a</b>. From all possible merges Sereja chooses a random one. For better understanding you can imagine, that merged array is sequence <b>q</b> of <b>n+m</b> elements, each element if either zero or one. It contains exactly <b>n</b> zeroes and <b>m</b> ones. Then zeroes are replaced with elements of <b>a</b>, and ones are replaced with elements of <b>b</b> (without changing their relative order inside initial sequences).
</p><p> </p>
<p>Now Sereja want to know expected number of inversions in array a after described operations. Inversion is a pair <b>(i, j) (1 ≤ i &lt; j ≤ n + m)</b> such that <b>a[i] > a[j]</b>.</p>
<h3>Input</h3>
<p>First line contain number <b>T</b> — number of testcases. <b>T</b> tests follow. First line of each testcase contain two integers <b>n</b> and <b>m</b>. Next line contain <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. Next line contain <b>m</b> integers <b>b[1], b[2], ..., b[m]</b>.
</p>
<h3>Output</h3>

<p>For each testcase print expected number of inversions.
</p><p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>n,m</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>a[i], b[i]</b> ≤ <b>10^5</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 3
1 5 4 3 2
2 6 3
10 9
10 3 6 4 8 4 1 9 7 2
9 8 3 3 10 8 2 9 2
<b>Output:</b>
13.833333333
87.818181818
</pre><p> </p>
<h3>Note</h3>
<p><b>Test #0-1 (25 points): n,m ≤ 10 </b> </p>
<p><b>Test #2 (25 points): n,m ≤ 1000 </b> </p>
<p><b>Test #3-4 (50 points): n,m ≤ 100000 </b> </p>
