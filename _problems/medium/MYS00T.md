---
{"category_name":"medium","problem_code":"MYS00T","problem_name":"Mystery Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mrkerim","problem_tester":null,"date_added":"18-04-2019","tags":{"0":"centroid","1":"cook105","2":"cookoff","3":"data","4":"easy","5":"interactive","6":"mrkerim"},"editorial_url":"https://discuss.codechef.com/problems/MYS00T","time":{"view_start_date":1555871402,"submit_start_date":1555871402,"visible_start_date":1555871402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK105/hindi/MYS00T.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK105/mandarin/MYS00T.pdf), [Russian](http://www.codechef.com/download/translated/COOK105/russian/MYS00T.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK105/vietnamese/MYS00T.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK105/bengali/MYS00T.pdf) as well.

**This is an interactive problem.**

You are given a tree with $N$ vertices (numbered $1$ through $N$). Each vertex has a value; let's denote the value of vertex $i$ by $a_i$. Vertex $v$ is a *bad adjacent* of vertex $u$ if there is an edge between vertices $u$ and $v$ and $a_v$ is strictly greater than $a_u$.

Your task is to find a vertex without any bad adjacent or determine that there is no such vertex. You do not know the values $a_1, a_2, \ldots, a_N$, but you may ask up to $20$ questions.

In each question, you should choose a vertex $x$; the grader responds with the number of some bad adjacent vertex of vertex $x$ or with $-1$ if $x$ does not have any bad adjacent.

### Interaction
- First, you should read a line containing a single integer — the number of test cases $T$. The description of interaction for $T$ test cases follows.
- For each test case, first, you should read a line containing a single integer $N$.
- Then, you should read $N-1$ lines. Each of these lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.
- Then, you may ask questions.
    - To ask a question, you should print a line containing two space-separated integers $1$ and $x$ ($1 \le x \le N$).
    - Then, you should read a line containing a single integer $y$.
    - If the question was invalid or if you asked too many questions, $y = -2$. If $x$ has no bad adjacent, $y = -1$. Otherwise, $y$ is the number of a bad adjacent of $x$.
- When you have determined the answer, you should print a line containing two space-separated integers $2$ and $x$. If there is no vertex without a bad adjacent, $x$ should be $-1$; otherwise, $x$ should be the number of a vertex without a bad adjacent.
- Finally, you should read a line containing a single integer: $1$ if your answer is correct or $-2$ if it is incorrect. If your answer is correct, you should continue solving the remaining test cases.

Note that when you receive $-2$ (either as the response to a question or to your answer), you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict.

Don't forget to flush the output after printing each line!

### Constraints 
- $1 \le T \le 100$
- $2 \le N \le 2 \cdot 10^5$
- $1 \le a_i \le 2 \cdot 10^9$ for each valid $i$
- $1 \le u, v \le N$
- the sum of $N$ over all test cases does not exceed $6 \cdot 10^5$

### Example
```
Grader                You
2
3
1 2
1 3                     					
                      1 1
2
                      1 2
-1
                      2 2
1
4
1 2
2 3
2 4
                      1 1
2
                      1 2
-1
                      2 2
1

```

### Explanation
**Example case 1:** The values of vertices in the tree are $a_1 = 3$, $a_2 = 10$, $a_3 = 20$. Note that the answer to the first query could have been $3$ instead of $2$ as well.

**Example case 2:** The values of vertices in the tree are $a_1 = 4$, $a_2 = 9$, $a_3 = 3$ and $a_4 = 3$.
