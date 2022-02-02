---
{"category_name":"medium","problem_code":"CHEFDTRE","problem_name":"Chef and Sets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"26-06-2015","tags":{"0":"data","1":"furko","2":"ltime25","3":"medium","4":"order","5":"treap"},"editorial_url":"http://discuss.codechef.com/problems/CHEFDTRE","time":{"view_start_date":1435480200,"submit_start_date":1435480200,"visible_start_date":1435480200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFDTRE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/russian/CHEFDTRE.pdf">Russian</a>.</h3>
<p>Chef passed all the exams. This month was really tiring. So, he decided to relax for a little bit. Well, there is no better way to relax than to play with sets of numbers.</p>
<p>Chef loves to solve problems about sets. That does not mean that he is any good at it. Anyway, he opened his favorite problemset archive, and there he found a task that he thinks is best suited to him. </p>
<h3>Problem description</h3>
<p>You are given <b>N</b> sets and <b>Q</b> queries. Initially, each set consists only of a <b>single</b> element. The sets are indexed from <b>1</b> to <b>N</b>, and the <b>i</b><sup>th</sup> set contains the number <b>i</b>. Each query may be one of the following two types.</p>
<p><ul>
<li><b>UNION a b</b> - merge the <b>a<sup>th</sup></b> and the <b>b<sup>th</sup></b>. The new set will hold the index <b>N</b> + number of union operations before this one + <b>1</b>. Also, after this operation, the <b>a<sup>th</sup></b> set and the <b>b<sup>th</sup></b> set will no longer exist.</li>
<li><b>GET a k</b> - find the <b>k<sup>th</sup></b> smallest element in the set indexed <b>a</b></li>
</ul>
</p>
<p>Please help our dear Chef! :)</p>
<h3>Input</h3>
<p>The first line of the input contains two integers <b>N</b> and <b>Q</b> denoting the number of sets in the very beginning and the number of queries. Each of the next <b>Q</b> lines contains one query per line - either <b>UNION a b"</b> or <b>GET a k</b>.</p>
<h3>Output</h3>
<p>For each query of second type (i.e. <b>GET</b>) output the number that you've found.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>2 * 10<sup>5</sup>.</b></li>
<li>All the queries are valid, that is, for any query <b>GET i p</b>, the <b>i</b><sup>th</sup> set exists, and has a size of at least <b>p</b>; and for any query <b>UNION a b</b>, the sets indexed as <b>a</b> as well as <b>b</b> exist.</li>
<li>Subtask 1 (35 points): <b>1</b> ≤ <b>N, Q</b> ≤ <b>500</b></li>
<li>Subtask 2 (65 points): <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>1</b> ≤ <b>Q</b> ≤ <b>2 * 10<sup>5</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>7 8
UNION 1 2
UNION 8 3
GET 4 1
UNION 4 5
GET 10 2
GET 9 3
GET 9 2
GET 9 1</tt>

<b>Output:</b>
<tt>4
5
3
2
1</tt>
</pre><p> </p>
<h3>Explanation</h3>
<p><ul>
<li>Initially, the sets are: <tt>{1}, {2}, {3}, {4}, {5}, {6}, {7}</tt>.</li>
<li>After the first query: <tt>{}, {}, {3}, {4}, {5}, {6}, {7}, {1, 2}</tt>. </li>
<li>After the second query the configuration of sets is: <tt>{}, {}, {}, {4}, {5}, {6}, {7}, {}, {1, 2, 3}</tt>.</li>
<li>The third query: the set <tt>{4}</tt> contains only one number so the answer is <b>4</b></li>
<li>The configuration of sets after the fourth query: <tt>{}, {}, {}, {}, {}, {6}, {7}, {}, {1, 2, 3}, {4, 5}</tt></li>
<li>The fifth query: the second smallest element in <tt>{4, 5}</tt> is <b>5</b>.</li>
<li>For queries <b>6</b>, <b>7</b>, <b>8</b>, the set is <tt>{1, 2, 3}</tt>. </li>
</ul>
</p>
