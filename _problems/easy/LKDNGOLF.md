---
{"category_name":"easy","problem_code":"LKDNGOLF","problem_name":"Golf","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/ZA9orNizDe4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"4-05-2021","tags":{"0":"daanish_adm","1":"math","2":"may21","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LKDNGOLF","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LKDNGOLF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/LKDNGOLF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/LKDNGOLF.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/LKDNGOLF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/LKDNGOLF.pdf) as well.

It's a lockdown. You’re bored in your house and are playing golf in the hallway. 

The hallway has $N + 2$ tiles numbered from $0$ to $N+1$ from left to right. There is a hole on tile number $x$. You hit the ball standing on tile $0$. When you hit the ball, it bounces at lengths of $k$, i.e. the tiles covered by it are $0, k, 2k, \ldots$, and so on until the ball passes tile $N+1$.

If the ball doesn't enter the hole in the first trial, you try again but this time standing on the tile $N+1$. When you hit the ball, it bounces at lengths of $k$, i.e. the tiles covered by it are $(N + 1), (N + 1 - k), (N + 1 - 2k), \ldots$, and so on until the ball passes tile $0$. 

Find if the ball will enter the hole, either in its forward journey or backward journey.

**Note:** The input and output of this problem are large, so prefer using fast input/output methods.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The only line of each test case contains three integers $N, x, k$. 

###Output
Output in a single line, the answer, which should be "YES" if the ball enters the hole either in the forward or backward journey and "NO" if not.

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq x, k \leq N \leq 10^9$

### Subtasks
**Subtask #1 (10 points):** $N \leq 10^2$

**Subtask #2 (90 points):** original constraints

###Sample Input
```
3
5 4 2
5 3 2
5 5 2
```

###Sample Output
```
YES
NO
NO
```
	
###Explanation
In each test case, the tiles covered by the ball for $N = 5$ and $k = 2$ are $\{0, 2, 4, 6\}$ in the forward journey and $\{6, 4, 2, 0\}$ in the backward journey.

Therefore, the answer for the first test case is "YES" since the ball falls in the position of the hole at tile $4$. But the answer for test cases $2$ and $3$ is "NO" since the ball does not fall in the position of the hole.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>