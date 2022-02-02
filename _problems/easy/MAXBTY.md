---
{"category_name":"easy","problem_code":"MAXBTY","problem_name":"Maximize Letter Beauty","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 5\r\n-1 2 -2 1 -3\r\nQ 3 5\r\nQ 2 4\r\nU 1 1\r\nQ 2 4\r\nQ 3 5","output":"-2\r\n1\r\n2\r\n-1","explanation":"**Example case 1:** For the first query, Chef should read the letters from fans $2$, $3$, $4$ and $5$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"14-03-2020","tags":{"0":"cook116","1":"easy","2":"imanik","3":"prefix","4":"segment","5":"tmwilliamlin"},"problem_difficulty_level":"Easy","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/MAXBTY","time":{"view_start_date":1584901802,"submit_start_date":1584901802,"visible_start_date":1584901802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXBTY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK116/hindi/MAXBTY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK116/mandarin/MAXBTY.pdf), [Russian](https://www.codechef.com/download/translated/COOK116/russian/MAXBTY.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK116/vietnamese/MAXBTY.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK116/bengali/MAXBTY.pdf) as well.

Chef's fans want to celebrate the special occasion of his birthday, so they are writing letters to him. Chef has received $N$ such letters from $N$ fans (numbered $1$ through $N$). Initially, for each valid $i$, he assigned a *beauty* $B_i$ to the letter from the $i$-th fan (these values may even be negative, for letters that are not written well).

Now, Chef wants you to process $Q$ queries on these letters. There are two types of queries:
- `Q x y`: Chef wants to choose integers $l$ and $r$ such that $1 \le l \le x \le y \le r \le N$ and read all the letters from fans $l, l+1, \ldots, r$. Find the maximum possible value of the sum of beauties of the letters he reads.
- `U x v`: Chef reevaluates the beauty of the letter from the $x$-th fan. The new value of $B_x$ becomes $v$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.
- Each of the next $Q$ lines describes a query in the format described above.

### Output
For each query of the first type, print a single line containing one integer ― the maximum sum of beauties.

### Constraints
- $1 \le T \le 5$
- $1 \le N, Q \le 10^5$
- $|B_i| \le 10^9$ for each valid $i$
- $|v| \le 10^9$
- $1 \le x \le y \le N$

### Example Input
```
1
5 5
-1 2 -2 1 -3
Q 3 5
Q 2 4
U 1 1
Q 2 4
Q 3 5
```

### Example Output
```
-2
1
2
-1
```

### Explanation
**Example case 1:** For the first query, Chef should read the letters from fans $2$, $3$, $4$ and $5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>