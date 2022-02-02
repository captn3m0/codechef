---
{"category_name":"medium","problem_code":"XORPALIN","problem_name":"XOR-ed Palindromes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 3\r\n3 6\r\n2 3","output":"3\r\n7","explanation":"**Example case 1:** The sequence $A$ after the first query is [\u0022011\u0022, \u0022100\u0022, \u0022101\u0022, \u0022110\u0022]. The valid pairs of indices are $(1,2)$, $(2,4)$ and $(1,4)$.\r\n\r\nAfter the second query, the sequence $A$ is [\u0022011\u0022, \u0022100\u0022, \u0022101\u0022, \u0022110\u0022, \u0022010\u0022, \u0022011\u0022]. The valid pairs of indices are $(1,2)$, $(2,4)$, $(1,4)$, $(3,5)$, $(1,6)$, $(2,6)$ and $(4,6)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nishant403","problem_tester":"","date_added":"25-12-2020","tags":{"0":"bitmasking","1":"combinatorics","2":"ltime91","3":"medium","4":"nishant403","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/XORPALIN","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XORPALIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/XORPALIN.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/XORPALIN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/XORPALIN.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/XORPALIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/XORPALIN.pdf) as well.

In this problem, we are working with binary strings with length $K$. A binary string contains only characters '0' and '1'. The bitwise XOR of two such strings $X$ and $Y$ (denoted by $X \oplus Y$) is also a binary string with length $K$.

You have a sequence $A$ of binary strings, indexed from $1$. Initially, it is empty.

You should process $Q$ queries. In each query:
- You are given two integers $L$ and $R$ ($0 \le L \le R \lt 2^K$). For each $i$ ($L \le i \le R$), consider the string which is the binary representation of $i$, possibly padded with leading zeros so its length is exactly $K$; append this string to $A$. In total, you should append $(R - L + 1)$ strings to $A$ in this query.
- Then, compute the number of pairs $(i, j)$ ($1 \le i \lt j \le |A|$) such that $(A_i \oplus A_j)$ is a palindrome. Since this number can be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $Q$ and $K$.
- Each of the next $Q$ lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing one integer — the number of pairs of strings in $A$ such that their XOR is a palindrome, modulo $998,244,353$.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq Q \leq 25,000$
- $1 \leq K \leq 60$
- $0 \leq L \leq R \lt 2^K$
- the sum of $Q$ over all test cases does not exceed $25,000$

### Subtasks
**Subtask #1 (5 points):**
- $K \leq 5$
- the sum of $Q$ over all test cases does not exceed $200$

**Subtask #2 (10 points):** $L = R$

**Subtask #3 (25 points):**
- $K \leq 50$
- the sum of $Q$ over all test cases does not exceed $50$

**Subtask #4 (25 points):**
- $K \le 20$
- the sum of $Q$ over all test cases does not exceed $5,000$

**Subtask #5 (15 points):**
- $K \le 40$
- the sum of $Q$ over all test cases does not exceed $5,000$

**Subtask #6 (20 points):** original constraints

### Example Input
```
1
2 3
3 6
2 3
```

### Example Output
```
3
7
```

### Explanation
**Example case 1:** The sequence $A$ after the first query is ["011", "100", "101", "110"]. The valid pairs of indices are $(1,2)$, $(2,4)$ and $(1,4)$.

After the second query, the sequence $A$ is ["011", "100", "101", "110", "010", "011"]. The valid pairs of indices are $(1,2)$, $(2,4)$, $(1,4)$, $(3,5)$, $(1,6)$, $(2,6)$ and $(4,6)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>