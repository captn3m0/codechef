---
{"category_name":"easy","problem_code":"BINGAME","problem_name":"1-2 Game","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"13-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>There are two players $P_1$, $P_2$ playing a game on an array $A$ which has $n$ positive integers: $A_1, A_2, \ldots, A_n$. Both the players takes turns alternatively, and $P_1$ goes first. Rules of the game are as follows.

- In $P_1$’s turn, he should choose any element $A_i$ which is $\ge 1$, and subtract $1$ from it.
- In $P_2$’s turn, he should choose any element $A_i$ which is $\ge 2$, and subtract $2$ from it.
- The player who is not able to make a move loses.
Given the array $A$, find the number of different indices $i$ such that that $P_1$ can subtract from $A_i$ in his first turn, and end up winning the game, if both the players play optimally after this.

### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains an integer $n$.
- The second line of each test case contains $n$ space-separated integers denoting the array $A$.

### Output
For each test case, output an integer corresponding to the number of possible first moves of $P_1$ that lead him to win.

###Constraints
- $1 \le T \le 10^5$
- $1 \le n \leq  10^5$
- $1 \le A_i \leq 10^5$
- Sum of $n$ over all the test cases doesn't exceed $10^6$

### Example Input
```
3
1
1
1
3
2
1 2
```

### Example Output
```
1
0
1
```

###Explanation
**Testcase 1**: The array is {1}. $P_1$ has no choice but to pick the element and subtract 1 from it. The resulting array is {0}, and now $P_2$ is unable to make a move. Hence $P_1$ wins, and there was only one winning first move. Hence the answer is 1.

**Testcase 2**: The array is {3}. $P_1$ has no choice but to pick the element and subtract 1 from it. The resulting array is {2}, and now $P_2$ has no choice but to subtract 2 from it. The resulting array is {0}, and now $P_1$ is unable to make a move. Hence $P_1$ loses.There is no starting move for $P_1$ which leads to his victory. Hence the answer is 0.

**Testcase 3**: The array is {1, 2}. $P_1$ has two choices. Either subtract 1 from 1 or subtract 1 from 2. 
- Suppose he subtracts 1 from the first element, then the resulting array is {0, 2}, and now $P_2$ has no choice but to subtract 2 from the second element. The resulting array is {0, 0}, and now $P_1$ is unable to make a move. Hence $P_1$ loses in this case.
- But suppose he subtracts 1 from the second element, then the resulting array is {1, 1}, and now $P_2$ is unable to make a move. Hence $P_1$ wins in this case.

Thus, there is exactly one starting move for $P_1$ which leads to his victory. Hence the answer is 1.