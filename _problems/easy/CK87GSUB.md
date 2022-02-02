---
{"category_name":"easy","problem_code":"CK87GSUB","problem_name":"Chef and Counting Test","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mhammad1","problem_tester":"kingofnumbers","date_added":"19-10-2017","tags":{"0":"combinatorics","1":"cook87","2":"counting","3":"easy","4":"mhammad1"},"time":{"view_start_date":1508697000,"submit_start_date":1508697000,"visible_start_date":1508697000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/mandarin/CK87GSUB.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/russian/CK87GSUB.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/vietnamese/CK87GSUB.pdf">Vietnamese</a> as well.</h3>
<p>
<p>Ahmed Gafer failed to pass the test, but he got the job because of his friendship with Said and Shahhoud. After working in the kitchen for a while, he blew it. The customers didn't like the food anymore and one day he even burned the kitchen. Now the master Chef is very upset.</p>
<p>Ahmed isn't useful anymore at being a co-Chef, so S&S decided to give him a last chance. They decided to give Ahmed a new job, and make him work as the cashier of the restaurant. Nevertheless, in order not to repeat their previous mistake, they decided to give him a little test to check if his counting skills are good enough for the job. The problem is as follows: </p>
<p>Given a string <b>A</b> of lowercase English letters, Ahmad was asked to find the number of good substrings.
A substring <b>A[L, R]</b> is good if:</p>
<p><ul>
<li> The length of the substring is exactly <b>2</b> and <b>A<sub>L</sub></b> = <b>A<sub>R</sub></b>, OR</li>
<li>The length of the substring is greater than <b>2</b>,<b>A<sub>L</sub></b> = <b>A<sub>R</sub></b> and the substring <b>A[L + 1, R - 1]</b> has only one distinct letter.</li>
</ul></p>
<p>Anyways, Ahmed struggled trying to find a solution for the problem. Since his mathematical skills are very poor as it turned out, he decided to cheat and contacted you asking for your help. Can you help him in this challenge?</p>
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains the integer <b>T</b>, indicating the number of test cases.</p>

<p>Each of the following <b>T</b> lines, contains a string <b>A</b>.</p>
<p> </p>

<h3>Output</h3>
<p>For each test case, output a single line containing a single number, indicating the number of good substrings.</p>
<p> </p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100 </b></li>
<li><b>1</b> ≤ <b> |A| </b> ≤ <b>10<sup>5</sup> </b></li>
<li> It's guaranteed that the sum of <b> |A| </b> over all test cases doesn't exceed <b>5x10<sup>5</sup></b>. </li>
</ul>
</p>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
a
abba

<b>Output:</b>
0
2

</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 2. </b>The good substrings of <b>abba</b> are: { <b>bb</b> } and { <b>abba</b> }.</p>