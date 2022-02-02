---
{"category_name":"medium","problem_code":"STRKSORT","problem_name":"Sort String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n2 1\r\naa\r\n5 2\r\nabcde\r\n4 2\r\nabac\r\n10 1\r\nabccbaabca","output":"5\r\n20\r\n11\r\n286","explanation":"**Example case 1:** $f(1)$ and $f(2)$ are both \u0022a\u0022, the lexicographically smallest permutation is $P = [1, 2]$. The answer is $1 \\cdot 1 + 2 \\cdot 2 = 4$.\r\n\r\n**Example case 2:** $f(1)$ is \u0022cde\u0022, $f(2)$ is \u0022ade\u0022, $f(3)$ is \u0022abe\u0022, $f(4)$ is \u0022abc\u0022. The lexicographically smallest valid permutation is $P = [4, 3, 2, 1]$ and the answer is $4 \\cdot 1 + 3 \\cdot 2 + 2 \\cdot 3 + 1 \\cdot 4 = 20$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/eodLNVcW56I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.75,"source_sizelimit":50000,"problem_author":"karpovich","problem_tester":"","date_added":"15-03-2021","tags":{"0":"cook127","1":"karpovich","2":"longest","3":"medium"},"problem_difficulty_level":"Medium","best_tag":"Longest Common Prefix","editorial_url":"https://discuss.codechef.com/problems/STRKSORT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STRKSORT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/STRKSORT.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/STRKSORT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/STRKSORT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/STRKSORT.pdf) as well.

Chef has a string $S$ with length $N$ and integer $K$. Let's consider all strings that can be obtained by erasing $K$ consecutive characters from the original string ― specifically, for each $i$ ($1 \le i \le N-K+1$), let $f(i)$ be the string that is obtained by erasing the characters at positions $i, i+1, \ldots, i + K - 1$.

Consider a permutation $P$ of the integers $1$ through $N - K + 1$. You need to find the lexicographically smallest permutation $P$ such that $f(P_i) \leq f(P_{i+1})$ for each $i$ ($1 \le i \le N - K$).

Since the length of this permutation can be too large, you should only compute its hash: $\sum_{i=1}^{N-K+1} P_i \cdot i$ modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the hash of the lexicographically smallest valid permutation.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq K \lt N \leq 10^7$
- $S$ contains only lowercase English letters
- the sum of $N$ over all test cases does not exceed $10^7$

### Example Input
```
4
2 1
aa
5 2
abcde
4 2
abac
10 1
abccbaabca
```

### Example Output
```
5
20
11
286
```

### Explanation
**Example case 1:** $f(1)$ and $f(2)$ are both "a", the lexicographically smallest permutation is $P = [1, 2]$. The answer is $1 \cdot 1 + 2 \cdot 2 = 4$.

**Example case 2:** $f(1)$ is "cde", $f(2)$ is "ade", $f(3)$ is "abe", $f(4)$ is "abc". The lexicographically smallest valid permutation is $P = [4, 3, 2, 1]$ and the answer is $4 \cdot 1 + 3 \cdot 2 + 2 \cdot 3 + 1 \cdot 4 = 20$. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>