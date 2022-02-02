---
{"category_name":"challenge","problem_code":"COVDSMPL","problem_name":"Covid Sampling (Challenge)","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"taran_1407","problem_tester":"","date_added":"17-05-2020","tags":{"0":"challenge","1":"june20","2":"rajarshi_basu","3":"taran_1407"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COVDSMPL","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COVDSMPL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/COVDSMPL.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/COVDSMPL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/COVDSMPL.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/COVDSMPL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/COVDSMPL.pdf) as well.

**This is an interactive problem.**

You are given the task of finding people infected with COVID-19 among the whole population. There are a total of $N^2$ people and they are standing in a $N \times N$ matrix, one person per cell.

Formally, for each $i$ ($1 \le i \le N$) and $j$ ($1 \le j \le N$), let's denote $A_{i, j} = 1$ if the person standing in the $i$-th row and $j$-th column of the matrix is infected or $A_{i, j} = 0$ otherwise. Additionally, it is known that the infection spreads randomly at first and does not spread anymore ― that is, each person was initially infected with a probability $P/100$, independently from all other people. You do not know the values of $A_{i, j}$ and your task is to find these values.

You may ask up to $Q$ queries ($Q$ is specified in the Constraints section below). In each query, you should choose a submatrix containing all people in rows $r_1$ through $r_2$ and columns $c_1$ through $c_2$ inclusive; the grader responds with the number of infected people in the queried submatrix.

Each query has a cost; see the section Scoring for this cost. You should find out exactly which people are infected and the sum of costs of all queries you make should be as small as possible.

### Interaction
- First, you should read a line containing a single integer $T$ ― the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you must start by reading a line containing two space-separated integers $N$ and $P$.
- Then, you may ask queries.
    - To ask a query, print a line containing five space-separated integers $1$, $r_1$, $c_1$, $r_2$ and $c_2$.
    - Then, you must read a line containing a single integer $X$.
    - If $X = -1$, your query was invalid or you asked more than $Q$ queries. Otherwise, $X$ denotes the number of infected people.
- After asking queries, when you know the matrix $A$:
    - Print a single line containing the integer $2$.
    - Then, print $N$ lines. For each $i$ ($1 \le i \le N$), the $i$-th of these lines should contain $N$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, N}$.
- Finally, you must read a line containing a single integer $X$. If your matrix $A$ was correct, $X = 1$ and you should continue solving the remaining test cases. If it was incorrect, $X = -1$.

At any point when you receieve $X = -1$, you should terminate your program immediately to receive the Wrong Answer verdict. Otherwise, you may receive any verdict.

### Constraints
- $T = 2$
- $N = 60$
- $Q = 5 \cdot N^2 = 18,000$

### Example
```
Grader						You
2
4 2
							1 1 1 4 4
6
							1 2 1 4 4
4
							1 1 3 1 4
2
							1 3 2 3 3
1
							2
							0 0 1 1
							1 0 0 1
							0 0 1 0
							1 0 0 0
1
4 2
							1 1 1 4 4
6
							1 2 1 4 4
5
							1 1 3 1 4
1
							1 3 2 3 3
0
							2
							0 0 1 0
							1 0 0 1
							0 0 0 1
							1 0 1 0
1
```

### Explanation
**Example case 1:** Note that this test case cannot appear in the actual test data because $N = 4$. It is only given for the sake of illustrating the interaction between your program and the grader.

### Test Data Generation
There are four types of tests and five test files for each type.
- **Type 1:** $P = 2$
- **Type 2:** $P = 5$
- **Type 3:** $P = 10$
- **Type 4:** $P = 15$

In each test case and for each valid $i$ and $j$, $A_{i, j}$ is chosen to be $1$ with probability $P/100$ or $0$ with probability $(100-P)/100$ independently from all other values.

### Scoring
The cost of asking a query about a submatrix with $r_2-r_1+1 = A$ rows and $c_2-c_1+1 = B$ columns is $$\left\lceil \frac{(2N-A)(2N-B)}{1+X} \right\rceil \,,$$ where $X$ denotes the number of infected people in this submatrix.

The score of a test case is the sum of costs of all queries you make. The score of a test file is the sum of scores of all test cases. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are twenty test files. During the contest, the displayed score will account for exactly one test file of each type, i.e. your score reflects your submission's performance on 20% (4/20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 16 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>