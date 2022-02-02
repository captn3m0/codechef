---
{"category_name":"hard","problem_code":"JOSEPHUS","problem_name":"Josephus Again","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"20-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Perhaps you know about the famous Josephus problem where some hapless people are standing in a circle waiting to be executed. Here, our problem is a little bit different in which computational efficiency is more important.

After losing a battle, $n$ soldiers, with unique integer IDs $1, 2, \ldots, n$ are standing in a circle. Counting from 1 (The soldier with ID 1 is counted 1) every $k^{th}$ ($1 \leq k \leq 1000$) soldier is taken to prison and later executed, and from the next soldier counting goes on until just one soldier survives. Find the ID of the last soldier taken to prison (the soldier who was taken to the prison immediately before the last surviving soldier).

###Input
- For each instance of the problem, there will be a single line of input which contains two space separated integers $n$ and $k$. 
- Input ends with a line containing two zeros. 
- There will be maximum 120 such instances. 
- For all instances, $2 \leq n \leq 10^{12}$ and $1 \leq k \leq 1000$.

###Output
- For each instance your program should output the ID of the last soldier taken to prison in a single line. 

###Sample Input
```
10 3
4 2
0 0
```

###Sample Output
```
10
3
```

###Explanation
**Testcase 1**: The order in which the people are executed is as follows: 3, 6, 9, 2, 7, 1, 8, 5, 10, and then 4 is the last soldier who survives. So the one immediately before that is 10, which is the answer.