---
{"category_name":"hard","problem_code":"EXPREP","problem_name":"Expected Repetitions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\naaa\r\n1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1\r\nabab\r\n1 2 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1","output":"499122179\r\n698771051","explanation":"Let $W(s)$ and $P(s)$ denote the weight and power of a string $s$ respectively.\r\n\r\n**Example case 1:** There are $3$ contiguous substrings \u0022a\u0022, $2$ contiguous substrings \u0022aa\u0022 and $1$ contiguous substring \u0022aaa\u0022.\r\n- \u0022a\u0022 is chosen with probability $3/6$; we have $P(\\mathrm{a}) = W(\\mathrm{a}) = 1$\r\n- \u0022aa\u0022 is chosen with probability $2/6$; $P(\\mathrm{aa}) = W(\\mathrm{a}) + W(\\mathrm{aa}) = 1 + 2 = 3$\r\n- \u0022aaa\u0022 is chosen with probability $1/6$; $P(\\mathrm{aaa}) = W(\\mathrm{a}) + W(\\mathrm{aa}) + W(\\mathrm{aaa}) = 1 + 2 + 3 = 6$\r\n\r\nThe expected power is $(3 \\cdot 1 + 2 \\cdot 3 + 1 \\cdot 6) / 6 = 15 / 6$.\r\n\r\n**Example case 2:** The contiguous substrings are \u0022a\u0022, \u0022b\u0022, \u0022ab\u0022, \u0022ba\u0022, \u0022aba\u0022, \u0022bab\u0022, \u0022abab\u0022; the first three of them occur twice. We have $P(\\mathrm{a}) = W(\\mathrm{a}) = 1$, $P(\\mathrm{b}) = W(\\mathrm{b}) = 2$, $P(\\mathrm{ab}) = W(\\mathrm{ab}) = 1 + 2 = 3$, $P(\\mathrm{ba}) = W(\\mathrm{ba}) = 3$, $P(\\mathrm{aba}) = W(\\mathrm{ab}) + W(\\mathrm{aba}) = 3 + 4 = 7$, $P(\\mathrm{bab}) = W(\\mathrm{ba}) + W(\\mathrm{bab}) = 3 + 5 = 8$ and $P(\\mathrm{abab}) = W(\\mathrm{ab}) + W(\\mathrm{abab}) = 3 + 6 = 9$.\r\n\r\nThe expected power is $(2 \\cdot P(\\mathrm{a}) + 2 \\cdot P(\\mathrm{b}) + 2 \\cdot P(\\mathrm{ab}) + P(\\mathrm{ba}) + P(\\mathrm{aba}) + P(\\mathrm{bab}) + P(\\mathrm{abab})) / 10 = 39 / 10$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"aviroop123","problem_tester":"","date_added":"2-06-2020","tags":{"0":"aviroop123","1":"aviroop123","2":"hard","3":"july20"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXPREP","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXPREP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/EXPREP.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/EXPREP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/EXPREP.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/EXPREP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/EXPREP.pdf) as well. 

You are given a string $S$ with length $N$ that contains only the $26$ lowercase English letters. You are also given a sequence $W_1, W_2, \ldots, W_{26}$ of weights corresponding to these letters in the order from 'a' to 'z', i.e. $W_1$ is the weight of 'a', $W_2$ is the weight of 'b' and so on.

We define the *weight* of a string as the sum of weights of all characters present in it. If a character occurs multiple times in this string, its weight is also counted multiple times.

Next, we define the *power* of a string $s$ as the sum of weights of all strings $r$ such that $s$ can be represented as $r + r + \ldots + r + p$, where $+$ denotes string concatenation and $p$ is a prefix of $r$ (possibly empty).

Consider a contiguous substring of $S$ chosen uniformly randomly among all its $N(N+1)/2$ contiguous substrings. Find the expected value of the power of such a substring. The expected power can be represented as a fraction $P / Q$, where $P$ and $Q$ are positive integers and $Q$ is coprime with $998,244,353$. You should calculate $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $S$.
- The second line contains $26$ space-separated integers $W_1, W_2, \ldots, W_{26}$.

### Output
For each test case, print a single line containing one integer $P \cdot Q^{-1}$ modulo $998,244,353$.

### Constraints
- $1 \le N \le 500,000$
- $1 \le W_i \le 10^9$ for each valid $i$
- $S$ contains only lowercase English letters
- the sum of $|S|$ over all test cases does not exceed $500,000$

### Subtasks
**Subtask #1 (10 points):**
- $N \le 100$
- the sum of $|S|$ over all test cases does not exceed $1,000$

**Subtask #2 (20 points):**
- $N \le 2,000$
- the sum of $|S|$ over all test cases does not exceed $20,000$

**Subtask #3 (70 points):** original constraints

### Example Input
```
2
aaa
1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1
abab
1 2 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1
```

### Example Output
```
499122179
698771051
```

### Explanation
Let $W(s)$ and $P(s)$ denote the weight and power of a string $s$ respectively.

**Example case 1:** There are $3$ contiguous substrings "a", $2$ contiguous substrings "aa" and $1$ contiguous substring "aaa".
- "a" is chosen with probability $3/6$; we have $P(\mathrm{a}) = W(\mathrm{a}) = 1$
- "aa" is chosen with probability $2/6$; $P(\mathrm{aa}) = W(\mathrm{a}) + W(\mathrm{aa}) = 1 + 2 = 3$
- "aaa" is chosen with probability $1/6$; $P(\mathrm{aaa}) = W(\mathrm{a}) + W(\mathrm{aa}) + W(\mathrm{aaa}) = 1 + 2 + 3 = 6$

The expected power is $(3 \cdot 1 + 2 \cdot 3 + 1 \cdot 6) / 6 = 15 / 6$.

**Example case 2:** The contiguous substrings are "a", "b", "ab", "ba", "aba", "bab", "abab"; the first three of them occur twice. We have $P(\mathrm{a}) = W(\mathrm{a}) = 1$, $P(\mathrm{b}) = W(\mathrm{b}) = 2$, $P(\mathrm{ab}) = W(\mathrm{ab}) = 1 + 2 = 3$, $P(\mathrm{ba}) = W(\mathrm{ba}) = 3$, $P(\mathrm{aba}) = W(\mathrm{ab}) + W(\mathrm{aba}) = 3 + 4 = 7$, $P(\mathrm{bab}) = W(\mathrm{ba}) + W(\mathrm{bab}) = 3 + 5 = 8$ and $P(\mathrm{abab}) = W(\mathrm{ab}) + W(\mathrm{abab}) = 3 + 6 = 9$.

The expected power is $(2 \cdot P(\mathrm{a}) + 2 \cdot P(\mathrm{b}) + 2 \cdot P(\mathrm{ab}) + P(\mathrm{ba}) + P(\mathrm{aba}) + P(\mathrm{bab}) + P(\mathrm{abab})) / 10 = 39 / 10$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>