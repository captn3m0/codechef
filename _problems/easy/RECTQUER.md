---
{"category_name":"easy","problem_code":"RECTQUER","problem_name":"Rectangular Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"gerald","date_added":"6-11-2013","tags":{"0":"Rubanenko","1":"dec13","2":"easy","3":"prefix"},"editorial_url":"http://discuss.codechef.com/problems/RECTQUER","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/RECTQUER.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/RECTQUER.pdf">Russian</a>.</h3>
<p>This time Chef does not want to bother you with long story, so the problem description will be as short as possible. You are given a square matrix <b>A</b>, which has <b>N</b> rows and <b>N</b> columns. Chef wants you to answer following queries: given a rectangular submatrix with upper-left corner in (<b>X<sub>1</sub></b>,  <b>Y<sub>1</sub></b>) and lower-right corner in  (<b>X<sub>2</sub></b>, <b>Y<sub>2</sub></b>), and you are to count number of disctinct elements in this submarix, i.e count number of such distinct <b>A<sub>i, j</sub></b> that (<b>X<sub>1</sub></b> <b> ≤ i ≤ </b> <b>X<sub>2</sub></b>) and (<b>Y<sub>1</sub></b> <b> ≤ j ≤ </b> <b>Y<sub>2</sub></b>). [You may assume that <b>i</b> is looping through the rows and <b>j</b> through columns]
</p>
<h3>Input</h3>
<p>The first line of the input file will contain single integer <b>N</b>. Then <b>N</b> lines with <b>N</b> numbers in each follow - description of the matrix. The rows are indexed from top to bottom that is top row has index 1, and columns are indexed from left to right that is left column has index 1. There is a single integer <b>Q</b> that follows on the next line right after the matrix description - number of Chef's queries. Then <b>Q</b> queries follow. Each query is described by four integers - <b>X<sub>1</sub>, Y<sub>1</sub>, X<sub>2</sub></b>, and <b>Y<sub>2</sub></b>.</p>
<h3>Output</h3>
<p>Output <b>Q</b> integers, each in a separate line - answers for the queries. </p>
<h3>Constraints</h3>
<p><ul>
<li>1≤<b>N</b>≤300</li>
<li>1≤<b>Q</b>≤10<sup>5</sup></li>
<li>1≤<b>A<sub>i, j</sub></b>≤10</li>
<li>1≤<b>X<sub>1</sub></b>≤<b>X<sub>2</sub></b>≤<b>N</b></li>
<li>1≤<b>Y<sub>1</sub></b>≤<b>Y<sub>2</sub></b>≤<b>N</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 2 3
3 2 1
5 6 3
3
1 1 2 3
2 2 2 2
1 1 3 3 

<b>Output:</b>
3
1
5
</pre>