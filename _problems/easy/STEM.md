---
{"category_name":"easy","problem_code":"STEM","problem_name":"Word Stem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":null,"date_added":"9-10-2015","tags":{"0":"cook63","1":"easy","2":"hashmaps","3":"shangjingbo","4":"strings"},"editorial_url":"http://discuss.codechef.com/problems/STEM","time":{"view_start_date":1445193000,"submit_start_date":1445193000,"visible_start_date":1445193000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/mandarin/STEM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/russian/STEM.pdf">Russian</a> as well.</h3>
<p>
Given <b>n</b> words <b>w</b>[<b>1</b>..<b>n</b>], which originate from the same stem (e.g. grace, graceful, disgraceful, gracefully), we are interested in the original stem. To simplify the problem, we define the stem as the longest consecutive substring that occurs in all the <b>n</b> words. If there are ties, we will choose the smallest one in the alphabetical (lexicographic) order.
</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the total number of test cases.</p>
<p>In each test cases, the first line contains an integer <b>n</b> denoting the number of words. In the second line, <b>n</b> words <b>w</b>[<b>1</b>..<b>n</b>] consisting of lower case characters are given as a single space-spearated list.</p>
<h3>Output</h3>
<p>For each test case, output the stem in a new line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= |<b>w</b>[<b>i</b>]| &lt;= <b>20</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4
grace graceful disgraceful gracefully
<b>Output:</b>
grace
</pre>
<h3>Explanation</h3>
<p>The stem is grace.</p>
