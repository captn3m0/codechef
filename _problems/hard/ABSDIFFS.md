---
{"category_name":"hard","problem_code":"ABSDIFFS","problem_name":"Absolute Difference Sum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"20-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Little Sajal went to school and learned how to calculate score of an integer. Score of an integer is defined as the sum of absolute value of difference of all pair of digits in this integer. For example, score of 214 is  $|2 - 1| \ + \ |1 - 4| \ + \ |2-4| = 6$.

As Sajal is very smart, he quickly learned it and as an exercise the teacher gave him a task, he will be given two integers $L$ and $R$, and he will be asked to calculate the sum of scores of all integers between $L$ and $R$ (inclusive).

As this task is a little bit hard for Sajal, he wants your help.

###Input
- The first number will be the number of test cases $T$ ($T \leq 10^4$).
- Then there will be $T$ lines, each line containing two integers $L$ and $R$ ($1 \leq L \leq R \leq 10^{18}$).

###Output
- For each test case, your program should output the desired sum in a single line. As the sum can be very large, output it modulo 1000000007.

###Sample Input
```
5
214 214
12 16
1 9
257 260
112 112
```

###Sample Output
```
6
15
0
48
2
```