---
{"category_name":"medium","problem_code":"CHEFLKJ","problem_name":"Chef and Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"karanaggarwal","date_added":"10-07-2016","tags":{"0":"cook72","1":"medium","2":"mgch","3":"segment"},"editorial_url":"http://discuss.codechef.com/problems/CHEFLKJ","time":{"view_start_date":1469385000,"submit_start_date":1469385000,"visible_start_date":1469385000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/mandarin/CHEFLKJ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/russian/CHEFLKJ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFLKJ.pdf">Vietnamese</a> as well.</h3>
<p>Chef likes arrays and anything related to it. He call an array <b>V</b> dominating if there exists a number <b>x</b> (the dominator) whose number of occurrences in <b>V</b> <isindex></isindex> strictly greater than half the size of the array (that is, <b>floor(|V|/2)</b>).
</p>
<p>His friend Dmytro wants to make Chef happy, so he presented this interesting problem for Chef.</p>
<p>Given an array <b>A</b>. You have to process <b>Q</b> queries on it. Queries can be one of two types:</p>
<ul>
<li><b> 1 x y </b> - Assign value <b>y</b> to <b>x</b>-th element in array <b>A</b>, i.e. <b>A<sub>x</sub> = y</b>.</li>
<li><b>2 l r </b> - print "Yes" if subarray <b>A</b>[<b>l</b>..<b>r</b>] is dominating, "No" otherwise</li>
</ul>

<h3>Input</h3>
<p>The first line of input contains two integers <b>N</b> and <b>Q</b> denoting the number of elements in <b>A</b>, and the number of queries to be executed.</p>
<p>The second line of input contains <b>N</b> space separated integers denoting the array <b>A</b>.</p>
<p>Each of the next <b>Q</b> lines contains one query.</p>
<h3>Output</h3>
<p>For each query of <b>type 2</b>, output the answer to the query in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A</b><sub>i</sub>, <b>y</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>x </b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>l </b> ≤ <b> r </b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 8
1 2 3 2 1
2 1 5
2 2 4
1 3 2
2 1 5
1 2 3
2 1 5
1 3 1
2 1 5

<b>Output:</b>
No
Yes
Yes
No
Yes
</pre><h3>Explanation</h3>
<p>For first query, we have to tell whether the entire array <b>A</b> is dominating or not. It turns out that it is not dominating, because occurrences of 1 and 2 are equal to 2 (which is not more than half the size of array, i.e. 2) and that of 3 is 1.</p>
<p>For second query, the subarray <b>[2, 3, 2]</b> is dominating and 2 is the dominator of it. Number of occurrences of 2 is 2 which is strictly greater than half the size of subarray, i.e. <b>floor(3/2) = 1</b>.</p>
