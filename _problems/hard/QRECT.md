---
{"category_name":"hard","problem_code":"QRECT","problem_name":"Rectangle Query","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xiaodao","problem_tester":"xcwgf666","date_added":"3-07-2014","tags":{"0":"fenwick","1":"hard","2":"sept14","3":"sqrt","4":"xiaodao"},"editorial_url":"http://discuss.codechef.com/problems/QRECT","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/QRECT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/QRECT.pdf">Russian</a>.</h3>
<p>You are given a Cartesian plane, and you are asked to support the following three kinds of operations:</p>
<p><ul>
<li><strong>I x1 y1 x2 y2</strong>: add an axes-parallel rectangle on the plane. The bottom-left corner has coordinates <b>(x1, y1)</b>, the top-right one has coordinates <b>(x2, y2)</b> </li>
<li><strong>D index</strong>: remove the retangle that was added during the <strong>index</strong>-th addition operation</li>
<li><strong>Q x1 y1 x2 y2</strong>: output the number of rectangles on the plane that have the common area with the rectangle with a bottom-left corner coordinates <b>(x1, y1)</b> and a top-right corner coordinates <b>(x2, y2)</b>.<br />
Please notice that, even if the two rectangles only share a common point, they are still regarded as sharing common area</li>
</ul>
</p>
<p>Also, there can be a few same rectangles on the plane, they should be regarded as a few different rectangles.</p>
<p>There are <strong>Q</strong> operations in all, can you fulfill them?</p>
<h3>Input</h3>
<p>The first line contains an integer <strong>Q</strong>.</p>
<p>The next <strong>Q</strong> lines represent the operations you are to deal with. Each of them contains an operation in one of the three forms above.</p>
<h3>Output</h3>
<p>For each <strong>Q</strong>-type operation, output the result on the separate line of the output.</p>
<h3>Constraints</h3>
<ul>
<li><span style="font-size: 10px;">1 &lt;= <strong>Q </strong>&lt;= 100000</span></li>
<li><span style="font-size: 10px;">1 &lt;= <strong>x1</strong> &lt;= <strong>x2</strong> &lt;= 10<sup>9</sup></span></li>
<li><span style="font-size: 10px;">1 &lt;= <strong>y1</strong> &lt;= <strong>y2</strong> &lt;= 10<sup>9</sup></span></li>
</ul>
<div>
<h3>Example</h3>
<h3>
<pre style="font-size: 12px; font-weight: normal;"><strong>Input:</strong>
5
I 1 1 2 2
I 2 2 3 3
Q 3 3 4 4 
D 2
Q 3 3 4 4

<strong>Output:</strong>
1
0  </pre></h3>
<h3>Explanation</h3>
</div>
<pre>In the third operation, the rectangle (2, 2)-(3, 3) has a common point with the given rectangle.
But in the fifth operation, as the rectangle (2, 2)-(3, 3) has been removed, so there are no rectangles that has the common area with the given rectangle.</pre>