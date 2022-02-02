---
{"category_name":"hard","problem_code":"SEINC","problem_name":"Sereja and Subsegment Increasings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"xcwgf666","date_added":"11-03-2014","tags":{"0":"greedy","1":"may14","2":"medium","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEINC","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/SEINC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/SEINC.pdf">Russian</a>.</h3>
<p>Sereja has an array <b>A</b> that contains <b>n</b> integers: <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>.<br />
Sereja also has an array <b>B</b> that contains <b>n</b> integers <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>n</sub></b>.<br />
In a single step Sereja can choose two indexes <b>i</b> and <b>j</b> <b>(1 &lt;= i &lt;= j &lt;= n)</b> , and increase all the elements of <b>A</b> with indices between <b>i</b> and <b>j</b> inclusively by one, modulo 4.<br />
In other words, we make <b>A<sub>p</sub></b> equal to <b>(A<sub>p</sub> + 1) modulo 4</b> if <b>p</b> is an integer from the range [<b>i</b>; <b>j</b>].</p>
<p>Now Sereja is interested in the following question: what is the mininal number of steps necessary in order to make the array <b>A</b> equal to the array <b>B</b>.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> - the number of the testcases. Then, <b>T</b> tests follow. <br /><br />
The first line of each testcase contains the integer <b>n</b>. <br /><br />
The next line conatins <b>n</b> single space separated integers - <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>. <br /><br />
The next line conatin <b>n</b> single space separated integers - <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>n</sub></b>.</p>
<h3>Output</h3>
<p>For each testcase output an answer - the mininal number of steps necessary.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>3</b></li>
</ul>
</p>
<p><h3>Example</h3>
<pre><b>Input:</b>
1
5
2 1 3 0 3
2 2 0 1 0

<b>Output:</b>
1

</pre></p>