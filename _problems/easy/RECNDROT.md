---
{"category_name":"easy","problem_code":"RECNDROT","problem_name":"Chef and Rotation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"31-12-2019","tags":{"0":"easy","1":"greedy","2":"hashing","3":"rc122020","4":"rishup_nitdgp","5":"rishup_nitdgp","6":"sachin_yadav"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RECNDROT","time":{"view_start_date":1588010400,"submit_start_date":1588010400,"visible_start_date":1588010400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECNDROT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a sequence $A_1, A_2, \ldots, A_N$. For a positive integer $M$, sequence $B$ is defined as $B = A*M$ that is, appending $A$ exactly $M$ times. For example, If $A = [1, 2]$ and $M = 3$, then $B = A*M = [1, 2, 1, 2, 1, 2]$

You have to help him to find out the minimum value of $M$ such that the length of the **longest strictly increasing subsequence** is maximum possible.

###Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

###Output:
For each test case, print a single line containing one integer ― the **minimum** value of $M$.

###Constraints 
- $1 \le T \le 500$
- $1 \le N \le 2*10^5$
- $1 \le A_i \le 10^9$
- It's guaranteed that the total length of the sequence $A$ in one test file doesn't exceed $2*10^6$

###Sample Input:
```
3
2
2 1
2
1 2
5
1 3 2 1 2
```

###Sample Output:
```
2
1
2
```

### Explanation:
In the first test case, Choosing $M = 2$ gives $B = [2, 1, 2, 1]$ which has a longest strictly increasing sequence of length $2$ which is the maximum possible.

In the second test case, Choosing $M = 1$ gives $B  = [1, 2]$ which has a longest strictly increasing sequence of length $2$ which is the maximum possible.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>