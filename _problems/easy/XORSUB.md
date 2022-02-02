---
{"category_name":"easy","problem_code":"XORSUB","problem_name":"XOR with Subset","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":"xiaodao","date_added":"30-09-2014","tags":{"0":"bit","1":"darkshadows","2":"dec14","3":"dynamic","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/XORSUB","time":{"view_start_date":1418643194,"submit_start_date":1418643194,"visible_start_date":1418643000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/DEC14/mandarin/XORSUB.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/DEC14/russian/XORSUB.pdf" target="_blank">Russian</a>.</h3>
<p>You have an array of integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>. The function <b>F(P)</b>, where <b>P</b> is a <a href="http://en.wikipedia.org/wiki/Subset">subset</a> of <b>A</b>, is defined as the <a href="http://en.wikipedia.org/wiki/Exclusive_or">XOR</a> (represented by the symbol <b>⊕</b>) of all the integers present in the subset. If <b>P</b> is empty, then <b>F(P)</b>=0.</p>
<p>Given an integer <b>K</b>, what is the maximum value of <b>K</b> <b>⊕</b> <b>F(P)</b>, over all possible subsets <b>P</b> of <b>A</b>?</p>
<h3>Input</h3>
<p>The first line contains <b>T</b>, the number of test cases. Each test case consists of <b>N</b> and <b>K</b> in one line, followed by the array <b>A</b> in the next line.</p>
<h3>Output</h3>
<p>For each test case, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>K</b>, <b>A<sub>i</sub></b> ≤ <b>1000</b></li>
<li>Subtask 1 (30 points):<b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
<li>Subtask 2 (70 points):<b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 4
1 2 3

<b>Output:</b>
7
</pre>
<h3>Explanation</h3>
<p>Considering all subsets:<br /><br /> F({}) = 0 ⇒ 4 <b>⊕</b> 0 = 4<br /><br /> F({1}) = 1 ⇒ 4 <b>⊕</b> 1 = 5<br /><br /> F({1,2}) = 3 ⇒ 4 <b>⊕</b> 3 = 7<br /><br /> F({1,3}) = 2 ⇒ 4 <b>⊕</b> 2 = 6<br /><br /> F({1,2,3}) = 0 ⇒ 4 <b>⊕</b> 0 = 4<br /><br /> F({2}) = 2 ⇒ 4 <b>⊕</b> 2 = 6<br /><br /> F({2,3}) = 1 ⇒ 4 <b>⊕</b> 1 = 5<br /><br /> F({3}) = 3 ⇒ 4 <b>⊕</b> 3 = 7<br /><br /> Therefore, the answer is 7. <br /><br /><br /><br /><br /><br /><br /><br /><br /></p>