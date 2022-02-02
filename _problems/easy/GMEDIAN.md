---
{"category_name":"easy","problem_code":"GMEDIAN","problem_name":"Good Median","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":null,"date_added":"28-10-2018","tags":{"0":"combinatorics","1":"easy","2":"factorial","3":"modular","4":"nov18","5":"taran_1407","6":"teja349"},"editorial_url":"https://discuss.codechef.com/problems/GMEDIAN","time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/GMEDIAN.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/GMEDIAN.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/GMEDIAN.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/GMEDIAN.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/GMEDIAN.pdf) as well.

Raja only participates in contests and does not upsolve, but he claims that he has been upsolving. Chef wants to test if he is really improving, so he asks Raja to solve the following problem.

The median of a sequence of numbers is computed in the following way:
- sort the sequence in non-decreasing order
- if the number of elements of this sequence is odd, the median is its middle element
- if the number of elements is even, the median is the average (arithmetic mean) of its two middle elements

For example, the median of $[1, 3, 2]$ is $2$ and the median of $[2, 3, 3, 2]$ is $(2+3)/2 = 5/2$.

You are given a sequence $A_1, A_2, \dots, A_N$. Let's call a subsequence $A_{i_1}, A_{i_2}, \dots, A_{i_k}$ (for any $k \gt 0$, $1 \le i_1 \lt i_2 \lt \ldots \lt i_k \le N$) *good* if the median of this subsequence is an element of this subsequence. Find the number of good subsequences. Since this number may be large, compute it modulo $1000000007$ ($10^9+7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of good subsequences modulo $10^9+7$.

### Constraints
- $1 \le T \le 30$
- $1 \le N \le 1,000$
- $1 \le A_i \le 2N$ for each valid $i$

### Subtasks
**Subtask #1 (5 points):** $A$ is a permutation of integers $1$ through $N$

**Subtask #2 (25 points):** $1 \le N \le 100$

**Subtask #3 (70 points):** original constraints

### Example Input
```
1
3
2 3 2
```

### Example Output
```
5
```

### Explanation
**Example case 1:** The good subsequences are $[2]$, $[3]$, $[2]$, $[2,2]$, $[2,3,2]$.
