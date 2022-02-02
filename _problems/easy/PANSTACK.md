---
{"category_name":"easy","problem_code":"PANSTACK","problem_name":"Stacking Pancakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":5000,"problem_author":"kaushik_iska","problem_tester":"laycurse","date_added":"1-03-2012","tags":{"0":"april12","1":"easy","2":"kaushik_iska"},"editorial_url":"http://discuss.codechef.com/problems/PANSTACK","time":{"view_start_date":1334137504,"submit_start_date":1334137504,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef is good at making pancakes. Generally he gets requests to serve <b>N </b>pancakes at once.
He serves them in the form of a stack.
A pancake can be treated as a circular disk with some radius.</p>

<p>Chef needs to take care that when he places a pancake on the top of the stack the radius of the pancake should not exceed the radius of the largest pancake in the stack by more than <b>1</b>. 
Additionally all radii should be positive integers, and the bottom most pancake should have its radius as <b>1</b>.
Chef wants you to find out in how many ways can he create a stack containing <b>N</b> pancakes.</p>

<p><b>Input</b></p>

<p>First line of the input contains <b>T (T &lt;= 1000) </b>denoting the number of test cases.</p>

<p><b>T </b>lines follow each containing a single integer <b>N (1 &lt;= N &lt;= 1000) </b>denoting the size of the required stack.</p>

<p><b>Output</b></p>

<p>For each case the output should be a single integer representing the number of ways a stack of size <b>N</b> can be created. As the answer can be large print it modulo <b>1000000007</b>.</p>

<p><b>Example</b></p>

<p><b>Input</b></p>
<pre>
2
1
2
</pre>

<p><b>Output</b></p>
<pre>
1
2
</pre>