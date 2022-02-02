---
{"category_name":"easy","problem_code":"CHEFARRB","problem_name":"Chef and Subarrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"tuananh93","date_added":"9-12-2016","tags":{"0":"bitwise","1":"cook77","2":"easy","3":"linear","4":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CHEFARRB","time":{"view_start_date":1482085800,"submit_start_date":1482085800,"visible_start_date":1482085800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/mandarin/CHEFARRB.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/russian/CHEFARRB.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFARRB.pdf">Vietnamese</a> as well.</h3>

<p>Chef has array <b>A</b> consisting of <b>N</b> integers. He calls a sub-array of the array <i>good</i> if the <a href="https://en.wikipedia.org/wiki/Bitwise_operation#OR">bitwise OR</a> of all the elements in it is greater or equal than number <b>K</b>. Please help him to find out how many sub-arrays of array <b>A</b> are <i>good</i>!</p>

<h3>Input</h3>
<p>The first line of input contains <b>T</b> - number of test cases. <b>T</b> test cases follow.</p>
<p>For each test case, first line contains an integer <b>N</b> - number of elements in array, and integer <b>K</b>.</p>
<p>Second line contains <b>N</b> space separated non-negative integers denoting array <b>A</b>. </p>

<h3>Output</h3>
<p>For each test case, output an integer corresponding to the number of <i>good</i> sub-arrays of <b>A</b> in separate line. </p>

<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b>, <b>N</b>, ≤ <b>100,000</b></li>
<li><b>0</b> ≤ <b>A</b><sub>i</sub>, <b>K</b> ≤ <b>10<sup>9</sup></b>
<li><b>1</b> ≤ Sum over all values of <b>N</b> in the input in a single test file 
 ≤ <b>100,000</b></li>
</li>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
1 2 3
3 6
3 4 5

<b>Output:</b>
4
2
</pre>