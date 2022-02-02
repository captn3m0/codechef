---
{"category_name":"school","problem_code":"CENS20D","problem_name":"Priya and AND","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/NspuoCj72X4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"saurabhshadow","problem_tester":"","date_added":"13-07-2020","tags":{"0":"cens2020","1":"saurabhshadow","2":"saurabhshadow"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CENS20D","time":{"view_start_date":1597860000,"submit_start_date":1597860000,"visible_start_date":1597860000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CENS20D","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Priya loves bitwise AND, but she hates programming. Help her solve this problem.

Given an array $A$ of size $N$, let $B_{ij}$  denote the [bitwise AND](https://en.wikipedia.org/wiki/Bitwise_operation#AND) of $A[i]$ and $A[j]$. You have to find the number of pairs $(i, j)$, such that $i \lt j$ and $B_{ij} = A[i]$.

###Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. 
- The first line of each test case consists of a single integer $N$, denoting the Size of Array $A$. 
- The second line of each test case contains $N$ space-separated integers $A_{1}, A_{2}, A_{3} ... A_{N}$.

###Output:
For each test case, output a single line, count of such pairs.

###Constraints 
- $1 \leq T \leq 100$
- $1 \leq N \leq 100$
- $1 \leq A[i] \leq 100$

###Sample Input:
```
2
5
1 1 1 1 1
1
10
```

###Sample Output:
```
10
0
```

###Explanation
**Example case 1:** Number of valid pairs are -$(1,2),(1,3),(1,4),(1,5),(2,3),(2,4),(2,5),(3,4),(3,5)$ and $(4,5)$. Therefore, total valid pairs $= 10$.

**Example case 2:** Since $N=1$, therefore there are no valid pairs.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>