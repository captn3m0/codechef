---
{"category_name":"easy","problem_code":"XDS","problem_name":"XD Subsequences","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"25-03-2018","tags":{"0":"kr_abhinav"},"time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><b>Problem description</b>.</p>
<p> Winston and Royce love sharing memes with each other. They express the amount of seconds they laughed ar a meme as the number of ‘XD’ subsequences in their messages. Being optimization freaks, they wanted to find the string with minimum possible length and having exactly the given number of ‘XD’ subsequences.
</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>Next <b>T</b> lines contains a single integer <b>N</b>, the no of seconds laughed.
</li>
</ul>

<h3>Output</h3>
<ul>
<li>
For each input, print the corresponding string having minimum length. If there are multiple possible answers, print any.
</li>
</ul>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ Sum of length of output over all testcases ≤ 5*10<sup>5</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
1
9

<b>Output:</b>
XXXDDD
</pre>

<h3>Explanation</h3>
<p>Some of the possible strings are - XXDDDXD,XXXDDD,XDXXXDD,XDXDXDD etc. Of these, XXXDDD is the smallest.</p>