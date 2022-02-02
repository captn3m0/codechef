---
{"category_name":"easy","problem_code":"SMALLARR","problem_name":"A Small Array","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"3-04-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a sequence of integers <b>$A_1,A_2,…,A_N$</b> and a magical non-zero integer $x$</p>
<p>You have to select a subsegment of sequence A (possibly empty), and replace the elements in that subsegment after dividing them by x.</p>

<p>Formally, replace any one subsegment $A_l, A_{l+1}, ..., A_r$ with $A_l/x, A_{l+1}/x, ..., A_r/x$ where $l \leq r$</p>
    
<p>What is the minimum possible sum you can obtain?</p>

<p><b>Note:</b> The given operation can only be performed once</p>
<h3>Input </h3>
<ul>
<li>The first line of the input contains two positive integer n denoting the size of array, and x
denoting the magical integer</li>
<li>Next line contains $N$ space separated integers</li>
</ul>
<br>

<h3>Output</h3>
Single line containing one real number, denoting the minimum possible sum you can obtain. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-2}$

<h3>Constraints</h3>
<ul>
<li>$1 \leq n \leq 10^3$</li>
<li>$1 \leq |x| \leq 10^3$</li>
<li>$ |A_i| \leq 10^3$</li>
</ul>

<h3>Sample Input</h3>
<pre>3 2
1 -2 3<pre>

<h3>Sample Output</h3>
<pre>0.5</pre>

<h3>Explanation</h3>
<p>Array 1 -2 <b>3</b>, selecting subsegment {3}, you get 1 -2 <b>1.5</b>, which gives $sum=0.5$</p>