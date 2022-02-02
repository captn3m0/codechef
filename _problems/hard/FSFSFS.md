---
{"category_name":"hard","problem_code":"FSFSFS","problem_name":"Factorial to Square","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":null,"date_added":"9-10-2015","tags":{"0":"cook63","1":"dp","2":"medium","3":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/FSFSFS","time":{"view_start_date":1445193000,"submit_start_date":1445193000,"visible_start_date":1445193000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/mandarin/FSFSFS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/russian/FSFSFS.pdf">Russian</a> as well.</h3>
<p>
Given a positive integer <b>n</b>, we want to remove some values between <b>1</b> and <b>n</b> such that the product of the remaining ones is a perfect square number (i.e. the product = <b>x</b> * <b>x</b>, for some integer <b>x</b>). Meanwhile, we also want to maximize the product. Therefore, we are interested in the number of ways to remove some values to achieve the maximum perfect square product. The answer may be very large, and therefore, you just need to output its remainder by dividing <b>m</b>.
</p>
<p>
We define the product of an <b>empty set</b> as <b>1</b>.
</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the total number of test cases.</p>
<p>In each test case, there are two positive integers <b>n</b> and <b>m</b> in a line separated by a single space.</p>
<h3>Output</h3>
<p>For each test case, output the answer per line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>3,000</b></li>
<li><b>1</b> &lt;= <b>m</b> &lt;= <b>10<sup>9</sup> + 7</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 10
5 10
<b>Output:</b>
2
2

</pre><h3>Explanation</h3>
<p>In the first case, you can either remove 2 or remove both 1 and 2. In the second case, you can either remove 2, 3, 5 or remove 1, 2, 3, 5.</p>
