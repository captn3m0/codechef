---
{"category_name":"medium","problem_code":"SUBPROB","problem_name":"Substring Probability","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\nabac\r\naacabc","output":811073537,"explanation":"**Example case 1:** There are $4$ possible prefixes $X$ and $4$ suffixes $Y$. The only combinations that result in a string $Z$ that is a substring of $Q$ are:\r\n- $X$ = \u0022a\u0022, $Y$ = \u0022ac\u0022\r\n- $X$ = \u0022a\u0022, $Y$ = \u0022c\u0022\r\n- $X$ = \u0022ab\u0022, $Y$ = \u0022c\u0022\r\n\r\nThe probability that $Z$ is a substring of $Q$ is $3/16$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/0aB00I8Quls","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":"","date_added":"13-02-2021","tags":{"0":"march21","1":"smartnj"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SUBPROB","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBPROB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/SUBPROB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/SUBPROB.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/SUBPROB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/SUBPROB.pdf) as well.

You are given two strings $P$ and $Q$. Consider some uniformly randomly and independently chosen non-empty prefix $X$ and non-empty suffix $Y$ of $P$. A string $Z$ is formed by concatenating $X$ and $Y$ in this order. Find the probability that $Z$ is a substring of $Q$.

It can be shown that the answer can be represented as a fraction $U/V$, where $U$ and $V$ are non-negative integers and $V$ is coprime with $998,244,353$. You should compute $U \cdot V^{-1}$ modulo $998,244,353$, where $V^{-1}$ denotes the multiplicative inverse of $V$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $P$.
- The second line contains a single string $Q$.

### Output
For each test case, print a single line containing one integer $U \cdot V^{-1}$ modulo $998,244,353$.

### Constraints 
- $1 \leq T \leq 10$
- $1 \leq |P|, |Q| \leq 100,000$
- $P$ and $Q$ contain only lowercase English letters

### Subtasks
**Subtask #1 (25 points):** $|P|, |Q| \leq 2,000$

**Subtask #2 (75 points):** original constraints

### Example Input
```
1
abac
aacabc
```

### Example Output
```
811073537
```

### Explanation
**Example case 1:** There are $4$ possible prefixes $X$ and $4$ suffixes $Y$. The only combinations that result in a string $Z$ that is a substring of $Q$ are:
- $X$ = "a", $Y$ = "ac"
- $X$ = "a", $Y$ = "c"
- $X$ = "ab", $Y$ = "c"

The probability that $Z$ is a substring of $Q$ is $3/16$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>