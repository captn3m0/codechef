---
{"category_name":"medium","problem_code":"CHSEQ22","problem_name":"Chef and Favourite Sequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"laycurse","date_added":"17-11-2013","tags":{"0":"easy","1":"feb14","2":"furko"},"editorial_url":"http://discuss.codechef.com/problems/CHSEQ22","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/CHSEQ22.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/CHSEQ22.pdf">Russian</a>.</h3>
<p>Chef has an integer sequence <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b> of size <b>N</b>, where all the elements of the sequence are <b>0</b> initially. Chef also has <b>M</b> segments, here the <b>i</b><sup>th</sup> one is <b>[L<sub>i</sub>, R<sub>i</sub>]</b>. He wants to create new sequences using the following operation:</p>
<ul>
<li>In a single operation, he picks a segment from the <b>M</b> segments. Let the chosen segment be <b>[s, t]</b>.</li>
<li>Then <i>flip</i> the all elements from <b>s</b><sup>th</sup> to <b>t</b><sup>th</sup> elements, namely, <b>a<sub>i</sub></b> is changed to <b>1 − a<sub>i</sub></b> for all <b>s ≤ i ≤ t</b>.</li>
</ul>
<p>Chef can perform the operation as many times as Chef likes. Chef wants to know how many different sequences Chef can make. Since the answer can be very large, please print it modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>N</b> and <b>M</b>, denoting the size of the sequence and the number of the segments respectively. Then the <b>i</b><sup>th</sup> line of the next <b>M</b> lines contains two space-separated integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>, denoting the <b>i</b><sup>th</sup> segments.</p>
<h3>Output</h3>
<p>Print a single line containing one integer, denoting the number of the sequences which can be created by Chef, modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N, M ≤ 100000 (10<sup>5</sup>)</b></li>
<li><b>1 ≤ L<sub>i</sub> ≤ R<sub>i</sub> ≤ N</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
1 1
2 2
3 3

<b>Output:</b>
8
</pre><h3>Explanation</h3>
<p>In the example case, all the sequences <b>(0,0,0)</b>, <b>(0,0,1)</b>, <b>(0,1,0)</b>, <b>(1,0,0)</b>, <b>(0,1,1)</b>, <b>(1,0,1)</b>, <b>(1,1,0)</b>, <b>(1,1,1)</b> can be created by Chef.</p>
