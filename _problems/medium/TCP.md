---
{"category_name":"medium","problem_code":"TCP","problem_name":"Travelling Chef Problem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"gerald","date_added":"15-07-2013","tags":{"0":"cook45","1":"integrals","2":"interpolation","3":"medium","4":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/TCP","time":{"view_start_date":1398018600,"submit_start_date":1398018600,"visible_start_date":1398018600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/TCP.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/TCP.pdf">Russian</a> as well.</h3>
<p></p><p>When Chef is travelling - that's the problem. No one knows when he will change his velocity. But mathematicians are certain that Chef's velocity depends on the current time, and can be described as a cubic polynomial. A cubic polynomial can be defined as:</p>
<p><b>v(t) = A×t<sup>3</sup> + B×t<sup>2</sup> + C×t + D</b>, where <b>A, B, C, D</b> are rational numbers (<b>A</b> is non zero), and <b>t</b> is the current time.</p>
<p>As for us, all we know is: Chef's velocity at 4 time instances. And we are interested in finding the total distance covered by Chef at time <b>T</b>. We can assume that Chef has started his travel at zero time moment.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b> denoting the number of test cases. The first line of each testcase contains an integer <b>T</b>, the time up to which we want to know the distance covered by Chef from time <b>0</b>. Then <b>4</b> lines follow, each containing two integers: <b>ct</b> and <b>cv</b>. Here <b>ct</b> is the time instant and <b>cv</b> is the velocity at time <b>ct</b>.</p>
<p><b>Please note</b>, that we pick <b>ct</b> in such a way that <b>cv</b> comes out to be integer. In general the velocity of Chef is real number.</p>
<h3>Output</h3>
<p>For each test case output a single line containing a real number – the distance covered by the Chef in time interval <b>0</b> to <b>T</b>. Your answer will be considered as correct if it has <b>relative error less than 10<sup>-10</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3600</b></li>
<li><b>1</b> ≤ <b>ct</b> ≤ <b>3600</b></li>
<li><b>-1000000</b> ≤ <b>cv</b> ≤ <b>1000000</b></li>
<li>For each testcase values of <b>ct</b> are distinct.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
2 11
3 31
4 69
5 131
8
12 -480
13 -693
14 -960
15 -1287

<b>Output:</b>
173.750000
80.000000
</pre>