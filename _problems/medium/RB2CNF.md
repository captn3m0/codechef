---
{"category_name":"medium","problem_code":"RB2CNF","problem_name":"Red-Black Boolean Expression","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3\r\n101\r\n1 2 3\r\n-1 -2\r\n-1 -3\r\n2 1","output":3,"explanation":"**Example case 1:** The expression $B$ is $(\\neg X_1 \\lor \\neg X_2) \\wedge (\\neg X_1 \\lor \\neg X_3) \\wedge (X_2 \\lor X_1)$. Ada generated this expression by painting $X_2$ and $X_3$ in red and $X_1$ in black.\r\n\r\nOne optimal way to make the expression true is changing the value of $X_3$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/BsppQKBaxrQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"14-10-2020","tags":{"0":2,"1":"alei","2":"graphs","3":"medium","4":"mincut","5":"nov20"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/RB2CNF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RB2CNF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/RB2CNF.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/RB2CNF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/RB2CNF.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/RB2CNF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/RB2CNF.pdf) as well.

Let $S$ be a set of $N$ boolean variables $X_1, X_2, \ldots, X_N$ and their negations $\neg X_1, \neg X_2, \ldots, \neg X_N$. You are given the initial values of all variables.

A *2-CNF boolean expression* is defined as a [conjunction](https://en.wikipedia.org/wiki/Logical_conjunction) of clauses, where each clause is a [disjunction](https://en.wikipedia.org/wiki/Logical_disjunction) of two elements of the set $S$. Ada constructed a 2-CNF boolean expression $B$ with $M$ clauses as follows: 
- First, Ada painted each of the variables $X_1, X_2, \ldots, X_N$ with one colour ― either red or black.
- Then, she painted the negated variables ― for each valid $i$, if $X_i$ is painted red, then $\neg X_i$ is painted black, and vice versa (if $X_i$ is black, $\neg X_i$ is painted red).
- Finally, she wrote the boolean expression $B = (P_1 \lor Q_1) \wedge (P_2 \lor Q_2) \wedge \ldots \wedge (P_M \lor Q_M)$, in such a way that no clause contains two variables with the same colour and $P_i \neq \neg Q_i$ for each clause.

Ada wants the expression to evaluate to "true". In order to achieve that, she may change the values of variables; for each valid $i$, the cost of changing the value of $X_i$ (from "true" to "false" or vice versa) is $C_i$. Find the minimum total cost needed to make the expression $B$ evaluate to "true" or determine that it is impossible.

Note that you are not given the colours of variables, but it is guaranteed that the expression $B$ is chosen in such a way that there is at least one valid way to assign colours and the minimum cost is the same for each valid assignment of colours.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains a binary string $S$ with length $N$ describing the initial values of the variables. For each valid $i$, the $i$-th character of $S$ is '1' if $X_i$ is true or '0' if $X_i$ is false.
- The third line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $P_i$ and $Q_i$. For each valid $i$, the variable $X_i$ is represented by the integer $i$ and its negation is represented by $-i$.

### Output
For each test case, print a single line containing one integer ― the minimum cost needed to make the boolean expression evaluate to "true", or $-1$ if it is impossible.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 256$
- $1 \le C_i \le 256$ for each valid $i$
- $1 \le |P_i|, |Q_i| \le N$ for each valid $i$
- each character of $S$ is either '0' or '1'
- the sum of $M$ over all test cases does not exceed $43,210$

### Subtasks
**Subtask #1 (1 points):** $N \le 10$

**Subtask #2 (99 points):** original constraints

### Example Input
```
1
3 3
101
1 2 3
-1 -2
-1 -3
2 1
```

### Example Output
```
3
```

### Explanation
**Example case 1:** The expression $B$ is $(\neg X_1 \lor \neg X_2) \wedge (\neg X_1 \lor \neg X_3) \wedge (X_2 \lor X_1)$. Ada generated this expression by painting $X_2$ and $X_3$ in red and $X_1$ in black.

One optimal way to make the expression true is changing the value of $X_3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>