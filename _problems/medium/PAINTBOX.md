---
{"category_name":"medium","problem_code":"PAINTBOX","problem_name":"Painting the Boxes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":"xcwgf666","date_added":"11-03-2015","tags":{"0":"ltime22","1":"medium","2":"piyushkumar","3":"segment","4":"sets"},"editorial_url":"http://discuss.codechef.com/problems/PAINTBOX","time":{"view_start_date":1427617800,"submit_start_date":1427617800,"visible_start_date":1427617800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/mandarin/PAINTBOX.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/russian/PAINTBOX.pdf">Russian</a>.</h3>
<p>Anup has <b>N</b> boxes. He painted them.</p>
<p>He wants to pick <b>W</b> adjacent boxes and give it to Suraj on his birthday. He wants all the <b>W</b> boxes he gifts to be of same colour. Anup repaints some of the boxes, and asks how many ways are there to gift  <b>W</b> boxes to Suraj. Can you please help him out? </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a two integers <b>N</b> denoting the number of boxes and <b>W</b> denoting the number of adjacent boxes that he wants to gift Suraj. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the initial colours of the boxes. </li>
<li>Third line of each test case contains a single integer <b>Q</b>, denoting the number of times Anup repainted a box. <b>Q</b> lines follow, each containing two integers <b>Pos<sub>i</sub></b> and <b>Col<sub>i</sub></b> meaning that Pos<sup>th</sup> box was repainted with colour Col.
</li></ul>
<h3>Output</h3>
<ul>
<li>After each repainting query, output the number of ways Anup can gift Suraj W adjacent boxes of the same colour.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>W, Pos</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, Col</b> ≤ <b>10<sup>9</sup></b></li>
<li>For 30 points : <b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>3</sup></b>, <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li>For 70 points : <b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>4</sup></b>, <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 2
1 1 1 1
3
1 1
1 2
2 2

<b>Output:</b>
3
2
2
</pre><h3>Explanation</h3>
<p>
After the first repaint the boxes are coloured (1,1,1,1), which means 3 ways to choose 2 adjacent boxes of the same colour.<br />
After the second repaint the boxes are coloured (2,1,1,1), which means 2 ways to select 2 adjacent boxes of the same colour.<br />
After the third repaint thee boxes are coloured (2,2,1,1), which means 2 ways to select 2 adjacent boxes of the same colour.
</p>
