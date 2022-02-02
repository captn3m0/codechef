---
{"category_name":"medium","problem_code":"GIIKLUB","problem_name":"Gii and His Club","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3 10\n2 2 3\n2 11 1\n2 3 1\n5 50\n2 3 4 7 12\n4 5 6 3 5\n5 5 6 9 1\n1 2 9 6 7\n5 6 7 4 7","output":"2\n62","explanation":"**Example case 1:** It takes Gii exactly four moves to get to the club. He has to avoid the $(2, 2)$ neighbourhood, since bringing all his friends from there would immediately exceed the limit. There are only two routes that avoid this neighbourhood and both of them satisfy Chef\u0027s demands:\n- $(1,1), (1,2), (1,3), (2,3), (3,3)$, where Gii brings $2+2+3+1+1 = 9$ friends\n- $(1,1), (2,1), (3,1), (3,2), (3,3)$, where Gii brings $2+2+2+3+1 = 10$ friends","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"thesitzr","problem_tester":null,"date_added":"23-06-2019","tags":{"0":"binary","1":"ltime73","2":"meet","3":"taran_1407","4":"thesitzr"},"problem_difficulty_level":"Medium","best_tag":"Binary Search","editorial_url":"","time":{"view_start_date":1561827602,"submit_start_date":1561827602,"visible_start_date":1561827602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GIIKLUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME73/hindi/GIIKLUB.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME73/bengali/GIIKLUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME73/mandarin/GIIKLUB.pdf), [Russian](https://www.codechef.com/download/translated/LTIME73/russian/GIIKLUB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME73/vietnamese/GIIKLUB.pdf) as well.

In some faraway land, there is a man named Gii, who is often considered the coolest person that has ever lived. One Saturday evening, he decided to go to a club on the other side of his town.

The town is shaped like a grid with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$), where each cell represents a neighbourhood in the city. Let's denote the cell in row $r$ and column $c$ by $(r, c)$. Gii lives in the cell $(1, 1)$ and the club is in the cell $(N, N)$. Gii also has some friends that live in the city; let's denote the number of Gii's friends in cell $(i, j)$ by $A_{i, j}$.

Of course, if Gii is in some cell, he can move directly to another cell only if it shares a side with his current cell. Also, he is in quite a rush, so he will never increase his distance from the club. More formally, from a cell $(i, j)$, he may only move to the cell $(i+1, j)$ or $(i, j+1)$; moving outside the grid is not allowed.

Whenever Gii passes through some neighbourhood (including the one where he lives and the one with the club), all his friends from that neighbourhood decide to go to the club with him, since he is so cool. However, there is a problem: the maximum capacity of the club is $X+1$ people, so Gii may only bring along at most $X$ of his friends. Chef, the club's bouncer, is very strict in imposing this rule (for safety reasons), and Gii does not want to leave any friends outside, so he wants to choose his route to the club in such a way that the number of his friends that arrive at the club with him does not exceed $X$.

Now, Gii is wondering: what is the number of different routes he can take to the club such that he does not bring more than $X$ people with him? Of course, he could immediately calculate this number, but he has better things to do, so he asked you to do it instead.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $X$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $N$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, N}$.

### Output
For each test case, print a single line containing one integer ― the number of ways for Gii to reach the club.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 20$
- $1 \le X \le 10^{15}$
- $1 \le A_{i, j} \le 10^{15}$ for each valid $i, j$

### Subtasks
**Subtask #1 (10 points):** $N \le 10$

**Subtask #2 (30 points):** $X \le 10^5$

**Subtask #3 (60 points):** original constraints

### Example Input
```
2
3 10
2 2 3
2 11 1
2 3 1
5 50
2 3 4 7 12
4 5 6 3 5
5 5 6 9 1
1 2 9 6 7
5 6 7 4 7
```

### Example Output
```
2
62
```

### Explanation
**Example case 1:** It takes Gii exactly four moves to get to the club. He has to avoid the $(2, 2)$ neighbourhood, since bringing all his friends from there would immediately exceed the limit. There are only two routes that avoid this neighbourhood and both of them satisfy Chef's demands:
- $(1,1), (1,2), (1,3), (2,3), (3,3)$, where Gii brings $2+2+3+1+1 = 9$ friends
- $(1,1), (2,1), (3,1), (3,2), (3,3)$, where Gii brings $2+2+2+3+1 = 10$ friends

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>