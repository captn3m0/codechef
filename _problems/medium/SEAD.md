---
{"category_name":"medium","problem_code":"SEAD","problem_name":"Sereja and D","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"11-02-2014","tags":{"0":"binary","1":"ltime09","2":"medium","3":"segment","4":"sereja","5":"sparse"},"editorial_url":"http://discuss.codechef.com/problems/SEAD","time":{"view_start_date":1393146000,"submit_start_date":1393146000,"visible_start_date":1393146000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/mandarin/SEAD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/russian/SEAD.pdf">Russian</a>.</h3>
<div class="legend">
<p>Sereja have array that consist of <span class="tex-span"><i>n</i></span> integers <span class="tex-span"><i>a</i><sub class="lower-index">1</sub></span> ≤ <span class="tex-span"><i>a</i><sub class="lower-index">2</sub></span> ≤ <span class="tex-span">...</span> ≤ <span class="tex-span"><i>a</i><sub class="lower-index"><i>n</i></sub></span>. Now Sereja have <span class="tex-span"><i>m</i></span> queries as pair of two integers <span class="tex-span"><i>t</i></span> and <span class="tex-span"><i>d</i></span>. Answer for query will be minimal integer <span class="tex-span"><i>i</i></span> such that exist some <span class="tex-span"><i>k</i></span> <span class="tex-span">(<i>i</i> ≤ <i>k</i>)</span> for which <span class="tex-span"><i>a</i><sub class="lower-index"><i>i</i></sub> + <i>d</i> ≥ <i>a</i><sub class="lower-index"><i>i</i> + 1</sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>i</i> + 1</sub> + <i>d</i> ≥ <i>a</i><sub class="lower-index"><i>i</i> + 2</sub></span>, <span class="tex-span">...</span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>k</i> - 1</sub> + <i>d</i> ≥ <i>a</i><sub class="lower-index"><i>k</i></sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>k</i></sub> ≤ <i>t</i></span> and <span class="tex-span"><i>a</i><sub class="lower-index"><i>k+1</i></sub> > <i>t</i></span>(if it exists).</p>
<p>Help Sereja, find the answer for each query. </p></div>

<p>
<div class="input-specification">
<div class="section-title">
<h3>Input</h3>
</div>
</div></p>
<p>First line of input contain integer <span class="tex-span"><i>n</i></span>. Next line contain <span class="tex-span"><i>n</i></span> integers <span class="tex-span"><i>a</i><sub class="lower-index">1</sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index">2</sub></span>, <span class="tex-span">...</span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>n</i></sub></span>. Next line contain integer <span class="tex-span"><i>m</i></span>. Next <span class="tex-span"><i>m</i></span> lines contain pairs of integers — queries.
</p>
<p>
<div class="output-specification">
<div class="section-title">
<h3>Output</h3>
</div>
</div></p>
<p>For each query output answer.</p>
<p><h3>Constraints</h3>
<ul>
<li>
<p>1 ≤ <i>n</i>, <i>m</i> ≤ 10<sup class="upper-index">5</sup>. </p>
</li><li><span class="tex-span">1 ≤ <i>a</i><sub class="lower-index"><i>i</i></sub> ≤ 10<sup class="upper-index">6</sup>
<li></li></span> <span class="tex-span"><i>a</i><sub class="lower-index">1</sub> ≤ <i>t</i> ≤ 10<sup class="upper-index">6</sup></span>
</li><li><span class="tex-span">0 ≤ <i>d</i> ≤ 10<sup class="upper-index">6</sup></span>
</li></ul>
<h3>Example</h3>
</p>
<p><b>Input</b>
<pre class="content">5<br />1 2 3 10 50<br />6<br />1 1<br />5 3<br />11 7<br />100000 1<br />1000000 1000000<br />11 6<br /></pre>
<div class="output">
<div class="title"><b>Output</b></div>
<pre class="content">1<br />1<br />1<br />5<br />1<br />4<br /></pre><p> </p>
<p>For <b>30 points(tests 0..20)</b> 1 ≤ <i>n</i>, <i>m</i> ≤ 10000.
</p><p> </p>
<p>For <b>70 points(tests 21..33)</b> 1 ≤ <i>n</i>, <i>m</i> ≤ 100000.</p>
</div></p>