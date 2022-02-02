---
{"category_name":"easy","problem_code":"YNOUTPUT","problem_name":"Forced Output","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"C","4":"C99 strict","5":"CAML","6":"CLPS","7":"CPP 4.3.2","8":"CPP 4.9.2","9":"CPP14","10":"CS2","11":"D","12":"ERL","13":"FORT","14":"GO","15":"HASK","16":"ICON","17":"JAVA","18":"LISP clisp","19":"LISP sbcl","20":"LUA","21":"NEM","22":"NICE","23":"NODEJS","24":"PAS fpc","25":"PAS gpc","26":"PERL","27":"PHP","28":"PIKE","29":"PYTH","30":"RUBY","31":"SCALA","32":"SCM guile","33":"SCM qobi","34":"ST","35":"TCL"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gamabunta","problem_tester":null,"date_added":"7-08-2012","tags":{"0":"ad","1":"cook25","2":"gamabunta"},"time":{"view_start_date":1345403903,"submit_start_date":1345403903,"visible_start_date":1345402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">
The state space of the output of this problem (and as a matter of fact, all the problems in this Cook-Off) is - 2 to the power T -<br />
where T is the number of test cases (so be extra careful!). Each test case consists of T lines consisting of "YES" or "NO".<br />
If a test case accurately represents the output that you would print for this file,<br />
then print "YES" for this case. Print "NO" otherwise.
</p>
<p style="text-align:justify">
The output for a file is defined as the output for all the test cases one by one. If you output "YES" for test case 'x', then your output<br />
must match the input for the test case 'x', and if and only if your output does not match the input for test case 'x', should you print "NO"<br />
for that case.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first Line contains a single number T, the number of test cases.
</p>
<p style="text-align:justify">
Each test case contains T lines. Each line is either "YES" or "NO". The T lines together represent the candidate output for this problem.
</p>
<h3>Output</h3>
<p style="text-align:justify">
If the candidate-output (that you got in the input) is what you are going to print then print "YES", and<br />
only if it is different, print "NO". The output for each case must be on a single line by itself.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<pre>1 ≤ T ≤ 100
There is only one unique valid output that you can print
</pre></p>
<h3>Sample Input</h3>
<p style="text-align:justify">
<pre>2
NO
NO
NO
YES
</pre></p>
<h3>Sample Output</h3>
<p style="text-align:justify">
<pre>NO
YES
</pre></p>
<h3>Explanation</h3>
<p style="text-align:justify">
Your output clearly matches the input for the second case. No other output can be valid for this file.
</p>
