---
{"category_name":"medium","problem_code":"ANKINTER","problem_name":"Intervals and subarrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":null,"date_added":"1-06-2015","tags":{"0":"code_master01","1":"snck151c"},"editorial_url":"http://discuss.codechef.com/problems/ANKINTER","time":{"view_start_date":1433700900,"submit_start_date":1433700900,"visible_start_date":1433700900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/mandarin/ANKINTER.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/russian/ANKINTER.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/vietnamese/ANKINTER.pdf">Vietnamese</a></h3>


<p>Chef Rahul likes those arrays that can be rearranged to form an <strong>interval of values</strong> - an increasing sequence where each element is greater than the previous by exactly one. For example:  
<ul>
<li>Rahul likes the array <b>[3, 6, 5, 4]</b> as it can be re-arranged to <b>[3, 4, 5, 6]</b>.  
</li>
<li>Rahul doesn't like <b>[1, 2, 4, 5]</b> as no clear interval can be defined from these elements.  
</li>
</ul>
</p>
<p>Given an array <strong>a</strong> of length <strong>n</strong>, your task is to write a program that counts the number of contiguous subarrays of <strong>a</strong> liked by Rahul that have length not less than <strong>w</strong>.</p>

<h3>Input:</h3>
<p>The first line contains a single integer <strong>T</strong>, the number of test cases to follow. Each of the test cases contain exactly <b>2</b> lines.</p>

<p>The first line contains two space-separated integers <strong>n</strong> and <strong>w</strong>.</p> 

<p>The next line contains exactly <strong>n</strong> space-separated integers, denoting the array <b>a</b>.</p>

<h3>Output:</h3>
<p>You should output exactly <strong>T</strong> lines each containing answer for corresponding test case.</p>

<h3>Constraints:</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup> </b> 
</li>
<li><b>1 ≤ n ≤ 10<sup>6</sup> </b> 
</li>
<li>sum of <b>n</b> over all testcases does not exceed <b>10<sup>6</sup></b></li>
<li><b>1 ≤ w ≤ n</b></li>
<li><b>a</b> is a permutation of values <b>[1, 2, 3 ... n]</b></li>
</ul>

<h3>Example</h3>
<p><strong>Input:</strong>
<pre>2
3 1
2 3 1
6 3
6 1 5 3 4 2 
</pre> 
</p>

<p><strong>Output:</strong><pre>
5
5  
</pre>
</p>

<h3>Explanation</h3>
<p><strong>Example case #1:</strong><br />
The following <b>5</b> subarrays form an interval:  

<ol>
<li><b>[2]</b></li>
<li><b>[3]</b></li>
<li><b>[1]</b></li>
<li><b>[2, 3]</b></li>
<li><b>[2, 3, 1]</b></li>
</ol>
</p>

<p><strong>Example case #2:</strong><br />
The following 5 subarrays form an interval:  
<ol>
<li><b>[6, 1, 5, 3, 4, 2]</b>  forms <b>[1..6]</b></li>
<li><b>[1, 5, 3, 4, 2]</b>  forms <b>[1..5]</b></li>
<li><b>[5, 3, 4]</b>  forms <b>[3..5]</b></li>
<li><b>[5, 3, 4, 2]</b>  forms <b>[2..5]</b></li>
<li><b>[3, 4, 2]</b>  forms <b>[2..4]</b></li>
</ol>
</p>
<p>Note that <b>[3, 4]</b> also forms an interval but cannot be counted as its length is less than <b>w</b>(= 3).</p>

