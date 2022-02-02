---
{"category_name":"easy","problem_code":"AMIFIB","problem_name":"Am I a Fibonacci Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vineet_adm","problem_tester":"rubanenko","date_added":"28-10-2013","tags":{"0":"binary","1":"cook40","2":"easy","3":"fibonacci","4":"hashing","5":"offline","6":"vineet_adm"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/AMIFIB","time":{"view_start_date":1384713000,"submit_start_date":1384713000,"visible_start_date":1384713000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=AMIFIB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in Russian <a target="_blank" href="https://www.codechef.com/download/translated/COOK40/russian/AMIFIB.pdf">here</a></h3>
<p>The Head Chef has been playing with Fibonacci numbers for long . He has learnt several tricks related to Fibonacci numbers . Now he wants to test his chefs in the skills . <br> 
A fibonacci number is defined by the recurrence :<br> 
f(n) = f(n-1) + f(n-2) for n > 2 <br>and f(1) = 0 <br>and f(2) = 1 .  <br>
Given a number <b> A </b>  , determine if it is a fibonacci number.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The only line of each test case contains a single integer  <b>A</b>  denoting the number to be checked .
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing "YES" if the given number is a fibonacci number , otherwise output a single line containing "NO" . </li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>number of digits in A </b> ≤ <b>1000</b></li>
<li> <b> The sum of number of digits in A in all test cases   <= 10000. </b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3
4
5

<b>Output:</b>
YES
NO
YES
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The first few fibonacci numbers are 0 , 1 , 1 , 2 , 3 ,5 , 8 , 13 and so on and the series is increasing . Only 3 and 5 appear in this series while 4 does not appear in the series . </p>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>