---
{"category_name":"medium","problem_code":"METEORAK","problem_name":"Meteor","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"white_king","date_added":"13-11-2013","tags":{"0":"Rubanenko","1":"dynamic","2":"jan14","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/METEORAK","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/METEORAK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/METEORAK.pdf">Russian</a>.</h3>
<p>A meteor fell on Andrew's house. That's why he decided to build a new home and chose a site where he wanted to build it. Let the whole area be a rectangular field of size <b>N</b>x<b>M</b>. Naturally, Andrew wanted to build a house on the entire area of the site. However, the Hazardous Construction Prevention Bureau did not let Andrew's plans come true. The Bureau said that some of the cells of the field are dangerous for the foundation. There are exactly <b>K</b> such cells. </p>
<p>Andrew's not a poor man. And as anyone who has money, he saves money. Therefore, he is willing to buy not the whole area, but only a stripe of the same width. The house will occupy a rectangular area in this stripe with sides parallel to the sides of the original site.</p>
<p>Andrew is asking for your help: for each <b>L<sub>i</sub></b>, <b>H<sub>i</sub></b>  - the lowest and the highest boundaries (inclusive), respectively - find the maximum area of ​​the house that Andrew can build on the relevant site.</p>
<p> </p>
<h3>Input</h3>

<p>In the first line you are given three integers <b>N</b>, <b>M</b> and <b>K</b>.<br />
In the following <b>K</b> lines you are given different pairs of integers <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> - the coordinates of the dangerous cells.<br />
Next line contains an integer <b>Q</b> - the number of Andrew's queries<br />
The last <b>Q</b> lines describe the queries: each line contains two integers <b>L</b> and <b>H</b> - the lowest and the highest boundaries.</p>
<p> </p>
<h3>Output</h3>
<p>In the output file, print <b>Q</b> lines, where i-th line contains the answer for <b>i</b>-th query. If you cannot build the house, then output <b>0</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N * M</b></li>
<li><b>1</b> ≤ <b>x<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>y<sub>i</sub></b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤  <b>H<sub>i</sub> ≤ <b>N</b></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 5 5
2 1
3 2
1 3
2 4
1 4
4
1 1
3 4
2 3
1 4

<b>Output:</b>
2
6
3
6
</pre>