---
{"category_name":"medium","problem_code":"SEABAL","problem_name":"Sereja and Ballons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"white_king","date_added":"5-06-2013","tags":{"0":"aug13","1":"bit","2":"fenwick","3":"medium","4":"segment","5":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEABAL","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Sereja has n boxes with balloons. Boxes are numbered with integers from <b>1</b> to <b>n</b>. The first box contains <b>a[1]</b> balloons,    the second- <b>a[2]</b> balloons and so on.</p>
<p>Also Sereja wrote down m pairs of the number <b>(l[1], r[1]), (l[2], r[2]), ..., (l[m], r[m])</b> on a piece of paper. Now    Sereja decided to play and began to burst the balloons in the boxes. At every step Sereja bursts one balloon from    some box and wants to know : what is the count of the indices <b>i (1 ≤ i ≤ m)</b>, that all balloons in the boxes with the    indices from <b>l[i]</b> to <b>r[i]</b> are already bursted.</p>
<p>Please, help Sereja.</p>
<h3>Input</h3>
<p>The first line contains numbers <b>n</b> and <b>m</b> — the number of the boxes and the number of the pair of numbers. The next    line contains <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>.</p>
<p>The following <b>m</b> lines contain <b>m</b> pairs of numbers <b>(l[1], r[1]), (l[2], r[2]), ..., (l[m], r[m])</b>.</p>
<p>The next line contains number <b>k</b> — the number of times, when Sereja had his balloon bursted. The next  <b>k</b> line contains    integers <b>x[1], x[2], ..., x[k]</b>. Index of the box, in what Sereja bursted a balloon at the step number <b>i (1 ≤ i ≤ k)</b>,    is denoted as <b>y[i]</b>., which can be found as: <b>y[i] = x[i] + ans[i - 1]</b>, wherein <b>ans[0] = 0</b>, аnd <b>ans[i] (i>0)</b> — is the    answer on the problem after ith bursting of the balloons.</p>
<h3>Output</h3>
<p>For each test case, print <b>k</b> lines — the answers after every steps.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ n, m ≤ 10^5</b></li>
<li><b>1 ≤ a[i] ≤ 100000</b></li>
<li><b>1 ≤ l[i] ≤ r[i] ≤ n</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 3
1 1 1 1 1
5 5
2 2
1 3
5
4
2
0
2
3

<b>Output:</b>
0
1
1
2
3
</pre><p>
<b>Update:</b></p>
<p>You may assume that, y[i] &lt;= n and k &lt;= 100000</p>
