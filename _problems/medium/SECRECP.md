---
{"category_name":"medium","problem_code":"SECRECP","problem_name":"The Secret Recipe","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"18-06-2019","tags":{"0":"cook107","1":"kingofnumbers"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SECRECP","time":{"view_start_date":1561314600,"submit_start_date":1561314600,"visible_start_date":1561314600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SECRECP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK107/hindi/SECRECP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK107/mandarin/SECRECP.pdf), [Russian](https://www.codechef.com/download/translated/COOK107/russian/SECRECP.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK107/vietnamese/SECRECP.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK107/bengali/SECRECP.pdf) as well.

$N$ people (numbered $1$ through $N$) are trying to catch Chef because he has a secret recipe for the most delicious biryani ever. Chef does not have a number.

The chase starts at time $t = 0$ and takes place on a circular road with length $L$. Positions on the road are described by one real-valued coordinate; for each real number $x$, position $x+L$ is the same as position $x$. Chef's initial position is $X_c = 0$ and for each valid $i$, the initial position of the $i$-th person is $X_i$.

Chef's *maximum velocity* is $V_c$ and for each valid $i$, the maximum velocity of the $i$-th person is $V_i$. At each moment in time, any person (including Chef) with maximum velocity $V$ may choose any velocity $v$ (a real number) between $-V$ and $V$ inclusive, possibly different at different moments in time, independently from all other people and this person's velocity at all other moments in time. All people move continuously — for any very small time difference $\Delta t$, a person at a position $x$ and with a velocity $v$ at time $t$ is approximately at the position $x + v \cdot \Delta t$ at time $t+\Delta t$.

When Chef is at the same position as one of the $N$ people at the same moment in time, he is considered caught and the chase ends. It can be proved that Chef is unable to keep escaping forever; formally, there is a real number $T_u$ such that Chef can always be caught at a finite time which does not exceed $T_u$, regardless of his choices.

The $N$ people want to catch Chef at the smallest possible time, while Chef wants to maximise the time when he will be caught. Find the time at which Chef gets caught if all people act optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $L$ and $V_c$.
- The second line contains $N$ space-separated integers $X_1, X_2, \ldots, X_N$.
- The third line contains $N$ space-separated integers $V_1, V_2, \ldots, V_N$.

### Output
For each test case, print a single line containing one real number — the time when Chef gets caught. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 10^5$
- $2 \le L \le 10^6$
- $1 \le X_i \le L-1$ for each valid $i$
- $1 \le V_i \le 10^6$ for each valid $i$
- $1 \le V_c \le 10^6$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
1
3 10 2
2 5 6
3 1 1
```

### Example Output
```
1.50000000000
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>