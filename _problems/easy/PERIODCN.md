---
{"category_name":"easy","problem_code":"PERIODCN","problem_name":"Count Periodic Numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"12-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>A positive integer $n$ is said to be periodic if satisfies the following property:

Take the binary representation of $n$ without leading zeros. Then create an array which contains the length of consecutive runs of equal bits in this binary representation. All the elements of this array should be equal. If there are two unequal elements in this array, then $n$ is not periodic.

For example:

Suppose $n = 3$. Its binary representation is 11. And the array created would be {2}, which corresponds to the fact that there are two equal bits in the beginning. This is periodic.

Suppose $n = 51$. Its binary representation is 110011. And the array created would be {2, 2, 2}, which corresponds to the fact that there are two equal bits are the beginning, then the next two are equal, and then the next two are equal. This is also periodic.

Suppose $n = 103$. Its binary representation is 1100111. And the array created would be {2, 2, 3}, which corresponds to the fact that there are two equal bits are the beginning, then the next two are equal, and then the next three are equal. This is not periodic because the array contains two different values (2 and 3).

You are given two integers $L, R$. Find the number of integers in the range $[L, R]$ (both inclusive) that are periodic.

### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains two space-separated integers $L, R$.

### Output
For each test case, output a single line containing an integer corresponding to the number of periodic numbers in the range $[L, R]$.

###Constraints
- $1 \le T \le 10^5$
- $1 \le L, R \leq 10^9$

### Example Input
```
2
3 3
1 10
```

### Example Output
```
1
6
```

###Explanation
**Testcase 1**: The only number between $L$ and $R$ is 3, which is periodic. Hence the answer is 1.

**Testcase 2**: The periodic numbers between 1 and 10 are 1, 2, 3, 5, 7, 10. Since there are six of them, then answer is 6.