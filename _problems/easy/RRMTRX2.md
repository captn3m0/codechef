---
{"category_name":"easy","problem_code":"RRMTRX2","problem_name":"Matrix Again","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"tuananh93","date_added":"8-10-2014","tags":{"0":"Rubanenko","1":"cook53","2":"easy","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/RRMTRX2","time":{"view_start_date":1419186698,"submit_start_date":1419186698,"visible_start_date":1419186698,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/mandarin/RRMTRX2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/russian/RRMTRX2.pdf">Russian</a> as well.</h3>
<p>
In every contest there should be an easy problem about matrices. December Cook-Off is not an exception.<br />
Given a matrix <b>A</b> which consists of <b>n</b> rows and <b>m</b> columns, and contains integer numbers.<br />
Consider every possible vector <b>v</b> of <b>m</b> elements, such that every <b>1 ≤ v<sub>i</sub> ≤ n</b>.<br />
Let value of the vector be product of all <b>A<sub>v<sub>i</sub>, i </sub></b> (<b>1 ≤ i ≤ m</b>). You are to count the sum of values over all possible vectors <b>v</b>.
</p>
<p><h3> Input details</h3>
</p><p>The first line contains two integers <b>n</b> and <b>m</b> — dimensions of the matrix. Then <b>n</b> lines of <b>m</b> integers follow. The <b>j<sub>th</sub></b> element of <b>i<sub>th</sub></b> line contains <b>A<sub>i, j</sub></b>.
</p>
<h3> Output details</h3>
<p>
Output single integer — the answer for the problem modulo <b>10<sup>7</sup> + 7</b>, i.e the smallest non-negative integer number <b>r</b> that <b>answer - r</b> is divisible by <b>10<sup>7</sup> + 7</b>.
</p>
<h3> Constraints</h3>
<p>
<b>1 ≤ n ≤ 47 </b><br /><br />
<b>1 ≤ m ≤ 38 </b><br /><br />
<b>0 ≤ |A<sub>i, j</sub>| ≤ 100 </b><br />
</p>
<h3>Examples</h3>
<p><b>Input</b><br /><br />
2 2<br /><br />
1 2<br /><br />
3 4<br /><br />
<b>Output</b><br /><br />
24<br /></p>
<h3>Explanation for the sample test case</h3>
<p>All possible vectors are {(1, 1), (1, 2), (2, 1), (2, 2)} <br /><br />
<b>value(1, 1)</b> = <b>A<sub>1, 1</sub></b> * <b>A<sub>1, 2</sub></b> = 1 * 2 = 2<br /><br />
<b>value(1, 2)</b> = <b>A<sub>1, 1</sub></b> * <b>A<sub>2, 2</sub></b> = 1 * 4 = 4<br /><br />
<b>value(2, 1)</b> = <b>A<sub>2, 1</sub></b> * <b>A<sub>1, 2</sub></b> = 3 * 2 = 6<br /><br />
<b>value(2, 2)</b> = <b>A<sub>2, 1</sub></b> * <b>A<sub>2, 2</sub></b> = 3 * 4 = 12<br /><br />
<b>answer</b> = 2 + 4 + 6 + 12 = <b>24</b><br /></p>
