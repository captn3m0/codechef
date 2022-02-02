---
{"category_name":"easy","problem_code":"ADTRI","problem_name":"Rupsa and Equilateral Triangle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":null,"date_added":"17-08-2015","tags":{"0":"abhra73","1":"basic","2":"easy","3":"oct15","4":"prime"},"editorial_url":"http://discuss.codechef.com/problems/ADTRI","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/ADTRI.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/ADTRI.pdf">Russian</a> </h3>
<p>Rupsa really loves triangles. One day she came across an equilateral triangle having length of each side as an integer <b>N</b>. She started wondering if it was possible to transform the triangle keeping two sides fixed and alter the third side such that it still remains a triangle, but the altered side will have its length as an even integer, and the line drawn from the opposite vertex to the mid-point of the altered side is of integral length.</p>
<p>Since Rupsa is in a hurry to record a song for Chef as he really loves her songs, you must help her solve the problem as fast as possible.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>Each test-case contains a single integer <b>N</b>.</p>
<h3>Output</h3>
<p>
For each test case, output "YES" if the triangle transformation is possible, otherwise "NO" (quotes for clarity only, do not output).
</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>6</sup></b></li>
<li><b>1 ≤ N ≤ 5 x 10<sup>6</sup></b></li>
</ul>
<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: <b>1 ≤ T ≤ 100, 1 ≤ N ≤ 10<sup>4</sup></b> (10 points)</li>
<li>Subtask #2: <b>1 ≤ T ≤ 10<sup>4</sup>, 1 ≤ N ≤ 10<sup>6</sup></b> (30 points)</li>
<li>Subtask #3: Original Constraints (60 points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
5
3</tt>

<b>Output:</b>
<tt>YES
NO</tt>
</pre><h3>Explanation</h3>
<ul>
<li>In test case 1, make the length of any one side <b>6</b>, and it will suffice.</li>
</ul>
