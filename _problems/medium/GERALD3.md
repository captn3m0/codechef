---
{"category_name":"medium","problem_code":"GERALD3","problem_name":"Chef and Substrings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":"rustinpiece","date_added":"8-11-2013","tags":{"0":"gerald"},"editorial_url":"http://discuss.codechef.com/problems/GERALD3","time":{"view_start_date":1387737000,"submit_start_date":1387737000,"visible_start_date":1387737000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/mandarin/GERALD3.pdf">here</a></h3>
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/russian/GERALD3.docx">here</a></h3>
<h3>Problem Statement</h3>
<p>Chef has a string <b>S = S<sub>1</sub>S<sub>2</sub> ... S<sub>N</sub></b>, consisting of <b>N</b> lowercase Latin letters. Also he has <b>M</b> pairs of integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b> (<b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b>).For each pair <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, Chef writes out all distinct substrings of string <b>S</b>, which are started from positions <b>L<sub>i</sub></b>, <b>L<sub>i</sub> + 1</b>, ..., <b>R<sub>i</sub></b>.<br />Your task is to help Chef. That is, for each pair, find out how many substrings that he needs to write.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />The first line of each test case contains non-empty string <b>S</b> and the second line contains positive integer <b>M</b>.<br />
Each of the next <b>M</b> lines contains a pair of integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>.
</p>
<h3>Output</h3>
<p>For each pair of each test case print the required number of substrings.</p>
<h3>Constraints</h3>
<ul>
<li>String <b>S</b> contains only lowercase Latin letters.</li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b>.</li>
<li>Sum of all length's of <b>S</b> for test cases is not greater than <b>50000</b>. Sum of all <b>M</b> values for test cases is not greater than <b>50000</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
ababa
4
1 1
1 5
5 5
3 4
a
1
1 1
<b>Output:</b>
5
9
1
5
1
</pre>