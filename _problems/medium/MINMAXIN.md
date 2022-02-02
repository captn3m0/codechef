---
{"category_name":"medium","problem_code":"MINMAXIN","problem_name":"Minimum and Maximum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"farhod_farmon","problem_tester":null,"date_added":"2-10-2019","tags":{"0":"easy","1":"farhod_farmon","2":"ltime80","3":"observation","4":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MINMAXIN","time":{"view_start_date":1579971602,"submit_start_date":1579971602,"visible_start_date":1579971602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINMAXIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME80/hindi/MINMAXIN.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME80/bengali/MINMAXIN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME80/mandarin/MINMAXIN.pdf), [Russian](https://www.codechef.com/download/translated/LTIME80/russian/MINMAXIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME80/vietnamese/MINMAXIN.pdf) as well.

**This is an interactive problem.**

There is a hidden sequence $A_1, A_2, \ldots, A_N$. You need to find indices of two smallest and two largest elements in it. Formally, you should find four integers $a$, $b$, $c$ and $d$ such that there is a permutation $P_1, P_2, \ldots, P_N$ of the integers $1$ through $N$ with the following properties:
- for each $i$ ($1 \le i \lt N$), $A_{P_i} \le A_{P_{i+1}}$ holds
- $P_1 = a$, $P_2 = b$, $P_{N-1} = c$ and $P_N = d$

In order to find such indices, you may ask at most $Q$ questions. In each question, you should choose two integers $i$ and $j$ ($1 \le i, j \le N$); the grader compares the elements $A_i$ and $A_j$ and answers with $i$ if $A_i \le A_j$, or with $j$ if $A_i \gt A_j$.

Note: The grader is adaptive, i.e. there is no initially fixed sequence $A$, but the grader chooses the answers to your questions in such a way that at any time, there is at least one sequence consistent with all the answers. The answer you choose should be correct for every sequence consistent with all the grader's answers. However, it is guaranteed that the grader is deterministic, i.e. its answers are uniquely determined by your questions.

### Interaction
- First, you should read a line containing a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, first, you should read a line containing a single integer $N$. If $N = -2$, it means that your answer to the previous test case was incorrect and your program should terminate immediately.
- Then, you may ask questions.
    - To ask a question, you should print a line containing three space-separated integers $1$, $i$ and $j$ ($1 \le i, j \le N$).
    - Then, you should read a line containing a single integer $x$.
    - If the question was invalid, then $x=-2$. Otherwise, $x$ is the answer to the question, i.e. $i$ if $A_i \le A_j$ or $j$ otherwise.
- When you have determined your answer, you should print a line containing five space-separated integers $2$, $a$, $b$, $c$ and $d$ ($1 \le a, b, c, d \le N$) that satisfy the conditions described above. If there are multiple possible solutions, you may find any one.
- Whenever you read $-2$, your program should terminate immediately to receive the Wrong Answer verdict. Otherwise, you may receive any verdict.

**Don't forget to flush the output after printing each line!**

### Constraints
- $1 \le T \le 5$
- $4 \le N \le 1,000$

### Subtasks
**Subtask #1 (50 points):** $Q = 3N+20$

**Subtask #2 (50 points):** $Q = \lfloor \frac{3}{2}N \rfloor + 20$

### Example
```
Grader                You
1
4
                      1 1 2
1
                      1 2 1
2
                      1 1 3
3
                      1 1 4
4
                      1 3 4
4
                      2 4 3 1 2
```
	
### Explanation
**Example case 1:** The hidden sequence is $A=[3, 3, 2, 1]$. Note that another possible solution is $a = 4$, $b = 3$, $c = 2$ and $d = 1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>