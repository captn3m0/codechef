---
{"category_name":"easy","problem_code":"RRECIPE","problem_name":"Recipe Reconstruction","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"gamabunta","date_added":"2-09-2012","tags":{"0":"cook26","1":"simple","2":"simple","3":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/RRECIPE","time":{"view_start_date":1348427933,"submit_start_date":1348427933,"visible_start_date":1348427700,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Chef had an interesting dream last night. He dreamed of a new revolutionary chicken recipe. When he woke up today he tried very hard to reconstruct the ingredient list. But, he could only remember certain ingredients. To simplify the problem, the ingredient list can be represented by a string of lowercase characters 'a' - 'z'.</p>
<p style="text-align:justify">Chef can recall some characters of the ingredient list, all the others, he has forgotten. However, he is quite sure that the ingredient list was a palindrome.</p>
<p style="text-align:justify">You are given the ingredient list Chef dreamed last night. The forgotten characters are represented by a question mark ('?'). Count the number of ways Chef can replace the forgotten characters with characters 'a' - 'z' in such a way that resulting ingredient list is a palindrome.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of input contains a single integer T, the number of test cases. T lines follow, each containing a single non-empty string - the ingredient list as recalled by Chef. Whatever letters he couldn't recall are represented by a '?'.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single line containing the number of valid ways the ingredient list could be completed. Since the answers can be very large, output each answer modulo 10,000,009.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
?
??
ab?
a?c
aba

<b>Output:</b>
26
26
1
0
1
</pre><h3>Constraints</h3>
<p>
1 ≤ T ≤ 20<br/><br />
1 ≤ sum of length of all input strings ≤ 1,000,000<br/><br />
Each input string contains only lowercase roman letters ('a' - 'z') or question marks.
</br/></br/></p>
