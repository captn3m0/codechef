---
{"category_name":"easy","problem_code":"SORTALGO","problem_name":"Pseudo Sorting Algorithm","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"13-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef has devised a new algorithm which works as follows. It takes an array $a$ with $n$ integers ($a_0, a_1, \ldots, a_{n-1}$), and returns another array $b$.

pseudo_sort($a$):
- Array $b$ is initially empty.
- For i = 0; i $\leq n$-1; i++:
    - If $b$ is empty, append $a_i$ to $b$.
    - Otherwise check if $a_i \ge$ last element of $b$
        - If yes:
            - Append $a_i$ to $b$. 
        - If no:
            - Do nothing and continue
- Return $b$


This algorithm will return the array $b$ whose elements are sorted in non-decreasing order.

Your task is to delete at most one element from the array $a$ such that after calling this function on the modified array $a$, the length of the returned array $b$ is maximum possible. Return the maximum possible length of the returned array.


### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains an integer $n$.
- The second line of each test case contains $n$ space-separated integers denoting the array $a$.

### Output
For each test case, output the answer in a new line.

###Constraints
- $1 \le T \le 10^5$
- $1 \le n \leq  10^5$
- $1 \le a_i \leq 10^5$
- Sum of $n$ over all the test cases doesn't exceed $10^6$

### Example Input
```
3
3
1 2 3
5
1 3 2 2 4
5
1 3 4 2 3
```

### Example Output
```
3
4
3
```

###Explanation
**Testcase 1**: Without deleting any element, when the algorithm is run on the original array, the returned array is $b = \{1, 2, 3\}$. This is the longest array possible, and hence the answer is 3.

**Testcase 2**: After deleting the second element, the array $a$ becomes {$1, 2, 2, 4$}. When the algorithm is run on this array , the returned array is $b = \{1, 2, 2, 4\}$. This is the longest array possible, and hence the answer is 4.

**Testcase 3**: After deleting the third element, the array $a$ becomes {$1, 3, 2, 3$}. When the algorithm is run on this array , the returned array is $b = \{1, 3, 3\}$. This is the longest array possible, and hence the answer is 3.