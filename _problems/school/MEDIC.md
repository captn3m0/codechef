---
{"category_name":"school","problem_code":"MEDIC","problem_name":"When to take medicine","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vishal_nnd0","problem_tester":null,"date_added":"16-04-2019","tags":{"0":"vishal_nnd0"},"time":{"view_start_date":1556307900,"submit_start_date":1556307900,"visible_start_date":1556307900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You visit a doctor on a date given in the format $yyyy:mm:dd$. Your doctor suggests you to take pills every alternate day starting from that day. You being a forgetful person are pretty sure won’t be able to remember the last day you took the medicine and would end up in taking  the medicines on wrong days. 

So you come up with the idea of taking medicine on the dates whose day is odd or even depending on whether $dd$ is odd or even. Calculate the number of pills you took on right time before messing up for the first time.

###Note:
Every year that is exactly divisible by four is a leap year, except for years that are exactly divisible by 100; the centurial years that are exactly divisible by 400 are still leap years. For example, the year 1900 is not a leap year; the year 2000 is a leap year.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, in the format $yyyy:mm:dd$

###Output:
For each testcase, output in a single line the required answer.

###Constraints 
- $ 1 \leq T \leq 1000 $
- $ 1900 \leq yyyy \leq 2038 $
- $yyyy:mm:dd$ is a valid date

###Sample Input:
	1
	2019:03:31

###Sample Output:
	1
	
###EXPLANATION:
You can take pill on the right day only on 31st March. Next you will take it on 1st April which is not on the alternate day.
