---
{"category_name":"medium","problem_code":"CHNGSEQ","problem_name":"Chang and Beautiful Sequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":null,"date_added":"25-06-2017","tags":{"0":"bit","1":"combinatorics","2":"cook84","3":"hard","4":"math","5":"prateekg603"},"editorial_url":"https://discuss.codechef.com/problems/CHNGSEQ","time":{"view_start_date":1500834600,"submit_start_date":1500834600,"visible_start_date":1500834600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/mandarin/CHNGSEQ.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/russian/CHNGSEQ.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/vietnamese/CHNGSEQ.pdf">vietnamese</a> as well.</h3>

<p>
The beauty of any sequence of integers in the BitLand is defined as the product of the number of integers in the list and the Bitwise XOR of those integers. Our little Chef Chang liked this way of defining the beauty of a sequence and henceforth, came up with the following puzzle.</p>

<p>
Find out how many sequences of non-negative integers of length <b>N</b> exist such that the sum of beauty values of all their subsequences modulo <b>10<sup>9</sup> + 7</b> equals a given integer <b>B</b>. Each element in the sequence should be strictly less than a given integer <b>C</b> (fixed to 2<sup>20</sup>).</p>

<p>Since, the number of such sequences can be large, output this number modulo <b>10<sup>9</sup> + 7</b>.
</p>

<p>
Help the people of BitLand to solve this puzzle.
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting number of test cases.</p>
<p>First line of each test case contains three space separated <b>N</b>, <b>B</b> and <b>C</b> as mentioned in the statement.</p>

<h3>Output</h3>
<p>For each test case, output an integer corresponding to the answer to the test case in a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>B</b> ≤ <b>10<sup>9</sup> + 6</b></li>
<li><b>C</b> = <b>2<sup>20</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 0 1
2 3 2
2 2922 1024
<b>Output:</b>
1
2
616
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. Only possible sequence will be 0 0. Its beauty value will be zero.</p>
<p><b>Example 2</b>.The subsequences with beauty equal to 3 will be 0 1 and 1 0. So, the answer is 2.</p>
<p><b>Example 3</b>. There are <b>616</b> sequences in total that have length <b>2</b> and each integer is less than <b>1024</b> such that sum of the beauty values of their subsequences modulo <b>10<sup>9</sup> + 7</b> is <b>2922</b>.</p>

<h3>Note</h3>
<p>Please note that the above three examples don't have <b>C</b> = 2<sup>20</sup>. These examples are just for making sure that you understand the problem correctly. In the test data it will be guaranteed that <b>C</b> is indeed 2<sup>20</sup>. 
</p>

<h3>Example</h3>
<b>Input:</b>
<pre>
1
2 345 1048576

<b>Output:</b>
100</pre>

<h3>Explanation</h3>
<p>
There are <b>100</b> sequences in total that have length <b>2</b> and each integer is less than <b>1048576</b> such that sum of the beauty values of their subsequences modulo <b>10<sup>9</sup> + 7</b> is <b>345</b>.</p>