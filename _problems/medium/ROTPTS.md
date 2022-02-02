---
{"category_name":"medium","problem_code":"ROTPTS","problem_name":"Rotate Point","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"kingofnumbers","date_added":"29-11-2017","tags":{"0":"chemthan","1":"chemthan","2":"cook89","3":"likecs","4":"matrix","5":"medium","6":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/ROTPTS","time":{"view_start_date":1514140200,"submit_start_date":1514140200,"visible_start_date":1514140200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/mandarin/ROTPTS.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/russian/ROTPTS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/vietnamese/ROTPTS.pdf">Vietnamese</a> as well.</h3>

<p>You are given <b>n</b> points <b>p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>n</sub></b> in a plane and <b>n</b> integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub></b>.</p>

<p>For any index <b>i</b> (1 ≤ <b>i</b> ≤ <b>n</b>), it is possible to perform the following operation (let's call it <i><b>i</b>-rotation</i>) on an arbitrary point <b>P</b>: Rotate <b>P</b> by <b>a<sub>i</sub></b> degrees counter-clockwise around the point <b>p<sub>i</sub></b>.
</p>

<p>Note that <b>a<sub>i</sub></b> will always be a multiple of 90. Also note that such an operation changes the point <b>P</b>.</p>

<p>You should process <b>q</b> queries. Each query is of one of the following types:
<ul>
<li>1 <b>x y l r</b>: Initially, you are given <b>P</b> = (<b>x</b>, <b>y</b>). Perform each <b>i</b>-rotation for <b>i</b> = <b>l, l+1, ..., r</b> (in this order) on the point <b>P</b>. Compute the coordinates of <b>P</b> modulo 10<sup>9</sup> + 7 after performing all <b>i</b>-rotations.</li>
<li>2 <b>u x y b</b>: Change the point <b>p<sub>u</sub></b> to (<b>x</b>, <b>y</b>) and the angle <b>a<sub>u</sub></b> to <b>b</b>.</li>
</ul></p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>n</b>.</li>
<li>Then, <b>n</b> lines follow. The <b>i</b>-th of these lines contains three space-separated integers <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> and <b>a<sub>i</sub></b>. The <b>i</b>-th point is initially <b>p<sub>i</sub></b> = (<b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>).</li>
<li>The next line contains a single integer <b>q</b> denoting the number of queries.</li>
<li>Each of the following <b>q</b> lines contains a query in the format described above.</li>
</ul></p>

<h3>Output</h3>
<p>For each query of type 1, print a single line containing two space-separated integers denoting the coordinates of the point <b>P</b> after performing all rotations, <b>modulo 10<sup>9</sup> + 7</b>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>, <b>x</b>, <b>y</b> ≤ 10<sup>9</sup></li>
<li>0 ≤ <b>a<sub>i</sub></b>, <b>b</b> &lt; 360</li>
<li>1 ≤ <b>q</b> ≤ 2 · 10<sup>5</sup></li>
<li>1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>n</b></li>
<li>1 ≤ <b>u</b> ≤ <b>n</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

3
0 0 90
1 2 180
3 2 270
3
1 5 5 1 3
2 2 2 2 90
1 5 5 1 3

<b>Output:</b>

0 1000000005
1000000003 6
</pre>
