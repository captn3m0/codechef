---
{"category_name":"medium","problem_code":"FOURPTS","problem_name":"Four Points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"1-06-2017","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/FOURPTS.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/FOURPTS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/FOURPTS.pdf">Vietnamese</a> as well.</h3>

<p>You are given 4 points on the 2D plane. You should tell whether there is a triangle whose sides pass through all the 4 points, and if there is, then find one such triangle. The outputted triangle can be degenerate as well (that is, all three of its vertices can be collinear).</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases.</li>

<li>Each test-case is described by a single line containing 8 space-separated integers, <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub>, x<sub>3</sub>, y<sub>3</sub>, x<sub>4</sub></b> and <b>y<sub>4</sub></b>. These describe the coordinates of the 4 given points, which are (<b>x<sub>1</sub>, y<sub>1</sub></b>), (<b>x<sub>2</sub>, y<sub>2</sub></b>), (<b>x<sub>3</sub>, y<sub>3</sub></b>) and (<b>x<sub>4</sub>, y<sub>4</sub></b>).</li>
</ul>

<h3>Output</h3>
<p>For each test-case output its answer in a new line. If there is no triangle which <b>perfectly</b> pass through the 4 given points then output "NO". Otherwise output "YES", followed by 6 real numbers p<sub>1</sub>, q<sub>1</sub>, p<sub>2</sub>, q<sub>2</sub>, p<sub>3</sub> and q<sub>3</sub> in the same line. These should describe the vertices of the triangle: (p<sub>1</sub>, q<sub>1</sub>), (p<sub>2</sub>, q<sub>2</sub>) and (p<sub>3</sub>, q<sub>3</sub>). These points can be in any order, but they should satisfy (-10<sup>6</sup> ≤ p<sub>1</sub>, q<sub>1</sub>, p<sub>2</sub>, q<sub>2</sub>, p<sub>3</sub>, q<sub>3</sub> ≤ 10<sup>6</sup>) . It is guaranteed that if the answer is "YES", there will be at least one triangle satisfying these constraints.</p>

<p>The triangle will be accepted if, for every input point A = (<b>x<sub>i</sub>, y<sub>i</sub></b>), there exists an edge (say its endpoints are B = (p<sub>i</sub>, q<sub>i</sub>) and C = (p<sub>j</sub>, q<sub>j</sub>)) of the triangle such that the absolute difference between dist(B, C) and dist(B, A) + dist(A, C) is less than 10<sup>-9</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10,000</li>
<li>-100 ≤ <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub>, x<sub>3</sub>, y<sub>3</sub>, x<sub>4</sub>, y<sub>4</sub></b> ≤ 100</li>
<li>No two points will coincide.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 1 1 3 1 2 2 1
1 1 2 2 2 0 1 0

<b>Output:</b>
YES 1.000 1.000 1.000 4.000 3.000 1.000
YES 0.000 0.000 3.000 3.000 3.000 0.000
</pre>

<h3>Explanation</h3>
<p>The first testcase corresponds to this image:

<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/SNCKEL17/fourpts1.png" height="300"/>
<p></p>
<p>The Ai's (marked in red) correspond to the input points, and the triangle is the outputted triangle.</p>

<p>The second testcase corresponds to this image:

<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/SNCKEL17/fourpts2.png" height="300"/>
<p></p>
