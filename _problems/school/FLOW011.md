---
{"category_name":"school","problem_code":"FLOW011","problem_name":"Gross Salary","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vicky002","problem_tester":null,"date_added":"27-04-2015","tags":{"0":"vicky002"},"time":{"view_start_date":1436519986,"submit_start_date":1436519986,"visible_start_date":1436519986,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
In a company an emplopyee is paid as under: 
If his basic salary is less than Rs. 1500, then HRA = 10% of base salary and DA = 90% of basic salary. <br/> If his salary is either equal to or above Rs. 1500, then HRA = Rs. 500 and DA = 98% of basic salary. If the Employee's salary is input, write a program to find his gross salary.
<br/><br/>
<b>NOTE:</b> Gross Salary = Basic Salary+HRA+DA 
</p>

<h3>Input</h3>
<p> 
The first line contains an integer <b>T</b>, total number of testcases. Then follow <b>T</b> lines, each line contains an integer <b>salary</b>. 
</p>

<h3>Output</h3>
<p>Output the gross salary of the employee.</p>


<h3>Constraints</h3>
<ul>
<li>1 <b>≤</b> <b>T</b> <b>≤</b> 1000</li>
<li>1 <b>≤</b> <b>salary</b> <b>≤</b> 100000</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>

3 
1203
10042
1312

<b>Output</b>

2406
20383.2
2624
</pre>
