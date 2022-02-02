---
{"category_name":"medium","problem_code":"TACNTSTR","problem_name":"Counting Strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"errichto","date_added":"9-09-2016","tags":{"0":"cook74","1":"dynamic","2":"medium","3":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TACNTSTR","time":{"view_start_date":1474223400,"submit_start_date":1474223400,"visible_start_date":1474223400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/mandarin/TACNTSTR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/russian/TACNTSTR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/vietnamese/TACNTSTR.pdf">Vietnamese</a> as well.</h3>



<p>
You are given a string <b>s</b> consisting of upper case Latin alphabets, i.e. from 'A' to 'Z'. Your task is to find how many strings <b>t</b> with length equal to that of <b>S</b>, also consisting of upper case Latin alphabet are there satisfying the following conditions:
<ul>
<li>String <b>t</b> is lexicographical larger than <b>s</b></li>
<li>When you write both <b>s</b> and <b>t</b> in the reverse order, <b>t</b> is still lexicographical larger than <b>s</b>.</li>
</ul>
</p>

<p>
Find out number of such strings <b>t</b>. As the answer could be very large, output it modulo <b>10<sup>9</sup> + 7</b>
</p>

<h3>Input</h3>
<p>
The only line of input contains string <b>s</b>.
</p>

<h3>Output</h3>
<p>
Output a single line containing an integer corresponding to the result in modulo <b>10<sup>9</sup> + 7</b>.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ |S| ≤ 10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input 1</b>:
ZAZ

<b>Output 1</b>:
25

<b>Input 2</b>:
XYZ

<b>Output 2</b>:
5
</pre>

<h3>Explanation</h3>

<p>
<b>Test #1:</b> To make a valid string <b>t</b>, you can just replace the letter A in <b>S</b> by any other letter, e.g. by replacing 'A' by 'B', we get <b>t = ZBZ</b>. Note that ZBZ is lexicographically larger than ZAZ. Reverse of <b>t</b> (i.e. ZBZ) is also lexicographically larger than reverse of <b>s</b> (i.e. ZAZ).
</p>

<p>
<b>Test #2:</b> there are 5 valid strings: YYZ, ZYZ, XZZ, YZZ, ZZZ
</p>
