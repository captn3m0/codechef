---
{"category_name":"easy","problem_code":"ENGXOR","problem_name":"XOR Engine","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n6 1\r\n4 2 15 9 8 8\r\n3","output":"2 4","explanation":"**Example case 1:** The elements of the sequence $B$ are $P \\oplus 4 = 7$, $P \\oplus 2 = 1$, $P \\oplus 15 = 12$, $P \\oplus 9 = 10$, $P \\oplus 8 = 11$ and $P \\oplus 8 = 11$. The elements which have an even number of $1$-s in the binary representation are $12$ and $10$, while the elements with an odd number of $1$-s are $7$, $1$, $11$ and $11$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/efYb-pAgUbU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"saurabhshadow","problem_tester":"","date_added":"14-10-2019","tags":{"0":"bit","1":"march20","2":"saurabhshadow","3":"simple","4":"tmwilliamlin"},"problem_difficulty_level":"Simple","best_tag":"Bit Manipulation","editorial_url":"https://discuss.codechef.com/problems/ENGXOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ENGXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/ENGXOR.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/ENGXOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/ENGXOR.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/ENGXOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/ENGXOR.pdf) as well.

A sophomore Computer Science student is frustrated with boring college lectures. Professor X agreed to give him some questions; if the student answers all questions correctly, then minimum attendance criteria will not apply to him.

Professor X chooses a sequence $A_1, A_2, \ldots, A_N$ and asks $Q$ queries. In each query, the student is given an integer $P$; he has to construct a sequence $B_1, B_2, \ldots, B_N$, where $P \oplus A_i = B_i$ for each valid $i$ ($\oplus$ denotes bitwise XOR), and then he has to find the number of elements of this sequence which have an even number of $1$-s in the binary representation and the number of elements with an odd number of $1$-s in the binary representation. Help him answer the queries.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- $Q$ lines follow. Each of these lines contains a single integer $P$ describing a query.

### Output
For each query, print a single line containing two space-separated integers ― the number of elements with an even number of $1$-s and the number of elements with an odd number of $1$-s in the binary representation.

### Constraints
- $1 \le T \le 100$
- $1 \le N, Q \le 10^5$
- $ T \cdot (N+Q) \leq 4 \cdot 10^6 $
- $1 \le A_i \le 10^8$ for each valid $i$
- $1 \le P \le 10^5$

**The input/output is quite large, please use fast reading and writing methods.**

### Subtasks
**Subtask #1 (30 points):** $N, Q \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
6 1
4 2 15 9 8 8
3
```

### Example Output
```
2 4
```

### Explanation
**Example case 1:** The elements of the sequence $B$ are $P \oplus 4 = 7$, $P \oplus 2 = 1$, $P \oplus 15 = 12$, $P \oplus 9 = 10$, $P \oplus 8 = 11$ and $P \oplus 8 = 11$. The elements which have an even number of $1$-s in the binary representation are $12$ and $10$, while the elements with an odd number of $1$-s are $7$, $1$, $11$ and $11$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>