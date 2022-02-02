---
{"category_name":"easy","problem_code":"PRMDIV","problem_name":"Prime divisors","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"28-07-2018","tags":{"0":"easy","1":"fekete","2":"fekete","3":"likecs","4":"ltime62","5":"sieve"},"editorial_url":"https://discuss.codechef.com/problems/PRMDIV","time":{"view_start_date":1532797200,"submit_start_date":1532797200,"visible_start_date":1532797200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME62/hindi/PRMDIV.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/LTIME62/mandarin/PRMDIV.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME62/russian/PRMDIV.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME62/vietnamese/PRMDIV.pdf" target="_blank">Vietnamese</a> as well.</h3>


Let's denote $S(x)$ by the sum of prime numbers that divides $x$.

You are given an array $a_1, a_2, \ldots, a_n$ of $n$ numbers, find the number of pairs $i, j$ such that $i \neq j$, $a_i$ divides $a_j$ and $S(a_i)$ divides $S(a_j)$.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- First line of each testcase contains one integer $n$ — number of elements of the array.
- Second line of each testcase contains $n$ space-separated integers $a_1, a_2, \ldots, a_n$.

###Output:
For each testcase, output in a single line number of pairs that each of it satisfies given conditions.

###Constraints 
- $1 \leq T \leq 100$
- $2 \leq n, a_i \leq 10^6$
- the sum of $n$ for all test cases does not exceed $10^6$

###Subtasks
**Subtask #2 (20 points):** $2 \leq n \leq 100$, $2 \leq a_i \leq 10^4$

**Subtask #2 (80 points):** original contsraints

###Sample Input:
```
1
5
2 30 2 4 3
```

###Sample Output:
```
6
```
###EXPLANATION:
$S(2) = 2, S(30) = 2 + 3 + 5 = 10, S(4) = 2, S(3) = 3$. So using this information, the pairs of indicies are $(1,2)$, $(1, 3)$, $(1, 4)$, $(3, 1)$, $(3, 2)$, $(3, 4)$.