---
{"category_name":"easy","problem_code":"INTEG","problem_name":"Chef and Integers ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"18-06-2013","tags":{"0":"furko","1":"sept13","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/INTEG","time":{"view_start_date":1379324264,"submit_start_date":1379324264,"visible_start_date":1379323800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> Chef has an array of <b>N</b> integers. He wants to play a special game. In this game he needs to make all the integers in the array greater than or equal to <b>0</b>. </p>
<p>Chef can use two types of operations. The first type is to  increase all the integers of the given array by <b>1</b>, but it costs <b>X</b> coins. The operation of the second type is to add <b>1</b> to only one integer of the given array and to use this operation you need to pay <b>1</b> coin. You need to calculate the minimal cost to win this game (to make all integers greater than or equal to <b>0</b>)  </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of elements in the given array. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array. The third line contains number <b>X</b> - cost of the first type operation.

<h3>Output</h3>
</p><p>For each test case, output a single line containing minimal cost required to make all the integers greater than or equal to zero.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b> 10<sup>9</sup> </b></li>
<li><b>0</b> ≤ <b>X </b> ≤ <b>10<sup>9</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
-1 -2 -3
2

<b>Output:</b>
5
</pre><h3>Explanation</h3>
<p><b>Example case 1:</b> Use the first type operation twice and the second type once. </p>
