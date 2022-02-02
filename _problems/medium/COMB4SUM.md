---
{"category_name":"medium","problem_code":"COMB4SUM","problem_name":"Adding Special Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"adurysk","date_added":"9-06-2015","tags":{"0":"cook60","1":"devuy11","2":"easy"},"editorial_url":"http://discuss.codechef.com/problems/COMB4SUM","time":{"view_start_date":1437330652,"submit_start_date":1437330652,"visible_start_date":1437330600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="/download/translated/COOK60/mandarin/COMB4SUM.pdf">Mandarin Chinese</a> and <a target="_blank" href="/download/translated/COOK60/russian/COMB4SUM.pdf">Russian</a> as well.</h3>
<p><b>Special Sum</b> of <b>4</b> numbers <b>(a, b, c, d)</b> is defined as:</p>
<pre><b>|a+b-c-d| + |a+c-b-d| + |a+d-b-c| + |c+d-a-b| + |b+d-a-c| + |b+c-a-d|</b>
</pre>
<p>where <b>|x|</b> denotes absolute value of <b>x</b>.</p>
<h3>Read problems statements in <a href="/download/translated/COOK60/mandarin/COMB4SUM.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK60/russian/COMB4SUM.pdf" target="_blank">Russian</a> as well.</h3>
<p><b>Special Sum</b> of <b>4</b> numbers <b>(a, b, c, d)</b> is defined as:</p>
<pre><b>|a+b-c-d| + |a+c-b-d| + |a+d-b-c| + |c+d-a-b| + |b+d-a-c| + |b+c-a-d|</b>
</pre>
<p>where <b>|x|</b> denotes absolute value of <b>x</b>.</p>
<p>Given an array <b>A</b> of size <b>N</b>, you need to find the sum of <b>Special Sum</b> of numbers taken over all quadruples of different indices of the array. <br /> <img width="500" src="https://s3.amazonaws.com/codechef_shared/download/specialsum.png" /></p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases to follow.</p>
<p>First line of each test case contains the only integer <b>N</b>.</p>
<p>Second line of each test case contains the array as <b>N</b> space separated integers.</p>
<h3>Output</h3>
<p>For each test case output the sum as explained above.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>4 ≤ <b>N</b> ≤ 1000</li>
<li>1 ≤ Elements of the array ≤ 10<sup>5</sup></li>
<li>1 ≤ Sum of <b>N</b> over all test case ≤ 2000</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
1 2 3 3
5
1 2 3 4 5
6
9 18 28 23 12 9

<b>Output:</b>
10
76
1176
</pre>
<h3>Explanation:</h3>
<p>Test Case 1: SpecialSum(1,2,3,3) = 10 .</p>
<p>Test Case 2: SpecialSum(1,2,3,4) + SpecialSum(1,2,3,5) + SpecialSum(1,2,4,5)+ SpecialSum(1,3,4,5) + SpecialSum(2,3,4,5) are called.</p>