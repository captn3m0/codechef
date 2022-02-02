---
{"category_name":"easy","problem_code":"RRSUM","problem_name":"Sum Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"shiplu","date_added":"11-07-2014","tags":{"0":"Rubanenko","1":"cook48","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/RRSUM","time":{"view_start_date":1405884600,"submit_start_date":1405884600,"visible_start_date":1405884600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRSUM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRSUM.pdf">Russian</a> as well.</h3>
<p> </p>
<p>Andrii is good in Math, but not in Programming. He is asking you to solve following problem: Given an integer number <b>N</b> and two sets of integer <b>A</b> and <b>B</b>. Let set <b>A</b> contain all numbers from <b>1</b> to <b>N</b> and set B contain all numbers from <b>N + 1</b> to <b>2N</b>. Multiset <b>C</b> contains all sums <b>a + b</b> such that <b>a</b> belongs to <b>A</b> and <b>b</b> belongs to <b>B</b>. Note that multiset may contain several elements with the same values. For example, if <b>N</b> equals to three, then <b>A</b> = <b>{1, 2, 3}</b>, <b>B</b> = <b>{4, 5, 6}</b> and <b>C</b> = <b>{5, 6, 6, 7, 7, 7, 8, 8, 9}</b>. Andrii has <b>M</b> queries about multiset <b>C</b>. Every query is defined by a single integer <b>q</b>. Andrii wants to know the number of times <b>q</b> is contained in <b>C</b>. For example, number <b>6</b> is contained two times, <b>1</b> is not contained in <b>C</b> at all. <br />
Please, help Andrii to answer all the queries.</p>
<p> </p>
<h3>Input</h3>
<p>
The first line of the input contains two integers <b>N</b> and <b>M</b>. Each of the next <b>M</b> line contains one integer <b>q</b>, the query asked by Andrii.</p>
<p> </p>
<h3>Output</h3>
<p>Output the answer for each query in separate lines as in example.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>q</b> ≤ <b>3N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 5
6
2
9
7
5
<b>Output:</b>
2
0
1
3
1
</pre><p> </p>
