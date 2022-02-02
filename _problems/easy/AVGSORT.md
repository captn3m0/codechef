---
{"category_name":"easy","problem_code":"AVGSORT","problem_name":"Average Sorting","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/G6Bs-lkuOpw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"explodingfrz","problem_tester":"","date_added":"21-02-2021","tags":{"0":"easy","1":"explodingfrz","2":"ltime93","3":"observation"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/AVGSORT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=AVGSORT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME93/hindi/AVGSORT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/AVGSORT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/AVGSORT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/AVGSORT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/AVGSORT.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. You may perform the following operation any number of times: select any two adjacent elements $A_i$ and $A_{i + 1}$ and replace one of them with $\frac{A_i + A_{i + 1}}{2}$ (a real number, i.e. without rounding). You may also select each pair of adjacent elements and each element to replace in multiple operations, i.e. any number of times.

Is it possible to make the sequence strictly increasing in a finite number of operations?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"Yes"` if it is possible to make the sequence strictly increasing or `"No"` otherwise (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints 
- $1 \leq T \leq 50,000$
- $2 \leq N \leq 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
4
2
7 4
3
1 2 2
5
5 5 5 5 5
8
7 2 4 1 6 8 3 9
```

### Example Output
```
No
Yes
No
Yes
```

### Explanation
**Example case 1:** Clearly, after any sequence of operations, $A_1 \gt A_2$ holds, so it is impossible to make the sequence strictly increasing.

**Example case 2:**  Choose $A_1$ and $A_2$ and change $A_2$ to $\frac{1+2}{2}$. The sequence after this operation is $[1, 1.5, 2]$, which is a strictly increasing sequence. 

There may also be other valid sequences of operations that give a strictly increasing sequence.

**Example case 3:** No matter which pair of adjacent elements we choose, we can only change one of them to $\frac{5+5}{2} = 5$, so the sequence always remains $[5, 5, 5, 5, 5]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>