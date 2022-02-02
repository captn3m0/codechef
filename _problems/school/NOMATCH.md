---
{"category_name":"school","problem_code":"NOMATCH","problem_name":"Maximise the Sum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bk2dcradle","problem_tester":null,"date_added":"10-12-2018","tags":{"0":"bk2dcradle"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given an array with $N$ integers: $A[1], A[2], \ldots, A[N]$ (where $N$ is even). You are allowed to permute the elements however you want. Say, after permuting the elements, you end up with the array $A'[1], A'[2], \ldots, A'[N]$. Your goal is to maximize the following sum:

$$
|A'[1] - A'[2]| \ + \ |A'[3] - A'[4]| \ + \ ... \ + \ |A'[N - 1] - A'[N]|
$$

Here, $|x|$ denotes the absolute value of $x$.

You have to print the maximum sum achievable.

###Input

- The first line contains $T$, the number of test cases.
- Each test case starts with an integer $N$ in the first line.
- The second line of each test case contains $N$ space separated integers, denoting the values of array $A$.

###Output

For each test case, output the maximum sum achievable in a new line.

###Constraints

- $1 \le T \le 10^5$
- $1 \le N \le 10^5$
- $N$ is even
- $|A[i]| \le 10^9$
- Sum of $N$ over all test cases $\le 2 * 10^5$

###Example Input 1
```
1
4
1 -3 2 -3
```

###Example Output 1
```
9
```

###Explanation 1
The original array is {$1, -3, 2, -3$}. Suppose you permute it and get the array {$2, 1, -3, -3$}. Then the corresponding sum would be $|2 - 1| \ + \ |-3 - (-3)| = 1 + 0 = 1$.

But suppose you permute it differently and get the array {$-3, 2, 1, -3$}. Then the corresponding sum would be $|-3 - 2| \ + \ |1 - (-3)| = 5 + 4 = 9$. You can check that you cannot do any better, and hence the answer is 9.
