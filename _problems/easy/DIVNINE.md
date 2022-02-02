---
{"category_name":"easy","problem_code":"DIVNINE","problem_name":"Divisibility by 9","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"3-06-2015","tags":{"0":"kevinsogo","1":"snck15el"},"editorial_url":"http://discuss.codechef.com/problems/DIVNINE","time":{"view_start_date":1434135600,"submit_start_date":1434135600,"visible_start_date":1434135600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/mandarin/DIVNINE.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/russian/DIVNINE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/vietnamese/DIVNINE.pdf">Vietnamese</a></h3>


<p>
Chef Zidane likes the number <b>9</b>. He has a number <b>N</b>, and he wants to turn it into a multiple of <b>9</b>. He cannot add or remove digits, and he can only change one digit at a time. The only allowed operation is to increment or decrement a digit by one, and doing this takes exactly one second. Note that he cannot increase a digit <b>9</b> or decrease a digit <b>0</b>, and the resulting number must not contain any leading zeroes unless <b>N</b> has a single digit.
</p>

<p>
Chef Zidane wants to know the minimum amount of time (in seconds) needed to accomplish this. Please help him, before his kitchen gets overwhelmed with mist!
</p>



<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of one line containing a single positive integer <b>N</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>10<sup>5</sup></sup></b></li>
<li><b>N</b> will not contain leading zeroes.</li>
<li>Each test file is at most 3Mb in size.</li>
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
<code>4
1989
86236
90210
99999999999999999999999999999999999999988
</code>

<b>Output:</b>
<code>0
2
3
2
</code>
</pre>
<p> </p>

<h3>Explanation</h3>
<p><b>Example case 1.</b> 1989 is already divisible by 9, so no operations are needed to be performed.</p>
<p><b>Example case 2.</b> 86236 can be turned into a multiple of 9 by incrementing the first and third digit (from the left), to get 96336. This takes 2 seconds.</p>
<p><b>Example case 3.</b> 90210 can be turned into a multiple of 9 by decrementing the third digit twice and the fourth digit once, to get 90000. This takes 3 seconds.</b>
