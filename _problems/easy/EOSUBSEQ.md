---
{"category_name":"easy","problem_code":"EOSUBSEQ","problem_name":"Even Odd subsequences","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given an array $a$ of length $n$. A subsequence of this array is valid, if it satisfies these two conditions:
- There shouldn't be any two even numbers within a distance of $K$, both which have been chosen in the subsequence. i.e. there shouldn't be two indices $i, j$ such that $a_i$ and $a_j$ are even, $|i - j| \leq K$ and $a_i$ and $a_j$ are in the subsequence. 
- Similarly, there shouldn't be any two odd numbers within a distance of $K$, both which have been chosen in the subsequence

The sum of a subsequence is the sum of all the numbers in it. Your task is find the maximum sum possible in a valid subsequence of the given array. Print this maximum sum.


### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains two space-separated integers $n, k$.
- The second line of each test case contains $n$ space-separated integers denoting the array $a$.

### Output
For each test case, output an integer corresponding to the answer of the problem.

###Constraints
- $1 \le T \le 10^5$
- $1 \le n \leq 10^5$
- $1 \le k \leq  n$
- $1 \le a_i \leq 10^9$
- Sum of $n$ over all the test cases doesn't exceed $10^6$

### Example Input
```
3
1 1
3
2 1
2 2
5 2
1 2 3 4 6
```

### Example Output
```
3
2
11
```

###Explanation:
**Testcase 2**: Only one of the two 2s can be chosen. Hence the answer is 2.

**Testcase 3**: The subsequence containing the second, third and fifth numbers is a valid subsequence, and its sum is 2+3+6 = 11. You can check that this is the maximum possible, and hence is the answer.