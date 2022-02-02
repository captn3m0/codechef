---
{"category_name":"medium","problem_code":"STRDIG","problem_name":"Chef and The String of Digits","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"Rubanenko","date_added":"10-08-2013","tags":{"0":"ad","1":"cook37","2":"easy","3":"implementation","4":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/STRDIG","time":{"view_start_date":1376852100,"submit_start_date":1376852100,"visible_start_date":1376852100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The Chef has written all the numbers from <b>1</b> to <b>10<sup>9</sup></b> consecutively on a board. Let <b>P</b> be the long string<br />
obtained by concatenating the numbers written on the board consecutively. Given below are the first few digits of the long string <b>P</b>.</p>
<p>
<code>123456789101112131415161718192<b>02122</b>232425262728293031323334353637383940....</code></p>
<p>
Given another string <b>Q</b>, he is wondering whether <b>Q</b> is a substring of the string <b>P</b>.<br />
For example, <b>Q</b>="02122" is a substring of <b>P</b>, and has been marked in bold above.<br />
<br/></br/></p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines contain a string <b>Q</b>.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, print "<b>YES</b>" if the given string is contained in the string <b>P</b>, otherwise print "<b>NO</b>".</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li> <b>1</b> ≤ length of <b>Q</b> ≤ <b>100000 (10<sup>5</sup>)</b> </li>
<li><b>Q</b> consists of only digits(0-9)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
23456789101
3216546546546546545
02122
<br/>
<b>Output:</b>
YES
NO
YES
</br/></pre>