---
{"category_name":"medium","problem_code":"TASUMOBC","problem_name":"Sum Of Binomial Coefficent ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"stzgd","date_added":"6-12-2014","tags":{"0":"combinatorics","1":"digit","2":"hard","3":"ltime19","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TASUMOBC","time":{"view_start_date":1419755400,"submit_start_date":1419755400,"visible_start_date":1419755400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TASUMOBC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TASUMOBC.pdf">Russian</a>.</h3>
<p> As we all know, <a href="http://en.wikipedia.org/wiki/Binomial_coefficient">Binomial Coefficient</a> <b>C(n, r)</b> is defined by the<br />
following formula. <br /></p>
<p><img src="/download/extimages/f17c481ba6b3f6c9eb2b9c06eb09252f.png" />
</p>
<p>
Also define S(<b>n</b>) as follows. <br /></p>
<p><img src="/download/extimages/b5d1a105bdc2018c0546d52746b5a11d.png" /> <br /></p>
<p>Note that <b>n</b> will be provided to you as an input parameter.
</p><p>Since S(<b>n</b>) can be very large, please print it modulo <b>(10<sup>9</sup> + 7)</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>T</b> representing the number of test cases.</li>
<li>Each of the next <b>T</b> lines contains an integer <b>n</b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the value of <b>S(n) modulo (10<sup>9</sup> + 7)</b>.
</li></ul>
<h3>Constraints</h3>
<p>
<b>10 points:</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>300</b></li>
<p>
<b>30 points:</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>5000</b></li>
<p>
<b>60 points:</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>18</sup></b></li>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
3
4
5

<b>Output:</b>
2
4
2
4
8

</pre>