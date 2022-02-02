---
{"category_name":"easy","problem_code":"CSUB","problem_name":"Count Substrings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"20-04-2014","tags":{"0":"ad","1":"cakewalk","2":"darkshadows","3":"july14"},"editorial_url":"http://discuss.codechef.com/problems/CSUB","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/CSUB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/CSUB.pdf">Russian</a>.</h3>

<p>Given a string <b>S</b> consisting of only <b>1s</b> and <b>0s</b>, find the number of substrings which start and end both in <b>1</b>.<br/>
In this problem, a substring is defined as a sequence of continuous characters <b>S<sub>i</sub>, S<sub>i+1</sub>, ..., S<sub>j</sub></b> where <b>1 ≤ i ≤ j ≤ N</b>.
</p>

<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases. Each testcase consists of <b>N</b>(the length of string) in one line and string in second line.</p>
<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li>Sum of  <b>N </b> over all testcases ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
1111
5
10001

<b>Output:</b>
10
3
</pre>
<h3>Explanation</h3>
<p>#test1: All substrings satisfy.<br/>
#test2: Three substrings S[1,1], S[5,5] and S[1,5] satisfy.
</p>