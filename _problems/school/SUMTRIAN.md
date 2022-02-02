---
{"category_name":"school","problem_code":"SUMTRIAN","problem_name":"Sums in a Triangle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PHP","33":"PIKE","34":"PRLG","35":"PYPY","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM chicken","41":"SCM guile","42":"SCM qobi","43":"ST","44":"TCL","45":"TEXT","46":"WSPC"},"max_timelimit":3,"source_sizelimit":5000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1235621211,"submit_start_date":1235621211,"visible_start_date":1235621211,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Let's consider a triangle of numbers in which a number appears in the first line, two numbers appear in the second line, three in the third line, etc. Develop a program which will compute the largest of the sums of numbers that appear on the paths starting from the top towards the base, so that:
<ul><li> on each path the next number is located on the row below, more precisely either directly below or below and one place to the right;</li>
<li> the number of rows is strictly positive, but less than 100 </li>
<li> all numbers are positive integers between O and 99.</li>
</ul>

<h3>Input</h3>
<p>
In the first line integer n - the number of test cases (equal to about 1000). 
Then n test cases follow. Each test case starts with the number of lines which is followed by their content.
<h3>Output</h3>
<p>
For each test case write the determined value in a separate line. 

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1
2 1
1 2 3
4 
1 
1 2 
4 1 2
2 3 1 1 

<b>Output:</b>
5
9
</pre>
<br/>
<b>Warning: large Input/Output data, be careful with certain languages</b> 