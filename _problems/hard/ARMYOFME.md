---
{"category_name":"hard","problem_code":"ARMYOFME","problem_name":"Army of Me","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"7 5\r\n2 5 4 6 3 7 1\r\n2 4\r\n5 2\r\n1 7\r\n7 6\r\n3 2","output":"3\r\n5\r\n1\r\n7\r\n2","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"8-12-2019","tags":{"0":"binary","1":"jan20","2":"kmaaszraa","3":"kmaaszraa","4":"lazy","5":"observation","6":"persistent","7":"segment","8":"vijju123"},"problem_difficulty_level":"Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/ARMYOFME","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ARMYOFME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/ARMYOFME.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/ARMYOFME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/ARMYOFME.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/ARMYOFME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/ARMYOFME.pdf) as well.

Dr.D has recently been thinking about the phrase "Life is short". He decided to start doing all sorts of exotic stuff he has always wanted to do. But since life is short, he does not have the time to do it all by himself, so he made the Cloninator and used it to create $N$ clones of himself (numbered $1$ through $N$) to help him do all the stuff on his hope-to-do-list. Dr.D has already lined up the clones; for each $i$ ($1 \le i \le N$), the $i$-th clone in the line is the $P_i$-th clone created by Cloninator.

There are $Q$ items on Dr.D's hope-to-do-list, so you should process $Q$ queries. For each query, Dr.D wants to choose some parameters $L$ and $R$ such that $1 \le L \le R \le N$ and send the clones $P_L, P_{L+1}, \ldots, P_R$ to do an exotic activity. Dr.D waits until these clones finish and come back before proceeding with the next item on his list (the next query), so a clone may be picked multiple times in different queries.

The strength of a group of clones is the maximum number of clones in that group such that their positions in the line are consecutive and they can be reordered in such a way that their id-s $P_i$ also become consecutive (they were created consecutively by the Cloninator). Dr.D is wondering if the groups he selects are strong enough for their tasks. For each query, calculate the strength of the group of clones that Dr.D sends to do an exotic activity.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.
- The next $Q$ lines describe queries. Each of these lines contains two space-separated integers $X$ and $Y$; the values of $L$ and $R$ for this query can be calculated as follows:
    - Let $last$ be the answer to the previous query, or $0$ if this is the first query.
    - Calculate $L = ((X + last - 1)\,\%\, N) + 1$.
    - Calculate $R = ((Y + last - 1)\,\%\, N) + 1$.
    - If $L \gt R$, swap $L$ and $R$.

### Output
For each query, print a single line containing one integer ― the strength of the given group.

### Constraints
- $1 \le N, Q \le 5 \cdot 10^5$
- $P_1, P_2, \ldots, P_N$ form a permutation of $1, 2, \ldots, N$.
- $1 \le X, Y \le N$

### Subtasks
**Subtask #1 (21 points):** $N, Q \le 5,000$

**Subtask #2 (79 points):** original constraints

### Example Input
```
7 5
2 5 4 6 3 7 1
2 4
5 2
1 7
7 6
3 2
```

### Example Output
```
3
5
1
7
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>