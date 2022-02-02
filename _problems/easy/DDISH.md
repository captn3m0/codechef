---
{"category_name":"easy","problem_code":"DDISH","problem_name":"Delicious Dishes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"laycurse","date_added":"13-08-2012","tags":{"0":"Rubanenko","1":"bruteforce","2":"nov12","3":"simple","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/DDISH","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef is the owner of the loveliest restaurant in ChefTown. To make his work easier, all dishes are numbered by distinct positive integers, and you can order with this positive integer in Chef’s restaurant. Amazingly Chef has many kinds of recipes, so every positive integer denotes exactly one dish. To taste dish numbered with some integer C, you have to pay exactly C dollars.
</p>
<p>
Unfortunately not all the dishes are delicious. After years of working in his restaurant, Chef discovered that a dish is considered to be delicious if the number that denotes this dish consists of different digits. Let’s call such numbers “delicious numbers”. For example numbers 123, 1, 91, 102 are delicious but 122, 11, 900 are not.
</p>
<p>
Ira is a little girl from the University of Lublin and she’s fond of traveling. Tonight she stops in ChefTown and wants to have a meal at Chef’s restaurant. On the one hand she has R dollars in her pocket and she is ready to spend it, on the other hand she wants to seem rich, so she won’t spend less than L dollars. Of course, since she is a little girl, she wants to order just one dish. It is difficult to make a choice for Ira because of variety of dishes.Now she asks you to find out the number of delicious dishes Ira may order, considering her conditions.
</p>
<h3>Input</h3>
<p>First line contains single integer T (1 ≤ T ≤ 200000) – the number of test cases. Each test case consists of two positive integers in a line - L and R (1 ≤ L ≤ R ≤ 10<sup>18</sup>).</p>
<h3>Output</h3>
<p>For every test case, output the answer on a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 13
1 100

<b>Output:</b>
8
90

</pre><h3>Explanation</h3>
<p>
For the first test Ira can order every dish from 5 to 13 except 11.</p>
