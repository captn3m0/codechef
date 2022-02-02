---
{"category_name":"school","problem_code":"IRSTXOR","problem_name":"Interesting XOR!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n13\r\n10","output":"70\r\n91","explanation":"**Example case 1:** The binary representation of $13$ is \u00221101\u0022. We can use $A = 10$ (\u00221010\u0022 in binary) and $B = 7$ (\u00220111\u0022 in binary). This gives us the product $70$. No other valid pair $(A, B)$ can give us a larger product.\r\n\r\n**Example case 2:** The binary representation of $10$ is \u00221010\u0022. We can use $A = 13$ (\u00221101\u0022) and $B = 7$ (\u00220111\u0022). This gives us the maximum product $91$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/A4VgJ6Yz1fc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"semal10","problem_tester":"","date_added":"28-11-2020","tags":{"0":"bit","1":"cakewalk","2":"greedy","3":"march21","4":"semal10"},"problem_difficulty_level":"Cakewalk","best_tag":"Bit Manipulation","editorial_url":"https://discuss.codechef.com/problems/IRSTXOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=IRSTXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/IRSTXOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/IRSTXOR.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/IRSTXOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/IRSTXOR.pdf) as well.

You are given an integer $C$. Let $d$ be the smallest integer such that $2^d$ is strictly greater than $C$.

Consider all pairs of non-negative integers $(A,B)$ such that $A,B \lt 2^d$ and $A \oplus B = C$ ($\oplus$ denotes the bitwise XOR operation). Find the maximum value of $A \cdot B$ over all these pairs.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $C$.

### Output
For each test case, print a single line containing one integer ― the maximum possible product $A \cdot B$.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq C \leq 10^9$

### Subtasks
**Subtask #1 (30 points):** $1 \leq C \leq 10^3$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
13
10
```

### Example Output
```
70
91
```

### Explanation
**Example case 1:** The binary representation of $13$ is "1101". We can use $A = 10$ ("1010" in binary) and $B = 7$ ("0111" in binary). This gives us the product $70$. No other valid pair $(A, B)$ can give us a larger product.

**Example case 2:** The binary representation of $10$ is "1010". We can use $A = 13$ ("1101") and $B = 7$ ("0111"). This gives us the maximum product $91$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>