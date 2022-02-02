---
{"category_name":"school","problem_code":"ISITCAKE","problem_name":"Is it a Cakewalk Problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Estimating the difficulty of cakewalk problem is a hard task. Our Chef Hasan has prepared a problem which he thinks is a cakewalk level problem. There are 100 participants in the contest. The problem indeed turned out to be easy and was solved by all the participants. However, each person might have taken a different amount of time to solve the problem. The contest's duration was 1 hour (60 minutes).  

You are given an array $times$ denote the time each person took to solve the problem. Hasan estimated that the problem should be solved within half an hour (<= 30 minutes). So, he will consider the problem to be a cakewalk if there are at least 60 users who solved the problem within 30 minutes (including 30). 

The participants of the contest were arranged in a grid of size 10 * 10, and the input is given according to this. You can see the input section to know more about how to read the time taken by each user.

Tell whether the problem is indeed a cakewalk or not.

###Input
- The first line of the input contains a single integer $T$, which denotes the number of test cases.
- Each test case consists of 10 lines. Each of the next 10 lines contain 10 space-separated integers denoting the $times$ taken by the people in that corresponding row.

###Output
- For each test case output either "yes" or "no", in a new line, corresponding to whether it was a cakewalk problem or not.

###Constraints
- $1 \leq T \leq 100$
- $1 \leq$ time taken by each user $\leq 60$

###Sample Input
```
2
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 1 1 1 1 1 1 1 1 1
1 2 3 4 5 6 7 8 9 10
11 12 13 14 15 16 17 18 19 20
21 22 23 24 25 26 27 28 29 30
31 32 33 34 35 36 37 38 39 40
41 42 43 44 45 46 47 48 49 50
51 52 53 54 55 56 57 58 59 60
1 2 3 4 5 6 7 8 9 10
11 12 13 14 15 16 17 18 19 20
21 22 23 24 25 26 27 28 29 31
31 32 33 34 35 36 37 38 39 40
```

###Sample Output
```
yes
no

```

###Explanation
**Testcase 1**: The problem was too easy, it was solved by everyone in the first minute itself. This is a cakewalk problem.

**Testcase 1**: 59 people solved it under 30 minutes. We should have at least 60 people to solve the problem under 30 minutes. This problem is not a cakewalk problem.