---
{"category_name":"easy","problem_code":"CIRMERGE","problem_name":"Circular Merging","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n3\n10 10 1","output":32,"explanation":"- $[10,10,1] \\rightarrow [10, 11]$, penalty:  $11$\n- $[10,11] \\rightarrow [21]$, penalty:  $21$\n- Total penalty: $11+21=32$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/YquHRBZBN1o","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":"","date_added":"15-06-2019","tags":{"0":"dynamic","1":"easy","2":"erfaniaa","3":"july19","4":"long"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CIRMERGE","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CIRMERGE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/CIRMERGE.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/CIRMERGE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/CIRMERGE.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/CIRMERGE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/CIRMERGE.pdf) as well.

$N$ integers $A_1, A_2, \ldots, A_N$ are placed in a circle in such a way that for each valid $i$, $A_i$ and $A_{i+1}$ are adjacent, and $A_1$ and $A_N$ are also adjacent.

We want to repeat the following operation exactly $N-1$ times (until only one number remains):
- Select two adjacent numbers. Let's denote them by $a$ and $b$.
- Score $a+b$ penalty points.
- Erase both $a$ and $b$ from the circle and insert $a+b$ in the space between them.

What is the minimum number of penalty points we can score?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer — the minimum number of penalty points.

### Constraints 
- $1 \le T \le 10$
- $2 \le N \le 400$
- $1 \le a_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):**
- $2 \le N \le 10$
- $a_i \le 10$ for each valid $i$

**Subtask #2 (10 points):**
- $2 \le N \le 25$
- $a_1, a_2, \ldots, a_N$ are distinct powers of $2$ (including $1$)

**Subtask #3 (10 points):** $2 \le N \le 100$

**Subtask #4 (70 points):** original constraints

### Example Input
```
1
3
10 10 1
```

### Example Output
```
32
```

### Explanation

- $[10,10,1] \rightarrow [10, 11]$, penalty:  $11$
- $[10,11] \rightarrow [21]$, penalty:  $21$
- Total penalty: $11+21=32$


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>