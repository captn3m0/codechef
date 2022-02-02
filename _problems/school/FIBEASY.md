---
{"category_name":"school","problem_code":"FIBEASY","problem_name":"Easy Fibonacci","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n9","output":3,"explanation":"**Example case 1:** The first $N$ Fibonacci numbers are $(0, 1, 1, 2, 3, 5, 8, 13, 21)$. The sequence $D$ is $(0, 1, 1, 2, 3, 5, 8, 3, 1) \\rightarrow (1, 2, 5, 3) \\rightarrow (2, 3) \\rightarrow (3)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinmathew","problem_tester":null,"date_added":"24-05-2019","tags":{"0":"anand20","1":"easy","2":"fibonacci","3":"kevinmathew","4":"modulo","5":"sept19"},"problem_difficulty_level":"Easy","best_tag":"Fibonacci Numbers","editorial_url":"https://discuss.codechef.com/problems/FIBEASY","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FIBEASY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/FIBEASY.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/FIBEASY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/FIBEASY.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/FIBEASY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/FIBEASY.pdf) as well.

The **Fibonacci sequence** $F_0, F_1, \ldots$ is a special infinite sequence of non-negative integers, where $F_0 = 0$, $F_1 = 1$ and for each integer $n \ge 2$, $F_n = F_{n-1} + F_{n-2}$.

Consider the sequence $D$ of the last decimal digits of the first $N$ Fibonacci numbers, i.e. $D = (F_0 \% 10, F_1 \% 10, \ldots, F_{N-1} \% 10)$. Now, you should perform the following process:
- Let $D = (D_1, D_2, \ldots, D_l)$.
- If $l = 1$, the process ends.
- Create a new sequence $E = (D_2, D_4, \ldots, D_{2 \lfloor l/2 \rfloor})$. In other words, $E$ is the sequence created by removing all odd-indexed elements from $D$.
- Change $D$ to $E$.

When this process terminates, the sequence $D$ contains only one number. You have to find this number.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer ― the last remaining number.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^{18}$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le T \le 10^5$
- $1 \le N \le 10^7$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
9
```

### Example Output
```
3
```

### Explanation
**Example case 1:** The first $N$ Fibonacci numbers are $(0, 1, 1, 2, 3, 5, 8, 13, 21)$. The sequence $D$ is $(0, 1, 1, 2, 3, 5, 8, 3, 1) \rightarrow (1, 2, 5, 3) \rightarrow (2, 3) \rightarrow (3)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>