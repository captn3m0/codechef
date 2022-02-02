---
{"category_name":"medium","problem_code":"DEVGOSTR","problem_name":"Devu and good strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"xcwgf666","date_added":"2-03-2016","tags":{"0":"admin2","1":"april16","2":"arithmetic","3":"easy","4":"hamming"},"editorial_url":"http://discuss.codechef.com/problems/DEVGOSTR","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/DEVGOSTR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/DEVGOSTR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/DEVGOSTR.pdf">Vietnamese</a> as well.</h3>
<p>A string <b>str</b> is called a <em>good</em> string if there does not exist three difference indices <b>i, j, k</b> such that <b>i, j, k</b> are  consecutive three terms of an arithmetic progression and <b>str[i] = str[j] = str[k]</b>. </p>
<p>
You are given a string <b>s</b> and two integers <b>K</b>, <b>A</b>. You have to find the number of <em>good</em> strings <b>t</b> with alphabet size <b>A</b> (i.e. if <b>A = 1</b>, then string can only have a's and if <b>A = 2</b>, string can only contain 'a' or 'b'. e.g. if <b>A = 2</b>, <b>t</b> can be aa, ab, bb etc., for <b>A = 3</b>, string can only contain 'a', 'b' and 'c', i.e. it can be aab bac, bbb, cbb etc.) of length <b>|s|</b> such that hamming distance between strings <b>s</b> and <b>t</b> is less than or equal to <b>K</b>. As the answer could be very large, print answers modulo <b>10<sup>9</sup> + 7</b>.
</p>
<p>
Hamming distance between two strings of same size is defined as the number of indices where their corresponding characters differ. Formally, for two strings <b>s, t</b> of length <b>N</b>, hamming distance will be number of indices <b>1 ≤ i ≤ N</b> such that <b>s[i] != t[i]</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>For each test case, first line will contain two integers <b>A, K</b>.</li>
<li>The second line of each test case will contain the string <b>s</b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line corresponding to the answer of the problem.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 50</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b> |s|</b></li>
</ul>
<h3>Subtask</h3>
<p><b>Subtask 1 (10 points)</b></p>
<ul>
<li><b>1 ≤ |s| ≤ 50, A = 1</b></li>
</ul>
<p><b>Subtask 2 (20 points)</b></p>
<ul>
<li><b>1 ≤ |s| ≤ 12, 1 ≤ A ≤ 3</b></li>
</ul>
<p><b>Subtask 3 (30 points)</b></p>
<ul>
<li><b>1 ≤ |s| ≤ 50, A = 2</b></li>
</ul>
<p><b>Subtask 4 (40 points)</b></p>
<ul>
<li><b>1 ≤ |s| ≤ 50, A = 3</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 0
a
2 2
aba

<b>Output:</b>
1
5
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Only string of length 1 and alphabet size 1 will be 'a'. Hamming distance of "a" with "a" is zero which is ≤ 1. So answer is 1.</p>
<p><b>Example case 2.</b> There can be total 8 strings. 6 of them are good. aaa and bbb are not good, remaining all are good. From the 6 good strings, bab has a hamming distance of 3, remaining other 5 have hamming distance ≤ 2. Hence answer is 5.</p>
