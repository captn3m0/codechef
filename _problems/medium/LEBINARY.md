---
{"category_name":"medium","problem_code":"LEBINARY","problem_name":"Asmany Number Verification","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"gamabunta","problem_tester":null,"date_added":"8-08-2012","tags":{"0":"bignum","1":"cook25","2":"gamabunta","3":"maths"},"time":{"view_start_date":1345403928,"submit_start_date":1345403928,"visible_start_date":1345402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">
Asmany strings are strings of '0's and '1's that have as many 00 as 11. A string such as 00110001 consists of 3 "00" and<br />
1 "11". Of course this is not an Asmany string. 0011, 1100, 000111000111 are Asmany strings. An L'th Asmany number is the number of<br />
Asmany strings of length L for all positive integers L.
</p>
<p style="text-align:justify">
For esoteric purposes Chef had an oracle (a device) that was capable of answering whether a number that he entered was an Asmany number.<br />
The problem is that his oracle takes too long for large numbers. Him being Chef, he wants to ask the oracle very<br />
large numbers! You tell him that you can give him a better oracle (a program) that will tell him what he wants to know in the blink of<br />
an eye.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first Line contains a single number T, the number of test cases.
</p>
<p style="text-align:justify">
Each test case contains 1 positive integer N, with not more than 1000 digits.
</p>
<h3>Output</h3>
<p style="text-align:justify">
Print YES if N is an Asmany number, NO otherwise.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<pre>1 ≤ T ≤ 100
1 ≤ Number of digits in N ≤ 1000
</pre></p>
<h3>Sample Input</h3>
<p style="text-align:justify">
<pre>2
3
4
</pre></p>
<h3>Sample Output</h3>
<p style="text-align:justify">
<pre>NO
YES
</pre></p>
<h3>Explanation</h3>
<p style="text-align:justify">
4 is an Asmany number. To be precise, it is the 4th Asmany number: There are 4 Asmany strings of length 4. 0011, 1100, 0101, 1010.
</p>
